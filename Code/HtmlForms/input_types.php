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
	<title>Input Types</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">
		<form method="post">
			<div>text: <input type="text" name="text" value="text"></div>
			<div>password: <input type="password" name="password" value="password"></div>
			<div>telephone: <input type="tel" name="telephone"></div>
			<div>URL: <input type="url" name="url" value="url"></div>
			<div>date: <input type="date" name="date" value="date"></div>
			<div>time: <input type="time" name="time" value="time"></div>
			<div>week: <input type="week" name="week" value="week"></div>
			<div>color: <input type="color" name="color" value="color"></div>
			<div>email: <input type="email" name="email" vaue="email"></div>
			<div>month: <input type="month" name="month" value="month"></div>
			<div>range: <input type="range" name="range" value="range"></div>
			<div>hidden: <input type="hidden" name="hidden" value="hidden"></div>
			<div>number: <input type="number" name="number" value="number"></div>
			<div>search: <input type="search" name="search" value="search"></div>
			<div>
				datetime-local:
				<input type="datetime-local" name="datetime-local" value="datetime-local">
			</div>
			<button>Submit</button>

		</form>
		<!-- testing token -->
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
