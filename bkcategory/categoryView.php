<?php
session_start();
if(isset($_POST["submit"])){
        if(isset($_POST['sid2'])){
            $title = $_POST['title'];
            $categarr = $_POST["categ"];
            require_once "../connection.php";
            foreach($categarr as $at)
            {
                $categtemp = $at;
            }
            $selectat = "SELECT MaDM FROM danhmuc WHERE TenDM = '$categtemp'";
            $resultat = mysqli_query($conn,$selectat);
            while($rowat = mysqli_fetch_assoc($resultat)){
                $categ = $rowat['MaDM'];
            }
            $addsql = "INSERT INTO theloai(TenTL, MaDM) VALUES ('$title','$categ')";
            mysqli_query($conn,$addsql);
        }
        if(isset($_POST['sid'])){
            $id = $_POST['sid'];
            $title = $_POST['title'];
            $categarr = $_POST["categ"];
            require_once "../connection.php";
            //---------------------------
            foreach($categarr as $at)
            {
                $categtemp = $at;
            }
            $selectat = "SELECT MaDM FROM danhmuc WHERE TenDM = '$categtemp'";
            $resultat = mysqli_query($conn,$selectat);
            while($rowat = mysqli_fetch_assoc($resultat)){
                $categ = $rowat['MaDM'];
            }
            $updatesql = "UPDATE theloai SET TenTL='$title', MaDM='$categ' WHERE MaTL='$id'";
            mysqli_query($conn,$updatesql);
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
                <h3 class="crud-user_heading">Danh Sách Thông Tin Sách</h1>
                    <div class="crud-user_content">
                            <div class="btnAdd">
                            <a class="btnAdd-a" href="addCategory.php?sid2=dir">Thêm Quốc Gia</a>  
                            </div>        
                        <table class="crud-user_list">
                            <tr class="crud-user_titlebar">
                                <th class="crud-user_column-name">Mã Quốc Gia</th>
                                <th class="crud-user_column-name">Tên Quốc Gia</th>
                                <th class="crud-user_column-name">Tên danh mục</th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Sửa</a>
                                </th>
                                <th class="crud-user_column-name a-crud">
                                    <a class="a-crud-name" href="#">Xóa</a>
                                </th>
                            </tr>
                            <?php
                            require_once '../connection.php';
                            $selectsql = "SELECT theloai.MaTL, theloai.TenTL, danhmuc.TenDM
                            FROM theloai 
                            INNER JOIN danhmuc ON theloai.MaDM = danhmuc.MaDM";
                            $result = mysqli_query($conn,$selectsql);
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr class="crud-user_row">
                                <th class="crud-user_column">
                                    <span class="crud-user_column-span"><?php echo $row['MaTL']; ?></span>       
                                </th>
                                <th class="crud-user_column">
                                    <span class="crud-user_column-span"><?php echo $row['TenTL']; ?></span>  
                                </th>
                                <th class="crud-user_column">
                                    <span class="crud-user_column-span"><?php echo $row['TenDM']; ?></span>  
                                </th>
                                <th class="crud-user_column a-crud">
                                    <a class="a-crud-a" href="updatecategory.php?sid=<?php echo $row['MaTL']; ?>">Sửa</a>
                                </th>
                                <th class="crud-user_column a-crud">
                                    <a onclick="return confirm('Bạn có thật sự muốn xóa không?')" class="a-crud-a"
                                        href="deletecategory.php?sid=<?php echo $row['MaTL']; ?>">Xóa</a>
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