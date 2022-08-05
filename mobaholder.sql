-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 12:52 AM
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
-- Database: `mobaholder`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Patheon` varchar(255) DEFAULT NULL,
  `MeleeType` varchar(255) DEFAULT NULL,
  `PowerType` varchar(255) DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Difficulty` varchar(255) DEFAULT NULL,
  `FavorCost` int(11) DEFAULT NULL,
  `GemsCost` int(11) DEFAULT NULL,
  `Quote` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`Id`, `Name`, `Patheon`, `MeleeType`, `PowerType`, `Class`, `Difficulty`, `FavorCost`, `GemsCost`, `Quote`) VALUES
(1, 'Agni', 'Hindu', 'Ranged', 'Magical', 'Mage', 'Hard', 1250, 200, '\"Rain down fire for major destruction. Lockdown enemies with noxious fumes.\"'),
(2, 'Ares', 'Greek', 'Melee', 'Physical', 'Guardian', 'Easy', 5500, 200, '\"Shackle foes and gather them together to be smothered in flames.\"'),
(3, 'Apollo', 'Greek', 'Ranged', 'Physical', 'Hunter', 'Easy', 5500, 200, '\"Crash your heavenly chariot and mesmerize the enemies with your moves.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
