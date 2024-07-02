-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `utype` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `utype`) VALUES
(1, 'admin', 'password', 0),
(2, 'ananduv2', 'pass', 1),
(3, 'revathy', 'revathy', 1),
(4, 'anjali', 'anjali', 1),
(5, 'gopika', 'gopika', 1),
(6, 'achuth', 'achuth', 1),
(7, 'shahansha', 'shahansha', 1),
(8, 'nandu', 'nandu', 1),
(9, 'vivek', 'vivek', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nmcm`
--

CREATE TABLE `nmcm` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nmcm`
--

INSERT INTO `nmcm` (`id`, `uid`, `status`) VALUES
(10, 2, 0),
(11, 3, 2),
(12, 4, -1),
(13, 5, 2),
(14, 6, -1),
(15, 7, 1),
(16, 8, 1),
(17, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `income` int(10) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `department`, `mobile`, `income`, `cgpa`) VALUES
(1, 'admin', 'admin', 'admin', 123, 123),
(2, 'Anandu', 'MCA', '8921234138', 100000, 7.28),
(3, 'Reavthy', 'MCA', '8281545658', 100000, 8),
(4, 'Anjali', 'MCA', '9446724953', 50000, 7.8),
(5, 'Gopika', 'MCA', '8921737271', 75000, 7),
(6, 'Achuth', 'MCA', '9539177118', 100000, 7),
(7, 'Shahan Sha', 'MCA', '7559840736', 100000, 7.2),
(8, 'Nandu', 'MCA', '8943308937', 100000, 8.1),
(9, 'Vivek Manu', 'MCA', '7907062365', 100000, 7.6);

-- --------------------------------------------------------

--
-- Table structure for table `tmcm`
--

CREATE TABLE `tmcm` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmcm`
--

INSERT INTO `tmcm` (`id`, `uid`, `status`) VALUES
(3, 2, 2),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, -1),
(8, 7, 2),
(9, 8, -1),
(10, 9, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nmcm`
--
ALTER TABLE `nmcm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmcm`
--
ALTER TABLE `tmcm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nmcm`
--
ALTER TABLE `nmcm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tmcm`
--
ALTER TABLE `tmcm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
