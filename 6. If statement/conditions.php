<?php
/*
       PHP uses similar JS rules to compare:
       ==
       ===
       !=
       <> it is the same as !=
       !==
       <
       >
       >=
       <=
       and
       &&
       or
       ||
       xor
       !
   */

// NOTE: true can be interpreted as yes, and false as no
// All of these below this comment is considered a false value
/*
    false
    0
    0.0
    " " (empty string)
    "0"
    [] (empty array)
*/

echo true == true ? "yes" : "no"; // yes
echo true == 1 ? "yes" : "no"; // yes
echo true == false ? "yes" : "no"; // no
echo true == 0 ? "yes" : "no"; // no
echo true == [] ? "yes" : "no"; // no
// === is more strict than ==, == will accept different
// data types (like a number and a string) and compare
// them, whilst === will check if both the data type
// and the value are the same
echo true === 1 ? "yes" : "no"; // no
echo 1 === 1 ? "yes" : "no"; // yes
echo 1 != "1" ? "yes" : "no"; // no
// <> is the same as !=
echo 1 <> "1" ? "yes" : "no"; // no
// same concept as ===, this also compares data types
echo 1 !== "1" ? "yes" : "no"; // yes

// If statements stays the same as in most languages
$num = 24;

if ($num > 25) {
    echo "It's big";
} elseif ($num < 20) { //this can be "elseif" or "else if"
    echo "It's small";
} else {
    echo "It is medium";
}

echo 1 >= 1 ? "yes" : "no"; // yes
echo 1 >= 2 ? "yes" : "no"; // no
echo 1 >= 0 ? "yes" : "no"; // yes

echo 1 <= 1 ? "yes" : "no"; // yes
echo 1 <= 2 ? "yes" : "no"; // yes
echo 1 <= 0 ? "yes" : "no"; // no

//and
if (2 > 3 and 3 > 4) {
    # code...
}

#is the same as this `and`
if (2 > 3 && 3 > 4) {
    # code...
}

//or
if (2 > 3 or 3 > 2) {
    # code...
}

//is the same as `or`
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

//a lot of string manipulation functions are case sensitive, thats why these 
//case insensitive versions exists
/*eg.
       $str = "Hello";
       if(strstr($str, "hello")){
           return "found";
       }else{
           return "Not found";
       }

       //the above code returns "Not Found"
   */

$str = "HELLO WORLD";
if (stristr($str, "hello")) {
    echo "Found!";
} else {
    echo "Not Found";
}

// strpos -> stripos
// strrpos -> strripos
// str_replace -> str_ireplace
?>