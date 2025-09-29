<?php
// 1. String
$city = "Delhi";
echo $city . "<br>";

// 2. Integer
$number = 100;
echo $number . "<br>";

// 3. Float
$price = 99.99;
echo $price . "<br>";

// 4. Boolean
$is_active = false;
var_dump($is_active);
echo "<br>";

// 5. Array
$colors = ["Red", "Green", "Blue"];
print_r($colors);
echo "<br>";

// 6. Object
class Car {
  public $brand = "BMW";
}
$car = new Car();
echo $car->brand . "<br>";

// 7. Null
$val = null;
var_dump($val);
echo "<br>";

// 8. Resource (File Example) - safe
$file_path = "C:\\xampp\\htdocs\\PhpPractice\\3_Data_Types\\test.txt";
if (file_exists($file_path)) {
    $file = fopen($file_path, "r");
    echo "<pre>";
    echo fread($file, filesize($file_path)); // file ka content print kare
    echo "</pre>";
    fclose($file);
} else {
    echo "File not found: $file_path<br>";
}


// 9. String + Integer (automatic type juggling)
$num = "20";
$total = $num + 10;
echo $total . "<br>"; // 30

// 10. Type checking
$age = 25;
echo gettype($age) . "<br>"; // integer
?>
