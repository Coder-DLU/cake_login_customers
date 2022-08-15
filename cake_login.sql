-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 11:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `del_flg` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companys`
--

INSERT INTO `companys` (`id`, `login_id`, `password`, `del_flg`) VALUES
(1, 'hung01', '$2y$10$QYOUDru0D1hMm9oHwMdn1OmDnNiViyf4aEAh3F/jqtkmGqK0u5umC', 0),
(2, 'hung02', '$2y$10$LsicOPZviugGoE4R1xV9gOI1AVtKHYHIMcy4bnEO15JUj0zG6zgvq', 0),
(3, 'hung03', '$2y$10$dFH4m3QdEtwKCDgTTHd0W.AArSlLnguEk73406WIEH3v0d5AY3LgS', 0),
(4, 'hung04', '$2y$10$t4YHS.Dh3N2y5o/Gg0fRlevti8u8fwYsqKxyR8Zpcq5AS5W.0C0cG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `delete_flg` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `avatar_url`, `first_name`, `last_name`, `phone_number`, `email`, `address`, `status`, `created_by`, `updated`, `updated_by`, `seller_id`, `delete_flg`) VALUES
(1, '405129.png', 'Lê Sỹ', 'Hùng ', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 15:02:03', '2', 1, 0),
(2, 'download.png', 'Lê Sỹ', ' B', '0842415838', 'hungls12@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 13:48:40', '2', 2, 0),
(3, '405129.png', 'Lê Sỹ', ' B', '0842415837', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 0, '2', '2022-08-11 15:02:09', '2', 2, 0),
(4, 'download.png', 'Lê Sỹ', 'Hùng', '0842415839', 'hungls12@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 15:01:47', '2', 2, 0),
(5, 'download.jpg', 'Đặng Ngọc ', 'Thạch', '0842415836', 'tstorecontact@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 15:01:56', '2', 3, 0),
(6, 'download.jpg', 'Lê Sỹ', 'Hùng ', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 15:01:51', '2', 1, 0),
(15, '405129.png', 'Lê Sỹ', 'Hùng 13234', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '1', '2022-08-11 13:51:13', '1', 1, 0),
(16, '405129.png', 'Lê Sỹ', 'Hùng 66666', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '1', '2022-08-11 13:51:19', '1', 1, 0),
(17, '405129.png', 'Lê Sỹ', 'Hùng 777', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '1', '2022-08-11 13:52:26', '1', 1, 0),
(19, 'download.jpg', 'Lê Sỹ', 'Hùng  AAAA', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 14:27:14', '2', 1, 1),
(22, '405129.png', 'Lê ', 'Lợi', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 16:36:25', '2', 1, 0),
(23, '405129.png', 'Lê ', 'Hải', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 16:44:58', '2', 1, 0),
(24, '405129.png', 'Lê  Thanh', 'Hải ', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-11 16:45:19', '2', 1, 0),
(25, '405129.png', 'Lê  Thanh', 'Thanh', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 0, '2', '2022-08-11 16:47:50', '2', 1, 0),
(26, '405129.png', 'Lê  Thanh', 'Long', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 0, '2', '2022-08-12 08:47:07', '2', 1, 0),
(27, '405129.png', 'Lê  Thanh', 'Hải ', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-12 09:53:14', '2', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `seller_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`seller_id`, `name`, `status`) VALUES
(1, 'seller 1', 1),
(2, 'seller 2', 1),
(3, 'seller 3', 1),
(4, 'seller 4', 1),
(5, 'seller 5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey.access_log`
--

CREATE TABLE `survey.access_log` (
  `SYAIN_CD` varchar(255) NOT NULL,
  `SELLER_ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `FUNCTION_ID` int(11) NOT NULL,
  `ACCESS_LOG_LEVEL` int(11) NOT NULL,
  `ACCESS_DT` varchar(255) NOT NULL,
  `YYYYMM` date NOT NULL,
  `HOUR` date NOT NULL,
  `WEEKDAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_myKey` (`seller_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companys`
--
ALTER TABLE `companys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `FK_myKey` FOREIGN KEY (`seller_id`) REFERENCES `sales` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
