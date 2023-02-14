<?php
    session_start(); // starts a session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <ul>
        <li><a href="temp.php">home</a></li>
        <li><a href="#">login</a></li>
    </ul>

    <?php
        /* 
            Once a new webpage is opended, the session will be forgotten, so we need to 
            create a session that will be remembered on all our pages
        */
        $_SESSION['user_name'] = "Netsu";
    ?>
</body>
</html>