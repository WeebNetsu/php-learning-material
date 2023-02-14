<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["content"];

    $mailTo = "stephenvdw7777@gmail.com";
    $header = "From: $email";
    $text = "You received an email from $name\n\n$message";
    // Note: will not work on localhost
    mail($mailTo, $subject, $text, $header);
    header("Location: index.php?mailsent=true");

    //NOTE: You will need to have an email on your host
    // my current host infinityfree has removed the ability to do that for free
    // so you will have to pay to be able to do this
}
