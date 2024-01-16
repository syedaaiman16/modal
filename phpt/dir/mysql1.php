<?php

// ways to connect to a MySQL Database
// 1.MySQLi extension( agr srf sql se hi connect rehna h tw ye sahi h)
// 2.PDO (agr bht sare database same krna h ya alg alg database se integrate krna h tw PDO is better option)


// connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);



// hmne agr $password  mn koi input dedia tw error aega os error ki jagah apna msg print krane k lie hm "die " use krenge
// die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "connection was successful";

?>