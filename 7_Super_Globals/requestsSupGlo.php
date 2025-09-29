<!-- $_REQUEST

Ye $_GET, $_POST, $_COOKIE ka combined data leta hai.

Mostly simple form submissions me use hota hai. -->

<?php
// URL: test.php?name=Sonu
echo $_REQUEST['name']; // Output: Sonu
?>
<!-- Note: POST aur GET ke liye separate use karna better hai, security ke liye. -->