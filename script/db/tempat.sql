-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 03:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinations`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(16) NOT NULL,
  `nama` varchar(48) NOT NULL,
  `tipe` tinytext NOT NULL,
  `deskripsi` text NOT NULL,
  `buka` time NOT NULL,
  `tutup` time NOT NULL,
  `htm` varchar(25) NOT NULL,
  `gmaps` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `lokasi`, `nama`, `tipe`, `deskripsi`, `buka`, `tutup`, `htm`, `gmaps`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Jakarta Timur', 'Taman Mini Indonesia Indah', 'outdoor', 'Taman hiburan bertema budaya Indonesia. Taman ini merupakan rangkuman kebudayaan bangsa Indonesia, yang mencangkup berbagai aspek kehidupan sehari-hari masyarakat Indonesia yang di tampilkan dalam anjungan berasitektur tradisional, serta menampilkan aneka busana, tarian, dan tradisi daerah.', '07:00:00', '18:00:00', '25.000,00', 'https://maps.google.com/maps?q=taman%20mini%20indinesia%20indah,%20jakarta%20timur&t=&z=13&ie=UTF8&iwloc=&output=embed', '/img/place/taman-mini-indonesia-indah-1.webp', '/img/place/taman-mini-indonesia-indah-2.webp', '/img/place/taman-mini-indonesia-indah-3.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
