-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 03:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `no_dues`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`serial`, `name`, `password`) VALUES
(1, 'accountant', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `asst_register`
--

CREATE TABLE `asst_register` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asst_register`
--

INSERT INTO `asst_register` (`serial`, `name`, `password`) VALUES
(1, 'ar', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `care_taker`
--

CREATE TABLE `care_taker` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `care_taker`
--

INSERT INTO `care_taker` (`serial`, `name`, `password`, `hostel`) VALUES
(1, 'kameng_care_taker', 'kameng', 'Kameng');

-- --------------------------------------------------------

--
-- Table structure for table `cc_in_charge`
--

CREATE TABLE `cc_in_charge` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc_in_charge`
--

INSERT INTO `cc_in_charge` (`serial`, `name`, `password`) VALUES
(1, 'ccic', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL DEFAULT '1234',
  `department` varchar(4) NOT NULL DEFAULT 'CSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`serial`, `name`, `password`, `department`) VALUES
(1, 'Amit Awekar', '1234', 'CSE'),
(2, 'Arjit Sur', '1234', 'CSE'),
(3, 'Arnab Sarkar', '1234', 'CSE'),
(4, 'Aryabartta Sahu', '1234', 'CSE'),
(5, 'Ashish Anand', '1234', 'CSE'),
(6, 'Benny George K', '1234', 'CSE'),
(7, 'Chandan Karfa', '1234', 'CSE'),
(8, 'Deepanjan Kesh', '1234', 'CSE'),
(9, 'Diganta Goswami', '1234', 'CSE'),
(10, 'G Sajith', '1234', 'CSE'),
(11, 'Gautam Barua', '1234', 'CSE'),
(12, 'Hemangee K Kapoor', '1234', 'CSE'),
(13, 'Jatindra Kumar Deka', '1234', 'CSE'),
(14, 'John Jose', '1234', 'CSE'),
(15, 'Pinaki Mitra', '1234', 'CSE'),
(16, 'Pradip Kr Das', '1234', 'CSE'),
(17, 'Purandar Bhaduri', '1234', 'CSE'),
(18, 'R Inkulu', '1234', 'CSE'),
(19, 'Rashmi Duta Baruah', '1234', 'CSE'),
(20, 'S V Rao', '1234', 'CSE'),
(21, 'Samit Bhattacharya', '1234', 'CSE'),
(22, 'Sanasam Ranbir Singh', '1234', 'CSE'),
(23, 'Santosh Biswas', '1234', 'CSE'),
(24, 'Shivashankar B Nair', '1234', 'CSE'),
(25, 'Sukumar Nandi', '1234', 'CSE'),
(26, 'Sushanta Karmakar', '1234', 'CSE'),
(27, 'T Venkatesh', '1234', 'CSE'),
(28, 'V Vijaya Saradhi', '1234', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `serial` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `department` varchar(4) NOT NULL DEFAULT 'CSE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`serial`, `name`, `password`, `department`) VALUES
(1, 'cse_hod', '1234', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`serial`, `name`, `password`) VALUES
(1, 'lib', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `serial` int(4) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`serial`, `type`, `name`, `password`) VALUES
(1, 'gymkhana', 'gk', '1234'),
(2, 'submit_thesis', 'st', '1234'),
(3, 'cc_online_no_dues', 'cc', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `roll_num` int(9) NOT NULL,
  `department` varchar(4) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `warden` tinyint(1) NOT NULL DEFAULT '0',
  `care_taker` tinyint(1) NOT NULL DEFAULT '0',
  `gymkhana` tinyint(1) NOT NULL DEFAULT '0',
  `asst_register` tinyint(1) NOT NULL DEFAULT '0',
  `submit_thesis` tinyint(1) NOT NULL DEFAULT '0',
  `library` tinyint(1) NOT NULL DEFAULT '0',
  `cc_online_no_dues` tinyint(1) NOT NULL DEFAULT '0',
  `cc_in_charge` tinyint(1) NOT NULL DEFAULT '0',
  `faculty` tinyint(4) NOT NULL DEFAULT '0',
  `hod` tinyint(1) NOT NULL DEFAULT '0',
  `account` tinyint(1) NOT NULL DEFAULT '0',
  `Amit Awekar` tinyint(4) NOT NULL DEFAULT '0',
  `Arjit Sur` tinyint(4) NOT NULL DEFAULT '0',
  `Arnab Sarkar` tinyint(4) NOT NULL DEFAULT '0',
  `Aryabartta Sahu` tinyint(4) NOT NULL DEFAULT '0',
  `Ashish Anand` tinyint(4) NOT NULL DEFAULT '0',
  `Benny George K` tinyint(4) NOT NULL DEFAULT '0',
  `Chandan Karfa` tinyint(4) NOT NULL DEFAULT '0',
  `Deepanjan Kesh` tinyint(4) NOT NULL DEFAULT '0',
  `Diganta Goswami` tinyint(4) NOT NULL DEFAULT '0',
  `G Sajith` tinyint(4) NOT NULL DEFAULT '0',
  `Gautam Barua` tinyint(4) NOT NULL DEFAULT '0',
  `Hemangee K Kapoor` tinyint(4) NOT NULL DEFAULT '0',
  `Jatindra Kumar Deka` tinyint(4) NOT NULL DEFAULT '0',
  `John Jose` tinyint(4) NOT NULL DEFAULT '0',
  `Pinaki Mitra` tinyint(4) NOT NULL DEFAULT '0',
  `Pradip Kr Das` tinyint(4) NOT NULL DEFAULT '0',
  `Purandar Bhaduri` tinyint(4) NOT NULL DEFAULT '0',
  `R Inkulu` tinyint(4) NOT NULL DEFAULT '0',
  `Rashmi Duta Baruah` tinyint(4) NOT NULL DEFAULT '0',
  `S V Rao` tinyint(4) NOT NULL DEFAULT '0',
  `Samit Bhattacharya` tinyint(4) NOT NULL DEFAULT '0',
  `Sanasam Ranbir Singh` tinyint(4) NOT NULL DEFAULT '0',
  `Santosh Biswas` tinyint(4) NOT NULL DEFAULT '0',
  `Shivashankar B Nair` tinyint(4) NOT NULL DEFAULT '0',
  `Sukumar Nandi` tinyint(4) NOT NULL DEFAULT '0',
  `Sushanta Karmakar` tinyint(4) NOT NULL DEFAULT '0',
  `T Venkatesh` tinyint(4) NOT NULL DEFAULT '0',
  `V Vijaya Saradhi` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`serial`, `name`, `password`, `roll_num`, `department`, `hostel`, `warden`, `care_taker`, `gymkhana`, `asst_register`, `submit_thesis`, `library`, `cc_online_no_dues`, `cc_in_charge`, `faculty`, `hod`, `account`, `Amit Awekar`, `Arjit Sur`, `Arnab Sarkar`, `Aryabartta Sahu`, `Ashish Anand`, `Benny George K`, `Chandan Karfa`, `Deepanjan Kesh`, `Diganta Goswami`, `G Sajith`, `Gautam Barua`, `Hemangee K Kapoor`, `Jatindra Kumar Deka`, `John Jose`, `Pinaki Mitra`, `Pradip Kr Das`, `Purandar Bhaduri`, `R Inkulu`, `Rashmi Duta Baruah`, `S V Rao`, `Samit Bhattacharya`, `Sanasam Ranbir Singh`, `Santosh Biswas`, `Shivashankar B Nair`, `Sukumar Nandi`, `Sushanta Karmakar`, `T Venkatesh`, `V Vijaya Saradhi`) VALUES
(1, 'mouli', '12345678', 150101029, 'CSE', 'Kameng', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(2, 'prudhvi', 'samayamanthula', 150101055, 'CSE', 'Kapili', 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(3, 'srikar', 'paruchuru', 150101044, 'CSE', 'Dihing', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'anil', 'mukkoti', 150101036, 'CSE', 'Kameng', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1),
(5, 'student5', '1234', 150101005, 'CSE', 'Kameng', 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'student6', '1234', 150101006, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'student7', '1234', 150101007, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'student8', '1234', 150101008, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'student9', '1234', 150101009, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'student10', '1234', 150101010, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'student11', '1234', 150101011, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'student12', '1234', 150101012, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'student13', '1234', 150101013, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'student14', '1234', 150101014, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'student15', '1234', 150101015, 'CSE', 'Kameng', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `serial` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`serial`, `name`, `password`, `hostel`) VALUES
(1, 'kameng_warden', 'kameng', 'Kameng'),
(2, 'kapili_warden', 'kapili', 'Kapili'),
(3, 'dihing_warden', 'dihing', 'Dihing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `asst_register`
--
ALTER TABLE `asst_register`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `care_taker`
--
ALTER TABLE `care_taker`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `cc_in_charge`
--
ALTER TABLE `cc_in_charge`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `asst_register`
--
ALTER TABLE `asst_register`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `care_taker`
--
ALTER TABLE `care_taker`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cc_in_charge`
--
ALTER TABLE `cc_in_charge`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
