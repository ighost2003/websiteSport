<div class="container-list-parent">
                        <ul class="container_list">
                            <?php
                                require_once 'connection.php';
                                $selectCgr = "SELECT * FROM danhmuc";
                                $resultCgr = mysqli_query($conn, $selectCgr);
                                while($rowCgr = mysqli_fetch_assoc($resultCgr)){
                            echo'                                          
                            <li class="container_list-item">
                                <a class="container_list-link" title="'.$rowCgr['TenDM'].'">'.$rowCgr['TenDM'].'</a>
                                <a class="container_list-link-icon" title="'.$rowCgr['TenDM'].'">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <lable 
                                                    class="container_list-link-sub-title">MẪU
                                                    </lable>';
                                                $selectCgr2 = "SELECT * FROM theloai WHERE MaDM = '".$rowCgr['MaDM']."'";
                                                $resultCgr2 = mysqli_query($conn, $selectCgr2);
                                                while($rowCgr2 = mysqli_fetch_assoc($resultCgr2)){
                                                echo'
                                                <a href="productList.php?cid='.$rowCgr2['MaTL'].'"
                                                    class="container_list-link-sub-hover container_list-link-sub">'.$rowCgr2['TenTL'].'</a>';}
                                                echo'
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <label
                                                    class="container_list-link-sub-title">CHẤT
                                                    LIỆU</label>';
                                                    $selectathr = "SELECT * FROM chatlieu WHERE MaDM = '".$rowCgr['MaDM']."'";
                                                    $resultathr = mysqli_query($conn, $selectathr);
                                                    while($rowathr = mysqli_fetch_assoc($resultathr)){
                                                    echo'                                                   
                                                <a href="productList.php?aid='.$rowathr['MaCL'].'"
                                                    class="container_list-link-sub-hover container_list-link-sub">'.$rowathr['TenCL'].'</a>';}
                                                    echo'
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <label
                                                    class="container_list-link-sub-title">SIZE
                                                    </label>';
                                                    $selectpls = "SELECT * FROM nhasanxuat WHERE MaDM = '".$rowCgr['MaDM']."'";
                                                    $resultpls = mysqli_query($conn, $selectpls);
                                                    while($rowpls = mysqli_fetch_assoc($resultpls)){
                                                    echo' 
                                                <a href="productList.php?pid='.$rowpls['MaNSX'].'"
                                                    class="container_list-link-sub-hover container_list-link-sub">'.$rowpls['TenNSX'].'</a>';}
                                                    echo'
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            ';}?>
                            <!-- <li class="container_list-item">
                                <a href="container_list-link" title="Sách Mới Phát Hành">Sách thiếu nhi</a>
                                <a href="container_list-link-icon" title="Sách Bán Chạy">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Kinh Tế">Sách Kinh Tế</a>
                                <a href="container_list-link-icon" title="Sách Kinh Tế">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Văn Học">Sách Văn Học</a>
                                <a href="container_list-link-icon" title="Sách Văn Học">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Tin Học">Sách Công Nghệ</a>
                                <a href="container_list-link-icon" title="Sách Tin Học">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Ngoại Ngữ">Sách Ngoại Ngữ</a>
                                <a href="container_list-link-icon" title="Sách Ngoại Ngữ">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Đời sống - Pháp luật">Đời sống - Pháp luật
                                </a>
                                <a href="container_list-link-icon" title="Đời sống - Pháp luậty">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="container_list-item">
                                <a href="container_list-link" title="Sách Giáo Khoa - Giáo Trình">Giáo Trình - SGK</a>
                                <a href="container_list-link-icon" title="Giáo Trình - SGK">
                                    <i class="container_list-link-icon fa-solid fa-chevron-right"></i>
                                </a>
                                <div class="container_nav-sub">
                                    <ul class="container_list-sub">
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-hover container_list-link-sub-title">DANH
                                                    MỤC</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">TÁC
                                                    GIẢ</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                        <li class="container_list-item-sub">
                                            <div class="container_nav-item-sub">

                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub-title">NHÀ
                                                    PHÁT HÀNH</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                                <a href=""
                                                    class="container_list-link-sub-hover container_list-link-sub">Romance</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>