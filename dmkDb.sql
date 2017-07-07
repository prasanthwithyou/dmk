-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:05 PM
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
-- Table structure for table `tbl_district`
--

CREATE TABLE IF NOT EXISTS `tbl_district` (
  `districtId` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`districtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`districtId`, `district`, `status`, `createdAt`) VALUES
(1, 'Ariyalur', 'active', '2017-06-03 00:00:00'),
(2, 'Chennai', 'active', '2017-06-04 00:00:00'),
(3, 'Coimbatore', 'active', '2017-06-04 00:00:00'),
(4, 'Cuddalore', 'active', '2017-06-04 00:00:00'),
(6, 'Dharmapuri', 'active', '2017-06-04 00:39:12'),
(7, 'Dindigul', 'active', '2017-06-04 00:39:17'),
(8, 'Erode', 'active', '2017-06-04 00:39:24'),
(9, 'Kanchipuram', 'active', '2017-06-04 00:39:30'),
(10, 'Kanniyakumari', 'active', '2017-06-04 00:39:36'),
(11, 'Karur', 'active', '2017-06-04 00:39:40'),
(12, 'Krishnagiri', 'active', '2017-06-04 00:39:45'),
(13, 'Madurai', 'active', '2017-06-04 00:39:51'),
(14, 'Nagapattinam', 'active', '2017-06-04 00:39:57'),
(15, 'Namakkal', 'active', '2017-06-04 00:40:03'),
(16, 'Nilgiris', 'active', '2017-06-04 00:40:10'),
(17, 'Perambalur', 'active', '2017-06-04 00:40:15'),
(18, 'Pudukkottai', 'active', '2017-06-04 00:40:21'),
(19, 'Ramanathapuram', 'active', '2017-06-04 00:40:26'),
(20, 'Salem', 'active', '2017-06-04 00:40:32'),
(21, 'Sivaganga', 'active', '2017-06-04 00:40:41'),
(22, 'Thanjavur', 'active', '2017-06-04 00:40:42'),
(23, 'Theni', 'active', '2017-06-04 00:40:50'),
(24, 'Thoothukudi', 'active', '2017-06-04 00:40:52'),
(25, 'Tiruchirappalli', 'active', '2017-06-04 00:40:57'),
(26, 'Tirunelveli', 'active', '2017-06-04 00:41:02'),
(27, 'Tiruppur', 'active', '2017-06-04 00:41:06'),
(28, 'Tiruvallur', 'active', '2017-06-04 00:41:16'),
(29, 'Tiruvannamalai', 'active', '2017-06-04 00:41:24'),
(30, 'Tiruvarur', 'active', '2017-06-04 00:41:30'),
(31, 'Vellore', 'active', '2017-06-04 00:41:36'),
(32, 'Viluppuram', 'active', '2017-06-04 00:41:41'),
(33, 'Virudhunagar', 'active', '2017-06-04 00:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapMsgcontent`
--

CREATE TABLE IF NOT EXISTS `tbl_mapMsgcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberId` int(11) DEFAULT NULL,
  `msgId` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_mapMsgcontent`
--

INSERT INTO `tbl_mapMsgcontent` (`id`, `memberId`, `msgId`, `createdAt`) VALUES
(1, 9, 1, '2017-07-07 00:57:42'),
(2, 9, 2, '2017-07-07 00:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messageContent`
--

CREATE TABLE IF NOT EXISTS `tbl_messageContent` (
  `msgId` int(11) NOT NULL AUTO_INCREMENT,
  `messageSubject` varchar(255) DEFAULT NULL,
  `messageContent` text,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`msgId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_messageContent`
--

INSERT INTO `tbl_messageContent` (`msgId`, `messageSubject`, `messageContent`, `createdAt`) VALUES
(1, 'Hi Prasanth', 'Hi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi Prasanth\r\nHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi PrasanthHi Prasanth\r\nHi PrasanthHi PrasanthHi Prasanth', '2017-07-07 00:57:42'),
(2, 'Tests', 'TestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTests\nTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTests\nTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTests\nTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTe\nstsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTests\nTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTestsTests', '2017-07-07 00:58:25');

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
  `districtId` int(11) DEFAULT NULL,
  `usertypeId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`userId`, `userName`, `password`, `Name`, `mobileNo`, `EmailId`, `districtId`, `usertypeId`, `status`, `createdAt`) VALUES
(1, 'admin', 'password@123', 'admin', NULL, NULL, NULL, 1, 'active', '2017-04-24 00:00:00'),
(9, 'prasanth.badboys@gmail.com', '1234', 'prasanth', 2123123123, 'prasanth.badboys@gmail.com', 1, 2, 'active', '2017-04-30 15:15:15'),
(10, 'prasanth@dotcue.net', 'ASDSAD', 'PSSDA', 3213213, 'prasanth@dotcue.net', 2, 2, 'active', '2017-05-02 23:22:22'),
(11, 'prasanthwithyou@gmail.com', 'fsdfdsfdsf', 'Tests', 3232, 'prasanthwithyou@gmail.com', 3, 2, 'active', '2017-05-04 23:17:46'),
(12, 'asdadsa', 'dadada', 'adasd', 223123131231223, 'asdadsa', 3, 2, 'active', '2017-05-04 23:17:54'),
(13, 'qwewqwqewq', 'eweqeq', 'qeqweeere', 21321213, 'qwewqwqewq', 3, 2, 'active', '2017-05-04 23:18:02'),
(14, 'dasd', 'dasdasda', 'praa', 312312, 'dasd', 20, 2, 'active', '2017-06-04 01:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userType`
--

CREATE TABLE IF NOT EXISTS `tbl_userType` (
  `usertypeId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`usertypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_userType`
--

INSERT INTO `tbl_userType` (`usertypeId`, `userType`, `status`, `createdAt`) VALUES
(1, 'Admin', '1', '2017-04-23 00:00:00'),
(2, 'Member', '1', '2017-04-23 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
