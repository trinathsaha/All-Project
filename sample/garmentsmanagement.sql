-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 08:40 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_roleid`, `Admin_username`, `Admin_password`) VALUES
(45, 1, 'trinath saha', '*F469EA6C1086BB');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brands id` int(15) NOT NULL,
  `Brands Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Brands Company` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Brands description` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand type`
--

CREATE TABLE `brand type` (
  `Product Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Product Model` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Product Description` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Product Image` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Product Price` int(10) NOT NULL
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
  `Sales_customer_id` int(25) NOT NULL,
  `Sale_id` int(20) NOT NULL,
  `Sale amount` int(10) NOT NULL,
  `Sale type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Sale Date` datetime(6) NOT NULL,
  `Sale description` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `User_id` int(15) NOT NULL,
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Mobilenumber` int(15) NOT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email_address` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`,`Admin_roleid`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brands id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`Per_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Role_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Sales_customer_id`,`Sale_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`Stock id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
