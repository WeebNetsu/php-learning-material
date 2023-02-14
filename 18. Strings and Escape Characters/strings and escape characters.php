<?php
$name = "Netsu";

// You don't always need to use "." to add a variable to a string:
echo "Hello! My name is $name!<br>";
echo 'Hello! My name is $name!<br>'; //not the same result

//There is quite the difference between '' and "":
echo "<pre>Hello\tWorld!</pre>"; //pre allows you to use escape characters
echo '<pre>Hello\tWorld!</pre>';

//Different escape characters:
echo "<pre>Make a\nnew line</pre>";
echo "<pre>Make a\rnew line</pre>";
echo "<pre>Make a\ttab</pre>";
echo "<pre>Make a\vvertical tab</pre>";
echo "<pre>Make a\f form feed character</pre>";
echo "<pre>Make a \\ backslash</pre>";
echo "<pre>Make a \$ symbol</pre>";
echo "<pre>Make a \" inside a \"</pre>";
echo '<pre>Make a \\\ in a \'\' string</pre>';

$myString = "
		I have to say...
		This all actually counts as
		only 1 line :)
	";

echo $myString;

$bestAnimal = "cat";

echo "<pre>I love $bestAnimals</pre>"; //doesn't know what variable $bestAnimals are
echo "<pre>I love {$bestAnimal}s</pre>"; //allows you to add the "s" after the variable
echo "<pre>I love ${bestAnimal}s</pre>"; //you can also bring in some JS ES6

$anArray = [20, 40, 19];
$myArray["age"] = 24;
// You can also use arrays
echo "<pre>I am ${anArray[1]} years old</pre>";
echo "<pre>I am ${myArray["age"]} years old</pre>";
?>