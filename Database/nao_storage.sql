-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2023 at 05:31 PM
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
-- Database: `nao_storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `username`, `name`, `password`, `gender`) VALUES
('attariq03.azhar@gmail.com', 'attariqazhar', 'Attariq Muhammad Azhar', '5f4dcc3b5aa765d61d8327deb882cf99', 'Man'),
('nalendro.nuarf@gmail.com', 'nalendronawval', 'Nalendro N.U.A.R.F.', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male'),
('owen.halim@gmail.com', 'owen.halim', 'Nicholas Owen Halim', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `stock`, `category`, `price`) VALUES
(1, 'Lego', 50, 'Toys', 50000),
(2, 'Ice Cream', 250, 'Food & Drinks', 5000),
(3, 'Broom', 74, 'Households', 15000),
(4, 'Pencil', 200, 'Stationary', 2000),
(5, 'Hot Wheels', 65, 'Toys', 25000),
(6, 'Bread', 50, 'Food & Drinks', 15000),
(7, 'Lamp', 25, 'Households', 20000),
(8, 'Crayon', 30, 'Stationary', 25000),
(9, 'Pencil Case', 25, 'Stationary', 10000),
(10, 'Soda', 50, 'Food & Drinks', 5000),
(11, 'Teddy Bear', 9, 'Toys', 30000),
(12, 'Chair', 35, 'Households', 30000),
(13, 'Scissors', 8, 'Stationary', 20000),
(14, 'Banana', 15, 'Food & Drinks', 15000),
(15, 'Desk Table', 10, 'Households', 75000),
(16, 'Doll', 50, 'Toys', 20000),
(17, 'Pistol Toy', 50, 'Toys', 35000),
(18, 'Onigiri', 6, 'Food & Drinks', 10000),
(19, 'Frying Pan', 5, 'Households', 60000),
(20, 'Eraser', 50, 'Stationary', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
