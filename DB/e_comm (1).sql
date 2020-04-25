-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 09:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_comm`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `alias`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', 1, '2020-04-22 06:51:47', '2020-04-22 06:51:47'),
(2, 'Samsung', 'samsung', 1, '2020-04-22 06:52:29', '2020-04-22 06:52:29'),
(3, 'MI', 'mi', 1, '2020-04-22 06:52:46', '2020-04-22 06:52:46'),
(4, 'TATA MOTO', 'tata-moto', 1, '2020-04-22 06:53:37', '2020-04-22 06:53:37'),
(5, 'Vivo', 'vivo', 1, '2020-04-22 06:54:04', '2020-04-22 06:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `alias`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Electronics', 'electronics', 1, '2020-04-22 06:35:39', '2020-04-22 06:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `cat_id_fk` int(11) NOT NULL,
  `s_cat_id_fk` int(11) NOT NULL,
  `product_type_id_fk` int(11) NOT NULL,
  `brand_id_fk` int(11) NOT NULL,
  `mrp_price` int(11) NOT NULL,
  `a_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `ena_date` datetime NOT NULL,
  `country_id` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `alias`, `cat_id_fk`, `s_cat_id_fk`, `product_type_id_fk`, `brand_id_fk`, `mrp_price`, `a_price`, `quantity`, `start_date`, `ena_date`, `country_id`, `discount`, `description`, `created_at`, `updated_at`) VALUES
(1, 'i11pro', 'i11pro', 2, 2, 7, 1, 150000, 99000, 560, '1970-01-01 00:00:00', '2020-06-05 00:00:00', 1, 5432, '<p style=\"padding-left: 30px;\">strtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotimestrtotime</p>', '2020-04-22 12:23:15', '2020-04-23 10:30:25'),
(2, 'charger', 'testing', 2, 3, 1, 2, 150, 100, 1000, '2020-03-30 00:00:00', '2020-05-06 00:00:00', 91, 50, '<p>charegercharegercharegercharegercharegerchareger</p>', '2020-04-23 06:41:57', '2020-04-23 06:41:57'),
(3, 'charger', 'testing', 2, 3, 1, 2, 150, 100, 1000, '2020-03-30 00:00:00', '2020-05-06 00:00:00', 91, 50, '<p>charegercharegercharegercharegercharegerchareger</p>', '2020-04-23 06:44:15', '2020-04-23 06:44:15'),
(4, 'charger', 'testing', 2, 3, 1, 2, 150, 100, 1000, '2020-03-30 00:00:00', '2020-05-06 00:00:00', 91, 50, '<p>charegercharegercharegercharegercharegerchareger</p>', '2020-04-23 06:44:53', '2020-04-23 06:44:53'),
(5, 'charger', 'testing', 2, 3, 1, 2, 150, 100, 1000, '2020-03-30 00:00:00', '2020-05-06 00:00:00', 91, 50, '<p>charegercharegercharegercharegercharegerchareger</p>', '2020-04-23 06:45:47', '2020-04-23 06:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `item_img`
--

CREATE TABLE `item_img` (
  `id` int(11) NOT NULL,
  `item_id_fk` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_img`
--

INSERT INTO `item_img` (`id`, `item_id_fk`, `title`, `path`) VALUES
(1, 0, 'community.pmg.png', 'public/item_img/LrfYpYoH1yvtEJOpAFt67t7pwxjapsgNLwVWZRKa.png'),
(6, 0, '3.png', 'public/item_img/D7vMXbWc3GzVD7jJaL1mI8LBrM7d6sgIsq5rtM11.png'),
(7, 0, '5.png', 'public/item_img/A6XO4KkI1slDB10G6y8mPhWRRPtorROM0h6CPh6B.png'),
(8, 0, '6.png', 'public/item_img/iFXloooy2JmD2rnThYTnHm8DvungikTM6MvGumlN.png'),
(9, 0, '7.png', 'public/item_img/GEfgEfqbgKSAEPZ1w1Nvj9ii48TC0PtpEhWyJ1FP.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `sub_cat_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `status`, `created_at`, `updated_at`, `sub_cat_id_fk`) VALUES
(1, 'Charger', 'charger', 1, '2020-04-22 06:43:42', '2020-04-22 06:43:42', 3),
(2, 'Earephone', 'earephone', 1, '2020-04-22 06:44:09', '2020-04-22 06:44:09', 3),
(3, 'Android', 'android', 1, '2020-04-22 06:44:48', '2020-04-22 06:44:48', 2),
(4, 'Smart Phone', 'smart-phone', 1, '2020-04-22 06:45:44', '2020-04-22 06:45:44', 2),
(5, 'Notebook', 'notebook', 1, '2020-04-22 06:46:10', '2020-04-22 06:46:10', 1),
(6, 'Gaming', 'gaming', 1, '2020-04-22 06:47:06', '2020-04-22 06:51:17', 1),
(7, 'ios', 'ios', 1, '2020-04-22 06:59:36', '2020-04-22 06:59:36', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `alias`, `status`, `created_at`, `updated_at`, `category_id_fk`) VALUES
(1, 'laptop', 'laptop', 1, '2020-04-22 06:36:25', '2020-04-22 06:36:25', 2),
(2, 'mobile', 'mobile', 1, '2020-04-22 06:36:43', '2020-04-22 06:36:43', 2),
(3, 'mobile accessories', 'mobile-accessories', 1, '2020-04-22 06:38:10', '2020-04-22 06:38:10', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_img`
--
ALTER TABLE `item_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_fk` (`sub_cat_id_fk`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_fk` (`category_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item_img`
--
ALTER TABLE `item_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id_fk`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
