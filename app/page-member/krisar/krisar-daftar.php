<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Kritik dan Saran</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar kritik dan saran yang Anda berikan.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Kritik dan Saran
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
          <i class="fas fa-plus-circle"></i> Tambah Kritik / Saran
        </button>
      </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Kategori</th>
              <th>Pesan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT * FROM krisar WHERE id_memberFK='".$_SESSION['id_member']."'");
            while ($list_krisar = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_krisar['id_krisar']; ?>
                </td>
                <td>
                <?php
                  if($list_krisar['kategori'] == 'Kritik'){
                    echo "<span class='badge bg-danger'>".$list_krisar['kategori']."</span>";
                  }else{
                    echo "<span class='badge bg-warning'>".$list_krisar['kategori']."</span>";
                  }
                ?>
                </td>
                <td>
                  <?php echo $list_krisar['pesan']; ?>
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_krisar['id_krisar']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_krisar['id_krisar']; ?>"><i class="bi bi-trash-fill"></i></a>
                </td>
                <?php 
                  include ('modal-update.php');
                  include ('modal-hapus.php');
                ?>
              </tr>
            <?php
              } 
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
<!-- Modal Tambah dan Edit Buku-->
<?php 
  include ('modal-tambah.php');
?>
</div>