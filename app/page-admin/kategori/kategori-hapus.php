<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id'");
    header('Location:../../index.php?page=daftar-kategori');
?>