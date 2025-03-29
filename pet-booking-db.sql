-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2025 at 02:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet-booking-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `booking_date` varchar(45) NOT NULL,
  `booking_days` varchar(255) NOT NULL,
  `booking_time` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_date`, `booking_days`, `booking_time`, `note`, `created_at`, `updated_at`) VALUES
(1, '03/30/2025', 'Wednesday, Thursday', 'Afternoon', 'hahaha', '2025-03-29 03:18:35', '2025-03-29 03:18:35'),
(2, '03/30/2025', 'Tuesday, Wednesday', 'Morning, Afternoon', 'awraw', '2025-03-29 03:21:57', '2025-03-29 03:21:57'),
(3, '04/16/2025', 'Saturday, Sunday', 'Afternoon, Evening', 'haha', '2025-03-29 03:23:18', '2025-03-29 03:23:18'),
(4, '04/25/2025', 'Wednesday, Thursday', 'Morning, Evening', 'wewew', '2025-03-29 03:25:28', '2025-03-29 03:25:28'),
(5, '03/30/2025', 'Wednesday, Thursday', 'Afternoon', 'sssg', '2025-03-29 03:28:35', '2025-03-29 03:28:35'),
(6, '03/31/2025', 'Tuesday, Wednesday', 'Evening', 'gggaga', '2025-03-29 03:29:56', '2025-03-29 03:29:56'),
(7, '03/30/2025', 'Wednesday, Thursday', 'Afternoon, Evening', 'sdsdsdahahaha', '2025-03-29 03:30:44', '2025-03-29 03:30:44'),
(8, '03/30/2025', 'Tuesday, Wednesday, Thursday', 'Afternoon', 'jjj', '2025-03-29 03:32:13', '2025-03-29 03:32:13'),
(9, '03/30/2025', 'Wednesday, Saturday', 'Afternoon', 'hahaha', '2025-03-29 03:39:02', '2025-03-29 03:39:02'),
(10, '03/30/2025', 'Thursday, Sunday', 'Evening', 'gsgsg', '2025-03-29 03:39:38', '2025-03-29 03:39:38'),
(11, '03/30/2025', 'Wednesday, Friday', 'Afternoon, Evening', 'dgdgd', '2025-03-29 03:40:51', '2025-03-29 03:40:51'),
(12, '03/31/2025', 'Tuesday, Wednesday, Thursday', 'Afternoon, Evening', 'gsgs', '2025-03-29 03:42:23', '2025-03-29 03:42:23'),
(13, '03/30/2025', 'Friday, Saturday, Sunday', 'Afternoon, Evening', 'gg', '2025-03-29 03:44:49', '2025-03-29 03:44:49'),
(14, '03/30/2025', 'Saturday, Sunday', 'Evening', 'gdgd', '2025-03-29 03:45:09', '2025-03-29 03:45:09'),
(15, '03/30/2025', 'Friday, Saturday', 'Evening', 'gh', '2025-03-29 03:45:49', '2025-03-29 03:45:49'),
(16, '03/31/2025', 'Thursday, Friday, Saturday', 'Afternoon, Evening', NULL, '2025-03-29 03:50:47', '2025-03-29 03:50:47'),
(17, '05/13/2025', 'Thursday, Friday, Saturday', 'Afternoon, Evening', NULL, '2025-03-29 03:51:41', '2025-03-29 03:51:41'),
(18, '03/31/2025', 'Thursday, Friday, Saturday', 'Afternoon, Evening', NULL, '2025-03-29 03:52:13', '2025-03-29 03:52:13'),
(19, '05/15/2025', 'Wednesday, Friday', 'Afternoon, Evening', NULL, '2025-03-29 03:52:31', '2025-03-29 03:52:31'),
(20, '03/30/2025', 'Wednesday, Friday, Sunday', 'Afternoon, Evening', NULL, '2025-03-29 03:52:53', '2025-03-29 03:52:53'),
(21, '03/30/2025', 'Friday, Saturday', 'Evening', 'fhfh', '2025-03-29 03:54:13', '2025-03-29 03:54:13'),
(22, '03/30/2025', 'Friday, Saturday', 'Evening', NULL, '2025-03-29 03:59:05', '2025-03-29 03:59:05'),
(23, '06/25/2025', 'Saturday, Sunday', 'Afternoon, Evening', 'sgsg', '2025-03-29 04:00:36', '2025-03-29 04:00:36'),
(24, '03/30/2025', '', 'Afternoon', NULL, '2025-03-29 04:26:53', '2025-03-29 04:26:53'),
(25, '03/30/2025', '', 'Afternoon', NULL, '2025-03-29 04:28:53', '2025-03-29 04:28:53'),
(26, '03/30/2025', 'Thursday', 'Afternoon', NULL, '2025-03-29 04:29:58', '2025-03-29 04:29:58'),
(27, '03/30/2025', '', 'Afternoon', NULL, '2025-03-29 04:30:09', '2025-03-29 04:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2025_03_29_110921_bookings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
