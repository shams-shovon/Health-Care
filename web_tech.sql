-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 12:23 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `pk` int(20) NOT NULL,
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`pk`, `id`, `name`, `address`, `dob`, `gender`, `email`, `phone`, `password`) VALUES
(1, 'web_tech', 'Shovon', 'Nikunja-2 Dhaka-1229', '1998-07-03', 'male', 'mdshamsaraf.shovon@gmail.com', '+880 1718 169905', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `pk` int(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`pk`, `id`, `first_name`, `last_name`, `address`, `dob`, `gender`, `catagory`, `experience`, `location`, `timing`, `phone`, `email`, `password`) VALUES
(2, '840-dr-857', 'Sadik Sadman', 'Sazid', 'Shahzadpur', '1984-06-09', 'male', 'Dermatologist', '7', 'Popular Hospital,Uttara', '5-7', '01521736620', 'sazid907@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_donor_request`
--

CREATE TABLE `doctor_donor_request` (
  `pk` int(10) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `donor_id` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_request`
--

CREATE TABLE `doctor_request` (
  `pk` int(10) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_request`
--

INSERT INTO `doctor_request` (`pk`, `patient_id`, `doctor_id`, `date`, `status`) VALUES
(7, '564-p-405', '160-dr-537', '2019-12-30', 'Accept'),
(8, '346-p-115', '160-dr-537', '2019-12-29', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `pk` int(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `last_donate_date` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`pk`, `id`, `first_name`, `last_name`, `address`, `dob`, `gender`, `blood_group`, `last_donate_date`, `phone`, `email`, `password`) VALUES
(5, '251-dn-421', 'Md. Shams Araf', 'Shovon', 'Khilkhet,Dhaka-1229', '1998-07-03', 'male', 'B+', '2019-01-08', '01718169905', 'shovon1828@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(6, '837-dn-210', 'antor', 'ahmed', 'Gulshan', '2019-12-01', 'male', 'A+', '2019-12-05', '01645238745', 'asdfgh@gt.edu', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `pk` int(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `url` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`pk`, `id`, `url`) VALUES
(2, '850-dn-520', 'uploads/50738206.jpg'),
(3, '346-p-115', 'uploads/89948735.jpg'),
(4, '564-p-405', 'uploads/50384570.jpg'),
(5, '840-dr-857', 'uploads/179705041.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `pk` int(10) NOT NULL,
  `id` varchar(30) NOT NULL,
  `passord` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pk`, `id`, `passord`, `role`) VALUES
(1, 'web_tech', 'e807f1fcf82d132f9bb018ca6738a19f', 'admin'),
(4, '251-dn-421', '25d55ad283aa400af464c76d713c07ad', 'donor'),
(10, '837-dn-210', 'e807f1fcf82d132f9bb018ca6738a19f', 'donor'),
(12, '346-p-115', 'e807f1fcf82d132f9bb018ca6738a19f', 'patient'),
(15, '564-p-405', 'e807f1fcf82d132f9bb018ca6738a19f', 'patient'),
(16, '840-dr-857', 'e807f1fcf82d132f9bb018ca6738a19f', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pk` int(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pk`, `id`, `first_name`, `last_name`, `address`, `dob`, `gender`, `problem`, `phone`, `email`, `password`) VALUES
(4, '346-p-115', 'Shams Araf', 'efgh', 'farmgate', '2002-05-04', 'male', 'eyeproblem', '01521432318', 'abc@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(6, '564-p-405', 'hasnain', 'kabir', 'shahzadpur', '1996-06-26', 'male', 'eyeproblem', '01793451232', 'kabir@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `patient_donor_request`
--

CREATE TABLE `patient_donor_request` (
  `pk` int(10) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `donor_id` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_donor_request`
--

INSERT INTO `patient_donor_request` (`pk`, `patient_id`, `donor_id`, `location`, `date`, `status`) VALUES
(8, '564-p-405', '251-dn-421', 'gulshan', '2019-12-23', 'Accept'),
(9, '346-p-115', '251-dn-421', 'gulshan', '2019-12-30', 'Decline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `doctor_donor_request`
--
ALTER TABLE `doctor_donor_request`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `doctor_request`
--
ALTER TABLE `doctor_request`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `patient_donor_request`
--
ALTER TABLE `patient_donor_request`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `pk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_donor_request`
--
ALTER TABLE `doctor_donor_request`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_request`
--
ALTER TABLE `doctor_request`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_donor_request`
--
ALTER TABLE `patient_donor_request`
  MODIFY `pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
