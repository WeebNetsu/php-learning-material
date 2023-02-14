<?php
	$myStr = "Hello there, Tomas";
	//strstr - search for a string within a string
	echo strstr($myStr, "Tom") . "<br>"; //Tomas
	if(strstr($myStr, "Hello!")){
		echo "Yes<br>";
	}else{
		echo "No<br>";
	}

	echo (strstr($myStr, "Tomas") ? "Yes" : "No"); //yes
	echo "<br>";

	//locates the position of a string within a string
	echo strpos($myStr, "there"); //6
	echo "<br>";
	// always use === false instead of ! with strpos
	if(strpos($myStr, "thee") === false){
		echo "Not found";
	}

	echo "<br>";
	echo strpos($myStr, "o", 11); //a third parameter tells it where to start searching

	echo "<br>";
	echo strpos($myStr, "e");
	echo "<br>";
	echo strrpos($myStr, "e"); //instead of finding the first match, it finds the last

	echo "<br>";
	$pos = 0;
	while (($pos = strpos($myStr, "e", $pos)) !== false) {
		echo "Letter 'e' found at $pos<br>";
		$pos++;
	}

	$myStr = "Horses goes nay nay but cats do not go nay nay.";
	echo substr_count($myStr, "nay") . "<br>"; //counts all the "nay"s in the string (4)
	// the 3rd parameter is to say from where to start searching
	echo substr_count($myStr, "nay", 19) . "<br>"; //2
	// The 4th parameter tells is how many characers to count before giving up
	echo substr_count($myStr, "nay", 19, 23) . "<br>"; //1

	$myStr = "Hello World, zzzzzzzzzzzzz zzzzzzzz zzzzz";
	// strpbrk($myStr, arrayOfLetters) - searches a string to find array of letters
	// it returns everything from where it finds a letter until the end of a string
	echo strpbrk($myStr, "abcde") . "<br>"; //ello World zzzzzzzzzzzzz zzzzzzzz zzzzz

	$username = "myExample_username!";
	if(strpbrk($username, "@!")){
		echo "'@' and '!' is not allowed in the username";
	}
?>