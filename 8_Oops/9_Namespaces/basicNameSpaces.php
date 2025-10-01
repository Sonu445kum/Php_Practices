<?php
// Namespace ek container ki tarah hota hai jo classes, functions, aur constants ko organize karne ke liye use hota hai.
// Simple shabdon me:
// Jab humare code me same naam ki classes ya functions ho jati hain, toh conflict ho jata hai.
// Namespace unique space provide karta hai, taaki naam clash na ho.
namespace MyProject;

class User {
    public function greet() {
        echo "Hello from MyProject\User";
    }
}

$user = new User();
$user->greet();
?>
