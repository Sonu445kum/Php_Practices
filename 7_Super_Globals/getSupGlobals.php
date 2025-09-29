<form method="POST">
    Name: <input type="text" name="username">
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Hello, " . $_POST['username'];
}
?>
