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

                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <a href="userlist.php"   class="btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>


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
                            <form id="user_create_form" action="../controller/usercontroller.php" method="POST"  enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-1">Create User</h3>

                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" id="password" name="password" type="password" required="" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <h5>Gioi tinh</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gioitinh" checked="" class="custom-control-input" value="nam"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gioitinh" class="custom-control-input" value="nu"><span class="custom-control-label">Female</span>
                                            </label>

                                        </div>
                                        <div class="form-group">
                                            <h5>So thich</h5>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name="sothich[]" value="football" checked="" class="custom-control-input"><span class="custom-control-label">Football</span>
                                            </label>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name="sothich[]" value="walking"  class="custom-control-input"><span class="custom-control-label">Walking</span>
                                            </label>

                                        </div>

                                        <div class="form-group" style="width: 500px">
                                            <label for="input-select">Role</label>
                                            <select class="form-control" name="role">
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5>Avatar</h5>
                                            <label class="custom-control custom-file custom-control-inline">
                                                <input type="file" id="avatar" name="avatar" value="football" >
                                            </label>

                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-block btn-primary" name="useraction" value="create" style="width: 100px" type="submit">Create</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        <!-- ============================================================== -->
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