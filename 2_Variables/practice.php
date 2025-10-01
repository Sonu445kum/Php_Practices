<?php
// 1. Simple string variable
// $name = "Sonu";
// echo $name;

// 2. Integer variable
// $age = 22;
// echo $age;

// 3. Float variable
// $pi = 3.14;
// echo $pi;

// 4. Boolean variable
// $is_student = true;
// echo $is_student;

// 5. Concatenation
// $fname = "Sonu";
// $lname = "Kumar";
// echo $fname . " " . $lname;

// 6. Using variables in string (double quotes allows parsing)
// echo "My name is $fname";

// 7. Variable variables
// $food = "fruit";
// $fruit = "Apple";
// echo $$food; // Apple

// 8. Global variable inside function
// $x = 5;
// function test1() {
//   global $x;
//   echo $x;
// }
// test1();

// 9. Static variable inside function
// function counter() {
//   static $count = 0;
//   $count++;
//   echo $count . "<br>";
// }
// counter();
// counter();
// counter();

// 10. Null variable
// $val = null;
// echo $val; // prints nothing


// Ek program banao jo do variables me numbers store kare aur unka sum print kare.
// create two varaibles;
// $x=4;
// $y=7;
// echo ("The Sum of Two Num:".$x+$y);


// Ek variable me string store karo aur uski length strlen() function se print karo.
// create a string varables which store the value
// $name ="Sonu";
// echo strlen($name);

// Ek variable me float store karo aur usko integer me convert karke print karo.
// create here the float variable which store the value
// $num =12.4;
// $num=(int)$num;
// echo ("Convert float into integers:".$num);

// Ek variable me boolean rakho aur check karo ki true hai ya false.
// create here variables which store the boolean value
// $isFlag =true;
// echo($isFlag);

// Ek program likho jo temperature (Celsius) ko Fahrenheit me convert kare.
// $celsius =5;
// // here i m convert Celsius to Fahrenheit
// $Fahrenheit =($celsius*9/5) + 32;
// echo ("Convert Celsius to Fahrenheit temperature:".$Fahrenheit);

// Ek variable me naam rakho aur strtoupper() se usko uppercase me print karo.
// here i m create a variables which store the string value;
// $greeting ="good morning";
// // here i m using the strtoupper() function for converting the characters into the uppercase ;
// echo ("Converting into the UpperCase:".strtoupper($greeting));



// Ek variable me ek sentence rakho aur usme words count karke print karo.
// here i m create a variables which store the values of sentences;
// $sentences ="Hi , There I M Sonu From Bihar And I M Working in the SSI Company";
// // count the word in the given sentences;
// echo ("The Count Word in the given sentences:".str_word_count($sentences));

// Ek program likho jo user ke age ko input le aur check kare ki woh “Adult” hai ya “Minor”.
// here i m create a varables which store the value of age;
// $personAge =32;
// if($personAge >=18){
//   echo ("The Person is Adult:");
// }else{
//   echo ("The Person is Minor");
// }

// Ek variable me array rakho aur usko var_dump() karke print karo.
// $arr =array("Hello","Brother","How","are","you");
// echo(var_dump($arr));

// Ek variable ke datatype ko gettype() function se check karke print karo.
// here i m create a varibles which store the value of datatypes;
// $name ="Sonu";
// echo(gettype($name));

// gettype() functions:
// Sirf datatype ka naam string me return karta hai.
// Simple aur chhoti information deta hai.
// Mostly quick check ke liye use hota hai.
$a = 42;
$b = 3.14;
$c = "Hello";
echo gettype($a) . "\n"; // integer
echo gettype($b) . "\n"; // double
echo gettype($c) . "\n"; // string


// var_dump() Function:
// Variable ka datatype + value + extra info (length, array keys, object details, etc.) deta hai.
// Debugging ke time bahut useful hota hai.
// Output thoda detailed hota hai.
?>
