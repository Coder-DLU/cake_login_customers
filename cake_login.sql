-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 12:18 PM
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
(1, '405129.png', 'Lê Sỹ', 'Hùng', '0842415839', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:44:56', '2', 1, 0),
(2, 'download.jpg', 'Lê Sỹ', 'Hùng', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:45:38', '2', 1, 0),
(3, 'download.jpg', 'Lê', 'Hùng', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:45:54', '2', 1, 0),
(4, 'download.jpg', 'Lê Sỹ', 'Hùng', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:46:04', '2', 2, 0),
(5, 'download.jpg', 'Lê Sỹ', 'Hùng', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:46:17', '2', 3, 0),
(6, 'download.png', 'Lê Sỹ', 'A', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:46:29', '2', 3, 0),
(7, 'download.png', 'Lê Sỹ', 'A', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:46:47', '2', 3, 0),
(8, 'download.png', ' Sỹ', 'Hùng', '0842415838', 'hunglsctk42@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:46:59', '2', 4, 0),
(9, 'download.png', ' Sỹ', 'Hùng', '0842415838', 'hungls12@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:47:36', '2', 2, 0),
(10, 'download.png', 'Trân', 'Trân', '0842415838', 'hungls12@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:47:59', '2', 2, 0),
(11, '405129.png', 'Trân ', 'Trân A', '0842415838', 'hungls12@gmail.com', '65/5 Thông thiên học P2 TP Đà Lạt', 1, '2', '2022-08-16 11:48:23', '2', 2, 0);

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
-- Table structure for table `surveyaccesslog`
--

CREATE TABLE `surveyaccesslog` (
  `id` int(11) NOT NULL,
  `SYAIN_CD` int(11) DEFAULT NULL,
  `SELLER_ID` varchar(255) DEFAULT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL,
  `FUNCTION_ID` varchar(255) NOT NULL,
  `ACCESS_LOG_LEVEL` enum('INFO','FAILED','SUCCESS','') NOT NULL,
  `ACCESS_DT` datetime NOT NULL,
  `YYYYMM` varchar(255) NOT NULL,
  `HOUR` int(11) NOT NULL,
  `WEEKDAY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surveyaccesslog`
--

INSERT INTO `surveyaccesslog` (`id`, `SYAIN_CD`, `SELLER_ID`, `CUSTOMER_ID`, `FUNCTION_ID`, `ACCESS_LOG_LEVEL`, `ACCESS_DT`, `YYYYMM`, `HOUR`, `WEEKDAY`) VALUES
(1, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:41:24', '2022-08', 11, 2),
(2, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:43:18', '2022-08', 11, 2),
(3, 2, 'hung02', 31, 'S00005', 'SUCCESS', '2022-08-16 11:43:39', '2022-08', 11, 2),
(4, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:43:39', '2022-08', 11, 2),
(5, 2, 'hung02', 32, 'S00005', 'SUCCESS', '2022-08-16 11:43:52', '2022-08', 11, 2),
(6, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:43:52', '2022-08', 11, 2),
(7, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:44:54', '2022-08', 11, 2),
(8, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:45:13', '2022-08', 11, 2),
(9, 2, 'hung02', 2, 'S00005', 'SUCCESS', '2022-08-16 11:45:48', '2022-08', 11, 2),
(10, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:45:49', '2022-08', 11, 2),
(11, 2, 'hung02', 3, 'S00005', 'SUCCESS', '2022-08-16 11:46:00', '2022-08', 11, 2),
(12, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:46:00', '2022-08', 11, 2),
(13, 2, 'hung02', 4, 'S00005', 'SUCCESS', '2022-08-16 11:46:12', '2022-08', 11, 2),
(14, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:46:12', '2022-08', 11, 2),
(15, 2, 'hung02', 5, 'S00005', 'SUCCESS', '2022-08-16 11:46:24', '2022-08', 11, 2),
(16, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:46:25', '2022-08', 11, 2),
(17, 2, 'hung02', 6, 'S00005', 'SUCCESS', '2022-08-16 11:46:39', '2022-08', 11, 2),
(18, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:46:40', '2022-08', 11, 2),
(19, 2, 'hung02', 7, 'S00005', 'SUCCESS', '2022-08-16 11:46:53', '2022-08', 11, 2),
(20, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:46:54', '2022-08', 11, 2),
(21, 2, 'hung02', 8, 'S00005', 'SUCCESS', '2022-08-16 11:47:28', '2022-08', 11, 2),
(22, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:47:28', '2022-08', 11, 2),
(23, 2, 'hung02', 9, 'S00005', 'SUCCESS', '2022-08-16 11:47:50', '2022-08', 11, 2),
(24, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:47:50', '2022-08', 11, 2),
(25, 2, 'hung02', 10, 'S00005', 'SUCCESS', '2022-08-16 11:48:11', '2022-08', 11, 2),
(26, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:48:12', '2022-08', 11, 2),
(27, 2, 'hung02', 11, 'S00005', 'SUCCESS', '2022-08-16 11:48:36', '2022-08', 11, 2),
(28, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:48:36', '2022-08', 11, 2),
(29, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:48:40', '2022-08', 11, 2),
(30, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 11:48:44', '2022-08', 11, 2),
(31, NULL, NULL, NULL, 'S00001', 'INFO', '2022-08-16 14:10:56', '2022-08', 14, 2),
(32, 2, 'hung02', NULL, 'S00001', 'SUCCESS', '2022-08-16 14:10:56', '2022-08', 14, 2),
(33, NULL, NULL, NULL, 'S00001', 'INFO', '2022-08-16 15:34:33', '2022-08', 15, 2),
(34, 2, 'hung02', NULL, 'S00001', 'SUCCESS', '2022-08-16 15:34:33', '2022-08', 15, 2),
(35, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 15:34:37', '2022-08', 15, 2),
(36, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 15:35:17', '2022-08', 15, 2),
(37, NULL, NULL, NULL, 'S00001', 'INFO', '2022-08-16 16:58:51', '2022-08', 16, 2),
(38, 2, 'hung02', NULL, 'S00001', 'SUCCESS', '2022-08-16 16:58:51', '2022-08', 16, 2),
(39, NULL, NULL, NULL, 'S00001', 'INFO', '2022-08-16 17:14:28', '2022-08', 17, 2),
(40, 2, 'hung02', NULL, 'S00001', 'SUCCESS', '2022-08-16 17:14:28', '2022-08', 17, 2),
(41, 2, 'hung02', NULL, 'SVYF00004', 'INFO', '2022-08-16 17:14:28', '2022-08', 17, 2);

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
-- Indexes for table `surveyaccesslog`
--
ALTER TABLE `surveyaccesslog`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveyaccesslog`
--
ALTER TABLE `surveyaccesslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
