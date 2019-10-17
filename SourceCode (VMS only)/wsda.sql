-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 01:16 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsda`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(11) NOT NULL,
  `cFirstName` varchar(50) NOT NULL,
  `cSurname` varchar(50) NOT NULL,
  `cContactNo` varchar(10) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Guest` tinyint(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `entryDateTime` varchar(25) NOT NULL,
  `exitDateTime` varchar(25) NOT NULL,
  `qrCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`id`, `cFirstName`, `cSurname`, `cContactNo`, `companyName`, `email`, `Guest`, `password`, `entryDateTime`, `exitDateTime`, `qrCode`) VALUES
(2, 'bob', 'sure', '1234567890', 'nope', '', 1, '', '2019-10-07 03:34:26', '', ''),
(3, 'GREG', 'wong', '1234567890', 'EPA', '', 1, '', '2019-10-07 03:39:17', '', ''),
(4, 'toilet', 'guy', '1234567890', 'mich', '', 1, '', '2019-10-07 03:41:29', '2019-10-07 03:41:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `vFirstName` varchar(50) NOT NULL,
  `vSurname` varchar(50) NOT NULL,
  `vContactNo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Guest` tinyint(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `entryDateTime` varchar(25) NOT NULL,
  `exitDateTime` varchar(25) NOT NULL,
  `completedProcess` tinyint(1) NOT NULL,
  `qrCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `vFirstName`, `vSurname`, `vContactNo`, `email`, `Guest`, `password`, `entryDateTime`, `exitDateTime`, `completedProcess`, `qrCode`) VALUES
(1, 'jeffrey', 'wu', '1234567890', '', 0, '', '2019-10-16 04:50:22', '2019-10-17 01:07:08', 0, ''),
(2, 'jeffrey', 'wu', '1234567890', '', 0, '', '2019-10-17 01:06:31', '2019-10-17 01:07:08', 0, ''),
(3, 'Name', 'surname', '1234567890', '', 0, '', '2019-10-17 01:47:27', '2019-10-17 01:48:07', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
