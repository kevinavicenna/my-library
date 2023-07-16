<?php
    include('../../../conf/config.php');
    $id            = $_GET['id'];
    $nama_kategori = $_GET['nama_kategori'];

    $query = mysqli_query($koneksi, "UPDATE kategori SET id_kategori='$id', nama_kategori='$nama_kategori' WHERE id_kategori = '$id'");
    header('Location:../../index.php?page=daftar-kategori');
?>