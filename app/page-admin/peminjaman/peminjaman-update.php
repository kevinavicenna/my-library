<?php
    include('../../../conf/config.php');
    $id                = $_GET['id'];
    $id_buku           = $_GET['id_buku'];
    $id_member         = $_GET['id_member'];
    $tgl_pinjam        = $_GET['tgl_pinjam'];
    $tgl_jatuh_tempo   = $_GET['tgl_jatuh_tempo'];

    $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_bukuFK='$id_buku', id_memberFK='$id_member', tgl_pinjam='$tgl_pinjam', tgl_jatuh_tempo='$tgl_jatuh_tempo' WHERE id_peminjaman='$id'");
    header('Location:../../index.php?page=peminjaman');
?>