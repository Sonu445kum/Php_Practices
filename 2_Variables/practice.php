<?php
// 1. Simple string variable
$name = "Sonu";
echo $name;

// 2. Integer variable
$age = 22;
echo $age;

// 3. Float variable
$pi = 3.14;
echo $pi;

// 4. Boolean variable
$is_student = true;
echo $is_student;

// 5. Concatenation
$fname = "Sonu";
$lname = "Kumar";
echo $fname . " " . $lname;

// 6. Using variables in string (double quotes allows parsing)
echo "My name is $fname";

// 7. Variable variables
$food = "fruit";
$fruit = "Apple";
echo $$food; // Apple

// 8. Global variable inside function
$x = 5;
function test1() {
  global $x;
  echo $x;
}
test1();

// 9. Static variable inside function
function counter() {
  static $count = 0;
  $count++;
  echo $count . "<br>";
}
counter();
counter();
counter();

// 10. Null variable
$val = null;
echo $val; // prints nothing
?>
