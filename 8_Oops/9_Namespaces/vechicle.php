<!-- Namespaces

Namespaces large projects me class name conflicts avoid karne ke liye use hoti hai. -->

<?php
// namespace Vehicles;

class Car {
    public function info() {
        echo "This is a car.<br>";
    }
}

// Use the namespace
$car = new \Vehicles\Car();
$car->info();
?>
