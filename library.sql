-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `rak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `isbn`, `rak`) VALUES
('NVL0001', 'Habis Gelap Terbitlah Terang', 'Andrea Hirata', 'Gramedia', 'NVL0001', 'Rak 1'),
('NVL0002', 'Sang Pemimpi', 'Andrea Hirata', 'Gramedia', 'NVL0002', 'Rak 1'),
('NVL0003', 'Perempuan Berkalung Sorban', 'Tere Liye', 'Gramedia', 'NVL0003', 'Rak 1'),
('PGRM001', 'Bootstrap Untuk Pemula', 'Sandika Galih', 'Gramedia', 'PGRM001', 'Rak 2'),
('PGRM002', 'Dasar Pemrograman PHP 7', 'Sandika Galih', 'Informatika', 'PGRM002', 'Rak 2'),
('PGRM003', 'Android Studio With Kotlin', 'Programmer Zaman Now', 'Gramedia', 'PGRM003', 'Rak 2');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nim`, `email`) VALUES
(1, 'Diego Alfiandro', 'L200200039', 'diegoazza@gmail.com'),
(2, 'M Naufal Azzi S.', 'L200200088', 'naufalazza@.com'),
(3, 'NJS', 'L200200101', 'njsazza.com'),
(4, 'Rahdriawan Vrismana', 'L200200031', 'vrismanaaja@.com');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_bukuFK` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `tgl_kembali` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_bukuFK`, `judul`, `nama`, `nim`, `tgl_pinjam`, `tgl_kembali`, `keterangan`) VALUES
(8, 'NVL0001', 'Habis Gelap Terbitlah Terang', 'Diego Alfiandro', 'L200200039', '12 juli 2023', '15 juli 2023', 'Dipinjam'),
(9, 'PGRM001', 'Bootstrap Untuk Pemula', 'M Naufal Azzi S.', 'L200200088', '12 juli 2023', '15 juli 2023', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

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
  ADD KEY `id_bukuFK` (`id_bukuFK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_bukuFK`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
