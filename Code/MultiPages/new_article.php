<?php

require("includes/header.php");
require("includes/database.php");

$errors = [];
<<<<<<< HEAD

=======
>>>>>>> before_validation
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if($_POST['title'] == ""){
		$errors[] = die("Must have title.");
	}
	if($_POST['content'] == ""){
		$errors[] = die("Must have content");
	}
}


<<<<<<< HEAD

if(count($errors) > 0){
	echo "Error message following:";
	var_dump($errors);
}

$conn = getDatabase();
// -- the mysqli_escape_string function automatically escapes any quotation
// -- marks in the values passed in, thus defeating SQL injection attacks
// $sql_query = "INSERT INTO articles (title, content, published_at)
// VALUES ('" . mysqli_escape_string($conn, $_POST['title']) . "',
// 	'". mysqli_escape_string($conn, $_POST['content']) .  "',
// 	'". mysqli_escape_string($conn, $_POST['published_at']) ."')";
=======
	if($_POST['title'] == ''){
		$errors[] = "Title is required";
	}

	if($_POST['content'] == ''){
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
>>>>>>> before_validation


		// $results = mysqli_query($conn, $sql_query);

<<<<<<< HEAD
// using a Prepared Statement to foil SQL injection attacks.
$sql_query = "INSERT INTO articles(title, content, published_at)
VALUES(?, ?, ?)";

$prep_stmt = mysqli_prepare($conn, $sql_query);

// if($results === false){
if($prep_stmt === false){
	echo mysqli_error($conn);
} else {
	// binding params to create prepared statement
	$title = $_POST['title'];
	$content = $_POST['content'];
	$published_at = $_POST['published_at'];
	mysqli_stmt_bind_param($prep_stmt, "sss", $title, $content, $published_at);

	// executing prepared statement
	if(mysqli_stmt_execute($prep_stmt)){

		$id = mysqli_insert_id($conn);
		echo "Inserted record with ID" . $id;
	} else{
		echo mysqli_stmt_error($prep_stmt);
	}
}


?>

<h2>New Article</h2>
<form method="post">
	<div>
		<label>Title:
			<input name="title" id="title" placeholder="New Article Title">
		</label>
	</div>

	<div>
		<label>Content:
			<textarea name="content" rows="4" cols="40"
			id="content" placeholder="Article Content"></textarea>
		</label>
	</div>

	<div>
		<label>Publication Date:
			<input type="datetime-local" name="published_at" id="published_at">
		</label>
	</div>

	<button>Submit</button>
</form>

=======
		// using a Prepared Statement to foil SQL injection attacks.
		$sql_query = "INSERT INTO articles(title, content, published_at)
		VALUES(?, ?, ?)";

		$prep_stmt = mysqli_prepare($conn, $sql_query);

		// if($results === false){
		if($prep_stmt === false){
			echo mysqli_error($conn);
		} else {
			// binding params to create prepared statement
			$title = $_POST['title'];
			$content = $_POST['content'];
			$published_at = $_POST['published_at'];
			mysqli_stmt_bind_param($prep_stmt, "sss", $title, $content, $published_at);

			// executing prepared statement
			if(mysqli_stmt_execute($prep_stmt)){

				$id = mysqli_insert_id($conn);
				echo "Inserted record with ID" . $id;
			} else{
				echo mysqli_stmt_error($prep_stmt);
			}
		}
	}
}

?>

<h2>New Article</h2>
<form method="post">
	<?php if(!empty($errors)): ?>
		<ul>
			<?php foreach($errors as $error): ?>
				<li><?= $error ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<div>
		<label>Title:
			<input  name="title" id="title" placeholder="New Article Title">
		</label>
	</div>

	<div>
		<label>Content:
			<textarea  name="content" rows="4" cols="40"
			id="content"placeholder="Article Content"></textarea>
		</label>
	</div>

	<div>
		<label>Publication Date:
			<input type="datetime-local" name="published_at" id="published_at">
		</label>
	</div>

	<button>Submit</button>
</form>

>>>>>>> before_validation
<?php

require("includes/footer.php");

?>
