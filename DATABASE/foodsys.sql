-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 12:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'BREAKFAST'),
(5, 'LUNCH'),
(6, 'DINNER'),
(7, 'BEVERAGES'),
(13, 'chinese_cusiene');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(255) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `rating`, `description`) VALUES
('naveen@gmail.com', 'good', 'sss'),
('naveen@gmail.com', 'good', 'ss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'average', 'ssssssss'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'bad', 'bad'),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', 'sss'),
('naveen@gmail.com', 'average', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', ''),
('naveen@gmail.com', 'good', 'ok'),
('naveen@gmail.com', 'good', 'b'),
('naveen@gmail.com', 'bad', 'b'),
('naveen@gmail.com', 'bad', 'b'),
('naveen@gmail.com', 'good', 'ww'),
('naveen@gmail.com', 'good', 'ww'),
('naveen@gmail.com', 'average', ''),
('naveen@gmail.com', 'good', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(6, 5, 'sos', 112, 'upload/eggs_in_tomatoes_1570465114.jpeg'),
(7, 6, 'www', 134, 'upload/egg_in_a_hole_recipe400_1570465135.jpg'),
(8, 7, 'coke', 23, 'upload/cocacola_1570465152.jpg'),
(12, 7, 'din', 222, 'upload/http _cdn.cnn.com_cnnnext_dam_assets_170224172523-mojito_1570731716.jpg'),
(13, 13, 'prawn fry', 310, 'upload/WIN_20191012_16_56_40_Pro_1570879619.jpg'),
(14, 13, 'ssss', 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`, `email`, `status`) VALUES
(1, '', 5260, '2019-10-11 22:38:49', 'shashu@gmail.com', 'o'),
(2, '', 224, '2019-10-11 22:41:13', 'shashu@gmail.com', ''),
(3, '', 15, '2019-10-11 22:42:42', 'shashu@gmail.com', ''),
(4, '', 30, '2019-10-11 22:43:40', 'shashu@gmail.com', 'Order placed'),
(8, '', 70, '2019-10-12 16:51:56', 'ravi@gmail.com', 'Order placed'),
(9, '', 70, '2019-10-12 16:52:18', 'ravi@gmail.com', ''),
(10, '', 63120, '2019-10-12 16:53:16', 'ravi@gmail.com', 'Order placed'),
(11, '', 46, '2019-10-12 18:43:10', 'var@gmail.com', ''),
(12, '', 1550, '2019-10-12 19:23:20', 'var@gmail.com', ''),
(16, '', 224, '2019-10-27 12:12:37', 'naveen@gmail.com', 'Order placed'),
(19, '', 224, '2019-10-27 18:04:46', 'naveen@gmail.com', 'Order placed'),
(23, '', 896, '2019-10-27 18:28:53', 'sha@g.c', 'Order placed'),
(28, '', 1776, '2019-10-29 15:39:06', 'naveen@gmail.com', 'ORDER AWAITING'),
(29, '', 0, '2019-10-29 15:39:29', 'naveen@gmail.com', 'ORDER AWAITING'),
(30, '', 0, '2019-10-29 15:43:54', 'naveen@gmail.com', 'ORDER AWAITING'),
(31, '', 0, '2019-10-29 15:44:58', 'naveen@gmail.com', 'ORDER AWAITING'),
(32, '', 0, '2019-10-29 15:49:15', 'naveen@gmail.com', 'ORDER AWAITING'),
(33, '', 0, '2019-10-29 15:57:02', 'naveen@gmail.com', 'ORDER AWAITING'),
(35, '', 0, '2019-10-29 15:58:08', 'naveen@gmail.com', 'ORDER AWAITING'),
(36, '', 0, '2019-10-29 16:02:33', 'naveen@gmail.com', 'ORDER AWAITING'),
(37, '', 0, '2019-10-29 16:03:02', 'naveen@gmail.com', 'ORDER AWAITING');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(1, 1, 9, 1),
(2, 1, 6, 1),
(3, 1, 7, 1),
(4, 1, 8, 1),
(5, 2, 10, 4),
(6, 0, 6, 2),
(7, 0, 7, 3),
(8, 0, 8, 2),
(9, 3, 12, 2),
(10, 4, 6, 22),
(11, 1, 9, 10),
(12, 1, 10, 10),
(13, 1, 6, 10),
(14, 1, 7, 10),
(15, 1, 8, 10),
(16, 1, 12, 10),
(17, 2, 6, 2),
(18, 3, 9, 1),
(19, 4, 9, 2),
(20, 5, 9, 1),
(21, 0, 6, 1),
(22, 0, 6, 1),
(23, 0, 9, 0),
(24, 0, 9, 3),
(25, 0, 7, 2),
(26, 0, 9, 3),
(27, 0, 7, 2),
(28, 0, 9, 2),
(29, 0, 6, 2),
(30, 6, 10, 2),
(31, 6, 7, 2),
(32, 7, 8, 2),
(33, 8, 9, 2),
(34, 8, 10, 2),
(35, 9, 9, 2),
(36, 9, 10, 2),
(37, 10, 9, 120),
(38, 10, 10, 120),
(39, 10, 6, 120),
(40, 10, 7, 120),
(41, 10, 8, 120),
(42, 10, 12, 120),
(43, 11, 8, 2),
(44, 12, 13, 5),
(45, 13, 17, 5),
(46, 14, 13, 3),
(47, 15, 6, 2),
(48, 15, 7, 2),
(49, 15, 8, 2),
(50, 15, 12, 2),
(51, 15, 13, 2),
(52, 15, 14, 2),
(53, 16, 6, 2),
(54, 17, 18, 2),
(55, 18, 18, 1),
(56, 18, 6, 1),
(57, 19, 6, 2),
(58, 20, 8, 4),
(59, 21, 6, 4),
(60, 22, 18, 8),
(61, 23, 6, 8),
(62, 24, 12, 9),
(63, 25, 13, 2),
(64, 26, 7, 2),
(65, 27, 18, 2),
(66, 28, 12, 8),
(67, 29, 6, 0),
(68, 30, 6, 0),
(69, 31, 14, 0),
(70, 32, 8, 0),
(71, 33, 14, 0),
(72, 34, 14, 0),
(73, 35, 13, 0),
(74, 36, 13, 0),
(75, 37, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `address`, `phno`, `password`) VALUES
('naveen', 'naveen@gmail.com', 'address', '9449118257', 81),
('ravi', 'ravi@gmail.com', 'blore', '5446576', 827),
('sachin', 'sachin@gmail.com', 'blore', '9900998521', 827),
('shashank', 'sha@g.c', 'ssssss', '9900998257', 202),
('shashank', 'shashu@gmail.com', 'blore', '9900998257', 202),
('varun', 'var@gmail.com', 'jnfjgkjcck', '548498', 827);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
