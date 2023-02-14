<?php
	echo "Hello<br>";
	// kills the code, so it does not continue after this line
	// Adding a message as a parameter is optional
	die("Optional end message");

	// die() has a counterpart that does EXACTLY the same thing
	exit();
	exit("text parameter");

	echo "World!";
?>