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

    $id = $_GET['id'];
    $cari = "select * from buku where id_buku='$id'";
    $result = mysqli_query($conn, $cari);

    while ($buku = mysqli_fetch_array($result)) {
        $id_buku = $buku[0];
        $judul = $buku[1];
        $pengarang = $buku[2];
        $penerbit = $buku[3];
        $isbn = $buku[4];
        $rak = $buku[5];

    }


    ?>
    <div class="konten">
        <center>
            <form action="" method="post">
                <h3 style="margin-top: 50px;">Edit Data Buku</h3>
                <table border="0" width="" cellspacing="15">
                    <tr>
                        <td width="100px">Id Buku</td>
                        <td width="20px">:</td>
                        <td width="">
                            <input type="text" name="id_buku" value="<?php echo $id_buku; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="">Judul</td>
                        <td width="">:</td>
                        <td width=""><input type="text" name="judul" value="<?php echo $judul; ?>"></td>
                    </tr>
                    <tr>
                        <td width="">Pengarang </td>
                        <td width="">:</td>
                        <td width=""><input type="text" name="pengarang" value="<?php echo $pengarang; ?>"></td>
                    </tr>
                    <tr>
                        <td width="">Penerbit</td>
                        <td width="">:</td>
                        <td width=""><input type="text" name="penerbit" value="<?php echo $penerbit; ?>"></td>
                    </tr>
                    <tr>
                        <td width="">ISBN </td>
                        <td width="">:</td>
                        <td width=""><input type="text" name="isbn" value="<?php echo $isbn; ?>"></td>
                    </tr>
                    <tr>
                        <td width="">Rak </td>
                        <td width="">:</td>
                        <td width=""><input type="text" name="rak" value="<?php echo $rak; ?>"></td>
                    </tr>
                </table><br>
                <input type="submit" name="submit" value="Masukkan">
            </form>
        </center>
    </div>
    <div class="kaki">
    © 2023 Kevin Avicenna, Ivanda Gabrila, Imaduddin Mustofa 
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $isbn = $_POST['isbn'];
        $rak = $_POST['rak'];

        if ($judul == '') {
            echo "<br>Judul buku tidak boleh kosong, diisi dulu!";
        } elseif ($pengarang == '') {
            echo "<br>Pengarang buku tidak boleh kosong, diisi dulu!";
        } elseif ($penerbit == '') {
            echo "<br>Penerbit buku tidak boleh kosong, diisi dulu!";
        } elseif ($isbn == '') {
            echo "<br>ISBN buku tidak boleh kosong, diisi dulu!";
        } elseif ($rak == '') {
            echo "<br>rak buku tidak boleh kosong, diisi dulu!";
        } else {
            $input = "update buku set id_buku ='$id_buku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', 
        isbn='$isbn', rak='$rak' where id_buku='$id'";
            mysqli_query($conn, $input);
            header("Location: buku.php");
        }
    }
    ?>
</body>

</html>