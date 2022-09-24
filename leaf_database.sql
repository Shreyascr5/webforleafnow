-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `email`, `phone`, `password`) VALUES
(1, 'prajna', 'g', 'pg@gmail.com', 0, 'cook'),
(21, 'prath', 'gb', 'prath@gmail.com', 9876543210, 'cookie'),
(22, 'pink', 'black', 'pb@gmail.com', 9876543210, 'cookie@123'),
(24, 'prajna>>>', 'g', 'pg@gmail.com', 9876543202, 'cookie');

-- --------------------------------------------------------

--
-- Table structure for table `submit_offer`
--

CREATE TABLE `submit_offer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `plantName` varchar(20) NOT NULL,
  `scientificName` varchar(50) NOT NULL,
  `uses` varchar(100) NOT NULL,
  `typeofplant` varchar(50) NOT NULL,
  `lifespan` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_offer`
--

INSERT INTO `submit_offer` (`id`, `firstName`, `lastName`, `email`, `phone`, `plantName`, `scientificName`, `uses`, `typeofplant`, `lifespan`, `location`) VALUES
(1, '', '', '', 0, 'Hibiscus', 'hibiscus..', 'Decorative', 'Shrub', 'annual', 'tropical'),
(2, '', '', '', 0, 'Hibiscus', 'hibiscus..', 'Decorative', 'Shrub', 'annual', 'tropical'),
(3, '', '', '', 0, 'rose', 'rose', 'Decorative', 'Shrub', 'annual', 'tropical'),
(4, '', '', '', 0, 'rose', 'rose', 'Decorative', 'Shrub', 'annual', 'tropical'),
(5, '', '', '', 0, 'rose', 'rose', 'Decorative', 'Shrub', 'annual', 'tropical'),
(6, '', '', '', 0, 'vinca', 'vinca rosia', 'Decorative', 'Shrub', 'notsure', 'tropical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_offer`
--
ALTER TABLE `submit_offer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `submit_offer`
--
ALTER TABLE `submit_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
