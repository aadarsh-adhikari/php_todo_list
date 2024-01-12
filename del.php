<?php
require_once "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $noteId = intval($_GET['id']); // Convert to integer to prevent SQL injection
    $sql = "DELETE FROM `notes` WHERE SN = $noteId";
    $result = mysqli_query($conn, $sql);
    }
header("Location: index.php");
exit();
?>
