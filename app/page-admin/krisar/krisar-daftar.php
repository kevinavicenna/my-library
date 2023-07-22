<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Kritik dan Saran</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar kritik dan saran yang diberikan oleh member.
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
        <table class="table table-hover" id="table1">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID</th>
              <th>Kategori</th>
              <th>Pesan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT * FROM krisar");
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
</div>