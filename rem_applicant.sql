-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 01:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unilorin`
--

-- --------------------------------------------------------

--
-- Table structure for table `rem_applicant`
--

CREATE TABLE `rem_applicant` (
  `id` int(50) NOT NULL,
  `Surname` text NOT NULL,
  `Firstname` text NOT NULL,
  `Middlename` text NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `confirmPassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Remedial application registration table';

--
-- Dumping data for table `rem_applicant`
--

INSERT INTO `rem_applicant` (`id`, `Surname`, `Firstname`, `Middlename`, `Phone`, `EmailAddress`, `Password`, `confirmPassword`) VALUES
(1, 'Rasheed', 'Mikail', 'Abiodun', '07030403416', 'aalole25@gmail.com', 'aalole@25', 'aalole@25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rem_applicant`
--
ALTER TABLE `rem_applicant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rem_applicant`
--
ALTER TABLE `rem_applicant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
