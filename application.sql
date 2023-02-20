-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 12:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(230) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `email`, `address`, `city`, `mobile`) VALUES
(8, 'kriti', ' mk1477279@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(9, 'kriti', ' mk1477279@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(10, 'kriti', ' mk1477279@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(11, 'kriti', ' mk1477279@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(12, 'sonu', ' mk@123', 'bedual', 'patna', 2147483647),
(13, 'monu kumar', ' mk1477271@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(14, 'sonu ', ' mk1477275@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647),
(15, 'Monu', ' mk1477271@gmail.com', 'kankarbagh,Hanuman Nagar ,Patna(Bihar)', 'Patna', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
