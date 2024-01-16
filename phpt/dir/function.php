<?php

function processMMarks($marks){
    $sum=0;
    foreach($marks as $value){
        $sum += $value;
    }
    return $sum;
}

$mazz=[90,98,99,100,87];
$summarks = processMMarks($mazz);
echo "$summarks <br>";



function avgMarks($marks){
    $sum=0;
    $i=0;
    foreach($marks as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$mazz=[90,98,99,100,87];
$avgmarks = avgMarks($mazz);
echo "$avgmarks <br>";
?>
