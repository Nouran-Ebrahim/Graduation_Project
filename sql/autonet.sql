-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 01:31 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autonet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `Admin_Name` char(25) NOT NULL,
  `Admin_Password` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'admin', 'autonet');

-- --------------------------------------------------------

--
-- Table structure for table `routers`
--

CREATE TABLE `routers` (
  `id` int(11) NOT NULL,
  `Hostname` varchar(100) NOT NULL,
  `Enable_pass` varchar(100) NOT NULL,
  `Welcom_mess` text NOT NULL,
  `Console_pass` varchar(100) NOT NULL,
  `Telnet_pass` varchar(100) NOT NULL,
  `Interface_loopback` varchar(100) NOT NULL,
  `Mask` varchar(100) NOT NULL,
  `Ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routers`
--

INSERT INTO `routers` (`id`, `Hostname`, `Enable_pass`, `Welcom_mess`, `Console_pass`, `Telnet_pass`, `Interface_loopback`, `Mask`, `Ip`) VALUES
(1, 'router1', '1.25.22', 'good mooring', '2.258.11', '125.588', '12.558', '1.25814', '1.258.2558'),
(2, 'router2', '1.255882.5', 'hiii', '101448.2558', '1.255.2255', '1.22552', '1222582', '115522');

-- --------------------------------------------------------

--
-- Table structure for table `switches`
--

CREATE TABLE `switches` (
  `id` int(11) NOT NULL,
  `Hostname` varchar(100) NOT NULL,
  `Enable_pass` varchar(100) NOT NULL,
  `Welcom_mess` text NOT NULL,
  `Console_pass` varchar(100) NOT NULL,
  `Telnet_pass` varchar(100) NOT NULL,
  `Interface_vlan` varchar(100) NOT NULL,
  `Mask` varchar(100) NOT NULL,
  `Ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routers`
--
ALTER TABLE `routers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switches`
--
ALTER TABLE `switches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `routers`
--
ALTER TABLE `routers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `switches`
--
ALTER TABLE `switches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
