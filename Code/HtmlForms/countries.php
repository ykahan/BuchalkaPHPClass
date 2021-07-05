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
	<title>Countries To Conquer</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="POST">
			<select name="countries">
				<optgroup label="Americas">
					<option value="canada">Canada</option>
					<option value="brazil">Brazil</option>
				</optgroup>
				<optgroup label="Europe, Asia, and Africa">
					<option value="france">France</option>
					<option value="zimbabwe">Zimbabwe</option>
					<option value="india">India</option>
				</optgroup>
				<optgroup label="Australia">
				<option value="australia">Australia</option>
			</optgroup>
			</select>
			<button>Submit</button>
		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
