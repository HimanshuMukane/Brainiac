-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 03:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `ExpertID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `QueID` int(10) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `Answer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`ExpertID`, `UserID`, `QueID`, `Question`, `Answer`) VALUES
(1, 13, 1, 'What is HTML?', 'Hypertext Markup Language'),
(1, 13, 3, 'What is CSS?', 'Cant say');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `Subject` varchar(10) NOT NULL,
  `ChapID` int(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Info` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`Subject`, `ChapID`, `Title`, `Info`) VALUES
('Maths', 5, 'Statistics', 'Stats tis tics'),
('Maths', 6, 'Probability', 'Poro bala bili ty');

-- --------------------------------------------------------

--
-- Table structure for table `expertsugg`
--

CREATE TABLE `expertsugg` (
  `ExpertID` int(5) NOT NULL DEFAULT 0,
  `Name` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expertsugg`
--

INSERT INTO `expertsugg` (`ExpertID`, `Name`, `email`, `Subject`, `Description`) VALUES
(1, 'Parth Varde', 'parthvarde50@gmail.com', 'About Chapter', 'Insert new chapter in CSS course'),
(3, 'admin', 'him@gmail.com', '', 'cgvbhk'),
(4, 'XYZ', 'him@gmail.com', 'XYZ', 'ASDWESFACXZ');

-- --------------------------------------------------------

--
-- Table structure for table `expert_info`
--

CREATE TABLE `expert_info` (
  `Expert_id` int(2) NOT NULL,
  `fname` varchar(20) NOT NULL DEFAULT '',
  `MiddleName` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expert_info`
--

INSERT INTO `expert_info` (`Expert_id`, `fname`, `MiddleName`, `lname`, `email`, `Gender`, `UserName`, `Password`) VALUES
(1, 'Parth', 'Rakesh', 'Varde', 'parthvarde50@gmail.com', 'male', 'parth', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Description`, `name`, `email`) VALUES
('Hello', 'Parth Varde', 'parthvarde50@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Book` varchar(500) CHARACTER SET utf8 NOT NULL,
  `OrderNo` int(10) NOT NULL,
  `Full` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Addr` varchar(500) CHARACTER SET utf8 NOT NULL,
  `City` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Pin` int(20) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mobile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Book`, `OrderNo`, `Full`, `Addr`, `City`, `Pin`, `State`, `Email`, `Mobile`) VALUES
('HTML Complete Reference', 4, 'Parth Varde', 'dshjgjhdsjg					', 'Ahmedabad', 380051, 'Gujarat', 'parthvarde50@gmail.com', '8488061712');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `QueID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`QueID`, `UserID`, `UserName`, `Description`) VALUES
(1, 13, 'parth', 'What is HTML?'),
(3, 13, 'parth', 'What is CSS?'),
(4, 2, 'Himanshu', 'waefdzxddasc'),
(5, 2, 'Himanshu', 'waefdzxddasc');

-- --------------------------------------------------------

--
-- Table structure for table `responsesugg`
--

CREATE TABLE `responsesugg` (
  `ExpertID` int(5) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Info` varchar(153) CHARACTER SET utf8 NOT NULL,
  `Dinfo` varchar(850) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Title`, `Info`, `Dinfo`) VALUES
('Maths', 'Mathamatics', 'Maths'),
('ALPHABETS', 'ALPHABETS', 'ALPHABETS');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `srno` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL DEFAULT 'student',
  `profilepic_url` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `UserName` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`srno`, `fname`, `lname`, `mobile`, `email`, `password`, `user`, `profilepic_url`, `Gender`, `UserName`) VALUES
(1, 'Himanshu', 'Mukane', 1234567890, 'himanshu@gmail.com', '4122ea4f5490094a33d7cdba65136cf8', 'admin', 'himanshu.jpg', 'Male', 'Himanshu'),
(2, 'Prajakta', 'Kambli', 7738516879, 'prajakta@gmail.com', 'fc2f0cb441eec1bab6e0656991c6b776', 'user', 'prajakta.jpg', 'female', 'Prajakta'),
(3, 'Eashwari', 'Nagarkar', 1234567891, 'eashwari@gmail.com', 'ceb5520ca593ac9d233b2c1de033dd30', 'expert', 'eashwari.png', 'Female', 'Eashwari'),
(4, 'Shrushti', 'Thakur', 1000000000, 'shrushti@gmail.com', '6d594622b4b7e7d2f35547957aaf3479', 'paiduser', 'Shrushti-Thakur4.png', 'Female', 'Shrushti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ChapID`);

--
-- Indexes for table `expertsugg`
--
ALTER TABLE `expertsugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Indexes for table `expert_info`
--
ALTER TABLE `expert_info`
  ADD PRIMARY KEY (`Expert_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`QueID`);

--
-- Indexes for table `responsesugg`
--
ALTER TABLE `responsesugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `Title` (`Title`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ChapID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `QueID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
