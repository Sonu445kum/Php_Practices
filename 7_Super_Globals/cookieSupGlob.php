<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Set cookie
setcookie("user", "Sonu", time()+3600); // 1 hour

// Access cookie
if(isset($_COOKIE['user'])){
    echo "Hello " . $_COOKIE['user'];
}
?>

</body>
</html>