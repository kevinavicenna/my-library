<?php
    include('../../../conf/config.php');
    $id         = $_POST['id'];
    $judul      = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $penerbit   = $_POST['penerbit'];
    $kategori   = $_POST['kategori'];
    $isbn       = $_POST['isbn'];
    $jumlah     = $_POST['jumlah'];
    $rak        = $_POST['rak'];
    $cover      = $_FILES['cover']['name'];

     //Lokasi Cover
     $file_tmp = $_FILES['cover']['tmp_name'];
     move_uploaded_file($file_tmp, '../../assets/compiled/jpg/buku/' .$cover);

    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', id_kategoriFK='$kategori', isbn='$isbn', jumlah='$jumlah', rak='$rak', cover='$cover' WHERE id_buku = '$id'");
    header('Location:../../index.php?page=daftar-buku&set-buku=2');
?>