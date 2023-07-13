<!DOCTYPE html>
<html lang="en">

<!-- Header -->
  <?php include ('includes/header.php'); ?>
  <?php include('../conf/config.php') ?>
<!-- End of Header -->

  <body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">

      <!-- Sidebar -->
        <?php include ('includes/sidebar.php'); ?>
      <!-- End of Sidebar -->
      
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <!-- Main Content -->
          <?php include('admin/data-buku.php'); ?>
        <!-- End of Main Content -->

        <!-- Footer -->
          <?php include('includes/footer.php'); ?>
        <!-- End of Footer -->
      </div>
    </div>
    <!-- Scripts -->
      <?php include('includes/scripts.php'); ?>
    <!-- End of Scripts -->
  </body>
</html>
