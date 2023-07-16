<!DOCTYPE html>
<html lang="en">

<!-- Header -->
  <?php
    session_start();
    if(!$_SESSION['nama']){
      header('Location: ../index.php?session=expired');
    } 
    include ('includes/header.php'); 
  ?>
  <?php include('../conf/config.php'); ?>
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
          <?php 
            if (ISSET($_GET['page'])){
              if ($_GET['page'] == 'dashboard'){
                include('includes/dashboard.php');
              }else if($_GET['page'] == 'daftar-buku'){
                include('page-admin/buku/buku-daftar.php'); 
              }else if($_GET['page'] == 'daftar-kategori'){
                include('page-admin/kategori/kategori-daftar.php'); 
              }else if($_GET['page'] == 'daftar-member'){
                include('page-admin/member/member-daftar.php'); 
              }else{
                include('includes/404.php');
              } 
            }else{
              include('includes/dashboard.php');
            }
          ?>
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
