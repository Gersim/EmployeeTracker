-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 10:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sing_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employeetables`
--

CREATE TABLE `employeetables` (
  `Id` int(4) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `timeworked` time NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeetables`
--

INSERT INTO `employeetables` (`Id`, `employee_name`, `description`, `start_time`, `end_time`, `timeworked`, `date`) VALUES
(74, 'g.mema ', 'jsjkak kjsajdka', '22:15:00', '22:20:00', '00:05:00', '2022-01-13 22:15:08'),
(75, 'g.mema ', 'sllmksknckuia', '23:15:00', '14:15:00', '09:00:00', '2022-01-13 22:15:27'),
(80, 'o.fezo ', 'dddddddd', '22:29:00', '14:29:00', '08:00:00', '2022-01-13 22:29:21'),
(81, 'e.talha ', 'slj;s;kjmdl', '22:31:00', '15:31:00', '07:00:00', '2022-01-13 22:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_added`
--

CREATE TABLE `user_added` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_added`
--

INSERT INTO `user_added` (`Id`, `name`, `last_name`, `username`, `password`, `date`) VALUES
(25, 'Gersi', 'Mema', 'g.mema', 'gersi', '2022-01-13 21:12:43'),
(26, 'Oresti', 'Fezo', 'o.fezo', 'oresti', '2022-01-13 21:13:33'),
(27, 'Emir', 'Talha', 'e.talha', 'talha', '2022-01-13 21:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeetables`
--
ALTER TABLE `employeetables`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `employee_name` (`employee_name`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `end_time` (`end_time`);

--
-- Indexes for table `user_added`
--
ALTER TABLE `user_added`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeetables`
--
ALTER TABLE `employeetables`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user_added`
--
ALTER TABLE `user_added`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
