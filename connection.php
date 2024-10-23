<?php
//  $conn = mysqli_connect("http://192.168.1.3/", "b24_34352319", "shopbansach", "b24_34352319_quanllibansach");
$conn = mysqli_connect("localhost", "root", "", "quanllibanquanao");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
function chin($gabriel)
{
    echo $gabriel;
    exit;
}
        // echo '<pre>';
        // print_r($_SESSION['amount']);
        // echo '</pre>';    //in mảng
