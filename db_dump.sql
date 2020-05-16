-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2020 at 03:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_slip`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `age`, `email`, `address`) VALUES
(17, 'solo', 'jayce', 28, 'jerryjayce@gmail.com', ';lskdjfkajkal'),
(18, 'solo', 'jayce', 28, 'jerryjayce@gmail.com', ';lskdjfkajkal'),
(19, 'alert test', 'kjsd', 234, 'jerryjayce@gmail.com', 'sfwfrf'),
(20, 'elk;fj', 'psfdjgpo', 83475, 'jerryjayce@gmail.com', 'qawoeijfiowq');

-- --------------------------------------------------------

--
-- Table structure for table `user_work_experience`
--

CREATE TABLE `user_work_experience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `work_duration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_work_experience`
--

INSERT INTO `user_work_experience` (`id`, `user_id`, `company_name`, `role`, `work_duration`) VALUES
(5, 17, 'blue', 'web dev', '3'),
(6, 17, 'jhaki', 'full stack', '1'),
(7, 18, 'blue', 'web dev', '3'),
(8, 18, 'jhaki', 'full stack', '1'),
(9, 19, 'sadkljk', 'wpojpoi', '3'),
(10, 20, 'aiej', 'oijdhsfio', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_work_experience`
--
ALTER TABLE `user_work_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_work_experience`
--
ALTER TABLE `user_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
