<?php
session_start();
if (isset($_POST["submit"])) {
    if (!empty($_POST["title"]) && !empty($_POST["decribe"]) && !empty($_POST["price"]) && !empty($_POST["amount"])) {
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];
            $target = '../ASSET/IMG/' . basename($_FILES['image']['name']);
            move_uploaded_file($image_temp, "$target");
        }
?>
<?php
        if (isset($_POST['sid2'])) {
            $title = $_POST["title"];
            $decribe = $_POST["decribe"];
            $image = basename($_FILES['image']['name']);
            $authorarr = $_POST['author'];
            $categoryarr = $_POST["category"];
            $publisherarr = $_POST["publisher"];
            $price = $_POST["price"];
            $discount = $_POST["discount"];
            $amount = $_POST["amount"];
            require_once "../connection.php";
            //---------------------------
            foreach ($authorarr as $at) {
                $authortemp = $at;
            }
            $selectat = "SELECT MaCL FROM chatlieu WHERE TenCL = '$authortemp'";
            $resultat = mysqli_query($conn, $selectat);
            while ($rowat = mysqli_fetch_assoc($resultat)) {
                $author = $rowat['MaCL'];
            }
            //---------------------------
            foreach ($categoryarr as $cg) {
                $categorytemp = $cg;
            }
            $selectcg = "SELECT MaTL FROM theloai WHERE TenTL = '$categorytemp'";
            $resultcg = mysqli_query($conn, $selectcg);
            while ($rowcg = mysqli_fetch_assoc($resultcg)) {
                $category = $rowcg['MaTL'];
            }
            //---------------------------
            foreach ($publisherarr as $pl) {
                $publishertemp = $pl;
            }
            $selectpl = "SELECT MaNSX FROM nhasanxuat WHERE TenNSX = '$publishertemp'";
            $resultpl = mysqli_query($conn, $selectpl);
            while ($rowpl = mysqli_fetch_assoc($resultpl)) {
                $publisher = $rowpl['MaNSX'];
            }
            //---------------------------
            $addsql = "INSERT INTO mauao(Ten, AnhMinhHoa, 
            MoTa, MaCL, MaTL, MaNSX, Gia, GiamGia, SoluongTon) VALUES ('$title','$image','$decribe',
            '$author','$category','$publisher','$price','$discount','$amount')";
            mysqli_query($conn, $addsql);
        }
        if (isset($_POST['sid'])) {
            $id = $_POST['sid'];
            $title = $_POST["title"];
            $decribe = $_POST["decribe"];
            $image = basename($_FILES['image']['name']);
            $authorarr = $_POST['author'];
            $categoryarr = $_POST["category"];
            $publisherarr = $_POST["publisher"];
            $price = $_POST["price"];
            $discount = $_POST["discount"];
            $amount = $_POST["amount"];
            require_once "../connection.php";
            foreach ($authorarr as $at) {
                $authortemp = $at;
            }
            $selectat = "SELECT MaCL FROM chatlieu WHERE TenCL = '$authortemp'";
            $resultat = mysqli_query($conn, $selectat);
            while ($rowat = mysqli_fetch_assoc($resultat)) {
                $author = $rowat['MaCL'];
            }
            //---------------------------
            foreach ($categoryarr as $cg) {
                $categorytemp = $cg;
            }
            $selectcg = "SELECT MaTL FROM theloai WHERE TenTL = '$categorytemp'";
            $resultcg = mysqli_query($conn, $selectcg);
            while ($rowcg = mysqli_fetch_assoc($resultcg)) {
                $category = $rowcg['MaTL'];
            }
            //---------------------------
            foreach ($publisherarr as $pl) {
                $publishertemp = $pl;
            }
            $selectpl = "SELECT MaNSX FROM nhasanxuat WHERE TenNSX = '$publishertemp'";
            $resultpl = mysqli_query($conn, $selectpl);
            while ($rowpl = mysqli_fetch_assoc($resultpl)) {
                $publisher = $rowpl['MaNSX'];
            }
            $updatesql = "UPDATE mauao SET Ten='$title', AnhMinhHoa='$image', MoTa='$decribe', 
            MaCL='$author', MaTL='$category', MaNSX='$publisher', Gia='$price', GiamGia='$discount', SoluongTon='$amount' WHERE Ma='$id'";
            mysqli_query($conn, $updatesql);
        }
    } else {
        if (empty($_POST["title"])) {
            $_SESSION["notifi-title"] = "Tên Áo không được để trống";
        }
        if (empty($_POST["decribe"])) {
            $_SESSION["notifi-decribe"] = "Vui lòng nhập mô tả";
        }
        if (empty($_POST["price"])) {
            $_SESSION["notifi-price"] = "Giá không được để trống";
        }
        if (empty($_POST["amount"])) {
            $_SESSION["notifi-amount"] = "Số lượng tồn không được để trống";
        }
        if (isset($_POST['sid'])) {
            $id = $_POST["sid"];
            header("location: updateQuanao.php?sid=" . $id . "");
        } else {
            header("location: addQuanao.php?sid2=dir");
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
                <h3 class="crud-user_heading">Danh Sách Thông Tin Áo</h1>
                    <div class="crud-user_content">
                        <div class="btnAdd">
                            <a class="btnAdd-a" href="addQuanao.php?sid2=dir">Thêm Áo</a>
                        </div>
                        <table class="crud-user_list">
                            <tr class="crud-user_titlebar">
                                <th class="crud-user_column-name">Ảnh</th>
                                <th class="crud-user_column-name">Tên Áo</th>
                                <th class="crud-user_column-name">Mô tả</th>
                                <th class="crud-user_column-name">Chất liệu</th>
                                <th class="crud-user_column-name">Quốc Gia</th>
                                <th class="crud-user_column-name">Chất liệu</th>
                                <th class="crud-user_column-name">Giá</th>
                                <th class="crud-user_column-name">Giảm giá</th>
                                <th class="crud-user_column-name">Số lượng tồn</th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Sửa</a>
                                </th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Xóa</a>
                                </th>
                            </tr>
                            <?php
                            require_once '../connection.php';
                            $selectsql = "SELECT mauao.Ma, mauao.Ten, mauao.AnhMinhHoa, mauao.MoTa, chatlieu.TenCL, theloai.TenTL, nhasanxuat.TenNSX, 
                            mauao.Gia, mauao.GiamGia, mauao.SoluongTon FROM
                            mauao INNER JOIN chatlieu ON mauao.MaCL = chatlieu.MaCL
                            INNER JOIN theloai ON mauao.MaTL = theloai.MaTL
                            INNER JOIN nhasanxuat ON mauao.MaNSX = nhasanxuat.MaNSX";
                            $result = mysqli_query($conn, $selectsql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="crud-user_row">
                                    <?php
                                     echo '<th style="background-image: url(\'../ASSET/IMG/' . $row['AnhMinhHoa'] . '\'); background-size: cover; background-position: center; width: 100px; height: 100px;" class="crud-user_column crud-image crud-user_column-img"></th>';

                                    ?>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['Ten']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['MoTa']; ?></span>
                                    </th>
                                    <th class="crud-user_column">
                                        <span class="crud-user_column-span"><?php echo $row['TenCL']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['TenTL']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['TenNSX']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['Gia']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['GiamGia']; ?></span>
                                    </th>
                                    <th class="crud-user_column column_role">
                                        <span class="crud-user_column-span"><?php echo $row['SoluongTon']; ?></span>
                                    </th>
                                    <th class="crud-user_column a-crud">
                                        <a class="a-crud-a" href="updateQuanao.php?sid=<?php echo $row['Ma']; ?>">Sửa</a>
                                    </th>
                                    <th class="crud-user_column a-crud">
                                        <a onclick="return confirm('Bạn có thật sự muốn xóa không?')" class="a-crud-a" href="deleteQuanao.php?sid=<?php echo $row['Ma']; ?>">Xóa</a>
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