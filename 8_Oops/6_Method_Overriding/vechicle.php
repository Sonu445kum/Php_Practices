<!-- Method Overriding

Child class parent ke method ko redefine kar sakta hai. -->

<?php
class Vehicle {
    public function start() {
        echo "Vehicle started.<br>";
    }
}

class Car extends Vehicle {
    public function start() {
        echo "Car started.<br>";
    }
}

$car = new Car();
$car->start(); // Output: Car started.
?>
