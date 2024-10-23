<?php
    require_once '../connection.php';
    $id = $_GET['sid'];
    $deletesql = "DELETE FROM mauao WHERE Ma ='$id'";
    if(mysqli_query($conn,$deletesql)){
        header("location: View.php");
    }
    
