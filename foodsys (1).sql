-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 06:43 AM
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
(13, 'chinese_cusiene'),
(14, 'evening dish');

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
('naveen@gmail.com', 'good', 'ss'),
('sha@g.c', 'good', 'n'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'good', 'j'),
('sha@g.c', 'bad', '4'),
('sha@g.c', 'bad', '4'),
('sha@g.c', 'bad', '4'),
('sha@g.c', 'bad', '4'),
('sha@g.c', 'good', 'w'),
('sha@g.c', 'good', 'w'),
('sha@g.c', 'good', 'w');

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
(7, 6, 'www', 134, 'upload/egg_in_a_hole_recipe400_1570465135.jpg'),
(8, 7, 'coke', 23, 'upload/cocacola_1570465152.jpg'),
(12, 7, 'din', 222, 'upload/http _cdn.cnn.com_cnnnext_dam_assets_170224172523-mojito_1570731716.jpg'),
(13, 13, 'prawn fry', 310, 'upload/WIN_20191012_16_56_40_Pro_1570879619.jpg'),
(14, 13, 'ssss', 12, ''),
(19, 4, 'ffff', 100, ''),
(20, 4, 'rave idli', 310, ''),
(23, 4, 'masala dose', 122, ''),
(24, 4, 'tatte idli', 111, ''),
(25, 4, 'pulav', 23, ''),
(26, 4, 'puliogare', 11, 'upload/hamburger_1572963072.jpg'),
(27, 4, 'chitranna', 10, 'upload/SMTP_1_1572963097.png'),
(28, 6, 'anna sar', 500, ''),
(29, 4, 'egg rice', 150, ''),
(30, 4, 'ice creame', 900, ''),
(31, 4, 'sos', 1, ''),
(33, 4, 'idli', 111, 'upload/creditcard_1573536322.png');

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
(1, '', 5260, '2019-10-11 22:38:49', 'shashu@gmail.com', 'ORDER PLACED'),
(2, '', 224, '2019-10-11 22:41:13', 'shashu@gmail.com', ''),
(3, '', 15, '2019-10-11 22:42:42', 'shashu@gmail.com', ''),
(4, '', 30, '2019-10-11 22:43:40', 'shashu@gmail.com', 'Order placed'),
(8, '', 70, '2019-10-12 16:51:56', 'ravi@gmail.com', 'Order placed'),
(9, '', 70, '2019-10-12 16:52:18', 'ravi@gmail.com', ''),
(10, '', 63120, '2019-10-12 16:53:16', 'ravi@gmail.com', 'ORDER PLACED'),
(11, '', 46, '2019-10-12 18:43:10', 'var@gmail.com', ''),
(12, '', 1550, '2019-10-12 19:23:20', 'var@gmail.com', 'ORDER PLACED'),
(16, '', 224, '2019-10-27 12:12:37', 'naveen@gmail.com', 'Order placed'),
(19, '', 224, '2019-10-27 18:04:46', 'naveen@gmail.com', 'Order placed'),
(23, '', 896, '2019-10-27 18:28:53', 'sha@g.c', 'Order placed'),
(28, '', 1776, '2019-10-29 15:39:06', 'naveen@gmail.com', 'ORDER AWAITING'),
(29, '', 0, '2019-10-29 15:39:29', 'naveen@gmail.com', 'ORDER AWAITING'),
(31, '', 0, '2019-10-29 15:44:58', 'naveen@gmail.com', 'ORDER AWAITING'),
(33, '', 0, '2019-10-29 15:57:02', 'naveen@gmail.com', 'ORDER PLACED'),
(35, '', 0, '2019-10-29 15:58:08', 'naveen@gmail.com', 'ORDER PLACED'),
(36, '', 0, '2019-10-29 16:02:33', 'naveen@gmail.com', 'ORDER PLACED'),
(37, '', 0, '2019-10-29 16:03:02', 'naveen@gmail.com', 'ORDER PLACED'),
(38, '', 536, '2019-10-29 21:12:22', 'sha@g.c', 'ORDER PLACED'),
(39, '', 112, '2019-10-29 22:18:46', 'sha@g.c', 'ORDER PLACED'),
(40, '', 112, '2019-10-29 22:26:04', 'sha@g.c', 'ORDER PLACED'),
(53, '', 112, '2019-11-03 23:29:54', 'naveen@gmail.com', 'ORDER PLACED'),
(62, '', 334, '2019-11-04 19:49:33', 'naveen@gmail.com', 'ORDER PLACED'),
(64, '', 336, '2019-11-04 19:53:55', 'sha@g.c', 'ORDER PLACED'),
(74, '', 10, '2019-11-08 17:30:54', 'naveen@gmail.com', 'ORDER PLACED'),
(77, '', 10, '2019-11-12 10:57:05', 'naveen@gmail.com', 'ORDER PLACED'),
(79, '', 4500, '2019-11-12 11:02:50', 'pallu@gmail.com', 'ORDER AWAITING'),
(81, '', 222, '2019-11-17 11:05:56', 'naveen@gmail.com', 'ORDER PLACED');

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
(75, 37, 12, 0),
(76, 38, 7, 4),
(77, 39, 6, 1),
(78, 40, 6, 1),
(79, 41, 14, 1),
(80, 42, 8, 2),
(81, 43, 8, 2),
(82, 43, 14, 1),
(83, 44, 6, 22),
(84, 44, 7, 2),
(85, 44, 8, 2),
(86, 44, 12, 2),
(87, 44, 13, 2),
(88, 44, 14, 2),
(89, 45, 6, 0),
(90, 46, 12, 0),
(91, 47, 7, 0),
(92, 48, 6, 0),
(93, 49, 6, 0),
(94, 50, 6, 0),
(95, 50, 7, 0),
(96, 50, 8, 0),
(97, 50, 12, 0),
(98, 50, 13, 0),
(99, 50, 14, 0),
(100, 51, 6, 0),
(101, 52, 6, 0),
(102, 53, 6, 1),
(103, 54, 6, 3),
(104, 55, 6, 0),
(105, 55, 7, 0),
(106, 55, 8, 0),
(107, 55, 12, 0),
(108, 55, 13, 0),
(109, 55, 14, 0),
(110, 56, 6, 2),
(111, 57, 6, 4),
(112, 58, 6, 0),
(113, 59, 6, 3),
(114, 60, 6, 1),
(115, 60, 7, 1),
(116, 60, 8, 1),
(117, 60, 12, 1),
(118, 60, 13, 1),
(119, 60, 14, 1),
(120, 61, 6, 0),
(121, 62, 13, 1),
(122, 62, 14, 2),
(123, 63, 6, 2),
(124, 64, 6, 3),
(125, 65, 8, 0),
(126, 66, 8, 0),
(127, 67, 8, 2),
(128, 68, 12, 0),
(129, 69, 7, 5),
(130, 70, 26, 2),
(131, 70, 14, 2),
(132, 71, 23, 5),
(133, 71, 12, 5),
(134, 72, 29, 1),
(135, 72, 14, 2),
(136, 73, 27, 2),
(137, 73, 29, 2),
(138, 73, 19, 5),
(139, 73, 30, 2),
(140, 73, 23, 5),
(141, 73, 25, 2),
(142, 73, 26, 5),
(143, 73, 20, 2),
(144, 73, 31, 5),
(145, 73, 24, 5),
(146, 73, 28, 5),
(147, 73, 7, 5),
(148, 73, 8, 5),
(149, 73, 12, 5),
(150, 73, 13, 5),
(151, 73, 14, 5),
(152, 74, 27, 1),
(153, 75, 30, 2),
(154, 76, 25, 1),
(155, 76, 8, 1),
(156, 77, 27, 1),
(157, 78, 27, 1),
(158, 78, 29, 1),
(159, 78, 19, 1),
(160, 78, 30, 1),
(161, 78, 33, 1),
(162, 78, 23, 1),
(163, 78, 25, 1),
(164, 78, 26, 0),
(165, 78, 20, 0),
(166, 78, 31, 0),
(167, 78, 24, 0),
(168, 78, 28, 0),
(169, 78, 7, 0),
(170, 78, 8, 0),
(171, 78, 12, 0),
(172, 78, 13, 0),
(173, 78, 14, 0),
(174, 79, 30, 5),
(175, 80, 30, 2),
(176, 81, 33, 2);

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
('pallu', 'pallu@gmail.com', 'kundapur', '8888888999', 0),
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
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

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
