-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 09:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `password`, `created`, `modified`, `status`) VALUES
(1, 'Keenan', 'Irusan', 'keenanirusan@gmail.com', '451172d8d6989ae03556e1127b75dd9a', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'Myuri', 'Surjan', 'myurisurjan@gmail.com', '451172d8d6989ae03556e1127b75dd9a', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(43, 1, 21476.40, '2018-06-04 16:41:10', '2018-06-04 16:41:10', '1'),
(44, 1, 23169.30, '2018-06-04 16:51:55', '2018-06-04 16:51:55', '1'),
(45, 1, 18919.40, '2018-06-04 17:39:25', '2018-06-04 17:39:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(28, 43, 13, 1),
(29, 43, 5, 2),
(30, 43, 11, 3),
(31, 43, 15, 3),
(32, 44, 10, 1),
(33, 44, 12, 1),
(34, 44, 14, 2),
(35, 44, 15, 3),
(36, 45, 12, 2),
(37, 45, 14, 1),
(38, 45, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `Image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`, `status`, `Image`) VALUES
(1, 'Sandisk USB', '16Gb USB 2.0 ', 100.00, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P003.jpg'),
(2, 'Logitech Mouse', 'Wired USB Mouse Compatible with Windows 7, 8 and 10', 48.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P001.jpg'),
(3, 'Logitech G403 Mouse', 'Logitech Gaming Mouse G403 Prodigy - mouse - wireless', 2025.00, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P002.jpg'),
(4, 'Astrum Keyboard', 'Large standard wired keyboard for desktop PC, QWERTY layout\r\n', 119.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P004.jpg'),
(5, 'GoFreeTech Keyboard Mouse', 'Keyboard and mouse set\r\n', 179.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P005.jpg'),
(6, 'Astrum Combo', 'Astrum Gaming Keyboard and mouse set\r\n', 449.00, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P006.jpg'),
(7, 'Hp Deskjet 2130 Printer', 'Inkjet Printer', 599.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P007.jpg'),
(8, 'Lexmark MS317dn Printer', 'Laser Printer\r\n', 999.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P008.jpg'),
(9, 'Seagate Expansion Drive 1TB', '2.5\" Expansion Drive USB 2.0 1TB\r\n', 799.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P009.jpg'),
(10, 'Seagate Expansion Drive 2TB', '2.5\" Expansion Drive USB 2.0 2TB\r\n', 1199.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P010.jpg'),
(11, 'Seagate Expansion Drive 4TB', '2.5\" Expansion Drive USB 3.0 4TB\r\n', 2299.00, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P011.jpg'),
(12, 'Dell LED Monitor', 'Dell E1916HV 18.5\" LED Monitor\r\n', 949.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P012.jpg'),
(13, 'LG LED Monitor', 'LG 20M38A-B - LED monitor - 19.5\"\r\n', 1199.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P013.jpg'),
(14, 'Lenovo IdeaCentre 310 Desktop', 'Intel Apollo Lake J3355 Processor\r\n', 3999.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P014.jpg'),
(15, 'Acer Aspire AXC-704 Desktop', 'Intel® Celeron® processor N3050. 4GB DDR3L\r\n', 4339.90, '2018-06-03 00:00:00', '2018-06-03 00:00:00', '1', 'P015.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
