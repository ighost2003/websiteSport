<?php
    session_start();
    $id = $_GET['sid'];
    require_once '../connection.php';
    $selectsql = "SELECT theloai.MaTL, theloai.TenTL, danhmuc.TenDM
    FROM theloai 
    INNER JOIN danhmuc ON theloai.MaDM = danhmuc.MaDM
    WHERE MaTL = '$id'";
    $result = mysqli_query($conn,$selectsql);
    $row = mysqli_fetch_assoc($result);
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
                <h3 class="crud-user_heading">Sửa thông tin</h1>

                <!--CRUD -->
                        <form action="categoryView.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="sid" value="<?php echo $_GET['sid'] ?>">
                            <div class="crud-user_add-container">
                                <div class="crud-user_add">
                                    <div class="crud-user_add-name">
                                        <span class="crud-user_add-name lb_email">Tên Quốc Gia:</span><br>
                                        <span class="crud-user_add-name lb_role">Mã danh mục:</span>
                                    </div>  
                                    <div class="crud-user_add-value">  
                                        <input class="crud-user_add-value" type="text" name="title" id="" value="<?php
                                        if(!isset($_SESSION["notifi-email"])){
                                            echo $row['TenTL']; 
                                        }
                                         ?>" required><br>
                                        <div class="crud-user_add-container">
 
                                        </div>
                                        <select class="crud-user_add-value" name="categ[]" id=""><br>
                                        <?php 
                                            echo"<option value='".$row['TenDM']."'>" .$row['TenDM']. "</option>";
                                            $selectlq = "SELECT TenDM FROM danhmuc WHERE NOT TenDM='".$row['TenDM']."'";
                                            $resultlq = mysqli_query($conn,$selectlq);
                                            while($rowlq = mysqli_fetch_assoc($resultlq)){
                                                echo"<option value='".$rowlq['TenDM']."'>" .$rowlq['TenDM']. "</option>"; }
                                        ?> 
                                        </select>
                                    </div>
                                    <div class="notifii">
                                        <label for="" class="highlight hl-name">
                                            <?php
                                                if(isset($_SESSION["notifi-name"])){
                                                    echo $_SESSION["notifi-name"];
                                                    unset($_SESSION["notifi-name"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-email">
                                        <?php
                                                if(isset($_SESSION["notifi-email"])){
                                                    echo $_SESSION["notifi-email"];
                                                    unset($_SESSION["notifi-email"]);
                                                }
                                            ?>
                                        </label><br>
                                        <label for="" class="highlight hl-pswd">
                                        <?php
                                                if(isset($_SESSION["notifi-pswd"])){
                                                    echo $_SESSION["notifi-pswd"];
                                                    unset($_SESSION["notifi-pswd"]);
                                                }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="add_save-exit">
                                <input onclick="return confirm('Lưu thông tin và rời khỏi đây?')" class="add-save add_save-exit--btn" type="submit" name="submit" value="Lưu" >
                                <a href="userView.php">
                                    <input onclick="return confirm('Bạn muốn hủy mà không thêm thông tin?')" class="add-exit add_save-exit--btn" type="button" value="Hủy">
                                </a>
                            </div>                             
                        </form>
            </div>
        </div>
    </main>
</body>
</html>