-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2022 at 06:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it21706332`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `published` int(1) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `email`, `title`, `category`, `description`, `path`, `published`) VALUES
(5, 'bb1234@gmail.com', 'face0200', 'Books', 'smile face', 'uploads/2.jpg', 0),
(6, 'qqqq@qqq.com', 'face02', 'Games', 'face', 'uploads/3.jpg', 0),
(8, 'eee@eee.com', 'bbbbb', 'Books', 'medi', 'uploads/', 0),
(9, 'buddhilabhanu@gmail.com', 'face02', 'Books', 'hgy', 'uploads/', 0),
(10, 'buddhilabhanu@gmail.com', 'face02', 'Books', 'hgy', 'uploads/IDCP.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb1comment`
--

DROP TABLE IF EXISTS `tb1comment`;
CREATE TABLE IF NOT EXISTS `tb1comment` (
  `commentID` int(10) NOT NULL,
  `date` int(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idemID` int(10) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1interest`
--

DROP TABLE IF EXISTS `tb1interest`;
CREATE TABLE IF NOT EXISTS `tb1interest` (
  `email` varchar(30) NOT NULL,
  `interest` varchar(50) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1interest`
--

INSERT INTO `tb1interest` (`email`, `interest`) VALUES
('bb1234@gmail.com', 'Games'),
('buddhilabhanu@gmail.com', 'Books'),
('qqqq@qqq.com', 'Books'),
('eee@eee.com', 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `tb1user`
--

DROP TABLE IF EXISTS `tb1user`;
CREATE TABLE IF NOT EXISTS `tb1user` (
  `email` varchar(50) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1user`
--

INSERT INTO `tb1user` (`email`, `full_name`, `contact`, `password`) VALUES
('buddhilabhanu@gmail.com', 'bhanu sri', '0770545220', 'bhanu'),
('bb1234@gmail.com', 'bb1234', '1234567890', '123456'),
('qqqq@qqq.com', 'buddhila wickramarathne', '+94770575820', '12345678'),
('eee@eee.com', 'bbbbb', '', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
