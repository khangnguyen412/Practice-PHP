<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Quốc Khang">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Trà Sữa Ding Dong</title>
    <!-- logo web -->
    <link rel="shortcut icon" type="image/png" href="./img/logo/LOGO-HOP-DEN.jpg"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrapcss/bootstrap.css" rel="stylesheet">  
    <!-- Custom styles for this template -->
    <link href="./css/bootstrap css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrapcss/footers.css">
    <!-- Custom riêng -->
    <link rel="stylesheet" href="./css/drinkpage.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>

  <body>
      
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #422511;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo/LOGO-HOP-DEN.jpg" alt="logo" width="50" height="50" class="logo">
            <span class="logoname"> Trà Sữa Ding Dong</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Trang Chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Đồ Uống</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="foodpage.php">Món Ăn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Khuyến Mãi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Liên Hệ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- slide quảng cáo -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="./img/anhbia.jpg" class="d-block w-100" alt="trà sữa" >
            <div class="container">
              <div class="carousel-caption text-start">
              <h1>Thức uống</h1>
              <h4>Các loại trà sữa, sinh tố, ...</h4> 
              <p><a class="btn btn-lg btn-primary" href="drinkpage.php" data-bs-target="#slide1">Xem Thêm</a></p>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="./img/anhbia2.jpg" class="d-block w-100" alt="thức ăn">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Đồ ăn</h1>
                <h4>Các loại cá viên, xúc xích, gà rán,...</h4> 
                <p><a class="btn btn-lg btn-primary" href="foodpage.php" data-bs-target="#slide1">Xem Thêm</a></p>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- phần nội dung -->
      <div class="container marketing">
        <!-- tên danh mục cacao -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Ca Cao-Chè</span><hr>
        </div>
        <!-- danh mục cacao -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CaCao Trân Châu</h5>
                  <p class="card-text">Giá: 20.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/ca cao/ca_cao_dam_full_topping.jpg" class="card-img-top" alt="CaCao Dằm Full Topping">
                <div class="card-body">
                  <h5 class="card-title">CaCao Dằm Full Topping</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Chè Khúc Bạch</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

        <!-- tên danh mục cafe -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Cafe</span><hr>
        </div>
        <!-- danh mục cafe -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/cafe/cafeden.jpg" class="card-img-top" alt="Cafe Đen">
                <div class="card-body">
                  <h5 class="card-title">Cafe Đen</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cafe Sữa</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/cafe/bac_xiu.jpg" class="card-img-top" alt="Bạc Xỉu">
                <div class="card-body">
                  <h5 class="card-title">Bạc Xỉu</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

        <!-- tên danh mục trà sữa -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Trà Sữa</span><hr>
        </div>
        <!-- danh mục trà sữa -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/trasua/trasuatranchau.jpg" class="card-img-top" alt="Trà Sữa Trân Châu">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Trân Châu</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="#" class="btn btn-primary">Liên Hệ Zalo</a>
                  <a href="#" class="btn btn-primary">Liên Hệ FB</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Matcha Trân Châu</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/trasua/trasuafulltopping.jpg" class="card-img-top" alt="Trà Sữa Full Topping">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Full Topping</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Socola Trân Châu</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Thái Đỏ Trân Châu</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Sữa Thái Xanh Trân Châu</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/trasua/suatuoitranchuaduongden.jpg" class="card-img-top" alt="Sữa Tươi Trân Châu Đường Đen">
                <div class="card-body">
                  <h5 class="card-title">Sữa Tươi Trân Châu Đường Đen</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lipton Sữa</h5>
                  <p class="card-text">Giá: 18.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

        </div>

        <!-- tên danh mục topping -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Topping</span><hr>
        </div>
        <!-- danh mục topping -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trân Châu</h5>
                  <p class="card-text">Giá: 3.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
              <h5 class="card-title">Phô Mai Tươi</h5>
              <p class="card-text">Giá: 5.000 Vnđ</p>
              <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
              <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
            </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Khúc Bạch</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Khoai dẻo</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bánh Flan</h5>
                  <p class="card-text">Giá: 7.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Đào Miếng</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Dâu Lát</h5>
                  <p class="card-text">Giá: 7.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Thơm Lát</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Táo Lát</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ổi Lát</h5>
                  <p class="card-text">Giá: 7.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trái Vải</h5>
                  <p class="card-text">Giá: 5.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

        <!-- tên danh mục soda -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Soda - Sữa Chua</span><hr>
        </div>
        <!-- danh mục soda -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/soda/sodadau.jpg" class="card-img-top" alt="Soda Dâu/Táo">
                <div class="card-body">
                  <h5 class="card-title">Soda Dâu/Táo</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/soda/sodavietquat.jpg" class="card-img-top" alt="Soda Việt Quất">
                <div class="card-body">
                  <h5 class="card-title">Soda Việt Quất</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Soda Biển Xanh</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Soda Đào</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Soda Ổi</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Soda Vải/Thơm</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="#" class="btn btn-primary">Liên Hệ Zalo</a>
                  <a href="#" class="btn btn-primary">Liên Hệ FB</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sữa Chua Dâu</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sữa Chua Chanh Dây</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/suachua/suachuavietquat.jpg" class="card-img-top" alt="Sữa Chua Việt Quất">
                <div class="card-body">
                  <h5 class="card-title">Sữa Chua Việt Quất</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Soda Chanh Dây</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

        <!-- tên danh mục trà trái cây -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Trà Trái Cây</span><hr>
        </div>
        <!-- danh mục trà trái cây -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hồng Trà Sủi Bọt</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Tắc Thái Lan</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Chanh</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Đào</h5>
                  <p class="card-text">Giá: 27.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Chanh Dây</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/tra/tradau.jpg" class="card-img-top" alt="Trà Dâu">
                <div class="card-body">
                  <h5 class="card-title">Trà Dâu</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/tra/tratao.jpg" class="card-img-top" alt="Trà Táo">
                <div class="card-body">
                  <h5 class="card-title">Trà Táo</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/tra/tratao.jpg" class="card-img-top" alt="Trà Vải">
                <div class="card-body">
                  <h5 class="card-title">Trà Vải</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Ổi</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Trà Việt Quất</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/nuoc_uong/tra/trathom.jpg" class="card-img-top" alt="Trà Thơm">
                <div class="card-body">
                  <h5 class="card-title">Trà Thơm</h5>
                  <p class="card-text">Giá: 25.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nước Ngọt Các Loại (Sting, Pepsi, Coca, 7UP)</h5>
                  <p class="card-text">Giá: 12.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cam Ép</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center"></div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

      </div><!-- /.container -->


      <!-- FOOTER -->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">
            Địa Chỉ: 106E/37 Lạc Long Quân P.3 Q.11 <br>
            SĐT: 0911.29.09.12
          </p>
          <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="./img/logo/LOGO-HOP-DEN.jpg" alt="" height="75px" width="75px" class="fterimg">
            <span class="d-flex align-content-center fw-bold ftername">Trà Sữa Ding Dong</span>
          </a>
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="drinkpage.php" class="nav-link px-2 text-muted">Đồ Uống</a></li>
            <li class="nav-item"><a href="foodpage.php" class="nav-link px-2 text-muted">Món Ăn</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted disabled">Khuyến Mãi</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Liên Hệ</a></li>
          </ul>
        </footer>
      </div>
    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>

  </body>
</html>
