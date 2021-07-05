<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
	var_dump($_GET);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practicing Forms</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<div id="root">

		<!-- The default method, which is get, is fine for data that is not sensitive.
		The data will appear in the search string and in the browser history. -->
		<form method="get">
			<p>Is this sensitive?</p>
			<input name="is_sensitive">
		</form>

		<!-- Use the post method for forms containing sensitive data like passwords.
		Also for anything that will be used to update or otherwise alter a database.
	 -->
		<form method="post">
			<input name="username" placeholder="Username">
			<input name="password" type="password" placeholder="Password">
			<button>Send</button>

		</form>
	</div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
