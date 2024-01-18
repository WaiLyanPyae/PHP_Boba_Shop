-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2021 at 07:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f37ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`) VALUES
(38, 'wailyan', '#b4-21 Sims Drive', '123456', 'wailyan.nw.4@gmail.com', '09090909'),
(39, 'Wai Lyan Pyae', '3 Haig Road', '430003', 'wailyan.nw.4@gmail.com', '87232845');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'wailyan', 'wailyan.nw.4@gmail.com', 'catering', 'DFSD');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_member`
--

CREATE TABLE `feedback_member` (
  `id` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `feedback_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `customer_ID`, `email`, `password`) VALUES
(18, 39, 'wailyan.nw.4@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `imgURL` varchar(80) NOT NULL,
  `type` varchar(10) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `imgURL`, `type`, `availability`) VALUES
(1, 'Brown Sugar Milk Tea', 'Rich in Sugar', 5, '/assets/menu/brown-sugar-boba.png', 'Milk Teas', 1),
(2, 'Milk Tea', 'Rich in Milk ', 3.5, '/assets/menu/milktea.png', 'Milk Teas', 1),
(3, 'Strawberry Fruit Tea', 'Good For Your Health', 6, '/assets/menu/stawgreentea.png', 'Refreshers', 1),
(4, 'Milk Green Tea', 'Feel the Freshness', 4, '/assets/menu/milkgreentea.png', 'Milk Teas', 1),
(5, 'Mango Smoothie', 'Feel the Freshness', 4.5, '/assets/menu/mangosmoothie.png', 'Smoothie', 1),
(6, 'Strawberry Smoothie', 'Feel the Freshness', 4.5, '/assets/menu/stawsmoothie.png', 'Smoothie', 1),
(7, 'Caramel Milk Tea', 'Rich in Caramel', 5, '/assets/menu/caramelmilktea.png', 'Milk Teas', 1),
(8, 'Thai Milk Tea', 'Enjoy the taste!', 3.5, '/assets/menu/thaimilktea.png', 'Milk Teas', 1),
(9, 'Strawberry Milk Tea', 'Enjoy the taste!', 3.5, '/assets/menu/stawmilktea.png', 'Milk Teas', 1),
(10, 'Mango Green Tea', 'Enjoy the taste!', 4.5, '/assets/menu/mangogreentea.png', 'Refreshers', 1),
(11, 'Taro Milk Tea', 'Enjoy the taste!', 3.5, '/assets/menu/taromilktea.png', 'Milk Teas', 1),
(12, 'Coconut Smoothie ', 'Enjoy the taste!', 4.5, '/assets/menu/coconutsmoothie.png', 'Smoothie', 1),
(13, 'Oreo Smoothie ', 'Enjoy the taste!', 4.5, '/assets/menu/oreosmoothie.png', 'Smoothie', 1),
(14, 'Coconut Milk Tea', 'Enjoy the taste!', 3.5, '/assets/menu/coconutmilktea.png\r\n', 'Milk Teas', 1),
(15, 'Passion Fruit Green Tea', 'Enjoy the taste!', 5.5, '/assets/menu/passiongreentea.png', 'Refreshers', 1),
(16, 'Peach Green Tea', 'Enjoy the taste!', 5.5, '/assets/menu/peachgreentea.png', 'Refreshers', 1),
(17, 'Boba Brown Sugar', 'Enjoy the taste!', 6.5, '/assets/menu/brown-sugar-boba.png', 'Milk Teas', 1),
(18, 'Honeydew Milk Tea', 'Enjoy the taste!', 4.5, '/assets/menu/honeydewmilktea.png', 'Milk Teas', 1),
(19, 'Matcha Milk Tea', 'Enjoy the taste!', 4.5, '/assets/menu/matchagreentea.png', 'Milk Teas', 1),
(20, 'Mango Milk Tea', 'Enjoy the taste!', 5, './assets/menu/mangomilktea.png', 'Milk Teas', 1),
(21, 'Honey Lemon Aloe', 'Enjoy the taste!', 5.5, './assets/menu/lemonhoneyaloe.png', 'Refreshers', 1),
(22, 'Grapefruit Green Tea', 'Enjoy the taste!', 5, './assets/menu/grapefruittea.png', 'Refreshers', 1),
(23, 'Lychee Green Tea', 'Enjoy the taste!', 4.5, './assets/menu/lychee.png', 'Refreshers', 1),
(24, 'Jasmine Green Tea', 'Enjoy the taste!', 5, './assets/menu/jasminegreentea.png', 'Refreshers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `transaction_ID` int(10) NOT NULL,
  `menu_ID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_ID`, `menu_ID`, `quantity`) VALUES
(32, 16, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `ship_postalCode` int(6) NOT NULL,
  `note` varchar(140) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_ID`, `date`, `ship_address`, `ship_postalCode`, `note`, `price`) VALUES
(16, 38, '2021-11-04', '#b4-21 Sims Drive', 123456, 'sdfsd', 8.815);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_member`
--
ALTER TABLE `feedback_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_ID` (`member_ID`),
  ADD KEY `feedback_ID` (`feedback_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_ID` (`customer_ID`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_ID` (`transaction_ID`),
  ADD KEY `menu_ID` (`menu_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_member`
--
ALTER TABLE `feedback_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`transaction_ID`) REFERENCES `transaction` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`menu_ID`) REFERENCES `menu` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
