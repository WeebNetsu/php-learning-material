<?php
	$website = "https://www.googlessssdsdsdsdsdsdsd.com";

	//NOTE: fopen can also be used to open text files
	//it will try to open the website
	fopen($website,'r') or exit("Link was invalid");
	//if it fails, it will stop the code and say the link was invalid
?>