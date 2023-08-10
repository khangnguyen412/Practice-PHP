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
    <section class="banner-area banner-area2 menu2-bg text-center" style="background-image: url('../assets/images/img/wallPaper1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Danh Mục Nước Uống</i></h1>
                    <!-- <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-top">
                        <h3><span class="style-change">Những nước uống </span> đang có tại Ding Dong</h3>
                        <!-- <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p> -->
                    </div>
                </div>
            </div>

            <div class="row mt-5" >
                <div class="col-lg-12 col-md-12 col-12">
                    <h3>Topping</h3>
                </div>
                <?php
                    if(isset($toppingList)){
                        foreach ($toppingList as $drink) {
                            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 ">';
                            echo '  <div class="card" style="height: 100%;">';
                            echo '      <div class="card-img">';
                            echo '          <img src="' . $drink['img'] . '" width="100%" class="img-fluid" alt="">';
                            echo '      </div>';
                            echo '      <div class="card-body">';
                            echo '          <div class="d-flex justify-content-between row">';
                            echo '              <div class="col-xl-12 col-md-12 col-sm-12">';
                            echo '                  <h5>' . $drink['drinkname'] . '</h5>';
                            echo '              </div>';
                            echo '              <div class="col-xl-12 col-md-12 col-sm-12">';
                            echo '                  <span class="style-change"> Giá: ' . $drink['price'] . ' VNĐ</span>';
                            echo '              </div>';
                            echo '          </div>';
                            echo '          <p class="pt-3">' . $drink['drinkdescription'] . '</p>';
                            echo '      </div>';
                            echo '      <div class="card-footer">';
                            echo '          <div class="d-flex" >';
                            echo '              <a href="../controller/controller.php?action=showDrinkInfo&&id='.$drink['id'].'" class="col col-lg-12 btn btn-warning"> ';
                            echo '                  Xem chi tiết';
                            echo '              </a>';
                            echo '          </div>';
                            echo '      </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    }else{
                        echo "<h4>Hiện Chưa Có Nước Uống Cho Danh Mục Này</h4>";
                    }
                ?>
            </div>
  
        </div>
    </section>
    
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
