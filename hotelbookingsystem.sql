-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 12:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_check_in_date` date DEFAULT NULL,
  `b_check_out_date` date DEFAULT NULL,
  `b_days` int(11) DEFAULT NULL,
  `b_guest` int(11) DEFAULT NULL,
  `b_room` int(11) DEFAULT NULL,
  `b_room_type` varchar(25) DEFAULT NULL,
  `b_total_amount` decimal(10,2) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_check_in_date`, `b_check_out_date`, `b_days`, `b_guest`, `b_room`, `b_room_type`, `b_total_amount`, `c_id`) VALUES
(2, '2018-02-01', '2018-02-05', 4, 2, 1, 'Deluxe Queen', '276.00', 2),
(3, '2018-03-14', '2018-03-15', 1, 3, 1, 'Deluxe Queen', '69.00', 3),
(4, '2018-03-16', '2018-03-17', 1, 4, 1, 'Superior Queen', '109.00', 4),
(5, '2018-03-31', '2018-04-02', 2, 4, 1, 'Superior King', '258.00', 5),
(6, '2018-04-01', '2018-04-02', 1, 4, 1, 'Standard King', '119.00', 6),
(7, '2018-05-01', '2018-05-02', 1, 2, 1, 'Deluxe Queen', '69.00', 7),
(8, '2018-05-12', '2018-05-15', 3, 2, 1, 'Superior Queen', '327.00', 8),
(9, '2018-05-18', '2018-05-19', 1, 1, 1, 'Deluxe Queen', '69.00', 9),
(10, '2018-06-01', '2018-06-02', 1, 3, 2, 'Standard Queen', '118.00', 10),
(11, '2018-05-01', '2018-05-02', 1, 2, 2, 'Standard Queen', '118.00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_first_name` varchar(25) DEFAULT NULL,
  `c_last_name` varchar(25) DEFAULT NULL,
  `c_date_of_birth` date DEFAULT NULL,
  `c_ic` varchar(14) DEFAULT NULL,
  `c_gender` varchar(6) DEFAULT NULL,
  `c_phone` varchar(12) DEFAULT NULL,
  `c_email` varchar(25) DEFAULT NULL,
  `c_address` varchar(30) DEFAULT NULL,
  `c_postal` varchar(5) DEFAULT NULL,
  `c_city` varchar(20) DEFAULT NULL,
  `c_state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_first_name`, `c_last_name`, `c_date_of_birth`, `c_ic`, `c_gender`, `c_phone`, `c_email`, `c_address`, `c_postal`, `c_city`, `c_state`) VALUES
(2, 'Zac', 'Yong', '1990-10-20', '901020-06-3121', 'Male', '016-3334444', 'zac@gmail.com', 'NO.16, JALAN BAHAGIA 2 TAMAN B', '68000', 'Ampang', 'Selangor'),
(3, 'Christy', 'Lim', '1996-05-20', '960520-04-5265', 'Female', '016-9683311', 'lim88@gmail.com', 'NO.88 JALAN LONG TAMAN LONG', '68000', 'Ipoh', 'Perak'),
(4, 'Kelly', 'Sim', '1995-12-25', '951225-04-9988', 'Female', '012-3344556', 'kelly@gmail.com', 'NO.33, JALAN SAGA 1/4, TAMAN S', '75502', 'Kuching', 'Sarawak'),
(5, 'Miko', 'Lew', '1992-07-25', '920725-04-6354', 'Female', '012-5498521', 'mikolew@gmail.com', 'NO.9, JALAN KSM, TAMAN KSM', '88502', 'Kota Kinabalu', 'Sabah'),
(6, 'David', 'Chong', '1992-03-01', '920301-06-3311', 'Male', '019-9885495	', 'dc@hotmail.com.my', 'NO.18, JALAN UNI GARDEN, TAMAN', '75502', 'Kota Samarahan	', 'Sarawak'),
(7, 'Daniel', 'Chong', '1990-01-24', '900124-06-7777', 'Male', '017-8659542', 'dchong7@hotmail.com.my', 'NO.22, JALAN SRI LAYANG, TAMAN', '75502', 'Kota Samarahan', 'Sarawak'),
(8, 'Yumi', 'Chen', '1990-06-01', '900601-06-6688', 'Female', '010-9292098', 'yumi@gmail.com', 'NO.34, JALAN MENTAKAB, TAMAN M', '28400', 'MENTAKAB', 'Pahang'),
(9, 'Raymond', 'Chong', '1997-01-05', '970105-04-5657', 'Male', '019-8795432', 'raymond@hotmail.com', 'NO. 12, JALAN BUNGA, TAMAN BUN', '28400', 'Temerloh', 'Pahang'),
(10, 'Nichole', 'Tan', '1991-12-15', '911215-01-1232', 'Female', '012-4123102', 'nichole@gmail.com', 'NO.1 JALAN KSM 1/2, TAMAN KSM', '75502', 'Kuching', 'Sarawak'),
(11, 'Mei Ling', 'Lew', '1992-05-15', '920515-06-5462', 'Female', '019-9378979', 'meiling@gmail.com', 'NO.2, JALAN STUDONG, TAMAN STU', '28400', 'Mentakab', 'Pahang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
