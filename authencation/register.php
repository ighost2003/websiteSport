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
    <title>Document</title>
    <link rel="stylesheet" href="../ASSET/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ASSET/CSS/reset.css">
    <link rel="stylesheet" href="../ASSET/CSS/authen_.css">
</head>

<body class="body-register">
    <div class='register-background'>
        <div class='login-container'>
            <div class='login-content row'>
                <div class='col-12 register-text'>Đăng ký</div>
                <div class='col-12 form-group'>
                <form action="registerHandle.php" method="post">
                <div class='col-12 form-group'>
                    <label class="lb">Họ tên:</label>
                    <input type='text' class='form-control' placeholder='Nhập họ tên' name='name' 
                    value="<?php
                            if(isset($_SESSION["user-name"])){
                                echo $_SESSION["user-name"];
                            }
                            unset($_SESSION["user-name"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-name"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-name"].'
                            </label>
                            ';
                            unset($_SESSION["notify-name"]);
                        }
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <label class="lb">Email:</label>
                    <input type="email" class='form-control' placeholder='Nhập email' name='email' 
                    value="<?php
                            if(isset($_SESSION["user-email"])){
                                echo $_SESSION["user-email"];
                            }
                            unset($_SESSION["user-email"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-email"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-email"].'
                            </label>
                            ';
                            unset($_SESSION["notify-email"]);
                        }
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <label class="lb">Mật khẩu:</label>
                    <input type="password" class='form-control' placeholder='Nhập mật khẩu' name='pswd' 
                    value="<?php
                            if(isset($_SESSION["user-pswd"])){
                                echo $_SESSION["user-pswd"];
                            }
                            unset($_SESSION["user-pswd"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-pswd"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-pswd"].'
                            </label>
                            ';
                        }
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <label class="lb">Nhập lại mật khẩu:</label>
                    <input type="password" class='form-control' placeholder='Nhập lại mật khẩu' name='rpswd' 
                    value="<?php
                            if(isset($_SESSION["user-rpswd"])){
                                echo $_SESSION["user-rpswd"];
                            }
                            unset($_SESSION["user-rpswd"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-rpswd"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-rpswd"].'
                            </label>
                            ';
                            unset($_SESSION["notify-rpswd"]);
                        }
                    ?>
                    <?php
                        if(isset($_SESSION["notify-rpswd2"]) && !isset($_SESSION["notify-pswd"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-rpswd2"].'
                            </label>
                            ';
                            unset($_SESSION["notify-rpswd2"]);
                        }
                        unset($_SESSION["notify-pswd"]);
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <label class="lb">Địa chỉ:</label>
                    <input type="address" class='form-control' placeholder='Nhập địa chỉ' name='address' 
                    value="<?php
                            if(isset($_SESSION["user-address"])){
                                echo $_SESSION["user-address"];
                            }
                            unset($_SESSION["user-address"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-address"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-address"].'
                            </label>
                            ';
                            unset($_SESSION["notify-address"]);
                        }
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <label class="lb">Số điện thoại:</label>
                    <input type="tel" class='form-control' placeholder='Nhập số điện thoại' name='phonenumber'
                    value="<?php
                            if(isset($_SESSION["user-phonenumber"])){
                                echo $_SESSION["user-phonenumber"];
                            }
                            unset($_SESSION["user-phonenumber"]);
                        ?>">
                    <?php
                        if(isset($_SESSION["notify-phonenumber"])){
                            echo '
                            <label class="rpswd" for="">'.$_SESSION["notify-phonenumber"].'
                            </label>
                            ';
                            unset($_SESSION["notify-phonenumber"]);
                        }
                    ?>
                </div>
                <div class='col-12 form-group'>
                    <button class='login-btn' type="submit" name="submit">ĐĂNG KÝ</button>
                </div>
                <div class='col-12 form-group mt-5'></div>
                <div class='col-12 form-group mt-5 text-center'>
                    <span class="question-signup">Bạn chưa có tài khoản?</span>
                </div>
                <div class='col-12 text-center mt-3'>
                    <a class='text-order-login' href="login.php">
                        <span>ĐĂNG NHẬP</span>
                    </a>
                </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
