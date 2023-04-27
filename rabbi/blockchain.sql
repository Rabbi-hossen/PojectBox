-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 11:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balance` int(20) NOT NULL,
  `pin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `username` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`username`, `pin`, `amount`, `time`) VALUES
('rabbi', 123, 510, '0000-00-00 00:00:00'),
('shamim', 1234, 1024, '0000-00-00 00:00:00'),
('rh', 456, 555, '2023-04-27 13:20:55'),
('shamim', 1234, 1024, '2023-04-27 13:21:33'),
('rabbi1', 147, 2028, '2023-04-27 13:21:45'),
('rabbi', 123, 510, '2023-04-27 16:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trxId` int(20) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `publicKey` varchar(100) NOT NULL,
  `privateKey` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `profilePicture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `email`, `gender`, `dob`, `publicKey`, `privateKey`, `balance`, `profilePicture`) VALUES
('Ahmed Md Shamim ', 'shamim', '123', 'darrkyshanto@gmail.com', 'Male', '1998-04-26', 'cseshamim478123', 'cseshamim478000', '0', 'Cp-04.jpg'),
('Shakil Ahmed', 'shakil', '123asf.', 'shakil@123gmail.com', 'Male', '1998-04-12', 'shakil123', 'shakil000', '100011', 'profile.jpg'),
('Jessica Jessy', 'jessy', 'asdf', 'jessy@yahoo.com', 'Female', '1998-04-20', 'jessy123', 'jessy000', '1000', 'profile.jpg'),
('Messu', 'jesasdfsy', 'aa', 'asdf@yahoo.com', 'Other', '1998-04-20', 'jesasdfsy123', 'jesasdfsy000', '1000', 'profile.jpg'),
('asdfasdf', 'jeasdfsasdfsy', 'zz', 'aasdfsdf@yahoo.com', 'Other', '1998-04-20', 'jeasdfsasdfsy123', 'jeasdfsasdfsy000', '1000', 'profile.jpg'),
('asdasdffasdf', 'jeadsfasdfsasdfsy', 'pp', 'aasdasdfsdf@yahoo.com', 'Male', '1998-04-20', 'jeadsfasdfsasdfsy123', 'jeadsfasdfsasdfsy000', '1000', 'profile.jpg'),
('rabbi', 'rabbi', 'R@bbi123', 'r@gmail.com', 'Male', '2000-05-08', 'rabbi123', 'rabbi000', '1000', 'profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trxId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trxId` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
