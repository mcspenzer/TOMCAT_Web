-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tomcat_web
CREATE DATABASE IF NOT EXISTS `tomcat_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tomcat_web`;

-- Dumping structure for table tomcat_web.borrow_log
CREATE TABLE IF NOT EXISTS `borrow_log` (
  `borrow_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `borrow_log_item_borrowed` int(11) NOT NULL,
  `borrow_log_borrower` int(11) DEFAULT NULL,
  `borrow_log_date_created` datetime NOT NULL,
  `borrow_log_date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `borrow_log_item_borrower_external` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`borrow_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tomcat_web.borrow_log: ~10 rows (approximately)
DELETE FROM `borrow_log`;
/*!40000 ALTER TABLE `borrow_log` DISABLE KEYS */;
INSERT INTO `borrow_log` (`borrow_log_id`, `borrow_log_item_borrowed`, `borrow_log_borrower`, `borrow_log_date_created`, `borrow_log_date_modified`, `borrow_log_item_borrower_external`) VALUES
	(7, 7, 37, '2020-08-16 17:07:03', '2020-08-16 17:07:03', NULL),
	(8, 9, 37, '2020-08-16 17:07:07', '2020-08-16 17:07:07', NULL),
	(9, 11, 37, '2020-08-16 17:07:10', '2020-08-16 17:07:10', NULL),
	(10, 10, 37, '2020-08-16 17:10:55', '2020-08-16 17:10:55', NULL),
	(11, 7, 60, '2020-11-22 17:53:22', '2020-11-22 17:53:22', NULL),
	(12, 8, 60, '2020-12-02 11:05:15', '2020-12-02 11:05:15', NULL),
	(13, 7, 60, '2020-12-02 11:11:08', '2020-12-02 11:11:08', NULL),
	(14, 8, NULL, '2020-12-02 12:44:06', '2020-12-02 12:44:06', 'External External'),
	(15, 7, 60, '2020-12-02 12:57:28', '2020-12-02 12:57:28', 'External Borrower'),
	(16, 7, 60, '2020-12-02 13:32:39', '2020-12-02 13:32:39', 'External Borrower'),
	(17, 7, 60, '2020-12-02 13:32:57', '2020-12-02 13:32:57', 'External Borrower'),
	(18, 8, 60, '2020-12-02 13:35:49', '2020-12-02 13:35:49', ' '),
	(19, 7, 60, '2020-12-02 13:47:38', '2020-12-02 13:47:38', 'External Borrower1');
/*!40000 ALTER TABLE `borrow_log` ENABLE KEYS */;

-- Dumping structure for table tomcat_web.items
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_serial_number` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `item_status` int(1) NOT NULL,
  `item_borrower` int(11) DEFAULT NULL,
  `item_owner` varchar(255) NOT NULL,
  `item_date_created` datetime NOT NULL,
  `item_date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_borrower_external` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tomcat_web.items: ~2 rows (approximately)
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`item_id`, `item_serial_number`, `item_name`, `item_type`, `item_status`, `item_borrower`, `item_owner`, `item_date_created`, `item_date_modified`, `item_borrower_external`) VALUES
	(7, 'TESTITEM0X123-696969', 'Test Item 1', 'Camera', 1, 0, '37', '2020-07-22 18:31:08', '2020-12-02 13:47:48', 'External Borrower1'),
	(8, 'TESTITEM0X123-123123', 'Test Item 2', 'Tripod', 1, 0, '38', '2020-07-23 07:57:35', '2020-12-02 13:47:32', ' ');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Dumping structure for table tomcat_web.item_status
CREATE TABLE IF NOT EXISTS `item_status` (
  `item_status_id` int(2) NOT NULL AUTO_INCREMENT,
  `item_status_name` varchar(255) NOT NULL,
  PRIMARY KEY (`item_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tomcat_web.item_status: ~2 rows (approximately)
DELETE FROM `item_status`;
/*!40000 ALTER TABLE `item_status` DISABLE KEYS */;
INSERT INTO `item_status` (`item_status_id`, `item_status_name`) VALUES
	(1, 'Available'),
	(2, 'In Use');
/*!40000 ALTER TABLE `item_status` ENABLE KEYS */;

-- Dumping structure for table tomcat_web.resets
CREATE TABLE IF NOT EXISTS `resets` (
  `reset_id` int(11) NOT NULL AUTO_INCREMENT,
  `reset_email` text NOT NULL,
  `reset_selector` text NOT NULL,
  `reset_token` longtext NOT NULL,
  `reset_expiry` text NOT NULL,
  PRIMARY KEY (`reset_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table tomcat_web.resets: ~1 rows (approximately)
DELETE FROM `resets`;
/*!40000 ALTER TABLE `resets` DISABLE KEYS */;
INSERT INTO `resets` (`reset_id`, `reset_email`, `reset_selector`, `reset_token`, `reset_expiry`) VALUES
	(17, 'spenzcasuga@gmail.com', '736ae8f588526ac2', '$2y$10$3rrUO/RihSFhuypjRYaF6.MTkzItUGJU/Td5XpNiYMlsVfJNBGvSq', '1606047731'),
	(18, 'dcgerome99@gmail.com', '435f99078451c6bd', '$2y$10$sVLglTPtRkWjcRQh04G/J.7eP.poQRLq6AQJgqA3Kus76UOPy2jKq', '1606050942');
/*!40000 ALTER TABLE `resets` ENABLE KEYS */;

-- Dumping structure for table tomcat_web.return_log
CREATE TABLE IF NOT EXISTS `return_log` (
  `return_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `return_log_item_returned` int(11) NOT NULL,
  `return_log_item_returner` int(11) DEFAULT NULL,
  `return_log_date_created` datetime NOT NULL,
  `return_log_date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `return_log_item_returner_external` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`return_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tomcat_web.return_log: ~8 rows (approximately)
DELETE FROM `return_log`;
/*!40000 ALTER TABLE `return_log` DISABLE KEYS */;
INSERT INTO `return_log` (`return_log_id`, `return_log_item_returned`, `return_log_item_returner`, `return_log_date_created`, `return_log_date_modified`, `return_log_item_returner_external`) VALUES
	(1, 7, 37, '2020-08-16 16:29:44', '2020-08-16 16:29:44', NULL),
	(2, 9, 37, '2020-08-16 17:07:25', '2020-08-16 17:07:25', NULL),
	(3, 7, 37, '2020-08-16 17:07:30', '2020-08-16 17:07:30', NULL),
	(4, 11, 37, '2020-08-16 17:07:32', '2020-08-16 17:07:32', NULL),
	(5, 10, 37, '2020-08-16 17:10:59', '2020-08-16 17:10:59', NULL),
	(6, 7, 60, '2020-12-02 11:05:25', '2020-12-02 11:05:25', NULL),
	(7, 8, 60, '2020-12-02 11:05:28', '2020-12-02 11:05:28', NULL),
	(8, 7, 60, '2020-12-02 13:21:29', '2020-12-02 13:21:29', NULL),
	(9, 7, 60, '2020-12-02 13:47:25', '2020-12-02 13:47:25', 'External Borrower'),
	(10, 8, 60, '2020-12-02 13:47:32', '2020-12-02 13:47:32', ' '),
	(11, 7, 60, '2020-12-02 13:47:48', '2020-12-02 13:47:48', 'External Borrower1');
/*!40000 ALTER TABLE `return_log` ENABLE KEYS */;

-- Dumping structure for table tomcat_web.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_position` varchar(255) NOT NULL,
  `user_contact_number` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_display_photo` varchar(255) NOT NULL,
  `user_date_created` datetime NOT NULL,
  `user_date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table tomcat_web.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_position`, `user_contact_number`, `user_email`, `user_password`, `user_display_photo`, `user_date_created`, `user_date_modified`) VALUES
	(-1, 'Administrator', 'Account', 'Admin', '00000000000', 'adminemail@gmail.com', '$2y$10$2bo5U7j9gitcjqRpfLVwteNhovSrZu34Rds6gEAHaJCMa1eRm8uoK', './displayphotouploads/6382da034eadff249681729ff68a9003/displayPhoto.png', '2020-08-16 18:48:18', '2020-08-16 18:48:18'),
	(60, 'McSpenzerz', 'Casugas', 'Big Bossing', '09176582528999', 'spenzcasuga@gmail.com', '$2a$16$UO47sjtRoI7oJtwUjmuE/.zdZjW03uA0mLZIh4bCpVweDeSoeTlAq', './displayphotouploads/75617f0b7106c356a956d52e445a563d/displayPhoto.png', '2020-10-31 07:41:40', '2020-11-04 16:53:40'),
	(61, 'Bruce', 'Wayne', 'CEO', '09176582528', 'brucewayne@wayneenterprises.com', '$2a$16$OQ0ODgE5zs6Z5ghvIZLiCOiX/r..lZski6g.pb7qOVw38M4h/d38e', './displayphotouploads/c04935ada736bfaef05b94e1d5a34b04/displayPhoto.png', '2020-11-04 17:09:05', '2020-11-04 19:16:55'),
	(62, 'Gerome', 'Dela Cerna', 'Test', '09176582528', 'dcgerome99@gmail.com', '$2a$16$ckIWCHPbtxfMFLfvKQ1B3eK/HBbfApbmr7rSYVuw9EsGxgJ/UsQ5C', './displayphotouploads/073432ee2cf4a9de0f31ed9f87825a7c/displayPhoto.jpg', '2020-11-22 20:45:34', '2020-11-22 20:45:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
