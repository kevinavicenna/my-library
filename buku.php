<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buku.css">
    <title>Data Buku</title>
    
</head>

<body>
    <?php
    include_once('config.php');
    ?>
    <nav>
        <a href="peminjaman.php?page=peminjaman">Peminjaman</a>
        <a href="buku.php?page=buku">Buku</a>
        <a href="data_member.php">Data Member</a>
        <div id="indicator"> </div>
    </nav>
    <div class="konten">
        <center>
            <h2>Data Buku</h2>
            <table border="1" width="90%" cellspacing="0">
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
                            <a href="buku_edit.php?id=<?php echo $data['id_buku']; ?>">Ubah</a> | <a
                                href="buku_hapus.php?id=<?php echo $data['id_buku']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </center>
        <center>
            <button class="button-16" role="button"><a href="buku_tambah.php">Add Buku</a></button>
        </center>
    </div>

    <div class="kaki">
    © 2023 Kevin Avicenna, Ivanda Gabriella, Imaduddin Mustofa 
    </div>

</body>

</html>