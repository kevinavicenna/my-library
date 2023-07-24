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
            <div class="row"
                <?php include('banner-member.php'); ?>
            </div>
            <!-- End of Banner -->

            <!-- Chart -->
            <?php include('chart-member.php'); ?>
            <!-- End Chart -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Riwayat Peminjaman</h4>
                        </div>
                        <div class="row match-height">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman, buku.cover, buku.judul, buku.penulis FROM (peminjaman INNER JOIN buku ON peminjaman.id_bukuFK = buku.id_buku) WHERE peminjaman.id_memberFK='".$_SESSION['id_member']."' ORDER BY peminjaman.id_peminjaman DESC");
                            $counter = 0;
                            while ($katalog = mysqli_fetch_array($query)) {
                                $counter++;
                                if ($counter <=3){
                                ?>
                                <div class="col-auto">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <a href="#" >
                                                <img class="card-img" style="height: 20rem; width: 15rem;" src="assets/compiled/jpg/buku/<?php echo $katalog['cover']; ?>" alt="Card image cap" />
                                                </a>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            <?php } } ?>
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