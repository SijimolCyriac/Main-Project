-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:14 AM
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
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `comp_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `to_login_id` int(10) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`comp_id`, `login_id`, `to_login_id`, `complaint`, `status`) VALUES
(1, 2, 5, 'DFfuy hbjh jhjhjoi hujholjo', 1),
(2, 8, 4, 'electrical problem', 0),
(3, 2, 5, 'Roof leakage', 0);

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
  `status` int(5) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `dist_name`, `state_name`, `status`, `available`) VALUES
(1, 4, 'Antony Mathai', 'anto@gmail.com', '8658932468', 'MB-123/YT/41', '500034400829_173191.jpg', 'Airlift Constructions', 'Itanagar', 'Arunachal Pradesh', 1, 1),
(2, 5, 'Melbin Joseph', 'melbin94@yahoo.com', '7416984652', 'PR-112/LK/54', '500041400060_90873.jpg', 'HomeJoy', 'Mumbai', 'Maharastra', 1, 1),
(3, 9, 'Vasu Devan', 'vas@gmail.com', '7634893156', 'LX-54/RET/89', '500041500235_91440.jpg', 'Fieldwire Constructions', 'Itanagar', 'Arunachal Pradesh', 1, 0),
(4, 12, 'Rajesh Singh', 'raje@gmail.com', '6235412036', 'LI-123/562', '500034400829_173191.jpg', 'LJkjh Dst', 'Itanagar', 'Arunachal Pradesh', 1, 1),
(5, 15, 'Siby Jose', 'siby@yahoo.com', '7530145864', 'VB-547/45/14', '500033300029_266656.jpg', 'SJ Construction', 'Alappuzha', 'Kerala', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_reg`
--

CREATE TABLE `tbl_customer_reg` (
  `cust_id` int(6) NOT NULL,
  `login_id` int(6) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `post_office` varchar(30) NOT NULL,
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
(1, 1, 'Sanju Joseph', 'Punnackal', 'Beypore', 146325, '7563241801', 'sanju@yahoo.com', 'Hyderabad', 'Telungana', 1),
(2, 2, 'Cyriac K J', 'Karackattu House', 'Koorali', 686522, '9961707047', 'cyriackj@gmail.com', 'Kottayam', 'Kerala', 1),
(3, 3, 'Alex P V', 'Thadathil', 'Mysore', 146325, '7563241894', 'alex@yahoo.com', 'Bangalore', 'Karnataka', 1),
(4, 8, 'Maya Shivan', 'Mayanisam', 'Surat', 456328, '6841354793', 'maya@yahoo.com', 'Jaipur', 'Rajasthan', 1),
(5, 11, 'Hermus Alex', 'Kochuveettil', 'Kolkata', 235689, '7103468251', 'hermus45@yahoo.com', 'Hyderabad', 'Telungana', 1),
(6, 14, 'Pranav Vinod', 'Narimattam', 'Panamattom', 686523, '9417324682', 'pranav@gmail.com', 'Alappuzha', 'Kerala', 1),
(7, 17, 'Vinod S', 'Thayyil', 'Coimbatore', 623589, '7613498235', 'vinod@gmail.com', 'Agra', 'Uttar Pradesh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_progress_report`
--

CREATE TABLE `tbl_daily_progress_report` (
  `report_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `login_id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `activityDetails` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_progress_report`
--

INSERT INTO `tbl_daily_progress_report` (`report_id`, `title`, `login_id`, `description`, `activityDetails`, `date`, `status`) VALUES
(1, 'House Construction', 2, 'Day 1 : Concrete', 'CT20203062403_Application.pdf', '2021-01-28', 0),
(2, 'Day 2  Concrete', 2, 'Work Started', 'Assignment 3.pdf', '2021-01-11', 1),
(3, 'Day 1 Concrete Work', 8, 'Completed concrete work', 'about.jpg', '2021-01-11', 0),
(4, 'Foundation Work', 0, 'Foundation work completed', 'work-4.jpg', '2021-01-11', 1);

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
(1, 1, 'Jaipur'),
(2, 1, 'Ajmer'),
(3, 2, 'Bhopal'),
(4, 2, 'Indore'),
(5, 3, 'Mumbai'),
(6, 3, 'Nagpur'),
(7, 4, 'Lucknow'),
(8, 4, 'Agra'),
(9, 5, 'Gandhinagar'),
(10, 5, 'Ahmedabad'),
(11, 6, 'Bangalore'),
(12, 6, 'Mysore'),
(13, 7, 'Chennai'),
(14, 7, 'Salem'),
(15, 8, 'Palakkad'),
(16, 8, 'Kozhikode'),
(17, 8, 'Thrissur'),
(18, 8, 'Kottayam'),
(19, 8, 'Alappuzha'),
(20, 8, 'Ernakulam'),
(21, 4, 'Mirzapur'),
(22, 9, 'Hyderabad'),
(23, 10, 'Dispur'),
(24, 11, 'Itanagar'),
(25, 12, 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fid` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 6, 'Babu Meyth', '8469745682', 'babu21@gmail.com', 'Jaipur', 'Rajasthan', 'IMG_0007.jpg', '561245793256', 'Mason', 1),
(2, 7, 'Billu Sett', '6589235689', 'billu@gmail.com', 'Gandhinagar', 'Gujarat', 'Aadhar2.pdf', '235641258963', 'Electrician', 1),
(3, 10, 'Abhilash', '8419320314', 'abhi46@gmail.com', 'Nagpur', 'Maharastra', 'Sijo Cyriac2.jpg', '379146825493', 'Plumber', 0),
(4, 13, 'Shivan R', '7875623896', 'shiv@yahoo.com', 'Kolkata', 'West Bengal', 'IMG_0007.jpg', '561402361498', 'Painting', 1),
(5, 16, 'Ajay Pillai', '8134895623', 'ajay@yahoo.com', 'Alappuzha', 'Kerala', 'Sijo Cyriac2.jpg', '451278963017', 'Electrician', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_labour_category`
--

CREATE TABLE `tbl_labour_category` (
  `category_id` int(6) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_labour_category`
--

INSERT INTO `tbl_labour_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Electrician', 1),
(2, 'Mason', 1),
(3, 'Plumber', 1),
(4, 'Carpenter', 1),
(5, 'Painting', 1),
(6, 'Wielding', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'Admin', '3b49f591bd7b293753d6c866c264484a', 'admin', 1),
(2, 'Cyriac62', 'bb74719bcc9b3d5b9d8a6f8af2f1b5ec', 'customer', 1),
(3, 'Alex', 'eba2bc1aed19156f170516fd034bd5f9', 'customer', 1),
(4, 'Antony', '24ac2aa845f7f918365bad4d8220183c', 'contractor', 1),
(5, 'Melby', 'bc3e376ba8cfd09214607cb93c39875d', 'contractor', 1),
(6, 'Babu12', '94c83d72c6f543c727563608c3c3b2f8', 'labour', 1),
(7, 'Billu97', 'f1796be12f5fc9e13e9cf6a4338dd56a', 'labour', 1),
(8, 'Maya', '75f86de91fadb4495442fce4dd7ac6cd', 'customer', 1),
(9, 'VasuDev', '7fac4f9acbbd84236213e1ca149e8fee', 'contractor', 1),
(10, 'Abhi37', 'c9b3c250d9c26509eecf0cbcf8571269', 'labour', 0),
(11, 'Hermus45', 'dc9958fc5574ceb89013250c644f1ef9', 'customer', 1),
(12, 'Rajesh12', '4b588b425398aae549b685ad6dee0b3a', 'contractor', 1),
(13, 'Shivan89', '4d15592c79c7b467a9b17bdc2b3f6f0e', 'labour', 1),
(14, 'Pranav12', '236b8826131bcb7ecbbe77506ba18adf', 'customer', 1),
(15, 'Siby99', '64c23cb6658a740148d6d007760f8cf1', 'contractor', 1),
(16, 'Ajay1', '4d1ae1517894149a3e13b58e03cd760c', 'labour', 1),
(17, 'Vinod12', 'c6e6d499a354de40c2485e4b44bbc353', 'customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monthly_wages`
--

CREATE TABLE `tbl_monthly_wages` (
  `wageid` int(10) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `lid` int(10) NOT NULL,
  `wages` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `paymentid` int(10) NOT NULL,
  `payerid` int(10) NOT NULL,
  `payeeid` int(10) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postoff`
--

CREATE TABLE `tbl_postoff` (
  `pid` int(10) NOT NULL,
  `post_office` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postoff`
--

INSERT INTO `tbl_postoff` (`pid`, `post_office`) VALUES
(1, 'Koorali'),
(2, 'Panamattom'),
(3, 'Chengalam'),
(4, 'Aroor'),
(5, 'Beypore'),
(6, 'Changanassery'),
(7, 'Kolkata'),
(8, 'Chennai'),
(9, 'Tirunelveli'),
(10, 'Coimbatore'),
(11, 'Belthangady'),
(12, 'Mysore'),
(13, 'Ahmedabad'),
(14, 'Vadodara'),
(15, 'Surat'),
(16, 'Agra'),
(17, 'Bomdila'),
(18, 'Madurai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof`
--

CREATE TABLE `tbl_prof` (
  `prof_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `yoexp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prof`
--

INSERT INTO `tbl_prof` (`prof_id`, `login_id`, `photo`, `yoexp`) VALUES
(1, 9, 'Photo0244.jpg', 8),
(2, 9, 'Photo0244.jpg', 8),
(3, 9, 'Photo0244.jpg', 8),
(4, 9, 'Photo0244.jpg', 8),
(5, 9, 'Photo0244.jpg', 8),
(6, 5, 'person_3.jpg', 11),
(7, 5, 'person_3.jpg', 11),
(8, 4, 'team-8.jpg', 6),
(9, 12, 'team-5.jpg', 5),
(10, 12, 'team-5.jpg', 5),
(11, 15, 'person_2.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `proj_id` int(10) NOT NULL,
  `yur_service` varchar(100) NOT NULL,
  `site_address` varchar(100) NOT NULL,
  `proj_plan` varchar(1000) NOT NULL,
  `bidamt` varchar(1000) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`proj_id`, `yur_service`, `site_address`, `proj_plan`, `bidamt`, `cust_id`, `contractor_id`, `status`) VALUES
(1, 'Construction', 'Mithilapuri North 74 Kottayam', 'Table Design.pdf', '5000000', 2, 2, 1),
(2, 'Construction', 'Pala South Kottayam', 'bg_1.jpg', '800000', 4, 1, 1),
(3, 'Construction', 'Mithilapuri North Kottayam', 'work-5.jpg', '1000000', 7, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(6) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `state_name`, `status`) VALUES
(1, 'Rajasthan', 1),
(2, 'Madhya Pradesh', 1),
(3, 'Maharastra', 1),
(4, 'Uttar Pradesh', 1),
(5, 'Gujarat', 1),
(6, 'Karnataka', 1),
(7, 'Tamil Nadu', 1),
(8, 'Kerala', 1),
(9, 'Telungana', 1),
(10, 'Assam', 1),
(11, 'Arunachal Pradesh', 1),
(12, 'West Bengal', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`comp_id`);

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
-- Indexes for table `tbl_daily_progress_report`
--
ALTER TABLE `tbl_daily_progress_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fid`);

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
-- Indexes for table `tbl_monthly_wages`
--
ALTER TABLE `tbl_monthly_wages`
  ADD PRIMARY KEY (`wageid`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `tbl_postoff`
--
ALTER TABLE `tbl_postoff`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_prof`
--
ALTER TABLE `tbl_prof`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_daily_progress_report`
--
ALTER TABLE `tbl_daily_progress_report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_monthly_wages`
--
ALTER TABLE `tbl_monthly_wages`
  MODIFY `wageid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_postoff`
--
ALTER TABLE `tbl_postoff`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_prof`
--
ALTER TABLE `tbl_prof`
  MODIFY `prof_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `proj_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
