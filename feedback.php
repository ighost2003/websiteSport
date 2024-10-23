<?php
session_start();
require_once 'connection.php';
if(isset($_GET['spid'])){
    if(!isset($_SESSION['Email-all'])){
        header("Location: authencation/login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HỖ TRỢ TRỰC TUYẾN</title>
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/CSS/support.css">
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
    <?php require 'header.php' ?>
    <main>
        <div>
            <h3 >Câu hỏi của bạn</h3>
            <div class="fb-content">
                <?php
                if(isset($_SESSION['Email-all'])){
                    $email = $_SESSION['Email-all'];
                    $select = "SELECT MaPH, NoiDung, DATE_FORMAT(NgayPH, '%H:%i:%s ngày %d-%l-%Y') as NgayPH FROM phanhoi WHERE Email='$email'";
                    $result = mysqli_query($conn,$select);
                    while($row = mysqli_fetch_assoc($result)){
                    $id = $row['MaPH'];
                    echo'
                    <div class="fb-question">
                        <span class="fb-time">Lúc '.$row['NgayPH'].'</span>
                        <a class="fb-delete" href="supportHandle.php?did='.$row['MaPH'].'&con=user">Xóa</a>
                        <label class="fb-question-lbl" for="">Bạn</label>
                        <p>'.$row['NoiDung'].'</p>
                    </div>';
                    $select2 = "SELECT DATE_FORMAT(NgayGD, '%H:%i:%s ngày %d-%m-%Y') as NgayGD, NoiDungGD FROM giaidap WHERE MaPH = '$id'";
                    $result2 = mysqli_query($conn,$select2);
                    if(mysqli_num_rows($result2)>0){
                    $row2 = mysqli_fetch_assoc($result2);
                        echo'
                        <div class="fb-feedback">
                            <span class="fb-time">Lúc '.$row2['NgayGD'].'</span>
                            <label class="fb-feedback-lbl" for="">Hệ thống</label>
                            <p class="green">'.$row2['NoiDungGD'].'</p>
                        </div>';
                    }
                    else{
                        echo'
                        <div class="fb-feedback">
                            <label class="fb-feedback-lbl" for="">Hệ thống</label>
                            <p class="red">Chưa có phản hồi</p>
                        </div>';
                    }}
                }
                ?>
                <form action="supportHandle.php?con=2" method="post">
                    <label class="fb-rep-lbl" for="">Phản hồi</label><br>
                    <textarea class="fb-rep-txta" name="question" id="" cols="62" rows="5"></textarea><br>
                    <input class="fb-send-btn" type="submit" value="Gửi" name="send">
                </form>
            </div>
            <div class="sp-sendto">
                    <a  href="mailto:chinguyen29825@gmail.com">
                        <div class="sp-mail">
                            <i class="fa-solid fa-envelope sp-icon"></i>Gửi phản hồi qua email
                        </div>
                    </a>
                    <a  href="tel:+0915629981">
                        <div class="sp-tel">
                            <i class="fa-solid fa-phone sp-icon"></i>Gọi điện hỗ trợ
                        </div>
                    </a>
            </div>
        </div>
    </main>
</body>
</html>