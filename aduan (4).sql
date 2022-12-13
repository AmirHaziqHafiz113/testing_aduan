-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan_tb`
--

CREATE TABLE `aduan_tb` (
  `Aduan_ID` int(50) NOT NULL,
  `Category_ID` int(50) DEFAULT NULL,
  `Status_Desc` varchar(255) DEFAULT NULL,
  `Nama_Pengadu` varchar(100) NOT NULL,
  `No_Tel` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `langkah` varchar(255) DEFAULT NULL,
  `Aduan_Info` varchar(1000) NOT NULL,
  `complaint_cond` varchar(50) DEFAULT NULL,
  `Timestamp_New` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Timestamp_Pending` datetime DEFAULT NULL,
  `Timestamp_In_Progress` datetime DEFAULT NULL,
  `Timestamp_Closed` datetime DEFAULT NULL,
  `Timestamp_Amend` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan_tb`
--

INSERT INTO `aduan_tb` (`Aduan_ID`, `Category_ID`, `Status_Desc`, `Nama_Pengadu`, `No_Tel`, `Email`, `langkah`, `Aduan_Info`, `complaint_cond`, `Timestamp_New`, `Timestamp_Pending`, `Timestamp_In_Progress`, `Timestamp_Closed`, `Timestamp_Amend`) VALUES
(70001, 30001, 'In Progress', 'Amir Haziq', 1110894397, 'amirhaziqhafiz113@gmail.com', '', 'Testing', 'Amend', '2022-12-07 10:25:48', '2022-10-05 05:04:31', '2022-12-07 11:25:48', '2022-12-05 22:06:51', '2022-12-05 22:07:18'),
(70007, 30001, 'Pending', 'faizul', 178016870, 'faizul.ramir@gmail.com', 'Ya', 'as', NULL, '2022-12-13 07:26:30', NULL, '2022-12-13 08:26:30', NULL, NULL),
(70008, 30003, 'Pending', 'faizul', 178016870, 'apejol@gmail.com', 'Tidak', 'asdsadasdsad', NULL, '2022-12-13 07:22:00', NULL, '2022-12-13 08:22:00', NULL, NULL),
(70009, 30001, 'Pending', 'faizul', 178016870, 'faizul.ramir@gmail.com', '', 'asdsad', NULL, '2022-12-13 07:27:26', NULL, '2022-12-13 08:27:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Add_By` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Description`, `Add_By`, `Timestamp`) VALUES
(30001, 'Antivirus and hardware', 'Amir', '2022-10-03 07:58:29'),
(30003, 'Test', 'Amir Haziq Hafiz Muhammad', '2022-12-13 04:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `pembetulan`
--

CREATE TABLE `pembetulan` (
  `Correction_ID` int(50) NOT NULL,
  `Aduan_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Add_By` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembetulan`
--

INSERT INTO `pembetulan` (`Correction_ID`, `Aduan_ID`, `User_ID`, `Description`, `Add_By`, `Timestamp`) VALUES
(50001, 70001, 10001, 'asdasdasdds', 'Amir', '2022-12-13 07:19:56'),
(50006, 70007, 10001, 'asdasdasdds', 'faizul', '2022-12-13 07:26:27'),
(50007, 70008, 10003, 'asdasdasdds', 'faizul', '2022-12-13 05:05:58'),
(50008, 70009, 10003, 'hehee', 'faizul', '2022-12-13 07:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `pencegahan`
--

CREATE TABLE `pencegahan` (
  `Prevention_ID` int(50) NOT NULL,
  `Aduan_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Add_By` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencegahan`
--

INSERT INTO `pencegahan` (`Prevention_ID`, `Aduan_ID`, `User_ID`, `Description`, `Add_By`, `Timestamp`) VALUES
(60001, 70001, 10001, 'asdasd', 'Amir', '2022-12-13 07:22:00'),
(60006, 70007, 10001, 'asdasdasdasd', 'faizul', '2022-12-13 07:26:30'),
(60007, 70008, 10003, 'asdasd', 'faizul', '2022-12-13 05:05:58'),
(60008, 70009, 10003, 'hehe', 'faizul', '2022-12-13 07:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`) VALUES
(5, 'Verify', 'verify reports'),
(6, 'Edit', 'edit reports'),
(7, 'Delete', 'delete reports'),
(9, 'Complaint', 'complaint'),
(10, 'can_category', 'Category');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`) VALUES
(2, 4, 5),
(9, 4, 6),
(10, 4, 7),
(12, 4, 9),
(13, 5, 5),
(14, 4, 10),
(15, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(4, 'SuperAdmin', 'Super Admin'),
(5, 'HeadDepartment', 'Head Department'),
(6, 'Admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_ID` int(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Add_By` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_ID`, `Description`, `Add_By`, `Timestamp`) VALUES
(40001, 'Pending', 'Amir Haziq', '2022-10-03 07:56:38'),
(40002, 'In Progress', 'Amir Haziq', '2022-12-05 19:51:25'),
(40003, 'Closed', 'Amir Haziq', '2022-12-05 19:43:23'),
(40004, 'Amend', 'Amir Haziq', '2022-12-05 19:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `U_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `U_Dept` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Add_By` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `U_Name`, `email`, `password`, `U_Dept`, `Timestamp`, `Add_By`) VALUES
(10001, 'Amir Haziq Hafiz Muhammad', 'finejake113@gmail.com', '$2y$10$dmzr0uFyN4ctJBKFhGcb1OA9HalrtOMCnVWll8sBXhcFBNdmCDwGO', 'TMK', '2022-12-05 18:00:51', 'Amir Haziq Hafiz Muhammad'),
(10002, 'Head Department', 'headdeparment@gmail.com', '$2y$10$dmzr0uFyN4ctJBKFhGcb1OA9HalrtOMCnVWll8sBXhcFBNdmCDwGO', 'DDT', '2022-12-05 17:57:26', 'Amir Haziq Hafiz Muhammad'),
(10003, 'Admin', 'admin@gmail.com', '$2y$10$ri3B4wOGQrOVlFocsy6Gs.cjLNIEELBjcvEafb7CzixGVyh2WMRn6', 'DDT', '2022-12-07 10:20:02', 'Amir Haziq Hafiz Muhammad');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`) VALUES
(3, 10001, 4),
(4, 10002, 5),
(5, 10003, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan_tb`
--
ALTER TABLE `aduan_tb`
  ADD PRIMARY KEY (`Aduan_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `pembetulan`
--
ALTER TABLE `pembetulan`
  ADD PRIMARY KEY (`Correction_ID`),
  ADD KEY `Aduan_ID` (`Aduan_ID`);

--
-- Indexes for table `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD PRIMARY KEY (`Prevention_ID`),
  ADD KEY `Aduan_ID` (`Aduan_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_fk` (`role_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan_tb`
--
ALTER TABLE `aduan_tb`
  MODIFY `Aduan_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70010;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30004;

--
-- AUTO_INCREMENT for table `pembetulan`
--
ALTER TABLE `pembetulan`
  MODIFY `Correction_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50009;

--
-- AUTO_INCREMENT for table `pencegahan`
--
ALTER TABLE `pencegahan`
  MODIFY `Prevention_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60009;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40005;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembetulan`
--
ALTER TABLE `pembetulan`
  ADD CONSTRAINT `pembetulan_ibfk_1` FOREIGN KEY (`Aduan_ID`) REFERENCES `aduan_tb` (`Aduan_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD CONSTRAINT `pencegahan_ibfk_1` FOREIGN KEY (`Aduan_ID`) REFERENCES `aduan_tb` (`Aduan_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pencegahan_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
