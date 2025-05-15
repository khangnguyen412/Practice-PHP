<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include '../partials/_header.php';
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.php -->
      <?php
        include '../partials/_navbar.php';
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.php -->
        <?php
          include '../partials/_sidebar.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card">
              <div class="auth-form-light text-left p-5">
                <h4 class="card-title">Tạo người dùng mới</h4>
                <h6 class="font-weight-light">Xin hãy điền đầy đủ thông tin</h6>
                <form class="forms-sample pt-3" method="POST" action="../controller/controller.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputName1">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên đăng nhập" name="username" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Địa email</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" required="">
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
                  <button type="submit" class="btn btn-primary mr-2" name="useraction" value="create">Đăng Ký</button>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.php -->
          <footer class="footer">
            <?php
              include '../partials/_footer.php';
            ?>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>