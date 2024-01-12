<?php
require_once "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noteId = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "UPDATE `notes` SET `title`='$title', `description`='$description' WHERE SN=$noteId";
    $result = mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>
