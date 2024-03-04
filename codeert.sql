-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2024 at 06:03 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeert`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `chapter_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `user_id`, `chapter_name`, `chapter_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cute Frog', 'image65e54e4dd62c6.jpg', '2024-03-03 20:30:05', '2024-03-03 20:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_02_28_084644_create_chapters_table', 1),
(12, '2024_03_01_081438_create_user_logs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('creoais@gmail.com', '$2y$10$jwfzsBxw.r3Y4D7scYHB/.Rh1/5dqOAdmYtJjIXxz42EHf6kb0RS.', '2024-03-03 21:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leo', 'paragatosleo@gmail.com', '2024-03-03 20:07:51', 'user', '$2y$10$V2ZU9QNaHY5gcjk/ulnoOun3m4wFz28ICgYrd9A7XJj8N.nXnRDWC', '5Z7XGsv1X67hsgkfbNd1gXRym8LT7QbLQeIK5mFPmA8tteCfRYJ1Wk5O6ue5', '2024-03-03 20:07:51', '2024-03-03 21:57:50'),
(5, 'Testing', 'bowanat115@artgulin.com', NULL, 'user', '$2y$10$ml19dH5kjU6aFeEcDRRgsuVf/dcGPRY/AKGXlrunOFmarbfO0DTgm', 'luTVHqlEVWd5qQoTgLs48TD2SdPKBEm3TjwkIoYUZSWVHeYGnh7IQwogdZcS', '2024-03-03 21:24:11', '2024-03-03 21:56:53'),
(4, 'Super Admin', 'Admin@admin.com', NULL, 'admin', '$2y$10$QgSsMqIVZWjKrj1RU4sSeu9.fP0wKri14kAzlL..oR0Kcwsk1p616', NULL, '2024-03-03 20:33:22', '2024-03-03 20:33:22'),
(6, 'Creo', 'creoais@gmail.com', NULL, 'admin', '$2y$10$oBxDg1dwWo.4/nty3xPYSOC2R5YE38.lN5x4rL/jWcZw1nnkWm/3K', NULL, '2024-03-03 21:41:05', '2024-03-03 21:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
CREATE TABLE IF NOT EXISTS `user_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_logs_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'Logged In User Leo', '2024-03-03 20:08:11', '2024-03-03 20:08:11'),
(2, 1, 'Added User Frank Gesmundo', '2024-03-03 20:09:57', '2024-03-03 20:09:57'),
(3, 2, 'Logged In User Frank Gesmundo', '2024-03-03 20:11:42', '2024-03-03 20:11:42'),
(4, 2, 'Published Chapter Cute Frog', '2024-03-03 20:30:05', '2024-03-03 20:30:05'),
(5, 2, 'Published Chapter Lion', '2024-03-03 20:30:28', '2024-03-03 20:30:28'),
(6, 2, 'Updated Chapter Focus Frog', '2024-03-03 20:31:05', '2024-03-03 20:31:05'),
(7, 2, 'Deleted Chapter Focus Frog', '2024-03-03 20:31:38', '2024-03-03 20:31:38'),
(8, 2, 'Added User Super  Admin', '2024-03-03 20:32:26', '2024-03-03 20:32:26'),
(9, 2, 'Deleted User Super  Admin', '2024-03-03 20:32:55', '2024-03-03 20:32:55'),
(10, 2, 'Added User Super Admin', '2024-03-03 20:33:22', '2024-03-03 20:33:22'),
(11, 2, 'Deleted User Frank Gesmundo', '2024-03-03 20:33:31', '2024-03-03 20:33:31'),
(12, 4, 'Logged In User Super Admin', '2024-03-03 20:33:54', '2024-03-03 20:33:54'),
(13, 1, 'Logged In User Leo', '2024-03-03 20:34:41', '2024-03-03 20:34:41'),
(14, 4, 'Logged In User Super Admin', '2024-03-03 20:35:19', '2024-03-03 20:35:19'),
(15, 4, 'Logged In User Super Admin', '2024-03-03 20:37:27', '2024-03-03 20:37:27'),
(16, 1, 'Logged In User Leo', '2024-03-03 20:49:05', '2024-03-03 20:49:05'),
(17, 4, 'Logged In User Super Admin', '2024-03-03 20:51:35', '2024-03-03 20:51:35'),
(18, 4, 'Updated User Leo', '2024-03-03 21:01:09', '2024-03-03 21:01:09'),
(19, 4, 'Updated User Leo', '2024-03-03 21:01:43', '2024-03-03 21:01:43'),
(20, 4, 'Updated User Leo', '2024-03-03 21:02:44', '2024-03-03 21:02:44'),
(21, 1, 'Logged In User Leo', '2024-03-03 21:02:51', '2024-03-03 21:02:51'),
(22, 1, 'Updated User Leo', '2024-03-03 21:02:59', '2024-03-03 21:02:59'),
(23, 4, 'Logged In User Super Admin', '2024-03-03 21:03:40', '2024-03-03 21:03:40'),
(24, 4, 'Updated User Leo', '2024-03-03 21:05:51', '2024-03-03 21:05:51'),
(25, 4, 'Updated User Leo', '2024-03-03 21:05:59', '2024-03-03 21:05:59'),
(26, 4, 'Logged In User Super Admin', '2024-03-03 21:06:11', '2024-03-03 21:06:11'),
(27, 1, 'Logged In User Leo', '2024-03-03 21:06:49', '2024-03-03 21:06:49'),
(28, 4, 'Logged In User Super Admin', '2024-03-03 21:07:04', '2024-03-03 21:07:04'),
(29, 4, 'Updated User Leo', '2024-03-03 21:08:52', '2024-03-03 21:08:52'),
(30, 1, 'Logged In User Leo', '2024-03-03 21:08:58', '2024-03-03 21:08:58'),
(31, 4, 'Logged In User Super Admin', '2024-03-03 21:09:12', '2024-03-03 21:09:12'),
(32, 4, 'Updated User Leo', '2024-03-03 21:09:19', '2024-03-03 21:09:19'),
(33, 4, 'Logged In User Super Admin', '2024-03-03 21:23:25', '2024-03-03 21:23:25'),
(34, 4, 'Added User Testing', '2024-03-03 21:24:11', '2024-03-03 21:24:11'),
(35, 5, 'Logged In User Testing', '2024-03-03 21:25:34', '2024-03-03 21:25:34'),
(36, 5, 'Logged In User Testing', '2024-03-03 21:28:02', '2024-03-03 21:28:02'),
(37, 5, 'Logged In User Testing', '2024-03-03 21:30:32', '2024-03-03 21:30:32'),
(38, 5, 'Logged In User Testing', '2024-03-03 21:36:20', '2024-03-03 21:36:20'),
(39, 4, 'Logged In User Super Admin', '2024-03-03 21:40:39', '2024-03-03 21:40:39'),
(40, 4, 'Added User Creo', '2024-03-03 21:41:05', '2024-03-03 21:41:05'),
(41, 6, 'Logged In User Creo', '2024-03-03 21:41:18', '2024-03-03 21:41:18'),
(42, 6, 'Logged In User Creo', '2024-03-03 21:48:21', '2024-03-03 21:48:21'),
(43, 4, 'Logged In User Super Admin', '2024-03-03 21:51:22', '2024-03-03 21:51:22'),
(44, 5, 'Logged In User Testing', '2024-03-03 21:54:41', '2024-03-03 21:54:41'),
(45, 5, 'Logged In User Testing', '2024-03-03 21:57:03', '2024-03-03 21:57:03'),
(46, 1, 'Logged In User Leo', '2024-03-03 21:57:55', '2024-03-03 21:57:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
