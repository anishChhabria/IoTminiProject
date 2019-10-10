-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationid` int(11) NOT NULL,
  `locationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationid`, `locationname`) VALUES
(1, 'Chembur'),
(2, 'Ghatkopar'),
(3, 'Sion'),
(4, 'Kurla'),
(5, 'Bandra'),
(6, 'Dadar');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `uid` int(11) NOT NULL,
  `weight` double NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `year` year(4) NOT NULL,
  `locationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`uid`, `weight`, `time`, `date`, `timestamp`, `year`, `locationid`) VALUES
(1, 500, '20:22:09', '2019-09-24', '2019-10-04 06:40:58', 2019, 1),
(2, 600, '22:13:36', '2019-09-25', '2019-10-04 06:41:05', 2019, 1),
(3, 650, '10:30:15', '2019-10-01', '2019-10-04 06:41:15', 2019, 2),
(4, 750, '12:13:04', '2019-10-02', '2019-10-04 06:41:23', 2019, 4),
(5, 800, '12:13:03', '2019-10-01', '2019-10-04 06:41:29', 2019, 3),
(6, 560, '22:13:36', '2019-09-25', '2019-10-04 06:41:35', 2019, 5),
(7, 500, '12:13:03', '2019-10-01', '2019-10-04 06:41:51', 2019, 6),
(8, 840, '19:00:00', '2019-10-03', '2019-10-04 06:41:58', 2019, 5),
(9, 456, '08:00:00', '2019-10-03', '2019-10-04 06:42:03', 2019, 5),
(10, 654, '15:00:00', '2019-09-24', '2019-10-04 06:42:14', 2019, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `locationid` (`locationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`locationid`) REFERENCES `location` (`locationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
