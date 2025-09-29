<?php
// 1. Indexed array
$nums = [10, 20, 30];
echo $nums[1]; // 20

// 2. Associative array
$student = ["name"=>"Sonu", "age"=>22];
echo $student["name"];

// 3. Multidimensional array
$matrix = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo $matrix[1][2]; // 6

// 4. Add element in array
$fruits = ["Apple", "Banana"];
$fruits[] = "Mango";
print_r($fruits);

// 5. Remove element
unset($fruits[1]);
print_r($fruits);

// 6. count()
echo count($fruits);

// 7. foreach loop
foreach($student as $key=>$value) {
  echo "$key : $value <br>";
}

// 8. Array functions
$numbers = [5,2,9,1];
sort($numbers);
print_r($numbers);

// 9. Associative array sorting
$marks = ["Math"=>90, "Science"=>80, "English"=>85];
arsort($marks);
print_r($marks);

// 10. Array merge
$a = [1,2];
$b = [3,4];
$c = array_merge($a,$b);
print_r($c);
?>
