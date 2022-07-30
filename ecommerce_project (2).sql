-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart_models`
--

CREATE TABLE `addtocart_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_models`
--

CREATE TABLE `bank_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_no` bigint(255) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expair_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_models`
--

INSERT INTO `bank_models` (`id`, `first_name`, `last_name`, `full_name`, `email`, `phone`, `birth_date`, `age`, `branch_name`, `card_no`, `city`, `expair_date`, `cvv_no`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', 'abc@gmail.com', 1723, '2022-07-23', 22, 'a', 1, 'a', '2022-07-22', 22, '2022-07-14 00:31:58', '2022-07-14 00:31:58'),
(2, '1', '2', '3', 'oytizo.bd@gmail.com', 5, '2022-07-16', 6, '7', 8, '9', '2022-07-22', 22, '2022-07-14 23:21:23', '2022-07-14 23:21:23'),
(3, 'a', 'a', 'a', 'oytizo.bd@gmail.com', 1723244858, '2022-07-22', 22, 'dhaka', 1, 'dhaka', '2022-07-30', 1111, '2022-07-17 10:48:50', '2022-07-17 10:48:50'),
(4, 'ahsan', 'Arafat', 'arfaat', 'oytizo.bd@gmail.com', 1723244858, '2022-07-20', 22, 'dhaka', 0, 'dhaka', '2022-07-21', 1111, '2022-07-17 23:01:04', '2022-07-17 23:01:04'),
(5, 'ahsan', 'arafat', 'ahsan arafat', 'oytizo.bd@gmail.com', 1703677178, '2022-07-20', 22, 'dhaka', 1111111111111111, 'dhaka', '2022-07-21', 1111, '2022-07-17 23:03:33', '2022-07-17 23:03:33'),
(6, 'hasan', 'islam', 'hasan islam', 'hasan@gmail.com', 1723244858, '2022-07-14', 22, 'nilkhet', 2222222222222222, 'dhaka', '2022-07-26', 2222, '2022-07-24 21:50:34', '2022-07-24 21:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories_models`
--

CREATE TABLE `categories_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_models`
--

INSERT INTO `categories_models` (`id`, `categories`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', 1, '2022-06-19 03:04:44', '2022-07-28 05:05:34'),
(2, 'Phone', 1, '2022-06-19 03:11:59', '2022-07-28 05:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_models`
--

CREATE TABLE `contact_us_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_models`
--

INSERT INTO `contact_us_models` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan', 'oyti@gmail.com', 1723244858, 'Hay This is oyrizo', '2022-06-20 14:05:29', NULL, NULL),
(3, 'ahsan', 'oyti@gmail.com', 9995555, 'uhuuuy', NULL, '2022-06-25 06:51:59', '2022-06-25 06:51:59'),
(4, 'ahsan', 'oyti@gmail.com', 9995555, 'ggcgcgvhv', NULL, '2022-06-25 06:53:20', '2022-06-25 06:53:20'),
(5, 'oytizo', 'sony@gmail.com', 9995555, 'dsafgsahreujrtityioto', '2022-06-25 13:11:35', '2022-06-25 07:11:35', '2022-06-25 07:11:35'),
(6, 'ahsan', 'oytizo.bd@gmail.com', 1723244858, 'this is a comment', '2022-07-26 14:38:11', '2022-07-26 08:38:11', '2022-07-26 08:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_models`
--

CREATE TABLE `customer_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_19_060117_create_categories_models_table', 2),
(6, '2022_06_19_101817_create_product_models_table', 3),
(7, '2022_06_20_115516_create_contact_us_models_table', 4),
(8, '2022_06_22_043745_create_customer_models_table', 5),
(9, '2022_06_22_115130_create_addtocart_models_table', 6),
(10, '2022_06_25_140834_create_wishlist_models_table', 7),
(11, '2022_06_30_044516_create_order_models_table', 8),
(12, '2022_07_09_063649_create_bank_models_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order_models`
--

CREATE TABLE `order_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_models`
--

INSERT INTO `order_models` (`id`, `name`, `email`, `u_id`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(34, 'hhk77', 'oytd@gmail.com', 7, '44444444444', 0, '93 B, New Eskaton Road', 'Pending', '62e3d0f9798b0', 'BDT', NULL, NULL),
(35, 'hhk77', 'oytd@gmail.com', 7, '44444444444', 0, '93 B, New Eskaton Road', 'Pending', '62e3d232883d0', 'BDT', NULL, NULL),
(36, 'ahsan', 'oytizo.bd@gmail.com', 7, '01723244858', 0, '93 B, New Eskaton Road', 'Pending', '62e4115c30f40', 'BDT', '2022-07-29 10:57:00', '2022-07-29 10:57:00');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_models`
--

CREATE TABLE `product_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrp` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `qnt` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_models`
--

INSERT INTO `product_models` (`id`, `cat_id`, `name`, `mrp`, `price`, `qnt`, `image`, `short_desc`, `meta_title`, `meta_desc`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'shirt', 500000.00, 5500.00, 50, '24765.jpg', 'This is shirt', NULL, NULL, NULL, '1', '2022-06-19 06:12:24', '2022-07-28 05:05:34'),
(3, 1, 'T-Shirt', 5000.00, 5500.00, 48, '84640.jpg', 'this is a shirt', NULL, NULL, NULL, '1', '2022-06-21 00:31:20', '2022-07-28 05:05:34'),
(4, 1, 'T-Shirt', 5000.00, 5500.00, 4, '82554.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-06-21 00:31:58', '2022-07-28 05:05:34'),
(5, 1, 'T-Shirt', 5000.00, 5500.00, 1, '90538.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-06-21 00:32:27', '2022-07-28 05:05:34'),
(6, 1, 'T-Shirt', 5000.00, 5500.00, 5, '75900.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-06-21 00:33:21', '2022-07-28 05:05:34'),
(7, 1, 'T-Shirt', 5000.00, 5500.00, 5, '84332.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-06-21 00:33:52', '2022-07-28 05:05:34'),
(8, 2, 'iphone', 5000.00, 5500.00, 5, '55050.png', 'this is a phone', NULL, NULL, NULL, '1', '2022-06-21 00:34:42', '2022-07-28 05:26:43'),
(9, 2, 'iphone', 5000.00, 5500.00, 5, '27510.png', 'this is a phone', NULL, NULL, NULL, '1', '2022-06-21 00:35:45', '2022-07-28 05:26:43'),
(10, 2, 'iphone', 5000.00, 5500.00, 50, '19985.png', 'this is a phone', NULL, NULL, NULL, '1', '2022-06-21 00:36:36', '2022-07-28 05:26:43'),
(11, 1, 'T-Shirt', 5000.00, 5500.00, 4, '44119.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-07-08 23:35:36', '2022-07-28 05:05:34'),
(12, 1, 'T-Shirt', 200.00, 250.00, 42, '95549.jpg', 'this is a t-shirt', NULL, NULL, NULL, '1', '2022-07-08 23:36:30', '2022-07-28 05:05:34'),
(13, 2, 'iphone', 5000.00, 5500.00, 8, '40730.png', 'this is a iphone', NULL, NULL, NULL, '1', '2022-07-08 23:44:44', '2022-07-28 05:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahsan', 'oytizo.bd@gmail.com', 1, NULL, '$2y$10$.3Tj3OyIQ3YjNUiBtjYq0eesQaX4F8dZNltUG34lKfQ0PafCWucSS', NULL, '2022-06-18 23:13:33', '2022-06-18 23:13:33'),
(7, 'ahsan', 'abc@gmail.com', 3, NULL, '$2y$10$.KHdq3cnCly5zy3Qmo5BfeuoGG.g8/CymGrq64yM3pRuIA5M6MMhy', NULL, '2022-06-22 05:44:46', '2022-06-22 05:44:46'),
(30, 'ahsan', 'sony@gmail.com', 1, NULL, '$2y$10$K0vJGsw5wyqKwGOyrwk6N.hyQUQLPX6o/Jr4w56LaW3NlVBu726ZS', NULL, '2022-07-08 06:27:54', '2022-07-08 06:27:54'),
(31, 'ahsan', 'abcd@gmail.com', 1, NULL, '$2y$10$c0Yn7psbpu/QK45mmqY/qOaQw86TSRwo2lYPfDju/AUHMBJjREJyy', NULL, '2022-07-08 23:27:37', '2022-07-08 23:27:37'),
(32, 'ahsan', 'ab@gmail.com', 3, NULL, '$2y$10$VURwTdoehFkxmKZekP79POFUvSzbUuodX4T6KfUhpBMvCbgqfPFZm', NULL, '2022-07-08 23:28:13', '2022-07-08 23:28:13'),
(33, 'ahsan', 'sony1@gmail.com', 3, NULL, '$2y$10$YB0Um/Xml8207GuDXwLubuyWJfkOlVs2fSbk.RqMea8GxMdR5SGLW', NULL, '2022-07-24 21:23:45', '2022-07-24 21:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_models`
--

CREATE TABLE `wishlist_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist_models`
--

INSERT INTO `wishlist_models` (`id`, `user_id`, `p_id`, `qtn`, `created_at`, `updated_at`) VALUES
(10, 1, 13, 1, '2022-07-26 08:40:29', '2022-07-26 08:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart_models`
--
ALTER TABLE `addtocart_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_models`
--
ALTER TABLE `bank_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_models`
--
ALTER TABLE `categories_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_models`
--
ALTER TABLE `contact_us_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_models`
--
ALTER TABLE `customer_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_models_email_unique` (`email`);

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
-- Indexes for table `order_models`
--
ALTER TABLE `order_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist_models`
--
ALTER TABLE `wishlist_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart_models`
--
ALTER TABLE `addtocart_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `bank_models`
--
ALTER TABLE `bank_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories_models`
--
ALTER TABLE `categories_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us_models`
--
ALTER TABLE `contact_us_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_models`
--
ALTER TABLE `customer_models`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_models`
--
ALTER TABLE `order_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `wishlist_models`
--
ALTER TABLE `wishlist_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
