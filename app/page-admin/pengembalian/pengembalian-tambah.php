<?php
    include('../../../conf/config.php');
    $id                = $_GET['id'];
    $id_peminjaman     = $_GET['id_peminjaman'];
    $id_buku           = $_GET['id_buku'];
    $id_member         = $_GET['id_member'];
    $tgl_kembali       = $_GET['tgl_kembali'];

    $query = mysqli_query($koneksi, "INSERT INTO pengembalian VALUE('$id', '$id_peminjaman', '$id_buku', '$id_member', '$tgl_kembali')");
    header('Location:../../index.php?page=pengembalian');
?>