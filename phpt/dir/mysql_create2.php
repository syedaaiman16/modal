<?php
// connecting to db
$servername = "localhost";
$username = "root";
$password = "";

// create connection 
$conn = mysqli_connect($servername,$username,$password);

// create db
$sql = 'CREATE DATABASE dbAiman3';
$result = mysqli_query($conn,$sql);

// check for the db creation success
if ($result){
    echo "the db was created successfully";
}
else{
    echo "the db was not created successfully because of this error -> " . mysqli_error($conn);
}




?>
