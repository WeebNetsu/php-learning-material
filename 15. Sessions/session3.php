<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

unset($_SESSION["Age"]); //removes the value from age

// session_destroy(); //destroys your session and all its stored data
?>