-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2021 at 12:36 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CodeForces`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_02_203057_create_prombles_table', 1),
(5, '2021_04_19_104635_add_code_to_problems_table', 2);

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
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solvedOn` date NOT NULL,
  `Status` enum('Accepted','Rejected','Wrong Answer','Runtime error','Time Limit Exceed','Memory Limit Exceed','Compilation Error') COLLATE utf8mb4_unicode_ci NOT NULL,
  `submitCount` int DEFAULT NULL,
  `readingTime` decimal(8,2) DEFAULT NULL,
  `thinkingTime` decimal(8,2) DEFAULT NULL,
  `codingTime` decimal(8,2) DEFAULT NULL,
  `debugTime` decimal(8,2) DEFAULT NULL,
  `totalTime` decimal(8,2) DEFAULT NULL,
  `problemLevel` int DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `byYourself` enum('Yes','No','Hint') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codeForcesLevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juniorSheetCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `user_id`, `name`, `solvedOn`, `Status`, `submitCount`, `readingTime`, `thinkingTime`, `codingTime`, `debugTime`, `totalTime`, `problemLevel`, `url`, `byYourself`, `Category`, `created_at`, `updated_at`, `code`, `codeForcesLevel`, `juniorSheetCode`) VALUES
(2, 1, 'Beautiful Year', '2021-04-06', 'Accepted', 1, '2.00', '5.00', '15.00', '0.00', '22.00', 1, 'https://codeforces.com/problemset/problem/271/A', 'Yes', 'Brute Force', '2021-04-05 21:39:19', '2021-04-19 06:13:07', '271', 'A', NULL),
(3, 1, 'Lights Out', '2021-04-06', 'Accepted', 1, '0.38', '0.20', '9.20', '0.00', '9.78', 1, 'https://codeforces.com/problemset/problem/275/A', 'Yes', 'Impl', '2021-04-06 12:00:47', '2021-04-19 06:13:07', '275', 'A', NULL),
(4, 1, 'Jeff and Digits', '2021-04-06', 'Accepted', 4, '4.13', '12.00', '8.00', '12.00', '36.13', 2, 'https://codeforces.com/problemset/problem/352/A?f0a28=2', 'Hint', 'math', '2021-04-06 13:56:17', '2021-04-19 06:13:07', '3520282', '2', NULL),
(5, 1, 'Wizard And Demonstrations', '2021-04-06', 'Accepted', 1, '7.00', '1.20', '13.00', '0.00', '21.20', 1, 'https://codeforces.com/problemset/problem/168/A', 'Yes', 'Implementation', '2021-04-06 14:55:10', '2021-04-19 06:13:07', '168', 'A', NULL),
(6, 1, 'k-string', '2021-04-07', 'Accepted', 2, '3.00', '15.00', '2.00', '2.00', '22.00', 3, 'https://codeforces.com/problemset/problem/219/A', 'No', 'strings', '2021-04-07 10:38:08', '2021-04-19 06:13:07', '219', 'A', NULL),
(7, 1, 'Shooshuns and Sequence', '2021-04-07', 'Accepted', 5, '2.30', '12.00', '10.00', '15.00', '39.30', 1, 'https://codeforces.com/problemset/problem/222/A', 'No', 'implementation', '2021-04-07 16:03:07', '2021-04-19 06:13:07', '222', 'A', NULL),
(8, 1, 'Xenia and Divisors', '2021-04-07', 'Accepted', 3, '2.00', '5.00', '30.00', '2.00', '39.00', 1, 'https://codeforces.com/problemset/problem/342/A', 'Yes', 'greddy', '2021-04-07 17:59:14', '2021-04-19 06:13:07', '342', 'A', NULL),
(9, 1, 'String', '2021-04-07', 'Accepted', 1, '3.00', '1.00', '20.00', '0.00', '24.00', 3, 'https://codeforces.com/problemset/problem/43/B', 'Yes', 'strings', '2021-04-07 18:29:29', '2021-04-19 06:13:07', '43', 'B', NULL),
(10, 1, 'Kitahara Haruki\'s Gift', '2021-04-08', 'Accepted', 2, '2.00', '10.00', '3.00', '12.00', '27.00', 3, 'https://codeforces.com/problemset/problem/433/A', 'No', 'Implementataion', '2021-04-08 09:54:32', '2021-04-19 06:13:07', '433', 'A', NULL),
(11, 1, 'Comparing Strings', '2021-04-08', 'Accepted', 2, '1.40', '2.00', '15.00', '2.00', '20.40', 1, 'https://codeforces.com/problemset/problem/186/A', 'Yes', 'strings', '2021-04-08 10:16:33', '2021-04-19 06:13:07', '186', 'A', NULL),
(12, 1, 'Hungry Sequence', '2021-04-08', 'Accepted', 4, '2.00', '5.00', '6.00', '14.00', '27.00', 5, 'https://codeforces.com/problemset/problem/327/B', 'No', 'math', '2021-04-08 10:57:03', '2021-04-19 06:13:07', '327', 'B', NULL),
(13, 1, 'Big Segment', '2021-04-08', 'Accepted', 1, '3.00', '1.60', '20.00', '0.00', '24.60', 4, 'https://codeforces.com/problemset/problem/242/B', 'Yes', 'sorting', '2021-04-08 12:28:26', '2021-04-19 06:13:07', '242', 'B', NULL),
(14, 1, 'Little Elephant and Bits', '2021-04-08', 'Accepted', 4, '2.00', '10.00', '7.00', '4.00', '23.00', 3, 'https://codeforces.com/problemset/problem/258/A', 'Yes', 'math', '2021-04-08 14:19:49', '2021-04-19 06:13:07', '258', 'A', NULL),
(15, 1, 'Fences', '2021-04-09', 'Accepted', 4, '4.00', '15.00', '12.00', '5.00', '36.00', 3, 'https://codeforces.com/problemset/problem/363/B', 'No', 'Dp', '2021-04-08 21:09:03', '2021-04-19 06:13:07', '363', 'B', NULL),
(16, 1, 'TL', '2021-04-09', 'Accepted', 3, '2.00', '2.30', '12.00', '10.00', '26.30', 2, 'https://codeforces.com/problemset/problem/350/A', 'Yes', 'Greedy', '2021-04-09 10:53:16', '2021-04-19 06:13:07', '350', 'A', NULL),
(17, 1, 'Two Bags Of Potato', '2021-04-09', 'Accepted', 2, '2.50', '12.00', '10.00', '4.00', '28.50', 1, 'https://codeforces.com/problemset/problem/239/A', 'Yes', 'Math', '2021-04-09 12:56:21', '2021-04-19 06:13:07', '239', 'A', NULL),
(18, 1, 'Boys and Girls', '2021-04-09', 'Accepted', 1, '0.01', '1.20', '15.00', '0.00', '16.21', 1, 'https://codeforces.com/problemset/problem/253/A', 'Yes', 'greedy', '2021-04-09 14:53:02', '2021-04-19 06:13:07', '253', 'A', NULL),
(19, 1, 'Unlucky Ticket', '2021-04-10', 'Accepted', 4, '15.00', '4.00', '28.00', '4.00', '51.00', 1, 'https://codeforces.com/problemset/problem/160/B', 'Yes', 'sorting', '2021-04-09 19:31:46', '2021-04-19 06:13:07', '160', 'B', NULL),
(20, 1, 'Cards With Number', '2021-04-10', 'Accepted', 2, '3.00', '10.00', '15.00', '10.00', '38.00', 1, 'https://codeforces.com/problemset/problem/254/A', 'Yes', 'sorting', '2021-04-10 13:05:32', '2021-04-19 06:13:07', '254', 'A', NULL),
(21, 1, 'Domino', '2021-04-10', 'Accepted', 1, '4.00', '16.00', '7.00', '0.00', '27.00', 2, 'https://codeforces.com/problemset/problem/353/A', 'Yes', 'Math', '2021-04-10 14:00:22', '2021-04-19 06:13:07', '353', 'A', NULL),
(22, 1, 'Spy Detected!', '2021-04-10', 'Accepted', 1, '2.00', '3.00', '4.00', '0.00', '9.00', 1, 'https://codeforces.com/contest/1512/problem/A', 'Yes', 'brute force', '2021-04-10 19:42:56', '2021-04-19 06:13:07', '1512', 'A', NULL),
(23, 1, 'Almost Rectangle', '2021-04-10', 'Accepted', 1, '3.00', '10.00', '15.00', '2.00', '30.00', 4, 'https://codeforces.com/contest/1512/problem/B', 'Yes', 'implementation', '2021-04-10 19:43:53', '2021-04-19 06:13:07', '1512', 'B', NULL),
(24, 1, 'A-B Palindrome', '2021-04-11', 'Accepted', 1, '7.00', '30.00', '25.00', '22.00', '84.00', 6, 'https://codeforces.com/contest/1512/problem/C', 'Yes', 'constructive algorithm', '2021-04-10 19:45:01', '2021-04-19 06:13:07', '1512', 'C', NULL),
(25, 1, 'Cinema Line', '2021-04-11', 'Accepted', 2, '4.00', '15.00', '10.00', '5.00', '34.00', 2, 'https://codeforces.com/problemset/problem/349/A', 'Yes', 'impl', '2021-04-10 21:35:02', '2021-04-19 06:13:07', '349', 'A', NULL),
(26, 1, 'Corrupted Array', '2021-04-11', 'Accepted', 2, '1.00', '12.00', '14.00', '10.00', '37.00', 6, 'https://codeforces.com/contest/1512/problem/D', 'Yes', 'constructive algorithm', '2021-04-10 21:38:17', '2021-04-19 06:13:07', '1512', 'D', NULL),
(27, 1, 'Rank List', '2021-04-11', 'Accepted', 2, '0.05', '6.41', '12.00', '15.00', '33.46', 5, 'https://codeforces.com/problemset/problem/166/A', 'Yes', 'Sorting', '2021-04-11 14:39:14', '2021-04-19 06:13:07', '166', 'A', NULL),
(28, 1, 'IQ Test', '2021-04-12', 'Accepted', 1, '4.00', '12.00', '22.00', '0.00', '38.00', 3, 'https://codeforces.com/problemset/problem/287/A', 'Yes', 'implementation', '2021-04-11 19:44:22', '2021-04-19 06:13:07', '287', 'A', NULL),
(29, 1, 'Building Permutation', '2021-04-12', 'Accepted', 2, '3.00', '3.00', '3.00', '3.00', '12.00', 7, 'https://codeforces.com/problemset/problem/285/C', 'Yes', 'sorting', '2021-04-11 20:05:32', '2021-04-19 06:13:07', '285', 'C', NULL),
(30, 1, 'Review Site', '2021-04-12', 'Accepted', 1, '2.00', '3.00', '6.00', '0.00', '11.00', 2, 'https://codeforces.com/contest/1511/problem/A', 'Yes', 'greedy', '2021-04-12 18:39:42', '2021-04-19 06:13:07', '1511', 'A', NULL),
(31, 1, 'Yet Another Card Deck', '2021-04-12', 'Accepted', 1, '5.00', '15.00', '10.00', '2.00', '32.00', 5, 'https://codeforces.com/contest/1511/problem/C', 'Yes', 'data structures', '2021-04-12 18:40:44', '2021-04-19 06:13:07', '1511', 'C', NULL),
(32, 1, 'Kuriyama Mirai\'s Stones', '2021-04-14', 'Accepted', 2, '15.00', '71.00', '5.00', '0.00', '91.00', 6, 'https://codeforces.com/problemset/problem/433/B', 'No', 'DP', '2021-04-14 11:30:55', '2021-04-19 06:13:07', '433', 'B', NULL),
(33, 1, 'Flipping Game', '2021-04-14', 'Accepted', 3, '4.00', '20.00', '40.00', '6.00', '70.00', 5, 'https://codeforces.com/problemset/problem/327/A', 'Yes', 'DP', '2021-04-14 14:25:33', '2021-04-19 06:13:07', '327', 'A', NULL),
(34, 1, 'Adding Digits', '2021-04-15', 'Accepted', 2, '2.00', '5.00', '6.30', '1.00', '14.30', 3, 'https://codeforces.com/problemset/problem/260/A', 'No', 'math', '2021-04-14 19:06:10', '2021-04-19 06:13:07', '260', 'A', NULL),
(35, 1, 'I Wanna Be The Guy', '2021-04-15', 'Accepted', 3, '2.00', '4.00', '12.00', '3.00', '21.00', 2, 'https://codeforces.com/contest/469/problem/A', 'Yes', 'greedy', '2021-04-14 21:07:32', '2021-04-19 06:13:07', '469', 'A', NULL),
(36, 1, 'Is It Rated', '2021-04-15', 'Accepted', 2, '3.00', '10.00', '10.00', '14.00', '37.00', 3, 'https://codeforces.com/contest/807/problem/A', 'No', 'sorting', '2021-04-15 10:33:18', '2021-04-19 06:13:07', '807', 'A', NULL),
(37, 1, 'Olesya and Rodion', '2021-04-15', 'Accepted', 1, '1.10', '1.00', '4.60', '0.00', '6.70', 1, 'https://codeforces.com/contest/584/problem/A', 'Yes', 'math', '2021-04-15 10:41:03', '2021-04-19 06:13:07', '584', 'A', NULL),
(38, 1, 'Football', '2021-04-15', 'Accepted', 1, '1.00', '0.01', '7.12', '0.00', '8.13', 1, 'https://codeforces.com/contest/43/problem/A', 'Yes', 'strings', '2021-04-15 10:51:57', '2021-04-19 06:13:07', '43', 'A', NULL),
(39, 1, 'Brain\'s Photos', '2021-04-15', 'Accepted', 1, '3.00', '1.00', '2.00', '0.00', '6.00', 1, 'https://codeforces.com/contest/707/problem/A', 'Yes', 'implementation', '2021-04-15 11:06:22', '2021-04-19 06:13:07', '707', 'A', NULL),
(40, 1, 'Valera And X', '2021-04-15', 'Accepted', 1, '1.00', '4.00', '14.00', '2.00', '21.00', 3, 'https://codeforces.com/contest/404/problem/A', 'Yes', 'implementation', '2021-04-15 12:17:24', '2021-04-19 06:13:07', '404', 'A', NULL),
(41, 1, 'Arpa’s hard exam and Mehrdad’s naive cheat', '2021-04-15', 'Accepted', 3, '3.00', '10.00', '4.00', '4.00', '21.00', 3, 'https://codeforces.com/contest/742/problem/A', 'Hint', 'number Theory', '2021-04-15 12:55:35', '2021-04-19 06:13:07', '742', 'A', NULL),
(42, 1, 'Calculating Function', '2021-04-15', 'Accepted', 1, '0.03', '10.00', '2.00', '0.00', '12.03', 4, 'https://codeforces.com/contest/486/problem/A', 'No', 'arthimetic progression', '2021-04-15 13:57:46', '2021-04-19 06:13:07', '486', 'A', NULL),
(43, 1, 'Anton and Polyhedrons', '2021-04-16', 'Accepted', 1, '1.00', '2.00', '2.27', '0.00', '5.27', 1, 'https://codeforces.com/contest/785/problem/A', 'Yes', 'strings', '2021-04-15 19:49:32', '2021-04-19 06:13:07', '785', 'A', NULL),
(44, 1, 'Counterexample', '2021-04-16', 'Accepted', 1, '1.00', '10.00', '12.00', '0.00', '23.00', 3, 'https://codeforces.com/contest/483/problem/A', 'Yes', 'number theory', '2021-04-16 11:13:09', '2021-04-19 06:13:07', '483', 'A', NULL),
(45, 1, 'Average Height', '2021-04-16', 'Accepted', 1, '1.00', '2.00', '3.00', '0.00', '6.00', 3, 'https://codeforces.com/contest/1237/problem/A', 'Yes', 'math', '2021-04-16 16:39:17', '2021-04-19 06:13:07', '1237', 'A', NULL),
(46, 1, 'TMT Document', '2021-04-16', 'Accepted', 2, '10.00', '15.00', '20.00', '10.00', '55.00', 5, 'https://codeforces.com/contest/1509/problem/B', 'Yes', 'Dynamic Programming', '2021-04-16 16:40:18', '2021-04-19 06:13:07', '1509', 'B', NULL),
(47, 1, 'Balanced Rating Changes', '2021-04-17', 'Accepted', 1, '2.00', '4.00', '10.00', '15.00', '31.00', 3, 'https://codeforces.com/contest/1237/problem/A', 'Yes', 'math', '2021-04-16 20:11:39', '2021-04-19 06:13:07', '1237', 'A', NULL),
(48, 1, 'Appleman and Card Game', '2021-04-17', 'Accepted', 1, '15.00', '2.00', '5.00', '0.00', '22.00', 3, 'https://codeforces.com/problemset/problem/462/B', 'Yes', 'greedy', '2021-04-17 12:09:56', '2021-04-19 06:13:07', '462', 'B', NULL),
(49, 1, 'Crazy Computer', '2021-04-17', 'Accepted', 1, '0.03', '1.00', '10.00', '2.00', '13.03', 1, 'https://codeforces.com/problemset/problem/716/A', 'Yes', 'implementation', '2021-04-17 14:04:01', '2021-04-19 06:13:07', '716', 'A', NULL),
(50, 1, 'Haiku', '2021-04-17', 'Accepted', 1, '0.03', '1.00', '10.00', '0.00', '11.03', 1, 'https://codeforces.com/problemset/problem/78/A', 'Yes', 'strings', '2021-04-17 14:31:10', '2021-04-19 06:13:07', '78', 'A', NULL),
(51, 1, 'Snow FootPrints', '2021-04-18', 'Accepted', 3, '0.08', '15.00', '10.00', '10.00', '35.08', 3, 'https://codeforces.com/contest/298/problem/A', 'Yes', 'greedy', '2021-04-18 18:29:17', '2021-04-19 06:13:07', '298', 'A', NULL),
(52, 1, 'Launch of Collider', '2021-04-19', 'Accepted', 2, '0.08', '10.00', '12.00', '5.00', '27.08', 3, 'https://codeforces.com/contest/699/problem/A', 'Yes', 'implementation', '2021-04-18 19:13:28', '2021-04-19 06:13:07', '699', 'A', NULL),
(53, 1, 'Ksenia and Pan Scales', '2021-04-19', 'Accepted', 5, '5.00', '2.00', '15.00', '10.00', '32.00', 2, 'https://codeforces.com/contest/382/problem/A', 'Yes', 'greedy', '2021-04-18 21:29:47', '2021-04-19 06:13:07', '382', 'A', NULL),
(55, 1, 'Shaass and Oskols', '2021-04-22', 'Accepted', 1, '4.00', '6.00', '4.00', '0.00', '14.00', 1, 'https://codeforces.com/contest/294/problem/A', 'Yes', 'implementation', '2021-04-22 08:40:51', '2021-04-22 08:41:04', '294', 'A', NULL),
(56, 1, 'New Password', '2021-04-22', 'Accepted', 1, '3.00', '2.00', '7.00', '0.00', '12.00', 2, 'https://codeforces.com/contest/770/problem/A', 'Yes', 'recursion', '2021-04-22 09:36:28', '2021-04-22 09:36:28', '770', 'A', NULL),
(57, 1, 'Wasted Time', '2021-04-22', 'Accepted', 1, '3.00', '20.00', '10.00', '10.00', '43.00', 3, 'https://codeforces.com/contest/127/problem/A', 'Yes', 'geometry', '2021-04-22 14:28:14', '2021-04-22 14:28:14', '127', 'A', NULL),
(58, 1, 'Fancy Fence', '2021-04-22', 'Accepted', 1, '5.00', '15.00', '10.00', '4.00', '34.00', 4, 'https://codeforces.com/contest/270/problem/A', 'Yes', 'geometry,Math', '2021-04-22 14:49:42', '2021-04-22 14:49:42', '270', 'A', NULL),
(59, 1, 'Next Round', '2021-04-23', 'Accepted', 1, '3.00', '2.00', '5.00', '0.00', '10.00', 1, 'https://codeforces.com/contest/158/problem/A', 'Yes', 'implementation', '2021-04-23 10:19:48', '2021-04-23 10:19:48', '158', 'A', NULL),
(60, 1, 'Raising Bacteria', '2021-04-23', 'Accepted', 2, '10.00', '20.00', '10.00', '10.00', '50.00', 6, 'https://codeforces.com/contest/579/problem/A', 'No', 'bitmask', '2021-04-23 14:11:32', '2021-04-23 14:11:32', '579', 'A', NULL),
(61, 1, 'Wizards\' Duel', '2021-04-23', 'Accepted', 1, '5.00', '10.00', '5.00', '0.00', '20.00', 4, 'https://codeforces.com/problemset/problem/591/A', 'No', 'math', '2021-04-23 14:48:24', '2021-04-23 14:48:24', '591', 'A', NULL),
(62, 1, 'George and Accommodation', '2021-04-23', 'Accepted', 1, '5.00', '4.00', '5.00', '0.00', '14.00', 1, 'http://codeforces.com/problemset/problem/467/A', 'Yes', 'implemntation', '2021-04-23 15:05:06', '2021-04-23 15:05:06', '467', 'A', NULL),
(63, 1, 'Grading Students', '2021-04-23', 'Accepted', 1, '4.00', '4.00', '5.00', '0.00', '13.00', 1, 'https://www.hackerrank.com/challenges/grading/problem', 'Yes', 'implenentation', '2021-04-23 15:17:02', '2021-04-23 15:17:02', NULL, 'A', NULL),
(64, 1, 'Soldier and Bananas', '2021-04-24', 'Accepted', 2, '4.00', '10.00', '4.00', '3.00', '21.00', 3, 'https://codeforces.com/problemset/problem/546/A', 'Yes', 'AP', '2021-04-24 09:27:37', '2021-04-24 09:27:37', '546', 'A', NULL),
(65, 1, 'GukiZ and Contest', '2021-04-24', 'Accepted', 1, '3.00', '5.00', '30.00', '10.00', '48.00', 3, 'https://codeforces.com/problemset/problem/551/A', 'No', 'implementation', '2021-04-24 10:49:36', '2021-04-24 10:52:17', '551', 'A', NULL),
(66, 1, 'Combination Lock', '2021-04-24', 'Accepted', 1, '4.00', '10.00', '7.00', '6.00', '27.00', 3, 'https://codeforces.com/problemset/problem/540/A', 'Yes', 'implementation', '2021-04-24 11:16:23', '2021-04-24 11:16:23', '540', 'A', NULL),
(67, 1, 'Vitaly and Night', '2021-04-24', 'Accepted', 2, '0.07', '4.00', '5.00', '3.00', '12.07', 2, 'https://codeforces.com/problemset/problem/595/A', 'Yes', 'constructive algorithm', '2021-04-24 11:36:45', '2021-04-24 11:36:45', '595', 'A', NULL),
(68, 1, 'Sereja and Mugs', '2021-04-25', 'Accepted', 2, '5.00', '8.00', '10.00', '6.00', '29.00', 2, 'https://codeforces.com/problemset/problem/426/A', 'Yes', 'implementation', '2021-04-25 10:55:07', '2021-04-25 10:55:07', '426', 'A', NULL),
(69, 1, 'Line to Cashier', '2021-04-25', 'Accepted', 1, '15.00', '3.00', '5.00', '0.00', '23.00', 2, 'https://codeforces.com/contest/408/problem/A', 'Yes', 'implementation', '2021-04-25 10:55:57', '2021-04-25 12:15:19', '408', 'A', NULL),
(70, 1, 'Garland', '2021-04-25', 'Accepted', 1, '7.00', '15.00', '10.00', '0.00', '32.00', 4, 'https://codeforces.com/contest/408/problem/B', 'Yes', 'implementation', '2021-04-25 12:14:56', '2021-04-25 12:14:56', '408', 'B', NULL),
(71, 1, 'Squats', '2021-04-26', 'Accepted', 1, '4.00', '5.00', '4.00', '0.00', '13.00', 3, 'https://codeforces.com/contest/424/problem/A', 'Yes', 'implementation', '2021-04-26 13:50:07', '2021-04-26 13:50:19', '424', 'A', NULL),
(72, 1, 'Soroban', '2021-04-26', 'Accepted', 1, '5.00', '2.00', '15.00', '2.00', '24.00', 2, 'https://codeforces.com/contest/363/problem/A', 'Yes', 'implamentation', '2021-04-26 15:42:13', '2021-04-26 15:42:13', '363', 'A', NULL),
(73, 1, 'Kyoya and Photobooks', '2021-04-26', 'Accepted', 1, '4.00', '5.00', '2.00', '0.00', '11.00', 3, 'https://codeforces.com/contest/554/problem/A', 'Hint', 'math', '2021-04-26 17:58:53', '2021-04-26 17:59:06', '554', 'A', NULL),
(74, 1, 'Rewards', '2021-04-27', 'Accepted', 1, '4.00', '10.00', '3.00', '0.00', '17.00', 1, 'https://codeforces.com/contest/448/problem/A', 'Yes', 'implementation', '2021-04-27 19:31:00', '2021-04-27 19:31:00', '448', 'A', NULL),
(75, 1, 'Buggy Sorting', '2021-04-28', 'Accepted', 1, '0.07', '7.00', '3.00', '0.00', '10.07', 3, 'https://codeforces.com/contest/246/problem/A', 'Yes', 'constructive algorithms', '2021-04-27 19:46:21', '2021-04-27 19:46:21', '246', 'A', NULL),
(76, 1, 'Greg\'s Workout', '2021-04-28', 'Accepted', 1, '0.13', '5.00', '2.00', '0.00', '7.13', 1, 'https://codeforces.com/contest/255/problem/A', 'Yes', 'implementation', '2021-04-27 20:19:50', '2021-04-27 20:19:50', '255', 'A', NULL),
(77, 1, 'Circle Line', '2021-04-28', 'Accepted', 1, '10.00', '25.00', '10.00', '10.00', '55.00', 4, 'https://codeforces.com/problemset/problem/278/A', 'Yes', 'implementation', '2021-04-27 21:14:29', '2021-04-27 21:14:29', '278', 'A', NULL),
(78, 1, 'Roma and Lucky Numbers', '2021-04-28', 'Accepted', 1, '0.03', '1.00', '2.00', '0.00', '3.03', 1, 'https://codeforces.com/contest/262/problem/A', 'Yes', 'implementation', '2021-04-28 10:40:53', '2021-04-28 10:40:53', '262', 'A', NULL),
(79, 1, 'Bear and Finding Criminals', '2021-04-28', 'Accepted', 2, '0.10', '15.00', '8.00', '4.00', '27.10', 4, 'https://codeforces.com/contest/problem/680/B', 'Yes', 'constructive algorithms', '2021-04-28 12:16:41', '2021-04-28 12:16:41', '680', 'B', NULL),
(80, 1, 'Nicholas and Permutation', '2021-04-28', 'Accepted', 1, '2.00', '3.00', '4.00', '0.00', '9.00', 2, 'https://codeforces.com/contest/676/problem/A', 'Yes', 'constructive algorithms', '2021-04-28 15:28:03', '2021-04-28 15:28:03', '676', 'A', NULL),
(81, 1, 'Choosing Laptop', '2021-04-29', 'Accepted', 1, '4.00', '10.00', '9.00', '0.00', '23.00', 3, 'https://codeforces.com/contest/106/problem/B', 'Yes', 'implementation', '2021-04-29 11:32:34', '2021-04-29 11:32:34', '106', 'B', NULL),
(82, 1, 'Ternary Logic', '2021-04-29', 'Accepted', 1, '5.00', '15.00', '5.00', '3.00', '28.00', 4, 'https://codeforces.com/contest/problem/136/B', 'Yes', 'math', '2021-04-29 18:24:57', '2021-04-29 18:24:57', '136', 'B', NULL),
(83, 1, 'Lever', '2021-04-30', 'Accepted', 1, '5.00', '15.00', '5.00', '0.00', '25.00', 5, 'https://codeforces.com/contest/problem/376/A', 'Yes', 'math', '2021-04-29 19:44:47', '2021-04-29 19:44:47', '376', 'A', NULL),
(84, 1, 'Wet Shark and Odd and Even', '2021-04-30', 'Accepted', 1, '3.00', '5.00', '2.00', '0.00', '10.00', 4, 'https://codeforces.com/contest/621/problem/A', 'No', 'math', '2021-04-30 11:02:49', '2021-04-30 11:02:49', '621', 'A', NULL),
(85, 1, 'A and B and Chess', '2021-04-30', 'Accepted', 1, '4.00', '3.00', '10.00', '0.00', '17.00', 3, 'https://codeforces.com/contest/519/problem/A', 'Yes', 'implementation', '2021-04-30 11:34:58', '2021-04-30 11:34:58', '519', 'A', NULL),
(86, 1, 'Arrays', '2021-05-01', 'Accepted', 1, '0.05', '10.00', '2.00', '0.00', '12.05', 3, 'https://codeforces.com/contest/572/problem/A', 'Yes', 'sorting', '2021-05-01 10:27:33', '2021-05-01 10:27:33', '572', 'A', NULL),
(87, 1, 'Saitama Destroys Hotel', '2021-05-01', 'Accepted', 3, '9.00', '15.00', '5.00', '9.00', '38.00', 3, 'https://codeforces.com/contest/608/problem/A', 'Yes', 'implementation', '2021-05-01 14:02:14', '2021-05-01 14:02:14', '608', 'A', NULL),
(88, 1, 'Shell Game', '2021-05-02', 'Accepted', 1, '5.00', '10.00', '5.00', '0.00', '20.00', 2, 'https://codeforces.com/contest/35/problem/A', 'Yes', 'implementation', '2021-05-01 19:09:17', '2021-05-01 19:09:17', '35', 'A', NULL),
(89, 1, 'Drazil and Date', '2021-05-04', 'Accepted', 2, '0.08', '7.00', '5.00', '5.00', '17.08', 4, 'https://codeforces.com/contest/515/problem/A', 'Yes', 'math', '2021-05-04 11:02:01', '2021-05-04 11:02:01', '515', 'A', NULL),
(90, 1, 'Sinking Ship', '2021-05-04', 'Accepted', 1, '2.00', '2.00', '3.00', '0.00', '5.07', 2, 'https://codeforces.com/contest/63/problem/A', 'Yes', 'strings', '2021-05-04 17:26:54', '2021-05-04 17:45:10', '63', 'A', NULL),
(92, 1, 'Initial Bet', '2021-05-05', 'Accepted', 2, '4.00', '3.00', '3.00', '1.00', '11.00', 4, 'https://codeforces.com/problemset/problem/478/A', 'Yes', 'math', '2021-05-04 19:07:26', '2021-05-04 19:07:26', '478', 'A', NULL),
(93, 1, 'Tavas and Nafas', '2021-05-05', 'Accepted', 1, '4.00', '3.00', '10.00', '2.00', '19.00', 3, 'https://codeforces.com/problemset/problem/535/A', 'Yes', 'implementation', '2021-05-04 19:38:27', '2021-05-04 19:38:27', '535', 'A', NULL),
(94, 1, 'Exams', '2021-05-05', 'Accepted', 2, '5.00', '8.00', '6.00', '0.00', '19.00', 4, 'https://codeforces.com/problemset/problem/194/A', 'Yes', 'math', '2021-05-05 11:13:32', '2021-05-05 11:13:32', '194', 'A', NULL),
(95, 1, 'Postcards and photos', '2021-05-06', 'Accepted', 1, '5.00', '15.00', '5.00', '9.00', '34.00', 4, 'https://codeforces.com/problemset/problem/137/A', 'Yes', 'implementation', '2021-05-06 15:45:55', '2021-05-06 15:45:55', '137', 'A', NULL),
(96, 1, 'Multiplication Table', '2021-05-06', 'Accepted', 1, '3.00', '10.00', '3.00', '3.00', '19.00', 4, 'https://codeforces.com/problemset/problem/577/A', 'Yes', 'math', '2021-05-06 16:00:06', '2021-05-06 16:00:06', '577', 'A', NULL),
(97, 1, 'Palindromic Times', '2021-05-07', 'Accepted', 3, '4.00', '3.00', '10.00', '20.00', '37.00', 3, 'https://codeforces.com/problemset/problem/108/A', 'Yes', 'strings', '2021-05-07 12:05:26', '2021-05-07 12:05:26', '108', 'A', NULL),
(98, 1, 'Help Vasilisa the Wise 2', '2021-05-07', 'Accepted', 1, '6.00', '15.00', '5.00', '7.00', '33.00', 4, 'https://codeforces.com/problemset/problem/143/A', 'Yes', 'math', '2021-05-07 14:15:16', '2021-05-07 14:15:16', '143', 'A', NULL),
(99, 1, 'Game Outcome', '2021-05-10', 'Accepted', 1, '3.00', '3.00', '3.00', '0.00', '14.00', 2, 'https://codeforces.com/problemset/problem/157/A', 'Yes', 'brute force', '2021-05-10 11:56:03', '2021-05-10 12:17:34', '157', 'A', NULL),
(100, 1, 'Currency System in Geraldion', '2021-05-10', 'Accepted', 1, '3.00', '3.00', '8.00', '0.00', '14.00', 3, 'https://codeforces.com/problemset/problem/560/A', 'Yes', 'math', '2021-05-10 12:16:56', '2021-05-10 12:16:56', '560', 'A', NULL),
(101, 1, 'Group of Students', '2021-05-11', 'Accepted', 1, '3.00', '8.00', '4.00', '0.00', '15.00', 4, 'https://codeforces.com/problemset/problem/357/A', 'Yes', 'math', '2021-05-11 11:15:57', '2021-05-11 11:15:57', '357', 'A', NULL),
(102, 1, 'Petya and Countryside', '2021-05-11', 'Accepted', 1, '4.00', '10.00', '2.00', '5.00', '21.00', 3, 'https://codeforces.com/problemset/problem/66/B', 'Yes', 'implementation', '2021-05-11 13:46:30', '2021-05-11 13:46:30', '66', 'B', NULL),
(103, 1, 'Case of the Zeros and Ones', '2021-05-11', 'Accepted', 4, '7.00', '15.00', '7.00', '10.00', '39.00', 3, 'https://codeforces.com/problemset/problem/556/A', 'Yes', 'strings', '2021-05-11 14:21:41', '2021-05-11 14:21:41', '556', 'A', NULL),
(104, 1, 'Worms Evolution', '2021-05-11', 'Accepted', 2, '4.00', '4.00', '6.00', '2.00', '16.00', 2, 'https://codeforces.com/problemset/problem/31/A', 'Yes', 'implementation', '2021-05-11 14:47:11', '2021-05-11 14:47:11', '31', 'A', NULL),
(105, 1, 'Ciel and Dancing', '2021-05-12', 'Accepted', 2, '4.00', '10.00', '4.00', '2.00', '20.00', 3, 'https://codeforces.com/problemset/problem/322/A', 'Yes', 'greedy', '2021-05-12 11:55:34', '2021-05-12 11:55:34', '322', 'A', NULL),
(106, 1, 'Table', '2021-05-12', 'Accepted', 3, '5.00', '15.00', '5.00', '10.00', '35.00', 4, 'https://codeforces.com/problemset/problem/359/A', 'Yes', 'constructive algorithm', '2021-05-12 17:10:37', '2021-05-12 17:10:37', '359', 'A', NULL),
(107, 1, 'Sereja and Coat Rack', '2021-05-12', 'Accepted', 1, '3.00', '2.00', '3.00', '1.00', '9.00', 2, 'https://codeforces.com/problemset/problem/368/A', 'Yes', 'implemenation', '2021-05-12 17:38:50', '2021-05-12 17:38:50', '368', 'A', NULL),
(108, 1, 'Toy Cars', '2021-05-13', 'Accepted', 2, '4.00', '5.00', '15.00', '5.00', '29.00', 2, 'https://codeforces.com/problemset/problem/545/A', 'Yes', 'implementation', '2021-05-13 14:05:54', '2021-05-13 14:05:54', '545', 'A', NULL),
(109, 1, 'Joysticks', '2021-05-13', 'Accepted', 4, '4.00', '6.00', '5.00', '5.00', '20.00', 3, 'https://codeforces.com/problemset/problem/651/A', 'Yes', 'greedy', '2021-05-13 14:31:08', '2021-05-13 14:31:08', '651', 'A', NULL),
(110, 1, 'Burglar and Matches', '2021-05-14', 'Accepted', 1, '2.00', '3.00', '4.00', '0.00', '9.00', 2, 'https://codeforces.com/contest/16/problem/B', 'Yes', 'sorting', '2021-05-13 20:28:12', '2021-05-13 20:28:12', '16', 'B', NULL),
(111, 1, 'Caisa and Pylons', '2021-05-14', 'Accepted', 2, '3.00', '15.00', '5.00', '3.00', '26.00', 4, 'https://codeforces.com/contest/463/problem/B', 'Yes', 'greedy', '2021-05-14 12:28:11', '2021-05-14 12:28:11', '463', 'B', NULL),
(112, 1, 'Sum of Digits', '2021-05-14', 'Accepted', 1, '2.00', '2.00', '2.00', '0.00', '6.00', 2, 'https://codeforces.com/contest/102/problem/B', 'Yes', 'implementation', '2021-05-14 12:52:12', '2021-05-14 12:52:12', '102', 'B', NULL),
(113, 1, 'Coins', '2021-05-14', 'Accepted', 1, '3.00', '6.00', '3.00', '0.00', '12.00', 3, 'https://codeforces.com/contest/47/problem/B', 'Yes', 'implementation', '2021-05-14 18:09:02', '2021-05-14 18:09:02', '47', 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeforces_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `codeforces_username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samarth', 'samarthdubey46@gmail.com', 'samarthdubey46', NULL, '$2y$10$n5bFlLFa6eVi.dcIY9r/New62M4aVYVGv6FN4LUSmj6b6XPsoaGue', '7fYzUssTfbZAHJqpgaWreiWdp664dN9s0bb7TDGqcOcvmuRXrhNCR4lqfkfT', '2021-04-05 06:25:39', '2021-04-05 06:25:39'),
(2, 'Sarthak', 'sarthakdubey44@gmail.com', 'sarthakdb343', NULL, '$2y$10$la5TNUfnnjw3ovKdDjlvNO1tSQirbbt6Bf.KHynQBqunMiMGI4z6.', NULL, '2021-04-06 12:15:14', '2021-04-06 12:15:14');

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
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problems_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_codeforces_username_unique` (`codeforces_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `problems`
--
ALTER TABLE `problems`
  ADD CONSTRAINT `problems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
