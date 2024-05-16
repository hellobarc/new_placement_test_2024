-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 06:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_test_2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_bundles`
--

CREATE TABLE `course_bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_bundle` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_bundles`
--

INSERT INTO `course_bundles` (`id`, `course_bundle`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A1-A2', 'active', NULL, NULL),
(2, 'B1-B2', 'active', NULL, NULL),
(3, 'B2-C1', 'active', NULL, NULL),
(4, 'A2-B2', 'active', NULL, NULL),
(5, 'B1-C1', 'active', NULL, NULL),
(6, 'A1-B2', 'active', NULL, NULL),
(7, 'A2-C1', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_prices`
--

CREATE TABLE `course_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` int(11) NOT NULL,
  `course_level` enum('a1','a2','b1','b2','c1','c2') NOT NULL,
  `package` enum('standard','regular','privileged') NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `individual_price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `offered_price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_prices`
--

INSERT INTO `course_prices` (`id`, `bundle_id`, `course_level`, `package`, `duration`, `individual_price`, `discount`, `offered_price`, `total_price`, `created_at`, `updated_at`) VALUES
(2, 2, 'b1', 'regular', '1month+', '11999', NULL, NULL, '23998', '2024-02-26 22:58:37', '2024-02-26 22:58:37'),
(3, 2, 'b2', 'regular', '1month+', '11999', NULL, NULL, '23998', '2024-02-26 22:59:31', '2024-02-26 22:59:31'),
(4, 2, 'b1', 'standard', NULL, NULL, '60%', '4799', '11999', '2024-02-26 23:03:30', '2024-02-26 23:03:30'),
(5, 2, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '16798', '2024-02-26 23:04:08', '2024-02-26 23:04:08'),
(6, 2, 'b1', 'privileged', NULL, NULL, '60%', '5199', '13999', '2024-02-26 23:07:41', '2024-02-26 23:07:41'),
(7, 2, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '13999', '2024-02-26 23:08:22', '2024-02-26 23:08:22'),
(8, 1, 'a1', 'regular', '1month+', '9999', NULL, NULL, '19998', '2024-02-26 23:18:44', '2024-02-26 23:18:44'),
(9, 1, 'a2', 'regular', '1month+', '9999', NULL, NULL, '19998', '2024-02-26 23:21:06', '2024-02-26 23:21:06'),
(10, 1, 'a1', 'standard', NULL, NULL, '48%', '5199', '13198', '2024-02-26 23:22:13', '2024-02-26 23:22:13'),
(11, 1, 'a2', 'standard', NULL, '7999', '20%', '7999', '7999', '2024-02-26 23:22:49', '2024-02-27 02:21:12'),
(12, 1, 'a1', 'privileged', NULL, NULL, '48%', '5199', '11999', '2024-02-26 23:23:28', '2024-02-26 23:23:28'),
(13, 1, 'a2', 'privileged', NULL, NULL, '20%', '7999', '11999', '2024-02-26 23:24:02', '2024-02-26 23:24:02'),
(14, 6, 'a1', 'regular', '1month+', '9999', NULL, NULL, '43996', '2024-02-26 23:25:27', '2024-02-26 23:25:27'),
(15, 6, 'a2', 'regular', '1month+', '9999', NULL, NULL, '43996', '2024-02-26 23:25:52', '2024-02-26 23:25:52'),
(16, 6, 'b1', 'regular', '1month+', '11999', NULL, NULL, '43996', '2024-02-26 23:26:28', '2024-02-26 23:26:28'),
(17, 6, 'b2', 'regular', '1month+', '11999', NULL, NULL, '43996', '2024-02-26 23:27:34', '2024-02-26 23:27:34'),
(18, 6, 'a1', 'standard', NULL, NULL, '48%', '5199', '29996', '2024-02-26 23:28:34', '2024-02-26 23:28:34'),
(19, 6, 'a2', 'standard', NULL, NULL, '20%', '7999', '29996', '2024-02-26 23:29:17', '2024-02-26 23:29:17'),
(20, 6, 'b1', 'standard', NULL, NULL, '60%', '4799', '29996', '2024-02-26 23:29:50', '2024-02-26 23:29:50'),
(21, 6, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '29996', '2024-02-26 23:30:48', '2024-02-26 23:30:48'),
(22, 6, 'a1', 'privileged', NULL, NULL, '48%', '5199', '23996', '2024-02-26 23:31:45', '2024-02-26 23:31:45'),
(23, 6, 'a2', 'privileged', NULL, NULL, '20%', '7999', '23996', '2024-02-26 23:32:09', '2024-02-26 23:32:09'),
(24, 6, 'b1', 'privileged', NULL, NULL, '60%', '4799', '23996', '2024-02-26 23:32:34', '2024-02-26 23:32:34'),
(25, 6, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '23996', '2024-02-26 23:33:57', '2024-02-26 23:33:57'),
(26, 4, 'a2', 'regular', '1month+', '9999', NULL, NULL, '33997', '2024-02-26 23:37:54', '2024-02-26 23:37:54'),
(27, 4, 'b1', 'regular', '1month+', '11999', NULL, NULL, '33997', '2024-02-26 23:38:10', '2024-02-26 23:38:10'),
(28, 4, 'b2', 'regular', '1month+', '11999', NULL, NULL, '33997', '2024-02-26 23:38:32', '2024-02-26 23:38:32'),
(29, 4, 'a2', 'standard', NULL, NULL, '20%', '7999', '24797', '2024-02-26 23:39:05', '2024-02-26 23:39:05'),
(30, 4, 'b1', 'standard', NULL, NULL, '60%', '4799', '11999', '2024-02-26 23:39:26', '2024-02-26 23:39:26'),
(31, 4, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '24797', '2024-02-26 23:39:46', '2024-02-26 23:39:46'),
(32, 4, 'a2', 'privileged', NULL, NULL, '20%', '7999', '19999', '2024-02-26 23:40:49', '2024-02-26 23:40:49'),
(33, 4, 'b1', 'privileged', NULL, NULL, '60%', '4799', '19999', '2024-02-26 23:41:16', '2024-02-26 23:41:16'),
(34, 4, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '19999', '2024-02-26 23:41:37', '2024-02-26 23:41:37'),
(35, 7, 'a2', 'regular', '1month+', '9999', NULL, NULL, '49997', '2024-02-26 23:42:17', '2024-02-26 23:42:17'),
(36, 7, 'b1', 'regular', '1month+', '11999', NULL, NULL, '49997', '2024-02-26 23:42:39', '2024-02-26 23:42:39'),
(37, 7, 'b2', 'regular', '1month+', '11999', NULL, NULL, '49997', '2024-02-26 23:43:26', '2024-02-26 23:43:26'),
(38, 7, 'c1', 'regular', '1month+', '15999', NULL, NULL, '49997', '2024-02-26 23:43:45', '2024-02-26 23:43:45'),
(39, 7, 'a2', 'standard', NULL, NULL, '20%', '7999', '31197', '2024-02-26 23:44:18', '2024-02-26 23:44:18'),
(40, 7, 'b1', 'standard', NULL, NULL, '60%', '4799', '31197', '2024-02-26 23:44:51', '2024-02-26 23:44:51'),
(41, 7, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '31197', '2024-02-26 23:45:33', '2024-02-26 23:45:33'),
(42, 7, 'c1', 'standard', NULL, NULL, '60%', '6400', '31197', '2024-02-26 23:45:58', '2024-02-26 23:45:58'),
(43, 7, 'a2', 'privileged', NULL, NULL, '20%', '7999', '24999', '2024-02-26 23:46:35', '2024-02-26 23:46:35'),
(44, 7, 'b1', 'privileged', NULL, NULL, '60%', '4799', '24999', '2024-02-26 23:46:57', '2024-02-26 23:46:57'),
(45, 7, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '24999', '2024-02-26 23:47:23', '2024-02-26 23:47:23'),
(46, 7, 'c1', 'privileged', NULL, NULL, '60%', '6400', '24999', '2024-02-26 23:47:51', '2024-02-26 23:47:51'),
(47, 5, 'b1', 'regular', '1month+', '11999', NULL, NULL, '33997', '2024-02-26 23:49:16', '2024-02-26 23:49:16'),
(48, 5, 'b2', 'regular', '1month+', '11999', NULL, NULL, '33997', '2024-02-26 23:49:35', '2024-02-26 23:49:35'),
(49, 5, 'c1', 'regular', '1month+', '15999', NULL, NULL, '33997', '2024-02-26 23:49:53', '2024-02-26 23:49:53'),
(50, 5, 'b1', 'standard', NULL, NULL, '60%', '4799', '26237', '2024-02-26 23:50:26', '2024-02-26 23:50:26'),
(51, 5, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '26237', '2024-02-26 23:50:47', '2024-02-26 23:50:47'),
(52, 5, 'c1', 'standard', NULL, NULL, '41%', '9439', '26237', '2024-02-26 23:51:16', '2024-02-26 23:51:16'),
(53, 5, 'b1', 'privileged', NULL, NULL, '60%', '4799', '20999', '2024-02-26 23:51:41', '2024-02-26 23:51:41'),
(54, 5, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '20999', '2024-02-26 23:52:01', '2024-02-26 23:52:01'),
(55, 5, 'c1', 'privileged', NULL, NULL, '41%', '9439', '20999', '2024-02-26 23:52:23', '2024-02-26 23:52:23'),
(56, 3, 'b2', 'regular', '1month+', '11999', NULL, NULL, '27998', '2024-02-26 23:52:48', '2024-02-26 23:52:48'),
(57, 3, 'c1', 'regular', '1month+', '15999', NULL, NULL, '27998', '2024-02-26 23:53:08', '2024-02-26 23:53:08'),
(58, 3, 'b2', 'standard', NULL, NULL, 'N/A', '11999', '21438', '2024-02-26 23:53:30', '2024-02-26 23:53:30'),
(59, 3, 'c1', 'standard', NULL, NULL, '41%', '9439', '21438', '2024-02-26 23:53:52', '2024-02-26 23:53:52'),
(60, 3, 'b2', 'privileged', NULL, NULL, 'N/A', '11999', '17999', '2024-02-26 23:54:17', '2024-02-26 23:54:17'),
(61, 3, 'c1', 'privileged', NULL, NULL, '41%', '9439', '17999', '2024-02-26 23:54:35', '2024-02-26 23:54:35');

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
-- Table structure for table `follow_ups`
--

CREATE TABLE `follow_ups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `adviser_id` int(11) NOT NULL,
  `remarks` longtext NOT NULL,
  `admission_status` varchar(255) NOT NULL,
  `current_follow_up_date` varchar(255) NOT NULL,
  `next_follow_up_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_ups`
--

INSERT INTO `follow_ups` (`id`, `student_id`, `adviser_id`, `remarks`, `admission_status`, `current_follow_up_date`, `next_follow_up_date`, `created_at`, `updated_at`) VALUES
(3, 1, 5, 'test', 'later_admit', '2024-02-25', '2024-02-29', '2024-02-24 23:14:15', '2024-02-25 00:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `manage_tests`
--

CREATE TABLE `manage_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_tests`
--

INSERT INTO `manage_tests` (`id`, `title`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test 1', '50', 'active', '2024-02-07 02:42:14', '2024-02-07 02:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `manage_test_questions`
--

CREATE TABLE `manage_test_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `instruction` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_test_questions`
--

INSERT INTO `manage_test_questions` (`id`, `test_id`, `section_id`, `question_type`, `instruction`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'multiple-choice', '<p>Basic Multiple Choice Question</p>', '2024-02-09 04:26:30', '2024-02-09 04:26:30'),
(2, 1, 1, 'radio', '<p>Radio Question instruction</p>', '2024-02-14 02:46:50', '2024-02-14 02:46:50'),
(3, 1, 1, 'drop-down', '<p>Drop Down Question Instruction</p>', '2024-02-16 04:53:50', '2024-02-16 04:53:50'),
(4, 1, 1, 'multi-selector', '<p>Multi Selector Question Instruction</p>', '2024-02-16 04:58:35', '2024-02-16 04:58:35'),
(5, 1, 1, 'fill-blank', '<p>Fill in the blanks Instruction</p>', '2024-02-16 05:44:15', '2024-02-16 05:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `manage_test_sections`
--

CREATE TABLE `manage_test_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `test_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `instruction` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_test_sections`
--

INSERT INTO `manage_test_sections` (`id`, `name`, `test_id`, `module_id`, `instruction`, `created_at`, `updated_at`) VALUES
(1, 'Reading Section 1', 1, 1, NULL, '2024-02-08 04:11:22', '2024-02-08 04:11:22');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_07_083224_create_manage_tests_table', 2),
(7, '2024_02_07_092751_create_manage_test_sections_table', 3),
(8, '2024_02_08_093902_create_modules_table', 4),
(9, '2024_02_08_112416_create_manage_test_questions_table', 5),
(10, '2024_02_14_120401_create_test_multiple_choices_table', 6),
(11, '2024_02_16_103423_create_test_radios_table', 7),
(12, '2024_02_16_104530_create_test_drop_downs_table', 8),
(13, '2024_02_16_105919_create_test_multi_selectors_table', 9),
(14, '2024_02_16_113928_create_test_fill_blanks_table', 10),
(30, '2024_02_23_115348_create_follow_ups_table', 17),
(33, '2024_02_26_060124_create_course_bundles_table', 19),
(34, '2024_02_26_060015_create_course_prices_table', 20),
(36, '2024_02_19_051419_create_visitor_infos_table', 21),
(38, '2014_10_12_000000_create_users_table', 22),
(44, '2024_02_19_051017_create_visitor_logs_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Reading', '2024-02-08 09:40:28', '2024-02-08 09:40:28'),
(2, 'Listening', '2024-02-08 09:40:46', '2024-02-08 09:40:46'),
(3, 'Grammar', '2024-02-08 09:41:01', '2024-02-08 09:41:01'),
(4, 'Vocabulary', '2024-02-08 09:41:14', '2024-02-08 09:41:14'),
(5, 'Speaking', '2024-02-08 09:41:32', '2024-02-08 09:41:32');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `test_drop_downs`
--

CREATE TABLE `test_drop_downs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_question_id` bigint(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `option_text` text NOT NULL,
  `is_correct` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_drop_downs`
--

INSERT INTO `test_drop_downs` (`id`, `test_question_id`, `text`, `option_text`, `is_correct`, `marks`, `created_at`, `updated_at`) VALUES
(1, 3, 'Drop Down Question', '[\"A\",\"B\",\"C\",\"D\"]', '[\"1\"]', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_fill_blanks`
--

CREATE TABLE `test_fill_blanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_question_id` bigint(20) NOT NULL,
  `text` longtext NOT NULL,
  `is_show` enum('yes','no') NOT NULL DEFAULT 'no',
  `blank_answer` mediumtext NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_fill_blanks`
--

INSERT INTO `test_fill_blanks` (`id`, `test_question_id`, `text`, `is_show`, `blank_answer`, `marks`, `created_at`, `updated_at`) VALUES
(1, 5, '<p>1. Fill in the blanks question 1 ##blank##</p>\r\n\r\n<p>2. Fill in the blanks question 2 ##blank##</p>\r\n\r\n<p>3. Fill in the blanks question 3 ##blank##</p>', 'no', '[\"A\",\"C\",\"V\"]', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_multiple_choices`
--

CREATE TABLE `test_multiple_choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_question_id` bigint(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `option_text` text NOT NULL,
  `is_correct` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_multiple_choices`
--

INSERT INTO `test_multiple_choices` (`id`, `test_question_id`, `text`, `option_text`, `is_correct`, `marks`, `created_at`, `updated_at`) VALUES
(3, 1, 'Multiple Question 1', '[\"A\",\"B\",\"C\"]', '[\"2\"]', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_multi_selectors`
--

CREATE TABLE `test_multi_selectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_question_id` bigint(20) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `option_text` text NOT NULL,
  `is_correct` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_multi_selectors`
--

INSERT INTO `test_multi_selectors` (`id`, `test_question_id`, `text`, `option_text`, `is_correct`, `marks`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, '[\"A\",\"B\",\"C\",\"D\",\"E\"]', '[\"0\",\"2\",\"3\"]', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_radios`
--

CREATE TABLE `test_radios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_question_id` bigint(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `option_text` text NOT NULL,
  `is_correct` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_radios`
--

INSERT INTO `test_radios` (`id`, `test_question_id`, `text`, `option_text`, `is_correct`, `marks`, `created_at`, `updated_at`) VALUES
(1, 2, 'Radio Question', '[\"A\",\"B\",\"C\",\"D\"]', '[\"2\"]', 1, NULL, NULL);

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
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `status` enum('active','pause') NOT NULL DEFAULT 'pause',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@hellobarc.com', NULL, '$2y$12$S6zoK59cZ.h348opKko/pec/qX6h1e8oStmrS1Fz8LNCCqYkMkdiq', 1, 'active', NULL, '2024-02-28 21:49:33', '2024-02-28 21:49:33'),
(2, 'Manager User', 'manager@itsolutionstuff.com', NULL, '$2y$12$iJ7PnzhWSo.9ckCoxy.4.uFj94eYvHU9s/OJGLH0rmo5Xv8yvzQgO', 2, 'active', NULL, '2024-02-28 21:49:33', '2024-02-28 21:49:33'),
(3, 'User', 'user@barc.com', NULL, '$2y$12$YN7Gj64.RCQG2TnfyVQKwOGGeu8HexZEJFgwZB2G7KwKLJp0hlTeK', 0, 'active', NULL, '2024-02-28 21:49:33', '2024-02-28 21:49:33'),
(4, 'Adviser', 'advisor@barc.com', NULL, '$2y$12$MB.W4H2bVZXXZvlPMj0JBOTe7F1fb4Rxe7Zc91//ssm8RT0rOSyQe', 3, 'active', NULL, '2024-02-28 22:15:42', '2024-02-28 22:15:55'),
(5, 'Adviser1', 'advisor1@barc.com', NULL, '$2y$12$i811p6YiRHoMLiXov9hTn.qY7Cb5stnRShQ1vSUkb2Yyulof.ItKC', 3, 'active', NULL, '2024-02-28 22:16:50', '2024-02-28 22:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_infos`
--

CREATE TABLE `visitor_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_log_id` int(11) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `how_you_know` varchar(255) NOT NULL,
  `expected_country` varchar(255) NOT NULL,
  `expected_score` int(11) NOT NULL,
  `purpose_of_ielts` varchar(255) NOT NULL,
  `branch_recomendation` varchar(255) DEFAULT NULL,
  `comments_from_student` varchar(255) DEFAULT NULL,
  `feedback_from_advisor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_infos`
--

INSERT INTO `visitor_infos` (`id`, `visitor_log_id`, `occupation`, `address`, `location`, `organization`, `date_of_birth`, `education`, `how_you_know`, `expected_country`, `expected_score`, `purpose_of_ielts`, `branch_recomendation`, `comments_from_student`, `feedback_from_advisor`, `created_at`, `updated_at`) VALUES
(32, 1, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:36:11', '2024-03-01 22:36:11'),
(33, 2, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:44:29', '2024-03-01 22:44:29'),
(34, 3, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Website', 'UK', 7, 'General', 'House Building', NULL, NULL, '2024-03-01 22:44:59', '2024-03-01 22:44:59'),
(35, 4, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:45:57', '2024-03-01 22:45:57'),
(36, 5, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Uttara', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:46:21', '2024-03-01 22:46:21'),
(37, 6, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:46:48', '2024-03-01 22:46:48'),
(38, 7, 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Gazipur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:47:17', '2024-03-01 22:47:17'),
(39, 8, 'Private Service', 'Matikata,Dhaka Cantt.', 'Mirpur', 'na', '15-01-1999', 'GED', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 22:50:05', '2024-03-01 22:50:05'),
(40, 9, 'House Wife', 'Matikata,Dhaka Cantt.', 'Dhanmondi', 'na', '15-01-1999', 'HSC', 'Google Map', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-01 23:22:31', '2024-03-01 23:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_logs`
--

CREATE TABLE `visitor_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_advisor` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `purpose_of_visit` varchar(255) NOT NULL,
  `status` enum('approved','unapproved','declined') NOT NULL,
  `adviser_notification` enum('seen','not_seen') NOT NULL,
  `front_desk_notification` enum('seen','not_seen') NOT NULL,
  `time_log` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_logs`
--

INSERT INTO `visitor_logs` (`id`, `assign_advisor`, `full_name`, `email`, `mobile`, `purpose_of_visit`, `status`, `adviser_notification`, `front_desk_notification`, `time_log`, `created_at`, `updated_at`) VALUES
(1, 4, 'samiullll', 'advisor2@barc.com', '01746808384', 'basic_english', 'unapproved', 'seen', 'seen', '1709354171', '2024-03-01 22:36:11', '2024-03-01 23:01:34'),
(2, 4, 'muktadir', 'shadman.barc@gmail.com', '01746808384', 'basic_english', 'unapproved', 'seen', 'seen', '1709354669', '2024-03-01 22:44:29', '2024-03-01 23:01:34'),
(3, 4, 'samiullll', 'student@barc', '01746808384', 'spoken', 'declined', 'seen', 'seen', '1709354699', '2024-03-01 22:44:59', '2024-03-01 23:01:34'),
(4, 4, 'samiullll', 'manager@itsolutionstuff.com', '01746808384', 'basic_english', 'unapproved', 'seen', 'seen', '1709354757', '2024-03-01 22:45:57', '2024-03-01 23:01:34'),
(5, 4, 'muktadir', 'saim.barc@gmail.com', '01746808384', 'basic_english', 'declined', 'not_seen', 'seen', '1709354781', '2024-03-01 22:46:21', '2024-03-01 23:02:52'),
(6, 4, 'samiullll', 'manager@itsolutionstuff.com', '01746808384', 'basic_english', 'declined', 'seen', 'seen', '1709354808', '2024-03-01 22:46:48', '2024-03-01 23:01:37'),
(7, 4, 'muktadir', 'student@barc', '01746808384', 'basic_english', 'declined', 'seen', 'seen', '1709354837', '2024-03-01 22:47:17', '2024-03-01 23:01:34'),
(8, 4, 'muktadir', 'shadman.barc@gmail.com', '01746808384', 'basic_english', 'declined', 'seen', 'seen', '1709355005', '2024-03-01 22:50:05', '2024-03-01 23:01:34'),
(9, 4, 'samiullll', 'shadman.barc@gmail.com', '01746808384', 'basic_english', 'unapproved', 'not_seen', 'not_seen', '1709356951', '2024-03-01 23:22:31', '2024-03-01 23:22:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_bundles`
--
ALTER TABLE `course_bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follow_ups`
--
ALTER TABLE `follow_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_tests`
--
ALTER TABLE `manage_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_test_questions`
--
ALTER TABLE `manage_test_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_test_sections`
--
ALTER TABLE `manage_test_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `test_drop_downs`
--
ALTER TABLE `test_drop_downs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_fill_blanks`
--
ALTER TABLE `test_fill_blanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_multiple_choices`
--
ALTER TABLE `test_multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_multi_selectors`
--
ALTER TABLE `test_multi_selectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_radios`
--
ALTER TABLE `test_radios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor_infos`
--
ALTER TABLE `visitor_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_bundles`
--
ALTER TABLE `course_bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_prices`
--
ALTER TABLE `course_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_ups`
--
ALTER TABLE `follow_ups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_tests`
--
ALTER TABLE `manage_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_test_questions`
--
ALTER TABLE `manage_test_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manage_test_sections`
--
ALTER TABLE `manage_test_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_drop_downs`
--
ALTER TABLE `test_drop_downs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_fill_blanks`
--
ALTER TABLE `test_fill_blanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_multiple_choices`
--
ALTER TABLE `test_multiple_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_multi_selectors`
--
ALTER TABLE `test_multi_selectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_radios`
--
ALTER TABLE `test_radios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitor_infos`
--
ALTER TABLE `visitor_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
