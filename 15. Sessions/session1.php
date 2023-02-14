<?php
	session_start(); // starts a session to store user data

	//store data in these "global" variables
	$_SESSION['name'] = 'John';
	$_SESSION['age'] = 24
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
	<p>I store variables on this page</p>
	<a href="session2.php">Click here</a>
</body>
</html>