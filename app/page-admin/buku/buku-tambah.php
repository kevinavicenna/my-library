<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];
    $judul    = $_GET['judul'];
    $penulis  = $_GET['penulis'];
    $penerbit = $_GET['penerbit'];
    $kategori = $_GET['kategori'];
    $isbn     = $_GET['isbn'];
    $jumlah   = $_GET['jumlah'];
    $rak      = $_GET['rak'];
    $query = mysqli_query($koneksi, "INSERT INTO buku VALUE('$id', '', '$judul', '$penulis', '$penerbit', '$kategori', '$isbn', '$jumlah', '$rak')");
    header('Location:../../index.php?page=daftar-buku');
?>