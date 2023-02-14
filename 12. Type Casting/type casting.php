<?php
	// To perminantly change a variable to a different data type, you can do this:
	$test = 8.43; //float

	settype($test, "string");
	echo $test . "<br>";
	settype($test, "integer");
	echo $test . "<br>";
	settype($test, "boolean");
	echo $test . "<br>";

	// to change the variable type for 1 line of code (then change it back) use casting (like in Java)
	$cast = 31.89;

	echo (int)$cast . "<br>";
	echo (string)$cast . "<br>";
	echo (bool)$cast . "<br>";
	echo $cast . "<br>"; //as you can see it only changed it once

	/*Other casting types
	int
	string
	boolean (or bool)
	float
	array		
	object
	*/
?>