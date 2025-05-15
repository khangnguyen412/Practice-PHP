
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
          include '../partials/sidebarindex.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
        <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="p-2 bd-highlight">
                    <!-- <h4 class="card-title">Tìm kiếm Người đặt hàng</h4> -->
                  </div>
                </div>            
                <form class="forms-sample" method="POST" action="../controller/controller.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <!-- <label for="exampleInputName1">Tìm kiếm tên người dùng</label> -->
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="p-2 flex-grow-1 bd-highlight">
                        <!-- <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên người dùng" name="name" required=""> -->
                      </div>
                      <div class="p-2 bd-highlight ">
                        <!-- <button type="submit" class="btn btn-primary" name="useraction" value="finduserorder">Tìm kiếm</button> -->
                      </div>
                    </div>       
                  </div>
                </form>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="p-2 bd-highlight">
                    <h4 class="card-title">Danh sách Người đặt hàng </h4>
                  </div>
                </div>            
                <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Tên Người Dùng</th>
                      <th>Sodienthoai</th>
                      <th>Phuong thuc thanh toan</th>
                      <th>Thanh Pho</th>
                      <th>Quan</th>
                      <th>Tong gia </th>
                      <th>Xoa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php                                          
                    foreach ($checklist as $list) {
                      echo'<tr>';
                      echo'<td>' . $list['id'] . '</td>';
                      echo'    <td>'.$list['name'].'</td>';
                      echo'    <td>'.$list['number'].'</td>';
                      echo'    <td>'.$list['method'].'</td>';
                      echo'    <td>'.$list['city'].'</td>';
                      echo'    <td>'.$list['state'].'</td>';
                      echo'    <td>'.$list['total_price'].'</td>';
                      echo'    <td><a href="../controller/controller.php?action=deleteorder&id=' . $list['id'] . '"   class="btn btn-danger btn-fw btn-rounded">Delete</a></td>';
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