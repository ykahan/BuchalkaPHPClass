<?php

require("includes/header.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	require("includes/database.php");

	$sql_query = "INSERT INTO articles (title, content, published_at)
	VALUES ('" . $_POST['title'] . "',
		'". $_POST['content'] .  "',
		'". $_POST['published_at']."')";

		$results = mysqli_query($conn, $sql_query);

		if($results === false){
			echo mysqli_error($conn);
		} else {
			$id = mysqli_insert_id($conn);
			echo "Inserted record with ID" . $id;
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
