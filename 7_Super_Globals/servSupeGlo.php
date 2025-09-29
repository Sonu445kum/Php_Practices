<!-- $_SERVER

Server aur script execution info deta hai.

Kaafi useful for debugging, headers, redirects. -->

<?php
echo $_SERVER['PHP_SELF'];  // Current script name
echo $_SERVER['SERVER_NAME']; // Server name
echo $_SERVER['REQUEST_METHOD']; // GET or POST
?>
