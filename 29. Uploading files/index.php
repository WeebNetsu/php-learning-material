<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Files</title>
</head>

<body>
    <!-- multipart/form-data when uploading files (to pass image/video data to another page) -->
    <form method="post" enctype="multipart/form-data" action="upload.php">
        <!-- Has to be post when uploading files -->
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if ($_GET["uploaded"]) { // get uploaded status from the url
        echo "File successfully uploaded";
    }
    ?>
</body>

</html>