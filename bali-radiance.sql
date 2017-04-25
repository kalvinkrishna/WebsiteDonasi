-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2017 at 02:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bali-radiance`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_car`
--

CREATE TABLE `m_car` (
  `id_car` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL,
  `seat_capacity` int(11) NOT NULL,
  `tank_capacity` int(11) NOT NULL,
  `description` text NOT NULL,
  `fuel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_car_package`
--

CREATE TABLE `m_car_package` (
  `id_car_package` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_car_type`
--

CREATE TABLE `m_car_type` (
  `id_car_type` int(11) NOT NULL,
  `name_type` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_content`
--

CREATE TABLE `m_content` (
  `id_content` int(11) NOT NULL,
  `content_title` varchar(150) NOT NULL,
  `sub_content_title` varchar(150) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_package`
--

CREATE TABLE `m_package` (
  `id_package` int(11) NOT NULL,
  `id_package_parent` int(11) NOT NULL,
  `name_package` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_car`
--
ALTER TABLE `m_car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indexes for table `m_car_package`
--
ALTER TABLE `m_car_package`
  ADD PRIMARY KEY (`id_car_package`);

--
-- Indexes for table `m_car_type`
--
ALTER TABLE `m_car_type`
  ADD PRIMARY KEY (`id_car_type`);

--
-- Indexes for table `m_content`
--
ALTER TABLE `m_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `m_package`
--
ALTER TABLE `m_package`
  ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_car`
--
ALTER TABLE `m_car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_car_package`
--
ALTER TABLE `m_car_package`
  MODIFY `id_car_package` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_car_type`
--
ALTER TABLE `m_car_type`
  MODIFY `id_car_type` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_content`
--
ALTER TABLE `m_content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_package`
--
ALTER TABLE `m_package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
