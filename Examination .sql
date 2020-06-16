-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2020 at 04:51 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `b_id` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `strength` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`b_id`, `block`, `strength`) VALUES
('AH-101', 'AH', '56'),
('AH-102', 'AH', '60'),
('AH-103', 'AH', '45'),
('AH-104', 'AH', '54');

-- --------------------------------------------------------

--
-- Table structure for table `cs_ii_a`
--

CREATE TABLE `cs_ii_a` (
  `reg_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_ii_a`
--

INSERT INTO `cs_ii_a` (`reg_no`, `name`, `class`, `year`) VALUES
('1u17cs016', 'deepan', 'BSc computer science', '3'),
('1u17cs021', 'dineshbabu', 'BSc computer science', '3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `reg_no` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`reg_no`, `admin_pass`, `admin_name`, `admin_email`) VALUES
('adm_usr001', 'admin1@rvsexam', 'Boopathi', 'ddinesh1805200@gmail.com'),
('adm_usr002', 'admin2@rvsexam', 'Vidyasankar', 'deepanmpmd006@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_ii_a`
--
ALTER TABLE `cs_ii_a`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
