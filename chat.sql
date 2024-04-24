-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 01:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(10) UNSIGNED NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(4, 457413637, 438312131, 'Hello man'),
(5, 457413637, 438312131, 'Hey'),
(6, 457413637, 438312131, 'How are you?'),
(7, 1219061059, 438312131, 'Hello Ali -T'),
(8, 438312131, 1219061059, 'Hi Ali Dashti'),
(9, 438312131, 1219061059, 'How are you?'),
(10, 1219061059, 438312131, 'I fine thanks'),
(11, 438312131, 793189269, 'Hello Ali'),
(12, 793189269, 438312131, 'Hi Arad'),
(13, 438312131, 793189269, 'how are you?'),
(14, 793189269, 438312131, 'i fine thanks'),
(15, 438312131, 793189269, 'خداروشکر'),
(16, 793189269, 438312131, 'دیگه چه خبر'),
(17, 438312131, 793189269, 'سلامتی'),
(18, 793189269, 438312131, '????'),
(19, 438312131, 793189269, '-:');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `image`, `status`) VALUES
(3, 438312131, 'Ali', '-T', 'dashti.ali@gmail.com', '1234566', '1712283795photo_2021-08-05_11-57-13.jpg', 'Acitve now'),
(4, 1059785712, 'Ali', 'Dashti', 'ali.dashti@gmail.com', '12345678', '1712372541IMG_20220205_091153_796.jpg', 'Offline now'),
(5, 793189269, 'Arad', 'Hamidi', 'arad.hamidi@gmail.com', '123', '1712372721@Wallpaper_4K3D (12317).jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
