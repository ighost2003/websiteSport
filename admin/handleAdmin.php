<?php
    require_once '../connection.php';
    if(isset($_GET['hid'])){
        $id = $_GET['hid'];
        $update = "UPDATE donhang SET TrangThai='1' WHERE MaDH = '$id'";

        if(mysqli_query($conn,$update)){
            header("Location: orderOAdmin.php");
        }
    }

?>