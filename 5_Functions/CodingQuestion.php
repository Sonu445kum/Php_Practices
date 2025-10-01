<?php
// Ek function banao jo do numbers ka sum return kare.
// function sum2Num($num1,$num2){
//     return $num1 + $num2;
// };
// // here i m calling the functions
// $ans=sum2Num(5,6);
// echo "The Sum Of Two Num:".$ans;

// Ek function banao jo ek string ko reverse kare.
// $name = "Sonu";
// function reverseStr($name){
//     $reversed = ""; // empty string for reversed
//     for($i = strlen($name) - 1; $i >= 0; $i--){
//         $reversed .= $name[$i]." "; // concatenate characters in reverse
//     }
//     echo "The Reversed String: ".$reversed;
// }

// // Calling the function
// reverseStr($name);



// Ek function banao jo ek number ka factorial return kare.
// function findFactorial($num){
//     // base case:
//     if($num ==0) return 1;
//     // recursive case:
//     return $num*findFactorial($num - 1);
// };
// // here i m calling the functions
// $fact=findFactorial(5);
// echo "The Factorial Of Number:".$fact;


// Ek function banao jo ek array me se sabse bada element return kare.
// $numArr =array(1,2,3,4,5,6,7,8);
// $max =$numArr[0];
// function findMaxElem($numArr){
//     for($i=0; $i<count($numArr); $i++){
//         if($numArr[$i] > $max){
//             $max =$numArr[$i];
//         }
//     }
//     return $max;
// };
// $MaxValue =findMaxElem($numArr);
// echo "The Max Value of in the given Array:".$MaxValue;

// Ek function banao jo ek number prime hai ya nahi check kare.

// function checkPrimeNum($num){
//     // base case
//     if($num <2) return false;
//     for($i=2; $i<=sqrt($num); $i++){
//         if($num % $i ==0) return false;
//     }
//     return true;
// };
// // here i m calling the functions 
// $num = 19;

// if(checkPrimeNum($num)) {
//     echo $num . " is a prime number.";
// } else {
//     echo $num . " is not a prime number.";
// }

// Ek function banao jo ek string palindrome hai ya nahi check kare.
// $name = "nitin";

// function checkPalindrome($name){
//     for($i = 0; $i < strlen($name)/2; $i++){
//         if($name[$i] != $name[strlen($name) - 1 - $i]){
//             return false;
//         }
//     }
//     return true;
// }

// $isPalindrome = checkPalindrome($name);

// if($isPalindrome){
//     echo "The string is a Palindrome";
// } else {
//     echo "The string is NOT a Palindrome";
// }

// Ek function banao jo ek sentence me words count karke return kare.
// function countWords($sentence){
//     // explode() function sentence ko words me todta hai space ke basis pe
//     $words = explode(" ", $sentence);
//     // count() function words array ka size return karta hai
//     return count($words);
// }

// // Example use
// $sentence = "Hello world, this is PHP!";
// $wordCount = countWords($sentence);

// echo "The sentence has " . $wordCount . " words.";

// Ek function banao jo Celsius ko Fahrenheit me convert kare.
// function celsiusTOFahrenheit($celsius){
//     $fahrenheit =($celsius*9/5) + 32;
//     return $fahrenheit;
// };
// $fahrenheit =celsiusTOFahrenheit(32);
// echo "Convert Celsius to Fahrenheit:".$fahrenheit;

// Ek function banao jo ek array ka average calculate kare.
// $numArr = array(1,2,3,4,5,6,7,8,9,10);
// $sum =0;
// function FindAvg($numArr){
//     for($i =0; $i<count($numArr); $i++){
//         $sum+=$numArr[$i];
//     };
//      return $avg=$sum/count($numArr);
// };
// $AverageNumber =FindAvg($numArr);
// echo "The Average Number in the Array:".$AverageNumber;

// Ek function banao jo Fibonacci series print kare.
?>