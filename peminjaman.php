<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/peminjaman.css">
    <title></title>
</head>

<body>
    <nav>
        <a href="peminjaman.php?page=peminjaman">Peminjaman</a>
        <a href="buku.php?page=buku">Buku</a>
        <a href="data_member.php">Data Member</a>
        <div id="indicator"> </div>
    </nav>
    <div>
        <?php
        include_once('config.php');
        ?>
        <div class="konten">
            <center>
                <h2>Data buku</h2>
                <table border="1" width="95%" cellspacing="0">
                    <tr>
                        <th align="center">ID Buku</th>
                        <th align="center">Judul Buku</th>
                        <th align="center">Kode Jenis</th>
                        <th align="center">Penerbit</th>
                        <th align="center">Tahun terbit</th>
                        <th align="center">ISBN</th>
                        <th align="center">Action</th>
                    </tr>
                    <?php
                    $cari = "select * from buku";
                    $hasil_cari = mysqli_query($conn, $cari);
                    while ($data = mysqli_fetch_array($hasil_cari)) {
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
                                <a href="peminjaman_admin.php?id=<?php echo $data['id_buku']; ?>">Pinjam</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </center>
        </div>

        <div class="kaki">
        © 2023 Kevin Avicenna, Ivanda Gabriella, Imaduddin Mustofa
        </div>
    </div>
</body>

</html>