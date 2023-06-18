<?php
// If statements stays the same as in most languages
$num = 24;

if ($num > 25) {
    echo "It's big";
} elseif ($num < 20) { //this can be "elseif" or "else if"
    echo "It's small";
} else {
    echo "It is medium";
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