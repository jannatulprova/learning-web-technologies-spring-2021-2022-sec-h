-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_fee`
--

CREATE TABLE `course_fee` (
  `teacher_name` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_fee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_fee`
--

INSERT INTO `course_fee` (`teacher_name`, `course_name`, `course_fee`) VALUES
('Mahmudul Hassan', 'Web Designing', 2500),
('Rafsan Haque', '3D Painting', 3200);

-- --------------------------------------------------------

--
-- Table structure for table `management_log_in`
--

CREATE TABLE `management_log_in` (
  `myname` varchar(50) NOT NULL,
  `myemail` varchar(50) NOT NULL,
  `myemployid` int(50) NOT NULL,
  `myusername` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `gender` char(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management_log_in`
--

INSERT INTO `management_log_in` (`myname`, `myemail`, `myemployid`, `myusername`, `password`, `gender`, `dob`) VALUES
('Tatti Mehta', 'tatti@gmail.com', 154, 'tatti', 111, '111', '0000-00-00'),
('prova', 'prova.99@gmail.com', 4343, 'prova', 111, '111', '0000-00-00'),
('ttt', 'tttt@gmail.com', 2133, 'ttt', 111, '111', '0000-00-00'),
('prova', 'tttt@gmail.com', 154, 'u', 222, '222', '0000-00-00'),
('Tatti Mehta', 'tatti33@gmail.com', 154, 'tatti1', 1111111, '1111111', '0000-00-00'),
('jjafra', 'jett@gmail.com', 3445, 'jett123', 12341234, 'Female', '2006-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `student_name` varchar(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `payment` int(11) NOT NULL,
  `bkash_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`student_name`, `teacher_name`, `course_name`, `payment`, `bkash_num`) VALUES
('Tanvir', 'Rafsan Haque', '3D Painting', 3200, 1854354344),
('Tanvir', 'Rafsan Haque', '3D Painting', 3200, 1854354344),
('sujuki', 'jamal', 'Graphics Design', 1500, 1764354344);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
