<?php
// 1. String
$city = "Delhi";
echo $city;

// 2. Integer
$number = 100;
echo $number;

// 3. Float
$price = 99.99;
echo $price;

// 4. Boolean
$is_active = false;
var_dump($is_active);

// 5. Array
$colors = ["Red", "Green", "Blue"];
print_r($colors);

// 6. Object
class Car {
  public $brand = "BMW";
}
$car = new Car();
echo $car->brand;

// 7. Null
$val = null;
var_dump($val);

// 8. Resource (Database Connection Example - pseudo)
$conn = fopen("test.txt", "r");
var_dump($conn);

// 9. String + Integer (automatic type juggling)
$num = "20";
$total = $num + 10;
echo $total; // 30

// 10. Type checking
$age = 25;
echo gettype($age); // integer
?>
