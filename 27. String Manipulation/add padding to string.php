<?php
	// better than printf for adding padding because it is dedicated
	echo "<pre>";
	
	echo "|";
	echo str_pad("Hello World", 20); //adds spaces (padding) to right of string
	echo "|<br>";

	echo "|";
	echo str_pad("Hello World", 20, "*"); //adds * as padding
	echo "|<br>";

	echo "|";
	echo str_pad("Hello World", 20, " ", STR_PAD_RIGHT); //default setting
	echo "|<br>";

	echo "|";
	echo str_pad("Hello World", 20, " ", STR_PAD_LEFT); //adds padding to left of text
	echo "|<br>";

	echo "|";
	echo str_pad("Hello World", 20, " ", STR_PAD_BOTH); //adds padding to both sides of text
	echo "|<br>";

	echo "</pre>";
?>