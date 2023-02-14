<?php 
	error_reporting(E_ALL); ini_set('display_errors', '1');

	//start session
	session_start(); //you need this to unset a session

	$_SESSION['Name'] = "Mark";
	$_SESSION['Age'] = 24;

	echo "Done<br>";
?>