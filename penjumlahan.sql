-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:57 AM
-- Server version: 10.4.11-MariaDB
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
-- Database: `penjumlahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jumlah`
--

CREATE TABLE `jumlah` (
  `id` int(3) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlah`
--

INSERT INTO `jumlah` (`id`, `a`, `b`, `c`, `ket`) VALUES
(324, 1, 2, 3, 'D'),
(325, 2, 3, 5, 'C'),
(326, 3, 5, 8, 'A'),
(327, 5, 8, 13, 'A'),
(328, 8, 13, 21, 'A'),
(329, 13, 21, 34, 'A'),
(330, 21, 34, 55, 'A'),
(331, 34, 55, 89, 'A'),
(332, 55, 89, 144, 'A'),
(333, 89, 144, 233, 'A'),
(334, 144, 233, 377, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `jumlahbiasa`
--

CREATE TABLE `jumlahbiasa` (
  `id` int(11) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jumlahbiasa`
--

INSERT INTO `jumlahbiasa` (`id`, `a`, `b`, `c`, `ket`) VALUES
(5, 1, 2, 3, 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jumlah`
--
ALTER TABLE `jumlah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlahbiasa`
--
ALTER TABLE `jumlahbiasa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jumlah`
--
ALTER TABLE `jumlah`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `jumlahbiasa`
--
ALTER TABLE `jumlahbiasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
