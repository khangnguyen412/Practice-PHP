<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include_once '../layouts/header.php';
        ?>

    </head>
    <body>

        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

        <!-- header -->
        <?php
        include_once '../layouts/menu.php';
        ?>
        <!-- end header -->

        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Fresh and Organic</p>
                            <h1>Shop</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- products -->
        <div class="product-section mt-150 mb-150">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".strawberry">Strawberry</li>
                                <li data-filter=".berry">Berry</li>
                                <li data-filter=".lemon">Lemon</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    include_once '../model/sp.php';
                    $dau = new sanpham("vhu001", "dâu", 5000, "ngon", 1, "../assets/img/products/product-img-1.jpg");
                    $buoi = new sanpham("vhu002", "nho", 5000, "ngon", 1, "../assets/img/products/product-img-2.jpg");
                    $chanh = new sanpham("vhu003", "chanh", 5000, "ngon", 1, "../assets/img/products/product-img-3.jpg");
                    $kiwi = new sanpham("vhu004", "kiwi", 5000, "ngon", 1, "../assets/img/products/product-img-4.jpg");
                    $tao = new sanpham("vhu005", "nho", 5000, "ngon", 1, "../assets/img/products/product-img-5.jpg");
                    $mamxoi = new sanpham("vhu006", "mâm xôi", 5000, "ngon", 1, "../assets/img/products/product-img-6.jpg");
                    $arr = array($dau, $buoi, $chanh,$kiwi, $tao, $mamxoi);
                ?>
                <div class="row product-lists">
                    <?php
                        foreach($arr as $item){
                            echo '<div class="col-lg-4 col-md-6 text-center strawberry">';
                            echo    '<div class="single-product-item">';
                            echo        '<div class="product-image">';
                            echo            '<a href="single-product.html"><img src="'.$item->getimg().'" alt=""></a>';
                            echo        '</div>';
                            echo        '<h3>'.$item->gettensp(). '</h3>';
                            echo        '<p class="product-price"><span>Mỗi Kg</span> '.$item->getgiasp().' VNĐ </p>';
                            echo        '<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Mua</a>';
                            echo    '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a class="active" href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end products -->

        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="../assets/img/company-logos/1.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="../assets/img/company-logos/2.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="../assets/img/company-logos/3.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="../assets/img/company-logos/4.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="../assets/img/company-logos/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

        <!-- footer -->
        <?php
        include_once '../layouts/footer.php';
        include_once '../layouts/scripts.php';
        ?>
        <!-- end copyright -->


    </body>
</html>