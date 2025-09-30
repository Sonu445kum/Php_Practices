<?php
// Database connection
$servername = "localhost";
$username = "root";   // default in XAMPP
$password = "";       // default in XAMPP
$dbname = "phpform";  // tumhara database ka naam

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Agar form submit hua hai
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input sanitization
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>✅ New record created successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }
    } else {
        echo "<p style='color:red;'>⚠️ Please fill all fields</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <h2>Register User</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
