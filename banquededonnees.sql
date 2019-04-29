-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 07:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banquededonnees`
--

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `IDCER` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MAIL` varchar(255) NOT NULL,
  `SUJET` text NOT NULL,
  `MAILTEXTE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documentations`
--

CREATE TABLE `documentations` (
  `ID` int(11) NOT NULL,
  `CODEDOC` int(11) NOT NULL,
  `TITRE` text NOT NULL,
  `DOMAINE` text NOT NULL,
  `FORMAT` text NOT NULL,
  `CONTENUDOC` text NOT NULL,
  `EMAIL` text NOT NULL,
  `DATEDOC` date NOT NULL,
  `FILIERE` int(3) NOT NULL,
  `IDOC` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentations`
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
(19, 35799, 'Visite au Monument Ast&eacute;rix', 'administration reseau', 'rapport', 'css_teacher.pdf', 'admin@gamil.com', '2019-04-24', 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `CODESRC` int(11) NOT NULL,
  `CODEDOC` int(11) NOT NULL,
  `AUTEUR` text NOT NULL,
  `NIVEAU` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sources`
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
(19, 35799, 'Joanick', 'L3GESTION');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `IDU` int(11) NOT NULL,
  `MATRICULE` varchar(50) NOT NULL,
  `NOMS` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MOTDEPASSE` text NOT NULL,
  `FILIERE` int(3) NOT NULL,
  `ETAT` datetime DEFAULT NULL,
  `TYPE` tinyint(1) NOT NULL,
  `COURIER` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDU`, `MATRICULE`, `NOMS`, `EMAIL`, `MOTDEPASSE`, `FILIERE`, `ETAT`, `TYPE`, `COURIER`) VALUES
(17, '350212702', 'xyz', 'xyz@gmail.com', '56509012b8a2228b61d727a6abc605db', 22, '2019-04-27 17:15:26', 0, 0),
(18, '350212703', 'TCP/IP', 'tcpip@gmail.com', 'bec7fc3378f0ff7c9214fd2831fae5e5', 34, '0000-00-00 00:00:00', 0, 0),
(19, '101010101', 'admin', 'admin@gmail.com', 'ec6f25e09f9a2d438d2425fb4138a6a2', 31, '2019-04-27 15:12:51', 1, 0),
(20, '3502130', 'AZERTY', 'azerty@gmail.com', 'afe0c5f280bf13998673a33744d1f3af', 11, '0000-00-00 00:00:00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`IDCER`);

--
-- Indexes for table `documentations`
--
ALTER TABLE `documentations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`CODESRC`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`IDU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `IDCER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentations`
--
ALTER TABLE `documentations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `CODESRC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `IDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
