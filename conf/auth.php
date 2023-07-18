<?php
session_start();
include ('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$query2 = mysqli_query($koneksi, "SELECT * FROM member WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('Location:../app');
    $admin = mysqli_fetch_array($query);
    $_SESSION['nama']   =  $admin['username'];
    $_SESSION['status'] = $admin['status'];
}else if(mysqli_num_rows($query2)==1){
    header('Location:../app');
    $member = mysqli_fetch_array($query2);
    $_SESSION['nama']      = $member['nama'];
    $_SESSION['status']    = $member['status'];
    $_SESSION['id_member'] = $member['id_member'];
}else if($username == '' || $password == ''){
    header('Location:../index.php?error=2');
}else{
    header('Location:../index.php?error=1');
}

?>