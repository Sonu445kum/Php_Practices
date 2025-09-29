<!-- Static Properties & Methods

Static members belong to class, not object

Access via ClassName::member -->

<?php
class Car {
    public static $wheels = 4;

    public static function showWheels() {
        echo "A car has " . self::$wheels . " wheels.<br>";
    }
}

echo Car::$wheels; // 4
Car::showWheels(); // A car has 4 wheels.
?>
