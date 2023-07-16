<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $nama     = $_GET['nama'];
    $alamat   = $_GET['alamat'];
    $no_hp    = $_GET['no_hp'];

    $query = mysqli_query($koneksi, "INSERT INTO member VALUE('$id', '$username', '$password', '$nama', '$alamat', '$no_hp', 'member')");
    header('Location:../../index.php?page=daftar-member');
?>