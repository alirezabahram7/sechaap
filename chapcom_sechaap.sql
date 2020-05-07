-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 10:51 PM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chapcom_sechaap`
--

-- --------------------------------------------------------

--
-- Table structure for table `additions`
--

CREATE TABLE `additions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `addition_type_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additions`
--

INSERT INTO `additions` (`id`, `title`, `image`, `type_id`, `description`, `addition_type_id`, `price`, `created_at`, `updated_at`) VALUES
(21, '70 در 200 سانتی متر', NULL, 1, NULL, 7, 25200, '2020-05-05 09:11:35', '2020-05-05 09:11:35'),
(22, '100 در 300 سانتی متر', NULL, 1, NULL, 7, 50000, '2020-05-05 09:12:48', '2020-05-05 09:12:48'),
(23, '140 در 400 سانتی متر', NULL, 1, NULL, 7, 91000, '2020-05-05 09:14:09', '2020-05-05 09:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `addition_order`
--

CREATE TABLE `addition_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `addition_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addition_order`
--

INSERT INTO `addition_order` (`id`, `order_id`, `addition_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, NULL, NULL),
(2, 7, 4, NULL, NULL),
(3, 7, 5, NULL, NULL),
(4, 8, 2, NULL, NULL),
(5, 8, 4, NULL, NULL),
(6, 8, 5, NULL, NULL),
(7, 9, 3, NULL, NULL),
(8, 9, 4, NULL, NULL),
(9, 9, 5, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 10, 4, NULL, NULL),
(12, 10, 6, NULL, NULL),
(13, 11, 3, NULL, NULL),
(14, 11, 4, NULL, NULL),
(15, 11, 5, NULL, NULL),
(16, 12, 1, NULL, NULL),
(17, 12, 4, NULL, NULL),
(18, 12, 6, NULL, NULL),
(19, 13, 3, NULL, NULL),
(20, 13, 4, NULL, NULL),
(21, 13, 5, NULL, NULL),
(22, 14, 1, NULL, NULL),
(23, 14, 4, NULL, NULL),
(24, 14, 6, NULL, NULL),
(25, 15, 3, NULL, NULL),
(26, 15, 4, NULL, NULL),
(27, 15, 5, NULL, NULL),
(28, 16, 1, NULL, NULL),
(29, 16, 4, NULL, NULL),
(30, 16, 6, NULL, NULL),
(31, 18, 1, NULL, NULL),
(32, 18, 4, NULL, NULL),
(33, 18, 7, NULL, NULL),
(34, 19, 1, NULL, NULL),
(35, 19, 4, NULL, NULL),
(36, 19, 7, NULL, NULL),
(37, 20, 1, NULL, NULL),
(38, 20, 4, NULL, NULL),
(39, 20, 7, NULL, NULL),
(40, 21, 2, NULL, NULL),
(41, 21, 4, NULL, NULL),
(42, 21, 6, NULL, NULL),
(43, 22, 2, NULL, NULL),
(44, 22, 4, NULL, NULL),
(45, 22, 6, NULL, NULL),
(46, 23, 2, NULL, NULL),
(47, 23, 4, NULL, NULL),
(48, 23, 6, NULL, NULL),
(49, 24, 2, NULL, NULL),
(50, 24, 4, NULL, NULL),
(51, 24, 7, NULL, NULL),
(52, 25, 2, NULL, NULL),
(53, 25, 4, NULL, NULL),
(54, 25, 5, NULL, NULL),
(55, 26, 2, NULL, NULL),
(56, 26, 4, NULL, NULL),
(57, 26, 7, NULL, NULL),
(58, 27, 2, NULL, NULL),
(59, 27, 4, NULL, NULL),
(60, 27, 5, NULL, NULL),
(61, 28, 2, NULL, NULL),
(62, 28, 4, NULL, NULL),
(63, 28, 7, NULL, NULL),
(64, 29, 2, NULL, NULL),
(65, 29, 4, NULL, NULL),
(66, 29, 5, NULL, NULL),
(67, 30, 2, NULL, NULL),
(68, 30, 4, NULL, NULL),
(69, 30, 7, NULL, NULL),
(70, 31, 2, NULL, NULL),
(71, 31, 4, NULL, NULL),
(72, 31, 5, NULL, NULL),
(73, 32, 2, NULL, NULL),
(74, 32, 4, NULL, NULL),
(75, 32, 7, NULL, NULL),
(76, 33, 2, NULL, NULL),
(77, 33, 4, NULL, NULL),
(78, 33, 5, NULL, NULL),
(79, 34, 2, NULL, NULL),
(80, 34, 4, NULL, NULL),
(81, 34, 7, NULL, NULL),
(82, 35, 2, NULL, NULL),
(83, 35, 4, NULL, NULL),
(84, 35, 5, NULL, NULL),
(85, 36, 2, NULL, NULL),
(86, 36, 4, NULL, NULL),
(87, 36, 7, NULL, NULL),
(88, 37, 2, NULL, NULL),
(89, 37, 4, NULL, NULL),
(90, 37, 5, NULL, NULL),
(91, 38, 2, NULL, NULL),
(92, 38, 4, NULL, NULL),
(93, 38, 7, NULL, NULL),
(94, 39, 2, NULL, NULL),
(95, 39, 4, NULL, NULL),
(96, 39, 5, NULL, NULL),
(97, 40, 2, NULL, NULL),
(98, 40, 4, NULL, NULL),
(99, 40, 7, NULL, NULL),
(100, 41, 2, NULL, NULL),
(101, 41, 4, NULL, NULL),
(102, 41, 5, NULL, NULL),
(103, 42, 2, NULL, NULL),
(104, 42, 4, NULL, NULL),
(105, 42, 7, NULL, NULL),
(106, 43, 2, NULL, NULL),
(107, 43, 4, NULL, NULL),
(108, 43, 5, NULL, NULL),
(109, 44, 2, NULL, NULL),
(110, 44, 4, NULL, NULL),
(111, 44, 7, NULL, NULL),
(112, 45, 2, NULL, NULL),
(113, 45, 4, NULL, NULL),
(114, 45, 5, NULL, NULL),
(115, 46, 2, NULL, NULL),
(116, 46, 4, NULL, NULL),
(117, 46, 7, NULL, NULL),
(118, 47, 2, NULL, NULL),
(119, 47, 4, NULL, NULL),
(120, 47, 5, NULL, NULL),
(121, 48, 2, NULL, NULL),
(122, 48, 4, NULL, NULL),
(123, 48, 7, NULL, NULL),
(124, 49, 2, NULL, NULL),
(125, 49, 4, NULL, NULL),
(126, 49, 5, NULL, NULL),
(127, 50, 2, NULL, NULL),
(128, 50, 4, NULL, NULL),
(129, 50, 7, NULL, NULL),
(130, 51, 2, NULL, NULL),
(131, 51, 4, NULL, NULL),
(132, 51, 5, NULL, NULL),
(133, 52, 2, NULL, NULL),
(134, 52, 4, NULL, NULL),
(135, 52, 7, NULL, NULL),
(136, 53, 2, NULL, NULL),
(137, 53, 4, NULL, NULL),
(138, 53, 5, NULL, NULL),
(139, 54, 2, NULL, NULL),
(140, 54, 4, NULL, NULL),
(141, 54, 7, NULL, NULL),
(142, 55, 2, NULL, NULL),
(143, 55, 4, NULL, NULL),
(144, 55, 5, NULL, NULL),
(145, 56, 2, NULL, NULL),
(146, 56, 4, NULL, NULL),
(147, 56, 7, NULL, NULL),
(148, 57, 2, NULL, NULL),
(149, 57, 4, NULL, NULL),
(150, 57, 5, NULL, NULL),
(151, 58, 2, NULL, NULL),
(152, 58, 4, NULL, NULL),
(153, 58, 7, NULL, NULL),
(154, 59, 2, NULL, NULL),
(155, 59, 4, NULL, NULL),
(156, 59, 5, NULL, NULL),
(157, 60, 2, NULL, NULL),
(158, 60, 4, NULL, NULL),
(159, 60, 7, NULL, NULL),
(160, 61, 2, NULL, NULL),
(161, 61, 4, NULL, NULL),
(162, 61, 5, NULL, NULL),
(163, 62, 2, NULL, NULL),
(164, 62, 4, NULL, NULL),
(165, 62, 7, NULL, NULL),
(166, 63, 2, NULL, NULL),
(167, 63, 4, NULL, NULL),
(168, 63, 5, NULL, NULL),
(169, 64, 2, NULL, NULL),
(170, 64, 4, NULL, NULL),
(171, 64, 7, NULL, NULL),
(172, 65, 2, NULL, NULL),
(173, 65, 4, NULL, NULL),
(174, 65, 5, NULL, NULL),
(175, 66, 2, NULL, NULL),
(176, 66, 4, NULL, NULL),
(177, 66, 7, NULL, NULL),
(178, 67, 2, NULL, NULL),
(179, 67, 4, NULL, NULL),
(180, 67, 5, NULL, NULL),
(181, 68, 2, NULL, NULL),
(182, 68, 4, NULL, NULL),
(183, 68, 7, NULL, NULL),
(184, 69, 2, NULL, NULL),
(185, 69, 4, NULL, NULL),
(186, 69, 5, NULL, NULL),
(187, 70, 2, NULL, NULL),
(188, 70, 4, NULL, NULL),
(189, 70, 7, NULL, NULL),
(190, 71, 2, NULL, NULL),
(191, 71, 4, NULL, NULL),
(192, 71, 5, NULL, NULL),
(193, 72, 2, NULL, NULL),
(194, 72, 4, NULL, NULL),
(195, 72, 7, NULL, NULL),
(196, 73, 2, NULL, NULL),
(197, 73, 4, NULL, NULL),
(198, 73, 5, NULL, NULL),
(199, 74, 2, NULL, NULL),
(200, 74, 4, NULL, NULL),
(201, 74, 7, NULL, NULL),
(202, 75, 2, NULL, NULL),
(203, 75, 4, NULL, NULL),
(204, 75, 5, NULL, NULL),
(205, 76, 2, NULL, NULL),
(206, 76, 4, NULL, NULL),
(207, 76, 7, NULL, NULL),
(208, 77, 2, NULL, NULL),
(209, 77, 4, NULL, NULL),
(210, 77, 5, NULL, NULL),
(211, 78, 2, NULL, NULL),
(212, 78, 4, NULL, NULL),
(213, 78, 7, NULL, NULL),
(214, 79, 2, NULL, NULL),
(215, 79, 4, NULL, NULL),
(216, 79, 5, NULL, NULL),
(217, 80, 2, NULL, NULL),
(218, 80, 4, NULL, NULL),
(219, 80, 7, NULL, NULL),
(220, 81, 2, NULL, NULL),
(221, 81, 4, NULL, NULL),
(222, 81, 5, NULL, NULL),
(223, 82, 2, NULL, NULL),
(224, 82, 4, NULL, NULL),
(225, 82, 7, NULL, NULL),
(226, 83, 2, NULL, NULL),
(227, 83, 4, NULL, NULL),
(228, 83, 5, NULL, NULL),
(229, 84, 2, NULL, NULL),
(230, 84, 4, NULL, NULL),
(231, 84, 7, NULL, NULL),
(232, 85, 2, NULL, NULL),
(233, 85, 4, NULL, NULL),
(234, 85, 5, NULL, NULL),
(235, 86, 2, NULL, NULL),
(236, 86, 4, NULL, NULL),
(237, 86, 7, NULL, NULL),
(238, 87, 2, NULL, NULL),
(239, 87, 4, NULL, NULL),
(240, 87, 5, NULL, NULL),
(241, 88, 2, NULL, NULL),
(242, 88, 4, NULL, NULL),
(243, 88, 7, NULL, NULL),
(244, 89, 2, NULL, NULL),
(245, 89, 4, NULL, NULL),
(246, 89, 5, NULL, NULL),
(247, 90, 2, NULL, NULL),
(248, 90, 4, NULL, NULL),
(249, 90, 7, NULL, NULL),
(250, 91, 2, NULL, NULL),
(251, 91, 4, NULL, NULL),
(252, 91, 5, NULL, NULL),
(253, 92, 2, NULL, NULL),
(254, 92, 4, NULL, NULL),
(255, 92, 7, NULL, NULL),
(256, 93, 2, NULL, NULL),
(257, 93, 4, NULL, NULL),
(258, 93, 5, NULL, NULL),
(259, 94, 2, NULL, NULL),
(260, 94, 4, NULL, NULL),
(261, 94, 7, NULL, NULL),
(262, 95, 2, NULL, NULL),
(263, 95, 4, NULL, NULL),
(264, 95, 5, NULL, NULL),
(265, 96, 2, NULL, NULL),
(266, 96, 4, NULL, NULL),
(267, 96, 7, NULL, NULL),
(268, 97, 2, NULL, NULL),
(269, 97, 4, NULL, NULL),
(270, 97, 5, NULL, NULL),
(271, 98, 2, NULL, NULL),
(272, 98, 4, NULL, NULL),
(273, 98, 7, NULL, NULL),
(274, 99, 2, NULL, NULL),
(275, 99, 4, NULL, NULL),
(276, 99, 5, NULL, NULL),
(277, 100, 2, NULL, NULL),
(278, 100, 4, NULL, NULL),
(279, 100, 7, NULL, NULL),
(280, 101, 2, NULL, NULL),
(281, 101, 4, NULL, NULL),
(282, 101, 5, NULL, NULL),
(283, 102, 2, NULL, NULL),
(284, 102, 4, NULL, NULL),
(285, 102, 7, NULL, NULL),
(286, 103, 2, NULL, NULL),
(287, 103, 4, NULL, NULL),
(288, 103, 5, NULL, NULL),
(289, 104, 2, NULL, NULL),
(290, 104, 4, NULL, NULL),
(291, 104, 7, NULL, NULL),
(292, 105, 2, NULL, NULL),
(293, 105, 4, NULL, NULL),
(294, 105, 5, NULL, NULL),
(295, 106, 2, NULL, NULL),
(296, 106, 4, NULL, NULL),
(297, 106, 7, NULL, NULL),
(298, 107, 2, NULL, NULL),
(299, 107, 4, NULL, NULL),
(300, 107, 5, NULL, NULL),
(301, 108, 2, NULL, NULL),
(302, 108, 4, NULL, NULL),
(303, 108, 7, NULL, NULL),
(304, 109, 2, NULL, NULL),
(305, 109, 4, NULL, NULL),
(306, 109, 5, NULL, NULL),
(307, 110, 2, NULL, NULL),
(308, 110, 4, NULL, NULL),
(309, 110, 7, NULL, NULL),
(310, 111, 2, NULL, NULL),
(311, 111, 4, NULL, NULL),
(312, 111, 5, NULL, NULL),
(313, 112, 2, NULL, NULL),
(314, 112, 4, NULL, NULL),
(315, 112, 7, NULL, NULL),
(316, 113, 2, NULL, NULL),
(317, 113, 4, NULL, NULL),
(318, 113, 5, NULL, NULL),
(319, 114, 2, NULL, NULL),
(320, 114, 4, NULL, NULL),
(321, 114, 7, NULL, NULL),
(322, 115, 2, NULL, NULL),
(323, 115, 4, NULL, NULL),
(324, 115, 5, NULL, NULL),
(325, 116, 2, NULL, NULL),
(326, 116, 4, NULL, NULL),
(327, 116, 7, NULL, NULL),
(328, 117, 2, NULL, NULL),
(329, 117, 4, NULL, NULL),
(330, 117, 5, NULL, NULL),
(331, 118, 2, NULL, NULL),
(332, 118, 4, NULL, NULL),
(333, 118, 5, NULL, NULL),
(334, 119, 2, NULL, NULL),
(335, 119, 4, NULL, NULL),
(336, 119, 5, NULL, NULL),
(337, 120, 1, NULL, NULL),
(338, 120, 4, NULL, NULL),
(339, 120, 5, NULL, NULL),
(340, 121, 2, NULL, NULL),
(341, 121, 4, NULL, NULL),
(342, 121, 6, NULL, NULL),
(343, 125, 1, NULL, NULL),
(344, 125, 4, NULL, NULL),
(345, 125, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addition_types`
--

CREATE TABLE `addition_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_multiplied` tinyint(1) NOT NULL DEFAULT '0',
  `is_radio_button` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addition_types`
--

INSERT INTO `addition_types` (`id`, `title`, `is_multiplied`, `is_radio_button`, `created_at`, `updated_at`) VALUES
(1, 'نوع محصول', 0, 1, '2020-01-17 18:34:40', '2020-01-17 18:34:41'),
(2, 'تیراژ', 0, 1, '2020-01-17 18:34:50', '2020-01-17 18:34:51'),
(3, 'جنس ', 0, 1, '2020-01-24 14:03:42', '2020-01-24 14:03:43'),
(4, 'جنس کاغذ', 0, 1, NULL, NULL),
(7, 'سایز بنر', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alireza', '09126530820', '$2y$10$863f69/0M8w3Su.yJxXwduenOHyor1hfhCyPdQTRJWfc5rQtxLPMe', 0, NULL, '2019-11-27 04:03:21', '2019-11-27 04:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'افست', '2020-01-14 19:34:32', '2020-01-14 19:34:33'),
(2, 'دیجیتال', '2020-01-14 19:34:45', '2020-01-14 19:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '5e316d9b3b950.pdf', 5, '2020-01-29 08:05:52', '2020-01-29 08:05:52'),
(2, '5e316d9b3bc72.srt', 5, '2020-01-29 08:05:52', '2020-01-29 08:05:52'),
(3, '5e316d9b3b950.pdf', 6, '2020-01-29 08:06:22', '2020-01-29 08:06:22'),
(4, '5e316d9b3bc72.srt', 6, '2020-01-29 08:06:22', '2020-01-29 08:06:22'),
(5, '5e316d9b3b950.pdf', 7, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(6, '5e316d9b3bc72.srt', 7, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(7, '5e316daec4b33.jpg', 8, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(8, '5e316daec4f5c.jpg', 8, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(9, '5e31a79d14f53.jpg', 9, '2020-01-29 12:31:07', '2020-01-29 12:31:07'),
(10, '5e31a79d15308.jpg', 9, '2020-01-29 12:31:07', '2020-01-29 12:31:07'),
(11, '5e31a7a8e6795.jpg', 10, '2020-01-29 12:31:07', '2020-01-29 12:31:07'),
(12, '5e31a79d14f53.jpg', 11, '2020-01-29 12:31:38', '2020-01-29 12:31:38'),
(13, '5e31a79d15308.jpg', 11, '2020-01-29 12:31:38', '2020-01-29 12:31:38'),
(14, '5e31a7a8e6795.jpg', 12, '2020-01-29 12:31:38', '2020-01-29 12:31:38'),
(15, '5e31a79d14f53.jpg', 13, '2020-01-29 12:35:12', '2020-01-29 12:35:12'),
(16, '5e31a79d15308.jpg', 13, '2020-01-29 12:35:12', '2020-01-29 12:35:12'),
(17, '5e31a7a8e6795.jpg', 14, '2020-01-29 12:35:12', '2020-01-29 12:35:12'),
(18, '5e31a79d14f53.jpg', 15, '2020-01-29 12:36:17', '2020-01-29 12:36:17'),
(19, '5e31a79d15308.jpg', 15, '2020-01-29 12:36:17', '2020-01-29 12:36:17'),
(20, '5e31a7a8e6795.jpg', 16, '2020-01-29 12:36:17', '2020-01-29 12:36:17'),
(21, '5e3480c002b2b.jpg', 22, '2020-01-31 16:02:17', '2020-01-31 16:02:17'),
(22, '5e3480c002b2b.jpg', 23, '2020-01-31 16:26:56', '2020-01-31 16:26:56'),
(23, '5e35be15a10ea.jpg', 24, '2020-02-01 14:47:43', '2020-02-01 14:47:43'),
(24, '5e35be15a10ea.jpg', 26, '2020-02-01 14:50:55', '2020-02-01 14:50:55'),
(25, '5e35be15a10ea.jpg', 28, '2020-02-01 14:51:16', '2020-02-01 14:51:16'),
(26, '5e35be15a10ea.jpg', 30, '2020-02-01 14:53:56', '2020-02-01 14:53:56'),
(27, '5e35be15a10ea.jpg', 32, '2020-02-01 14:54:39', '2020-02-01 14:54:39'),
(28, '5e35be15a10ea.jpg', 34, '2020-02-01 14:55:05', '2020-02-01 14:55:05'),
(29, '5e35be15a10ea.jpg', 36, '2020-02-01 14:56:02', '2020-02-01 14:56:02'),
(30, '5e35be15a10ea.jpg', 38, '2020-02-01 14:56:53', '2020-02-01 14:56:53'),
(31, '5e35be15a10ea.jpg', 40, '2020-02-01 14:57:06', '2020-02-01 14:57:06'),
(32, '5e35be15a10ea.jpg', 42, '2020-02-01 14:57:30', '2020-02-01 14:57:30'),
(33, '5e35be15a10ea.jpg', 44, '2020-02-01 14:57:59', '2020-02-01 14:57:59'),
(34, '5e35be15a10ea.jpg', 46, '2020-02-01 14:58:15', '2020-02-01 14:58:15'),
(35, '5e35be15a10ea.jpg', 48, '2020-02-01 14:58:47', '2020-02-01 14:58:47'),
(36, '5e35be15a10ea.jpg', 50, '2020-02-01 14:58:57', '2020-02-01 14:58:57'),
(37, '5e35be15a10ea.jpg', 52, '2020-02-01 14:59:07', '2020-02-01 14:59:07'),
(38, '5e35be15a10ea.jpg', 54, '2020-02-01 15:00:18', '2020-02-01 15:00:18'),
(39, '5e35be15a10ea.jpg', 56, '2020-02-01 15:01:25', '2020-02-01 15:01:25'),
(40, '5e35be15a10ea.jpg', 58, '2020-02-01 15:01:32', '2020-02-01 15:01:32'),
(41, '5e35be15a10ea.jpg', 60, '2020-02-01 15:01:47', '2020-02-01 15:01:47'),
(42, '5e35be15a10ea.jpg', 62, '2020-02-01 15:03:01', '2020-02-01 15:03:01'),
(43, '5e35be15a10ea.jpg', 64, '2020-02-01 15:03:48', '2020-02-01 15:03:48'),
(44, '5e35be15a10ea.jpg', 66, '2020-02-01 15:04:22', '2020-02-01 15:04:22'),
(45, '5e35be15a10ea.jpg', 68, '2020-02-01 15:04:33', '2020-02-01 15:04:33'),
(46, '5e35be15a10ea.jpg', 70, '2020-02-01 15:04:56', '2020-02-01 15:04:56'),
(47, '5e35be15a10ea.jpg', 72, '2020-02-01 15:05:13', '2020-02-01 15:05:13'),
(48, '5e35be15a10ea.jpg', 74, '2020-02-01 15:05:45', '2020-02-01 15:05:45'),
(49, '5e35be15a10ea.jpg', 76, '2020-02-01 15:06:03', '2020-02-01 15:06:03'),
(50, '5e35be15a10ea.jpg', 78, '2020-02-01 15:06:19', '2020-02-01 15:06:19'),
(51, '5e35be15a10ea.jpg', 80, '2020-02-01 15:06:27', '2020-02-01 15:06:27'),
(52, '5e35be15a10ea.jpg', 82, '2020-02-01 15:06:37', '2020-02-01 15:06:37'),
(53, '5e35be15a10ea.jpg', 84, '2020-02-01 15:08:17', '2020-02-01 15:08:17'),
(54, '5e35be15a10ea.jpg', 86, '2020-02-01 15:08:35', '2020-02-01 15:08:35'),
(55, '5e35be15a10ea.jpg', 88, '2020-02-01 15:08:53', '2020-02-01 15:08:53'),
(56, '5e35be15a10ea.jpg', 90, '2020-02-01 15:09:13', '2020-02-01 15:09:13'),
(57, '5e35be15a10ea.jpg', 92, '2020-02-01 15:09:25', '2020-02-01 15:09:25'),
(58, '5e35be15a10ea.jpg', 94, '2020-02-01 15:10:33', '2020-02-01 15:10:33'),
(59, '5e35be15a10ea.jpg', 96, '2020-02-01 15:11:01', '2020-02-01 15:11:01'),
(60, '5e35be15a10ea.jpg', 98, '2020-02-01 15:11:57', '2020-02-01 15:11:57'),
(61, '5e35be15a10ea.jpg', 100, '2020-02-01 15:12:09', '2020-02-01 15:12:09'),
(62, '5e35be15a10ea.jpg', 102, '2020-02-01 15:12:31', '2020-02-01 15:12:31'),
(63, '5e35be15a10ea.jpg', 104, '2020-02-01 15:13:05', '2020-02-01 15:13:05'),
(64, '5e35be15a10ea.jpg', 106, '2020-02-01 15:14:05', '2020-02-01 15:14:05'),
(65, '5e35be15a10ea.jpg', 108, '2020-02-01 15:14:13', '2020-02-01 15:14:13'),
(66, '5e35be15a10ea.jpg', 110, '2020-02-01 15:17:03', '2020-02-01 15:17:03'),
(67, '5e35be15a10ea.jpg', 112, '2020-02-01 15:17:07', '2020-02-01 15:17:07'),
(68, '5e35be15a10ea.jpg', 114, '2020-02-01 15:17:11', '2020-02-01 15:17:11'),
(69, '5e35be15a10ea.jpg', 116, '2020-02-01 15:18:26', '2020-02-01 15:18:26'),
(70, '5e3dd6759977d.jpg', 125, '2020-02-07 17:58:24', '2020-02-07 17:58:24'),
(71, '5e6fd2a84e556.pdf', 126, '2020-03-16 15:55:31', '2020-03-16 15:55:31'),
(72, '5e6fd2a84e556.pdf', 127, '2020-03-16 15:55:39', '2020-03-16 15:55:39'),
(73, '5e6fd2a84e556.pdf', 128, '2020-03-16 15:55:53', '2020-03-16 15:55:53'),
(74, '5e6fd2a84e556.pdf', 129, '2020-03-16 15:57:08', '2020-03-16 15:57:08'),
(75, '5e6fe37026219.txt', 130, '2020-03-16 17:07:07', '2020-03-16 17:07:07'),
(76, '5e77aea5df8e0.pdf', 131, '2020-03-22 14:01:54', '2020-03-22 14:01:54'),
(77, '5e8476ecc1547.jpg', 132, '2020-04-01 06:41:49', '2020-04-01 06:41:49'),
(78, '5ea08c39895f8.jpg', 146, '2020-04-22 13:56:38', '2020-04-22 13:56:38'),
(79, '5ea08c5b1a11e.png', 148, '2020-04-22 13:56:38', '2020-04-22 13:56:38'),
(80, '5ea1cc4abec1b.pdf', 155, '2020-04-23 12:41:47', '2020-04-23 12:41:47'),
(81, '5ea1cf9981aea.pdf', 156, '2020-04-23 12:56:23', '2020-04-23 12:56:23'),
(82, '5ea1cfbb46d7e.pdf', 157, '2020-04-23 12:56:23', '2020-04-23 12:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home_banners` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `persian_name`, `description`, `image`, `is_home_banners`, `created_at`, `updated_at`) VALUES
(5, 'logo', 'لوگو', NULL, '5ea097f59fbd3.jpg', 0, '2019-12-06 10:16:29', '2020-04-22 14:46:05'),
(7, 'banner1', 'بنر شماره1', NULL, '5e3d2c20f02c5.png', 1, '2020-02-07 05:51:36', '2020-02-07 05:51:36'),
(10, 'banner0', 'بنر شماره0', NULL, '5e3d2e37d079c.png', 1, '2020-02-07 06:00:31', '2020-02-07 06:00:31'),
(11, 'banner1', 'بنر شماره1', NULL, '5e3d2e37d2d80.jpg', 1, '2020-02-07 06:00:31', '2020-02-07 06:00:31'),
(17, 'banner0', 'بنر شماره0', NULL, '5ea118058eefd.png', 1, '2020-04-22 23:52:29', '2020-04-22 23:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_read` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `user_name`, `phone`, `title`, `body`, `answer`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 0, 'حسن', '09165847954', 'سلام خوبید', 'ودنتتنذاترال رالرال را رتارا اتر رات اترتا رار لرل غز ذرع راذ اترل ذا رلر لر ا تا رالر لارالر ر لر رتار لا الز ذتا رالز لغز', NULL, 1, '2019-12-06 11:49:27', '2019-12-06 08:34:31'),
(2, 2, 'حسین', '091964352', 'ه هه هه', 'ئتذ اتات ذتاذ ات اتر اترتا ت ذ ذعب ذنتر غعب ل غ رل ع لر', 'وئذ اتذ تاذ اتتا رعف6 ذت ترغع بیغ', 1, '2019-12-06 11:51:23', '2019-12-06 08:41:57'),
(3, 1, 'vahidreza', '09196649497', 'تصنیف واره', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 10:23:38', '2019-12-06 10:23:38'),
(4, 1, 'vahidreza', '09196649497', 'تصنیف واره', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 10:24:00', '2019-12-06 10:24:00'),
(5, 1, 'vahidreza', '09196649497', 'تصنیف gfd', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 10:30:41', '2019-12-06 10:30:41'),
(6, 1, 'vahidreza', '09196649497', 'dgfds', 'dzfdzs', NULL, 1, '2019-12-06 10:31:21', '2020-01-24 12:18:59'),
(7, 0, 'س', '9سی', 'بیس', 'بسیبس', NULL, 1, '2020-04-23 00:59:34', '2020-04-23 01:01:25');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_10_09_153623_create_types_table', 1),
(10, '2019_10_09_153644_create_orders_table', 1),
(11, '2019_10_09_154847_create_media_table', 1),
(12, '2019_10_09_162310_create_order_details_table', 1),
(13, '2019_10_13_152734_create_banners_table', 2),
(14, '2019_10_13_152839_create_announcements_table', 2),
(15, '2019_10_13_161758_create_products_table', 3),
(16, '2019_10_19_074433_create_categories_table', 4),
(17, '2019_10_21_145845_create_order_statuses_table', 5),
(18, '2019_11_25_131151_create_admins_table', 6),
(19, '2019_12_05_141807_create_image_table', 7),
(20, '2019_12_05_141944_create_texts_table', 7),
(21, '2019_12_06_112937_create_messages_table', 8),
(22, '2020_01_01_190441_create_kinds_table', 9),
(23, '2020_01_01_190501_create_circulations_table', 9),
(24, '2020_01_01_190521_create_durations_table', 9),
(25, '2020_01_01_190536_create_sizes_table', 9),
(26, '2020_01_01_190548_create_qualities_table', 9),
(27, '2020_01_01_190558_create_punches_table', 9),
(28, '2020_01_01_190610_create_stands_table', 9),
(29, '2020_01_01_190624_create_print_types_table', 9),
(30, '2020_01_01_190643_create_bounding_types_table', 9),
(31, '2020_01_01_190705_create_cover_types_table', 9),
(32, '2020_01_01_194607_update_products_table', 10),
(33, '2020_01_01_195507_update_orders_table', 11),
(34, '2020_01_12_195718_create_addition_types_table', 11),
(35, '2020_01_12_195738_create_additions_table', 11),
(36, '2020_01_12_195904_create_order_addition_table', 11),
(37, '2020_01_23_185054_create_files_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `numbers` int(50) NOT NULL DEFAULT '1',
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `tracking_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status_id` int(10) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_name`, `phone`, `product_id`, `type_id`, `numbers`, `price`, `description`, `address`, `tracking_code`, `order_status_id`, `created_at`, `updated_at`) VALUES
(1, 1, '0', '09196649497', 1, 1, 1, '1000', 'بنابر یكی از كلمات قدیمی زبانمان گرد هم آوردن یعنی چیز. پل ]هم[ در حقیقت، به مثابه گردهم آورندهٔ امر چهارگانه‌ای كه پیش‌تر توصیف كردیم- یك چیز است. به یقین، عوام در نگاه نخست و در واقع امر به پل صرفاً به چشم پل نگاه می‌كنند. مبسوق به این امر، گاهی هم می‌تواند چیزهای بسیار متفاوت دیگری را بیان كند. یكی از این اشكال بیان این است كه می‌تواند به نمادی تبدیل شود، مثلاً نماد آن چیزهایی كه در بالا ذكر كردیم. اما پل اگر یك پل حقیقی باشد هرگز نمی‌تواند پل صرف و بعداً نماد باشد. و اصلاً پل حتی از همان نخست هم هرگز ]نمی‌تواند[ صرفاً یك نماد باشد، البته نماد به این معنا كه امری را بیان كند ]یا بر امری دلالت كند[،‌ كه اگر دقیق سخن بگوییم، به آن تعلق ندارد. وقتی پل را به معنای دقیق كلمه در نظر بگیریم، او هرگز به مثابهٔ بیان ]امری[ تجلی نمی‌كند. پل یك چیز است و فقط همین ]است[. فقط همین؟ به مثابهٔ این چیز امر چهارگانه را گردهم می‌آورد.', 'rt', 'rertert', 2, '2019-11-30 13:45:04', '2019-12-05 09:50:02'),
(2, 0, 'fgd', '0', 1, 2, 1, '222', NULL, '875', '5654', 1, '2019-12-03 14:57:44', '2019-12-03 14:57:48'),
(3, 0, NULL, '0', NULL, 1, 1, 'jhg', NULL, 'ty', NULL, 1, '2019-12-03 15:00:51', '2019-12-03 15:00:53'),
(4, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'FQkqZYts3A', 1, '2020-01-29 08:04:49', '2020-01-29 08:04:49'),
(5, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'bdEqnPdy7s', 1, '2020-01-29 08:05:52', '2020-01-29 08:05:52'),
(6, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'WIb51Z6Hrf', 1, '2020-01-29 08:06:22', '2020-01-29 08:06:22'),
(7, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '3kesAdG6gp', 1, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(8, 0, NULL, '0', NULL, 1, 1, '1000', 'bcgc', NULL, '3kesAdG6gp', 1, '2020-01-29 08:06:39', '2020-01-29 08:06:39'),
(9, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'WLQcuBcYlU', 1, '2020-01-29 12:31:07', '2020-01-29 12:31:07'),
(10, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'WLQcuBcYlU', 1, '2020-01-29 12:31:07', '2020-01-29 12:31:07'),
(11, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'XCR4KdCvoc', 2, '2020-01-29 12:31:38', '2020-01-31 15:56:34'),
(12, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'XCR4KdCvoc', 1, '2020-01-29 12:31:38', '2020-01-29 12:31:38'),
(13, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'eUtAL3sd1M', 1, '2020-01-29 12:35:12', '2020-01-29 12:35:12'),
(14, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'eUtAL3sd1M', 1, '2020-01-29 12:35:12', '2020-01-29 12:35:12'),
(15, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'qcOwlcjhDR', 1, '2020-01-29 12:36:17', '2020-01-29 12:36:17'),
(16, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'qcOwlcjhDR', 1, '2020-01-29 12:36:17', '2020-01-29 12:36:17'),
(17, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'kQTO54977k', 1, '2020-01-31 07:33:34', '2020-01-31 07:33:34'),
(18, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'n5HWMsY0gW', 1, '2020-01-31 07:34:23', '2020-01-31 07:34:23'),
(19, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'tKEH2JszKG', 1, '2020-01-31 07:43:18', '2020-01-31 07:43:18'),
(20, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'E8yBYU0vbq', 1, '2020-01-31 07:49:17', '2020-01-31 07:49:17'),
(21, 0, NULL, '0', 4, 1, 1, '1000', NULL, NULL, 'E8yBYU0vbq', 1, '2020-01-31 07:49:17', '2020-01-31 07:49:17'),
(22, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'p5Sje9Wp35', 1, '2020-01-31 16:02:17', '2020-01-31 16:02:17'),
(23, 1, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'jgo3XWCvVW', 1, '2020-01-31 16:26:56', '2020-01-31 16:26:56'),
(24, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'wez4QZArBx', 1, '2020-02-01 14:47:43', '2020-02-01 14:47:43'),
(25, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'wez4QZArBx', 1, '2020-02-01 14:47:43', '2020-02-01 14:47:43'),
(26, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'DAKl8ObPb7', 1, '2020-02-01 14:50:55', '2020-02-01 14:50:55'),
(27, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'DAKl8ObPb7', 1, '2020-02-01 14:50:55', '2020-02-01 14:50:55'),
(28, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'xMUHaNm4KX', 1, '2020-02-01 14:51:16', '2020-02-01 14:51:16'),
(29, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'xMUHaNm4KX', 1, '2020-02-01 14:51:16', '2020-02-01 14:51:16'),
(30, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'sCTuonV1nV', 1, '2020-02-01 14:53:56', '2020-02-01 14:53:56'),
(31, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'sCTuonV1nV', 1, '2020-02-01 14:53:56', '2020-02-01 14:53:56'),
(32, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'OBQuFNpiDs', 1, '2020-02-01 14:54:39', '2020-02-01 14:54:39'),
(33, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'OBQuFNpiDs', 1, '2020-02-01 14:54:39', '2020-02-01 14:54:39'),
(34, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'uaUz16FaHA', 1, '2020-02-01 14:55:05', '2020-02-01 14:55:05'),
(35, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'uaUz16FaHA', 1, '2020-02-01 14:55:05', '2020-02-01 14:55:05'),
(36, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'iCpIl1oT3o', 1, '2020-02-01 14:56:02', '2020-02-01 14:56:02'),
(37, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'iCpIl1oT3o', 1, '2020-02-01 14:56:02', '2020-02-01 14:56:02'),
(38, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '2QgidMUdd2', 1, '2020-02-01 14:56:53', '2020-02-01 14:56:53'),
(39, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '2QgidMUdd2', 1, '2020-02-01 14:56:53', '2020-02-01 14:56:53'),
(40, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'kJciw9TKh4', 2, '2020-02-01 14:57:06', '2020-04-19 00:52:46'),
(41, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'kJciw9TKh4', 1, '2020-02-01 14:57:06', '2020-02-01 14:57:06'),
(42, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'ZtpDPbl4jQ', 1, '2020-02-01 14:57:30', '2020-02-01 14:57:30'),
(43, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'ZtpDPbl4jQ', 1, '2020-02-01 14:57:30', '2020-02-01 14:57:30'),
(44, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '8Nmd49XUCE', 1, '2020-02-01 14:57:59', '2020-02-01 14:57:59'),
(45, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '8Nmd49XUCE', 1, '2020-02-01 14:57:59', '2020-02-01 14:57:59'),
(46, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'X3VPBblmcK', 1, '2020-02-01 14:58:15', '2020-02-01 14:58:15'),
(47, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'X3VPBblmcK', 1, '2020-02-01 14:58:15', '2020-02-01 14:58:15'),
(48, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'z9D7NdKPle', 1, '2020-02-01 14:58:47', '2020-02-01 14:58:47'),
(49, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'z9D7NdKPle', 1, '2020-02-01 14:58:47', '2020-02-01 14:58:47'),
(50, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'IDZNe3JhN4', 1, '2020-02-01 14:58:57', '2020-02-01 14:58:57'),
(51, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'IDZNe3JhN4', 1, '2020-02-01 14:58:57', '2020-02-01 14:58:57'),
(52, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'gTDoyjebO2', 1, '2020-02-01 14:59:07', '2020-02-01 14:59:07'),
(53, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'gTDoyjebO2', 1, '2020-02-01 14:59:07', '2020-02-01 14:59:07'),
(54, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'yvSIwCmfAf', 1, '2020-02-01 15:00:18', '2020-02-01 15:00:18'),
(55, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'yvSIwCmfAf', 1, '2020-02-01 15:00:18', '2020-02-01 15:00:18'),
(56, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'RXNdZgbd2r', 1, '2020-02-01 15:01:25', '2020-02-01 15:01:25'),
(57, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'RXNdZgbd2r', 1, '2020-02-01 15:01:25', '2020-02-01 15:01:25'),
(58, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'jcHUsr8lG4', 1, '2020-02-01 15:01:32', '2020-02-01 15:01:32'),
(59, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'jcHUsr8lG4', 1, '2020-02-01 15:01:32', '2020-02-01 15:01:32'),
(60, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'yIEzZ4XJea', 1, '2020-02-01 15:01:47', '2020-02-01 15:01:47'),
(61, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'yIEzZ4XJea', 1, '2020-02-01 15:01:47', '2020-02-01 15:01:47'),
(62, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'Yvy7a7i9qi', 1, '2020-02-01 15:03:01', '2020-02-01 15:03:01'),
(63, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'Yvy7a7i9qi', 1, '2020-02-01 15:03:01', '2020-02-01 15:03:01'),
(64, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'jZ9QE5kKO7', 1, '2020-02-01 15:03:48', '2020-02-01 15:03:48'),
(65, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'jZ9QE5kKO7', 1, '2020-02-01 15:03:48', '2020-02-01 15:03:48'),
(66, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'N3PhEvvl73', 1, '2020-02-01 15:04:22', '2020-02-01 15:04:22'),
(67, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'N3PhEvvl73', 1, '2020-02-01 15:04:22', '2020-02-01 15:04:22'),
(68, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '9nJ7VDrQxX', 1, '2020-02-01 15:04:33', '2020-02-01 15:04:33'),
(69, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '9nJ7VDrQxX', 1, '2020-02-01 15:04:33', '2020-02-01 15:04:33'),
(70, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'rkkeucZr7x', 1, '2020-02-01 15:04:56', '2020-02-01 15:04:56'),
(71, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'rkkeucZr7x', 1, '2020-02-01 15:04:56', '2020-02-01 15:04:56'),
(72, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'AOWo9rieyJ', 1, '2020-02-01 15:05:13', '2020-02-01 15:05:13'),
(73, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'AOWo9rieyJ', 1, '2020-02-01 15:05:13', '2020-02-01 15:05:13'),
(74, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '6f3SSwXkf9', 1, '2020-02-01 15:05:44', '2020-02-01 15:05:44'),
(75, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '6f3SSwXkf9', 1, '2020-02-01 15:05:45', '2020-02-01 15:05:45'),
(76, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'oaKyXwCZ72', 1, '2020-02-01 15:06:03', '2020-02-01 15:06:03'),
(77, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'oaKyXwCZ72', 1, '2020-02-01 15:06:03', '2020-02-01 15:06:03'),
(78, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '2IFeQsYGW9', 1, '2020-02-01 15:06:19', '2020-02-01 15:06:19'),
(79, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '2IFeQsYGW9', 1, '2020-02-01 15:06:19', '2020-02-01 15:06:19'),
(80, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'kU1turnMCR', 1, '2020-02-01 15:06:27', '2020-02-01 15:06:27'),
(81, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'kU1turnMCR', 1, '2020-02-01 15:06:27', '2020-02-01 15:06:27'),
(82, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'zkHg13512f', 1, '2020-02-01 15:06:37', '2020-02-01 15:06:37'),
(83, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'zkHg13512f', 1, '2020-02-01 15:06:37', '2020-02-01 15:06:37'),
(84, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '2HypDbjVRn', 1, '2020-02-01 15:08:17', '2020-02-01 15:08:17'),
(85, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '2HypDbjVRn', 1, '2020-02-01 15:08:17', '2020-02-01 15:08:17'),
(86, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '2ozXb8O4S7', 1, '2020-02-01 15:08:35', '2020-02-01 15:08:35'),
(87, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '2ozXb8O4S7', 1, '2020-02-01 15:08:35', '2020-02-01 15:08:35'),
(88, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'juS4jsgvfS', 1, '2020-02-01 15:08:53', '2020-02-01 15:08:53'),
(89, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'juS4jsgvfS', 1, '2020-02-01 15:08:53', '2020-02-01 15:08:53'),
(90, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '1c4LEKVgg5', 1, '2020-02-01 15:09:13', '2020-02-01 15:09:13'),
(91, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '1c4LEKVgg5', 1, '2020-02-01 15:09:13', '2020-02-01 15:09:13'),
(92, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'EBc7uCyrUR', 1, '2020-02-01 15:09:25', '2020-02-01 15:09:25'),
(93, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'EBc7uCyrUR', 1, '2020-02-01 15:09:25', '2020-02-01 15:09:25'),
(94, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'WVSGO3Am0m', 1, '2020-02-01 15:10:33', '2020-02-01 15:10:33'),
(95, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'WVSGO3Am0m', 1, '2020-02-01 15:10:33', '2020-02-01 15:10:33'),
(96, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '1xVxuHm7hY', 1, '2020-02-01 15:11:01', '2020-02-01 15:11:01'),
(97, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, '1xVxuHm7hY', 1, '2020-02-01 15:11:01', '2020-02-01 15:11:01'),
(98, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'AHBGDooIwr', 1, '2020-02-01 15:11:57', '2020-02-01 15:11:57'),
(99, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'AHBGDooIwr', 1, '2020-02-01 15:11:57', '2020-02-01 15:11:57'),
(100, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'myIu5kJqdC', 1, '2020-02-01 15:12:09', '2020-02-01 15:12:09'),
(101, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'myIu5kJqdC', 1, '2020-02-01 15:12:09', '2020-02-01 15:12:09'),
(102, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'E1YkLkS1rr', 1, '2020-02-01 15:12:31', '2020-02-01 15:12:31'),
(103, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'E1YkLkS1rr', 1, '2020-02-01 15:12:31', '2020-02-01 15:12:31'),
(104, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'WXpYA7XhWy', 1, '2020-02-01 15:13:05', '2020-02-01 15:13:05'),
(105, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'WXpYA7XhWy', 1, '2020-02-01 15:13:05', '2020-02-01 15:13:05'),
(106, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'EIUwJN3YSd', 1, '2020-02-01 15:14:05', '2020-02-01 15:14:05'),
(107, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'EIUwJN3YSd', 1, '2020-02-01 15:14:05', '2020-02-01 15:14:05'),
(108, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'UP81XFDh31', 1, '2020-02-01 15:14:13', '2020-02-01 15:14:13'),
(109, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'UP81XFDh31', 1, '2020-02-01 15:14:13', '2020-02-01 15:14:13'),
(110, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'NGM8Kj3LeP', 1, '2020-02-01 15:17:03', '2020-02-01 15:17:03'),
(111, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'NGM8Kj3LeP', 1, '2020-02-01 15:17:03', '2020-02-01 15:17:03'),
(112, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'STexZWWTi7', 1, '2020-02-01 15:17:07', '2020-02-01 15:17:07'),
(113, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'STexZWWTi7', 1, '2020-02-01 15:17:07', '2020-02-01 15:17:07'),
(114, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'xFEllh3F1F', 1, '2020-02-01 15:17:11', '2020-02-01 15:17:11'),
(115, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'xFEllh3F1F', 1, '2020-02-01 15:17:11', '2020-02-01 15:17:11'),
(116, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'xa5jdwn0JG', 1, '2020-02-01 15:18:26', '2020-02-01 15:18:26'),
(117, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'xa5jdwn0JG', 1, '2020-02-01 15:18:26', '2020-02-01 15:18:26'),
(118, 0, NULL, '0', 3, 1, 1, '1000', NULL, NULL, 'VBH5WjBJz5', 1, '2020-02-01 15:18:51', '2020-02-01 15:18:51'),
(119, 0, NULL, '0', 3, 1, 1, '1000', NULL, NULL, 'XMNuH3wGps', 1, '2020-02-01 15:22:20', '2020-02-01 15:22:20'),
(120, 0, NULL, '0', 1, 1, 1, '1000', NULL, NULL, 'lLwVweCQHB', 1, '2020-02-01 15:23:01', '2020-02-01 15:23:01'),
(121, 0, NULL, '0', 3, 1, 1, '1000', NULL, NULL, 'OtCnm5GGhz', 1, '2020-02-01 15:24:47', '2020-02-01 15:24:47'),
(122, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'ycxRDtipij', 1, '2020-02-07 15:25:18', '2020-02-07 15:25:18'),
(123, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, '8sdOWdok9q', 1, '2020-02-07 15:25:23', '2020-02-07 15:25:23'),
(124, 0, NULL, '0', NULL, 1, 1, '1000', NULL, NULL, 'kZjd6xr5t6', 1, '2020-02-07 15:25:23', '2020-02-07 15:25:23'),
(125, 0, NULL, '0', NULL, 1, 1, '1000', '---- از طرف :vhgf---- برای :vhxcf--- مناسبت :vhc', NULL, 'oieB5GkGmz', 1, '2020-02-07 17:58:24', '2020-02-07 17:58:24'),
(126, 0, NULL, '0', NULL, 3, 1, '2400', 'rterdtee', NULL, 'nDdHRm8Na1', 1, '2020-03-16 15:55:31', '2020-03-16 15:55:31'),
(127, 0, NULL, '0', NULL, 3, 1, '2400', 'rterdtee', NULL, 'PPPOwJ1xYl', 1, '2020-03-16 15:55:39', '2020-03-16 15:55:39'),
(128, 0, NULL, '0', NULL, 3, 1, '2400', 'rterdtee', NULL, 'MFHg89j9Gz', 1, '2020-03-16 15:55:53', '2020-03-16 15:55:53'),
(129, 0, NULL, '0', NULL, 3, 1, '2400', 'rterdtee', NULL, 'o0BOVJLYot', 2, '2020-03-16 15:57:08', '2020-04-19 04:01:13'),
(130, 1, NULL, '0', NULL, 1, 1, '42000', '---- از طرف :dxf---- برای :dxgd--- مناسبت :xg', NULL, 'JpACr0kS6g', 1, '2020-03-16 17:07:07', '2020-03-16 17:07:07'),
(131, 0, NULL, '0', NULL, 3, 1, '69600', NULL, NULL, 'SWc5ni5K7Q', 1, '2020-03-22 14:01:54', '2020-03-22 14:01:54'),
(132, 0, NULL, '0', NULL, 1, 1, '1750000', '---- از طرف :حسین---- برای :حسینی--- مناسبت :هه', NULL, 'npuZvgcQMx', 2, '2020-04-01 06:41:49', '2020-04-06 00:53:07'),
(133, 2, NULL, '0', 3, 1, 1, '1050000', '---- از طرف :dسس---- برای :سسی--- مناسبت :ضیبلر', NULL, 'lJBCZ5UGMy', 2, '2020-04-14 05:24:36', '2020-04-14 05:25:30'),
(134, 2, NULL, '0', 2, 2, 1, '2000', 'ببیی---- از طرف :س---- برای :سی', NULL, 'KEeNgILBs7', 1, '2020-04-14 09:09:11', '2020-04-14 09:09:11'),
(135, 2, NULL, '0', 4, 1, 1, '7000000', '---- از طرف :س---- برای :یثی--- مناسبت :بز', NULL, 'KEeNgILBs7', 3, '2020-04-14 09:09:11', '2020-04-20 10:10:08'),
(136, 2, NULL, '0', 4, 1, 1, '1050000', '---- از طرف :س---- برای :یب--- مناسبت :ی', NULL, 'SJPfxzMKLd', 3, '2020-04-14 09:12:56', '2020-04-19 04:00:53'),
(137, 2, NULL, '0', 3, 1, 1, '1050000', '---- از طرف :دد---- برای :د--- مناسبت :د', NULL, 'SJPfxzMKLd', 1, '2020-04-14 09:12:56', '2020-04-14 09:12:56'),
(138, 2, NULL, '0', 1, 1, 1, '4200000', '---- از طرف :رر---- برای :رر--- مناسبت :رر', NULL, 'SJPfxzMKLd', 1, '2020-04-14 09:12:56', '2020-04-14 09:12:56'),
(139, 0, NULL, '0', 3, 1, 1, '1675000', '---- از طرف :سس---- برای :س--- مناسبت :س', NULL, 'mQKmZxLgsa', 1, '2020-04-19 10:54:12', '2020-04-19 10:54:12'),
(140, 0, NULL, '0', 4, 1, 1, '6700000', '---- از طرف :ی---- برای :ی--- مناسبت :ی', NULL, 'mQKmZxLgsa', 1, '2020-04-19 10:54:12', '2020-04-19 10:54:12'),
(141, 3, NULL, '0', 4, 1, 1, '925300', '---- از طرف :5---- برای :4--- مناسبت :4', NULL, 'RQhUkGMgXb', 2, '2020-04-20 10:05:19', '2020-04-20 10:06:08'),
(142, 3, NULL, '0', 3, 1, 1, '1675000', '---- از طرف :55---- برای :نم--- مناسبت :ن', NULL, 'RQhUkGMgXb', 1, '2020-04-20 10:05:19', '2020-04-20 10:05:19'),
(143, 3, NULL, '0', 3, 1, 1, '9500000', '---- از طرف :ت---- برای :ت--- مناسبت :ت', NULL, 'SdvvTGYc7O', 2, '2020-04-20 10:07:49', '2020-04-20 10:09:33'),
(144, 3, NULL, '0', 1, 1, 1, '9500000', 'سس---- از طرف :1---- برای :1--- مناسبت :1', NULL, 'PamiFnuV31', 1, '2020-04-20 10:11:55', '2020-04-20 10:11:55'),
(145, 0, NULL, '0', 3, 1, 1, '925300', 'سسشسشصبب---- از طرف :1---- برای :1--- مناسبت :1', NULL, 'jycEfJHtj2', 2, '2020-04-20 10:16:19', '2020-04-20 10:29:14'),
(146, 1, NULL, '0', NULL, 1, 1, '7000000', '---- از طرف :tyrt---- برای :truyrt--- مناسبت :trur', NULL, 'CLW2BE9DA8', 1, '2020-04-22 13:56:38', '2020-04-22 13:56:38'),
(147, 1, NULL, '0', 3, 1, 1, '1750000', '---- از طرف :gh---- برای :gfytf--- مناسبت :ftur', NULL, 'CLW2BE9DA8', 1, '2020-04-22 13:56:38', '2020-04-22 13:56:38'),
(148, 1, NULL, '0', NULL, 9, 1, '1270', 'dtdr', NULL, 'CLW2BE9DA8', 1, '2020-04-22 13:56:38', '2020-04-22 13:56:38'),
(149, 1, NULL, '09196649497', 2, 2, 1, '2000', 'fdgd---- از طرف :dfgsd---- برای :fdgdf', NULL, 'WjsmapgMhQ', 1, '2020-04-22 14:18:51', '2020-04-22 14:18:51'),
(150, 1, NULL, '09196649497', 2, 2, 1, '2000', 'fdgd---- از طرف :dfgsd---- برای :fdgdf', NULL, 'WjsmapgMhQ', 1, '2020-04-22 14:18:51', '2020-04-22 14:18:51'),
(151, 3, NULL, '09359008588', 5, 1, 1, '300300', '---- از طرف :یبی---- برای :ررر--- مناسبت :سب', NULL, 'CzBmHkO7Ji', 1, '2020-04-23 00:44:25', '2020-04-23 00:44:25'),
(152, 3, NULL, '09359008588', 4, 1, 1, '2375000', 'طییی---- از طرف :ثث---- برای :صص--- مناسبت :فف', NULL, 'CzBmHkO7Ji', 3, '2020-04-23 00:44:25', '2020-04-23 00:53:51'),
(153, 0, NULL, '0', 5, 1, 1, '2375000', 'یییی---- از طرف :یشس---- برای :یش--- مناسبت :ی', NULL, 'ElFJJdgig0', 2, '2020-04-23 00:46:15', '2020-04-23 00:53:15'),
(154, 0, NULL, '0', 3, 1, 1, '2375000', 'ابب---- از طرف :لاب---- برای :بب--- مناسبت :ا', NULL, 'ElFJJdgig0', 1, '2020-04-23 00:46:15', '2020-04-23 00:46:15'),
(155, 0, NULL, '0', NULL, 5, 5, '35000', NULL, NULL, 'b8NfwO8YcH', 1, '2020-04-23 12:41:47', '2020-04-23 12:41:47'),
(156, 0, NULL, '0', NULL, 3, 2, '504000000', NULL, NULL, 'UYIlqm4q1i', 1, '2020-04-23 12:56:23', '2020-04-23 12:56:23'),
(157, 0, NULL, '0', NULL, 6, 2, '10600', NULL, NULL, 'UYIlqm4q1i', 1, '2020-04-23 12:56:23', '2020-04-23 12:56:23'),
(158, 0, NULL, '0', 3, 1, 2, '50400', '---- از طرف :حسین---- برای :سیسی--- مناسبت :یسس', NULL, 'yz9CfsH97n', 1, '2020-05-05 09:21:44', '2020-05-05 09:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `text_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'در حال بررسی', '2019-11-30 13:51:25', '2019-11-30 13:51:26'),
(2, 'در حال چاپ', '2019-12-03 13:18:35', '2019-12-03 13:18:36'),
(3, 'آماده تحویل', NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `type_id`, `description`, `photo`, `banner_type`, `created_at`, `updated_at`) VALUES
(1, 'بنر شماره 3', 1, 'واژه «گشتل» (Gestell) به حوزه «فلسفه تکنولوژی» تعلق دارد و برای نخستین بار توسط مارتین هایدگر، فیلسوف آلمانی قرن بیستم در مقاله­ ای با عنوان «پرسشی در باب تکنولوژی» به­ کار رفته است.\r\n\r\nپیش از هایدگر، دو متفکر دیگر به نامهای «شریف» و «پیت» دو تعریف را برای تکنولوژی ذکر کرده بودند.', '5de905bf2df8b.jpg', NULL, '2019-11-30 13:50:29', '2019-12-05 09:57:27'),
(2, 'اعلامیه شماره 45', 2, 'شریف، تکنولوژی را «ابزار» [2] تعریف کرد یعنی چیزی که توان علّی لازم برای تحقق هدفی مشخص را دارد. او معتقد بود که تکنولوژی از کنار هم گذاشتن افزارهایی همچون سخت ­افزار (فن ­افزار)، انسان ­افزار، سازمان­ افزار و اطلاعات­ افزار به سامان می­رسد(شکل زیر). درواقع او علاوه بر ابزار سخت، به مفهوم ابزار نرم یا اجتماعی هم قائل بود. اگرچه برخی از نویسندگان برای توجه دادن بیشتر به ابعاد اجتماعی و نرم تکنولوژی، ترجیح داده­ اند به جای ابزار نرم از مفهوم «سامانه اجتماعی ـ تکنیکی»[3] استفاده کنند.', '5ea09acadbede.jpg', 0, '2019-12-05 10:06:49', '2020-04-22 14:58:10'),
(3, 'بنر شماره 5', 1, 'پیت، معتقد بود که ابزار به تنهایی معطوف به موفقیت نیست. ابزار باید به کار گرفته شود تا هدفی محقق شود بنابراین او تکنولوژی را «به­ کارگیری ابزار» تعریف کرد که درواقع نوعی فعالیت انسانی است.\r\n\r\nالبته هر نوع به­ کارگیری ابزار، تکنولوژی به حساب نمی­ آید بلکه بکارگیری ابزار باید آگاهانه و هدفمند باشد و از همین ­رو تصمیم­ گیری انسانی در آن نقش مهمی ایفا می­کند (شکل زیر).', '5de90886bc164.jpg', 8, '2019-12-05 10:09:18', '2019-12-05 10:09:18'),
(4, 'بنر شماره 4', 1, 'ئالعغ', '5e3405727c70e.jpg', 9, '2020-01-31 07:16:10', '2020-01-31 07:16:10'),
(5, 'بنر شماره 565', 1, 'd', '5ea09d216c17c.jpg', 10, '2020-04-22 14:49:39', '2020-04-22 15:08:09'),
(6, 'ftdy', 1, NULL, '5ea09d42ebedb.jpg', 10, '2020-04-22 15:08:29', '2020-04-22 15:08:42'),
(7, 'سلفون براق', 4, '66565', NULL, 0, '2020-05-05 09:28:14', '2020-05-05 09:32:29'),
(8, '9898989', 12, NULL, NULL, 0, '2020-05-05 09:34:23', '2020-05-05 09:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `name`, `persian_name`, `description`, `text`, `created_at`, `updated_at`) VALUES
(1, 'summary_header', 'متن راهنما', 'سیقب', 'تجربه چاپ ارزان و با کیفیت در سه چاپ', '2019-12-05 15:22:57', '2020-01-19 17:11:03'),
(2, 'summary', 'متن معرفی', 'صثقصث', 'سه چاپ مراحل محاسبه هزینه چاپ ، ثبت سفارش و پرداخت خدمات چاپی را از طریق راه اندازی سامانه آنلاین برای کاربران فراهم نموده است. در این راستا مسیر سفارش مشتریان بسیار کوتاه و سفارش در مرحله اجرا قرار می گیرد. سفارشات سه چاپ در سریعترین زمان ممکن اجرا شده و وقفه ای در انجام امور چاپی رخ نمی دهد. سفارشات مشتریان در این چاپخانه در صف انتظار نمی مانند. پس از اجرای مراحل چاپ، بسته چاپی مشتری از طریق پیک و بدون هزینه در اختیار مشتریان محترم قرار می گیرد. فقط کافی است که یکبار سفارش خود را با سه چاپ تجربه کنید. بدون شک شما هم از مشتریان ما خواهید شد.', '2019-12-05 15:23:31', '2019-12-05 12:12:19'),
(3, 'about_us', 'درباره ما', NULL, 'چاپخانه دیجیتال 3چاپ', '2019-12-06 10:18:40', '2020-04-21 01:33:44'),
(4, 'help', 'راهنما', NULL, 'سلام', '2019-12-06 10:19:24', '2020-04-21 01:35:00'),
(5, 'contact_info', 'اطلاعات تماس', NULL, 'تماس باما:09304084887', '2019-12-06 13:02:48', '2020-04-21 01:37:49'),
(6, 'offset_or_digital', 'تفاوت چاپ افست با دیجیتال', NULL, 'چاپ افست چیست؟\r\nاز این روش چاپ، برای چاپ‌هایی با تیراژ بالا استفاده می‌کنند. نمونه بارز آن، روزنامه‌هاست. در این روش، نیاز است تا صفحاتی از جنس آلومنیوم ساخته شود، به این صفحات زینک گفته می‌شود. برای طرح‌های رنگی، چهار زینک نیاز است. در دستگاه چاپ، رول‌های کاغذ قرار می‌گیرند. وقتی رول‌های کاغذ از محل زینک عبور می‌کنند، رنگ متناسب با طرح روی کاغذ نقش می‌اندازد.\r\n\r\nدر چاپ افست می‌توان از انواع کاغذها بهره برد. در این نوع چاپ، هزینه‌ها برای تیراژهای بالا، پایین می‌آیند؛ یعنی  تیراژهایی که بالاتر از ۱۰۰۰ عدد هستند. طبیعتاً برای چاپ‌های با تیراژ پایین نمی‌توان از این روش استفاده کرد؛ زیرا تهیه زینک‌ها برای تعداد پایین مقرون به صرفه نیست. از نظر زمان نیز چاپ افست خیلی زمان‌بر است؛ زیرا نیاز هست که قبل از انجام چاپ زینک‌ها تهیه شوند.\r\n\r\nمزایای چاپ افست\r\nیکی از مزایایی که چاپ افست دارد این است که کیفیت چاپ در آن بسیار بالا است. همچنین در این مدل چاپ می‌توان علاوه بر چهار رنگ از رنگ‌های دیگری نیز استفاده کرد.\r\n\r\nدر روش افست دستگاه یک بار شروع به کار می‌کند و تا پایان نمی‌توان موارد تعیین شده را تغییر داد.پس اگر می‌خواهید تعداد بالا چاپ بگیرید  این روش برای شما مناسب‌تر است و هزینه کمتری دارد. \r\n\r\nدر عین حال باید زمان را نیز در نظر بگیرید؛ چون در این روش چاپ نیاز به تهیه زینک است. با چاپ افست می‌توانید روی کاغذهایی با جنس‌های مختلف چاپ را انجام بدهید. همچنین اگر در طرح‌تان از رنگ خاصی استفاده کرده‌اید و برایتان اهمیت دارد که صد‌در‌صد همان رنگ چاپ شود، بهتر است از روش چاپ افست استفاده کنید. در چاپ افست قابلیت کنترل ترکیب رنگ و به دست آوردن کیفیت بالا وجود دارد. رنگ‌های خاص مانند رنگ‌های مسی، طلایی، نقره‌ای و غیره را می‌توان در این روش با کیفیت بالا به دست آورد\r\n\r\nچاپ دیجیتال چیست؟\r\nنوع دوم برای چاپ، چاپ دیجیتال است. این نوع چاپ سختی‌های چاپ افست را ندارد. در این روش، رنگ‌ها یکجا بر روی کاغذ منتقل می‌شوند.\r\n\r\nحتماً چاپگرهای خانگی جوهر افشان و لیزری را دیده‌اید. سیستم کار این چاپگرها روش دیجیتال است که با روش افست فرق می‌کند.\r\n\r\nروش چاپ دیجیتال از نظر استفاده از رنگها قابلیت‌های چاپ افست را ندارد؛ زیرا در این روش فقط از چهار رنگ استاندارد سیاه و سفید استفاده می‌شود. بنابراین اگر به دقت رنگی بالایی نیاز دارید، بهتر است از چاپ دیجیتال استفاده نکنید.\r\n\r\nمزایای چاپ دیجیتال\r\nچاپ دیجیتال خانه طراحان سام سریع‌تر از چاپ افست است. از این چاپ برای تیراژهای پایین استفاده می‌کنند. در این روش ، نیازی به ساخته شدن زینک نیست و در نتیجه تعداد مشخصی برای قیمت‌گذاری ندارد.\r\n\r\n در این روش چاپ اگر بخواهید چاپ را متوقف کنید و تغییرات ایجاد کنید، امکان پذیر است. حتی می‌توان یک طرح را در چند حالت مختلف با تعداد مشخص چاپ کرد.\r\n\r\nاز روش چاپ دیجیتال نمی‌توان برای چاپ روی کاغذهایی با جنسهای گوناگون استفاده کرد. چاپ دیجیتال به علت محدودیت رنگها کیفیت پایین‌تری دارد؛ زیرا این چاپ فقط از رنگ‌های استاندارد بهره می‌برد. اگر تیراژ طرحی که می‌خواهید چاپ کنید بالاست، پیشنهاد می‌کنیم از این روش چاپ استفاده نکنید؛ زیرا هزینه‌های آن بیشتر از چاپ افست می‌شود.', NULL, '2020-01-19 17:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_offset` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL,
  `is_digital` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL,
  `has_nums` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restriction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(50) UNSIGNED NOT NULL,
  `add_price` int(50) UNSIGNED NOT NULL DEFAULT '0',
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'caret-left',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `is_offset`, `is_digital`, `has_nums`, `title`, `media_type`, `restriction`, `price`, `add_price`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, 'چاپ بنر', '1', '1', 0, 0, 'flag', NULL, '2019-11-30 13:49:47', '2020-05-05 09:27:21'),
(2, NULL, NULL, 0, 'اعلامیه', '1', '1', 2000, 0, 'address-card', NULL, '2019-11-30 14:22:44', '2020-01-24 03:57:31'),
(3, NULL, NULL, 0, 'کتاب و جزوه', NULL, NULL, 2000, 0, 'book', 'کتاب', '2020-01-14 16:23:52', '2020-04-14 04:52:54'),
(4, 1, 1, 0, 'کارت ویزیت', NULL, NULL, 20000, 1000, 'id-card', 'gh', '2020-01-17 15:43:25', '2020-01-24 04:07:08'),
(5, 1, 1, 0, 'تراکت', NULL, NULL, 7000, 1200, 'newspaper-o', 'با تهیه اشتراک دانلود به بزرگترین آرشیو سینمایی و تلویزیونی دسترسی پیدا کنید!\r\n\r\nخرید از طریق معاوضه کد شارژ ایرانسل و به این شکل می باشد :', '2020-01-17 16:17:16', '2020-04-14 00:09:51'),
(6, 1, 1, 0, 'سربرگ', NULL, NULL, 5300, 1100, 'paperclip', 'drtdr', '2020-01-17 16:20:17', '2020-01-24 04:10:02'),
(7, 1, 1, 0, 'لیبل', NULL, NULL, 2000, 2500, 'tags', NULL, '2020-01-24 04:00:53', '2020-01-24 04:00:53'),
(8, 1, 1, 0, 'فاکتور', NULL, NULL, 15500, 1200, 'files-o', NULL, '2020-01-24 04:15:59', '2020-01-24 04:15:59'),
(9, NULL, 1, 0, 'منو', NULL, NULL, 1270, 0, 'list', NULL, '2020-01-24 04:18:16', '2020-01-24 04:18:16'),
(10, NULL, 1, 0, 'کاتالوگ / بروشور', NULL, NULL, 1200, 0, 'file-pdf-o', NULL, '2020-01-24 04:19:08', '2020-01-24 04:19:08'),
(11, NULL, 1, 0, 'چاپ و رایت سی دی', NULL, NULL, 12000, 0, 'floppy-o', NULL, '2020-01-24 04:19:34', '2020-01-24 04:19:34'),
(12, 1, NULL, 0, 'چاپ نایلون', NULL, NULL, 12000, 0, 'amazon', NULL, '2020-01-24 04:19:59', '2020-01-24 04:19:59'),
(13, 1, NULL, 0, 'ساک دستی', NULL, NULL, 13000, 0, 'shopping-bag', NULL, '2020-01-24 04:20:14', '2020-01-24 04:20:14'),
(14, NULL, 1, 0, 'خاص', NULL, NULL, 150000, 0, 'caret-left', NULL, '2020-04-06 00:51:52', '2020-04-06 00:51:52'),
(15, NULL, NULL, 1, 'چاپ بنر و پلات', NULL, NULL, 0, 0, 'caret-left', NULL, '2020-05-05 09:53:18', '2020-05-05 09:53:18'),
(16, NULL, NULL, 1, 'بنر سفارشی', NULL, NULL, 1000, 0, 'paint-brush', NULL, '2020-05-07 13:07:35', '2020-05-07 13:07:35'),
(17, NULL, NULL, 1, 'اعلامیه سفارشی', NULL, NULL, 1200, 0, 'paint-brush\r\n\r\n  ', NULL, '2020-05-07 13:07:48', '2020-05-07 13:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vahidreza', '09196649497', NULL, '$2y$10$RaaO.MUmWGSwc94128cMUOTfmEW0apijGyJ1EAr22o3GQHpp60Rku', NULL, '2019-11-30 06:36:46', '2019-12-06 07:28:27'),
(2, 'سعید', '09359008577', NULL, '$2y$10$73Hoit5DgUAtnud5U9IZIeJQDrVnywmBZj6pM8tuXhrjSiIvFgwSa', NULL, '2020-04-14 05:23:16', '2020-04-14 05:23:16'),
(3, 'آزاد', '09359008588', NULL, '$2y$10$AWu65Vib7LywhYPhikX8sOiH64ojUeSQx6XCAer5VP3wsY9JvOriy', NULL, '2020-04-20 10:04:21', '2020-04-20 10:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additions`
--
ALTER TABLE `additions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `additions_type_id_foreign` (`type_id`),
  ADD KEY `additions_addition_type_id_foreign` (`addition_type_id`);

--
-- Indexes for table `addition_order`
--
ALTER TABLE `addition_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addition_types`
--
ALTER TABLE `addition_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_order_id_foreign` (`order_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additions`
--
ALTER TABLE `additions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `addition_order`
--
ALTER TABLE `addition_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `addition_types`
--
ALTER TABLE `addition_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additions`
--
ALTER TABLE `additions`
  ADD CONSTRAINT `additions_addition_type_id_foreign` FOREIGN KEY (`addition_type_id`) REFERENCES `addition_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `additions_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
