
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2017 at 02:06 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u839760177_mba`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `College` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Marks` int(3) NOT NULL,
  `Attempt` int(1) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`Sno`, `Name`, `College`, `Email`, `Phone`, `Marks`, `Attempt`, `Date`, `Time`) VALUES
(0, 'Dinesh kumar', 'Saveetha engineering college', 'dineshkumar1997v@gmail.com', 9952920919, 0, 0, '0000-00-00', '00:00:00'),
(0, 'Dinesh kumar', 'Saveetha engineering college', 'dinesh1997v@gmail.com', 8870884454, 0, 0, '0000-00-00', '00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
