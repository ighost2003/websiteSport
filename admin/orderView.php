<?php
    session_start();
    $id = $_GET['vid'];
    require_once '../connection.php';
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
    <link rel="stylesheet" href="../ASSET/CSS/addBook.css">
    <style>
        .order-container{
            width: 950px;
            height: 500px;
            padding: 20px 0px 0px 20px;
            font-size: 20px;
        }
        .order-con-sp{
            margin-left: 10px;
            color:#cc5182;
        }
        .con-order--decribe{
            display: flex;
        }
        .crud-user{
            position: relative;
        }
        .add-exit{
            position: absolute;
            bottom: 30px;
            right: 50px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../index.html">
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
                <h3 class="crud-user_heading">Xem thông tin</h1>
                    <!--CRUD -->
                    <div class="order-container">
                    <?php
                    $sql2 = "SELECT * FROM donhang WHERE MaDH = '$id'";
                    $result = mysqli_query($conn,$sql2);
                    while($row = mysqli_fetch_assoc($result)){
                    $detailArr = explode(', ', $row['ChiTiet']);
                    // echo '<pre>';
                    // print_r($detailArr);
                    // echo '<pre>';
                ?>
                <div class="order-container">
                    <label for="" class="order-con-lbl">Mã đơn hàng:</label><span class="order-con-sp"><?php echo $row['MaDH'] ?></span><br><br>
                    <label for="" class="order-con-lbl">Họ tên:</label><span class="order-con-sp"><?php echo $row['TenND'] ?></span><br><br>
                    <label for="" class="order-con-lbl">Email:</label><span class="order-con-sp"><?php echo $row['Email'] ?></span><br><br>
                    <div class="con-order--decribe">
                        <label for="" class="order-con-lbl lbl-alone">Đã mua:</label>
                        <div class="order-con-sp order-con-div">
                            <?php
                            foreach($detailArr as $key){
                                echo'
                                <label for="" class="order-con-lbl lbl-alone">'.$key.'</label><br>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                    <br><label for="" class="order-con-lbl">Số điện thoại:</label><span class="order-con-sp"><?php echo $row['SDT'] ?></span><br><br>
                    <label for="" class="order-con-lbl">Địa chỉ:</label><span class="order-con-sp"> <?php echo $row['DiaChi'] ?></span><br><br>
                    <label for="" class="order-con-lbl">Tổng tiền:</label><span class="order-con-sp"><?php echo number_format($row['TongTien']) ?>đ</span><br><br>
                    <label for="" class="order-con-lbl">Ngày đặt hàng:</label><span class="order-con-sp"><?php echo $row['NgayDH'] ?></span><br><br>
                    <?php 
                        if($row['TrangThai'] == 0){
                            $state = "Đang chờ xử lý";
                        }
                        else{
                            $state = "Đã xử lý";
                        }
                    ?>
                    <label for="" class="order-con-lbl">Trạng thái:</label><span class="order-con-sp"><?php echo $state;?></span>
                    <a href="orderOUser.php?did=<?php echo $row['MaDH'] ?>&&action=delete">
                    </a>
                </div>
                <?php                 
                }?>
                <a href="orderOAdmin.php">
                    <button class="add-exit add_save-exit--btn">Trở lại</button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>
<?php
?>
