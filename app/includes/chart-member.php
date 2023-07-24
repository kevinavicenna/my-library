<?php
$tahun = date('Y');
$query_member = mysqli_query($koneksi, "SELECT MONTH(tgl_pinjam) as bulan, count(id_peminjaman) as total FROM peminjaman WHERE id_memberFK = '" . $_SESSION['id_member'] . "' AND YEAR(tgl_pinjam) = '$tahun' GROUP BY bulan ORDER BY bulan;");
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Statistik Peminjaman Buku Bulanan</h4>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
</div>


