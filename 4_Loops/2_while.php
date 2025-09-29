<?php
// Print 1to 5 number
$x = 1;
while($x <= 5){
    echo $x . " ";
    $x++;
}

// Print 10-1 number
$x = 10;
while($x >= 1){
    echo $x . " ";
    $x--;
}

// print he even number 2-20
$x = 2;
while($x <= 20){
    echo $x . " ";
    $x+=2;
}
//sum 1-10 number
$x = 1;
$sum = 0;
while($x <= 10){
    $sum += $x;
    $x++;
}
echo "Sum = $sum";

// Reverse the Number
$num = 12345;
$rev = 0;
while($num != 0){
    $rev = $rev*10 + $num%10;
    $num = (int)($num/10);
}
echo "Reverse = $rev";


// Factorial of 5 Number
$n = 5;
$fact = 1;
while($n > 0){
    $fact *= $n;
    $n--;
}
echo "Factorial = $fact";

// Print Characters of The String
$str = "Sonu";
$i = 0;
while($i < strlen($str)){
    echo $str[$i] . " ";
    $i++;
}

// Multiples 4 upto 40
$i = 4;
while($i <= 40){
    echo $i . " ";
    $i += 4;
}

// Countdown 20 -0
$i = 20;
while($i >= 0){
    echo $i . " ";
    $i--;
}

?>