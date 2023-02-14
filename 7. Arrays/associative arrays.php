<?php
	$people['David'] = "27";
	$people['Amy'] = "21";
	$people['John'] = "42";

	echo $people['David']; //27

	//the above code can also be done like this:
	$people = array(
		"David" => "27",
		"Amy" => "21",
		"John" => "42"
	);

	echo $people['John']; //42

	//Another good example

	$man = array("name"=>"John", "age"=>"25");

	echo $man["name"]; //John

	print_r($people); //shows everything in array
?>