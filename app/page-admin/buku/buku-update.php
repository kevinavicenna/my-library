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
    $query = mysqli_query($koneksi, "UPDATE buku SET id_buku='$id', cover='', judul='$judul', penulis='$penulis', penerbit='$penerbit', id_kategoriFK='$kategori', isbn='$isbn', jumlah='$jumlah', rak='$rak' WHERE id_buku = '$id'");
    header('Location:../../index.php?page=daftar-buku');
?>