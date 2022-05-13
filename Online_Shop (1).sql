-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 01:55 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Online_Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `CateID` int(7) NOT NULL,
  `CateName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CateID`, `CateName`) VALUES
(1, 'Game Console'),
(2, 'SmartPhone'),
(3, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Phonenumber` int(10) NOT NULL,
  `Passw0rd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustID`, `FirstName`, `LastName`, `Phonenumber`, `Passw0rd`) VALUES
(1, 'Tony', 'Shi', 778683000, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `OrderTable`
--

CREATE TABLE `OrderTable` (
  `OrderID` int(7) NOT NULL,
  `OrderContent` varchar(300) NOT NULL,
  `CustID` int(7) NOT NULL,
  `TotalPrice` int(6) NOT NULL,
  `OrderDate` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PostCode` varchar(7) NOT NULL,
  `City` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OrderTable`
--

INSERT INTO `OrderTable` (`OrderID`, `OrderContent`, `CustID`, `TotalPrice`, `OrderDate`, `Address`, `PostCode`, `City`) VALUES
(52, 'This order contents: 1 of iphoneX 1 of XBOX ', 1, 1849, '2019/11/23', '11071 160Ast', 'V3T1A8', 'Surrey'),
(53, 'This order contents: 1 of XBOX 1 of Samsung s10 ', 1, 1098, '2019/11/23', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(54, 'This order contents: 4 of PS4 ', 1, 1596, '2019/11/23', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(55, 'This order contents: 1 of PS4 ', 9, 399, '2019/11/24', '111st 180ave', 'V3Y9J3', 'Surrey'),
(56, 'This order contents: 1 of PS4 ', 9, 399, '2019/11/24', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(57, 'This order contents: 1 of PS4 ', 9, 399, '2019/11/24', '111st 180ave', 'V3Y9J3', 'Surrey'),
(58, 'This order contents: 1 of PS4 ', 9, 399, '2019/11/24', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(59, 'This order contents: 1 of PS4 ', 9, 399, '2019/11/24', '1133 HORNBY ST 1202', 'V6Z1W1', 'Vancouver'),
(60, 'This order contents: 1 of ASUS Laptop ', 1, 1099, '2019/11/26', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(61, 'This order contents: 1 of iphoneX ', 13, 1350, '2019/11/27', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(62, 'This order contents: 1 of iphoneX ', 13, 1350, '2019/11/27', '1', 'V3T0A8', 'sURREY'),
(63, 'This order contents: 1 of iphoneX ', 13, 1350, '2019/11/27', '111st 180ave', 'V3Y9J3', 'Surrey'),
(64, 'This order contents: 1 of PS4 ', 13, 399, '2019/11/27', '13618 100ave  810unit', 'V3T0A8', 'Surrey'),
(65, 'This order contents: 1 of PS4 ', 13, 399, '2019/11/27', '1133 HORNBY ST 1202', 'V6Z1W1', 'Vancouver'),
(68, 'This order contents: 1 of Samsung s10 ', 13, 599, '2019/11/28', '13618 100ave  810unit', 'V3T0A8', 'Surrey');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `PaymentID` int(7) NOT NULL,
  `CustID` int(7) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `CardNumber` int(20) NOT NULL,
  `CVV` int(3) NOT NULL,
  `ExpireDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ProductID` int(7) NOT NULL,
  `ProuctName` varchar(20) NOT NULL,
  `Price` int(6) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `ImageID` char(20) NOT NULL,
  `Brand` varchar(10) NOT NULL,
  `CategoryID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ProductID`, `ProuctName`, `Price`, `Quantity`, `ImageID`, `Brand`, `CategoryID`) VALUES
(1, 'PS4', 399, 20, 'PS4.jpg', 'Sony', 1),
(2, 'XBOX', 499, 10, 'XBOX.jpg', 'Microsoft', 1),
(3, 'Switch', 450, 10, 'Switch.jpg', 'Nintendo', 1),
(4, 'iphoneX', 1350, 12, 'iphone.jpg', 'Apple', 2),
(5, 'Samsung s10', 599, 10, 'Samsung.jpg', 'Samsung', 2),
(6, 'ASUS Laptop', 1099, 4, 'ASUS.JPG', 'ASUS', 3),
(7, 'Msi Gaming Laptop', 1299, 5, 'Msi.JPG', 'Msi', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustID`);

--
-- Indexes for table `OrderTable`
--
ALTER TABLE `OrderTable`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `OrderTable`
--
ALTER TABLE `OrderTable`
  MODIFY `OrderID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `PaymentID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
