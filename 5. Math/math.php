<?php
	/*
		we get the usual * / + - % += *= -= /= %= when it comes to math, but here is an interesting feat:
	*/

	$a = 2;
	$b = $a++; //b = 2; a = 3

	$c = 2;
	$d = ++$c; //$c = 3; $b = 3
?>