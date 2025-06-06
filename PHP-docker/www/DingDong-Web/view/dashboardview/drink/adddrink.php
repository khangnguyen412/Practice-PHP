<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thêm Đồ Uống</title>
    <?php
    $url = "../../../";
    include '../lib/head.php'
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
            include '../lib/sidebar.php'
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include '../lib/navbar.php'
            ?>
            <!-- Navbar End -->

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Thêm Đồ Uống</h6>
                            <form action="../../../controller/controller.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <label for="drinkname" class="form-label">Tên Sản Phẩm</label>
                                    <input type="text" name="drinkname" class="form-control" id="productName">
                                    <span class="form-message" style="color: red;"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Giá Tiền</label>
                                    <input type="text" name="price" class="form-control" id="productPrice">
                                    <span class="form-message" style="color: red;"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="description">Chú Thích</label>
                                    <textarea class="form-control" name="description" placeholder="Ghi Mô Tả Tại Đây" id="floatingTextarea" style="height: 150px;"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Chọn Ảnh</label>
                                    <input class="form-control form-control-lg bg-dark" name="img" id="productImage" type="file">
                                    <span class="form-message" style="color: red;"></span>
                                </div>
                                <button type="submit" name="useraction" value="adddrink" class="btn btn-warning">Đăng Nước Uống</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->

            <!-- Footer Start -->
            <?php
            include '../lib/footer.php'
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include '../lib/jslib.php'
    ?>
    <script src="../../../js/validateProduct.js"></script>
    <script>

    </script>
</body>

</html>