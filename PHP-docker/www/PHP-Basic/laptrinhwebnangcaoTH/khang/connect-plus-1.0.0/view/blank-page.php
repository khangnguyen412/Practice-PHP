<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include '../partials/_header.php';
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.php -->
      <?php
        include '../partials/_navbar.php';
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.php -->
        <?php
          include '../partials/_sidebar.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.php -->
          <footer class="footer">
            <?php
              include '../partials/_footer.php';
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
      include '../partials/_vendorjs.php';
    ?>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <?php
      include '../partials/_js.php';
    ?>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>