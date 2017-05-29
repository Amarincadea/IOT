-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 05:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `d_id` int(11) NOT NULL,
  `Designation` varchar(25) DEFAULT NULL,
  `Base` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`d_id`, `Designation`, `Base`) VALUES
(1, 'Designer', '120000'),
(2, 'Developer', '120000'),
(3, 'Consultant', '120000'),
(4, 'Engineer', '120000'),
(5, 'Writer', '120000'),
(6, 'Specialst', '120000'),
(7, 'Executive / Sr. Executive', '120000'),
(8, 'Admin / Sr. Admin', '120000'),
(9, 'PMO / Coordinator', '120000'),
(10, 'Senior Developer', '150000'),
(11, 'Senior Consultant', '150000'),
(12, 'Senior Test Engineer', '150000'),
(13, 'Senior Writer', '150000'),
(14, 'Senior PMO', '150000'),
(15, 'Project Lead', '180000'),
(16, 'Team Lead', '180000'),
(17, 'Lead consultant', '180000'),
(18, 'Manager', '200000'),
(19, 'Project Manager', '200000'),
(20, 'Product Manager', '200000'),
(21, 'Senior Project Manager', '200000'),
(22, 'Senior Manager', '200000'),
(23, 'Head / Director', '250000'),
(24, 'Test Engineer', '120000'),
(25, 'Senior Executive', '120000'),
(26, 'Senior Admin', '120000'),
(27, 'Director', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `ename` text NOT NULL,
  `doj` date NOT NULL,
  `email` text NOT NULL,
  `edesignation` text NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `eid`, `ename`, `doj`, `email`, `edesignation`, `edate`) VALUES
(1, 'IT037', 'Amarnath R', '2016-03-29', 'Amarnath.Ramesh@incadea.com', 'Developer', '2017-05-20 13:12:53'),
(2, 'IT001', 'HOD', '2017-05-08', 'hod@incadea.com', 'Head Of Department', '2017-05-16 18:30:00'),
(3, 'IT002', 'HR', '2017-05-08', 'hr@incadea.com', 'Human Resource ', '2017-05-18 10:21:47'),
(4, 'IT036', 'ABC', '2016-04-02', 'abc@incadea.com', 'Designer', '2017-05-19 12:01:58'),
(5, 'IT040', 'Ramesh', '2017-05-24', 'ram@gmail.com', 'Developer', '2017-05-28 08:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `emp_wd_req`
--

CREATE TABLE `emp_wd_req` (
  `wdid` int(11) NOT NULL,
  `eid` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `indecimal` decimal(10,0) NOT NULL,
  `req_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `when_requred` date NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lraccount`
--

CREATE TABLE `lraccount` (
  `lrid` int(11) NOT NULL,
  `eid` text NOT NULL,
  `lrbal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lraccount`
--

INSERT INTO `lraccount` (`lrid`, `eid`, `lrbal`) VALUES
(4, 'IT037', '150000');

-- --------------------------------------------------------

--
-- Table structure for table `lr_credit`
--

CREATE TABLE `lr_credit` (
  `lcid` int(11) NOT NULL,
  `eid` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `indecimal` decimal(10,0) NOT NULL,
  `lrcdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lr_debit`
--

CREATE TABLE `lr_debit` (
  `ldid` int(11) NOT NULL,
  `eid` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `indecimal` decimal(10,0) NOT NULL,
  `lrddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mid` int(11) NOT NULL,
  `Emp_email` text NOT NULL,
  `file_path` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  `eid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `date_added`, `eid`) VALUES
(2, 'Amarnath.Ramesh@incadea.com', 'e64589e7b0d4f78f7f793fd89c65c239', '2017-05-15 17:09:09', 'IT037'),
(6, 'ram@gmail.com', 'e64589e7b0d4f78f7f793fd89c65c239', '2017-05-11 00:00:00', 'IT040');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `src_email` text NOT NULL,
  `dest_email` text NOT NULL,
  `message` text NOT NULL,
  `file_path` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `optin`
--

CREATE TABLE `optin` (
  `Opt_id` int(11) NOT NULL,
  `Emp_id` text NOT NULL,
  `Emp_email` text NOT NULL,
  `Designation` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hod_status` text NOT NULL,
  `hr_status` text NOT NULL,
  `hod_appr_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hr_appr_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optin`
--

INSERT INTO `optin` (`Opt_id`, `Emp_id`, `Emp_email`, `Designation`, `date_added`, `hod_status`, `hr_status`, `hod_appr_date`, `hr_appr_date`) VALUES
(19, 'IT037', 'Amarnath.Ramesh@incadea.com', 'Senior PMO', '2017-05-18 15:46:12', 'Approved', 'Approved', '2017-05-18 15:44:39', '2017-05-18 12:21:46'),
(20, 'IT036', 'abc@incadea.com', 'Designer', '2017-05-19 11:58:27', 'Pending', 'Pending', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pin_entry`
--

CREATE TABLE `pin_entry` (
  `pid` int(11) NOT NULL,
  `email` text NOT NULL,
  `gpio` text NOT NULL,
  `status` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_entry`
--

INSERT INTO `pin_entry` (`pid`, `email`, `gpio`, `status`, `date_added`) VALUES
(50, 'ram@gmail.com', '7', 'off', '2017-05-29 01:52:46'),
(51, 'ram@gmail.com', '7', 'on', '2017-05-29 02:17:08'),
(52, 'ram@gmail.com', '7', 'on', '2017-05-29 02:17:10'),
(53, 'ram@gmail.com', '7', 'on', '2017-05-29 02:17:11'),
(54, 'ram@gmail.com', '7', 'on', '2017-05-29 02:17:11'),
(55, 'ram@gmail.com', '7', 'off', '2017-05-29 02:42:47'),
(56, 'ram@gmail.com', '7', 'on', '2017-05-29 02:42:48'),
(57, 'ram@gmail.com', '7', 'on', '2017-05-29 02:42:48'),
(58, 'ram@gmail.com', '7', 'on', '2017-05-29 02:42:49'),
(59, 'ram@gmail.com', '1', 'on', '2017-05-29 02:42:50'),
(60, 'ram@gmail.com', '1', 'on', '2017-05-29 02:42:50'),
(61, 'ram@gmail.com', '1', 'off', '2017-05-29 02:42:51'),
(62, 'ram@gmail.com', '1', 'off', '2017-05-29 02:42:51'),
(63, 'ram@gmail.com', '2', 'on', '2017-05-29 02:42:53'),
(64, 'ram@gmail.com', '2', 'on', '2017-05-29 02:42:54'),
(65, 'ram@gmail.com', '2', 'off', '2017-05-29 02:42:55'),
(66, 'ram@gmail.com', '2', 'off', '2017-05-29 02:42:55'),
(67, 'ram@gmail.com', '1', 'off', '2017-05-29 02:49:10'),
(68, 'ram@gmail.com', '7', 'on', '2017-05-29 02:49:59'),
(69, 'Amarnath.Ramesh@incadea.com', '7', 'on', '2017-05-29 02:51:11'),
(70, 'Amarnath.Ramesh@incadea.com', '2', 'on', '2017-05-29 02:51:34'),
(71, 'Amarnath.Ramesh@incadea.com', '2', 'off', '2017-05-29 02:51:42'),
(72, 'Amarnath.Ramesh@incadea.com', '1', 'off', '2017-05-29 02:53:24'),
(73, 'Amarnath.Ramesh@incadea.com', '7', 'off', '2017-05-29 02:54:39'),
(74, 'ram@gmail.com', '7', 'on', '2017-05-29 02:58:01'),
(75, 'ram@gmail.com', '7', 'on', '2017-05-29 02:58:12'),
(76, 'ram@gmail.com', '7', 'on', '2017-05-29 02:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `empid` varchar(30) NOT NULL,
  `empEmail` varchar(60) NOT NULL,
  `empPass` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `empid`, `empEmail`, `empPass`, `role`) VALUES
(1, 'IT037', 'Amarnath.Ramesh@incadea.com', 'b6293aa585d182e6c8b4c2878b6cb562b479134ae7aab3e711a2ebf16682e48c', ''),
(8, 'IT001', 'hr@incadea.com', '1b52f3a2e15148731314bf167145c54565ed2385a862b5eb7771eaf719e4f82e', 'HR Manager'),
(14, 'IT002', 'fm@incadea.com', '440f3041c89adee0f2ad780704bcc0efae1bdb30f8d77dc455a2f6c823b87ca0', 'Finance Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_wd_req`
--
ALTER TABLE `emp_wd_req`
  ADD PRIMARY KEY (`wdid`);

--
-- Indexes for table `lraccount`
--
ALTER TABLE `lraccount`
  ADD PRIMARY KEY (`lrid`);

--
-- Indexes for table `lr_credit`
--
ALTER TABLE `lr_credit`
  ADD PRIMARY KEY (`lcid`);

--
-- Indexes for table `lr_debit`
--
ALTER TABLE `lr_debit`
  ADD PRIMARY KEY (`ldid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `optin`
--
ALTER TABLE `optin`
  ADD PRIMARY KEY (`Opt_id`);

--
-- Indexes for table `pin_entry`
--
ALTER TABLE `pin_entry`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`empEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emp_wd_req`
--
ALTER TABLE `emp_wd_req`
  MODIFY `wdid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lraccount`
--
ALTER TABLE `lraccount`
  MODIFY `lrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lr_credit`
--
ALTER TABLE `lr_credit`
  MODIFY `lcid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lr_debit`
--
ALTER TABLE `lr_debit`
  MODIFY `ldid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `optin`
--
ALTER TABLE `optin`
  MODIFY `Opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pin_entry`
--
ALTER TABLE `pin_entry`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
