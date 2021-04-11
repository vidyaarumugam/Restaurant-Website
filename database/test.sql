-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 09:16 PM
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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `Username` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `food_id`, `quantity`, `rating`, `comment`, `payment`, `Username`) VALUES
(1, 5, 6, 3, 'fdg', 'pay_GxfvTfjsdput83', 'vidyaarumugam531@gmail.com'),
(2, 7, 4, 3, 'fdg', 'pay_GxfvTfjsdput83', 'vidyaarumugam531@gmail.com'),
(3, 8, 6, 3, 'fdg', 'pay_GxfvTfjsdput83', 'vidyaarumugam531@gmail.com'),
(4, 5, 1, 3, 'fdg', 'pay_GxfxGA6l8y6tFC', 'vidyaarumugam531@gmail.com'),
(5, 7, 1, 3, 'fdg', 'pay_GxfxGA6l8y6tFC', 'vidyaarumugam531@gmail.com'),
(6, 1, 1, 3, 'fdg', 'pay_GxgRn1Dbr2kbsA', 'vidyaarumugam531@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`id` int(200) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Mobile` int(200) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Gender` varchar(35) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Username`, `Password`, `Name`, `Mobile`, `Address`, `Gender`) VALUES
(1, 'banu@gmail.com', 'banu', 'Banu', 1234554321, 'Kalyan', 'Female'),
(2, 'muskan@yahoo.in', 'muskan', 'Muskan', 1234567890, 'Sion', 'Female'),
(3, 'siddhi@gmail.com', 'sid', 'siddhi', 1234567890, 'Sion', 'Female'),
(4, 'vidyaarumugam531@gmail.com', '4dc13c8aa6371cbcb715d66f351ca293', 'Vidya Arumugam', 2147483647, 'Zeus Learning, 1402 - Tower B', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Price` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `image`, `Name`, `description`, `Price`, `Type`) VALUES
(1, 'images\\burger.jpg', 'Aloo Tikki', 'Mashed potatoes, spice powders and other basic ingredients.', 90, 'burger'),
(20, 'images\\maggi3.jpg', 'Cheesy Maggi', 'Maggi with cheese overloaded and chilli flakes.', 80, 'maggi'),
(21, 'images\\wraps3.jpg', 'Veg Cut Rolls', 'Finest chickpeas, vegetables, topped with classic mayo and crunchy onions wrapped.', 70, 'wrap'),
(22, 'images\\sandwich5.jpg', 'Palak Corn Grilled Sandwich', 'Super soft bread comes with melting cheese combine with spinach(Palak)-corn-Masala herbs.', 174, 'sandwich'),
(7, 'images\\mouse.jpg', 'Classic chocolate mousse', 'Heavy cream, sugar, vanilla extract, chocolate and sea salt.', 120, 'dessert'),
(15, 'images\\fries4.jpg', 'Magic Masala Fries', 'Fresh Fries tossed with Magic Masala, fried Maggi, cheese, mayo, topped with chilli garlic.', 140, 'fries'),
(16, 'images\\pasta4.jpg', 'Vodka Rose Wagon Wheel Pasta', 'Wheel pasta in parmesan cheese, onion, chilli, tomato sauce, cream and vodka.', 200, 'pasta'),
(17, 'images\\fries2.jpg', 'Peri Peri Fries', 'Mixed with Peri Peri Masala, Jalapeno Cheese Sauce on top.', 150, 'fries'),
(18, 'images\\sandwich4.jpg', 'Cheesy Sandwich', 'Bread stuffed with tons of fresh veggies, favoured green chutney, tons of cheese and special herbs.', 105, 'sandwich'),
(19, 'images\\burger4.jpg', 'Spicy Paneer Burger', 'Rich and filling cottage cheese patty coated in spicy, crispy batter topped with a creamy sauce and shredded lettuce.', 150, 'burger'),
(6, 'images\\maggi1.jpg', 'Plain Maggi', 'Maggi cooked in desi misal style.', 60, 'maggi'),
(3, 'images\\pasta1.jpg', 'Magic Pasta', 'Penne pasta in tomato sauce with vegetables, seasoned with parsley, chilli flakes & emilgrana', 100, 'pasta'),
(4, 'images\\sandwich1.jpg', 'Vegetable Sandwich', 'Traditional sandwich comes with burger bread stuffed with fresh vegetables, green chutney and herbs.', 89, 'sandwich'),
(8, 'images\\maggi2.jpg', 'Vegetable Paneer Maggi', 'Paneer style maggi cooked with Indian Spices.', 100, 'maggi'),
(34, 'images\\kajukatli.jpg', 'Kaju Katli', 'Rose water, white sugar, raw cashews, coconut oil.', 50, 'sweet'),
(37, 'images/motichoor.jpg', 'Motichoor ladoo', 'Gram flour, baking soda, food color, white sugar. ', 60, 'sweet'),
(5, 'images\\panipuri.jpg', 'Pani Puri', 'Special sindhi puri, boondi, pani puri ka pani (theeka), sweet chutney.', 144, 'pani puri'),
(10, 'images\\pasta2.jpg', 'White Sauce Cheese Pasta', 'Penne pasta in creamy white sauce with vegetables, seasoned with parsley, chilli flakes & emilgrana.', 150, 'pasta'),
(11, 'images\\wraps2.jpg', 'Veg Schezwan Wraps', 'Mushroom, Corn, swimming in molten cheese, wrapped in a whole-wheat base with schezwan sauce.', 60, 'wrap'),
(12, 'images\\sandwich2.jpg', 'Vegetable Sandwich Grilled', 'Sandwich is full of fresh vegetables, green chutney, herbs and Amul butter.', 100, 'sandwich'),
(13, 'images\\burger3.jpg', 'Aloo Corn Fusion', 'Mayo sauce over a lettuce bed with a crisp paneer patty and cheese slice stuffed.', 114, 'burger'),
(2, 'images\\fries.jpg', 'Salted Fries', 'Fries with salt seasoning.', 60, 'fries'),
(23, 'images\\burger5.jpg', 'Chilli Garlic', 'Barbeque spiced paneer topped with garlic aioli, served in a sesame brioche bun.', 150, 'burger'),
(24, 'images\\pasta5.jpg', 'Alfredo Pasta', 'Cream based sauce with garlic, parmesan cheese.', 200, 'pasta'),
(25, 'images\\fries6.jpg', 'Barbeque Fries', 'Fresh Fries with sweet, smokey BBQ and jalapeno cheese.', 130, 'fries'),
(29, 'images\\pizza1.jpg', 'Cheese Pizza', 'Combo of Tender Paneer Tikkas, Crunchy Bell Peppers, Black Olives, Onion and Mozzarella Cheese overloaded.', 500, 'pizza'),
(32, 'images\\pizza2.jpg', 'Veggiemania Pizza', 'Mushroom, Black Olive, Spicy Jalapeno, Golden Corn, Capsicum, Onion, Tomato.', 450, 'pizza'),
(27, 'images\\sandwich6.jpg', 'Cheese Masala Sandwich', 'Masaledar grill soft bread sandwich with a masala of potatoes, spicy herbs, green chutney and cheese all over the sandwich.', 164, 'sandwich'),
(28, 'images\\burger6.jpg', 'Toppers Burger', 'A delectable patty filled with potatoes, peas, carrots & tasty Indian spices. Topped with crispy lettuce and packed into toasted sesame buns.', 105, 'burger'),
(33, 'images\\pizza3.jpg', 'Peri Peri Paneer pizza', 'Peri Peri Paneer, Paneer Tikka, Spicy Jalapeno, Onion, Tomato.', 250, 'pizza'),
(30, 'images\\fries5.jpg', 'Jalapeno Fries', 'Jalapeno cheese poppers served with cheese and chilli.', 99, 'fries'),
(31, 'images\\sandwich7.jpg', 'Chocolate Sandwich', 'Yummy! chocolate lover - the boast up taste of chocolate and Amul butter in grill bread.', 135, 'sandwich'),
(9, 'images\\macron.jpg', 'Macaron', 'Pink macarons delicately infused with rose flavour.', 50, 'dessert'),
(14, 'images\\truffles.jpg', 'Oreo Truffles', 'Cream cheese, white chocolate, dark chocolate, oreo biscuits.', 50, 'dessert'),
(26, 'images\\peanut.jpg', 'Peanut Butter Dessert', 'Peanut butter, cream cheese, fudge, brown sugar with roasted crunchy nuts.', 80, 'dessert'),
(35, 'images\\sandwich8.jpg', 'Cheese Chilli Grilled Sandwich', 'Stuffed with fresh capsicum, green chutney, onion and special herbs. Grated with cheese in and on the grilled bread.', 179, 'sandwich'),
(36, 'images\\fries1.jpg', 'Cheesy Fries', 'Salted French Fries, Cheese Jalapeno Sauce.', 99, 'fries'),
(38, 'images\\fries3.jpg', 'Masala Barbeque Fries', 'Salted French Fries, Bbq Sauce, Cheese Jalapeno Sauce.', 150, 'fries'),
(39, 'images\\wraps1.jpg', 'Tandoori Paneer Wraps', 'A perfect blend of soft masala paneer tikka and chatpate chole drizzled in flavorful mayonnaise and wrapped in flaky laccha paratha.', 110, 'wrap'),
(40, 'images\\juice.jpg', 'Strawberry Juice', 'Strawberry juice prepared with ripe and sweet strawberry and lime juice.', 50, 'juice'),
(48, 'images/rose_milk.jpg', 'Rose Milk', 'Rose flavored milk prepared by mixing rose syrup with milk.', 35, 'juice'),
(55, 'images/butter_milk.png', 'Butter Milk', 'The liquid left behind after churning butter out of cultured cream.', 35, 'juice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
