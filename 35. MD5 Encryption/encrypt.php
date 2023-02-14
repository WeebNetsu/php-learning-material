<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
	$password = "123pass";
	//md5() -> encrypts string
	//oneway (cannot be converted back)
	$encrypt = md5($password);

	echo "Password before encryption: $password <br> Password after encryption: $encrypt";
?>