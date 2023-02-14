<?php
// ----- VARIABLES -----
/*
		PHP variables start with a $ then ends with the name eg.
		$variable 
		PHP variables may only use A-z; 0-9; _; This means that variables may not use special characters
		such as:
		?><!.,() ect. 

		NOTE: variables are case sensitive
	*/

$name = 'John';
$age = 19;

echo ($name); //echo() is also a valid use of echo

//Like JavaScript, you don't need to declare the variable type (eg. int age)

// ----- VARIABLE VARIABLES -----
// Variable variables allow you to reuse a variable name multiple times
$a = "hello";
$$a = "Hello again!";
$$$a = "Goodbye";
echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $$$a;

// ----- CONSTANTS -----
/*
Constants are variables that cannot be changed... You can declare it like this:
define(variableName, VariableContent);
*/

define('VARS', 'Hello World!');
echo (VARS);

// ----- DATA TYPES -----
// gettype() get the data type from a variable
$null;
$string = 'Hello';
$int = 24;
$float = 3.14159;
$arr = [24, 45, 11];
$bool = false;

echo gettype($null) . "<br>";
echo gettype($string) . "<br>";
echo gettype($int) . "<br>";
echo gettype($float) . "<br>";
echo gettype($bool) . "<br>";
echo gettype($arr) . "<p></p>";

//is_dataType is a way to confirm if something is a specific data type

// ignore for tutorial
if (is_int($int)) { //if $int (24) is an integer
    echo "$int is an int";
}

// others
/*is_bool()
is_string()
is_float()
is_array()
is_object()
is_resource()
is_null()*/

// To add one string to another, do this:
$string1 = 'Hello ';
$string2 = "World!<br>";

echo $string1 . $string2; // >Hello World!

$int = 24;
$float = 32.98;
$sum = $int + $float;
echo $sum;

$bool = true;

echo "<br>";

// When a string gets plussed with a number it becomes an integer
$num1 = "20";
$num2 = 10;
$num3 = $num1 + $num2; //>30
echo $num3;
?>