<?php
session_start();

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
    <style>
        .btnAdd {
            width: 0px;
            height: 0px;
            background-color: #99FFFF;
        }

        .crud-user_list {
            padding-top: 200px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../index.php">
                <i class="fa-solid fa-house-chimney"></i>
                Trang chủ
            </a>
            <a href="../authencation/login.php" class="header_right-logout header_right-a" href="">
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

                        </div>
                        <table class="crud-user_list">
                            <tr class="crud-user_titlebar">
                                <th class="crud-user_column-name">Mã đơn hàng</th>
                                <th class="crud-user_column-name">Tên khách hàng</th>
                                <th class="crud-user_column-name">Email</th>
                                <th class="crud-user_column-name">Số điện thoại</th>
                                <th class="crud-user_column-name">Chi tiết</th>
                                <th class="crud-user_column-name">Địa chỉ</th>
                                <th class="crud-user_column-name">Ngày đặt hàng</th>
                                <th class="crud-user_column-name">Tổng tiền</th>
                                <th class="crud-user_column-name">Trạng thái</th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Xử lý đơn</a>
                                </th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Xem đơn</a>
                                </th>
                            </tr>
                            <?php
                            require_once '../connection.php';
                            $selectsql = "SELECT * FROM donhang";
                            $result = mysqli_query($conn, $selectsql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="crud-user_row">
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['MaDH']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['TenND']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['Email']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['SDT']; ?></span>
                                    </th>
                                    <th class="crud-user_column detail-column">
                                        <span class="crud-user_column-span"><?php echo $row['ChiTiet']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['DiaChi']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['NgayDH']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo number_format($row['TongTien']); ?>đ</span>
                                    </th>
                                    <?php
                                    if ($row['TrangThai'] == '0') {
                                        $state = "Đang xử lý";
                                    } else {
                                        $state = "Đã xử lý";
                                    }
                                    ?>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $state; ?></span>
                                    </th>
                                    <th class="crud-user_column a-crud">
                                        <a class="a-crud-a" href="handleAdmin.php?hid=<?php echo $row['MaDH']; ?>">Hoàn tất</a>
                                    </th>
                                    <th class="crud-user_column a-crud">
                                        <a class="a-crud-a" href="orderView.php?vid=<?php echo $row['MaDH']; ?>">Xem</a>
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
<?php
?>