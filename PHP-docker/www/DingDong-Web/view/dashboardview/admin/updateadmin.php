<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cập Nhật Quản Trị Viên</title>
    <?php
    $url = '../';
    include '../view/dashboardview/lib/head.php'
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
        <?php
        include '../view/dashboardview/lib/sidebar.php'
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include '../view/dashboardview/lib/navbar.php'
            ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <?php
                if (isset($infor[0]['id'])) {
                    $id = $infor[0]['id'];
                } else {
                    $id = 'không có id người dùng';
                }
                if (isset($infor[0]['username'])) {
                    $username = $infor[0]['username'];
                } else {
                    $username = 'không có thông tin người dùng';
                }
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Cập Nhật Quản Trị Viên</h6>
                            <form action="../controller/controller.php" method="post" id="myForm" onsubmit="return validateForm()">
                                <input type="text" name="id" class="form-control form-control-lg bg-dark" value="<?php echo $id; ?>" readonly hidden>
                                <div class="mb-3">
                                    <label for="InputUsername" class="form-label">Tên Tài Khoản</label>
                                    <input type="text" name="username" id="InputUsername" class="form-control form-control-lg bg-dark" value="<?php echo $username; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật Khẩu</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg bg-dark">
                                    <span class="form-message" style="color: red;"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="passwordConfirmation" class="form-label">Xác Nhận Mật Khẩu</label>
                                    <input type="password" name="passwordconfirm" id="passwordConfirmation" class="form-control form-control-lg bg-dark">
                                    <span class="form-message" style="color: red;"></span>
                                </div>
                                <div class="mb-3 d-flex justify-content-end">
                                    <button type="submit" name="useraction" value="updateadmin" class="btn btn-warning">Cập Nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <?php
            include '../view/dashboardview/lib/footer.php'
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <?php
    include '../view/dashboardview/lib/jslib.php'
    ?>
    <script src="../js/validateUser.js"></script>
</body>

</html>