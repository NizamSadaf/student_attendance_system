-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 07:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `full_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`full_name`, `username`, `password`, `email`, `phone`, `address`) VALUES
('Nizam Uddin', 'admin', 'admin', 'admin@gmail.com', '0123456', 'afsafasa');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date`) VALUES
('11-03-20'),
('11-03-20'),
('11-03-20'),
('11-03-20'),
('11-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `full_name` varchar(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `time` varchar(50) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`full_name`, `course_id`, `course_name`, `semester`, `time`, `day`) VALUES
('Nizam Uddin Ahmed', 'CSE-321', 'Software Engineering', '6', '3.30-4.20 | 2.30-3.20 | 1.30-2.20', 'Saturday,Wednesday,Thursday'),
('Nizam Uddin Ahmed', 'CSE-121', 'Data Structure', '2', '10.00-10.50 | 2.30-3.20 | 1.30-2.20', 'Sunday,Wednesday,Thursday'),
('Nizam Uddin Ahmed', 'CSE-111', 'Introduction to Computer Syste', '1', '10.00-10.50 | 2.30-3.20 | 1.30-2.20', 'Saturday,Wednesday,Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `semester`, `phone`, `email`, `address`) VALUES
(17001, 'Zara', '2', '01521220231', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag'),
(17002, 'Syed Protik', '2', '01913771385', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag'),
(17052, 'Rakib Sharif', '2', '01913771385', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag'),
(17056, 'Nizam Uddin Ahmed', '6', '01913771385', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag'),
(17081, 'Syed Prohor', '2', '01913771385', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag'),
(17086, 'Saliman Akther Mahima', '6', '01913771385', 'nizamsadaf1360@gmail.com', '39/4 Sheikh Hayder Box Lane,Lalbag');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` varchar(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `student_name`, `course_id`, `subject_name`, `semester`, `date`, `status`) VALUES
('17056', 'Nizam Uddin Ahmed', 'CSE-321', 'Software Engineering', '6', '20-03-26', 'Present'),
('17086', 'Saliman Akther Mahima', 'CSE-321', 'Software Engineering', '6', '20-03-26', 'Present'),
('17001', 'Zara', 'CSE-121', 'Data Structure', '2', '20-03-26', 'Absent'),
('17002', 'Syed Protik', 'CSE-121', 'Data Structure', '2', '20-03-26', 'Present'),
('17052', 'Rakib Sharif', 'CSE-121', 'Data Structure', '2', '20-03-26', 'Absent'),
('17081', 'Syed Prohor', 'CSE-121', 'Data Structure', '2', '20-03-26', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `semester` varchar(5) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`semester`, `subject_name`, `course_id`) VALUES
('1', 'Introduction to Computer System', 'CSE-111'),
('1', 'Programming Language', 'CSE-112'),
('1', 'Programming Language Practical', 'CSE-113'),
('1', 'Physics (Electricity and Magnetism)', 'CSE-114'),
('1', 'Differential Calculus Ordinate Geometry', 'CSE-115'),
('1', 'English', 'CSE-116'),
('2', 'Data Structure', 'CSE-121'),
('2', 'Data Structure Practical', 'CSE-122'),
('2', 'Introduction to Electrical Engineering', 'CSE-123'),
('2', 'Introduction to Electrical Engineering Practical', 'CSE-124'),
('2', 'Integral Calculus and Differential Equation', 'CSE-125'),
('2', 'Statistics and Probability', 'CSE-126'),
('2', 'Discrete Mathematics', 'CSE-127'),
('', '', ''),
('6', 'Software Engineering', 'CSE-321'),
('6', 'Software Engineering Practical', 'CSE-322'),
('6', 'Numerical Analysis', 'CSE-323'),
('6', 'Computer Graphics& Multimedia', 'CSE-324'),
('6', 'Computer Graphics and Practical', 'CSE-325'),
('6', 'Compiler Design', 'CSE-326'),
('6', 'Compiler Design Practical', 'CSE-327'),
('6', 'System Analysis and Design', 'CSE-328');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `age` varchar(5) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `full_name`, `age`, `phone`, `address`, `username`, `password`, `email`, `status`) VALUES
(1234, 'Nizam Uddin Ahmed', '24', '01913771385', '39/4 Sheikh Hayder Box Lane,Lalbag', 'nizam1230', 'nizam', 'nizamsadaf1360@gmail.com', 'Approved'),
(4321, 'Saliman Akther Mahima', '22', '01521220231', '39/4 Sheikh Hayder Box Lane,Lalbag', 'smahi', 'smahi', 'nizamsadaf1460@gmail.com', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
