-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 02:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doatap`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id_of_application` int(11) NOT NULL,
  `country_of_university` varchar(25) NOT NULL,
  `university` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ects` int(11) NOT NULL,
  `registration_date` date NOT NULL,
  `graduation_date` date NOT NULL,
  `certificate` blob NOT NULL,
  `id_card` blob NOT NULL,
  `research_or_work` blob NOT NULL,
  `id_of_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `addr` varchar(20) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `psw` varchar(20) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `country`, `addr`, `city`, `region`, `email`, `tel`, `postcode`, `psw`, `user_type`) VALUES
(6, 'Kostas', 'Papadopoulos', 'Greece', 'Marousi 12', 'Athens', 'Marousi', 'kostas@gmail.com', '1234567891', '12345', '123', 'Manager'),
(11, 'spyros', 'navro', 'greece', 'somewhere', 'athens', 'marousi', 'spyros@gmail.com', '6969696969', '12345', '123', 'Common');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id_of_application`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id_of_application` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
