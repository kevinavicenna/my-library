<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>
    <?php
    include_once('config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $rak = $_POST['rak'];

        if ($id == '') { ?>
            <script>
                alert('ID Buku Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($judul == '') { ?>
            <script>
                alert('Judul Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($pengarang == '') { ?>
            <script>
                alert('Pengarang Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($penerbit == '') { ?>
            <script>
                alert('Penerbit Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($isbn == '') { ?>
            <script>
                alert('Nomor ISBN Tidak Boleh Kosong');
            </script>
            <?php
        } elseif ($rak == '') { ?>
            <script>
                alert('Rak Buku Tidak Boleh Kosong');
            </script>
            <?php
        } else {
            $input = "INSERT INTO buku (id_buku, judul, pengarang, penerbit, isbn, rak) 
                VALUES ('$id', '$judul', '$pengarang', '$penerbit', '$isbn', '$rak')";

            $result = mysqli_query($conn, $input);
            if ($result) {
                ?>

                <script>
                    alert('data berhasil dimasukkan');
                    document.location = 'buku.php'
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
                <form action="buku_tambah.php" method="post">
                    <h2>Masukkan Data Buku :</h2>
                    <table border="0" width="" cellspacing="15">
                        <tr>
                            <td width="100px">Id Buku</td>
                            <td width="20px">:</td>
                            <td width=""><input type="text" name="id_buku"></td>
                        </tr>
                        <tr>
                            <td width="">Judul</td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="judul"></td>
                        </tr>
                        <tr>
                            <td width="">Pengarang </td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="pengarang"></td>
                        </tr>
                        <tr>
                            <td width="">Penerbit</td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="penerbit"></td>
                        </tr>
                        <tr>
                            <td width="">Nomor ISBN </td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="isbn"></td>
                        </tr>
                        <tr>
                            <td width="">Rak Buku </td>
                            <td width="">:</td>
                            <td width=""><input type="text" name="rak"></td>
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