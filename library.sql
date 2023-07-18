-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 03:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(25) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `id_kategoriFK` varchar(25) NOT NULL,
  `isbn` varchar(55) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `rak` int(25) NOT NULL,
  `tgl_tambah` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `cover`, `judul`, `penulis`, `penerbit`, `id_kategoriFK`, `isbn`, `jumlah`, `rak`, `tgl_tambah`) VALUES
('BK0001', 'book2.jpg', 'Pemrograman Python Untuk Ilmu Komputer Dan Teknik', 'Widodo Budhiarto', 'Andi Ofsett', 'COMP', '9789792966183', 5, 2, '2023-05-05'),
('BK0002', 'book3.jpg', 'Pemrograman Python untuk Penanganan Big Data', 'Hanna Arini Parhusip', 'Andi Ofsett', 'COMP', '9786230104008', 5, 2, '2023-05-05'),
('BK0003', 'book4.jpg', 'Mata dan Nyala Api Purba', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020648477', 5, 1, '2023-05-05'),
('BK0004', 'book5.jpg', 'Mata dan Rahasia Pulau Gapi', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020619385', 5, 1, '2023-05-05'),
('BK0005', 'book6.jpg', 'Mata Dan Manusia Laut', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020630281', 5, 1, '2023-05-20'),
('BK0006', 'book7.jpg', 'Who Rules The World?', 'Noam Chomsky', 'Bentang Pustaka', 'FSF', '9786022918318', 5, 3, '2023-05-20'),
('BK0007', 'book8.jpg', 'Seni Berperang Sun Tzu', 'Amber Books', 'Elex Media Komputindo', 'FSF', '9786020400624', 5, 3, '2023-06-02'),
('BK0008', 'book9.jpg', 'Hermeneutika Dan Ilmu-Ilmu Humaniora', 'Paul Ricoeur', 'Ircisod', 'FSF', '9786236166369', 5, 3, '2023-06-02'),
('BK0009', 'book10.jpg', 'Postmodernisme: Sebuah Pemikiran Filsuf Abad 20', 'Hasna Wijayati', 'Sociality', 'FSF', '9786020770987', 5, 3, '2023-06-02'),
('BK0010', 'book11.jpg', 'Terapi Emosi : Seni Menguasai Emosi Tanpa Ribet', 'Rambu Prihatin', 'Anak Hebat Indonesia', 'PSY', '9786234005769', 6, 3, '2023-06-02'),
('BK0011', 'book12.jpg', 'Lepas dari Pikiran Negatif dan Tekanan Batin', 'Dr. Ahmad Hijazi', 'Gemilang', 'PSY', '9786238036028', 5, 3, '2023-06-02'),
('BK0012', 'The_Origin_Of_Tyranny.jpg', 'The Origin Of Tyranny: Sejarah Awal Para Tiran, Bagaimana Mereka Membentuk Kekuasaan Serta Strategi Mereka Dalam Mempertahankan Dominasi', 'Percy Neville Ure', 'Alvabet', 'SJR', '9786232201026', 4, 5, '2023-07-08'),
('BK0013', 'Bloody_History_Paris.jpg', 'Bloody History : Paris', 'Ben Hubbard', 'Elex Media Komputindo', 'SJR', '9786230008979', 3, 5, '2023-07-08'),
('BK0014', 'Islam Otoritarianisme Dan Ketertinggalan.jpg', 'Islam, Otoritarianisme, Dan Ketertinggalan', 'Ahmet T. Kuru', 'Kepustakaan Populer Gramedia', 'SJR', ' 9786024815172', 5, 5, '2023-07-08'),
('BK0015', 'img20210317_10533631.jpg', 'Interaksi Simbolik', 'Prof. Masdar Hilmy', 'Interaksi Simbolik', 'EDU', 'Interaksi Simbolik', 5, 4, '2023-07-17'),
('BK0016', 'img20210528_18233366.jpg', 'Antropologi Linguistik', 'Prof. Dr. Abdul Syukur Ibrahim', 'Refika Aditama', 'EDU', '9786237060963', 3, 4, '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(25) NOT NULL,
  `nama_kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('AGM', 'Agama'),
('BHS', 'Bahasa'),
('COMP', 'Komputer'),
('EDU', 'Pendidikan'),
('FAR', 'Fiksi Anak dan Remaja'),
('FDWS', 'Fiksi Dewasa'),
('FSF', 'Filsafat'),
('NFA', 'NonFiksi Anak dan Remaja'),
('NFD', 'NonFiksi Dewasa'),
('PSY', 'Psikologi'),
('SJR', 'Sejarah'),
('SOC', 'Ilmu Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `krisar`
--

CREATE TABLE `krisar` (
  `id_krisar` varchar(25) NOT NULL,
  `id_memberFK` varchar(25) NOT NULL,
  `kategori` enum('Kritik','Saran') NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krisar`
--

INSERT INTO `krisar` (`id_krisar`, `id_memberFK`, `kategori`, `pesan`) VALUES
('KS0001', 'M0003', 'Saran', '\r\nAdmin bekerja sendirian, tolong tambahkan beberapa pegawai agar beban kerjanya dapat terbagi dan efisiensi kerja meningkat'),
('KS0002', 'M0004', 'Saran', 'Mohon tambahkan lebih banyak buku dengan tema Olahraga. Terima kasih atas perhatiannya.'),
('KS0003', 'M0005', 'Kritik', 'Bangunan terlihat seperti rumah sakit jiwa yang terbengkalai.');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama`, `alamat`, `no_hp`, `tgl_pendaftaran`, `status`) VALUES
('M0001', 'andreWJY', '12345', 'Andre Wijaya', 'Kartasura', '6285672347549', '2023-06-03', 'member'),
('M0002', 'mayaPTW', 'maya4545', 'Maya Pratiwi', 'Mojosongo', '6289477882369', '2023-06-02', 'member'),
('M0003', 'imdmstf', 'must100', 'M I Mustofa ', 'Kendal', '6287755432761', '2023-07-03', 'member'),
('M0004', 'ivanda.ilham', 'ivanda2006', 'Ivanda Ilham', 'Sukoharjo', '6281632479865', '2023-07-03', 'member'),
('M0005', 'kevinAW', '12345', 'Kevin Avicena', 'Colomadu', '6281765834560', '2023-07-05', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(25) NOT NULL,
  `id_bukuFK` varchar(255) NOT NULL,
  `id_memberFK` varchar(25) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_bukuFK`, `id_memberFK`, `tgl_pinjam`, `tgl_jatuh_tempo`, `keterangan`) VALUES
('P0001', 'BK0010', 'M0003', '2023-06-07', '2023-06-21', ''),
('P0002', 'BK0006', 'M0005', '2023-06-22', '2023-06-29', ''),
('P0003', 'BK0002', 'M0004', '2023-07-01', '2023-07-14', ''),
('P0004', 'BK0008', 'M0002', '2023-06-06', '2023-06-13', ''),
('P0005', 'BK0005', 'M0003', '2023-07-21', '2023-07-21', ''),
('P0006', 'BK0007', 'M0004', '2023-07-20', '2023-07-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(25) NOT NULL,
  `id_peminjamanFK` varchar(25) NOT NULL,
  `id_bukuFK` varchar(25) NOT NULL,
  `id_memberFK` varchar(25) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjamanFK`, `id_bukuFK`, `id_memberFK`, `tgl_kembali`) VALUES
('R0001', 'P0001', 'BK0010', 'M0003', '2023-06-21'),
('R0002', 'P0002', 'BK0006', 'M0005', '2023-07-17'),
('R0003', 'P0003', 'BK0002', 'M0004', '2023-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
('1', 'admin', 'admin123', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategoriFK` (`id_kategoriFK`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `krisar`
--
ALTER TABLE `krisar`
  ADD PRIMARY KEY (`id_krisar`),
  ADD KEY `id_memberFK` (`id_memberFK`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_bukuFK` (`id_bukuFK`),
  ADD KEY `id_memberFK` (`id_memberFK`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjamanFK` (`id_peminjamanFK`),
  ADD KEY `id_bukuFK` (`id_bukuFK`),
  ADD KEY `id_member` (`id_memberFK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategoriFK`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `krisar`
--
ALTER TABLE `krisar`
  ADD CONSTRAINT `krisar_ibfk_1` FOREIGN KEY (`id_memberFK`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_bukuFK`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_memberFK`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_peminjamanFK`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_bukuFK`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_memberFK`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
