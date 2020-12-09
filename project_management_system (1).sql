-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2020 at 11:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `adm_role` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adm_role`, `name`, `email`, `tlp`, `alamat`, `file`, `password`, `status`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asna', 'iinasnawiyah4@gmail.com', '089765345675', 'Indramayu', '', '$2y$10$0iLjzyfp61/LEkglGOsNhOWjCXmwWcachdh2NhxHuUNqX.rMYYhoi', 'Nonaktif', NULL, NULL, NULL, NULL),
(3, 2, 'iin ', 'iinasnawiyah@gmail.com', '0895411597593', 'singaraja', '', '$2y$10$0iLjzyfp61/LEkglGOsNhOWjCXmwWcachdh2NhxHuUNqX.rMYYhoi', 'Aktif', 'admin', '0000-00-00 00:00:00', NULL, NULL),
(4, 3, 'shafa', 'failusufashafa11@gmail.com', '087654324567', 'Indramayu', '', '$2y$10$0iLjzyfp61/LEkglGOsNhOWjCXmwWcachdh2NhxHuUNqX.rMYYhoi', 'Aktif', NULL, NULL, NULL, NULL),
(14, 4, 'ari', 'arifin@gmail.com', '0897865664446', 'kaplongan', NULL, '$2y$10$0iLjzyfp61/LEkglGOsNhOWjCXmwWcachdh2NhxHuUNqX.rMYYhoi', 'Aktif', NULL, NULL, NULL, NULL),
(15, 4, 'Wantrisnadi', 'failusufashaasddasfa11@gmail.com', NULL, 'Jl. Murahnara, Sindang, Kabupaten Indramayu, Jawa Barat 45222as', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-07 20:23:13', '2020-12-07 20:23:13'),
(17, 2, 'sada', 'failusufashaasdafa11@gmail.com', NULL, 'singajaya', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-07 20:29:34', '2020-12-07 20:29:34'),
(19, 2, 'sada', 'dafa11@gmail.com', NULL, 'singajaya', NULL, '$2y$10$WlGbfx89oVGCIvQQnMnYcO9lH0WlEl0XtjDdi1P.XMHjAr4MiGqXS', 'Nonaktif', NULL, NULL, '2020-12-07 20:36:59', '2020-12-07 20:36:59'),
(30, 1, 'dsfsf', 'failusufas123123hafa11@gmail.com', NULL, 'Blok Jl. Wanasari, Karangsong, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-08 02:45:26', '2020-12-08 02:45:26'),
(31, 3, 'mnbnmbb', 'failusumnbmbmfashafa11@gmail.com', NULL, 'nbvnbvnvn', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-08 02:49:53', '2020-12-08 02:49:53'),
(33, 4, 'ade', 'failus5555ufashafa11@gmail.com', NULL, 'Lemahabang, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45212', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-08 02:58:22', '2020-12-08 02:58:22'),
(34, 4, 'aaa', 'failusufasqqhafa11@gmail.com', NULL, 'Blok Jl. Wanasari, Karangsong, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat', NULL, 'yuni', 'Aktif', NULL, NULL, '2020-12-08 03:08:55', '2020-12-08 03:08:55'),
(35, 3, 'asaaa', 'iinasnawiyaaaaaah@gmail.com', NULL, 'aaaa', NULL, '$2y$10$7cb25jnsqUVtTeuVyd5yfOY/n6QlIFJSx8byMt0PeK.C7VS2TtU7y', 'Nonaktif', NULL, NULL, '2020-12-08 03:09:31', '2020-12-08 03:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` enum('Superadmin','AdminAccount','AdminInfo','AdminProduksi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2020_12_02_035108_create_role_user_table', 1),
(38, '2020_12_02_042200_create_admin', 1),
(39, '2020_12_02_072641_create_role_admin_table', 1),
(40, '2020_12_02_081545_add_roles_to_users_table', 1),
(41, '2020_12_02_081830_add_roles_to_admin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_admin`
--

CREATE TABLE `role_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `adm_role_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_admin`
--

INSERT INTO `role_admin` (`id`, `adm_role_name`) VALUES
(1, 'Admin Utama'),
(2, 'Super_Admin'),
(3, 'Admin Produksi'),
(4, 'Admin Info');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_role_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_role_name`) VALUES
(1, 'user biasa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `user_role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'wacik', 'wacik@gmail.com', NULL, '$2y$10$0iLjzyfp61/LEkglGOsNhOWjCXmwWcachdh2NhxHuUNqX.rMYYhoi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`),
  ADD KEY `admin_adm_role_foreign` (`adm_role`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role_admin`
--
ALTER TABLE `role_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_role_foreign` (`user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `role_admin`
--
ALTER TABLE `role_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_adm_role_foreign` FOREIGN KEY (`adm_role`) REFERENCES `role_admin` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_role_foreign` FOREIGN KEY (`user_role`) REFERENCES `role_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
