<?php
include "db.php"; // Database connection

// Sanitizations and Validations
function cleanInput($data) {
    $data = trim($data);              // Remove extra spaces
    $data = stripslashes($data);      // Remove backslashes
    $data = htmlspecialchars($data);  // Prevent HTML injection
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = cleanInput($_POST['name']);
    $email = cleanInput($_POST['email']);
    $age   = cleanInput($_POST['age']);

    // SQL query to insert data into students table
    $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
