-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 10 Décembre 2019 à 21:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_kawarji`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `pho` varchar(255) NOT NULL,
  `code` bigint(50) NOT NULL AUTO_INCREMENT,
  `designation` varchar(250) NOT NULL,
  `ttva` float NOT NULL,
  `qte` int(10) NOT NULL,
  `prix_unit` float NOT NULL,
  `remis` float NOT NULL,
  `couleur` varchar(255) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2009000017203 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`pho`, `code`, `designation`, `ttva`, `qte`, `prix_unit`, `remis`, `couleur`) VALUES
('105.jpg', 2009000017105, 'PUM 365182- 12 PUMA SMASH V2 BUCK JR/', 19, 15, -1, 0, 'PINK'),
('106.jpg', 2009000017106, 'PUM 365182- 10 PUMA SMASH V2 BUCK JR/', 19, 15, 73.767, 0, 'RED'),
('107.jfif', 2009000017107, 'PUM 365170- 14 PUMA SMASH V2 l JR/CHA', 19, 15, 82.063, 0, 'GREEN'),
('108.jfif', 2009000017108, 'ADIG 15892 DURAMO SLIDE/CHAUX DE LOI', 19, 80, 40.897, 0, 'GREY'),
('109.jpg', 2009000017109, 'ADIG 15890 DURAMO SLIDE/CHAUX DE LOI', 19, 80, 40.897, 0, 'BLACK'),
('110.JPG', 2009000017110, 'PUM 368035-08 FUTURE RUNNER/CHAU LOI ', 19, 10, 119.417, 0, 'WHITE'),
('111.jpg', 2009000017111, 'PUM 365160-05 PUMA SMASH V2 BUCK/CHA ', 19, 15, 77.803, 0, 'BLUE'),
('112.jpg', 2009000017112, 'PUM 365215-14 PUMA SMASH V2 I/CHAU L  ', 19, 15, 88.879, 0, ''),
('117.jpg', 2009000017117, 'PUM075487-01 PUMA PHASE BACKPACKS', 19, 20, 40.493, 0, ''),
('118.jpg', 2009000017118, 'PUM351980-79 CABANA RACER SL V INF/', 19, 9, 60.09, 0, ''),
('119.jpg', 2009000017119, 'PUM 351980-77 CABANA RACER SL V INF/', 19, 10, 60.09, 0, ''),
('', 2009000017120, 'PUMA 369985-02 ESCAPER CMU4/CHAU LOI', 19, 10, 103.677, 0, ''),
('121.jfif', 2009000017121, 'PUM 075487-29 PUMA PHASE BACKPACK/S', 19, 20, 40.494, 0, ''),
('122.jpg', 2009000017122, 'PUM074898-01 PRO TRAINING II BACKPA ', 19, 20, 42.87, 0, ''),
('', 2009000017123, 'ADIEF0211 ADVANTAGE K/CHAU DE SPORT', 19, 24, 78.071, 0, ''),
('', 2009000017124, 'PUM074706-24 PUMA DECK BACHPACK/SA', 19, 20, 67.534, 0, ''),
('', 2009000017125, 'ASI1011A256-005 GEL-CONTEND 5/CHAU H', 19, 16, 103.722, 0, ''),
('', 2009000017126, 'ADID96871 ALTASPORT K/CHAU DE SPORT', 19, 10, 63.228, 0, ''),
('', 2009000017127, 'PUM075491-09 PUMA VIBE BACKPACK/SAC', 19, 20, 55.875, 0, ''),
('', 2009000017128, 'PUM365277-05 ST RUNNER V2 FULL/CHAU', 19, 15, 107.265, 0, ''),
('', 2009000017129, 'ADIF35550 ADILETTE AQUA/PLAGETTE UN', 19, 35, 44.619, 0, ''),
('', 2009000017130, 'PUM075491-11 PUMA VIBE BACKPACK', 19, 20, 55.875, 0, ''),
('', 2009000017131, 'PUM075487-33 PUMA PHASE BAVKPACKS/S', 19, 20, 40.493, 0, ''),
('', 2009000017132, 'PUMA075487-09 PUMA PHASE BACKPACK/S', 19, 20, 40.493, 0, ''),
('', 2009000017197, 'ADIF 99787 CONTINENTAL 80 J/CHAU ENF', 19, 10, 124.53, 0, ''),
('', 2009000017198, 'ADIEF0223 ADVANTAGE C/CHAUD DE SPORT', 19, 12, 78.071, 0, ''),
('', 2009000017199, 'ADIEF0221 ADVANTAGE C/CHAUD DE SPORT', 19, 12, 78.071, 0, ''),
('bg-title-01.jpg', 2009000017200, 'ADIEU 7570 STAN SMITH J/CHAUX DE LOIS', 19, 10, 133.856, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
