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
    $tgl_tambah = $_POST['tgl_tambah'];
    $cover      = $_FILES['cover']['name']; 

    //Lokasi Cover
    $file_tmp = $_FILES['cover']['tmp_name'];
    move_uploaded_file($file_tmp, '../../assets/compiled/jpg/buku/' .$cover);
    
    $query = mysqli_query($koneksi, "INSERT INTO `buku`(`cover`, `judul`, `penulis`, `penerbit`, `id_kategoriFK`, `isbn`, `jumlah`, `rak`, `tgl_tambah`) VALUES ('$cover','$judul','$penulis','$penerbit','$kategori','$isbn','$jumlah','$rak','$tgl_tambah')");
    header('Location:../../index.php?page=daftar-buku&set-buku=1');
?>