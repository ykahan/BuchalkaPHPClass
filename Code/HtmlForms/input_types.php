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
			<div>text: <input type="text"></div>
			<div>password: <input type="password"></div>
			<div>telephone: <input type="tel"></div>
			<div>URL: <input type="url"></div>
			<div>date: <input type="date"></div>
			<div>time: <input type="time"></div>
			<div>week: <input type="week"></div>
			<div>color: <input type="color"></div>
			<div>email: <input type="email"></div>
			<div>month: <input type="month"></div>
			<div>range: <input type="range"></div>
			<div>hidden: <input type="hidden"></div>
			<div>number: <input type="number"></div>
			<div>search: <input type="search"></div>
			<div>datetime-local: <input type="datetime-local"></div>

		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
