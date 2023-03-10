<?php
/*
PHP has 2 types of variable scopes; Local and Global.
Unlike in JS, you cannot declare a variable outside a function and use it inside the function,
neither can you declare a variable inside a function and use it outside a function
*/

$name = 'David';
define("TALK", ' says,"Hello world!"');

function getName()
{
    // This below code allows us to use a variable from outside the function
    global $name;

    echo $name . TALK;
}

getName();
?>