<?php
	error_reporting(E_ALL); ini_set('display_errors', '1');

	$name = "Justin<br>"; //not 100% global
	$name2 = "Mark";

	echo "$name";

	function getName(){
		global $name, $name2; //this will allow outside variables to be used inside the function
		echo $name;
	}

	getName();
?>