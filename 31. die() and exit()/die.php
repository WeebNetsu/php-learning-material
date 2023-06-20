<?php
echo "Hello<br>";
// kills the code, so it does not continue after this line
// Adding a message as a parameter is optional
die("Optional end message");

// die() has a counterpart that does the same thing
exit();
exit("text parameter");

echo "World!";

$website = "https://www.googlessssdsdsdsdsdsdsd.com";

//NOTE: fopen can also be used to open text files
//it will try to open the website
fopen($website, 'r') or exit("Link was invalid");
//if it fails, it will stop the code and say the link was invalid
?>