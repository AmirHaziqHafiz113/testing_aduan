-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `Status_ID` int(50) DEFAULT NULL,
  `Nama_Pengadu` varchar(100) NOT NULL,
  `No_Tel` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Aduan_Info` varchar(1000) NOT NULL,
  `Timestamp_New` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Timestamp_Pending` datetime DEFAULT NULL,
  `Timestamp_In_Progress` datetime DEFAULT NULL,
  `Timestamp_Closed` datetime DEFAULT NULL,
  `Timestamp_Amend` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan_tb`
--

INSERT INTO `aduan_tb` (`Aduan_ID`, `Category_ID`, `Status_ID`, `Nama_Pengadu`, `No_Tel`, `Email`, `Aduan_Info`, `Timestamp_New`, `Timestamp_Pending`, `Timestamp_In_Progress`, `Timestamp_Closed`, `Timestamp_Amend`) VALUES
(70004, NULL, 1, 'Amir', 123445678, 'finejake113@gmail.com', 'Tiada data', '2022-11-27 06:36:33', NULL, NULL, NULL, NULL),
(70007, NULL, 1, '123', 1110147896, '123@gmail.com', '`12', '2022-11-28 03:17:27', NULL, NULL, NULL, NULL);

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
(30001, 'Antivirus and hardware', 'Amir', '2022-10-03 07:58:29');

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

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_ID` int(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Add_By` varchar(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Role_ID`, `Description`, `Add_By`, `Timestamp`) VALUES
(20001, 'Intern', 'Amir', '2022-10-03 07:57:57');

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
(1, 'New', 'Amir', '2022-11-26 13:38:06'),
(2, 'Pending', 'Amir Haziq', '2022-11-26 13:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `Role_ID` int(50) NOT NULL,
  `Head_Dept_ID` int(50) NOT NULL,
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

INSERT INTO `users` (`id`, `Role_ID`, `Head_Dept_ID`, `U_Name`, `email`, `password`, `U_Dept`, `Timestamp`, `Add_By`) VALUES
(10001, 20001, 80001, 'amirhh113', 'finejake113@gmail.com', '123', 'TMK', '2022-11-27 06:39:03', 'Amir Haziq Hafiz Muhammad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan_tb`
--
ALTER TABLE `aduan_tb`
  ADD PRIMARY KEY (`Aduan_ID`),
  ADD KEY `Category_ID` (`Category_ID`,`Status_ID`),
  ADD KEY `Status_ID` (`Status_ID`);

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
  ADD KEY `Aduan_ID` (`Aduan_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD PRIMARY KEY (`Prevention_ID`),
  ADD KEY `Aduan_ID` (`Aduan_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Role_ID` (`Role_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan_tb`
--
ALTER TABLE `aduan_tb`
  MODIFY `Aduan_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70008;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30002;

--
-- AUTO_INCREMENT for table `pembetulan`
--
ALTER TABLE `pembetulan`
  MODIFY `Correction_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50002;

--
-- AUTO_INCREMENT for table `pencegahan`
--
ALTER TABLE `pencegahan`
  MODIFY `Prevention_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60002;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aduan_tb`
--
ALTER TABLE `aduan_tb`
  ADD CONSTRAINT `aduan_tb_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aduan_tb_ibfk_2` FOREIGN KEY (`Status_ID`) REFERENCES `status` (`Status_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembetulan`
--
ALTER TABLE `pembetulan`
  ADD CONSTRAINT `pembetulan_ibfk_1` FOREIGN KEY (`Aduan_ID`) REFERENCES `aduan_tb` (`Aduan_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembetulan_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pencegahan`
--
ALTER TABLE `pencegahan`
  ADD CONSTRAINT `pencegahan_ibfk_1` FOREIGN KEY (`Aduan_ID`) REFERENCES `aduan_tb` (`Aduan_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pencegahan_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Role_ID`) REFERENCES `role` (`Role_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
