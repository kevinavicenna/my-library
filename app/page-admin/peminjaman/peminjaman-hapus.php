<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman = '$id'");
    header('Location:../../index.php?page=peminjaman&set-pinjam=3');
?>