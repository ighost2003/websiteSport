<?php
    session_start();
?>    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop quần áo Sport</title>
    <link rel="icon" href="/shopbanquanao/shopbanquanao/ASSET/IMG/iconfb.ico" type="image/x-icon">
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/selector.css">
</head>

<body>
    <div class="Header_main">
        <header>
        <?php
            require_once 'header.php';
        ?>
        </header>
        <div class="main">
            <div class="main_top">
                <div class="main_top-row-left">
                    <ul class="main_top-left-list">
                        <li class="main_top-left-item">
                            <i class="main_top-left-icon fa-solid fa-bars"></i>
                            <span class="main_top-left-category">Bộ Siêu Tập</span>
                            <a class="main_top-left-list-a">
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
            <div class="container_parent">
                <!-- Nội dung container chính -->
                <div class="container">
                    <?php
                        require_once 'category.php'; 
                    ?>
                    <div class="container-banner-parent">
                        <div class="container-banner-top-img">
                            <div class="container-banner-top-left">
                                <a class="container-banner-bot-img-a">
                                    <img class="container-img-1"
                                        src="./picture/backr.jpg"
                                        alt="a">
                                </a>
                            </div>
                            <div class="container-banner-top-right">
                                <div class="container-banner-top-right-t">
                                    <a class="container-banner-bot-img-a">
                                        <img class="container-img-2"
                                            src="./picture/tuidunggiay.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="container-banner-top-right-b">
                                    <a class="container-banner-bot-img-a">
                                        <img class="container-img-2"
                                            src="./picture/giày cam.jpg"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="container-banner-bot-img">
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="./picture/manciti.jpg"
                                    alt="">
                            </div>
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="./picture/alnas.jpg"
                                    alt="">
                            </div>
                            <div class="container-banner-bot-img-in">
                                <img class="container-img-2"
                                    src="./picture/messi.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'footer.php';
    ?>
</body>
</html>
