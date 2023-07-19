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
    $id = $_GET['id'];
    $cari = "select * from buku where id_buku='$id'";
    $result = mysqli_query($conn, $cari);

    while ($buku = mysqli_fetch_array($result)) {
        $id_buku = $buku[0];
        $judul = $buku[1];
    }
    ?>
</body>
<center>
    <h3 style="margin-top: 50px;">Peminjaman</h3>
    <form action="" method="post">
        <table border="0" width="" cellspacing="15">
            <tr>
                <td width="">Nama</td>
                <td width="">:</td>
                <td width="">
                    <select name="nama" id="">
                        <?php
                        $sql = "select * from member";
                        $retval = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($retval)) {
                            echo "<option value='$row[nama]'>$row[nama]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="">Nim </td>
                <td width="">:</td>
                <td width="">
                    <select name="nim" id="">
                        <?php
                        $sql = "select * from member";
                        $retval = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($retval)) {
                            echo "<option value='$row[nim]'>$row[nim]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="">id buku</td>
                <td width="">:</td>
                <td width="">
                    <input type="text" name="id_buku" value="<?php echo $id_buku; ?>">
                </td>
            </tr>
            <tr>
                <td width="">Judul </td>
                <td width="">:</td>
                <td width="">
                    <input type="text" name="judul" value="<?php echo $judul; ?>">
                </td>
            </tr>
            <tr>
                <td width="">Tanggal Pinjam</td>
                <td width="">:</td>
                <td width=""><input type="text" name="tgl_pinjam"></td>
            </tr>
            <tr>
                <td width="">Tanggal kembali </td>
                <td width="">:</td>
                <td width=""><input type="text" name="tgl_kembali"></td>
            </tr>
            <tr>
                <td width="">status </td>
                <td width="">:</td>
                <td width=""><input type="text" name="keterangan"></td>
            </tr>
        </table><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</center>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $keterangan = $_POST['keterangan'];

    if ($judul == '') {
        echo "<br>Judul buku tidak boleh kosong, diisi dulu!";
    } elseif ($id_buku == '') {
        echo "<br>id buku tidak boleh kosong, diisi dulu!";
    } elseif ($tgl_pinjam == '') {
        echo "<br>tgl pinjam tidak boleh kosong, diisi dulu!";
    } elseif ($tgl_kembali == '') {
        echo "<br>tgl kembali tidak boleh kosong, diisi dulu!";
    } else {
        $input = "INSERT INTO peminjaman (id_bukuFK, judul, nama, nim, tgl_pinjam, tgl_kembali, keterangan) 
        VALUES ('$id_buku', '$judul','$nama','$nim','$tgl_pinjam','$tgl_kembali', '$keterangan')";

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

</html>