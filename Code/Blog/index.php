<?php

require("includes/database.php");

$conn = getDatabase();

$sql_query = "SELECT *
FROM articles
ORDER BY id;";

$query_result = mysqli_query($conn, $sql_query);

if($query_result === false){
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
}

?>

<?php require("includes/header.php"); ?>
	<?php if (empty($articles)): ?>
		<p>The blog is empty.  Empty! </p>
	<?php else: ?>
		<a href="new_article.php">Submit New Article</a>
	<ol>
		<?php foreach($articles as $article): ?>
			<li>
				<h2>
					<!-- the title becomes a link to the article.php file, but with the id
					included as the query string.  this triggers article.php to look
					up the blog post and put it on the screen. -->
					<a href="article.php?id=<?= $article["id"]; ?>">
						<?= htmlspecialchars($article["title"]) ?>
					</a>
				</h2>
				<h3><?= htmlspecialchars($article["content"]) ?></h3>
			</li>
		<?php endforeach; ?>
		</ol>
	<?php endif; ?>
<?php require("includes/footer.php"); ?>
