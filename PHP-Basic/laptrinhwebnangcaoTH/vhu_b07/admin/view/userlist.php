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
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <?php include_once '../layouts/nav.php'; ?>
                </nav>
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
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <a href="../view/usercreate.php"   class="btn btn-outline-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->



                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- contextual table -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- end contextual table -->
                        <!-- ============================================================== -->
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
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>

                                                    <th scope="col">Status</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                               
                                                foreach ($arrUser as $user) {
                                                    echo'<tr>';
                                                    echo'    <th scope="row">' . $user['passwords'] . '</th>';
                                                    echo'    <td>'.$user['username'].'</td>';
                                                    echo'    <td>'.$user['email'].'</td>';
                                                    echo'    <td class="text-success">Active</td>';
                                                    echo'    <td><a href="../controller/usercontroller.php?action=edit&id=' . $user['passwords'] . '"   class="btn btn-outline-primary">Edit</a></td>';
                                                    echo'    <td><a href="../controller/usercontroller.php?action=delete&id=' . $user['username'] . '"   class="btn btn-danger">Delete</a></td>';
                                                    echo'</tr>';
                                                }
                                                ?>       
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
                    <div class="modal fade" id="user_delete_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <p>Bạn có chắc chắn xóa hay không ?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Không</a>
                                    <a href="#" class="btn btn-primary">Có</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php
                include_once '../layouts/footer.php';
                ?>
                <!-- ============================================================== -->
                <!-- end footer -->
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