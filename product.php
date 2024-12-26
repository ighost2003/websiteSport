<?php
    session_start();
    require_once 'connection.php';
    //reset($_SESSION['cart']);
        // echo '<pre>';
        // print_r($_SESSION['cart']);
        // echo '</pre>';exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán quần áo Sport</title>
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/selector.css">
    <link rel="stylesheet" href="ASSET/CSS/product-list.css">
    <link rel="stylesheet" href="ASSET/CSS/product.css">
</head>

<body 
    <?php
        if(isset($_SESSION['message'])){
    ?>
        onload="return alert('<?php echo $_SESSION['message']; unset($_SESSION['message']);?>')";
    <?php
        }
    ?>
>
    <div class="Header_main">
        <?php
            require_once 'header.php';
        ?>
        <div class="main">
            <div class="main_top">
                <div class="main_top-row-left">
                    <ul class="main_top-left-list">
                        <li class="main_top-left-item">
                            <i class="main_top-left-icon fa-solid fa-bars"></i>
                            <span class="main_top-left-category">Bộ Siêu Tập</span>
                            <a class="main_top-left-list-a" href="">
                                <i class="main_top-left-link-icon fa-solid fa-check"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="main_top-row-right">
                    <ul class="main_top-right-list">
                        <li class="main_top-right-item main_top-right-item-hotline">
                            <i class="fa-solid fa-phone"></i>
                            <span>Hotline: 0915629981</span>
                        </li>
                        <li class="main_top-right-item">
                            <a href="feedback.php?spid=1" class="main_top-right-list main_top_right-a">
                                <i class="fa-solid fa-headset"></i>
                                <span class="main_top_right-span">Hỗ trợ trực tuyến</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
                            $id = $_GET['bid'];
                            require_once 'connection.php';
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                            chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                            FROM mauao 
                            INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                            INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                            INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                            WHERE Ma = '$id'";
                            $resultPdt = mysqli_query($conn,$selectPdt);
                            $rowPdt = mysqli_fetch_assoc($resultPdt);
                            $selectCgr = "SELECT danhmuc.TenDM, theloai.MaTL FROM theloai
                            INNER JOIN danhmuc ON danhmuc.MaDM = theloai.MaDM 
                            WHERE theloai.TenTL = '".$rowPdt['TenTL']."'";
                            $resultCgr = mysqli_query($conn,$selectCgr);
                            $rowCgr = mysqli_fetch_assoc($resultCgr);
                        ?>
            <div class="container_parent">
                <div class="path">
                    <ul class="path_list">
                        <li class="path_item">
                            <a href="index.php" class="path_item_span">Trang chủ</a>
                        </li>
                        <li class="path_item">
                            <i class="path_item_icon fa-solid fa-chevron-right"></i>
                            <a href="" class="path_item_span"><?php echo $rowCgr['TenDM']; ?></a>
                        </li>
                        <li class="path_item">
                            <i class="path_item_icon fa-solid fa-chevron-right"></i>
                            <a href="productList.php?id=<?php echo $rowCgr['MaTL'] ?>" class="path_item_span"><?php echo $rowPdt['TenTL']; ?></a>
                        </li>
                        <li class="path_item">
                            <i class="path_item_icon fa-solid fa-chevron-right"></i>
                            <a href="" class="path_item_span"><?php echo $rowPdt['Ten']; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <div class="product-main">
                        <div class="product-main_img-container">
                            <img class="product-main_img" src="ASSET/IMG/<?php echo $rowPdt['AnhMinhHoa']; ?>" alt="">
                        </div>
                        <div class="product-main_info">
                            <h1 class="product-main_title"><?php echo $rowPdt['Ten']; ?></h1>
                            <div class="product-main_detail">
                                <label for="">Chất liệu:</label>
                                <a class="product-main_author" href=""><?php echo $rowPdt['TenCL']; ?></a><br>
                                <label for="">Quốc gia:</label>
                                <a class="product-main_category" href=""><?php echo $rowPdt['TenTL']; ?></a><br>
                                <label for="">Size:</label>
                                <a class="product-main_publisher" href=""><?php echo $rowPdt['TenNSX']; ?></a><br>
                            </div>
                            <p class="product-main_decribe"><?php echo $rowPdt['MoTa']; ?></p><a class="product-main_decribe-more" href="">Xem thêm</a>
                        </div>
                        <div class="product-main_pay">
                            <div class="pay_title">Thông tin thanh toán</div>
                            <div class="pay_main">

                                <div class="pay_new-price">
                                    <label class="new-price_lable">Giá bán</label>
                                    <?php
                                        $price = $rowPdt['Gia'] - $rowPdt['Gia']*$rowPdt['GiamGia']/100;
                                    ?>
                                    <span class="new-price"><?php echo number_format($price); ?>đ</span>
                                </div>
                                <div class="pay_transport">
                                    <h4 class="pay_transport-heading">CHI TIẾT VẬN CHUYỂN</h4>
                                    <div class="pay_trasport-decribe">Thời gian gửi từ 5 đến 10 ngày làm việc</div>
                                    <span class="pay_transport-sup-decribe">Miễn phí giao hàng cho sản phẩm này</div>
                                </div>
                                <form action="add2cart.php?id=<?php echo $rowPdt["Ma"] ?>&&action=add2" method="post">
                                    <div class="pay_transport-button">
                                        <input class="pay-button" type="submit" name="submit"  value="THÊM VÀO GIỎ HÀNG">
                                    </div>
                                </form>
                            </div>
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
                        <a href="footer_top-link">Kiều Chí Nguyện</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chuyên viên tư vấn</a>
                    </li>
                </ul>
            </div>
            <div class="footer_top-nav">
                <h3 class="footer_top-heading">CHÍNH SÁCH</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chính sách bảo hành</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chính sách đổi trả</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chính sách giao nhận hàng</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Chính sách bảo mật</a>
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
                <h3 class="footer_top-heading">Admin</h3>
                <ul class="footer_top-list">
                    <li class="footer_top-item">
                        <a href="footer_top-link">Kiều Chí Nguyện</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Lâm Vĩnh Phát</a>
                    </li>
                    <li class="footer_top-item">
                        <a href="footer_top-link">Ngô Thị Trúc Xuân</a>
                    </li>
                </ul>
            </div>
        </footer>
        <footer class="footer_bot">
            <p class="footer_bot-text footer_bot-address">Địa chỉ: Trà Vinh. Tổng đài hỗ trợ: 0915629981 - Email:
                chinguyen29825@gmai.com
            </p>
            <p class="footer_bot-text footer_bot-license">© 2024 Bản quyền thuộc về TVU</p>
        </footer>
    </footer>
</body>
</html>