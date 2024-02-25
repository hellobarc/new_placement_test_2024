-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 07:47 AM
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
(1, '2014_10_12_000000_create_users_table', 1),
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
(25, '2024_02_19_051419_create_visitor_infos_table', 15),
(26, '2024_02_19_051017_create_visitor_logs_table', 16),
(30, '2024_02_23_115348_create_follow_ups_table', 17);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@hellobarc.com', NULL, '$2y$12$dm5TOcAhMPzCnQCGsds7HOpQGTWIHJ/8jh5541FQknwB3QBPQfbF.', 1, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19'),
(2, 'Manager User', 'manager@itsolutionstuff.com', NULL, '$2y$12$aJXaGS8E6XRS8s1xwLZFlODbojXJSUm3duqb8Vb1ZV096aINAVNyS', 2, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19'),
(3, 'User', 'student@barc', NULL, '$2y$12$AXZzTmdNQCzMLCEdcTPT2eteDcaD22CrLI97lDVGtp1qXX/6oIWtG', 0, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19'),
(4, 'Advisor', 'advisor@barc.com', NULL, '$2y$12$aJXaGS8E6XRS8s1xwLZFlODbojXJSUm3duqb8Vb1ZV096aINAVNyS', 3, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19'),
(5, 'Advisor2', 'advisor2@barc.com', NULL, '$2y$12$aJXaGS8E6XRS8s1xwLZFlODbojXJSUm3duqb8Vb1ZV096aINAVNyS', 3, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19'),
(6, 'Advisor3', 'advisor3@barc.com', NULL, '$2y$12$aJXaGS8E6XRS8s1xwLZFlODbojXJSUm3duqb8Vb1ZV096aINAVNyS', 3, NULL, '2024-02-05 23:25:19', '2024-02-05 23:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_infos`
--

CREATE TABLE `visitor_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_log_id` int(11) NOT NULL,
  `purpose_of_ielts` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `expected_country` varchar(255) NOT NULL,
  `expected_score` int(11) NOT NULL,
  `how_you_know` varchar(255) NOT NULL,
  `comments_from_student` varchar(255) DEFAULT NULL,
  `feedback_from_advisor` varchar(255) DEFAULT NULL,
  `branch_recomendation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_infos`
--

INSERT INTO `visitor_infos` (`id`, `visitor_log_id`, `purpose_of_ielts`, `occupation`, `address`, `location`, `education`, `organization`, `date_of_birth`, `expected_country`, `expected_score`, `how_you_know`, `comments_from_student`, `feedback_from_advisor`, `branch_recomendation`, `created_at`, `updated_at`) VALUES
(1, 1, 'Academic', 'Govt. Service', 'Matikata,Dhaka Cantt.', 'Joydevpur', 'GED', 'na', '15-01-1999', 'UK', 7, 'Website', 'nanannaeeeeeeeee', 'nanananasss', 'House Building', '2024-02-22 05:20:10', '2024-02-22 05:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_logs`
--

CREATE TABLE `visitor_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `purpose_of_visit` varchar(255) NOT NULL,
  `status` enum('approved','unapproved','declined') NOT NULL,
  `assign_advisor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_logs`
--

INSERT INTO `visitor_logs` (`id`, `full_name`, `email`, `mobile`, `purpose_of_visit`, `status`, `assign_advisor`, `created_at`, `updated_at`) VALUES
(1, 'samiu', 'student@barc', '01746808384', 'Spoken', 'approved', 5, '2024-02-22 05:20:10', '2024-02-22 05:20:31');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
