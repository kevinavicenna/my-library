<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Pengembalian</h3>
        <p class="text-subtitle text-muted">
         Halaman ini menampilkan daftar peminjaman buku yang dilakukan oleh member.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Pengembalian
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
          <i class="fas fa-plus-circle"></i> Tambah Pengembalian
        </button>
      </div>
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Judul</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Tanggal Pengembalian</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT pengembalian.id_pengembalian, buku.judul, member.nama, peminjaman.tgl_pinjam, peminjaman.tgl_jatuh_tempo, pengembalian.tgl_kembali FROM (((pengembalian INNER JOIN buku ON pengembalian.id_bukuFK = buku.id_buku) INNER JOIN member ON pengembalian.id_memberFK = member.id_member) INNER JOIN peminjaman ON pengembalian.id_peminjamanFK = peminjaman.id_peminjaman)");
            while ($list_kembali = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_kembali['id_pengembalian']; ?>
                </td>
                <td>
                  <?php echo $list_kembali['judul']; ?>
                </td>
                <td>
                  <?php echo $list_kembali['nama']; ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_kembali['tgl_pinjam'])); ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_kembali['tgl_jatuh_tempo'])); ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_kembali['tgl_kembali'])); ?>
                </td>
                <td>
                  <?php
                    $query2 = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    $view = mysqli_fetch_array($query2);
                    $query3 = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE id_peminjamanFK='".$view['id_peminjaman']."'");
                    if (mysqli_num_rows($query3)==1){
                      if ($list_kembali['tgl_kembali'] <= $list_kembali['tgl_jatuh_tempo']){
                        echo "<span class='badge bg-success'>Dikembalikan</span>";
                      }else if ($list_kembali['tgl_kembali'] > $list_kembali['tgl_jatuh_tempo']){
                        echo "<span class='badge bg-danger'>Terlambat</span>";
                      }else {
                        echo "<span class='badge bg-info'>Dipinjam</span>";
                      }
                    }
                  ?>
                 <!-- <span class="badge bg-success">Dikembalikan</span> -->
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_kembali['id_pengembalian']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_kembali['id_pengembalian']; ?>"><i class="bi bi-trash-fill"></i></a>
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