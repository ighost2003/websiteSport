<?php
    session_start();
    require_once 'connection.php';

    // Lấy id từ URL
    $getId = null; // Khởi tạo biến để tránh lỗi nếu không có tham số nào được truyền vào
    $getName = null;
    if (isset($_GET['cid'])) {
        $getId = $_GET['cid'];
        $getName = "cid";
    } elseif (isset($_GET['aid'])) {
        $getId = $_GET['aid'];
        $getName = "aid";
    } elseif (isset($_GET['pid'])) {
        $getId = $_GET['pid'];
        $getName = "pid";
    } elseif (isset($_GET['sid'])) {
        $getId = $_GET['sid'];
        $getName = "sid";
    } elseif (isset($_GET['azcid'])) {
        $getId = $_GET['azcid'];
        $getName = "azcid";
    } elseif (isset($_GET['zacid'])) {
        $getId = $_GET['zacid'];
        $getName = "zacid";
    } elseif (isset($_GET['lhcid'])) {
        $getId = $_GET['lhcid'];
        $getName = "lhcid";
    } elseif (isset($_GET['hlcid'])) {
        $getId = $_GET['hlcid'];
        $getName = "hlcid";
    }

    // Kiểm tra thêm vào giỏ hàng
    if (isset($_GET['id']) && $_GET['action'] === "add2") {
        if (isset($_SESSION['Email-all'])) {
            $select = "SELECT SoluongTon FROM mauao WHERE ma = '".mysqli_real_escape_string($conn, $_GET['id'])."' AND SoluongTon > 0";
            $result = mysqli_query($conn, $select);
            
            if (mysqli_num_rows($result) > 0) {
                // Khởi tạo giỏ hàng và số lượng nếu chưa tồn tại
                $_SESSION['cart'] = $_SESSION['cart'] ?? [];
                $_SESSION['amount'] = $_SESSION['amount'] ?? [];

                // Kiểm tra sản phẩm có trong giỏ hàng chưa
                if (!in_array($_GET['id'], $_SESSION['cart'])) {
                    $_SESSION['cart'][] = $_GET['id'];
                    $_SESSION['amount'][] = 1;
                    $_SESSION['message'] = 'Thêm sản phẩm vào giỏ hàng thành công';
                } else {
                    $_SESSION['message'] = 'Sản phẩm đã tồn tại trong giỏ hàng';
                }

                header('Location: product.php?bid=' . $_GET['id']);
                exit();
            } else {
                $_SESSION['message'] = 'Rất tiếc sản phẩm hiện tại đã hết. Vui lòng chọn sản phẩm khác!';
                header('Location: product.php?bid=' . $_GET['id']);
                exit();
            }
        } else {
            header("Location: authencation/login.php");
            exit();
        }
    } elseif (isset($_GET['id']) && $_GET['action'] === "add1") {
        if (isset($_SESSION['Email-all'])) {
            $select = "SELECT SoluongTon FROM mauao WHERE Ma ='{$_GET['id']}' AND SoluongTon > 0";
            $result = mysqli_query($conn, $select);

            if (mysqli_num_rows($result) > 0) {
                // Khởi tạo giỏ hàng và số lượng nếu chưa tồn tại
                $_SESSION['cart'] = $_SESSION['cart'] ?? [];
                $_SESSION['amount'] = $_SESSION['amount'] ?? [];

                // Kiểm tra sản phẩm có trong giỏ hàng chưa
                if (!in_array($_GET['id'], $_SESSION['cart'])) {
                    $_SESSION['cart'][] = $_GET['id'];
                    $_SESSION['amount'][] = 1;
                    $_SESSION['message'] = 'Thêm sản phẩm vào giỏ hàng thành công';
                } else {
                    $_SESSION['message'] = 'Sản phẩm đã tồn tại trong giỏ hàng';
                }

                header('Location: productList.php?' . $getName . '=' . $getId);
                exit();
            } else {
                $_SESSION['message'] = 'Rất tiếc sản phẩm hiện tại đã hết. Vui lòng chọn sản phẩm khác!';
                header('Location: productList.php?' . $getName . '=' . $getId);
                exit();
            }
        } else {
            header("Location: authencation/login.php");
            exit();
        }
    }

    // Đặt hàng
    if (isset($_POST['order'])) {
        if (!isset($_SESSION['Email-all'])) {
            header("Location: authencation/login.php");
            exit();
        }

        $email = $_SESSION['Email-all'];
        $sqlor = "SELECT * FROM nguoidung WHERE Email = '$email'";
        $result = mysqli_query($conn, $sqlor);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $username = $_POST["name"];
            $address = $_POST["address"];
            $phone = $_POST['numberphone'];
            $price = $_GET['total'];
            $detail = $_SESSION['detail'];

            $insertor = "INSERT INTO donhang (TenND, Email, SDT, ChiTiet, DiaChi, TongTien, NgayDH, TrangThai) 
                         VALUES('$username', '$email', '$phone', '$detail', '$address', '$price', NOW(), '0')";

            if (mysqli_query($conn, $insertor)) {
                foreach ($_SESSION['id-product'] as $index => $idpdt) {
                    $selectamt = "SELECT SoluongTon FROM mauao WHERE Ma ='$idpdt'";
                    $resultamt = mysqli_query($conn, $selectamt);
                    $rowamt = mysqli_fetch_assoc($resultamt);

                    $amount = $rowamt['SoluongTon'] - ($_SESSION['amount-product'][$index] ?? 0);
                    $updateamt = "UPDATE mauao SET SoluongTon = '$amount' WHERE Ma = '$idpdt'";
                    mysqli_query($conn, $updateamt);
                }

                // Xóa giỏ hàng sau khi đặt hàng thành công
                unset($_SESSION['cart'], $_SESSION['amount']);
                $_SESSION['cartnotify'] = "Đặt hàng thành công";
                header("Location: cart.php");
                exit();
            } else {
                unset($_SESSION['nameOfValue']);
                header("Location: authencation/login.php");
                exit();
            }
        }
    }
?>
