<?php

require("includes/database.php");
require("includes/article.php");

$conn = getDatabase();
if (isset($_GET["id"]) && is_numeric($_GET['id'])) {
	$id = $_GET['id'];
	$article = get_article($conn, $id);
	if($article){
		$title = $article['title'];
		$content = $article['content'];
		$published_at = $article['published_at'];
	} else {
		die("Article not found, buddy boy");
	}
} else {
	$article = null;
	die("ID not provided");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$published_at = $_POST['published_at'];

	$errors = validate_article($title, $content, $published_at);

	if(empty($errors)){

		// using a Prepared Statement to foil SQL injection attacks.
		$sql_query = "UPDATE articles SET title = ?, content = ?, published_at = ? WHERE id = ?";

		$prep_stmt = mysqli_prepare($conn, $sql_query);

		if($prep_stmt === false){
			echo mysqli_error($conn);
		} else {
			// binding params to create prepared statement
			mysqli_stmt_bind_param($prep_stmt, "sssi",
			$title, $content, $published_at, $id);

			// executing prepared statement
			if(mysqli_stmt_execute($prep_stmt)){

				// $id = mysqli_insert_id($conn);

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
require("includes/header.php");
?>
<h2>Edit Article Form</h2>
<?php
require("includes/article_form.php");
require("includes/footer.php");
