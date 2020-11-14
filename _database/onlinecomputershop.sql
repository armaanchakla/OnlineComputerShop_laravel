-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 08:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecomputershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `productid` int(10) NOT NULL,
  `payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `subcatagory` varchar(30) DEFAULT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `cname`, `catagory`, `subcatagory`, `description`) VALUES
(1, 'Adata Harddrive', 4500, 'adata', 'storage', NULL, 'Excellent Cooling and Stability\r\nconsume less power\r\nHigh Durability\r\nMore Accessible Overclocking'),
(2, '256 MHz Desktop R0M', 4500, 'adata', 'storage', NULL, 'Unique heatsink design\r\n    Operating voltage: 1.2V\r\n    lifetime Warranty Limited\r\n\r\n'),
(3, 'Dell portable hard disk', 15000, 'dell', 'storage', 'portable storage', '256-Bit AES Hardware Encryption\r\n2TB Storage Capacity\r\nUSB 3.0 Type-A & Type-C\r\nWoven Fabric Exterio'),
(4, 'Sandisk pendrive', 1500, 'San Disk', 'storage', 'portable storage', ' Available capacity: 32GB\r\n    High Speed USB 3.1 Compatible\r\n    Reading speed: Above 85Mbps\r\n\r\n'),
(5, 'PC Casing', 3800, 'Golden Field', 'casing', NULL, 'ATX Gaming Case\r\nFull Window Side Panel\r\nStandard PSU\r\nBlue LED Fan'),
(6, '240 GB ssd', 5000, 'DELL', 'storage', 'parmanent storage', '256-Bit AES Hardware Encryption\r\n2TB Storage Capacity\r\nUSB 3.0 Type-A & Type-C\r\nWoven Fabric Exterio'),
(7, 'Ulky', 1200, 'Desktop Casing', 'casing', NULL, 'I have recently added multiple Linux/Unix Script Monitors from the available default '),
(8, 'Kingston HyperX FURY', 2000, 'Fury Hyder', 'ram', NULL, 'You’ve got your favorite game open and Spotify playing in the background. '),
(9, 'LCD', 23000, 'apple', 'monitor', NULL, 'Also unlike televisions, monitors typically sit atop a desk rather than being mounted on a wall.'),
(10, 'CRT', 23000, 'samsung', 'monitor', NULL, 'The names sRGB or AdobeRGB are shorthand notations. '),
(11, 'BTR 690', 2400, 'Billboard', 'ram', NULL, 'Also unlike televisions, monitors typically sit atop a desk rather than being mounted on a wall.'),
(12, 'Transcend Export', 2600, 'transcend', 'storage', 'parmanent storage', 'I have recently added multiple Linux/Unix Script Monitors from the available default '),
(13, '960 Nvidia', 24000, 'Nvidia', 'graphics', NULL, 'I have recently added multiple Linux/Unix Script Monitors from the available default '),
(14, 'AMD Radeon', 20000, 'Radeon', 'graphics', NULL, 'After you get a DisplayDevice.DeviceName like //./DisplayX from EnumDisplayDevices ,');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `comment`, `productid`) VALUES
(2, 'Foysal', 'bad', 1),
(3, 'customer', 'good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(11, 'admin', 'admin', 1),
(12, 'armaan', 'armaan', 2),
(14, 'customer', '1234', 2),
(15, 'admin2', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
