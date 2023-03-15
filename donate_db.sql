-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 09:18 PM
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
-- Database: `donate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatelist`
--

CREATE TABLE `donatelist` (
  `id` int(255) NOT NULL,
  `fullName` text NOT NULL,
  `email` text NOT NULL,
  `moblieNumber` int(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatelist`
--

INSERT INTO `donatelist` (`id`, `fullName`, `email`, `moblieNumber`, `address`, `message`, `amount`) VALUES
(4, 'Sagor', 'sagor12@gmail.com', 1882022045, 'shantirhat,patiya', 'ten thousand tk                                                                                                                                    ', 10000),
(5, 'faysal', 'faysal@gmail.com', 182202353, 'Patiya', 'twelve thousand tk                                                                                                                                                                                                              ', 12000),
(6, 'shahed', 'shahed@gmail.com', 1882022048, 'Ctg', 'two thousand tk', 2000),
(7, 'Ayasha', 'ayasha@gmail.com', 1820202020, 'Dhaka', 'Three Thousand Tk                                                                                                                                                                                                                       ', 3000),
(8, 'jannat', 'jannat@gmail.com', 1820202020, 'ctg', 'Three thousand tk only                                                                                    ', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatelist`
--
ALTER TABLE `donatelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatelist`
--
ALTER TABLE `donatelist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
