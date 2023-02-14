<?php
	//file() - reads the entire file and puts it in an array
	//each line has own index in array
	$read = file('test.txt');
	$count = count($read); //returns length of the array

	$i = 1;
	foreach($read as $line){
		echo "$line";

		if($i < $count){
			echo ", ";
		}
			$i++;
	}
?>