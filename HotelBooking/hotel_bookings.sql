-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 06:27 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_rooms`
--

CREATE TABLE IF NOT EXISTS `master_rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(100) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `room_count` int(11) NOT NULL,
  `room_image` varchar(200) NOT NULL,
  PRIMARY KEY (`room_id`)
) 
ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `master_rooms`
--
-- --------------------------------------------------------

INSERT INTO `master_rooms` (`room_id`, `city`, `hotel_name`, `contact_no`, `price`, `room_count`, `room_image`) VALUES
(1, 'Ooty', 'Breeze In', '9842290421', '1300', 2, '87-RH-12.jpg'),
(2, 'Ooty', 'Kings', '8870368393', '1500', 15, '87-RH-12.jpg'),
(3, 'Ooty', 'May Flower', '8989899898', '2000', 200, '87-RH-12.jpg'),
(4, 'Ooty', 'Le Meridian', '7878767676', '3000', 200, '87-RH-12.jpg'),
(5, 'Bangalore', 'Royal Palace', '7676787879', '2000', 3, '86-2.jpg');

--
-- Table structure for table `rooms_bookings`
--

CREATE TABLE IF NOT EXISTS `rooms_bookings` (
  `booking_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `room_count` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `rooms_bookings`
--

INSERT INTO `rooms_bookings` (`booking_id`, `name`, `mobile_no`, `city`, `hotel_name`, `from_date`, `to_date`, `room_count`) VALUES

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
