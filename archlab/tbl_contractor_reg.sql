-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 04:50 PM
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
  `state_name` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor_reg`
--

INSERT INTO `tbl_contractor_reg` (`contractor_id`, `login_id`, `contractor_name`, `email_id`, `phone_no`, `licenseNo`, `licenseProof`, `companyName`, `state_name`, `status`) VALUES
(1, 2, 'Joshy John', 'joshy@gmail.com', '9961754588', 'WER78451289', 'finalreport-150616105227-lva1-app6892.pdf', 'Jennifer Constr', 'Tamil Nadu', 1),
(2, 6, 'Thomas KK', 'thomas@gmail.com', '7545789955', 'RYU1245789', 'SEMESTER_FEE_9164_S4-2017.pdf', 'Tom Constructions', 'Gujarat', 1),
(3, 10, 'Tygj', 'ck@yahoo.com', '7845128956', 'WRT0214545', 'Table Design.pdf', 'Al Fiq', 'Kerala', 1),
(4, 11, 'Shafeek', 'shafeek@yahoo.com', '6598235689', 'CBG7845122', 'SIJIMOL CYRIAC.pdf', 'Adg HJy', 'Tamil Nadu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  ADD PRIMARY KEY (`contractor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contractor_reg`
--
ALTER TABLE `tbl_contractor_reg`
  MODIFY `contractor_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
