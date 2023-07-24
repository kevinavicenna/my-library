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
      
      <div id="main" class="layout-navbar navbar-fixed">
        <header class="mb-3">
          <?php include ('includes/navbar.php'); ?>
        </header>

        <!-- Main Content --> 
        <div id="main-content">
          <?php

                if($_SESSION['status']=='administrator'){
                  if (ISSET($_GET['page'])){
                    if ($_GET['page'] == 'dashboard'){
                      include('includes/dashboard-admin.php');
                    }else if($_GET['page'] == 'katalog-buku'){
                      include('page-buku/katalog-buku.php'); 
                    }else if($_GET['page'] == 'katalog-filter'){
                      include('page-buku//katalog-filter.php'); 
                    }else if($_GET['page'] == 'katalog-cari'){
                      include('page-buku//katalog-cari.php'); 
                    }else if($_GET['page'] == 'daftar-buku'){
                      include('page-admin/buku/buku-daftar.php'); 
                    }else if($_GET['page'] == 'daftar-kategori'){
                      include('page-admin/kategori/kategori-daftar.php'); 
                    }else if($_GET['page'] == 'daftar-member'){
                      include('page-admin/member/member-daftar.php'); 
                    }else if($_GET['page'] == 'peminjaman'){
                      include('page-admin/peminjaman/peminjaman-daftar.php'); 
                    }else if($_GET['page'] == 'pengembalian'){
                      include('page-admin/pengembalian/pengembalian-daftar.php'); 
                    }else if($_GET['page'] == 'kritik-saran'){
                      include('page-admin/krisar/krisar-daftar.php'); 
                    }else{
                      include('includes/404.php');
                    } 
                  }else{
                    include('includes/dashboard-admin.php');
                  }
                }else if($_SESSION['status']=='member'){
                  if (ISSET($_GET['page'])){
                    if ($_GET['page'] == 'dashboard'){
                      include('includes/dashboard-member.php');
                    }else if($_GET['page'] == 'katalog-buku'){
                      include('page-buku//katalog-buku.php'); 
                    }else if($_GET['page'] == 'katalog-filter'){
                      include('page-buku//katalog-filter.php'); 
                    }else if($_GET['page'] == 'katalog-cari'){
                      include('page-buku//katalog-cari.php'); 
                    }else if($_GET['page'] == 'peminjaman'){
                      include('page-member/peminjaman/peminjaman-daftar.php'); 
                    }else if($_GET['page'] == 'kritik-saran'){
                      include('page-member/krisar/krisar-daftar.php'); 
                    }else{
                      include('includes/404.php');
                    }
                  }else{
                    include('includes/dashboard-member.php');
                  }
                }
            ?>
        </div>          
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
  <!-- Toast -->
    <?php include('includes/toast.php'); ?>
  <!-- End of Toast -->

  <!-- Chart Admin n Member -->
    <?php include('includes/chart-js.php'); ?>
  <!-- End of Chart -->
  </html>


