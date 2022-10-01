-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 03:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(300) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`user_id`, `name`, `username`, `password`, `address`, `role`) VALUES
(1, 'rvitm', 'rv', '1@1', 'Bangalore', 'CLG'),
(15, 'abcd', '1', '123@123', '', 'CLG');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `dept_details` varchar(255) NOT NULL,
  `added_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `password`, `role`, `dept_details`, `added_at`) VALUES
(1, 'Stock Administrator', '12345', 1, 'default stock department', '2018-03-27'),
(21, 'CSE department', '123', 0, ' CS', '2022-02-10'),
(22, 'ISE department', '123', 0, 'IS', '2022-02-10'),
(23, 'ECE department', '123', 0, ' ECE', '2022-02-10'),
(24, 'MECH department', '123', 0, ' Mech', '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_detail` varchar(255) NOT NULL,
  `bill_no` varchar(30) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL DEFAULT 1,
  `lab_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `supplied_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_detail`, `bill_no`, `supplier_id`, `dept_id`, `lab_id`, `stock_id`, `supplied_at`) VALUES
(1, 'Beakers', 'used to hold liquid', '0213', 2, 24, 8, 0, '2022-02-10'),
(2, 'Test Tubes', 'for chem', '3245', 1, 24, 8, 0, '2022-02-10'),
(3, 'Lenses', 'for phy', '456', 4, 24, 9, 0, '2022-02-10'),
(4, 'computer', 'contains all components cpu , motherboard, etc.', '23045', 5, 22, 11, 0, '2022-02-10'),
(5, 'computer -2', 'full set', '55556', 3, 21, 10, 0, '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` int(11) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `lab_details` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `added_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `lab_name`, `lab_details`, `dept_id`, `added_at`) VALUES
(0, 'unalloted', 'unalloted', 0, '0000-00-00'),
(8, 'chemistry', ' chem lab', 0, '2022-02-10'),
(9, 'physics', ' phy lab', 0, '2022-02-10'),
(10, 'cns lab - cse,ise', 'cns', 0, '2022-02-10'),
(11, 'dbms lab - cse,ise', ' dbms', 0, '2022-02-10'),
(12, 'mt lab - mech', ' Material Testing lab', 0, '2022-02-10'),
(13, 'dsp  lab - ece', ' Digital Signal Processing Laboratory', 0, '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(30) NOT NULL,
  `lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `item_id`, `quantity`, `total_price`, `lab_id`) VALUES
(27, 1, 20, 12000, 0),
(28, 2, 1000, 10000, 0),
(29, 3, 50, 2000, 0),
(30, 4, 50, 500000, 0),
(31, 5, 100, 1200000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `supplier_details` varchar(255) NOT NULL,
  `added_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_details`, `added_at`) VALUES
(1, 'Fozzby', '984 Woodstock Drive', '2019-04-12'),
(2, 'Redsupplies', '4407 Jerry Toth Drive', '2019-02-01'),
(3, 'MegaGoods Supplies', '1908 Leo Street', '2020-01-17'),
(4, 'Mooszer Electronics', '1491 Shinn Avenue', '2019-12-06'),
(5, 'AEC Components', '1743 Washburn Street', '2019-12-13'),
(6, 'MG Foods', '2617 Happy Hollow Road', '2019-10-18'),
(7, 'Vista Suppliers', '2820 Sunset Drive', '2019-02-07'),
(8, 'Edens Collection', '4407 Jerry Toth Drive', '2019-03-01'),
(9, 'USPharma', '2781 Leverton Cove Road', '2019-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`),
  ADD KEY `dept_name_2` (`dept_name`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `supplier_id_2` (`supplier_id`),
  ADD KEY `lab_id` (`lab_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lab_id`),
  ADD KEY `lab_name` (`lab_name`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `supplier_name` (`supplier_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56457;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `lab_id` FOREIGN KEY (`lab_id`) REFERENCES `lab` (`lab_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
