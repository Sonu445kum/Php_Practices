<?php
// Ek array banao jisme 5 fruits ho aur unhe loop me print karo.
// here i m create an array which store the 5 fruits
// $fruits =array("apple","mango","Lichi","Banana");
// // here i m print the fruits with loops
// for($i=0; $i<count($fruits); $i++){
//     echo ($fruits[$i]."\n");
// }

// Ek associative array banao name, age, city ke saath aur print karo.
// here i m create An Associative array:
// $person =array(
//     "name" =>"Sonu",
//     "age" =>21,
//     "address" =>"Bihar patna"
// );
// // here i m printing the value of Associative Array:
// echo "Name:" .$person["name"]."\n";
// echo "Age:".$person["age"] ."\n";
// echo "address:".$person["address"]."\n"; 


// Ek multidimensional array banao student ke naam aur marks ke saath aur print karo.
// here i m create the multidimenonal array which store some array inside a single array
// $person =array(
//     array("name"=>"sonu","marks"=>80,"age"=>21),
//     array("name"=>"Monu","marks"=>70,"age"=>22),
//     array("name"=>"Gonu","marks"=>90,"age"=>23),
//     array("name"=>"Ronu","marks"=>60,"age"=>24),
// );
// // Here i m Print the values of Multidimensional Array
// foreach($person  as $newPerson  ){ 
//     echo "Name:".$newPerson["name"]." "."Marks:".$newPerson["marks"]." "."age:".$newPerson["age"]."\n";
// }


// Ek array banao aur usme sort() karke ascending order me print karo.
// here i m create the number of array which have some number values
// $num= array(10,21,3,40,5,60,7);
// // here i m sort the number in the ascending order
// sort($num);
// foreach($num as $n){
//     echo $n." ";
// }


// Ek array banao aur usko reverse order me print karo.
// $num =array(1,2,3,4,5,6,7,8);
// for($i=count($num); $i>=1; $i--){
//         echo $num[$i]." ";
// }

// Ek associative array banao aur uske keys print karo.
// $person = array("Name"=>"Sonu","age"=>21,"marks"=>90);
// foreach($person as $key => $value){
//     echo $key." ";
// }
// foreach($person as $value){
//     echo   $value." ";
// }

// Ek array me 5 numbers rakho aur unka sum nikal ke print karo.
// $arr = array(1,2,3,4,5,6,7,8,9,10);
// // print the sum of value og the given array;
// $sum =0;
// for($i=0; $i<count($arr); $i++){
//     $sum+=$arr[$i];
// }
// // her i m print the value
// echo "The Sum of The given Array Value:".$sum;

// Ek program likho jo ek array me se maximum aur minimum number nikaale.
// $arr =array(1,2,3,4,5,6,7,8,9,10);
// // here i m store the first value of the given array
// $max =$arr[0];
// $min =$arr[0];
// // now i m traverse of Each Element with for loop
// for($i=0; $i<count($arr); $i++){
//     // here i m apply the conditions for find the max value
//     if($arr[$i] > $max){
//         $max=$arr[$i];
//     }
//     // here i m apply the conditions for find the min value
//     if($arr[$i]<$min){
//         $min=$arr[$i];
//     }
// }
// echo "The Min Value of The Given array:".$min."\n";
// echo "The Max Value of The Given array:".$max;

// Ek array merge karo do alag arrays ko join karke.
// Do alag arrays
// $array1 = array(1, 2, 3);
// $array2 = array(4, 5, 6);

// // Merge arrays
// $mergedArray = array_merge($array1, $array2);

// // Print merged array
// foreach ($mergedArray as $value) {
//     echo $value . " ";
// }


// Ek program likho jo array me se duplicate elements remove kare.
// Array with duplicate elements
// $numbers = array(1, 2, 2, 3, 4, 4, 5, 5, 5, 6);

// // Remove duplicates
// $uniqueNumbers = array_unique($numbers);

// // Print result
// foreach ($uniqueNumbers as $num) {
//     echo $num . " ";
// }
?>