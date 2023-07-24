<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");
    header('Location:../../index.php?page=daftar-buku&set-buku=3');
?>