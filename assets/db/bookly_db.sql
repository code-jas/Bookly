-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 06:59 PM
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
-- Database: `bookly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_sign_up_verification`
--

CREATE TABLE `account_sign_up_verification` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_sign_up_verification`
--

INSERT INTO `account_sign_up_verification` (`id`, `username`, `password`, `confirm_password`, `email`, `vkey`, `verified`, `createdate`) VALUES
(42, 'JohnAngelo04', 'JohnName@102', '', 'johnangelo.silvestre@tup.edu.ph', '0f3f176db2c50291180b340c971a5116', 1, '2022-06-19 13:24:58.627346'),
(52, 'RyanTecling', 'P@werShell10', '', 'kiveh45578@syswift.com', '7a743b1f15a5d5cd33fd6c4f02ae59db', 0, '2022-06-19 14:58:03.674676'),
(53, 'tagryze04', 'jOhnname@102', '', 'mawebal998@tagbert.com', '972090992fad617d6725ccc518c568ac', 1, '2022-06-22 14:09:08.291999');

-- --------------------------------------------------------

--
-- Table structure for table `account_user`
--

CREATE TABLE `account_user` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_user`
--

INSERT INTO `account_user` (`id_user`, `firstname`, `lastname`, `contact`, `birthdate`, `username`, `email`, `password`, `address`, `barangay`, `city`, `zipcode`, `profile_img`, `account_type`) VALUES
(6, 'John Angelo', 'Silvestre', '09562141708', '2000-01-03', 'JohnAngelo04', 'johnangelo.silvestre@tup.edu.ph', 'maRinduQQu3$', '1230 Tambunting st sta cruz', '374', 'Manila', '1010', './assets/images/profile_imgs/5833_STC-1.jpg', '2'),
(8, 'Angelo John', 'Banting', '', '0000-00-00', 'tagryze04', 'mawebal998@tagbert.com', 'jOhnname@102', '1230 Tambunting st sta cruz', '374', 'Manila', '1014', './assets/images/profile_imgs/STC-1.jpg', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_sign_up_verification`
--
ALTER TABLE `account_sign_up_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_user`
--
ALTER TABLE `account_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_sign_up_verification`
--
ALTER TABLE `account_sign_up_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `account_user`
--
ALTER TABLE `account_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
