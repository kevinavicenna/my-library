<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Home</h3>
        <p class="text-subtitle text-muted">
            Selamat datang di UMS LIBRARY! Di sini, Anda akan menemukan informasi yang sangat berharga tentang seluruh aktivitas perpustakaan dalam satu tampilan.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Dashboard
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg">
            
            <!-- Banner -->
            <div class="row" id="banner">
                <?php include('banner-admin.php'); ?>
            </div>
            <!-- End of Banner -->

            <!-- Chart -->
            <?php include('chart-admin.php'); ?>
            <!-- End Chart -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kritik dan Saran Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Kategori</th>
                                            <th>Pesan</th>
                                        </tr>
                                    </thead>

                                    <tbody>   
                                    <?php 
                                        $query = mysqli_query($koneksi, "SELECT * from krisar ORDER BY id_krisar DESC");
                                        $no    = 0;
                                        while ($list_view = mysqli_fetch_array($query)){
                                        $no++;
                                        if ($no > 3){
                                            break;
                                        }
                                    ?>

                                        <tr>
                                            <td class="col-1">
                                                <div class="d-flex align-items-center">           
                                                    <p class="font-bold ms-3 mb-0">  <?php echo $no ?> </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <div class="d-flex align-items-center">           
                                                    <p class="font-bold ms-3 mb-0">  <?php echo $list_view['id_krisar']; ?> </p>
                                                </div>
                                            </td>
                                            <td>
                                                <?php 
                                                if ($list_view['kategori']=='Kritik'){
                                                    echo "<span class='badge bg-danger'>".$list_view['kategori']."</span>";
                                                }
                                                else{
                                                    echo "<span class='badge bg-warning'>".$list_view['kategori']."</span>";
                                                }
                                                
                                                ?>
                                            </td>
                                            <td class="col-auto">
                                                <p class="mb-0">
                                                    <?php echo $list_view['pesan'];?>
                                                </p>
                                            </td>
                                        </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="./assets/compiled/jpg/1.jpg" alt="Face 1" />
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?php echo $_SESSION['nama']; ?></h5>
                            <h6 class="text-muted mb-0"><?php echo $_SESSION['status']; ?></h6>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-header">
                    <h4>Recent Messages</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="./assets/compiled/jpg/4.jpg" />
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="./assets/compiled/jpg/5.jpg" />
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Dean Winchester</h5>
                            <h6 class="text-muted mb-0">@imdean</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="./assets/compiled/jpg/1.jpg" />
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">John Dodol</h5>
                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class="btn btn-block btn-xl btn-outline-primary font-bold mt-3">
                            Start Conversation
                        </button>
                    </div>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> -->
        
        
        
        
        </div>
    </section>
</div>