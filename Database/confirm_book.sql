-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 12:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_wash`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm_book`
--

CREATE TABLE `confirm_book` (
  `serial_no` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `type_service` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `user_progress` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_book`
--

INSERT INTO `confirm_book` (`serial_no`, `name`, `email`, `place`, `type_service`, `date`, `price`, `user_progress`) VALUES
(1, 'Ganapathy ', 'gana', 'Chennai', 'Interior Wash', '2022-08-20', 0, 0),
(2, 'girish', 'Girish', 'Neyveli', 'Car Wash', '2022-08-21', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm_book`
--
ALTER TABLE `confirm_book`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm_book`
--
ALTER TABLE `confirm_book`
  MODIFY `serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
