-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: gm-flas-mysql.gre.ac.uk:3306
-- Generation Time: Sep 27, 2020 at 10:32 PM
-- Server version: 10.5.5-MariaDB-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb_rg5319d`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `name`, `email`, `date`, `timeslot`) VALUES
(1, 'Raj Patel', 'raj@gmail.com', '2020-09-24', '11:00AM - 12:00PM'),
(2, 'Testing', 'Testing@ymail.com', '2020-09-24', '13:00PM - 14:00PM'),
(3, 'Raj', 'Test@gmail.com', '2020-09-24', '10:00AM - 11:00AM'),
(4, 'test', 'test@testing.com', '2020-09-24', '09:00AM - 10:00AM'),
(5, 'hello test', 'hellotest@gmail.com', '2020-09-25', '10:00AM - 11:00AM'),
(6, 'Bhavi', 'bhavi@gmail.com', '2020-09-24', '16:00PM - 17:00PM'),
(7, 'Raj', 'raj@gmail.com', '2020-09-25', '12:00PM - 13:00PM'),
(8, 'testing', 'test@gmail.com', '2020-09-29', '16:00PM - 17:00PM'),
(9, 'Admin', 'admin@gmail.com', '2020-09-27', '11:00AM - 12:00PM'),
(10, 'Raj', 'rja@ymail.com', '2020-09-27', '10:00AM - 11:00AM');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `identity` varchar(55) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `fname`, `lname`, `identity`, `feedback`) VALUES
(1, 'Raj', 'Patel', 'student', 'Hello World!'),
(2, 'bhavi', 'mulji', 'student', 'nice page '),
(3, 'Test', 'Testing', 'alumni', 'This is a Test!'),
(4, 'Testing123', 'Test', 'nonstudent', 'This is a test and demo!'),
(5, 'hello', 'world', 'alumni', 'This is circle'),
(6, 'hello', 'world', 'alumni', 'This is circle'),
(9, 'John', 'Watson', 'alumni', 'Great to see you here! Test!!!'),
(10, 'John', 'Watson', 'alumni', 'Great to see you here! Test!!!'),
(11, 'John', 'Watson', 'alumni', 'Great to see you here! Test!!!');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_Id` int(11) NOT NULL,
  `firstname` char(10) DEFAULT NULL,
  `lastname` char(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_Id`, `firstname`, `lastname`, `username`, `email`, `password1`) VALUES
(1, 'raj', 'patel', 'raj', 'raj@gmail.com', 'raj123'),
(3, 'test', 'test', '', 'test@gmail.com', 'test'),
(7, 'test', 'es', '', 'test', 'test'),
(9, 'tes', 'tes', '', 'tes', 'tes'),
(10, 'Bhavi', 'Patel', '', 'Bhavi@gmail.com', 'Bhavi'),
(11, 'Raj', 'Govind', 'Admin', 'admin@icloud.com', 'Admin123'),
(12, 'Raj', 'Govind', '', 'rajgovind@gmail.com', 'Govind123');

-- --------------------------------------------------------

--
-- Table structure for table `teamstats`
--

CREATE TABLE `teamstats` (
  `ts_Id` int(11) NOT NULL,
  `Team_Name` varchar(55) NOT NULL,
  `Won` int(55) NOT NULL,
  `Lost` int(55) NOT NULL,
  `Position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamstats`
--

INSERT INTO `teamstats` (`ts_Id`, `Team_Name`, `Won`, `Lost`, `Position`) VALUES
(1, 'UoG', 3, 1, 2),
(2, 'Kings', 5, 1, 1),
(3, 'Canterbury', 3, 2, 3),
(4, 'UCL', 2, 3, 4),
(5, 'Kingston', 1, 1, 5),
(6, 'TAJ', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `useremail` varchar(128) NOT NULL,
  `userphone` varchar(24) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `useremail`, `userphone`, `dt`) VALUES
(11, 'Raj', 'raj@gmail.com', '(089)-708-7980', '2020-09-24 01:34:38'),
(12, 'Max', 'max@gmail.com', '(078) 576-9048', '2020-09-25 07:23:52'),
(13, 'Bhavyata', 'bhavi@gmail.com', '(076) 899 8883', '2020-09-25 13:52:46'),
(14, 'Rex', 'rex@ymail.com', '(078) 666 8888', '2020-09-25 14:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `userstats`
--

CREATE TABLE `userstats` (
  `us_Id` int(11) NOT NULL,
  `playername` varchar(55) NOT NULL,
  `role` varchar(500) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstats`
--

INSERT INTO `userstats` (`us_Id`, `playername`, `role`, `ranking`) VALUES
(1, 'Raj', 'Wicket-Keeper', 4),
(2, 'Max', 'Bowler', 6),
(3, 'Glen', 'Batsman', 5),
(4, 'George', 'All-rounderr', 1),
(5, 'Ajay', 'All-rounder', 2),
(6, 'Watson', 'Batsman', 3),
(7, 'testing', 'all-rounder', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_Id`);

--
-- Indexes for table `teamstats`
--
ALTER TABLE `teamstats`
  ADD PRIMARY KEY (`ts_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstats`
--
ALTER TABLE `userstats`
  ADD PRIMARY KEY (`us_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teamstats`
--
ALTER TABLE `teamstats`
  MODIFY `ts_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userstats`
--
ALTER TABLE `userstats`
  MODIFY `us_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
