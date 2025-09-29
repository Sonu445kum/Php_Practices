<!-- Constructor & Destructor

Constructor: Object create hote hi call hota hai.

Destructor: Object destroy hote hi call hota hai. -->

<?php
class Car {
    public $brand;

    // Constructor
    public function __construct($brandName) {
        $this->brand = $brandName;
        echo "Car $this->brand created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Car $this->brand destroyed.<br>";
    }
}

$car = new Car("Mercedes");
// Output: Car Mercedes created.
?>
