-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 11:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vhra`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `added_on`) VALUES
(24, 'test', 'test@gmail.com', '1234567890', 'test message', '2024-01-28 18:08:31'),
(25, 'doremonNobita', 'kabirdasss123@gmail.co', '0930628853', 'lkdosjidhsuidf', '2024-01-28 18:08:49'),
(26, 'testName', 'kabirdasss123@gmail.co', '1234543212', 'test name ', '2024-01-28 18:09:11'),
(27, 'nayaa', 'siddhu@gmail.com', '0930628853', 'dddd', '2024-01-29 17:21:12'),
(28, 'Kaushik Vishwas', 'siddhu@gmail.com', '0930628853', 'ss', '2024-01-29 17:21:43'),
(29, 'Kaushik Vishwas', 'siddhu@gmail.com', '0930628853', 'ss', '2024-01-29 17:24:33'),
(30, 'Kaushik Vishwas', 'siddhu@gmail.com', '0930628853', 'ss', '2024-01-29 17:24:50'),
(31, 'Kaushik Vishwas', 'siddhu@gmail.com', '0930628853', 'ss', '2024-01-29 17:25:10'),
(32, 'Lol', 'kaushikbiawas@gmail.co', '0930628853', 'skjsjf', '2024-01-29 17:25:27'),
(33, 'Kaushik Vishwas', 'kabirdasss123@gmail.co', '0930628853', 'hello', '2024-02-10 15:48:04'),
(34, 'Kaushik Vishwas', 'kabirdasss123@gmail.co', '0930628853', 'hello', '2024-02-10 19:40:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
