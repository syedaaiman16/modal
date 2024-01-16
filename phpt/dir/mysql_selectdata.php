<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
echo "connection was successful<br>";

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn,$sql);

// find no of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo "<br>";


// display the rows returned by sql query
if ($num>0){
    // mysqli_fetch_assoc()---> this funtion fetch records one by one
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // we can fetch in a better way by while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] . "Hello". $row['name'] . "Welcome to" . $row['desc'];
        echo "<br>";
    }
}


?>