<?php
require_once "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $sql ="INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
  $result = mysqli_query($conn,$sql);
 if($result){
  header("Location: index.php");
  exit();
}
}
?>