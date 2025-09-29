<?php
class Car {
    public $brand;
    public $color;

    public function drive() {
        echo "The $this->brand is driving.<br>";
    }
}

// Object create karna
$myCar = new Car();
$myCar->brand = "BMW";
$myCar->color = "Red";

// Method call karna
$myCar->drive();
?>
