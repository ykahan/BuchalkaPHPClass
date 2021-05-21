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

?>
<?php require("includes/header.php"); ?>
<?php if(empty($article)): ?>
	<p>Article not found </p>
<?php else: ?>
	<h2><?= htmlspecialchars($article["title"]) ?></h2>
	<h3><?= htmlspecialchars($article["content"]) ?></h3>
<?php endif; ?>
<a href="index.php">Go to index</a>
<a href="new_article.php">Submit new article</a>
<?php require("includes/footer.php"); ?>
