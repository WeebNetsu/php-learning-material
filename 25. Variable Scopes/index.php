<?php
// PHP has 2 types of variable scopes; Local and Global.

// below can be used to display any errors that pops up
error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = 'David';
// below is a constant variable, once it has been set, it cannot be changed
define("TALK", ' says,"Hello world!"');
// define("TALK", ' says,"Hello world 2!"'); // will cause an error

function getName()
{
    // This below code allows us to use a variable from outside the function
    global $name;

    // note that constant variables doesn't require us to use the global keyword to use it
    echo $name . TALK;
}

getName();
?>