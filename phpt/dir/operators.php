<?php

// 1.Arithmetic
$a = 45;
$b = 8;
echo "for a + b is, the result is ".($a + $b)."<br>";
echo $a + $b."<br>";
echo "for a - b is, the result is ".($a - $b)."<br>";
echo "for a * b is, the result is ".($a * $b)."<br>";
echo "for a / b is, the result is ".($a / $b)."<br>";
echo "for a % b is, the result is ".($a % $b)."<br>";
echo "for a ** b is, the result is ".($a ** $b)."<br>";

// 2.Assignment

$x = $a;
echo $x;
echo "<br>";

$c=7;
$d=8;
// +=, -=, *=, /=

// 3.comparison operators
//   == , >= , <= etc
echo var_dump($c==$d);
echo "<br>";

// 4. logical operators
$m=true;
$n=false;
// and can be write as &&
echo var_dump($m and $n);
// or can be write as ||
echo var_dump($m or $n);
echo (!$m);
 


?>