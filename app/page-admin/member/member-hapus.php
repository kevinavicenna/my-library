<?php
    include('../../../conf/config.php');
    $id       = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM member WHERE id_member = '$id'");
    header('Location:../../index.php?page=daftar-member&set-member=3');
?>