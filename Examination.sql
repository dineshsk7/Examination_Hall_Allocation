-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 06:04 AM
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
-- Table structure for table `CS_II_A`
--

CREATE TABLE `CS_II_A` (
  `reg_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CS_II_A`
--

INSERT INTO `CS_II_A` (`reg_no`, `name`, `class`, `year`) VALUES
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
-- Indexes for table `CS_II_A`
--
ALTER TABLE `CS_II_A`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
