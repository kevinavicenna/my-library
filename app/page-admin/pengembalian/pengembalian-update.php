<?php
    include('../../../conf/config.php');
    $id_peminjaman = $_GET['id_peminjaman'];
    $tgl_kembali   = $_GET['tgl_kembali'];

    $query = mysqli_query($koneksi, "UPDATE peminjaman SET tgl_kembali='$tgl_kembali' WHERE id_peminjaman='$id_peminjaman'");
    header('Location:../../index.php?page=pengembalian&set-kembali=2');
?>