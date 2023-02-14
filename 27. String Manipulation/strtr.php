<?php
	$mystr = "My name is [not] Netsu [Get it?].";
	echo "Before: $mystr <br>";

	$newStr = strtr($mystr, "[n]", "(y)"); //replaces [ & n & ] with ( & y & )

	echo "After: $newStr<br>";
?>