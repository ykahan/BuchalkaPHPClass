<?php

require("includes/database.php");
require("includes/article.php");

$conn = getDatabase();

if (isset($_GET["id"]) && is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$article = get_article($conn, $id);
}
else {
	$article = null;
}

var_dump($article);
