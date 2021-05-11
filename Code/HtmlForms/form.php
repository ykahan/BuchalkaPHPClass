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
<title>HTML Forms</title>
<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
<form method="post">
	<div>text:<input type="text"></div>
	<div>password:<input type="password"></div>
	<div>tel:<input type="tel"></div>
	<div>url:<input type="url"></div>
	<div>date:<input type="date"></div>
	<div>time:<input type="time"></div>
	<div>color:<input type="color"></div>
	<div>email:<input type="email"></div>
	<div>month:<input type="month"></div>
	<div>range:<input type="range"></div>
	<div>hidden:<input type="hidden"></div>
	<div>number:<input type="number"></div>
	<div>search:<input type="search"></div>
	<div>datetime-local:<input type="datetime-local"></div>
<input name="username">
<input name="password" type="password">
<button>Send</button>
</form>
<div id="root"></div>
<script src="main.js" type="text/javascript"></script>
</body>
</html>
