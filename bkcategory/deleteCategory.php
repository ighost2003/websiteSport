<?php
    require_once '../connection.php';
    $id = $_GET['sid'];
    $deletesql = "DELETE FROM theloai WHERE MaTL ='$id'";
    if(mysqli_query($conn,$deletesql)){
        header("location: categoryView.php");
    }
    
