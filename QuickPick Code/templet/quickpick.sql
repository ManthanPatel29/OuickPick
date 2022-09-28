-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 07:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickpick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `Admin_ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_master`
--

CREATE TABLE `buyer_master` (
  `Email_ID` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Telephone_No` bigint(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_master`
--

INSERT INTO `buyer_master` (`Email_ID`, `Name`, `Password`, `Telephone_No`, `Address`) VALUES
('king@gmail', 'manthan', '123', 95126481, '22,green forest'),
('patelmanthan2905@gmail.com', 'manthan', 'king2905', 9512764871, '22,green forest'),
('test123@gm', 'testuser', 'test123', 12345689, '22,green forest');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'home_cleaning'),
(2, 'fruits_veg'),
(3, 'baby_care'),
(4, 'beauty_hygiene'),
(5, 'oil_masala');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy_master`
--

CREATE TABLE `delivery_boy_master` (
  `delivery_boy_ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_list_master`
--

CREATE TABLE `order_list_master` (
  `P_ID` int(20) NOT NULL,
  `Seller_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `Order_ID` int(20) NOT NULL,
  `Seller_ID` varchar(20) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `P_ID` int(20) NOT NULL,
  `P_Name` varchar(30) NOT NULL,
  `Seller_ID` varchar(20) NOT NULL,
  `P_Detail` varchar(70) NOT NULL,
  `Price` int(30) NOT NULL,
  `img` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`P_ID`, `P_Name`, `Seller_ID`, `P_Detail`, `Price`, `img`, `category_id`) VALUES
(1, 'brush', 'seller@id', 'this is home cleaning product ', 250, 'images\\Photos\\img1.jpg', 1),
(2, 'mengo', 'seller@id', 'this is fruit', 50, 'images\\Photos\\img2.jpg', 2),
(3, 'baby_food', 'seller@id', 'this is home baby care product ', 350, 'images\\Photos\\img3.jpg', 3),
(4, 'makeup', 'seller@id', 'this is beauty product', 500, 'images\\Photos\\img4.jpg', 4),
(5, 'chat Masala', 'seller@id', 'this is oil and masala', 300, 'images\\Photos\\img5.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `seller_master`
--

CREATE TABLE `seller_master` (
  `Seller_ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Telephone_No` bigint(20) NOT NULL,
  `Shop_No` int(20) NOT NULL,
  `Shop_name` varchar(50) NOT NULL,
  `Near_by` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pin_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_master`
--

INSERT INTO `seller_master` (`Seller_ID`, `Name`, `Password`, `Telephone_No`, `Shop_No`, `Shop_name`, `Near_by`, `City`, `Pin_code`) VALUES
('seller@id', 'jayesh', 'jayesh123', 9867654321, 22, 'online grocery', 'vastral', 'Ahmadabad', 382418);

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `Order_ID` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `buyer_master`
--
ALTER TABLE `buyer_master`
  ADD PRIMARY KEY (`Email_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `delivery_boy_master`
--
ALTER TABLE `delivery_boy_master`
  ADD PRIMARY KEY (`delivery_boy_ID`);

--
-- Indexes for table `order_list_master`
--
ALTER TABLE `order_list_master`
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `seller_master`
--
ALTER TABLE `seller_master`
  ADD PRIMARY KEY (`Seller_ID`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD KEY `Order_ID` (`Order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `Order_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `P_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_list_master`
--
ALTER TABLE `order_list_master`
  ADD CONSTRAINT `order_list_master_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `product_master` (`P_ID`),
  ADD CONSTRAINT `order_list_master_ibfk_2` FOREIGN KEY (`Seller_ID`) REFERENCES `seller_master` (`Seller_ID`);

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_1` FOREIGN KEY (`Seller_ID`) REFERENCES `seller_master` (`Seller_ID`);

--
-- Constraints for table `product_master`
--
ALTER TABLE `product_master`
  ADD CONSTRAINT `product_master_ibfk_1` FOREIGN KEY (`Seller_ID`) REFERENCES `seller_master` (`Seller_ID`),
  ADD CONSTRAINT `product_master_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `status_master`
--
ALTER TABLE `status_master`
  ADD CONSTRAINT `status_master_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `order_master` (`Order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
