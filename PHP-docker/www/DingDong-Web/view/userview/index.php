<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Ding Dong</title>
    <?php
    $url = "../../";
    $urlDashboard = "../";
    include './lib/header.php'
    ?>
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <?php
    include './lib/navbar.php'
    ?>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6>the most interesting food in the world</h6> -->
                    <h1>Khám Phá <span class="prime-color">Hương Vị</span><br>
                        <span class="style-change">Tại <span class="prime-color">DING DONG </span>Trà Sữa</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img justify-content-center">
                        <img src="../../assets/images/img/drink/tea/tea3.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h1 style="color: #000;"><span class="style-change">Danh Mục</span> Nước Uống</h1>
                        <a href="../../controller/controller.php?action=showDrink" class="template-btn mt-3">Xem Danh Mục</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img ">
                        <img src="../../assets/images/img/food/food.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h1 style="color: #000;"><span class="style-change">Danh Mục</span> Thức Ăn</h1>
                        <a href="../../controller/controller.php?action=showFood" class="template-btn mt-3">Xem Danh Mục</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Liên Hệ Với Chúng Tôi Qua <span class="style-change">Zalo</span> Hoặc FaceBook</h2>
                    <a href="https://www.facebook.com/dingdongtrasuaanvat" class="btn btn-outline-warning mt-4">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 25 3 C 12.861562 3 3 12.861562 3 25 C 3 36.019135 11.127533 45.138355 21.712891 46.728516 L 22.861328 46.902344 L 22.861328 29.566406 L 17.664062 29.566406 L 17.664062 26.046875 L 22.861328 26.046875 L 22.861328 21.373047 C 22.861328 18.494965 23.551973 16.599417 24.695312 15.410156 C 25.838652 14.220896 27.528004 13.621094 29.878906 13.621094 C 31.758714 13.621094 32.490022 13.734993 33.185547 13.820312 L 33.185547 16.701172 L 30.738281 16.701172 C 29.349697 16.701172 28.210449 17.475903 27.619141 18.507812 C 27.027832 19.539724 26.84375 20.771816 26.84375 22.027344 L 26.84375 26.044922 L 32.966797 26.044922 L 32.421875 29.564453 L 26.84375 29.564453 L 26.84375 46.929688 L 27.978516 46.775391 C 38.71434 45.319366 47 36.126845 47 25 C 47 12.861562 37.138438 3 25 3 z M 25 5 C 36.057562 5 45 13.942438 45 25 C 45 34.729791 38.035799 42.731796 28.84375 44.533203 L 28.84375 31.564453 L 34.136719 31.564453 L 35.298828 24.044922 L 28.84375 24.044922 L 28.84375 22.027344 C 28.84375 20.989871 29.033574 20.060293 29.353516 19.501953 C 29.673457 18.943614 29.981865 18.701172 30.738281 18.701172 L 35.185547 18.701172 L 35.185547 12.009766 L 34.318359 11.892578 C 33.718567 11.811418 32.349197 11.621094 29.878906 11.621094 C 27.175808 11.621094 24.855567 12.357448 23.253906 14.023438 C 21.652246 15.689426 20.861328 18.170128 20.861328 21.373047 L 20.861328 24.046875 L 15.664062 24.046875 L 15.664062 31.566406 L 20.861328 31.566406 L 20.861328 44.470703 C 11.816995 42.554813 5 34.624447 5 25 C 5 13.942438 13.942438 5 25 5 z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/dingdong_ding.dong/" class="btn btn-outline-warning mt-4">
                        <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->

    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Các món <span>đặc biệt</span> tại DING DONG</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div>
                        <h3>Trà Sữa Truyền Thống</h3>
                        <span class="style-change">18.000 VNĐ</span>
                        <a href="../controller/controller.php?action=showDrink" class="template-btn3 mt-3">
                            Xem ngay tại danh mục nước uống<span><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../../assets/images/img/drink/milkTea.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 align-self-center ">
                    <h1>02.</h1>
                    <div class="">
                        <h3>Combo 1</h3>
                        <!-- <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning
                            moveth green multiply she'd kind saying one shall, two which darkness have day image god
                            their night. his subdue so you rule can.</p> -->
                        <span class="style-change">50.000 VNĐ</span>
                        <a href="../controller/controller.php?action=showFood" class="template-btn3 mt-3">
                            Xem ngay tại danh mục thức ăn<span><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../../assets/images/img/food/combo1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Footer Area Starts -->
    <?php
    include './lib/footer.php'
    ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <?php
    include './lib/js.php'
    ?>
</body>

</html>