<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$db_host = "localhost"; // server
$db_user = "netsu";
$db_pass = "root";
$db_name = "tests";

// if you use an '@', then any error that pops up will not be displayed
@$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
    or
    die('Database details are incorrect');

echo "Connection Success<br>";

?>