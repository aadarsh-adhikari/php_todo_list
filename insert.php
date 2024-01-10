<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Successfully connected </br>";
}
$name="kanye";
$gender="unknown";
$age="69";
$sql = "INSERT INTO `mytable` (`name`, `gender`, `age`) VALUES ('$name', '$gender', '$age')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record inserted successfully";
} else {
    echo "Unable to insert record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
