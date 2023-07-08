<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lg_admin.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once('config.php');
    session_start();
    error_reporting(0);
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

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="img/UMS.svg" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">UMS LIBRARY PAGE</h4>
                                    </div>

                                    <form action="login_admin.php" method="POST">
                                        <p>Please login to your <b>ADMIN ACCOUNT</b></p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password"  name="password" class="form-control" placeholder="Masukan Password" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit" value="Login">Login</button>
                                        </div> 
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">UNIVERSITAS MUHAMMADIYAH SURAKARTA</h4>
                                    <p class="small mb-0">Universitas Muhammadiyah Surakarta (UMS) adalah salah satu perguruan tinggi di Indonesia yang terletak di Surakarta, Jawa Tengah. 
                                        Didirikan pada tanggal 1 Agustus 1957, UMS merupakan salah satu universitas yang dikelola oleh organisasi Muhammadiyah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>