-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_c_203040164_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `jumlah_halaman` int(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `judul_buku`, `penulis`, `jumlah_halaman`, `tahun_terbit`, `gambar`) VALUES
(1, 'Ngenest', 'Ernest Prakasa', 554, 2013, '2.1.jpg'),
(2, 'Bajak Laut dan Purmana Terakhir', 'Adithya Mulya', 340, 2002, '2.2.jpg'),
(3, '5 CM', 'Donny Dhirgantoro', 677, 2012, '2.3.jpg'),
(4, 'Laskar Pelangi', 'Andrea Hirata', 780, 2000, '2.4.jpg'),
(5, 'Negeri 5 Menara', 'Ahmad Fuandi', 670, 2010, '2.5.jpg'),
(6, 'Ayat Ayat Cinta', 'Habiburrahman El Shirazy', 678, 2008, '2.6.jpg'),
(7, 'Dilan', 'Pidi Baiq', 506, 2010, '2.7.jpg'),
(8, '11:11', 'Fiersa Besari', 560, 2013, '2.8.jpg'),
(9, 'Bumi Manusia', 'Pramoedya Ananta Toer', 677, 2005, '2.9.jpg'),
(10, 'Bumi', 'Tere Liye', 679, 2011, '2.10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
