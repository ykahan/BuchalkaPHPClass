<?php

$articles = [
	["title" => "Shabbos", "body" => "39 Melachos"],
	["title" => "Nedarim", "body" => "That bread is like a karbon to me"],
	["title" => "Brachos", "body" => "When is zman krias Shema?"]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Some Masechtos</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>

<body>
	<div id="root"></div>
<ul>
	<?php foreach($articles as $article): ?>
		<li>
			<h2><?= $article["title"] ?></h2>
			<h3><?= $article["body"] ?></h3>
		</li>
	<?php endforeach; ?>
</ul>
	<script src="main.js" type="text/javascript"></script>
</body>

</html>
