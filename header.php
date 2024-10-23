<div class="Header">
    <div class="Header_top-center">
        <div class="Header_top">
            <ul class="Header_top_list">
                <li class="Header_top_list-items Header_top_list-items-border">
                    <i class="fa-solid fa-truck"></i>
                    <span>Miễn phí giao hàng</span>
                </li>
                <li class="Header_top_list-items Header_top_list-items-border">
                    <i class="fa-solid fa-book"></i>
                    <span>10.000 bộ siêu tập</span>
                </li>
                <li class="Header_top_list-items">
                    <a class="Header_top_list-items-a" href="">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <span>TVUSport</span>
                    </a>

                </li>
            </ul>
        </div>
        <div class="Header_center">
            <div class="Header_center-row" style="width: 80%;">
                <img src="./picture/TVU.webp" style="width: 80px; height: 80px; position: relative; top: -30px; left: -50px;">


                <div class="Header_center_logo">

                    <a href="index.php">
                        <h1 class="Header_center_logo-a">TVUSport</h1>

                    </a>


                </div>
                <div class="Header_center_input">
                    <i class=" Header_center_input-search-icon fa-solid fa-magnifying-glass"></i>
                    <form action="productList.php?sid=1" method="post">
                        <input class="Header_center_input-search-input" name="search" placeholder="Tìm kiếm " type="text" target=_blank>
                        <button title="Tìm kiếm " class="Header_center_input-search-btn" type="submit">Tìm
                    </form>
                    kiếm</button>
                    <!-- <div class="Header_center_search-history">
                                    <h4 class="Header_center_search-history-head">Từ khóa hot</h4>
                                    <ul class="Header_center_search-history-list">
                                        <li class="Header_center_search-history-items">
                                            <a href="">Blockchain</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Kinh tế</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">2n1d</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Lê Dương Bảo Lâm</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Daxua</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Hà Nội</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Nhà giả kim</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Pháp luật và đời sống</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Khu tao sống</a>
                                        </li>
                                        <li class="Header_center_search-history-items">
                                            <a href="">Pháp sư Trung hoa</a>
                                        </li>

                                    </ul>
                                </div> -->
                </div>
                <div class="Header_center_signiu">
                    <ul class="Header_center_signiu-list">
                        <li class="Header_center_signiu-list-items">
                            <div class="Header_center_signiu-list-nocart">
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    echo '<span class="header_cart-amout">' . count($_SESSION['cart']) . '</span>';
                                } else {
                                    echo '<span class="header_cart-amout">:(</span>';
                                }
                                ?>
                                <a href="cart.php" class="Header_center_signiu-list-nocart-a">
                                    <i class="Header_cart-icon fa-solid fa-cart-shopping"></i>
                                    <div class="Header_nocart">
                                        <img class="Header_nocart-img" src="/ASSET/IMG/no_cart.png" alt="anh">
                                        <span class="Header_nocart-msg">Chưa có sản phẩm</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="Header_center_signiu-list-items">
                            <!-- <a href="" class="Header_center_signiu-signin">Đăng nhập</a> -->
                            <?php
                            if (isset($_SESSION["username"])) {
                                echo '
                                                <a class="Header_center_signiu-signin">' . $_SESSION["username"] . '</a>';
                            } else {
                                echo '
                                                <a href="authencation/login.php" class="Header_center_signiu-signin">Đăng nhập</a>';
                            }
                            ?>

                            <?php
                            if (isset($_SESSION["log-out"])) {
                                echo '
                                                <a href="authencation/login.php" class="Header_center_signiu-register">' . $_SESSION["log-out"] . '</a>';
                            } else {
                                echo '
                                                <a href="authencation/register.php" class="Header_center_signiu-register">Đăng ký</a>';
                            }
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['role']) && $_SESSION['role'] == "3") {
        echo '
                        <a href="bookManager/View.php">
                            <button  class="backManager">VỀ TRANG QUẢN LÝ</button>
                        </a>
                    ';
    } else if (isset($_SESSION['role']) && $_SESSION['role'] == "1") {
        echo '
                        <a href="userManager/userView.php">
                            <button  class="backManager">VỀ TRANG QUẢN LÝ</button>
                        </a>
                    ';
    }
    ?>
</div>