<?php
	$myStr = "Horses goes nay nay but cats do not go nay nay.";
	
	//the bottom code replaces all the "nay" words in the above string with "pbrr"
	echo str_replace("nay", "pbrr", $myStr);

	//a 4th parameter will count how many words were changed
	str_replace("nay", "bprr", $myStr, $num);
	echo "<br> $num <br>"; //4

	// yoy can search for multiple words and replace them
	echo str_replace(["nay", "cats"], ["pbrr", "dogs"], $myStr);
	// Horses goes pbrr pbrr but dogs do not go pbrr pbrr.

	//substr_replace replaces all the text after a certain index with a word of choice
	//substr_replace(string, replacementWord, startIndex)
	echo "<br>" . substr_replace($myStr, "galloping", strpos($myStr, "nay")) . "<br>";

	// adding a 4th argument tells it how many characters to	
	echo "<br>" . substr_replace($myStr, "galloping", strpos($myStr, "nay"), 7);
?>