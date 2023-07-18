<?php
include_once('config.php');

$id = $_GET['id'];
$delete = "delete from peminjaman where id_peminjaman='$id'";
$result = mysqli_query($conn, $delete);

header("Location: data_member.php");
?>