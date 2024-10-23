<?php
    session_start();
    if(!empty($_POST["email"]) && !empty($_POST["pswd"])){
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
        require_once '../connection.php';
        $selectpwd = "SELECT MatKhau FROM nguoidung WHERE Email = '$email'";
        $resultpwd = mysqli_query($conn,$selectpwd);
        $rowpwd2 = mysqli_fetch_assoc($resultpwd);
        $rowpwd = $rowpwd2['MatKhau'];
        if (password_verify($pswd, $rowpwd)) {
            $select = "SELECT * FROM nguoidung WHERE Email='$email'";
            $result = mysqli_query($conn,$select);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0){
                $_SESSION["login"] = "on";
                if($row['MaLQ'] == 1){
                    $_SESSION["username"] = $row['TenND'];
                    $_SESSION["log-out"] = "Đăng xuất";
                    $_SESSION["role"] = "1";
                    $_SESSION['Email-all'] = $email;
                    header("Location: ../userManager/userView.php");
                }
                else if($row['MaLQ'] == 3){
                    $_SESSION["username"] = $row['TenND'];
                    $_SESSION["log-out"] = "Đăng xuất";
                    $_SESSION["role"] = "3";
                    $_SESSION['Email-all'] = $email;
                    header("Location: ../bookManager/View.php");
                }
                else{
                    $_SESSION["username"] = $row['TenND'];
                    $_SESSION["Email-all"] = $email;
                    $_SESSION["log-out"] = "Đăng xuất";
                    header("Location: ../index.php");
                }
                if(isset($_POST["remember"])){
                    setcookie("user",$email,time() + (86400*30));
                    setcookie("remember","checked",time() + (86400*30));
                }
                else{
                    setcookie("user","",-1);
                    setcookie("remember","",-1);
                }
            }
        }
        else{
            setcookie("user","",-1);
            setcookie("remember","",-1);
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["notify"] = "Sai tên đăng nhập hoặc mật khẩu!";
            $_SESSION["login"]="2";
            header("Location: login.php");
        }
    }
    else{
        setcookie("user","",-1);
        setcookie("remember","",-1);
        if(empty($_POST["email"])){
            $_SESSION["notify-email"] = "Vui lòng nhập địa chỉ Email!";
        }
        if(empty($_POST["pswd"])){
            if(!empty($_POST["email"])){
                $_SESSION["email"] = $_POST["email"];
            }
            $_SESSION["notify-pswd"] = "Vui lòng nhập mật khẩu!";
        }
        header("Location: login.php");
    }
?>