<?php
	//NOTE: The browser may not have the privelages to write to the file if using apache
	//chmod 777 fileName.txt in the terminal fixes it

	// fopen() - creates or opens file

	/*
		Types of commands:
		r: Opens file to read only
		w: Opens file to write only AND erases the content of the file OR creates a new file
		a: Opens file to write only (appends the new text to the end of the file)
		x: Create new file to write only
		r+: Opens file to read/write
		w+: Opens file to read/write AND erases the content of the file OR creates a new file
		a+: Opens file to read/write and/or creates new file
		x+: Creates new file to read/write
	*/

	$myfile = fopen("test.txt", "w");

	// fwrite() - writes to a file
	$text = "My name is Tim\n"; //\n creates new line
	fwrite($myfile, $text);

	$text = "My name is John";
	fwrite($myfile, $text);

	// Closes the file
	fclose($myfile)
?>