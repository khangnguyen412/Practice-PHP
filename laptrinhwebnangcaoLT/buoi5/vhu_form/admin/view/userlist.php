<!doctype html>
<html lang="en">

    <head>
        <?php
        include_once '../layouts/header.php';
        ?>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <?php
                    include '../layouts/nav.php'
                ?>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <?php
            include_once '../layouts/menu.php';
            ?>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="container-fluid  dashboard-content">
                    <!-- ============================================================== -->
                    <!-- nút tạo -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <a href="./usercreate.php" class="btn btn-primary">create</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end nút tạo -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- responsive table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Responsive Table</h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">name</th>
                                                    <th scope="col">email</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>name</td>
                                                    <td>email</td>
                                                    <td><span class="badge badge-success">active</span></td>
                                                    <td><a href="./useredit.php" class="btn btn-rounded btn-success">edit</a>
                                                        <!-- Button trigger modal -->
                                                        <a href="#" class="btn btn-rounded btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                            delete
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>bạn có muốn chắc xóa người dùng này</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Hủy</a>
                                                                        <a href="#" class="btn btn-primary">Xóa</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                </tr>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        <!-- ============================================================== -->
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <?php
        include_once '../layouts/scripts.php';
        ?>
    </body>

</html>