-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 08:23 AM
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
-- Database: `grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(25, 'juice', '1715171432cat-4.jpg'),
(26, 'Dry Fruites', '1715171468cat-2.jpg'),
(27, 'Fresher', '1715171488cat-1.jpg'),
(28, 'Meat', '1715171504cat-5.jpg'),
(29, 'Vegetables', '1715171534cat-3.jpg'),
(32, 'FastFood', '1715215827pd-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(11) NOT NULL,
  `status` enum('active','inactive','','') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `mobile`, `address`, `image`, `status`, `created_at`) VALUES
(15, 'khizer hayat Sungla', 'khizarhayatsangla@gmail.com', '$2y$10$kaPvbjwHkC6xUJHEmzddBObRBUwT1gxUTFRdHkMeQZhJ9KUNIXx2O', '0302-0076724', 'bhwalpure', '', 'active', '2024-04-26 04:56:37'),
(16, 'Mohsin', 'abc@gmail.com', '$2y$10$izkJJfHCGRWVyRex00NryuMo3LBpr5GOghFBhRX67sqqmmd0k4lBu', '0302-0076724', 'bhwalpure', '', 'active', '2024-04-26 06:10:29'),
(17, 'Adnan', 'Ticer123@gmail.com', '$2y$10$ATMIMoHuiM.7ei1xrqMJ9umPr846PSD0gVRXqnxACXjaE4XZ5R1jC', '0302-0076724', 'Lodhran', '', 'active', '2024-04-28 02:09:06'),
(18, 'khizer hayat Sungla', 'faizrasool@gmail.com', '$2y$10$PStz0mIP9MnC6xJusVF6m.B/WTzM6YbSR4tiYrnOgjpTTDOzGnCR6', '0302-0076724', 'Lodhran', '', 'active', '2024-05-01 08:55:45'),
(19, 'Mohsin', 'kh@gmail.com', '$2y$10$ZmrnDQnbQAH6zHO63i/JxuaaVGG/EoGO.quxrEv8OkIwSKyWo2FnK', '7777-7777777', 'bhwalpure', '', 'active', '2024-05-10 05:14:12'),
(20, 'khizer hayat Sungla', 'thi@gmail.com', '$2y$10$blHNorVtcO/HKe29swkGK.8nF6eTMmBA2WXyQC0qjwos0jrLc9kvu', '0302-0076724', 'Lodhran', '', 'active', '2024-05-11 01:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(11) NOT NULL,
  `grand_total` varchar(11) NOT NULL,
  `status` enum('pending','processing','delivered','returned') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `status`, `created_at`) VALUES
(1, '1', '90', 'pending', '2024-05-14 06:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `orders_id` varchar(11) NOT NULL,
  `products_id` varchar(11) NOT NULL,
  `unit_price` varchar(11) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `orders_id`, `products_id`, `unit_price`, `quantity`, `total_price`) VALUES
(2, '1', '37', '120', '2', 240),
(3, '1', '27', '300', '8', 2400),
(4, '1', '32', '10', '5', 50),
(5, '1', '30', '30', '4', 120),
(6, '1', '26', '200', '12', 2400),
(7, '1', '33', '20', '3', 60),
(8, '1', '28', '120', '4', 480),
(9, '1', '34', '120', '3', 360),
(11, '1', '31', '123', '5', 615),
(12, '1', '29', '30', '3', 90);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit_price` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Available','Out of Store','','') NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `unit_price`, `category_id`, `quantity`, `image`, `status`, `description`, `created_at`) VALUES
(26, 'Juices', 200, 25, 3, '1715171845cat-4.jpg', 'Available', 'Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. ', '2024-05-08 12:37:25'),
(27, 'Dry Fruites', 300, 26, 20, '1715171930cat-2.jpg', 'Available', 'Dried fruit is fruit that has had almost all of the water content removed through drying methods. ', '2024-05-08 12:38:50'),
(28, 'Orange', 120, 27, 10, '1715172041cat-1.jpg', 'Available', 'An orange, also called sweet orange to distinguish it from the bitter orange (Citrus × aurantium), is the fruit of a tree in the family Rutaceae. ', '2024-05-08 12:40:41'),
(29, 'Onion', 30, 29, 20, '1715184705cat-3.jpg', 'Available', 'qwertyuiopsdfghjkl', '2024-05-08 16:11:45'),
(30, 'Cow Meat', 30, 28, 10, '1715184753cat-5.jpg', 'Available', 'qj', '2024-05-08 16:12:33'),
(31, 'DryFruites', 123, 26, 1, '1715184855cat-2.jpg', 'Available', 'wertyuit77ftgrdwaesrthyu', '2024-05-08 16:14:15'),
(32, 'Bangon', 10, 29, 10, '1715214945product-details-1.jpg', 'Available', 'it is a vegitables', '2024-05-09 00:35:45'),
(33, 'Mirch', 20, 29, 10, '1715215030product-details-2.jpg', 'Available', 'it is veg', '2024-05-09 00:37:10'),
(34, 'Mango', 120, 27, 20, '1715215108pd-4.jpg', 'Available', 'it is a Fresher', '2024-05-09 00:38:28'),
(37, 'FastFood', 120, 32, 20, '1715215887pd-5.jpg', 'Available', 'asdfg', '2024-05-09 00:51:27'),
(38, 'This', 20, 32, 10, '1715216031product-10.jpg', 'Available', 'qwert', '2024-05-09 00:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('admin','employe') NOT NULL DEFAULT 'admin',
  `mobile` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `role`, `mobile`, `address`, `description`, `image`) VALUES
(1, 'khizer hayat Sungla', 'kh@gmail.com', '123', '2024-05-09 06:31:30', 'admin', '03020076724', 'Lodhran', 'qwaesrdfthuio', '171523629020240405-03.png'),
(2, 'Mohsin', 'khizer@123', 'Khizer@123', '2024-05-09 10:21:56', 'admin', '03020076724', 'Lodhran', 'detrtertee4gytuikyut', '1715250116Verification Code between M Khizer Hayat and کاشی.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
