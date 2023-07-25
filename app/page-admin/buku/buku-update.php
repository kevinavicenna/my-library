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

    if (!empty($_FILES['cover']['name'])) {
        $cover = $_FILES['cover']['name'];
    
        // Lokasi Cover
        $file_tmp = $_FILES['cover']['tmp_name'];
        move_uploaded_file($file_tmp, '../../assets/compiled/jpg/buku/' . $cover);
    } else {
        // Jika tidak ada gambar yang diupload, gunakan gambar lama
        $query_get_cover = mysqli_query($koneksi, "SELECT cover FROM buku WHERE id_buku = '$id'");
        $cover_data = mysqli_fetch_array($query_get_cover);
        $cover = $cover_data['cover'];
    }

    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', id_kategoriFK='$kategori', isbn='$isbn', jumlah='$jumlah', rak= $rak , cover='$cover' WHERE id_buku = '$id'");
    header('Location:../../index.php?page=daftar-buku&set-buku=2');
?>