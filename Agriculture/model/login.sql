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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL DEFAULT 'user',
  `email` varchar(25) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `email`, `id`) VALUES
('admin', '1234', 'admin', 'admin@gmail.com', 1),
('alexa', '5678', 'user', 'user@gmail.com', 2),
('niva', 'poo', 'user', 'nusaibaahmed4871@gmail.co', 10),
('nusich', 'ikk', 'user', 'userh@gmail.com', 11),
('nusichyj', 'ujj', 'user', 'userhgj@gmail.com', 12),
('', '', 'user', '', 13),
('niva', '12', 'user', 'thr@GMAIL.COM', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
