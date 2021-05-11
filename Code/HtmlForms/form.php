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
		<div>text:<input type="text" name="personal_name"></div>
		<div>password:<input type="password" name="password"></div>
		<div>tel:<input type="tel" name="telephone"></div>
		<div>url:<input type="url" name="url"></div>
		<div>date:<input type="date" name="date"></div>
		<div>time:<input type="time" name="time"></div>
		<div>color:<input type="color" name="color"></div>
		<div>email:<input type="email" name="email"></div>
		<div>month:<input type="month" name="month"></div>
		<div>range:<input type="range" name="range"></div>
		<div>hidden:<input type="hidden" name="hidden"></div>
		<div>number:<input type="number" name="number"></div>
		<div>search:<input type="search" name="search"></div>
		<div>datetime-local:<input type="datetime-local" name="datetime-local"></div>
		<div>textarea:<textarea name="some_text">Placeholder Text</textarea></div>
		<div>
			<select name="degree">
				<option value="computer_science">Comp Science</option>
				<option value="optometry">Optometry</option>
				<option value="marketing">Marketing</option>
			</select>
			<select name="limud[]" multiple>
				<option value="chumash">Chumash</option>
				<option value="gemara">Gemara</option>
				<option value="mussar">Mussar</option>
			</select>
		</div>
		<div>
			<select name="country">
				<optgroup label="Europe">
					<option value="britain">Britain</option>
					<option value="portugal">Portugal</option>
					<option value="switzerland">Switzerland</option>
				</optgroup>
				<optgroup label="North America">
					<option selected value="usa">USA</option>
					<option value="canada">Canada</option>
					<option value="mexico">Mexico</option>
				</optgroup>
			</select>
		</div>
		<div>
			Male<input type="checkbox" value="male" name="male" checked>
		</div>
		<div>
			<p>Do you prefer cats or dogs?</p>
			Cats<input type="radio" name="pref_animal" value="cat"><br>
			Dogs<input type="radio" name="pref_animal" value="dog" checked>
		</div>
		<input name="username">
		<input name="password" type="password">
		<button>Send</button>
	</form>
	<div id="root"></div>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
