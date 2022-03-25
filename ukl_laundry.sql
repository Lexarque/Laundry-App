-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 01:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukl_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `genders` enum('M','F') NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `name`, `address`, `genders`, `phone_number`) VALUES
(4, 'Adam', 'Jl. Dababy yeah yeah lesg', 'M', '0998898'),
(5, 'ccc', 'Jl. Dababy yeah yeah', 'M', '66655'),
(6, 'Poppo', 'here', 'F', '08823324223');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id_packages` int(11) NOT NULL,
  `package_type` enum('by_weight','blankets','bed_cover','shirts') NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id_packages`, `package_type`, `price`) VALUES
(1, 'by_weight', 30000),
(2, 'blankets', 15000),
(3, 'bed_cover', 30000),
(4, 'shirts', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transactions` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `payment_date` date DEFAULT NULL,
  `status` enum('new','processed','done','picked_up') NOT NULL DEFAULT 'new',
  `payment_status` enum('paid','not_paid') NOT NULL DEFAULT 'not_paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id_transactions`, `id_member`, `id_user`, `date`, `due_date`, `payment_date`, `status`, `payment_status`) VALUES
(1, 4, 6, '2022-01-23', '2022-01-30', '2022-01-27', 'picked_up', 'paid'),
(3, 5, 6, '2022-01-26', '2022-02-04', NULL, 'new', 'not_paid'),
(4, 4, 6, '2022-01-26', '2022-02-02', NULL, 'new', 'not_paid');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id_transaction_details` int(11) NOT NULL,
  `id_transactions` int(11) NOT NULL,
  `id_packages` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id_transaction_details`, `id_transactions`, `id_packages`, `subtotal`, `qty`) VALUES
(1, 1, 2, 0, 3),
(6, 1, 2, 45000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_user_admin` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` enum('cashier','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_user_admin`, `name`, `username`, `password`, `role`) VALUES
(1, 'Mountain', 'mountdew', 'mountdew555', 'cashier'),
(3, 'Mustafa', 'stafa', '78a14faa2bc0db8219e762fa0f0083d5', 'admin'),
(6, 'Handi', 'ind-ah', '55d8dfe75d115c6459c536b76cfc26c5', 'cashier'),
(7, 'Lort', 'L', 'ba168c2e6d5fa0cc0b72c48454335a67', 'cashier'),
(9, 'al', 'all', 'f4d5e7ac047cf42d519bd44625f9aeba', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id_packages`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transactions`),
  ADD KEY `fk id_member` (`id_member`),
  ADD KEY `fk id_user` (`id_user`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id_transaction_details`),
  ADD KEY `fk id_packages` (`id_packages`),
  ADD KEY `fk id_transactions` (`id_transactions`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_user_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id_packages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transactions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id_transaction_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_user_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk id_user` FOREIGN KEY (`id_user`) REFERENCES `user_admin` (`id_user_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `fk id_packages` FOREIGN KEY (`id_packages`) REFERENCES `packages` (`id_packages`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk id_transactions` FOREIGN KEY (`id_transactions`) REFERENCES `transactions` (`id_transactions`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
