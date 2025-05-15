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
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="p-2 bd-highlight">
                    <h4 class="card-title">Danh sách người dùng</h4>
                  </div>
                </div>            
                <form class="forms-sample" method="POST" action="../controller/controller.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputName1">Tìm kiếm tên đăng nhập</label>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="p-2 flex-grow-1 bd-highlight">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên đăng nhập" name="username" required="">
                      </div>
                      <div class="p-2 bd-highlight ">
                        <button type="submit" class="btn btn-primary" name="useraction" value="find">Tìm kiếm</button>
                      </div>
                    </div>       
                  </div>
                </form>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="p-2 bd-highlight">
                    <h4 class="card-title">Danh sách người dùng</h4>
                  </div>
                  <div class="p-2 bd-highlight">
                    <a class="btn btn-primary btn-fw" href="../view/usercreate.php">Thêm người dùng</a>
                  </div>
                </div>            
                <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Tên Người Dùng</th>
                      <th>Email</th>
                      <th>Chỉnh Sửa</th>
                      <th>Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php                                          
                      foreach ($userlist as $user) {
                          echo'<tr>';
                          echo'<td>' . $user['id_nameAtribute'] . '</td>';
                          echo'    <td>'.$user['username'].'</td>';
                          echo'    <td>'.$user['email'].'</td>';
                          echo'    <td><a href="../controller/controller.php?action=edit&id=' . $user['id_nameAtribute'] . '"   class="btn btn-light btn-fw btn-rounded">Edit</a></td>';
                          echo'    <td><a href="../controller/controller.php?action=delete&id=' . $user['id_nameAtribute'] . '"   class="btn btn-danger btn-fw btn-rounded">Delete</a></td>';
                          echo'</tr>';
                      }
                    ?>       
                  </tbody>
                </table>
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