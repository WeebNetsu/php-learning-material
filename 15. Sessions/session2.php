<?php
	// you need to start the session again after opening a new page
	session_start();

	//now you can use those variables
	echo "Your name is <b>" . $_SESSION['name'] . '</b> and you are <b>' . $_SESSION['age'] . "</b> years old";

	/*
		You can remove variables from a session using "session_unset()" and you can destroy a session using "session_destroy()"
	*/
?>