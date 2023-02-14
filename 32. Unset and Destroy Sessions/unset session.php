<?php
	//once you open destroy.php, the session data is deleted
	error_reporting(E_ALL); ini_set('display_errors', '1');

	//start session
	session_start(); //you need this to unset a session

	echo $_SESSION["Name"] . "<br>";

	unset($_SESSION["Age"]); //removes the value from age
	echo $_SESSION["Age"] . "<br>";

	// session_destroy(); //destroys all your sessions
	echo $_SESSION["Name"] . "<br>";
?>