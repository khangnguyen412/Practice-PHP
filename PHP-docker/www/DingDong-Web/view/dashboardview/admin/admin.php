<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Quản Trị</title>
    <?php
    $url = '../';
    $urlDashboard = "../view/";
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


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <?php
                    if (!empty($notification)) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                        echo '  <strong>Thông báo:</strong>' . $notification;
                        echo '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo '</div>';
                    }
                    ?>
                    <div class="d-flex align-items-center justify-content-between mb-4 row">
                        <!-- <div class="col-12 col-sm-6 col-md-6 d-flex justify-content-start">
                            <h6 class="mb-0">Danh Mục Quản Trị Viên</h6>
                        </div>
                        <div class="col col-12 col-sm-6 col-md-6 d-flex justify-content-lg-end justify-content-sm-center justify-content-md-end">
                            <div class="m-2">
                                <?php
                                // if (!isset($_SESSION)) {
                                //     session_start();
                                // }
                                // if (isset($_SESSION["islogin"])) {
                                //     $id = $_SESSION["id"];
                                //     echo '<a type="button" href="../view/controller/controller.php?action=getadminid&id=' . $id . '" class="btn btn-warning w-100">Cập Nhật Tài Khoản</a>';
                                // } else {
                                //     header("Location: ../view/dashboardview/signin.php");
                                // }
                                ?>
                            </div>
                            <div class="m-2">
                                <a type="button" href="../view/dashboardview/admin/addadmin.php" class="btn btn-warning w-100">Thêm Tài Khoản</a>
                            </div>
                        </div> -->
                        <!-- <div class="row w-100">
                        </div> -->
                        <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                            <h6 class="mb-0">Danh Mục Quản Trị Viên</h6>
                        </div>
                        <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center">
                            <a type="button" href="../view/dashboardview/admin/addadmin.php" class="btn btn-warning w-sm-100">Thêm Tài Khoản</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Tài Khoản</th>
                                    <th scope="col">Thời Gian Tạo Tài Khoản</th>
                                    <th scope="col">Cập Nhật Gần Nhất</th>
                                    <!-- <th scope="col">Thao Tác</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <td>
                                    <div class="row">
                                        <div class=" col">
                                            <a href="../view/controller/usercontroller.php?action=edit&id=' . $user['id'] . '"   class="col-lg-5 col-10 btn btn-success rounded-pill m-2">Cập Nhật</a>
                                            <a href="../view/controller/usercontroller.php?action=edit&id=' . $user['id'] . '"   class="col-lg-5 col-10 btn btn-danger rounded-pill m-2">Xóa</a>
                                        </div>
                                    </div>
                                </td> -->
                                <?php
                                if (isset($userlist)) {
                                    foreach ($userlist as $user) {
                                        echo '<tr>';
                                        echo '  <th scope="row">' . $user['id'] . '</th>';
                                        echo '  <td>' . $user['username'] . '</td>';
                                        echo '  <td>' . $user['timecreate'] . '</td>';
                                        echo '  <td>' . $user['timeupdate'] . '</td>';
                                        // echo '  <td>';
                                        // echo '      <div class="row">';
                                        // echo '          <div class="col">';
                                        // echo '              <a href="../view/controller/controller.php?action=getadminid&id=' . $user['id'] . '"   class=" col-xxl-5 col-10 btn btn-success rounded-pill m-2">Cập Nhật</a>';
                                        // echo '              <a href="../view/controller/controller.php?action=deleteadmin&id=' . $user['id'] . '"   class=" col-xxl-5 col-10 btn btn-danger rounded-pill m-2">Xóa</a>';
                                        // echo '          </div>';
                                        // echo '      </div>';
                                        // echo '  </td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


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
</body>

</html>