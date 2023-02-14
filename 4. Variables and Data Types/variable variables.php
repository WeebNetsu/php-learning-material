<?php

	/*
		Variable variables in short does this:
		$a = "hello";
		(now you call for $$a)
		$a = $hello;
		Now the text in $a has been assigned to the $hello variable...
		Thus $a = "hello"; is NOT the same as
		$a = "Hello";
	*/
	$a = "hello";
	$hello = "hi";
	$hi = "as";

	echo $$a;
	echo "<br>";
	echo $$$a;
?>