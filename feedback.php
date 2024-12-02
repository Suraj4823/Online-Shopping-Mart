<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "suraj";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO feedback(name, email, message)
VALUES ('$name','$email','$message')";

if($conn->query($sql) == TRUE){
   echo "submitted successfully";
}
else{
   echo "Error: " .$sql . "<br>" .$conn->error; 
}


$conn->close();
?>