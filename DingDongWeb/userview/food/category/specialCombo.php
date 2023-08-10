<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Menu</title>
    <?php
    $url = '../';
    include '../userview/lib/header.php'
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
    include '../userview/lib/navbar.php'
    ?>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 menu-bg text-center" style="background-image: url('../assets/images/img/wallPaper2.jpg')">
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
            <?php
                if (isset($combofoodlist)) {
                    $id = 01;
                    foreach ($combofoodlist as $food) {
                        echo '<div class="row mt-5">';
                        echo '  <div class="col-lg-6 col-md-6 align-self-center"> ';
                        echo '      <h1>'.$id.'.</h1>';
                        echo '      <div>';
                        echo '          <h3>'.$food['foodname'].'</h3>';
                        echo '          <span class="style-change">' . $food['price'] . ' VNĐ</span>';
                        echo '          <a href="../controller/controller.php?action=showFoodInfo&&id='.$food['id'].'" class="btn btn-warning mt-3"> ';
                        echo '              Xem thông tin combo <i class="fa fa-long-arrow-right"></i>';
                        echo '          </a>';
                        echo '      </div>';
                        echo '  </div>';
                        echo '  <div class="col-lg-6 col-md-6 align-self-center mt-4 mt-md-0">    ';
                        echo '      <img src="' . $food['img'] . '" alt="" class="img-fluid">  ';
                        echo '  </div> ';
                        echo '</div> ';
                        $id++;
                    }
                }
            ?>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Footer Area Starts -->
    <?php
    include '../userview/lib/footer.php'
    ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <?php
    include '../userview/lib/js.php'
    ?>
</body>

</html>