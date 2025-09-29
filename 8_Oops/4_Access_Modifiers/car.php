<!-- Access Modifiers

public → Accessible anywhere

private → Accessible only inside class

protected → Accessible inside class and child classes -->

<?php
class Car {
    public $brand;
    private $price;
    protected $color;

    public function setPrice($p) {
        $this->price = $p;
    }

    public function getPrice() {
        return $this->price;
    }
}

$car = new Car();
$car->brand = "BMW"; // OK
$car->setPrice(50000); 
echo $car->getPrice(); // 50000
// $car->price; // Error: Cannot access private property
?>
