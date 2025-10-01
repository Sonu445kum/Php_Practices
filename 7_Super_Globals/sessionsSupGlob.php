<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start(); // Session start

    $_SESSION['user'] = "Sonu"; // Set session

    echo "Hello " . $_SESSION['user']; // Access session
    ?>

</body>

</html>