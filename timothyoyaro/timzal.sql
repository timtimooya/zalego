-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 12:54 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timzal`
--

-- --------------------------------------------------------

--
-- Table structure for table `interface`
--

CREATE TABLE `interface` (
  `id` int(255) NOT NULL,
  `firstaname` text NOT NULL,
  `secondname` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interface`
--

INSERT INTO `interface` (`id`, `firstaname`, `secondname`, `username`, `passsword`) VALUES
(1, 'timt', 'tim', 'timoyaro', '12345'),
(2, '', '', 'asdsa', '3455'),
(3, 'sadasd', 'asdasd', 'asdsa', '3455'),
(4, 'sadds', 'asdsa', 'sada', '12345'),
(5, 'sadds', 'asdsa', 'sada', '12345'),
(6, 'sadds', 'asdsa', 'sada', '12345'),
(7, 'sadds', 'asdsa', 'sada', '12345'),
(8, 'sadds', 'asdsa', 'sada', '12345'),
(9, 'sadds', 'asdsa', 'sada', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interface`
--
ALTER TABLE `interface`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interface`
--
ALTER TABLE `interface`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
