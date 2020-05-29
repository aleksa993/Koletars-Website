-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2020 at 12:46 PM
-- Server version: 8.0.13
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koletars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `artikli`
--

DROP TABLE IF EXISTS `artikli`;
CREATE TABLE IF NOT EXISTS `artikli` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ime` varchar(60) NOT NULL,
  `kategorija` varchar(60) NOT NULL,
  `akcija` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikli`
--

INSERT INTO `artikli` (`id`, `ime`, `kategorija`, `akcija`) VALUES
(7, 'srafciger', 'alat', 1),
(8, 'stiropor', 'ostalo', 0),
(9, 'akrilna farba', 'farbe', 1),
(10, 'domestos', 'hemija', 1),
(11, 'lopata', 'basta', 1),
(12, 'busilica', 'rucni', 1),
(13, 'dawrfa', 'fsdgsr', 1),
(14, 'gfdgrd', 'grdgd', 1),
(15, 'grgs', 'fsdf', 1),
(16, 'sadadasda', 'adas', 1),
(17, 'dasda', 'asda', 1),
(18, 'adwasd', 'adwasd', 1),
(19, 'adwasd', 'adwasd', 1),
(20, 'adwasd', 'adwasd', 1),
(21, 'adwasd', 'adwasd', 1),
(22, 'adwasd', 'adwasd', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
