<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Daftar Buku</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar lengkap buku-buku yang tersedia dalam sistem perpustakaan.
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
              Daftar Buku
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
          <i class="fas fa-plus-circle"></i> Tambah Buku
        </button>
      </div>
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Ilustrasi</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>ISBN</th>
              <th>Jumlah</th>
              <th>Lokasi</th>
              <th>Tanggal Penambahan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT * FROM buku");
            while ($list_buku = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_buku['id_buku']; ?>
                </td>
                <td><img width="100px" src="assets/compiled/jpg/buku/<?php echo $list_buku['cover']; ?>"></td>
                <td>
                  <?php echo $list_buku['judul']; ?>
                </td>
                <td>
                  <?php echo $list_buku['penulis']; ?>
                </td>
                <td>
                  <?php echo $list_buku['penerbit']; ?>
                </td>
                <td>
                  <?php echo $list_buku['isbn']; ?>
                </td>
                <td align="center">
                  <?php echo $list_buku['jumlah']; ?>
                </td>
                <td>
                  <p>Rak 
                    <?php echo $list_buku['rak']; ?>
                  </p>
                </td>
                <td>
                  <p>
                  <?php echo date('d-m-Y', strtotime($list_buku['tgl_tambah'])); ?>
                  </p>
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_buku['id_buku']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_buku['id_buku']; ?>"><i class="bi bi-trash-fill"></i></a>
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