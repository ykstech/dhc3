-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `userid` int(100) NOT NULL,
  `disease` varchar(1000) NOT NULL,
  `currdate` date NOT NULL,
  `nextdate` date NOT NULL,
  `diseasepercent` int(100) NOT NULL,
  `improvement` int(100) NOT NULL,
  `medication` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`userid`, `disease`, `currdate`, `nextdate`, `diseasepercent`, `improvement`, `medication`) VALUES
(1, 'xyhabak', '2023-02-01', '2023-02-04', 50, 40, 'yavahu\r\nvagtracvay\r\nayrfv'),
(12, 'abcm,abycbbwyc,gbcyybNA,abcm,abycbbwyc,gbcyybNA,abcm,abycbbwyc,gbcyybNA.', '2023-02-02', '2023-02-22', 41, 50, 'abcm,abycbbwyc,gbcyybNA,abcm,abycbbwyc,gbcyybNA,abcm,abycbbwyc,gbcyybNA.');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `qr` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `username`, `mobile`, `gender`, `dob`, `qr`) VALUES
(1, 'varfs', 452166126, 'male', '2023-02-01', 'nygqbq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
