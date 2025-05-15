<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Chính</li>
    <li class="nav-item">
      <a class="nav-link" href="../controller/controller.php?action=user">
        <span class="icon-bg"><i class="mdi mdi-account-box menu-icon"></i></span>
        <span class="menu-title">Người dùng</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../controller/controller.php?action=admin">
        <span class="icon-bg"><i class="mdi mdi-account-card-details menu-icon"></i></span>
        <span class="menu-title">Quản trị viên</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-account-card-details menu-icon"></i></span>
        <span class="menu-title">Quản trị viên</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php">Nút nhấn</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Trình đơn thả xuống</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Kiểu chữ</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="../view/shoppingcart.php">
        <span class="icon-bg"><i class="mdi mdi-dropbox menu-icon"></i></span>
        <span class="menu-title">Sản phẩm</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../view/checkout.php">
        <span class="icon-bg"><i class="mdi mdi-clipboard menu-icon"></i></span>
        <span class="menu-title">Đơn hàng</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">Trang người dùng</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.php"> Trang trắng </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> Đăng nhập </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.php"> Đăng ký </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.php"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.php"> 500 </a></li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item documentation-link">
      <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html" target="_blank">
        <span class="icon-bg">
          <i class="mdi mdi-file-document-box menu-icon"></i>
        </span>
        <span class="menu-title">Tài liệu</span>
      </a>
    </li> -->
    <li class="nav-item sidebar-user-actions">
      <div class="user-details">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="d-flex align-items-center">
              <div class="sidebar-profile-img">
                <img src="../assets/images/faces/face28.png" alt="image">
              </div>
              <div class="sidebar-profile-text">
                <p class="mb-1">
                  <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if (isset($_SESSION["is_login"])) {
                        echo $_SESSION["username"];
                    }else{
                        header("Location: ../view/login.php");
                    }
                  ?>
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="badge badge-danger">3</div> -->
        </div>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a class="nav-link nav-user-img" href="../controller/controller.php?action=logout" >
          <i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">
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
          
        </a>
        <!-- <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Đăng xuất</span></a> -->
      </div>
    </li>
  </ul>
</nav>
<!-- partial -->