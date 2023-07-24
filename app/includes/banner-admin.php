<?php
$query = mysqli_query($koneksi,"SELECT count(id_buku) AS jumlah_buku FROM buku");
$query2 = mysqli_query($koneksi,"SELECT count(id_member)AS jumlah_member FROM member");
$query3 = mysqli_query($koneksi,"SELECT count(id_peminjaman)AS jumlah_peminjaman FROM peminjaman");
$query4 = mysqli_query($koneksi,"SELECT count(id_peminjaman)AS jumlah_pengembalian FROM peminjaman WHERE status='Dikembalikan'");
$view = mysqli_fetch_array($query);
$view2 = mysqli_fetch_array($query2);
$view3 = mysqli_fetch_array($query3);
$view4 = mysqli_fetch_array($query4);
?>


    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="iconly-boldShow"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">
                            Buku
                        </h6>
                        <h6 class="font-extrabold mb-0"> <?php echo $view['jumlah_buku']; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon blue mb-2">
                            <i class="iconly-boldProfile"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Member</h6>
                        <h6 class="font-extrabold mb-0"> <?php echo $view2['jumlah_member'];?> </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldAdd-User"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Peminjaman</h6>
                        <h6 class="font-extrabold mb-0">  <?php echo $view3['jumlah_peminjaman']; ?> </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                            <i class="iconly-boldBookmark"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Pengembalian</h6>
                        <h6 class="font-extrabold mb-0">  <?php echo $view4['jumlah_pengembalian'];?>  </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
