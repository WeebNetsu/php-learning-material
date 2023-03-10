<?php
$line = "Hello World!";
echo $line . "<br>";

echo strtolower($line) . "<br>"; //makes everything lowercase
echo strtoupper($line) . "<br>"; //makes everything uppercase
echo strlen($line) . "<br>"; //Returns the length of a string
//replaces a specific word in a string (hello -> goodbye in this case)
echo str_replace("Hello", "Goodbye", $line) . "<br>";
echo str_replace("lo", "da", $line) . "<br>";
echo substr($line, 6, 3) . "<br>"; //substr(strToCopyFrom, indexToStartAt, howManyCharacters)
echo str_word_count($line); //returns amount of words in string

$myStr = "Hello there, Tomas";
//strstr - search for a string within a string
echo strstr($myStr, "Tom") . "<br>"; //Tomas

echo (strstr($myStr, "Tomas") ? "Yes" : "No"); // yes
echo "<br>";

//locates the position of a string within a string
echo strpos($myStr, "there"); //6
echo "<br>";
// always use === false instead of ! with strpos
// if (strpos($myStr, "thee") === false) {
//     echo "Not found";
// }

echo "<br>";
echo strpos($myStr, "o", 11); //a third parameter tells it where to start searching

echo "<br>";
echo strpos($myStr, "e");
echo "<br>";
echo strrpos($myStr, "e"); //instead of finding the first match, it finds the last

// echo "<br>";
// $pos = 0;
// while (($pos = strpos($myStr, "e", $pos)) !== false) {
//     echo "Letter 'e' found at $pos<br>";
//     $pos++;
// }
?>