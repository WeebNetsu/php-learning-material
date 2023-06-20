<?php
require_once "connect_db.php";

// Using prepared statements helps prevent SQL injection attacks by automatically escaping user input

// Prepare the SQL statement
$sql = "SELECT * FROM tblStudents WHERE name = ?";
$stmt = $con->prepare($sql);

// Bind the parameter
$name = "nick";
// bind parameter bind the type and value to the sql statement
// s = string
$stmt->bind_param("s", $name);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

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

// Close the prepared statement
$stmt->close();

// Close the database connection
$con->close();
?>