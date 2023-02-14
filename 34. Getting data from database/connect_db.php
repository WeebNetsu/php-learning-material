<?php
error_reporting(E_ALL); ini_set('display_errors', '1');
	$db_host = "localhost";
	$db_user = "netsu";
	$db_pass = "root";
	$db_name = "tests";

	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) 
	or 
	die('Database details are incorrect');

	echo "Connection Success<br>";

?>