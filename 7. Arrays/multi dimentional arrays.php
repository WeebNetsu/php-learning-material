<?php
	//let people = [["name", "age"], ["name2", "age2"]] (in javascript)

	$people = array(
		"online" => array("David", "Amy"),
		"offline" => array("John", "Rob", "Jack"),
		"away" => array("Daniel", "Jason")
	);

	echo $people["online"][0]; //David

	/*How it will look in JS (with an object)
		let people = {
			online: ["David", "Amy"],
			offline: ["John", "Rob", "Jack"],
			away: ["Daniel", "Jason"]
		}

		console.log(people.online[0]);
	*/
?>