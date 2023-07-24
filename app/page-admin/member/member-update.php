<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $nama     = $_GET['nama'];
    $alamat   = $_GET['alamat'];
    $no_hp    = $_GET['no_hp'];

    $query = mysqli_query($koneksi, "UPDATE member SET  username='$username', password='$password', nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id_member = '$id'");
    header('Location:../../index.php?page=daftar-member&set-member=2');
?>