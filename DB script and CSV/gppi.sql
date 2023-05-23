-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2023 at 02:38 PM
-- Server version: 8.0.33
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment_statuses`
--

DROP TABLE IF EXISTS `assignment_statuses`;
CREATE TABLE IF NOT EXISTS `assignment_statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bu_depts`
--

DROP TABLE IF EXISTS `bu_depts`;
CREATE TABLE IF NOT EXISTS `bu_depts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

DROP TABLE IF EXISTS `car_brands`;
CREATE TABLE IF NOT EXISTS `car_brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_statuses`
--

DROP TABLE IF EXISTS `car_statuses`;
CREATE TABLE IF NOT EXISTS `car_statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_05_14_195752_create_roles_table', 1),
(5, '2023_05_14_195923_create_bu_depts_table', 1),
(6, '2023_05_14_200102_create_car_brands_table', 1),
(7, '2023_05_14_200138_create_models_table', 1),
(8, '2023_05_14_200603_create_mode_of_transactions_table', 1),
(9, '2023_05_14_200650_create_type_of_requests_table', 1),
(10, '2023_05_14_200728_create_statuses_table', 1),
(11, '2023_05_14_202105_create_car_statuses_table', 1),
(12, '2023_05_14_202142_create_users_table', 1),
(13, '2023_05_23_025416_create_vehicles_table', 1),
(14, '2023_05_23_030239_create_assignment_statuses_table', 1),
(15, '2023_05_23_030500_create_user_assigned_vehicles_table', 1),
(16, '2023_05_23_031737_create_request_histories_table', 1),
(17, '2023_05_23_213414_create_primary_corrective_categories_table', 1),
(18, '2023_05_23_213451_create_secondary_corrective_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
CREATE TABLE IF NOT EXISTS `models` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_brand_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `models_car_brand_id_foreign` (`car_brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_transactions`
--

DROP TABLE IF EXISTS `mode_of_transactions`;
CREATE TABLE IF NOT EXISTS `mode_of_transactions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `primary_corrective_categories`
--

DROP TABLE IF EXISTS `primary_corrective_categories`;
CREATE TABLE IF NOT EXISTS `primary_corrective_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_histories`
--

DROP TABLE IF EXISTS `request_histories`;
CREATE TABLE IF NOT EXISTS `request_histories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_assigned_vehicle_id` bigint UNSIGNED DEFAULT NULL,
  `particulars` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_transaction_id` bigint UNSIGNED DEFAULT NULL,
  `type_of_request_id` bigint UNSIGNED DEFAULT NULL,
  `quotation_amount` decimal(8,2) DEFAULT NULL,
  `fleet_nego_amount` decimal(8,2) DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` bigint UNSIGNED DEFAULT NULL,
  `date_of_submission` date DEFAULT NULL,
  `date_of_evaluation` date DEFAULT NULL,
  `date_of_approval` date DEFAULT NULL,
  `po_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `po_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `request_histories_user_assigned_vehicle_id_foreign` (`user_assigned_vehicle_id`),
  KEY `request_histories_mode_of_transaction_id_foreign` (`mode_of_transaction_id`),
  KEY `request_histories_type_of_request_id_foreign` (`type_of_request_id`),
  KEY `request_histories_status_id_foreign` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secondary_corrective_categories`
--

DROP TABLE IF EXISTS `secondary_corrective_categories`;
CREATE TABLE IF NOT EXISTS `secondary_corrective_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `primary_corrective_category_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_requests`
--

DROP TABLE IF EXISTS `type_of_requests`;
CREATE TABLE IF NOT EXISTS `type_of_requests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee-code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `bu_dept_id` bigint UNSIGNED DEFAULT NULL,
  `dl_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl_issued_date` date DEFAULT NULL,
  `dl_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_bu_dept_id_foreign` (`bu_dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_assigned_vehicles`
--

DROP TABLE IF EXISTS `user_assigned_vehicles`;
CREATE TABLE IF NOT EXISTS `user_assigned_vehicles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `vehicle_id` bigint UNSIGNED DEFAULT NULL,
  `assignment_status_id` bigint UNSIGNED DEFAULT NULL,
  `date_assigned` date NOT NULL,
  `date_returned` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_assigned_vehicles_user_id_foreign` (`user_id`),
  KEY `user_assigned_vehicles_vehicle_id_foreign` (`vehicle_id`),
  KEY `user_assigned_vehicles_assignment_status_id_foreign` (`assignment_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `plate_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint UNSIGNED DEFAULT NULL,
  `car_status_id` bigint UNSIGNED DEFAULT NULL,
  `engine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acquisition_year` year DEFAULT NULL,
  `date_acquired` date DEFAULT NULL,
  `date_due` date DEFAULT NULL,
  `lto_renewal_date` date DEFAULT NULL,
  `lto_or_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lto_cr_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vehicles_plate_no_unique` (`plate_no`),
  UNIQUE KEY `vehicles_cs_no_unique` (`cs_no`),
  KEY `vehicles_model_id_foreign` (`model_id`),
  KEY `vehicles_car_status_id_foreign` (`car_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_car_brand_id_foreign` FOREIGN KEY (`car_brand_id`) REFERENCES `car_brands` (`id`);

--
-- Constraints for table `request_histories`
--
ALTER TABLE `request_histories`
  ADD CONSTRAINT `request_histories_mode_of_transaction_id_foreign` FOREIGN KEY (`mode_of_transaction_id`) REFERENCES `mode_of_transactions` (`id`),
  ADD CONSTRAINT `request_histories_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `request_histories_type_of_request_id_foreign` FOREIGN KEY (`type_of_request_id`) REFERENCES `type_of_requests` (`id`),
  ADD CONSTRAINT `request_histories_user_assigned_vehicle_id_foreign` FOREIGN KEY (`user_assigned_vehicle_id`) REFERENCES `user_assigned_vehicles` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_bu_dept_id_foreign` FOREIGN KEY (`bu_dept_id`) REFERENCES `bu_depts` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_assigned_vehicles`
--
ALTER TABLE `user_assigned_vehicles`
  ADD CONSTRAINT `user_assigned_vehicles_assignment_status_id_foreign` FOREIGN KEY (`assignment_status_id`) REFERENCES `assignment_statuses` (`id`),
  ADD CONSTRAINT `user_assigned_vehicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_assigned_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_car_status_id_foreign` FOREIGN KEY (`car_status_id`) REFERENCES `car_statuses` (`id`),
  ADD CONSTRAINT `vehicles_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
