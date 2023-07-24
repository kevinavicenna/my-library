<?php
    session_start();
    include('../../../conf/config.php');
    $id_member = $_SESSION['id_member'];
    $kategori  = $_GET['kategori'];
    $pesan     = $_GET['pesan'];

    $query = mysqli_query($koneksi, "INSERT INTO krisar (`id_memberFK`, `kategori`, `pesan`) VALUES ('$id_member', '$kategori', '$pesan')");
    header('Location:../../index.php?page=kritik-saran&set-krisar=1');
?>