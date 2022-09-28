-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 05:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`Admin_ID`, `Name`, `Password`) VALUES
('admintest@gmail.com', 'Admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_master`
--

CREATE TABLE `buyer_master` (
  `Email_ID` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Telephone_No` bigint(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_master`
--

INSERT INTO `buyer_master` (`Email_ID`, `Name`, `Password`, `Telephone_No`, `Address`) VALUES
('hellojayesh@gmail.com', 'jayesh', '12345', 2255444669, 'maninagar'),
('jayeshvaghela2000@gmail.com', 'Jayesh Vaghela', 'Jayesh2000', 8141465412, 'Maninagar'),
('joshi2000dhairya@gmail.com', 'dhairya', '552255', 123456789000, 'gpg'),
('king@gmail', 'manthan', '123', 9512764871, '22,green forest'),
('patelmanthan2905@gmail.com', 'Manthan Patel', '123', 951276481, '22,green forest ,B/H suryam elegance ,near Vastral,382415 '),
('patelmanthan8910@gmail.com', 'Manthan', '2905', 9512764871, 'Ahmadabad'),
('test123@gm', 'testuser', 'test123', 12345689, '22,green forest');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(50) NOT NULL,
  `catogory_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `catogory_name`) VALUES
(1, 'Home_Cleaning'),
(2, 'Fruits&vegetables'),
(3, 'Baby Care'),
(4, 'Beauty&Hygiene'),
(5, 'Food grains,Oil&Masala');

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
  `order_list_id` int(100) NOT NULL,
  `P_ID` int(100) NOT NULL,
  `Seller_ID` varchar(20) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `Total` int(100) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list_master`
--

INSERT INTO `order_list_master` (`order_list_id`, `P_ID`, `Seller_ID`, `Email_ID`, `Quantity`, `delivery`, `date`, `time`, `Total`, `Active`) VALUES
(1, 14, 'mukund@gm', 'patelmanthan8910@gmail.com', 1, 'home delivery', '2019-04-14', 'Every month', 123, 0),
(2, 11, 'mukund@gm', 'patelmanthan8910@gmail.com', 2, 'home delivery', '2019-04-15', 'Every week', 718, 0),
(3, 11, 'mukund@gm', 'patelmanthan8910@gmail.com', 5, 'home delivery', '2019-04-15', 'Every month', 1795, 0),
(4, 15, 'mukund@gm', 'patelmanthan8910@gmail.com', 5, 'Pickup from shop', '2019-04-15', 'Alternet day', 750, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `Order_ID` int(20) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `P_ID` int(100) NOT NULL,
  `Seller_ID` varchar(20) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Total` int(100) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`Order_ID`, `Quantity`, `Email_ID`, `P_ID`, `Seller_ID`, `delivery`, `date`, `Total`, `Active`) VALUES
(1, 5, 'patelmanthan8910@gmail.com', 13, 'mukund@gm', 'Pickup from shop', '2019-04-14', 750, 0),
(2, 5, 'patelmanthan8910@gmail.com', 7, 'mukund@gm', 'Pickup from shop', '2019-04-15', 1000, 0),
(3, 5, 'patelmanthan8910@gmail.com', 9, 'mukund@gm', 'Pickup from shop', '2019-04-15', 1000, 0),
(4, 11, 'patelmanthan8910@gmail.com', 14, 'mukund@gm', 'home delivery', '2019-04-15', 1353, 0),
(5, 5, 'patelmanthan8910@gmail.com', 6, 'manthanpatel@gm', 'home delivery', '2019-04-15', 750, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `P_ID` int(100) NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `Seller_ID` varchar(100) NOT NULL,
  `P_Detail` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `img` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL,
  `remove` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`P_ID`, `P_Name`, `Seller_ID`, `P_Detail`, `Price`, `img`, `category_id`, `remove`) VALUES
(1, 'Mango', 'manthanpatel@gm', 'This is very Tasty Mengo.\r\n', 230, 'images/Photos/mengo.jpg', 2, 0),
(2, 'Apple', 'mukund@gm', 'This is Pure Kashmiri Apple.\r\nAnd very Tasty', 60, 'images/Photos/apple.jpg', 2, 1),
(3, 'Banana', 'mukund@gm', 'This is very testy banana from kerela ', 40, 'images/Photos/banana.png', 2, 1),
(4, 'Strawberry', 'manthanpatel@gm', 'Very Beutiful and Tasty', 200, 'images/Photos/strawberry.jpg', 2, 0),
(6, 'Baby Powder', 'manthanpatel@gm', 'this is Jonson and Jonson baby powder ', 150, 'images/Photos/baby powder.png', 3, 0),
(7, 'Baby Lotion', 'mukund@gm', 'this is Jonson and Jonson baby powder ', 200, 'images/Photos/baby lotion.jpg', 3, 0),
(9, 'cherries', 'mukund@gm', 'this is cherries  	  ', 200, 'images/Photos/cherries.jpg', 2, 0),
(11, 'baby shampu', 'mukund@gm', 'this is baby shampu			  ', 359, 'images/Photos/baby shampu.jpeg\"', 3, 0),
(12, 'Black Grapes', 'mukund@gm', 'This is Black grapes 			  ', 100, 'images/Photos/black grapes.jpg', 2, 0),
(13, 'cleaner', 'mukund@gm', 'This is deep cleaner for floor.   ', 150, 'images/Photos/cleaner.jpeg', 1, 0),
(14, 'FACE WASH', 'mukund@gm', '	IWR WLK  RW;IK  LKWE WOIT \r\nIGW WG W\r\n WEEOG WE\r\n WEGLw g		  ', 123, 'images/Photos/harbal facewash.jpeg', 4, 0),
(15, 'Lotus Facewash', 'mukund@gm', 'This is original lotus face wash for beauty  	  ', 150, 'images/Photos/lotas facepack.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller_master`
--

CREATE TABLE `seller_master` (
  `Seller_ID` varchar(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Telephone_No` bigint(20) NOT NULL,
  `Shop_No` int(20) NOT NULL,
  `Shop_name` varchar(50) NOT NULL,
  `Near_by` varchar(50) NOT NULL,
  `Pin_code` int(20) NOT NULL,
  `remove` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_master`
--

INSERT INTO `seller_master` (`Seller_ID`, `Name`, `Password`, `Telephone_No`, `Shop_No`, `Shop_name`, `Near_by`, `Pin_code`, `remove`) VALUES
('jayesh556@gmail.com', 'Jayesh', 'jayesh123', 9725467325, 67, 'jayesh mart', 'sankalp', 382412, 0),
('manthan123@gmail.com', 'manthan', 'manthan12345', 951276481, 33, 'Fresh Food', 'big bazar', 336657, 0),
('manthanpatel@gm', 'Manthan', 'manthan123', 9925552629, 22, 'manthuproduct', 'ohmarcade', 382415, 0),
('mukund@gm', 'Balmukund', '123', 3326655448, 25, 'mukund market', 'vijay sales', 382416, 0),
('seller@id', 'jayesh', 'jayesh123', 9867654321, 22, 'online grocery', 'vastral', 382418, 0),
('vaghelajayesh16@gmai', 'vaghela', 'Vaghela123', 9974634448, 5, 'Stock Store', 'Bhairavnath', 3800028, 0);

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
  ADD PRIMARY KEY (`order_list_id`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`),
  ADD KEY `Email_ID` (`Email_ID`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `Seller_ID` (`Seller_ID`),
  ADD KEY `Email_ID` (`Email_ID`);

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
  MODIFY `category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_list_master`
--
ALTER TABLE `order_list_master`
  MODIFY `order_list_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `Order_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `P_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_list_master`
--
ALTER TABLE `order_list_master`
  ADD CONSTRAINT `order_list_master_ibfk_1` FOREIGN KEY (`Email_ID`) REFERENCES `buyer_master` (`Email_ID`),
  ADD CONSTRAINT `order_list_master_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product_master` (`P_ID`),
  ADD CONSTRAINT `order_list_master_ibfk_3` FOREIGN KEY (`Seller_ID`) REFERENCES `seller_master` (`Seller_ID`),
  ADD CONSTRAINT `order_list_master_ibfk_4` FOREIGN KEY (`Email_ID`) REFERENCES `buyer_master` (`Email_ID`);

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `product_master` (`P_ID`),
  ADD CONSTRAINT `order_master_ibfk_3` FOREIGN KEY (`Seller_ID`) REFERENCES `seller_master` (`Seller_ID`),
  ADD CONSTRAINT `order_master_ibfk_4` FOREIGN KEY (`Email_ID`) REFERENCES `buyer_master` (`Email_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
