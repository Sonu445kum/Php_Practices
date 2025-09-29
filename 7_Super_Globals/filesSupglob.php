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
