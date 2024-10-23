<?php
session_start();
require_once 'connection.php';
if (isset($_GET['cid'])) {
    $name = "cid";
    $value = $_GET['cid'];
    $nameadd2cart = "cid";
} else if (isset($_GET['aid'])) {
    $name = "aid";
    $value = $_GET['aid'];
    $nameadd2cart = "aid";
} else if (isset($_GET['pid'])) {
    $name = "pid";
    $value = $_GET['pid'];
    $nameadd2cart = "pid";
} else if (isset($_GET['sid'])) {
    $name = "sid";
    $value = $_GET['sid'];
    $nameadd2cart = "sid";
}
///////////
else if (isset($_GET['azcid']) || isset($_GET['zacid']) || isset($_GET['hlcid']) || isset($_GET['lhcid'])) {
    $name = "cid";
    if (isset($_GET['azcid'])) {
        $value = $_GET['azcid'];
        $nameadd2cart = "azcid";
    } elseif (isset($_GET['zacid'])) {
        $value = $_GET['zacid'];
        $nameadd2cart = "zacid";
    } elseif (isset($_GET['hlcid'])) {
        $value = $_GET['hlcid'];
        $nameadd2cart = "hlcid";
    } elseif (isset($_GET['lhcid'])) {
        $value = $_GET['lhcid'];
        $nameadd2cart = "lhcid";
    }
}
///////////
else if (isset($_GET['azaid']) || isset($_GET['zaaid']) || isset($_GET['hlaid']) || isset($_GET['lhaid'])) {
    $name = "aid";
    if (isset($_GET['azaid'])) {
        $value = $_GET['azaid'];
        $nameadd2cart = "azaid";
    } elseif (isset($_GET['zaaid'])) {
        $value = $_GET['zaaid'];
        $nameadd2cart = "zaaid";
    } elseif (isset($_GET['hlaid'])) {
        $value = $_GET['hlaid'];
        $nameadd2cart = "hlaid";
    } elseif (isset($_GET['lhaid'])) {
        $value = $_GET['lhaid'];
        $nameadd2cart = "lhaid";
    }
}
///////
else if (isset($_GET['azpid']) || isset($_GET['zapid']) || isset($_GET['hlpid']) || isset($_GET['lhpid'])) {
    $name = "pid";
    if (isset($_GET['azpid'])) {
        $value = $_GET['azpid'];
        $nameadd2cart = "azpid";
    } elseif (isset($_GET['zapid'])) {
        $value = $_GET['zapid'];
        $nameadd2cart = "zapid";
    } elseif (isset($_GET['hlpid'])) {
        $value = $_GET['hlpid'];
        $nameadd2cart = "hlpid";
    } elseif (isset($_GET['lhpid'])) {
        $value = $_GET['lhpid'];
        $nameadd2cart = "lhpid";
    }
} else if (isset($_GET['azsid']) || isset($_GET['zasid']) || isset($_GET['hlsid']) || isset($_GET['lhsid'])) {
    $name = "sid";
    if (isset($_GET['azsid'])) {
        $value = $_GET['azsid'];
        $nameadd2cart = "azsid";
    } elseif (isset($_GET['zasid'])) {
        $value = $_GET['zasid'];
        $nameadd2cart = "zasid";
    } elseif (isset($_GET['hlsid'])) {
        $value = $_GET['hlsid'];
        $nameadd2cart = "hlsid";
    } elseif (isset($_GET['lhsid'])) {
        $value = $_GET['lhsid'];
        $nameadd2cart = "lhsid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP QUẦN ÁO SPORT</title>
    <link rel="stylesheet" href="ASSET/CSS/reset.css">
    <link rel="stylesheet" href="ASSET/CSS/main.css">
    <link rel="stylesheet" href="ASSET/FONT/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="ASSET/CSS/selector.css">
    <link rel="stylesheet" href="ASSET/CSS/product-list.css">
</head>

<body <?php if (isset($_SESSION['message'])) { ?> 
  onload="return alert('<?php echo $_SESSION['message']; unset($_SESSION['message']); ?>')" ; <?php } ?>>

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
            <div class="container">
                <?php
                require 'category.php';
                ?>
                <div class="container_list-product">
                    <form action="">
                        <div class="list-product_sort">
                            <span class="sort-title">Sắp xếp theo</span>
                            <div class="sort_select--con">
                                <ul class="sort_select" title="Sắp xếp theo">

                                    <a href="">
                                        <li><button name="az<?php echo $name ?>" value="<?php echo $value ?>" class="sort_li">Tên: A - Z</button></li>
                                    </a>
                                    <a href="">
                                        <li><button name="za<?php echo $name ?>" value="<?php echo $value ?>" class="sort_li">Tên: Z - A</button></li>
                                    </a>
                                    <a href="">
                                        <li><button name="lh<?php echo $name ?>" value="<?php echo $value ?>" class="sort_li">Giá: thấp đến cao</button></li>
                                    </a>
                                    <a href="">
                                        <li><button name="hl<?php echo $name ?>" value="<?php echo $value ?>" class="sort_li">Giá: cao đến thấp</button></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <div class="list-product_table">
                        <?php
                        if (isset($_GET['cid'])) {
                            $id = $_GET['cid'];
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaTL = '$id' && mauao.SoluongTon > 0 LIMIT 20";

                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        if (isset($_GET['aid'])) {
                            $id = $_GET['aid'];
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaCL = '$id' && mauao.SoluongTon > 0 LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);

                            if (mysqli_num_rows($resultPdt)) {

                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        if (isset($_GET['pid'])) {
                            $id = $_GET['pid'];
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaNSX = '$id' && mauao.SoluongTon > 0 LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        if (isset($_GET['sid'])) {
                            $id = $_GET['sid'];
                            if (isset($_POST['search'])) {
                                $_SESSION['char'] = $_POST['search'];
                            }
                            $char = $_SESSION['char'];
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa, chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL 
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL 
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX 
                                    WHERE (mauao.Ten LIKE '%$char%' OR theloai.TenTL LIKE '%$char%' OR chatlieu.TenCL LIKE '%$char%' OR nhasanxuat.TenNSX LIKE '%$char%') 
                                    and mauao.SoluongTon > 0 LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        //sắp xêp thuộc Quốc gia
                        if (isset($_GET['azcid']) || isset($_GET['zacid']) || isset($_GET['hlcid']) || isset($_GET['lhcid'])) {
                            if (isset($_GET['azcid'])) {
                                $id = $_GET['azcid'];
                                $condition = "ASC";
                                $column = "mauao.Ten";
                            } else if (isset($_GET['zacid'])) {
                                $id = $_GET['zacid'];
                                $condition = "DESC";
                                $column = "mauao.Ten";
                            }
                            if (isset($_GET['lhcid'])) {
                                $id = $_GET['lhcid'];
                                $condition = "ASC";
                                $column = "mauao.Gia";
                            }
                            if (isset($_GET['hlcid'])) {
                                $id = $_GET['hlcid'];
                                $condition = "DESC";
                                $column = "mauao.Gia";
                            }
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaTL = '$id' && mauao.SoluongTon > 0 ORDER BY $column $condition LIMIT 20";

                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        //sắp xếp thuộc Chất liệu
                        if (isset($_GET['azaid']) || isset($_GET['zaaid']) || isset($_GET['hlaid']) || isset($_GET['lhaid'])) {
                            if (isset($_GET['azaid'])) {
                                $id = $_GET['azaid'];
                                $condition = "ASC";
                                $column = "mauao.Ten";
                            } else if (isset($_GET['zaaid'])) {
                                $id = $_GET['zaaid'];
                                $condition = "DESC";
                                $column = "mauao.Ten";
                            }
                            if (isset($_GET['lhaid'])) {
                                $id = $_GET['lhaid'];
                                $condition = "ASC";
                                $column = "mauao.Gia";
                            }
                            if (isset($_GET['hlaid'])) {
                                $id = $_GET['hlaid'];
                                $condition = "DESC";
                                $column = "mauao.Gia";
                            }
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaCL = '$id' && mauao.SoluongTon > 0 ORDER BY $column $condition LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        //sắp xếp thuộc nhà xuất bản
                        if (isset($_GET['azpid']) || isset($_GET['zapid']) || isset($_GET['hlpid']) || isset($_GET['lhpid'])) {
                            if (isset($_GET['azpid'])) {
                                $id = $_GET['azpid'];
                                $condition = "ASC";
                                $column = "mauao.Ten";
                            } else if (isset($_GET['zapid'])) {
                                $id = $_GET['zapid'];
                                $condition = "DESC";
                                $column = "mauao.Ten";
                            }
                            if (isset($_GET['lhpid'])) {
                                $id = $_GET['lhpid'];
                                $condition = "ASC";
                                $column = "mauao.Gia";
                            }
                            if (isset($_GET['hlpid'])) {
                                $id = $_GET['hlpid'];
                                $condition = "DESC";
                                $column = "mauao.Gia";
                            }
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE mauao.MaNSX = '$id' && mauao.SoluongTon > 0 ORDER BY $column $condition LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        if (isset($_GET['azsid']) || isset($_GET['zasid']) || isset($_GET['hlsid']) || isset($_GET['lhsid'])) {
                            if (isset($_GET['azsid'])) {
                                $id = $_GET['azsid'];
                                $condition = "ASC";
                                $column = "mauao.Ten";
                            } else if (isset($_GET['zasid'])) {
                                $id = $_GET['zasid'];
                                $condition = "DESC";
                                $column = "mauao.Ten";
                            }
                            if (isset($_GET['lhsid'])) {
                                $id = $_GET['lhsid'];
                                $condition = "ASC";
                                $column = "mauao.Gia";
                            }
                            if (isset($_GET['hlsid'])) {
                                $id = $_GET['hlsid'];
                                $condition = "DESC";
                                $column = "mauao.Gia";
                            }
                            $char = $_SESSION['char'];
                            $selectPdt = "SELECT mauao.Ma, mauao.Ten, mauao.MoTa, mauao.AnhMinhHoa,
                                    chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, mauao.Gia, mauao.GiamGia, mauao.SoluongTon 
                                    FROM mauao 
                                    INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                                    INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                                    INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX
                                    WHERE (mauao.Ten LIKE '%$char%' OR theloai.TenTL LIKE '%$char%' OR chatlieu.TenCL LIKE '%$char%' OR nhasanxuat.TenNSX LIKE '%$char%')
                                    and mauao.SoluongTon > 0 ORDER BY $column $condition LIMIT 20";
                            $resultPdt = mysqli_query($conn, $selectPdt);
                            if (mysqli_num_rows($resultPdt)) {
                                while ($rowPdt = mysqli_fetch_assoc($resultPdt)) {
                                    $title = $rowPdt['Ten'];
                                    echo '
                                                    <div class="td-container">
                                                        <a href="product.php?bid=' . $rowPdt['Ma'] . '">
                                                                <img class="prduct-image" src="ASSET/IMG/' . $rowPdt['AnhMinhHoa'] . '" alt="">
                                                            <div class="tool-product">
                                                            <div>
                                                            <div class="table_title-author">
                                                                <a class="table_title" href="" title="' . $title . '">' . $rowPdt['Ten'] . '</a><br>
                                                                <span class="table_author">' . $rowPdt['TenCL'] . '</span>
                                                            </div>
                                                            <div class="table_price">
                                                                <span class="table_price_span">' . number_format($rowPdt['Gia']) . 'đ</span>
                                                            </div>
                                                            </div>
                                                            <a href="add2cart.php?id=' . $rowPdt["Ma"] . '&&action=add1&&' . $nameadd2cart . '=' . $id . '">
                                                                <i class="fa-solid fa-cart-plus product-icon--cart"></i>
                                                            </a>
                                                            </div>
                                                        </a>
                                                    </div>';
                                }
                            } else {
                                echo '
                                            <h1 class="no-list-product">Chưa có sản phẩm</h1>
                                        ';
                            }
                        }
                        ?>
                        </table>
                    </div>
                    <!-- <ul class="list-product_pagination">
                            <li class="pagination-item">
                                <a class="pagination-item_link  pagination-item--icon" href="">
                                    <i class="pagination-item_icon fa-solid fa-chevron-left pagination-icon"></i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link pagination-item--active" href="">1</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">2</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">4</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">5</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">...</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link" href="">10</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item_link  pagination-item--icon" href="">
                                    <i class="pagination-item_icon fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul> -->
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
</body>

</html>