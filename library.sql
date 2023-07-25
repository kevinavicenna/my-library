-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 03:10 PM
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
-- Table structure for table `ai_buku`
--

CREATE TABLE `ai_buku` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ai_buku`
--

INSERT INTO `ai_buku` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23);

-- --------------------------------------------------------

--
-- Table structure for table `ai_krisar`
--

CREATE TABLE `ai_krisar` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ai_krisar`
--

INSERT INTO `ai_krisar` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `ai_member`
--

CREATE TABLE `ai_member` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ai_member`
--

INSERT INTO `ai_member` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11);

-- --------------------------------------------------------

--
-- Table structure for table `ai_pinjam`
--

CREATE TABLE `ai_pinjam` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ai_pinjam`
--

INSERT INTO `ai_pinjam` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11);

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
('BK0001', 'book2.jpg', 'Pemrograman Python Untuk Ilmu Komputer Dan Teknik', 'Widodo Budhiarto', 'Andi Ofsett', 'COMP', '9789792966183', 5, 3, '2023-05-05'),
('BK0002', 'book3.jpg', 'Pemrograman Python untuk Penanganan Big Data', 'Hanna Arini Parhusip', 'Andi Ofsett', 'COMP', '9786230104008', 5, 3, '2023-05-05'),
('BK0003', 'book4.jpg', 'Mata dan Nyala Api Purba', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020648477', 5, 4, '2023-05-05'),
('BK0004', 'book5.jpg', 'Mata dan Rahasia Pulau Gapi', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020619385', 5, 4, '2023-05-05'),
('BK0005', 'book6.jpg', 'Mata Dan Manusia Laut', 'Okky Puspa Madasari', 'Gramedia Pustaka Utama', 'FAR', '9786020630281', 5, 4, '2023-05-20'),
('BK0006', 'book7.jpg', 'Who Rules The World?', 'Noam Chomsky', 'Bentang Pustaka', 'FSF', '9786022918318', 5, 1, '2023-05-20'),
('BK0007', 'book8.jpg', 'Seni Berperang Sun Tzu', 'Amber Books', 'Elex Media Komputindo', 'FSF', '9786020400624', 5, 1, '2023-06-02'),
('BK0008', 'book9.jpg', 'Hermeneutika Dan Ilmu-Ilmu Humaniora', 'Paul Ricoeur', 'Ircisod', 'FSF', '9786236166369', 5, 1, '2023-06-02'),
('BK0009', 'book10.jpg', 'Postmodernisme: Sebuah Pemikiran Filsuf Abad 20', 'Hasna Wijayati', 'Sociality', 'FSF', '9786020770987', 5, 1, '2023-06-02'),
('BK0010', 'book11.jpg', 'Terapi Emosi : Seni Menguasai Emosi Tanpa Ribet', 'Rambu Prihatin', 'Anak Hebat Indonesia', 'PSY', '9786234005769', 6, 8, '2023-06-02'),
('BK0011', 'book12.jpg', 'Lepas dari Pikiran Negatif dan Tekanan Batin', 'Dr. Ahmad Hijazi', 'Gemilang', 'PSY', '9786238036028', 5, 8, '2023-06-02'),
('BK0012', 'The_Origin_Of_Tyranny.jpg', 'The Origin Of Tyranny: Sejarah Awal Para Tiran, Bagaimana Mereka Membentuk Kekuasaan Serta Strategi Mereka Dalam Mempertahankan Dominasi', 'Percy Neville Ure', 'Alvabet', 'HIS', '9786232201026', 4, 7, '2023-07-08'),
('BK0013', 'Bloody_History_Paris.jpg', 'Bloody History : Paris', 'Ben Hubbard', 'Elex Media Komputindo', 'HIS', '9786230008979', 3, 7, '2023-07-08'),
('BK0014', 'Islam Otoritarianisme Dan Ketertinggalan.jpg', 'Islam, Otoritarianisme, Dan Ketertinggalan', 'Ahmet T. Kuru', 'Kepustakaan Populer Gramedia', 'HIS', ' 9786024815172', 5, 7, '2023-07-08'),
('BK0015', 'img20210317_10533631.jpg', 'Interaksi Simbolik', 'Prof. Masdar Hilmy', 'Madani', 'EDU', '9786020899848', 5, 6, '2023-07-17'),
('BK0016', 'img20210528_18233366.jpg', 'Antropologi Linguistik', 'Prof. Dr. Abdul Syukur Ibrahim', 'Refika Aditama', 'EDU', '9786237060963', 3, 6, '2023-07-17'),
('BK0017', 'Ikhtiar Islami Menjemput Jodoh.jpg', 'Ikhtiar Islami Menjemput Jodoh', 'Desi Setianingsih', 'Buku Bijak', 'AGM', 'Buku Bijak', 5, 1, '2023-07-24'),
('BK0018', 'bqnsm8qyhmetgnrxr3swwx.jpg', 'Ikhtiar Islami Hidup Tenang', 'Shiane Artha Juwita', 'Buku Bijak', 'AGM', '9786235436197', 5, 1, '2023-07-24'),
('BK0019', 'hp5mxuuqqhqt54uekagqrp.jpg', 'Ikhtiar Islami Hidup Sukses', 'Luis Rahayu', 'Buku Bijak', 'AGM', '9786235436203', 5, 1, '2023-07-24'),
('BK0020', '9786024181833_Berhenti-di-kamu_VHw5rYt.jpg', '#Berhentidikamu', 'Dr. Gia Pratama', 'Mizania', 'FDWS', '9786024181833', 4, 5, '2023-07-25'),
('BK0021', '9786025129001_Remuk-Redam.jpg', 'Remuk Redam', 'Christian Simamora', 'Roro Raya Sejahtera', 'FDWS', '9786025129001', 4, 5, '2023-07-25'),
('BK0022', '9786026716453_Young-Marriage.jpg', 'Young Marriage', 'Rena Mayriska', 'Pastel Books', 'FDWS', '9786026716453', 4, 5, '2023-07-25'),
('BK0023', '9786024303754_Janji.jpg', 'Janji', 'Alifiana Nufi', 'Bentang Pustaka', 'FDWS', '9786024303754', 4, 5, '2023-07-25');

--
-- Triggers `buku`
--
DELIMITER $$
CREATE TRIGGER `tg_buku` BEFORE INSERT ON `buku` FOR EACH ROW BEGIN
    INSERT INTO ai_buku VALUES (NULL);
    SET NEW.id_buku = CONCAT('BK', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

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
('HIS', 'Sejarah'),
('NFA', 'NonFiksi Anak dan Remaja'),
('NFD', 'NonFiksi Dewasa'),
('PSY', 'Psikologi'),
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

--
-- Triggers `krisar`
--
DELIMITER $$
CREATE TRIGGER `tg_krisar` BEFORE INSERT ON `krisar` FOR EACH ROW BEGIN
    INSERT INTO ai_krisar VALUES (NULL);
    SET NEW.id_krisar = CONCAT('KS', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

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
('M0001', 'andreWJY', '12345', 'Andre Wijaya', 'Kartasura', '6285672347549', '2023-05-03', 'member'),
('M0002', 'mayaPTW', 'maya4545', 'Maya Pratiwi', 'Mojosongo', '6289477882369', '2023-05-03', 'member'),
('M0003', 'imdmstf', 'must100', 'M I Mustofa ', 'Kendal', '6287755432761', '2023-05-05', 'member'),
('M0004', 'ivanda.ilham', 'ivanda2006', 'Ivanda Ilham', 'Sukoharjo', '6281632479865', '2023-05-20', 'member'),
('M0005', 'kevinAW', '12345', 'Kevin Avicena', 'Colomadu', '6281765834560', '2023-06-05', 'member'),
('M0006', 'losPollos', 'hermanos', 'Gustavo Fring', 'Albuquerque', '628378459965', '2023-06-21', 'member'),
('M0007', 'betterCallSaul', 'bcsaul', 'Saul Goodman', 'Albuquerque', '6283487155769', '2023-06-25', 'member'),
('M0008', 'dahyun7', 'twice', 'Kim Dahyun', 'Seongnam', '628945322268', '2023-06-30', 'member'),
('M0009', 'walterW', 'heisenberg', 'Walter H White', 'Albuquerque', '628366718249', '2023-06-30', 'member'),
('M0010', 'wendyRV', 'wendy', 'Son Seung Wan', 'Seoul', '628178415584', '2023-07-24', 'member'),
('M0011', 'chingchaeng', '123456', 'Son Chaeyoung', 'Seoul', '6287785624439', '2023-07-24', 'member');

--
-- Triggers `member`
--
DELIMITER $$
CREATE TRIGGER `tg_member` BEFORE INSERT ON `member` FOR EACH ROW BEGIN
    INSERT INTO ai_member VALUES (NULL);
    SET NEW.id_member = CONCAT('M', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

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
  `tgl_kembali` date DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_bukuFK`, `id_memberFK`, `tgl_pinjam`, `tgl_jatuh_tempo`, `tgl_kembali`, `status`) VALUES
('P0001', 'BK0011', 'M0003', '2023-05-10', '2023-05-17', '2023-05-17', 'Dikembalikan'),
('P0002', 'BK0006', 'M0005', '2023-06-22', '2023-06-29', '2023-06-30', 'Dikembalikan'),
('P0003', 'BK0002', 'M0004', '2023-07-01', '2023-07-14', '2023-07-12', 'Dikembalikan'),
('P0004', 'BK0008', 'M0002', '2023-06-06', '2023-06-13', '2023-06-13', 'Dikembalikan'),
('P0005', 'BK0005', 'M0003', '2023-07-21', '2023-07-21', '2023-07-21', 'Dikembalikan'),
('P0006', 'BK0007', 'M0004', '2023-07-20', '2023-07-20', '2023-07-25', 'Dikembalikan'),
('P0007', 'BK0010', 'M0003', '2023-07-21', '2023-07-28', NULL, 'Dipinjam'),
('P0008', 'BK0013', 'M0004', '2023-07-22', '2023-07-29', NULL, 'Dipinjam'),
('P0009', 'BK0007', 'M0009', '2023-07-24', '2023-07-31', NULL, 'Dipinjam'),
('P0010', 'BK0015', 'M0010', '2023-07-25', '2023-08-01', NULL, 'Dipinjam'),
('P0011', 'BK0010', 'M0001', '2023-07-25', '2023-08-01', NULL, 'Dipinjam');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `tg_pinjam` BEFORE INSERT ON `peminjaman` FOR EACH ROW BEGIN
    INSERT INTO ai_pinjam VALUES (NULL);
    SET NEW.id_peminjaman = CONCAT('P', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

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
-- Indexes for table `ai_buku`
--
ALTER TABLE `ai_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ai_krisar`
--
ALTER TABLE `ai_krisar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ai_member`
--
ALTER TABLE `ai_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ai_pinjam`
--
ALTER TABLE `ai_pinjam`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_buku`
--
ALTER TABLE `ai_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ai_krisar`
--
ALTER TABLE `ai_krisar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ai_member`
--
ALTER TABLE `ai_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ai_pinjam`
--
ALTER TABLE `ai_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
