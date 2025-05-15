<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thêm Quản Trị Viên</title>
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


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Thêm Quản Trị Viên</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên Tài Khoản</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Xác Nhận Mật Khẩu</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileLg" class="form-label">Chọn Ảnh Đại Diện</label>
                                    <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                                </div>
                                <button type="submit" class="btn btn-warning">Đăng Ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


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