<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data_peminjaman_member.css">
    <title>Data Buku</title>
</head>

<body>
    <?php
    include_once('config.php');
    ?>
    <nav>
        <a href="data_peminjaman.php?page=data peminjaman">Peminjaman</a>
        <a href=""></a>
        <a href="logout.php">log out</a>
        <div id="indicator"> </div>
    </nav>
    <div class="konten">
        <center>
            <h2>Data buku</h2>
            <table border="1" width="90%" cellspacing="0">
                <tr>
                    <th align="center">ID Peminjaman</th>
                    <th align="center">Judul Buku</th>
                    <th align="center">judul Buku</th>
                    <th align="center">Nama</th>
                    <th align="center">Nim</th>
                    <th align="center">Tanggal Pinjam</th>
                    <th align="center">Tanggal kembali</th>
                    <th align="center">Keterangan</th>
                </tr>
                <?php
                $id = $_GET['id'];
                $cari = "select * from peminjaman where nama='$id'";
                $result = mysqli_query($conn, $cari);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $data[0] ?>
                        </td>
                        <td>
                            <?php echo $data[1] ?>
                        </td>
                        <td>
                            <?php echo $data[2] ?>
                        </td>
                        <td>
                            <?php echo $data[3] ?>
                        </td>
                        <td>
                            <?php echo $data[4] ?>
                        </td>
                        <td>
                            <?php echo $data[5] ?>
                        </td>
                        <td>
                            <?php echo $data[6] ?>
                        </td>
                        <td>
                            <?php echo $data[7] ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </center>
    </div>

    <div class="kaki">
    © 2023 Kevin Avicenna, Ivanda Gabrila, Imaduddin Mustofa 
    </div>

</body>

</html>