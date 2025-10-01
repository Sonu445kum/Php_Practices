<?php
$servername = "localhost";
$username = "root";  // Default in XAMPP
$password = "";      // Default blank in XAMPP
$dbname = "students";

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
