-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 08:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rifat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `bookname` varchar(225) NOT NULL,
  `bookdetails` varchar(225) NOT NULL,
  `bookpic` blob,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(225) NOT NULL,
  `edition` varchar(225) NOT NULL,
  `isbn` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `dealid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`bookname`, `bookdetails`, `bookpic`, `author`, `publisher`, `edition`, `isbn`, `price`, `catid`, `dealid`) VALUES
('Harry Potter', 'Fantasy', 0x446561642e6a7067, 'J.K Rawling', 'North Publishers ', '7th', 'J', 9, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `book name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `name`) VALUES
(2, 'Norwegian Wood');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `dealid` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `dealtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`dealid`, `bookname`, `dealtype`) VALUES
(1, 'The Prisoner of Azkaban', 'Buy');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(225) NOT NULL,
  `email` varchar(40) NOT NULL,
  `location` varchar(225) NOT NULL,
  `contactnumber` varchar(14) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `email`, `location`, `contactnumber`, `password`, `confirmpassword`) VALUES
('Rifat', 'raifat@gmail.com', 'dhaka', '01740588909', '202cb962ac59075b964b07152d234b70', ''),
('rafiul', 'gmail', 'ban', '00000', '123', '123'),
('raifulalam', 'raif@gmail.com', 'dhakak', '9099', '202cb962ac59075b964b07152d234b70', ''),
('Ekramul', 'ekramu@gmail.com', 'dhaka', '3333', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Shuvro Roy', 'shuvroshopno@gmail.com', '01775569710', 'Dhaka', '$2y$10$syFF3sxHQe1DM97clL52tOUa2eKlrQPAo9WZaTH.jit6NTzxvb9um');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`dealid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
