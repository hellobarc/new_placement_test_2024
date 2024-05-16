-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 01:53 PM
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
(1, 'First Test', '50', 'active', '2024-02-27 22:35:30', '2024-02-27 22:35:30');

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
(1, 1, 1, 'radio', '<p><span style=\"font-size:18px\">Choice the correct answer</span></p>', '2024-02-27 22:37:02', '2024-02-27 22:37:02'),
(2, 1, 2, 'drop-down', '<p><span style=\"font-size:18px\">Select the correct option</span></p>', '2024-02-27 22:41:15', '2024-02-27 22:41:15'),
(3, 1, 3, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the correct the answer</span></p>', '2024-02-27 22:47:38', '2024-02-27 22:47:38'),
(4, 1, 4, 'radio', '<p><span style=\"font-size:18px\">Choose the correct answer</span></p>', '2024-02-27 22:56:50', '2024-02-27 22:56:50'),
(5, 1, 5, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the correct answer</span></p>', '2024-02-27 23:03:05', '2024-02-27 23:03:05'),
(6, 1, 6, 'drop-down', '<p><span style=\"font-size:18px\">Select the correct option</span></p>', '2024-02-27 23:37:56', '2024-02-27 23:37:56'),
(7, 1, 7, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the correct sentence from given options.</span></p>', '2024-02-27 23:41:19', '2024-02-27 23:41:19'),
(8, 1, 8, 'radio', '<p><span style=\"font-size:18px\">Select the correct sentence from given options.</span></p>', '2024-02-27 23:43:58', '2024-02-27 23:43:58'),
(9, 1, 9, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the correct sentence from given options.</span></p>', '2024-02-27 23:47:56', '2024-02-27 23:47:56'),
(10, 1, 10, 'radio', '<p><span style=\"font-size:18px\">Select the correct sentence from given options.</span></p>', '2024-02-27 23:50:59', '2024-02-27 23:50:59'),
(11, 1, 11, 'drop-down', '<p><span style=\"font-size:18px\">Select the meaning of the underlined word.</span></p>', '2024-02-27 23:54:32', '2024-02-27 23:54:32'),
(12, 1, 12, 'radio', '<p><span style=\"font-size:18px\">Fill in the gap with the correct word.</span></p>', '2024-02-28 00:00:34', '2024-02-28 00:00:34'),
(13, 1, 13, 'multiple-choice', '<p><span style=\"font-size:18px\">Fill in the gap with the correct word.</span></p>', '2024-02-28 00:03:32', '2024-02-28 00:03:32'),
(14, 1, 14, 'drop-down', '<p><span style=\"font-size:18px\">Select the word that completes the sentence correctly.</span></p>', '2024-02-28 00:06:20', '2024-02-28 00:06:20'),
(15, 1, 15, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the right answer to fill in the gap.</span></p>', '2024-02-28 00:09:58', '2024-02-28 00:09:58'),
(16, 1, 16, 'drop-down', '<p><span style=\"font-size:18px\">Decide <strong>TRUE or FALSE</strong> for each of the following questions.</span></p>', '2024-02-28 00:39:53', '2024-02-28 00:39:53'),
(17, 1, 17, 'multiple-choice', '<p><span style=\"font-size:18px\">Select the correct answer to each of the following questions.</span></p>', '2024-02-28 00:45:19', '2024-02-28 00:45:19'),
(18, 1, 18, 'radio', '<p><span style=\"font-size:18px\">Select the correct answer to each of the following questions.</span></p>', '2024-02-28 00:50:02', '2024-02-28 00:50:02');

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
(18, 'First Test Listening Section 3', 1, 4, NULL, '2024-02-28 00:49:43', '2024-02-28 00:49:43');

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
(44, '2024_02_19_051017_create_visitor_logs_table', 23),
(45, '2024_03_04_054226_create_courses_table', 24);

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
(1, 1, 16, 'Audio script- 1', '1709104657.mp3', '2024-02-28 01:17:37', '2024-02-28 01:17:37'),
(2, 1, 17, 'Audio script- 2', '1709105207.mp3', '2024-02-28 01:26:47', '2024-02-28 01:26:47'),
(3, 1, 18, 'Audio script- 3', '1709105312.mp3', '2024-02-28 01:28:32', '2024-02-28 01:28:32');

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
(1, 2, '4. What kind people need lighthouses?', '[\"A) Farmers in fields\",\"B) Airplane pilots\",\"C) Sailors at sea\",\"D) Mountain climbers on cliffs\"]', '[\"2\"]', 1, NULL, NULL),
(2, 2, '5. Which of the following is NOT mentioned in the passage as one of the functions of lighthouses?', '[\"A. To help sailors find out their location\",\"B. To warn of danger from rocks and reefs\",\"C. To notify sailors that bad weather is approaching\",\"D. To indicate that land is near\"]', '[\"2\"]', 1, NULL, NULL),
(3, 2, '6. The word ‘hazardous’ in the passage means …', '[\"A. High\",\"B. Soft\",\"C. Dangerous\",\"D. Beautiful\"]', '[\"2\"]', 1, NULL, NULL),
(4, 6, '1. I ____________ every morning.', '[\"a. running\",\"b. run\",\"c. to run\"]', '[\"1\"]', 1, NULL, NULL),
(5, 6, '2. The train moves ____________ .', '[\"a. quick\",\"b. very quick\",\"c. quickly\"]', '[\"2\"]', 1, NULL, NULL),
(6, 6, '3. Marium ___________ from Barishal.', '[\"a. is come\",\"b. comes\",\"c. come\"]', '[\"1\"]', 1, NULL, NULL),
(7, 11, '1. We should respect the adult people.', '[\"a. younger\",\"b. busy\",\"c. older\"]', '[\"2\"]', 1, NULL, NULL),
(8, 11, '2. Some students find history class boring.', '[\"a. good\",\"b. not interesting\",\"c. difficult\"]', '[\"1\"]', 1, NULL, NULL),
(9, 11, '3. We bought it from the local market.', '[\"a. nearby\",\"b. railway\",\"c. big\"]', '[\"0\"]', 1, NULL, NULL),
(10, 14, '25. He was exhausted from the long journey; ___________ his excitement about the upcoming adventure kept him enthusiastic and determined.', '[\"a. in addition\",\"b. however,\",\"c. and also,\",\"d. as well as\"]', '[\"1\"]', 1, NULL, NULL),
(11, 14, '26. Our class project assigned by Prof. Hall was successful; ____________ it received recognition at the international level.', '[\"a. meanwhile\",\"b. though,\",\"c. furthermore,\",\"d. however\"]', '[\"2\"]', 1, NULL, NULL),
(12, 14, '27. The biologist’s discovery was truly _______: it occurred not because of any new thinking or diligent effort but because he mistakenly left a few test tubes out of the refrigerator overnight.', '[\"a. assiduous\",\"b. insightful\",\"c. fortuitous\",\"d. ominous\"]', '[\"2\"]', 1, NULL, NULL),
(13, 16, '1. Faisal wakes up late every day.', '[\"Not Given\",\"True\",\"False\"]', '[\"2\"]', 1, NULL, NULL),
(14, 16, '2. Faisal eats bread and eggs for breakfast.', '[\"Not Given\",\"True\",\"False\"]', '[\"1\"]', 1, NULL, NULL),
(15, 16, '3. Faisal helps his mom by watering the plants and feeding the cat.', '[\"Not Given\",\"True\",\"False\"]', '[\"1\"]', 1, NULL, NULL),
(16, 16, '4. Faisal goes to school in the afternoon.', '[\"Not Given\",\"True\",\"False\"]', '[\"2\"]', 1, NULL, NULL),
(17, 16, '5. Faisal reads a book before having dinner.', '[\"Not Given\",\"True\",\"False\"]', '[\"2\"]', 1, NULL, NULL);

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
(20, 17, '6. What does a balanced diet include?', '[\"A) Only fruits and vegetables\",\"B) Only processed foods\",\"C) A variety of foods including fruits, vegetables, whole grains, lean proteins, and healthy fats\",\"D) Only sugary drinks\"]', '[\"2\"]', 1, NULL, NULL),
(21, 17, '7. Why is staying hydrated important?', '[\"A) It helps in gaining weight\",\"B) It regulates body temperature and aids digestion\",\"C) It increases stress levels\",\"D) It has no impact on our health\"]', '[\"1\"]', 1, NULL, NULL),
(22, 17, '8. How much exercise is recommended most days of the week?', '[\"A) At least 10 minutes\",\"B) At least 60 minutes\",\"C) At least 30 minutes of moderate exercise\",\"D) At least 2 hours\"]', '[\"2\"]', 1, NULL, NULL),
(23, 17, '9. What can regular physical activity help with?', '[\"A) It has no impact on health\",\"B) It strengthens muscles but not bones\",\"C) It boosts mood and improves overall health\",\"D) It only benefits physical appearance\"]', '[\"2\"]', 1, NULL, NULL),
(24, 17, '10. How can mindful eating be beneficial?', '[\"A) It helps in eating quickly\",\"B) It prevents overeating and aids digestion\",\"C) It encourages eating without thinking\",\"D) It doesn\\u2019t impact eating habits\"]', '[\"1\"]', 1, NULL, NULL);

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
(6, 1, 5, 'Passage-5', '<p><span style=\"font-size:18px\">Every drop of water in the ocean, even in the deepest parts, responds to the forces that create the tides. No other force that affects the sea is so strong. Compared with the tides, the waves created by the wind are surface movements felt no more than a hundred fathoms below the surface. The currents also seldom involve more than the upper several hundred fathoms despite their impressive sweep.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\">The tides are a response of the waters of the ocean to the pull of the Moon and the more distant Sun. In theory, there is a gravitational attraction between the water and even the outermost star of the universe. In reality, however, the pull of remote stars is so slight as to be obliterated by the control of the Moon and, to a lesser extent, the Sun. Just as the Moon rises later each day by fifty minutes, on the average, so, in most places, the time of high tide is correspondingly later each day.</span></p>', '2024-02-27 23:36:16', '2024-02-27 23:36:16');

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
(16, 18, '11. The first paragraph focuses on which aspect of fog?', '[\"(A) its dangers\",\"(B) its composition\",\"(C) its beauty\",\"(D) its causes\"]', '[\"0\"]', 1, NULL, NULL),
(17, 18, '12. According to the article, fog that occurs along the California coast is generally', '[\"(A) radiation fog\",\"(B) advection fog\",\"(C) frontal fog\",\"(D) steam fog\"]', '[\"1\"]', 1, NULL, NULL),
(18, 18, '13. It can be inferred from the passage that the Labrador Current is', '[\"(A) cold\",\"(B) weak\",\"(C) polluted\",\"(D) warm\"]', '[\"0\"]', 1, NULL, NULL),
(19, 18, '14. The author organizes the discussion of the different types of fog according to', '[\"(A) their geographic locations\",\"(B) their relative density\",\"(C) the types of problems they cause\",\"(D) their relative frequency\"]', '[\"3\"]', 1, NULL, NULL),
(20, 18, '15. The author of the passage is probably an expert in the field of', '[\"(A) physics\",\"(B) economics\",\"(C) transportation\",\"(D) meteorology\"]', '[\"3\"]', 1, NULL, NULL);

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
(1, 1, 1, 1, 1, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:19', '2024-03-02 22:14:19'),
(2, 1, 1, 2, 1, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:19', '2024-03-02 22:14:19'),
(3, 1, 1, 3, 1, 'radio', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:14:19', '2024-03-02 22:14:19'),
(4, 2, 2, 1, 2, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:21', '2024-03-02 22:14:21'),
(5, 2, 2, 2, 2, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:21', '2024-03-02 22:14:21'),
(6, 2, 2, 3, 2, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:21', '2024-03-02 22:14:21'),
(7, 3, 3, 2, 3, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:24', '2024-03-02 22:14:24'),
(8, 3, 3, 3, 3, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:14:24', '2024-03-02 22:14:24'),
(9, 3, 3, 4, 3, 'multiple-choice', NULL, '\"not_answered\"', 'no', 0, '2024-03-02 22:14:24', '2024-03-02 22:14:24'),
(10, 4, 4, 4, 4, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:29', '2024-03-02 22:14:29'),
(11, 4, 4, 5, 4, 'radio', NULL, '\"1\"', 'yes', 1, '2024-03-02 22:14:29', '2024-03-02 22:14:29'),
(12, 4, 4, 6, 4, 'radio', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:29', '2024-03-02 22:14:29'),
(13, 5, 5, 5, 5, 'multiple-choice', NULL, '\"3\"', 'yes', 1, '2024-03-02 22:14:33', '2024-03-02 22:14:33'),
(14, 5, 5, 6, 5, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:33', '2024-03-02 22:14:33'),
(15, 5, 5, 7, 5, 'multiple-choice', NULL, '\"not_answered\"', 'no', 0, '2024-03-02 22:14:33', '2024-03-02 22:14:33'),
(16, 6, 6, 4, 6, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:35', '2024-03-02 22:14:35'),
(17, 6, 6, 5, 6, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:35', '2024-03-02 22:14:35'),
(18, 6, 6, 6, 6, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:35', '2024-03-02 22:14:35'),
(19, 7, 7, 8, 7, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:40', '2024-03-02 22:14:40'),
(20, 7, 7, 9, 7, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:14:40', '2024-03-02 22:14:40'),
(21, 7, 7, 10, 7, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:14:40', '2024-03-02 22:14:40'),
(22, 8, 8, 7, 8, 'radio', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:14:45', '2024-03-02 22:14:45'),
(23, 8, 8, 8, 8, 'radio', NULL, '\"3\"', 'no', 0, '2024-03-02 22:14:45', '2024-03-02 22:14:45'),
(24, 8, 8, 9, 8, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:14:45', '2024-03-02 22:14:45'),
(25, 9, 9, 11, 9, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:14:50', '2024-03-02 22:14:50'),
(26, 9, 9, 12, 9, 'multiple-choice', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:50', '2024-03-02 22:14:50'),
(27, 9, 9, 13, 9, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:14:50', '2024-03-02 22:14:50'),
(28, 10, 10, 10, 10, 'radio', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:14:55', '2024-03-02 22:14:55'),
(29, 10, 10, 11, 10, 'radio', NULL, '\"1\"', 'no', 0, '2024-03-02 22:14:55', '2024-03-02 22:14:55'),
(30, 10, 10, 12, 10, 'radio', NULL, '\"3\"', 'no', 0, '2024-03-02 22:14:55', '2024-03-02 22:14:55'),
(31, 11, 11, 7, 11, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:57', '2024-03-02 22:14:57'),
(32, 11, 11, 8, 11, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:14:57', '2024-03-02 22:14:57'),
(33, 11, 11, 9, 11, 'drop-down', NULL, '\"0\"', 'yes', 1, '2024-03-02 22:14:57', '2024-03-02 22:14:57'),
(34, 12, 12, 13, 12, 'radio', NULL, '\"1\"', 'yes', 1, '2024-03-02 22:15:02', '2024-03-02 22:15:02'),
(35, 12, 12, 14, 12, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:15:02', '2024-03-02 22:15:02'),
(36, 12, 12, 15, 12, 'radio', NULL, '\"1\"', 'no', 0, '2024-03-02 22:15:02', '2024-03-02 22:15:02'),
(37, 13, 13, 14, 13, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:15:06', '2024-03-02 22:15:06'),
(38, 13, 13, 15, 13, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-03-02 22:15:06', '2024-03-02 22:15:06'),
(39, 13, 13, 16, 13, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:15:06', '2024-03-02 22:15:06'),
(40, 14, 14, 10, 14, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:15:09', '2024-03-02 22:15:09'),
(41, 14, 14, 11, 14, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:15:09', '2024-03-02 22:15:09'),
(42, 14, 14, 12, 14, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:15:09', '2024-03-02 22:15:09'),
(43, 15, 15, 17, 15, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:15:14', '2024-03-02 22:15:14'),
(44, 15, 15, 18, 15, 'multiple-choice', NULL, '\"3\"', 'no', 0, '2024-03-02 22:15:14', '2024-03-02 22:15:14'),
(45, 15, 15, 19, 15, 'multiple-choice', NULL, '\"1\"', 'no', 0, '2024-03-02 22:15:14', '2024-03-02 22:15:14'),
(46, 16, 16, 13, 16, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(47, 16, 16, 14, 16, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(48, 16, 16, 15, 16, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(49, 16, 16, 16, 16, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(50, 16, 16, 17, 16, 'drop-down', NULL, '\"0\"', 'no', 0, '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(51, 17, 17, 20, 17, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(52, 17, 17, 21, 17, 'multiple-choice', NULL, '\"3\"', 'no', 0, '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(53, 17, 17, 22, 17, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(54, 17, 17, 23, 17, 'multiple-choice', NULL, '\"2\"', 'yes', 1, '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(55, 17, 17, 24, 17, 'multiple-choice', NULL, '\"2\"', 'no', 0, '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(56, 18, 18, 16, 18, 'radio', NULL, '\"3\"', 'no', 0, '2024-03-02 22:16:32', '2024-03-02 22:16:32'),
(57, 18, 18, 17, 18, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:16:32', '2024-03-02 22:16:32'),
(58, 18, 18, 18, 18, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:16:32', '2024-03-02 22:16:32'),
(59, 18, 18, 19, 18, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:16:32', '2024-03-02 22:16:32'),
(60, 18, 18, 20, 18, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-02 22:16:32', '2024-03-02 22:16:32'),
(61, 1, 1, 1, 1, 'radio', NULL, '\"1\"', 'yes', 1, '2024-03-03 21:35:05', '2024-03-03 21:35:05'),
(62, 1, 1, 2, 1, 'radio', NULL, '\"2\"', 'no', 0, '2024-03-03 21:35:05', '2024-03-03 21:35:05'),
(63, 1, 1, 3, 1, 'radio', NULL, '\"1\"', 'no', 0, '2024-03-03 21:35:05', '2024-03-03 21:35:05'),
(64, 2, 2, 1, 2, 'drop-down', NULL, '\"1\"', 'no', 0, '2024-03-03 21:35:11', '2024-03-03 21:35:11'),
(65, 2, 2, 2, 2, 'drop-down', NULL, '\"1\"', 'no', 0, '2024-03-03 21:35:11', '2024-03-03 21:35:11'),
(66, 2, 2, 3, 2, 'drop-down', NULL, '\"1\"', 'no', 0, '2024-03-03 21:35:11', '2024-03-03 21:35:11');

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
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_submission_activity_logs`
--

INSERT INTO `test_submission_activity_logs` (`id`, `submission_log_id`, `module_id`, `finished_part`, `start_log`, `end_log`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1709439253, 1709439259, 'submitted', '2024-03-02 22:14:19', '2024-03-02 22:14:19'),
(2, 1, 1, 2, 1709439253, 1709439261, 'submitted', '2024-03-02 22:14:21', '2024-03-02 22:14:21'),
(3, 1, 1, 3, 1709439253, 1709439264, 'submitted', '2024-03-02 22:14:24', '2024-03-02 22:14:24'),
(4, 1, 1, 4, 1709439253, 1709439269, 'submitted', '2024-03-02 22:14:29', '2024-03-02 22:14:29'),
(5, 1, 1, 5, 1709439253, 1709439273, 'submitted', '2024-03-02 22:14:33', '2024-03-02 22:14:33'),
(6, 1, 2, 6, 1709439253, 1709439275, 'submitted', '2024-03-02 22:14:35', '2024-03-02 22:14:35'),
(7, 1, 2, 7, 1709439253, 1709439280, 'submitted', '2024-03-02 22:14:40', '2024-03-02 22:14:40'),
(8, 1, 2, 8, 1709439253, 1709439285, 'submitted', '2024-03-02 22:14:45', '2024-03-02 22:14:45'),
(9, 1, 2, 9, 1709439253, 1709439290, 'submitted', '2024-03-02 22:14:50', '2024-03-02 22:14:50'),
(10, 1, 2, 10, 1709439253, 1709439295, 'submitted', '2024-03-02 22:14:55', '2024-03-02 22:14:55'),
(11, 1, 3, 11, 1709439253, 1709439297, 'submitted', '2024-03-02 22:14:57', '2024-03-02 22:14:57'),
(12, 1, 3, 12, 1709439253, 1709439302, 'submitted', '2024-03-02 22:15:02', '2024-03-02 22:15:02'),
(13, 1, 3, 13, 1709439253, 1709439306, 'submitted', '2024-03-02 22:15:06', '2024-03-02 22:15:06'),
(14, 1, 3, 14, 1709439253, 1709439309, 'submitted', '2024-03-02 22:15:09', '2024-03-02 22:15:09'),
(15, 1, 3, 15, 1709439253, 1709439314, 'submitted', '2024-03-02 22:15:14', '2024-03-02 22:15:14'),
(16, 1, 4, 16, 1709439253, 1709439377, 'submitted', '2024-03-02 22:16:17', '2024-03-02 22:16:17'),
(17, 1, 4, 17, 1709439253, 1709439384, 'submitted', '2024-03-02 22:16:24', '2024-03-02 22:16:24'),
(18, 1, 4, 18, 1709439253, 1709439392, 'submitted', '2024-03-02 22:16:32', '2024-03-02 22:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `test_submission_logs`
--

CREATE TABLE `test_submission_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `advisor_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `status` enum('started','pending','completed') NOT NULL,
  `test_start` varchar(255) NOT NULL,
  `test_end` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_submission_logs`
--

INSERT INTO `test_submission_logs` (`id`, `student_id`, `advisor_id`, `test_id`, `status`, `test_start`, `test_end`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, 'completed', '1709439253.2680', '1709439392', '2024-03-02 22:14:19', '2024-03-02 22:16:32'),
(2, 2, 4, 1, 'started', '1709523295.1349', NULL, '2024-03-03 21:35:05', '2024-03-03 21:35:05');

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
(2, 'Manager User', 'manager@barc.com', NULL, '$2y$12$iJ7PnzhWSo.9ckCoxy.4.uFj94eYvHU9s/OJGLH0rmo5Xv8yvzQgO', 2, 'active', NULL, '2024-02-28 21:49:33', '2024-02-28 21:49:33'),
(3, 'User', 'user@barc.com', NULL, '$2y$12$YN7Gj64.RCQG2TnfyVQKwOGGeu8HexZEJFgwZB2G7KwKLJp0hlTeK', 0, 'active', NULL, '2024-02-28 21:49:33', '2024-02-28 21:49:33'),
(4, 'Adviser', 'advisor@barc.com', NULL, '$2y$12$MB.W4H2bVZXXZvlPMj0JBOTe7F1fb4Rxe7Zc91//ssm8RT0rOSyQe', 3, 'active', NULL, '2024-02-28 22:15:42', '2024-02-28 22:15:55'),
(5, 'Adviser1', 'advisor1@barc.com', NULL, '$2y$12$i811p6YiRHoMLiXov9hTn.qY7Cb5stnRShQ1vSUkb2Yyulof.ItKC', 3, 'active', NULL, '2024-02-28 22:16:50', '2024-02-28 22:18:02'),
(6, 'Mock', 'mock@barc.com', NULL, '$2y$12$i811p6YiRHoMLiXov9hTn.qY7Cb5stnRShQ1vSUkb2Yyulof.ItKC', 4, 'active', NULL, '2024-02-28 22:16:50', '2024-02-28 22:18:02');

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
(1, 1, 'Private Service', 'uttara,Dhaka', 'Uttara', 'na', '02-03-2024', 'Graduate', 'Facebook', 'USA', 7, 'Academic', 'House Building', NULL, NULL, '2024-03-02 06:22:54', '2024-03-02 06:22:54'),
(2, 2, 'University Student', 'sector 12', 'Uttara', 'na', '04-03-2024', 'Graduate', 'Facebook', 'USA', 8, 'Academic', 'House Building', NULL, NULL, '2024-03-03 21:26:35', '2024-03-03 21:26:35');

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
(1, 4, 'Minar Ahmed', 'minar.barc@gmail.com', '01521210037', 'ielts_courses', 'approved', 'not_seen', 'not_seen', '1709382174', '2024-03-02 06:22:54', '2024-03-02 21:44:58'),
(2, 4, 'Jannatul Ferdaous', 'jannatul@gmail.com', '01780540839', 'ielts_courses', 'approved', 'not_seen', 'not_seen', '1709522795', '2024-03-03 21:26:35', '2024-03-03 21:34:47');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manage_test_sections`
--
ALTER TABLE `manage_test_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test_fill_blanks`
--
ALTER TABLE `test_fill_blanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_multiple_choices`
--
ALTER TABLE `test_multiple_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `test_multi_selectors`
--
ALTER TABLE `test_multi_selectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_passages`
--
ALTER TABLE `test_passages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_radios`
--
ALTER TABLE `test_radios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `test_submissions`
--
ALTER TABLE `test_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `test_submission_activity_logs`
--
ALTER TABLE `test_submission_activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test_submission_logs`
--
ALTER TABLE `test_submission_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitor_infos`
--
ALTER TABLE `visitor_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
