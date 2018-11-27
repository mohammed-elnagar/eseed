-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 04:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eseed`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `day` date NOT NULL,
  `working_hours` int(11) NOT NULL,
  `status` enum('Present','Absent','Sick','Leave','Day','OFF') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `name`, `email`, `mobile_number`, `hire_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Imogene Hatfield', 'vymubebar@mailinator.com', '648', '1994-08-28', '2018-11-26 12:12:10', '2018-11-26 12:52:11'),
(2, 1, 'Alden Lloyd', 'tapi@mailinator.net', '504', '1979-11-07', '2018-11-26 12:20:36', '2018-11-26 12:20:36'),
(3, 1, 'Tyler Chapman', 'fizitodax@mailinator.net', '963', '2007-12-21', '2018-11-26 12:21:54', '2018-11-26 12:21:54'),
(4, 1, 'Veda Branch', 'kaqyv@mailinator.com', '412', '2009-11-06', '2018-11-26 12:23:08', '2018-11-26 12:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_11_26_093939_create_employees_table', 1),
(6, '2018_11_26_094021_create_attendances_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('HR','Employees') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohammed', 'HR', 'm.elnagar@gmail.com', '2018-11-26 06:00:22', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'rjRUGSxoFhusm4C3FCQYoXyebl2QnfDAb5s2MiSwjb6OBAezqpGPdc6amvPI', NULL, NULL),
(2, 'Tucker Adams', 'HR', 'siragita@mailinator.net', NULL, '$2y$10$o967Qm1raHHOYaTzboxT.Ovjfo78zaQAIj5TCPDAXvkpdhOIb5E22', NULL, '2018-11-26 10:32:53', '2018-11-26 10:32:53'),
(3, 'Keaton Trujillo', 'HR', 'sige@mailinator.com', NULL, '$2y$10$FfhWL/SNYv9Pv7w.GdhL5Oe6az8xzDI0zVvOIbLiqApDm5Q3UuP9a', NULL, '2018-11-26 10:35:56', '2018-11-26 10:35:56'),
(4, 'Rooney Serrano', 'HR', 'fabema@mailinator.com', NULL, '$2y$10$mv1Y7i2FIje5W1F/A/RYeeSzgFzuhqZw9VuyNLILLcgPIP0iG0RVW', NULL, '2018-11-26 10:36:09', '2018-11-26 10:36:09'),
(5, 'Jada Caldwell', 'HR', 'jewut@mailinator.com', NULL, '$2y$10$PFiJzvnSkG0nnwk9CCVhSO3.C8FO8/zoAppNBI49NaWJGRwvQ1TCm', NULL, '2018-11-26 10:37:06', '2018-11-26 10:37:06'),
(6, 'Genevieve Gallagher', 'HR', 'qagixud@mailinator.net', NULL, '$2y$10$77ZxLHOANwYr/j84qaVRh.1m0aEl/Tufz5hmIPS2ot9Dgm/wZpMj2', NULL, '2018-11-26 10:37:30', '2018-11-26 10:37:30'),
(7, 'Mohammed Elnagar', 'Employees', 'm.elnagar1@gmail.com', NULL, '$2y$10$DhlesdUDRWqcQq/qvy79Te2u8eji0ARUS62NP8DdI7iss7CIQ4Nj.', '2crcDNrPxqFuTL7xpuV979fN5ePFn3Ap018R4yASxnFcRJIJBBK5MtDyHvRL', '2018-11-26 10:44:00', '2018-11-26 10:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_mobile_number_unique` (`mobile_number`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
