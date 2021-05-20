-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 05:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history_db`
--

CREATE TABLE `transaction_history_db` (
  `id` int(11) NOT NULL,
  `from_ac` varchar(30) NOT NULL,
  `to_ac` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history_db`
--

INSERT INTO `transaction_history_db` (`id`, `from_ac`, `to_ac`, `amount`, `datetime`) VALUES
(3, 'Mario Speedwagon', 'Anna Mull', '100.00', '2021-05-20 14:37:59'),
(4, 'Anna Mull', 'Gail Forcewind', '100.00', '2021-05-20 14:39:32'),
(5, 'Gail Forcewind', 'Nick R. Bocker', '500.00', '2021-05-20 17:50:10'),
(6, 'Petey Cruiser', 'Gail Forcewind', '390.00', '2021-05-20 17:54:04'),
(7, 'Gail Forcewind', 'Bob Frapples', '250.00', '2021-05-20 17:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_info_db`
--

CREATE TABLE `user_info_db` (
  `ac_num` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info_db`
--

INSERT INTO `user_info_db` (`ac_num`, `name`, `phone`, `email`, `address`, `pan`, `balance`) VALUES
(80001, 'Mario Speedwagon', '9756732875', 'mario@email.com', '3922  Blackwell Street', 'BAJPC4350M', '39900.00'),
(80002, 'Petey Cruiser', '9656268522', 'petey@email.com', '3764  Angie Drive', 'DAJPC4150P', '39601.00'),
(80003, 'Garrett Walker', '9677568370', 'garrett@email.com', '2699  Apple Lane', 'XGZFE7225A', '40000.00'),
(80004, 'Paul Molive', '9964369183', 'paul@email.com', '813  Lynn Avenue', 'CTUGE1616I', '40000.00'),
(80005, 'Anna Mull', '9642487173', 'anna@email.com', '3237  Kelly Street', 'PEVFV4506Y', '40009.00'),
(80006, 'Gail Forcewind', '9564543573', 'gail@email.com', '3732  Cinnamon Lane', 'UWPCL6780T', '39740.00'),
(80007, 'Paige Turner', '9236263873', 'paige@email.com', '766  Patterson Road', 'BAJPC4350M', '40000.00'),
(80008, 'Bob Frapples', '9752324353', 'bob@email.com', '4573  Oak Way', 'LQDTD5444T', '40250.00'),
(80009, 'Nick R. Bocker', '9242235233', 'nick@email.com', '1494  Maxwell Farm Road', 'YUGFJ2046V', '40500.00'),
(80010, 'Marvin Gardens', '9668424622', 'marvin@email.com', '2741  Blue Spruce Lane', 'NLXBC1905E', '40000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_history_db`
--
ALTER TABLE `transaction_history_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info_db`
--
ALTER TABLE `user_info_db`
  ADD PRIMARY KEY (`ac_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_history_db`
--
ALTER TABLE `transaction_history_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info_db`
--
ALTER TABLE `user_info_db`
  MODIFY `ac_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
