<?php
	/*
		PHP has a ton of data types such as:
		String; Integer; Float; Boolean; Array; Object; NULL; Resourse
	*/

	// To add one string to another, do this:
	$string1 = 'Hello ';
	$string2 = "World!<br>";

	echo $string1.$string2; // >Hello World!

	$int = 24;
	$float = 32.98;
	$sum = $int + $float;
	echo $sum;

	$bool = true;

	echo "<br>";

	// When a string gets plussed with a number it becomes an integer
	$num1 = "20";
	$num2 = 10;
	$num3 = $num1 + $num2; //>30
	echo $num3;
?>