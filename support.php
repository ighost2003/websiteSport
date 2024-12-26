<?php
session_start();
require_once '../connection.php';
if(isset($_GET['spid'])){
    if(!isset($_SESSION['Email-all'])){
        header("Location: ../authencation/login.php");
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
    <link rel="stylesheet" href="../ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/main.css">
    <link rel="stylesheet" href="../ASSET/CSS/support.css">
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
            <h3 >Xin chào!  Bạn hãy nhập câu hỏi của bạn</h3>
            <div class="sp-content">
                <form action="supportHandle.php?con=1" method="post">
                    <textarea name="question" id="" cols="60" rows="15" required></textarea>
                    <input class="btn" type="submit" name="send" value="Gửi">
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
            <a class="viewFeedback" href="feedback.php">Xem phản hồi của bạn</a>
        </div>
    </main>
</body>
</html>