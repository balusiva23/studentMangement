-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 02:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isActive` tinyint(1) DEFAULT 1,
  `reset_token` text NOT NULL,
  `user_status` int(11) DEFAULT 1,
  `team` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `number`, `role`, `profile`, `createdOn`, `isActive`, `reset_token`, `user_status`, `team`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$dcu9gR1DL2XI0lrrLwYSzukjkXca1dsDQm1KaiJ6iWfU5Pb17Gs4W', '9880772287', 'Administrator', 'default.png', '2023-06-26 14:53:19', 1, '', 0, NULL),
(2, 'Sivakumar ', 'siva@gmail.com', '$2y$10$43fpttPGU.KnHmyvrhCgb.HBRX3uCtrY1EM9KKAiFHTC7YznQyrLq', '9878456859', 'Member', NULL, '2024-01-24 05:57:45', 1, '', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `isActive` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `desc`, `isActive`) VALUES
(1, 'Title 1', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `start_date` varchar(55) DEFAULT NULL,
  `end_date` varchar(55) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `isActive` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `desc`, `isActive`) VALUES
(1, 'Test', '14-01-2024', '15-01-2024', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leader_board`
--

CREATE TABLE `leader_board` (
  `id` int(11) NOT NULL,
  `team` varchar(55) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `isActive` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leader_board`
--

INSERT INTO `leader_board` (`id`, `team`, `desc`, `isActive`) VALUES
(2, 'Phoenix(yellow)', NULL, 1),
(3, 'Pegasus(Green)', NULL, 1),
(4, 'Hercules(Blue)', NULL, 1),
(5, 'Orion(Red)', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `points` varchar(55) DEFAULT NULL,
  `team` varchar(55) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `isActive` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `points`, `team`, `desc`, `isActive`) VALUES
(6, '100', '2', NULL, 1),
(7, '200', '3', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader_board`
--
ALTER TABLE `leader_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leader_board`
--
ALTER TABLE `leader_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
