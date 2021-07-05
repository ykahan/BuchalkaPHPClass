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
	<title>Selecting Cars</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<div>
				Multiple Select Box:
				<select name="cars1[]" multiple>
					<option value="ford">Ford</option>
					<option value="toyota">Toyota</option>
					<option value="tesla">Tesla</option>
				</select>
			</div>
			<div>
				Single Select Box: 
				<select name="cars2">
					<option value="mitsubishi">Mitsubishi</option>
					<option value="bmw">BMW</option>
					<option value="jeep">Jeep</option>
				</select>
			</div>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
