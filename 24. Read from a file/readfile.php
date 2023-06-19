<?php
// file() - reads the entire file and puts it in an array
// you can also use fopen in read mode
$read = file('test.txt');
// returns length of the array, or in this case how many lines the file had
$count = count($read);

$i = 1;
foreach ($read as $line) {
    echo "$line";

    if ($i < $count) {
        echo ", ";
    }
    $i++;
}
?>