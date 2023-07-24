<?php
    include('config.php');
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $no_hp      = $_POST['no_hp'];
    $tgl_daftar = date('Y-m-d');

    $chk   = mysqli_query($koneksi, "SELECT * FROM member WHERE username = '".$username."'"); 
    if($username == '' || $password == '' || $nama == '' || $alamat == '' || $no_hp == '' ){
        header('Location:../register.php?error=1');
    }else if(mysqli_num_rows($chk)>0){
        header('Location:../register.php?error=2');
    }else{
        $query = mysqli_query($koneksi, "INSERT INTO `member`(`username`, `password`, `nama`, `alamat`, `no_hp`, `tgl_pendaftaran`, `status`) VALUES ('$username','$password','$nama','$alamat','$no_hp','$tgl_daftar','member')");
        header('Location:../index.php?register');
    }
?>