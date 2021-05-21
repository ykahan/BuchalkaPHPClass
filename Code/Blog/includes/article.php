<?php

/**
 * [retrieves individual article from articles database]
 * @param  object $conn database connection
 * @param  integer $id   the article ID
 * @return Associative_Array      An associative array containing the
 * requested article, or null if article not found
 */
function get_article($conn, $id){
	$sql = "SELECT * FROM articles WHERE id = ?";
	$stmt = mysqli_prepare($conn, $sql);
	if(!$stmt){
		echo mysqli_error($conn);
	} else {
		mysqli_stmt_bind_param($stmt, "i", $id);
	}
	if(mysqli_stmt_execute($stmt)){
		$result = mysqli_stmt_get_result($stmt);
		return mysqli_fetch_array($result, MYSQLI_ASSOC);
	}
}
