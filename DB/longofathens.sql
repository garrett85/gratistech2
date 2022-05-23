-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 10:28 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `longofathens`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `vehicleID` varchar(8) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` year NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`vehicleID`, `make`, `model`, `year`, `price`) VALUES
('1', 'chevrolet', 'silverado lt', 2022, 51510),
('10', 'chevrolet', 'colorado 4wd z71', 2022, 40595),
('11', 'chevrolet', 'trailblazer ls', 2022, 23035),
('12', 'buick', 'enforcer gx select', 2022, 27780),
('13', 'chevrolet', 'trailblazer let', 2022, 26000),
('14', 'chevrolet', 'colorado 2wd lt', 2022, 36370),
('15', 'gmc', 'canyon 2wd elevation standard', 2022, 31345),
('16', 'gmc', 'sierra denali', 2022, 85420),
('17', 'gmc', 'sierra sle', 2022, 70895),
('18', 'gmc', 'terrain denali', 2022, 41030),
('19', 'chevrolet', 'equinox lt', 2022, 29240),
('2', 'chevrolet', 'silverado lt', 2022, 56710),
('3', 'gmc', 'sierra sle', 2022, 57960),
('4', 'chevrolet', 'traverse high country', 2022, 54115),
('5', 'gmc', 'denali', 2022, 85385),
('6', 'chevrolet', 'blazar lt', 2022, 35090),
('7', 'gmc', 'terrain at4', 2022, 35685),
('8', 'chevrolet', 'colorado 2wd lt', 2022, 35685),
('9', 'gmv', 'sierra sle', 2022, 69545);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `favorites` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`, `favorites`) VALUES
('3', 'christopher@gratistech.com\r\n', 'christopher1', ''),
('4', 'garrett85@hotmail.com', 'garrett1', ''),
('2', 'joe@gratistech.com', 'joe1', ''),
('1', 'saphura@gratistech.com\r\n', 'saphura1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD UNIQUE KEY `vehicleID` (`vehicleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
