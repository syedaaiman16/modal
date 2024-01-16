<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbaiman";  //agr connection bana hua h tw ye sath mn add krna hai connection bnante hue

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "connection was successful";

// create a table
$sql = "CREATE TABLE `mytable` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))" ;

$result = mysqli_query($conn,$sql);

// check for the table creation success
if ($result){
    echo "the db was created successfully";
}
else{
    echo "the db was not created successfully because of this error -> " . mysqli_error($conn);
}
?>
