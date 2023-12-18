-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2023 at 05:30 PM
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
-- Database: `nao_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `username`, `name`, `password`, `gender`) VALUES
('attariq03.azhar@gmail.com', 'attariqazhar', 'Attariq Muhammad Azhar', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male'),
('nalendro.nuarf@gmail.com', 'nelendronawval', 'Nalendro N.U.A.R.F.', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male'),
('owenhalim@gmail.com', 'owen.halim', 'Nicholas Owen Halim', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionId` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `itemId` varchar(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `transactionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionId`, `email`, `itemId`, `itemName`, `category`, `amount`, `totalPrice`, `transactionDate`) VALUES
(1, 'attariq03.azhar@gmail.com', '2', 'Ice Cream', 'Food & Drinks', 50, 250000, '2023-10-03'),
(2, 'nalendro.nuarf@gmail.com', '18', 'Onigiri', 'Food & Drinks', 5, 50000, '2023-10-03'),
(3, 'attariq03.azhar@gmail.com', '19', 'Frying Pan', 'Households', 1, 60000, '2023-10-06'),
(4, 'owenhalim@gmail.com', '12', 'Chair', 'Households', 2, 60000, '2023-10-07'),
(5, 'nalendro.nuarf@gmail.com', '10', 'Soda', 'Food & Drinks', 10, 50000, '2023-10-08'),
(6, 'attariq03.azhar@gmail.com', '5', 'Hot Wheels', 'Toys', 20, 500000, '2023-10-11'),
(7, 'attariq03.azhar@gmail.com', '4', 'Pencil', 'Stationary', 5, 10000, '2023-11-16'),
(8, 'attariq03.azhar@gmail.com', '18', 'Onigiri', 'Food & Drinks', 20, 200000, '2023-10-17'),
(9, 'owenhalim@gmail.com', '18', 'Onigiri', 'Food & Drinks', 10, 100000, '2023-10-18'),
(10, 'owenhalim@gmail.com', '15', 'Desk Table', 'Households', 2, 150000, '2023-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `fk_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `customer` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
