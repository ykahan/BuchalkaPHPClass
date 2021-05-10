<?php

include("database.php");

$sql_query = "SELECT *
FROM articles
ORDER BY published_at;";

$query_result = mysqli_query($conn, $sql_query);

if($query_result === false){
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
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
	<?php if (empty($articles)): ?>
		<p>The blog is empty.  Empty! </p>
	<?php else: ?>
	<ol>
		<?php foreach($articles as $article): ?>
			<li>
				<h2>
					<!-- the title becomes a link to the article.php file, but with the id
					included as the query string.  this triggers article.php to look
					up the blog post and put it on the screen. -->
					<a href="article.php?id=<?= $article["id"]; ?>">
						<?= $article["title"] ?>
					</a>
				</h2>
				<h3><?= $article["content"] ?></h3>
			</li>
		<?php endforeach; ?>
		</ol>
	<?php endif; ?>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>