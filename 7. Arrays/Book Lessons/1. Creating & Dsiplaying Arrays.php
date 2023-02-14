<?php
	//creating an array
	$array = array("this", "is", "a", "normal", "array");
	$associativeArray = array(
		'user' => "Netsu", 
		"age" => 24,
		"power_level" => 9001,
		"gender" => "male" 
	);
	echo $array[3] . "<br>";
	echo $associativeArray["user"] . "<br>";

	//editing an array
	$array[2] = "a cool";
	$associativeArray["age"] = 18;
	echo $array[2] . "<br>";
	echo $associativeArray["age"] . "<br>";

	//adding to an array
	$array[5] = "a set location for a new element";
	$array[] = "adds a new element to the end of the array";
	echo "<br>";
	foreach ($array as $arr) {
		echo $arr . "<br>";
	}

	//printing out an array
	print_r($array);
	echo "<br><pre>"; //displays array in a more readable way
	print_r($associativeArray);
	echo "</pre>";
?>