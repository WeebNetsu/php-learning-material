<?php
	// gettype() get the data type from a variable
	$null;
	$string = 'Hello';
	$int = 24;
	$float = 3.14159;
	$arr = [24, 45, 11];
	$bool = false;

	echo gettype($null) . "<br>";
	echo gettype($string) . "<br>";
	echo gettype($int) . "<br>";
	echo gettype($float) . "<br>";
	echo gettype($bool) . "<br>";
	echo gettype($arr) . "<p></p>";

	//is_dataType is a way to confirm if something is a specific data type

    // ignore for tutorial
	if(is_int($int)){ //if $int (24) is an integer
		echo "$int is an int";
	}

	// others
	/*is_bool()
	is_string()
	is_float()
	is_array()
	is_object()
	is_resource()
	is_null()*/
?>