<?php
// ======================
// 1. Arithmetic Operators
// ======================
echo "<h3>1. Arithmetic Operators</h3>";
$a = 10;
$b = 3;

echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";
echo "a ** b = " . ($a ** $b) . "<br>"; // Exponentiation


// ======================
// 2. Assignment Operators
// ======================
echo "<h3>2. Assignment Operators</h3>";
$x = 5;
echo "x = " . $x . "<br>";

$x += 3; echo "x += 3 → " . $x . "<br>";
$x -= 2; echo "x -= 2 → " . $x . "<br>";
$x *= 4; echo "x *= 4 → " . $x . "<br>";
$x /= 2; echo "x /= 2 → " . $x . "<br>";
$x %= 3; echo "x %= 3 → " . $x . "<br>";


// ======================
// 3. Comparison Operators
// ======================
echo "<h3>3. Comparison Operators</h3>";
$y = 10;
$z = "10";

var_dump($y == $z); echo " (==)<br>";   // true
var_dump($y === $z); echo " (===)<br>"; // false
var_dump($y != $z); echo " (!=)<br>";   // false
var_dump($y <> $z); echo " (<> same as !=)<br>"; // false
var_dump($y !== $z); echo " (!==)<br>"; // true
var_dump($y > 5); echo " (> 5)<br>";    // true
var_dump($y < 20); echo " (< 20)<br>";  // true
var_dump($y >= 10); echo " (>= 10)<br>";// true
var_dump($y <= 10); echo " (<= 10)<br>";// true
var_dump($y <=> 20); echo " (<=> 20)<br>"; // spaceship: -1
var_dump($y <=> 10); echo " (<=> 10)<br>"; // 0
var_dump($y <=> 5);  echo " (<=> 5)<br>";  // 1


// ======================
// 4. Increment / Decrement
// ======================
echo "<h3>4. Increment / Decrement</h3>";
$num = 5;
echo "num = " . $num . "<br>";
echo "++num = " . (++$num) . "<br>"; // pre-increment
echo "num++ = " . ($num++) . "<br>"; // post-increment
echo "Now num = " . $num . "<br>";
echo "--num = " . (--$num) . "<br>"; // pre-decrement
echo "num-- = " . ($num--) . "<br>"; // post-decrement
echo "Now num = " . $num . "<br>";


// ======================
// 5. Logical Operators
// ======================
echo "<h3>5. Logical Operators</h3>";
$val1 = true;
$val2 = false;

var_dump($val1 && $val2); echo " (AND)<br>";
var_dump($val1 || $val2); echo " (OR)<br>";
var_dump(!$val1); echo " (NOT)<br>";
var_dump($val1 and $val2); echo " (and)<br>";
var_dump($val1 or $val2); echo " (or)<br>";
var_dump($val1 xor $val2); echo " (xor)<br>";


// ======================
// 6. String Operators
// ======================
echo "<h3>6. String Operators</h3>";
$str1 = "Hello";
$str2 = " World";
echo $str1 . $str2 . "<br>"; // Concatenation
$str1 .= $str2; // Concatenation assignment
echo $str1 . "<br>";


// ======================
// 7. Array Operators
// ======================
echo "<h3>7. Array Operators</h3>";
$arr1 = array("a" => "red", "b" => "green");
$arr2 = array("c" => "blue", "d" => "yellow");

print_r($arr1 + $arr2); echo " (Union)<br>";
var_dump($arr1 == $arr2); echo " (==)<br>";
var_dump($arr1 === $arr2); echo " (===)<br>";
var_dump($arr1 != $arr2); echo " (!=)<br>";
var_dump($arr1 <> $arr2); echo " (<>)<br>";
var_dump($arr1 !== $arr2); echo " (!==)<br>";


// ======================
// 8. Type Operators
// ======================
echo "<h3>8. Type Operators</h3>";

class Car {}
class Bike extends Car {}

$car = new Car();
$bike = new Bike();

var_dump($bike instanceof Car); echo "<br>"; // true
var_dump($car instanceof Bike); echo "<br>"; // false


// ======================
// 9. Error Control Operator
// ======================
echo "<h3>9. Error Control Operator</h3>";
$file = @file("non_existing.txt"); // @ suppresses error
var_dump($file);


// ======================
// 10. Execution Operator
// ======================
echo "<h3>10. Execution Operator</h3>";
$output = `php -v`; // Run shell command
echo "<pre>$output</pre>";
?>
