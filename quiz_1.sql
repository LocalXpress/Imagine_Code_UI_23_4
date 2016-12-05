-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 08:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_1`
--

CREATE TABLE `quiz_1` (
  `sl` int(11) NOT NULL,
  `name_1` varchar(100) DEFAULT NULL,
  `name_2` varchar(100) DEFAULT NULL,
  `ph` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mark` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_1`
--

INSERT INTO `quiz_1` (`sl`, `name_1`, `name_2`, `ph`, `email`, `start_time`, `end_time`, `mark`) VALUES
(8, 'Ab', 'BC', 12, 'swaroop2895@gmail.com', '2016-11-05 18:57:32', '0000-00-00 00:00:00', 0),
(9, 'BN', 'CN', 2233, 'me995et.ripon@gmail.com', '2016-11-05 19:44:47', '2016-11-05 19:44:47', -1),
(10, 'fff', 'fffff', 111, 'meet.ripon@gmail.com', '2016-11-05 20:05:30', '2016-11-05 20:05:30', 0),
(11, 'ghh', 'hhghg', 23322, 'meet.ripon@gmail.com', '2016-11-05 20:31:03', '2016-11-05 20:31:03', 1),
(12, 'eeee', 'ewewe', 0, 'me19956et.ripon@gmail.com', '2016-11-05 20:32:50', '2016-11-05 20:32:50', 10),
(13, 'Poushali Choudhury', 'Nayanika Chandra', 2147483647, 'poushali28@gmail.com', '2016-11-05 20:37:35', '2016-11-05 20:37:34', 2),
(14, 'Swaroop Acharjee', 'Imran Khan', 944, 'meet.ripon@gmail.com', '2016-11-05 20:39:30', '2016-11-05 20:39:30', -1),
(15, 'hhhd', 'hhghg', 0, 'meet.995ripon@gmail.com', '2016-11-06 07:01:00', '2016-11-06 07:01:00', 0),
(16, 'Swaroop Acharjee', 'Imran Khan', 1234, 'meet.ripon@995gmail.com', '2016-11-06 07:06:35', '2016-11-06 07:06:35', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_1`
--
ALTER TABLE `quiz_1`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_1`
--
ALTER TABLE `quiz_1`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
