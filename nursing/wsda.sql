-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2019 at 08:30 AM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theflashdemo_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin'),
(2, 'admin1@admin.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `patient_name` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `patient_name`, `date`, `time`) VALUES
(3, 'Faizan', 'faizy@gmail.com', 'patient1', '2019-10-16', '00:00:00'),
(2, 'Faizan', 'faizy@gmail.com', 'patient1', '2019-10-15', '00:00:00'),
(4, 'asd', 'asd@yahoo.com', 'patient1', '2019-10-15', '00:00:00'),
(5, 'aaa', 'aaa@aaa.com', 'alpga', '2017-12-31', '00:00:00'),
(7, 'aaa', 'aaa@aaa.com', 'patient1 patient1', '2019-10-05', '22:20:00'),
(8, 'anish', 'anish@gmail.com', 'patient2 patient2', '2019-10-15', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `changecontractor`
--

CREATE TABLE `changecontractor` (
  `id` int(25) NOT NULL,
  `con_id` int(25) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(20) NOT NULL,
  `c_lname` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `c_job_type` varchar(20) NOT NULL,
  `c_hiring_date` date NOT NULL,
  `c_hiring_time` time(6) NOT NULL,
  `salary` int(20) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`c_id`, `c_fname`, `c_lname`, `c_email`, `c_password`, `c_job_type`, `c_hiring_date`, `c_hiring_time`, `salary`, `type`) VALUES
(1, 'ok done', 'abc', 'demo@demo.com', 'test', 'plumber', '2019-05-04', '02:01:00.000000', 20000, 1),
(5, 'asd', 'fgh', 'asd@gmail.com', 'asdfgh', 'cook', '2019-10-14', '16:00:00.000000', 2000, 1),
(6, 'asd', 'asdn', 'as@as.com', 'nkn', 'xs', '2019-10-14', '14:01:00.000000', 31213123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contractor_history`
--

CREATE TABLE `contractor_history` (
  `id` int(11) NOT NULL,
  `c_id` int(20) NOT NULL,
  `timein` datetime(6) DEFAULT NULL,
  `timeout` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_history`
--

INSERT INTO `contractor_history` (`id`, `c_id`, `timein`, `timeout`) VALUES
(1, 1, '2019-10-02 00:00:00.000000', '2019-10-24 05:09:00.000000'),
(4, 1, '2019-10-16 06:20:33.000000', '2019-10-09 08:19:23.000000'),
(6, 1, '2019-10-09 06:55:36.000000', '2019-10-09 08:19:47.000000'),
(7, 1, '2019-10-09 09:17:56.000000', '2019-10-09 09:21:56.000000'),
(9, 1, '2019-10-09 09:23:51.000000', '2019-10-09 09:24:13.000000'),
(27, 5, '2019-10-14 05:00:10.000000', '2019-10-14 05:36:05.000000'),
(32, 1, '2019-10-14 05:39:00.000000', '2019-10-14 05:39:24.000000'),
(33, 5, '2019-10-14 05:39:41.000000', '2019-10-14 05:41:43.000000'),
(34, 5, '2019-10-14 05:40:32.000000', '2019-10-14 05:43:12.000000'),
(38, 1, '2019-10-14 06:01:21.000000', '2019-10-14 07:42:34.000000'),
(39, 1, '2019-10-14 07:50:11.000000', '2019-10-14 07:50:37.000000'),
(42, 1, '2019-10-14 07:53:07.000000', '2019-10-14 07:53:58.000000'),
(44, 5, '2019-10-14 07:56:53.000000', '2019-10-14 07:57:21.000000'),
(45, 1, '2019-10-14 07:58:01.000000', '2019-10-14 07:58:43.000000'),
(47, 1, '2019-10-14 07:58:58.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNumber` bigint(12) NOT NULL,
  `RegistrationDate` date NOT NULL,
  `City` varchar(50) NOT NULL,
  `nextkin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `FirstName`, `LastName`, `Age`, `Gender`, `PhoneNumber`, `RegistrationDate`, `City`, `nextkin`) VALUES
(7, 'patient2', 'patient2', 43, 'male', 5664433443, '2019-10-10', 'gfdgs', 'fgg'),
(10, 'ABC', 'XYZ', 29, 'male', 1712123, '2019-10-14', 'LHR', 'CCVV');

-- --------------------------------------------------------

--
-- Table structure for table `patient_visit`
--

CREATE TABLE `patient_visit` (
  `id` int(20) NOT NULL,
  `v_id` int(20) NOT NULL,
  `incomingtime` datetime(6) DEFAULT NULL,
  `outgoingtime` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_visit`
--

INSERT INTO `patient_visit` (`id`, `v_id`, `incomingtime`, `outgoingtime`) VALUES
(25, 26, '2019-10-14 07:01:22.000000', '2019-10-14 07:56:06.000000'),
(27, 26, '2019-10-14 07:56:46.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`v_id`, `v_name`, `email`, `password`, `Id`, `type`) VALUES
(26, 'zzzzz', 'zzzzz@z.com', 'zzzzz', 7, 0),
(30, 'anish', 'anish@gmail.com', 'anish30', 7, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `changecontractor`
--
ALTER TABLE `changecontractor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message` (`message`),
  ADD KEY `con_id` (`con_id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contractor_history`
--
ALTER TABLE `contractor_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contractor_history` (`c_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patient_visit`
--
ALTER TABLE `patient_visit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_visitor` (`v_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `changecontractor`
--
ALTER TABLE `changecontractor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contractor_history`
--
ALTER TABLE `contractor_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_visit`
--
ALTER TABLE `patient_visit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `changecontractor`
--
ALTER TABLE `changecontractor`
  ADD CONSTRAINT `contractor_fk` FOREIGN KEY (`con_id`) REFERENCES `contractor` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contractor_history`
--
ALTER TABLE `contractor_history`
  ADD CONSTRAINT `fk_contractor_history` FOREIGN KEY (`c_id`) REFERENCES `contractor` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_visit`
--
ALTER TABLE `patient_visit`
  ADD CONSTRAINT `fk_visitor` FOREIGN KEY (`v_id`) REFERENCES `visitor` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `fk_patientid` FOREIGN KEY (`Id`) REFERENCES `patient` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
