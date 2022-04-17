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
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `age` int(25) NOT NULL,
  `farmertype` varchar(25) NOT NULL,
  `farmerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`username`, `email`, `age`, `farmertype`, `farmerid`) VALUES
('e', 'e@gmail.com', 4, 'u', 1),
('niva', 'nusaiba.ahmed@g.bracu.ac.', 68, 'haga ', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`username`),
  ADD KEY `farmerid` (`farmerid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`farmerid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
