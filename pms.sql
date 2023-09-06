-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 09:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'Plastic Vas'),
(2, 'Sementhi Vas');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `email`, `address`, `dob`, `phone_number`) VALUES
(1, 'ishama', '123', 'Ishama Payoe', 'ishamapayoe456@gmail.com', 'Negombo', '2023-07-13', 785952434),
(2, 'Sanidu', '123', 'Sanidu Payoe', 'Sanidupayoe@gmail.com', 'Negombo', '2023-07-13', 785952434),
(3, 'Dinesh ', '123', 'Dinesh Madushanka', 'Dinesh@gmail.com', 'Diulapitiya', '2023-07-13', 766542129),
(5, 'Udara', '123', 'Udara Dana', 'Udara@gmal.com', 'Katana', '2023-07-05', 711234567),
(6, 'Imasha_Willi', '123456', 'Imasha Willi', 'imashawilli@gmail.com', 'Katana', '2023-04-20', 791234567),
(8, 'Nihal Payoe', '1213', 'Nihal Payoe', 'NihalPayoe@gmail.com', 'Negombo', '2023-07-14', 711234567),
(9, 'Simidi@Jayasinghe', '123', 'Simidi Jayasinghe', 'simidijayasinghe@gmail.com', 'Negombo', '2023-04-21', 711234567);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `i_des` varchar(50) NOT NULL,
  `i_cate` varchar(50) NOT NULL,
  `i_sub_cate` varchar(50) NOT NULL,
  `i_attach` varchar(30) NOT NULL,
  `i_stock` varchar(30) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_quntity` int(11) NOT NULL,
  `i_expire_date` date NOT NULL,
  `i_mani_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`i_id`, `i_name`, `i_des`, `i_cate`, `i_sub_cate`, `i_attach`, `i_stock`, `i_brand`, `i_quntity`, `i_expire_date`, `i_mani_date`, `price`) VALUES
(1, 'Vas', 'Flower vas', 'Plastic', 'mnk', 'heee', 'heee', 'Brand new', 0, '0000-00-00', '0000-00-00', 120),
(2, 'Phone', 'Nokiya Phone', 'heee', 'heee', 'heee', 'heee', 'Used', 34, '2023-07-03', '2023-07-12', 1200),
(3, 'vas', 'Plastic Vas', 'Flower Vas', 'Red vas', 'asd', 'asd', 'asd', 12, '2023-07-25', '2023-06-02', 123),
(4, 'Book', 'CR 120 pg ', 'Line', '2.22mm Line', 'wer', 'jj', 'Brand New', 1234, '0000-00-00', '0000-00-00', 123),
(5, 'Car', 'Red', 'CHR', 'dfg', 'sdf', 'MKJ', 'UsedS', 0, '0000-00-00', '0000-00-00', 110000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date`, `user_role`) VALUES
(1, 'email@email.com', '1234', '2023-04-08 21:27:40', ''),
(2, 'Customer@gmail.com', '456', '2023-07-20 17:54:55', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
