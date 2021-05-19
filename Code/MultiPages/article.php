<?php

require("includes/database.php");
$conn = getDatabase();

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
<?php require("includes/header.php"); ?>
<?php if(empty($article)): ?>
	<p>Article not found </p>
<?php else: ?>
	<h2><?= htmlspecialchars($article["title"]) ?></h2>
	<h3><?= htmlspecialchars($article["content"]) ?></h3>
<?php endif; ?>
<?php require("includes/footer.php"); ?>
