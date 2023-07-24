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
        $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_bukuFK='$id_buku', id_memberFK='$id_member', tgl_pinjam='$tgl_pinjam', tgl_jatuh_tempo='$tgl_jatuh_tempo' WHERE id_peminjaman='$id'");
        header('Location:../../index.php?page=peminjaman&set-pinjam=2');
    }
    
?>