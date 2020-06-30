-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 30 juin 2020 à 00:31
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `g8_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numeroChambre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `typeChambre` varchar(50) NOT NULL,
  `numeroBatiment` varchar(20) NOT NULL,
  PRIMARY KEY (`numeroChambre`),
  UNIQUE KEY `numeroBatiment` (`numeroChambre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numeroChambre`, `typeChambre`, `numeroBatiment`) VALUES
('097', 'individuel', 'B-46'),
('12NDBn', 'individuel', 'B7-LH');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `matricule` varchar(50) NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL,
  `birthday` date NOT NULL,
  `typeEtudiant` varchar(50) NOT NULL,
  `typeBourse` int(11) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `numeroChambre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `numeroChambre` (`numeroChambre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`matricule`, `prenom`, `nom`, `email`, `tel`, `birthday`, `typeEtudiant`, `typeBourse`, `adresse`, `numeroChambre`) VALUES
('12fg', 'admin', 'admin', 'abdoudiallo405@gmail.com', 773943479, '1997-06-09', 'non boursier', NULL, NULL, NULL),
('', 'Abdou', 'diallo', 'abdoudiallo405@gmail.com', 771234578, '2012-03-27', 'Non boursier', NULL, 'pikine', NULL),
('AB100', 'Abdou', 'diallo', 'abdoudiallo405@gmail.com', 771234578, '2012-03-27', 'Non boursier', NULL, 'pikine', NULL),
('2004-do-ng-4668', 'king', 'dou', 'lildou@gmail.com', 771234578, '2008-10-21', 'Non boursier', NULL, 'tp', NULL),
('2004-ad-az-1194', 'zadaz', 'adahg', 'gdagau@ked.fr', 771234578, '2004-08-22', 'bouriser non logé', 20000, NULL, NULL),
('2004-az-ty-8542', 'azerty', 'azerty', 'lildou@gmail.com', 12345678, '2005-08-18', 'boursier logé', 40000, NULL, ''),
('2004-az-ty-3660', 'azerty', 'azerty', 'lildou@gmail.com', 12345678, '2005-08-18', 'boursier logé', 40000, NULL, '17'),
('2020-Ma-a -4018', 'Sona ', 'Mane', 'sonnaa48@gmail.com', 782903380, '2014-09-28', 'Non boursier', NULL, 'diamiadio', NULL),
('2020-hf-za-3353', 'adza', 'hfyvh', 'abdoukhadreforcourse@gmail.com', 2147483647, '1989-12-26', 'bouriser non logé', 40000, NULL, NULL),
('2020-az-ty-1425', 'azerty', 'azerty', 'exemple@exemple.com', 771234567, '2008-07-28', 'Non boursier', NULL, 'ODC', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
