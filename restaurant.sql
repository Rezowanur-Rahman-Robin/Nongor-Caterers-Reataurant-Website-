-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 06:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_phn` varchar(20) NOT NULL,
  `admin_image` varchar(300) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_phn`, `admin_image`, `admin_pass`) VALUES
(1, 'Rezowanur Rahman Robin', '01795371964', 'admin.png', '12345'),
(4, 'Forkan Testing', '01567483945', '132630807_838349083565083_7874666799776943306_n.jpg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `food_cat_id` int(10) NOT NULL,
  `food_cat_title` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`food_cat_id`, `food_cat_title`) VALUES
(1, 'Appetizers'),
(2, 'Salad'),
(6, 'Rice'),
(7, 'Noodles'),
(8, 'Fish'),
(9, 'Soup');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `item_id` int(20) NOT NULL,
  `item_title` text COLLATE utf32_unicode_ci NOT NULL,
  `item_menu` text COLLATE utf32_unicode_ci NOT NULL,
  `item_cat` text COLLATE utf32_unicode_ci NOT NULL,
  `item_price` float NOT NULL,
  `item_img` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `item_desc` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `item_gallary_type` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`item_id`, `item_title`, `item_menu`, `item_cat`, `item_price`, `item_img`, `item_desc`, `item_gallary_type`) VALUES
(1, 'Fish Cake', '2', '2', 430, 'img-about.jpg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Restaurant'),
(5, 'Fish Cake', '1', '7', 430, 'testsdf.jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', ''),
(6, 'Cake', '5', '1', 430, 'testsdf.jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Food'),
(7, 'Fish Cake', '2', '2', 430, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (6).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', ''),
(11, 'Fish', '2', '2', 430, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (5).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Food'),
(12, 'Biriyani', '5', '6', 350, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (8).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Buffet'),
(13, 'Best Food', '5', '7', 400, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (4).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Special'),
(14, 'Pasta', '1', '1', 100, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (5).jpeg', 'Your Admin stock images are ready. Download all free or royalty-free photos and vectors. Use them in commercial designs under lifetime, perpetual & worldwide .', ''),
(15, 'Good Item', '1', '1', 230, 'testsdf.jpeg', 'itjsdkfa sdfa dsfjads fkajf asdkfjasdkf adsfk asdfkas dfkads fkasd fkasd faskd fkasdjf asdf', ''),
(16, 'Noodles Item', '1', '2', 340, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (5).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Food'),
(17, 'Grill Item', '2', '2', 120, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (8).jpeg', 'itjsdkfa sdfa dsfjads fkajf asdkfjasdkf adsfk asdfkas dfkads fkasd fkasd faskd fkasdjf asdf', 'Food'),
(18, 'Prawn Fish', '1', '8', 400, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (8).jpeg', 'Your Admin stock images are ready. Download all free or royalty-free photos and vectors. Use them in commercial designs under lifetime, perpetual & worldwide .', 'Restaurant'),
(19, 'Chicken Fry', '2', '1', 300, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (6).jpeg', 'Your Admin stock images are ready. Download all free or royalty-free photos and vectors. Use them in commercial designs under lifetime, perpetual & worldwide .', 'Restaurant'),
(20, 'Biriyani', '1', '2', 350, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (26).jpeg', 'কাবসা সাদা, রোজ বোখারি সাদা, চিকেন আল ফাহাম, মাটন মেন্ডি, চিকেন শীষ তৌক, বয়েল এগ। (সর্বমোট ২ জনের জন্য- মুল্য 1090 টাকা)', 'Buffet'),
(21, 'Chocolate', '5', '1', 230, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (13).jpeg', 'কাবসা সাদা, রোজ বোখারি সাদা, চিকেন আল ফাহাম, মাটন মেন্ডি, চিকেন শীষ তৌক, বয়েল এগ। (সর্বমোট ২ জনের জন্য- মুল্য 1090 টাকা)', 'Buffet'),
(22, 'Strawberry IceCream', '2', '1', 130, 'WhatsApp Image 2021-03-14 at 9.20.41 PM.jpeg', 'কাবসা সাদা, রোজ বোখারি সাদা, চিকেন আল ফাহাম, মাটন মেন্ডি, চিকেন শীষ তৌক, বয়েল এগ। (সর্বমোট ২ জনের জন্য- মুল্য 1090 টাকা)', 'Special'),
(23, 'Dora Cake', '1', '1', 100, 'WhatsApp Image 2021-03-14 at 9.20.41 PM (21).jpeg', 'Chicken Wonton Noodles Soup.Chicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles SoupChicken Wonton Noodles Soup', 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_menu_id` int(10) NOT NULL,
  `food_menu_title` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_menu_id`, `food_menu_title`) VALUES
(1, 'Thai Cuisine\r\n'),
(2, 'Chinese Cuisine\r\n'),
(5, 'Continental Cuisine\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `gallary_id` int(10) NOT NULL,
  `gallary_title` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `gallary_desc` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `gallary_img` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `gallary_type` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_desc` varchar(1000) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_desc`) VALUES
(1, ' Home Delivery Facility\r\n'),
(7, 'Best Food Quality.'),
(8, 'Supportive Behaviour.'),
(9, 'Free Wifi Zone');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_title` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `slider_text` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `slider_img` varchar(1000) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_text`, `slider_img`) VALUES
(9, 'Testinng Slider', 'Testing short dExctsjdfa fasdf asd fasd fasd f sdaf asdf.asdf.asdfas dfasdf.asdf.asdfsad.', '47a635c80c67a7ecfd58b6e3bf4a61f8.jpg'),
(10, 'Best Food', 'Slider Short Description.', '30f53679dd482fdb225d4cc60b3ea4b4.jpg'),
(11, 'Slider 3', 'Testing short dExctsjdfa fasdf asd fasd fasd f sdaf asdf.asdf.asdfas dfasdf.asdf.asdfsad.', 'IMG_7625-1800x1200.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`food_cat_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_menu_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`gallary_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `food_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `gallary_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
