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
	<title>Pick A Color</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<div><p>What's your favorite color?</p></div>
			<input type="radio" name="color" value="blue">Blue<br>
			<input type="radio" name="color" value="red" checked>Red<br>
			<input type="radio" name="color" value="gray">Gray<br>
			<input type="radio" name="color" value="gray">Yellow<br>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
