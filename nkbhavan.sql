-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2020 at 12:07 PM
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
-- Database: `nkbhavan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_art_craft_school`
--

DROP TABLE IF EXISTS `about_art_craft_school`;
CREATE TABLE IF NOT EXISTS `about_art_craft_school` (
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `about_nabhankur`
--

DROP TABLE IF EXISTS `about_nabhankur`;
CREATE TABLE IF NOT EXISTS `about_nabhankur` (
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_sub_title` varchar(100) NOT NULL,
  `small_desc` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_nabhankur`
--

INSERT INTO `about_nabhankur` (`title`, `body`, `banner_title`, `banner_sub_title`, `small_desc`, `image`) VALUES
('Who we are', '<p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <h3>Welcome</h3>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <h3>Welcome</h3>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>', 'About', 'Nabhankur Kala Bhawan', '', 'inner-hero-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`, `status`) VALUES
(1, 'tanu@gmail.com', 'admin', 1),
(2, 'pinu@gmail.com', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `how_to_sell`
--

DROP TABLE IF EXISTS `how_to_sell`;
CREATE TABLE IF NOT EXISTS `how_to_sell` (
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `banner_title` varchar(20) NOT NULL,
  `banner_sub_title` varchar(50) NOT NULL,
  `small_desc` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `how_to_sell`
--

INSERT INTO `how_to_sell` (`title`, `body`, `banner_title`, `banner_sub_title`, `small_desc`, `image`) VALUES
('How to sell?', '<p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <h3>Welcome</h3>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>\r\n              <h3>Welcome</h3>\r\n              <p>\r\n                Lorem Ipsum is simply dummy text of the printing and typesetting\r\n                industry. Lorem Ipsum has been the industry\'s standard dummy\r\n                text ever since the 1500s, when an unknown printer took a galley\r\n                of type and scrambled it to make a type specimen book. It has\r\n                survived not only five centuries, but also the leap into\r\n                electronic typesetting, remaining essentially unchanged. It was\r\n                popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop\r\n                publishing software like Aldus PageMaker including versions of\r\n                Lorem Ipsum.\r\n              </p>', 'How to', 'sell your Art', '<p>At Nabhankur,<br> we offer a doorway for your art<br>to reach out to the world<br>Gift Your art the right Audience</p>', 'sell-your-art.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_events`
--

DROP TABLE IF EXISTS `news_and_events`;
CREATE TABLE IF NOT EXISTS `news_and_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `short_details` varchar(200) NOT NULL,
  `long_details` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_and_events`
--

INSERT INTO `news_and_events` (`id`, `title`, `short_details`, `long_details`) VALUES
(1, 'Exhebition at Delhi', 'Galleri Christoffer Egelund is proud to present the exhibition HECATE - ATHER, which is the third solo.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Nkbhawan announced for online course', 'Galleri Christoffer Egelund is proud to present the exhibition HECATE - ATHER, which is the third solo.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
