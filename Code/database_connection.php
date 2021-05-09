<?php

$db_host = "localhost";
$db_name = "cms_buchalka_course";
$db_user = "cms_www";
$db_password = "abcd";

$conn =  mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(mysqli_connect_error()){
	echo mysqli_connect_error();
	// exit;
} else {
	echo "Connected";
}

$sql_query = "SELECT *
								FROM articles
								ORDER BY published_at;";

$query_result = mysqli_query($conn, $sql_query);

if($query_result === false){
	echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
		foreach($articles as $article){
			var_dump($article);
		}
}
