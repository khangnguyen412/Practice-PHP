<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include '../lib/_header.php';
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../lib/_navbar.php -->
      <?php
        include '../lib/_navbar.php';
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../lib/_sidebar.php -->
        <?php
          include '../lib/_sidebar.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../lib/_footer.php -->
          <footer class="footer">
            <?php
              include '../lib/_footer.php';
            ?>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php
      include '../lib/_vendorjs.php';
    ?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php
      include '../lib/_js.php';
    ?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>