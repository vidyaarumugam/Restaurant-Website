-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 02:00 PM
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
('siddhi@gmail.com', 'sid', 'siddhi', 1234567890, 'Sion', 'Female'),
('vidya@gmail.com', 'vidu', '', 0, '', ''),
('banu@gmail.com', 'banu', 'Banu', 1234554321, 'Kalyan', 'Female'),
('muskan@yahoo.in', 'muskan', 'Muskan', 1234567890, 'Sion', 'Female'),
('siddhi@gmail.com', 'sid', 'siddhi', 1234567890, 'Sion', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `image`, `Name`, `Price`, `Type`) VALUES
(1, 'images\\burger.jpg', 'Aloo Tikki', 45, 'burger'),
(20, 'images\\maggi3.jpg', 'Cheesy Maggi', 80, 'maggi'),
(21, 'images\\wraps3.jpg', 'Veg Cut Rolls', 70, 'wrap'),
(22, 'images\\sandwich5.jpg', 'Spinach Corn', 80, 'sandwich'),
(7, 'images\\mouse.jpg', 'Classic chocolate mousse', 80, 'dessert'),
(15, 'images\\fries4.jpg', 'Magic Masala Fries', 89, 'fries'),
(16, 'images\\pasta4.jpg', 'Vodka Rose Wagon Wheel Pasta', 200, 'pasta'),
(17, 'images\\fries2.jpg', 'Peri Peri Fries', 89, 'fries'),
(18, 'images\\sandwich4.jpg', 'Cheesy Sandwich', 75, 'sandwich'),
(19, 'images\\burger4.jpg', 'Spicy Paneer', 79, 'burger'),
(6, 'images\\maggi1.jpg', 'Plain Maggi', 45, 'maggi'),
(3, 'images\\pasta1.jpg', 'Magic Pasta', 60, 'pasta'),
(4, 'images\\sandwich1.jpg', 'Vegetable Sandwich', 45, 'sandwich'),
(8, 'images\\maggi2.jpg', 'Vegetable Paneer Maggi', 100, 'maggi'),
(34, 'images\\kajukatli.jpg', 'Kaju Katli', 50, 'sweet'),
(37, 'images/motichoor.jpg', 'Motichoor laddoo', 60, 'sweet'),
(5, 'images\\panipuri.jpg', 'Pani Puri', 50, 'pani puri'),
(10, 'images\\pasta2.jpg', 'White Sauce Cheese Pasta', 80, 'pasta'),
(11, 'images\\wraps2.jpg', 'Veg Schezwan Wraps', 60, 'wrap'),
(12, 'images\\sandwich2.jpg', 'Vegetable Sandwich Grilled', 50, 'sandwich'),
(13, 'images\\burger3.jpg', 'Aloo Corn Fusion', 59, 'burger'),
(2, 'images\\fries.jpg', 'Salted Fries', 45, 'fries'),
(23, 'images\\burger5.jpg', 'Chilli Garlic', 89, 'burger'),
(24, 'images\\pasta5.jpg', 'Alfredo Pasta', 200, 'pasta'),
(25, 'images\\fries6.jpg', 'Barbeque Fries', 99, 'fries'),
(29, 'images\\pizza1.jpg', 'Cheese Pizza', 200, 'pizza'),
(32, 'images\\pizza2.jpg', 'Veggiemania Pizza', 300, 'pizza'),
(27, 'images\\sandwich6.jpg', 'Cheese Masala Sandwich', 70, 'sandwich'),
(28, 'images\\burger6.jpg', 'Toppers Burger', 89, 'burger'),
(33, 'images\\pizza3.jpg', 'Pepperoni pizza', 250, 'pizza'),
(30, 'images\\fries5.jpg', 'Jalapeno Fries', 99, 'fries'),
(31, 'images\\sandwich7.jpg', 'Chocolate Sandwich', 100, 'sandwich'),
(9, 'images\\macron.jpg', 'Macaron', 50, 'dessert'),
(14, 'images\\truffles.jpg', 'Oreo Truffles', 50, 'dessert'),
(26, 'images\\peanut.jpg', 'Peanut Butter Dessert', 80, 'dessert'),
(35, 'images\\sandwich8.jpg', 'Cheese Chilli', 150, 'sandwich'),
(36, 'images\\fries1.jpg', 'Cheesy Fries', 99, 'fries'),
(38, 'images\\fries3.jpg', 'Masala Barbeque Fries', 109, 'fries'),
(39, 'images\\wraps1.jpg', 'Tandoori Paneer Wraps', 110, 'wrap'),
(40, 'images\\juice.jpg', 'Strawberry Juice', 50, 'juice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
