<?php
    session_start();
    $_SESSION["order-user"] = 1;
    require_once 'connection.php';
    // echo '<pre>';
    // print_r($_SESSION['amount']);
    // print_r($_SESSION['cart']);
    // echo '</pre>';exit;  
    if(isset($_SESSION['Email-all'])){
        $email = $_SESSION['Email-all'];
    }
    else{
        header("Location: authencation/login.php");
    }

    if(isset($_GET['action']) && isset($_GET['did']) && $_GET['action'] == "delete"){
        $id = $_GET['did'];
        $deletesql = "DELETE FROM donhang WHERE MaDH = '$id'";
        if(mysqli_query($conn,$deletesql)){
            $_SESSION['deletesc'] = "Xóa thành công";
        }
        header("Location: orderOUser.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/selector.css">
    <link rel="stylesheet" href="ASSET/CSS/cart.css">
    <style>
    </style>
</head>
<body
    <?php
        if(isset($_SESSION['deletesc'])){
            ?>
                onload="return alert('<?php echo $_SESSION['deletesc']; unset($_SESSION['deletesc']); ?>')"
    <?php
        }
    ?>
>
    <div class="Header_main">
        <?php require_once 'header.php' ?>
            <div class="intmain">
                <?php
                    $sql2 = "SELECT *, DATE_FORMAT(NgayDH, '%H:%i:%s ngày %d-%m-%Y') as NgayDH FROM donhang WHERE Email = '$email'";
                    $result = mysqli_query($conn,$sql2);
                    $idx=0;
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
                            echo'
                            <a href="orderOUser.php?did='.$row['MaDH'].'&&action=delete">
                                <button class="btn order-btn">Xóa</button>
                            </a>';
                        }
                    ?>
                    <label for="" class="order-con-lbl">Trạng thái:</label><span class="order-con-sp"><?php echo $state;?></span>
                </div>
                <?php                 
                    $idx++;
                }?>
            </div>
    </div>
</body>
</html>