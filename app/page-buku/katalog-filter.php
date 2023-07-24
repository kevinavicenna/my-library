<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Katalog Buku</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan katalog buku, dilengkapi dengan kolom pencarian dan kategori yang dapat diurutkan.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php?page=dasboard">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Buku</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Katalog Buku
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section id="content-types">
    <div class="row">
        <div class="col-md-3">
          <form action="index.php?page=katalog-cari" method="POST" class="d-flex align-items-center">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari judul buku...">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>
        </div>
        <div class="col-md-1">
          <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownKategori"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php 
              $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
              while ($list_kategori = mysqli_fetch_array($query_kategori)){
            ?>
              <a class="dropdown-item" href="index.php?page=katalog-filter&id=<?php echo $list_kategori['id_kategori'] ?>")"><?php echo $list_kategori['nama_kategori'] ?></a>
            <?php } ?>   
          </div>
        </div>
        <div class="col">
        </div>
    </div><br>
    <div class="row match-height">
      <?php
      $id = $_GET['id'];
      $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_kategoriFK='$id'");
      while ($katalog = mysqli_fetch_array($query)) {
        ?>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="card" style="width: 290px;">
            <div class="card-content">
              <div class="card-body">
                <a href="#" data-bs-toggle="modal" data-bs-target="#View<?php echo $katalog['id_buku']; ?>">
                    <img class="card-img" style="height: 20rem; width: 15rem;" src="assets/compiled/jpg/buku/<?php echo $katalog['cover']; ?>" alt="Card image cap" />
                </a>
              </div>
              <div class="card-body">
                <p class="card-text d-flex">
                  <?php echo $katalog['penulis']; ?>
                </p>
                <?php include('modal-view.php') ?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#View<?php echo $katalog['id_buku']; ?>"><h5 class="card-title-hover-text" ><?php echo $katalog['judul']; ?></h5></a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
</div>
<?php include('modal-view.php') ?>