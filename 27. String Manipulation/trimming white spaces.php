<?php
	$trim = "    Text with useless white space before and after it     ";
	$ltrim = "    Text with useless white space before it";
	$rtrim = "Text with useless white space after it      ";

	echo "<h2>Before</h2>";
	echo "<pre>|$trim|<br>|$ltrim|<br>|$rtrim|<br></pre>";

	$trim = trim($trim); //removes whitespace before and after string
	$ltrim = ltrim($ltrim); //remove whitespace before string
	$rtrim = rtrim($rtrim); //remove whitespace after string

	echo "<h2>After</h2>";
	echo "<pre>|$trim|<br>|$ltrim|<br>|$rtrim|<br></pre>";

	echo "<h2>Before</h2>";
	$break = "1: My name is Netsu";
	echo "<pre>$break</pre><br>";

	echo "<h2>After</h2>";
	$break = ltrim($break, "1..9: "); //removes 1, 2, 3, 4-9 and ": "
	echo "<pre>$break</pre><br>";
?>