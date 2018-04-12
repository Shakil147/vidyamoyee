-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 06:16 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidyamoyee`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Hulf yearly', NULL, 1, '2018-02-17 22:21:31', '2018-02-17 22:21:31'),
(2, 'Final', NULL, 1, '2018-02-17 22:21:47', '2018-02-17 22:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `group_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Since', NULL, 1, '2018-02-07 08:52:19', '2018-02-07 08:52:19'),
(2, 'Humanities', NULL, 1, '2018-02-07 08:54:24', '2018-02-07 08:54:24'),
(3, 'Commerce', NULL, 1, '2018-02-07 08:55:43', '2018-02-07 08:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `labals`
--

CREATE TABLE `labals` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labals`
--

INSERT INTO `labals` (`id`, `class_name`, `class_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'ONE', NULL, 1, '2018-02-07 09:16:03', '2018-02-07 09:16:03'),
(2, 'Tow', NULL, 1, '2018-02-07 09:16:43', '2018-02-07 09:16:43'),
(3, 'Three', NULL, 1, '2018-02-07 09:17:03', '2018-02-07 09:17:03'),
(4, 'four', NULL, 1, '2018-02-07 09:17:13', '2018-02-07 09:17:13'),
(5, 'five', NULL, 1, '2018-02-07 09:17:23', '2018-02-07 09:17:23'),
(6, 'six', NULL, 1, '2018-02-07 09:17:33', '2018-02-07 09:17:33'),
(7, 'seven', NULL, 1, '2018-02-07 09:17:41', '2018-02-07 09:17:41'),
(8, 'Eight', NULL, 0, '2018-02-07 09:17:52', '2018-02-24 23:45:21'),
(9, 'Nine', NULL, 1, '2018-02-07 09:17:59', '2018-02-07 09:17:59'),
(10, 'Ten', NULL, 1, '2018-02-07 09:18:11', '2018-02-26 22:37:00');

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
(3, '2018_01_29_132605_create_labals_table', 1),
(4, '2018_01_29_155453_create_groups_table', 1),
(5, '2018_01_29_164010_create_exams_table', 1),
(6, '2018_01_29_174836_create_subjects_table', 1),
(7, '2018_01_30_031704_create_students_table', 1),
(8, '2018_01_30_043714_create_sessions_table', 1),
(9, '2018_01_31_035007_create_shifts_table', 1),
(10, '2018_01_31_105300_create_sections_table', 1),
(15, '2018_02_17_095948_create_results_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `indexNO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `written` int(11) DEFAULT NULL,
  `mcq` int(11) DEFAULT NULL,
  `practical` int(11) DEFAULT NULL,
  `createrUserId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `indexNO`, `session_id`, `class_id`, `exam_id`, `subject_id`, `status`, `written`, `mcq`, `practical`, `createrUserId`, `created_at`, `updated_at`) VALUES
(2, 'cd21amh', '1', 9, 1, 2, 1, 56, 26, NULL, 1, '2018-02-18 10:27:24', '2018-02-18 10:27:24'),
(3, 'cd21amh', '1', 9, 1, 3, 1, 74, NULL, NULL, 1, '2018-02-18 10:27:52', '2018-02-18 10:27:52'),
(5, 'cd22bmh', '1', 1, 1, 1, 1, 52, 26, NULL, 1, '2018-02-18 10:37:18', '2018-02-18 10:37:18'),
(6, 'cd22bmh', '1', 1, 1, 2, 3, 65, 34, NULL, 1, '2018-02-18 10:38:13', '2018-02-18 10:38:13'),
(7, 'sm73afm', '1', 8, 1, 1, 1, 56, 23, 0, 1, '2018-02-18 11:14:52', '2018-02-21 01:28:26'),
(9, 'sm73afm', '1', 8, 1, 2, 1, 23, 23, 23, 1, '2018-02-21 01:24:25', '2018-02-21 01:24:25'),
(10, 'sm73afm', '1', 8, 1, 3, 1, 34, 34, 34, 1, '2018-02-21 01:26:51', '2018-02-21 01:27:31'),
(11, 'cd21amh', '1', 9, 1, 1, 1, 23, 34, 40, 1, '2018-02-21 01:43:44', '2018-02-24 04:48:13'),
(13, 'hd23bm1', '1', 10, 1, 3, 1, 51, 17, 23, 1, '2018-02-21 05:31:20', '2018-02-21 05:33:29'),
(14, 'hd23bm1', '1', 10, 1, 4, 1, 45, 23, NULL, 1, '2018-02-21 05:31:38', '2018-02-21 05:31:38'),
(15, 'hd23bm1', '1', 10, 1, 2, 1, 24, 24, 24, 1, '2018-02-21 05:32:14', '2018-02-21 05:32:14'),
(16, 'hd23bm1', '1', 10, 1, 1, 1, 43, 23, 18, 1, '2018-02-21 06:07:34', '2018-02-21 06:07:34'),
(17, 'cd21amh', '1', 9, 1, 4, 1, 56, NULL, NULL, 1, '2018-02-21 12:52:21', '2018-02-21 12:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sections_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `sections_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, 1, '2018-02-07 10:43:50', '2018-02-07 10:43:50'),
(2, 'B', NULL, 1, '2018-02-07 10:43:55', '2018-02-07 10:43:55'),
(3, 'C', NULL, 1, '2018-02-07 10:43:59', '2018-02-07 10:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_name`, `session_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, '2017-18', NULL, 1, '2018-02-07 10:41:59', '2018-02-07 10:41:59'),
(2, '20-18-19', NULL, 1, '2018-02-07 10:42:24', '2018-02-07 10:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `shift_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shift_name`, `shift_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Morning', NULL, 1, '2018-02-07 10:38:46', '2018-02-07 10:38:46'),
(2, 'Day', NULL, 1, '2018-02-07 10:38:59', '2018-02-07 10:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonNO` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardiansFirstName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardiansLastName` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardiansNID` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardiansPhonNO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardiansEmail` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanentAdress` text COLLATE utf8mb4_unicode_ci,
  `presentAdress` text COLLATE utf8mb4_unicode_ci,
  `avator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null.jpg',
  `indexNO` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rollNO` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` int(20) NOT NULL,
  `religion` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coment` text COLLATE utf8mb4_unicode_ci,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `creatorID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstName`, `lastName`, `birthdate`, `phonNO`, `email`, `gardiansFirstName`, `gardiansLastName`, `gardiansNID`, `gardiansPhonNO`, `gardiansEmail`, `permanentAdress`, `presentAdress`, `avator`, `indexNO`, `rollNO`, `group_id`, `class_id`, `section_id`, `shift_id`, `session_id`, `religion`, `gender`, `coment`, `active_status`, `creatorID`, `created_at`, `updated_at`) VALUES
(1, 'Kiron', 'Sarkar', '', '01777734445', 'Kiron@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '', 'p_image/1519243920.jpg', 'hmbi64', '64', '2', '9', '2', '1', 1, 'Islam', 'Mail', NULL, 1, '1', '2018-02-07 11:13:15', '2018-02-21 14:12:00'),
(2, 'Kiron', 'Sarkar', '', '01777734443', 'Kiron2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '', 'p_image/1519243905.jpg', 'hmbi21', '21', '2', '9', '2', '1', 1, 'Islam', 'Mail', NULL, 1, '1', '2018-02-07 11:14:22', '2018-02-21 14:11:45'),
(3, 'Rokshana', 'Dilshad', '02/13/2002', '01768455943', NULL, 'Rukon Uddin', 'Khan', NULL, NULL, NULL, NULL, NULL, 'p_image/1519243882.jpg', 'sm73afm', '73', '1', '8', '1', '1', 1, 'Islam', 'Mail', NULL, 1, '1', '2018-02-13 22:15:25', '2018-02-21 14:11:22'),
(4, 'Druvo Raj', 'Sarkar', '04/16/1997', '01768459478', 'Duroraj54@gmail.com', 'Mondal', NULL, NULL, NULL, NULL, NULL, NULL, 'p_image/1519244132.jpg', 'cd22bmh', '22', '3', '1', '2', '2', 1, 'Hindu', 'Mail', NULL, 1, '1', '2018-02-13 22:23:34', '2018-02-21 14:15:32'),
(6, 'Druvo', 'mia', '08/29/1996', '01768453965', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'p_image/1519244067.jpg', 'cd21amh', '21', '3', '9', '1', '2', 1, 'Hindu', 'Mail', NULL, 1, '1', '2018-02-13 23:51:15', '2018-02-21 14:14:27'),
(7, 'Shakil', 'Mahmud', '06/06/1997', '019537488835', 'Shakilcocmahmud@gmail.com', 'Rukon', 'Uddin', NULL, '1731972154', 'Rukon@gmail.com', NULL, NULL, 'p_image/1519282814.jpg', 'hd23bm1', '23', '2', '10', '2', '2', 1, 'Islam', 'Mail', NULL, 1, '1', '2018-02-18 11:46:48', '2018-02-22 01:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_descroption` text COLLATE utf8mb4_unicode_ci,
  `publication_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `group_id`, `subject_descroption`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Bangla 1st', '101', '4', NULL, 1, '2018-02-07 09:07:26', '2018-02-07 09:07:26'),
(2, 'Bangla 2nd', '102', '4', NULL, 1, '2018-02-07 09:07:51', '2018-02-07 09:07:51'),
(3, 'English 1st', '107', '4', NULL, 1, '2018-02-07 09:08:43', '2018-02-07 09:08:43'),
(4, 'English 2nd', '108', '4', NULL, 1, '2018-02-07 09:09:53', '2018-02-07 09:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhonNO` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+8801xxxxxxxxx',
  `avator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null.jpg',
  `class_descroption` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `PhonNO`, `avator`, `class_descroption`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dev JO', '+8801xxxxxxxxx', 'null.jpg', NULL, 'admin@gmail.com', '$2y$10$C8EfXg6oHQQ2NAAThwTUw.ZLrwdi6of2H4JrV90YtV5rPRUfXewAK', '8Uwj6s5a7E6R6HifUpnFI6JQXN1pM3xYeGWD3hEH1rAZqgWKHFGPVG8QqJh6', '2018-02-07 08:31:58', '2018-02-07 08:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_exam_name_unique` (`exam_name`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_group_name_unique` (`group_name`);

--
-- Indexes for table `labals`
--
ALTER TABLE `labals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `labals_class_name_unique` (`class_name`);

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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_section_name_unique` (`section_name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sessions_session_name_unique` (`session_name`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shifts_shift_name_unique` (`shift_name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_gardiansnid_unique` (`gardiansNID`),
  ADD UNIQUE KEY `students_indexno_unique` (`indexNO`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_subject_name_unique` (`subject_name`),
  ADD UNIQUE KEY `subjects_subject_code_unique` (`subject_code`);

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
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `labals`
--
ALTER TABLE `labals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
