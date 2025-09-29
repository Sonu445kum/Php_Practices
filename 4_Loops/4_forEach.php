<?php
// Simple array
$arr = ["PHP","JS","React"];
foreach($arr as $val){
    echo $val . " ";
}

// Associative Array:
$person = ["name"=>"Sonu","age"=>20,"city"=>"Delhi"];
foreach($person as $key => $val){
    echo "$key : $val <br>";
}


// Sum of Array Number
$nums = [1,2,3,4,5];
$sum = 0;
foreach($nums as $n){
    $sum += $n;
}
echo $sum;


// Multiply array Number
$nums = [1,2,3,4];
$prod = 1;
foreach($nums as $n){
    $prod *= $n;
}
echo $prod;


// Uppercase String
$words = ["php","js","react"];
foreach($words as $w){
    echo strtoupper($w) . " ";
}


// Array with key-value
$marks = ["Math"=>90,"Science"=>85,"English"=>95];
foreach($marks as $sub => $score){
    echo "$sub = $score<br>";
}


// Print number >3
$nums = [1,2,3,4,5];
foreach($nums as $n){
    if($n > 3) echo $n . " ";
}

// Concate Array String
$words = ["I","Love","PHP"];
$sentence = "";
foreach($words as $w){
    $sentence .= $w . " ";
}
echo $sentence;


// Nested Array iterations
$matrix = [[1,2],[3,4]];
foreach($matrix as $row){
    foreach($row as $val){
        echo $val . " ";
    }
}

?>