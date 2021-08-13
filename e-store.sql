-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 05:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Nokia 7.2', 18500),
(2, 'Oneplus 7T', 35000),
(3, 'Oppo Reno2', 23000),
(4, 'Redmi', 12000),
(5, 'Samsung Galaxy A10', 15000),
(6, 'Samsung M13', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','confirmed') CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
