<?php
    include('../../../conf/config.php');
    $id                = $_GET['id'];
    $id_buku           = $_GET['id_buku'];
    $id_member         = $_GET['id_member'];
    $tgl_pinjam        = $_GET['tgl_pinjam'];
    $tgl_jatuh_tempo   = $_GET['tgl_jatuh_tempo'];

    $chk_buku   = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $chk_member = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member = '$id_member'");
    if(mysqli_num_rows($chk_buku) <= 0){
        header('Location:../../index.php?page=peminjaman&set-pinjam=4');
    }else if(mysqli_num_rows($chk_member) <= 0){
        header('Location:../../index.php?page=peminjaman&set-pinjam=5');
    }else{
        $query = mysqli_query($koneksi, "INSERT INTO `peminjaman`(`id_bukuFK`, `id_memberFK`, `tgl_pinjam`, `tgl_jatuh_tempo`, `status`) VALUES ('$id_buku','$id_member','$tgl_pinjam','$tgl_jatuh_tempo','Dipinjam')");
        header('Location:../../index.php?page=peminjaman&set-pinjam=1');
    }
?>