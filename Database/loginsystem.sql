-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 01:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `Brand` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Megapixels` int(11) NOT NULL,
  `MaxAperture` int(11) NOT NULL,
  `VideoResolution` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`Brand`, `Name`, `Megapixels`, `MaxAperture`, `VideoResolution`, `Price`, `id`, `vid`) VALUES
('Sunpak', 'D7500', 26, 40, '4k', 2496, 0, 7),
('RODE', 'Rebel', 32, 3, 'Full HD', 1903, 1, 6),
('Canon', 'Rebel', 32, 3, '4k', 2316, 2, 6),
('JOBY', 'Rebel T8i', 30, 4, 'Full HD', 1194, 3, 8),
('Nikon', 'D850', 45, 3, '4k', 2561, 4, 5),
('RODE', 'Mark IV', 32, 3, '4k', 2067, 5, 5),
('Sunpak', 'D850', 20, 4, '4k', 2638, 6, 6),
('Sunpak', 'Mark II', 24, 4, 'Full HD', 2866, 7, 10),
('Nikon', 'D850', 20, 3, '4k', 2892, 8, 7),
('Sunpak', 'D780', 30, 40, 'Full HD', 2469, 9, 8),
('Canon', 'Mark II', 45, 3, '4k', 901, 10, 3),
('Sunpak', 'Mark III', 24, 3, 'Full HD', 919, 11, 3),
('Nikon', 'D780', 20, 5, '4k', 980, 12, 7),
('Canon', 'D7500', 20, 3, '4k', 806, 13, 9),
('Canon', 'Mark III', 20, 3, '4k', 2174, 14, 4),
('Canon', 'Rebel T8i', 32, 3, '4k', 1735, 15, 3),
('Canon', 'D780', 26, 4, 'Full HD', 2413, 16, 2),
('Sunpak', 'Mark V', 32, 40, '4k', 2701, 17, 3),
('RODE', 'D780', 32, 5, 'Full HD', 939, 18, 8),
('Sunpak', 'Mark IV', 45, 5, '4k', 707, 19, 6),
('Sunpak', 'D780', 45, 4, '4k', 853, 20, 8),
('Sunpak', 'Mark II', 32, 3, 'Full HD', 1427, 21, 8),
('RODE', 'Mark II', 24, 4, 'Full HD', 541, 22, 9),
('Sunpak', 'D850', 30, 40, 'Full HD', 876, 23, 5),
('Canon', 'Rebel T8i', 24, 4, 'Full HD', 2364, 24, 7),
('RODE', 'Mark V', 20, 5, '4k', 2788, 25, 7),
('Nikon', 'D780', 20, 3, '4k', 1838, 26, 4),
('Sunpak', 'D7500', 45, 40, 'Full HD', 812, 27, 6),
('Nikon', 'Rebel', 24, 5, 'Full HD', 1872, 28, 8),
('Canon', 'Rebel T8i', 26, 3, 'Full HD', 1762, 29, 3),
('Sunpak', 'Mark II', 20, 40, 'Full HD', 2303, 30, 7),
('Canon', 'D850', 24, 5, '4k', 2252, 31, 2),
('JOBY', 'Mark II', 24, 40, '4k', 1177, 32, 4),
('RODE', 'D850', 26, 40, '4k', 587, 33, 8),
('JOBY', 'Rebel T8i', 45, 3, '4k', 1350, 34, 6),
('Canon', 'D850', 26, 3, 'Full HD', 577, 35, 2),
('Canon', 'Rebel', 32, 40, '4k', 1775, 36, 9),
('JOBY', 'Mark III', 26, 40, 'Full HD', 2532, 37, 6),
('Canon', 'Rebel T8i', 20, 40, 'Full HD', 2616, 38, 1),
('Canon', 'D7500', 30, 4, 'Full HD', 853, 39, 9),
('Canon', 'Rebel T8i', 45, 3, '4k', 1356, 40, 5),
('Sunpak', 'Mark III', 20, 4, '4k', 613, 41, 1),
('Nikon', 'Mark V', 30, 4, 'Full HD', 2543, 42, 2),
('Sunpak', 'D780', 30, 4, '4k', 2470, 43, 9),
('Nikon', 'D850', 45, 3, '4k', 1859, 44, 5),
('Nikon', 'Rebel T8i', 32, 4, '4k', 1427, 45, 8),
('Sunpak', 'Mark III', 24, 3, 'Full HD', 1832, 46, 2),
('JOBY', 'Mark II', 45, 4, 'Full HD', 2126, 47, 8),
('Canon', 'D780', 20, 3, 'Full HD', 2285, 48, 9),
('Nikon', 'Mark III', 45, 5, '4k', 1267, 49, 4),
('RODE', 'Mark III', 45, 5, '4k', 2682, 50, 4),
('Canon', 'Rebel', 32, 40, '4k', 622, 51, 3),
('Nikon', 'D7500', 24, 3, '4k', 1562, 52, 5),
('JOBY', 'Rebel T8i', 32, 5, '4k', 2787, 53, 9),
('Nikon', 'D7500', 26, 3, 'Full HD', 1214, 54, 4),
('Sunpak', 'Rebel', 26, 3, '4k', 2990, 55, 5),
('Canon', 'Mark V', 26, 5, 'Full HD', 847, 56, 6),
('Sunpak', 'Mark V', 26, 5, '4k', 1052, 57, 9),
('Canon', 'D850', 24, 40, 'Full HD', 1975, 58, 3),
('Nikon', 'Mark V', 45, 3, 'Full HD', 1014, 59, 3),
('JOBY', 'Rebel T8i', 24, 3, 'Full HD', 2317, 60, 9),
('JOBY', 'D850', 30, 5, 'Full HD', 2113, 61, 10),
('Canon', 'Mark V', 30, 3, 'Full HD', 941, 62, 5),
('RODE', 'Rebel', 32, 5, 'Full HD', 2819, 63, 9),
('RODE', 'Mark II', 45, 5, '4k', 1450, 64, 9),
('Nikon', 'Mark III', 30, 3, 'Full HD', 2732, 65, 5),
('Sunpak', 'D850', 30, 3, '4k', 1375, 66, 2),
('JOBY', 'Mark V', 45, 40, '4k', 2335, 67, 5),
('RODE', 'D780', 20, 3, '4k', 747, 68, 7),
('Sunpak', 'Mark V', 30, 5, '4k', 2569, 69, 2),
('Canon', 'Rebel T8i', 30, 4, 'Full HD', 1761, 70, 2),
('Nikon', 'Mark II', 32, 3, 'Full HD', 911, 71, 9),
('Sunpak', 'Mark V', 20, 40, '4k', 1968, 72, 5),
('RODE', 'D780', 26, 40, '4k', 2509, 73, 7),
('RODE', 'Rebel', 26, 5, '4k', 2109, 74, 8),
('JOBY', 'Mark V', 45, 3, '4k', 2481, 75, 9),
('Nikon', 'D850', 32, 5, 'Full HD', 1913, 76, 7),
('RODE', 'Mark II', 30, 3, 'Full HD', 1086, 77, 3),
('Nikon', 'D7500', 32, 5, '4k', 1740, 78, 2),
('Nikon', 'Mark III', 32, 3, 'Full HD', 1818, 79, 5),
('JOBY', 'Mark II', 30, 40, '4k', 2360, 80, 6),
('JOBY', 'Mark II', 30, 40, 'Full HD', 1710, 81, 6),
('JOBY', 'Mark IV', 45, 5, 'Full HD', 1070, 82, 6),
('Nikon', 'Mark IV', 45, 5, 'Full HD', 1537, 83, 8),
('JOBY', 'D780', 30, 40, '4k', 2409, 84, 9),
('JOBY', 'Mark V', 45, 5, '4k', 886, 85, 6),
('RODE', 'D780', 24, 4, 'Full HD', 1616, 86, 4),
('RODE', 'Mark II', 30, 40, 'Full HD', 1546, 87, 7),
('Sunpak', 'D7500', 45, 3, '4k', 686, 88, 4),
('JOBY', 'Mark V', 30, 4, '4k', 634, 89, 7),
('Nikon', 'Mark II', 45, 3, 'Full HD', 1147, 90, 3),
('Nikon', 'Mark V', 20, 3, '4k', 2807, 91, 10),
('RODE', 'D780', 30, 5, 'Full HD', 2926, 92, 4),
('Canon', 'Rebel T8i', 26, 3, '4k', 1083, 93, 2),
('JOBY', 'Mark V', 24, 3, '4k', 1451, 94, 3),
('JOBY', 'Mark IV', 30, 3, 'Full HD', 524, 95, 10),
('Nikon', 'Mark II', 30, 5, 'Full HD', 868, 96, 10),
('Canon', 'Mark IV', 26, 40, 'Full HD', 2974, 97, 7),
('RODE', 'Mark II', 30, 3, '4k', 2144, 98, 3),
('RODE', 'Mark III', 32, 4, '4k', 1148, 99, 10);

-- --------------------------------------------------------

--
-- Table structure for table `cellphones`
--

CREATE TABLE `cellphones` (
  `Brand` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `WirelessTech` varchar(20) NOT NULL,
  `OS` varchar(20) NOT NULL,
  `StorageSize` int(11) NOT NULL,
  `ScreenSize` int(11) NOT NULL,
  `Ram` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cellphones`
--

INSERT INTO `cellphones` (`Brand`, `Name`, `WirelessTech`, `OS`, `StorageSize`, `ScreenSize`, `Ram`, `id`, `vid`, `Price`) VALUES
('Apple', 'iPhone 8', '5G', 'IOS', 512, 5, 10, 0, 8, 1016),
('Apple', 'iPhone 6', '5G', 'IOS', 512, 6, 12, 1, 7, 532),
('Apple', 'iPhone 7', '4G', 'IOS', 128, 5, 12, 2, 5, 499),
('Apple', 'iPhone 13', '5G', 'IOS', 1000, 6, 12, 3, 2, 730),
('Apple', 'iPhone 13', '4G', 'IOS', 512, 5, 10, 4, 3, 1046),
('Apple', 'iPhone 8', '5G', 'IOS', 128, 6, 10, 5, 7, 1176),
('Apple', 'iPhone 9', '4G', 'IOS', 256, 5, 10, 6, 10, 1171),
('Apple', 'iPhone 10', '5G', 'IOS', 256, 5, 12, 7, 4, 578),
('Apple', 'iPhone 7', '4G', 'IOS', 256, 5, 8, 8, 4, 671),
('Apple', 'iPhone 6', '4G', 'IOS', 512, 6, 8, 9, 3, 1200),
('Apple', 'iPhone 14', '4G', 'IOS', 512, 5, 10, 10, 6, 750),
('Apple', 'iPhone 11', '5G', 'IOS', 128, 5, 8, 11, 7, 662),
('Apple', 'iPhone 14', '5G', 'IOS', 512, 6, 12, 12, 7, 456),
('Apple', 'iPhone 13', '4G', 'IOS', 1000, 5, 8, 13, 4, 1105),
('Apple', 'iPhone 11', '4G', 'IOS', 256, 6, 10, 14, 1, 921),
('Apple', 'iPhone 7', '4G', 'IOS', 512, 5, 10, 15, 6, 408),
('Apple', 'iPhone 13', '4G', 'IOS', 512, 6, 12, 16, 2, 795),
('Apple', 'iPhone 7', '4G', 'IOS', 512, 5, 8, 17, 2, 813),
('Apple', 'iPhone 13', '4G', 'IOS', 1000, 6, 10, 18, 3, 607),
('Apple', 'iPhone 7', '5G', 'IOS', 1000, 6, 12, 19, 9, 459),
('Apple', 'iPhone 6', '5G', 'IOS', 1000, 5, 10, 20, 1, 912),
('Apple', 'iPhone 11', '4G', 'IOS', 128, 5, 8, 21, 8, 1037),
('Apple', 'iPhone 13', '5G', 'IOS', 256, 6, 12, 22, 4, 931),
('Apple', 'iPhone 10', '4G', 'IOS', 256, 5, 8, 23, 4, 992),
('Apple', 'iPhone 6', '4G', 'IOS', 1000, 5, 12, 24, 7, 774),
('Apple', 'iPhone 14', '5G', 'IOS', 128, 6, 8, 25, 7, 1016),
('Apple', 'iPhone 11', '4G', 'IOS', 1000, 6, 8, 26, 3, 954),
('Apple', 'iPhone 11', '4G', 'IOS', 512, 6, 10, 27, 3, 754),
('Apple', 'iPhone 10', '5G', 'IOS', 256, 5, 8, 28, 6, 819),
('Apple', 'iPhone 14', '4G', 'IOS', 128, 6, 12, 29, 5, 1175),
('Apple', 'iPhone 6', '5G', 'IOS', 128, 5, 12, 30, 5, 864),
('Apple', 'iPhone 6', '5G', 'IOS', 128, 5, 12, 31, 5, 661),
('Apple', 'iPhone 8', '5G', 'IOS', 1000, 6, 8, 32, 4, 1042),
('Samsung', 'Galaxy S10', '4G', 'Android', 256, 6, 8, 33, 9, 663),
('Samsung', 'Galaxy S22', '5G', 'Android', 512, 5, 12, 34, 4, 1114),
('Samsung', 'Galaxy S21', '4G', 'Android', 128, 7, 12, 35, 6, 893),
('Samsung', 'Galaxy S22', '4G', 'Android', 256, 6, 12, 36, 6, 859),
('Samsung', 'Galaxy S22', '5G', 'Android', 128, 7, 8, 37, 9, 898),
('Samsung', 'Galaxy S9', '4G', 'Android', 128, 6, 8, 38, 4, 739),
('Samsung', 'Galaxy S9', '5G', 'Android', 1000, 5, 10, 39, 6, 948),
('Samsung', 'Galaxy S20', '5G', 'Android', 256, 5, 10, 40, 4, 1008),
('Samsung', 'Galaxy S10', '4G', 'Android', 256, 5, 8, 41, 4, 828),
('Samsung', 'Galaxy S8', '4G', 'Android', 1000, 7, 8, 42, 8, 468),
('Samsung', 'Galaxy S22', '5G', 'Android', 1000, 7, 8, 43, 8, 779),
('Samsung', 'Galaxy S9', '4G', 'Android', 128, 6, 12, 44, 9, 841),
('Samsung', 'Galaxy S22', '4G', 'Android', 512, 5, 10, 45, 5, 1040),
('Samsung', 'Galaxy S9', '4G', 'Android', 128, 5, 12, 46, 2, 878),
('Samsung', 'Galaxy S20', '4G', 'Android', 128, 5, 12, 47, 7, 881),
('Samsung', 'Galaxy S9', '5G', 'Android', 512, 7, 8, 48, 5, 637),
('Samsung', 'Galaxy S20', '5G', 'Android', 256, 7, 8, 49, 7, 1160),
('Samsung', 'Galaxy S21', '4G', 'Android', 256, 7, 12, 50, 2, 579),
('Samsung', 'Galaxy S9', '5G', 'Android', 128, 5, 8, 51, 6, 659),
('Samsung', 'Galaxy S8', '4G', 'Android', 1000, 5, 10, 52, 2, 713),
('Samsung', 'Galaxy S20', '4G', 'Android', 512, 7, 8, 53, 6, 510),
('Samsung', 'Galaxy S8', '5G', 'Android', 128, 5, 12, 54, 9, 1152),
('Samsung', 'Galaxy S9', '4G', 'Android', 128, 7, 10, 55, 7, 480),
('Samsung', 'Galaxy S22', '5G', 'Android', 512, 5, 8, 56, 3, 1165),
('Samsung', 'Galaxy S10', '4G', 'Android', 1000, 6, 10, 57, 5, 802),
('Samsung', 'Galaxy S8', '4G', 'Android', 128, 7, 12, 58, 5, 613),
('Samsung', 'Galaxy S9', '4G', 'Android', 256, 7, 12, 59, 5, 785),
('Samsung', 'Galaxy S20', '5G', 'Android', 128, 5, 10, 60, 3, 998),
('Samsung', 'Galaxy S9', '5G', 'Android', 256, 6, 10, 61, 8, 951),
('Samsung', 'Galaxy S20', '4G', 'Android', 256, 6, 10, 62, 5, 1097),
('Samsung', 'Galaxy S10', '5G', 'Android', 1000, 6, 12, 63, 6, 1121),
('Samsung', 'Galaxy S21', '4G', 'Android', 128, 7, 8, 64, 1, 1001),
('Samsung', 'Galaxy S9', '5G', 'Android', 128, 6, 12, 65, 6, 778),
('Google', 'Pixel 3 ', '4G', 'Android', 128, 6, 12, 66, 4, 1124),
('Google', 'Pixel 6', '4G', 'Android', 128, 5, 12, 67, 3, 1171),
('Google', 'Pixel 4', '5G', 'Android', 1000, 5, 12, 68, 2, 1073),
('Google', 'Pixel 2', '5G', 'Android', 128, 5, 12, 69, 6, 745),
('Google', 'Pixel 4', '5G', 'Android', 128, 6, 8, 70, 2, 649),
('Google', 'Pixel 7', '4G', 'Android', 1000, 6, 8, 71, 9, 434),
('Google', 'Pixel 3 ', '5G', 'Android', 128, 5, 8, 72, 3, 851),
('Google', 'Pixel 7', '4G', 'Android', 1000, 6, 10, 73, 8, 983),
('Google', 'Pixel 5', '4G', 'Android', 512, 5, 12, 74, 1, 460),
('Google', 'Pixel 7', '4G', 'Android', 256, 5, 12, 75, 1, 1009),
('Google', 'Pixel 2', '4G', 'Android', 256, 6, 10, 76, 8, 1138),
('Google', 'Pixel 2', '5G', 'Android', 128, 5, 10, 77, 8, 789),
('Google', 'Pixel 6', '5G', 'Android', 1000, 5, 10, 78, 2, 1089),
('Google', 'Pixel 7', '5G', 'Android', 128, 6, 10, 79, 5, 1135),
('Google', 'Pixel 4', '5G', 'Android', 1000, 5, 8, 80, 4, 768),
('Google', 'Pixel 5', '5G', 'Android', 128, 6, 10, 81, 10, 505),
('Google', 'Pixel 6', '5G', 'Android', 256, 5, 12, 82, 4, 446),
('Google', 'Pixel 5', '4G', 'Android', 1000, 6, 12, 83, 3, 438),
('Google', 'Pixel 3 ', '4G', 'Android', 1000, 5, 12, 84, 3, 1137),
('Google', 'Pixel 5', '4G', 'Android', 128, 5, 10, 85, 6, 879),
('Google', 'Pixel 6', '5G', 'Android', 128, 5, 12, 86, 8, 463),
('Google', 'Pixel 3 ', '5G', 'Android', 512, 5, 8, 87, 2, 1161),
('Google', 'Pixel 7', '5G', 'Android', 512, 5, 10, 88, 3, 908),
('Google', 'Pixel 4', '5G', 'Android', 128, 5, 8, 89, 9, 1009),
('Google', 'Pixel 5', '5G', 'Android', 128, 6, 12, 90, 4, 702),
('Google', 'Pixel 6', '4G', 'Android', 1000, 6, 8, 91, 9, 667),
('Google', 'Pixel 5', '5G', 'Android', 128, 6, 12, 92, 4, 578),
('Google', 'Pixel 4', '5G', 'Android', 512, 5, 8, 93, 5, 468),
('Google', 'Pixel 3 ', '5G', 'Android', 1000, 5, 10, 94, 4, 1012),
('Google', 'Pixel 3 ', '4G', 'Android', 1000, 6, 12, 95, 9, 1145),
('Google', 'Pixel 3 ', '4G', 'Android', 256, 5, 10, 96, 9, 467),
('Google', 'Pixel 6', '4G', 'Android', 128, 6, 12, 97, 4, 627),
('Google', 'Pixel 7', '5G', 'Android', 128, 5, 10, 98, 7, 855),
('Google', 'Pixel 4', '4G', 'Android', 256, 5, 8, 99, 9, 991);

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `Brand` varchar(20) NOT NULL,
  `ScreenSize` int(11) NOT NULL,
  `Resolution` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Ram` int(11) NOT NULL,
  `StorageType` varchar(20) NOT NULL,
  `StorageSize` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `OS` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`Brand`, `ScreenSize`, `Resolution`, `Name`, `Ram`, `StorageType`, `StorageSize`, `Price`, `OS`, `id`, `vid`) VALUES
('Apple', 13, '1080p', 'Surface', 16, 'HDD', 128, 1395, 'Chrome OS', 66, 6),
('Apple', 12, '720p', 'Celeron', 16, 'HDD', 2000, 714, 'Chrome OS', 67, 7),
('Apple', 14, '1080p', 'Surface', 8, 'SSD', 2000, 738, 'Windows', 68, 8),
('Samsung', 14, '720p', 'Surface', 12, 'HDD', 256, 530, 'Windows', 69, 9),
('Microsoft', 13, '1440p', 'Celeron', 64, 'SSD', 1000, 1530, 'Windows', 70, 7),
('Apple', 16, '1080p', 'Surface', 32, 'SSD', 512, 719, 'Mac OS', 71, 4),
('Microsoft', 13, '1440p', 'Evo', 8, 'HDD', 1000, 502, 'Mac OS', 72, 5),
('Samsung', 14, '4k', 'MacBook Air', 64, 'SSD', 1000, 668, 'Chrome OS', 73, 10),
('Dell', 16, '1440p', 'Ideapad', 8, 'SSD', 128, 1988, 'Mac OS', 74, 6),
('Samsung', 14, '1440p', 'Surface', 16, 'SSD', 1000, 1579, 'Chrome OS', 75, 2),
('ASUS', 12, '720p', 'Inspiron', 12, 'HDD', 512, 1713, 'Mac OS', 76, 3),
('Apple', 11, '1440p', 'Surface', 4, 'SSD', 512, 1069, 'Mac OS', 77, 4),
('ASUS', 13, '1440p', 'Ideapad', 4, 'SSD', 1000, 1066, 'Mac OS', 78, 7),
('Microsoft', 13, '720p', 'Celeron', 32, 'SSD', 512, 1559, 'Windows', 79, 2),
('Lenovo', 16, '4k', 'Surface', 64, 'HDD', 2000, 1396, 'Windows', 80, 6),
('Microsoft', 14, '4k', 'Celeron', 64, 'SSD', 2000, 920, 'Chrome OS', 81, 2),
('HP', 14, '720p', 'Inspiron', 4, 'SSD', 1000, 1013, 'Windows', 82, 3),
('Dell', 12, '4k', 'Surface', 16, 'HDD', 2000, 579, 'Chrome OS', 83, 5),
('Samsung', 12, '1440p', 'Surface', 8, 'HDD', 128, 797, 'Mac OS', 84, 4),
('Samsung', 14, '4k', 'Surface', 32, 'HDD', 2000, 1450, 'Mac OS', 85, 5),
('ASUS', 10, '720p', 'Evo', 16, 'HDD', 256, 525, 'Windows', 86, 9),
('Microsoft', 13, '720p', 'Ideapad', 4, 'HDD', 256, 1782, 'Chrome OS', 87, 1),
('HP', 14, '1440p', 'Ideapad', 16, 'HDD', 512, 1691, 'Mac OS', 88, 2),
('Samsung', 12, '720p', 'MacBook Air', 32, 'HDD', 512, 1538, 'Windows', 89, 7),
('ASUS', 13, '720p', 'Inspiron', 64, 'HDD', 1000, 367, 'Chrome OS', 90, 2),
('Acer', 12, '1080p', 'Evo', 32, 'HDD', 256, 644, 'Windows', 91, 6),
('Microsoft', 14, '4k', 'Ideapad', 12, 'HDD', 512, 610, 'Mac OS', 92, 6),
('Acer', 16, '1080p', 'Evo', 4, 'HDD', 512, 1048, 'Windows', 93, 3),
('Microsoft', 14, '720p', 'Ideapad', 8, 'HDD', 256, 1726, 'Mac OS', 94, 5),
('HP', 13, '720p', 'Celeron', 32, 'SSD', 512, 1152, 'Chrome OS', 95, 6),
('Apple', 14, '4k', 'Celeron', 4, 'SSD', 2000, 1196, 'Chrome OS', 96, 8),
('Samsung', 12, '720p', 'Evo', 8, 'SSD', 128, 541, 'Chrome OS', 97, 8),
('HP', 10, '1440p', 'MacBook Air', 64, 'SSD', 1000, 716, 'Windows', 98, 2),
('Lenovo', 11, '4k', 'Evo', 12, 'HDD', 2000, 1394, 'Mac OS', 99, 7),
('Acer', 16, '4k', 'Surface', 16, 'SSD', 512, 1356, 'Mac OS', 100, 4),
('Microsoft', 15, '1080p', 'Surface', 8, 'HDD', 1000, 1569, 'Chrome OS', 101, 5),
('Samsung', 12, '1440p', 'Evo', 4, 'HDD', 2000, 1329, 'Mac OS', 102, 9),
('Samsung', 16, '1080p', 'Evo', 64, 'SSD', 256, 1327, 'Windows', 103, 3),
('Acer', 13, '1080p', 'Ideapad', 64, 'HDD', 512, 447, 'Mac OS', 104, 9),
('ASUS', 14, '720p', 'Ideapad', 64, 'SSD', 2000, 1316, 'Mac OS', 105, 10),
('Samsung', 10, '1080p', 'Celeron', 12, 'HDD', 512, 1501, 'Windows', 106, 2),
('Acer', 12, '1080p', 'Surface', 8, 'HDD', 512, 1692, 'Chrome OS', 107, 4),
('ASUS', 13, '1080p', 'Ideapad', 12, 'SSD', 1000, 1168, 'Windows', 108, 3),
('Samsung', 13, '720p', 'Inspiron', 64, 'HDD', 1000, 692, 'Chrome OS', 109, 10),
('ASUS', 10, '720p', 'Surface', 4, 'HDD', 128, 731, 'Windows', 110, 4),
('Apple', 15, '1080p', 'Ideapad', 16, 'SSD', 2000, 1493, 'Chrome OS', 111, 10),
('Microsoft', 11, '1080p', 'Evo', 16, 'SSD', 1000, 1324, 'Mac OS', 112, 4),
('Dell', 15, '1080p', 'Ideapad', 32, 'HDD', 128, 1953, 'Mac OS', 113, 6),
('Dell', 14, '1080p', 'Inspiron', 4, 'SSD', 512, 1854, 'Mac OS', 114, 9),
('Microsoft', 15, '720p', 'Inspiron', 16, 'HDD', 256, 1986, 'Windows', 115, 2),
('Microsoft', 15, '720p', 'Evo', 64, 'HDD', 2000, 1344, 'Chrome OS', 116, 2),
('Lenovo', 15, '4k', 'MacBook Air', 4, 'SSD', 2000, 1090, 'Chrome OS', 117, 6),
('Apple', 10, '4k', 'Evo', 32, 'HDD', 512, 1707, 'Windows', 118, 5),
('Apple', 16, '1440p', 'Celeron', 8, 'HDD', 512, 1424, 'Mac OS', 119, 7),
('Dell', 12, '1440p', 'Celeron', 32, 'SSD', 2000, 1253, 'Chrome OS', 120, 9),
('Microsoft', 16, '4k', 'Celeron', 64, 'SSD', 256, 1166, 'Windows', 121, 7),
('Acer', 16, '720p', 'Ideapad', 8, 'HDD', 1000, 955, 'Windows', 122, 5),
('Acer', 11, '1440p', 'MacBook Air', 4, 'SSD', 512, 400, 'Windows', 123, 3),
('Acer', 14, '720p', 'Celeron', 4, 'HDD', 2000, 634, 'Windows', 124, 5),
('Lenovo', 15, '4k', 'MacBook Air', 32, 'SSD', 128, 1447, 'Windows', 125, 6),
('Samsung', 10, '4k', 'Ideapad', 16, 'HDD', 1000, 621, 'Chrome OS', 126, 5),
('Samsung', 15, '1080p', 'Ideapad', 8, 'HDD', 2000, 1090, 'Mac OS', 127, 6),
('Dell', 10, '4k', 'MacBook Air', 12, 'HDD', 1000, 647, 'Windows', 128, 9),
('Lenovo', 15, '1440p', 'Ideapad', 32, 'SSD', 128, 1534, 'Mac OS', 129, 8),
('Samsung', 12, '720p', 'Celeron', 64, 'SSD', 256, 1058, 'Mac OS', 130, 10),
('HP', 15, '1080p', 'Evo', 32, 'SSD', 512, 1436, 'Mac OS', 131, 4),
('Apple', 11, '1080p', 'Celeron', 8, 'HDD', 1000, 1198, 'Chrome OS', 132, 1),
('ASUS', 14, '720p', 'Inspiron', 64, 'SSD', 512, 424, 'Chrome OS', 133, 7),
('Lenovo', 10, '720p', 'MacBook Air', 12, 'SSD', 512, 1486, 'Chrome OS', 134, 8),
('Acer', 12, '1440p', 'Celeron', 16, 'HDD', 1000, 1828, 'Mac OS', 135, 9),
('Apple', 13, '720p', 'Ideapad', 32, 'SSD', 512, 1078, 'Windows', 136, 7),
('Lenovo', 11, '720p', 'Surface', 16, 'HDD', 1000, 1075, 'Chrome OS', 137, 3),
('Lenovo', 15, '4k', 'Ideapad', 12, 'HDD', 1000, 835, 'Mac OS', 138, 6),
('Apple', 15, '720p', 'Inspiron', 4, 'SSD', 128, 888, 'Windows', 139, 2),
('Microsoft', 12, '4k', 'Inspiron', 64, 'HDD', 512, 1008, 'Chrome OS', 140, 8),
('Microsoft', 10, '4k', 'MacBook Air', 32, 'SSD', 128, 415, 'Chrome OS', 141, 6),
('Acer', 11, '1440p', 'Celeron', 64, 'SSD', 128, 1558, 'Windows', 142, 9),
('Lenovo', 15, '1080p', 'Evo', 16, 'HDD', 128, 364, 'Chrome OS', 143, 5),
('HP', 12, '1440p', 'MacBook Air', 64, 'HDD', 2000, 1764, 'Windows', 144, 4),
('Acer', 14, '1080p', 'Inspiron', 64, 'SSD', 2000, 630, 'Mac OS', 145, 3),
('Apple', 11, '1440p', 'Celeron', 4, 'SSD', 1000, 1068, 'Chrome OS', 146, 7),
('ASUS', 10, '4k', 'Evo', 16, 'HDD', 2000, 1972, 'Windows', 147, 1),
('Dell', 15, '1080p', 'MacBook Air', 32, 'SSD', 2000, 913, 'Windows', 148, 7),
('Samsung', 11, '1080p', 'MacBook Air', 32, 'SSD', 512, 1788, 'Mac OS', 149, 6),
('Acer', 15, '720p', 'Inspiron', 64, 'SSD', 128, 1465, 'Windows', 150, 5),
('Apple', 14, '4k', 'Celeron', 64, 'SSD', 512, 1423, 'Mac OS', 151, 5),
('Apple', 10, '1080p', 'Celeron', 64, 'SSD', 128, 262, 'Mac OS', 152, 9),
('Samsung', 15, '4k', 'Celeron', 4, 'HDD', 2000, 991, 'Chrome OS', 153, 3),
('Acer', 15, '1080p', 'Evo', 64, 'SSD', 2000, 366, 'Windows', 154, 5),
('Acer', 15, '4k', 'MacBook Air', 4, 'SSD', 128, 1017, 'Mac OS', 155, 6),
('Samsung', 10, '1080p', 'Inspiron', 8, 'SSD', 2000, 1927, 'Chrome OS', 156, 4),
('ASUS', 11, '4k', 'Ideapad', 16, 'SSD', 128, 1665, 'Windows', 157, 3),
('Apple', 11, '720p', 'Inspiron', 12, 'HDD', 1000, 1619, 'Mac OS', 158, 4),
('Lenovo', 14, '1080p', 'Evo', 4, 'HDD', 1000, 1451, 'Mac OS', 159, 10),
('Microsoft', 12, '720p', 'Celeron', 16, 'SSD', 128, 1651, 'Windows', 160, 4),
('Samsung', 11, '1440p', 'Celeron', 12, 'SSD', 256, 1887, 'Chrome OS', 161, 4),
('Acer', 12, '1440p', 'Inspiron', 32, 'HDD', 128, 796, 'Chrome OS', 162, 4),
('Acer', 13, '1080p', 'Ideapad', 32, 'SSD', 256, 943, 'Mac OS', 163, 6),
('Dell', 11, '1440p', 'MacBook Air', 8, 'SSD', 2000, 314, 'Mac OS', 164, 4),
('Apple', 12, '4k', 'Inspiron', 12, 'SSD', 256, 1346, 'Windows', 165, 10);

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `Name` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `GraphicsQuality` varchar(20) NOT NULL,
  `Ram` int(11) NOT NULL,
  `StorageSize` int(11) NOT NULL,
  `StorageType` varchar(20) NOT NULL,
  `CpuPerformance` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`Name`, `Price`, `GraphicsQuality`, `Ram`, `StorageSize`, `StorageType`, `CpuPerformance`, `id`, `vid`) VALUES
('Xbox One', 559, '1440p', 8, 2000, 'SSD', '4GHz', 0, 6),
('Xbox One', 229, '8k', 16, 512, 'SSD', '4GHz', 1, 3),
('Xbox Series S', 283, '1080p', 32, 1000, 'HDD', '5GHz', 2, 7),
('Playstation 5', 302, '8k', 32, 1000, 'SSD', '3GHz', 3, 4),
('Xbox Series S', 424, '8k', 32, 512, 'SSD', '4GHz', 4, 5),
('Playstation 3', 573, '4k', 32, 1000, 'SSD', '5GHz', 5, 10),
('Playstation 3', 516, '1440p', 16, 1000, 'HDD', '4GHz', 6, 9),
('Playstation 5', 202, '1080p', 8, 512, 'HDD', '5GHz', 7, 2),
('Xbox Series S', 299, '1080p', 8, 2000, 'SSD', '4GHz', 8, 5),
('Playstation 5', 463, '4k', 8, 1000, 'HDD', '5GHz', 9, 7),
('Xbox 360', 565, '8k', 8, 512, 'HDD', '4GHz', 10, 7),
('Xbox 360', 408, '1080p', 32, 512, 'SSD', '5GHz', 11, 6),
('Xbox One', 487, '1080p', 8, 512, 'SSD', '5GHz', 12, 6),
('Playstation 4', 246, '8k', 16, 1000, 'HDD', '5GHz', 13, 10),
('Xbox 360', 334, '4k', 8, 2000, 'HDD', '3GHz', 14, 2),
('Playstation 3', 446, '4k', 8, 256, 'SSD', '3GHz', 15, 10),
('Playstation 3', 279, '1080p', 8, 1000, 'HDD', '5GHz', 16, 5),
('Xbox Series X', 544, '4k', 8, 512, 'SSD', '5GHz', 17, 2),
('Xbox 360', 419, '8k', 8, 1000, 'SSD', '3GHz', 18, 2),
('Playstation 4', 263, '8k', 32, 1000, 'SSD', '5GHz', 19, 1),
('Xbox Series X', 205, '4k', 8, 1000, 'HDD', '4GHz', 20, 8),
('Xbox 360', 512, '8k', 32, 256, 'SSD', '5GHz', 21, 4),
('Xbox One', 433, '4k', 32, 2000, 'HDD', '3GHz', 22, 6),
('Xbox 360', 303, '1080p', 16, 512, 'HDD', '4GHz', 23, 5),
('Playstation 3', 380, '4k', 32, 2000, 'SSD', '4GHz', 24, 3),
('Xbox 360', 593, '8k', 32, 2000, 'SSD', '3GHz', 25, 8),
('Xbox Series X', 330, '4k', 8, 2000, 'HDD', '3GHz', 26, 2),
('Playstation 5', 358, '4k', 8, 1000, 'HDD', '4GHz', 27, 5),
('Xbox 360', 277, '8k', 8, 1000, 'HDD', '5GHz', 28, 3),
('Playstation 4', 272, '8k', 16, 256, 'HDD', '4GHz', 29, 9),
('Playstation 4', 457, '4k', 16, 1000, 'SSD', '3GHz', 30, 4),
('Playstation 5', 493, '1080p', 16, 2000, 'SSD', '5GHz', 31, 10),
('Xbox Series X', 420, '1440p', 16, 512, 'SSD', '5GHz', 32, 1),
('Xbox Series S', 341, '4k', 8, 256, 'SSD', '5GHz', 33, 10),
('Xbox Series X', 308, '1440p', 32, 256, 'HDD', '4GHz', 34, 9),
('Xbox 360', 467, '1080p', 16, 512, 'SSD', '5GHz', 35, 4),
('Xbox 360', 228, '4k', 8, 1000, 'SSD', '5GHz', 36, 10),
('Xbox Series X', 209, '4k', 16, 256, 'HDD', '4GHz', 37, 7),
('Playstation 4', 306, '8k', 8, 256, 'HDD', '5GHz', 38, 7),
('Xbox Series S', 401, '1440p', 8, 1000, 'SSD', '5GHz', 39, 8),
('Xbox Series X', 251, '1080p', 16, 1000, 'SSD', '4GHz', 40, 5),
('Xbox Series S', 368, '4k', 32, 2000, 'HDD', '5GHz', 41, 3),
('Playstation 4', 307, '1080p', 16, 256, 'SSD', '3GHz', 42, 3),
('Xbox One', 524, '1440p', 16, 512, 'SSD', '3GHz', 43, 9),
('Xbox Series S', 271, '8k', 32, 1000, 'SSD', '3GHz', 44, 9),
('Xbox Series X', 214, '1080p', 32, 512, 'HDD', '3GHz', 45, 4),
('Playstation 4', 418, '8k', 32, 256, 'HDD', '5GHz', 46, 3),
('Playstation 3', 522, '1080p', 32, 512, 'SSD', '3GHz', 47, 10),
('Playstation 3', 339, '1440p', 32, 2000, 'SSD', '4GHz', 48, 3),
('Xbox One', 522, '4k', 8, 256, 'HDD', '4GHz', 49, 9),
('Playstation 3', 228, '8k', 32, 2000, 'HDD', '4GHz', 50, 7),
('Playstation 5', 434, '4k', 8, 256, 'SSD', '3GHz', 51, 6),
('Xbox Series X', 315, '8k', 16, 512, 'HDD', '4GHz', 52, 6),
('Playstation 5', 370, '8k', 8, 256, 'HDD', '3GHz', 53, 5),
('Playstation 4', 416, '8k', 32, 2000, 'HDD', '5GHz', 54, 3),
('Xbox Series S', 414, '1080p', 32, 256, 'SSD', '5GHz', 55, 7),
('Playstation 5', 222, '1440p', 8, 2000, 'SSD', '4GHz', 56, 8),
('Xbox 360', 395, '1080p', 32, 256, 'HDD', '4GHz', 57, 8),
('Xbox Series X', 559, '4k', 32, 512, 'HDD', '4GHz', 58, 3),
('Playstation 3', 363, '4k', 32, 256, 'SSD', '3GHz', 59, 6),
('Xbox One', 312, '1080p', 16, 2000, 'HDD', '5GHz', 60, 2),
('Xbox Series S', 540, '1440p', 16, 256, 'SSD', '4GHz', 61, 10),
('Playstation 4', 420, '4k', 16, 256, 'SSD', '5GHz', 62, 6),
('Playstation 5', 300, '4k', 32, 2000, 'SSD', '4GHz', 63, 5),
('Playstation 4', 594, '1080p', 8, 2000, 'HDD', '3GHz', 64, 7),
('Playstation 5', 272, '1080p', 16, 256, 'HDD', '4GHz', 65, 9),
('Playstation 5', 599, '1440p', 32, 512, 'SSD', '4GHz', 66, 3),
('Xbox One', 559, '1440p', 16, 1000, 'SSD', '3GHz', 67, 7),
('Playstation 4', 232, '8k', 8, 2000, 'SSD', '4GHz', 68, 10),
('Playstation 3', 443, '1080p', 8, 512, 'HDD', '5GHz', 69, 9),
('Xbox Series X', 589, '4k', 32, 512, 'HDD', '3GHz', 70, 4),
('Playstation 3', 302, '8k', 16, 256, 'SSD', '5GHz', 71, 8),
('Playstation 5', 527, '1080p', 16, 256, 'SSD', '5GHz', 72, 5),
('Xbox Series X', 325, '8k', 8, 2000, 'SSD', '5GHz', 73, 2),
('Playstation 4', 475, '4k', 8, 512, 'HDD', '3GHz', 74, 7),
('Playstation 5', 456, '4k', 16, 256, 'HDD', '3GHz', 75, 8),
('Playstation 5', 593, '8k', 32, 1000, 'HDD', '3GHz', 76, 2),
('Playstation 3', 390, '8k', 16, 2000, 'SSD', '5GHz', 77, 2),
('Playstation 3', 324, '1080p', 8, 512, 'SSD', '5GHz', 78, 1),
('Xbox Series X', 318, '8k', 8, 1000, 'SSD', '3GHz', 79, 3),
('Playstation 3', 278, '1080p', 32, 1000, 'SSD', '5GHz', 80, 8),
('Playstation 3', 486, '1440p', 32, 1000, 'SSD', '4GHz', 81, 4),
('Xbox Series X', 556, '4k', 16, 2000, 'HDD', '5GHz', 82, 9),
('Playstation 4', 374, '1440p', 8, 256, 'HDD', '4GHz', 83, 6),
('Xbox One', 320, '8k', 32, 1000, 'HDD', '4GHz', 84, 10),
('Playstation 5', 556, '1440p', 16, 1000, 'SSD', '5GHz', 85, 4),
('Xbox One', 276, '4k', 8, 512, 'HDD', '5GHz', 86, 2),
('Xbox Series S', 332, '8k', 16, 256, 'SSD', '5GHz', 87, 3),
('Xbox Series S', 336, '1080p', 16, 2000, 'SSD', '3GHz', 88, 1),
('Playstation 3', 287, '8k', 32, 512, 'SSD', '5GHz', 89, 4),
('Xbox Series S', 358, '1440p', 8, 256, 'SSD', '4GHz', 90, 5),
('Playstation 3', 352, '8k', 16, 1000, 'HDD', '3GHz', 91, 7),
('Playstation 5', 212, '8k', 32, 512, 'HDD', '4GHz', 92, 6),
('Playstation 3', 569, '1440p', 16, 512, 'HDD', '5GHz', 93, 1),
('Playstation 3', 252, '1080p', 8, 2000, 'SSD', '4GHz', 94, 6),
('Playstation 5', 381, '4k', 8, 2000, 'HDD', '5GHz', 95, 4),
('Xbox One', 329, '1440p', 8, 1000, 'SSD', '5GHz', 96, 9),
('Xbox Series S', 329, '8k', 16, 1000, 'SSD', '4GHz', 97, 2),
('Xbox Series S', 318, '1440p', 32, 1000, 'SSD', '5GHz', 98, 5),
('Xbox Series S', 419, '8k', 32, 256, 'HDD', '3GHz', 99, 8);

-- --------------------------------------------------------

--
-- Table structure for table `internet`
--

CREATE TABLE `internet` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bandwidth` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internet`
--

INSERT INTO `internet` (`id`, `name`, `bandwidth`, `price`, `vid`) VALUES
(3, 'Spectrum', 200, 80, 1),
(4, 'Ziply', 75, 75, 2),
(5, 'Ziply', 20, 20, 2),
(6, 'Comcast', 40, 60, 3),
(7, 'Comcast', 1000, 100, 3),
(8, 'Comcast', 500, 80, 3),
(9, 'Spectrum', 400, 90, 1),
(13, 'Spectrum', 100, 50, 1),
(14, 'Ziply', 150, 60, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `ScreenSize` int(3) NOT NULL,
  `Resolution` varchar(10) NOT NULL,
  `Year` int(4) NOT NULL,
  `Price` int(4) NOT NULL,
  `Brand` varchar(15) NOT NULL,
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`ScreenSize`, `Resolution`, `Year`, `Price`, `Brand`, `id`, `vid`) VALUES
(32, '4k', 2018, 847, 'Sony', 1, 3),
(75, '1080p', 2019, 1014, 'Hisense', 3, 9),
(65, '720p', 2021, 295, 'Sony', 4, 6),
(65, '720p', 2020, 395, 'Sceptre', 5, 9),
(32, '4k', 2018, 740, 'VIZIO', 6, 7),
(85, '720p', 2022, 704, 'Sony', 7, 7),
(75, '720p', 2018, 724, 'VIZIO', 8, 3),
(65, '1080p', 2018, 437, 'TCL', 9, 5),
(75, '1080p', 2020, 945, 'Sony', 10, 9),
(43, '1080p', 2018, 1127, 'Sceptre', 11, 9),
(43, '720p', 2021, 974, 'Hisense', 12, 2),
(65, '1080p', 2021, 1115, 'TCL', 13, 9),
(43, '4k', 2019, 437, 'VIZIO', 14, 7),
(75, '1080p', 2022, 565, 'VIZIO', 15, 2),
(75, '720p', 2018, 714, 'Hisense', 16, 2),
(32, '720p', 2018, 888, 'Sceptre', 17, 8),
(55, '720p', 2022, 840, 'Sony', 18, 9),
(43, '4k', 2018, 449, 'Sony', 19, 9),
(65, '4k', 2021, 370, 'Sceptre', 20, 5),
(65, '720p', 2018, 719, 'Sony', 21, 9),
(32, '4k', 2022, 1095, 'Sceptre', 22, 5),
(85, '1080p', 2017, 254, 'Sceptre', 23, 8),
(85, '1080p', 2018, 254, 'Sceptre', 24, 8),
(85, '1080p', 2020, 1042, 'LG', 25, 8),
(65, '720p', 2019, 316, 'Sceptre', 26, 1),
(32, '4k', 2020, 608, 'TCL', 27, 9),
(43, '1080p', 2019, 796, 'Hisense', 28, 9),
(75, '4k', 2018, 812, 'Sceptre', 29, 3),
(43, '720p', 2017, 613, 'Sceptre', 30, 9),
(65, '1080p', 2019, 968, 'LG', 31, 3),
(65, '720p', 2016, 870, 'TCL', 32, 3),
(75, '1080p', 2016, 879, 'TCL', 33, 2),
(85, '1080p', 2021, 712, 'Hisense', 34, 7),
(55, '720p', 2022, 687, 'VIZIO', 35, 3),
(32, '4k', 2019, 629, 'Hisense', 36, 1),
(65, '1080p', 2019, 330, 'Sceptre', 37, 4),
(32, '4k', 2019, 284, 'Samsung', 38, 6),
(43, '720p', 2021, 201, 'Sceptre', 40, 1),
(85, '4k', 2018, 817, 'Samsung', 42, 3),
(43, '1080p', 2021, 888, 'VIZIO', 43, 3),
(85, '4k', 2017, 502, 'VIZIO', 44, 6),
(32, '4k', 2020, 205, 'VIZIO', 45, 5),
(32, '720p', 2018, 1117, 'Samsung', 46, 6),
(75, '4k', 2022, 436, 'TCL', 47, 3),
(43, '1080p', 2018, 892, 'VIZIO', 48, 8),
(75, '1080p', 2017, 667, 'Hisense', 49, 6),
(43, '4k', 2019, 784, 'Hisense', 50, 6),
(75, '1080p', 2019, 1096, 'VIZIO', 51, 9),
(55, '4k', 2016, 999, 'Hisense', 52, 7),
(65, '720p', 2021, 963, 'VIZIO', 53, 5),
(43, '4k', 2016, 444, 'Hisense', 54, 9),
(32, '720p', 2018, 253, 'Hisense', 55, 8),
(75, '720p', 2022, 479, 'Sony', 56, 4),
(32, '1080p', 2018, 932, 'LG', 57, 3),
(43, '1080p', 2019, 300, 'VIZIO', 58, 5),
(85, '1080p', 2017, 359, 'Samsung', 59, 2),
(43, '4k', 2022, 925, 'VIZIO', 60, 1),
(55, '1080p', 2021, 557, 'LG', 61, 5),
(55, '4k', 2016, 618, 'Hisense', 62, 4),
(55, '1080p', 2018, 434, 'Hisense', 63, 8),
(65, '720p', 2017, 802, 'VIZIO', 64, 4),
(75, '720p', 2017, 736, 'Samsung', 65, 9),
(65, '4k', 2022, 913, 'Samsung', 66, 6),
(85, '1080p', 2018, 815, 'Hisense', 67, 3),
(32, '720p', 2018, 391, 'VIZIO', 68, 2),
(75, '4k', 2018, 458, 'TCL', 69, 8),
(75, '4k', 2019, 734, 'Hisense', 70, 6),
(43, '720p', 2021, 1008, 'Hisense', 71, 6),
(75, '4k', 2021, 710, 'Sceptre', 72, 4),
(65, '4k', 2021, 855, 'TCL', 73, 6),
(65, '720p', 2016, 1069, 'VIZIO', 74, 7),
(32, '720p', 2019, 251, 'VIZIO', 75, 3),
(55, '1080p', 2020, 348, 'Hisense', 76, 5),
(32, '4k', 2016, 1088, 'VIZIO', 77, 9),
(65, '4k', 2016, 699, 'TCL', 78, 3),
(65, '720p', 2022, 979, 'Sony', 79, 7),
(43, '1080p', 2018, 208, 'TCL', 80, 2),
(55, '4k', 2018, 650, 'Hisense', 81, 3),
(85, '4k', 2017, 841, 'VIZIO', 82, 8),
(43, '4k', 2021, 479, 'Sceptre', 83, 6),
(32, '4k', 2021, 270, 'VIZIO', 84, 3),
(65, '1080p', 2017, 555, 'Samsung', 85, 6),
(55, '4k', 2022, 833, 'Sceptre', 86, 4),
(55, '1080p', 2018, 422, 'TCL', 87, 2),
(75, '720p', 2017, 1062, 'VIZIO', 88, 9),
(43, '4k', 2022, 1052, 'Sony', 89, 8),
(85, '720p', 2021, 460, 'Hisense', 90, 4),
(85, '1080p', 2016, 316, 'VIZIO', 91, 2),
(43, '1080p', 2019, 711, 'VIZIO', 92, 5),
(43, '1080p', 2021, 1062, 'Hisense', 93, 6),
(75, '720p', 2019, 942, 'Hisense', 94, 9),
(32, '720p', 2021, 732, 'TCL', 95, 8),
(65, '1080p', 2018, 285, 'VIZIO', 96, 10),
(85, '720p', 2017, 988, 'TCL', 97, 2),
(32, '4k', 2018, 533, 'Hisense', 98, 6),
(65, '1080p', 2020, 849, 'Samsung', 99, 6),
(65, '1080p', 2022, 244, 'Sony', 100, 8),
(11, '4k', 2022, 2000, 'Samsung', 101, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `create_datetime`) VALUES
(1, 'Mercedes', 'mercedes@outlook.edu', 'Password', 'Colton', 'Pitts', '0000-00-00 00:00:00'),
(2, 'Kim', 'kim1552@outlook.ca', 'Password', 'Levi', 'Joyner', '0000-00-00 00:00:00'),
(3, 'Laura', 'laura1818@yahoo.edu', 'Password', 'Shafira', 'Fisher', '0000-00-00 00:00:00'),
(4, 'Baker', 'baker@google.ca', 'Password', 'Jacob', 'Gross', '0000-00-00 00:00:00'),
(5, 'Hanna', 'hanna@hotmail.couk', 'Password', 'Sheila', 'Parsons', '0000-00-00 00:00:00'),
(6, 'Dante', 'dante9080@aol.couk', 'Password', 'Xaviera', 'Parker', '0000-00-00 00:00:00'),
(7, 'Olga', 'olga@google.edu', 'Password', 'Connor', 'Skinner', '0000-00-00 00:00:00'),
(8, 'Aristotle', 'aristotle@protonmail.com', 'Password', 'Zelenia', 'Cain', '0000-00-00 00:00:00'),
(9, 'Leslie', 'leslie@google.net', 'Password', 'Jolie', 'Weber', '0000-00-00 00:00:00'),
(10, 'Beverly', 'beverly@yahoo.com', 'Password', 'Kaseem', 'Dunn', '0000-00-00 00:00:00'),
(11, 'Oren', 'oren@outlook.net', 'Password', 'Prescott', 'Sears', '0000-00-00 00:00:00'),
(12, 'Blake', 'blake9266@hotmail.couk', 'Password', 'Faith', 'Sheppard', '0000-00-00 00:00:00'),
(13, 'Orli', 'orli@protonmail.com', 'Password', 'Sharon', 'Cabrera', '0000-00-00 00:00:00'),
(14, 'Phoebe', 'phoebe@outlook.net', 'Password', 'Katell', 'Reilly', '0000-00-00 00:00:00'),
(15, 'Alfonso', 'alfonso2259@icloud.com', 'Password', 'Jasmine', 'Dotson', '0000-00-00 00:00:00'),
(16, 'Brock', 'brock@google.org', 'Password', 'Victoria', 'Orr', '0000-00-00 00:00:00'),
(17, 'Rana', 'rana@aol.com', 'Password', 'Dean', 'Cortez', '0000-00-00 00:00:00'),
(18, 'Abraham', 'abraham@hotmail.org', 'Password', 'Upton', 'Hurley', '0000-00-00 00:00:00'),
(19, 'Brendan', 'brendan@icloud.com', 'Password', 'Walker', 'Foreman', '0000-00-00 00:00:00'),
(20, 'Dylan', 'dylan792@protonmail.net', 'Password', 'Perry', 'Bass', '0000-00-00 00:00:00'),
(21, 'hashbrown190', 'email@email.com', 'ee54e17f15205154e7d5dded82d74285', 'Kyle', 'H', '2022-12-06 22:52:36'),
(22, 'cmullins00', 'email@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Dan', 'Danderson', '2022-12-10 02:40:24'),
(23, 'hello', 'hello@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'h', 'e', '2022-12-17 00:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `username`, `email`, `password`, `company_name`, `create_datetime`) VALUES
(1, 'hashbrown190', 'email@yahoo.com', 'ee54e17f15205154e7d5dded82d74285', 'BlackSmith', '2022-11-02 00:56:42'),
(2, 'Conner', 'email@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ziply', '2022-12-14 04:51:38'),
(3, 'Eric', 'eric@icloud.net', 'Password', 'Vulputate Posuere Ltd', '0000-00-00 00:00:00'),
(4, 'Camille', 'camille@icloud.org', 'Password', 'Donec Egestas Inc.', '0000-00-00 00:00:00'),
(5, 'Aphrodite', 'aphrodite4863@google.edu', 'Password', 'Nunc Interdum LLC', '0000-00-00 00:00:00'),
(6, 'Gary', 'gary@outlook.net', 'Password', 'Id Blandit Foundation', '0000-00-00 00:00:00'),
(7, 'Hedy', 'hedy1648@yahoo.edu', 'Password', 'Phasellus Dolor Ltd', '0000-00-00 00:00:00'),
(8, 'Jackson', 'jackson8121@google.edu', 'Password', 'Ac Risus Morbi Inc.', '0000-00-00 00:00:00'),
(9, 'Hedley', 'hedley5391@protonmail.com', 'Password', 'Orci Luctus Et Corp.', '0000-00-00 00:00:00'),
(10, 'Cassidy', 'cassidy@aol.couk', 'Password', 'Fusce Fermentum Ltd', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cellphones`
--
ALTER TABLE `cellphones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internet`
--
ALTER TABLE `internet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cellphones`
--
ALTER TABLE `cellphones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `internet`
--
ALTER TABLE `internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
