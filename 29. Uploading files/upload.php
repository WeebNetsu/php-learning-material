<?php
if (isset($_POST["submit"])) { // if submit button was clicked
    // $_FILES gets files that were uploaded
    $file = $_FILES["upload"];
    $fileName = $file["name"]; // could also go $_FILES["file"]["name"]
    $fileTmpName = $file["tmp_name"]; // temp location of file before saved to server/computer
    $fileSize = $file["size"];
    $fileError = $file["error"]; // if an error occurred
    // $fileType = $file["type"]; // get the file type

    // explode(delimiter, fileName) = take apart the name (returns array)
    $fileExt = explode(".", $fileName);
    // end gets last element in array
    $fileRealExt = strtolower(end($fileExt));
    $allowedExtensions = array("jpg", "jpeg", "png");
    print_r($_FILES["upload"]);
    if (in_array($fileRealExt, $allowedExtensions)) { // check if the file ext is in array
        if ($fileError === 0) { // if no error occurred
            if ($fileSize < 1e+7) { # if file size is < 10mb (10,000,000 bytes or 1e+7 (7 zeros))
                // When someone uploads a file, you want to change that file name
                // so it doesn't get overwritten when someone else uploads a file with the same name
                // the below will make the files new name the current time in milliseconds, so it will always be
                // unique
                $newFileName = uniqid('', true) . "." . $fileRealExt;
                $fileLocation = "uploads/" . $newFileName;

                // moves file from temp location to a stored location
                move_uploaded_file($fileTmpName, $fileLocation);
                header("Location: index.php?uploaded=true");
            } else {
                echo "The file you uploaded was too big to be processed";
            }
        } else {
            echo "Oof, error while uploading the file";
        }
    } else {
        echo "You cannot upload " . $fileRealExt . " files to the website";
    }
}