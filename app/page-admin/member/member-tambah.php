<?php
    include('../../../conf/config.php');
    $id         = $_GET['id'];
    $username   = $_GET['username'];
    $password   = $_GET['password'];
    $nama       = $_GET['nama'];
    $alamat     = $_GET['alamat'];
    $no_hp      = $_GET['no_hp'];
    $tgl_daftar = $_GET['tgl_daftar'];

    $chk   = mysqli_query($koneksi, "SELECT * FROM member WHERE username = '".$username."'");
    if(mysqli_num_rows($chk)>0){
        header('Location:../../index.php?page=daftar-member&set-member=4');
    }else{
        $query = mysqli_query($koneksi, "INSERT INTO `member`(`username`, `password`, `nama`, `alamat`, `no_hp`, `tgl_pendaftaran`, `status`) VALUES ('$username','$password','$nama','$alamat','$no_hp','$tgl_daftar','member')");
        header('Location:../../index.php?page=daftar-member&set-member=1');
    }
?>