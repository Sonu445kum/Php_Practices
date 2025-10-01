<?php
// SuperGlobals:
// Superglobals PHP me predefined arrays hote hain jo har scope me available hote hain (global + local).
// Matlab: Tumhe global likhne ki bhi zarurat nahi padti — tum direct function, class ya kahin bhi use kar sakte ho.
// Ye arrays PHP automatically banata hai aur inme values already hoti hain jaise:

// Form data

// Server info

// Session data

// Cookie data
// etc.

// 1-> $_GET:
// Iska use URL se data lene ke liye hota hai.
// Jab tum form ka method="GET" use karte ho ya URL me manually query string likhte ho (?name=Sonu), to data $_GET me store hota hai.
// URL: http://localhost/test.php?name=Sonu&age=22
echo "Name: " . $_GET['name'];  // Sonu
echo "<br>";
echo "Age: " . $_GET['age'];    // 22

?>