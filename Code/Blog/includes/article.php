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

/**
 * Validates that all needed data exists to perform CRUD
 * operations upon an article
 * @param  String $title        Title, required
 * @param  String $content      Content, required
 * @param  String $published_at  Publication date, optional
 * @return Associative_Array       Array of validation error messages
 */
function validate_article($title, $content, $published_at){
	$errors = array();
	if($published_at == ''){
		$published_at = null;
	} else {
		$date_time = date_create_from_format('Y-m-d G:i:s', $published_at);
		if(!$date_time){
			$errors[] = 'Date and/or time improperly formatted';
		} else {
			$date_errors = date_get_last_errors();
			if($date_errors['warning_count'] > 0){
				$errors = 'Invalid date and/or time';
			}
		}
	}
	if($title == ''){
		$errors[] = "Title is required";
	}
	if($content == ''){
		$errors[] = "Content is required";
	}
	return $errors;
}
