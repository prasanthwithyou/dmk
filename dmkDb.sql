-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2017 at 03:17 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dmkDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_User`
--

CREATE TABLE IF NOT EXISTS `tbl_User` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `mobileNo` bigint(20) DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `usertypeId` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`userId`, `userName`, `password`, `Name`, `mobileNo`, `EmailId`, `usertypeId`, `createdAt`) VALUES
(1, 'admin', 'password@123', 'admin', NULL, NULL, 1, '2017-04-24 00:00:00'),
(9, 'prasanthbadboys@gmail.com', '1234', 'prasanth', 2123123123, 'prasanthbadboys@gmail.com', 2, '2017-04-30 15:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userType`
--

CREATE TABLE IF NOT EXISTS `tbl_userType` (
  `usertypeId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`usertypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_userType`
--

INSERT INTO `tbl_userType` (`usertypeId`, `userType`, `status`, `createdAt`) VALUES
(1, 'Admin', 1, '2017-04-23 00:00:00'),
(2, 'Users', 1, '2017-04-23 00:00:00'),
(3, 'sdas', 1, '2017-04-30 00:00:00'),
(4, 'sdas', 1, '2017-04-30 10:54:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
