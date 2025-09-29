<!-- $GLOBALS:
Ye all global variables ko store karta hai.
Har function ke andar access possible hota hai. -->
<?php
$a = 10;
$b = 20;

function sum() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

sum(); // Output: 30
?>

<!-- // Deep tip: $GLOBALS ek associative array hai jisme variable name as key aur value as value hota hai. -->
