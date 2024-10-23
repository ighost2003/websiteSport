<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer-master/vendor/autoload.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    $rpswd = $_POST["rpswd"];
    $address = $_POST["address"];
    $phonenumber = $_POST["phonenumber"];
    require '../connection.php';


    $select = "SELECT * FROM nguoidung WHERE Email='$email'";
    $redult = mysqli_query($conn, $select);

    if (empty($_POST["name"])) {
        $_SESSION["notify-name"] = "Thông tin Họ và tên là cần thiết";
    } else {
        $_SESSION["user-name"] = $_POST["name"];
    }


    if (empty($_POST["email"])) {
        $_SESSION["notify-email"] = "Vui lòng điền Email";
    } else {
        $_SESSION["user-email"] = $_POST["email"];
    }


    if (empty($_POST["pswd"])) {
        $_SESSION["notify-pswd"] = "Bạn chưa nhập mật khẩu";
    } else {
        $_SESSION["user-pswd"] = $_POST["pswd"];
    }


    if (empty($_POST["rpswd"])) {
        $_SESSION["notify-rpswd2"] = "Bạn chưa nhập lại mật khẩu";
    } else {
        $_SESSION["user-rpswd"] = $_POST["rpswd"];
    }

    if (empty($_POST["address"])) {
        $_SESSION["notify-address"] = "Vui lòng điền địa chỉ";
    } else {
        $_SESSION["user-address"] = $_POST["address"];
    }

    if (empty($_POST["phonenumber"])) {
        $_SESSION["notify-phonenumber"] = "Vui lòng nhập số điện thoại của bạn";
    } else {
        $_SESSION["user-phonenumber"] = $_POST["phonenumber"];
    }

    if (!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["pswd"]) && !empty($_POST["rpswd"]) && !empty($_POST["phonenumber"])) {
        if ($_POST["pswd"] != $_POST["rpswd"]) {
            $_SESSION["notify-rpswd"] = "Mật khẩu không trùng khớp";
            header('Location: register.php');
        } else if (!isset($_SESSION["notify-address"])) {
            if (mysqli_num_rows($redult) > 0) {
                $_SESSION["notify-email"] = "Địa chỉ email đã được đăng ký";
                header('Location: register.php');
            } else if ($_POST["rpswd"] == $_POST["pswd"]) {


                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings

                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'chinguyen29825@gmail.com';                     //SMTP username
                    $mail->Password   = 'dvgi jkyb hxpj vxyo';
                    $mail->SMTPSecure = 'SSL';  // encryption TLS/SSL                            //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('chinguyen29825@gmail.com', 'Shop Sport');
                    $mail->addAddress($email, $name);     //Add a recipient

                    //Content
                    $mail->isHTML(true);

                    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
                    //Set email format to HTML
                    $mail->Subject = 'Email verification';
                    $mail->Body    = '<p>Mã xác nhận của bạn là: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    $mail->send();
                    $encryted_password  = password_hash($pswd, PASSWORD_DEFAULT);
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

                }


                $insert = "INSERT INTO nguoidung(TenND, Email, MatKhau, DiaChi, SoDienThoai, MaLQ, MaXacNhan) VALUES('$name','$email','$encryted_password','$address','$phonenumber','2','$verification_code')";
                if (mysqli_query($conn, $insert)) {
                    // $_SESSION['notify-regis'] = "Đăng ký thành công";
                    $_SESSION["email-regis"] = $_POST["email"];
                    // header("Location: login.php");
                    header("Location: rg-login.php");
                }
            } else {
                header('Location: register.php');
            }
        } else {
            header('Location: register.php');
        }
    } else {
        header('Location: register.php');
    }
}
