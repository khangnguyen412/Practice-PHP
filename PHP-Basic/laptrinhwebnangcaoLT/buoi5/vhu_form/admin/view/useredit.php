<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                include_once '../layouts/nav.php';
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
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <a href="./userlist.php" class="btn btn-primary">back</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->



                <div class="row">
                    <!-- ============================================================== -->
                    <!-- form đăng ký-->
                    <!-- ============================================================== -->
                    <form class="container" method="POST" action="../controller/usercontroller.php">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-1">Edit User Form</h3>
                                <p>Please enter your user information.</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text" name="username"  placeholder="Username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="E-mail" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" name="otp" placeholder="Confirm">
                                </div>
                                <div class="form-group">
                                    <h4>sở thích</h4>
                                    <label class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="đi bộ"  name="walk"><span class="custom-control-label">đi bộ</span>
                                    </label>
                                    <label class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="chơi game" name="playgame"><span class="custom-control-label">chơi game</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <h4>giới tính</h4>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="giới tính" class="custom-control-input" value="nam"><span class="custom-control-label">Nam</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="giới tính" class="custom-control-input" value="nữ"><span class="custom-control-label">Nữ</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <h4>vai trò</h4>
                                    <select class="form-control">
                                        <option name="admin" >admin</option>
                                        <option name="user">user</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h4>avatar</h4>
                                    <input type="file" name="file" id="file" class="inputfile" />
                                </div>
                                <div class="form-group row pt-0">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                        <button tyle="submit" class="btn btn-block btn-social btn-facebook ">create</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footer bg-white">
                                <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
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