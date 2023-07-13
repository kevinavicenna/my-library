<?php
include ('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('Location:../app');
}else{
    header('Location:../index.php?error=1');
}

?>