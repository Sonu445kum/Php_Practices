<!-- $GLOBALS

Ye all global variables ko store karta hai.

Har function ke andar access possible hota hai. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 10;
$b = 20;

function sum() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

sum(); // Output: 30
?>
</body>
</html>
