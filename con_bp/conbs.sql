-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 01:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_app`
--

CREATE TABLE `users_app` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) NOT NULL,
  `prezime` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `spol` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_app`
--

INSERT INTO `users_app` (`id`, `ime`, `prezime`, `email`, `spol`, `dob`) VALUES
(1, 'Maja', 'Popaj', 'pmaja@mail.com', 'Z', 35),
(2, 'Maja', 'Popaj', 'pmaja@mail.com', 'Z', 35),
(3, 'Zara', 'Maja', '123@mail.com', 'Z', 18),
(6, 'Gorer', 'Piter', 'gpiter@cpmco.com', 'M', 17),
(7, 'Inic', 'Jinic', 'jinic@mail.com', 'M', 13),
(16, 'Hero', 'Zaro', 'okf@mail.com', 'M', 41),
(17, 'Povo', 'Voko', 'vopo@opvmov.com', 'M', 30),
(18, 'Eter', 'Meter', 'emter@opvmov.com', 'M', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_app`
--
ALTER TABLE `users_app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_app`
--
ALTER TABLE `users_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
