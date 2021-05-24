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
	<p>Article not found</p>
<?php else: ?>
	<h2><?= htmlspecialchars($article["title"]) ?></h2>
	<h3><?= htmlspecialchars($article["content"]) ?></h3>
	<a href= "edit_article.php?id=<?= $article['id'] ?>">Edit Article</a>
<?php endif; ?>
<a href="index.php">Go to index</a>
<a href="new_article.php">Submit New Article</a>
<a href="delete_article.php?id=<?=$article['id']?>">Delete This Article</a>
<?php require("includes/footer.php"); ?>
