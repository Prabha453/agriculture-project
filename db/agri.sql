-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 11:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `orderdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `pid`, `orderdate`) VALUES
(1, '1', '2', '2021-Apr-6'),
(2, '2', '2', '2021-Apr-6'),
(3, '2', '1', '2021-Apr-6'),
(4, '2', '3', '2021-Apr-6'),
(5, '8', '1083', '2023-Feb-20'),
(6, '3', '1099', '2023-Feb-20'),
(7, '3', '1083', '2023-Feb-20'),
(8, '11', '1083', '2023-Feb-21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdesc` text NOT NULL,
  `imgpath` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` varchar(4) NOT NULL,
  `ptype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdesc`, `imgpath`, `price`, `qty`, `ptype`) VALUES
(1083, 'Rice Seeds', '100% pure nature ', 'uploads/rice.jpeg', '40', '1', '0'),
(1084, 'Cashew Nuts', '100% pure nature', 'uploads/cashew.avif', '80', '1', '0'),
(1085, 'Black Gram', '100% pure nature', 'uploads/black.jpg', '60', '1', '0'),
(1086, 'Jack Fruits Seeds', '100% pure nature', 'uploads/jack.jpg', '50', '1', '0'),
(1087, 'Wheat', '100% pure nature', 'uploads/wheat.jpg', '100', '1', '0'),
(1088, 'Sesame', '100% pure nature', 'uploads/Sesame.jpg', '60', '1', '0'),
(1089, 'Ground Nuts', '100% pure nature', 'uploads/ground.jpg', '40', '1', '0'),
(1090, 'Ragi Seeds', '100% pure nature', 'uploads/ragi.webp', '70', '1', '0'),
(1091, 'Urea', '100% pure nature', 'uploads/urea.jpg', '350', '1', '0'),
(1092, 'Uttam Super', '100% pure nature', 'uploads/uttem.jpg', '400', '1', '0'),
(1093, 'N.P.K', '100% pure nature', 'uploads/npk.jpg', '250', '1', '0'),
(1094, 'Gromor', '100% pure nature', 'uploads/gromer.png', '400', '1', '0'),
(1095, 'Organic', '100% pure nature', 'uploads/organic.jpg', '450', '1', '0'),
(1096, 'Turf Builder', '100% pure nature', 'uploads/turf.jpg', '360', '1', '0'),
(1097, 'Combine Harverster', '', 'uploads/combineharvester.jpg', '400', '1', '1'),
(1099, 'Power Tiller', '', 'uploads/powertiiler.jpg', '500', '1', '1'),
(1100, 'Tractor Plough', '', 'uploads/tractorPlough.jpg', '600', '1', '1'),
(1101, 'RiceTransplanter', '', 'uploads/ricetransplanter.jpg', '650', '1', '1'),
(1102, 'RoundStrawBaler', '', 'uploads/roundstrawbaler.png', '450', '1', '1'),
(1103, 'Hand Equipments', '', 'uploads/handequipments.jpg', '200', '1', '1'),
(1104, 'Tractor', '', 'uploads/v6.jpg', '400', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `uphone` varchar(13) NOT NULL,
  `uaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uemail`, `upass`, `uphone`, `uaddress`) VALUES
(1, 'prakash', 'pariprakash509@gmail.com', '12345', '9876543210', 'nathamalai, cuddalore dt, tamilnadu - 608303'),
(2, 'sridar', 'sridar@gmail.com', '1234', '9876543211', 'nathamalai, cuddalore dt, tamilnadu - 608303'),
(3, 'prabhakaran', 'prabha@gmail.com', 'prabha', '9021902901', 'no.922  neru street, pondy.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
