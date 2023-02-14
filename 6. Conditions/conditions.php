<?php
	/*
		PHP also uses JS rules to compare:
		==
		===
		!=
		<> (this is new tho), it is the same as !=
		!==
	*/

	echo $c <> $b ; //true

	/*
		Comparisons stays the same
		<
		>
		>=
		<=
	*/

	//and
	if (2 > 3 and 3 > 4) {
		# code...
	}

	#is the same as this:
	if (2 > 3 && 3 > 4) {
		# code...
	}

	//or
	if (2 > 3 or 3 > 2) {
		# code...
	}

	//is the same as
	if (2 > 3 || 3 > 2) {
		# code...
	}

	//if only ONE of the conditions are true
	if (2 > 3 xor 3 > 2) {
		# code...
	}

	//not
	if (!false) { //if not false (so if true)
		# code...
	}
?>