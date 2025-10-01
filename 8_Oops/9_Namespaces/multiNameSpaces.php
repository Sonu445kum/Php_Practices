<?php
namespace ProjectA;

class User {
    public function greet() {
        echo "Hello from ProjectA\User";
    }
}

namespace ProjectB;

class User {
    public function greet() {
        echo "Hello from ProjectB\User";
    }
}

// Now this code is in the global namespace
$a = new \ProjectA\User();
$b = new \ProjectB\User();

$a->greet();
echo "<br>";
$b->greet();
?>
