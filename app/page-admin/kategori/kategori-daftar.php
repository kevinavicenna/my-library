<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Daftar Kategori</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar lengkap kategori buku tersedia dalam sistem perpustakaan.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Buku</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Daftar Kategori
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-body">
        <button type="button" 
          class="btn icon icon-left btn-primary" 
          data-bs-toggle="modal"
          data-bs-target="#Tambah"
        >
          <i class="fas fa-plus-circle"></i> Tambah Kategori
        </button>
      </div>
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Nama Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
            while ($list_kategori = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <span class="badge bg-info"><?php echo $list_kategori['id_kategori']; ?></span>
                </td>
                <td>
                  <?php echo $list_kategori['nama_kategori']; ?>
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_kategori['id_kategori']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_kategori['id_kategori']; ?>"><i class="bi bi-trash-fill"></i></a>
                </td>
              </tr>
            <?php
              include('modal-update.php');
              include('modal-hapus.php');
              } 
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
<!-- Modal Tambah dan Edit Buku-->
<?php 
  include('modal-tambah.php'); 
?>
</div>