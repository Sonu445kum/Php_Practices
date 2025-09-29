<?php
// Simple array
for($i = 1; $i <= 5; $i++){
    echo $i . " ";
}

// Associative array
for($i = 10; $i >= 1; $i--){
    echo $i . " ";
}

// Sum of array numbers
for($i = 2; $i <= 20; $i+=2){
    echo $i . " ";
}

// Multiply array numbers
for($i = 1; $i < 20; $i+=2){
    echo $i . " ";
}

// Uppercase array strings
$sum = 0;
for($i=1; $i<=10; $i++){
    $sum += $i;
}
echo "Sum = $sum";

// factorial of a number
$fact = 1;
for($i=1; $i<=5; $i++){
    $fact *= $i;
}
echo "Factorial = $fact";

// Reverse the String
$str = "Sonu";
$rev = "";
for($i=strlen($str)-1; $i>=0; $i--){
    $rev .= $str[$i];
}
echo $rev;

// Print the number >3
for($i=3; $i<=30; $i+=3){
    echo $i . " ";
}

?>