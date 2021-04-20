-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 06:20 PM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `login_id` int(10) NOT NULL,
  `reg_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`login_id`, `reg_id`, `name`, `phno`, `email_id`) VALUES
(1, 1, 'Sanju Joseph', '9961717047', 'admin@gmail.com');

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
(1, 2, 5, 'plastering cracks', 1);

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
  `spec` varchar(50) NOT NULL,
  `dist_name` varchar(20) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `spec`, `dist_name`, `state_name`, `status`) VALUES
(1, 4, 'Antony Mathai', 'anto@gmail.com', '6589324512', 'RL-ABS/DC/45', 'pic1.jpg', 'HomeJoy', 'House Construction', 'Kottayam', 'Kerala', 1),
(2, 5, 'Melbin Joseph', 'melby@yahoo.com', '7845126325', 'AL-YH/124/LY', 'pic2.jpg', 'KJ Construction', 'Apartment Construction', 'Alappuzha', 'Kerala', 1);

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
(1, 2, 'Joshy John', 'Karackattu House, Panamattom, Kottayam', 'Panamattom', 686521, '9447153275', 'joshy@gmail.com', 'Kottayam', 'Kerala', 1),
(2, 3, 'Biju Jose', 'Pulpel, North Karunagappally', 'Aroor', 686352, '8956231245', 'biju@yahoo.com', 'Thrissur', 'Kerala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_progress_report`
--

CREATE TABLE `tbl_daily_progress_report` (
  `report_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `login_id` int(10) NOT NULL,
  `from_login_id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `activityDetails` varchar(100) NOT NULL,
  `fdate` varchar(100) NOT NULL,
  `tdate` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_progress_report`
--

INSERT INTO `tbl_daily_progress_report` (`report_id`, `title`, `login_id`, `from_login_id`, `description`, `activityDetails`, `fdate`, `tdate`, `status`) VALUES
(1, 'Apartment Construction', 2, 5, 'Concrete work started', 'site6.jpg', '2021-04-19', '2021-04-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `did` int(6) NOT NULL,
  `sid` int(6) NOT NULL,
  `dist_name` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`did`, `sid`, `dist_name`, `status`) VALUES
(1, 1, 'Jaipur', 1),
(2, 1, 'Ajmer', 1),
(3, 2, 'Bhopal', 1),
(4, 2, 'Indore', 1),
(5, 3, 'Mumbai', 1),
(6, 3, 'Nagpur', 1),
(7, 4, 'Lucknow', 1),
(8, 4, 'Agra', 1),
(9, 5, 'Gandhinagar', 1),
(10, 5, 'Ahmedabad', 1),
(11, 6, 'Bangalore', 1),
(12, 6, 'Mysore', 1),
(13, 7, 'Chennai', 1),
(14, 7, 'Salem', 1),
(15, 8, 'Palakkad', 1),
(16, 8, 'Kozhikode', 1),
(17, 8, 'Thrissur', 1),
(18, 8, 'Kottayam', 1),
(19, 8, 'Alappuzha', 1),
(20, 8, 'Ernakulam', 1),
(21, 4, 'Mirzapur', 1),
(22, 9, 'Hyderabad', 1),
(23, 10, 'Dispur', 1),
(24, 11, 'Itanagar', 1),
(25, 12, 'Kolkata', 1),
(26, 8, 'Kollam', 1),
(27, 1, 'Goori', 1),
(28, 12, 'Gouwa', 1),
(29, 8, 'Malappuram', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_est`
--

CREATE TABLE `tbl_est` (
  `est_id` int(10) NOT NULL,
  `proj_id` int(10) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `contractor_name` varchar(100) NOT NULL,
  `total_cost` varchar(100) NOT NULL,
  `concrete` varchar(100) NOT NULL,
  `brick` varchar(100) NOT NULL,
  `door` varchar(100) NOT NULL,
  `electrical` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_est`
--

INSERT INTO `tbl_est` (`est_id`, `proj_id`, `cust_name`, `contractor_name`, `total_cost`, `concrete`, `brick`, `door`, `electrical`, `status`) VALUES
(1, 1, 'Joshy John', 'Melbin Joseph', '3330000', '148000', '243000', '2305000', '60000', 1);

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
  `location` varchar(50) NOT NULL,
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

INSERT INTO `tbl_labours_reg` (`lid`, `login_id`, `labour_name`, `phoneno`, `email_id`, `location`, `dist_name`, `state_name`, `aadharcard`, `adhar_no`, `category_name`, `status`) VALUES
(1, 6, 'Babu Meth', '7124563210', 'babu21@gmail.com', 'Kanjirappally', 'Kottayam', 'Kerala', 'adhar3.jpg', '841236521478', 'Mason', 1),
(2, 7, 'Ajay KT', '7563241811', 'ajay@gmail.com', 'Cherthala', 'Alappuzha', 'Kerala', 'adhar2.jpg', '451223568978', 'Plumber', 1);

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
(2, 'Plumber', 1),
(3, 'Mason', 1);

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
(2, 'Joshy12', 'e92f7ef550f57601a5a3b459a37188bc', 'customer', 1),
(3, 'Biju12', '5739d5ba6421673a73496d114c436f3a', 'customer', 1),
(4, 'Antony', '24ac2aa845f7f918365bad4d8220183c', 'contractor', 1),
(5, 'Melby', 'bc3e376ba8cfd09214607cb93c39875d', 'contractor', 1),
(6, 'Babu12', '94c83d72c6f543c727563608c3c3b2f8', 'labour', 1),
(7, 'Ajay99', '4d1ae1517894149a3e13b58e03cd760c', 'labour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `paymentid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `expdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postoff`
--

CREATE TABLE `tbl_postoff` (
  `pid` int(10) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postoff`
--

INSERT INTO `tbl_postoff` (`pid`, `post_office`, `status`) VALUES
(1, 'Koorali', 1),
(2, 'Panamattom', 1),
(3, 'Chengalam', 1),
(4, 'Aroor', 1),
(5, 'Beypore', 1),
(6, 'Changanassery', 1),
(7, 'Kolkata', 1),
(8, 'Chennai', 1),
(9, 'Tirunelveli', 1),
(10, 'Coimbatore', 1),
(11, 'Belthangady', 1),
(12, 'Mysore', 1),
(13, 'Ahmedabad', 1),
(14, 'Vadodara', 0),
(15, 'Surat', 0),
(16, 'Agra', 0),
(17, 'Bomdila', 0),
(18, 'Madurai', 0),
(19, 'Kanjirappally', 1);

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
(1, 5, 'team-1.jpg', 6),
(2, 4, 'team-6.jpg', 9);

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
  `package` varchar(100) NOT NULL,
  `no_of_floors` int(10) NOT NULL,
  `sqfeet` int(255) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`proj_id`, `yur_service`, `site_address`, `proj_plan`, `bidamt`, `package`, `no_of_floors`, `sqfeet`, `cust_id`, `contractor_id`, `status`) VALUES
(1, 'Apartment Construction', 'Panamattom, Kottayam', 'plan6.jpg', '5000000', 'Premium Package', 5, 1800, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `serv_id` int(10) NOT NULL,
  `service` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`serv_id`, `service`, `status`) VALUES
(1, 'Apartment Construction', 1),
(2, 'House Construction', 1),
(3, 'Flat Construction', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_loc`
--

CREATE TABLE `tbl_site_loc` (
  `sid` int(10) NOT NULL,
  `proj_name` varchar(100) NOT NULL,
  `site_loc` varchar(100) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `contractor_name` varchar(100) NOT NULL,
  `labour_name` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_site_loc`
--

INSERT INTO `tbl_site_loc` (`sid`, `proj_name`, `site_loc`, `fdate`, `tdate`, `contractor_name`, `labour_name`, `status`) VALUES
(1, 'House Construction', 'Panamattam, Kottayam', '2021-04-19', '2021-04-26', 'Antony Mathai', 'Babu Meth', 1);

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
(12, 'West Bengal', 1),
(13, 'Meghalaya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weekly_wages`
--

CREATE TABLE `tbl_weekly_wages` (
  `wageid` int(10) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `lid` int(10) NOT NULL,
  `wages` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`reg_id`);

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
-- Indexes for table `tbl_est`
--
ALTER TABLE `tbl_est`
  ADD PRIMARY KEY (`est_id`);

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
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `tbl_site_loc`
--
ALTER TABLE `tbl_site_loc`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_weekly_wages`
--
ALTER TABLE `tbl_weekly_wages`
  ADD PRIMARY KEY (`wageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daily_progress_report`
--
ALTER TABLE `tbl_daily_progress_report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_est`
--
ALTER TABLE `tbl_est`
  MODIFY `est_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_postoff`
--
ALTER TABLE `tbl_postoff`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_prof`
--
ALTER TABLE `tbl_prof`
  MODIFY `prof_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `proj_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `serv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_site_loc`
--
ALTER TABLE `tbl_site_loc`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_weekly_wages`
--
ALTER TABLE `tbl_weekly_wages`
  MODIFY `wageid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
