<?php
    include('../../../conf/config.php');
    $id        = $_GET['id'];
    $kategori  = $_GET['kategori'];
    $pesan     = $_GET['pesan'];

    $query = mysqli_query($koneksi, "UPDATE krisar SET kategori='$kategori', pesan='$pesan' WHERE id_krisar = '$id'");
    header('Location:../../index.php?page=kritik-saran&set-krisar=2');
?>