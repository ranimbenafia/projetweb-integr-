-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Décembre 2019 à 17:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_kawargi`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
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
-- Contenu de la table `event`
--

INSERT INTO `event` (`ID_Event`, `NomEvent`, `DebEvent`, `FinEvent`, `PourProd`, `PrixApres`, `Image_eve`) VALUES
(123, 'hchhghgv', '2010-01-04', '2011-05-04', 2, 2, 'plz.jpg'),
(454, 'jgjghjg', '0001-01-01', '0002-02-01', 2, 20, 'plz.jpg'),
(666, 'gbhnjkm,', '2222-12-14', '3333-12-25', 40, 522, 'casual.jpg'),
(845, 'ggj', '2020-11-11', '2020-11-22', 4, 4, 'casual.jpg'),
(888, 'gggggggg', '1111-11-11', '2222-11-12', 2, 2, 'casual.jpg'),
(999, 'GGG', '0001-01-01', '0002-02-02', 20, 2, 'plz.jpg');

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
  `idc` int(55) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2009000017204 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`pho`, `code`, `designation`, `ttva`, `qte`, `prix_unit`, `remis`, `couleur`, `idc`) VALUES
('105.jpg', 2009000017105, 'PUM 365182- 12 PUMA SMASH V2 BUCK JR/', 19, 15, -1, 0, 'PINK', 0),
('106.jpg', 2009000017106, 'PUM 365182- 10 PUMA SMASH V2 BUCK JR/', 19, 15, 73.767, 0, 'RED', 0),
('107.jfif', 2009000017107, 'PUM 365170- 14 PUMA SMASH V2 l JR/CHA', 19, 15, 82.063, 0, 'GREEN', 0),
('108.jfif', 2009000017108, 'ADIG 15892 DURAMO SLIDE/CHAUX DE LOI', 19, 80, 40.897, 0, 'GREY', 0),
('109.jpg', 2009000017109, 'ADIG 15890 DURAMO SLIDE/CHAUX DE LOI', 19, 80, 40.897, 0, 'BLACK', 0),
('110.JPG', 2009000017110, 'PUM 368035-08 FUTURE RUNNER/CHAU LOI ', 19, 10, 119.417, 0, 'WHITE', 4),
('111.jpg', 2009000017111, 'PUM 365160-05 PUMA SMASH V2 BUCK/CHA ', 19, 15, 77.803, 0, 'BLUE', 0),
('112.jpg', 2009000017112, 'PUM 365215-14 PUMA SMASH V2 I/CHAU L  ', 19, 15, 88.879, 0, '', 0),
('117.jpg', 2009000017117, 'PUM075487-01 PUMA PHASE BACKPACKS', 19, 20, 40.493, 0, '', 0),
('118.jpg', 2009000017118, 'PUM351980-79 CABANA RACER SL V INF/', 19, 9, 60.09, 0, '', 0),
('119.jpg', 2009000017119, 'PUM 351980-77 CABANA RACER SL V INF/', 19, 10, 60.09, 0, '', 0),
('', 2009000017120, 'PUMA 369985-02 ESCAPER CMU4/CHAU LOI', 19, 10, 103.677, 0, '', 0),
('121.jfif', 2009000017121, 'PUM 075487-29 PUMA PHASE BACKPACK/S', 19, 20, 40.494, 0, '', 5),
('122.jpg', 2009000017122, 'PUM074898-01 PRO TRAINING II BACKPA ', 19, 20, 42.87, 0, '', 0),
('', 2009000017123, 'ADIEF0211 ADVANTAGE K/CHAU DE SPORT', 19, 24, 78.071, 0, '', 0),
('', 2009000017124, 'PUM074706-24 PUMA DECK BACHPACK/SA', 19, 20, 67.534, 0, '', 0),
('', 2009000017125, 'ASI1011A256-005 GEL-CONTEND 5/CHAU H', 19, 16, 103.722, 0, '', 0),
('', 2009000017126, 'ADID96871 ALTASPORT K/CHAU DE SPORT', 19, 10, 63.228, 0, '', 0),
('', 2009000017127, 'PUM075491-09 PUMA VIBE BACKPACK/SAC', 19, 20, 55.875, 0, '', 0),
('', 2009000017128, 'PUM365277-05 ST RUNNER V2 FULL/CHAU', 19, 15, 107.265, 0, '', 0),
('', 2009000017129, 'ADIF35550 ADILETTE AQUA/PLAGETTE UN', 19, 35, 44.619, 0, '', 0),
('', 2009000017130, 'PUM075491-11 PUMA VIBE BACKPACK', 19, 20, 55.875, 0, '', 0),
('', 2009000017131, 'PUM075487-33 PUMA PHASE BAVKPACKS/S', 19, 20, 40.493, 0, '', 0),
('', 2009000017132, 'PUMA075487-09 PUMA PHASE BACKPACK/S', 19, 20, 40.493, 0, '', 0),
('', 2009000017197, 'ADIF 99787 CONTINENTAL 80 J/CHAU ENF', 19, 10, 124.53, 0, '', 0),
('', 2009000017198, 'ADIEF0223 ADVANTAGE C/CHAUD DE SPORT', 19, 12, 78.071, 0, '', 0),
('', 2009000017199, 'ADIEF0221 ADVANTAGE C/CHAUD DE SPORT', 19, 12, 78.071, 0, '', 0),
('bg-title-01.jpg', 2009000017200, 'ADIEU 7570 STAN SMITH J/CHAUX DE LOIS', 19, 10, 133.856, 0, '', 0),
('', 2009000017203, '', 0, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produitscategorie`
--

CREATE TABLE IF NOT EXISTS `produitscategorie` (
  `idProduitsCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idProduitsCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `produitscategorie`
--

INSERT INTO `produitscategorie` (`idProduitsCategorie`, `nom`) VALUES
(4, 'Femme'),
(5, 'Homme'),
(6, 'Enfant'),
(8, 'Accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) DEFAULT NULL,
  `prenom` varchar(250) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `codePostal` varchar(250) DEFAULT NULL,
  `sexe` varchar(250) DEFAULT NULL,
  `cin` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `login` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `etat` varchar(250) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `tel`, `adresse`, `codePostal`, `sexe`, `cin`, `email`, `login`, `password`, `etat`, `role`) VALUES
(4, 'AMINE', ' abdou', 58950384, 'azezd', '1200', 'male', '123', 'amine.guesmi@icloud.com', 'amine', '123', '1', '0'),
(5, 'nizar', '  mahmoudi', 5897465, 'test', '221', 'male', '123', 'ranime.benafia@esprit.tn', 'nizar', '1234', '1', '0'),
(11, 'ranim', '  ben afia', 58950318, 'fgfgjj', '1200', 'female', '14089078', 'emna.lazezz@esprit.tn', 'emna', '12345', '0', '0'),
(12, 'test', '', 0, '', '', '', '', '', 'test', '123', '1', '1'),
(13, 'khazri', 'marwen', 5446565, 'kjhjgygjkh', '1200', 'male', '1200', 'marwen.khazri@esprit.tn', 'marwen', '123456', '1', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
