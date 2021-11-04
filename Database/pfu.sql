-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 02:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `role`) VALUES
(4, 'jamal', 'jamal', 2),
(5, 'kamal', 'kamal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `AdId` int(11) NOT NULL,
  `UserId` int(255) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `HouseType` varchar(20) NOT NULL,
  `Bedrooms` varchar(2) NOT NULL,
  `Floors` varchar(2) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `AdDescription` varchar(300) NOT NULL,
  `ImagePath` varchar(256) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`AdId`, `UserId`, `Title`, `Category`, `HouseType`, `Bedrooms`, `Floors`, `Price`, `AdDescription`, `ImagePath`, `PhoneNumber`, `Country`, `Province`, `City`) VALUES
(23, 7, '5 Marla plot', 'PropertyForSale', 'LandAndPlots', '1', '1', '700000', 'This is test detail', 'uploads/60cf4d2b7a7795.11229678.png', '03423232323', 'Pakistan', 'Khyber Pakhtunkhwa', 'Peshawar'),
(24, 8, '3 Room flat for Rent', 'PropertyForRent', 'PortionsAndFloors', '2', '1', '15000', 'Best Flaat', 'uploads/60ff22ee4c5881.57912088.png', '03343278475', 'Pakistan', 'Khyber Pakhtunkhwa', 'Peshawar'),
(25, 8, '1 Gerab Land for Sale', 'PropertyForSale', 'LandAndPlots', '1', '1', '3000000', 'Best Location', 'uploads/61005a810f1a69.27343498.jpg', '03451231232', 'Pakistan', 'Khyber Pakhtunkhwa', 'Peshawar'),
(30, 11, 'header1', 'PropertyForRent', 'Houses', '1', '1', '23', '12313czc', '', '123434', 'Pakistan', 'pakistan', 'peshawar'),
(31, 11, 'header1', 'PropertyForRent', 'Houses', '1', '1', '23', 'sajdka', 'uploads/6139aa5f2dcbf1.12423700.jpg', '1654716542165', 'Pakistan', 'pakistan', 'peshawar'),
(32, 11, 'header1', 'PropertyForSale', 'Houses', '1', '1', '560', 'kjfoiefj', 'uploads/6139bd3015d112.02315868.jpg', '2545231', 'Pakistan', 'pakistan', 'peshawar'),
(35, 10, 'sale', 'PropertyForSale', 'Houses', '1', '1', '123456', 'iuoqiw', 'uploads/6139db9a3a6154.03869944.jpg', '123456', 'United Arab Emi', 'UAE', 'UAE'),
(37, 10, 'rent', 'PropertyForRent', 'Houses', '1', '1', '2000', 'rent', 'uploads/613a3fc467e742.67010648.jpg', '1234567', 'Pakistan', 'pakistan', 'peshawar'),
(38, 10, '3 marla house for rent', 'PropertyForRent', 'Houses', '1', '1', '30000', 'peshawar hayatabad', 'uploads/614338b6997bb3.98384181.jpg', '1234565', 'Pakistan', 'pakistan', 'peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `usersname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `usersname`, `password`) VALUES
(1, 'asd', 'asd'),
(7, 'gullkhan', 'gullkhan'),
(6, 'test', 'test'),
(9, 'jone', '123'),
(20, 'gulraj', '12345678'),
(12, 'altaf', '12345678'),
(16, 'Demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `UserId`, `Name`, `Email`, `Subject`, `Message`, `Time`) VALUES
(1, 8, 'testkhan', 'test@gmail.com', 'test subject', 'This is test message', '2021-07-07 12:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `id` int(255) NOT NULL,
  `sigin_buyer` int(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `securitycode` varchar(255) NOT NULL,
  `postacode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`id`, `sigin_buyer`, `cardname`, `cardnumber`, `securitycode`, `postacode`, `country`) VALUES
(1, 1, 'Paypal', '897657895444', '43567', '25000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AdId` int(11) NOT NULL,
  `ReportText` varchar(256) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `buyer_id` int(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `securitycode` varchar(255) NOT NULL,
  `postacode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `buyer_id`, `property_name`, `cardname`, `cardnumber`, `securitycode`, `postacode`, `country`) VALUES
(8, 1, '25', 'iujuuu', '8654689009777', '54732', '25000', '1'),
(9, 9, '23', 'jone', '23243668458785', '3478', '25000', '1'),
(10, 12, '23', 'altaf', '12345678', '12345', '25000', '1'),
(11, 12, '23', 'altaf', '8237', '987284', 'Dhj', '1'),
(12, 16, '30', 'altaf', '68768687687686', '6677', '2500', '1'),
(13, 12, '37', 'hbl', '123456', '12345', '25000', '1'),
(14, 20, '38', 'hbl', '123456', '1234', '25000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `upload_img`
--

CREATE TABLE `upload_img` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `ImagePath` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `Username`, `Email`, `Password`, `ImagePath`) VALUES
(7, 'Abduallah', 'shah', 'Abds', 'abds@gmail.com', '123', 'uploads/default-profile-picture.jpg'),
(8, 'test', 'user', 'testuser', 'testuser@gmail.com', '123', 'uploads/default-profile-picture.jpg'),
(9, 'Gull', 'khan', 'gkhan', 'gullkhan@gmail.com', '123', 'uploads/default-profile-picture.jpg'),
(10, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/613a32307880e5.52316775.png'),
(11, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg'),
(12, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg'),
(13, 'wali', 'khan', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg'),
(14, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg'),
(15, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg'),
(16, 'Altaf', 'Hussain', 'Fawad', 'altafbangash123@gmail.com', '12345678', 'uploads/default-profile-picture.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`AdId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_img`
--
ALTER TABLE `upload_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `AdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ReportId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upload_img`
--
ALTER TABLE `upload_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
