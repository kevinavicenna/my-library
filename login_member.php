<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Login Member</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login_member.css">
    
    <?php
    include_once('config.php');
    session_start();
    // error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $submit = $_POST['submit'];

    if ($submit) {
        $sql = "select * from member where nama='$nama' and nim='$nim'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        if ($row['nama'] != "") {
            //berhasil login
            $_SESSION['nama'] = $row['nama'];
            ?>
            <script language script='JavaScript'>
                alert('Anda Login Sebagai <?php echo $row['nama']; ?>');
                document.location = 'data_peminjaman_member.php?id=<?php echo $row['nama']; ?>'
            </script>
            <?php
        } else {
            //gagal login
            ?>
            <script language script='JavaScript'>
                alert('Gagal Login');
                document.location = 'login_member.php'
            </script>
            <?php
        }
    }
    ?>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login_member.php" method="POST">
        <h3>Login</h3>

        <label for="nama">Nama</label>
        <input type="text" placeholder="Nama" id="nama" name="nama">

        <label for="nim">Nim</label>
        <input placeholder="Nim" id="nim" name="nim">

        <input class="button" type="submit" name="submit" id="">
        <a href="login_admin.php">Admin?</a>
    </form>
</body>

</html>