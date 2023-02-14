<?php
	$mystr = "Hello everyone! Today I will be talking about my pet tortoise. You might be asking yourself, what is the difference between a turtle and a tortoise? Well, a turtle is more aquatic than a tortoise, think of a sea 'turtle', it lives in the sea, just like how most turtles lives in dams and rivers. Tortoises on the other hand are land animals, they cannot swim most of the time, so the only time they go near water is to drink from it. By the way, my tortoise is very cute.";

	echo "<pre>";

	echo "$mystr<br>"; //text goes on forever

	echo "<h2>Wordwrap</h2>";
	echo wordwrap($mystr); //the default is 70 characters/line

	echo "<h2>Wordwrap (40 chars)</h2>";
	echo wordwrap($mystr, 40); //text now wraps at 40 characters/line

	echo "</pre>";

	echo "<h2>Wordwrap (with &lt;br&gt;)</h2>";
	echo wordwrap($mystr, 40, "<br>"); //now I can use wordwrap outside of <pre></pre>

	$mystr2 = "This string has averylongwordindeed";

	echo "<h2>Wordwrap</h2>";
	echo wordwrap($mystr2, 10, "<br>");

	echo "<h2>Wordwrap (break long words)</h2>";
	echo wordwrap($mystr2, 10, "<br>", true); //if a word is too long, it will break it
?>