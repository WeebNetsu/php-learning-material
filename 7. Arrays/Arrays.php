<?php
	// We already know what arrays are, so this is how to use them in PHP
	$names = array('David', 'Louis', "Gerald");
	$age = [12, 47, 20];

	echo $names[1];
	echo "<br>$names[2] is $age[2] years old";

	count($names); //basically name.length (returns length of array)
?>