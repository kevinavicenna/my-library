<?php
    include('../../../conf/config.php');
    $id            = $_GET['id'];
    $nama_kategori = $_GET['nama_kategori'];

    $query = mysqli_query($koneksi, "INSERT INTO kategori VALUE('$id', '$nama_kategori')");
    header('Location:../../index.php?page=daftar-kategori');
?>