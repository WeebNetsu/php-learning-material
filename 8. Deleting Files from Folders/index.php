<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Files</title>
</head>

<body>
    <form method="post" action="deletefile.php">
        <input type="text" name="files" placeholder="Seperate file names with comma (,)" style="width: 300px;">
        <button type="submit">Delete File</button>
    </form>

    <?php
    if ($_GET["deleterror"]) {
        echo "Error occured.";
    }
    ?>
</body>

</html>