<style>
    .menu_item-link{
        text-decoration: none;
        color: rgb(36, 26, 33);
    }


</style>
<div class="menu">
                <ul class="menu_list">
                    <?php
                        if(isset($_SESSION['role']) && $_SESSION['role']=="3"){
                            echo'
                            <li class="menu_item">
                                <a class="menu_item-link" href="bookManager/View.php">Sách</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="bkcategory/categoryView.php">Quốc gia sách</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href=""Chất liệu></a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="">Nhà sản xuất</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="">Danh mục loại sách</a>
                            </li>
                            <li class="menu_item">
                                <a href="admin/orderOAdmin.php" class="menu_item-link">Đơn hàng</a>
                            </li>
                            <li class="menu_item">
                                <a href="admin/feedbackAdmin.php" class="menu_item-link">Phản hồi</a>
                            </li>
                            <li class="menu_item menu_item-final"></li>                         
                            ';
                        }
                        else{
                            echo'
                            <li class="menu_item--title">Admin Menu</li>
                            <li class="menu_item ">
                                <a class="menu_item-link" href="../userManager/userView.php">Người dùng</a> 
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="../bookManager/View.php">Bộ Siêu Tập</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="../bkcategory/categoryView.php">Quốc Gia </a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="">Chất liệu</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="">Nhà sản xuất</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_item-link" href="">Danh mục</a>
                            </li>
                            <li class="menu_item">
                                <a href="../admin/orderOAdmin.php" class="menu_item-link">Đơn hàng</a>
                            </li>
                            <li class="menu_item">
                                <a href="../admin/feedbackAdmin.php" class="menu_item-link">Phản hồi</a>
                            </li>
                            <li class="menu_item menu_item-final"></li>
                            ';
                        }
                    ?>
                </ul>
            </div>