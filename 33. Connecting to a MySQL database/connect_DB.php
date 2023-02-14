<?php
	error_reporting(E_ALL); ini_set('display_errors', '1');

	$mysql_host = 'localhost'; //server
	$mysql_user = "netsu";
	$mysql_pass = "root";
	$mysql_db = "tests";

	// if you use an '@', then any error that pops up will not be displayed
	@$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db) 
	or 
	die("Database credentials are incorrect");

	echo "Connected Success!<br>";
?>