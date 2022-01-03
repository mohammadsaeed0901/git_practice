-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 10:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poroje_narm`
--

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `typeOfWidget` int(11) DEFAULT NULL,
  `text` text COLLATE utf8_bin DEFAULT NULL,
  `photo` text COLLATE utf8_bin DEFAULT NULL,
  `video` text COLLATE utf8_bin DEFAULT NULL,
  `link` text COLLATE utf8_bin DEFAULT NULL,
  `list` text COLLATE utf8_bin DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`typeOfWidget`, `text`, `photo`, `video`, `link`, `list`, `num`) VALUES
(1, '<div class=\"center\" >vxcvcvxvcvx</div>', 'null', 'null', 'null', 'null', 3),
(1, '<div class=\"center\" >sfdsdfsdfsdf</div>', 'null', 'null', 'null', 'null', 1),
(1, '<div class=\"center\" >fgfhgfhjfhjfjhggn</div>', 'null', 'null', 'null', 'null', 2),
(1, '', 'null', 'null', 'null', 'null', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
