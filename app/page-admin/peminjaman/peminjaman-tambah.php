<?php
    include('../../../conf/config.php');
    $id                = $_GET['id'];
    $id_buku           = $_GET['id_buku'];
    $id_member         = $_GET['id_member'];
    $tgl_pinjam        = $_GET['tgl_pinjam'];
    $tgl_pinjam        = $_GET['tgl_jatuh_tempo'];

    $query = mysqli_query($koneksi, "INSERT INTO peminjaman VALUE('$id', '$id_buku', '$id_member', '$tgl_pinjam', '$tgl_pinjam', '')");
    header('Location:../../index.php?page=peminjaman');
?>