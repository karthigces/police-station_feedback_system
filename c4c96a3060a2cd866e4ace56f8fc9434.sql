-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 03:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c4c96a3060a2cd866e4ace56f8fc9434`
--

-- --------------------------------------------------------

--
-- Table structure for table `salem_1c2af6696c4c67949752fa8006c4e63d`
--

CREATE TABLE `salem_1c2af6696c4c67949752fa8006c4e63d` (
  `sr_no` int(11) NOT NULL,
  `st_code` varchar(30) NOT NULL,
  `st_num` int(11) NOT NULL,
  `v_date` date NOT NULL,
  `v_time` time NOT NULL,
  `ack_id` varchar(10) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `v_mobile` varchar(20) NOT NULL,
  `v_age` varchar(3) NOT NULL,
  `v_address` varchar(100) NOT NULL,
  `v_aadhar` varchar(30) NOT NULL,
  `v_photo` varchar(200) NOT NULL,
  `v_name2` varchar(50) NOT NULL,
  `v_mobile2` varchar(20) NOT NULL,
  `c_subject` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_detail` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `receipt_off` varchar(50) NOT NULL,
  `r_officer_behavior` varchar(50) NOT NULL,
  `incharge_off` varchar(50) NOT NULL,
  `i_officer_behavior` varchar(50) NOT NULL,
  `ack_type` varchar(10) NOT NULL,
  `ack_num` varchar(100) NOT NULL,
  `next_enquiry` varchar(40) NOT NULL,
  `next_enquiry_time` time NOT NULL,
  `police_response` varchar(50) NOT NULL,
  `other_remarks` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL,
  `dispose` int(11) NOT NULL,
  `fwd_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salem_21232f297a57a5a743894a0e4a801fc3`
--

CREATE TABLE `salem_21232f297a57a5a743894a0e4a801fc3` (
  `admin_code` int(11) NOT NULL,
  `admin_district` varchar(30) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_phon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salem_21232f297a57a5a743894a0e4a801fc3`
--

INSERT INTO `salem_21232f297a57a5a743894a0e4a801fc3` (`admin_code`, `admin_district`, `admin_user`, `admin_pass`, `admin_phon`) VALUES
(1, 'salem', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `salem_a4db7d6fe80f15db7fb1061fa362d0fa`
--

CREATE TABLE `salem_a4db7d6fe80f15db7fb1061fa362d0fa` (
  `st_st` int(11) NOT NULL,
  `st_district` varchar(50) NOT NULL,
  `st_code` varchar(50) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_password` varchar(50) NOT NULL,
  `st_photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salem_a4db7d6fe80f15db7fb1061fa362d0fa`
--

INSERT INTO `salem_a4db7d6fe80f15db7fb1061fa362d0fa` (`st_st`, `st_district`, `st_code`, `st_name`, `st_password`, `st_photo`) VALUES
(1, 'SALEM', 'B1', 'SALEM TOWN PS', '34a2f021ed8618165d1806ecc31cd455', '1.jpg'),
(2, 'SALEM', 'B1C', 'SALEM TOWN CRIME PS', '3b695fc7f06d771020912ed9a74f8027', '2.jpg'),
(3, 'SALEM', 'B2', 'SHEVAPET PS', '66011adfc5d3038d77e0ac61951c5822', '3.jpg'),
(4, 'SALEM', 'B3', 'GOVT.HOSPITAL PS', 'cbf00f52e4fa956e236f340f78e368e7', '4.jpg'),
(5, 'SALEM', 'B4', 'ANNADHANAPATTY PS', '50cf75b26b7c87aae05d6852ff7b61fa', '5.jpg'),
(6, 'SALEM', 'B5', 'KITCHIPALAYAM PS', '94fa2d406f6ce6fe4c543ec2183b591b', '6.jpg'),
(7, 'SALEM', 'B6', 'KONDALAMPATTY PS', '33233c406f9e6e46ec7e2e746896622c', '7.jpg'),
(8, 'SALEM', 'C1', 'AMMAPET PS', 'b407eea13a0bc639b5837a1488eabe8d', '8.jpg'),
(9, 'SALEM', 'C2', 'HASTHAMPATTY PS', '8a5d23aa256eb2efba64b01878f253ef', '9.jpg'),
(10, 'SALEM', 'C3', 'KANNAKURICHI PS', '1f42b34a43de32bfe6c1c565ac8c6c94', '10.jpg'),
(11, 'SALEM', 'C4', 'VEERANAM PS', '2d66afd75c0b5b9eea758d47f0cb9452', '11.jpg'),
(12, 'SALEM', 'D1', 'FAIRLANDS PS', '6aad2c980ccd9e29662b5776f256bb93', '12.jpg'),
(13, 'SALEM', 'D2', 'PALLAPATTY PS', 'dfb6adc81825b5c4cd38737940fa0a66', '13.jpg'),
(14, 'SALEM', 'D3', 'SORAMANGALAM PS', 'c5b9acfa5d5cff1fe8d03af092e69021', '14.jpg'),
(15, 'SALEM', 'D4', 'STEEL PLANT PS', '381497df8a1c35369eecdfaed2ceaf72', '15.jpg'),
(16, 'SALEM', 'D5', 'KARUPPUR PS', '8349ce5d3acd33e7e44cc3f94e1343e5', '16.jpg'),
(17, 'SALEM', 'W1', 'AWPS PS SALEM TOWN', '510e990db51ef88bb9eaf89111df7159', '17.jpg'),
(18, 'SALEM', 'W2', 'AWPS AMMAPET', '9f16ecd6fc78951c5a18a20ee7d6b282', '18.jpg'),
(19, 'SALEM', 'W3', 'AWPS SOORAMANGALAM PS', '690a31140ccf0df0cf869cb8297eb78b', '19.jpg'),
(20, 'SALEM', 'CCB', 'AWPS CENTRAL CRIME BRANCH', '9c07c35a547ee0ff77d77069992aa308', '20.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salem_1c2af6696c4c67949752fa8006c4e63d`
--
ALTER TABLE `salem_1c2af6696c4c67949752fa8006c4e63d`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salem_1c2af6696c4c67949752fa8006c4e63d`
--
ALTER TABLE `salem_1c2af6696c4c67949752fa8006c4e63d`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
