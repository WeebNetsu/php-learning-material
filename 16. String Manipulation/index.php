<?php
$mystr = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nesciunt numquam eligendi labore mollitia iusto quas, neque assumenda sapiente nisi ipsam obcaecati odit nobis vitae minus sed omnis nostrum sequi.
Quaerat illo exercitationem asperiores voluptas nulla eos quas commodi enim. Earum molestias at hic deleniti. Dicta maiores unde quidem laborum nisi, voluptate, velit quos nesciunt quisquam necessitatibus, eaque porro perferendis.
Dolore in dolores ex doloremque voluptatem! Nam eos laborum, adipisci deserunt mollitia consectetur. Facere mollitia eveniet architecto, repellendus unde nemo nihil aperiam iure explicabo placeat, facilis nobis laborum vel possimus.";

echo "<pre>";

echo "$mystr<br>"; //text goes on forever

echo "<h2>Wordwrap</h2>";
echo wordwrap($mystr); //the default is 70 characters/line

echo "<h2>Wordwrap (40 chars)</h2>";
echo wordwrap($mystr, 40); //text now wraps at 40 characters/line

echo "</pre>";

echo "<h2>Wordwrap (with &lt;br&gt;)</h2>";
echo wordwrap($mystr, 40, "<br>"); //now I can use wordwrap outside of <pre></pre>

$mystr2 = "This string has averylongwordindeed";

echo "<h2>Wordwrap</h2>";
echo wordwrap($mystr2, 10, "<br>");

echo "<h2>Wordwrap (break long words)</h2>";
echo wordwrap($mystr2, 10, "<br>", true); //if a word is too long, it will break it

$line = "Hello World!";

echo strtolower($line) . "<br>"; //makes everything lowercase
echo strtoupper($line) . "<br>"; //makes everything uppercase
echo strlen($line) . "<br>"; //Returns the length of a string
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
// note that == and === are similar to that in JS
// note: skip for video tutorial
// if (strpos($myStr, "thee") === false) {
//     echo "Not found";
// }

echo "<br>";
echo strpos($myStr, "o", 11); //a third parameter tells it where to start searching

echo "<br>";
echo strrpos($myStr, "e"); //instead of finding the first match, it finds the last

$myStr = "Hello there, Tomas";
//strstr - search for a string within a string
echo strstr($myStr, "Tom") . "<br>"; //Tomas

echo (strstr($myStr, "Tomas") ? "Yes" : "No"); //yes
echo "<br>";

echo "<br>";

$myStr = "Horses goes nay nay but cats do not go nay nay.";
echo substr_count($myStr, "nay") . "<br>"; //counts all the "nay"s in the string (4)
// the 3rd parameter is to say from where to start searching
echo substr_count($myStr, "nay", 19) . "<br>"; //2
// The 4th parameter tells is how many characers to count before giving up
echo substr_count($myStr, "nay", 19, 23) . "<br>"; //1

$myStr = "Hello World, zzzzzzzzzzzzz zzzzzzzz zzzzz";
// strpbrk($myStr, arrayOfLetters) - searches a string to find array of letters
// it returns everything from where it finds a letter until the end of a string
echo strpbrk($myStr, "abcde") . "<br>"; //ello World zzzzzzzzzzzzz zzzzzzzz zzzzz

$myStr = "Horses goes nay nay but cats do not go nay nay.";

//the bottom code replaces all the "nay" words in the above string with "pbrr"
echo str_replace("nay", "pbrr", $myStr);

//a 4th parameter will count how many words were changed
str_replace("nay", "bprr", $myStr, $num);
echo "<br> $num <br>"; //4

// yoy can search for multiple words and replace them
echo str_replace(["nay", "cats"], ["pbrr", "dogs"], $myStr);
// Horses goes pbrr pbrr but dogs do not go pbrr pbrr.

//substr_replace replaces all the text after a certain index with a word of choice
//substr_replace(string, replacementWord, startIndex)
echo "<br>" . substr_replace($myStr, "galloping", strpos($myStr, "nay")) . "<br>";

// adding a 4th argument tells it how many characters to	
echo "<br>" . substr_replace($myStr, "galloping", strpos($myStr, "nay"), 7);

$trim = "    Text with useless white space before and after it     ";
$ltrim = "    Text with useless white space before it";
$rtrim = "Text with useless white space after it      ";

echo "<h2>Before</h2>";
echo "<pre>|$trim|<br>|$ltrim|<br>|$rtrim|<br></pre>";

$trim = trim($trim); //removes whitespace before and after string
$ltrim = ltrim($ltrim); //remove whitespace before string
$rtrim = rtrim($rtrim); //remove whitespace after string

echo "<h2>After</h2>";
echo "<pre>|$trim|<br>|$ltrim|<br>|$rtrim|<br></pre>";

echo "<h2>Before</h2>";
$break = "1: My name is Netsu";
echo "<pre>$break</pre><br>";

echo "<h2>After</h2>";
$break = ltrim($break, "1..9: "); //removes 1, 2, 3, 4-9 and ": "
echo "<pre>$break</pre><br>";

// ---- Adding padding to text ----
echo "<pre>";

echo "|";
echo str_pad("Hello World", 20); //adds spaces (padding) to right of string
echo "|<br>";

echo "|";
echo str_pad("Hello World", 20, "*"); //adds * as padding
echo "|<br>";

echo "|";
echo str_pad("Hello World", 20, " ", STR_PAD_RIGHT); //default setting
echo "|<br>";

echo "|";
echo str_pad("Hello World", 20, " ", STR_PAD_LEFT); //adds padding to left of text
echo "|<br>";

echo "|";
echo str_pad("Hello World", 20, " ", STR_PAD_BOTH); //adds padding to both sides of text
echo "|<br>";

echo "</pre>";

// echo "<br>";
// $pos = 0;
// while (($pos = strpos($myStr, "e", $pos)) !== false) {
//     echo "Letter 'e' found at $pos<br>";
//     $pos++;
// }
?>