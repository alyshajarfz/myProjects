-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastehaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(2001, 'Lya', 'lya123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_name` varchar(100) NOT NULL,
  `cart_image` varchar(255) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `cart_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'MAIN MEALS'),
(2, 'DESSERT'),
(3, 'DRINK');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_fname` varchar(200) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_pass` varchar(150) NOT NULL,
  `cust_num` varchar(14) NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `cust_members` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_pass`, `cust_num`, `isAdmin`, `cust_members`) VALUES
(1030, 'Syida', 'Syudu', 'syida@gmail.com', 'syidasyudu', '0123546325', 0, 1),
(1111, 'lya', 'alvy', 'alvy@gmail.com', 'alvy123', '0128584725', 0, 1),
(1123, 'aina', 'abdul', 'ainaabdul@gmail.com', 'ainaabdul', '0123456789', 0, 1),
(1230, 'Aisar', 'Khairuddin', 'khai@gmail.com', 'khai123', '0184254446', 0, 1),
(1234, 'Akim', 'Ahmad', 'Akim@gmail.com', 'akim123', '0123526475', 0, 1),
(4001, 'Ahmad', 'Zainnudin', 'ahmadzai@gmail.com\r\n', 'zai123', '0175678901', 0, 1),
(4102, 'Aisyah', 'Rahman', 'sya111@gmail.com', 'sya123', '0123456789', 0, 1),
(4908, 'Alma\r\n', 'Maya', 'maya12@gmail.com', 'maya123', '0103112388', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(200) NOT NULL,
  `dish_desc` text NOT NULL,
  `dish_image` varchar(255) NOT NULL,
  `dish_price` decimal(10,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`dish_id`, `dish_name`, `dish_desc`, `dish_image`, `dish_price`, `category_id`, `uploaded_date`) VALUES
(1, 'White Rice', 'Soft & delicate texture', 'rice-5.png', 2.50, 1, '2025-02-05'),
(2, 'Chocolate Indulgence', 'Sweetness & richness', 'dessert-6.png', 12.50, 2, '2025-02-05'),
(3, 'Salted Egg Crab', 'Savory & salty richness', 'crab.png', 18.00, 1, '2025-02-05'),
(4, 'Mango Float', 'Creamy & tropical sweetness', 'mango.png', 8.00, 3, '2025-02-05'),
(5, 'Nasi Goreng Kampung', 'Savory spicy & aroma', 'rice-3.png', 8.50, 1, '2025-02-05'),
(6, 'Vanilla Velvet', 'Cool smooth & creamy', 'dessert-7.png', 5.00, 2, '2025-02-05'),
(7, 'Golden Spice Squid', 'Spicy & slightly sweet', 'sotong.png', 10.50, 1, '2025-02-05'),
(8, 'Watermelon Breeze', 'Light sweet & juicy', 'melon.png', 6.00, 3, '2025-02-05'),
(9, 'Shrimp Buttermilk', 'Creamy aromatic spices', 'shrimp.png', 13.00, 1, '2025-02-05'),
(10, 'Tiramisu Haven', 'Aromatic coffee bitterness', 'dessert-2.png', 14.50, 2, '2025-02-05'),
(11, 'Black Pepper Beef', 'Savory & pepper aromatic', 'daging.png', 13.50, 1, '2025-02-05'),
(12, 'ChocoCrave Shake', 'Sweet & velvety texture', 'coklat.png', 7.00, 3, '2025-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `my_id` int(10) NOT NULL,
  `my_name` varchar(100) NOT NULL,
  `my_phone` int(12) NOT NULL,
  `my_email` varchar(100) NOT NULL,
  `my_otype` varchar(50) NOT NULL,
  `my_total` decimal(10,2) NOT NULL,
  `my_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`my_id`, `my_name`, `my_phone`, `my_email`, `my_otype`, `my_total`, `my_price`) VALUES
(1, 'Alma Maya', 103112388, 'maya12@gmail.com', 'Take-Away', 0.00, 29.00),
(2, 'lya alvy', 128584725, 'alvy@gmail.com', 'Dine-In', 0.00, 38.00),
(3, 'lya alvy', 128584725, 'alvy@gmail.com', 'Dine-In', 0.00, 38.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `order_type`, `pay_status`, `order_status`, `order_date`) VALUES
(1, 4908, 'Take-Away', 1, 1, '2025-02-06'),
(2, 1111, 'Dine-In', 0, 0, '2025-02-06'),
(3, 1111, 'Dine-In', 0, 0, '2025-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `my_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
