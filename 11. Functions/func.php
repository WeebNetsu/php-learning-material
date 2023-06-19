<?php
function helloWorld()
{
    echo "Hello World!<br>";
}

helloworld(); // functions are not case sensitive

// passing in parameters
function multiply($num1, $num2)
{
    $answer = $num1 * $num2;

    echo $answer;
}

multiply(2, 5);

// giving parameters default values
function sayHello($name = 'John')
{
    echo "<br>Hello " . $name;
}

sayHello('Josh');
sayHello();

// returning a value from a function
function result($num1, $num2)
{
    echo "<br>";

    return $num1 / $num2; //you can also use return
}

// you can now store the value in an array to use later
$res = result(20, 5);
echo $res;
?>