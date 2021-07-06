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
	<title>New User Information</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<div>
				<label>Zipcode: <input required name="zipcode" placeholder="zipcode"></label>
			</div>
			<div>
				<label>Email: <input type="email" name="email" placeholder="email"></label>
			</div>
			<div>
				<label>URL: <input type="url" name="url" placeholder="url"></label>
			</div>
			<div>
				<label>Number: <input type="number" name="number" placeholder="number"></label>
			</div>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
