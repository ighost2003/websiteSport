<?php
session_start();
if (isset($_POST["submit"])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        if (isset($_FILES['avatar'])) {
            $image = $_FILES['avatar']['name'];
            $image_temp = $_FILES['avatar']['tmp_name'];
            $target = 'C:/xampp/htdocs/shopbansach/ASSET/IMG/' . basename($_FILES['avatar']['name']);
            move_uploaded_file($image_temp, "$target");
        }
?>
<?php
        if (isset($_POST['sid2'])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $avatar = basename($_FILES['avatar']['name']);
            $address = $_POST['address'];
            $password = $_POST["password"];
            $rolearr = $_POST["role"];
            require_once "../connection.php";
            foreach ($rolearr as $rl) {
                $roletemp = $rl;
            }
            if ($roletemp == 'Admin')
                $role = 1;
            else if ($roletemp == 'Khách Hàng') {
                $role = 2;
            } else {
                $role = 3;
            }

            $addsql = "INSERT INTO
            nguoidung (TenND, Email, AnhDaiDien, DiaChi ,MatKhau, MaLQ)
            VALUES ('$username','$email','$avatar','$address','$password','$role')";
            mysqli_query($conn, $addsql);
            echo "<script>
                alert(hello);
            </script>";
        }
        if (isset($_POST['sid'])) {
            $id = $_POST['sid'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $avatar = basename($_FILES['avatar']['name']);
            $address = $_POST['address'];
            $password = $_POST['password'];
            $rolearr = $_POST['role'];
            require_once '../connection.php';
            foreach ($rolearr as $rl) {
                $roletemp = $rl;
            }
            if ($roletemp == 'Admin')
                $role = 1;
            else
                $role = 2;
            $updatesql = "UPDATE nguoidung SET TenND='$username', Email='$email', AnhDaiDien='$avatar', 
                DiaChi='$address', MatKhau='$password', MaLQ='$role' WHERE MaND='$id'";
            mysqli_query($conn, $updatesql);
        }
    } else {
        if (empty($_POST["username"])) {
            $_SESSION["notifi-name"] = "Tên người dùng không được để trống";
        }
        if (empty($_POST["email"])) {
            $_SESSION["notifi-email"] = "Địa chỉ email không hợp lệ";
        }
        if (empty($_POST["password"])) {
            $_SESSION["notifi-pswd"] = "Mật khẩu không được để trống";
        }
        if (isset($_POST['sid'])) {
            $id = $_POST["sid"];
            header("location: updateUser.php?sid=" . $id . "");
        } else {
            header("location: addQuanao.php.php?sid2=dir");
        }
    }
}
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
</head>

<body>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../index.php">
                <i class="fa-solid fa-house-chimney"></i>
                Trang chủ
            </a>
            <a class="header_right-logout header_right-a" href="../authencation/login.php">
                Đăng xuất
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            <?php require_once '../menu.php' ?>
            <div class="crud-user">
                <h3 class="crud-user_heading">Danh Sách Thông Tin Người Dùng</h1>
                    <div class="crud-user_content">
                        <div class="btnAdd">
                            <a class="btnAdd-a" href="addUser.php?sid2=dir">Thêm người dùng</a>

                        </div>
                        <table class="crud-user_list">
                            <tr class="crud-user_titlebar">
                                <th class="crud-user_column-name">Ảnh đại diện</th>
                                <th class="crud-user_column-name">Tên người dùng</th>
                                <th class="crud-user_column-name">Email</th>
                                <th class="crud-user_column-name">Địa chỉ</th>
                                <!-- <th class="crud-user_column-name">Mật khẩu</th> -->
                                <th class="crud-user_column-name column_role">Loại quyền</th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="">Sửa</a>
                                </th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="">Xóa</a>
                                </th>
                            </tr>
                            <?php
                            require_once '../connection.php';
                            $selectsql = "SELECT nguoidung.MaND, nguoidung.TenND, nguoidung.Email, nguoidung.AnhDaiDien, 
                            nguoidung.DiaChi, nguoidung.MatKhau, loaiquyen.TenLQ FROM 
                            nguoidung INNER JOIN loaiquyen ON nguoidung.MaLQ = loaiquyen.MaLQ";
                            $result = mysqli_query($conn, $selectsql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="crud-user_row">
                                    <?php
                                    echo '
                                    <th style="background-image: url(../ASSET/IMG/' . $row['AnhDaiDien'] . '");" class="crud-user_column crud-user_column-img">   
                                    </th>';
                                    ?>
                                    <th class="crud-user_column column-view">
                                        <?php echo $row['TenND']; ?>
                                    </th>
                                    <th class="crud-user_column column-view">
                                        <?php echo $row['Email']; ?>
                                    </th>
                                    <th class="crud-user_column column-view">
                                        <?php echo $row['DiaChi']; ?>
                                    </th>

                                    <th class="crud-user_column column-view column_role">
                                        <?php echo $row['TenLQ']; ?>
                                    </th>
                                    <th class="crud-user_column column-view a-crud">
                                        <a class="a-crud-a" href="updateUser.php?sid=<?php echo $row['MaND']; ?>">Sửa</a>
                                    </th>
                                    <th class="crud-user_column column-view a-crud">
                                        <a onclick="return confirm('Bạn có thật sự muốn xóa không?')" class="a-crud-a" href="deleteUser.php?sid=<?php echo $row['MaND']; ?>">Xóa</a>
                                    </th>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!--CRUD -->
            </div>

        </div>
    </main>
</body>

</html>