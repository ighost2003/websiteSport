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
    <link rel="stylesheet" href="../ASSET/CSS/addBook.css">
    <?php require_once '../connection.php' ?>
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
                <h3 class="crud-user_heading">Thêm áo</h3>
                    <!--CRUD -->
                        <form action="View.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sid2" value="<?php echo $_GET['sid2'] ?>">
                            <div class="crud-user_add-container">
                                <div class="crud-user_add">
                                    <div class="crud-user_add-name">
                                        <span class="crud-user_add-name lb_username lb_title">Tên áo: <span class="highlight">*</span></span> <br>
                                        <span class="crud-user_add-name lb_email lb_decribe">Mô tả:<span class="highlight">*</span></span><br>
                                        <span class="crud-user_add-name lb_avatar lb_image">Ảnh minh họa:</span><br>
                                        <span class="crud-user_add-name lb_avatar lb_author">Chất liệu:</span><br>
                                        <span class="crud-user_add-name lb_address lb_category">Quốc Gia:</span><br>
                                        <span class="crud-user_add-name lb_password lb_publisher">Nhà sản xuất :</span><br>
                                        <span class="crud-user_add-name lb_role lb_price">Giá:<span class="highlight">*</span></span>
                                        <span class="crud-user_add-name lb_role lb_discount">Giảm giá:</span>
                                        <span class="crud-user_add-name lb_role lb_amount">Số lượng tồn:<span class="highlight">*</span></span>
                                    </div>  
                                    <div class="crud-user_add-value">
                                        <input class="crud-user_add-value title_value" type="text" name="title" ><br>
                                        <textarea class="crud-user_add-value" name="decribe" id="" cols="30" rows="10"></textarea><br>
                                        <div class="crud-user_add-container">
                                            <div class="crud-user_add-img">
                                            </div>
                                            <input class="crud-user_add-value add_file" type="file" name="image" id=""><br>
                                        </div>
                                        <select class="crud-user_add-value ip_value" name="author[]" id=""><br>
                                        <?php 
                                            $selectsql = "SELECT TenCL FROM chatlieu";

                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenCL']."'>" .$row['TenCL']. "</option>"; }
                                        ?> 
                                        </select> 
                                        <select class="crud-user_add-value ip_value" name="category[]" id=""><br>
                                        <?php 
                                            $selectsql = "SELECT TenTL FROM theloai";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenTL']."'>" .$row['TenTL']. "</option>"; } 
                                        ?> 
                                        </select>
                                        <select class="crud-user_add-value ip_value sl_publisher" name="publisher[]" id=""><br>
                                        <?php 
                                            $selectsql = "SELECT TenNSX FROM nhasanxuat";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenNSX']."'>" .$row['TenNSX']. "</option>"; }
                                        ?> 
                                        </select>             
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="price"><span class="lb_value">(VND)</span>
                                        </div>
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="discount" id=""><span class="lb_value">(%)</span>
                                        </div>
                                        <div class="nb_value-container">
                                            <input class="crud-user_add-value nb_value" type="number" name="amount" id=""><span class="lb_value">(bộ)</span>
                                        </div>
                                    </div>
                                    <div class="notifii">
                                        <label for="" class="highlight hl-name">
                                            <?php
                                                if(isset($_SESSION["notifi-title"])){
                                                    echo $_SESSION["notifi-title"];
                                                    unset($_SESSION["notifi-title"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-email">
                                        <?php
                                                if(isset($_SESSION["notifi-decribe"])){
                                                    echo $_SESSION["notifi-decribe"];
                                                    unset($_SESSION["notifi-decribe"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-pswd">
                                        <?php
                                                if(isset($_SESSION["notifi-price"])){
                                                    echo $_SESSION["notifi-price"];
                                                    unset($_SESSION["notifi-price"]);
                                                }
                                            ?>
                                        </label>
                                        <label for="" class="highlight hl-pswd">
                                        <?php
                                                if(isset($_SESSION["notifi-amount"])){
                                                    echo $_SESSION["notifi-amount"];
                                                    unset($_SESSION["notifi-amount"]);
                                                }
                                            ?>
                                        </label>
                                    </div>
                                </div>  
                            </div>
                            <div class="add_save-exit">
                                <input onclick="return confirm('Thêm thông tin và rời khỏi đây?')" class="add-save add_save-exit--btn" type="submit" name="submit" value="Thêm">
                                <a href="View.php">
                                    <input onclick="return confirm('Bạn muốn hủy mà không thêm thông tin?')" class="add-exit add_save-exit--btn"    type="button" value="Hủy">
                                </a>
                            </div>
                        </form>
            </div>
        </div>
    </main>
</body>
</html>