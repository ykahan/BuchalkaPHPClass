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
	<title>Pets to Eat</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<div>Dog <input type="checkbox" name="dog" checked></div>
			<div>Cat <input type="checkbox" name="cat"></div>
			<div>Bird <input type="checkbox" name="cat"></div>
			<div>Lizard <input type="checkbox" name="lizard"></div>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
