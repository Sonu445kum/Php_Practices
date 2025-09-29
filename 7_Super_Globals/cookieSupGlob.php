<?php
// Set cookie
setcookie("user", "Sonu", time()+3600); // 1 hour

// Access cookie
if(isset($_COOKIE['user'])){
    echo "Hello " . $_COOKIE['user'];
}
?>
