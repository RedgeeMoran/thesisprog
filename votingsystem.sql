-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 05:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_users`
--

CREATE TABLE `emp_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` varchar(100) DEFAULT NULL,
  `classification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_users`
--

INSERT INTO `emp_users` (`id`, `username`, `password`, `access`, `classification`) VALUES
(1, 'admin', 'admin1', 'administrator', 1),
(2, 'user', 'user1', '', 0),
(3, '2018300626', 'hellohello123', '', 0),
(4, '2018300636', 'hellohello123', NULL, 0),
(10, '2018300654', 'hehehehe', NULL, 0),
(14, '2018231312', 'ewqeq', NULL, 0),
(17, '2018300823', 'hellohelo123', NULL, 0),
(18, '2018506928', 'hellohello123', NULL, 0),
(19, '2018405102', 'hellohello123', NULL, 0),
(23, '12345', '1234', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_users`
--
ALTER TABLE `emp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_users`
--
ALTER TABLE `emp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
