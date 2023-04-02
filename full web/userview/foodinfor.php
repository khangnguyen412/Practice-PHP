<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Menu</title>
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
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Giới thiệu thức ăn</i></h1>
                    <!-- <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area Infor -->
    <?php
        foreach( $foodinfo as $value )
        {
            $img = $value['img'];
            $description = $value['fooddescription'];
            $name = $value['foodname'];
            $price = $value['price'];
        }
    ?>
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="img-fluid">
                        <img src="<?php echo $img?>" alt="" style="height: 100%; width: 100%;">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="section-top">
                        <h3 style="font-style: italic;"><?php echo $name?></h3>
                        <p class="pt-3 justify-content-start">
                            Mô tả: <?php echo $description?>
                        </p>
                        <h3><span class="style-change">Giá: <?php echo $price?> VND</span></h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="color: #000; font-style: italic; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:30px; font-weight:bold;">
                                    Liên Hệ Qua
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12">
                                <a href="#" class="genric-btn primary circle col-12 m-2 justify-content-center" style="color: #000;">
                                    <span style="font-weight: bold; font-size: 20px;">Facebook</span>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12">
                                <a href="#" class="genric-btn primary circle col-12 m-2 justify-content-center" style="color: #000;">
                                    <span style="font-weight: bold; font-size: 20px;">Zalo</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12">
                                <a href="#" class="genric-btn primary circle col-12 m-2 justify-content-center" style="color: #000;">
                                    <span style="font-weight: bold; font-size: 20px;">Liên hệ qua ..</span>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12">
                                <a href="#" class="genric-btn primary circle col-12 m-2 justify-content-center" style="color: #000;">
                                    <span style="font-weight: bold; font-size: 20px;">Liên hệ qua ..</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3 style="font-style: italic;">Nhận Xét Khách Hàng</h3>
            </div>
            <div class="row m-2">
                <div class="col-lg-1 col-md-2 col-4">
                    <img src="../img/user.jpg" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="col-lg-11 col-md-10 col-8">
                    <div class="col-lg-12">
                        <h5> Tên Khách Hàng </h5>
                    </div>
                    <div class="col-lg-12">
                        <p>nhận xét của khách hàng</p>
                    </div>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-lg-1 col-md-2 col-4">
                    <img src="../img/user.jpg" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="col-lg-11 col-md-10 col-8">
                    <div class="col-lg-12">
                        <h5> Tên Khách Hàng </h5>
                    </div>
                    <div class="col-lg-12">
                        <p>nhận xét của khách hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Table Area Starts -->
    <section class="table-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Xem các ăn vặt khác tại</h3>
                        <a href="#" class="genric-btn primary circle m-2 justify-content-center" style="color: #000;">
                            <span style="font-weight: bold; font-size: 20px; color:#000;">Trang Chủ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Area End -->

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