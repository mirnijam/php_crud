-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 07:46 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `class`, `phone`, `date`) VALUES
(1, 'MIR NIJAMUDDIN', 'MESHERA', '11', '9865645432', '2024-09-03 17:41:10'),
(2, 'AKIB', 'JE', '11', '9832767270', '2024-09-03 17:41:49'),
(5, 'MIR NIJAMUDDIN', 'KALACHARA', '11', '85755757557574557', '2024-09-03 18:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

CREATE TABLE `studentclass` (
  `id` int(10) NOT NULL,
  `classname` varchar(10) NOT NULL,
  `duration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`id`, `classname`, `duration`) VALUES
(1, '11', '2024-01-01'),
(2, '11', '2024-01-01'),
(3, '11', '2020-01-01'),
(4, '11', '2020-01-01'),
(5, '11', '2020-01-01'),
(6, '11', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `address_id` int(11) NOT NULL,
  `st_id` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_address`
--
ALTER TABLE `student_address`
  ADD PRIMARY KEY (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studentclass`
--
ALTER TABLE `studentclass`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_address`
--
ALTER TABLE `student_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
