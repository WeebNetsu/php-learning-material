<?php
// NORMAL EXECUTING SQL WITH PREPARED STATEMENTS
$username = "Jarr27";
// Create the SQL Statement
$sql = "SELECT * FROM table_name WHERE username=? AND user_age=?"; // the '?' is the placeholder

$stmt =  mysqli_stmt_init($con); // create prepared statement

//prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement falied<br>";
} else {
    // bind parameters to placeholder ('?')
    // ($stmt, data_type(s), replace_values)
    // data types: s = string; i = integer; b = blob; d = double
    // si because there are 2 '?' in the sql statement, one is string, the other integer
    mysqli_stmt_bind_param($stmt, "si", $username, 27);

    mysqli_stmt_execute($stmt); // run parameters in database
    $result = mysqli_stmt_get_result($stmt);

    while ($row =  mysqli_fetch_assoc($result)) { // execute query
        echo $row['user_id'] . "<br>";
    }
}

// INSERTING DATA WITH PREPARED STATEMENTS
// Create the SQL Statement
$sql = "INSERT INTO tbl_name(username, age, email) VALUES (?, ?, ?)"; // the '?' is the placeholder

$stmt =  mysqli_stmt_init($con); // create prepared statement

//prepare statement
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement falied<br>";
} else {
    mysqli_stmt_bind_param($stmt, "sis", "Anne", 27, "anne@jail.com");

    mysqli_stmt_execute($stmt); // run parameters in database
    $result = mysqli_stmt_get_result($stmt);

    while ($row =  mysqli_fetch_assoc($result)) { // execute query
        echo $row['user_id'] . "<br>";
    }
}
