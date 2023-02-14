<?php
	//a lot of string manipulation functions are case sensitive, thats why these 
	//case insensitive versions exists
	/*eg.
		$str = "Hello";
		if(strstr($str, "hello")){
			return "found";
		}else{
			return "Not found";
		}

		//the above code returns "Not Found"
	*/

	$str = "HELLO WORLD";
	if (stristr($str, "hello")) {
		echo "Found!";
	}else{
		echo "Not Found";
	}

	// strpos -> stripos
	// strrpos -> strripos
	// str_replace -> str_ireplace
?>