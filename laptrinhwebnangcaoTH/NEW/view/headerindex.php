
<header class="header">
  <div class="d-flex justify-content-center bg-warning p-3">
    <button class="btn btn-primary btn-rounded btn-fw" style = "background-color:white; padding: 12px 0 12px 0;margin-right: 10px;"><a href="index.php" style= "text-decoration: none">Trang Sản Phẩm</a></button>
    <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
    ?>
    <button class="btn btn-primary btn-rounded btn-fw"  style = "background-color:white; padding: 12px 0 12px 0;margin-right: 10px;"><a href="cart.php" class="cart" style= "text-decoration: none"> <span> Giỏ Hàng </span><span><?php echo "($row_count)"; ?></span> </a></button>
    <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
  </div>
</header>