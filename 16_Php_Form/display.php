<?php
$conn = new mysqli("localhost", "root", "", "phpform");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users found!";
}

$conn->close();
?>
