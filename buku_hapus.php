<?php
include_once('config.php');

$id = $_GET['id'];
$delete = "delete from buku where id_buku='$id'";
$result = mysqli_query($conn, $delete);

header("Location: buku.php");
?>