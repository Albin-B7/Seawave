-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 09:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seawave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(2, 'admin3', 'admin2@example.com', 'admin3', '$2y$10$hb.KHtAeCGvjrPSp/89YeegxyqfNzWi2TNFef.gu.uvbRBCpNLAIy'),
(4, 'ad1', 'ad1@example.com', 'ad1', '$2y$10$0mzwVv0e8HGLUk6vXX726eX.M0DY2/rroOB3aDodF8zEIAUVS86Xe'),
(5, 'ad2', 'ad2@example.com', 'ad2', '$2y$10$IlauDW6IFxmG7CranjOfmeBsZZeyZ4MIXb1k7CJ74dh4h1gp5P3eC');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `address`) VALUES
(1, 'atlantramizi', 'atdheuyn@hotmail.com', 'viti'),
(2, 'asd', 'asd@explain.com', 'asddas'),
(3, 'atlantramizi', 'atlantramizi@hotmail.com', 'Rr.Ismail Qemali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'atlantramizi', 'atlant@example.com', 'Atlant', '123123123'),
(2, 'atlantramizi', 'atlantramizi@hotmail.com', 'atlantramizi', '123212321'),
(3, 'atlantramizi', 'atdheuyn@hotmail.com', 'atlantramizi', '8'),
(4, 'atlantramizi', 'atlantramizi@hotmail.com', 'atlantramizi', '123'),
(5, 'user2', 'user@example.com', '', 'user1'),
(7, 'qwe12', 'qweqwe@example.com', 'qwe', '123123'),
(9, 'test', 'test@gmailcom', 'test', '$2y$10$Hsfwd1MX/GBLskaDUYxWCOVEJT7MyQNUz1XF6XkkcqdA/XKYTgh5a'),
(10, 'admin2', 'admin2@example.com', 'admin2', '$2y$10$Ewcza0WyIDwMIv/FxPvoZOhSvpEZCqdY5B13OUHmgNoqC6049NFiO'),
(11, 'Atlant6', 'Atlant6@gmail.com', 'Atlant6', '$2y$10$qfpROOe3ZuzKeUJDI6aUk.0mq95oKi7.gjnnE8/c0SSelYRmPcJM6'),
(12, 'test5', 'user@example.com', 'test5', '$2y$10$uSlx.1RSnJBbtl/oyIkB8eFWFn01It0/XTV4DpikBSE7akD.MB71.'),
(13, 'atlant01', 'atlant@example.com', '', '$2y$10$z6SqgpWbUgcehQ1LYNZSHuaaejcKXpCIKXV6hubJXh35ltrZoZW1C'),
(15, 'user', 'user@example.com', 'user', '$2y$10$l0RL39gE3V1.Xvx0mU3nEueFanxzF4HLjlaKQgE28J3VoXDCpPq9K'),
(16, 'atlantramizi', 'atdheuyn@hotmail.com', 'Atlant1', '$2y$10$FPhZ3v3dz7TLv4QrwkedJedxYKPJTAtPdvjre1WacokXcbE6dwQ9q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
