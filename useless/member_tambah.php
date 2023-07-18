<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/member_tambah.css">
    <title></title>
    
</head>

<body>
    <?php
    include_once('config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];

        if ($nama == '') { ?>
            <script>
                alert('Nama Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($nim == '') { ?>
            <script>
                alert('Nim Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($email == '') { ?>
            <script>
                alert('Email Tidak Boleh Kosong');
            </script>
            <?php
        } else {
            $input = "INSERT INTO member ( nama, nim, email) 
                VALUES ('$nama', '$nim', '$email')";

            $result = mysqli_query($conn, $input);
            if ($result) {
                ?>

                <script>
                    alert('data berhasil dimasukkan');
                    document.location = 'data_member.php'
                </script>

                <?php
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    ?>
    <div>
        <div class="konten">
            <center>
                <form action="member_tambah.php" method="post">
                    <h2>Masukkan Data Member :</h2>
                    <table border="0" width="" cellspacing="15">
                        <tr>
                            <td width="100px">Nama</td>
                            <td width="20px">:</td>
                            <td width=""><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td width="">NIM</td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="nim"></td>
                        </tr>
                        <tr>
                            <td width="">Email </td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="email"></td>
                        </tr>
                    </table><br>
                    <input type="submit" name="submit" value="Simpan">
                </form>
            </center>
        </div>
        <div class="kaki">
        © 2023 Kevin Avicenna, Ivanda Gabrila, Imaduddin Mustofa 
        </div>
    </div>
</body>

</html>