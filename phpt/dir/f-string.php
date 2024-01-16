<?php
$n = "harry is a gud boy";
echo $n;
echo "<br>";

echo "the length of "."my string is ".strlen($n);

echo "<br>";
echo str_word_count($n);
echo "<br>";
echo strrev($n);
echo "<br>";
echo strpos($n,"harry");
echo "<br>";
echo str_replace("harry","rohan",$n);
echo "<br>";
echo str_repeat($n,4);
echo "<br>";
echo "<pre>";
echo rtrim("       this is a good boy     ");
echo "<br>";
echo ltrim("     this is a boy       ");
echo "</pre>";
?>