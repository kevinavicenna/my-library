<?php
    include('../../../conf/config.php');
    $id                = $_GET['id'];
    $id_peminjaman     = $_GET['id_peminjaman'];
    $id_buku           = $_GET['id_buku'];
    $id_member         = $_GET['id_member'];
    $tgl_kembali       = $_GET['tgl_kembali'];

    $query = mysqli_query($koneksi, "UPDATE pengembalian SET id_peminjamanFK='$id_peminjaman', id_bukuFK='$id_buku', id_memberFK='$id_member', tgl_kembali='$tgl_kembali' WHERE id_pengembalian='$id'");
    header('Location:../../index.php?page=pengembalian');
?>