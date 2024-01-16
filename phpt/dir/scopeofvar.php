<?php


// $a = 98;
// function printval()
// {
//     $a = 88;

//     echo "the val of your val is $a";
// }

// printval();


// local - function k andr k
// global - function k bahar k

// if we want to use global var inside function then do this

$a = 98;
function printval()
{
    // give access of global var
    global $a;
    echo "the val of your val is $a";
}

printval();

echo var_dump($GLOBALS);
echo var_dump($GLOBALS['a']);
?>