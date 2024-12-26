<?php
    require_once 'connection.php';
    session_start();
    if(isset($_GET['id'])&&isset($_GET['action'])&&$_GET['action']=="delete"){
        $id = $_GET['id'];
        $lastidx = array_key_last($_SESSION['cart']);
        for($i = 0; $i<=$lastidx; $i++){
            if($_SESSION['cart'][$i] == $id){
                unset($_SESSION['cart'][$i]);
                unset($_SESSION['amount'][$i]);
            }
        }
        if(count($_SESSION['amount'])<1 || count($_SESSION['cart'])<1){   
            unset($_SESSION['amount']);
            unset($_SESSION['cart']);
        }
        header('location: cart.php');
    }
    if(isset($_SESSION["Email-all"])){
        $sqlUser = "SELECT * FROM nguoidung WHERE email = "."'".$_SESSION["Email-all"]."'";
        $resultUser = mysqli_query($conn,$sqlUser);
        $rowUser = mysqli_fetch_assoc($resultUser);
    }
    else{
        header('Location: authencation/login.php');
    }
    // echo $row['TenND'];
    // echo $row['SoDienThoai'];exit;
    // echo '<pre>';
    // print_r($_SESSION['cart']);
    // print_r($_SESSION['amount']);
    // echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/selector.css">
    <link rel="stylesheet" href="ASSET/CSS/cart.css">
</head>

<body 
    <?php
        if(isset($_SESSION['cartnotify'])){
    ?>
        onload="return alert('<?php echo $_SESSION['cartnotify']; unset($_SESSION['cartnotify']); ?>')";
    <?php
        }
    ?>
>
    <div class="Header_main">
        <?php require_once 'header.php' ?>
        <div class="main">
            <div class="container">
                <div class="title">
                    <h1 class="title-heading">GIỎ HÀNG</h1>
                </div>
                <div class="cart-main">
                        <div class="cart-product">
                            <form action="" method="post">
                                <table>
                                    <h3 class= "product-title">SẢN PHẨM</h3>
                                    <?php
                                        $index = 0;
                                        if(!isset($_SESSION['amount']) && isset($_SESSION['cart'])){
                                            $_SESSION['amount'] = array_fill(0, count($_SESSION['cart']), 1);
                                        } 
                                        else if(isset($_SESSION['amount']) && !isset($_SESSION['cart'])){
                                            echo "<h2 class='no-product-info'>Chưa có sản phẩm nào :(</h2>";
                                        }
                                        else if(!isset($_SESSION['amount']) && !isset($_SESSION['cart'])){
                                            echo "<h2 class='no-product-info'>Chưa có sản phẩm nào :(</h2>";
                                        }
                                        if(isset($_SESSION['cart'])){
                                            $cartstr = implode("','",$_SESSION['cart']);                                               
                                         
                                        $sql = "SELECT * FROM mauao WHERE Ma IN ('$cartstr')";
                                        $result = mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)){  
                                            $total=0;
                                            $_SESSION['detail'] = "";
                                            $_SESSION['id-product'] = array();
                                            $_SESSION['amount-product'] = array();                                                       
                                        while($row = mysqli_fetch_assoc($result)){
                                            $_SESSION['amount'] = array_values($_SESSION['amount']);
                                            if(isset($_POST['updateSubmit'])){
                                                    $count = 0;
                                                    foreach($_POST['indexes'] as $key){       
                                                        if($_SESSION['amount'][$key] == $_POST['amount_'.$key]){
                                                            $count++; 
                                                        }
                                                        $_SESSION['amount'][$key] = $_POST['amount_'.$key];
                                                    }
                                                    if($count < count($_SESSION['cart'])){          
                                                        $_SESSION['cartnotify']="Cập nhật số lượng thành công";
                                                        ?>
                                                            <script>
                                                            location.reload();
                                                            </script>                                                        
                                                        <?php
                                                    }
                                            }                                                                                
                                        ?>
                                    <tr>
                                        <td>
                                            <img class="cart-img" src="ASSET/IMG/<?php echo $row['AnhMinhHoa']; ?>" alt="">
                                        </td>
                                        <td class="cart-name-number">                                            
                                            <p class="cart-name"><?php echo $row['Ten'] ?></p><br>
                                            <input class="cart-number" type="number" min="1" max="<?php echo $row['SoluongTon'] ?>"
                                            title="Vui lòng nhập trong khoảng từ 1 đến <?php echo $row['SoluongTon'] ?> sản phẩm"
                                            name="amount_<?php echo $index ?>" id="" 
                                            value="<?php 
                                                echo $_SESSION['amount'][$index];
                                            ?>" required>
                                            <label class="cart-countbook" for="">Còn lại: <span class="cart-countbook-span"><?php echo $row['SoluongTon'] ?></span> Bộ</label>
                                        </td>
                                        <td class="cart-price-delete">
                                            <p class="cart-price"><?php echo number_format($row['Gia']) ?>đ</p><br>
                                            <a class="cart-delete" href="cart.php?id=<?php echo $row['Ma']?>&&action=delete">Xoá</a>
                                        </td>
                                    </tr>
                                    <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                                    <?php
                                    if(isset($_SESSION['amount']) && isset($_SESSION['cart'])){
                                            array_push($_SESSION['amount-product'], $_SESSION['amount'][$index]);
                                            array_push($_SESSION['id-product'], $row['Ma']);
                                            $total += $_SESSION['amount'][$index]*$row['Gia'];}                  
                                        if(empty($_SESSION['detail'])){
                                            $_SESSION['detail'] = $_SESSION['detail'].$row['Ten']." (".$_SESSION['amount'][$index]." bộ)";
                                        }
                                        else{
                                            $_SESSION['detail'] = $_SESSION['detail'].", ".$row['Ten']." (".$_SESSION['amount'][$index]." bộ)";
                                        }
                                    $index++;
                                    }}
                                    else{
                                        echo "<h2 class='no-product-info'>Chưa có sản phẩm nào :(</h2>";
                                    }}                                 
                                    ?>
                                </table>
                                <button class="update-btn" type="submit" name="updateSubmit">CẬP NHẬT</button>
                            </form>
                        </div>
                        <div>
                            <div class="cart-info">
                                <h3 class = "cart-info-heading">Tóm tắt đơn hàng</h3>
                                <?php if(isset($_SESSION['amount']) && isset($_SESSION['cart'])){?>
                                <label class="sumary-lbl" for="">Số lượng sản phẩm:</label><span class="sumary-span"><?php echo array_sum($_SESSION['amount']); ?></span><br><br>
                                <label class="sumary-lbl" for="">Tổng tiền:</label><span class="sumary-span"><?php echo number_format($total); ?> đ</span>
                                <?php }else{
                                        echo"";
                                } ?>
                            </div>
                            <div class="form-info">
                                <form class="form-info-form" action="add2cart.php?action=order&&total=<?php echo $total ?>" method="post">
                                    <label class="form-label" for="">Họ tên:<span class="highlight">*</span></label>
                                    <input class="form-input" type="text" name="name" id="" required value="<?php echo $rowUser['TenND']; ?>"><br>
                                    <label class="form-label" for="">Email:<span class="highlight">*</span></label>
                                    <input class="form-input" type="email" name="email" id="" required value="<?php echo $rowUser['Email']; ?>"><br>
                                    <label class="form-label" for="">Số điện thoại:<span class="highlight">*</span></label>
                                    <input class="form-input" type="number" name="numberphone" id="" required value="<?php echo $rowUser['SoDienThoai']; ?>"><br>
                                    <label class="form-label" for="">Địa chỉ:<span class="highlight">*</span></label>
                                    <input class="form-input" type="text" name="address" id="" required value="<?php echo $rowUser['DiaChi']; ?>">
                                    <div class="order">
                                        <a href="index.php">
                                            <button class="btn btn-size_s" class="" type="button" name="back">QUAY LẠI</button>
                                        </a>
                                        <button class="btn-primary btn btn-size_s" type="submit" name="order">ĐẶT HÀNG</button>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <footer class="footer_top">
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">CHĂM SÓC KHÁCH HÀNG</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">Hotline: 0915629981</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Kiều Chí Nguyện<nav></nav></a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chuyên viên tư vấn</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">GIỚI THIỆU</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">

            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">THEO DÕI</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">DANH MỤC</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">divac divac divdc dicdc</a>
                    </li>
                </ul>
            </div>
        </footer>
        <footer class="footer_bot">
            <p class="footer_bot-text footer_bot-address">Địa chỉ: Trà Vinh. Tổng đài hỗ trợ: 0915629981 - Email:
                chinguyen29825@gmail.com
            </p>
            <p class="footer_bot-text footer_bot-license">© 2024 Bản quyền thuộc về Nhóm NPX</p>
        </footer>
    </footer>
    <div class="modal-login modal">
        <div class="modal_ovl"></div>
        <div class="modal_body">
            <div class="pay">

            </div>
        </div>
    </div>
    <div class="modal-signin modal">
        <div class="modal_ovl"></div>
        <div class="modal_body">

        </div>
    </div>
    <a href="orderOUser.php">
        <div class="order-view">
            <i class="order-view-icon fa-solid fa-truck-front"></i> 
            Xem đơn hàng
        </div>
    </a>
</body>
</html>
<script src="ASSET/JS/main.js"></script>
<?php
?>