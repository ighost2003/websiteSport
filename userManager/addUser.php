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
</head>

<body>
    <header>
        <h1 class="header_heading">Trang quản lý</h1>
        <div class="header_right">
            <a class="header_right-homepage header_right-a" href="../mian/index.php">
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
                <h3 class="crud-user_heading">Thêm người dùng</h1>
                    <!--CRUD -->
                        <form action="userView.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="sid2" value="<?php echo $_GET['sid2'] ?>">
                            <div class="crud-user_add-container">
                                <div class="crud-user_add">
                                    <div class="crud-user_add-name">
                                        <span class="crud-user_add-name lb_username">Tên người dùng:<span class="highlight">*</span></span> <br>
                                        <span class="crud-user_add-name lb_email">Email:<span class="highlight">*</span></span><br>
                                        <span class="crud-user_add-name lb_avatar">Ảnh đại diện:</span><br>
                                        <span class="crud-user_add-name lb_address">Địa chỉ:</span><br>
                                        <span class="crud-user_add-name lb_password">Mật khẩu:<span class="highlight">*</span></span><br>
                                        <span class="crud-user_add-name lb_role">Loại quyền:</span>
                                    </div>  
                                    <div class="crud-user_add-value">
                                        <input class="crud-user_add-value" type="text" name="username" required><br>
                                        <input class="crud-user_add-value" type="email" name="email" id="" required><br>
                                        <div class="crud-user_add-container">
                                            <div style="" class="crud-user_add-img">
                                                                                          
                                            </div>
                                            <input class="crud-user_add-value add_file" type="file" name="avatar" id=""><br>
                                        </div>
                                        <input class="crud-user_add-value input_address" type="text" name="address" required><br>
                                        <input class="crud-user_add-value input_password" type="password" name="password" required><br>
                                        <select class="crud-user_add-value" name="role[]" id=""><br>
                                        <?php
                                            require_once '../connection.php';
                                            $selectsql = "SELECT TenLQ FROM loaiquyen";
                                            $result = mysqli_query($conn,$selectsql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo"<option value='".$row['TenLQ']."'>" .$row['TenLQ']. "</option>"; }
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
                                                    unset($_SESSION["notifi-email"]);
                                                }
                                            ?>
                                        </label>
                                    </div>
                                </div>  
                            </div>
                            <div class="add_save-exit">
                                <input onclick="return confirm('Thêm thông tin và rời khỏi đây?')" class="add-save add_save-exit--btn" type="submit" name="submit" value="Thêm">
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