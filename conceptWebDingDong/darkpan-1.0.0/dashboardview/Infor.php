<!DOCTYPE html>
<html lang="en">

<head>
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <?php
        include './lib/head.php'
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning">
                        <img src="../img/img/logo/LOGO-HOP-DEN.jpg" height="40" width="40" alt="">
                        Ding Dong
                    </h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="product.html" class="nav-item nav-link text-warning"><i class="fa fa-tachometer-alt me-2"></i>Danh Mục</a>
                    <a href="admin.html" class="nav-item nav-link text-warning"><i class="fa fa-tachometer-alt me-2"></i>Quản Trị Viên</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
                include './lib/navbar.php'
            ?>
            <!-- Navbar End -->


            <!-- 404 Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center p-4">
                        <h1 class="display-1 fw-bold">Thông Báo</h1>
                        <h1 class="mb-4">Dữ liệu Đã Cập Nhật</h1>
                        <p class="mb-4"></p>
                        <a class="btn btn-warning rounded-pill py-3 px-5" href="">Quay Lại</a>
                    </div>
                </div>
            </div>
            <!-- 404 End -->


            <!-- Footer Start -->
            <?php
                include './lib/footer.php'
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <?php
        include './lib/jslib.php'
    ?>
</body>

</html>