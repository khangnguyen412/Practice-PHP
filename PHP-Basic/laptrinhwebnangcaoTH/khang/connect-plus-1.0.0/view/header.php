
<header class="header">

   <div class="flex">

   
      <button class="btn btn-primary btn-rounded btn-fw" style = "width: 10px; background-color: white;font-size: 19px;"><a href="shoppingcart.php">add products</a></button>   
         <button class="btn btn-primary btn-rounded btn-fw" style = "width: 15px;background-color: white;font-size: 18px;"><a href="products.php">view products</a></button>
   

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

    <button class="btn btn-primary btn-rounded btn-fw" style = "width: 10px; background-color: white;"><a href="cart.php" class="cart"> <span> cart </span><span><?php echo $row_count; ?></span> </a></button>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>