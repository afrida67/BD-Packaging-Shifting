-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 01:19 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `Product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(2, 'Transportation'),
(3, 'Packing Materials'),
(4, 'Furniture Shifting'),
(11, 'Others'),
(15, 'Special Packeting'),
(16, 'Logistic support'),
(17, 'Others1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dateOrdered` varchar(100) NOT NULL,
  `dateDelivered` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `contact`, `address`, `email`, `item`, `amount`, `status`, `dateOrdered`, `dateDelivered`) VALUES
(11, 'Abid Ali', '235235', 'ilknl', 'hamim_65@yahoo.com', '(1) wer, (1) Product 101, ', '3700.5', 'delivered', '04/15/17 03:18:11 PM', '04/15/17 03:30:24 PM'),
(12, 'Nawsheen Promy', '223526', 'fhdfhdf', 'hamim_65@yahoo.com', '(1) 2 Ton Truck, (10) Cartoons, (1) Rope, (6) Tape, (4) Double Bed, ', '1000', 'unconfirmed', '04/15/17 04:37:02 PM', ''),
(13, 'Juthi Sarkar', '43634', 'klsdlf', 'afs@adf.vd', '(5) Electrician, (1) Tape, (1) Almirah, ', '1530', 'confirmed', '04/16/17 02:59:26 AM', '04/16/17 03:00:04 AM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Price` double NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `imgUrl`, `Product`, `Description`, `Price`, `Category`) VALUES
(83, 'al.jpg', 'Almirah', 'Will be taken care of', 1000, 'Furniture Shifting'),
(84, 'double_bed1.jpg', 'Double Bed', 'Will be taken care of', 500, 'Furniture Shifting'),
(85, 'single_bed1.jpg', 'Single Bed', 'Will be taken care of', 500, 'Furniture Shifting'),
(86, '3s.jpg', 'Three seat sofa', 'Will be taken care of', 1000, 'Furniture Shifting'),
(87, 'sofa1.jpg', 'Two seat sofa', 'Will be taken care of', 1000, 'Furniture Shifting'),
(88, 'costape.jpg', 'Tape', 'Need for packing', 30, 'Packing Materials'),
(89, 'rope.jpg', 'Rope', 'Need for packing', 100, 'Packing Materials'),
(90, 'carton.jpg', 'Cartoons', 'Need for packing', 50, 'Packing Materials'),
(92, '4 ton rental truck 001.jpg', '4 Ton Truck', 'Safety First', 20000, 'Transportation'),
(95, 'hino_vanbody_large1-977x548.dm.crop_19_19_977_548_JVpK.jpg', '5 Ton Truck', 'Safety First', 30000, 'Transportation'),
(96, 'van-7-tips-web.jpg', 'Van', 'Safety First', 20000, 'Transportation'),
(97, 'tractor-trailer-on-street.jpg', 'Cargo', 'Safety First', 70000, 'Transportation'),
(98, 'jharbati1.jpg', 'Glass Materials (50-100 lbs)', 'Safety First', 10000, 'Special Packeting'),
(99, 'glass-sheets2.jpg', 'Glass Materials (100-200 lbs)', 'Safety First', 20000, 'Special Packeting'),
(100, 'other1.jpg', 'Glass Materials (200-300 lbs)', 'Safety First', 30000, 'Special Packeting'),
(101, '165592000001.jpg', 'Steel Materials(50-100lbs)', 'Safety First', 10000, 'Special Packeting'),
(102, 'images.jpg', 'Steel Materials(100-200lbs)', 'Safety First', 20000, 'Special Packeting'),
(103, 'pg001_box_dimensions (1).png', 'Electronics and Gadgets(43cm X 45mc X 62cm )', 'Safety First', 50000, 'Special Packeting'),
(104, '884669597_451.jpg', 'Electronics and Gadgets(41cm X 31m X 45cm )', 'Safety First', 3000, 'Special Packeting'),
(105, 'download.jpg', 'Electrician', 'Safety First', 500, 'Logistic support'),
(106, 'depositphotos_6851983-stock-illustration-construction-worker-job-icon-pictogram.jpg', 'Labour', 'Safety First', 500, 'Logistic support'),
(107, '003.png', 'Cleaner', 'Safety First', 500, 'Logistic support'),
(108, 'download.png', 'Cook', 'Safety First', 500, 'Logistic support'),
(109, '27363074-Newborn-green-plant-Spring-symbol--Stock-Vector.jpg', 'Plant', 'Safety First', 50, 'Others'),
(110, 'CC0758.jpg', 'Pets', 'Safety First', 50, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'bobby'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
