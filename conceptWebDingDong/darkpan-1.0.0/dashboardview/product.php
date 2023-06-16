<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang sản phẩm</title>
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
                    <a href="product.html" class="nav-item nav-link active text-warning"><i class="fa fa-tachometer-alt me-2"></i>Danh Mục</a>
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

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Danh Mục Thức Ăn</h6>
                        <a type="button" class="btn btn-warning">Thêm Mặt Hàng</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Ngày Đăng</th>
                                    <th scope="col">Tên Hàng</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Đơn Giá</th>
                                    <!-- <th scope="col">Status</th> -->
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>1/12/2022</td>
                                    <td>Cá Viên</td>
                                    <td>IMG123</td>
                                    <td>12.000</td>
                                    <td>
                                        <button type="button" class="btn btn-success rounded-pill m-2">Sửa</button>
                                        <button type="button" class="btn btn-danger rounded-pill m-2">Xóa</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Danh Mục Nước Uống</h6>
                        <a type="button" class="btn btn-warning">Thêm Mặt Hàng</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Ngày Đăng</th>
                                    <th scope="col">Tên Hàng</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Đơn Giá</th>
                                    <!-- <th scope="col">Status</th> -->
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>1/12/2022</td>
                                    <td>Cá Viên</td>
                                    <td>IMG123</td>
                                    <td>12.000</td>
                                    <td>
                                        <button type="button" class="btn btn-success rounded-pill m-2">Sửa</button>
                                        <button type="button" class="btn btn-danger rounded-pill m-2">Xóa</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
            <?php
            include './lib/footer.php'
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include './lib/jslib.php'
    ?>
</body>

</html>