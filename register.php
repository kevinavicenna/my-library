<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lg_admin.css">
    <link rel="icon" type="image/x-icon" href="app/assets/compiled/svg/ums-logo.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/assets/compiled/css/app.css" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="app/assets/extensions/sweetalert2/sweetalert2.min.css"/>
    <link rel="stylesheet" href="app/assets/compiled/css/app.css" />
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #005ae2, #007acb, #32a4b8, #32b5b8);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #005ae2, #007acb, #32a4b8, #32b5b8);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
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

                                    <form action="conf/register.php" method="POST">
                                        <p><b>Silahkan daftar untuk menjadi anggota</b></p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Alamat</label>
                                            <input type="text"  name="alamat" class="form-control" placeholder="Masukan Alamat" />
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Nomor HP</label>
                                            <input type="text"  name="no_hp" class="form-control" placeholder="Masukan Nomor HP" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit" value="Daftar">Daftar</button>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <p>Sudah punya akun?</p>
                                            <b><a href="index.php">Login</a></b>
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
    <script src="app/assets/static/js/components/dark.js"></script>
    <script src="app/assets/compiled/js/app.js"></script>
    <!-- SweetAlert -->
    <script src="app/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="app/assets/static/js/pages/sweetalert2.js"></script>
</body>
<?php
if (isset($_GET['error'])) {
    $x = ($_GET['error']);
    if ($x == 1) {
        echo "
        <script>
            Toast.fire({
                icon: 'error',
                title: 'Mohon lengkapi semua kolom yang diperlukan'
            })
        </script>";
    } else if ($x == 2) {
        echo "
        <script>
            Toast.fire({
                icon: 'error',
                title: 'Username telah digunakan'
            })
        </script>";
    } else{
        echo '';
    }
}
?>

</html>