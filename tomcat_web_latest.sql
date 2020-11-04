-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 02:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomcat_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_log`
--

CREATE TABLE `borrow_log` (
  `borrow_log_id` int(11) NOT NULL,
  `borrow_log_item_borrowed` int(11) NOT NULL,
  `borrow_log_borrower` int(11) NOT NULL,
  `borrow_log_date_created` datetime NOT NULL,
  `borrow_log_date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_log`
--

INSERT INTO `borrow_log` (`borrow_log_id`, `borrow_log_item_borrowed`, `borrow_log_borrower`, `borrow_log_date_created`, `borrow_log_date_modified`) VALUES
(7, 7, 37, '2020-08-16 17:07:03', '2020-08-16 09:07:03'),
(8, 9, 37, '2020-08-16 17:07:07', '2020-08-16 09:07:07'),
(9, 11, 37, '2020-08-16 17:07:10', '2020-08-16 09:07:10'),
(10, 10, 37, '2020-08-16 17:10:55', '2020-08-16 09:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_serial_number` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_status` int(1) NOT NULL,
  `item_borrower` int(11) NOT NULL,
  `item_owner` varchar(255) NOT NULL,
  `item_date_created` datetime NOT NULL,
  `item_date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_serial_number`, `item_name`, `item_type`, `item_status`, `item_borrower`, `item_owner`, `item_date_created`, `item_date_modified`) VALUES
(7, 'TESTITEM0X123-696969', 'Test Item 1', 'Camera', 1, 0, '37', '2020-07-22 18:31:08', '2020-08-16 09:07:30'),
(8, 'TESTITEM0X123-123123', 'Test Item 2', 'Tripod', 1, 0, '38', '2020-07-23 07:57:35', '2020-08-16 09:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `item_status`
--

CREATE TABLE `item_status` (
  `item_status_id` int(2) NOT NULL,
  `item_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_status`
--

INSERT INTO `item_status` (`item_status_id`, `item_status_name`) VALUES
(1, 'Available'),
(2, 'In Use');

-- --------------------------------------------------------

--
-- Table structure for table `resets`
--

CREATE TABLE `resets` (
  `reset_id` int(11) NOT NULL,
  `reset_email` text NOT NULL,
  `reset_selector` text NOT NULL,
  `reset_token` longtext NOT NULL,
  `reset_expiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `return_log`
--

CREATE TABLE `return_log` (
  `return_log_id` int(11) NOT NULL,
  `return_log_item_returned` int(11) NOT NULL,
  `return_log_item_returner` int(11) NOT NULL,
  `return_log_date_created` datetime NOT NULL,
  `return_log_date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_log`
--

INSERT INTO `return_log` (`return_log_id`, `return_log_item_returned`, `return_log_item_returner`, `return_log_date_created`, `return_log_date_modified`) VALUES
(1, 7, 37, '2020-08-16 16:29:44', '2020-08-16 08:29:44'),
(2, 9, 37, '2020-08-16 17:07:25', '2020-08-16 09:07:25'),
(3, 7, 37, '2020-08-16 17:07:30', '2020-08-16 09:07:30'),
(4, 11, 37, '2020-08-16 17:07:32', '2020-08-16 09:07:32'),
(5, 10, 37, '2020-08-16 17:10:59', '2020-08-16 09:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_position` varchar(255) NOT NULL,
  `user_contact_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_display_photo` varchar(255) NOT NULL,
  `user_date_created` datetime NOT NULL,
  `user_date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_position`, `user_contact_number`, `user_email`, `user_password`, `user_display_photo`, `user_date_created`, `user_date_modified`) VALUES
(-1, 'Administrator', 'Account', 'Admin', '00000000000', 'adminemail@gmail.com', '$2y$10$2bo5U7j9gitcjqRpfLVwteNhovSrZu34Rds6gEAHaJCMa1eRm8uoK', './displayphotouploads/6382da034eadff249681729ff68a9003/displayPhoto.png', '2020-08-16 18:48:18', '2020-08-16 10:48:18'),
(60, 'McSpenzerz', 'Casugas', 'Big Bossing', '09176582528999', 'spenzcasuga@gmail.com', '$2a$16$VclAFZxE1AEzhjjqnIJ6L.55D1CeTTsbvb8c5dcgupzfUmiAiV5q.', './displayphotouploads/75617f0b7106c356a956d52e445a563d/displayPhoto.png', '2020-10-31 07:41:40', '2020-10-31 00:59:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_log`
--
ALTER TABLE `borrow_log`
  ADD PRIMARY KEY (`borrow_log_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_status`
--
ALTER TABLE `item_status`
  ADD PRIMARY KEY (`item_status_id`);

--
-- Indexes for table `resets`
--
ALTER TABLE `resets`
  ADD PRIMARY KEY (`reset_id`);

--
-- Indexes for table `return_log`
--
ALTER TABLE `return_log`
  ADD PRIMARY KEY (`return_log_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_log`
--
ALTER TABLE `borrow_log`
  MODIFY `borrow_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_status`
--
ALTER TABLE `item_status`
  MODIFY `item_status_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resets`
--
ALTER TABLE `resets`
  MODIFY `reset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `return_log`
--
ALTER TABLE `return_log`
  MODIFY `return_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
