<?php
/* 
// the below will delete 1 specific file
$filePath = "files/file.png";
if (!unlink($filePath)) { // if you can't find the file that you want to delete
    echo "Could not find file. File not deleted";
} else {
    echo "Success! File deleted";
}
*/

$fileNames = $_POST["files"];
$fileNames = str_replace(" ", "", $fileNames); # removes spaces from file name
$allFiles = explode(",", $fileNames);

foreach ($allFiles as $name) {
    if (!file_exists("files/" . $name)) {
        header("Location: index.php?deleterror=true");
        die();
    }
}

foreach ($allFiles as $file) {
    if (!unlink("files/" . $file)) {
        header("Location: index.php?deleterror=true");
        die();
    }

    echo "Deleted " . $file . "<br>";
}