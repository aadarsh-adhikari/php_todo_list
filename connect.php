<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
    die("There is a connection error: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
