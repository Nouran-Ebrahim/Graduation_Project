-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 مارس 2022 الساعة 23:27
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
-- بنية الجدول `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `Admin_Name` char(25) NOT NULL,
  `Admin_Password` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `admin_info`
--

INSERT INTO `admin_info` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'admin', 'autonet');

-- --------------------------------------------------------

--
-- بنية الجدول `routers`
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
-- إرجاع أو استيراد بيانات الجدول `routers`
--

INSERT INTO `routers` (`id`, `Hostname`, `Enable_pass`, `Welcom_mess`, `Console_pass`, `Telnet_pass`, `Interface_loopback`, `Mask`, `Ip`) VALUES
(1, 'Electrical_Building', ' cisco', ' Welcome to Electrical Building', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 10.10.10.2 '),
(2, 'Mechanical_Building', ' cisco', ' hello to Mechanical_Building', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 20.10.10.2 '),
(3, 'Preparatory_Building', ' cisco', ' hello to preparatory_Building', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 40.10.10.2 '),
(4, 'Administration_Building', ' cisco', ' hello to Administration_Building', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 30.10.10.2 '),
(5, 'Main_Router', ' cisco', ' hello to main router', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 50.10.10.2 ');

-- --------------------------------------------------------

--
-- بنية الجدول `switches`
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
-- إرجاع أو استيراد بيانات الجدول `switches`
--

INSERT INTO `switches` (`id`, `Hostname`, `Enable_pass`, `Welcom_mess`, `Console_pass`, `Telnet_pass`, `Interface_vlan`, `Mask`, `Ip`) VALUES
(1, '1st_floor', 'cisco', ' hello to 3rd_floor', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 24.1.1.2 '),
(2, '2nd_floor', ' cisco', ' hello to 2nd_floor', 'cisco', ' cisco', '1', '255.255.255.0 ', ' 13.1.1.2 '),
(3, '3rd_floor', 'cisco', 'hello to 3rd_floor', 'cisco', 'cisco', '1', '255.255.255.0', '14.1.1.2'),
(4, '1st_floor', 'cisco', 'hello to 1st_floor', 'cisco', 'cisco', '1', '255.255.255.0', '22.1.1.2'),
(5, '2nd_floor', 'cisco', 'hello to 2nd_floor', 'cisco', 'cisco', '1', '255.255.255.0 ', ' 23.1.1.2 '),
(6, '3rd_floor', 'cisco', 'hello to 3rd_floor', 'cisco', 'cisco', '1', '255.255.255.0', '24.1.1.2'),
(7, '1st_floor', 'cisco', 'hello to 1st_floor', 'cisco', 'cisco', '1', '255.255.255.0', '42.1.1.2'),
(8, '2nd_floor', 'cisco', 'hello to 2nd_floor', 'cisco', 'cisco', '1', '255.255.255.0', '43.1.1.2'),
(9, '3rd_floor', 'cisco', 'hello to 3rd_floor\r\n', 'cisco', 'cisco', '1', '255.255.255.0', '44.1.1.2'),
(10, '1st_floor', 'cisco', 'hello to 1st_floor', 'cisco', 'cisco', '1', '255.255.255.0', '32.1.1.2'),
(11, '2nd_floor', 'cisco', 'hello to 2nd_floor', 'cisco', 'cisco', '1', '255.255.255.0', '33.1.1.2'),
(12, '3rd_floor', 'cisco', 'hello to 3rd floor', 'cisco', 'cisco', '1', '255.255.255.0', '34.1.1.2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `switches`
--
ALTER TABLE `switches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
