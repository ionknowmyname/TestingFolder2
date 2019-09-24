-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 11:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panelofexaminers`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `dept` varchar(20) NOT NULL,
  `chiefExaminer` varchar(20) NOT NULL,
  `courseTitle` varchar(50) NOT NULL,
  `courseCode` varchar(7) NOT NULL,
  `oldCourseCode` varchar(7) NOT NULL,
  `lecturer1` varchar(20) NOT NULL,
  `staffid1` varchar(20) NOT NULL,
  `lecturer2` varchar(20) NOT NULL,
  `staffid2` varchar(20) NOT NULL,
  `lecturer3` varchar(20) NOT NULL,
  `staffid3` varchar(20) NOT NULL,
  `lecturer4` varchar(20) NOT NULL,
  `staffid4` varchar(20) NOT NULL,
  `uploader` varchar(20) NOT NULL,
  `staffid5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
