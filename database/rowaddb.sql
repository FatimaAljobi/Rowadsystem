-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 09:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rowaddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpass`
--

CREATE TABLE `adminpass` (
  `username` varchar(50) NOT NULL,
  `passcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminpass`
--

INSERT INTO `adminpass` (`username`, `passcode`) VALUES
('rowad@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `activity` varchar(30) NOT NULL,
  `confirmation` varchar(10) NOT NULL DEFAULT 'not con',
  `mobilenum` varchar(9) NOT NULL,
  `paymentMethod` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `pname`, `activity`, `confirmation`, `mobilenum`, `paymentMethod`, `created_at`) VALUES
(1, 'Amira Bumadyan Kahtane', 'Code 1', 'con', '214748364', 2, '2022-08-10 20:58:16'),
(2, 'Amira Bumadyan Kahtaneeee', 'Code 1', 'con', '738910055', 2, '2022-08-10 21:00:37'),
(3, 'Amiraaa Bumadyan Kahtanssss', 'Code 1', 'con', '123456700', 2, '2022-08-10 21:01:06'),
(4, 'Asmaa Bumadyan Kahtan', 'Code 1', 'con', '123456711', 2, '2022-08-10 21:01:55'),
(7, 'fatima mohammed', 'Code 1', 'con', '777777777', 2, '2022-08-10 21:06:20'),
(8, 'ahmed', 'aaa', 'not con', '777777777', 2, '2022-08-15 21:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `id` int(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `activity` varchar(30) NOT NULL,
  `mobilenum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`id`, `pname`, `activity`, `mobilenum`) VALUES
(1, 'Ashwaq Moh', 'aaa', 777777777),
(2, 'فاطمة محمد', 'bsb', 7777777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
