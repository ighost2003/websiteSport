<?php
    session_start();
    require_once 'connection.php';
    if(isset($_POST['send'])){
        $email = $_SESSION['Email-all'];
        $question = $_POST['question'];
        $sql = "INSERT INTO phanhoi (Email, NoiDung, NgayPH) VALUES('$email','$question',NOW())";
        if(mysqli_query($conn,$sql)){
            $_SESSION['ms-sp'] = "Gửi thành công";
                header('Location: feedback.php');
        }
    }
    if(isset($_POST['ad_send'])){
        $ad_rep = $_POST['ad_rep'];
        $id = $_GET['fbid'];
        $sql = "INSERT INTO giaidap (NoiDungGD, MaPH,NgayGD) VALUES('$ad_rep','$id',NOW())";
        if(mysqli_query($conn,$sql)){
            $_SESSION['ms-sp'] = "Gửi thành công";
            header('Location: admin/feedbackAdmin.php?uid='.$_GET['uid'].'&un='.$_GET['un'].'');
        }
    }
    if(isset($_GET['did'])){
        $id = $_GET['did'];
        $delete = "DELETE FROM phanhoi WHERE MaPH = '$id'";
        if(mysqli_query($conn,$delete)){
            $_SESSION['ms-sp'] = "Xóa thành công";
            if($_GET['con']=="user"){
                header('Location: feedback.php');
            }
            elseif($_GET['con']=="admin"){{
                header('Location: admin/feedbackAdmin.php?uid='.$_GET['uid'].'&un='.$_GET['un'].'');
            }}
        }
    }
?>