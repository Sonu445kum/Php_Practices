<?php
class Vehicle {
    public $brand;

    public function honk() {
        echo "Beep! Beep!<br>";
    }
}

class Car extends Vehicle {
    public $color;

    public function showColor() {
        echo "Color: $this->color<br>";
    }
}

$car = new Car();
$car->brand = "Toyota";
$car->color = "Blue";
$car->honk();      // From parent class → Beep! Beep!
$car->showColor(); // From child class → Color: Blue
?>
