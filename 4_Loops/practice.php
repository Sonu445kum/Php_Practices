<?php
// 1. For loop basic
for($i=1; $i<=5; $i++) {
  echo $i . " ";
}

// 2. While loop
$x = 1;
while($x <= 5) {
  echo $x . " ";
  $x++;
}

// 3. Do-while loop
$y = 1;
do {
  echo $y . " ";
  $y++;
} while($y <= 5);

// 4. Foreach loop with array
$fruits = ["Apple", "Banana", "Mango"];
foreach($fruits as $fruit) {
  echo $fruit . "<br>";
}

// 5. Break in loop
for($i=1; $i<=10; $i++) {
  if($i == 5) break;
  echo $i . " ";
}

// 6. Continue in loop
for($i=1; $i<=10; $i++) {
  if($i == 5) continue;
  echo $i . " ";
}

// 7. Nested loop (Multiplication table)
for($i=1; $i<=3; $i++) {
  for($j=1; $j<=3; $j++) {
    echo $i*$j . " ";
  }
  echo "<br>";
}

// 8. Loop with array keys
$marks = ["Math"=>90, "Science"=>80];
foreach($marks as $subject=>$score) {
  echo "$subject : $score <br>";
}

// 9. Infinite loop with break
$i = 1;
while(true) {
  echo $i . " ";
  if($i == 3) break;
  $i++;
}
echo "";
// 10. Loop backwards
for($i=5; $i>=1; $i--) {
  echo $i . " ";
}
?>
