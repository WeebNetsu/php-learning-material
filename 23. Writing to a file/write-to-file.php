<?php
// NOTE: The browser may not have the privileges to write to the file if using apache
// chmod 777 fileName.txt in the terminal is a quick and dirty fix to it on Linux

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

// fopen() - creates or opens file
// in the below case, open a file in write mode
$myfile = fopen("test.txt", "w");

// fwrite() - writes to a file
$text = "My name is Tim\n";
fwrite($myfile, $text);

// write another line of text to the file
$text = "My name is John";
fwrite($myfile, $text);

// Closes the file after using it
fclose($myfile);
?>