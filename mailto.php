<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="mailto:chinguyen29825@gmail.com?cc=another@thatsite.com,me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">Gửi Email</a>
    <a href="tel:0898058785">Gọi điện thoại</a>

    <?php
    // Định nghĩa hàm kiểm tra người dùng
    function check_user($email) {
        // Kiểm tra email có hợp lệ không
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email hợp lệ: $email<br>";
        } else {
            echo "Email không hợp lệ<br>";
            exit; // Dừng nếu email không hợp lệ
        }
    }

    // Định nghĩa hàm gửi email
    function send_user($email, $resetPasswordURL) {
        $subject = "Khôi phục mật khẩu";
        $message = "Chào bạn, hãy nhấp vào link sau để khôi phục mật khẩu: $resetPasswordURL";
        $headers = "From: no-reply@mysite.com\r\n";
        
        // Kiểm tra xem email có được gửi thành công không
        if (mail($email, $subject, $message, $headers)) {
            echo "Email đã được gửi thành công đến $email<br>";
        } else {
            echo "Gửi email thất bại<br>";
        }
    }

    // Thực thi mã PHP
    $mail = 'chinguyen29825@gmail.com';
    check_user($mail); // Kiểm tra email

    // Tạo token ngẫu nhiên
    $token = bin2hex(random_bytes(16));
    $resetPasswordURL = "https://{$_SERVER['HTTP_HOST']}/resetpassword/?token=".$token;

    // Gửi email khôi phục mật khẩu
    send_user($mail, $resetPasswordURL);
    ?>
</body>
</html>
