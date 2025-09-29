<?php
// 1. Basic function
function greet() {
  echo "Hello!";
}
greet();

// 2. Function with parameter
function sayHello($name) {
  echo "Hello, $name";
}
sayHello("Sonu");

// 3. Function with return
function add($a, $b) {
  return $a + $b;
}
echo add(3, 5);

// 4. Default parameter
function welcome($name="Guest") {
  echo "Welcome, $name";
}
welcome();
welcome("Sonu");

// 5. Passing by reference
function increment(&$num) {
  $num++;
}
$x = 5;
increment($x);
echo $x; // 6

// 6. Variable length arguments
function sum(...$numbers) {
  return array_sum($numbers);
}
echo sum(1,2,3,4);

// 7. Recursive function (Factorial)
function factorial($n) {
  if($n <= 1) return 1;
  return $n * factorial($n-1);
}
echo factorial(5);

// 8. Anonymous function
$square = function($n) {
  return $n*$n;
};
echo $square(4);

// 9. Arrow function
$cube = fn($n) => $n*$n*$n;
echo $cube(3);

// 10. Function inside function
function outer() {
  function inner() {
    return "Inner function!";
  }
}
outer();
echo inner();
?>
