-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 01:07 PM
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
  `allowed` int(1) NOT NULL COMMENT '0-no ; 1-yes;',
  `itemImage` varchar(255) DEFAULT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `contact` int(255) NOT NULL,
  `email` varchar(255) NOT NULL COMMENT 'still required',
  `username` varchar(255) NOT NULL COMMENT 'username to make log-in easier',
  `password` varchar(255) NOT NULL,
  `status` int(45) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is the table containing all of the user data' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
