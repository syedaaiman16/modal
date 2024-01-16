<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbaiman";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "connection was successful";

// also store in variable and pass
$name = "Nehan";
$age = 25;
$gender = "female";

// sql query to be executed
$sql = "INSERT INTO `mytable` (`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";

$result = mysqli_query($conn,$sql);

// check for the table creation success
if ($result){
    echo "the data was inserted successfully";
}
else{
    echo "the db was not created successfully because of this error -> " . mysqli_error($conn);
}
?>