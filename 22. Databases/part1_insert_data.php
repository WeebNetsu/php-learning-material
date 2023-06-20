<?php
require_once 'connect_db.php';

// SQL query to create the table
$sql = "CREATE TABLE tblStudents (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age INT(3) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

// Execute the query to create the table
if ($con->query($sql) === TRUE) {
    echo "Table tblStudents created successfully. ";
} else {
    echo "Error creating table: " . $con->error;
}

// SQL query to insert the values into the table
$sql = "INSERT INTO tblStudents (name, age, email)
        VALUES
        ('nick', 15, 'nick@gmail.com'),
        ('amy', 17, 'amy@gmail.com')";

// Execute the query to insert the values
if ($con->query($sql) === TRUE) {
    echo "Values inserted successfully.";
} else {
    echo "Error inserting values: " . $con->error;
}

// NOTE when inserting data provided by the user (such as a name from a form)
// use this:
// $username = mysqli_real_escape_string($con, $_POST['username']);
// the above code will make sure the input is escaped, so select * from tblExample; would become invalid
// doing this can help prevent SQL injection attacks on your database

// Close the database connection
$con->close();
?>

<a href="part2_get_data.php">Part 2</a>