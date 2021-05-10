<?php

$db_host = "localhost";
$db_name = "cms_buchalka_course";
$db_user = "cms_www";
$db_password = "abcd";

$conn =  mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(mysqli_connect_error()){
	echo mysqli_connect_error();
} else {
}

if(is_numeric($_GET["id"])){
	$sql_query = "SELECT *
	FROM articles
	WHERE id =" . $_GET["id"];

	$query_result = mysqli_query($conn, $sql_query);

	if($query_result === false){
		echo mysqli_error($conn);
	} else {
		$article = mysqli_fetch_assoc($query_result);
	}
}
else {
	$article = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Boilerplate</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
	<h1>A Dynamic Data Driven Blog</h1>
	<div id="root"></div>
	<?php if(empty($article)): ?>
		<p>Article not found </p>
	<?php else: ?>
		<h2><?= $article["title"] ?></h2>
		<h3><?= $article["content"] ?></h3>
	<?php endif; ?>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
