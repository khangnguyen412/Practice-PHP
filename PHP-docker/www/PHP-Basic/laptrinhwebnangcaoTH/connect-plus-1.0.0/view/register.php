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
            <div class="col-lg-6 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../assets/images/logo-dark.svg">
                </div>
                <h6 class="font-weight-light">Xin hãy điền đầy đủ thông tin</h6>
                <form class="forms-sample pt-3" method="POST" enctype="multipart/form-data" action="../controller/controller.php">
                  <div class="form-group">
                    <label for="exampleInputName1">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên đăng nhập" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Địa email</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Mật khẩu</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Mật khẩu" name="passwords">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Giới tính</label>
                    <select class="form-control" id="exampleSelectGender" name="sex">
                      <option>Chọn giới tính</option>
                      <option value="Nam">Nam</option>
                      <option value="Nữ">Nữ</option>
                      <option value="Khác">Khác</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control file-upload-info" placeholder="Ảnh đại diện" name="avt">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Tp/Tỉnh</label>
                    <select class="form-control" id="exampleSelectGender" name="address">
                      <option>Chọn nơi ở</option>
                      <option value="HCM">Hồ Chí Minh</option>
                      <option value="HN">Hà Nội</option>
                      <option value="Huế">Huế</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="useraction" value="register">Đăng ký</button>
                  <div class="text-center mt-4 font-weight-light"> Đã có tài khoản? 
                    <a href="login.php" class="text-primary">Đăng nhập</a>
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