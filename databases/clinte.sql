-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 12:50 PM
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
-- Database: `hiten`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinte`
--

CREATE TABLE `clinte` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinte`
--

INSERT INTO `clinte` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'hiten', 'kikani', 'hitenkikani@gmail.com', '2023-10-03 14:08:25'),
(2, 'John', 'Doe', 'john@example.com', '2023-10-03 14:12:28'),
(4, 'John', 'Doe', 'john@example.com', '2023-10-03 14:21:26'),
(5, 'kalu', 'chalu', 'kaluchalu@gmail.com', '2023-10-04 13:30:23'),
(6, 'aina', 'mina', 'ainamina@gmail.com', '2023-10-04 13:31:08'),
(7, 'dika', 'mayjav', 'dikamayja@gmail.com', '2023-10-04 13:32:05'),
(8, 'jiya', 'jiyare', 'jiyajiyare@gmail.com', '2023-10-04 13:32:39'),
(9, 'baby', 'babykobasepasandhe', 'babykobasepasandhe@gmail.com', '2023-10-04 13:33:35'),
(10, 'kukadu', 'botma', 'kukadubotma@gmail.com', '2023-10-04 13:34:12'),
(11, 'chokrachokari', 'mojma', 'chokarachokarimojma@gmail.com', '2023-10-04 13:34:45'),
(12, 'nagingingingin', 'nagingingingin', 'nagingingingin@gmail.com', '2023-10-04 13:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinte`
--
ALTER TABLE `clinte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinte`
--
ALTER TABLE `clinte`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
