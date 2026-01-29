-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2026 at 11:43 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `price` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `xiaomi` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `samsung` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `others` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`price`, `xiaomi`, `samsung`, `others`) VALUES
('5 میلیون', '----', '----', '----'),
('10 میلیون', 'Redmi A5', 'A07', 'Moto E15'),
('15 میلیون', 'Note 14s', 'A16', 'Nokia X30 5G'),
('20 میلیون', 'Note 14 pro', '----', 'CM phone 1'),
('25 میلیون', 'Note 14 pro نسخه بالاتر حافظه', 'A26', 'ریلمی 12 پلاس'),
('30 میلیون', 'Poco x7', 'A36', '----'),
('40 میلیون', 'Poco x7 pro', 'A56', 'آنر 200'),
('50 میلیون', '----', 'S24 FE', '----'),
('70 میلیون', 'Xiaomi 14T pro', 'S25 FE', '----'),
('80 میلیون', '----', '----', 'آنر 400 پرو'),
('100 میلیون', 'Xiaomi 15', '----', 'Iphone 16'),
('بالای 100 میلیون', 'Xiaomi 15 ultra', 'S25 Ultra', 'وان پلاس 15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
