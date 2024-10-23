<?php 
    session_start();
    require_once '../connection.php';
    if(isset($_COOKIE["user"])){
        $selectTT = "SELECT MatKhau FROM nguoidung WHERE Email='".$_COOKIE["user"]."'";
        $result = mysqli_query($conn,$selectTT);
        $row = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../ASSET/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/authen_.css">
    <link rel="stylesheet" href="../ASSET/CSS/verify.css">
</head>

<body>
    <div class='login-background'>
        <div class='login-container'>
            <div class='login-content row'>
                <div class='col-12 form-group login-input'>
                <form action="rg-loginHandle.php" method="post">
                    <div>
                        <span class='form-control text-vr'>Mã xác nhận đã được gửi qua email của bạn, vui lòng nhập mã để tiếp tục.</span>
                        <input type="text" class='form-control input-vr' name = "verification_code">
                        <?php
                            if(isset($_SESSION["notify-regis-fail"])){
                                echo '
                                <label class="rpswd fail-vr" for="">'.$_SESSION["notify-regis-fail"].'
                                </label>
                                ';
                            }                        
                        ?>
                        <?php
                            if(isset($_SESSION["notify-regis-fail"])){
                                echo '
                                <div class="back-vr">
                                    <a class="back-vr-a" href="register.php">Quay lại</a>
                                </div>
                                ';
                                unset($_SESSION["notify-regis-fail"]);
                            }else{
                                echo'
                                <button class="submit-vr" type="submit" name="submit-verify">Tiếp tục</button>                                
                                ';
                            }                    
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>