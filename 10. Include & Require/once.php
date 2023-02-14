<!DOCTYPE html>
<html>
<head>
	<title>INCLUDE/REQUIRE ONCE</title>
</head>
<body>
	<?php
		//this code will make sure it only prints out on the screen once
		//you can use this instead of normal "include"
		include_once('head.php');
		include_once('head.php');
		include_once('head.php');

		// Same with require_once, it will stop you from importing the same code more than once
		// you can use it with or without ()
		require_once 'head.php';
		echo $page1;
	?>
</body>
</html>