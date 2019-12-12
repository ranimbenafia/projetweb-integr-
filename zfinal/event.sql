-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 04:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_kawarji`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `ID_Event` int(3) NOT NULL,
  `NomEvent` varchar(20) NOT NULL,
  `DebEvent` date NOT NULL,
  `FinEvent` date NOT NULL,
  `PourProd` int(3) NOT NULL,
  `PrixApres` int(3) NOT NULL,
  `Image_eve` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_Event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_Event`, `NomEvent`, `DebEvent`, `FinEvent`, `PourProd`, `PrixApres`, `Image_eve`) VALUES
(123, 'OI BOI', '2010-01-04', '2011-05-04', 2, 2, 'plz.jpg'),
(333, 'KAZEKAGE', '2019-12-11', '2019-12-20', 2, 2, 'casual.jpg'),
(666, 'gbhnjkm,', '2222-12-14', '3333-12-25', 40, 522, 'casual.jpg'),
(845, 'ggj', '2020-11-11', '2020-11-22', 4, 4, 'casual.jpg'),
(888, 'gggggggg', '1111-11-11', '2222-11-12', 2, 2, 'casual.jpg'),
(999, 'GGG', '0001-01-01', '0002-02-02', 20, 2, 'plz.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
