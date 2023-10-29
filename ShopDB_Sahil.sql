-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2023 at 02:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShopDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctionItems`
--

CREATE TABLE `auctionItems` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bid` double NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `fileExtension` varchar(20) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `bidder` varchar(100) NOT NULL DEFAULT 'No one made a bid yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auctionItems`
--

INSERT INTO `auctionItems` (`ID`, `name`, `bid`, `description`, `fileExtension`, `startDate`, `endDate`, `bidder`) VALUES
(2, 'ivbdsilv', 226, 'bzvb ddb dabfdz fezbdfzvefbfzbe bfdb bfdz', 'jpeg', '2023-10-17', '2023-10-31', 'Sa'),
(4, 'vdsvsd', 12, 'fab b ezgfdz  fd zvfd b fd ', 'png', '2023-10-01', '2023-10-12', 'No one made a bid yet'),
(5, 'fg dz fdzgre', 21, 'pdf g greszv f ', 'png', '2023-11-07', '2023-11-16', 'No one made a bid yet'),
(7, 'tftyfj fluff', 6000, 'jvvvgv  tfjgcj  fh kh', 'jpeg', '2023-10-10', '2023-10-31', 'Sahil'),
(8, 'PSOSNF', 32, 'It is a dejnv janifo  finasinic  asfiu asi i  idciuhiud iciids bijb idb ibbifd bdbfkj dkfhglkha vo pi hlkdkzhjcfkhs kok zkvh kfxvhz bkv fkb zjvhf kjgdfha fdlkhkh dkajfirhwh kfzkvfkehfbdskzjhv kjfk hjx k hxhdvjk kjb fbdxbvk fdvhfc ixbfe', 'jpg', '2023-10-17', '2023-11-03', 'Nibir');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `name`, `price`) VALUES
(1, 'T-shirt', 10),
(2, 'Iphone', 1000),
(3, 'android', 500),
(4, 'Shirt', 40),
(5, 'pencil', 1),
(6, 'pen', 3),
(7, 'vaseline', 5),
(85, 'Jeans', 60),
(86, 'Sneakers', 80),
(87, 'Backpack', 30),
(88, 'Laptop', 1200),
(89, 'Headphones', 50),
(90, 'Watch', 70),
(91, 'Dress', 45),
(92, 'Socks', 5),
(93, 'Hat', 12),
(94, 'Gloves', 8),
(95, 'Umbrella', 15),
(96, 'Running Shoes', 70),
(97, 'Bicycle', 300),
(98, 'Sweater', 40),
(99, 'Sunglasses', 20),
(100, 'Jacket', 60),
(101, 'Scarf', 10),
(102, 'Belt', 15),
(103, 'Laptop Bag', 25),
(104, 'Tie', 18),
(105, 'Shorts', 20),
(106, 'Sandals', 25),
(107, 'Wristwatch', 55),
(108, 'Desk Chair', 80),
(109, 'Television', 300),
(110, 'Cookware Set', 70),
(111, 'Desk Lamp', 15),
(112, 'Running Shorts', 25),
(113, 'Smartphone Case', 10),
(114, 'Yoga Mat', 20),
(115, 'Hiking Boots', 60),
(116, 'Digital Camera', 150),
(117, 'Headset', 45),
(118, 'Coffee Maker', 40),
(119, 'Toaster', 20),
(120, 'Blender', 50),
(121, 'Hoodie', 30);

-- --------------------------------------------------------

--
-- Table structure for table `lottery`
--

CREATE TABLE `lottery` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lottery`
--

INSERT INTO `lottery` (`ID`, `name`, `startDate`, `endDate`) VALUES
(18, 'Lottery Fun', '2023-10-25', '2023-11-23'),
(20, 'FE dsD d', '2023-10-01', '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `lotteryTiers`
--

CREATE TABLE `lotteryTiers` (
  `lotteryID` int(11) NOT NULL,
  `tierNo` int(11) NOT NULL,
  `tierProbability` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lotteryTiers`
--

INSERT INTO `lotteryTiers` (`lotteryID`, `tierNo`, `tierProbability`) VALUES
(18, 1, 50),
(18, 2, 30),
(18, 3, 10),
(18, 4, 8),
(18, 5, 2),
(20, 1, 20),
(20, 2, 30),
(20, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tierPrizes`
--

CREATE TABLE `tierPrizes` (
  `tierNo` int(11) DEFAULT NULL,
  `itemID` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tierPrizes`
--

INSERT INTO `tierPrizes` (`tierNo`, `itemID`, `discount`) VALUES
(1, 3, 5),
(1, 87, 5),
(1, 102, 5),
(1, 97, 5),
(2, 3, 10),
(2, 3, 10),
(2, 108, 13),
(2, 93, 25),
(2, 88, 35),
(2, 3, 4),
(2, 96, 25),
(3, 86, 22),
(3, 92, 35),
(3, 101, 46),
(3, 118, 56),
(3, 120, 46),
(3, 105, 46),
(3, 104, 68),
(4, 104, 68),
(4, 96, 68),
(4, 88, 78),
(4, 96, 7),
(4, 105, 87),
(4, 5, 8),
(5, 101, 57),
(5, 93, 67),
(5, 109, 78),
(5, 5, 67),
(5, 85, 5),
(6, 102, 23),
(6, 101, 42),
(6, 117, 3),
(6, 85, 43),
(6, 85, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tiers`
--

CREATE TABLE `tiers` (
  `tierNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiers`
--

INSERT INTO `tiers` (`tierNo`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctionItems`
--
ALTER TABLE `auctionItems`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `lottery`
--
ALTER TABLE `lottery`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `lotteryTiers`
--
ALTER TABLE `lotteryTiers`
  ADD PRIMARY KEY (`lotteryID`,`tierNo`),
  ADD KEY `tierNo` (`tierNo`);

--
-- Indexes for table `tierPrizes`
--
ALTER TABLE `tierPrizes`
  ADD KEY `itemID` (`itemID`),
  ADD KEY `tierNo` (`tierNo`);

--
-- Indexes for table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`tierNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctionItems`
--
ALTER TABLE `auctionItems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `lottery`
--
ALTER TABLE `lottery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `tierNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lotteryTiers`
--
ALTER TABLE `lotteryTiers`
  ADD CONSTRAINT `lotterytiers_ibfk_1` FOREIGN KEY (`lotteryID`) REFERENCES `lottery` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `lotterytiers_ibfk_2` FOREIGN KEY (`tierNo`) REFERENCES `tiers` (`tierNo`) ON DELETE CASCADE;

--
-- Constraints for table `tierPrizes`
--
ALTER TABLE `tierPrizes`
  ADD CONSTRAINT `tierprizes_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `items` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `tierprizes_ibfk_2` FOREIGN KEY (`tierNo`) REFERENCES `tiers` (`tierNo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
