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
    <link href="css/bootstrapcss/carousel.css" rel="stylesheet">
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
                <a class="nav-link" href="drinkpage.php">Đồ Uống</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Món Ăn</a>
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
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"   aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item ">
            <img src="./img/anhbia.jpg" class="d-block w-100" alt="trà sữa" >
            <div class="container">
              <div class="carousel-caption text-start">
              <h1>Thức uống</h1>
              <h4>Các loại trà sữa, sinh tố, ...</h4> 
              <p><a class="btn btn-lg btn-primary" href="drinkpage.php" data-bs-target="#slide1">Xem Thêm</a></p>
            </div>
            </div>
          </div>

          <div class="carousel-item active">
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
        <!-- tên danh mục thực đơn -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Thực Đơn Thường</span><hr>
        </div>
        <!-- danh mục thực đơn -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/cavien.jpg" class="card-img-top" alt="cá viên">
                <div class="card-body">
                  <h5 class="card-title">Cá Viên</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/bovien.jpg" class="card-img-top" alt="bò viên">
                <div class="card-body">
                  <h5 class="card-title">Bò Viên</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/tauhuca.jpg" class="card-img-top" alt="tàu hủ cá">
                <div class="card-body">
                  <h5 class="card-title">Tàu Hủ Cá</h5>
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
                <img src="./img/thuc_an/thanhcua.jpg" class="card-img-top" alt="thanh cua">
                <div class="card-body">
                  <h5 class="card-title">Thanh Cua</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/xucxich.jpg" class="card-img-top" alt="xúc xích">
                <div class="card-body">
                  <h5 class="card-title">Xúc Xích</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/dauhuphomai.jpg" class="card-img-top" alt="đậu hủ phô mai">
                <div class="card-body">
                  <h5 class="card-title">Tàu Hủ Phô Mai</h5>
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
                <img src="./img/thuc_an/cavientrungcut.jpg" class="card-img-top" alt="cá viên trứng cút">
                <div class="card-body">
                  <h5 class="card-title">Cá Viên Trứng Cút</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/khoaitay.jpg" class="card-img-top" alt="khoai tây">
                <div class="card-body">
                  <h5 class="card-title">Khoai Tây</h5>
                  <p class="card-text">Giá: 20.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/khoaitayphomai.jpg" class="card-img-top" alt="khoai tây phô mai">
                <div class="card-body">
                  <h5 class="card-title">Khoai Tây Lắc Phô Mai</h5>
                  <p class="card-text">Giá: 20.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/galachanh.jpg" class="card-img-top" alt="gà lá chanh">
                <div class="card-body">
                  <h5 class="card-title">Khô Gà Lá Chanh</h5>
                  <p class="card-text">Giá: 35.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/khogatoi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Khô Gà Tỏi</h5>
                  <p class="card-text">Giá: 35.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cua Huỳnh Đế</h5>
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
                  <h5 class="card-title">Hải Sản Sốt MAYONES</h5> 
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/banhbaotrungcahoi.jpg" class="card-img-top" alt="Bánh Bao Trứng Cá Hồi">
                <div class="card-body">
                  <h5 class="card-title">Bánh Bao Trứng Cá Hồi</h5>
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
                  <h5 class="card-title">Bánh Bao Trứng Muối Phô Mai</h5>
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
                <img src="./img/thuc_an/banhbaorangmuc.jpg" class="card-img-top" alt="Bánh Bao Răng Mực">
                <div class="card-body">
                  <h5 class="card-title">Bánh Bao Răng Mực</h5>
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
                  <h5 class="card-title">Bánh Bao Tôm Rong Biển</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/cuahuynhde.jpg" class="card-img-top" alt="Cua Huỳnh Đế">
                <div class="card-body">
                  <h5 class="card-title">Cua Huỳnh Đế</h5>
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
                <img src="./img/thuc_an/caviencomxanh.jpg" class="card-img-top" alt="Cá Viên Cốm Xanh">
                <div class="card-body">
                  <h5 class="card-title">Cá Viên Cốm Xanh</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/tomvien.jpg" class="card-img-top" alt="Tôm Hùm Viên">
                <div class="card-body">
                  <h5 class="card-title">Tôm Hùm Viên</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/sungalacphomai.jpg" class="card-img-top" alt="Sụn Gà Lắc Phô Mai">
                <div class="card-body">
                  <h5 class="card-title">Sụn Gà Lắc Phô Mai</h5>
                  <p class="card-text">Giá: 30.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/phomaique.jpg" class="card-img-top" alt="Phô Mai Que Đặc Biệt">
                <div class="card-body">
                  <h5 class="card-title">Phô Mai Que Đặc Biệt</h5>
                  <p class="card-text">Giá: 12.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Phô Mai Que Rong Biển</h5>
                  <p class="card-text">Giá: 12.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/logo/LOGO-HOP-DEN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Phô Mai Que Xúc Xích</h5>
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
                  <h5 class="card-title">Phô Mai Que Chà Bông</h5>
                  <p class="card-text">Giá: 12.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/sodiep.jpg" class="card-img-top" alt="Sò Điệp">
                <div class="card-body">
                  <h5 class="card-title">Sò Điệp</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="./img/thuc_an/holo.jpg" class="card-img-top" alt="Hồ Lô">
                <div class="card-body">
                  <h5 class="card-title">Hồ Lô</h5>
                  <p class="card-text">Giá: 15.000 Vnđ</p>
                  <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                  <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                </div>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>

        <!-- tên danh mục theo mẹt -->
        <div class="container">
          <span class="fw-bold drink" style="color: #422511;">Thực Đơn Theo Mẹt</span><hr>
        </div>
        <!-- danh mục theo mẹt -->
        <div class="container">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Mẹt 1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container">
                    <div class="row">
                      <div class="col d-flex align-items-center justify-content-center">
                        <img src="./img/thuc_an/mec1.jpg" class="img-thumbnail" height="50%" width="50%" alt="mẹc 1">
                      </div>
                      <div class="col">
                        <p>
                          Cá Viên, Bò Viên, Cá Viên Trứng Cút, Tàu Hủ Cá, Cua Huỳnh Đế, Xúc Xích, Hải Sản Sốt Mayones <br>
                          <strong>Giá: 50.000 Vnđ</strong>
                        </p>
                        <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mẹt 2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container">
                    <div class="row">
                      <div class="col d-flex align-items-center justify-content-center">
                        <img src="./img/thuc_an/mec2.jpg" class="img-thumbnail" height="50%" width="50%" alt="mẹc 2">
                      </div>
                      <div class="col">
                        <p>
                          Cá Viên, Bò Viên, Cá Viên Trứng Cút, Tàu Hủ Cá, Cua Huỳnh Đế, Xúc Xích, Hải Sản Sốt Mayones, Tôm Hùm Viên Đậu Hủ Phô Mai <br>
                          <strong>Giá: 80.000 Vnđ</strong>
                        </p>
                        <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Mẹt 3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="container">
                    <div class="row">
                      <div class="col d-flex align-items-center justify-content-center">
                        <img src="./img/logo/LOGO-HOP-DEN.jpg" class="img-thumbnail" height="50%" width="50%" alt="...">
                      </div>
                      <div class="col">
                        <p>
                          Bánh Bao Trứng Cá Hồi, Bánh Bao Trứng Muối Phô Mai, Tôm Hùm Viên, Cá Viên Cốm Xanh, Thanh Cua, Sò Điệp, Tôm Viên, Bò Viên, Cá Viên, Hồ Lô, Tàu Hủ Cá <br>
                          <strong>Giá: 100.000 Vnđ</strong>
                        </p>
                        <a href="https://www.facebook.com/dingdongtrasuaanvat/" class="btn btn-primary">Liên Hệ FB</a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fzalo.me%2F0911290912%3Ffbclid%3DIwAR2Nz67MoVJ6VH_YxeOTDfNlCsnn02xWDkWt61OzAwng4_8V_DArhGUhW1o&h=AT1Q8617FlVUWn32Auhn4dkw9oPi2IfyJZhVthKEmCQmi_TvADAHaeeyO2KpOJPesHF4IvQUAcn1NcsUS4ymfFX6jDExt7r7rhDGmIxuxyEDN-X7P7VNvvkoUuDwkYgYoNalCg" class="btn btn-primary">Liên Hệ Zalo</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
