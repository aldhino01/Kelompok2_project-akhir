-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 09:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku3`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisbuku`
--

CREATE TABLE `jenisbuku` (
  `id_buku` int(11) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbuku`
--

INSERT INTO `jenisbuku` (`id_buku`, `jenis_buku`) VALUES
(5, 'pdf'),
(6, 'pdf'),
(7, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nama_buku`
--

CREATE TABLE `nama_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `gambar_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_buku`
--

INSERT INTO `nama_buku` (`id_buku`, `judul_buku`, `penulis`, `jenis_buku`, `gambar_buku`) VALUES
(5, 'aldhino', 'aldhino', 'pdf', 'ilustrasi-buku-1170x700.jpg'),
(6, 'aldhino', 'aldhino', 'pdf', 'ilustrasi-buku--istockphoto_ratio-16x9.jpg'),
(7, 'tutor respect', 'tutor respect', 'pdf', 'ilustrasi-buku--istockphoto_ratio-16x9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'Rafa', 'rafa', 'rafa', 'user'),
(3, 'Faza', 'faza', 'faza', 'user'),
(4, 'Tanjung', 'tanjung', 'tanjung', 'user'),
(5, 'Athar', 'athar', 'athar', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisbuku`
--
ALTER TABLE `jenisbuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `nama_buku`
--
ALTER TABLE `nama_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenisbuku`
--
ALTER TABLE `jenisbuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nama_buku`
--
ALTER TABLE `nama_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
