<!-- Header Area Starts -->
<?php
    $url = (!empty($url))? $url : "../";
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<header class="header-area" style="z-index: 5; border: solid 1px #000;">
    <div class="container">
        <div class="row">
            <div class="row col-lg-5 col-md-12 col-12 align-items-center justify-content-center">
                <div class="col-lg-4 col-md-3 col-sm-3 col-4 logo-area">
                    <a href="index.php" class="col-lg-12">
                        <img src="<?php echo $url ?>assets/images/logo/LOGO-HOP-DEN.jpg" class="logo" alt="logo">
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-7 col-8 store-name">
                    Trà Sữa Ding Dong
                </div>
                <div class="col-md-3 col-sm-2 hide-on-pc hide-on-pc-tablet">
                    <a class="justify-content-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30" fill="black" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 ">
                <div class="main-menu">
                    <ul>
                        <li><a href="<?php echo $url ?>userview/index.php">Trang Chủ</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Thức Ăn
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=all">Tất Cả Danh Mục</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=comboHotpot">Combo Lẩu</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=buffetHotpot">Lẩu Ly Tự Chọn</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=specialCombo">Combo Đặc Biệt</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nước Uống
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=all">Tất Cả Danh Mục</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=cafe">Cafe</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=milk">Sữa Chua Và Sữa Tươi</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=milkTea">Trà Sữa</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=caCao">Ca Cao</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=soda">Soda</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=juice">Nước Ép</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=tea">Trà</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=topping">Các Loại Topping</a></li>
                                <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink&category=otherDrink">Nước Uống Khác</a></li>
                            </ul>
                        </li>

                        <li><a href="#contact">Liên Hệ</a></li>

                        <li>
                            <?php
                                if (isset($_SESSION["islogin"])) {
                                    echo '<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Tài Khoản</a>';
                                } else {
                                    echo '<a href="../dashboardview/signin.php">Đăng Nhập</a>';
                                }
                            ?>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-text hide-on-pc">
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="collapseExample">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo $url ?>userview/index.php">Trang Chủ</a></li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thức Ăn
                        </a>
                        <ul class="bg-body-tertiary dropdown-menu" style="margin: 20px;">
                            <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=all">Tất Cả Danh Mục</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=comboHotpot">Combo Lẩu</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=buffetHotpot">Lẩu Ly Tự Chọn</a></li>
                            <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showFood&category=specialCombo">Combo Đặc Biệt</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nước Uống
                        </a>
                        <ul class="bg-body-tertiary dropdown-menu" style="margin: 20px;">
                            <li><a class="dropdown-item" href="<?php echo $url ?>controller/controller.php?action=showDrink">Tất Cả Danh Mục</a></li>
                            <li><a class="dropdown-item" href="#">Cafe</a></li>
                            <li><a class="dropdown-item" href="#">Sữa Chua Và Sữa Tươi</a></li>
                            <li><a class="dropdown-item" href="#">Trà Sữa</a></li>
                            <li><a class="dropdown-item" href="#">Ca Cao</a></li>
                            <li><a class="dropdown-item" href="#">Soda</a></li>
                            <li><a class="dropdown-item" href="#">Nước Ép</a></li>
                            <li><a class="dropdown-item" href="#">Trà</a></li>
                            <li><a class="dropdown-item" href="#">Các Loại Topping</a></li>
                            <li><a class="dropdown-item" href="#">Nước Uống Khác</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#contact">Liên Hệ</a></li>

                    <li class="nav-item">
                        <?php
                            if (isset($_SESSION["islogin"])) {
                                echo '<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Tài Khoản</a>';
                            } else {
                                echo '<a href="../dashboardview/signin.php">Đăng Nhập</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<div class="modal" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Thông Tin Tài Khoản</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                if (isset($_SESSION["islogin"])) {
                    echo "<div>ID Tài Khoản: " . $_SESSION["id"] . "</div><br>";
                    echo "<div>Tên Tài Khoản: " . $_SESSION["username"] . "</div><br>";
                    echo "<div>Ngày Giờ Tạo: " . $_SESSION["timecreate"] . "</div><br>";
                    echo "<div>Lần Cuối Cập Nhật: " . $_SESSION["timeupdate"] . "</div><br>";
                    echo "<div>Quyền Truy Cập: " . $_SESSION["role"] . "</div><br>";
                } else {
                    echo '<a href="'.$url.'dashboardview/signin.php">Đăng Nhập</a>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <?php
                if ($_SESSION["role"] == "admins") {
                    echo '<a href="./'.$url.'controller/controller.php?action=showadmin" class="btn btn-primary">Trang Admin</a>';
                } else {
                    echo '<a href="./'.$url.'controller/controller.php?action=userChangePass&id=' . $_SESSION["id"] . '" class="btn btn-primary">Thay Đổi Mật Khẩu</a>';
                }
                ?>
                <a href="./<?php echo $url ?>controller/controller.php?action=logout" class="btn btn-primary">Đăng Xuất</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->