<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Login Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login_admin.css">
</head>

<body>
    <?php
    include_once('config.php');
    session_start();
    // error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if ($submit) {
        $sql = "select * from user where username='$username' and password='$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        if ($row['username'] != "") {
            //berhasil login
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
            ?>
            <script language script='JavaScript'>
                alert('Anda Login Sebagai <?php echo $row['username']; ?>');
                document.location = 'peminjaman.php'
            </script>
            <?php
        } else {
            //gagal login
            ?>
            <script language script='JavaScript'>
                alert('Gagal Login');
                document.location = 'login_admin.php'
            </script>
            <?php
        }
    }
    ?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login_admin.php" method="POST">
        <h3>Admin</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <input class="button" type="submit" name="submit" id="">
    </form>
</body>

</html>