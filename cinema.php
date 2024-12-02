<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cinema";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$movie=$_POST['movie'];
$date=$_POST['date'];
$tickets=$_POST['tickets'];



$sql = "INSERT INTO bookings(movie, date, tickets)
VALUES ('$movie','$date','$tickets')";

if($conn->query($sql) == TRUE){
   echo "submitted successfully";
}else{
   echo "Error: " .$sql . "<br>" .$conn->error; 
}

$conn->close();
?>