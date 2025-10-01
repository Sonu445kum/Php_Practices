<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "phpform");

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ Sanitize input
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));

    // ✅ Insert using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "✅ New record created successfully <br>";
        echo "<a href='display.php'>View Users</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
