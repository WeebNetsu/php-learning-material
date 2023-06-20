<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'connect_db.php';

$sql = "SELECT * FROM tblStudent;";

$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'] . "<br>";
    }
}

echo "oof<br>";

// To make sure user input doesn't get transformed into SQL code, then we need to use this
// function to escape it:
$username = mysqli_real_escape_string($con, $_POST['username']);
// the above code will make sure the input is escaped, so select * from tblExample; would become invalid
// doing this can help prevent SQL injection attacks on your database

// ----- PREPARED STATEMENTS ----
$username = "Jarr27";
// Create the SQL Statement
$sql = "SELECT * FROM table_name WHERE username=? AND user_age=?"; // the '?' is the placeholder

$stmt = mysqli_stmt_init($con); // create prepared statement

//prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed<br>";
} else {
    // bind parameters to placeholder ('?')
    // ($stmt, data_type(s), replace_values)
    // data types: s = string; i = integer; b = blob; d = double
    // si because there are 2 '?' in the sql statement, one is string, the other integer
    mysqli_stmt_bind_param($stmt, "si", $username, 27);

    mysqli_stmt_execute($stmt); // run parameters in database
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) { // execute query
        echo $row['user_id'] . "<br>";
    }
}

// INSERTING DATA WITH PREPARED STATEMENTS
// Create the SQL Statement
$sql = "INSERT INTO tbl_name(username, age, email) VALUES (?, ?, ?)"; // the '?' is the placeholder

$stmt = mysqli_stmt_init($con); // create prepared statement

//prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed<br>";
} else {
    mysqli_stmt_bind_param($stmt, "sis", "Anne", 27, "anne@jail.com");

    mysqli_stmt_execute($stmt); // run parameters in database
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) { // execute query
        echo $row['user_id'] . "<br>";
    }
}
?>