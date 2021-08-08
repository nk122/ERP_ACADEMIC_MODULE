-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 02:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`username`, `password`) VALUES
('nk', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `syllabus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `name`, `dept`, `credit`, `syllabus`) VALUES
('CA01', 'Computer Architecture', 'CSE', '4', 'AA,VV,DFF,DFFDF,SSF'),
('CC01', 'Cloud Computing', 'CSE', '4', 'A,S,D,F,GH,'),
('CG01', 'Computer Graphics', 'CSE', '4', 'QQ,ASSS,SDSDS,VDVDVD,DFS'),
('ddd', 'men00', 'MEC', '4', 'sdfdsfdsf'),
('DS01', 'Data structure', 'CSE', '4', ''),
('DS02', 'Distributed System', 'CSE', '3', ''),
('EC01', 'Eectronis', 'ECE', '4', ''),
('FD01', 'Fluid  Dynamics', 'MEC', '4', 'QW,,,ERC,CXZC,XCZ,C'),
('ISE01', 'Software Engineering', 'CSE', '4', 'AA,SS,DF,E,X'),
('ML01', 'Machine Learning', 'CSE', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_table`
--

CREATE TABLE `emp_table` (
  `emp_ID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_table`
--

INSERT INTO `emp_table` (`emp_ID`, `password`) VALUES
('emp_001', 'pass1'),
('emp_002', 'pass2'),
('emp_003', 'pass3'),
('emp_004', 'pass4');

-- --------------------------------------------------------

--
-- Table structure for table `leave_table`
--

CREATE TABLE `leave_table` (
  `emp_ID` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `begin_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Processing...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_table`
--

INSERT INTO `leave_table` (`emp_ID`, `first_name`, `last_name`, `begin_date`, `end_date`, `type`, `comment`, `status`) VALUES
('emp001', 'son', 'SINGH', '09/07/1995', '09/07/1995', 'Sick', 'dfdsfdf', 'APPROVED'),
('emp_001', 'BVBB', 'SINGH', '09/07/1995', '04/08/1995', 'Sick', 'dfg', 'APPROVED'),
('emp_002', 'T2', 'SINGH', '09/07/1995', '04/08/1995', 'Other', 'GHH', 'Pending'),
('emp_003', 'emp_003', 'SINGH', '09/07/1995', '04/08/1995', 'Other', 'fdfsdf', 'Pending'),
('new1', 'son', 'SINGH', '09/07/1995', '04/08/1995', 'Vacation', 'fgdfgdgdfg', 'APPROVED'),
('student1', 'student1', 'surname', '09/07/1995', '04/08/1995', 'Other', 'fgdgdfgf', 'REJECTED'),
('student2', 'STUDENT2', 'SINGH', '09/07/2020', '04/08/2020', 'Vacation', 'kjkljgfdsjg', 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `resignation`
--

CREATE TABLE `resignation` (
  `emp_ID` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resignation`
--

INSERT INTO `resignation` (`emp_ID`, `first_name`, `last_name`, `start`, `end`, `comment`, `status`) VALUES
('emp001', 'son', 'SINGH', '09/07/1995', '09/07/1995', 'dsfdgffgsd,fdsgfdgfdgsdgdfsg,gsgdfdg', 'Pending'),
('emp_003', 'son', 'SINGH', '09/07/1995', '09/07/1995', 'vfd', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `username` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `had` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `10th` varchar(255) NOT NULL,
  `10th_board` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `10th_sheet` varchar(200) NOT NULL,
  `12th_sheet` varchar(200) NOT NULL,
  `h_sheet` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Processing...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`username`, `program`, `first_name`, `last_name`, `email`, `number`, `nationality`, `category`, `religion`, `father`, `dob`, `gender`, `had`, `university`, `cgpa`, `year`, `10th`, `10th_board`, `address`, `city`, `state`, `pincode`, `country`, `10th_sheet`, `12th_sheet`, `h_sheet`, `photo`, `status`) VALUES
('Neeraj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending...'),
('new1', '1', 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'APPROVED'),
('new11', '1', 'student1', 'SINGH', 'blindfox493@gmail.com', '567786878973', 'India', '1', 'Hindu', 'f', '09-07-1995', 'M', 'O', 'O', 'O', '2011', 'O', 'q', 'sector-k,1209,ashiyana', 'Lucknow', 'Uttar Pradesh', '226012', 'India', '2 - Copy.jpg', '2 - Copy.jpg', '3 - Copy.jpg', '', 'Pending...'),
('new7', '1', 'new7', 'SINGH', 'blindfox493@gmail.com', '545435634646', 'India', '1', 'Hindu', 'f', '09-07-1995', 'M', 'O', 'O', 'O', 'O', 'O', 'O', 'sector-k,1209,ashiyana', 'Lucknow', 'Uttar Pradesh', '226012', 'India', 'Captufgdfgfdgdfgfdgfdgfdgre.PNG', 'C.PNG', '11111111111111111.png', '', 'Pending...'),
('new9', '1', 'dumm1', 'SINGH', 'blindfox493@gmail.com', '65654656', 'India', '1', 'Hindu', 'f', '09-07-1995', 'M', 'O', 'O', 'O', 'O', 'O', 'O', 'sector-k,1209,ashiyana', 'Lucknow', 'Uttar Pradesh', '226012', 'India', 'chall1.PNG', 'chall1.PNG', 'chall1.PNG', 'Capture2.PNG', 'Pending...'),
('nk', '2', 'nk1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending...'),
('student1', '1', 'student1', 'surname', 'blindfox493@gmail.com', '9900043545', 'India', '2', 'Hindu', 'f', '09-07-1995', 'M', 'O', 'O', 'O', '2011', 'O', 'O', 'sector-k,1209,ashiyana', 'Lucknow', 'Uttar Pradesh', '226012', 'India', '4 - Copy.jpg', '12.jpg', '4 - Copy.jpg', '1 - Copy.jpg', 'Pending...'),
('student2', '2', 'STUDENT2', 'SINGH', 'make.yourbelieve@gmail.com', '99001143', 'INDIAN', '1', 'Hindu', 'Fanther', '09-07-1995', 'M', 'O', 'O', 'O', 'O', 'O', 'O', 'sector-k,1209,ashiyana', 'Lucknow', 'Uttar Pradesh', '226012', 'India', '7.jpg', '4 - Copy.jpg', '5 - Copy.jpg', '', 'APPROVED'),
('Suraj', '1', 'CC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending...'),
('try1', '1', 'w', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'APPROVED'),
('try2', '3', 'tryq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending...');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_table`
--

CREATE TABLE `teachers_table` (
  `emp_ID` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_table`
--

INSERT INTO `teachers_table` (`emp_ID`, `first_name`, `last_name`, `Dept`, `email`, `mobile`, `address`, `gender`) VALUES
('emp_001', 'A', 'SINGH', 'CSE', 'blindfox493@gmail.com', '9455001143', 'sector-k,1209,ashiyana', 'M'),
('emp_002', 'B', 'SINGH', 'ECE', 'blindfox493@gmail.com', '09958422591', 'sector-k,1209,ashiyana', 'F'),
('emp_003', 'C', 'SINGH', 'MEC', 'blindfox493@gmail.com', '09958422591', 'sector-k,1209,ashiyana', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`) VALUES
('', '1'),
('a', '1'),
('dd', 'd'),
('ff', 'f'),
('j', 'j'),
('neer', '12'),
('neer1', '13'),
('Neeraj', '112'),
('new1', '1'),
('new11', '11'),
('new2', '2'),
('new3', '3'),
('new4', '4'),
('new7', '7'),
('new9', '9'),
('new_id', '122'),
('nk', '14'),
('qq', '1'),
('r', 'r'),
('student1', '1'),
('student2', '2'),
('Suraj', '111'),
('try1', '5'),
('try2', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emp_table`
--
ALTER TABLE `emp_table`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `leave_table`
--
ALTER TABLE `leave_table`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `resignation`
--
ALTER TABLE `resignation`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `teachers_table`
--
ALTER TABLE `teachers_table`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
