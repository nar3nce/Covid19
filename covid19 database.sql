-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 09:01 AM
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
-- Database: `covid19`
--
CREATE DATABASE IF NOT EXISTS `covid19` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `covid19`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_fullname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fullname`, `admin_email`, `admin_password`) VALUES
(1, 'cherilyn cruzz', 'admin@email', 'admin@email');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'divine crus', 'che@email', 'che@email');

-- --------------------------------------------------------

--
-- Table structure for table `user_appointments`
--

CREATE TABLE `user_appointments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date_submitted` varchar(255) NOT NULL,
  `time_sched` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `radio1` varchar(255) NOT NULL,
  `radio2` varchar(255) NOT NULL,
  `radio3` varchar(255) NOT NULL,
  `radio4` varchar(255) NOT NULL,
  `radio5` varchar(255) NOT NULL,
  `radio6` varchar(255) NOT NULL,
  `radio7` varchar(255) NOT NULL,
  `radio8` varchar(255) NOT NULL,
  `radio9` varchar(255) NOT NULL,
  `radio10` varchar(255) NOT NULL,
  `radio11` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_appointments`
--

INSERT INTO `user_appointments` (`id`, `user_id`, `date_submitted`, `time_sched`, `nature`, `purpose`, `department`, `date`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `radio8`, `radio9`, `radio10`, `radio11`, `status`) VALUES
(1, 1, 'a', '8am - 11am', 'Official', 'secret', 'cs', '2021-03-22', 'yes1', 'no2', 'no3', 'no4', 'no5', 'no6', 'no7', 'no8', 'no9', 'no10', 'no11', 'Accepted'),
(2, 1, 'a', '1pm - 5pm', 'Personal', '2', 'ba', '2021-03-22', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Accepted'),
(3, 1, 'a', '8am - 11am', 'Personal', 'ttae', 'cs', '2021-03-21', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `user_attachment`
--

CREATE TABLE `user_attachment` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `attachment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_emergency_contact`
--

CREATE TABLE `user_emergency_contact` (
  `id` int(255) NOT NULL,
  `e_user_id` int(255) NOT NULL,
  `e_fullname` varchar(255) NOT NULL,
  `e_address` varchar(255) NOT NULL,
  `e_phone` varchar(255) NOT NULL,
  `e_relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_emergency_contact`
--

INSERT INTO `user_emergency_contact` (`id`, `e_user_id`, `e_fullname`, `e_address`, `e_phone`, `e_relationship`) VALUES
(1, 1, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user_informarion`
--

CREATE TABLE `user_informarion` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_informarion`
--

INSERT INTO `user_informarion` (`id`, `user_id`, `address`, `phone`, `gender`, `age`, `citizenship`) VALUES
(1, 1, ' ', ' ', ' ', ' ', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_appointments`
--
ALTER TABLE `user_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attachment`
--
ALTER TABLE `user_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_emergency_contact`
--
ALTER TABLE `user_emergency_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_informarion`
--
ALTER TABLE `user_informarion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_appointments`
--
ALTER TABLE `user_appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_attachment`
--
ALTER TABLE `user_attachment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_emergency_contact`
--
ALTER TABLE `user_emergency_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_informarion`
--
ALTER TABLE `user_informarion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
