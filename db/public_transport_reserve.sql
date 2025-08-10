-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2023 at 10:37 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `public_transport_reserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `adminId` int NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`adminId`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cancelations`
--

DROP TABLE IF EXISTS `cancelations`;
CREATE TABLE IF NOT EXISTS `cancelations` (
  `cancelId` int NOT NULL AUTO_INCREMENT,
  `reserveId` int NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  PRIMARY KEY (`cancelId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cancelations`
--

INSERT INTO `cancelations` (`cancelId`, `reserveId`, `userEmail`, `reason`) VALUES
(3, 13, 'thilanka@gmail.com', 'i want to cancel my reservation');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `driverId` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `busNo` varchar(10) NOT NULL,
  PRIMARY KEY (`driverId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverId`, `firstName`, `lastName`, `email`, `nic`, `busNo`) VALUES
(8, 'Ashen', 'Karaliyadda', 'karaliyadda@gmail.co', '199745672398', 'DR-2341'),
(7, 'Thilanka', 'Wijesinghe', 'thilanka@gmail.com', '199645326754', 'CG-3478');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `memberId` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`memberId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberId`, `firstName`, `lastName`, `username`, `email`, `pass`) VALUES
(9, 'Hirusha', 'Sumanaweera', 'hirusha200', 'rashmika119@gmail.co', 'asdqwe '),
(19, 'Ashen', 'Karaliyadda', 'karaliyadd', 'karaliyadda@gmail.co', 'asdqwe'),
(18, 'Thilanka', 'Wijesinghe', 'thilanka12', 'thilanka@gmail.com', 'asdqwe'),
(13, 'Dhanuka', 'Navodya', 'dhanuka_20', 'dhanukan@gmail.com', 'asdqwe'),
(16, 'Ishani', 'Seuwandi', 'ishani112', 'ishaniseu@gmail.com', 'ishani123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentId` int NOT NULL AUTO_INCREMENT,
  `memberId` int NOT NULL,
  `reserveID` int NOT NULL,
  `email` varchar(20) NOT NULL,
  `addres` varchar(20) NOT NULL,
  `usercity` varchar(20) NOT NULL,
  `userstate` varchar(20) NOT NULL,
  `zip` int NOT NULL,
  `nameoncard` varchar(20) NOT NULL,
  `cardnum` int NOT NULL,
  `expmonth` varchar(10) NOT NULL,
  `expyear` int NOT NULL,
  `cvv` int NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`paymentId`),
  KEY `memberId` (`memberId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `memberId`, `reserveID`, `email`, `addres`, `usercity`, `userstate`, `zip`, `nameoncard`, `cardnum`, `expmonth`, `expyear`, `cvv`, `price`) VALUES
(4, 16, 14, 'ishaniseu@gmail.com', 'No 22/12 Mihindu Maw', 'Kurunegala', '', 20013, 'Ishani Seuwandi', 2147483647, 'February', 2027, 345, '1200'),
(5, 16, 0, 'ishaniseu@gmail.com', 'No 22/12 Mihindu Maw', 'Kurunegala', 'Sri Lanka', 20013, 'Ishani Seuwandi', 2147483647, 'Januuary', 2027, 345, '620');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reserveId` int NOT NULL AUTO_INCREMENT,
  `memberId` int DEFAULT NULL,
  `routeStart` varchar(10) NOT NULL,
  `routeEnd` varchar(10) NOT NULL,
  `distance` float NOT NULL,
  `reserveDay` date DEFAULT NULL,
  `jtype` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`reserveId`),
  KEY `memberId` (`memberId`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reserveId`, `memberId`, `routeStart`, `routeEnd`, `distance`, `reserveDay`, `jtype`, `price`) VALUES
(20, 16, 'Kurunegala', 'Dambulla', 50, '2023-06-15', 'Null', '250'),
(19, 16, 'Kurunegala', 'Dambulla', 50, '2023-06-15', 'Null', '250'),
(11, 17, 'Colombo', 'Kurunegala', 107, '2023-06-09', 'Train', '535'),
(18, 16, 'Kurunegala', 'Dambulla', 50, '2023-06-15', 'Null', '250'),
(21, 16, 'Kurunegala', 'Dambulla', 50, '2023-06-15', 'Null', '250'),
(22, 16, 'Kurunegala', 'Dambulla', 50, '2023-06-15', 'Null', '250');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
