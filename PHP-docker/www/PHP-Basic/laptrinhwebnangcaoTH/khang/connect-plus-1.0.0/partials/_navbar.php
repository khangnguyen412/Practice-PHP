<!-- partial:partials/_navbar.php -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.php"><img src="../assets/images/logo.svg" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-xl-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Tìm sản phẩm">
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-language dropdown d-none d-md-block">
        <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-language-icon">
            <i class="flag-icon flag-icon-vn" title="vn" id="vn"></i>
          </div>
          <div class="nav-language-text">
            <p class="mb-1 text-black">Tiếng Việt</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
          <a class="dropdown-item" href="#">
            <div class="nav-language-icon mr-2">
              <i class="flag-icon flag-icon-vn" title="vn" id="vn"></i>
            </div>
            <div class="nav-language-text">
              <p class="mb-1 text-black">Tiếng Việt</p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <!-- <img src="../assets/images/faces/face28.png" alt="image"> -->
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black">
              <?php
                if(!isset($_SESSION)){
                  session_start();
                }
                if(isset($_SESSION["is_login"])){
                  echo $_SESSION["username"];
                }else{
                  header("Location: ../view/login.php");
                }
              ?>
            </p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
          <div class="p-3 text-center bg-primary">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="../assets/images/faces/face28.png" alt="">
          </div>
          <div class="p-2">
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
              <span>Khóa tài khoản</span>
              <i class="mdi mdi-lock ml-1"></i>
            </a>
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../controller/controller.php?action=logout">
              <span>
                <?php
                  if(!isset($_SESSION)){
                    session_start();
                  }
                  if(isset($_SESSION["is_login"])) {
                    echo "Đăng Xuất";
                  }else{
                    header("Location: ../view/login.php");
                  }
                ?>
              </span>
              
              <i class="mdi mdi-logout ml-1"></i>
            </a>
          </div>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->