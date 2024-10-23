<?php
session_start();
if (isset($_POST["submit-verify"]))
{
    $email = $_SESSION["email-regis"];
    $verification_code = $_POST["verification_code"];

    require '../connection.php';

    // mark email as verified
    $sql = "SELECT * FROM nguoidung WHERE MaXacNhan = '".$verification_code."'AND Email = '" . $email . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0)
    {
        $_SESSION['notify-regis'] = "Đăng ký thành công";
        header("Location: login.php");
    }
    else{
        $_SESSION['notify-regis-fail'] = "Mã xác nhận chưa đúng! Vui lòng đăng ký lại.";
        $sql2 = "DELETE FROM nguoidung WHERE Email = '" . $email . "'";
        $result2  = mysqli_query($conn, $sql2);
        header("Location: rg-login.php");
    }
}
?>

<form method="POST">
    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required />

    <input type="submit" name="verify_email" value="Verify Email">
</form>