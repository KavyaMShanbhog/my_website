-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 08:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`firstname`, `lastname`, `email`, `phno`, `password`) VALUES
('', '', '', 0, ''),
('Abhinandan ', 'tallur', 'artallur21@gmail.com', 7899691593, 'asdfg'),
('Abhinandan ', 'tallur', 'artallur21@gmail.com', 7899691593, 'asdfg'),
('Abhinandan ', 'tallur', 'artallur21@gmail.com', 7899691593, 'asdfg'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9743979163, '1234'),
('SIRI', 'MURTHY', 'siri17is@cmrit.ac.in', 9880309007, 'siri'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9901746664, 'rekha'),
('SIRI', 'MURTHY', 'siri17is@cmrit.ac.in', 9880309007, 'siri'),
('SIRI', 'MURTHY', 'siri17is@cmrit.ac.in', 9880309007, 'siri'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9743979163, '1234'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9743979163, '1234'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9743979163, '1234'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9743979163, '1234'),
('Kshama', 'Murthy', 'siriha99@gmail.com', 6454515596789, 'siri'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9901746664, 'rekha'),
('SIRI', 'MURTHY', 'siri17is@cmrit.ac.in', 9880309007, 'siri'),
('Rekha', 'H A', 'iris99ha@gmail.com', 9901746664, 'rekha'),
('Siri', 'Murthy', 'siri17is@cmrit.ac.in', 9743979163, 'siri'),
('Jeevitha', 'A D', 'iris99ha@gmail.com', 9880309007, 'jeevitha'),
('gxsfsfdsd', 'sfvgsfds', 'siri17is@cmrit.ac.in', 7541236987, 'Siri@12345'),
('vdfbdvf', 'vxvdvd', 'dsfcsef@gmail.com', 7854632598, 'Siri12345@'),
('sjbxshb', 'jasjb', 'siri17is@cmrit.ac.in', 7899681593, '4293c2eb4374b0778ac43185a7c93077'),
('zjcbdhbc', 'mncjn', 'rekhas317@yahoo.co.in', 7899691583, 'Siri12345@#'),
('Siri', 'Murthy', 'siriha99@gmail.com', 7899691590, 'Siri@12345'),
('Abhinandan ', 'tallur', 'artallur21@gmail.com', 7899691593, 'asdfg'),
('Siri', 'Murthy', 'siri17is@cmrit.ac.in', 9743979163, 'siri'),
('ABC', 'DEF', 'GHI@GMAIL.COM', 57846932546, 'Testing193!'),
('fcgxdzfdgf', 'xdff', 'siri17is@cmrit.ac.in', 7899691584, 'eafb7ca8d14af8b435132a2b26aec6a2'),
('dsgvdfg', 'dfg', 'siri17is@cmrit.ac.in', 8899691593, 'eafb7ca8d14af8b435132a2b26aec6a2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(5) NOT NULL,
  `courseCode` varchar(200) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL,
  `courseDomain` varchar(200) NOT NULL,
  `courseDes` varchar(200) NOT NULL,
  `courseRate` int(10) NOT NULL,
  `coursePrice` int(10) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseCode`, `courseName`, `courseDomain`, `courseDes`, `courseRate`, `coursePrice`, `creationDate`, `updationDate`) VALUES
(1, '1', 'DS', 'Computer', 'dffrrf', 3, 2000, '2020-10-08 06:10:59', '08-10-2020 11:40:59 AM');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_domain` varchar(200) NOT NULL,
  `c_des` varchar(500) NOT NULL,
  `c_rating` int(11) NOT NULL,
  `c_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `c_domain`, `c_des`, `c_rating`, `c_price`) VALUES
(2, 'DS', 'CS', 'Stack,Queue', 3, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `disapprove`
--

CREATE TABLE `disapprove` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disapprove`
--

INSERT INTO `disapprove` (`firstname`, `lastname`, `email`, `phno`, `password`) VALUES
('Abhinandan ', 'tallur', 'artallur21@gmail.com', 7899691593, 'asdfg'),
('zjcbdhbc', 'mncjn', 'rekhas317@yahoo.co.in', 7899691583, 'Siri12345@#'),
(' hjcxbh j', 'xdbchb', 'iris99ha@gmail.com', 7899691594, 'Siri123456'),
('aaa', 'bbb', 'rekhas317@yahoo.co.in', 9686521420, 'Siri@12345'),
('kfnvhhcj', 'jsnshdc', 'rekhas317@yahoo.co.in', 9686521521, 'Siri@#123456789'),
('dhbvjsh', 'jvsdfhjkf', 'siriha99@gmail.com', 9686521522, 'SIRi@#12345'),
('aaaa', 'bbbb', 'abcd@gmail.com', 9876543210, 'Abcd@123'),
('kkk', 'mmm', 'kavya@gmail.com', 9876543211, '67e59c9b132fbed35a5b235dfa0877c8');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `phno` bigint(10) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`phno`, `password`) VALUES
(9686521520, 'kavya');

-- --------------------------------------------------------

--
-- Table structure for table `login_rp`
--

CREATE TABLE `login_rp` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_rp`
--

INSERT INTO `login_rp` (`firstname`, `lastname`, `email`, `phno`, `password`) VALUES
('Kavya', 'Shanbhog', 'kav17is@cmrit.ac.in', 9654213875, 'kavya'),
('Jeevitha', 'A D', 'jee17is@cmrit.ac.in', 9785462310, '1234'),
('Siri', 'Murthy', 'iris99ha@gmail.com', 9880309007, 'siri'),
('Rekha', 'Murthy', 'rekhas317@yahoo.co.in', 9901746648, '1234'),
('abhi', 't', 'asdf@gnmfm.cim', 12344567896, 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `phno` bigint(10) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`firstname`, `lastname`, `email`, `phno`, `password`) VALUES
('', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`phno`);

--
-- Indexes for table `login_rp`
--
ALTER TABLE `login_rp`
  ADD PRIMARY KEY (`phno`);

--
-- Indexes for table `login_student`
--
ALTER TABLE `login_student`
  ADD PRIMARY KEY (`phno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
