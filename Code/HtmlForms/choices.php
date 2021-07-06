<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Make Some Choices</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<fieldset>
				<legend>Article</legend>
				<div>
					<label for="title">Title</label><input readonly value="This Title Is Set In Stone" type="text" name="title" id="title>"
				</div>
				<div>
					<label for="content">Content</label>
					<textarea name="content" id="content" row="4" cols="40"></textarea>
				</div>
			</fieldset>
			<fieldset>
				<legend>Pick A Color</legend>
				<div></div>
				<input type="radio" name="color" value="blue" id="blue">
				<label for="blue">Blue</label>
				<br>
				<input type="radio" name="color" value="red" id="red" checked>
				<label for="red">Red</label>
				<br>
				<input type="radio" name="color" value="gray" id="gray">
				<label for="gray">Gray</label>
				<br>
				<input type="radio" name="color" value="yellow" id="yellow">
				<label for="yellow">Yellow</label>
				<br>
			</fieldset>
			<fieldset>
				<legend>Countries</legend>
				<input type="radio" name="countries" value="britain" id="britain"><label for="britain">Britain</label><br>
				<input type="radio" name="countries" value="zaire" id="zaire" disabled><label for="zaire">Zaire</label><br>
				<input type="radio" name="countries" value="uruguay" id="uruguay"><label for="uruguay">Uruguay</label><br>
			</fieldset>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
