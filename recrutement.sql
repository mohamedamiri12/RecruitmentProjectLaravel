-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recrutement`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `is_suspended`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'amiri', 'BENIAICHA', 'amine@gmail.com', 'amine123', 61729317, 0, 'FSDFQ', '2021-03-31 15:30:25', '2021-04-19 22:43:00', NULL),
(2, 'khalid', 'faza', 'r@gmail.com', '2', 41413143, 0, '413143', '2021-03-31 15:30:25', '2021-04-19 21:06:47', NULL),
(3, 'amine', 'amori', 'hello@gmail.com', 'azfjlze', 34113413, 0, NULL, '2021-04-19 21:13:53', '2021-04-19 21:56:03', NULL),
(4, 'clementine', 'bauch', 'bauch@gmail.com', 'bauch123', 111112123, 0, NULL, NULL, NULL, NULL),
(5, 'patricia', 'lebsack', 'patrica@gmail.com', 'patrica123', 98732732, 0, NULL, '2021-04-21 00:16:53', NULL, NULL),
(6, 'dennis', 'checklist', 'dennis@gmail.com', 'dennis123', 732321122, 0, NULL, '2021-04-20 00:17:50', NULL, NULL),
(7, 'victor', 'vince', 'victor@gmail.com', 'victor123', 983327232, 0, NULL, '2021-04-27 00:17:50', NULL, NULL),
(8, 'tommy', 'vercitti', 'tommy@gmail.com', 'tommy123', 525367899, 0, NULL, '2021-04-20 00:19:06', NULL, NULL),
(9, 'toni', 'cipriani', 'toni@gmail.com', 'toni123', 732324323, 0, NULL, '2021-04-20 00:19:06', NULL, NULL),
(10, 'claude', 'speed', 'claude@gmail.com', 'claude123', 932782368, 0, NULL, '2021-04-20 00:20:16', NULL, NULL),
(11, 'yassir', 'awzal', 'yassir@gmail.Com', 'yassir123', 732862387, 0, NULL, '2021-04-20 00:20:16', NULL, NULL),
(12, 'rayan', 'dakhouch', 'rayan@gmail.com', 'rayan213', 746397429, 0, NULL, '2021-04-21 00:21:24', NULL, NULL),
(13, 'ossamma', 'bradda', 'osama@gmail.com', 'ossama123', 632866832, 0, NULL, '2021-04-28 00:21:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `salary` double NOT NULL,
  `tgm` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_suspended` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `salary`, `tgm`, `status`, `is_suspended`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'el attar', 'mohamed', 'amiri@gmailm.coçm', 'hihihi', 732434547, 98989, 1.3, 'open', 0, '2021-03-31 15:30:25', '2021-04-19 22:46:04', NULL),
(2, 'ouabouch', 'youssef', 'ysf@gmail.com', 'ouabouch@gmail.com', 89898976, 313114, 3.3, 'open', 0, '2021-03-31 15:30:25', '2021-03-31 15:31:11', NULL),
(3, 'mark', 'ruffalo', 'mark@gmail.com', 'mark123', 41413143, 34334, 3.4, 'working', 0, '2021-03-31 15:30:25', '2021-04-19 22:46:35', NULL),
(4, 'youssef', 'maanawi', 'maaanawi@gmail.com', 'maanawi123', 2123423452, 8000, 1.3, 'validé', 0, '2021-04-20 00:22:35', NULL, NULL),
(5, 'mohamed', 'zakhnini', 'mohamed@gmail.Com', 'mohamed123', 632323234, 11000, 2.3, 'non validé', 0, '2021-04-20 00:23:40', NULL, NULL),
(6, 'ibrahim', 'chouka', 'chouka@gmail.com', 'chouka123', 874386432, 20000, 2.2, 'validé', 0, '2021-04-19 00:23:40', NULL, NULL),
(7, 'aimad', 'bani', 'bani@gmail.com', 'bani213', 394798649, 3000, 2.3, 'validé', 0, '2021-04-20 00:25:36', NULL, NULL),
(8, 'souhail', 'choaidb', 'souhail@gmail.com', 'souhaol123', 812037194, 45000, 1.9, 'non validé', 0, '2021-04-20 00:25:36', NULL, NULL),
(9, 'nabil', 'jrdan', 'nabil@gmail.com', 'nabil123', 9032964, 9000, 3.3, 'non validé', 0, '2021-04-20 00:27:09', NULL, NULL),
(10, 'jamal', 'ahlawa', 'jamal@gmail.com', 'jamali123', 93729428, 6000, 9.9, 'validé', 0, '2021-04-20 00:27:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skills`
--

CREATE TABLE `candidate_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Backend', 'BackEnd Section', '2021-03-31 15:30:25', '2021-03-31 15:31:11', NULL),
(2, 'FrontEnd', 'FrontEnd section', '2021-03-31 15:30:25', '2021-03-25 15:30:25', NULL),
(3, 'FullStack', 'FrontEnd + BackEndss', '2021-04-19 22:55:11', '2021-04-19 23:01:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_skills`
--

CREATE TABLE `category_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `is_suspended` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `is_suspended`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'said', 'ouami', 'said@gmail.com', 'said123', 661918877, 0, '2021-03-31 15:30:25', '2021-04-19 23:23:25', NULL),
(2, 'hicham', 'amiri', 'hicham@gmail.com', 'hicham123', 347174310, 0, '2021-04-19 23:02:53', '2021-04-20 00:06:08', NULL),
(3, 'aziz', 'ait baha', 'aziz@gmail.com', 'aziz123', 6618273, 0, NULL, '2021-04-19 23:25:28', NULL),
(4, 'nassir', 'boghal', 'nassir@gmail.com', 'nassir123', 634323243, 0, '2021-04-20 00:28:50', NULL, NULL),
(5, 'othman', 'ahmid', 'othman@gmail.com', 'othman123', 67777765, 0, '2021-04-20 00:29:29', NULL, NULL),
(6, 'hamza', 'benlhajj', 'hamza@gmail.com', 'hamza123', 676736253, 0, '2021-04-20 00:29:29', NULL, NULL),
(7, 'younnes', 'el hachimi', 'younnes@gmail.com', 'younes123', 876655343, 0, '2021-04-20 00:30:51', NULL, NULL),
(8, 'jamal', 'mouhaddab', 'jamal@gmail.com', 'jamal123', 661918888, 0, '2021-04-21 00:31:32', NULL, NULL),
(9, 'achraf', 'bouchrine', 'achraf@gmail.com', 'achraf123', 983327232, 0, '2021-04-20 00:31:32', NULL, NULL),
(10, 'hamid', 'belwaz', 'hamid@gmail.com', 'hamid133', 732324456, 0, '2021-04-20 00:32:42', NULL, NULL),
(11, 'yassine', 'dougnaoi', 'yassin@gmail.com', 'yassin123', 635248765, 0, '2021-04-20 00:32:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start-date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `client_id`, `candidate_id`, `type`, `start-date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'cdd', '2021-04-20', 'backedend job', NULL, NULL, NULL),
(2, 2, 3, 'cdd', '2021-04-21', 'recreutment program', NULL, NULL, NULL),
(3, 3, 2, 'open', '2021-04-22', 'to do list app', '2021-04-16 23:27:59', '2021-04-21 23:27:59', NULL),
(4, 10, 6, '1', '2021-04-20', 'application de gestion de location de voitures', '2021-04-20 00:34:24', NULL, NULL),
(5, 6, 5, 'ffd', '2021-04-13', 'application de vente des vettments en ligne', '2021-04-20 00:34:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contract_payments`
--

CREATE TABLE `contract_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'contract',
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
(4, '2021_04_15_213339_create_client_table', 1),
(5, '2021_04_15_213517_create_candidate_table', 1),
(6, '2021_04_15_214000_create_category_table', 1),
(7, '2021_04_15_214118_create_skill_table', 1),
(8, '2021_04_15_214539_create_contract_table', 1),
(9, '2021_04_15_214916_create_mission_table', 1),
(10, '2021_04_15_215525_create_rating_table', 1),
(11, '2021_04_15_230249_create_candidate_skill_table', 1),
(12, '2021_04_15_231241_update_candidate_skill_table', 1),
(13, '2021_04_15_232347_create_category_skill_table', 1),
(14, '2021_04_15_233005_update_categoy_skill_table', 1),
(15, '2021_04_15_233422_update_contract_table', 1),
(16, '2021_04_16_000049_update_missions_table', 1),
(17, '2021_04_16_000739_update_rating_table', 1),
(18, '2021_04_16_001621_create_mission_payement_table', 1),
(19, '2021_04_16_002304_update_mission_payement_table', 1),
(20, '2021_04_16_002450_create_contract_payement_table', 1),
(21, '2021_04_16_002728_update_contract_payement_table', 1),
(22, '2021_04_19_203547_add_column_deleted_at', 2),
(23, '2021_04_19_222016_add_column_deleted_at_cand', 3),
(24, '2021_04_19_225205_add_column_deleted_at_cat', 4),
(25, '2021_04_19_230440_add_column_deleted_at_clients', 5),
(26, '2021_04_19_232916_add_column_deleted_at_contracts', 6),
(27, '2021_04_19_233444_add_column_deleted_at_missions', 7),
(28, '2021_04_19_234003_add_column_deleted_at_skills', 8);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start-date` date NOT NULL,
  `end-date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `client_id`, `candidate_id`, `type`, `start-date`, `end-date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'cdd', '2021-04-19', '2021-04-24', 'a medical agency app', '2021-04-19 23:31:33', '2021-04-19 23:31:33', NULL),
(2, 2, 2, 'cdd', '2021-04-20', '2021-04-22', 'a house management web application', '2021-04-21 23:32:17', '2021-04-21 23:32:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mission_payments`
--

CREATE TABLE `mission_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mission',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission_id` bigint(20) UNSIGNED NOT NULL,
  `mission-rating` double NOT NULL,
  `communication-rating` double NOT NULL,
  `service-rating` double NOT NULL,
  `candidate-rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'skill 6', '2021-04-19 23:38:47', '2021-04-19 23:43:17', NULL),
(2, 'skill 2', '2021-04-28 23:39:04', '2021-04-28 23:39:04', NULL),
(3, 'skill 3', '2021-04-27 23:39:04', '2021-04-27 23:39:04', NULL),
(4, 'skill 4', '2021-04-19 23:43:01', '2021-04-19 23:44:01', NULL),
(5, 'Skill 5', '2021-04-20 00:36:18', NULL, NULL),
(6, 'Skill 6', '2021-04-28 00:36:18', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrators_email_unique` (`email`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `candidates_email_unique` (`email`);

--
-- Indexes for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_skills_candidate_id_foreign` (`candidate_id`),
  ADD KEY `candidate_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_skills`
--
ALTER TABLE `category_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_skills_category_id_foreign` (`category_id`),
  ADD KEY `category_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracts_candidate_id_foreign` (`candidate_id`),
  ADD KEY `contracts_client_id_foreign` (`client_id`);

--
-- Indexes for table `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contract_payments_contract_id_foreign` (`contract_id`);

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
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `missions_candidate_id_foreign` (`candidate_id`),
  ADD KEY `missions_client_id_foreign` (`client_id`);

--
-- Indexes for table `mission_payments`
--
ALTER TABLE `mission_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mission_payments_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_mission_id_foreign` (`mission_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_skills`
--
ALTER TABLE `category_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contract_payments`
--
ALTER TABLE `contract_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mission_payments`
--
ALTER TABLE `mission_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  ADD CONSTRAINT `candidate_skills_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `candidate_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `category_skills`
--
ALTER TABLE `category_skills`
  ADD CONSTRAINT `category_skills_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `contracts_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `contract_payments`
--
ALTER TABLE `contract_payments`
  ADD CONSTRAINT `contract_payments_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`);

--
-- Constraints for table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`),
  ADD CONSTRAINT `missions_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `mission_payments`
--
ALTER TABLE `mission_payments`
  ADD CONSTRAINT `mission_payments_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
