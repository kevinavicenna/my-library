<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM krisar WHERE id_krisar = '$id'");
    header('Location:../../index.php?page=kritik-saran&set-krisar=3');
?>