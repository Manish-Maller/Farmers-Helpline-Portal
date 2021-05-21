-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 07:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1officer`
--

CREATE TABLE `class1officer` (
  `class1officer_id` int(11) NOT NULL,
  `class1_officername` varchar(100) NOT NULL,
  `desgnation` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `class1_officercode` varchar(100) NOT NULL,
  `class1officer_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_details`
--

CREATE TABLE `complaint_details` (
  `compalint_id` int(100) NOT NULL,
  `compalint_name` varchar(100) NOT NULL,
  `farmar_id` varchar(100) NOT NULL,
  `class1officer_id` varchar(100) NOT NULL,
  `compalint_discription` varchar(100) NOT NULL,
  `compalint_date` varchar(100) NOT NULL,
  `compalint_status` varchar(100) NOT NULL,
  `attached_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_details`
--

CREATE TABLE `department_details` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_discreption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmar_details`
--

CREATE TABLE `farmar_details` (
  `farmar_id` int(200) NOT NULL,
  `farmar_name` varchar(200) NOT NULL,
  `farmar_add` varchar(200) NOT NULL,
  `farmar_cno` varchar(200) NOT NULL,
  `farmar_emailid` varchar(200) NOT NULL,
  `farmar_city` varchar(200) NOT NULL,
  `farmar_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hintq` varchar(100) NOT NULL,
  `hint_answer` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hintq`, `hint_answer`, `status`) VALUES
('admin', '123123', 'admin', 'who i am', 'admin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class1officer`
--
ALTER TABLE `class1officer`
  ADD PRIMARY KEY (`class1officer_id`);

--
-- Indexes for table `complaint_details`
--
ALTER TABLE `complaint_details`
  ADD PRIMARY KEY (`compalint_id`);

--
-- Indexes for table `department_details`
--
ALTER TABLE `department_details`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `farmar_details`
--
ALTER TABLE `farmar_details`
  ADD PRIMARY KEY (`farmar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class1officer`
--
ALTER TABLE `class1officer`
  MODIFY `class1officer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint_details`
--
ALTER TABLE `complaint_details`
  MODIFY `compalint_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_details`
--
ALTER TABLE `department_details`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmar_details`
--
ALTER TABLE `farmar_details`
  MODIFY `farmar_id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
