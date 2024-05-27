-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 02:46 PM
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
-- Database: `placement_test_samiul`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_benefits` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `course_benefits`, `created_at`, `updated_at`) VALUES
(1, 'A1', '<ul>\r\n	<li>use simple words and phrases for talking with others.</li>\r\n	<li>introduce themselves and talk about common things using everyday words.</li>\r\n	<li>understand and use basic grammar rules and patterns</li>\r\n	<li>find the main points and details in sentences with simple words and structure.</li>\r\n	<li>read simple texts and write easy sentences.</li>\r\n</ul>', '2024-03-04 00:23:54', '2024-03-04 01:15:36'),
(2, 'A2', '<ul>\r\n	<li><span style=\"font-size:18px\">write paragraphs with a main idea, supporting details, and a conclusion.</span></li>\r\n	<li><span style=\"font-size:18px\">talk about everyday situations like describing daily routines, a day at work or in school, hobbies etc.</span></li>\r\n	<li><span style=\"font-size:18px\">discuss fairly more complex ideas and objects.</span></li>\r\n	<li><span style=\"font-size:18px\">understand and use words and phrases for everyday situations.</span></li>\r\n	<li><span style=\"font-size:18px\">use major grammar rules like the Degree of Adjectives, Wh- questions, Subject-verb Agreement, and Clauses in a basic way.</span></li>\r\n	<li><span style=\"font-size:18px\">listen and understand feelings in speech and find the main points.</span></li>\r\n</ul>', '2024-03-04 02:35:35', '2024-03-04 02:35:35'),
(3, 'B1', '<ul>\r\n	<li><span style=\"font-size:18px\">﻿use grammar better when writing your own work. </span></li>\r\n	<li><span style=\"font-size:18px\">write different types of paragraphs, like giving opinions or solving problems, to create longer essays.</span></li>\r\n	<li><span style=\"font-size:18px\">talk comfortably about things like environment, technology, past or current events etc.</span></li>\r\n	<li><span style=\"font-size:18px\">read quickly to find the main ideas in long passages. </span></li>\r\n	<li><span style=\"font-size:18px\">understand complex words by looking at the surrounding text and using synonymous words.</span></li>\r\n	<li><span style=\"font-size:18px\">understand what a speaker is trying to say and summarize their main ideas when listening.</span></li>\r\n</ul>', '2024-03-04 02:40:44', '2024-03-04 02:40:44'),
(4, 'B2', '<ul>\r\n	<li><span style=\"font-size:18px\">﻿write persuasively using different grammar rules correctly.</span></li>\r\n	<li><span style=\"font-size:18px\">write academic essays using examples and opinions to make strong arguments.</span></li>\r\n	<li><span style=\"font-size:18px\">speak easily on topics that frequently appear on IELTS exam.</span></li>\r\n	<li><span style=\"font-size:18px\">use more advanced words correctly in your writing.</span></li>\r\n	<li><span style=\"font-size:18px\">understand and use information from what you read and hear in your own writing.</span></li>\r\n</ul>', '2024-03-04 02:42:17', '2024-03-04 02:42:17'),
(5, 'C1', '<ul>\r\n	<li><span style=\"font-size:18px\">﻿analyze difficult essay topics and write long argument essays with good command on formal written English</span></li>\r\n	<li><span style=\"font-size:18px\">explain difficult ideas with accuracy and fluency when talking without planning.</span></li>\r\n	<li><span style=\"font-size:18px\">understand and use difficult words with accuracy in all modules of IELTS exam.</span></li>\r\n	<li><span style=\"font-size:18px\">critically read and analyze complex texts on both familiar and unfamiliar topics.</span></li>\r\n</ul>', '2024-03-04 02:43:58', '2024-03-04 02:43:58');

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
  `remarks` longtext DEFAULT NULL,
  `admission_status` varchar(255) NOT NULL,
  `current_follow_up_date` varchar(255) NOT NULL,
  `next_follow_up_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_ups`
--

INSERT INTO `follow_ups` (`id`, `student_id`, `adviser_id`, `remarks`, `admission_status`, `current_follow_up_date`, `next_follow_up_date`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Next month e admission nibe', 'next_month', '2024-03-18', '2024-04-18', '2024-03-17 21:23:27', '2024-03-17 21:23:27');

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
(1, 'First Test', '50', 'active', '2024-02-27 22:35:30', '2024-02-27 22:35:30'),
(2, 'Second Test', '50', 'active', '2024-05-26 00:28:44', '2024-05-26 00:28:44'),
(3, 'Three Test', '50', 'active', '2024-05-27 03:48:30', '2024-05-27 03:48:30');

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
(1, 1, 1, 'radio', '<p><em><span style=\"font-size:20px\"><strong>Choice the correct answer</strong></span></em></p>', '2024-02-27 22:37:02', '2024-05-20 23:38:00'),
(2, 1, 2, 'drop-down', '<p><em><strong><span style=\"font-size:20px\">Select the correct option</span></strong></em></p>', '2024-02-27 22:41:15', '2024-05-20 23:37:51'),
(3, 1, 3, 'multiple-choice', '<p><em><strong><span style=\"font-size:20px\">Select the correct the answer</span></strong></em></p>', '2024-02-27 22:47:38', '2024-05-20 23:42:50'),
(4, 1, 4, 'radio', '<p><span style=\"font-size:20px\"><em><strong>Choose the correct answer</strong></em></span></p>', '2024-02-27 22:56:50', '2024-05-20 23:42:38'),
(5, 1, 5, 'multiple-choice', '<p><em><strong><span style=\"font-size:20px\">Select the correct answer</span></strong></em></p>', '2024-02-27 23:03:05', '2024-05-20 23:42:26'),
(6, 1, 6, 'drop-down', '<p><span style=\"font-size:20px\"><em><strong>Select the correct option</strong></em></span></p>', '2024-02-27 23:37:56', '2024-05-20 23:42:15'),
(7, 1, 7, 'multiple-choice', '<p><span style=\"font-size:20px\"><em><strong>Select the correct sentence from given options.</strong></em></span></p>', '2024-02-27 23:41:19', '2024-05-20 23:41:52'),
(8, 1, 8, 'radio', '<p><em><strong><span style=\"font-size:20px\">Select the correct sentence from given options.</span></strong></em></p>', '2024-02-27 23:43:58', '2024-05-20 23:41:43'),
(9, 1, 9, 'multiple-choice', '<p><em><strong><span style=\"font-size:20px\">Select the correct sentence from given options.</span></strong></em></p>', '2024-02-27 23:47:56', '2024-05-20 23:41:33'),
(10, 1, 10, 'radio', '<p><em><strong><span style=\"font-size:20px\">Select the correct sentence from given options.</span></strong></em></p>', '2024-02-27 23:50:59', '2024-05-20 23:40:58'),
(11, 1, 11, 'drop-down', '<p><span style=\"font-size:18px\">Select the meaning of the underlined word.</span></p>', '2024-02-27 23:54:32', '2024-02-27 23:54:32'),
(12, 1, 12, 'radio', '<p><em><strong><span style=\"font-size:20px\">Choose the correct option</span></strong></em></p>', '2024-02-28 00:00:34', '2024-05-20 23:40:45'),
(13, 1, 13, 'multiple-choice', '<p><span style=\"font-size:20px\"><em><strong>Choose the correct option</strong></em></span></p>', '2024-02-28 00:03:32', '2024-05-20 23:40:17'),
(14, 1, 14, 'drop-down', '<p><span style=\"font-size:20px\"><em><strong>Select the word that completes the sentence correctly.</strong></em></span></p>', '2024-02-28 00:06:20', '2024-05-20 23:39:57'),
(15, 1, 15, 'multiple-choice', '<p><strong><em><span style=\"font-size:20px\">Select the correct option</span></em></strong></p>', '2024-02-28 00:09:58', '2024-05-20 23:39:33'),
(16, 1, 16, 'fill-blank', '<p><span style=\"font-size:20px\"><em>Questions 1- 5</em></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><em>Complete the form below.</em></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><em>Write <strong>NO MORE THAN ONE WORD OR A NUMBER</strong> for each answer.</em></span></p>', '2024-02-28 00:39:53', '2024-05-20 23:38:50'),
(17, 1, 17, 'multi-selector', '<p><span style=\"font-size:20px\"><em>Questions 6&mdash;8</em></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><em>Select <strong>THREE</strong> letters A-F.</em></span></p>', '2024-02-28 00:45:19', '2024-05-20 23:38:43'),
(18, 1, 18, 'fill-blank', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Questions 11-13</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Complete the notes below</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Write <em><strong>NO MORE THAN THREE WORDS</strong></em> for each answer.</span></span></p>', '2024-02-28 00:50:02', '2024-05-16 23:23:36'),
(19, 1, 17, 'fill-blank', '<p><em><span style=\"font-size:20px\">Questions 9 and 10</span></em></p>\r\n\r\n<p><em><span style=\"font-size:20px\">Write <strong>NO MORE THAN THREE WORDS</strong> for each answer.</span></em></p>', '2024-05-16 22:51:10', '2024-05-20 23:38:35'),
(20, 1, 18, 'multiple-choice', '<p><strong><em><span style=\"font-size:20px\">Questions 14 and 15</span></em></strong></p>\r\n\r\n<p><strong><em><span style=\"font-size:20px\">Choose the correct letters A-C.</span></em></strong></p>', '2024-05-17 00:24:22', '2024-05-20 23:38:25'),
(21, 2, 19, 'radio', '<p><span style=\"font-size:18px\"><strong>Choose the correct answer</strong></span></p>', '2024-05-26 00:31:15', '2024-05-26 00:31:15'),
(22, 2, 20, 'drop-down', '<p><strong><span style=\"font-size:18px\">Select right answer</span></strong></p>', '2024-05-26 00:34:44', '2024-05-26 00:34:44'),
(23, 2, 21, 'multiple-choice', '<p><strong><span style=\"font-size:18px\">Choose the correct answer</span></strong></p>', '2024-05-26 00:40:44', '2024-05-26 00:40:44'),
(24, 2, 22, 'radio', '<p><span style=\"font-size:18px\"><strong>Choose the correct answer</strong></span></p>', '2024-05-26 00:44:21', '2024-05-26 00:44:21'),
(25, 2, 23, 'multiple-choice', '<p><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Choose the correct answer</span></span></strong></p>', '2024-05-26 00:47:39', '2024-05-26 00:47:39'),
(26, 2, 24, 'drop-down', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 1- 3</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><em><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Select the right answer to fill in the gap.</span></em></span></p>', '2024-05-26 00:51:15', '2024-05-26 00:52:08'),
(27, 2, 25, 'multiple-choice', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 4- 6</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the correct sentence from the given options.</em></span></span></p>', '2024-05-26 00:55:26', '2024-05-26 00:55:26'),
(28, 2, 26, 'radio', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 7- 9</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the correct sentence from the given options.</em></span></span></p>', '2024-05-26 00:57:51', '2024-05-26 00:57:51'),
(29, 2, 27, 'drop-down', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 10- 12</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Fill in the gap with the correct option.</em></span></span></p>', '2024-05-26 01:02:29', '2024-05-26 01:02:29'),
(30, 2, 28, 'multiple-choice', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 13- 15</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Fill in the gap with the correct option.</em></span></span></p>', '2024-05-26 01:05:27', '2024-05-26 01:05:27'),
(31, 2, 29, 'radio', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"color:black\">Questions 16- 18</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em><span style=\"color:black\">Select the meaning of the word within the <strong>quotation marks (&lsquo;&rsquo;).</strong></span></em></span></span></p>', '2024-05-26 01:10:42', '2024-05-26 01:10:42'),
(32, 2, 30, 'drop-down', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"color:black\">Questions 19- 21</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em><span style=\"color:black\">Find the meaning of the word within the quotation marks (&lsquo;&rsquo;)&nbsp;from options a, b or c.</span></em></span></span></p>', '2024-05-26 01:16:26', '2024-05-26 01:16:26'),
(33, 2, 31, 'multiple-choice', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 22- 24</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Fill in the gap with the correct word.</em></span></span></p>', '2024-05-26 01:20:03', '2024-05-26 01:20:03'),
(34, 2, 32, 'radio', '<p><span style=\"font-size:20px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 25- 27</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the word that completes the sentence correctly.</em></span></span></p>', '2024-05-26 01:22:49', '2024-05-26 01:22:49'),
(35, 2, 33, 'drop-down', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 28- 30</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the right answer to fill in the gap.</em></span></span></p>', '2024-05-26 01:25:34', '2024-05-26 01:25:34'),
(36, 2, 34, 'fill-blank', '<p><strong><span style=\"font-size:18px\">PART 1 </span></strong></p>\r\n\r\n<p><span style=\"font-size:18px\">Questions 1- 5</span></p>', '2024-05-26 02:50:30', '2024-05-26 02:50:30'),
(37, 2, 35, 'fill-blank', '<p><span style=\"font-size:18px\"><strong>PART 2</strong><br />\r\n<strong>Questions 6-10</strong><br />\r\nComplete the table below.<br />\r\nWrite <em><strong>NO MORE THAN THREE WORDS</strong></em> for each answer.</span></p>', '2024-05-26 03:01:02', '2024-05-26 03:01:02'),
(38, 2, 36, 'fill-blank', '<p><span style=\"font-size:18px\"><strong>PART 3</strong><br />\r\nQuestions 11-15<br />\r\nComplete the notes below.<br />\r\nWrite <em><strong>NO MORE THAN THREE WORDS</strong></em> for each answer.</span></p>', '2024-05-26 03:13:45', '2024-05-26 03:13:45'),
(39, 3, 37, 'multiple-choice', '<p><strong><span style=\"font-size:18px\">Choose the correct answer</span></strong></p>', '2024-05-27 03:51:38', '2024-05-27 03:51:38'),
(40, 3, 38, 'radio', '<p><strong><span style=\"font-size:18px\">Select the correct answer</span></strong></p>', '2024-05-27 03:56:00', '2024-05-27 03:56:00'),
(41, 3, 39, 'radio', '<p><strong><span style=\"font-size:18px\">Select the correct answer</span></strong></p>', '2024-05-27 04:02:29', '2024-05-27 04:02:29'),
(42, 3, 40, 'multiple-choice', '<p><strong><span style=\"font-size:18px\">Choose the correct answer</span></strong></p>', '2024-05-27 04:06:39', '2024-05-27 04:06:39'),
(43, 3, 41, 'radio', '<p><strong><span style=\"font-size:18px\"><span style=\"color:#000000\">Select the correct answer</span></span></strong></p>', '2024-05-27 04:11:16', '2024-05-27 04:11:16'),
(44, 3, 42, 'drop-down', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 1- 3</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the right answer to fill in the gap.</em></span></span></span></p>', '2024-05-27 04:18:23', '2024-05-27 04:18:23'),
(45, 3, 43, 'multiple-choice', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 4- 6</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the correct sentence from given options.</em></span></span></span></p>', '2024-05-27 04:21:52', '2024-05-27 04:21:52'),
(46, 3, 44, 'radio', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 7- 9</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the correct sentence from given options.</em></span></span></span></p>', '2024-05-27 04:26:42', '2024-05-27 04:26:42'),
(47, 3, 45, 'multiple-choice', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 10- 12</strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the correct sentence from given options.</em></span></span></span></p>', '2024-05-27 04:31:26', '2024-05-27 04:31:26'),
(48, 3, 46, 'drop-down', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 13- 15</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><em><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Fill in the gap with the correct option.</span></em></span></span></p>', '2024-05-27 04:37:33', '2024-05-27 04:37:33'),
(49, 3, 47, 'radio', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 16- 18</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the meaning of the word within the quotation marks (&lsquo;&rsquo;).</em></span></span></span></p>', '2024-05-27 04:45:31', '2024-05-27 04:45:31'),
(50, 3, 48, 'multiple-choice', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 19- 21</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#000000\"><em><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Fill in the gap with appropriate option.</span></em></span></span></p>', '2024-05-27 04:56:54', '2024-05-27 04:56:54'),
(51, 3, 49, 'drop-down', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Questions 22- 24</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>Select the meaning of the word within the quotation marks (&lsquo;&rsquo;).</em></span></span></p>', '2024-05-27 05:01:10', '2024-05-27 05:01:10'),
(52, 3, 50, 'radio', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,\"><strong>Questions 25- 27</strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><em>Fill in the gap with appropriate option.</em></span></span></p>', '2024-05-27 05:08:02', '2024-05-27 05:08:29'),
(53, 3, 51, 'multiple-choice', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,\"><strong>Questions 28- 30</strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><em>Select the word from the options that can replace the within the quotation marks (&lsquo;&rsquo;) word in the sentence.</em></span></span></p>', '2024-05-27 05:19:39', '2024-05-27 05:24:23'),
(54, 3, 52, 'fill-blank', '<p><span style=\"font-size:18px\">Part- 1<br />\r\n<strong>Questions 1-5</strong><br />\r\nComplete the notes below.<br />\r\nWrite <strong>NO MORE THAN THREE WORDS </strong>for each answer.</span></p>', '2024-05-27 05:29:24', '2024-05-27 05:29:24'),
(55, 3, 53, 'fill-blank', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Part- 2<br />\r\n<strong>Questions 6-10</strong><br />\r\nComplete the booking form below.<br />\r\nWrite <strong>ONE WORD AND/OR A NUMBER</strong> for each answer.</span></span></p>', '2024-05-27 05:36:29', '2024-05-27 05:36:29'),
(56, 3, 54, 'radio', '<p><span style=\"font-size:18px\"><span style=\"color:#000000\">Part- 3<br />\r\n<strong>Questions 11-20</strong><br />\r\nChoose the correct letter, <strong>A, B or C</strong></span></span></p>', '2024-05-27 05:43:52', '2024-05-27 05:43:52');

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
(1, 'First Test Section 1', 1, 1, NULL, '2024-02-27 22:36:07', '2024-02-27 22:36:07'),
(2, 'First Test Reading Section 2', 1, 1, NULL, '2024-02-27 22:40:42', '2024-02-27 22:40:42'),
(3, 'First Test Reading Section 3', 1, 1, NULL, '2024-02-27 22:47:01', '2024-02-27 22:47:01'),
(4, 'First Test Reading Section 4', 1, 1, NULL, '2024-02-27 22:56:25', '2024-02-27 22:56:25'),
(5, 'First Test Reading Section 5', 1, 1, NULL, '2024-02-27 23:02:08', '2024-02-27 23:02:08'),
(6, 'First Test Grammar Section 1', 1, 2, NULL, '2024-02-27 23:37:32', '2024-02-27 23:37:32'),
(7, 'First Test Grammar Section 2', 1, 2, NULL, '2024-02-27 23:40:53', '2024-02-27 23:40:53'),
(8, 'First Test Grammar Section 3', 1, 2, NULL, '2024-02-27 23:43:25', '2024-02-27 23:43:25'),
(9, 'First Test Grammar Section 4', 1, 2, NULL, '2024-02-27 23:47:05', '2024-02-27 23:47:05'),
(10, 'First Test Grammar Section 5', 1, 2, NULL, '2024-02-27 23:50:40', '2024-02-27 23:50:40'),
(11, 'First Test Vocabular Section 1', 1, 3, NULL, '2024-02-27 23:54:13', '2024-02-27 23:54:13'),
(12, 'First Test Vocabulary Section 2', 1, 3, NULL, '2024-02-27 23:59:48', '2024-02-27 23:59:48'),
(13, 'First Test Vocabulary Section 3', 1, 3, NULL, '2024-02-28 00:03:12', '2024-02-28 00:03:12'),
(14, 'First Test Vocabulary Section 4', 1, 3, NULL, '2024-02-28 00:06:00', '2024-02-28 00:06:00'),
(15, 'First Test Vocabulary Section 5', 1, 3, NULL, '2024-02-28 00:09:26', '2024-02-28 00:09:26'),
(16, 'First Test Listening Section 1', 1, 4, NULL, '2024-02-28 00:38:57', '2024-02-28 00:38:57'),
(17, 'First Test Listening Section 2', 1, 4, NULL, '2024-02-28 00:44:52', '2024-02-28 00:44:52'),
(18, 'First Test Listening Section 3', 1, 4, NULL, '2024-02-28 00:49:43', '2024-02-28 00:49:43'),
(19, 'Second Test Reading Section 1', 2, 1, NULL, '2024-05-26 00:29:25', '2024-05-26 00:29:25'),
(20, 'Second Test Reading Section 2', 2, 1, NULL, '2024-05-26 00:33:36', '2024-05-26 00:33:36'),
(21, 'Second Test Reading Section 3', 2, 1, NULL, '2024-05-26 00:39:36', '2024-05-26 00:39:36'),
(22, 'Second Test Reading Section 4', 2, 1, NULL, '2024-05-26 00:42:52', '2024-05-26 00:42:52'),
(23, 'Second Test Reading Section 5', 2, 1, NULL, '2024-05-26 00:46:33', '2024-05-26 00:46:33'),
(24, 'Second Test Grammar Section 1', 2, 2, NULL, '2024-05-26 00:50:47', '2024-05-26 00:50:47'),
(25, 'Second Test Grammar Section 2', 2, 2, NULL, '2024-05-26 00:54:54', '2024-05-26 00:54:54'),
(26, 'Second Test Grammar Section 3', 2, 2, NULL, '2024-05-26 00:57:27', '2024-05-26 00:57:27'),
(27, 'Second Test Grammar Section 4', 2, 2, NULL, '2024-05-26 01:02:04', '2024-05-26 01:02:04'),
(28, 'Second Test Grammar Section 5', 2, 2, NULL, '2024-05-26 01:05:03', '2024-05-26 01:05:03'),
(29, 'Second Test Vocabulary Section 1', 2, 3, NULL, '2024-05-26 01:09:59', '2024-05-26 01:09:59'),
(30, 'Second Test Vocabulary Section 2', 2, 3, NULL, '2024-05-26 01:15:02', '2024-05-26 01:15:02'),
(31, 'Second Test Vocabulary Section 3', 2, 3, NULL, '2024-05-26 01:19:39', '2024-05-26 01:19:39'),
(32, 'Second Test Vocabulary Section 4', 2, 3, NULL, '2024-05-26 01:22:16', '2024-05-26 01:22:24'),
(33, 'Second Test Vocabulary Section 5', 2, 3, NULL, '2024-05-26 01:25:06', '2024-05-26 01:25:06'),
(34, 'Second Test Listening Section 1', 2, 4, NULL, '2024-05-26 02:48:51', '2024-05-26 02:48:51'),
(35, 'Second Test Listening Section 2', 2, 4, NULL, '2024-05-26 02:59:58', '2024-05-26 02:59:58'),
(36, 'Second Test Listening Section 3', 2, 4, NULL, '2024-05-26 03:13:12', '2024-05-26 03:13:12'),
(37, 'Three Test Reading Section 1', 3, 1, NULL, '2024-05-27 03:50:05', '2024-05-27 03:50:05'),
(38, 'Three Test Reading Section 2', 3, 1, NULL, '2024-05-27 03:53:52', '2024-05-27 03:53:52'),
(39, 'Three Test Reading Section 3', 3, 1, NULL, '2024-05-27 04:00:49', '2024-05-27 04:00:49'),
(40, 'Three Test Reading Section 4', 3, 1, NULL, '2024-05-27 04:05:06', '2024-05-27 04:05:06'),
(41, 'Three Test Reading Section 5', 3, 1, NULL, '2024-05-27 04:10:08', '2024-05-27 04:10:08'),
(42, 'Three Test Grammar Section 1', 3, 2, NULL, '2024-05-27 04:17:47', '2024-05-27 04:17:47'),
(43, 'Three Test Grammar Section 2', 3, 2, NULL, '2024-05-27 04:21:32', '2024-05-27 04:21:32'),
(44, 'Three Test Grammar Section 3', 3, 2, NULL, '2024-05-27 04:26:20', '2024-05-27 04:29:58'),
(45, 'Three Test Grammar Section 4', 3, 2, NULL, '2024-05-27 04:30:41', '2024-05-27 04:30:41'),
(46, 'Three Test Grammar Section 5', 3, 2, NULL, '2024-05-27 04:36:58', '2024-05-27 04:36:58'),
(47, 'Three Test Vocabulary Section 1', 3, 3, NULL, '2024-05-27 04:43:20', '2024-05-27 04:43:20'),
(48, 'Three Test Vocabulary Section 2', 3, 3, NULL, '2024-05-27 04:56:30', '2024-05-27 04:56:30'),
(49, 'Three Test Vocabulary Section 3', 3, 3, NULL, '2024-05-27 05:00:12', '2024-05-27 05:00:12'),
(50, 'Three Test Vocabulary Section 4', 3, 3, NULL, '2024-05-27 05:07:38', '2024-05-27 05:07:38'),
(51, 'Three Test Vocabulary Section 5', 3, 3, NULL, '2024-05-27 05:18:01', '2024-05-27 05:18:01'),
(52, 'Three Test Listening Section 1', 3, 4, NULL, '2024-05-27 05:28:49', '2024-05-27 05:28:49'),
(53, 'Three Test Listening Section 2', 3, 4, NULL, '2024-05-27 05:35:49', '2024-05-27 05:35:49'),
(54, 'Three Test Listening Section 3', 3, 4, NULL, '2024-05-27 05:42:34', '2024-05-27 05:42:34');

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
(38, '2014_10_12_000000_create_users_table', 22),
(44, '2024_02_19_051017_create_visitor_logs_table', 23),
(45, '2024_03_04_054226_create_courses_table', 24),
(47, '2024_02_19_051419_create_visitor_infos_table', 25);

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
(2, 'Grammar', '2024-02-08 09:40:46', '2024-02-08 09:40:46'),
(3, 'Vocabulary', '2024-02-08 09:41:01', '2024-02-08 09:41:01'),
(4, 'Listening', '2024-02-08 09:41:14', '2024-02-08 09:41:14'),
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
-- Table structure for table `test_audio`
--

CREATE TABLE `test_audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `audio` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_audio`
--

INSERT INTO `test_audio` (`id`, `test_id`, `section_id`, `title`, `audio`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 'Audio script- 1', '1715935884.mp3', '2024-02-28 01:17:37', '2024-05-17 02:51:24'),
(2, 1, 17, 'Audio script- 2', '1715936164.mp3', '2024-02-28 01:26:47', '2024-05-17 02:56:04'),
(3, 1, 18, 'Audio script- 3', '1715936207.mp3', '2024-02-28 01:28:32', '2024-05-17 02:56:47');

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
(1, 2, '4. What kind people need lighthouses?', '[\"-\",\"A) Farmers in fields\",\"B) Airplane pilots\",\"C) Sailors at sea\",\"D) Mountain climbers on cliffs\"]', '[\"3\"]', 1, NULL, NULL),
(2, 2, '5. Which of the following is NOT mentioned in the passage as one of the functions of lighthouses?', '[\"-\",\"A. To help sailors find out their location\",\"B. To warn of danger from rocks and reefs\",\"C. To notify sailors that bad weather is approaching\",\"D. To indicate that land is near\"]', '[\"3\"]', 1, NULL, NULL),
(3, 2, '6. The word ‘hazardous’ in the passage means …', '[\"-\",\"A. High\",\"B. Soft\",\"C. Dangerous\",\"D. Beautiful\"]', '[\"3\"]', 1, NULL, NULL),
(4, 6, '1. I ____________ every morning.', '[\"-\",\"a. running\",\"b. run\",\"c. to run\"]', '[\"2\"]', 1, NULL, NULL),
(5, 6, '2. The train moves ____________ .', '[\"-\",\"a. quick\",\"b. very quick\",\"c. quickly\"]', '[\"3\"]', 1, NULL, NULL),
(6, 6, '3. Marium ___________ from Barishal.', '[\"-\",\"a. is come\",\"b. comes\",\"c. come\"]', '[\"2\"]', 1, NULL, NULL),
(7, 11, '1. We should respect the adult people.', '[\"-\",\"a. younger\",\"b. busy\",\"c. older\"]', '[\"3\"]', 1, NULL, NULL),
(8, 11, '2. Some students find history class boring.', '[\"-\",\"a. good\",\"b. not interesting\",\"c. difficult\"]', '[\"2\"]', 1, NULL, NULL),
(9, 11, '3. We bought it from the local market.', '[\"-\",\"a. nearby\",\"b. railway\",\"c. big\"]', '[\"1\"]', 1, NULL, NULL),
(10, 14, '25. He was exhausted from the long journey; ___________ his excitement about the upcoming adventure kept him enthusiastic and determined.', '[\"-\",\"a. in addition\",\"b. however,\",\"c. and also,\",\"d. as well as\"]', '[\"2\"]', 1, NULL, NULL),
(11, 14, '26. Our class project assigned by Prof. Hall was successful; ____________ it received recognition at the international level.', '[\"-\",\"a. meanwhile\",\"b. though,\",\"c. furthermore,\",\"d. however\"]', '[\"3\"]', 1, NULL, NULL),
(12, 14, '27. The biologist’s discovery was truly _______: it occurred not because of any new thinking or diligent effort but because he mistakenly left a few test tubes out of the refrigerator overnight.', '[\"-\",\"a. assiduous\",\"b. insightful\",\"c. fortuitous\",\"d. ominous\"]', '[\"3\"]', 1, NULL, NULL),
(18, 22, '4. How do pets say hello?', '[\"a) By singing\",\"b) By wagging their tails\",\"c) By sleeping\"]', '[\"1\"]', 1, NULL, NULL),
(19, 22, '5. What do cats like to do for fun?', '[\"a) Go for walks\",\"b) Sleep in the sun\",\"c) Chase cars\"]', '[\"1\"]', 1, NULL, NULL),
(20, 22, '6. What do pets teach us?', '[\"a) To be lazy\",\"b) To be responsible\",\"c) To be rude\"]', '[\"1\"]', 1, NULL, NULL),
(21, 26, '1. Cats __________ in the warm sun.', '[\"a. sleeping\",\"b. sleep\",\"c. sleeped\"]', '[\"1\"]', 1, NULL, NULL),
(22, 26, '2. Birds sing ____________ in the trees.', '[\"a. happier\",\"b. happy\",\"c. happily\"]', '[\"2\"]', 1, NULL, NULL),
(23, 26, '3. I like the story __________.', '[\"a. very\",\"b. very much\",\"c. quick march\"]', '[\"1\"]', 1, NULL, NULL),
(24, 29, '10. _________________ initial recognition while still quite young.', '[\"(A) Most famous scientists achieve\",\"(B) That most famous scientists achieved\",\"(C) The most famous scientist who achieved\"]', '[\"0\"]', 1, NULL, NULL),
(25, 29, '11. The mountain ____ we climbed yesterday was the highest mountain in Britain!', '[\"(A)  where\",\"(B)  which\",\"(C)  what\"]', '[\"1\"]', 1, NULL, NULL),
(26, 29, '12. When I got home, the children had already ___ to bed.', '[\"(A)  went\",\"(B)  gone\",\"(C)  going\"]', '[\"1\"]', 1, NULL, NULL),
(27, 32, '19. The \"brave\" explorer traveled through the dense jungle.', '[\"a. afraid\",\"b. bold\",\"c. coward\"]', '[\"1\"]', 1, NULL, NULL),
(28, 32, '20. I wanted to go camping; \"however\" , it rained.', '[\"a. and\",\"b. or\",\"c. yet\"]', '[\"2\"]', 1, NULL, NULL),
(29, 32, '21. I want to be a teacher because it is an honorable \"occupation\".', '[\"a. business\",\"b. degree\",\"c. profession\"]', '[\"2\"]', 1, NULL, NULL),
(30, 35, '28. The atmosphere at the family dinner grew so tense that it seemed a confrontation was ________.', '[\"(A) inescapable\",\"(B) beneficial\",\"(C) arbitrary\",\"(D) evasive\"]', '[\"0\"]', 1, NULL, NULL),
(31, 35, '29. ________ the company\'s financial losses continued to mount, experts speculated on the probability of bankruptcy.', '[\"(A) Since\",\"(B) Though\",\"(C) As a result\",\"(D) Nevertheless\"]', '[\"0\"]', 1, NULL, NULL),
(32, 35, '30. _________ their initial differences, the negotiators eventually reached a complacent agreement that satisfied both parties.', '[\"(A) However\",\"(B) Likewise\",\"(C) Moreover\",\"(D) Despite\"]', '[\"3\"]', 1, NULL, NULL),
(33, 44, '1. I __________ to my brother right now.', '[\"a. am talking\",\"b. talk\",\"c. talked\"]', '[\"0\"]', 1, NULL, NULL),
(34, 44, '2. __________ to stay home and watch TV.', '[\"a. I am going\",\"b. I going\",\"c. Going\"]', '[\"0\"]', 1, NULL, NULL),
(35, 44, '3. My father __________ me a bicycle when I was five years old.', '[\"a. buy\",\"b. bought\",\"c. will buy\"]', '[\"1\"]', 1, NULL, NULL),
(36, 48, '13.', '[\"a. Dark and threatening, the artist studied the stormy sky.\",\"b. Dark and threatening, the stormy sky studied the artist.\",\"c. The artist studied the stormy sky dark and threatening.\",\"d. The artist studied the dark and threatening stormy sky.\"]', '[\"3\"]', 1, NULL, NULL),
(37, 48, '14.', '[\"a. Why don\'t you lodge a complaint for your noisy neighbours?\",\"b. Why don\'t you lodge a complaint against your noisy neighbours?\",\"c. Why don\'t you lodge a complaint about your noisy neighbours?\",\"d. Why don\'t you lodge your noisy neighbours a complaint?\"]', '[\"1\"]', 1, NULL, NULL),
(38, 48, '15.', '[\"-\",\"a. If I had called the president, he probably wouldn\'t speak to me.\",\"b. If I called the president, he probably wouldn\'t have spoken to me.\",\"c. If I had called the president, he probably won\'t speak to me.\",\"d. If I called the president, he probably wouldn\'t speak to me.\"]', '[\"3\"]', 1, NULL, NULL),
(39, 51, '22. The \"haunted\" house on the hill was too scary for the children to explore at night.', '[\"a. tall\",\"b. ghostly\",\"c. animal\"]', '[\"1\"]', 1, NULL, NULL),
(40, 51, '23. Our \"neighboring\" town hosts an annual festival that attracts visitors from all over the region.', '[\"a. relatives\",\"b. remote\",\"c. nearby\"]', '[\"2\"]', 1, NULL, NULL),
(41, 51, '24. The \"emission\" of CFC gases must be reduced if we want to live in a better world.', '[\"a. release\",\"b. pollution\",\"c. emotion\"]', '[\"0\"]', 1, NULL, NULL);

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
(1, 16, '<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:15.0pt\">VIDEO LIBRARY APPLICATION FORM</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><em>EXAMPLE ANSWER</em></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong>Surname</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Jones</em></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">First names: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Louise Cynthia</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apartment 1,72 (<strong>1</strong>) ##blank## Street</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Highbridge</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Post code: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<strong>2</strong>) ##blank##</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Telephone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9835 6712 (home)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<strong>3</strong>) ##blank## (work)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Driver&#39;s</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">license number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<strong>4</strong>) ##blank#</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Date of birth: &nbsp;&nbsp;&nbsp; Day: 25th Month: (<strong>5</strong>) ##blank## Year: 1977</span></span></p>', 'no', '[\"Black\",\"2085\",\"9456 1309\",\"2020BD\",\"July\"]', 5, NULL, NULL),
(2, 19, '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">9. How much does it cost to join the library? ##blank##</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">10. When will Louise&#39;s card be ready? ##blank##</span></span></p>', 'no', '[\"$25\\/twenty-five dollars\\/$25 refundable\\/twenty-five dollars refundable\",\"next week\\/in a week\\/in one week\\/the following week\"]', 2, NULL, NULL),
(3, 18, '<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:15.0pt\">Expedition Across Attora Mountains</span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Leader: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Charles Owen</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Prepared a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (11) ##blank## for the trip</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Total length of trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (12) ##blank##</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\">Climbed highest peak in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (13) ##blank##</span></span></p>', 'no', '[\"route book\\/Route Book\",\"900\\/nine hundred miles\\/NOT 900\",\"North Africa\\/N Africa\\/NOT Africa\"]', 3, NULL, NULL),
(4, 36, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\"><strong>Programme of Activities for First Day</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Time</td>\r\n			<td>Place</td>\r\n			<td>Event</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Example<br />\r\n			10.00</td>\r\n			<td>1. ##blank##</td>\r\n			<td>Meet the Principal and staff</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10.15</td>\r\n			<td>&nbsp;</td>\r\n			<td>Talk by 2. ##blank##</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10.45</td>\r\n			<td>&nbsp;</td>\r\n			<td>Talk by 3. ##blank##</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4. ##blank##</td>\r\n			<td>Classroom 5</td>\r\n			<td>5. ##blank## test</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'no', '[\"the Main Hall NOT Hall\\/Main Hall NOT Hall\",\"Director of Studies\\/DOS\\/the Director of Studies\\/ the DOS\",\"the Student Advisor\\/the Students Advisor\\/the Adviser\\/Student Advisor\\/Students Advisor\\/Adviser\",\"eleven\\/11 o\\u2019clock\\/11.00 am\\/11\",\"placement\\/English\\/placement test\\/English test\"]', 5, NULL, NULL),
(5, 37, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><strong>TYPE OF HELP </strong></td>\r\n			<td style=\"text-align:center\"><strong>EXAMPLES</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>FINANCIAL</td>\r\n			<td>\r\n			<p>&bull; grants</p>\r\n\r\n			<p>&bull; 6. ##blank##</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7. ##blank##</td>\r\n			<td>&bull; childcare<br />\r\n			&bull; nurseries</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ACADEMIC</td>\r\n			<td>\r\n			<p>&bull; 8. ##blank##</p>\r\n\r\n			<p>&bull; using the library</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9. ##blank##</td>\r\n			<td>&bull; individual interests<br />\r\n			&bull; 10. ##blank##</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'no', '[\"fees\\/overseas fees\\/student\'s fees\\/tuition fees\",\"domestic\\/domestic area\\/the area\\/the domestic area\",\"deadlines\\/essay\'s deadlines\",\"social\\/social life\",\"outings\\/trips\"]', 5, NULL, NULL),
(6, 38, '<p style=\"text-align:center\"><strong>&nbsp;HELPLINE DETAILS</strong></p>\r\n\r\n<p><br />\r\nOfficer&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jackie 11. ##blank##<br />\r\nAddress&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Student Welfare Office<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 13 Marshall Road</p>\r\n\r\n<p>Telephone number&nbsp; &nbsp; &nbsp; 12. ##blank##<br />\r\nOpening hours&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9.30am- 6pm (weekdays)</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 13. ##blank## (Saturdays)<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ring or visit office for 14. ##blank##<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;N.B. At peak times there may be a 15. ##blank##</p>', 'no', '[\"KOUACHI\",\"3269940\",\"ten-four\\/ten am-four pm\\/10-4\\/10 am-4 pm\",\"appointment\\/appointment\'s\\/an appointment\\/an appointment\'s\",\"waiting list\"]', 5, NULL, NULL),
(7, 54, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><strong>Transport from the Airport to Milton</strong></span></p>\r\n\r\n<p><em>Example&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Answer<br />\r\nDistance:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 147 miles</em></p>\r\n\r\n<p><strong>Options:</strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Car hire</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- don&rsquo;t want to drive</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">1. ##blank##</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - expensive</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Greyhound bus</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - $15 single, $27.50 return<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - direct to the 2. ##blank##<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - long 3. ##blank##</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Airport Shuttle</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 4. ##blank## service<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - every 2 hours<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - $35 single, $65 return<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- need to 5. ##blank##</span></p>', 'no', '[\"taxi\\/cab\\/a taxi\\/a cab\",\"city centre\\/center\",\"wait\",\"door-to-door\\/door to door\",\"reserve\\/reserve a seat\"]', 5, NULL, NULL),
(8, 55, '<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>AIRPORT SHUTTLE BOOKING FORM</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">To:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Milton<br />\r\nDate:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6. ##blank##&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;No. of passengers: One</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Bus Time:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7. ##blank## pm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Type to ticket: Single</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Janet 8. ##blank##</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Flight No:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9. ##blank##&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;From: London Heathrow</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Address in Milton:&nbsp; &nbsp; &nbsp; &nbsp;Vacation Motel 24, Kitchener Street</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Fare:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $35</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Credit Card No: (&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Visa) 10. ##blank##</span></p>', 'no', '[\"17th October\\/17th of October\\/the 17th October\\/the 17th of October\",\"12.30\",\"Thomson\",\"\\u0410\\u0421 936\",\"3303 8450 2045 6837\"]', 5, NULL, NULL);

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
(2, 3, '7. In the context of this passage, the author uses the term ‘characteristic’ in the first sentence to refer to a', '[\"A. period of darkness\",\"B. person who operates a lighthouse\",\"C. pattern painted on a lighthouse\",\"D. distinctive light signal\"]', '[\"3\"]', 1, NULL, NULL),
(3, 3, '8. According to the passage, what kind of signal has long periods of light that are regularly broken by two or more periods of darkness?', '[\"A. Group occulting\",\"B. Flashing\",\"C. Occulting\",\"D. Group flashing\"]', '[\"0\"]', 1, NULL, NULL),
(4, 3, '9. What does the term \'regular intervals\' mean?', '[\"A) Time periods that occur randomly\",\"B) Fixed and consistent time gaps between occurrences\",\"C) Unequal and unpredictable time spans\",\"D) Irregular instances with no specific pattern\"]', '[\"1\"]', 1, NULL, NULL),
(5, 5, '13. What is the main point of the first paragraph?', '[\"(A) The waves created by ocean currents are very large.\",\"(B) Despite the strength of the wind, it only moves surface water.\",\"(C) Deep ocean water is seldom affected by forces that move water.\",\"(D) The tides are the most powerful force to affect the movement of ocean water.\"]', '[\"3\"]', 1, NULL, NULL),
(6, 5, '14. It can be inferred from the passage that the most important factor in determining how much gravitational effect one object in space has on the tides is', '[\"(A) size\",\"(B) distance\",\"(C) temperature\",\"(D) density\"]', '[\"1\"]', 1, NULL, NULL),
(7, 5, '15. The word \"correspondingly\" in the last sentence is closest in meaning to', '[\"(A) unpredictably\",\"(B) interestingly\",\"(C) similarly\",\"(D) unusually\"]', '[\"2\"]', 1, NULL, NULL),
(8, 7, '4.', '[\"a. One should take your duties seriously.\",\"b. You should take your duties seriously.\",\"c. You should take one\\u2019s duties seriously.\"]', '[\"1\"]', 1, NULL, NULL),
(9, 7, '5.', '[\"a. Sam has seen on a bicycle yesterday.\",\"b. Sam saw on a bicycle yesterday.\",\"c. Sam was seen on a bicycle yesterday.\"]', '[\"2\"]', 1, NULL, NULL),
(10, 7, '6.', '[\"a. Neither the basket or the apples was expensive.\",\"b. Neither the basket nor the apples was expensive.\",\"c. Neither the basket nor the apples were expensive.\"]', '[\"2\"]', 1, NULL, NULL),
(11, 9, '10.', '[\"a. Bought and sold active stocks are stocks which are frequently.\",\"b. Stocks which are frequently bought and sold active stocks.\",\"c. Active stocks are stocks which are frequently bought and sold.\",\"d. Active stocks are frequently bought and sold which stocks.\"]', '[\"2\"]', 1, NULL, NULL),
(12, 9, '11.', '[\"a. If there had been more time, we finished the project.\",\"b. If there were more time, we would have finished the project.\",\"c. If there had been more time, we would finish the project.\",\"d. If there had been more time, we would have finished the project.\"]', '[\"3\"]', 1, NULL, NULL),
(13, 9, '12.', '[\"a. Rarely do tornados last longer than an hour.\",\"b. Rarely tornados last longer than an hour.\",\"c. Rarely tornados that last longer than an hour.\",\"d. Tornados rarely lasts longer than an hour.\"]', '[\"0\"]', 1, NULL, NULL),
(14, 13, '22. She needed to ___________ on her studies to prepare for the upcoming exam.', '[\"a. memorize\",\"b. read\",\"c. concentrate\"]', '[\"2\"]', 1, NULL, NULL),
(15, 13, '23. It\'s important to ___________ a balanced diet with fruits and vegetables for good health.', '[\"a. consume\",\"b. cook\",\"c. avoid\"]', '[\"0\"]', 1, NULL, NULL),
(16, 13, '24. ___________ he had studied diligently for the exam, he couldn\'t perform as well as he had hoped.', '[\"a. Since\",\"b. Because\",\"c. Although\"]', '[\"2\"]', 1, NULL, NULL),
(17, 15, '28. ___________ the intrepid explorers faced risks courageously, they were not foolhardy, choosing instead to avoid needless dangers.', '[\"a. When\",\"b. While\",\"c. Moreover\",\"d. Consequently\"]', '[\"2\"]', 1, NULL, NULL),
(18, 15, '29. Although his memoirs contained scathing criticisms of his opponents, the politician ________ vindictiveness as his motive.', '[\"a. disavowed\",\"b. claimed\",\"c. disparaged\",\"d. substantiated\"]', '[\"0\"]', 1, NULL, NULL),
(19, 15, '30. Once the bustling center of commerce, the traditional marketplace\'s prominence has __________ in the wake of a gleaming, modern shopping mall towering over the city.', '[\"a. replaced\",\"b. located\",\"c. arrived\",\"d. waned\"]', '[\"3\"]', 1, NULL, NULL),
(25, 20, '14. What took the group by surprise?', '[\"A. the amount of rain\",\"B. the number of possible routes\",\"C. the length of the journey\"]', '[\"0\"]', 1, NULL, NULL),
(26, 20, '15. How did Charles feel about having to change routes?', '[\"A. He reluctantly accepted it.\",\"B. He was irritated by the diversion.\",\"C. It made no difference to his enjoyment.\"]', '[\"2\"]', 1, NULL, NULL),
(27, 23, '7. What kind of dog was Hachiko?', '[\"a) Labrador\",\"b) Akita\",\"c) Golden Retriever\"]', '[\"1\"]', 1, NULL, NULL),
(28, 23, '8. Why did Hachiko wait at the train station every day?', '[\"a) To play with other dogs\",\"b) To greet his owner\",\"c) To catch a train\"]', '[\"1\"]', 1, NULL, NULL),
(29, 23, '9. What is the statue of Hachiko a symbol of?', '[\"a) Loyalty and devotion\",\"b) Speed and agility\",\"c) Independence and freedom\"]', '[\"0\"]', 1, NULL, NULL),
(30, 25, '13. According to the passage, how do the animals in zoos suffer cruelty?', '[\"a) by being forced to perform for the visitors\",\"b) by being physically tortured or abused\",\"c) by being starved to death\",\"d) by being kept in artificial environments\"]', '[\"3\"]', 1, NULL, NULL),
(31, 25, '14. According to the paragraph, what is the reason for which the big animals like lions have evolved?', '[\"a) to become highly intelligent\",\"b) to pursuit their prey\",\"c) to hunt and chase in cages\",\"d) to play with other animals\"]', '[\"1\"]', 1, NULL, NULL),
(32, 25, '15. What may happen to highly intelligent and curious animals like chimpanzees and polar bears in a zoo?', '[\"a) They enjoy the zoo environment\",\"b) They become more relaxed\",\"c) They may become upset\",\"d) They frustrate the zoo environment\"]', '[\"2\"]', 1, NULL, NULL),
(33, 27, '4.', '[\"a. There is some books on the desk.\",\"b. There are some books on the desk.\",\"c. There are some book on the desk.\"]', '[\"1\"]', 1, NULL, NULL),
(34, 27, '5.', '[\"a. Can you lends me your book?\",\"b. Can you lends me yours book?\",\"c. Can you lend me your book?\"]', '[\"2\"]', 1, NULL, NULL),
(35, 27, '6.', '[\"a. We are playing a cricket match this afternoon.\",\"b. We are play a cricket match this afternoon.\",\"c. We will playing a cricket match this afternoon.\"]', '[\"0\"]', 1, NULL, NULL),
(36, 30, '13. Shakespeare wrote many _____________________________.', '[\"(A) plays, they are now being presented on public television.\",\"(B) plays, and they have been presented on public television.\",\"(C) plays, which public television has now presented.\",\"(D) plays; they are now being presented on public television.\"]', '[\"3\"]', 1, NULL, NULL),
(37, 30, '14. Nowadays airport security guards have the right to search ___________', '[\"(A) people\'s bags who act in a suspicious manner\",\"(B) person\'s bags who act in a suspicious manner\",\"(C) the bags of people who act in a suspicious manner\",\"(D) the bags of persons that act in a suspicious manner\"]', '[\"2\"]', 1, NULL, NULL),
(38, 30, '15. The reporter informed that housing prices in Sylhet were ______', '[\"(A) higher than any other city in the country\",\"(B) higher than every other city in the country\",\"(C) higher than those in any other city in the country\",\"(D) higher than any city in the country\"]', '[\"2\"]', 1, NULL, NULL),
(39, 33, '22. He\'s an _______ person who gets along with everyone.', '[\"a. boring\",\"b. easygoing\",\"c. healthy\"]', '[\"1\"]', 1, NULL, NULL),
(40, 33, '23. It was ________ when she fell down in front of everyone.', '[\"a. crazy\",\"b. confident\",\"c. embarrassing\"]', '[\"2\"]', 1, NULL, NULL),
(41, 33, '24. After a long day at work, he felt _________.', '[\"a. exhausted\",\"b. energetic\",\"c. strong\"]', '[\"0\"]', 1, NULL, NULL),
(42, 39, '1. Sabiha is Esha\'s:', '[\"a) sister\",\"b) mother\",\"c) father\"]', '[\"1\"]', 1, NULL, NULL),
(43, 39, '2. Faisal, Sabiha, Jahed, and Esha went to the beach:', '[\"a) at night\",\"b) in the evening\",\"c) in the morning\"]', '[\"2\"]', 1, NULL, NULL),
(44, 39, '3. Last Sunday the family had:', '[\"a) a lot of homework\",\"b) a boring time\",\"c) a good time\"]', '[\"2\"]', 1, NULL, NULL),
(45, 42, '10. According to the first paragraph, what evidence is there that crows have interested people for a long time?', '[\"(A) The large number of stories about crows\",\"(B) The frequency with which crows are sighted\",\"(C) The amount of research that has been conducted on crows\",\"(D) The ease with which crows are identified\"]', '[\"0\"]', 1, NULL, NULL),
(46, 42, '11. According to the second paragraph crows are poor subjects for field research for all of the following reasons EXCEPT:', '[\"(A) They can successfully avoid observers.\",\"(B) They are hard to distinguish from one another.\",\"(C) They can be quite aggressive.\",\"(D) They are difficult to catch.\"]', '[\"2\"]', 1, NULL, NULL),
(47, 42, '12. In the second paragraph, the author implies that using radio transmitters would allow a researcher who studies crows to', '[\"(A) identify individual crows\",\"(B) follow flocks of crows over long distances\",\"(C) record the times when crows are most active\",\"(D) help crows that become sick or injured\"]', '[\"0\"]', 1, NULL, NULL),
(48, 45, '4.', '[\"a. I do not know much people in this town.\",\"b. I do not know much people on this town.\",\"c. I do not know many people in this town.\"]', '[\"2\"]', 1, NULL, NULL),
(49, 45, '5.', '[\"a. They are always go on long vacation in summer.\",\"b. They can always went on long vacation in summer.\",\"c. They always go on long vacation in summer.\"]', '[\"2\"]', 1, NULL, NULL),
(50, 45, '6.', '[\"a. He eats a heavy breakfast, or he runs 5 miles every morning.\",\"b. He eats a heavy breakfast, but he runs 5 miles every morning.\",\"c. He eats a heavy breakfast, for he runs 5 miles every morning.\"]', '[\"2\"]', 1, NULL, NULL),
(51, 47, '10.', '[\"a. The workers who I see in the bus stop every afternoon seem tired and dejected.\",\"b. The workers whom I see in the bus stop every afternoon seem tired and dejected.\",\"c. The workers which I see in the bus stop every afternoon seem tired and dejected.\",\"d. The workers whom I see in the bus stop every afternoon seems tired and dejected.\"]', '[\"1\"]', 1, NULL, NULL),
(52, 47, '11.', '[\"a. By the time the troops arrive, the combat group will spend several weeks waiting.\",\"b. By the time the troops arrive, the combat group will have spent several weeks waiting.\",\"c. By the time the troops arrived, the combat group will have spent several weeks waiting.\",\"d. By the time the troops arrived, the combat group will be spending several weeks waiting.\"]', '[\"1\"]', 1, NULL, NULL),
(53, 47, '12.', '[\"a. Eggs may be boiling in the shell, scrambled, fried, and cooked in countless another way.\",\"b. Eggs may be boiled in the shell, scrambled, fried, and cooking in countless other ways.\",\"c. Eggs may be boiled in the shell, scrambled, fried, and cooked in countless other ways.\",\"d. Eggs may be boiled in the shell, scrambled, fried, and cooked in countless another ways.\"]', '[\"2\"]', 1, NULL, NULL),
(54, 50, '19. The old house on the corner looked __________ with its overgrown garden.', '[\"a. small\",\"b. strange\",\"c. worried\"]', '[\"1\"]', 1, NULL, NULL),
(55, 50, '20. On the weekend, we had a __________ afternoon picnic in the park with our friends.', '[\"a. famous\",\"b. strong\",\"c. pleasant\"]', '[\"2\"]', 1, NULL, NULL),
(56, 50, '21. The invention of the smartphone has ____________ the way we communicate.', '[\"a. modernized\",\"b. dropped\",\"c. freed\"]', '[\"0\"]', 1, NULL, NULL),
(57, 53, '28. I can vouch for his honesty; I have always found him \"veracious\" and carefully observant of the truth.', '[\"(A) arbitrary\",\"(B) plausible\",\"(C) innocuous\",\"(D) truthful\"]', '[\"3\"]', 1, NULL, NULL),
(58, 53, '29. The coach’s harsh rebuke deeply wounded the star quarterback, who had never been \"reprimanded\" like that before.', '[\"(A) summoned\",\"(B) reproached\",\"(C) stimulated\",\"(D) placated\"]', '[\"1\"]', 1, NULL, NULL),
(59, 53, '30. She was pleased by the \"accolades\" she received; like everyone else, she enjoyed being admired.', '[\"(A) entertainments\",\"(B) awards\",\"(C) charities\",\"(D) vindications\"]', '[\"1\"]', 1, NULL, NULL);

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
(1, 17, 'What types of films does Louise like?', '[\"A. Action\",\"B. Comedies\",\"C. Musicals\",\"D. Romance\",\"E. Westerns\",\"F. Wildlife\"]', '[\"1\",\"3\",\"5\"]', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_passages`
--

CREATE TABLE `test_passages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `passage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_passages`
--

INSERT INTO `test_passages` (`id`, `test_id`, `section_id`, `title`, `passage`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Passage-1', '<p><span style=\"font-size:18px\">It is a clear and bright morning. A woman is walking down the street, holding a small boy&#39;s hand. The boy seems very happy. He is holding a colorful toy. He is wearing a red cap and a blue T-shirt. They&#39;re going to visit a lighthouse near the sea.</span></p>', '2024-02-27 23:28:56', '2024-02-27 23:28:56'),
(3, 1, 2, 'Passage-2', '<p><span style=\"font-size:18px\">Lighthouses are tall towers with powerful lights. They help sailors figure out where they are, tell them when they&#39;re close to land, and alert them about hazardous rocks and reefs. They&#39;re built in noticeable spots along the shore, as well as on islands, reefs, and sandbars.</span></p>', '2024-02-27 23:34:47', '2024-02-27 23:34:47'),
(4, 1, 3, 'Passage-3', '<p><span style=\"font-size:18px\">Every lighthouse has a distinctive pattern of light known as its characteristic. There are five basic characteristics; fixed, flashing, occulting, group flashing, and group occulting. A fixed signal is a steady beam. A flashing signal has periods of darkness longer than periods of light, while an occulting signal&rsquo;s periods of light are longer. a group-flashing light gives off two or more flashes at regular intervals, and a group-occulting signal consists of a fixed light with two or more periods of darkness at regular intervals.</span></p>', '2024-02-27 23:35:09', '2024-02-27 23:35:09'),
(5, 1, 4, 'Passage-4', '<p><span style=\"font-size:18px\">In the past, the job of lighthouse keeper was lonely and difficult, if somewhat romantic. Lighthouse keepers put in hours of tedious work maintaining the lights. Today, lighthouses are almost entirely automated with human supplying only occasional maintenance. Because of improvements in navigational technology, the importance of lighthouses has diminished. There are only about 340 functioning lighthouses in existence in the United States today, compared to about 1,500 in 1990, and there are only about 1,400 functioning lighthouses outside the United States. Some decommissioned lighthouses have been preserved as historical monuments.</span></p>', '2024-02-27 23:35:36', '2024-02-27 23:35:36'),
(6, 1, 5, 'Passage-5', '<p><span style=\"font-size:18px\">Every drop of water in the ocean, even in the deepest parts, responds to the forces that create the tides. No other force that affects the sea is so strong. Compared with the tides, the waves created by the wind are surface movements felt no more than a hundred fathoms below the surface. The currents also seldom involve more than the upper several hundred fathoms despite their impressive sweep.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\">The tides are a response of the waters of the ocean to the pull of the Moon and the more distant Sun. In theory, there is a gravitational attraction between the water and even the outermost star of the universe. In reality, however, the pull of remote stars is so slight as to be obliterated by the control of the Moon and, to a lesser extent, the Sun. Just as the Moon rises later each day by fifty minutes, on the average, so, in most places, the time of high tide is correspondingly later each day.</span></p>', '2024-02-27 23:36:16', '2024-02-27 23:36:16'),
(7, 2, 19, 'Passage- 1', '<p><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>My Pet Cat</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">I have a pet cat. Her name is Whiskers. She is small and fluffy. Whiskers has white fur and big green eyes. She likes to sleep in the sun and chase after toy mice. Every day, I give her food and water. Sometimes, I brush her fur to keep it clean. Whiskers is my best friend.</span></span></p>', '2024-05-26 00:30:23', '2024-05-26 00:30:23'),
(8, 2, 20, 'Passage- 2', '<p><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Our Furry Friends</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Pets are great friends. They come in many types. Some people have dogs, others have cats, and some have birds or fish. Pets make us happy. They say hello by wagging their tails or purring softly. Dogs love walks and playing fetch. Cats enjoy sleeping in the sun and chasing toys. Birds sing pretty songs, and fish swim stylishly. Taking care of pets is important. We feed them, give them water, and make sure they are healthy and happy. Pets teach us to be responsible and show us love every day.</span></span></p>', '2024-05-26 00:34:15', '2024-05-26 00:34:15'),
(9, 2, 21, 'Passage- 3', '<p><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Hachiko: The Loyal Companion</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Hachiko was a famous dog in Japan known for his incredible loyalty. He was an Akita breed and lived with his owner, Professor Ueno, in Tokyo. Every day, Hachiko would accompany Professor Ueno to the train station and wait for him to return from work. One day while at work, Professor Ueno passed away unexpectedly, but Hachiko continued to wait for him at the train station every day for nine years, until his own passing. Hachiko&#39;s loyalty touched the hearts of many people, and a statue was erected in his honor at the Shibuya train station in Tokyo, where he used to wait. Today, the statue of Hachiko is a popular meeting spot and a symbol of faithfulness and devotion.</span></span></p>', '2024-05-26 00:40:05', '2024-05-26 00:40:05'),
(10, 2, 22, 'Passage- 4', '<p><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Roles of Horses and Dogs in Civilization</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Throughout history, horses and dogs have played crucial roles in helping humans establish civilizations. Horses were used for transportation, agriculture, and warfare. They helped humans travel long distances, plow fields, and carry goods. In ancient times, cavalry units mounted on horses provided military strength and mobility. Similarly, dogs were domesticated thousands of years ago and served various purposes. They were used for hunting, herding, guarding, and companionship. Dogs helped humans track and catch prey, protect livestock, and provide security. Additionally, their keen senses and loyalty made them valuable allies in various endeavors. The partnership between humans, horses, and dogs contributed significantly to the development and progress of societies worldwide, shaping the course of history and paving the way for modern civilization.</span></span></p>', '2024-05-26 00:43:43', '2024-05-26 00:43:43'),
(11, 2, 23, 'Passage- 5', '<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Many of us have enjoyed visiting a zoo and consider it a day out having fun. Seeing real animals face to face can be thrilling and exciting, but many people wonder whether the animals themselves while entertaining us, are suffering in the zoos. Many zoos do not have enough money to provide the animals with the basic features of a proper environment. Most animals are put in an artificial environment (e.g., cages). This isolation from their natural habitat can amount to cruelty. In some zoos, we see concrete floors for burrowing animals like rabbits. Cruelty may be shown in ways other than physical abuse or starvation. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Big predators like lions and tigers are created to chase and hunt. By depriving them of these activities, we forget the reason for which they have evolved. These big cats lie in cages in the zoo eating the food given to them and they have nothing else to do. Highly intelligent and curious animals like chimpanzees and polar bears may become frustrated in a zoo; they need a challenging environment.</span></span></p>', '2024-05-26 00:47:02', '2024-05-26 00:47:02'),
(12, 3, 37, 'Passage- 1', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Faisal is a fisherman. He lives by the sea. He works on his small boat, sailing out to sea every morning. His wife, Sabiha, is a housewife. They have two children, Jahed and Esha. Jahed is thirteen and Emma is ten. They both go to school.</span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Last Sunday, the family woke up early. Sabiha prepared a breakfast of fresh fish and rice. Then they went to the beach. Faisal and Jahed spent the morning watching waves, while Sabiha and Esha built sandcastles. The weather was sunny and warm, and they had a great time.</span></span></span></p>', '2024-05-27 03:51:03', '2024-05-27 03:51:03'),
(13, 3, 38, 'Passage- 2', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">In the coastal areas of Bangladesh, more than five million people catch fish from the sea to earn money. But they don&#39;t have modern boats and other important facilities. So fishermen face many problems. Most of the fish in the Bay of Bengal are caught by fishermen using old traditional ways. Also, they have to deal with pirates who are a danger to them.</span></span></span></p>', '2024-05-27 03:55:19', '2024-05-27 03:55:19'),
(14, 3, 39, 'Passage- 3', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">For 150 years scientists have tried to determine the solar constant, the amount of solar energy that reaches the Earth. Yet, even in the most cloud-free regions of the planet, the solar constant cannot be measured accurately. <strong>Gas</strong> molecules and <strong>dust</strong> particles in the atmosphere absorb and scatter sunlight and prevent some wavelengths of the light from ever reaching the ground.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">With the arrival of satellites, however, scientists have finally been able to measure the Sun&#39;s output without being obstructed by the Earth&#39;s atmosphere. Solar Max, a satellite from the NASA, has been measuring the Sun&#39;s output since February 1980. Although a breakdown in the satellite&#39;s control system limited its observation for a few years, the satellite was repaired in orbit by astronauts from the space shuttle in 1984. Max&#39;s observations indicate that the solar constant is not really constant after all.</span></span></span></p>', '2024-05-27 04:01:30', '2024-05-27 04:01:30'),
(15, 3, 40, 'Passage- 4', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Crows are probably the most frequently met and easily identifiable members of the native fauna of the United States. The great number of tales, legends, and myths about these birds indicates that people have been exceptionally interested in them for a long time. On the other hand, when it comes to substantive &mdash; particularly behavioral &mdash; information, crows are less well known than many comparably common species and, for that matter, not a few quite uncommon ones: the endangered California condor, to cite one obvious example. There are practical reasons for this.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Crows are notoriously poor and aggravating subjects for field research. Keen observers and quick learners, they are astute about the intentions of other creatures, including researchers, and adept at avoiding them. Because they are so numerous, active, and monochromatic, it is difficult to distinguish one crow from another. Bands, radio transmitters, or other identifying devices can be attached to them, but this of course requires catching live crows, who are among the wariest and most untrappable of birds.</span></span></span></p>', '2024-05-27 04:05:47', '2024-05-27 04:05:47'),
(16, 3, 41, 'Passage- 5', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Each advance in microscopic technique has provided scientists with new perspective, on the function of living organisms and the nature of matter itself. The invention of the visible-light microscope late in the sixteenth century introduced a previously unknown realm of single-celled plants and animals. In the twentieth century, electron microscopes have provided direct views of viruses and minuscule surface structures. Now another type of microscope, one that utilizes X rays rather than light or electrons, offers a different way of examining tiny details; it should extend human perception still farther into the natural world.</span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">The dream of building an X-ray microscope dates to 1895; its development, however, was virtually halted in the 1940&#39;s because the development of the electron microscope was progressing rapidly. During the 1940&#39;s electron microscopes routinely achieved resolution better than that possible with a visible-light microscope, while the performance of X-ray microscopes resisted improvement. In recent years, however, interest in X-ray microscopes has revived, largely because of advances such as the development of new sources of X-ray illumination. As a result, the brightness available today is millions of times that of X-ray tubes, which, for most of the century, were the only available sources of soft X rays.</span></span></span></p>', '2024-05-27 04:10:37', '2024-05-27 04:10:37');

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
(1, 1, '1. What time of day is it in the text?', '[\"A) Evening\",\"B) Morning\",\"C) Afternoon\",\"D) Night\"]', '[\"1\"]', 1, NULL, NULL),
(2, 1, '2. What is the color of boy’s cap?', '[\"A) Blue\",\"B) Red\",\"C) White\",\"D) Black\"]', '[\"1\"]', 1, NULL, NULL),
(3, 1, '3. Where are the woman and the boy going?', '[\"A) School\",\"B) Market\",\"C) Lighthouse\",\"D) Library\"]', '[\"2\"]', 1, NULL, NULL),
(4, 4, '10. What does the word \'tedious\' in the text mean?', '[\"A) Exciting and stimulating\",\"B) Boring and monotonous\",\"C) Quick and efficient\",\"D) Complex and challenging\"]', '[\"1\"]', 1, NULL, NULL),
(5, 4, '11. The author implies that, compared to those of the past, contemporary lighthouses', '[\"A. employ more powerful lights\",\"B. require less maintenance\",\"C. are more difficult to operate\",\"D. are more romantic\"]', '[\"1\"]', 1, NULL, NULL),
(6, 4, '12. There is information in the fourth paragraph to support which of these statements?', '[\"A. There are more lighthouses in the United States now than there were in 1990.\",\"B. There are more lighthouses in the United States today than in any other single country.\",\"C. There are more functioning lighthouses in the United States today than there are lighthouses preserved as historical monuments.\",\"D. There were more lighthouses in the United States in 1990 than there are elsewhere in the world today.\"]', '[\"3\"]', 1, NULL, NULL),
(7, 8, '7.', '[\"a. The amount of students who attended all the classes is very small.\",\"b. The number of students who attended all the classes are very small.\",\"c. The number of students who attended all the classes is very small.\",\"d. The amount of students who attended all the classes are very small.\"]', '[\"2\"]', 1, NULL, NULL),
(8, 8, '8.', '[\"a. Women have voted in presidential elections since 1921.\",\"b. Women voted in presidential elections since 1921.\",\"c. Women have voted in presidential elections for 1921.\",\"d. Women have been voted in presidential elections since 1921.\"]', '[\"0\"]', 1, NULL, NULL),
(9, 8, '9.', '[\"a. The salary of a teacher\\u2019s is lower than a lawyer.\",\"b. The salary of a teacher is lower than a lawyer.\",\"c. The salary of a teacher is lower than that of a lawyer\\u2019s.\",\"d. The salary of a teacher is lower than that of a lawyer.\"]', '[\"3\"]', 1, NULL, NULL),
(10, 10, '13.', '[\"a. An ant\\u2019s antennae provide them with the senses of hear, smell, touch, and taste.\",\"b. An ant\\u2019s antennae provide it with the senses of hear, smell, touch, and taste.\",\"c. An ant\\u2019s antennae provide it with the senses of hearing, smell, touch, and taste.\",\"d. An ant\\u2019s antennae provide it with the senses of hearing, smelling, touching, and tasting.\"]', '[\"2\"]', 1, NULL, NULL),
(11, 10, '14.', '[\"a. The mallard is the ancestor of most types of domestic ducks is well documented.\",\"b. The mallard which is the ancestor of most types of domestic ducks is well documented.\",\"c. The mallard that is the ancestor of most types of domestic ducks is well documented.\",\"d. That the mallard is the ancestor of most types of domestic ducks is well documented.\"]', '[\"3\"]', 1, NULL, NULL),
(12, 10, '15.', '[\"a. One cannot see through translucent materials, but light can pass through them.\",\"b. One cannot see through translucent materials, but light can pass through it.\",\"c. One cannot see through translucent material, but light can pass through it.\",\"d. One cannot see through translucents materials, but light can pass through them.\"]', '[\"0\"]', 1, NULL, NULL),
(13, 12, '19. The sofa was very ___________ to sit on.', '[\"a. costly\",\"b. comfortable\",\"c. broken\"]', '[\"1\"]', 1, NULL, NULL),
(14, 12, '20. The telephone was a remarkable ___________.', '[\"a. discovery\",\"b. invention\",\"c. talking\"]', '[\"1\"]', 1, NULL, NULL),
(15, 12, '21. Our city is located in the northern ___________ of the country.', '[\"a. river\",\"b. border\",\"c. region\"]', '[\"2\"]', 1, NULL, NULL),
(21, 21, '1. What is the name of the pet cat?', '[\"a) Fluffy\",\"b) Whiskers\",\"c) Tiger\"]', '[\"1\"]', 1, NULL, NULL),
(22, 21, '2. What color are Whiskers\' eyes?', '[\"a) Blue\",\"b) Green\",\"c) Brown\"]', '[\"1\"]', 1, NULL, NULL),
(23, 21, '3. What does the writer do to keep Whiskers\' fur clean?', '[\"a) Takes her for a walk\",\"b) Gives her a bath\",\"c) Brushes her fur\"]', '[\"2\"]', 1, NULL, NULL),
(24, 24, '10. What were horses used for in ancient civilizations?', '[\"a) Transportation, agriculture, and warfare\",\"b) Fishing and farming\",\"c) Entertainment and cooking\"]', '[\"0\"]', 1, NULL, NULL),
(25, 24, '11. What role did dogs play in ancient societies?', '[\"a) They were used for cooking\",\"b) They served as companions only\",\"c) They were used for hunting, herding, and guarding\"]', '[\"2\"]', 1, NULL, NULL),
(26, 24, '12. How did the partnership between humans, horses, and dogs contribute to civilization?', '[\"a) It had no impact on civilization\",\"b) It helped shape the course of history and progress of societies\",\"c) It caused conflicts and wars\"]', '[\"1\"]', 1, NULL, NULL),
(27, 28, '7.', '[\"a. Each of the boys are ready the take the test now.\",\"b. Each of the boys ready the take the test now.\",\"c. Each of the boys was ready the take the test now.\",\"d. Each of the boys is ready to take the test now.\"]', '[\"3\"]', 1, NULL, NULL),
(28, 28, '8.', '[\"a. I am waiting since 5 o\\u2019clock.\",\"b. I have wait since 5 o\'clock.\",\"c. I have been waiting since 5 o\'clock.\",\"d. I been waiting for 5 o\'clock.\"]', '[\"2\"]', 1, NULL, NULL),
(29, 28, '9.', '[\"a. I would like to visit but not living in Australia.\",\"b. I would like to visit but not live in Australia.\",\"c. I would like visit but not live in Australia.\",\"d. I would like visiting but not live in Australia.\"]', '[\"1\"]', 1, NULL, NULL),
(30, 31, '1. You can do the work \"alone\".', '[\"a. easily\",\"b. without others\\u2019 help\",\"c. fast\"]', '[\"1\"]', 1, NULL, NULL),
(31, 31, '2. We should respect the \"elders\".', '[\"a. children\",\"b. juniors\",\"c. seniors\"]', '[\"2\"]', 1, NULL, NULL),
(32, 31, '3. She is planning to \"climb\" a mountain.', '[\"a. come down\",\"b. go up\",\"c. lie down\"]', '[\"1\"]', 1, NULL, NULL),
(33, 34, '25. Her outfit was absolutely ----: everyone was admiring it.', '[\"(A) ordinary\",\"(B) stunning\",\"(C) mundane\",\"(D) irregular\"]', '[\"1\"]', 1, NULL, NULL),
(34, 34, '26. The economic downturn caused by the global ---- affected businesses worldwide.', '[\"(A) success\",\"(B) recession\",\"(C) prosperity\",\"(D) recovery\"]', '[\"1\"]', 1, NULL, NULL),
(35, 34, '27. The comedian\'s performance was so ---- that the entire audience was laughing uncontrollably.', '[\"(A) dull\",\"(B) boring\",\"(C) shocking\",\"(D) hilarious\"]', '[\"3\"]', 1, NULL, NULL),
(36, 40, '4. What is the primary occupation of over five million people in the coastal areas of Bangladesh?', '[\"a) Boating\",\"b) Fishing\",\"c) Earning money\"]', '[\"1\"]', 1, NULL, NULL),
(37, 40, '5. Why do fishermen in the coastal areas of Bangladesh face many problems?', '[\"a) Lack of modern boats and facilities\",\"b) Cyclones and floods\",\"c) High demand for fish\"]', '[\"0\"]', 1, NULL, NULL),
(38, 40, '6. How do most fishermen in the Bay of Bengal catch fish?', '[\"a) Using modern equipment\",\"b) Using traditional methods\",\"c) Employing the pirates\"]', '[\"2\"]', 1, NULL, NULL),
(39, 41, '7. Why does the author mention \"gas\" and \"dust\" in the 1st paragraph?', '[\"(A) They magnify the solar constant.\",\"(B) Scientific equipment is ruined by gas and dust.\",\"(C) They interfere with accurate measurement of the solar constant.\"]', '[\"2\"]', 1, NULL, NULL),
(40, 41, '8. Why is it not possible to measure the solar constant accurately without a satellite?', '[\"(A) Some areas on Earth receive more solar energy than others.\",\"(B) There is not enough sunlight during the day.\",\"(C) The Earth\'s atmosphere interferes with the sunlight.\"]', '[\"2\"]', 1, NULL, NULL),
(41, 41, '9. What does this passage mainly discuss?', '[\"(A) The launching of a weather satellite\",\"(B) The components of the Earth\'s atmosphere\",\"(C) The measurement of variations in the solar constant\"]', '[\"2\"]', 1, NULL, NULL),
(42, 43, '13. According to the passage, the invention of the visible-light microscope allowed scientists to', '[\"(A) see viruses directly\",\"(B) develop the electron microscope later on\",\"(C) understand more about the distribution of the chemical elements\",\"(D) discover single-celled plants and animals they had never seen before\"]', '[\"3\"]', 1, NULL, NULL),
(43, 43, '14. Why does the author mention the visible-light microscope in the first paragraph?', '[\"(A) To begin a discussion of sixteenth-century discoveries\",\"(B) To put the X-ray microscope in a historical perspective\",\"(C) To show how limited its uses are\",\"(D) To explain how it functioned\"]', '[\"1\"]', 1, NULL, NULL),
(44, 43, '15. Why did it take so long to develop the X-ray microscope?', '[\"(A) Funds for research were insufficient.\",\"(B) The source of illumination was not bright enough until recently.\",\"(C) Materials used to manufacture X-ray tubes were difficult to obtain.\",\"(D) X-ray microscopes were too complicated to operate.\"]', '[\"1\"]', 1, NULL, NULL),
(45, 46, '7.', '[\"a. The number of people in the meeting was around 3,000.\",\"b. The number of people in the meeting were around 3,000.\",\"c. A number of people in the meeting was around 3,000.\",\"d. A number of people in the meeting were around 3,000.\"]', '[\"0\"]', 1, NULL, NULL),
(46, 46, '8.', '[\"a. Crows make nests out of leaves and their own feathers.\",\"b. Crows make nests out of leaves and its own feathers.\",\"c. Crow make nests out of leaves and their own feathers.\",\"d. Crows make nests out of leaves and his or her own feathers.\"]', '[\"0\"]', 1, NULL, NULL),
(47, 46, '9.', '[\"a. They had been playing cricket before the storm break.\",\"b. They have been playing cricket before the storm broke.\",\"c. They played cricket before the storm had broken out.\",\"d. They had been playing cricket before the storm broke.\"]', '[\"3\"]', 1, NULL, NULL),
(48, 49, '1. I do not know his present \"address\".', '[\"a. hotel\",\"b. room\",\"c. location\"]', '[\"2\"]', 1, NULL, NULL),
(49, 49, '2. This place is \"safe\" for travelling.', '[\"a. not good\",\"b. not dangerous\",\"c. not boring\"]', '[\"1\"]', 1, NULL, NULL),
(50, 49, '3. She \"likes\" gardening.', '[\"a. come down\",\"b. enjoys\",\"c. lie down\"]', '[\"1\"]', 1, NULL, NULL),
(51, 52, '22. Stick to the main points; your tendency to be ____________ with go off-topic stories spoils impact of your presentation.', '[\"(A) innocent\",\"(B) digressive\",\"(C) critical\",\"(D) persistent\"]', '[\"1\"]', 1, NULL, NULL),
(52, 52, '23. Instruction typically benefits from a ____________ arrangement of students as it reduces the diversity of student abilities within the classroom', '[\"(A) heterogeneous\",\"(B) systematic\",\"(C) homogeneous\",\"(D) fragmented\"]', '[\"2\"]', 1, NULL, NULL),
(53, 52, '24. With such an ____________ position at the negotiation table, it\'s unlikely that we\'ll achieve any agreement.', '[\"(A) exemplary\",\"(B) iridescent\",\"(C) indolent\",\"(D) obdurate\"]', '[\"3\"]', 1, NULL, NULL),
(54, 56, '11. PS Camping has been organising holidays for', '[\"A. 15 years.\",\"B. 20 years.\",\"C. 25 years.\"]', '[\"1\"]', 1, NULL, NULL),
(55, 56, '12. The company has most camping sites in', '[\"A. France.\",\"B. Italy.\",\"C. Switzerland.\"]', '[\"0\"]', 1, NULL, NULL),
(56, 56, '13. Which organised activity can children do every day of the week?', '[\"A. football\",\"B. drama\",\"C. model making\"]', '[\"1\"]', 1, NULL, NULL),
(57, 56, '14. Some areas of the sites have a &#39;no noise&#39; rule after', '[\"A. 9.30 p.m.\",\"B. 10.00 p.m.\",\"C. 10.30 p.m.\"]', '[\"2\"]', 1, NULL, NULL),
(58, 56, '15. The holiday insurance that is offered by PS Camping', '[\"A. can be charged on an annual basis.\",\"B. is included in the price of the holiday.\",\"C. must be taken out at the time of booking.\"]', '[\"2\"]', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_submissions`
--

CREATE TABLE `test_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_log_id` int(11) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `sub_question_id` bigint(20) NOT NULL,
  `exercise_id` bigint(20) NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `answered_text` varchar(255) DEFAULT NULL,
  `submitted_ans` varchar(255) DEFAULT NULL,
  `is_correct` varchar(255) DEFAULT NULL,
  `obtained_mark` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_submissions`
--

INSERT INTO `test_submissions` (`id`, `activity_log_id`, `question_id`, `sub_question_id`, `exercise_id`, `question_type`, `answered_text`, `submitted_ans`, `is_correct`, `obtained_mark`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'radio', NULL, '\"0\"', 'no', 0, '2024-05-22 04:31:28', '2024-05-22 04:31:28'),
(2, 1, 1, 2, 1, 'radio', NULL, '\"1\"', 'yes', 1, '2024-05-22 04:31:28', '2024-05-22 04:31:28'),
(3, 1, 1, 3, 1, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 04:31:28', '2024-05-22 04:31:28'),
(4, 2, 2, 1, 2, 'drop-down', NULL, '\"2\"', 'no', 0, '2024-05-22 04:31:37', '2024-05-22 04:31:37'),
(5, 2, 2, 2, 2, 'drop-down', NULL, '\"2\"', 'no', 0, '2024-05-22 04:31:37', '2024-05-22 04:31:37'),
(6, 2, 2, 3, 2, 'drop-down', NULL, '\"3\"', 'yes', 1, '2024-05-22 04:31:37', '2024-05-22 04:31:37'),
(7, 3, 3, 2, 3, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 04:32:12', '2024-05-22 04:32:12'),
(8, 3, 3, 3, 3, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 04:32:12', '2024-05-22 04:32:12'),
(9, 3, 3, 4, 3, 'multiple-choice', NULL, '\"1\"', 'yes', 1, '2024-05-22 04:32:12', '2024-05-22 04:32:12'),
(10, 4, 4, 4, 4, 'radio', NULL, '\"1\"', 'yes', 1, '2024-05-22 06:04:12', '2024-05-22 06:04:12'),
(11, 4, 4, 5, 4, 'radio', NULL, '\"1\"', 'yes', 1, '2024-05-22 06:04:12', '2024-05-22 06:04:12'),
(12, 4, 4, 6, 4, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 06:04:12', '2024-05-22 06:04:12'),
(13, 5, 5, 5, 5, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:04:20', '2024-05-22 06:04:20'),
(14, 5, 5, 6, 5, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-05-22 06:04:20', '2024-05-22 06:04:20'),
(15, 5, 5, 7, 5, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:20', '2024-05-22 06:04:20'),
(16, 6, 6, 4, 6, 'drop-down', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:35', '2024-05-22 06:04:35'),
(17, 6, 6, 5, 6, 'drop-down', NULL, '\"2\"', 'no', 0, '2024-05-22 06:04:35', '2024-05-22 06:04:35'),
(18, 6, 6, 6, 6, 'drop-down', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:35', '2024-05-22 06:04:35'),
(19, 7, 7, 8, 7, 'multiple-choice', NULL, '\"1\"', 'yes', 1, '2024-05-22 06:04:40', '2024-05-22 06:04:40'),
(20, 7, 7, 9, 7, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:40', '2024-05-22 06:04:40'),
(21, 7, 7, 10, 7, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:04:40', '2024-05-22 06:04:40'),
(22, 8, 8, 7, 8, 'radio', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:46', '2024-05-22 06:04:46'),
(23, 8, 8, 8, 8, 'radio', NULL, '\"2\"', 'no', 0, '2024-05-22 06:04:46', '2024-05-22 06:04:46'),
(24, 8, 8, 9, 8, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 06:04:46', '2024-05-22 06:04:46'),
(25, 9, 9, 11, 9, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:04:54', '2024-05-22 06:04:54'),
(26, 9, 9, 12, 9, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:04:54', '2024-05-22 06:04:54'),
(27, 9, 9, 13, 9, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-05-22 06:04:54', '2024-05-22 06:04:54'),
(28, 10, 10, 10, 10, 'radio', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:05:02', '2024-05-22 06:05:02'),
(29, 10, 10, 11, 10, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:02', '2024-05-22 06:05:02'),
(30, 10, 10, 12, 10, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:02', '2024-05-22 06:05:02'),
(31, 11, 11, 7, 11, 'drop-down', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:09', '2024-05-22 06:05:09'),
(32, 11, 11, 8, 11, 'drop-down', NULL, '\"3\"', 'no', 0, '2024-05-22 06:05:09', '2024-05-22 06:05:09'),
(33, 11, 11, 9, 11, 'drop-down', NULL, '\"2\"', 'no', 0, '2024-05-22 06:05:09', '2024-05-22 06:05:09'),
(34, 12, 12, 13, 12, 'radio', NULL, '\"2\"', 'no', 0, '2024-05-22 06:05:15', '2024-05-22 06:05:15'),
(35, 12, 12, 14, 12, 'radio', NULL, '\"2\"', 'no', 0, '2024-05-22 06:05:15', '2024-05-22 06:05:15'),
(36, 12, 12, 15, 12, 'radio', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:15', '2024-05-22 06:05:15'),
(37, 13, 13, 14, 13, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:05:20', '2024-05-22 06:05:20'),
(38, 13, 13, 15, 13, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:20', '2024-05-22 06:05:20'),
(39, 13, 13, 16, 13, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:20', '2024-05-22 06:05:20'),
(40, 14, 14, 10, 14, 'drop-down', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:05:30', '2024-05-22 06:05:30'),
(41, 14, 14, 11, 14, 'drop-down', NULL, '\"2\"', 'no', 0, '2024-05-22 06:05:30', '2024-05-22 06:05:30'),
(42, 14, 14, 12, 14, 'drop-down', NULL, '\"3\"', 'yes', 1, '2024-05-22 06:05:30', '2024-05-22 06:05:30'),
(43, 15, 15, 17, 15, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-05-22 06:05:35', '2024-05-22 06:05:35'),
(44, 15, 15, 18, 15, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:05:35', '2024-05-22 06:05:35'),
(45, 15, 15, 19, 15, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-05-22 06:05:35', '2024-05-22 06:05:35'),
(46, 16, 16, 1, 16, 'fill-blank', '[\"sdf\",\"asdf\",\"asdf\",\"asd\",\"asd\"]', 'null', '0', 0, '2024-05-22 06:05:47', '2024-05-22 06:05:47'),
(47, 17, 19, 2, 17, 'fill-blank', '[\"asdf\",\"asd\"]', 'null', '0', 0, '2024-05-22 06:05:53', '2024-05-22 06:05:53'),
(48, 17, 17, 1, 17, 'multi-selector', NULL, '\"not_answered\"', '0', 0, '2024-05-22 06:05:53', '2024-05-22 06:05:53'),
(49, 18, 20, 25, 18, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-05-22 06:06:00', '2024-05-22 06:06:00'),
(50, 18, 20, 26, 18, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-05-22 06:06:00', '2024-05-22 06:06:00'),
(51, 18, 18, 3, 18, 'fill-blank', '[\"asd\",\"asd\",\"asd\"]', 'null', '0', 0, '2024-05-22 06:06:00', '2024-05-22 06:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `test_submission_activity_logs`
--

CREATE TABLE `test_submission_activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submission_log_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `finished_part` bigint(20) NOT NULL,
  `start_log` bigint(20) NOT NULL,
  `end_log` bigint(20) NOT NULL,
  `spent_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_submission_activity_logs`
--

INSERT INTO `test_submission_activity_logs` (`id`, `submission_log_id`, `module_id`, `finished_part`, `start_log`, `end_log`, `spent_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1716373786, 1716373888, '602', 'submitted', '2024-05-22 04:31:28', '2024-05-22 04:31:28'),
(2, 1, 1, 2, 1716373888, 1716373897, '9', 'submitted', '2024-05-22 04:31:37', '2024-05-22 04:31:37'),
(3, 1, 1, 3, 1716373898, 1716373932, '34', 'submitted', '2024-05-22 04:32:12', '2024-05-22 04:32:12'),
(4, 1, 1, 4, 1716379442, 1716379452, '10', 'submitted', '2024-05-22 06:04:12', '2024-05-22 06:04:12'),
(5, 1, 1, 5, 1716379452, 1716379460, '8', 'submitted', '2024-05-22 06:04:20', '2024-05-22 06:04:20'),
(6, 1, 2, 6, 1716379460, 1716379475, '15', 'submitted', '2024-05-22 06:04:35', '2024-05-22 06:04:35'),
(7, 1, 2, 7, 1716379475, 1716379480, '5', 'submitted', '2024-05-22 06:04:40', '2024-05-22 06:04:40'),
(8, 1, 2, 8, 1716379480, 1716379486, '6', 'submitted', '2024-05-22 06:04:46', '2024-05-22 06:04:46'),
(9, 1, 2, 9, 1716379486, 1716379494, '8', 'submitted', '2024-05-22 06:04:54', '2024-05-22 06:04:54'),
(10, 1, 2, 10, 1716379494, 1716379502, '8', 'submitted', '2024-05-22 06:05:02', '2024-05-22 06:05:02'),
(11, 1, 3, 11, 1716379502, 1716379509, '7', 'submitted', '2024-05-22 06:05:09', '2024-05-22 06:05:09'),
(12, 1, 3, 12, 1716379509, 1716379515, '6', 'submitted', '2024-05-22 06:05:15', '2024-05-22 06:05:15'),
(13, 1, 3, 13, 1716379515, 1716379520, '5', 'submitted', '2024-05-22 06:05:20', '2024-05-22 06:05:20'),
(14, 1, 3, 14, 1716379520, 1716379530, '10', 'submitted', '2024-05-22 06:05:30', '2024-05-22 06:05:30'),
(15, 1, 3, 15, 1716379530, 1716379535, '5', 'submitted', '2024-05-22 06:05:35', '2024-05-22 06:05:35'),
(16, 1, 4, 16, 1716379535, 1716379547, '12', 'submitted', '2024-05-22 06:05:47', '2024-05-22 06:05:47'),
(17, 1, 4, 17, 1716379547, 1716379553, '6', 'submitted', '2024-05-22 06:05:53', '2024-05-22 06:05:53'),
(18, 1, 4, 18, 1716379553, 1716379560, '7', 'submitted', '2024-05-22 06:06:00', '2024-05-22 06:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `test_submission_logs`
--

CREATE TABLE `test_submission_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `advisor_id` int(11) NOT NULL,
  `test_id` int(11) DEFAULT NULL,
  `status` enum('started','pending','completed') NOT NULL,
  `test_start` varchar(255) DEFAULT NULL,
  `test_end` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_submission_logs`
--

INSERT INTO `test_submission_logs` (`id`, `student_id`, `advisor_id`, `test_id`, `status`, `test_start`, `test_end`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, 'completed', '1716373786.5465', '1716379560', '2024-05-22 04:31:28', '2024-05-22 06:06:00');

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
(2, 'Muktadir', 'muktadir.barc@gmail.com', NULL, '$2y$12$iJ7PnzhWSo.9ckCoxy.4.uFj94eYvHU9s/OJGLH0rmo5Xv8yvzQgO', 2, 'active', NULL, '2024-02-28 21:49:33', '2024-03-14 22:26:52'),
(3, 'Soniya Akter', 'soniya2.barc@gmail.com', NULL, '$2y$12$YN7Gj64.RCQG2TnfyVQKwOGGeu8HexZEJFgwZB2G7KwKLJp0hlTeK', 0, 'active', NULL, '2024-02-28 21:49:33', '2024-03-14 22:24:25'),
(4, 'Saida Tanjin', 'tanjin.barc@gmail.com', NULL, '$2y$12$MB.W4H2bVZXXZvlPMj0JBOTe7F1fb4Rxe7Zc91//ssm8RT0rOSyQe', 3, 'active', NULL, '2024-02-28 22:15:42', '2024-03-14 22:25:03'),
(5, 'Mousumi Mou', 'mousumi.barc@gmail.com', NULL, '$2y$12$i811p6YiRHoMLiXov9hTn.qY7Cb5stnRShQ1vSUkb2Yyulof.ItKC', 3, 'active', NULL, '2024-02-28 22:16:50', '2024-03-14 22:25:38'),
(6, 'Registration Department', 'registration@barc.com', NULL, '$2y$12$i811p6YiRHoMLiXov9hTn.qY7Cb5stnRShQ1vSUkb2Yyulof.ItKC', 4, 'active', NULL, '2024-02-28 22:16:50', '2024-02-28 22:18:02'),
(7, 'Munjerin Firoz', 'shoma.barc@gmail.com', NULL, '$2y$12$dOmLTahiea2EZsjZx1W8qei7UP4XzlhkhcSdVksb6AYtpeqvabSbu', 2, 'active', NULL, '2024-03-14 22:27:35', '2024-03-14 22:27:35'),
(8, 'Afsana Akter', 'afrin.barc@gmail.com', NULL, '$2y$12$GJ1P2JGX8Z5odVCv7pHfAeqjAFAs2fL9/2.sZRx7rJrgDQoX/1uB6', 2, 'active', NULL, '2024-03-14 22:28:07', '2024-03-14 22:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_infos`
--

CREATE TABLE `visitor_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_log_id` int(11) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `how_you_know` varchar(255) DEFAULT NULL,
  `expected_country` varchar(255) DEFAULT NULL,
  `expected_score` int(11) DEFAULT NULL,
  `refer_stu_name` varchar(255) DEFAULT NULL,
  `refer_phone_number` varchar(255) DEFAULT NULL,
  `refer_batch_name` varchar(255) DEFAULT NULL,
  `purpose_of_ielts` varchar(255) DEFAULT NULL,
  `ielts_test_center` varchar(255) DEFAULT NULL,
  `ielts_exam_type` varchar(255) DEFAULT NULL,
  `category_of_ielts` varchar(255) DEFAULT NULL,
  `ielts_can_id` varchar(255) DEFAULT NULL,
  `ielts_exam_date` varchar(255) DEFAULT NULL,
  `comments_from_student` varchar(255) DEFAULT NULL,
  `feedback_from_advisor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_infos`
--

INSERT INTO `visitor_infos` (`id`, `visitor_log_id`, `occupation`, `address`, `location`, `organization`, `date_of_birth`, `education`, `how_you_know`, `expected_country`, `expected_score`, `refer_stu_name`, `refer_phone_number`, `refer_batch_name`, `purpose_of_ielts`, `ielts_test_center`, `ielts_exam_type`, `category_of_ielts`, `ielts_can_id`, `ielts_exam_date`, `comments_from_student`, `feedback_from_advisor`, `created_at`, `updated_at`) VALUES
(1, 1, 'University Student', 'Sector 11', 'Uttara', 'Uttara University', '19-05-2024', 'HSC', 'student_reference', 'USA', 7, 'Ariful Rahman', '017850540839', 'na', 'Academic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-19 06:22:27', '2024-05-19 06:22:27');

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
(1, 4, 'Minar Ahmed', 'minar.barc@gmail.com', '01521210037', 'ielts_courses', 'approved', 'seen', 'not_seen', '1716121347', '2024-05-19 06:22:27', '2024-05-19 06:29:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `test_audio`
--
ALTER TABLE `test_audio`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `test_passages`
--
ALTER TABLE `test_passages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_radios`
--
ALTER TABLE `test_radios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_submissions`
--
ALTER TABLE `test_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_submission_activity_logs`
--
ALTER TABLE `test_submission_activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_submission_logs`
--
ALTER TABLE `test_submission_logs`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_tests`
--
ALTER TABLE `manage_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_test_questions`
--
ALTER TABLE `manage_test_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `manage_test_sections`
--
ALTER TABLE `manage_test_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
-- AUTO_INCREMENT for table `test_audio`
--
ALTER TABLE `test_audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_drop_downs`
--
ALTER TABLE `test_drop_downs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `test_fill_blanks`
--
ALTER TABLE `test_fill_blanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_multiple_choices`
--
ALTER TABLE `test_multiple_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `test_multi_selectors`
--
ALTER TABLE `test_multi_selectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_passages`
--
ALTER TABLE `test_passages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `test_radios`
--
ALTER TABLE `test_radios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `test_submissions`
--
ALTER TABLE `test_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `test_submission_activity_logs`
--
ALTER TABLE `test_submission_activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test_submission_logs`
--
ALTER TABLE `test_submission_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitor_infos`
--
ALTER TABLE `visitor_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
