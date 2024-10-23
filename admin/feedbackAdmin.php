<?php
session_start();
require_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/userManager.css">
    <link rel="stylesheet" href="../ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/support.css">
    <style>
        .btnAdd{
            width: 0px;
            height: 0px;
            background-color: #99FFFF;
        }
        .crud-user_list{
            padding-top: 200px;
        }
    </style>
</head>

<body
<?php
if(isset($_SESSION['ms-sp'])){
    $ms = $_SESSION['ms-sp'];
    ?>
    onload = "return alert('<?php echo $ms; unset($_SESSION['ms-sp']);?>')";
    <?php
}
?>
>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../index.php">
                <i class="fa-solid fa-house-chimney"></i>
                Trang chủ
            </a>
            <a  href="../authencation/login.php" class="header_right-logout header_right-a" href="">
                Đăng xuất
            </a>
        </div>
    </header>
    <main>
        <div class="ad-sp-main">
            <div class="ad-fb-listuser">
                <?php require_once '../menu.php' ?>
                <ol>
                    <?php
                    $selectemail = "SELECT DISTINCT Email FROM phanhoi";
                    $resultemail = mysqli_query($conn, $selectemail);
                    while($rowemail = mysqli_fetch_assoc($resultemail)){
                        $email_fb = $rowemail['Email'];
                        $selectuser = "SELECT TenND, Email FROM nguoidung WHERE Email = '$email_fb'";
                        $resultuser = mysqli_query($conn,$selectuser);
                        while($rowuser = mysqli_fetch_assoc($resultuser)){
                            echo'
                            <li><a class="ad-fb-user" href="feedbackAdmin.php?uid='.$rowuser['Email'].'&un='.$rowuser['TenND'].'">'.$rowuser['TenND'].'</a></li>
                            ';
                        }
                    }
                    ?>
                </ol>
            </div>
            <div>
                <div class="fb-content ad-fb-content"> 
                    <?php
                    if(isset($_GET['uid'])){
                        echo '<h3 class="ad-fb-heading" style="font-size: 28px; color: #007bff; text-decoration: underline; font-weight: bold; text-align: center; white-space: nowrap;">DANH SÁCH CÁC PHẢN HỒI TỪ KHÁCH HÀNG</h3>';

                        $emailUser = $_GET['uid'];
                        $selectfb = "SELECT *, DATE_FORMAT(NgayPH, '%H:%i:%s ngày %d-%l-%Y') as NgayPH FROM phanhoi WHERE Email = '$emailUser'";
                        $resultfb = mysqli_query($conn,$selectfb);
                        while($rowfb = mysqli_fetch_assoc($resultfb)){
                        $id = $rowfb['MaPH'];
                        echo'
                            <div class="fb-question">
                            <span class="fb-time">Lúc '.$rowfb['NgayPH'].'</span>
                            <a class="fb-delete" href="../supportHandle.php?did='.$rowfb['MaPH'].'&con=admin&uid='.$emailUser.'&un='.$_GET['un'].'">Xóa</a>
                            <label class="fb-question-lbl ad-fb-question-lbl" for="">'.$_GET['un'].'</label>
                            <p>'.$rowfb['NoiDung'].'</p>
                            </div>';
                            $selectfb2 = "SELECT DATE_FORMAT(NgayGD, '%H:%i:%s ngày %d-%m-%Y') as NgayGD, NoiDungGD FROM giaidap WHERE MaPH = '$id'";
                            $resultfb2 = mysqli_query($conn,$selectfb2);
                            if(mysqli_num_rows($resultfb2)>0){
                            $rowfb2 = mysqli_fetch_assoc($resultfb2);
                            echo'
                            <div class="fb-feedback">
                                <span class="fb-time">Lúc '.$rowfb2['NgayGD'].'</span>
                                <label class="fb-feedback-lbl ad-fb-question-lbl" for="">Bạn</label>
                                <p class="green">'.$rowfb2['NoiDungGD'].'</p>
                            </div>';
                            }
                            else{
                                echo'
                                <form action="../supportHandle.php?fbid='.$rowfb['MaPH'].'&uid='.$emailUser.'&un='.$_GET['un'].'" method="post">
                                    <textarea cols=63 rows=4 class="ad-fb-txta" name="ad_rep"></textarea>
                                    <input type="submit" class="ad-fb-btn" name="ad_send" value="Gửi">
                                </form>';}}
                            }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>