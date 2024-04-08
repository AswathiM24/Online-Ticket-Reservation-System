-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 02:01 PM
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
-- Database: `mybus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE `booking_tb` (
  `booking_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `traveler_id` int(11) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tb`
--

INSERT INTO `booking_tb` (`booking_id`, `bus_id`, `traveler_id`, `seat`, `source`, `destination`) VALUES
(1, 3, 2, '2', 'calicut', 'ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `bus_tb`
--

CREATE TABLE `bus_tb` (
  `bus_id` int(25) NOT NULL,
  `login_id` int(25) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_starting_point` varchar(100) NOT NULL,
  `bus_end_point` varchar(100) NOT NULL,
  `bus_description` varchar(100) NOT NULL,
  `bus_total_seats` varchar(100) NOT NULL,
  `bus_route` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_tb`
--

INSERT INTO `bus_tb` (`bus_id`, `login_id`, `bus_name`, `bus_starting_point`, `bus_end_point`, `bus_description`, `bus_total_seats`, `bus_route`, `date`, `time`) VALUES
(2, 3, 'YBM', 'calicut', 'Trivandrum', 'qwerty', '40', 'Thrisuur', '2021-02-05', '05:00');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tb`
--

CREATE TABLE `complaint_tb` (
  `complaint_id` int(25) NOT NULL,
  `traveler_id` int(25) NOT NULL,
  `bus_id` int(25) NOT NULL,
  `date` varchar(100) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_tb`
--

INSERT INTO `complaint_tb` (`complaint_id`, `traveler_id`, `bus_id`, `date`, `complaint`, `reply`) VALUES
(1, 2, 3, '05/02/2021', 'qwerrty', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `helpline_db`
--

CREATE TABLE `helpline_db` (
  `helpline_id` int(25) NOT NULL,
  `help` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpline_db`
--

INSERT INTO `helpline_db` (`helpline_id`, `help`, `contact`) VALUES
(1, 'For All Enquiry', '09987532903');

-- --------------------------------------------------------

--
-- Table structure for table `location_tb`
--

CREATE TABLE `location_tb` (
  `location_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_tb`
--

INSERT INTO `location_tb` (`location_id`, `bus_id`, `latitude`, `longitude`) VALUES
(1, 3, '11.2856466', '75.79292485');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 0),
(2, 'vishnu', 'vishnu', 1),
(3, 'ybm', 'ybm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `traveler_tb`
--

CREATE TABLE `traveler_tb` (
  `traveler_id` int(25) NOT NULL,
  `login_id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveler_tb`
--

INSERT INTO `traveler_tb` (`traveler_id`, `login_id`, `name`, `address`, `contact`, `email`) VALUES
(1, 2, 'vishnu', 'qwetyy', '8921113076', 'vishnu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus_tb`
--
ALTER TABLE `bus_tb`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `complaint_tb`
--
ALTER TABLE `complaint_tb`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `helpline_db`
--
ALTER TABLE `helpline_db`
  ADD PRIMARY KEY (`helpline_id`);

--
-- Indexes for table `location_tb`
--
ALTER TABLE `location_tb`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `traveler_tb`
--
ALTER TABLE `traveler_tb`
  ADD PRIMARY KEY (`traveler_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tb`
--
ALTER TABLE `booking_tb`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_tb`
--
ALTER TABLE `bus_tb`
  MODIFY `bus_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint_tb`
--
ALTER TABLE `complaint_tb`
  MODIFY `complaint_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `helpline_db`
--
ALTER TABLE `helpline_db`
  MODIFY `helpline_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_tb`
--
ALTER TABLE `location_tb`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `traveler_tb`
--
ALTER TABLE `traveler_tb`
  MODIFY `traveler_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
