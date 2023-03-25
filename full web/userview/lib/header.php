<!-- Header Area Starts -->
<header class="header-area" style="z-index: 5;">
    <div class="container">
        <div class="row">
            <div class="row col-lg-6 col-md-12 col-12 align-items-center justify-content-center">
                <div class="col-lg-4 col-md-3 col-sm-3 col-4 logo-area">
                    <a href="index2.php" class="col-lg-12">
                        <img src="../assets/images/logo/LOGO-HOP-DEN.jpg" class="logo" alt="logo">
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
            <div class="col-lg-6 ">
                <div class="main-menu">
                    <ul>
                        <li><a href="index2.php">Trang Chủ</a></li>
                        <li><a href="../dashboardcontroler/controler.php?action=showproduct&show=food">Thức Ăn</a></li>
                        <li><a href="../dashboardcontroler/controler.php?action=showproduct&show=drink">Đồ Uống</a></li>
                        <li><a href="#contact">Liên Hệ</a></li>
                        <li>
                            <?php
                            if (!isset($_SESSION)) {
                                session_start();
                            }
                            if (isset($_SESSION["islogin"])) {
                                echo '<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">'.$_SESSION["username"].'</a>';
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
    <div class="collapse menu-text hide-on-pc" id="collapseExample">
        <ul class="">
            <li><a href="index2.php">Trang Chủ</a></li>
            <li><a href="./menu.php">Thức Ăn</a></li>
            <li><a href="./menu2.php">Đồ Uống</a></li>
            <li><a href="#contact">Liên Hệ</a></li>
            <li>
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }
                if (isset($_SESSION["islogin"])) {
                    echo '<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">'.$_SESSION["username"].'</a>';
                } else {
                    echo '<a href="../dashboardview/signin.php">Đăng Nhập</a>';
                }
                ?>
            </li>
        </ul>
    </div>
</header>

<div class="modal" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng Xuất Tài Khoản</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn Có Muốn Đăng Xuất Không?
            </div>
            <div class="modal-footer">
                <a href="./../dashboardcontroler/controler.php?action=logout" class="btn btn-primary">Đăng Xuất</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->