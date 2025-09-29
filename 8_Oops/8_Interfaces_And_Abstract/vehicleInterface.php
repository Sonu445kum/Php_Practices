<!-- Interfaces & Abstract Classes

Interface: Methods define karte hai, implementation child class me hota hai.

Abstract class: Partially implemented class. -->

<?php
interface VehicleInterface {
    public function start();
}

class Car implements VehicleInterface {
    public function start() {
        echo "Car started<br>";
    }
}

$car = new Car();
$car->start(); // Car started
?>
