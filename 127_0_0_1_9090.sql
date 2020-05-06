-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:9090


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfl`
--
CREATE DATABASE IF NOT EXISTS `nfl` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nfl`;

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `Username` varchar(20) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Amount` decimal(5,0) NOT NULL,
  `Description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `LineNumber` int(2) NOT NULL,
  `Line` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `GameID` int(3) NOT NULL,
  `Week` int(3) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `VisitorID` varchar(3) NOT NULL,
  `VisitorScore` int(2) DEFAULT NULL,
  `PointSpread` decimal(3,0) DEFAULT NULL,
  `HomeID` varchar(3) NOT NULL,
  `HomeScore` int(11) DEFAULT NULL,
  `OT` tinyint(1) DEFAULT NULL,
  `Result` varchar(3) DEFAULT NULL,
  `ATSResult` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`GameID`, `Week`, `Date`, `Time`, `VisitorID`, `VisitorScore`, `PointSpread`, `HomeID`, `HomeScore`, `OT`, `Result`, `ATSResult`) VALUES
(1, 1, '2020-09-05', '19:20:00', 'GB', 8, NULL, 'CHI', 1, NULL, 'GB', NULL),
(2, 1, '2020-09-08', '12:00:00', 'ATL', 4, NULL, 'MIN', 6, NULL, 'MIN', NULL),
(3, 1, '2020-09-08', '12:00:00', 'NYJ', 9, NULL, 'BUF', 2, NULL, 'NYJ', NULL),
(4, 1, '2020-09-08', '12:00:00', 'WAS', 2, NULL, 'PHI', 6, NULL, 'PHI', NULL),
(5, 1, '2020-09-08', '12:00:00', 'KC', 2, NULL, 'JAX', 2, NULL, 'Tie', NULL),
(6, 1, '2020-09-08', '12:00:00', 'TEN', 2, NULL, 'CLE', 5, NULL, 'CLE', NULL),
(7, 1, '2020-09-08', '19:20:00', 'BAL', 2, NULL, 'MIA', 9, NULL, 'MIA', NULL),
(8, 1, '2020-09-08', '12:00:00', 'LAR', 2, NULL, 'CAR', 8, NULL, 'CAR', NULL),
(9, 1, '2020-09-08', '15:05:00', 'CIN', 3, NULL, 'SEA', 66, NULL, 'SEA', NULL),
(10, 1, '2020-09-08', '15:25:00', 'SF', 77, NULL, 'TB', 4, NULL, 'SF', NULL),
(11, 1, '2020-09-08', '15:25:00', 'DET', 44, NULL, 'ARI', 4, NULL, 'DET', NULL),
(12, 1, '2020-09-08', '19:20:00', 'PIT', 4, NULL, 'NE', 55, NULL, 'NE', NULL),
(13, 1, '2020-09-09', '18:10:00', 'HOU', 6, NULL, 'NO', 14, NULL, 'NO', NULL),
(14, 1, '2020-09-09', '21:20:00', 'DEN', 99, NULL, 'OAK', 6, NULL, 'DEN', NULL),
(15, 2, '2020-09-12', '19:20:00', 'CAR', NULL, NULL, 'TB', NULL, NULL, 'Tie', NULL),
(16, 2, '2020-09-15', '12:00:00', 'BAL', NULL, NULL, 'ARI', NULL, NULL, 'Tie', NULL),
(17, 2, '2020-09-15', '12:00:00', 'DET', NULL, NULL, 'LAC', NULL, NULL, 'Tie', NULL),
(18, 2, '2020-09-15', '12:00:00', 'TEN', NULL, NULL, 'IND', NULL, NULL, 'Tie', NULL),
(19, 2, '2020-09-15', '12:00:00', 'CIN', NULL, NULL, 'SF', NULL, NULL, 'Tie', NULL),
(20, 2, '2020-09-15', '12:00:00', 'HOU', NULL, NULL, 'JAX', NULL, NULL, 'Tie', NULL),
(21, 2, '2020-09-15', '12:00:00', 'GB', NULL, NULL, 'MIN', NULL, NULL, 'Tie', NULL),
(22, 2, '2020-09-15', '12:00:00', 'WAS', NULL, NULL, 'DAL', NULL, NULL, 'Tie', NULL),
(23, 2, '2020-09-15', '12:00:00', 'SEA', NULL, NULL, 'PIT', NULL, NULL, 'Tie', NULL),
(24, 2, '2020-09-15', '12:00:00', 'NYG', NULL, NULL, 'BUF', NULL, NULL, 'Tie', NULL),
(25, 2, '2020-09-15', '12:00:00', 'MIA', NULL, NULL, 'NE', NULL, NULL, 'Tie', NULL),
(26, 2, '2020-09-15', '12:00:00', 'OAK', NULL, NULL, 'KC', NULL, NULL, 'Tie', NULL),
(27, 2, '2020-09-15', '15:25:00', 'LAR', NULL, NULL, 'NO', NULL, NULL, 'Tie', NULL),
(28, 2, '2020-09-15', '15:25:00', 'DEN', NULL, NULL, 'CHI', NULL, NULL, 'Tie', NULL),
(29, 2, '2020-09-15', '19:20:00', 'ATL', NULL, NULL, 'PHI', NULL, NULL, 'Tie', NULL),
(30, 2, '2020-09-16', '19:15:00', 'NYJ', NULL, NULL, 'CLE', NULL, NULL, 'Tie', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TeamID` varchar(3) NOT NULL,
  `Conference` int(1) NOT NULL,
  `Division` int(1) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `DisplayName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TeamID`, `Conference`, `Division`, `City`, `Name`, `DisplayName`) VALUES
('ARI', 2, 4, 'Arizona', 'Cardinals', ''),
('ATL', 2, 3, 'Atlanta', 'Falcons', ''),
('BAL', 1, 2, 'Baltimore', 'Ravens', ''),
('BUF', 1, 1, 'Buffalo', 'Bills', ''),
('CAR', 2, 3, 'Carolina', 'Panthers', ''),
('CHI', 2, 2, 'Chicago', 'Bears', ''),
('CIN', 1, 2, 'Cincinnati', 'Bengals', ''),
('CLE', 1, 2, 'Cleveland', 'Browns', ''),
('DAL', 2, 1, 'Dallas', 'Cowboys', ''),
('DEN', 1, 4, 'Denver', 'Broncos', ''),
('DET', 2, 2, 'Detroit', 'Lions', ''),
('GB', 2, 2, 'Green Bay', 'Packers', ''),
('HOU', 1, 3, 'Houston', 'Texans', ''),
('IND', 1, 3, 'Indianapolis', 'Colts', ''),
('JAX', 1, 3, 'Jacksonville', 'Jaguars', ''),
('KC', 1, 4, 'Kansas City', 'Chiefs', ''),
('LAC', 1, 4, 'Los Angeles', 'Chargers', 'L.A. Chargers'),
('LAR', 2, 4, 'Los Angeles', 'Rams', 'L.A. Rams'),
('MIA', 1, 1, 'Miami', 'Dolphins', ''),
('MIN', 2, 2, 'Minnesota', 'Vikings', ''),
('NE', 1, 1, 'New England', 'Patriots', ''),
('NO', 2, 3, 'New Orleans', 'Saints', ''),
('NYG', 2, 1, 'New York', 'Giants', 'N.Y. Giants'),
('NYJ', 1, 1, 'New York', 'Jets', 'N.Y. Jets'),
('OAK', 1, 4, 'Oakland', 'Raiders', ''),
('PHI', 2, 1, 'Philadelphia', 'Eagles', ''),
('PIT', 1, 2, 'Pittsburgh', 'Steelers', ''),
('SEA', 2, 4, 'Seattle', 'Seahawks', ''),
('SF', 2, 4, 'San Francisco', '49ers', ''),
('TB', 2, 3, 'Tampa Bay', 'Buccaneers', ''),
('TEN', 1, 3, 'Tennessee', 'Titans', ''),
('WAS', 2, 1, 'Washington', 'Redskins', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `firstName` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `lastName` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `emailAddress` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(1) DEFAULT '1',
  `TeamTheme` varchar(3) DEFAULT 'NFL',
  `TeamRanking` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstName`, `lastName`, `emailAddress`, `password`, `permission`, `TeamTheme`, `TeamRanking`) VALUES
('admin', 'admin', 'admin', 'admin@admin.com', '$2y$12$6.Zhc8mij/JNJHFAxemoT.IgHl7keexniaficmCtf1sm9dJRqJNqi', 2, 'NFL', NULL),
('bryan', 'Bryan', 'Hodges', 'bryanxhodges@gmail.c', '$2y$12$Gu/aIPLQGJ8faJIRy5DCHuKxTheAVe8ezyoAJLn7KC3C4FH0SkkMa', 1, 'NFL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weeklypicks`
--

CREATE TABLE `weeklypicks` (
  `UserName` varchar(20) NOT NULL,
  `GameID` int(4) NOT NULL,
  `Pick` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklypicks`
--

INSERT INTO `weeklypicks` (`UserName`, `GameID`, `Pick`) VALUES
('bryan', 1, 'CHI'),
('bryan', 2, 'MIN'),
('bryan', 3, 'BUF'),
('bryan', 4, 'PHI'),
('bryan', 5, 'JAX'),
('bryan', 6, 'CLE'),
('bryan', 7, 'MIA'),
('bryan', 8, 'CAR'),
('bryan', 9, 'SEA'),
('bryan', 10, 'TB'),
('bryan', 11, 'ARI'),
('bryan', 12, 'NE'),
('bryan', 13, 'NO'),
('bryan', 14, 'OAK');

-- --------------------------------------------------------

--
-- Table structure for table `weeklyscoring`
--

CREATE TABLE `weeklyscoring` (
  `Week` int(2) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Tiebreaker` int(3) NOT NULL,
  `PickScore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weeklywinners`
--

CREATE TABLE `weeklywinners` (
  `Week` int(2) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `weeklypicks`
--
ALTER TABLE `weeklypicks`
  ADD PRIMARY KEY (`UserName`,`GameID`),
  ADD KEY `UserName` (`UserName`,`GameID`),
  ADD KEY `GameID` (`GameID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `weeklypicks`
--
ALTER TABLE `weeklypicks`
  ADD CONSTRAINT `weeklypicks_ibfk_1` FOREIGN KEY (`GameID`) REFERENCES `schedule` (`GameID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
