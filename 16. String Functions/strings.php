<?php
	$line = "Hello World!";
	echo $line . "<br>";

	echo strtolower($line) . "<br>"; //makes everything lowercase
	echo strtoupper($line) . "<br>"; //makes everything uppercase
	echo strlen($line) . "<br>"; //Returns the length of a string
	//replaces a specific word in a string (hello -> goodbye in this case)
	echo str_replace("Hello", "Goodbye", $line) . "<br>"; 
	echo str_replace("lo", "da", $line) . "<br>";
	echo substr($line, 6, 3) . "<br>"; //substr(strToCopyFrom, indexToStartAt, howManyCharacters)
	echo str_word_count($line); //returns amount of words in string
?>