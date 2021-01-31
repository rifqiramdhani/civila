-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_civila`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_vila` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_vila`, `foto`) VALUES
(1, 1, 'paniisan2.jpg'),
(2, 1, 'paniisan1.jpg'),
(3, 1, 'vilapaniisan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vila`
--

CREATE TABLE `vila` (
  `id_vila` int(11) NOT NULL,
  `lokasi_vila` varchar(128) NOT NULL,
  `nama_vila` varchar(50) NOT NULL,
  `harga_vila` int(11) NOT NULL,
  `alamat_vila` varchar(100) NOT NULL,
  `narahubung_vila` varchar(13) NOT NULL,
  `kapasitas_vila` varchar(50) NOT NULL,
  `fasilitas_vila` text NOT NULL,
  `rating_vila` char(3) NOT NULL,
  `foto_vila` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vila`
--

INSERT INTO `vila` (`id_vila`, `lokasi_vila`, `nama_vila`, `harga_vila`, `alamat_vila`, `narahubung_vila`, `kapasitas_vila`, `fasilitas_vila`, `rating_vila`, `foto_vila`) VALUES
(1, 'Ciwidey', 'Vila Paniisan', 1000000, 'Jl Raya Maribaya, Cibodas, Lembang, Kab. Bandung Barat', '081363556848', '20 - 40 orang', 'Terdiri dari 2 lantai,3 kamar di lantai 1 dan 1 kamar di lantai 2,3 kamar mandi (2 kamar mandi tersedia air panas),Kolam renang,Gazebo,2 halaman yang luas,3 kamar bilas dan 3 kamar mandi di halaman,Tempat BBQ dan tempat api unggun,Balkon,Minibar,Dapur yang luas', '4.1', 'vilapaniisan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_vila` (`id_vila`);

--
-- Indexes for table `vila`
--
ALTER TABLE `vila`
  ADD PRIMARY KEY (`id_vila`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vila`
--
ALTER TABLE `vila`
  MODIFY `id_vila` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_vila`) REFERENCES `vila` (`id_vila`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
