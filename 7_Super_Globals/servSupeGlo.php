<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_SERVER['PHP_SELF'];  // Current script name
    echo $_SERVER['SERVER_NAME']; // Server name
    echo $_SERVER['REQUEST_METHOD']; // GET or POST
    ?>

</body>

</html>