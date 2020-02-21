-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 04:34 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Username` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile` int(35) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Gender` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `Password`, `Name`, `Mobile`, `Address`, `Gender`) VALUES
('vidya@gmail.com', 'vidu', '', 0, '', ''),
('banu@gmail.com', 'banu', 'Banu', 1234554321, 'Kalyan', 'Female'),
('muskan@yahoo.in', 'muskan', 'Muskan', 1234567890, 'Sion', 'Female'),
('siddhi@gmail.com', 'sid', 'siddhi', 1234567890, 'Sion', 'Female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
