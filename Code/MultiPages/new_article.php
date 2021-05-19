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
			<input name="title" id="title" placeholder="New Article Title"
			value="<?= $title; ?>">
		</label>
	</div>

	<div>
		<label>Content:
			<textarea name="content" rows="4" cols="40"
			id="content" placeholder="Article Content"><?= $content; ?></textarea>
		</label>
	</div>

	<div>
		<label>Publication Date:
			<input type="datetime-local" name="published_at" id="published_at"
			value="<?= $published_at ?>">
		</label>
	</div>

	<button>Submit</button>
</form>

<?php

require("includes/footer.php");

?>
