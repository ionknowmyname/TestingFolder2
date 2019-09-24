-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 11:43 AM
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
-- Table structure for table `table 3`
--

CREATE TABLE `table 3` (
  `COL 1` varchar(28) DEFAULT NULL,
  `COL 2` varchar(10) DEFAULT NULL,
  `COL 3` varchar(14) DEFAULT NULL,
  `COL 4` varchar(18) DEFAULT NULL,
  `COL 5` varchar(11) DEFAULT NULL,
  `COL 6` varchar(15) DEFAULT NULL,
  `COL 7` varchar(23) DEFAULT NULL,
  `COL 8` varchar(8) DEFAULT NULL,
  `COL 9` varchar(8) DEFAULT NULL,
  `COL 10` varchar(8) DEFAULT NULL,
  `COL 11` varchar(8) DEFAULT NULL,
  `COL 12` varchar(8) DEFAULT NULL,
  `COL 13` varchar(8) DEFAULT NULL,
  `COL 14` varchar(8) DEFAULT NULL,
  `COL 15` varchar(12) DEFAULT NULL,
  `COL 16` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 3`
--

INSERT INTO `table 3` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`) VALUES
('Timestamp', 'Department', 'Chief Examiner', 'Course Title', 'Course Code', 'Old Course Code', 'Lecturer', 'staff ID', 'Lecturer', 'staff ID', 'Lecturer', 'staff ID', 'Lecturer', 'staff ID', 'uploader', 'staff ID'),
('2018/10/11 12:35:22 PM GMT+1', 'testing', 'Dr. Testing', 'process of testing', 'TES 101', 'TES 101', 'Mr. Testing', '11111', '', '', '', '', '', '', 'Mr. Testing2', '22222'),
('2018/10/12 4:07:04 PM GMT+1', 'Chemical', 'Prof. Faithful', 'Testing', 'CITS201', 'CITS201', 'Emeritus (Prof) Kehinde', '12345', '', '', '', '', '', '', 'John', '5555');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
