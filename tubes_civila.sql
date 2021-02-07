-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 10:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(3, 1, 'vilapaniisan.jpg'),
(4, 2, 'ungu.jpg'),
(5, 2, 'ungu1.jpg'),
(6, 2, 'ungu3.jpg'),
(7, 3, 'chocolate.jpg'),
(8, 3, 'chocolate1.jpg'),
(9, 3, 'chocolate2.jpg'),
(10, 4, 'barn1.jpeg'),
(11, 4, 'barn2.jpeg'),
(12, 4, 'barn3.jpg'),
(13, 5, 'manoko1.jpg'),
(14, 5, 'manoko.jpg'),
(15, 5, 'manoko3.jpg'),
(16, 6, 'bougen.jpg'),
(17, 6, 'bougen2.jpg'),
(18, 6, 'bougen3.jpg'),
(19, 7, 'pranatos.jpg'),
(20, 7, 'pranatos1.jpg'),
(21, 7, 'pranatos2.jpg'),
(22, 9, 'alkateri.jpg'),
(23, 9, 'alkateri1.jpg'),
(24, 9, 'alkateri2.jpg'),
(26, 8, 'yambo1.jpg'),
(27, 8, 'yambo2.jpg'),
(30, 8, 'yambo.jpg'),
(31, 10, 'batu.jpg'),
(32, 10, 'batu1.jpg'),
(33, 10, 'batu2.jpg'),
(34, 11, 'sakopi3.jpg'),
(35, 11, 'sakopi2.jpg'),
(36, 11, 'sakopi1.jpg'),
(37, 12, 'endah.jpg'),
(38, 12, 'endah1.jpg'),
(39, 12, 'endah2.jpg'),
(40, 13, 'alenda.jpg'),
(41, 13, 'alenda1.jpg'),
(42, 13, 'alenda2.jpg'),
(43, 15, 'agung.jpg'),
(44, 15, 'agung1.jpg'),
(45, 15, 'agung2.jpg'),
(46, 14, 'prana.jpg'),
(47, 14, 'prana1.jpg'),
(48, 14, 'prana2.jpg');

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
(1, 'Ciwidey', 'Vila Paniisan', 1000000, 'Jl Raya Maribaya, Cibodas, Lembang, Kab. Bandung Barat', '081363556848', '15 - 20 orang', 'Terdiri dari 2 lantai,3 kamar di lantai 1 dan 1 kamar di lantai 2,3 kamar mandi (2 kamar mandi tersedia air panas),Kolam renang,Gazebo,2 halaman yang luas,3 kamar bilas dan 3 kamar mandi di halaman,Tempat BBQ dan tempat api unggun,Balkon,Minibar,Dapur yang luas', '4.1', 'vilapaniisan.jpg'),
(2, 'Bandung', 'Vila ungu', 4400000, 'Jl. Kol. Masturi Km.9, Lembang, Cihanjuang Rahayu, Bandung Barat,', '08161447482', '50 - 60 orang', '15 kamar,10 kamar mandi dengan water heater,30 double bed,2 garasi,2 buah dapur,dan perlengkapannya,ruang makan,ruang olahraga,serta televisi\r\n', '4,4', 'ungu.jpg'),
(3, 'Bandung', 'Vila chocolate', 248999, 'Jl. Terusan Sersan Bajuri No.55, Cihideung, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 405', '02282782155', '1 - 5 orang', 'Tempat parkir,Air conditioned,Laundry service,Room service\r\n', '4', 'chocolate.jpg'),
(4, 'Bandung', 'Vila barn', 1000000, 'Jl. Terusan Sersan Bajuri No.55, Cihideung, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 405', '08179922922', '5 - 10 orang', 'Kolam renang,Parkir,Wifi,Dapur\r\n', '4,4', 'barn2.jpeg'),
(5, 'Bandung', 'Vila manoko', 700000, 'Jl. Manoko No: 29, RT.05/RW.01, Kp. Cibodas, Cikahuripan, Lembang, West Bandung Regency, West Java 4', '08179922922', '5 - 10 orang', 'Kolam renang,Parkir,Wifi,Dapur\r\n', '4', 'manoko1.jpg'),
(6, 'Bandung', 'Vila bougenvile lembang asri', 1500000, 'jl. Lembang Asri, Komplek Villa Lembang Asri Kav S-4, 40192 Lembang, Indonesia ', '085100845494', '5 - 10 orang', 'Wifi,Parkir,Dapur,Fasilitas bbq\r\n', '4', 'bougen.jpg'),
(7, 'Bandung', 'Vila pranantos', 1800000, 'Jl. Maribaya No.105, Langensari, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', ' 081370723215', '10 - 15 orang', 'Parkir gratis,Kamar bebas asap rokok,Teras berjemur\r\n', '4', 'pranatos.jpg'),
(8, 'Ciwidey', 'Vila Yambo', 850000, 'Lebakmuncang, Ciwidey, Bandung, West Java 40973', '08500111008', '10 - 15 orang', 'Parkir Gratis,Wifi,Dapur', '4,7', 'yambo.jpg'),
(9, 'Ciwidey', 'Villa Alkateri', 850000, 'Jl. Raya Ciwidey - Patengan, Panundaan, Kec. Ciwidey, Bandung, Jawa Barat 40973', '085624266888', '10 - 15 orang', 'Parkir gratis,Dapur,Kamar mandi', '4,4', 'alkateri.jpg'),
(10, 'Ciwidey', 'Villa Batu Alam Endah', 1500000, 'Jl. Ciwidey, Alamendah, Kec. Rancabali, Bandung, Jawa Barat 40973', '081323739973', '10 - 15 orang', 'Parkir luas,Dapur,Kolam Renang', '4,4', 'batu1.jpg'),
(11, 'Ciwidey', 'Villa Daffa Ciwidey', 850000, ' Cikaray Sindang Sari, Ciwidey, Kec. Ciwidey, Bandung, Jawa Barat 40973', '087783403128', '10 - 15 orang', 'Wifi,Parkir,Dapur', '4,4', 'sakopi.jpg'),
(12, 'Ciwidey', 'Sukasarana Endah Cottage', 202500, 'Jalan Raya Ciwidey Rancabali, Desa Alamendah, Kecamatan Rancabali, Pasirjambu, Kec. Pasirjambu, Band', '085221856789', '10 - 15 orang', 'Wifi,Kolam Renang,Parkir,Dapur,Room Service,Free Breakfast', '4,1', 'endah.jpg'),
(13, 'Ciwidey', 'Villa Rumah Alenda', 500000, ' Jl. Raya Ciwidey, kp. Barutunggul No.16, Lebakmuncang, Kec. Rancabali, Bandung, Jawa Barat 40973', '081573491452', '10 - 15 orang', 'Free Parkir,Dapur,Kamar Mandi', '4,5', 'alenda.jpg'),
(14, 'Ciwidey', 'Vila Prana Tirta', 850000, 'JL Kawah Putih, Ciwidey, Panundaan, Kec. Ciwidey, Bandung, Jawa Barat 40973', '0225927050', '10 - 15 orang', 'Kolam Renang,Parkir gratis,Dapur,Tempat berjemur', '4,4', 'prana.jpg'),
(15, 'Ciwidey', 'Villa Ciwidey Mas Agung', 1500000, 'Simpang Ciweday Margamulya No.21, Lebakmuncang, Kec. Ciwidey, Bandung, Jawa Barat 40973', '02310147776', '10 - 15 orang', 'Dapur,kamar mandi,Parkir gratis', '4', 'agung.jpg');

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
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `vila`
--
ALTER TABLE `vila`
  MODIFY `id_vila` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
