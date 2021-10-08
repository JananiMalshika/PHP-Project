-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 08:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `aID` text NOT NULL,
  `Location` text NOT NULL,
  `Floors` int(11) NOT NULL,
  `Bedrooms` int(11) NOT NULL,
  `Bathrooms` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`aID`, `Location`, `Floors`, `Bedrooms`, `Bathrooms`, `Size`, `Amount`, `Description`) VALUES
('A001', 'Malabe', 10, 3, 2, 45, 2500000, 'Apartment in Malabe'),
('A002', 'Kandy', 8, 4, 4, 50, 1000000, 'Apartment in KAndy'),
('A003', 'Matara', 15, 4, 3, 35, 1850000, 'Apartment in Matara');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cid` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cid`, `cname`, `email`, `msg`) VALUES
(1001, 'Saman', 'saman@gmail.com', 'Good'),
(1002, 'Kasun', 'kasun@gmail.com', 'Nice work!!!'),
(1003, 'kamal', 'kamal@gmail.com', 'Goooooooooood!'),
(1004, 'Janai', 'malsika@gmail.com', 'Nice!!!');

-- --------------------------------------------------------

--
-- Table structure for table `housenew`
--

CREATE TABLE `housenew` (
  `HID` int(20) NOT NULL,
  `perch` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `elect` varchar(100) NOT NULL,
  `floor` int(100) NOT NULL,
  `room` int(100) NOT NULL,
  `bathroom` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housenew`
--

INSERT INTO `housenew` (`HID`, `perch`, `price`, `elect`, `floor`, `room`, `bathroom`) VALUES
(1001, 25, 250000, 'YES', 2, 4, 3),
(1002, 20, 500000, 'YES', 1, 2, 2),
(1003, 28, 400000, 'YES', 4, 4, 3),
(1004, 25, 2500000, 'YES', 2, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `landID` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `area` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `power` varchar(100) NOT NULL,
  `water` varchar(100) NOT NULL,
  `wide` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`landID`, `location`, `area`, `price`, `power`, `water`, `wide`) VALUES
(101, 'Matara', 85, 200850, 'YES', 'YES', 110),
(102, 'Malabe', 50, 690000, 'YES', 'YES', 95),
(103, 'Colombo6', 30, 820000, 'YES', 'Tap', 6),
(104, 'Kaduwela', 50, 68000, 'single', 'Tap water', 25);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `DoB` varchar(50) NOT NULL,
  `address_no` varchar(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `po_code` int(11) NOT NULL,
  `p_no` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `f_name`, `l_name`, `gender`, `DoB`, `address_no`, `street`, `city`, `po_code`, `p_no`, `email`, `password`) VALUES
(48, 'Janani12', 'Malsika', 'female', '1998-JUL-13', '41', 'main street', 'Nugegoda', 12000, '077123456', 'malsika@gmail.com', '123Mm'),
(50, 'Chamath', 'Bandara', 'male', '1999-FEB-16', '25/8', 'Vijaya street', 'Gampaha', 12500, '0778541236', 'chamath@gmail.com', 'Chamath123'),
(51, 'Kasun', 'Disanayaka', 'male', '1998-AUG-12', '74', 'Piris road', 'Dehiwala', 12500, '0768542147', 'kasun@gmail.com', 'Kasun123'),
(52, 'Kamala', 'Disanayaka', 'female', '1889-DEC-15', '12', 'Silvester rd', 'Kandy', 45000, '0768542147', 'kamala@gmail.com', 'Kamala123'),
(53, 'Nisal', 'Krishan', 'male', '1992-JUN-18', '78', 'Main street', 'Nawala', 74000, '0714525874', 'nisal@gmail.com', 'Nisal123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `housenew`
--
ALTER TABLE `housenew`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`landID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housenew`
--
ALTER TABLE `housenew`
  MODIFY `HID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
