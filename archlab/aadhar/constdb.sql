-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 02:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor_reg`
--

CREATE TABLE `tbl_contractor_reg` (
  `contractor_id` int(6) NOT NULL,
  `login_id` int(6) NOT NULL,
  `contractor_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `licenseNo` varchar(20) NOT NULL,
  `licenseProof` varchar(200) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `dist_name` varchar(20) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `dist_name`, `state_name`, `status`) VALUES
(1, 2, 'Antony Mathai', 'antony@gmail.com', '8525467913', 'ER-123/78/RT', '500034400829_173191.jpg', 'Maria Constructions', '', 'Gujarat', 1),
(2, 5, 'John K J', 'john@yahoo.com', '6589234578', 'TY-789/23/456', 'Sijo Cyriac2.jpg', 'Airlift Constr', 'Thrissur', 'Kerala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_reg`
--

CREATE TABLE `tbl_customer_reg` (
  `cust_id` int(6) NOT NULL,
  `login_id` int(6) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `post_office` varchar(20) NOT NULL,
  `PIN_Code` int(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `dist_name` varchar(20) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_reg`
--

INSERT INTO `tbl_customer_reg` (`cust_id`, `login_id`, `cust_name`, `address`, `post_office`, `PIN_Code`, `phno`, `email_id`, `dist_name`, `state_name`, `status`) VALUES
(1, 1, 'Cyriac K J', 'Karackattu House', 'Koorali', 686522, '9961717047', 'cyriackj@gmail.com', 'Kottayam', 'Kerala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `did` int(6) NOT NULL,
  `sid` int(6) NOT NULL,
  `dist_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`did`, `sid`, `dist_name`) VALUES
(1, 1, 'Gandhinagar'),
(2, 2, 'Jaipur'),
(3, 3, 'delhi'),
(4, 4, 'Kottayam'),
(5, 4, 'Thrissur'),
(6, 4, 'Ernakulam'),
(7, 4, 'Alappuzha'),
(8, 5, 'Salem');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_labours_reg`
--

CREATE TABLE `tbl_labours_reg` (
  `lid` int(6) NOT NULL,
  `login_id` int(6) NOT NULL,
  `labour_name` varchar(20) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `dist_name` varchar(20) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `aadharcard` varchar(1000) NOT NULL,
  `adhar_no` varchar(40) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_labours_reg`
--

INSERT INTO `tbl_labours_reg` (`lid`, `login_id`, `labour_name`, `phoneno`, `email_id`, `dist_name`, `state_name`, `aadharcard`, `adhar_no`, `category_name`, `status`) VALUES
(1, 3, 'Babu', '7545781245', 'babu@gmail.com', '', 'Maharastra', '', '568923895623', 'Carpenter', 1),
(3, 8, 'Billu', '9856235689', 'billu@gmail.com', 'Jaipur', 'Rajasthan', 'Sijo Cyriac2.jpg', '235645127856', 'Plumber', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_labour_category`
--

CREATE TABLE `tbl_labour_category` (
  `category_id` int(6) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_labour_category`
--

INSERT INTO `tbl_labour_category` (`category_id`, `category_name`) VALUES
(1, 'Mason'),
(2, 'Carpenter'),
(3, 'Electrician'),
(4, 'Plumber');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'Cyriac62', 'Cyriac@62', 'customer', 1),
(2, 'Antonytt', 'Antony@12', 'contractor', 1),
(3, 'Babu12', 'Babu@12', 'labour', 1),
(4, 'admin', 'password', 'admin', 1),
(5, 'JohnKJ', 'John@79', 'contractor', 1),
(8, 'Billu97', 'Billu@97', 'labour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(6) NOT NULL,
  `state_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `state_name`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Maharastra'),
(4, 'Kerala'),
(5, 'Tamil Nadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
