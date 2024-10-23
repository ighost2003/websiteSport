<?php
$conn = mysqli_connect("sql303.byethost24.com", "b24_34352319", "shopbansach", "b24_34352319_quanllibansach");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

function chin($gabriel){
    echo $gabriel;exit;
}
        // echo '<pre>';
        // print_r($_SESSION['amount']);
        // echo '</pre>';    //in mảng
?>
