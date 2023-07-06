-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 07:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesawat_id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `Nama`, `code`, `pesawat_id`, `from`, `to`, `date`, `time`, `email`, `created_at`, `updated_at`) VALUES
(7, 'smith', 'QG-712', 5, 'BDO', 'HLP', '2021-05-06', '14:38', 'smith@moonton.id', '2021-05-04 23:37:59', '2021-05-04 23:39:48'),
(8, 'harith', 'JT-399', 11, 'BTH', 'CGK', '2021-05-07', '00:00', 'harith@moonton.id', '2021-05-04 23:39:21', '2021-05-04 23:39:21'),
(9, 'wilm', 'XT-7680', 8, 'PKU', 'KNO', '2021-05-08', '18:45', 'wilm@admin.co', '2021-05-04 23:40:44', '2021-05-04 23:40:44'),
(11, 'smith', 'QG-726', 7, 'BDO', 'HLP', '2021-06-03', '15:21', 'harith@moonton.id', '2021-05-05 20:16:12', '2021-05-05 20:31:37'),
(12, 'smith', 'QG-724', 5, 'PKU', 'CGK', '2021-05-20', '16:25', 'komunikasigmahkteratai@gmail.com', '2021-05-05 20:19:27', '2021-05-05 20:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `population`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', '1', NULL, '2021-04-26 06:00:02'),
(2, 'Singapore', '3500000', NULL, '2021-04-26 05:58:26'),
(4, 'USA', '2', '2021-04-26 05:03:21', '2021-04-26 05:14:53'),
(5, 'Thailand', '23455', '2021-04-26 05:16:31', '2021-04-26 05:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baggage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flight`, `code`, `from`, `to`, `date`, `time`, `price`, `baggage`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Citilink', 'QG-712', 'PKU', 'CGK', '2021-03-04', '07:55 - 09:15', '537500', '20 Kg', 1, NULL, '2021-05-05 22:44:34'),
(5, 'Citilink', 'QG-724', 'CGK', 'SUB', '2021-04-03', '18:40 - 20:20', '537500', '20 Kg', 0, NULL, NULL),
(6, 'Citilink', 'QG-726', 'BDO', 'PKU', '2021-05-30', '19:30 - 21:05', '750000', '20 Kg', 0, NULL, NULL),
(7, 'Airasia', 'XT-7680', 'CGK', 'SUB', '2021-04-13', '06:50 - 08:20', '475220', '15 Kg', 0, NULL, NULL),
(8, 'Sriwijaya', 'PK-354', 'CGK', 'DPS', '2021-03-23', '19:45 - 21:20', '475220', '15 Kg', 0, NULL, NULL),
(11, 'as', 'QG-712', 'PKU', 'CGK', '2021-04-30', '14:43', 'sfae', '19 Kg', 0, '2021-05-05 22:42:11', '2021-05-05 22:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `flight_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2021_03_24_085233_create_mahasiswa_table', 1),
(19, '2021_03_24_094731_create_user_table', 1),
(20, '2021_03_24_101354_create_jadwal_table', 2),
(21, '2021_03_29_104526_create_penggunas_table', 2),
(22, '2021_04_01_043318_create__news_table', 3),
(23, '2021_04_01_053741_create__news_table', 4),
(24, '2021_04_06_035316_add_category_to_news_table', 5),
(25, '2021_04_06_042537_add_status_to_news_table', 6),
(26, '2021_04_06_062601_create_countries_table', 7),
(27, '2021_04_06_062939_add_country_id_to_news_table', 8),
(28, '2021_04_06_073438_add_country_id_to_new_table', 9),
(29, '2021_04_14_040925_create_flights_table', 10),
(30, '2021_04_14_060519_create_penumpangs_table', 11),
(31, '2021_04_14_080244_create_bookings_table', 12),
(32, '2021_04_22_073413_add_population_to_countries_table', 13),
(33, '2021_05_05_035501_create_pesawats_table', 14),
(34, '2021_05_05_040909_add_pesawat_id_to_booking_table', 15),
(35, '2021_05_06_023643_add_pesawat_id_to_flight_table', 16),
(36, '2021_05_06_045808_add_status_to_flight_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `status`, `category`, `country_id`, `content`, `created_at`, `updated_at`) VALUES
(3, 'admin', 1, 'Sports', 2, 'admin', '2021-03-31 23:20:55', '2021-04-07 23:29:30'),
(5, 'admin1', 1, 'Sports', 1, 'saya', '2021-04-05 21:46:11', '2021-04-06 00:56:49'),
(6, 'harith', 1, 'Sports', 1, 'a', '2021-04-07 23:54:20', '2021-04-07 23:54:20'),
(7, 'new', 1, 'Politics', 2, 's', '2021-04-07 23:59:36', '2021-04-07 23:59:36'),
(8, 'layla', 0, 'Sports', 1, 'ahfi', '2021-04-08 00:21:31', '2021-04-08 00:21:31'),
(9, 'bob', 1, 'Sports', 5, 'bob ter noob', '2021-04-26 06:00:42', '2021-04-26 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kunywm@gmail.com', '$2y$10$m/MHcr6PjAz/gE0bLmH3..czxA6gSbtwsrFlKTQ9w9vZcMVlnjBwG', '2021-05-03 19:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama`, `username`, `password`, `email`, `jenis_kelamin`, `agama`, `created_at`, `updated_at`) VALUES
(1, 'Yizreel Manurung', 'wilm', '123456', '1981022@unai.edu', 'Laki-Laki', 'Kristen Protestan', NULL, NULL),
(2, 'John Doe', 'john', '123456', 'johndoe@unai.edu', 'Laki Laki', 'Islam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesawats`
--

CREATE TABLE `pesawats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesawat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesawat_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesawats`
--

INSERT INTO `pesawats` (`id`, `pesawat_name`, `pesawat_code`, `created_at`, `updated_at`) VALUES
(5, 'Citilink', 'QG-712', '2021-05-04 23:22:26', '2021-05-04 23:22:26'),
(6, 'Citilink', 'QG-724', '2021-05-04 23:22:48', '2021-05-04 23:22:48'),
(7, 'Citilink', 'QG-726', '2021-05-04 23:23:02', '2021-05-04 23:23:02'),
(8, 'Airasia', 'XT-7680', '2021-05-04 23:23:18', '2021-05-04 23:23:18'),
(9, 'Sriwijaya', 'PK-354', '2021-05-04 23:23:34', '2021-05-04 23:23:34'),
(10, 'Garuda', 'GA-187', '2021-05-04 23:28:58', '2021-05-04 23:28:58'),
(11, 'Lion Air', 'JT-399', '2021-05-04 23:29:23', '2021-05-04 23:29:23'),
(12, 'Wings Air', 'WI-1262', '2021-05-04 23:29:50', '2021-05-04 23:29:50'),
(15, 'Philipphine Airlines', 'PAL-267', '2021-05-05 20:42:29', '2021-05-05 20:42:29'),
(16, 'Batik Air', 'BTK-135', '2021-05-05 20:43:04', '2021-05-05 20:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomortiket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yizreel', '1981022@unai.edu', NULL, '$2y$10$GN1LJjIYgfzePXR5eeldTee1570y/qQOoe3ldg2dlXizx0NPjR10i', 'pSB9C7Hn1RZHKA5VZJmSPNi6u4z0nKtGwS8RBCijlWmvCK4L8AFp22fl6d8U', '2021-04-07 22:22:07', '2021-04-07 22:22:07'),
(2, 'kunywm', 'kunywm@gmail.com', NULL, '$2y$10$xJcnDtT9P7rt7nf5QVK2Hee2UFGDWllA0tAtMbP1GkMCHZHjwRGZm', NULL, '2021-05-03 19:02:28', '2021-05-03 19:02:28'),
(3, 'admin', 'admin@admin.co', NULL, '$2y$10$UOvs.6xf1ntu7q9QldYY0O0SeOTVx0cckKA0vJl6JPr4.p1gq9Y/S', NULL, '2021-05-04 20:49:20', '2021-05-04 20:49:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesawats`
--
ALTER TABLE `pesawats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesawats`
--
ALTER TABLE `pesawats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
