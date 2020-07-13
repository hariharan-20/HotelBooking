-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2018 at 02:22 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.31-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_rooms`
--

CREATE TABLE `master_rooms` (
  `room_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `room_count` int(11) NOT NULL,
  `room_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_rooms`
--

INSERT INTO `master_rooms` (`room_id`, `city`, `hotel_name`, `contact_no`, `price`, `room_count`, `room_image`) VALUES
(1, 'Ooty', 'Breeze In', '9842290421', '1300', 2, '87-RH-12.jpg'),
(2, 'Ooty', 'Kings', '8870368393', '1500', 15, '87-RH-12.jpg'),
(3, 'Ooty', 'May Flower', '8989899898', '2000', 200, '87-RH-12.jpg'),
(4, 'Ooty', 'Le Meridian', '7878767675', '4000', 20, '17-70-jqg_1478733642.jpg'),
(5, 'Bangalore', 'Royal Palace', '7676787879', '2000', 3, '86-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_bookings`
--

CREATE TABLE `rooms_bookings` (
  `booking_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `room_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_bookings`
--

INSERT INTO `rooms_bookings` (`booking_id`, `name`, `mobile_no`, `city`, `hotel_name`, `from_date`, `to_date`, `room_count`) VALUES
(1, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(2, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(3, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(4, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(5, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(6, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(7, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-28', '2018-09-29', 2),
(8, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-26', '2018-09-29', 2),
(9, 'manoj', '8870368393', 'Ooty', 'Kings', '2018-09-27', '2018-09-27', 2),
(10, 'hari haran', '7899877890', 'Ooty', 'Kings', '2018-09-27', '2018-09-27', 5),
(11, 'Jacob', '7865434510', 'Ooty', 'Kings', '2018-09-27', '2018-09-27', 3),
(12, 'hari haran', '8989878908', 'Ooty', 'Breeze In', '2018-09-29', '2018-09-30', 2),
(13, 'manoj', '8787890890', 'Bangalore', 'Royal Palace', '2018-09-29', '2018-09-29', 2),
(14, 'manoj', '8787909809', 'Bangalore', 'Royal Palace', '2018-09-29', '2018-09-29', 1),
(15, 'kannan', '7234567890', 'Bangalore', 'Royal Palace', '2018-09-30', '2018-10-02', 3),
(16, 'Kannan', '9486930398', 'Bangalore', 'Royal Palace', '2018-10-03', '2018-10-04', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_rooms`
--
ALTER TABLE `master_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `rooms_bookings`
--
ALTER TABLE `rooms_bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_rooms`
--
ALTER TABLE `master_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rooms_bookings`
--
ALTER TABLE `rooms_bookings`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
