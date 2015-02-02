-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2015 at 02:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yvanraymaekers_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `tekst`
--

CREATE TABLE IF NOT EXISTS `tekst` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paginaId` int(10) unsigned NOT NULL,
  `tekst` text NOT NULL,
  `volgorde` int(10) unsigned NOT NULL,
  `vet` tinyint(4) NOT NULL,
  `groter` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paginaId` (`paginaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tekst`
--

INSERT INTO `tekst` (`id`, `paginaId`, `tekst`, `volgorde`, `vet`, `groter`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ut nesciunt quo delectus officia totam aliquid dolorem rerum, qui tenetur.', 1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tekst`
--
ALTER TABLE `tekst`
  ADD CONSTRAINT `tekst_ibfk_1` FOREIGN KEY (`paginaId`) REFERENCES `pagina` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
