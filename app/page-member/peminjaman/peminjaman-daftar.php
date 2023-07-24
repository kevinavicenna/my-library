<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Peminjaman</h3>
        <p class="text-subtitle text-muted">
          Halaman ini menampilkan daftar riwayat peminjaman Anda.
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Peminjaman
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
              <th>Judul</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Tanggal Pengembalian</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            $query = mysqli_query($koneksi, "SELECT peminjaman.id_peminjaman, buku.judul, member.nama, peminjaman.tgl_pinjam, peminjaman.tgl_jatuh_tempo, peminjaman.tgl_kembali FROM ((peminjaman INNER JOIN buku ON peminjaman.id_bukuFK = buku.id_buku) INNER JOIN member ON peminjaman.id_memberFK = member.id_member) WHERE id_memberFK='".$_SESSION['id_member']."'");
            while ($list_pinjam = mysqli_fetch_array($query)) {
              $no++
                ?>
              <tr>
                <td>
                  <?php echo $no; ?>
                </td>
                <td>
                  <?php echo $list_pinjam['id_peminjaman']; ?>
                </td>
                <td>
                  <?php echo $list_pinjam['judul']; ?>
                </td>
                <td width="20%">
                  <?php echo $list_pinjam['nama']; ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_pinjam['tgl_pinjam'])); ?>
                </td>
                <td>
                  <?php echo date('d-m-Y', strtotime($list_pinjam['tgl_jatuh_tempo'])); ?>
                </td>
                <td>
                  <?php
                    if (!empty($list_pinjam['tgl_kembali'])) {
                        echo date('d-m-Y', strtotime($list_pinjam['tgl_kembali']));
                    } else {
                        echo " ";
                    }
                  ?>
                </td>
                <td  width="10%">
                  <?php
                        $query3 = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE id_peminjamanFK='".$list_pinjam['id_peminjaman']."'");
                        if (mysqli_num_rows($query3) == 1) {
                            echo "<span class='badge bg-success'>Dikembalikan</span>";
                        } else {
                          echo "<span class='badge bg-info'>Dipinjam</span>";
                        }
                    ?>
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