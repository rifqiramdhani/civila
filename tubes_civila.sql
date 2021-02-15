-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2021 at 04:00 PM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saefulap_civila`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$Qjk0pRj.YFxHbkOvGKhuX.96v34mxJivJksZQETf/eWYvREUJ3n8G');

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
(48, 14, 'prana2.jpg'),
(60, 22, 'fe0cbdb835aeda4a2141cde096b4dc05.jpg'),
(61, 22, 'bb70c95d262f7e742b9c92b22332488b.jpg'),
(62, 23, '3b7aabfcbfcad0247f94f7af2cf96c3e.jpg'),
(63, 23, 'd2c592ce23cd5da9c40c67ec4ddbddca.jpg'),
(64, 23, '81b7a462da75aacfbbafdfb5c7af8647.jpg'),
(65, 24, 'd0a82e5b9c2eb4f080501aade4a13b6a.jpg'),
(66, 24, 'f89a955d9f907feaf029df913a9543a2.jpg'),
(67, 24, '51790f753c64549a5fa9ff7d1bf7e9ff.jpg'),
(68, 25, 'b8050a2bb2522378d937327c362c8dc4.jpg'),
(69, 25, '3523c4ae9c08fb5b88ef52c6597b51ae.jpeg'),
(70, 26, '8e01d6b800cb3a06692a4a0015b35126.jpg'),
(71, 26, '7673959d5735dc5c0ce48d14786d1840.jpg'),
(72, 26, 'df3556e9b66d3f9e7ac3524cf48614e2.jpg'),
(73, 27, 'f3420d44335dc42b263854f7bb33a15e.jpg'),
(74, 27, '3c9b46d30f96072f0dd5b6c0ab9f7d75.jpeg'),
(75, 27, '2f2f514258b9e983bd7b9a44f6238ae3.jpg'),
(76, 28, '80ecd9b7452e08ac5067e6d1af064c69.jpg'),
(77, 28, '09375e482a2a66396270e79e60787f05.jpg'),
(78, 28, '991e2b5613c02887b0abb501a608ad7d.jpg'),
(79, 29, '22ad4862bfe7c817705f81a16a805b6f.jpeg'),
(80, 29, 'cc826101f73082da234d63492c1c9f9f.jpg'),
(81, 29, '8254afab56f3b04e9ab332aa6feecb27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telepon_user` varchar(13) NOT NULL,
  `alamat_user` varchar(128) NOT NULL,
  `vocher_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `telepon_user`, `alamat_user`, `vocher_user`) VALUES
(1, 'Rifqi', 'rifqiramdhani8@gmail.com', '081393003129', 'jl budhi no 47', ''),
(2, 'Yolanda', 'yolandaptrc@gmail.com', '089382772831', 'jl margaasih no 1', 'CVL-FB-C8HMQ'),
(3, 'Yolanda', 'yolandaptrc@gmail.com', '089382772831', 'jl margaasih no 1', 'CVL-FB-C8HMQ'),
(4, 'Bayu Riyanto', 'bayur625@gmail.com', '081210461008', 'Jl. Pondok kelapa selatan', ''),
(5, 'Bayu Riyanto', 'bayur625@gmail.com', '081210461008', 'Jl. Pondok kelapa selatan', '');

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
(1, 'Ciwidey', 'Vila Paniisan', 1000000, 'Jl Raya Maribaya, Cibodas, Lembang, Kab. Bandung Barat', '081363556848', '15 - 20 orang', 'Terdiri dari 2 lantai,3 kamar di lantai 1 dan 1 kamar di lantai 2,3 kamar mandi (2 kamar mandi tersedia air panas),Kolam renang,Gazebo,2 halaman yang luas,3 kamar bilas dan 3 kamar mandi di halaman,Tempat BBQ dan tempat api unggun,Balkon,Minibar,Dapur yang luas', '4', 'c0fef86bfe2f499f38e67f7db9ab57bd.jpg'),
(2, 'Bandung', 'Vila ungu', 4400000, 'Jl. Kol. Masturi Km.9, Lembang, Cihanjuang Rahayu, Bandung Barat,', '08161447482', '50 - 60 orang', '15 kamar,10 kamar mandi dengan water heater,30 double bed,2 garasi,2 buah dapur,dan perlengkapannya,ruang makan,ruang olahraga,serta televisi\r\n', '4', 'ungu.jpg'),
(3, 'Bandung', 'Vila chocolate', 248999, 'Jl. Terusan Sersan Bajuri No.55, Cihideung, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 405', '02282782155', '1 - 5 orang', 'Tempat parkir,Air conditioned,Laundry service,Room service\r\n', '4', 'chocolate.jpg'),
(4, 'Bandung', 'Vila barn', 1000000, 'Jl. Terusan Sersan Bajuri No.55, Cihideung, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 405', '08179922922', '5 - 10 orang', 'Kolam renang,Parkir,Wifi,Dapur\r\n', '4', 'barn2.jpeg'),
(5, 'Bandung', 'Vila manoko', 700000, 'Jl. Manoko No: 29, RT.05/RW.01, Kp. Cibodas, Cikahuripan, Lembang, West Bandung Regency, West Java 4', '08179922922', '5 - 10 orang', 'Kolam renang,Parkir,Wifi,Dapur\r\n', '4', 'manoko1.jpg'),
(6, 'Bandung', 'Vila bougenvile lembang asri', 1500000, 'jl. Lembang Asri, Komplek Villa Lembang Asri Kav S-4, 40192 Lembang, Indonesia ', '085100845494', '5 - 10 orang', 'Wifi,Parkir,Dapur,Fasilitas bbq\r\n', '4', 'bougen.jpg'),
(7, 'Bandung', 'Vila pranantos', 1800000, 'Jl. Maribaya No.105, Langensari, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', ' 081370723215', '10 - 15 orang', 'Parkir gratis,Kamar bebas asap rokok,Teras berjemur\r\n', '4', 'pranatos.jpg'),
(8, 'Ciwidey', 'Vila Yambo', 850000, 'Lebakmuncang, Ciwidey, Bandung, West Java 40973', '08500111008', '10 - 15 orang', 'Parkir Gratis,Wifi,Dapur', '4', 'yambo.jpg'),
(9, 'Ciwidey', 'Villa Alkateri', 850000, 'Jl. Raya Ciwidey - Patengan, Panundaan, Kec. Ciwidey, Bandung, Jawa Barat 40973', '085624266888', '10 - 15 orang', 'Parkir gratis,Dapur,Kamar mandi', '4', 'alkateri.jpg'),
(10, 'Ciwidey', 'Villa Batu Alam Endah', 1500000, 'Jl. Ciwidey, Alamendah, Kec. Rancabali, Bandung, Jawa Barat 40973', '081323739973', '10 - 15 orang', 'Parkir luas,Dapur,Kolam Renang', '4', 'batu1.jpg'),
(11, 'Ciwidey', 'Villa Daffa Ciwidey', 850000, ' Cikaray Sindang Sari, Ciwidey, Kec. Ciwidey, Bandung, Jawa Barat 40973', '087783403128', '10 - 15 orang', 'Wifi,Parkir,Dapur', '4', 'sakopi.jpg'),
(12, 'Ciwidey', 'Sukasarana Endah Cottage', 202500, 'Jalan Raya Ciwidey Rancabali, Desa Alamendah, Kecamatan Rancabali, Pasirjambu, Kec. Pasirjambu, Band', '085221856789', '10 - 15 orang', 'Wifi,Kolam Renang,Parkir,Dapur,Room Service,Free Breakfast', '4', 'endah.jpg'),
(13, 'Ciwidey', 'Villa Rumah Alenda', 500000, ' Jl. Raya Ciwidey, kp. Barutunggul No.16, Lebakmuncang, Kec. Rancabali, Bandung, Jawa Barat 40973', '081573491452', '10 - 15 orang', 'Free Parkir,Dapur,Kamar Mandi', '4', 'alenda.jpg'),
(14, 'Ciwidey', 'Vila Prana Tirta', 850000, 'JL Kawah Putih, Ciwidey, Panundaan, Kec. Ciwidey, Bandung, Jawa Barat 40973', '0225927050', '10 - 15 orang', 'Kolam Renang,Parkir gratis,Dapur,Tempat berjemur', '4', 'prana.jpg'),
(15, 'Ciwidey', 'Villa Ciwidey Mas Agung', 1500000, 'Simpang Ciweday Margamulya No.21, Lebakmuncang, Kec. Ciwidey, Bandung, Jawa Barat 40973', '02310147776', '10 - 15 orang', 'Dapur,kamar mandi,Parkir gratis', '4', 'agung.jpg'),
(22, 'Dago', 'villa Dago Bandung', 5500000, 'Jl. Dago Pakar Mawar I No.49, Mekarsaluyu, Kec. Cimenyan, Bandung, Jawa Barat 40198', '082118431801', '10 - 15 orang', 'Parkir Gratis,Dapur,Kolam Renang,Tempat Berjemur,Toilet,Dapur Pribadi', '4', 'fe0cbdb835aeda4a2141cde096b4dc05.jpg'),
(23, 'Dago', 'Dago Pakar Villa P7-17 & P7-17A', 2500000, 'Jl. Dago Pakar Permai VII No. 17 & 17A, Mekarsaluyu, Cimenyan, Bandung, West Java 40198', '081289578100', '10 - 15 orang', 'Parkir Gratis,Kolam Renang,Tempat Berjemur,Dapur Pribadi', '4', '3b7aabfcbfcad0247f94f7af2cf96c3e.jpg'),
(24, 'Dago', 'Kencana Villa Dago', 79163292, 'Perumahan Resor Dago Pakar No. 30 Jalan Bukit Kencana, Mekarsaluyu, Kec. Cimenyan, Kota Bandung, Jaw', '0811235828', '10 - 15 orang', 'Free Wi-Fi,Free parking,Outdoor pool,Air-conditioned,Kid-friendly,Kitchen in all rooms', '4', 'd0a82e5b9c2eb4f080501aade4a13b6a.jpg'),
(25, 'Dago', 'Holiday Villa Dago', 1293000, 'Jl. Dago Pakar Permai II No.40, Mekarsaluyu, Kec. Cimenyan, Bandung, Jawa Barat 40198', '0811235828', '10 - 15 orang', 'Free Wi-Fi,Free parking,Outdoor pool,Air-conditioned,Kitchens in some rooms', '4', 'b8050a2bb2522378d937327c362c8dc4.jpg'),
(26, 'Dago', 'Asterik Villa Dago Pakar', 990000, 'Jl. Dago Pakar Mawar II No.26A, Mekarsaluyu, Kec. Cimenyan, Bandung, Jawa Barat 40198', '087824951418', '1 - 5 orang', 'Free Wi-Fi,Free parking,Air-conditioned,Kid-friendly', '4', '8e01d6b800cb3a06692a4a0015b35126.jpg'),
(27, 'Dago', 'Daily Home Villa Dago', 3500000, 'Jl. Daisy Garden No.6, Mekarsaluyu, Kec. Cimenyan, Bandung, Jawa Barat 40198', '087824951418', '1 - 5 orang', ' Free Wi-Fi,Free parking,Outdoor pool,Air-conditioned,Kid-friendly,Kitchens in some rooms', '4', 'f3420d44335dc42b263854f7bb33a15e.jpg'),
(28, 'Dago', 'Villa Cempaka', 6433594, 'Jl. Dago Pakar Permai VII No.50-74, Mekarsaluyu, Kec. Cimenyan, Bandung, Jawa Barat 40198', '081323961402', '5 - 10 orang', 'Free Wi-Fi,Free parking,Outdoor pool,Air-conditioned,Kid-friendly,Kitchens in some rooms', '4', '80ecd9b7452e08ac5067e6d1af064c69.jpg'),
(29, 'Dago', 'FLYING Villa', 1200000, 'Jalan Bukit Pakar Timur XI Kavling B3A Bandung, Dago, Cimenyan, Bandung, West Java 40198', '087824951418', '5 - 10 orang', ' Free Wi-Fi,Free parking,Outdoor pool,Air-conditioned,Kid-friendly,Kitchens in some rooms', '4', '22ad4862bfe7c817705f81a16a805b6f.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(225) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(1, '27.146.0.0', '2021-02-14', 1, '1613342375', '23:39:35'),
(2, '23.0.162.0', '2021-02-14', 5, '1613343939', '06:04:56'),
(3, '2a03:2880:ff:10::fac', '2021-02-14', 1, '1613343929', '06:05:29'),
(4, '2a03:2880:ff:5::face', '2021-02-14', 1, '1613343929', '06:05:29'),
(5, '2a03:2880:ff:10::fac', '2021-02-14', 1, '1613343930', '06:05:30'),
(6, '36.78.65.57', '2021-02-14', 41, '1613378331', '06:08:04'),
(7, '114.5.215.150', '2021-02-14', 16, '1613371680', '06:09:52'),
(8, '114.142.172.20', '2021-02-14', 1, '1613344725', '06:18:45'),
(9, '36.71.232.85', '2021-02-14', 8, '1613370596', '06:27:17'),
(10, '180.245.138.91', '2021-02-14', 1, '1613345684', '06:34:44'),
(11, '180.242.24.41', '2021-02-14', 4, '1613347779', '07:08:56'),
(12, '2a03:2880:22ff:16::f', '2021-02-14', 1, '1613348990', '07:29:50'),
(13, '34.96.130.191', '2021-02-14', 1, '1613352257', '08:24:17'),
(14, '114.122.100.73', '2021-02-14', 1, '1613354953', '09:09:13'),
(15, '2a03:2880:12ff:71::f', '2021-02-14', 1, '1613356965', '09:42:45'),
(16, '2a03:2880:12ff:12::f', '2021-02-14', 1, '1613356965', '09:42:45'),
(17, '2a03:2880:13ff:a::fa', '2021-02-14', 1, '1613358850', '10:14:10'),
(18, '2a03:2880:13ff:12::f', '2021-02-14', 1, '1613358850', '10:14:10'),
(19, '2a03:2880:13ff::face', '2021-02-14', 1, '1613358850', '10:14:10'),
(20, '2a03:2880:ff:25::fac', '2021-02-14', 1, '1613358851', '10:14:11'),
(21, '2a03:2880:ff:1d::fac', '2021-02-14', 1, '1613358851', '10:14:11'),
(22, '2a03:2880:13ff:8::fa', '2021-02-14', 1, '1613358851', '10:14:11'),
(23, '2a03:2880:13ff:1::fa', '2021-02-14', 1, '1613358851', '10:14:11'),
(24, '2a03:2880:ff:20::fac', '2021-02-14', 1, '1613358852', '10:14:12'),
(25, '2a03:2880:ff:7::face', '2021-02-14', 1, '1613358852', '10:14:12'),
(26, '36.79.250.16', '2021-02-14', 3, '1613360145', '10:34:04'),
(27, '114.124.161.171', '2021-02-14', 1, '1613360119', '10:35:19'),
(28, '114.124.176.91', '2021-02-14', 1, '1613360167', '10:36:07'),
(29, '114.5.218.73', '2021-02-14', 2, '1613372135', '10:46:37'),
(30, '34.96.130.219', '2021-02-14', 1, '1613361013', '10:50:13'),
(31, '182.0.230.113', '2021-02-14', 1, '1613362084', '11:08:04'),
(32, '182.0.212.113', '2021-02-14', 1, '1613362105', '11:08:25'),
(33, '180.251.65.139', '2021-02-14', 1, '1613362350', '11:12:30'),
(34, '112.215.238.142', '2021-02-14', 1, '1613362590', '11:16:30'),
(35, '8.18.195.0', '2021-02-14', 1, '1613362590', '11:16:30'),
(36, '8.209.40.0', '2021-02-14', 1, '1613362084', '11:08:04'),
(37, '14.102.152.0', '2021-02-14', 1, '1613360797', '10:46:37'),
(38, '14.137.152.0', '2021-02-14', 1, '1613361013', '10:50:13'),
(39, '17.92.168.0', '2021-02-14', 3, '1613360145', '10:51:04'),
(40, '23.0.166.0', '2021-02-14', 1, '1613343929', '11:05:29'),
(41, '23.0.176.0', '2021-02-14', 1, '1613343929', '11:05:29'),
(42, '23.2.1.0', '2021-02-14', 4, '1613363899', '11:09:52'),
(43, '23.2.14.0', '2021-02-14', 4, '1613345360', '11:27:17'),
(44, '36.71.235.202', '2021-02-14', 4, '1613365308', '12:00:17'),
(45, '180.252.112.190', '2021-02-14', 1, '1613367161', '12:32:41'),
(46, '180.253.217.198', '2021-02-14', 6, '1613370718', '12:32:46'),
(47, '2a03:2880:13ff::face', '2021-02-14', 1, '1613367787', '12:43:07'),
(48, '2a03:2880:13ff:6::fa', '2021-02-14', 1, '1613367787', '12:43:07'),
(49, '2a03:2880:30ff:a::fa', '2021-02-14', 1, '1613367934', '12:45:34'),
(50, '2a03:2880:30ff:74::f', '2021-02-14', 1, '1613367934', '12:45:34'),
(51, '2a03:2880:30ff:74::f', '2021-02-15', 1, '1613367934', '12:45:34'),
(52, '140.213.54.142', '2021-02-15', 13, '1613374513', '13:04:57'),
(53, '36.74.41.193', '2021-02-15', 11, '1613372929', '13:17:12'),
(54, '175.158.53.51', '2021-02-15', 2, '1613370232', '13:23:52'),
(55, '147.92.179.105', '2021-02-15', 1, '1613370286', '13:24:46'),
(56, '36.71.233.97', '2021-02-15', 1, '1613370307', '13:25:07'),
(57, '2a03:2880:10ff:78::f', '2021-02-15', 1, '1613370315', '13:25:15'),
(58, '2a03:2880:10ff::face', '2021-02-15', 1, '1613370316', '13:25:16'),
(59, '118.97.57.14', '2021-02-15', 8, '1613371968', '13:25:46'),
(60, '36.72.52.126', '2021-02-15', 3, '1613370449', '13:26:30'),
(61, '36.79.248.67', '2021-02-15', 7, '1613372711', '13:27:05'),
(62, '36.78.72.130', '2021-02-15', 1, '1613370429', '13:27:09'),
(63, '103.143.98.242', '2021-02-15', 1, '1613370434', '13:27:14'),
(64, '182.0.213.105', '2021-02-15', 1, '1613370584', '13:29:44'),
(65, '114.5.252.199', '2021-02-15', 2, '1613370627', '13:30:09'),
(66, '36.71.238.8', '2021-02-15', 2, '1613370696', '13:30:35'),
(67, '110.136.219.59', '2021-02-15', 1, '1613370645', '13:30:45'),
(68, '112.215.210.159', '2021-02-15', 1, '1613370649', '13:30:49'),
(69, '114.124.240.54', '2021-02-15', 1, '1613370703', '13:31:43'),
(70, '110.138.149.10', '2021-02-15', 3, '1613371305', '13:31:51'),
(71, '114.142.169.8', '2021-02-15', 1, '1613370926', '13:35:26'),
(72, '114.122.106.37', '2021-02-15', 1, '1613370928', '13:35:28'),
(73, '182.0.231.188', '2021-02-15', 1, '1613371199', '13:39:59'),
(74, '2a03:2880:13ff:16::f', '2021-02-15', 1, '1613371237', '13:40:37'),
(75, '2a03:2880:13ff:a::fa', '2021-02-15', 1, '1613371241', '13:40:41'),
(76, '2409:4043:2e80:439e:', '2021-02-15', 1, '1613371430', '13:43:50'),
(77, '36.71.247.12', '2021-02-15', 1, '1613371500', '13:45:00'),
(78, '103.143.98.216', '2021-02-15', 1, '1613371600', '13:46:40'),
(79, '2405:3800:88a:5717:b', '2021-02-15', 1, '1613371610', '13:46:50'),
(80, '180.252.125.60', '2021-02-15', 1, '1613371717', '13:48:37'),
(81, '140.213.24.134', '2021-02-15', 1, '1613371740', '13:49:00'),
(82, '182.0.205.40', '2021-02-15', 2, '1613371793', '13:49:41'),
(83, '103.143.98.132', '2021-02-15', 1, '1613371815', '13:50:15'),
(84, '36.72.54.189', '2021-02-15', 4, '1613373810', '13:50:16'),
(85, '140.213.9.50', '2021-02-15', 2, '1613372021', '13:51:43'),
(86, '182.2.169.168', '2021-02-15', 1, '1613372061', '13:54:21'),
(87, '114.122.103.54', '2021-02-15', 1, '1613372087', '13:54:47'),
(88, '120.188.35.246', '2021-02-15', 1, '1613372271', '13:57:51'),
(89, '114.122.68.35', '2021-02-15', 3, '1613372383', '13:58:11'),
(90, '125.163.111.129', '2021-02-15', 1, '1613372658', '14:04:18'),
(91, '114.5.211.219', '2021-02-15', 1, '1613372713', '14:05:13'),
(92, '114.5.210.210', '2021-02-15', 4, '1613373727', '14:08:55'),
(93, '103.121.214.53', '2021-02-15', 1, '1613373001', '14:10:01'),
(94, '120.188.93.202', '2021-02-15', 1, '1613373136', '14:12:16'),
(95, '114.122.100.232', '2021-02-15', 3, '1613373282', '14:13:18'),
(96, '125.160.64.155', '2021-02-15', 4, '1613375759', '14:16:07'),
(97, '111.94.9.23', '2021-02-15', 1, '1613373428', '14:17:08'),
(98, '114.5.208.235', '2021-02-15', 1, '1613373603', '14:20:03'),
(99, '114.5.216.6', '2021-02-15', 1, '1613373774', '14:22:54'),
(100, '182.253.251.176', '2021-02-15', 4, '1613373968', '14:24:31'),
(101, '2a01:5ec0:e000:f4be:', '2021-02-15', 1, '1613374037', '14:27:17'),
(102, '116.206.15.31', '2021-02-15', 1, '1613374051', '14:27:31'),
(103, '114.124.130.57', '2021-02-15', 1, '1613374241', '14:30:41'),
(104, '110.139.165.116', '2021-02-15', 1, '1613374268', '14:31:08'),
(105, '114.5.214.141', '2021-02-15', 1, '1613374590', '14:36:30'),
(106, '2407:c00:4001:eac4:1', '2021-02-15', 1, '1613374649', '14:37:29'),
(107, '103.151.226.5', '2021-02-15', 1, '1613374972', '14:42:52'),
(108, '2a03:2880:22ff:1::fa', '2021-02-15', 1, '1613375480', '14:51:20'),
(109, '2a03:2880:22ff:1::fa', '2021-02-15', 1, '1613375480', '14:51:20'),
(110, '36.72.198.235', '2021-02-15', 1, '1613376427', '15:07:07'),
(111, '36.79.250.182', '2021-02-15', 2, '1613376673', '15:10:31'),
(112, '223.255.224.0', '2021-02-15', 1, '1613358851', '10:14:11'),
(113, '223.165.4.0', '2021-02-15', 1, '1613376427', '15:07:07'),
(114, '223.164.0.0', '2021-02-15', 1, '1613374649', '14:37:29'),
(115, '223.130.20.0', '2021-02-15', 1, '1613374241', '14:30:41'),
(116, '223.27.144.0', '2021-02-15', 1, '1613374037', '14:27:17'),
(117, '13.33.158.0', '2021-02-15', 5, '1613343939', '06:04:56'),
(118, '223.25.96.0', '2021-02-15', 1, '1613372061', '13:54:21'),
(119, '140.213.196.163', '2021-02-15', 1, '1613377072', '15:17:52'),
(120, '222.229.80.0', '2021-02-15', 3, '1613372383', '13:58:11'),
(121, '222.165.192.0', '2021-02-15', 1, '1613372271', '13:57:51'),
(122, '222.124.0.0', '2021-02-15', 4, '1613375759', '14:16:07'),
(123, '221.132.192.0', '2021-02-15', 1, '1613373136', '14:12:16'),
(124, '220.247.168.0', '2021-02-15', 1, '1613373603', '14:20:03'),
(125, '13.33.172.0', '2021-02-15', 1, '1613342375', '23:39:35'),
(126, '220.157.96.0', '2021-02-15', 1, '1613371717', '13:48:37'),
(127, '13.33.192.0', '2021-02-15', 8, '1613370596', '06:27:17'),
(128, '13.33.184.0', '2021-02-15', 1, '1613342375', '23:39:35'),
(129, '13.33.172.0', '2021-02-15', 1, '1613342375', '23:39:35'),
(130, '13.33.158.0', '2021-02-15', 5, '1613343939', '06:04:56'),
(131, '219.83.0.0', '2021-02-15', 4, '1613375759', '14:16:07'),
(132, '36.78.201.44', '2021-02-15', 1, '1613377214', '15:20:14'),
(133, '13.33.15.0', '2021-02-15', 1, '1613342375', '23:39:35'),
(134, '218.100.75.134', '2021-02-15', 1, '1613374241', '14:30:41'),
(135, '218.100.72.28', '2021-02-15', 3, '1613372383', '13:58:11'),
(136, '218.100.72.0', '2021-02-15', 3, '1613372383', '13:58:11'),
(137, '31.13.25.38', '2021-02-15', 1, '1613343929', '06:05:29'),
(138, '34.98.244.0', '2021-02-15', 1, '1613358850', '11:14:10'),
(139, '218.100.62.0', '2021-02-15', 5, '1613343939', '15:22:28'),
(140, '36.255.140.0', '2021-02-15', 1, '1613342375', '23:39:35'),
(141, '42.99.136.0', '2021-02-15', 1, '1613358852', '10:14:12'),
(142, '43.230.182.108', '2021-02-15', 1, '1613343929', '06:05:29'),
(143, '43.231.72.0', '2021-02-15', 5, '1613343939', '15:24:56'),
(144, '218.100.55.0', '2021-02-15', 5, '1613343939', '15:25:15'),
(145, '45.74.51.0', '2021-02-15', 1, '1613342375', '15:39:35'),
(146, '218.100.41.0', '2021-02-15', 1, '1613376427', '15:25:45'),
(147, '45.114.28.0', '2021-02-15', 1, '1613342375', '15:39:35'),
(148, '218.100.27.0', '2021-02-15', 1, '1613377072', '15:26:00'),
(149, '218.100.11.0', '2021-02-15', 1, '1613374268', '15:26:30'),
(150, '218.100.4.0', '2021-02-15', 1, '1613373603', '15:26:52'),
(151, '218.33.0.0', '2021-02-15', 1, '1613373136', '15:27:10'),
(152, '216.250.214.64', '2021-02-15', 4, '1613373727', '15:27:58'),
(153, '52.98.34.240', '2021-02-15', 1, '1613342375', '15:27:30'),
(154, '52.98.43.128', '2021-02-15', 5, '1613343939', '00:00:52'),
(155, '216.250.193.96', '2021-02-15', 4, '1613373968', '15:29:07'),
(156, '57.64.1.101', '2021-02-15', 1, '1613342375', '15:29:05'),
(157, '216.250.193.16', '2021-02-15', 1, '1613370286', '15:29:35'),
(158, '58.71.128.0', '2021-02-15', 5, '1613343939', '15:29:58'),
(159, '216.139.184.192', '2021-02-15', 1, '1613358851', '15:30:07'),
(160, '140.0.232.169', '2021-02-15', 1, '1613377830', '15:30:30'),
(161, '61.11.208.0', '2021-02-15', 1, '1613342375', '15:30:28'),
(162, '216.139.184.176', '2021-02-15', 1, '1613358851', '15:31:29'),
(163, '139.228.203.141', '2021-02-15', 1, '1613377928', '15:32:08'),
(164, '61.14.148.48', '2021-02-15', 5, '1613343939', '15:32:11'),
(165, '216.139.184.48', '2021-02-15', 1, '1613352257', '15:32:48'),
(166, '27.146.0.0', '2021-02-15', 1, '1613342375', '00:00:00'),
(167, '216.139.183.192', '2021-02-15', 1, '1613358852', '15:33:08'),
(168, '216.72.64.0', '2021-02-15', 1, '1613360167', '15:33:30'),
(169, '216.65.64.144', '2021-02-15', 4, '1613363899', '15:33:45'),
(170, '216.65.52.128', '2021-02-15', 1, '1613362105', '15:34:11'),
(171, '63.218.166.45', '2021-02-15', 1, '1613342375', '15:34:24'),
(172, '213.248.103.156', '2021-02-15', 4, '1613365308', '15:34:37'),
(173, '63.218.166.61', '2021-02-15', 5, '1613343939', '15:34:49'),
(174, '213.248.90.80', '2021-02-15', 4, '1613365308', '15:34:52'),
(175, '213.248.84.38', '2021-02-15', 1, '1613367934', '15:35:22'),
(176, '89.221.42.4', '2021-02-15', 1, '1613343929', '00:00:00'),
(177, '213.248.83.126', '2021-02-15', 1, '1613360119', '15:35:40'),
(178, '103.4.96.114', '2021-02-15', 1, '1613342375', '15:35:57'),
(179, '212.165.150.0', '2021-02-15', 1, '1613370286', '15:36:05'),
(180, '212.117.48.0', '2021-02-15', 1, '1613371241', '15:36:23'),
(181, '210.247.240.0', '2021-02-15', 1, '1613371241', '15:36:36'),
(182, '103.8.24.0', '2021-02-15', 1, '1613342375', '15:36:42'),
(183, '103.14.28.0', '2021-02-15', 1, '1613342375', '15:37:01'),
(184, '103.14.76.0', '2021-02-15', 1, '1613342375', '15:37:54'),
(185, '103.28.90.0', '2021-02-15', 1, '1613343929', '15:38:29'),
(186, '103.53.32.0', '2021-02-15', 4, '1613347779', '00:01:03'),
(187, '103.104.195.112', '2021-02-15', 1, '1613342375', '15:39:17'),
(188, '210.210.128.0', '2021-02-15', 1, '1613374268', '15:39:25'),
(189, '103.127.50.0', '2021-02-15', 1, '1613342375', '15:39:37'),
(190, '210.176.142.0', '2021-02-15', 1, '1613375480', '15:39:51'),
(191, '103.152.166.0', '2021-02-15', 5, '1613343939', '15:39:57'),
(192, '103.207.72.0', '2021-02-15', 1, '1613342375', '15:40:24'),
(193, '103.209.104.0', '2021-02-15', 1, '1613342375', '00:01:03'),
(194, '104.44.18.110', '2021-02-15', 1, '1613343929', '15:41:02'),
(195, '180.252.112.31', '2021-02-15', 1, '1613378535', '15:42:15'),
(196, '108.165.200.0', '2021-02-15', 1, '1613342375', '15:43:41'),
(197, '113.21.128.0', '2021-02-15', 5, '1613343939', '15:44:36'),
(198, '118.107.232.0', '2021-02-15', 1, '1613342375', '15:45:00'),
(199, '36.79.251.47', '2021-02-15', 1, '1613378732', '15:45:32'),
(200, '209.130.130.194', '2021-02-15', 4, '1613347779', '15:46:53'),
(201, '122.0.16.0', '2021-02-15', 1, '1613342375', '15:47:14'),
(202, '180.249.223.55', '2021-02-15', 1, '1613378842', '15:47:22'),
(203, '61.114.81.18', '2021-02-15', 3, '1613379173', '15:50:14'),
(204, '116.206.14.17', '2021-02-15', 1, '1613379032', '15:50:32'),
(205, '36.72.28.56', '2021-02-15', 1, '1613379416', '15:56:56'),
(206, '140.213.2.12', '2021-02-15', 1, '1613379417', '15:56:57'),
(207, '114.142.168.53', '2021-02-15', 1, '1613379511', '15:58:31'),
(208, '114.4.82.96', '2021-02-15', 1, '1613379544', '15:59:04'),
(209, '114.5.215.150', '2021-02-15', 4, '1613379604', '15:59:38'),
(210, '36.79.249.148', '2021-02-15', 1, '1613379601', '16:00:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_vila` (`id_vila`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vila`
--
ALTER TABLE `vila`
  ADD PRIMARY KEY (`id_vila`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vila`
--
ALTER TABLE `vila`
  MODIFY `id_vila` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

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
