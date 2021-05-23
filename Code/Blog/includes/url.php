<?php
/** Redirects user to desired page
 * @param  String $path The path within the web site to the desired page
 * @return void
 */
function redirect($path){
	// first, checking if protocol is http or https
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}

	// next, getting host
	$host = $_SERVER['HTTP_HOST'];

	// creating absolute path
	$abs_path = $protocol . $host . $path;

	// Using header function to redirect to article page
	header("Location: $abs_path");
	exit;
}
