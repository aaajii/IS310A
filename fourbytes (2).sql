-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 12:12 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fourbytes`
--
CREATE DATABASE IF NOT EXISTS `fourbytes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fourbytes`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `itemID` int(255) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(255) NOT NULL,
  `itemDescription` varchar(255) NOT NULL,
  `itemPrice` float NOT NULL,
  `itemBrand` varchar(255) NOT NULL,
  `userID` int(255) NOT NULL COMMENT 'References to users table',
  `itemImage` varchar(255) DEFAULT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`itemID`, `itemName`, `itemDescription`, `itemPrice`, `itemBrand`, `userID`, `itemImage`, `dateAdded`) VALUES
(7, 'Buster Sword', 'a HUGE SWORD ;)))', 822, 'MHFU', 2, 'https://vignette2.wikia.nocookie.net/monsterhunter/images/e/ec/1stGen_and_2ndGen-Great_Sword_Render_009.png/revision/latest/scale-to-width-down/66?cb=20120512064435', '2017-05-21 05:46:00'),
(8, 'White Serpent Blade', 'Beautiful Great Sword made from white Giaprey scales. Lined with gold fangs. Beautiful Great Sword made from white Giaprey scales. Lined with gold fangs.', 384, 'MHFU', 2, 'https://vignette3.wikia.nocookie.net/monsterhunter/images/c/cf/2ndGen-Great_Sword_Render_014.png/revision/latest/scale-to-width-down/64?cb=20120512092913', '0000-00-00 00:00:00'),
(9, 'Ravager Blade', 'Iron Great Sword with a vicious serrated edge. Can be further improved.', 576, 'MHFU', 2, 'https://vignette3.wikia.nocookie.net/monsterhunter/images/b/b6/1stGen_and_2ndGen-Great_Sword_Render_005.png/revision/latest/scale-to-width-down/80?cb=20120512064402', '0000-00-00 00:00:00'),
(10, 'Khezu Shock Sword', 'Made of Khezu. Wrapped in attribute material with an electrified blade.', 624, 'MHFU', 2, 'https://vignette4.wikia.nocookie.net/monsterhunter/images/1/1b/1stGen_and_2ndGen-Great_Sword_Render_036.png/revision/latest/scale-to-width-down/60?cb=20120512093241', '2017-05-21 07:02:46'),
(11, 'Decider', 'Heavy Great Sword of high quality steel. Symbol of ancient judges authority.', 1104, 'MHFU', 2, 'https://vignette2.wikia.nocookie.net/monsterhunter/images/7/7e/2ndGen-Great_Sword_Render_001.png/revision/latest/scale-to-width-down/90?cb=20120512011119', '2017-05-21 14:10:34'),
(12, 'Scarborough Shoal', 'Shoal of scarborough lol ad astra per aspera nostoros en la campo a mi burro mi duelen la garganta el medico le pone una gorita negra', 560, 'MHFU', 6, 'No image.', '2017-05-22 11:54:05'),
(13, 'Ben Franklin', 'Best USA president in the century Lorem Ipsum Dolor', 2240, 'MHFU', 2, 'No image.', '2017-05-22 12:30:48'),
(14, 'Acer Laptop', 'Acer ana ana', 822, 'Acer', 0, 'No image.', '2017-05-23 11:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `itemID` int(255) NOT NULL COMMENT 'referenced from products table',
  `reserved` int(255) NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `username` varchar(255) NOT NULL COMMENT 'still required',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='This is the table containing all of the user data' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `contact`, `username`, `password`) VALUES
(2, 'Jimuel', 'Banawan', '09430151214', 'jwpbanawan@addu.edu.ph', 'p4$$w0rD'),
(3, 'Kristal', 'Uy', '09434810806', 'kkemtal@gmail.com', 'p4$$w0rD'),
(6, 'LJ', 'Solis', '09434810806', 'lj@yahoo.com', 'p4$$w0rD');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
