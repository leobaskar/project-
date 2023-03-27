-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 09:33 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('warden', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `leave_days` varchar(10) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `up_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `report` varchar(100) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `name`, `rollno`, `leave_days`, `purpose`, `up_date`, `end_date`, `status`, `report`, `rdate`) VALUES
(1, 'mickey', '1234', '3', 'marriage fuction', '2020-11-12', '2020-11-14', '1', 'reject', '11-11-20'),
(2, 'guru', '789456', '5', 'fever', '2023-02-08', '2023-02-12', '2', 'get well soon\r\n', '08-02-23'),
(3, 'guru', '789456', '5', 'guru', '2023-02-23', '2023-02-28', '1', 'df', '08-02-23'),
(4, 'nandha', '123456', '4', 'fever', '2023-02-09', '2023-02-12', '2', 'get well soon', '09-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `contact2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `name`, `fname`, `rollno`, `class`, `department`, `dob`, `age`, `gender`, `contact1`, `contact2`, `email`, `address`, `uname`, `pass`, `rdate`) VALUES
(1, 'mickey', 'minion', '1234', 'A', 'MCA', '2020-11-11', '23', 'Male', '9867343232', '9854343232', 'mickeychan1829@gmail.com', 'thillai nagar', 'mickey', '1234', '11-11-20'),
(2, 'guru', 'guru', '789456', '10', 'dme', '2023-01-18', '25', 'Male', '65468465465465', '4654654654', 'nadha@gmail.com', 'thillai nagar', 'guru', '123', '18-01-23'),
(3, 'nandha', 'vimal', '123456', 'a', 'dct', '1999-06-08', '22', 'Male', '78945616322', '9876543211', 'nandha@gmail.com', 'thillai nagar', 'nandha', '123', '09-02-23');
