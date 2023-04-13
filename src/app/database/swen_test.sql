-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 12:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swen_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `MilestoneID` int(11) NOT NULL,
  `MilestoneTitle` varchar(255) NOT NULL,
  `MilestoneDescription` varchar(255) NOT NULL,
  `TeamID` int(11) NOT NULL,
  `MilestoneTimestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`MilestoneID`, `MilestoneTitle`, `MilestoneDescription`, `TeamID`, `MilestoneTimestamp`) VALUES
(1, 'This is our new milestone', 'The group has determined what roles they wanted to take and are finalizing it', 13, '2023-04-10 22:37:32'),
(2, 'Project Specification', 'The group defined the scope of their program', 12, '2023-04-11 00:58:13'),
(3, 'Testing', 'The debuggers have identified the current bugs,', 10, '2023-04-13 22:26:31'),
(4, 'Prototyping', 'The team has finished level 1 prototyping', 21, '2023-04-13 22:50:13'),
(5, 'Prototyping', 'The team has finished level 2 prototyping', 21, '2023-04-13 22:50:13'),
(6, 'Design', 'The team completed their UIX Design', 12, '2023-04-13 22:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TeamID` tinyint(4) NOT NULL,
  `TeamName` varchar(255) NOT NULL,
  `TeamScore` tinyint(4) NOT NULL,
  `TeamRating` float NOT NULL,
  `teamImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TeamID`, `TeamName`, `TeamScore`, `TeamRating`, `teamImage`) VALUES
(1, 'Lyfe', 2, 4, '../../../assets/img/KFYE Productions Chicken.png'),
(10, 'Test', 2, 0, '../../../assets/img/'),
(11, 'HelloWorld', 2, 0, '../../../assets/img/pexels-junior-teixeira-2047905.jpg'),
(12, 'IconicDev', 0, 0, '../../../assets/img/pexels-evie-shaffer-4004374.jpg'),
(13, 'CrunchMental', 31, 0, '../../../assets/img/Councellor door.jpg'),
(14, 'Axxonyx', 27, 0, '../../../assets/img/'),
(15, 'Koney', 23, 0, '../../../assets/img/'),
(16, 'Korey', 21, 0, '../../../assets/img/'),
(17, 'Teanbecdo', 31, 0, '../../../assets/img/pexels-lan-yao-6742945.jpg'),
(18, 'E=MC^2', 34, 0, '../../../assets/img/pexels-evie-shaffer-4004374.jpg'),
(19, 'hdeb', 24, 0, '../../../assets/img/pexels-fauxels-3183198.jpg'),
(20, 'Team 3', 64, 0, '../../../assets/img/pexels-anastasia-yudin-5167249.jpg'),
(21, 'Quadeca', 99, 0, '../../../assets/img/pexels-daria-shevtsova-1356300.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`MilestoneID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `MilestoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `TeamID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
