<!-- $_SESSION

Server side data store karne ke liye.

Login systems me kaam aata hai. -->

<?php
session_start(); // Session start

$_SESSION['user'] = "Sonu"; // Set session

echo "Hello " . $_SESSION['user']; // Access session
?>
