-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 11:56 AM
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
-- Database: `sparksbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sr no.` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` int(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sr no.`, `sender`, `receiver`, `amount`, `date_time`) VALUES
(1, 'Riya', 'Priya', 5000, '2021-07-18 18:08:40'),
(2, 'Priya', 'Mitesh', 5000, '2021-07-18 18:09:31'),
(3, 'Ronak', 'Ritesh', 5000, '2021-07-18 18:10:13'),
(4, 'Mitesh', 'Bhumit', 2000, '2021-07-18 20:31:40'),
(5, 'Riya', 'Bhumit', 700, '2021-07-18 23:06:24'),
(6, 'Ronak', 'Priya', 500, '2021-07-18 23:06:41'),
(7, 'Ritesh', 'Bhumit', 700, '2021-07-18 23:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `current_bal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `current_bal`) VALUES
(1, 'Riya', 'riyapatil123@gmail.com', 44300),
(2, 'Priya', 'priyapatil1234@gmail.com', 45500),
(3, 'Mitesh', 'miteshawasthi12@gmail.com', 48000),
(4, 'Ritesh', 'riteshadvani17@gmail.com', 44300),
(5, 'Aarav', 'aaravkor23@gmail.com', 45000),
(6, 'Bhumit', 'bhumitvyas27@gmail.com', 43400),
(7, 'Disha', 'dishabhoir25@gmail.com', 40000),
(8, 'Dhruv', 'dhruvpatil26@gmail.com', 40000),
(9, 'Ishani', 'ishanishirsat28@gmail.com', 45000),
(10, 'Ronak', 'ronakdeshmukh30@gmail.com', 49500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sr no.`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
