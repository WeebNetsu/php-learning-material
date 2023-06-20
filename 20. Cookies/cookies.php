<!-- 
    $_COOKIE : Saves data about the user on their computer - usually expires when we tell it to
    $_SESSION : Saves data about the user on the server, such as who the user are once they have logged in and gone to a different page. This also expires after user closes the browser
 -->

<?php
$value = "John";
// setcookie sets a cookie
//setcookie(cookieName, value, expiryDate, path, domain, secure, httpOnly)

/*
    expiry date: time in seconds before expiry date time() + 86400 * 30 (lives for 30 days). If not set, the default is until the user closes the session
    path: if its "/" then all the files can access the cookie
    secure: says whether or not the cookie should transfer over HTTPS or HTTP
    http only: Makes cookie only accessible via http protocol (useful to stop xss (Cross-Site Scripting) attacks and identity theft)
    note, the only parameter needed for cookie is the name, the rest has default values
    also note that cookies have to be declared BEFORE the <html> tag

    The cookie expires after expiryDate, this means that it gets deleted off of the users PC
*/

//time() is a time stamp, it gets all the seconds from 1970 to the current date
//epoch date and time (search this up for more info)
//time() + 10 -> 10 seconds from now
setcookie("user", $value, time() * (86400 * 30), '/');

//you can use isset to find out if the cookie was set
if (isset($_COOKIE['user'])) {
    echo "Value is: " . $_COOKIE['user'];
}
?>