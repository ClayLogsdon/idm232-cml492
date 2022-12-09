-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 12:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookbook`
--

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_11_18_175445_create_countries_table', 1),
(5, '2021_11_18_175653_create_states_table', 1),
(6, '2021_11_18_175705_create_cities_table', 1),
(7, '2021_11_18_175706_create_users_table', 1),
(8, '2021_11_21_105011_create_tb_category_table', 1),
(9, '2021_11_21_105148_create_tb_subcategory_table', 1),
(10, '2021_11_21_105340_create_tb_car_table', 1),
(11, '2021_11_21_194729_update_users_table', 1),
(12, '2021_11_21_195825_update_default_users_table', 1),
(13, '2021_11_24_101521_create_drivers_table', 1),
(14, '2021_11_25_092934_create_tb_book_table', 1),
(16, '2021_11_28_181300_create_tb_files_table', 2),
(17, '2021_11_29_100225_update_tb_book_table', 3),
(18, '2021_11_29_115452_create_tb_session_token_table', 3),
(19, '2021_11_30_120052_update_tb_city_table', 4),
(20, '2021_11_30_123025_create_tb_auto_incre_table', 4),
(23, '2021_12_02_060027_create_amenities_table', 5),
(24, '2021_12_02_070257_update_tb_book_cancellation_fee_table', 6),
(25, '2021_12_02_103343_update_tb_car_table', 7),
(26, '2021_12_02_112213_create_tb_rating_table', 7),
(27, '2021_12_06_152200_update_drivers_table', 8),
(29, '2021_12_06_154207_update_users_table_change_default', 9),
(30, '2021_12_07_114826_create_tb_branch_table', 10),
(31, '2021_12_07_120506_create_tb_extras_table', 10),
(32, '2021_12_07_121752_update_tb_car2_table', 10),
(33, '2021_12_09_114150_update_tb_car3_table', 10),
(34, '2021_12_09_115039_update_tb_car4_table', 11),
(35, '2021_12_09_124654_create_tb_car_extras_table', 11),
(36, '2021_12_10_104000_update_tb_branch_table', 12),
(37, '2021_12_12_172931_update_tb_book2_table', 13),
(38, '2021_12_12_183624_update_tb_book3_table', 14),
(39, '2021_12_14_110057_update_tb_book4_table', 15),
(40, '2021_12_14_111122_update_tb_book5_table', 16),
(41, '2021_12_14_111911_update_tb_book6_table', 16),
(42, '2021_12_14_171743_delete_name_from_tb_car_table', 17),
(43, '2021_12_14_172815_update_tb_car5_table', 18),
(44, '2021_12_14_182602_create_tb_car_amenities_table', 19),
(45, '2021_12_15_083336_update_car_amenities_table', 20),
(46, '2021_12_15_091200_update_car_extras_table', 21),
(47, '2021_12_16_120646_update_tb_car6_table', 22),
(48, '2022_01_04_123453_update_tb_car7_table', 22),
(49, '2022_02_15_123931_update_tb_book8_table', 23),
(50, '2022_04_10_151128_create_region_table', 24),
(52, '2022_04_21_091437_update_tb_users_table', 25),
(54, '2022_04_21_102118_update_tb_branch2_table', 26),
(57, '2022_06_04_200835_create_tb_company_table', 27),
(58, '2022_06_07_081003_update_tb_branch3_table', 28),
(59, '2022_06_09_120410_create_tb_max_passenger_table', 29),
(60, '2022_06_09_120503_create_tb_max_front_air_bag_table', 29),
(61, '2022_06_09_120520_create_tb_doors_table', 29),
(62, '2022_06_09_120540_create_tb_cruise_control_table', 29),
(63, '2022_06_09_120556_create_tb_car_type_table', 29),
(64, '2022_06_09_202041_update_tb_car8_table', 30),
(65, '2022_06_09_211652_update_tb_car9_table', 31),
(66, '2022_06_18_075935_update_tb_car_foreign_table', 32),
(68, '2022_07_11_171304_update_tb_car10_table', 33),
(69, '2022_07_17_055955_create_tb_gear_table', 34),
(70, '2022_07_17_060002_create_tb_fuel_table', 34),
(71, '2022_07_17_062055_update_tb_car11_table', 35),
(72, '2022_07_17_110816_update_car12_table', 36),
(73, '2022_07_17_111620_update_car13_table', 1),
(74, '2022_07_17_113629_update_car14_table', 37),
(75, '2022_07_17_114301_update_car15_table', 38),
(76, '2022_07_19_063019_update_car16_table', 39),
(77, '2022_07_19_063323_update_car17_table', 40),
(79, '2022_07_24_134421_create_car18_table', 41),
(80, '2022_07_24_141315_update_branch_table', 42),
(81, '2022_08_15_155718_update_tb_rating_table', 43),
(82, '2022_08_15_200457_update_tb_rating2_table', 44),
(83, '2022_08_16_103005_update_tb_rating3_table', 45),
(84, '2022_09_09_184333_update_tb_company_table', 46),
(85, '2022_09_11_105742_update_tb_book7_table', 47),
(86, '2022_09_11_112743_create_tb_settings_table', 48),
(88, '2022_09_11_132308_update_tb_book9_table', 49),
(89, '2022_09_30_052941_update_tb_subcategory_table', 50);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, '1232', '59826949c8b96305375915b74bea7aa1c6bfcf3d14eac7da2c191a3f23c2c5f1', '[\"*\"]', '2022-02-28 01:14:43', '2021-12-06 10:15:57', '2022-02-28 01:14:43'),
(2, 'App\\Models\\User', 4, '112', '917c28de9a71d122e878f1e95d2b65815a7284fff2ba81811447e2eed0980cac', '[\"*\"]', '2021-12-15 12:42:38', '2021-12-10 03:05:44', '2021-12-15 12:42:38'),
(3, 'App\\Models\\User', 5, '112', '4e3bbc06c6852280e123cad9dc7f49680553fb8ec4705fa3f83192dc9346d375', '[\"*\"]', NULL, '2021-12-12 11:26:32', '2021-12-12 11:26:32'),
(4, 'App\\Models\\User', 6, '112', '843ecddd6709ff8f1199272575447eaec12a2864e66291d6a63dad672483d4ce', '[\"*\"]', NULL, '2021-12-12 11:27:06', '2021-12-12 11:27:06'),
(5, 'App\\Models\\User', 7, '112', '3a3e7dfff3e3fb45c87eb5150182bc69d0301c3cb422d4d523882c3e6b696610', '[\"*\"]', NULL, '2021-12-15 11:20:51', '2021-12-15 11:20:51'),
(6, 'App\\Models\\User', 2, '1234', '79e0e3502bdb10c1baaee3b2fdf4958cc5dd1c1e13ddd173b8e02415ebfe4e00', '[\"*\"]', '2022-08-16 06:18:40', '2022-06-04 15:03:25', '2022-08-16 06:18:40'),
(7, 'App\\Models\\User', 2, '1234', 'c573343f970bc9c319ac57735cff80c8cf21cc785c076f881257be549084eaf6', '[\"*\"]', NULL, '2022-06-05 02:29:33', '2022-06-05 02:29:33'),
(8, 'App\\Models\\User', 2, '1234', '4d49441c9ce367d0f6a267318e3ebf1482b0b85a90d835cd9d61d3eaf566dc5b', '[\"*\"]', NULL, '2022-06-05 02:31:28', '2022-06-05 02:31:28'),
(9, 'App\\Models\\User', 10, 'abcd', '47cc67ec2f533ad02ecd9695685cad3b4bd0a31f7f6d9d88a1dfe2854dbdb01f', '[\"*\"]', NULL, '2022-06-07 03:11:26', '2022-06-07 03:11:26'),
(10, 'App\\Models\\User', 11, 'abcd', 'e20a0d9ecb0e0b41998a036f902fe9c699b1130972d98fe74a46749cfa956ca8', '[\"*\"]', NULL, '2022-06-07 03:13:10', '2022-06-07 03:13:10'),
(11, 'App\\Models\\User', 2, '1233', '8d3ce791509e9f6a64944e1f52a4fff237c77472bdeddfa564b799d86b36a61f', '[\"*\"]', '2022-09-09 13:19:37', '2022-07-15 13:21:38', '2022-09-09 13:19:37'),
(12, 'App\\Models\\User', 2, '1233', '393eb07f28c990371e428d6b9949aee940cb2486560b840bda2110929ef7ee33', '[\"*\"]', NULL, '2022-07-15 13:22:08', '2022-07-15 13:22:08'),
(13, 'App\\Models\\User', 4, 'web', '5f56b215dff4c26166c88ba60df2155b6ed6c6bf1e726afe298e7f95b106e447', '[\"*\"]', '2022-09-11 08:14:56', '2022-09-09 13:21:08', '2022-09-11 08:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_auto_incre`
--

CREATE TABLE `tb_auto_incre` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_count` bigint(20) NOT NULL,
  `cl_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cl_prefix` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_auto_incre`
--

INSERT INTO `tb_auto_incre` (`cl_id`, `cl_count`, `cl_type`, `cl_prefix`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'User', 'USR', NULL, '2022-04-21 10:07:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cl_id`, `cl_name`, `cl_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rwtg', 'teg', '2022-11-15 13:45:57', '2022-11-15 13:45:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_recipe`
--

CREATE TABLE `tb_recipe` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_category_id` bigint(20) UNSIGNED NOT NULL,
  `cl_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cl_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_ingradient` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cl_instruction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_recipe`
--

INSERT INTO `tb_recipe` (`cl_id`, `cl_category_id`, `cl_name`, `cl_image`, `cl_description`, `cl_ingradient`, `cl_instruction`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'adf', '251188_161122125150_image 13.png', NULL, '', '', '2022-11-15 13:54:48', '2022-11-16 07:21:51', NULL),
(2, 0, 'cvcdcvdx', '412042_161122125033_image 15.png', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '   xczcsc\r\nrtyurtyu\r\nftugyi\r\ngyujgh', '', '2022-11-16 07:12:00', '2022-11-16 07:20:35', NULL),
(3, 1, 'thrtgh', '536921_161122125354_image 14.png', NULL, '', '', '2022-11-16 07:23:55', '2022-11-16 07:23:55', NULL),
(4, 1, 'bnvb', '329612_161122125407_image 17.png', NULL, '', '', '2022-11-16 07:24:09', '2022-11-16 07:24:09', NULL),
(5, 1, 'cbnf', '235020_161122125429_image 16.png', NULL, '', '', '2022-11-16 07:24:30', '2022-11-16 07:24:30', NULL),
(6, 1, 'jk', '491272_161122125443_image 18.png', NULL, '', '', '2022-11-16 07:24:49', '2022-11-16 07:24:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_session_token`
--

CREATE TABLE `tb_session_token` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_access_code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_client_code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_session_token`
--

INSERT INTO `tb_session_token` (`cl_id`, `cl_access_code`, `cl_client_code`, `cl_expiry_date`, `created_at`, `updated_at`) VALUES
(1, '79c2fbfd3247764094a3c32200a9b4c34a81900d168239a84af62e82fdc09307', NULL, '2021-12-19', '2021-12-14 14:29:57', '2021-12-14 14:29:57'),
(2, '4e0180427e7c7aa50a1ed9c5ce593149d07777c1c21f714ad7a8bf364d86e6ab', '121212', '2021-12-19', '2021-12-14 14:30:19', '2021-12-14 14:30:19'),
(3, '4ef26c486d10d2d12c57bee9616d042d7e6b1e99732bfba4b8787f5a79ff3a0d', '121212', '2021-12-31', '2021-12-16 11:52:13', '2021-12-16 11:52:13'),
(4, '3471bf6e7dea01e05382bfbe693569fd4f8936d45d68abb0459a37900c3bb891', '121212', '2022-02-27', '2022-02-22 05:46:12', '2022-02-22 05:46:12'),
(5, '95452e42bbb1d63bcc2a8d1343ae0678f24df4944d0f0e0d38e46957482a8520', '121212', '2022-03-16', '2022-03-11 06:55:59', '2022-03-11 06:55:59'),
(6, 'b2818741385519c91672de02604a73ea501b96d087015cabb34f53376b242599', '121212', '2022-04-14', '2022-04-08 22:26:36', '2022-04-08 22:26:36'),
(7, 'bb917b869a32a00461d1b1d62bf3450425657bd0f35afe052a090833f60da2a0', '121212', '2022-04-26', '2022-04-10 22:03:54', '2022-04-10 22:03:54'),
(8, 'fc61ab6cd76d4046603c69c96b4f2aee42fb75da8ee69e1f9a69b2de38c1e7fd', '121212', '2022-04-25', '2022-04-20 10:50:44', '2022-04-20 10:50:44'),
(9, '4f1e1e887a94f817bedd6164cea35ccf3c48bd426064ec5bfe18494a37dfea04', '121212', '2022-04-26', '2022-04-21 08:22:09', '2022-04-21 08:22:09'),
(10, 'e392281f56fdbb25dbaceb72c5e484e66968d6f477f90e615dede7fde3e62e4b', 'c9f0f895fb98ab9159f51fd0297e236d', '2022-04-26', '2022-04-21 09:31:48', '2022-04-21 09:31:48'),
(11, 'ef8efbbb55a33d3c3444e869602440c069131c614796a5420e132b4a5276028d', '45c48cce2e2d7fbdea1afc51c7c6ad26', '2022-04-26', '2022-04-21 10:07:16', '2022-04-21 10:07:16'),
(12, '957aa5e4f9df16a859849f84b34ec78920f18d917dfe623b0d5b9d78e5cbd9f5', '121212', '2022-04-26', '2022-04-21 10:08:03', '2022-04-21 10:08:03'),
(13, '3c2295137140cf064d3050c37d1b25bcb029116d4d8d28c652e89bb1ee13b96d', '45c48cce2e2d7fbdea1afc51c7c6ad26', '2022-04-26', '2022-04-21 10:09:14', '2022-04-21 10:09:14'),
(14, '51f4ac5d469aa22d953fa7aabe24fb631c476e38aa9f734524856e64d6a94630', '121212', '2022-04-26', '2022-04-21 10:51:15', '2022-04-21 10:51:15'),
(15, '4ff1b42fc780895d0fd0fca2c3db60bba5b916d457a231806dc496ff736af6ca', '121212', '2022-04-28', '2022-04-23 11:16:38', '2022-04-23 11:16:38'),
(16, 'e9e5142d3e34db97f38fb857eebcbce0161ff3d6d5b24dc35d6706ddc82b2eae', '121212', '2022-06-14', '2022-06-09 17:47:28', '2022-06-09 17:47:28'),
(17, 'ef74f817ff397cc6a15721e251fc10a57f3bb0896649507440ab0d3fd0769c7d', '121212', '2022-06-22', '2022-06-17 16:54:37', '2022-06-17 16:54:37'),
(18, 'e48fd9eca7067c4244e106c32c0633eec4da848c51b476b0b17a8df17fd44172', '121212', '2022-07-04', '2022-06-19 08:39:34', '2022-06-19 08:39:34'),
(19, '5f8c7f956f1c5ab6474f6d45a99ee07cdb01519b1b50ddd6199b1ad7057a746a', '121212', '2022-09-15', '2022-09-09 18:45:49', '2022-09-09 18:45:49'),
(20, '6f42d46fe426862197b013ccb7359cf1e25adb497820bdbe7171e3bdae75adb5', '121212', '2022-09-16', '2022-09-11 17:40:44', '2022-09-11 17:40:44'),
(21, 'f3dc58aa6d19f03a82fc4b6025a06473811c5dd9d3ba55ac2ddfd355fab4a978', '121212', '2022-09-16', '2022-09-11 17:42:49', '2022-09-11 17:42:49'),
(22, 'c0671b02597c4560ab5b30dd190d65e3ce98238434bffa3e6b7c0b4444be8ea3', '121212', '2022-09-30', '2022-09-15 13:17:18', '2022-09-15 13:17:18'),
(23, '6c71f8f3f0aaec38f2179d8c332fc30c34f5a443b11c50619ba05e0ac84dcc91', '121212', '2022-10-01', '2022-09-26 12:34:20', '2022-09-26 12:34:20'),
(24, 'd67e122003518ca1662dc2a60faf424ff23d2ac6c4c5e4cffb25c465b6ca37ab', '121212', '2022-10-19', '2022-10-14 13:08:18', '2022-10-14 13:08:18'),
(25, 'e7314ca2430f8dded05f7d21c88d3ec8b67f7f603432de2e526be690f20cb35e', '121212', '2022-10-20', '2022-10-14 20:12:35', '2022-10-14 20:12:35'),
(26, '5e2751591c99058882d75e379cd9a0dec31e4353cc91dd51854bf9494ef69b1f', '121212', '2022-10-20', '2022-10-15 09:13:45', '2022-10-15 09:13:45'),
(27, '9ddf1b3409af2343c88af8438eb7a5ef488f9b8180bafcc331e85c0e098f511b', '121212', '2022-10-20', '2022-10-15 08:27:08', '2022-10-15 08:27:08'),
(28, 'c01645297ff54e69f913a300f3b4ced686c1f97fd185e5459db3450235483ee7', '121212', '2022-10-26', '2022-10-21 04:14:32', '2022-10-21 04:14:32'),
(29, '1067ab989627e8e993870f452b27af1389134905ce8566194f21b6fe72813d80', '121212', '2022-11-08', '2022-11-03 07:01:38', '2022-11-03 07:01:38'),
(30, 'ec322c0deac6aa50e0a1cf0ed7d6506db09878905ff410d790d89a68c928e31e', '121212', '2022-11-20', '2022-11-15 02:41:05', '2022-11-15 02:41:05'),
(31, '67b7672cb1433b79e6e3649544db2a4a0875104b37c5582fbd25da61e959f9c0', '121212', '2022-11-20', '2022-11-15 03:11:18', '2022-11-15 03:11:18'),
(32, 'aed66e6837452c6cfbe978725b41da7739ca46a07f90bc3b8bc7a7bdf77b41ad', '121212', '2022-11-20', '2022-11-15 04:23:45', '2022-11-15 04:23:45'),
(33, '3ad6f40b8133e9fa40f2c93086aae79b7a5578532901a510ef1c7efdf3e405b0', '121212', '2022-11-20', '2022-11-15 10:40:07', '2022-11-15 10:40:07'),
(34, '93c70f24ca5fdecad4800a414026ddaaddcb31f7442adc219e156a16ff242324', '121212', '2022-11-20', '2022-11-15 12:37:22', '2022-11-15 12:37:22'),
(35, '6f2d89e85359cfabaf8a7c2ac15557cd25fec56d022774f8d444f7a6043f7eda', '121212', '2022-11-20', '2022-11-15 12:37:35', '2022-11-15 12:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_settings`
--

CREATE TABLE `tb_settings` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_daily_amount` decimal(18,2) NOT NULL,
  `cl_weekly_amount` decimal(18,2) NOT NULL,
  `cl_monthly_amount` decimal(18,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_settings`
--

INSERT INTO `tb_settings` (`cl_id`, `cl_daily_amount`, `cl_weekly_amount`, `cl_monthly_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12.00', '180.00', '300.00', NULL, '2022-09-11 12:02:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `cl_id` bigint(20) UNSIGNED NOT NULL,
  `cl_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `cl_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cl_password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cl_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_birthday` date DEFAULT NULL,
  `cl_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_starting_year` bigint(20) NOT NULL DEFAULT 1970,
  `cl_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cl_state_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cl_city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cl_currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_card_accept` tinyint(1) NOT NULL DEFAULT 0,
  `cl_forgot_password_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_forgot_password_2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_register_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_register_2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_expiry_date` date DEFAULT NULL,
  `cl_profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_user_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cl_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`cl_id`, `cl_code`, `cl_type`, `cl_username`, `cl_email`, `cl_password`, `cl_first_name`, `cl_last_name`, `cl_birthday`, `cl_phone`, `cl_address`, `cl_starting_year`, `cl_location`, `cl_country_id`, `cl_state_id`, `cl_city_id`, `cl_currency`, `cl_card_accept`, `cl_forgot_password_1`, `cl_forgot_password_2`, `cl_register_1`, `cl_register_2`, `cl_expiry_date`, `cl_profile_pic`, `cl_user_code`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `cl_city`, `cl_logo`) VALUES
(1, '121212', 'admin', NULL, 'admin@admin.com', '$2y$10$QoBYBPj8UrTWOWNNCGcD5eHW9sEJuZPW5w9HCyWtFLIhm8zSp1EJe', 'Admin', NULL, NULL, NULL, '1234', 1970, NULL, '1', '1', '1', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(2, NULL, 'user', NULL, 'paul.phan@drexel.edu', '$2y$10$zWl2FUi2ow1nn7aB5Q1KWOSbcfolb08Prm9iTyNxdZqIbRilpTDpa', 'Admin', 'password', NULL, NULL, NULL, 1970, NULL, '0', '0', '0', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-06 10:14:29', '2021-12-15 12:35:14', NULL, NULL, NULL),
--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_auto_incre`
--
ALTER TABLE `tb_auto_incre`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tb_recipe`
--
ALTER TABLE `tb_recipe`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tb_session_token`
--
ALTER TABLE `tb_session_token`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`cl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_auto_incre`
--
ALTER TABLE `tb_auto_incre`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tb_recipe`
--
ALTER TABLE `tb_recipe`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

----

ALTER TABLE `tb_session_token`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_settings`
--
ALTER TABLE `tb_settings`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `cl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;