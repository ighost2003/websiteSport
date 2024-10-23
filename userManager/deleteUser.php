<?php
    $id = $_GET['sid'];
    require_once '../connection.php';
    $deletesql = "DELETE FROM nguoidung WHERE MaND='$id'";
    if(mysqli_query ($conn, $deletesql))
    {
        header("Location: userView.php");
    }
?>