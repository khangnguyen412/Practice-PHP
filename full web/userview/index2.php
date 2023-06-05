<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Ding Dong</title>
    <?php
    include 'lib/head.php'
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
        include 'lib/header.php'
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
                        <img src="../assets/images/img/nước uống/trà/trà thơm.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h1 style="color: #000;"><span class="style-change">Danh Mục</span> Nước Uống</h1>
                        <a href="../dashboardcontroler/controler.php?action=showDrink" class="template-btn mt-3">Xem Danh Mục</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img ">
                        <img src="../assets/images/img/thức ăn/258885242_361950392149075_8914161806092327771_n.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h1 style="color: #000;"><span class="style-change">Danh Mục</span> Thức Ăn</h1>
                        <a href="../dashboardcontroler/controler.php?action=showFood" class="template-btn mt-3">Xem Danh Mục</a>
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
                    <!-- <h4 class="mt-4">some trendy and popular courses offerd</h4> -->
                    <a href="" class="btn btn-outline-warning mt-4">
                        <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.576172 6 C 12.118043 9.5981082 10 14.323627 10 19.5 C 10 24.861353 12.268148 29.748596 15.949219 33.388672 C 15.815412 33.261195 15.988635 33.48288 16.005859 33.875 C 16.023639 34.279773 15.962689 34.835916 15.798828 35.386719 C 15.471108 36.488324 14.785653 37.503741 13.683594 37.871094 A 1.0001 1.0001 0 0 0 13.804688 39.800781 C 16.564391 40.352722 18.51646 39.521812 19.955078 38.861328 C 21.393696 38.200845 22.171033 37.756375 23.625 38.34375 A 1.0001 1.0001 0 0 0 23.636719 38.347656 C 26.359037 39.41176 29.356235 40 32.5 40 C 36.69732 40 40.631169 38.95117 44 37.123047 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 18.496094 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 34.804688 C 40.72689 36.812719 36.774644 38 32.5 38 C 29.610147 38 26.863646 37.459407 24.375 36.488281 C 22.261967 35.634656 20.540725 36.391201 19.121094 37.042969 C 18.352251 37.395952 17.593707 37.689389 16.736328 37.851562 C 17.160501 37.246758 17.523335 36.600775 17.714844 35.957031 C 17.941109 35.196459 18.033096 34.45168 18.003906 33.787109 C 17.974816 33.12484 17.916946 32.518297 17.357422 31.96875 L 17.355469 31.966797 C 14.016928 28.665356 12 24.298743 12 19.5 C 12 14.177406 14.48618 9.3876296 18.496094 6 z M 32.984375 14.986328 A 1.0001 1.0001 0 0 0 32 16 L 32 25 A 1.0001 1.0001 0 1 0 34 25 L 34 16 A 1.0001 1.0001 0 0 0 32.984375 14.986328 z M 18 16 A 1.0001 1.0001 0 1 0 18 18 L 21.197266 18 L 17.152344 24.470703 A 1.0001 1.0001 0 0 0 18 26 L 23 26 A 1.0001 1.0001 0 1 0 23 24 L 19.802734 24 L 23.847656 17.529297 A 1.0001 1.0001 0 0 0 23 16 L 18 16 z M 29.984375 18.986328 A 1.0001 1.0001 0 0 0 29.162109 19.443359 C 28.664523 19.170123 28.103459 19 27.5 19 C 25.578848 19 24 20.578848 24 22.5 C 24 24.421152 25.578848 26 27.5 26 C 28.10285 26 28.662926 25.829365 29.160156 25.556641 A 1.0001 1.0001 0 0 0 31 25 L 31 22.5 L 31 20 A 1.0001 1.0001 0 0 0 29.984375 18.986328 z M 38.5 19 C 36.578848 19 35 20.578848 35 22.5 C 35 24.421152 36.578848 26 38.5 26 C 40.421152 26 42 24.421152 42 22.5 C 42 20.578848 40.421152 19 38.5 19 z M 27.5 21 C 28.340272 21 29 21.659728 29 22.5 C 29 23.340272 28.340272 24 27.5 24 C 26.659728 24 26 23.340272 26 22.5 C 26 21.659728 26.659728 21 27.5 21 z M 38.5 21 C 39.340272 21 40 21.659728 40 22.5 C 40 23.340272 39.340272 24 38.5 24 C 37.659728 24 37 23.340272 37 22.5 C 37 21.659728 37.659728 21 38.5 21 z" />
                        </svg>
                    </a>
                    <a href="" class="btn btn-outline-warning mt-4">
                        <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                            <path d="M 25 3 C 12.861562 3 3 12.861562 3 25 C 3 36.019135 11.127533 45.138355 21.712891 46.728516 L 22.861328 46.902344 L 22.861328 29.566406 L 17.664062 29.566406 L 17.664062 26.046875 L 22.861328 26.046875 L 22.861328 21.373047 C 22.861328 18.494965 23.551973 16.599417 24.695312 15.410156 C 25.838652 14.220896 27.528004 13.621094 29.878906 13.621094 C 31.758714 13.621094 32.490022 13.734993 33.185547 13.820312 L 33.185547 16.701172 L 30.738281 16.701172 C 29.349697 16.701172 28.210449 17.475903 27.619141 18.507812 C 27.027832 19.539724 26.84375 20.771816 26.84375 22.027344 L 26.84375 26.044922 L 32.966797 26.044922 L 32.421875 29.564453 L 26.84375 29.564453 L 26.84375 46.929688 L 27.978516 46.775391 C 38.71434 45.319366 47 36.126845 47 25 C 47 12.861562 37.138438 3 25 3 z M 25 5 C 36.057562 5 45 13.942438 45 25 C 45 34.729791 38.035799 42.731796 28.84375 44.533203 L 28.84375 31.564453 L 34.136719 31.564453 L 35.298828 24.044922 L 28.84375 24.044922 L 28.84375 22.027344 C 28.84375 20.989871 29.033574 20.060293 29.353516 19.501953 C 29.673457 18.943614 29.981865 18.701172 30.738281 18.701172 L 35.185547 18.701172 L 35.185547 12.009766 L 34.318359 11.892578 C 33.718567 11.811418 32.349197 11.621094 29.878906 11.621094 C 27.175808 11.621094 24.855567 12.357448 23.253906 14.023438 C 21.652246 15.689426 20.861328 18.170128 20.861328 21.373047 L 20.861328 24.046875 L 15.664062 24.046875 L 15.664062 31.566406 L 20.861328 31.566406 L 20.861328 44.470703 C 11.816995 42.554813 5 34.624447 5 25 C 5 13.942438 13.942438 5 25 5 z" />
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
                        <a href="#" class="template-btn3 mt-3">
                            Xem ngay tại danh mục nước uống<span><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../assets/images/img/nước uống/trà sữa/trà sữa trân châu.jpg" alt="" class="img-fluid">
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
                        <a href="#" class="template-btn3 mt-3">
                            Xem ngay tại danh mục thức ăn<span><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../assets/images/img/thức ăn/mẹc 1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Footer Area Starts -->
    <?php
        include 'lib/footer.php'
    ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <?php
        include 'lib/js.php'
    ?>
</body>

</html>