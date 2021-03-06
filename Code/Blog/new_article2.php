<?php

require('includes/header.php');
require('includes/database.php');
$errors = [];
$title = "";
$text = "";
$date_published = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$title = $_POST['title'];
	$text = $_POST['text'];
	$date_published = $_POST['date_published'];

	if($title == ""){
		$errors[] = "Article title is required.";
	}

	if($text == ""){
		$errors[] = "Article text is required.";
	}

	if(empty($errors)){

		$sql = "INSERT INTO articles (title, content, published_at)
		VALUES (?, ?, ?)";

		$conn = getDatabase();
		$stmt = mysqli_prepare($conn, $sql);

		if($stmt == false){
			echo mysqli_error($conn);
		} else {
			mysqli_stmt_bind_param($stmt, "sss", $title, $text, $date_published );
			if(mysqli_stmt_execute($stmt)){
				$id = mysqli_insert_id($conn);
				echo "Inserted article with id #" . $id;
			} else {
				echo mysqli_stmt_error($stmt);
			}
		}
	}
}
?>
<h1>The Big Blog Of Stuff</h1>
<h2> New Article </h2>
<?php if(!empty($errors)): ?>
	<ul>
		<?php foreach($errors as $error): ?>
			<li>
				<?= $error ?>
			</li>
		<?php endforeach ?>
	</ul>
<?php endif; ?>
<form method="post">

	<div>
		<label for="title">Title </label>
		<input name="title" id="title" value="<?= $title; ?>">
	</div>

	<br>

	<div>
		<label for="text">Text </label>
		<textarea name="text" id="text"><?= $text; ?></textarea>
	</div>

	<br>

	<div>
		<label for="date_published">Date Published </label>
		<input type="datetime-local" name="date_published" id="date_published" value="<?= $date_published; ?>">
	</div>

	<button>Add Article</button>
</form>

<?php require('includes/footer.php'); ?>
