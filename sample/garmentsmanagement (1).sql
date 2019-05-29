-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 08:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garmentsmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(20) NOT NULL,
  `Admin_roleid` int(20) NOT NULL,
  `Admin_username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_password` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brandname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `brandcompany` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `branddescription` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory id` int(20) NOT NULL,
  `Inventory num` int(10) NOT NULL,
  `Inventory items` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Inventory type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Inventory description` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `Per_id` int(20) NOT NULL,
  `Per_role_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Per_module` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Per_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productmodel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productdescription` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `productprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `productmodel`, `productdescription`, `productprice`) VALUES
(12, 'polo', 'polo', 'no one polo', 650),
(13, 'yellow', '4561', 'export quality', 520),
(14, 'yellow', '4561', 'export quality', 520),
(15, 'yellow', '4561', 'export quality', 520),
(19, 'yellow', '4561', 'export quality', 520),
(20, 'polo', '4561', 'polo tshirt', 650),
(21, 'yellow', '4561', 'export quality', 520),
(22, 't-shirt', '4562', 'soft quality product', 750),
(23, 't-shirt', '4563', 'high quality product', 850),
(24, 't-shirt', '4563', 'high quality product', 350);

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `imageid` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`imageid`, `image`, `name`) VALUES
(17, 'polo_tshirt.jpg', 'polo tshirt'),
(18, 'tshirt1.jpeg', 'export quality'),
(19, 'polo_tshirt1.jpg', 'soft quality product'),
(20, 'export_tshirt.jpg', 'high quality product'),
(21, 'tshirt2.jpeg', 'high quality product');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Role_id` int(20) NOT NULL,
  `Role_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Role description` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(10) NOT NULL,
  `Sales_customer_id` int(25) NOT NULL,
  `saleamount` int(10) NOT NULL,
  `saletype` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `saledate` datetime(6) NOT NULL,
  `saledescription` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `Sales_customer_id`, `saleamount`, `saletype`, `saledate`, `saledescription`) VALUES
(1, 0, 450, 'T-shirt', '2018-04-09 00:00:00.000000', 'best t-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `Stock id` int(15) NOT NULL,
  `Stock type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stock description` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mobilenumber` int(15) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emailaddress` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `mobilenumber`, `address`, `emailaddress`, `password`) VALUES
(3, 'trinathsaha', 1751867845, '428 North Ibrahimpur Dhaka 1206', 'trinathsaha2@gmail.com', 'deb4e9e9c5c68bfaf06774e14cfcb607'),
(16, 'ami', 1751867845, 'ibrahimpur', 'internationational@gmail.', 'fcea920f7412b5da7be0cf42b8c93759'),
(17, 'raju', 1611442174, 'ibrahimpur', 'raju@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'mohona', 1779613433, 'shewrapara', 'mohona@gmail.com', 'mohona'),
(19, 'mohona', 1779613433, 'shewrapara', 'mohona@gmail.com', '66a90a3ad966c61f15bf11cfd0173f71');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `imageid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
