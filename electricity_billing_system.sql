-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 02:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricity_billing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliance`
--

CREATE TABLE `appliance` (
  `houseNO` int(100) DEFAULT NULL,
  `applianceID` int(100) DEFAULT NULL,
  `appliancename` varchar(40) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL,
  `Rating_watts` int(100) DEFAULT NULL,
  `hours_used_per_days` varchar(30) DEFAULT NULL,
  `kilowattperhour_KWH` varchar(30) DEFAULT NULL,
  `Numberofdays` int(10) DEFAULT NULL,
  `consumption` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appliance`
--

INSERT INTO `appliance` (`houseNO`, `applianceID`, `appliancename`, `Quantity`, `Rating_watts`, `hours_used_per_days`, `kilowattperhour_KWH`, `Numberofdays`, `consumption`) VALUES
(67, 664, 'Nairobi', 15, 0, '25', '59865', 21, '84985'),
(67, 0, '', 0, 0, '', '', 0, '84985'),
(67, 0, '', 0, 0, '', '', 0, '84985'),
(67, 0, '', 0, 0, '', '', 0, '84985');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `houseNO` int(100) DEFAULT NULL,
  `consumption` varchar(30) DEFAULT NULL,
  `meter_reading` varchar(30) DEFAULT NULL,
  `total_bills` varchar(30) DEFAULT NULL,
  `final_amount` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`houseNO`, `consumption`, `meter_reading`, `total_bills`, `final_amount`) VALUES
(67, '84985', '536', '9563', '786354');

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `houseNO` int(100) DEFAULT NULL,
  `Occupantname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`houseNO`, `Occupantname`) VALUES
(67, '6768'),
(67, ''),
(67, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `user_name`, `user_type`, `password`, `location`) VALUES
('David', 'Dut', 'dutdavid7@gmail.com', 'daudi', 'admin', 'ec2c4mjGAb58ntP', 'Kenya'),
('Dut', '', NULL, 'Dutdavid', NULL, 'ec2c4mjGAb58ntP', 'Kenya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
