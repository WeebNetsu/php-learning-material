<?php
	for ($i=0; $i < 10; $i++) { 
		if($i % 2 == 0){
			continue; //this will skip all the even numbers
		}

		echo "$i <br>";
	}
?>