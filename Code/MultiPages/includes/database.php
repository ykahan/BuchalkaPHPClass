<?php

/**
 * Retrieves database connection.
 * Inputs are hard-coded into the function.
 * @return  database connection
 */

function getDatabase(){

	$db_host = "localhost";
	$db_name = "cms_buchalka_course";
	$db_user = "cms_www";
	$db_password = "abcd";

	$conn =  mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if(mysqli_connect_error()){
		echo mysqli_connect_error();
		exit;
	} else {
		return $conn;
	}
}
?>
