<?php

require("includes/database.php");
require("includes/article.php");

$conn = getDatabase();

if (isset($_GET["id"]) && is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$article = get_article($conn, $id);
	if($article){
		$title = $article['title'];
		$content = $article['content'];
		$published_at = $article['published_at'];
	} else {
		die("Article not found");
	}
}
else {
	$article = null;
	die("ID not provided");
}

require("includes/header.php");
?>
<h2>Edit Article Form</h2>
<?php
require("includes/article_form.php");
require("includes/footer.php");
