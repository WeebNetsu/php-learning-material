<!DOCTYPE html>
<html>

<head>
    <title>Include</title>
</head>

<body>
    <!-- You can use include to import a php file -->
    <?php include 'header.php'; ?>

    <p>Some text</p>

    <!-- 
        include and require does the exact same thing, but require will return an error if the
        file could not be found, whilst include will only continue. If a piece of code requires a specific
        file to be imported and should not display without it, use 'require'
     -->
    <?php require 'header.php'; ?>

    <?php
    //this code will make sure it only prints out on the screen once
    //you can use this instead of normal "include"
    include_once('header.php');
    include_once('header.php');
    include_once('header.php');

    // Same with require_once, it will stop you from importing the same code more than once
    // you can use it with or without ()
    require_once 'header.php';
    echo $page1;
    ?>
</body>

</html>