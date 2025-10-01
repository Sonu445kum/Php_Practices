<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Super GLobals</title>
</head>

<body>
    <h1>$_Get SuperGlobals </h1>
    <!-- Php logic -->
    <?php
    echo "Name: " . $_GET['name'];  // Sonu
    echo "<br>";
    echo "Age: " . $_GET['age'];
    ?>
    <h2>$_POST SuperGlobals</h2>
    <form method="POST">
        Name: <input type="text" name="username">
        <input type="submit" value="Send">
    </form>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "Hello " . $_POST['username'];
    }

    // $_REQUEST
    // Ye GET + POST + COOKIE teenon ka combination hota hai.
    // Agar tumhe pata nahi hai data kis method se aayega to $_REQUEST use kar sakte ho. 
    echo "Username: " . $_REQUEST['username'];

    //$_SERVER
    // Ye server aur environment ke baare me information deta hai.
    // Jaise: current page ka name, server name, request method, IP, etc.
    echo $_SERVER['PHP_SELF'];   // /test.php (current file name)
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // localhost
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD']; // GET or POST

    // $_FILES:
    // Jab file upload karni hoti hai form se, to ye use hota hai.
    // Isme file ka name, size, type, temp name sab hota hai.
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     echo "File Name: " . $_FILES['myfile']['name'];
    // }
    setcookie("username", "Sonu", time() + 3600); // 1 hour cookie
    echo $_COOKIE['username']; // Sonu
    ?>





</body>

</html>