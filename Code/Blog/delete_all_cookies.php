<?php
$num = count($_COOKIE);
echo "Found " . $num . " cookies ";
foreach($_COOKIE as $cookie_key=>$cookie_value){
	echo "Deleting cookie " . $cookie_key . " ";
	setcookie($cookie_key, "", time() - 1);
	unset($_COOKIE[$cookie_key]);
	echo " Deleted cookie " . $cookie_key . " ";
}

if(count($_COOKIE) == 0){
	echo "All cookies deleted";
} else {
	$num = count($_COOKIE);
	echo "Failed to delete " . $num . " cookies";
}
