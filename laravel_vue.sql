-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2020 at 07:21 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_vue`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `M_CODE` int(111) NOT NULL AUTO_INCREMENT,
  `MESSAGE` text DEFAULT NULL,
  `U_ID` int(111) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `approved` int(1) DEFAULT 0,
  `ANSWER` text DEFAULT NULL,
  `AWAITING` int(1) DEFAULT 1,
  `ANSWER_U_ID` int(111) DEFAULT NULL,
  PRIMARY KEY (`M_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`M_CODE`, `MESSAGE`, `U_ID`, `updated_at`, `created_at`, `approved`, `ANSWER`, `AWAITING`, `ANSWER_U_ID`) VALUES
(1, 'sdfsdf', 2, '2020-12-21 05:21:58', '2020-12-21 05:21:58', 0, '', 1, NULL),
(2, 'ddddddd\ndddd', 2, '2020-12-21 05:23:51', '2020-12-21 05:23:51', 0, '', 1, NULL),
(3, 'dddddddd', 2, '2020-12-21 05:32:07', '2020-12-21 05:32:07', 0, '', 1, NULL),
(4, 'Teste teste', 2, '2020-12-23 02:21:31', '2020-12-21 09:12:05', 0, '', 0, NULL),
(5, 'hello', 2, '2020-12-23 07:00:07', '2020-12-21 20:31:18', 1, 'sdfsdfsdf', 0, 1),
(6, 'good bye', 2, '2020-12-21 20:31:36', '2020-12-21 20:31:36', 0, '', 1, NULL),
(7, 'sasdfasdf', 2, '2020-12-21 20:31:42', '2020-12-21 20:31:42', 0, '', 1, NULL),
(8, 'sdfsdf', 2, '2020-12-21 20:31:43', '2020-12-21 20:31:43', 0, '', 1, NULL),
(9, 'sdfsdf', 2, '2020-12-21 20:31:45', '2020-12-21 20:31:45', 0, '', 1, NULL),
(10, 'tqwtwewer', 2, '2020-12-21 20:31:47', '2020-12-21 20:31:47', 0, '', 1, NULL),
(11, 'ARe you there???', 2, '2020-12-21 20:31:53', '2020-12-21 20:31:53', 0, '', 1, NULL),
(12, 'How are you today?', 2, '2020-12-21 20:31:59', '2020-12-21 20:31:59', 0, '', 1, NULL),
(13, 'I am okay, thank you, and you?', 2, '2020-12-21 20:32:10', '2020-12-21 20:32:10', 0, '', 1, NULL),
(14, 'Good bye,', 2, '2020-12-21 20:32:16', '2020-12-21 20:32:16', 0, '', 1, NULL),
(15, 'see you soon', 2, '2020-12-21 20:32:22', '2020-12-21 20:32:22', 0, '', 1, NULL),
(16, 'asdfsdf', 2, '2020-12-22 23:02:53', '2020-12-21 20:32:26', 0, '', 0, NULL),
(17, 'Hi', 2, '2020-12-21 20:32:38', '2020-12-21 20:32:38', 0, '', 1, NULL),
(18, 'Nice to meet you', 2, '2020-12-21 20:32:44', '2020-12-21 20:32:44', 0, '', 1, NULL),
(19, 'How are you today?', 2, '2020-12-21 20:32:49', '2020-12-21 20:32:49', 0, '', 1, NULL),
(20, 'OKOK', 2, '2020-12-21 20:32:53', '2020-12-21 20:32:53', 0, '', 1, NULL),
(21, 'sdfsdf', 2, '2020-12-23 01:36:20', '2020-12-21 20:33:08', 0, 'werwerwer', 1, NULL),
(22, 'sdfsdf', 2, '2020-12-21 20:33:09', '2020-12-21 20:33:09', 0, '', 1, NULL),
(23, 'sdfsdf', 2, '2020-12-23 01:53:11', '2020-12-21 20:33:11', 0, 'Okay', 1, NULL),
(24, 'hhgghjh', 2, '2020-12-22 23:01:13', '2020-12-21 20:33:13', 0, '', 0, NULL),
(25, 'ghjghjgh', 2, '2020-12-22 23:00:55', '2020-12-21 20:33:15', 0, '', 0, NULL),
(26, 'ghjghj', 2, '2020-12-22 22:57:06', '2020-12-21 20:33:16', 1, '', 0, NULL),
(27, 'ghjghjg', 2, '2020-12-22 22:55:39', '2020-12-21 20:33:18', 1, '', 0, NULL),
(28, 'testfdsdf', 2, '2020-12-22 22:54:29', '2020-12-21 20:33:21', 1, '', 0, NULL),
(29, 'Hello', 2, '2020-12-23 01:51:53', '2020-12-23 01:47:58', 0, '', 0, NULL),
(30, 'How are you?', 2, '2020-12-23 01:51:48', '2020-12-23 01:48:04', 0, '', 0, NULL),
(31, 'asdasdasd', 2, '2020-12-23 02:37:24', '2020-12-23 02:37:24', 0, '', 1, NULL),
(32, 'sdfsdf', 2, '2020-12-23 02:38:05', '2020-12-23 02:38:05', 0, '', 1, NULL),
(33, 'sdfsdf', 2, '2020-12-23 02:42:17', '2020-12-23 02:42:17', 0, '', 1, NULL),
(34, 'sdfsdf', 2, '2020-12-23 02:43:20', '2020-12-23 02:43:20', 0, '', 1, NULL),
(35, 'sdfsdf', 2, '2020-12-23 02:43:28', '2020-12-23 02:43:28', 0, '', 1, NULL),
(36, 'sdfsdf', 2, '2020-12-23 02:44:17', '2020-12-23 02:44:17', 0, '', 1, NULL),
(37, 'sdf', 2, '2020-12-23 02:44:37', '2020-12-23 02:44:37', 0, '', 1, NULL),
(38, 'sdfsdf', 2, '2020-12-23 02:44:47', '2020-12-23 02:44:47', 0, '', 1, NULL),
(39, 'sdf', 2, '2020-12-23 02:45:09', '2020-12-23 02:45:09', 0, '', 1, NULL),
(40, 'sdfsdf', 2, '2020-12-23 02:45:28', '2020-12-23 02:45:28', 0, '', 1, NULL),
(41, 'sdfsdf', 2, '2020-12-23 02:46:20', '2020-12-23 02:46:20', 0, '', 1, NULL),
(42, 'sd', 2, '2020-12-23 02:46:30', '2020-12-23 02:46:30', 0, '', 1, NULL),
(43, 'sdfsdf', 2, '2020-12-23 02:46:47', '2020-12-23 02:46:47', 0, '', 1, NULL),
(44, 'sdfsdf', 2, '2020-12-23 02:49:00', '2020-12-23 02:49:00', 0, '', 1, NULL),
(45, 'sdfsdf', 2, '2020-12-23 02:49:03', '2020-12-23 02:49:03', 0, '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_25_011653_create_todos_table', 1),
(5, '2019_08_31_124012_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_settings`
--

DROP TABLE IF EXISTS `session_settings`;
CREATE TABLE IF NOT EXISTS `session_settings` (
  `SS_CODE` int(111) NOT NULL AUTO_INCREMENT,
  `MAIN_MESSAGE` text DEFAULT NULL,
  `LIVE_URL` varchar(248) DEFAULT NULL,
  `AUTO_ARPPROVE` int(1) DEFAULT 0,
  `BTN_BACKGROUND_COLOR` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`SS_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_settings`
--

INSERT INTO `session_settings` (`SS_CODE`, `MAIN_MESSAGE`, `LIVE_URL`, `AUTO_ARPPROVE`, `BTN_BACKGROUND_COLOR`, `updated_at`, `created_at`) VALUES
(1, 'Hello, how are you?', NULL, 0, '1940FF', '2020-12-21 05:37:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `UR_CODE` int(111) DEFAULT NULL,
  `last_session` varchar(268) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `UR_CODE` (`UR_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `UR_CODE`, `last_session`, `f_name`, `l_name`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$zsThu4QDn1aqoNgCBEiWee/AepMoPd.h.VXkjxdHvvb4aP3AggGUa', NULL, '2020-12-16 10:08:45', '2020-12-21 07:11:03', 1, '', 'Admin', 'Chat'),
(2, 'test', 'test@test.com', NULL, '$2y$10$jKzCz.ZPhlu3fl1jkX8pdeZSBXPihF0a.Pey4TwWUvUyObHpGtNI6', NULL, '2020-12-18 09:26:59', '2020-12-18 09:26:59', 2, NULL, 'Jenis', 'Dev');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `UR_CODE` int(111) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`UR_CODE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`UR_CODE`, `NAME`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UR_CODE`) REFERENCES `user_role` (`UR_CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
