<?php
require_once "connect_db.php";

// SQL query to retrieve the row with name = "nick"
$sql = "SELECT * FROM tblStudents WHERE name = 'nick'";

// Execute the query
$result = $con->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row and fetch the data
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $age = $row["age"];
        $email = $row["email"];

        // Output the retrieved data
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Email: " . $email . "<br>";
    }
} else {
    echo "No results found.";
}

// Close the database connection
$con->close();
?>

<a href="part3_prepared_statement.php">Part 3</a>