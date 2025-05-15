<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Nhập</title>
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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-warning">
                                    <img src="../img/img/logo/LOGO-HOP-DEN.jpg" height="40" width="40" alt="" srcset="">
                                    Ding Dong
                                </h3>
                            </a>
                            <h3>Đăng Nhập</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Tên Đăng Nhập</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mật Khẩu</label>
                        </div>
                        <div class="d-flex text-end mb-4">
                            <a href="" class="text-warning">Quên Mật Khẩu</a>
                        </div>
                        <button type="submit" class="btn btn-warning py-3 w-100 mb-4">Đăng Nhập</button>
                        <!-- <p class="text-center mb-0">Don't have an Account?  -->
                        <div class="text-center">
                            <a href="" class="text-warning">Đăng Ký Tài Khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <?php
        include './lib/jslib.php'
    ?>
</body>
</html>