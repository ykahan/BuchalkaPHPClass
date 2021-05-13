<?php

require("includes/header.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	require("includes/database.php");


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

	?>

	<h2>New Article</h2>
	<form method="post">
		<div>
			<label>Title:
				<input required name="title" id="title" placeholder="New Article Title">
			</label>
		</div>

		<div>
			<label>Content:
				<textarea required name="content" rows="4" cols="40"
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

	<?php

	require("includes/footer.php");

	?>
