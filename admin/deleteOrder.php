<?php
    require_once '../connection.php';
    if(isset($_GET['ooid'])){
        $id = $_GET['ooid'];
        $deletesql = "DELETE FROM donhang WHERE MaDH ='$id'";
        if(mysqli_query($conn,$deletesql)){
            header("Location: orderOAdmin.php"); 
        }
        header("Location: orderOAdmin.php");
    }
?>