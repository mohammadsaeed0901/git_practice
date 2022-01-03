-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 04:49 AM
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
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `num` int(11) NOT NULL,
  `tag` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`num`, `tag`) VALUES
(2, '            <div class=\"box box2 portfolio-item\">\r\n                <div class=\"portfolio-wrap\">\r\n                    <figure>\r\n                        <img src=\"img/style3.jpg\" class=\"img-fluid\" alt=\"\">\r\n                        <a href=\"Template 2.html\" class=\"link-preview venobox\" data-gall=\"portfolioGallery\" title=\"View\"><i class=\'far\'>&#xf06e;</i></a>\r\n                        <button  class=\"link-details\" title=\"Delete\" type=\"submit\" name=\"deleteTemplate2\" value=\"1\" ><i class=\'far\'>&#xf2ed;</i></button>\r\n                    </figure>\r\n                </div>\r\n                <div class=\"text\">Template 2</div>\r\n            </div>'),
(1, '            <div class=\"box box1 portfolio-item\">\r\n                <div class=\"portfolio-wrap\">\r\n                    <figure>\r\n                        <img src=\"img/style2.jpg\" class=\"img-fluid\" alt=\"\">\r\n                        <a href=\"Template 1.html\" class=\"link-preview venobox\" data-gall=\"portfolioGallery\" title=\"View\"><i class=\'far\'>&#xf06e;</i></a>\r\n                        <button  class=\"link-details\" title=\"Delete\" type=\"submit\" name=\"deleteTemplate1\" value=\"1\" ><i class=\'far\'>&#xf2ed;</i></button>\r\n\r\n                    </figure>\r\n                </div>\r\n                <div class=\"text\">Template 1</div>\r\n            </div>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
