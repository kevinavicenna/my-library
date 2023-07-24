<?php
    include('../../../conf/config.php');
    $id_peminjaman = $_GET['id_peminjaman'];
    $tgl_kembali   = $_GET['tgl_kembali'];
    
    $chk   = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'");
    if(mysqli_num_rows($chk) <= 0){
        header('Location:../../index.php?page=pengembalian&set-kembali=4');
    }else{
        $query = mysqli_query($koneksi, "UPDATE peminjaman SET tgl_kembali='$tgl_kembali', status='Dikembalikan' WHERE id_peminjaman='$id_peminjaman'");
        header('Location:../../index.php?page=pengembalian&set-kembali=1');
    }
?>