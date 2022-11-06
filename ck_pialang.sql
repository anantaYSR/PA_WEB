-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 03:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ck_pialang`
--

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `lama_waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `tgl_daftar` varchar(30) NOT NULL,
  `foto_ktp` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id`, `nama`, `email`, `nomorhp`, `alamat`, `pekerjaan`, `tipe`, `jumlah`, `waktu`, `tgl_daftar`, `foto_ktp`) VALUES
(7, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(8, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(9, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(10, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(11, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(12, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(13, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(14, '333', 'herby.jan1102@gmail.com', '33', '33', '33', 'Persorangan', 444, '6 Bulan', '2022-11-05', '333.png'),
(15, 'rr', 'herby.jan1102@gmail.com', 'rr', 'rr', 'rr', 'Persorangan', 222, '6 Bulan', '2022-11-05', 'rr.png'),
(16, 'rr', 'herby.jan1102@gmail.com', 'rr', 'rr', 'rr', 'Persorangan', 222, '6 Bulan', '2022-11-05', 'rr.png'),
(17, 'rr', 'herby.jan1102@gmail.com', 'rr', 'rr', 'rr', 'Persorangan', 222, '6 Bulan', '2022-11-05', 'rr.png'),
(18, 'rr', 'herby.jan1102@gmail.com', 'rr', 'rr', 'rr', 'Persorangan', 222, '6 Bulan', '2022-11-05', 'rr.png'),
(19, 'rr', 'herby.jan1102@gmail.com', 'rr', 'rr', 'rr', 'Persorangan', 222, '6 Bulan', '2022-11-05', 'rr.png'),
(20, 'eee', 'herby.jan1102@gmail.com', 'ee', 'ee', 'ee', 'Persorangan', 33, '6 Bulan', '2022-11-05', 'eee.png');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `masukkan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `masukkan`) VALUES
(2, 'hehehehehhe'),
(3, 'heeeeeeeeeeeeeeeeeeeeeeeeeeeee ehhhhhhhhhhhh'),
(4, 'eehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `lama_kerjasama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `pass`) VALUES
(2, 'ee', 'ee', 'herby.jan1102@gmail.com', '$2y$10$ZXz8EFjQquSFBs8NgQbeL.11IDFM6Q.KV5kt4i.5PNAyd3J4gJQXu'),
(3, 'ee', '44', 'herby.jan1102@gmail.com', '$2y$10$BeeUiHlP10ONZzHbhk9EkOabUKlU05JghJvp51TW0PL0uOSYaMKKi'),
(4, 'ff', 'ff', 'hernishrtt@gmail.com', '$2y$10$BQcD7xEfJxcw/GOUPiEUfea6oH12ehoiGo2bwWpTvXjiHJukAZv1e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
