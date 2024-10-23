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
</head>

<body
    <?php
        if(isset($_SESSION['notify-regis'])){
    ?>
        onload="return alert('<?php echo $_SESSION['notify-regis']; unset($_SESSION['notify-regis']);?>')";
    <?php
        }
    ?>
>
    <div class='login-background'>
        <div class='login-container'>
            <div class='login-content row'>
                <div class='col-12 login-text'>Đăng nhập</div>
                <div class='col-12 form-group login-input'>
                <form action="loginHandle.php" method="post">
                    <label class="lb">Tên tài khoản:</label>
                    <input type='email' class='form-control' placeholder='Nhập tên tài khoản' name='email'  
                    value="
                    <?php
                    if(isset($_COOKIE["user"]) && (!isset($_SESSION["notify-email"]) || !isset($_SESSION["notify-pswd"]))){
                        echo $_COOKIE["user"];
                    }
                    if(isset($_SESSION["email"])){
                        echo $_SESSION["email"];
                    }
                    if(isset($_SESSION["email-regis"])){
                        echo $_SESSION["email-regis"];
                    }
                    ?>">
                </div>
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-email"])){
                            echo $_SESSION["notify-email"];
                        }
                    ?>
                </label>
                <div class='col-12 form-group login-input'>
                    <label class="lb">Mật khẩu:</label>
                    <input type="password" class='form-control' placeholder='Nhập mật khẩu' name='pswd' value="<?php
                if(isset($row["MatKhau"]) && (!isset($_SESSION["notify-email"]) || !isset($_SESSION["notify-pswd"]))){
                    echo $row["MatKhau"];
                }?>">
                <label class="rpswd" for="">
                    <?php
                        if(isset($_SESSION["notify-pswd"]) && !isset($_SESSION["notify-email"])){
                            echo $_SESSION["notify-pswd"];
                        }else{
                            if(isset($_SESSION["notify"])){
                                echo $_SESSION["notify"];
                            }
                        }
                    ?>
                </label>

                </div>
                <div class="form-control" style="border: none; margin-left: 2px">
                    <label for="">
                        <input type="checkbox" name="remember" id="" value="yes"
                        <?php
                            if(isset($_COOKIE["remember"])){
                                echo $_COOKIE["remember"];
                            }
                        ?>
                        >Ghi nhớ đăng nhập
                    </label>
                </div>
                <div class='col-12 form-group'>
                    <button class='login-btn' type="submit" name="submit">ĐĂNG NHẬP</button>
                </div>
                <div class='col-12 mt-5 form-group'>
                </div>
                <div class='col-12 mt-5 form-group'>
                </div>
                <div class='col-12 form-group mt-3 text-center'>
                    <span class="question-signup">Bạn chưa có tài khoản?</span>
                </div>
                <div class='col-12 text-center'>
                    <a class='text-order-login' href="register.php">
                        <span>ĐĂNG KÝ</span>
                    </a>
                </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    session_destroy();
?>