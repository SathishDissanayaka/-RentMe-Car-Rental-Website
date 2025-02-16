-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 04:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `carID` int(10) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `year` int(20) NOT NULL,
  `imgURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cruises`
--

CREATE TABLE `cruises` (
  `Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` double NOT NULL,
  `noOfPersons` int(30) NOT NULL,
  `imgURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `Full name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `Full name`, `Email`, `Message`) VALUES
(2, '[Sathish]', '[sathish@gmail.com]', '[bye]');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `User_id` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Passwords` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`User_id`, `First_name`, `Last_name`, `Email`, `Contact_no`, `Address`, `Date_of_birth`, `Passwords`) VALUES
(1, 'Lochana', 'K', 'lochana_user@cc.com', '1234567890', '123 Main St, City, Country', '1990-01-01', 'password123'),
(2, 'Tharushi', 'S', 'tharushi_user@cc.com', '9876543210', '456 Oak Ave, Town, Country', '1992-05-02', 'password123123'),
(3, 'Sadeesha', 'J', 'sadeesha_user@cc.com', '5551112222', '789 Elm St, Village, Country', '1993-02-02', 'lmao0987654'),
(4, 'Shehani', 'G', 'shehani_userm@cc.com', '1112223333', '101 Maple Ln, Hamlet, Country', '1985-05-20', 'verysecurepassword12'),
(5, 'Dulakshi', 'B', 'dulakshi_user@cc.com', '7778889999', '21 Pine St, City, Country', '1978-09-15', 'mikepassword'),
(6, 'Sathish', 'Dissanayaka', 'sathish@gmail.com', '0740000000', 'sss', '2001-02-03', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `days` int(10) NOT NULL,
  `method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `cruises`
--
ALTER TABLE `cruises`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `carID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cruises`
--
ALTER TABLE `cruises`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
