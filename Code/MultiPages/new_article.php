<?php

require("includes/header.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
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
			<textarea name="content" rows="4" cols="40" id="content"placeholder="Article Content">
			</textarea>
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
