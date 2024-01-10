<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="phpdb";

$conn = mysqli_connect($servername , $username, $password , $database);
$sql = "CREATE TABLE IF NOT EXISTS mytable (
    sn INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    age INT NOT NULL
)";

$result = mysqli_query($conn , $sql);
if($result){
    echo "the table is created";
}
else{
 echo "unable to create".mysqli_error($conn);
}

?>

