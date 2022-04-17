-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 04:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `suggested crops` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `no.` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`suggested crops`, `location`, `no.`) VALUES
('Dhaka', 'Jute', 1),
('Sylhet', 'Tea', 2),
('Chittagong', 'Tea', 3),
('Rajshahi', 'Rice', 4),
('Rangpur', 'Wheat', 5),
('Barisal', 'Rice', 6),
('Khulna', 'Cotton', 7),
('Rajshahi', 'Corn', 8),
('Chittagong', 'Maize', 9),
('Sylhet', 'Rice', 10),
('Dinajpur', 'Rice', 11),
('Tangail', 'Wheat', 12),
('Bogra', 'Wheat', 13),
('Rajshahi', 'Mustard', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
