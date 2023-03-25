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
                    <h1 style="color: #FFF;"><i>Danh Mục Thức Ăn</i></h1>
                    <!-- <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <!-- <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                        <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food row">
                        <div class="food-img col-md-12">
                            <img src="../assets/images/food1.jpg" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="food-content col-md-12" style="">
                            <div class="d-flex justify-content-between">
                                <h5>Mexican Eggrolls</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="../assets/images/food2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>chicken burger</h5>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="../assets/images/food3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>topu lasange</h5>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>pepper potatoas</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>bean salad</h5>
                                <span class="style-change">$8.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>beatball hoagie</h5>
                                <span class="style-change">$11.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">Những thức ăn </span> đang có tại Ding Dong</h3>
                        <!-- <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if(isset($foodlist)){
                        foreach($foodlist as $food){
                            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 ">';
                            echo '  <div class="card" style="height: 100%;">';
                            echo '      <div class="card-img">';
                            echo '          <img src="'.$food['img'].'" width="100%" class="img-fluid" alt="">';
                            echo '      </div>';
                            echo '      <div class="card-body">';
                            echo '          <div class="d-flex justify-content-between">';
                            echo '              <h5>'.$food['foodname'].'</h5>';
                            echo '              <span class="style-change">'.$food['price'].' VNĐ</span>';
                            echo '          </div>';
                            echo '          <p class="pt-3">'.$food['fooddescription'].'</p>';
                            echo '      </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                        
                    }
                ?>

                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 ">
                    <div class="card" style="height: 100%;">
                        <div class="card-img">
                            <img src="../assets/images/food2.jpg" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5>chicken burger</h5>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 ">
                    <div class="card" style="height: 100%;">
                        <div class="card-img">
                            <img src="../assets/images/food3.jpg" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5>topu lasange</h5>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Các <span>Combo Đặc Biệt</span> tại DING DONG</h3>
                        <!-- <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div>
                        <h3>Trà Sữa Truyền Thống</h3>
                        <!-- <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning
                            moveth green multiply she'd kind saying one shall, two which darkness have day image god
                            their night. his subdue so you rule can.</p> -->
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

    <!-- Table Area Starts -->
    <!-- <section class="table-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Book <span>your</span> table</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="#">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id="datepicker">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" id="datepicker2">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                            </div>
                            <input type="text">
                        </div>
                        <div class="table-btn text-center">
                            <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
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
