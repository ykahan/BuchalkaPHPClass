<?php

require("includes/database.php");
require("includes/article.php");
require("includes/url.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$conn = getDatabase();
	if (isset($_GET["id"]) && is_numeric($_GET['id'])) {
		$id = $_GET['id'];
		$article = get_article($conn, $id);
		if($article){
			$title = $article['title'];
			$content = $article['content'];
			$published_at = $article['published_at'];
		} else {
			die("Article not found, buddy boy");
		}
	} else {
		$article = null;
		die("ID not provided");
	}

	// using a Prepared Statement to foil SQL injection attacks.
	$sql_query = "DELETE FROM articles WHERE id = ?";

	$prep_stmt = mysqli_prepare($conn, $sql_query);

	if($prep_stmt === false){
		echo mysqli_error($conn);
	} else {
		// binding params to create prepared statement
		mysqli_stmt_bind_param($prep_stmt, "i", $id);

		// executing prepared statement
		if(mysqli_stmt_execute($prep_stmt)){
			redirect("/Code/Blog/index.php");
		} else {
			echo mysqli_stmt_error($prep_stmt);
		}
	}
}

require("includes/header.php");
?>
<h2>Deleting Article</h2>
<form method="POST">
	<p>Are you sure about this?</p>
	<button>Delete This Article</button>
	<a href= "article.php?id=<?= $_GET['id'] ?>">Cancel</a>
</form>
<?php require("includes/footer.php"); ?>
