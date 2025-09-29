<!-- $_ENV

Environment variables ka data deta hai.

Example: OS info, database credentials from env. -->

<?php
echo $_ENV['PATH']; // System path
?>

<!-- Superglobals ke Advantages

Global scope: Function ke andar directly access.

Easy data handling: Form, server, session, cookie management.

Security & Flexibility: Proper validation ke saath safe use possible.

Debugging: Server & request info easily available. -->


<!-- Best Practices

$_GET & $_POST ko sanitize karo (htmlspecialchars, filter_var) to prevent XSS/SQL Injection.

$_REQUEST ka overuse avoid karo (security issues).

$_SESSION ko secure karo (session_regenerate_id() for session fixation).

$_FILES ko validate karo file type & size ke liye. -->