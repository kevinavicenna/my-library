<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM pengembalian WHERE id_pengembalian = '$id'");
    header('Location:../../index.php?page=pengembalian');
?>