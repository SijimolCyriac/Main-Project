-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 03:41 PM
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
-- Table structure for table `tbl_attnd`
--

CREATE TABLE `tbl_attnd` (
  `attnd_id` int(10) NOT NULL,
  `proj_id` int(10) NOT NULL,
  `cdate` varchar(100) NOT NULL DEFAULT '',
  `contractor_name` varchar(100) NOT NULL,
  `labour_name` varchar(100) NOT NULL,
  `attd` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attnd`
--

INSERT INTO `tbl_attnd` (`attnd_id`, `proj_id`, `cdate`, `contractor_name`, `labour_name`, `attd`, `status`) VALUES
(1, 1, '2021-06-06', 'Antony Mathai', 'Appu Jose', 'Present', 1),
(2, 1, '2021-06-07', 'Antony Mathai', 'Vishal Dev', 'Present', 1),
(3, 2, '2021-06-08', 'Manu Philip', 'Ajay KT', 'Present', 1),
(4, 2, '2021-06-08', 'Manu Philip', 'Babu Meth', 'Present', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `comp_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `to_login_id` int(10) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `ccstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`comp_id`, `login_id`, `to_login_id`, `complaint`, `ccstatus`) VALUES
(1, 3, 21, 'roof leakage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comp_assignlab`
--

CREATE TABLE `tbl_comp_assignlab` (
  `assign_id` int(10) NOT NULL,
  `comp_id` int(10) NOT NULL,
  `proj_id` int(10) NOT NULL,
  `labour_name` varchar(100) NOT NULL,
  `cstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comp_assignlab`
--

INSERT INTO `tbl_comp_assignlab` (`assign_id`, `comp_id`, `proj_id`, `labour_name`, `cstatus`) VALUES
(1, 1, 2, 'Babu Meth', 1);

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
  `photo` varchar(1000) NOT NULL,
  `yoexp` int(10) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `spec`, `dist_name`, `state_name`, `photo`, `yoexp`, `status`) VALUES
(1, 4, 'Antony Mathai', 'anto@gmail.com', '6523895623', 'RL-ABS/DC/45', 'pic1.jpg', 'HomeJoy', 'House Construction', 'Kottayam', 'Kerala', 'person_3.jpg', 8, 1),
(2, 5, 'Melbin Joseph', 'melby@yahoo.com', '7845126325', 'AL-YH/124/LY', 'pic2.jpg', 'KJ Construction', 'Apartment Construction', 'Alappuzha', 'Kerala', 'person_4.jpg', 9, 1),
(3, 8, 'Vasu Dev', 'vasu@gmail.com', '7412365894', 'BJ-156/TF', 'pic3.jpg', 'HomR', 'House Construction', 'Ernakulam', 'Kerala', 'person_2.jpg', 5, 1),
(4, 14, 'Maya Shivan', 'maya@gmail.com', '6325412356', 'HX-NM/359/CD', 'pic3.jpg', 'Unique', 'Apartment Construction', 'Kottayam', 'Kerala', 'team-4.jpg', 7, 1),
(5, 18, 'Siby Jose', 'siby@gmail.com', '8852413689', 'FG-45/NM/41', 'pic4.jpg', 'DREAM', 'Office Construction', 'Alappuzha', 'Kerala', 'team-5.jpg', 10, 1),
(6, 21, 'Manu Philip', 'manu@yahoo.com', '6547894561', 'CV-32/87/SD', 'pic4.jpg', 'ASCOTIA', 'Office Construction', 'Thrissur', 'Kerala', 'team-8.jpg', 5, 1),
(7, 23, 'Hermus Alex', 'hermus@gmail.com', '8461352792', 'GB-OP/45/25', 'pic5.jpg', 'Kajaria Constructions', 'Flat Construction', 'Ernakulam', 'Kerala', 'person_1.jpg', 10, 1);

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
(1, 2, 'Joshy John', 'Karackattu House', 'Panamattom', 686521, '9447153275', 'joshy@gmail.com', 'Kottayam', 'Kerala', 1),
(2, 3, 'Biju Jose', 'Pulpel', 'Aroor', 686352, '8956231245', 'biju@yahoo.com', 'Thrissur', 'Kerala', 1),
(3, 15, 'Mahesh T K', 'Thevarmadam', 'Kanjirappally', 686412, '9631452356', 'mahi@gmail.com', 'Kottayam', 'Kerala', 1),
(4, 16, 'Pranav Unni', 'Brindavanam', 'Cherthala', 686522, '6541235689', 'pranav@gmail.com', 'Alappuzha', 'Kerala', 1),
(5, 17, 'Vinod Jose', 'Vinodnivas', 'Chengalam', 635214, '9865234512', 'vinod@yahoo.com', 'Ernakulam', 'Kerala', 1),
(6, 20, 'Liya Cyriac', 'Kappil', 'Aroor', 686500, '7456238954', 'liya@gmail.com', 'Thrissur', 'Kerala', 1),
(7, 22, 'Binoy Jose', 'Punnackal', 'Poomkavu', 688001, '6523894512', 'binoy@gmail.com', 'Alappuzha', 'Kerala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_progress_report`
--

CREATE TABLE `tbl_daily_progress_report` (
  `report_id` int(10) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `activityDetails` varchar(100) NOT NULL,
  `fdate` varchar(100) NOT NULL,
  `tdate` varchar(100) NOT NULL,
  `dstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_progress_report`
--

INSERT INTO `tbl_daily_progress_report` (`report_id`, `proj_id`, `description`, `activityDetails`, `fdate`, `tdate`, `dstatus`) VALUES
(1, 1, 'concrete work started', 'site8.jpg', '2021-05-31', '2021-06-05', 1),
(2, 2, 'concrete work started', 'site5.jpg', '2021-05-31', '2021-06-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_wages`
--

CREATE TABLE `tbl_daily_wages` (
  `wageid` int(10) NOT NULL,
  `attnd_id` int(10) NOT NULL,
  `wages` int(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daily_wages`
--

INSERT INTO `tbl_daily_wages` (`wageid`, `attnd_id`, `wages`, `status`) VALUES
(1, 1, 500, 1),
(2, 2, 500, 1),
(3, 3, 500, 1),
(4, 4, 500, 1);

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
(29, 8, 'Malappuram', 1),
(30, 8, 'Trivandrum', 1),
(31, 7, 'Madhurai', 0);

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
  `floor` varchar(100) NOT NULL,
  `paint` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_est`
--

INSERT INTO `tbl_est` (`est_id`, `proj_id`, `cust_name`, `contractor_name`, `total_cost`, `concrete`, `brick`, `door`, `electrical`, `floor`, `paint`, `status`) VALUES
(1, 1, 'Joshy John', 'Antony Mathai', '2625000', '122500', '140625', '1501000', '55000', '168750', '122500', 1),
(2, 2, 'Biju Jose', 'Manu Philip', '1950000', '156000', '75000', '712111.1111111111', '60000', '87500', '136500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fid` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
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
(2, 7, 'Ajay KT', '7563241811', 'ajay@gmail.com', 'Cherthala', 'Alappuzha', 'Kerala', 'adhar2.jpg', '451223568978', 'Plumber', 1),
(3, 9, 'Billu', '6523894512', 'billu@yahoo.com', 'Kaloor', 'Ernakulam', 'Kerala', 'adhar2.jpg', '561478321002', 'Electrician', 1),
(4, 10, 'Appu Jose', '6874125632', 'appu@yahoo.com', 'Ponkunnam', 'Kottayam', 'Kerala', 'Aadhar2.pdf', '235689451245', 'Mason', 1),
(5, 11, 'Solomon', '6652234125', 'solo@gmail.com', 'Thumboli', 'Alappuzha', 'Kerala', 'Aadhar3.pdf', '963258965231', 'Electrician', 1),
(6, 12, 'Alex', '7412457865', 'alex@gmail.com', 'Palarivattam', 'Ernakulam', 'Kerala', 'adhar2.jpg', '235689562389', 'Electrician', 1),
(7, 13, 'Abdulla', '8523124578', 'abdul@gmail.com', 'Poomkavu', 'Alappuzha', 'Kerala', 'adhar2.jpg', '741256238945', 'Plumber', 1),
(8, 19, 'Vishal Dev', '6641235689', 'vishal@gmail.com', 'Cherthala', 'Alappuzha', 'Kerala', 'adhar4.jpg', '234512568974', 'Mason', 1),
(9, 24, 'George James', '9647523689', 'georgy@gmail.com', 'Pala', 'Kottayam', 'Kerala', 'adhar3.jpg', '214521456987', 'Painter', 1);

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
(3, 'Mason', 1),
(4, 'Welder', 1),
(5, 'Structural Work', 0),
(6, 'Painter', 1),
(7, 'Carpenter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `leave_id` int(10) NOT NULL,
  `leave_date` varchar(100) NOT NULL,
  `applied_on` varchar(100) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `lid` int(10) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `lstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leave_id`, `leave_date`, `applied_on`, `contractor_id`, `lid`, `reason`, `lstatus`) VALUES
(1, '2021-06-04', '2021-06-06', 1, 4, 'fever', 1),
(2, '2021-06-04', '2021-06-08', 6, 2, 'personal', 1);

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
(7, 'Ajay99', '4d1ae1517894149a3e13b58e03cd760c', 'labour', 1),
(8, 'VasuDev', '7fac4f9acbbd84236213e1ca149e8fee', 'contractor', 1),
(9, 'Billu', 'f1796be12f5fc9e13e9cf6a4338dd56a', 'labour', 1),
(10, 'Appu12', '76d1574c42e995d9203a459c8f579f4c', 'labour', 1),
(11, 'Solomon', 'e20337809d8c33358e18473cac1493b8', 'labour', 1),
(12, 'Alex', 'c3d20e02b5b69f2f6b71dd445a05103d', 'labour', 1),
(13, 'Abdul', 'ea1a5dcd68cedd2ffaeee642932e8848', 'labour', 1),
(14, 'Maya', '75f86de91fadb4495442fce4dd7ac6cd', 'contractor', 1),
(15, 'Mahi', 'd7596a52e636031f769892dc0c218b72', 'customer', 1),
(16, 'Pranav', '236b8826131bcb7ecbbe77506ba18adf', 'customer', 1),
(17, 'Vinod', 'c6e6d499a354de40c2485e4b44bbc353', 'customer', 1),
(18, 'Siby', '64c23cb6658a740148d6d007760f8cf1', 'contractor', 1),
(19, 'Vishal', 'ce62a796a473947f38aa8c13a654c8c0', 'labour', 1),
(20, 'Liya', 'bf7414443685fc561549768762732db3', 'customer', 1),
(21, 'Manu', '4404dfe5492b8d9dc697232d719c8725', 'contractor', 1),
(22, 'Binoy', 'af91d6e7e33c2fa4ad296225cae316b1', 'customer', 1),
(23, 'Hermus12', '404242eaf15e3e2f828b5eb649f02a7c', 'contractor', 1),
(24, 'Georgy', '9d71f5c77dd53fff8be52dcb2d4edcd9', 'labour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pay_id` int(10) NOT NULL,
  `proj_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `amount` int(11) NOT NULL,
  `pstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `proj_id`, `date`, `amount`, `pstatus`) VALUES
(1, 1, '2021-06-06 09:30:55.443612', 25000, 1),
(2, 1, '2021-06-06 09:31:51.338634', 25000, 1),
(3, 2, '2021-06-08 12:48:43.565918', 25000, 1),
(4, 2, '2021-06-08 12:50:38.833935', 25000, 0);

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
(19, 'Kanjirappally', 1),
(21, 'Poomkavu', 1),
(22, 'Kaloor', 1),
(23, 'Pala', 1),
(24, 'Paika', 1),
(25, 'Edappally', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `proj_id` int(10) NOT NULL,
  `yur_service` varchar(100) NOT NULL,
  `site_address` varchar(100) NOT NULL,
  `proj_plan` varchar(1000) NOT NULL,
  `package` varchar(100) NOT NULL,
  `no_of_floors` int(10) NOT NULL,
  `sqfeet` int(255) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `contractor_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `proj_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`proj_id`, `yur_service`, `site_address`, `proj_plan`, `package`, `no_of_floors`, `sqfeet`, `cust_id`, `contractor_id`, `status`, `proj_status`) VALUES
(1, 'House Construction', 'Vanchimala Kavala, Ponkunnam, Kottayam dist', 'plan1.jpg', 'Standard Package', 1, 1500, 1, 1, 1, 1),
(2, 'Office Construction', 'Mithilapuri North, Pala, Kottayam', 'plan2.jpg', 'Premium Package', 2, 1000, 2, 6, 1, 1);

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
(3, 'Flat Construction', 1),
(4, 'Villa Construction', 1),
(5, 'Office Construction', 1),
(6, 'Shop Construction', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_loc`
--

CREATE TABLE `tbl_site_loc` (
  `sid` int(10) NOT NULL,
  `proj_id` int(10) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `contractor_name` varchar(100) NOT NULL,
  `labour_name` varchar(100) NOT NULL,
  `sstatus` int(10) NOT NULL,
  `proj_sstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_site_loc`
--

INSERT INTO `tbl_site_loc` (`sid`, `proj_id`, `fdate`, `tdate`, `contractor_name`, `labour_name`, `sstatus`, `proj_sstatus`) VALUES
(1, 1, '2021-05-31', '2021-06-05', 'Antony Mathai', 'Appu Jose', 1, 2),
(2, 1, '2021-05-31', '2021-06-05', 'Antony Mathai', 'Vishal Dev', 1, 1),
(3, 2, '2021-05-31', '2021-06-05', 'Manu Philip', 'Babu Meth', 1, 1),
(4, 2, '2021-05-31', '2021-06-05', 'Manu Philip', 'Ajay KT', 1, 1);

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
(13, 'Meghalaya', 0),
(22, 'Himachal Pradesh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_attnd`
--
ALTER TABLE `tbl_attnd`
  ADD PRIMARY KEY (`attnd_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `tbl_comp_assignlab`
--
ALTER TABLE `tbl_comp_assignlab`
  ADD PRIMARY KEY (`assign_id`);

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
-- Indexes for table `tbl_daily_wages`
--
ALTER TABLE `tbl_daily_wages`
  ADD PRIMARY KEY (`wageid`);

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
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tbl_postoff`
--
ALTER TABLE `tbl_postoff`
  ADD PRIMARY KEY (`pid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attnd`
--
ALTER TABLE `tbl_attnd`
  MODIFY `attnd_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_comp_assignlab`
--
ALTER TABLE `tbl_comp_assignlab`
  MODIFY `assign_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_daily_progress_report`
--
ALTER TABLE `tbl_daily_progress_report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daily_wages`
--
ALTER TABLE `tbl_daily_wages`
  MODIFY `wageid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_est`
--
ALTER TABLE `tbl_est`
  MODIFY `est_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `leave_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_postoff`
--
ALTER TABLE `tbl_postoff`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `proj_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `serv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_site_loc`
--
ALTER TABLE `tbl_site_loc`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
