-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2023 at 04:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `aid` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`aid`, `title`, `body`, `date_created`) VALUES
(1, 'THIS IS A TEST ANNOUNCEMENT', 'THIS IS A TEST TEMPLATE OF THE ANNOUNEMENT BODY', '2023-08-21'),
(2, 'THIS IS A TEST ANNOUNCEMENT', 'THIS IS A TEST TEMPLATE OF THE ANNOUNEMENT BODY', '2023-08-21'),
(3, 'THIS IS A TEST ANNOUNCEMENT', 'THIS IS A TEST TEMPLATE OF THE ANNOUNEMENT BODY', '2023-08-21'),
(4, 'THIS IS A TEST ANNOUNCEMENT', 'THIS IS A TEST TEMPLATE OF THE ANNOUNEMENT BODY', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'TEACHER'),
(3, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `lostandfound`
--

CREATE TABLE `lostandfound` (
  `fid` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `foundby` varchar(50) NOT NULL,
  `foundin` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostandfound`
--

INSERT INTO `lostandfound` (`fid`, `item`, `foundby`, `foundin`, `status`, `date`) VALUES
(1, 'IPHONE 10 64 GB FULLYPAID', 'EDIN SANTIAGO', 'RM001', 'OPEN', '2023-08-21'),
(2, 'IPHONE 10 64 GB FULLYPAID', 'EDIN SANTIAGO', 'RM001', 'OPEN', '2023-08-21'),
(3, 'IPHONE 10 64 GB FULLYPAID', 'EDIN SANTIAGO', 'RM001', 'OPEN', '2023-08-21'),
(4, 'IPHONE 10 64 GB FULLYPAID', 'EDIN SANTIAGO', 'RM001', 'OPEN', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `school_whereabout`
--

CREATE TABLE `school_whereabout` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `room` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_whereabout`
--

INSERT INTO `school_whereabout` (`id`, `uid`, `time_in`, `time_out`, `room`, `date`) VALUES
(1, '934889', '2023-08-21 12:35:38', '2023-08-21 12:35:58', 'RM001', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `subject_matter`
--

CREATE TABLE `subject_matter` (
  `sm` int(11) NOT NULL,
  `grade` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `subjcode` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_matter`
--

INSERT INTO `subject_matter` (`sm`, `grade`, `subject`, `subjcode`, `time`, `room`) VALUES
(1, 1, 'SCIENCE', 'SC001', '7:00 AM - 8:00 AM', 'RM001'),
(2, 1, 'ENGLISH', 'EN001', '9:00 AM - 10:00 AM', 'RM002'),
(3, 1, 'MATH', 'MT001', '11:00 AM - 12:00 AM', 'RM003'),
(4, 1, 'ARALING PANLIPUNAN', 'AP001', '1:00 PM - 2:00 PM', 'RM004'),
(5, 1, 'FILIPINO', 'FIL001', '2:00 PM - 3:00 PM', 'RM005'),
(6, 1, 'MAPEH', 'MH001', '3:00 PM - 4:00 PM', 'RM006'),
(7, 1, 'GMRC', 'GM001', '4:00 PM - 5:00 PM', 'RM007');

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `id` int(11) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `uid` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_attendance`
--

INSERT INTO `user_attendance` (`id`, `time_in`, `time_out`, `uid`, `date`) VALUES
(1, '2023-08-20 05:45:29', '2023-08-21 12:16:47', '934889', '2023-08-20'),
(2, '2023-08-21 12:16:36', '2023-08-21 12:16:47', '934889', '2023-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `sid` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`sid`, `uid`, `fname`, `mname`, `lname`, `gender`, `birthdate`, `address`, `contact`, `level`) VALUES
(1, '870023', 'Enid Dine', 'Angelo Olegna', 'Santiago Ogaitnas', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1),
(2, '684686', 'Enid', 'Angelo', 'Santiago', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1),
(3, '934889', 'Enid', 'Angelo', 'Santiago', 'Male', '1995-10-02', 'Bulacan, Bulacan', '0916653189', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` int(10) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `uid`, `email`, `password`, `designation`, `code`, `status`, `date_created`) VALUES
(1, '870023', 'revcoreitsolution@gmail', '21232f297a57a5a743894a0e4a801fc3', 1, 7599, 'INVALID', '2023-08-19'),
(2, '684686', 'revcoreitsolution@gmail', '21232f297a57a5a743894a0e4a801fc3', 2, 7962, 'INVALID', '2023-08-19'),
(3, '934889', 'revcoreitsolution@gmail', '21232f297a57a5a743894a0e4a801fc3', 3, 7190, 'INVALID', '2023-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `rid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `request_type` varchar(100) NOT NULL,
  `date_requested` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`rid`, `uid`, `request_type`, `date_requested`, `status`) VALUES
(1, '934889', 'REPORT OF GRADE', '2023-08-21', 'OPEN'),
(2, '934889', 'ENROLLMENT', '2023-08-21', 'OPEN'),
(3, '934889', 'GOOD MORAL', '2023-08-21', 'OPEN'),
(4, '934889', 'FORM 137', '2023-08-21', 'OPEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lostandfound`
--
ALTER TABLE `lostandfound`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `school_whereabout`
--
ALTER TABLE `school_whereabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_matter`
--
ALTER TABLE `subject_matter`
  ADD PRIMARY KEY (`sm`);

--
-- Indexes for table `user_attendance`
--
ALTER TABLE `user_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lostandfound`
--
ALTER TABLE `lostandfound`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_whereabout`
--
ALTER TABLE `school_whereabout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_matter`
--
ALTER TABLE `subject_matter`
  MODIFY `sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
