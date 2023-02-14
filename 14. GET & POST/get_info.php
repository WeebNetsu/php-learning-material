<?php
	/*
		GET: not private, details is shown in link, but the page can be visited again in the future
		POST: Private, no details in link, page cannot be visited again in the future

		$_GET['name'] 
		$_POST['email']
	*/
	echo "Hello there, " . $_GET['name'] . "!";
?>