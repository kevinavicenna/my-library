<?php
$query = mysqli_query($koneksi,"SELECT count(id_buku) AS jumlah_buku FROM buku");
$view = mysqli_fetch_array($query)
?>
<div class="row">
    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"> <?php echo $view['jumlah_buku']; ?> </div>
                        </div>
                    </div>
                </div>
            </div>