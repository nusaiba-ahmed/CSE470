-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 04:24 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usernameadmin` varchar(25) NOT NULL DEFAULT 'admin',
  `emailadmin` varchar(25) NOT NULL,
  `passwordadmin` varchar(25) NOT NULL,
  `adminid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usernameadmin`, `emailadmin`, `passwordadmin`, `adminid`) VALUES
('admin', '', '', ''),
('admin', '', '', ''),
('[value-1]', '[value-2]', '[value-3]', '[value-4]'),
('admin', '', '', ''),
('admin', '', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `cropname` text NOT NULL,
  `cropquantity` int(11) NOT NULL,
  `dateharvest` date NOT NULL,
  `croptype` varchar(25) NOT NULL,
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `expdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`cropname`, `cropquantity`, `dateharvest`, `croptype`, `id`, `uid`, `expdate`) VALUES
('MANGO', 7006, '2022-04-06', 'FRUIT', 2, 1, NULL),
('MANGO', 233, '2022-04-01', 'fruit', 2, 2, NULL);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`farmerid`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
