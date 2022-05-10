-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshirt_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `AdminName` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `AdminEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `AdminName`, `Password`, `AdminEmail`) VALUES
(1, 'Krishna', 'Adhia', 'krishna', '12Krishna@#', 'krishnaadhia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `UserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `T_ShirtImg` varchar(255) NOT NULL,
  `T_ShirtName` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `SubTotal` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `TotalProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`UserID`, `ProductID`, `T_ShirtImg`, `T_ShirtName`, `Price`, `Quantity`, `SubTotal`, `Total`, `TotalProduct`) VALUES
(14, 54, '1581440298_p6.png', 'Hindi Quote', 400, 2, 0, 0, 76);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `ProductComment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ProductID`, `UserID`, `UserName`, `ProductComment`) VALUES
(47, 15, 'Dhruvi', 'Dhruvi'),
(47, 14, 'Krishna', 'krishna'),
(47, 15, 'Dhruvi', 'awt'),
(47, 15, 'Dhruvi', 'helllo');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserEmail` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`UserID`, `UserName`, `UserEmail`, `Subject`, `Message`) VALUES
(15, 'Krishna Adhia', 'krishnaadhia@gmail.com', 'Product has not been reached', 'The product I purchased is not delivered to me, So please just see to it.'),
(14, 'Krishna Adhia', 'krishnaadhia@gmail.com', 'Product has not been reached', 'The product which I purchased has not been delivered to me. So please see to it. Order id is: #124578');

-- --------------------------------------------------------

--
-- Table structure for table `designlab`
--

CREATE TABLE `designlab` (
  `Tshirt_ID` int(11) NOT NULL,
  `Tshirt_Name` varchar(255) NOT NULL,
  `Tshirt_Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designlab`
--

INSERT INTO `designlab` (`Tshirt_ID`, `Tshirt_Name`, `Tshirt_Img`) VALUES
(1, 'WhiteMale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\whitemale.jpg'),
(2, 'WhilteFemale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\whitefemale.jpg'),
(3, 'BlackMale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\blackmale.jpg'),
(4, 'BlackFemale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\blackfemale.jpg'),
(5, 'RedMale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\redmale.jpg'),
(6, 'RedFemale', 'C:\\xampp\\htdocs\\localhost\\t-shirtLab\\client\\img\\redfemale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PaymentMode` varchar(255) NOT NULL,
  `SubTotal` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `DeliveryAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `PaymentMode`, `SubTotal`, `Total`, `DeliveryAddress`) VALUES
(1, 14, 'COD', 400, 450, 'Rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Image`, `Gender`, `Price`, `Description`) VALUES
(47, '1581320355_$i.png', 'Male', 60, 'Text'),
(48, '1581406906_p1.png', 'Male', 200, 'KING'),
(49, '1581406940_p2.png', 'Female', 250, 'Fashion '),
(51, '1581407031_p3.png', 'Female', 250, 'GirlPower'),
(52, '1581407138_p4.png', 'Male', 150, 'PUBG Player'),
(53, '1581440264_p5.png', 'Male', 150, 'E404'),
(54, '1581440298_p6.png', 'Male', 200, 'Hindi Quote'),
(55, '1581440329_p7.png', 'Female', 200, 'YesYouCan'),
(56, '1581440353_p8.png', 'Female', 250, 'Smile'),
(57, '1581440781_p9.png', 'Male', 210, '#Life'),
(59, '1581440910_p11.png', 'Male', 220, 'Make It Happen'),
(62, '1589997171_blackfemale.jpg', 'Female', 200, 'Female Black Tshirt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(5) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`) VALUES
(14, 'krishna', '12Krishna@#', 'Krishna', 'Adhia', 'krishna@gmail.com'),
(15, 'Dhruvi', '12Dhruvi@#', 'Dhruvi', 'Lathigara', 'dhruvi@gmail.com'),
(17, 'Kinjal', '12Kinjal@#', 'Kinjal', 'Chandarana', 'kinjal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `TotalProducts` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProductID` varchar(11) NOT NULL,
  `ProductImg` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`TotalProducts`, `UserID`, `ProductID`, `ProductImg`, `ProductName`, `ProductPrice`) VALUES
(1, 15, '57', '1581440781_p9.png', '#Life', 210),
(2, 15, '54', '1581440298_p6.png', 'Hindi Quote', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`TotalProduct`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD KEY `Foreign Key` (`UserID`);

--
-- Indexes for table `designlab`
--
ALTER TABLE `designlab`
  ADD PRIMARY KEY (`Tshirt_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`TotalProducts`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `TotalProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `designlab`
--
ALTER TABLE `designlab`
  MODIFY `Tshirt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `TotalProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
