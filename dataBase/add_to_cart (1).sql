-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2024 at 10:42 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_to_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart_info`
--

DROP TABLE IF EXISTS `add_cart_info`;
CREATE TABLE IF NOT EXISTS `add_cart_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(100) DEFAULT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `TYPE` varchar(50) NOT NULL,
  `COLOR` varchar(50) DEFAULT NULL,
  `SIZE` int NOT NULL,
  `PRICE` int NOT NULL,
  `QON` int NOT NULL,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_carts`
--

DROP TABLE IF EXISTS `all_carts`;
CREATE TABLE IF NOT EXISTS `all_carts` (
  `EMAIL` varchar(200) NOT NULL,
  `F_NAME` varchar(150) NOT NULL,
  `L_NAME` varchar(150) NOT NULL,
  `ADD` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `COUNTRY` varchar(200) NOT NULL,
  `CONTACT` varchar(15) NOT NULL,
  `ITEM_ID` varchar(200) NOT NULL,
  `ITEM_NAME` varchar(200) NOT NULL,
  `TYPE` varchar(200) NOT NULL,
  `ITEM_COLOR` varchar(200) NOT NULL,
  `SIZE` int NOT NULL,
  `QON` int NOT NULL,
  `PRICE` int NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_formal`
--

DROP TABLE IF EXISTS `child_formal`;
CREATE TABLE IF NOT EXISTS `child_formal` (
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child_formal`
--

INSERT INTO `child_formal` (`ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('SL01', 'BLACK', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/098aca44fd572e9349c94dd0b63863b5ad56e7ab/boo/formal/Formal2_2.jpeg', 4),
('ES01', 'BROWN ', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F4_2.jpeg', 3),
('FS01', 'BROWN', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/098aca44fd572e9349c94dd0b63863b5ad56e7ab/boo/formal/F1_2.jpeg', 5),
('MS01', 'BROWN', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F5_2.jpeg', 6),
('MS01', 'BROWN', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F5_3.jpeg', 7),
('A01', 'BLACK', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_002.jpg?v=1690271206&width=3000', 17),
('D202', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_006.jpg?v=1690271206&width=3000', 16),
('D202', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_003.jpg?v=1690271206&width=3000', 15),
('D202', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_002.jpg?v=1690271206&width=3000', 14),
('A01', 'BLACK', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_003.jpg?v=1690271206&width=3000', 18),
('A01', 'BLACK', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_006.jpg?v=1690271206&width=3000', 19),
('Hc01', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_002.jpg?v=1690271206&width=3000', 20),
('Hc01', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_003.jpg?v=1690271206&width=3000', 21),
('Hc01', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_006.jpg?v=1690271206&width=3000', 22);

-- --------------------------------------------------------

--
-- Table structure for table `color_sound`
--

DROP TABLE IF EXISTS `color_sound`;
CREATE TABLE IF NOT EXISTS `color_sound` (
  `NAME` varchar(200) NOT NULL,
  `S_ADD` varchar(200) NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `color_sound`
--

INSERT INTO `color_sound` (`NAME`, `S_ADD`) VALUES
('BLACK', 'sounds/CART SOUNDS/COLOR/BLACK'),
('WHITE', 'sounds/CART SOUNDS/COLOR/WHITE');

-- --------------------------------------------------------

--
-- Table structure for table `d_img_add`
--

DROP TABLE IF EXISTS `d_img_add`;
CREATE TABLE IF NOT EXISTS `d_img_add` (
  `ID` varchar(100) DEFAULT NULL,
  `S_ADD` varchar(100) NOT NULL,
  PRIMARY KEY (`S_ADD`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formal_shoes`
--

DROP TABLE IF EXISTS `formal_shoes`;
CREATE TABLE IF NOT EXISTS `formal_shoes` (
  `NAME` varchar(200) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `NO` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `formal_shoes`
--

INSERT INTO `formal_shoes` (`NAME`, `ID`, `COLOR`, `I_ADD`, `NO`) VALUES
('ELITEKICKS', 'ES01', 'BROWN ', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F4_1.jpeg', 6),
('SOLINA', 'SL01', 'BLACK', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/098aca44fd572e9349c94dd0b63863b5ad56e7ab/boo/formal/Formal2_1.jpeg', 5),
('VINTAGE WALK', 'FS01', 'BROWN', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/098aca44fd572e9349c94dd0b63863b5ad56e7ab/boo/formal/F1_1.jpeg', 4),
('MONKSTRAPS', 'MS01', 'BROWN', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F5_1.jpeg', 7),
('Dacken', 'D202', 'Dark Brown', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_001.jpg?v=1675151042&width=3000', 9),
('ADIDAS', 'A01', 'BLACK', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_001.jpg?v=1675151042&width=3000', 10),
('HARSHIL', 'Hc01', 'BLACK', 'https://bugattishoes.in/cdn/shop/products/311-A5T02-1010-6014_001.jpg?v=1675151042&width=3000', 11);

-- --------------------------------------------------------

--
-- Table structure for table `formal_shoes_size`
--

DROP TABLE IF EXISTS `formal_shoes_size`;
CREATE TABLE IF NOT EXISTS `formal_shoes_size` (
  `ID` varchar(200) NOT NULL,
  `COLOR` varchar(200) NOT NULL,
  `SIZE` int NOT NULL,
  `AVLBL` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `img_add`
--

DROP TABLE IF EXISTS `img_add`;
CREATE TABLE IF NOT EXISTS `img_add` (
  `ID` varchar(200) DEFAULT NULL,
  `I_ADD` varchar(200) NOT NULL,
  `COLOR` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`I_ADD`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `img_add`
--

INSERT INTO `img_add` (`ID`, `I_ADD`, `COLOR`) VALUES
('PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 'GREY'),
('PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 'BLACK'),
('PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 'WHITE'),
('CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 'GRADIANT'),
('CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 'NAVY'),
('AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 'WHITE_BLUE'),
('AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 'GREEN_BLACK'),
('AS01', 'https://github.com/HARSHIL4636/BRAVO/blob/main/boo/shue10.jpeg?raw=true', 'WHITE_BLACK'),
('SP01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 'MULTI'),
('SP01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 'NAVY'),
('SLE01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 'GREY'),
('SLE01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 'BLACK'),
('CR7', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 'GREY_SKYBLUE'),
('PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/DEFAULT%20IMG/PQSF01.jpeg', 'DEFAULT'),
('CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/DEFAULT%20IMG/CR01.jpeg', 'DEFAULT'),
('AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/DEFAULT%20IMG/AS01.jpeg', 'DEFAULT'),
('SP01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/DEFAULT%20IMG/SP01.jpg', 'DEFAULT'),
('CR7', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/DEFAULT%20IMG/CR7.jpeg', 'DEFAULT'),
('DC01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F1_2.jpeg', 'DEFAULT'),
('DC01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/formal/F1_1.jpeg', 'BROWN2');

-- --------------------------------------------------------

--
-- Table structure for table `img_color_info`
--

DROP TABLE IF EXISTS `img_color_info`;
CREATE TABLE IF NOT EXISTS `img_color_info` (
  `ID` varchar(200) DEFAULT NULL,
  `COLOR` varchar(100) DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `img_color_info`
--

INSERT INTO `img_color_info` (`ID`, `COLOR`) VALUES
('PQSF01', 'BLACK'),
('PQSF01', 'WHITE'),
('PQSF01', 'GREY\r\n'),
('CR01', 'GRADIANT'),
('CR01', 'NAVY'),
('AS01', 'WHITE_BLUE'),
('AS01', 'GREEN_BLACK'),
('AS01', 'WHITE_BLACK'),
('SP01', 'MULTI'),
('SP01', 'NAVY'),
('SLE01', 'GREY'),
('SLE01', 'BLACK'),
('CR7', 'GREY_SKYBLUE'),
('DC01', 'BROWN');

-- --------------------------------------------------------

--
-- Table structure for table `itams`
--

DROP TABLE IF EXISTS `itams`;
CREATE TABLE IF NOT EXISTS `itams` (
  `EMAIL` varchar(200) NOT NULL,
  `ITAM` varchar(200) NOT NULL,
  `PRICE` int NOT NULL,
  `Qon` int NOT NULL,
  `ImgAdd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `name_sound`
--

DROP TABLE IF EXISTS `name_sound`;
CREATE TABLE IF NOT EXISTS `name_sound` (
  `ID` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `S_ADD` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `name_sound`
--

INSERT INTO `name_sound` (`ID`, `S_ADD`) VALUES
('PQSF01', 'sounds/CART SOUNDS/NAME/PQSF01');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASS` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ADD` varchar(300) NOT NULL,
  `CONTACT_NO` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `COUNTRY` varchar(200) NOT NULL,
  PRIMARY KEY (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`F_NAME`, `L_NAME`, `EMAIL`, `PASS`, `ADD`, `CONTACT_NO`, `COUNTRY`) VALUES
('Harshil', 'Patel', 'patelharshil4636@gmail.com', '463696', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', '+919499526950', 'INDIA'),
('parth', 'panchal', 'parthpanchal69@gmail.com', '463696', '', '+918200379854', 'INDIA'),
('harshil', 'patel', 'patelharshil333@gmail.com', '463696', 'mehshana', '+919409910782', 'INDIA'),
('harshil', 'patel', 'patelharshil463696@gmail.com', '463696', 'c 4 shivshatya flate dharma cinema gayatri mandir, highway bk cinema road mehsana 2 384002', '+919725232803', 'INDIA'),
('Paras', 'Panchal', 'paras420@gmail.com', '12345', '60-A,Royal Nagar Row House , Near Nirma Factory,Modhera Road,Mehsana 2.', '+918780352890', 'INDIA'),
('parth', 'panchal', 'parthpanchal8780@gmail.com', 'panchalparth@1', '69 - pataya street, xhamster nagar near brzzers complex thailand ', '+918780352890', 'INDIA'),
('HARDIK', 'RAVAL', 'HardikBhoyravaas@420.com', 'Mia MAssi', 'bhoyravaas bholu bha king Vagh Lion Of hubtown\r\n', '+19664715312', 'CANADA');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_info`
--

DROP TABLE IF EXISTS `shoe_info`;
CREATE TABLE IF NOT EXISTS `shoe_info` (
  `NAME` varchar(100) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `PRICE` int NOT NULL,
  `TYPE` varchar(200) NOT NULL,
  `DISCOUNT` int NOT NULL,
  `CASTE` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shoe_info`
--

INSERT INTO `shoe_info` (`NAME`, `ID`, `PRICE`, `TYPE`, `DISCOUNT`, `CASTE`) VALUES
(' Premium Qulity  Soft Fabric.', 'PQSF01', 2499, 'SPORTS', 25, 'SHOES'),
('COMFARTABLE RUNNING', 'CR01', 1799, 'SPORTS', 60, 'SHOES'),
('AIR STYLE', 'AS01', 1899, 'SPORTS', 40, 'SHOES'),
('DARK CLASSIC', 'DC01', 2000, 'FORMAL', 25, 'SHOES'),
('SILETTO', 'SLE01', 2299, 'SPORTS', 45, 'SHOES'),
('CHRONO7', 'CR7', 1899, 'SPORTS', 25, 'SHOES'),
('SPRINT', 'SP01', 2399, 'SPORTS', 25, 'SHOES'),
('ELITEKICKS', 'ES01', 2200, 'FORMAL', 20, 'SHOES'),
('SOLINA', 'SL01', 2000, 'FORMAL', 15, 'SHOES'),
('VINTAGE WALK', 'FS01', 1900, 'FORMAL', 40, 'SHOES'),
('MONKSTRAPS', 'MS01', 3000, 'FORMAL', 30, 'SHOES'),
('Dacken', 'D202', 3500, 'FORMAL', 25, 'SHOES'),
('ADIDAS', 'A01', 3000, 'FORMAL', 25, 'SHOES'),
('HARSHIL', 'Hc01', 4000, 'FORMAL', 30, 'SHOES');

-- --------------------------------------------------------

--
-- Table structure for table `size_info`
--

DROP TABLE IF EXISTS `size_info`;
CREATE TABLE IF NOT EXISTS `size_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(200) DEFAULT NULL,
  `COLOR` varchar(200) DEFAULT NULL,
  `SIZE` int DEFAULT NULL,
  `AWLBL` int NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=329 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `size_info`
--

INSERT INTO `size_info` (`NO`, `ID`, `COLOR`, `SIZE`, `AWLBL`) VALUES
(1, 'PQSF01', 'GREY', 6, 5),
(2, 'PQSF01', 'GREY', 7, 5),
(3, 'PQSF01', 'GREY', 8, 5),
(4, 'PQSF01', 'GREY', 9, 5),
(5, 'PQSF01', 'GREY', 10, 0),
(6, 'PQSF01', 'WHITE', 6, 0),
(7, 'PQSF01', 'WHITE', 7, 5),
(8, 'PQSF01', 'WHITE', 8, 5),
(9, 'PQSF01', 'WHITE', 9, 5),
(10, 'PQSF01', 'WHITE', 10, 0),
(11, 'PQSF01\r\n', 'BLACK', 6, 5),
(12, 'PQSF01', 'BLACK', 7, 5),
(13, 'PQSF01', 'BLACK', 8, 5),
(14, 'PQSF01', 'BLACK', 9, 5),
(15, 'PQSF01', 'BLACK', 10, 0),
(16, 'CR01', 'NAVY', 6, 5),
(17, 'CR01', 'NAVY', 7, 5),
(18, 'CR01', 'NAVY', 8, 5),
(19, 'CR01', 'NAVY', 9, 5),
(20, 'CR01', 'NAVY', 10, 5),
(21, 'CR01', 'GRADIANT', 6, 5),
(22, 'CR01', 'GRADIANT', 7, 5),
(23, 'CR01', 'GRADIANT', 8, 5),
(24, 'CR01', 'GRADIANT', 9, 5),
(76, 'PQSF01', 'DEFAULT', 7, 5),
(75, 'PQSF01', 'DEFAULT', 6, 5),
(27, 'AS01', 'WHITE_BLUE', 7, 5),
(28, 'AS01', 'WHITE_BLUE', 8, 5),
(29, 'AS01', 'WHITE_BLUE', 9, 5),
(30, 'AS01', 'WHITE_BLUE', 10, 0),
(31, 'AS01', 'GREEN_BLACK', 6, 5),
(32, 'AS01', 'GREEN_BLACK', 7, 5),
(33, 'AS01', 'GREEN_BLACK', 8, 5),
(34, 'AS01', 'GREEN_BLACK', 9, 5),
(35, 'AS01', 'GREEN_BLACK', 10, 5),
(36, 'AS01', 'WHITE_BLACK', 6, 5),
(37, 'AS01', 'WHITE_BLACK', 7, 5),
(38, 'AS01', 'WHITE_BLACK', 8, 5),
(39, 'AS01', 'WHITE_BLACK', 9, 5),
(40, 'AS01', 'WHITE_BLACK', 10, 5),
(41, 'DBD01', 'MULTI', 6, 5),
(42, 'DBD01', 'MULTI', 7, 5),
(43, 'DBD01', 'MULTI', 8, 5),
(44, 'DBD01', 'MULTI', 9, 5),
(45, 'DBD01', 'MULTI', 10, 5),
(46, 'DBD01', 'NAVY', 6, 5),
(47, 'DBD01', 'NAVY', 7, 5),
(48, 'DBD01', 'NAVY', 8, 5),
(49, 'DBD01', 'NAVY', 9, 5),
(50, 'DBD01', 'NAVY', 10, 5),
(51, 'ROD01', 'BLACK', 6, 5),
(52, 'ROD01', 'BLACK', 7, 5),
(53, 'ROD01', 'BLACK', 8, 5),
(54, 'ROD01', 'BLACK', 9, 5),
(55, 'ROD01', 'BLACK', 10, 5),
(56, 'ROD01', 'GRAY', 6, 5),
(57, 'ROD01', 'GRAY', 7, 5),
(58, 'ROD01', 'GRAY', 8, 5),
(59, 'ROD01', 'GRAY', 9, 5),
(60, 'ROD01', 'GRAY', 10, 5),
(61, 'CR701', 'BLUE', 6, 5),
(62, 'CR701', 'BLUE', 7, 5),
(63, 'CR701', 'BLUE', 8, 5),
(64, 'CR701', 'BLUE', 9, 5),
(65, 'CR701', 'BLUE', 10, 5),
(71, 'SP01', 'MULTI', 6, 5),
(72, 'PQSF01', 'BLACK', 6, 5),
(73, 'AS01', 'WHITE_BLUE', 6, 5),
(74, 'CR01', 'GRADIANT', 10, 0),
(77, 'PQSF01', 'DEFAULT', 7, 5),
(78, 'PQSF01', 'DEFAULT', 8, 5),
(79, 'PQSF01', 'DEFAULT', 9, 5),
(80, 'PQSF01', 'DEFAULT', 10, 5),
(81, 'SP01', 'MULTI', 7, 5),
(82, 'SP01', 'MULTI', 8, 5),
(83, 'SP01', 'MULTI', 9, 5),
(84, 'SP01\r\n', 'MULTI', 10, 5),
(86, 'SP01', 'NAVY', 6, 5),
(87, 'SP01', 'NAVY', 7, 5),
(88, 'SP01', 'NAVY', 8, 5),
(89, 'SP01', 'NAVY', 9, 5),
(90, 'SP01', 'NAVY', 10, 5),
(91, 'SLE01', 'GREY', 6, 5),
(92, 'SLE01', 'GREY', 7, 5),
(93, 'SLE01', 'GREY', 8, 5),
(94, 'SLE01', 'GREY', 9, 5),
(95, 'SLE01', 'GREY', 10, 5),
(96, 'SLE01\r\n', 'BLACK', 6, 5),
(97, 'SLE01', 'BLACK', 7, 5),
(98, 'SLE01', 'BLACK', 8, 5),
(101, 'SLE01', 'BLACK', 10, 5),
(100, 'SLE01', 'BLACK', 9, 5),
(102, 'SLE01', 'BLACK', 6, 5),
(103, 'SP01', 'MULTI', 10, 0),
(104, 'SL01', 'DEFAULT', 6, 5),
(105, 'SL01', 'DEFAULT', 7, 5),
(106, 'SL01', 'DEFAULT', 8, 4),
(107, 'SL01', 'DEFAULT', 9, 5),
(328, 'A01', 'BLACK', 10, 10),
(327, 'A01', 'BLACK', 9, 10),
(326, 'A01', 'BLACK', 8, 10),
(325, 'A01', 'BLACK', 7, 10),
(324, 'A01', 'BLACK', 6, 10),
(323, 'D202', 'Dark Brown', 10, 10),
(322, 'D202', 'Dark Brown', 9, 10),
(321, 'D202', 'Dark Brown', 8, 10),
(320, 'D202', 'Dark Brown', 7, 10),
(319, 'D202', 'Dark Brown', 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `s_info`
--

DROP TABLE IF EXISTS `s_info`;
CREATE TABLE IF NOT EXISTS `s_info` (
  `NO` int NOT NULL AUTO_INCREMENT,
  `ID` varchar(200) DEFAULT NULL,
  `IMG_ADD` varchar(200) DEFAULT NULL,
  `S_SIZE` int DEFAULT NULL,
  `COLOR` varchar(200) DEFAULT NULL,
  `AVLBL` int NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `s_info`
--

INSERT INTO `s_info` (`NO`, `ID`, `IMG_ADD`, `S_SIZE`, `COLOR`, `AVLBL`) VALUES
(1, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 6, 'GREY', 5),
(2, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 7, 'GREY', 5),
(3, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 8, 'GREY', 5),
(4, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 9, 'GREY', 5),
(5, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue1.jpeg', 10, 'GREY', 5),
(6, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 6, 'WHITE', 5),
(7, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 7, 'WHITE', 5),
(8, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 8, 'WHITE', 5),
(9, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 9, 'WHITE', 5),
(10, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue2.jpeg', 10, 'WHITE', 5),
(11, 'PQSF01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 6, 'BLACK', 5),
(12, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 7, 'BLACK', 5),
(13, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 8, 'BLACK', 5),
(14, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 9, 'BLACK', 5),
(15, 'PQSF01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue3.jpeg', 10, 'BLACK', 5),
(16, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 6, 'NAVY', 5),
(17, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 7, 'NAVY', 5),
(18, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 8, 'NAVY', 5),
(19, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 9, 'NAVY', 5),
(20, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue11.jpg', 10, 'NAVY', 5),
(21, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 6, 'GRADIANT', 5),
(22, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 7, 'GRADIANT', 5),
(23, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 8, 'GRADIANT', 5),
(24, 'CR01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 9, 'GRADIANT', 5),
(25, 'CR01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue14.jpeg', 10, 'GRADIANT', 5),
(26, 'AS01\r\n', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 6, 'WHITE_BLUE', 5),
(27, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 7, 'WHITE_BLUE', 5),
(28, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 8, 'WHITE_BLUE', 5),
(29, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 9, 'WHITE_BLUE', 5),
(30, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue8.jpeg', 10, 'WHITE_BLUE', 5),
(31, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 6, 'GREEN_BLACK', 5),
(32, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 7, 'GREEN_BLACK', 5),
(33, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 8, 'GREEN_BLACK', 5),
(34, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 9, 'GREEN_BLACK', 5),
(35, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue9.jpeg', 10, 'GREEN_BLACK', 5),
(36, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 6, 'WHITE_BLACK', 5),
(37, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 7, 'WHITE_BLACK', 5),
(38, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 8, 'WHITE_BLACK', 5),
(39, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 9, 'WHITE_BLACK', 5),
(40, 'AS01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue10.jpeg', 10, 'WHITE_BLACK', 5),
(41, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 6, 'MULTI', 5),
(42, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 7, 'MULTI', 5),
(43, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 8, 'MULTI', 5),
(44, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 9, 'MULTI', 5),
(45, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 10, 'MULTI', 5),
(46, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 6, 'NAVY', 5),
(47, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 7, 'NAVY', 5),
(48, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 8, 'NAVY', 5),
(49, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 9, 'NAVY', 5),
(50, 'DBD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue17.jpg', 10, 'NAVY', 5),
(51, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 6, 'BLACK', 5),
(52, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 7, 'BLACK', 5),
(53, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 8, 'BLACK', 5),
(54, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 9, 'BLACK', 5),
(55, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue18.jpg', 10, 'BLACK', 5),
(56, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 6, 'GRAY', 5),
(57, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 7, 'GRAY', 5),
(58, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 8, 'GRAY', 5),
(59, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 9, 'GRAY', 5),
(60, 'ROD01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue19.jpg', 10, 'GRAY', 5),
(61, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 6, 'BLUE', 5),
(62, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 7, 'BLUE', 5),
(63, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 8, 'BLUE', 5),
(64, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 9, 'BLUE', 5),
(65, 'CR701', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue15.jpeg', 10, 'BLUE', 5),
(71, 'SP01', 'https://raw.githubusercontent.com/HARSHIL4636/BRAVO/main/boo/shue16.jpg', 6, 'MULTI', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
