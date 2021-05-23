<?php

require("includes/header.php");
require("includes/database.php");

$errors = [];
$title = '';
$content = '';
$published_at = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$published_at = $_POST['published_at'];
	if($published_at == ''){
		$published_at = null;
	} else {
		$date_time = date_create_from_format('Y-m-d G:i:s', $published_at);
		if(!$date_time){
			$errors[] = 'Date and/or time improperly formatted';
		} else {
			$date_errors = date_get_last_errors();
			if($date_errors['warning count'] > 0){
				$errors = 'Invalid date and/or time';
			}
		}
	}
	if($title == ''){
		$errors[] = "Title is required";
	}
	if($content == ''){
		$errors[] = "Content is required";
	}

	if(empty($errors)){
		$conn = getDatabase();
		// -- the mysqli_escape_string function automatically escapes any quotation
		// -- marks in the values passed in, thus defeating SQL injection attacks
		// $sql_query = "INSERT INTO articles (title, content, published_at)
		// VALUES ('" . mysqli_escape_string($conn, $_POST['title']) . "',
		// 	'". mysqli_escape_string($conn, $_POST['content']) .  "',
		// 	'". mysqli_escape_string($conn, $_POST['published_at']) ."')";

		// $results = mysqli_query($conn, $sql_query);

		// using a Prepared Statement to foil SQL injection attacks.
		$sql_query = "INSERT INTO articles(title, content, published_at)
		VALUES(?, ?, ?)";

		$prep_stmt = mysqli_prepare($conn, $sql_query);

		// if($results === false){
		if($prep_stmt === false){
			echo mysqli_error($conn);
		} else {
			// binding params to create prepared statement
			mysqli_stmt_bind_param($prep_stmt, "sss", $title, $content, $published_at);

			// executing prepared statement
			if(mysqli_stmt_execute($prep_stmt)){

				$id = mysqli_insert_id($conn);

				// determining absolute path to article page

				// first, checking if protocol is http or https
				if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
					$protocol = 'https://';
				} else {
					$protocol = 'http://';
				}

				// next, getting host
				$host = $_SERVER['HTTP_HOST'];

				// creating absolute path
				$abs_path = $protocol . $host . "/Code/Blog/article.php?id=$id";

				// Using header function to redirect to article page
				header("Location: $abs_path");
				exit;
			} else {
				echo mysqli_stmt_error($prep_stmt);
			}
		}
	}
}

?>

<h2>Add Article Form</h2>
<?php
require("includes/article_form.php");
require("includes/footer.php");
