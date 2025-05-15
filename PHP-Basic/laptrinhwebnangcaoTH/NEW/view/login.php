<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include '../partials/_header.php';
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../assets/images/logo-dark.svg">
                </div>
                <h6 class="font-weight-light">Đăng nhập để tiếp tục</h6>
                <form class="pt-3" method="POST" action="../controller/controller.php">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên đăng nhập" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu" name="passwords">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="useraction" value="login">Đăng Nhập</button>
                  </div>
                  <div class="mb-2" style="margin-top: 10px;">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check"></div>
                    <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Chưa có tài khoản? <a href="register.php" class="text-primary">Tạo tài khoản</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php
      include '../partials/_vendorjs.php';
    ?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php
      include '../partials/_js.php';
    ?>
    <!-- endinject -->
  </body>
</html>