<?php
    include('../../../conf/config.php');
    $id        = $_GET['id'];
    $id_member = $GET['id_member'];
    $kategori  = $GET['kategori'];
    $pesan     = $GET['pesan'];

    $query = mysqli_query($koneksi, "UPDATE krisar SET id_memberFK='$id_member', kategori='$kategori', pesan='$pesan' WHERE id_krisar = '$id'");
    header('Location:../../index.php?page=daftar-member');
?>