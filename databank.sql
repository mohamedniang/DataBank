-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 mai 2019 à 11:55
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `databank`
--

-- --------------------------------------------------------

--
-- Structure de la table `couriers`
--

DROP TABLE IF EXISTS `couriers`;
CREATE TABLE IF NOT EXISTS `couriers` (
  `IDCER` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `SUJET` text NOT NULL,
  `MAILTEXTE` text NOT NULL,
  PRIMARY KEY (`IDCER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `documentations`
--

DROP TABLE IF EXISTS `documentations`;
CREATE TABLE IF NOT EXISTS `documentations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CODEDOC` int(11) NOT NULL,
  `TITRE` text NOT NULL,
  `DOMAINE` text NOT NULL,
  `FORMAT` text NOT NULL,
  `CONTENUDOC` text NOT NULL,
  `EMAIL` text NOT NULL,
  `DATEDOC` date NOT NULL,
  `FILIERE` int(3) NOT NULL,
  `IDOC` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `documentations`
--

INSERT INTO `documentations` (`ID`, `CODEDOC`, `TITRE`, `DOMAINE`, `FORMAT`, `CONTENUDOC`, `EMAIL`, `DATEDOC`, `FILIERE`, `IDOC`) VALUES
(1, 21452, 'mode', 'reseau telecom', 'img', '5 numericolor.PNG', 'admin@gamil.com', '2019-04-24', 11, 0),
(2, 82973, 'EST', 'gestion', 'img', 'adobe1.PNG', 'admin@gamil.com', '2019-04-24', 12, 0),
(3, 73390, 'Designer', 'programmation web', 'img', 'yahoo.PNG', 'admin@gamil.com', '2019-04-24', 13, 0),
(4, 11787, 'Designe zeb', 'programmation java', 'img', 'visionneur dimage.PNG', 'admin@gamil.com', '2019-04-24', 14, 0),
(7, 14103, 'les sessions 21', 'sciences', 'img', 'xboxlive1.PNG', 'admin@gamil.com', '2019-04-24', 21, 0),
(8, 11779, 'Education', 'gestion', 'img', 'yahoo1.PNG', 'admin@gamil.com', '2019-04-24', 12, 0),
(9, 11592, 'les sessions 22', 'reseau telecom', 'img', 'xboxlive0.PNG', 'admin@gamil.com', '2019-04-24', 22, 0),
(10, 13321, 'les sessions 23', 'administration reseau', 'img', 'apparution disparution.PNG', 'admin@gamil.com', '2019-04-24', 23, 0),
(11, 28559, 'les sessions 24', 'securite informatique', 'img', 'progression.PNG', 'admin@gamil.com', '2019-04-24', 24, 0),
(12, 61274, 'les socket', 'programmation web', 'img', 'box-dialog1.PNG', 'admin@gamil.com', '2019-04-24', 31, 0),
(13, 59402, 'L\'ensemble des &eacute;tudiants', 'securite informatique', 'video', 'VID-20181209-WA0000.mp4', 'admin@gamil.com', '2019-04-24', 34, 0),
(14, 92832, 'Messagerie &amp; Web services', 'programmation web', 'pdf', 'architecture_MVC.pdf', 'admin@gamil.com', '2019-04-24', 32, 0),
(16, 93380, 'Rapport de stage', 'reseau telecom', 'rapport', 'LES BARRETTES MEMOIRES.pdf', 'admin@gamil.com', '2019-04-24', 31, 0),
(17, 18792, 'DNS', 'securite informatique', 'rapport', 'DNS sous Windows Server 2008.pdf', 'admin@gamil.com', '2019-04-24', 33, 0),
(18, 12088, 'pool', 'reseau telecom', 'pdf', 'LES BARRETTES MEMOIRES.pdf', 'admin@gamil.com', '2019-04-24', 31, 0),
(19, 35799, 'Visite au Monument Ast&eacute;rix', 'administration reseau', 'rapport', 'css_teacher.pdf', 'admin@gamil.com', '2019-04-24', 21, 0),
(20, 13458, 'ImageGlar', 'programmation web', 'img', 'death_grip.png', 'azerty@gmail.com', '2019-05-01', 11, 0),
(21, 92833, 'plan club scientifique', 'programmation web', 'pdf', 'CLUB SCIENTIFIQUE ESTM.pdf', 'admin@gamil.com', '2019-04-24', 11, 0),
(22, 92834, 'cours css', 'programmation web', 'pdf', 'css_teacher.pdf', 'admin@gamil.com', '2019-05-12', 11, 0),
(23, 92835, 'Graphesexoscorrigés2', 'programmation web', 'pdf', 'Graphesexoscorrigés2.pdf', 'admin@gamil.com', '2019-05-12', 11, 0),
(24, 92836, 'Les-12-travaux-de-l-Entrepreneur', 'programmation web', 'pdf', 'Les-12-travaux-de-l-Entrepreneur.pdf', 'admin@gamil.com', '2019-05-12', 11, 0),
(25, 92837, 'Projet architechture', 'programmation web', 'pdf', 'Projet archi.pdf', 'admin@gamil.com', '2019-05-12', 11, 0),
(26, 92838, 'TP_telephonie_ip', 'programmation web', 'pdf', 'TP_telephonie_ip.pdf', 'admin@gamil.com', '2019-05-12', 11, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sources`
--

DROP TABLE IF EXISTS `sources`;
CREATE TABLE IF NOT EXISTS `sources` (
  `CODESRC` int(11) NOT NULL AUTO_INCREMENT,
  `CODEDOC` int(11) NOT NULL,
  `AUTEUR` text NOT NULL,
  `NIVEAU` text NOT NULL,
  PRIMARY KEY (`CODESRC`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sources`
--

INSERT INTO `sources` (`CODESRC`, `CODEDOC`, `AUTEUR`, `NIVEAU`) VALUES
(1, 21452, 'matix', 'L3GLAR'),
(2, 82973, 'Joanick', 'L2GEER'),
(3, 73390, 'dd', 'cc'),
(4, 11787, 'Mouhamadou NDIAYE', 'L3GLAR'),
(5, 11508, 'Mickael YEMBI', 'L2GLAR'),
(6, 75651, 'Mickael YEMBI', 'L2GLAR'),
(7, 14103, 'Mickael YEMBI', 'L2GLAR'),
(8, 11779, 'MAMOR', 'L3GESTION'),
(9, 11592, 'Joanick', 'L3GLAR'),
(10, 13321, 'Joanick', 'L2GEER'),
(11, 28559, 'dd', 'L2GEER'),
(12, 61274, 'matix', 'L3GLAR'),
(13, 59402, 'matix', 'L3GLAR'),
(14, 92832, 'MAMOR', 'L3GESTION'),
(15, 19174, 'MAMOR', 'L3GESTION'),
(16, 93380, 'MAMOR', 'L3GESTION'),
(17, 18792, 'Joanick', 'L3GESTION'),
(18, 12088, 'MAMOR', 'L3GESTION'),
(19, 35799, 'Joanick', 'L3GESTION'),
(20, 13458, 'Image pour design web', 'L1 GLAR'),
(21, 92833, 'MOHAMED', 'L3GESTION'),
(22, 92834, 'MOHAMED', 'L2GLAR'),
(23, 92835, 'MOHAMED', 'L2GLAR'),
(24, 92836, 'MOHAMED', 'L2GLAR'),
(25, 92837, 'MOHAMED', 'L2GLAR'),
(26, 92838, 'MOHAMED', 'L2GLAR');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDU` int(11) NOT NULL AUTO_INCREMENT,
  `MATRICULE` varchar(50) NOT NULL,
  `NOMS` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MOTDEPASSE` text NOT NULL,
  `FILIERE` int(3) NOT NULL,
  `ETAT` datetime DEFAULT NULL,
  `TYPE` tinyint(1) NOT NULL,
  `COURIER` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDU`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDU`, `MATRICULE`, `NOMS`, `EMAIL`, `MOTDEPASSE`, `FILIERE`, `ETAT`, `TYPE`, `COURIER`) VALUES
(17, '350212702', 'mohamed', 'mouhamedniang1997@gmail.com', '217865f3c07795f67888703abdc261f2', 22, '2019-04-27 17:15:26', 0, 1),
(18, '350212703', 'TCP/IP', 'tcpip@gmail.com', 'bec7fc3378f0ff7c9214fd2831fae5e5', 34, '0000-00-00 00:00:00', 0, 0),
(19, '101010101', 'admin', 'admin@gmail.com', 'ec6f25e09f9a2d438d2425fb4138a6a2', 31, '2019-04-27 15:12:51', 1, 0),
(20, '3502130', 'AZERTY', 'azerty@gmail.com', 'afe0c5f280bf13998673a33744d1f3af', 11, '2019-04-27 22:03:45', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
