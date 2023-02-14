<?php
echo number_format(1234567.89) . "<br>"; //this rounds off to the nearest WHOLE number
echo number_format(1234567.89, 2) . "<br>"; //this rounds off to 2 decimals
//remove the thousands separator and replaces it with a " " and replaces "." with "," 
echo number_format(1234567.89, 2, ",", " ") . "<br>";
//remove the thousands separator but still use a "."
echo number_format(1234567.89, 2, ".", " ") . "<br>";
?>