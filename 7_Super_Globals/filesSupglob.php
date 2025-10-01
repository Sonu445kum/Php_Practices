<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile">
    <input type="submit">
</form>

<?php
if(isset($_FILES['myfile'])) {
    echo "File name: " . $_FILES['myfile']['name'];
    echo "File size: " . $_FILES['myfile']['size'];
}
?>

</body>
</html>