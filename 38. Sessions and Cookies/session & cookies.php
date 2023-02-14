<!-- 
    $_COOKIE : Saves data about the user on their computer
    $_SESSION : Saves sensitive data about the user on the server, such as who the user are once they have logged in and gone to a different page. This also expires after user closes the browser
 -->
<?php
    // setcookie(nameOfCookie, value, expiryDate)
    // setcookie(name, value, time() - 1) - deletes cookie
    // note: expirydate is set in seconds
    // time() gets current time
    // time() + 24 (hours) * 60(minutes) * 60(seconds) -> expire in 1 day
    setcookie("user_name", "Netsu", time() + (24 * 60 * 60));
    echo $_COOKIE["user_name"] . "<br>";

    //$_SESSION[session_attr] = value;
    $_SESSION['user_id'] = 12;
    echo $_SESSION['user_id'];
?>