-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 09:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nama_karyawan` varchar(55) NOT NULL,
  `posisi_karyawan` varchar(55) NOT NULL,
  `foto_karyawan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nama_karyawan`, `posisi_karyawan`, `foto_karyawan`) VALUES
('Alfonsus Oku, S.Kom ', 'Founder and CEO ', ''),
('Caecilia Novie, S.Kom ', 'Co Founder and Administration ', ''),
('Lusia Herdiwati, S.E ', 'Accounting ', ''),
('Monica Natalia, A.P.Kom ', 'Customer Service and Marketing ', ''),
('Yosafat J.S, A.Md.T', 'Dental Support Team Jabodetabek Karawang ', ''),
('Andi ', 'Dental Support Team Semarang ', ''),
('Lucky H. ', 'Expert Pinter and Scanner ', ''),
('Pascalius Y. ', 'Expert CCTV, Networking and Cabing ', ''),
('Yosua Andi S. ', 'Dental IT Support and Networking ', ''),
('Yeremia Miliano ', 'Dental IT Support and Networking ', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
