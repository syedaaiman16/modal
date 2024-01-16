<?php
// jitne array oski utni dimension

// two dimension arr(ek value ko access krne k lie 2value ki zrort h)
$multiDim = array(
    array(2,5,7,8),
    array(1,2,3,4),
    array(4,5,6,7)
);
// echo var_dump($multiDim);

// show type var_dump

echo $multiDim[0][0];
echo '<br>';
echo $multiDim[1][0];


// printing contents of 2D array
for ($i=0; $i<count($multiDim) ; $i++) { 
    echo var_dump($multiDim[$i]);
    echo '<br>';
}

for ($i=0; $i<count($multiDim) ; $i++) { 
    for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo '<br>';
}


?>