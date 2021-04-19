-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 06:29 PM
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
(1, 1, 'Sanju Joseph', '7563241811', 'sanju@yahoo.com');

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
(3, 2, 5, 'Roof leakage', 0),
(4, 17, 12, 'Roof leakage', 0),
(5, 18, 4, 'Roof Leakage', 0),
(6, 18, 4, 'vkhhjijo', 0),
(7, 18, 4, 'bjkhbkjhnkjhnlj', 0),
(8, 18, 15, 'Water leakage', 1),
(9, 18, 0, 'bjnkljkljkl', 0),
(10, 18, 0, 'gghohoi', 0),
(11, 18, 0, 'sdrfdsfgx', 0),
(12, 18, 15, 'vbcvnnv', 0),
(13, 2, 5, 'vhgh hbjhjki', 0),
(17, 2, 5, 'uiyuy hhhoi', 0),
(18, 2, 15, 'vghghkku', 1),
(19, 2, 15, 'nbjknjxlfjbckxbj', 0),
(20, 2, 5, 'bfghcx', 0),
(21, 18, 25, 'vjvj bjhjh bjkhjlijij', 0),
(22, 18, 25, 'Aesytfy, giuhuohu', 0),
(23, 18, 25, 'xfdf, Asrydytt gvggj hbhkuhi.', 0);

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
  `status` int(5) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `spec`, `dist_name`, `state_name`, `status`, `available`) VALUES
(1, 4, 'Antony Mathai', 'anto@gmail.com', '8658932468', 'MB-123/YT/41', '500034400829_173191.jpg', 'Airlift Constructions', '', 'Itanagar', 'Arunachal Pradesh', 1, 1),
(2, 5, 'Melbin Joseph', 'melbin94@yahoo.com', '7416984652', 'PR-112/LK/54', '500041400060_90873.jpg', 'HomeJoy', '', 'Mumbai', 'Maharastra', 1, 1),
(3, 9, 'Vasu Devan', 'vas@gmail.com', '7634893156', 'LX-54/RET/89', '500041500235_91440.jpg', 'Fieldwire Constructions', '', 'Itanagar', 'Arunachal Pradesh', 1, 0),
(4, 12, 'Rajesh Singh', 'raje@gmail.com', '6235412036', 'LI-123/562', '500034400829_173191.jpg', 'LJkjh Dst', '', 'Itanagar', 'Arunachal Pradesh', 1, 1),
(5, 15, 'Siby Jose', 'siby@yahoo.com', '7530145864', 'VB-547/45/14', '500033300029_266656.jpg', 'SJ Construction', 'Office Construction', 'Alappuzha', 'Kerala', 1, 1),
(6, 25, 'Jojiiii', 'jojii@gmail.com', '8512463277', 'RL-ABS/BCD', 'Assignment 3.pdf', 'RYUTU', 'Home Construction', 'Kottayam', 'Kerala', 1, 0);

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
(2, 2, 'Cyriac K J', 'Karackattu House', 'Koorali', 686522, '9961717047', 'cyriackj@gmail.com', 'Kottayam', 'Kerala', 1),
(3, 3, 'Alex P V', 'Thadathil', 'Mysore', 146325, '7563241894', 'alex@yahoo.com', 'Bangalore', 'Karnataka', 1),
(4, 8, 'Maya Shivan', 'Mayanisam', 'Surat', 456328, '6841354793', 'maya@yahoo.com', 'Jaipur', 'Rajasthan', 1),
(5, 11, 'Hermus Alex', 'Kochuveettil', 'Kolkata', 235689, '7103468251', 'hermus45@yahoo.com', 'Hyderabad', 'Telungana', 1),
(6, 14, 'Pranav Vinod', 'Narimattam', 'Panamattom', 686523, '9417324682', 'pranav@gmail.com', 'Alappuzha', 'Kerala', 1),
(7, 17, 'Vinod S', 'Thayyil', 'Coimbatore', 623589, '7613498235', 'vinod@gmail.com', 'Agra', 'Uttar Pradesh', 1),
(8, 18, 'Binoy', 'Phjhjoijijggi', 'Kolkata', 124556, '7412563298', 'binoy@yahoo.com', 'Agra', 'Uttar Pradesh', 1),
(9, 26, 'Jacky', 'Hijhiu', 'Chennai', 521039, '7531493210', 'jack@gmail.com', '', 'Kerala', 1);

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
(1, 'House Construction', 2, 5, 'Day 1 : Concrete', 'image_6.jpg', '2021-01-28', '2021-02-6', 1),
(3, 'Day 1 Concrete Work', 8, 0, 'Completed concrete work', 'work-6.jpg', '2021-01-11', '2021-01-18', 1),
(9, 'Day 1 Structural work', 17, 0, 'Structural work Started', 'bg_2.jpg', '2021-03-01', '2021-03-08', 1),
(16, 'Day 3 Concrete', 18, 15, 'hfj  rd', 'home.jpg', '2021-04-05', '2021-04-10', 1),
(17, 'Day 4', 18, 15, 'vgbnv', 'image_8.jpg', '2021-04-06', '2021-04-11', 0),
(18, 'Apartment Construction', 18, 25, 'Gfugj bhbk,gygkhuhlohuiu.', 'bg_1.jpg', '2021-04-19', '2021-04-26', 0),
(19, 'Apartment Construction', 18, 25, 'vhgiki hbkhk hbholjoijpip', 'bg_1.jpg', '2021-05-03', '2021-05-08', 0),
(20, 'Office Construction', 2, 15, 'vhkhk jbkjnjljl', 'bg_1.jpg', '2021-05-03', '2021-05-08', 0),
(21, 'Apartment Construction', 18, 25, 'bkhbkj jbjnlnl', 'about.jpg', '2021-04-05', '2021-04-10', 0);

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
(27, 1, 'Goori', 0),
(28, 12, 'Gouwa', 0);

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
(1, 13, 'Binoy', 'Siby Jose', '2275000', '122500', '105625', '1127666.6666666667', '55000', 1),
(2, 14, 'Cyriac K J', 'Siby Jose', '3330000', '148000', '243000', '2305000', '60000', 0),
(3, 15, 'Binoy', 'Jojiiii', '4875000', '175500', '546875', '4723222.222222222', '70000', 0);

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
(1, 6, 'Babu Meth', '8469745682', 'babu21@gmail.com', '', 'Jaipur', 'Rajasthan', 'IMG_0007.jpg', '561245793256', 'Mason', 1),
(2, 7, 'Billu Sett', '6589235689', 'billu@gmail.com', '', 'Gandhinagar', 'Gujarat', 'Aadhar2.pdf', '235641258963', 'Electrician', 1),
(3, 10, 'Abhilash', '8419320314', 'abhi46@gmail.com', '', 'Nagpur', 'Maharastra', 'Sijo Cyriac2.jpg', '379146825493', 'Plumber', 1),
(4, 13, 'Shivan R', '7875623896', 'shiv@yahoo.com', '', 'Kolkata', 'West Bengal', 'IMG_0007.jpg', '561402361498', 'Painting', 1),
(5, 16, 'Ajay Pillai', '8134895623', 'ajay@yahoo.com', '', 'Alappuzha', 'Kerala', 'Sijo Cyriac2.jpg', '451278963017', 'Electrician', 1),
(6, 19, 'Krishna Das', '6521487941', 'das@yahoo.com', '', 'Mirzapur', 'Uttar Pradesh', 'Sijo Cyriac2.jpg', '783201458961', 'Wielding', 1),
(7, 21, 'Guna', '9545152356', 'ghg@gmail.com', 'Kanjirappally', 'Kottayam', 'Kerala', 'Assignment 3.pdf', '451289632569', 'Wielding', 1);

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
(6, 'Wielding', 1),
(7, 'Structural Work', 1),
(8, 'Kkhkj', 0),
(9, 'cvcxvbc', 0),
(10, 'gvg', 0),
(11, 'yugujygjuygiy', 0),
(12, 'bhbkkhk', 0),
(13, 'ppop', 0),
(14, 'ghii', 0),
(15, 'ihj', 0),
(16, 'gugiu', 0),
(18, 'gfjgj', 0),
(19, ' Mason', 0),
(20, ' Plumber', 0),
(21, '  Electrician', 0);

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
(10, 'Abhi37', 'c9b3c250d9c26509eecf0cbcf8571269', 'labour', 1),
(11, 'Hermus45', 'dc9958fc5574ceb89013250c644f1ef9', 'customer', 1),
(12, 'Rajesh12', '4b588b425398aae549b685ad6dee0b3a', 'contractor', 1),
(13, 'Shivan89', '4d15592c79c7b467a9b17bdc2b3f6f0e', 'labour', 1),
(14, 'Pranav12', '236b8826131bcb7ecbbe77506ba18adf', 'customer', 1),
(15, 'Siby99', '64c23cb6658a740148d6d007760f8cf1', 'contractor', 1),
(16, 'Ajay1', '4d1ae1517894149a3e13b58e03cd760c', 'labour', 1),
(17, 'Vinod12', 'c6e6d499a354de40c2485e4b44bbc353', 'customer', 1),
(18, 'Binoy12', 'af91d6e7e33c2fa4ad296225cae316b1', 'customer', 1),
(19, 'Krishna', 'fd3cd910989c5ba0d7b80c66c9e6d114', 'labour', 1),
(21, 'Kimkim12', '8cf0f7e17a5e4cae4799a0dadfaa13ad', 'labour', 1),
(25, 'Jojii12', '79175e19c58910f640fb6b53b752efd8', 'contractor', 1),
(26, 'Jack12', '97ef8e786de7cd4f589e9028ac64face', 'customer', 1);

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
(19, 'abcd', 0),
(20, '     Koorali', 1);

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
(6, 5, '', 11),
(7, 5, '', 11),
(8, 4, 'team-8.jpg', 6),
(9, 12, 'team-5.jpg', 5),
(10, 12, 'team-5.jpg', 5),
(11, 15, 'person_2.jpg', 9),
(12, 5, '', 11),
(13, 5, '', 11),
(14, 5, '', 11),
(15, 5, '', 11),
(16, 5, '', 11),
(17, 5, '', 11),
(18, 5, '', 11),
(19, 5, '', 11),
(20, 0, '', 11),
(21, 5, '', 11),
(22, 25, 'person_4.jpg', 7);

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
(1, 'Construction', 'Mithilapuri North 74 Kottayam', 'Table Design.pdf', '5000000', '', 0, 0, 2, 2, 1),
(2, 'Construction', 'Pala South Kottayam', 'bg_1.jpg', '800000', '', 0, 0, 4, 1, 1),
(3, 'Construction', 'Mithilapuri North Kottayam', 'work-5.jpg', '1000000', '', 0, 0, 7, 4, 1),
(13, 'Office Construction', 'fgkmg nbhgkg nbhbkb', 'Aadhar2.pdf', '4500000', 'Standard Package', 2, 1300, 8, 5, 1),
(14, 'Office Construction', 'vhk bjb jnln', 'work-1.jpg', '330000', 'Premium Package', 3, 1800, 2, 5, 0),
(15, 'Apartment Construction', '5th Mile, Elamgulam, Kottyam', 'about.jpg', '100000', 'Luxury Package', 6, 2500, 8, 6, 0);

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
(1, 'Home Construction', 1),
(2, 'Apartment Construction', 1),
(3, 'Office Construction', 1),
(4, 'House Construction', 0),
(5, '  House Construction', 0),
(6, 'HomeConstruction', 0);

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
(1, 'Office Construction', 'Mithilapuri', '2021-04-16', '2021-04-23', 'Siby Jose', 'Guna', 0),
(3, 'House Construction', 'Paika North Pala', '2021-04-24', '2021-05-01', 'Siby Jose', 'Guna', 1),
(4, 'Office Construction', 'gj jnkjnjnl', '2021-04-16', '2021-04-23', 'Siby Jose', 'Krishna Das', 0),
(5, 'House Construction', 'Fyigiy hbhbhuh', '2021-04-26', '2021-05-03', 'Melbin Joseph', 'Guna', 0);

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
(14, 'fghj', 0),
(16, '  Rajasthan', 0);

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
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer_reg`
--
ALTER TABLE `tbl_customer_reg`
  MODIFY `cust_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_daily_progress_report`
--
ALTER TABLE `tbl_daily_progress_report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_est`
--
ALTER TABLE `tbl_est`
  MODIFY `est_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_labours_reg`
--
ALTER TABLE `tbl_labours_reg`
  MODIFY `lid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_labour_category`
--
ALTER TABLE `tbl_labour_category`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `prof_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `proj_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `serv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_site_loc`
--
ALTER TABLE `tbl_site_loc`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_weekly_wages`
--
ALTER TABLE `tbl_weekly_wages`
  MODIFY `wageid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
