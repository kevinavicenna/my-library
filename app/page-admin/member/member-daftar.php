<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Daftar Member</h3>
        <p class="text-subtitle text-muted">
          A sortable, searchable, paginated table without dependencies
          thanks to simple-datatables.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Daftar Member
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
          <i class="fas fa-plus-circle"></i> Tambah Member
        </button>
      </div>
      <div class="card-body">
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nomor HP</th>
              <th>Tanggal Pendaftaran</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT * FROM member");
            while ($list_member = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_member['id_member']; ?>
                </td>
                <td>
                  <?php echo $list_member['nama']; ?>
                </td>
                <td>
                  <?php echo $list_member['alamat']; ?>
                </td>
                <td>
                  <?php echo $list_member['no_hp']; ?>
                </td>
                <td>
                  <?php echo $list_member['tgl_pendaftaran']; ?>
                </td>
                <td>
                <span class="badge bg-info"><?php echo $list_member['status']; ?></span>
                </td>
                <td width="15%">
                  <!-- <span class="badge bg-success">X</span> -->
                  <a href="" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#Update<?php echo $list_member['id_member']; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a href="" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#Hapus<?php echo $list_member['id_member']; ?>"><i class="bi bi-trash-fill"></i></a>
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