<?php
$tahun = date('Y');
$query_admin = mysqli_query($koneksi, "SELECT MONTH(tgl_pendaftaran) AS bulan, COUNT(id_member) as total FROM member WHERE YEAR(tgl_pendaftaran) = '$tahun' GROUP BY bulan ORDER BY bulan;");
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Statistik Pendaftaran Member Bulanan</h4>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit">
                </div>
            </div>
        </div>
    </div>
</div>