<?php
// PHP Array Functions List (Important)
// 1-> Array Creation & Info:
// array() → Array create karne ke liye
// count($array) → Array ke elements count karne ke liye
// is_array($var) → Check karta hai ki variable array hai ya nahi
// Array create
// $fruits = array("apple", "mango", "banana");
// print_r($fruits);
// // Output: Array ( [0] => apple [1] => mango [2] => banana )

// // Count elements
// echo count($fruits);
// // Output: 3

// // Check array
// var_dump(is_array($fruits));
// Output: bool(true)

// 2-> Adding & Removing Elements:
// array_push($array, $value) → End me element add
// array_pop($array) → Last element remove
// array_shift($array) → First element remove
// array_unshift($array, $value) → Beginning me element add

// $numbers = array(1,2,3);

// // Add at end
// array_push($numbers, 4);
// print_r($numbers);
// // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

// // Remove last
// array_pop($numbers);
// print_r($numbers);
// // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )

// // Add at beginning
// array_unshift($numbers, 0);
// print_r($numbers);
// // Output: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 )

// Remove first
// array_shift($numbers);
// print_r($numbers);
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 )



// 3-> Sorting:
// sort($array) → Ascending order
// rsort($array) → Descending order
// asort($array) → Associative array ke values ascending
// arsort($array) → Associative array ke values descending
// ksort($array) → Associative array ke keys ascending
// krsort($array) → Associative array ke keys descending

// $arr = array(4,2,8,1);

// Ascending
// sort($arr);
// print_r($arr);
// Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 8 )

// Descending
// rsort($arr);
// print_r($arr);
// Output: Array ( [0] => 8 [1] => 4 [2] => 2 [3] => 1 )

// Associative array
// $ages = array("Sonu"=>22, "Ravi"=>20, "Aman"=>25);

// Sort by value ascending
// asort($ages);
// print_r($ages);
// Output: Array ( [Ravi] => 20 [Sonu] => 22 [Aman] => 25 )

// Sort by key ascending
// ksort($ages);
// print_r($ages);
// Output: Array ( [Aman] => 25 [Ravi] => 20 [Sonu] => 22 )



// 4-> Searching & Checking:
// in_array($value, $array) → Check karta hai value exist karti hai ya nahi
// array_search($value, $array) → Value ka key return karta hai
// array_key_exists($key, $array) → Key exist karti hai ya nahi

// $fruits = array("apple", "mango", "banana");

// Check value exists
// var_dump(in_array("mango", $fruits));
// Output: bool(true)

// Find key of value
// echo array_search("banana", $fruits);
// Output: 2

// Check key exists
// $person = array("name"=>"Sonu","age"=>22);
// var_dump(array_key_exists("age", $person));
// Output: bool(true)




// 5-> Keys & Values:
// array_keys($array) → Sab keys ka array
// array_values($array) → Sab values ka array
// array_flip($array) → Keys aur values swap kar deta hai
// $person = array("name"=>"Sonu","age"=>22,"marks"=>90);

// Get keys
// print_r(array_keys($person));
// Output: Array ( [0] => name [1] => age [2] => marks )

// Get values
// print_r(array_values($person));
// Output: Array ( [0] => Sonu [1] => 22 [2] => 90 )

// Flip keys and values
// print_r(array_flip($person));
// Output: Array ( [Sonu] => name [22] => age [90] => marks )

// 6-> Higher-Order Functions
// array_map(function, $array) → Har element pe function apply
// array_filter($array, function) → Filter elements
// array_reduce($array, function) → Array ko single value me reduce
// $nums = array(1,2,3,4);

// array_map - square each element
// $squared = array_map(fn($n) => $n*$n, $nums);
// print_r($squared);
// Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )

// array_filter - only even numbers
// $even = array_filter($nums, fn($n) => $n%2==0);
// print_r($even);
// Output: Array ( [1] => 2 [3] => 4 )

// array_reduce - sum of all elements
// $sum = array_reduce($nums, fn($carry,$n)=>$carry+$n, 0);
// echo $sum;


// 7-> Other Useful Functions:
// implode($glue, $array) → Array ko string me convert
// explode($delimiter, $string) → String ko array me convert
// array_rand($array) → Random key choose
// array_product($array) → Multiply all elements
// array_sum($array) → Sum of elements
// $nums = array(1,2,3);

// Convert array to string
 // echo implode("-", $nums);
// Output: 1-2-3

// Convert string to array
// $str = "apple,banana,mango";
// $arr = explode(",", $str);
// print_r($arr);
// Output: Array ( [0] => apple [1] => banana [2] => mango )

// Random key
// $fruits = array("apple","mango","banana");
// echo array_rand($fruits);
// Output: random key 0/1/2

// Sum and product
// echo array_sum($nums); // Output: 6
// echo array_product($nums); // Output: 6
 ?>