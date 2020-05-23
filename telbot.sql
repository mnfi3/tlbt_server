-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2020 at 12:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `percent` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `started_at` datetime NOT NULL,
  `finished_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `type`, `percent`, `count`, `remaining`, `started_at`, `finished_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', 'member_app', 20, 10, 18, '2020-05-23 00:00:00', '2020-05-31 00:00:00', '2020-05-22 19:30:00', '2020-05-23 07:27:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_apps`
--

DROP TABLE IF EXISTS `member_apps`;
CREATE TABLE IF NOT EXISTS `member_apps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plain_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `token_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_at` int(11) DEFAULT '0',
  `is_trail` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_apps`
--

INSERT INTO `member_apps` (`id`, `user_id`, `user_name`, `client_key`, `password`, `plain_password`, `token_key`, `app_version`, `auth_at`, `is_trail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '09303484023-1', '5F63DA0CE9', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '123456', '1585659006-k8WW', '1.0.0.0', 1585683440, 0, '2020-05-19 19:30:00', '2020-03-31 15:07:20', NULL),
(2, 1, '09303484023-2', '123456', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '123456', '1585240634-JKlr', '1.0.0.0', 1585683440, 0, '2020-03-23 19:30:00', '2020-03-26 12:07:14', NULL),
(12, 3, '09359132526-1', '032BBEE9D3', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '123456', '1587108736-NDqm', '3.0.0.0', 1587631021, 0, '2020-05-22 19:30:00', '2020-05-22 19:30:00', NULL),
(11, 2, '09149773360-1', '16B6FEC52C', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '123456', '1588701193-1T2J', '3.0.0.0', 1588702595, 0, '2020-05-22 19:30:00', '2020-05-22 19:30:00', NULL),
(10, 2, '09142426211-1', 'ED77547AAC', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '123456', '1586268982-oaRs', '1.0.0.0', 1588511578, 0, '2020-05-22 19:30:00', '2020-05-22 19:30:00', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_03_24_082426_create_member_apps_table', 2),
(3, '2020_03_24_083809_add_token_key_to_member_apps_table', 3),
(4, '2020_03_24_144632_add_app_version_to_member_apps_table', 4),
(5, '2020_03_24_163706_add_client_key_to_member_apps_table', 5),
(7, '2020_03_31_110541_add_auth_at_to_memeber_apps_table', 6),
(8, '2020_05_12_162320_create_verification_codes_table', 7),
(9, '2018_12_10_194000_create_smsirlaravel_log_table', 8),
(10, '2020_05_21_145906_add_is_trail_and_password_plain_to_member_apps_table', 9),
(11, '2020_05_23_083542_create_discounts_table', 10),
(12, '2020_05_23_084731_create_settings_table', 11),
(14, '2020_05_23_101021_create_zarinpal_requests_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `description`, `image`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'member_app_price', '200', 'قیمت لایسنس برنامه افزایش عضو', NULL, NULL, '2020-05-22 19:30:00', '2020-05-22 19:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `smsirlaravel_logs`
--

DROP TABLE IF EXISTS `smsirlaravel_logs`;
CREATE TABLE IF NOT EXISTS `smsirlaravel_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `response` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL,
  `inviter_id` int(11) NOT NULL DEFAULT '0',
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `inviter_id`, `mobile`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mohsen', '1', 0, '09145821998', '$2y$10$8BX1tpA2UsvVoRbds18z1.9ghEcLAOBhCyI6VhBgKQlk3aqqmo8im', '2020-03-23 19:30:00', '2020-05-23 07:41:21', NULL),
(2, 'mohsen2', '0', 0, '09303484023', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '2020-03-23 19:30:00', '2020-03-23 19:30:00', NULL),
(3, 'علیرضا سربازی', '0', 0, '09359132526', '$2y$10$HwVlq0R7S/uRVGpPMHkUQu26jHchjEZxBWkScVY6bWwBJ7NWA6yBO', '2020-05-22 19:30:00', '2020-05-22 19:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

DROP TABLE IF EXISTS `verification_codes`;
CREATE TABLE IF NOT EXISTS `verification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mobile` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `token` varchar(700) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT NULL,
  `expired_at` datetime(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zarinpal_requests`
--

DROP TABLE IF EXISTS `zarinpal_requests`;
CREATE TABLE IF NOT EXISTS `zarinpal_requests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `authority` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `data` text,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_success` tinyint(1) NOT NULL DEFAULT '0',
  `ref_id` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
