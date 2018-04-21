-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 05:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `images`, `created_at`, `updated_at`, `content`) VALUES
(1, NULL, 1, 'Tin Tức', 'tin-tuc', '', '2018-04-14 00:01:19', '2018-04-14 00:01:19', NULL),
(2, 1, 1, 'Tin Tức Dịch Vụ', 'tin-tuc-dich-vu', 'categories/April2018/FAerCjg3Te88mKzx0YEE.jpg', '2018-04-14 00:02:02', '2018-04-15 20:11:56', NULL),
(3, NULL, 1, 'Dịch Vụ', 'dich-vu', 'categories/April2018/i2TX5Dn24PV47JpfBk58.jpg', '2018-04-15 20:33:54', '2018-04-15 20:33:54', NULL),
(6, 3, 1, 'GIẢM CÂN & GIẢM BÉO', 'giam-can-and-giam-beo', 'categories/April2018/HuH8ZUAzuXKeAWEzvSf1.jpg', '2018-04-15 20:43:05', '2018-04-17 16:13:04', '<ul>\r\n<li>abc</li>\r\n<li>cbd</li>\r\n<li>abc</li>\r\n</ul>'),
(7, 6, 1, 'Giảm béo công nghệ Contri UltraShape', 'giam-beo-cong-nghe-contri-ultrashape', 'categories/April2018/ZOz2g9kOGgmCiaXSo5pI.jpg', '2018-04-16 23:40:02', '2018-04-17 04:50:54', '<ul>\r\n<li>test nhiều category child</li>\r\n</ul>'),
(8, NULL, 1, 'Giới Thiệu', 'gioi-thieu', 'categories/April2018/ZGqqtVsmxBqdZqICnLDs.png', '2018-04-16 23:58:10', '2018-04-16 23:58:10', NULL),
(10, 3, 1, 'TRỊ LIỆU CÔNG NGHỆ CAO', 'tri-lieu-cong-nghe-cao', 'categories/April2018/VezrX3vJmCMxojujns27.jpg', '2018-04-17 00:50:22', '2018-04-17 00:51:47', '<ul>\r\n<li style=\"box-sizing: border-box;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #828c8b; text-decoration-line: none; font-size: 16.3539px;\" href=\"http://www.svanclinic.vn/dich-vu/tri-lieu-cong-nghe-cao/nang-co-v-line-new-ultherapy\">N&acirc;ng cơ V-Line New Ultherapy</a></li>\r\n</ul>'),
(11, 1, 1, 'Kiến Thức Làm Đẹp', 'kien-thuc-lam-dep', 'categories/April2018/BtoQqEpokgOocM9TjyGK.jpg', '2018-04-17 20:55:45', '2018-04-17 20:55:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  `source` text COLLATE utf8_unicode_ci,
  `medium` text COLLATE utf8_unicode_ci,
  `campaign` text COLLATE utf8_unicode_ci,
  `employer` text COLLATE utf8_unicode_ci,
  `status` text COLLATE utf8_unicode_ci,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`updated_at`, `id`, `title`, `phone`, `content`, `name`, `source`, `medium`, `campaign`, `employer`, `status`, `created_at`) VALUES
('2018-04-20 13:59:59', 41, '1', 'eqwe', NULL, 'qweq', 'null', 'null', 'sieunhan', NULL, NULL, '20/04/2018'),
('2018-04-20 14:16:49', 42, '11', '234123123', NULL, 'Thanh Hải', 'null', 'null', 'null', 'kanbi', 'NULL', '20/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'author_id', 'text', 'Người đăng', 1, 1, 1, 0, 0, 0, NULL, 2),
(3, 1, 'category_id', 'text', 'Danh Mục', 0, 0, 1, 1, 1, 0, NULL, 3),
(4, 1, 'title', 'text', 'Tiêu đề', 1, 1, 1, 1, 1, 1, NULL, 4),
(5, 1, 'excerpt', 'text_area', 'Tóm tắt', 0, 0, 1, 1, 1, 1, NULL, 5),
(6, 1, 'body', 'rich_text_box', 'Nội dung', 1, 0, 1, 1, 1, 1, NULL, 6),
(7, 1, 'image', 'image', 'Post Image', 0, 0, 0, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 0, 0, 1, 1, 1, 1, NULL, 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 0, 0, 1, 1, 1, 1, NULL, 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '', 3),
(29, 3, 'password', 'password', 'password', 0, 0, 0, 1, 1, 0, '', 4),
(30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10),
(31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, '', 5),
(32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 6),
(33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, '', 8),
(35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(40, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, NULL, 4),
(43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, NULL, 6),
(45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 7),
(46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(51, 1, 'seo_title', 'text', 'seo_title', 0, 0, 0, 1, 1, 1, NULL, 14),
(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(53, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
(54, 4, 'images', 'image', 'Images', 1, 1, 1, 1, 1, 1, NULL, 6),
(86, 24, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(87, 24, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(88, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(89, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(137, 30, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(138, 30, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(139, 30, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 3),
(140, 30, 'content', 'text_area', 'Content', 0, 1, 1, 1, 1, 1, NULL, 4),
(141, 30, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 7),
(142, 30, 'updated_at', 'timestamp', 'Cập Nhập', 0, 0, 1, 0, 0, 0, NULL, 8),
(143, 30, 'link', 'select_dropdown', 'Link', 0, 1, 1, 1, 1, 1, NULL, 5),
(144, 30, 'servicesspecialist_belongsto_post_relationship', 'relationship', 'posts', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Post\",\"table\":\"posts\",\"type\":\"belongsTo\",\"column\":\"link\",\"key\":\"id\",\"label\":\"slug\",\"pivot_table\":\"Banners\",\"pivot\":\"0\"}', 6),
(161, 34, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(162, 34, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(163, 34, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 3),
(164, 34, 'link', 'text_area', 'Link', 0, 1, 1, 1, 1, 1, NULL, 4),
(165, 34, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 5),
(166, 34, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(167, 35, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(168, 35, 'title', 'text_area', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(169, 35, 'content', 'text_area', 'Content', 0, 1, 1, 1, 1, 1, NULL, 3),
(170, 35, 'link', 'select_dropdown', 'Link', 0, 1, 1, 1, 1, 1, NULL, 4),
(171, 35, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 5),
(172, 35, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(173, 35, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(174, 35, 'news_belongsto_post_relationship', 'relationship', 'posts', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Post\",\"table\":\"posts\",\"type\":\"belongsTo\",\"column\":\"link\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"banners\",\"pivot\":\"0\"}', 8),
(175, 4, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, NULL, 9),
(176, 1, 'post_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"author_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\"}', 16),
(177, 1, 'post_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\"}', 17),
(195, 46, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(196, 46, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, NULL, 3),
(197, 46, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(198, 46, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(199, 46, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(200, 47, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(201, 47, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(202, 47, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 3),
(203, 47, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(204, 47, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(205, 47, 'users', 'text', 'Link', 0, 1, 1, 1, 1, 1, NULL, 6),
(212, 49, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(213, 49, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(214, 49, 'content', 'text', 'Content', 0, 1, 1, 1, 1, 1, NULL, 3),
(215, 49, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 4),
(216, 49, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(217, 49, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(222, 51, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(223, 51, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(224, 51, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(225, 51, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(226, 52, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(227, 52, 'header_titl', 'text_area', 'Header Titl', 0, 1, 1, 1, 1, 1, NULL, 2),
(228, 52, 'header_content', 'text_area', 'Header Content', 0, 1, 1, 1, 1, 1, NULL, 3),
(229, 52, 'header_images', 'image', 'Header Images', 0, 1, 1, 1, 1, 1, NULL, 4),
(230, 52, 'result_content', 'text_area', 'Result Content', 0, 1, 1, 1, 1, 1, NULL, 5),
(231, 52, 'result_images', 'image', 'Result Images', 0, 1, 1, 1, 1, 1, NULL, 6),
(232, 52, 'images_before_after', 'multiple_images', 'Images Before After', 0, 1, 1, 1, 1, 1, NULL, 7),
(233, 52, 'technical_images', 'image', 'Technical Images', 0, 1, 1, 1, 1, 1, NULL, 8),
(234, 52, 'technical_content', 'image', 'Technical Content', 0, 1, 1, 1, 1, 1, NULL, 9),
(235, 52, 'productive', 'text_area', 'Productive', 0, 1, 1, 1, 1, 1, NULL, 10),
(236, 52, 'why', 'text_area', 'Why', 0, 1, 1, 1, 1, 1, NULL, 11),
(237, 52, 'feedback', 'text_area', 'Feedback', 0, 1, 1, 1, 1, 1, NULL, 12),
(238, 52, 'noted', 'text_area', 'Noted', 0, 1, 1, 1, 1, 1, NULL, 13),
(239, 52, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 14),
(240, 52, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 15),
(241, 53, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 1, 0, 1, NULL, 2),
(242, 53, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 3),
(243, 53, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(245, 53, 'phone', 'checkbox', 'Phone', 0, 1, 1, 1, 1, 1, NULL, 5),
(246, 53, 'content', 'checkbox', 'Content', 0, 1, 1, 1, 1, 1, NULL, 6),
(247, 53, 'name', 'checkbox', 'Name', 0, 1, 1, 1, 1, 1, NULL, 7),
(248, 53, 'source', 'checkbox', 'Source', 0, 1, 1, 1, 1, 1, NULL, 8),
(249, 53, 'medium', 'checkbox', 'Medium', 0, 1, 1, 1, 1, 1, NULL, 9),
(250, 53, 'campaign', 'checkbox', 'Campaign', 0, 1, 1, 1, 1, 1, NULL, 10),
(251, 53, 'employer', 'checkbox', 'Employer', 0, 1, 1, 1, 1, 1, NULL, 11),
(252, 53, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, NULL, 12),
(253, 53, 'title', 'checkbox', 'Title', 0, 1, 1, 1, 1, 1, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '2018-03-11 23:49:32', '2018-04-17 15:37:57'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '2018-03-11 23:49:32', '2018-04-15 01:51:49'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(24, 'Banners', 'banners', 'Banner', 'Banners', 'voyager-images', 'App\\Banner', NULL, NULL, NULL, 1, 0, '2018-04-15 02:45:13', '2018-04-15 02:45:13'),
(30, 'servicesspecialists', 'servicesspecialists', 'Dịch Vụ Nổi Bật', 'Dịch Vụ Nổi Bật', 'voyager-star-two', 'App\\Servicesspecialist', NULL, NULL, NULL, 1, 0, '2018-04-15 10:43:41', '2018-04-15 10:54:17'),
(34, 'Videos', 'videos', 'Video', 'Videos', 'voyager-video', 'App\\Video', NULL, NULL, NULL, 1, 0, '2018-04-15 15:53:18', '2018-04-15 15:53:18'),
(35, 'news', 'news', 'Tin Tức', 'Tin Tức', 'voyager-window-list', 'App\\News', NULL, NULL, NULL, 1, 0, '2018-04-16 22:14:33', '2018-04-16 22:14:33'),
(46, 'slidehome1s', 'slidehome1s', 'Slidehome1', 'Slidehome1s', NULL, 'App\\Slidehome1', NULL, NULL, NULL, 1, 0, '2018-04-17 19:54:00', '2018-04-17 19:54:00'),
(47, 'whyhomes', 'whyhomes', 'Whyhome', 'Whyhomes', NULL, 'App\\Whyhome', NULL, NULL, NULL, 1, 0, '2018-04-17 19:59:57', '2018-04-17 19:59:57'),
(49, 'userfeadbacks', 'userfeadbacks', 'Phản Hồi', 'Phản Hồi', NULL, 'App\\Userfeadback', NULL, NULL, NULL, 1, 0, '2018-04-17 21:18:35', '2018-04-17 21:18:35'),
(51, 'partners', 'partners', 'Partner', 'Partners', NULL, 'App\\Partner', NULL, NULL, NULL, 1, 0, '2018-04-17 21:29:06', '2018-04-17 21:29:06'),
(52, 'serivcesposts', 'serivcesposts', 'Serivcespost', 'Serivcesposts', NULL, 'App\\Serivcespost', NULL, NULL, NULL, 1, 0, '2018-04-19 03:05:37', '2018-04-19 03:05:37'),
(53, 'customers', 'customers', 'Customer', 'Customers', NULL, 'App\\Customer', NULL, 'WidgetController', NULL, 1, 0, '2018-04-19 04:38:18', '2018-04-20 07:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-03-11 23:49:34', '2018-03-11 23:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-03-11 23:49:34', '2018-03-11 23:49:34', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2018-03-11 23:49:34', '2018-03-11 23:49:34', 'voyager.media.index', NULL),
(3, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.posts.index', NULL),
(4, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.users.index', NULL),
(5, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.categories.index', NULL),
(6, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.pages.index', NULL),
(7, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.roles.index', NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2018-03-11 23:49:35', '2018-03-11 23:49:35', NULL, NULL),
(9, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 8, 10, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.menus.index', NULL),
(10, 1, 'Database', '', '_self', 'voyager-data', NULL, 8, 11, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.database.index', NULL),
(11, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 8, 12, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.compass.index', NULL),
(12, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2018-03-11 23:49:35', '2018-03-11 23:49:35', 'voyager.settings.index', NULL),
(13, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 8, 13, '2018-03-11 23:49:40', '2018-03-11 23:49:40', 'voyager.hooks', NULL),
(14, 1, 'Khách Hàng', '', '_self', 'voyager-people', NULL, 0, 15, '2018-03-11 23:49:40', '2018-03-11 23:49:40', 'voyager.customers.index', NULL),
(15, 1, 'Sildehome1s', '/admin/sildehome1', '_self', NULL, NULL, NULL, 15, '2018-04-15 01:55:22', '2018-04-15 01:55:22', NULL, NULL),
(16, 1, 'Sildehome1s', '/admin/sildehome1s', '_self', 'voyager-params', NULL, NULL, 16, '2018-04-15 02:03:42', '2018-04-15 02:03:42', NULL, NULL),
(17, 1, 'Customers', '/admin/customers', '_self', 'voyager-people', NULL, NULL, 17, '2018-04-15 02:35:29', '2018-04-15 02:35:29', NULL, NULL),
(18, 1, 'Banners', '/admin/banners', '_self', 'voyager-images', NULL, NULL, 18, '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL, NULL),
(19, 1, 'Whyhomes', '/admin/whyhomes', '_self', NULL, NULL, NULL, 19, '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL, NULL),
(20, 1, 'Dịch Vụ Nổi Bật', '/admin/servicesspecialists', '_self', NULL, NULL, NULL, 20, '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL, NULL),
(21, 1, 'Đối Tác', '/admin/partners', '_self', 'voyager-ship', NULL, NULL, 21, '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL, NULL),
(22, 1, 'Slide Trang Chủ', '/admin/slidehome1s', '_self', NULL, NULL, NULL, 22, '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL, NULL),
(23, 1, 'Feedback', '/admin/feedbacks', '_self', 'voyager-smile', NULL, NULL, 23, '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL, NULL),
(24, 1, 'Videos', '/admin/videos', '_self', 'voyager-video', NULL, NULL, 24, '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL, NULL),
(25, 1, 'Tin Tức', '/admin/news', '_self', 'voyager-window-list', NULL, NULL, 25, '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL, NULL),
(26, 1, 'Slidehome1s', '/admin/slidehome1s', '_self', NULL, NULL, NULL, 26, '2018-04-17 19:49:08', '2018-04-17 19:49:08', NULL, NULL),
(27, 1, 'Phản Hồi', '/admin/userfeadbacks', '_self', NULL, NULL, NULL, 27, '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL, NULL),
(28, 1, 'Partners', '/admin/partners', '_self', NULL, NULL, NULL, 28, '2018-04-17 21:28:24', '2018-04-17 21:28:24', NULL, NULL),
(29, 1, 'Serivcesposts', '/admin/serivcesposts', '_self', NULL, NULL, NULL, 29, '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(21, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(22, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(23, '2017_08_05_000000_add_group_to_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `link`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Hơn 30 KH Đã Giảm 5 - 20kg Nhờ Phác Đồ Giảm Mỡ 90\' J-US UnFAT', 'Nếu bạn từng thất bại với mọi biên pháp giảm béo trước đây và muốn nhanh chóng giảm 5-20kg sở hữu một vóc dáng cân đối, thu hút, thì phác đồ giảm mỡ 90 phút J-US UnFAT chính là phương pháp có thể thực hiện cho bạn.', '1', 'news/April2018/R1P9Q9fr5hu1S6yho6IC.jpg', '2018-04-16 22:17:00', '2018-04-17 21:05:51'),
(2, '100 Suất Tham Dự Hội Thảo Công Bố Phác Đồ Giảm Mỡ 90\' J-US UnFAT', 'Cơ hội giảm béo miễn phí lên đến 100 triệu đồng, được tư vấn trực tiếp từ những chuyên gia giảm béo hàng đầu đến từ Mỹ và chứng thực hơn 30 khách hàng đã giảm béo thành công 5-20kg chỉ có tại hội thảo công bố phác đồ giảm mỡ 90 phút J-US UnFAT', '9', 'news/April2018/VjObwsX8jpsjw4lmhUMY.jpg', '2018-04-17 21:03:50', '2018-04-17 21:03:50'),
(3, '100 Suất Tham Dự Hội Thảo Công Bố Phác Đồ Giảm Mỡ 90\' J-US UnFAT', 'Cơ hội giảm béo miễn phí lên đến 100 triệu đồng, được tư vấn trực tiếp từ những chuyên gia giảm béo hàng đầu đến từ Mỹ và chứng thực hơn 30 khách hàng đã giảm béo thành công 5-20kg chỉ có tại hội thảo công bố phác đồ giảm mỡ 90 phút J-US UnFAT', '9', 'news/April2018/zFvC6h1puyfXIilecv2O.jpg', '2018-04-17 21:03:50', '2018-04-17 21:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` mediumtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Dịch Vụ cho', 'Dịch vụ', NULL, 'pages/April2018/TRyOc6qnV0yXLPq7VdXh.png', 'dich-vu-cho', 'dịch vụ', 'dịch vụ', 'INACTIVE', '2018-03-13 00:07:30', '2018-04-15 01:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `images`, `created_at`, `updated_at`) VALUES
(1, 'partners/April2018/bGwKCG8206H5TWOGr0Wo.png', '2018-04-17 21:29:32', '2018-04-17 21:29:32'),
(2, 'partners/April2018/CPxPv71vuLLV623A6Vuf.png', '2018-04-17 21:29:40', '2018-04-17 21:29:40'),
(3, 'partners/April2018/Xt4ITc383YfFSTnglqGl.png', '2018-04-17 21:29:40', '2018-04-17 21:29:40'),
(4, 'partners/April2018/1FzDvpxvLaXpSNPHvHl2.png', '2018-04-17 21:29:49', '2018-04-17 21:29:49'),
(5, 'partners/April2018/og0j2ej1SCIWu6tDpppC.png', '2018-04-17 21:29:56', '2018-04-17 21:29:56'),
(6, 'partners/April2018/qshQzdzl5OmMPuGap7RT.png', '2018-04-17 21:29:56', '2018-04-17 21:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2018-03-11 23:49:35', '2018-03-11 23:49:35', NULL),
(2, 'browse_database', NULL, '2018-03-11 23:49:35', '2018-03-11 23:49:35', NULL),
(3, 'browse_media', NULL, '2018-03-11 23:49:35', '2018-03-11 23:49:35', NULL),
(4, 'browse_compass', NULL, '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(5, 'browse_menus', 'menus', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(6, 'read_menus', 'menus', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(7, 'edit_menus', 'menus', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(8, 'add_menus', 'menus', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(9, 'delete_menus', 'menus', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(10, 'browse_pages', 'pages', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(11, 'read_pages', 'pages', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(12, 'edit_pages', 'pages', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(13, 'add_pages', 'pages', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(14, 'delete_pages', 'pages', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(15, 'browse_roles', 'roles', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(16, 'read_roles', 'roles', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(17, 'edit_roles', 'roles', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(18, 'add_roles', 'roles', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(19, 'delete_roles', 'roles', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(20, 'browse_users', 'users', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(21, 'read_users', 'users', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(22, 'edit_users', 'users', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(23, 'add_users', 'users', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(24, 'delete_users', 'users', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(25, 'browse_posts', 'posts', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(26, 'read_posts', 'posts', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(27, 'edit_posts', 'posts', '2018-03-11 23:49:36', '2018-03-11 23:49:36', NULL),
(28, 'add_posts', 'posts', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(29, 'delete_posts', 'posts', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(30, 'browse_categories', 'categories', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(31, 'read_categories', 'categories', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(32, 'edit_categories', 'categories', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(33, 'add_categories', 'categories', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(34, 'delete_categories', 'categories', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(35, 'browse_settings', 'settings', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(36, 'read_settings', 'settings', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(37, 'edit_settings', 'settings', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(38, 'add_settings', 'settings', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(39, 'delete_settings', 'settings', '2018-03-11 23:49:37', '2018-03-11 23:49:37', NULL),
(40, 'browse_hooks', NULL, '2018-03-11 23:49:40', '2018-03-11 23:49:40', NULL),
(46, 'browse_sildehome1', 'sildehome1', '2018-04-15 01:58:29', '2018-04-15 01:58:29', NULL),
(47, 'read_sildehome1', 'sildehome1', '2018-04-15 01:58:29', '2018-04-15 01:58:29', NULL),
(48, 'edit_sildehome1', 'sildehome1', '2018-04-15 01:58:29', '2018-04-15 01:58:29', NULL),
(49, 'add_sildehome1', 'sildehome1', '2018-04-15 01:58:29', '2018-04-15 01:58:29', NULL),
(50, 'delete_sildehome1', 'sildehome1', '2018-04-15 01:58:29', '2018-04-15 01:58:29', NULL),
(66, 'browse_Banners', 'Banners', '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL),
(67, 'read_Banners', 'Banners', '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL),
(68, 'edit_Banners', 'Banners', '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL),
(69, 'add_Banners', 'Banners', '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL),
(70, 'delete_Banners', 'Banners', '2018-04-15 02:45:13', '2018-04-15 02:45:13', NULL),
(71, 'browse_whyhomes', 'whyhomes', '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL),
(72, 'read_whyhomes', 'whyhomes', '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL),
(73, 'edit_whyhomes', 'whyhomes', '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL),
(74, 'add_whyhomes', 'whyhomes', '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL),
(75, 'delete_whyhomes', 'whyhomes', '2018-04-15 02:49:24', '2018-04-15 02:49:24', NULL),
(86, 'browse_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(87, 'read_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(88, 'edit_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(89, 'add_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(90, 'delete_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(106, 'browse_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(107, 'read_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(108, 'edit_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(109, 'add_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(110, 'delete_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(111, 'browse_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(112, 'read_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(113, 'edit_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(114, 'add_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(115, 'delete_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(116, 'browse_slidehome1s', 'slidehome1s', '2018-04-17 19:54:00', '2018-04-17 19:54:00', NULL),
(117, 'read_slidehome1s', 'slidehome1s', '2018-04-17 19:54:00', '2018-04-17 19:54:00', NULL),
(118, 'edit_slidehome1s', 'slidehome1s', '2018-04-17 19:54:00', '2018-04-17 19:54:00', NULL),
(119, 'add_slidehome1s', 'slidehome1s', '2018-04-17 19:54:00', '2018-04-17 19:54:00', NULL),
(120, 'delete_slidehome1s', 'slidehome1s', '2018-04-17 19:54:00', '2018-04-17 19:54:00', NULL),
(126, 'browse_userfeadbacks', 'userfeadbacks', '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL),
(127, 'read_userfeadbacks', 'userfeadbacks', '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL),
(128, 'edit_userfeadbacks', 'userfeadbacks', '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL),
(129, 'add_userfeadbacks', 'userfeadbacks', '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL),
(130, 'delete_userfeadbacks', 'userfeadbacks', '2018-04-17 21:18:35', '2018-04-17 21:18:35', NULL),
(131, 'browse_partners', 'partners', '2018-04-17 21:29:06', '2018-04-17 21:29:06', NULL),
(132, 'read_partners', 'partners', '2018-04-17 21:29:06', '2018-04-17 21:29:06', NULL),
(133, 'edit_partners', 'partners', '2018-04-17 21:29:06', '2018-04-17 21:29:06', NULL),
(134, 'add_partners', 'partners', '2018-04-17 21:29:06', '2018-04-17 21:29:06', NULL),
(135, 'delete_partners', 'partners', '2018-04-17 21:29:06', '2018-04-17 21:29:06', NULL),
(136, 'browse_serivcesposts', 'serivcesposts', '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL),
(137, 'read_serivcesposts', 'serivcesposts', '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL),
(138, 'edit_serivcesposts', 'serivcesposts', '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL),
(139, 'add_serivcesposts', 'serivcesposts', '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL),
(140, 'delete_serivcesposts', 'serivcesposts', '2018-04-19 03:05:37', '2018-04-19 03:05:37', NULL),
(141, 'browse_customers', 'customers', '2018-04-19 04:38:18', '2018-04-19 04:38:18', NULL),
(142, 'read_customers', 'customers', '2018-04-19 04:38:18', '2018-04-19 04:38:18', NULL),
(143, 'edit_customers', 'customers', '2018-04-19 04:38:18', '2018-04-19 04:38:18', NULL),
(144, 'add_customers', 'customers', '2018-04-19 04:38:18', '2018-04-19 04:38:18', NULL),
(145, 'delete_customers', 'customers', '2018-04-19 04:38:18', '2018-04-19 04:38:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.', '<div class=\"login\">\r\n<div class=\"login_inner\">\r\n<div class=\"login_inner__avatar\">&nbsp;</div>\r\n<input id=\"username-customer\" type=\"text\" placeholder=\"Give yourself a username\" /> <input id=\"email-customer\" type=\"email\" placeholder=\"What is your email?\" /> <input id=\"phone-customer\" type=\"text\" placeholder=\"phone\" /> <input value=\"Sign up\" type=\"button\" class=\"btn-customer\" /></div>\r\n<div class=\"login_inner__check\">&nbsp;</div>\r\n</div>\r\n<h2>&nbsp;</h2>', 'posts/April2018/kJmgUH9bS6nYGLZyWZXO.jpg', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-', 'ád', 'dá', 'PUBLISHED', 0, '2018-04-13 19:56:34', '2018-04-17 05:27:38'),
(2, 3, 2, 'ádasdasd', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.', '<p>sdasdasdasd</p>', 'posts/April2018/bEvvZChcqLcNABRBHHxY.jpg', 'adasdasd', NULL, NULL, 'PUBLISHED', 0, '2018-04-14 00:53:46', '2018-04-17 05:29:18'),
(6, 3, 7, 'BÀI VIẾT BÉO CÔNG NGHỆ CONTRI ULTRASHAPE', 'đâsd', 'ádasdas', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #828c8b; font-family: san; font-size: 23.7875px; text-align: justify;\">R&uacute;t ngắn thời gian giảm b&eacute;o chỉ c&ograve;n 1 tuần l&agrave; bước tiến lớn nhất năm 2017 trong lĩnh vực giảm b&eacute;o của Nhật Bản, khi cho ra đời phương ph&aacute;p giảm b&eacute;o thủy ph&acirc;n Contri Ultra Shape. Phương ph&aacute;p giảm b&eacute;o mới trong thời gian cực ngắn n&agrave;y l&agrave; giải ph&aacute;p đầy hi vọng cho những phụ nữ từng thất bại khi giảm b&eacute;o hoặc muốn giảm b&eacute;o trong thời gian gấp.</p>\r\n<p><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; color: #828c8b; font-family: san; font-size: 23.7875px; width: 1555.95px;\" src=\"http://www.svanclinic.vn/Upload/ServiceObjects/4c6adfe8-ca65-4417-b6de-f8c59bf3d970/Hinh-sau-tieu-de.jpg\" alt=\"Giới Thiệu - Giảm b&eacute;o c&ocirc;ng nghệ Contri UltraShape\" /></p>', 'posts/April2018/S3sBGYcTSVDTlOvmXRMR.png', 'bai-viet-beo-cong-nghe-contri-ultrashape', 'ádasd', 'ádas', 'PUBLISHED', 0, '2018-04-16 23:44:18', '2018-04-17 04:31:19'),
(8, 3, 10, 'NÂNG CƠ V-LINE NEW ULTHERAPY', 'ádasd', 'ádasd', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #828c8b; font-family: san; font-size: 23.7875px; text-align: justify;\">New Ultherapy - Đỉnh cao c&ocirc;ng nghệ trẻ h&oacute;a da v&agrave; n&acirc;ng cơ năm 2016. C&ocirc;ng nghệ tuyệt đỉnh n&agrave;y gi&uacute;p x&oacute;a mờ nếp nhăn, l&agrave;m da săn chắc trở lại, t&aacute;i tạo gương mặt V-line kh&ocirc;ng cần phẫu thuật. Hiệu quả trẻ h&oacute;a da đạt mức độ cao nhất trong thời gian điều trị ngắn nhất, ph&ugrave; hợp với c&aacute;c kh&aacute;ch h&agrave;ng cao cấp, th&iacute;ch l&agrave;m đẹp theo xu hướng thời thượng.</p>\r\n<p><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; color: #828c8b; font-family: san; font-size: 23.7875px; width: 1555.95px;\" src=\"http://www.svanclinic.vn/Upload/ServiceObjects/4bd23023-f97f-450e-84f1-1388352c6b0f/daidiendichvu.jpg\" alt=\"Giới thiệu\" /></p>', 'posts/April2018/rs3JytfpHfuqq49XZ13a.jpg', 'nang-c-v-line-new-ultherapy', 'sad', 'đá', 'PUBLISHED', 0, '2018-04-17 02:16:49', '2018-04-17 05:04:26'),
(9, 3, 11, 'Giảm mỡ thừa, xóa rạn da sau 7 ngày', 'ádasd', 'áđâsd', '<div class=\"news-detail-title\" style=\"box-sizing: border-box; color: #3ab572; font-size: 32.7078px; margin-bottom: 29.7344px; font-family: san;\">\r\n<h1 style=\"box-sizing: border-box; font-size: 32.7078px; margin: 20px 0px 10px; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit;\">Giảm mỡ thừa, x&oacute;a rạn da sau 7 ng&agrave;y</h1>\r\n</div>\r\n<div class=\"info-row\" style=\"box-sizing: border-box; color: #828c8b; font-family: san; font-size: 23.7875px;\">\r\n<div class=\"col-xs-12 no-pd\" style=\"box-sizing: border-box; position: relative; min-height: 1px; float: left; width: 1605.67px; padding: 0px !important 22.3008px 0px !important 22.3008px;\">\r\n<div class=\"short-description\" style=\"box-sizing: border-box; color: #3ab572; font-size: 23.7875px; text-align: justify;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><em style=\"box-sizing: border-box;\">Sau 7 ng&agrave;y trị liệu, 32% lượng mỡ thừa sẽ được loại ra khỏi cơ thể, tương đương với việc c&oacute; thể giảm từ 15cm - 20cm v&ograve;ng eo (t&ugrave;y cơ địa mỗi người) m&agrave; kh&ocirc;ng cần phẫu thuật.</em></p>\r\n</div>\r\n</div>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n<div class=\"text-content\" style=\"box-sizing: border-box; font-size: 23.7875px; margin-top: 44.6016px; color: #828c8b; font-family: san;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; width: 736.719px;\" src=\"http://www.svanclinic.vn/files/Files/Kien-thuc-lam-dep/Gi%E1%BA%A3m%20m%E1%BB%A1%20th%E1%BB%ABa%2C%20x%C3%B3a%20r%E1%BA%A1n%20da%20sau%207%20ng%C3%A0y/TR%C6%AF%E1%BB%9AC%20SAU_M%E1%BB%99c%20tr%C3%A0.png\" alt=\"\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Sau khi sinh th&igrave; nhiều chị em phụ nữ phải đối mặt với t&igrave;nh trạng tăng c&acirc;n, mỡ thừa t&iacute;ch tụ khiến v&ograve;ng eo ph&igrave;nh to, chảy xệ v&agrave; đặc biệt l&agrave; rạn da mất thẩm mỹ khiến chị em tự ti lo lắng.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Tuy nhi&ecirc;n, sau sinh v&igrave; t&acirc;m l&yacute; ăn uống đầy đủ cho con v&agrave; chủ quan cho rằng t&igrave;nh trạng mỡ thừa v&agrave; l&agrave;n da bụng chảy xệ sau sinh c&oacute; thể được phục hồi sau một thời gian nghỉ dưỡng.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Tr&ecirc;n thực tế, mỡ thừa quanh v&ugrave;ng h&ocirc;ng bụng, c&aacute;c vết rạn da nếu kh&ocirc;ng c&oacute; c&aacute;ch điều trị kịp thời sẽ dần trở n&ecirc;n &ldquo;v&ocirc; phương cứu chữa&rdquo;, những vết sẹo m&agrave;u đỏ, n&acirc;u sẽ dần trở th&agrave;nh sẹo trắng.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">C&aacute;c bạn c&oacute; thể &aacute;p dụng c&aacute;c phương ph&aacute;p ph&aacute;p giảm c&acirc;n th&ocirc;ng thường như ăn ki&ecirc;ng, tập thể dục, thể thao, detox&hellip; nhưng những phương ph&aacute;p n&agrave;y đ&ograve;i hỏi bạn phải ki&ecirc;n tr&igrave;, duy tr&igrave; thực hiện trong một thời gian d&agrave;i mới c&oacute; hiệu quả.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Hiện nay, ngh&agrave;nh thẩm mỹ ph&aacute;t triển c&aacute;c chuy&ecirc;n gia dinh dưỡng khuy&ecirc;n bạn, nếu muốn giảm b&eacute;o nhanh, khắc phục t&igrave;nh trạng rạn gia an to&agrave;n hiệu quả bạn c&oacute; thể &aacute;p dụng phương ph&aacute;p giảm b&eacute;o bằng c&ocirc;ng nghệ cao, nổi bật l&agrave; c&ocirc;ng nghệ giảm mỡ kh&ocirc;ng phẫu thuật Contri Ultrashape.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; width: 736.719px;\" src=\"http://www.svanclinic.vn/files/Files/Kien-thuc-lam-dep/Gi%E1%BA%A3m%20m%E1%BB%A1%20th%E1%BB%ABa%2C%20x%C3%B3a%20r%E1%BA%A1n%20da%20sau%207%20ng%C3%A0y/cong-nghe-contri-ultra-shape-1.png\" alt=\"\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">C&ocirc;ng nghệ n&agrave;y sử dụng năng lượng nhiệt v&agrave; s&oacute;ng si&ecirc;u &acirc;m cực k&igrave; ch&iacute;nh x&aacute;c về th&ocirc;ng số để t&aacute;c động đ&aacute;nh m&aacute;y cơ học l&ecirc;n th&agrave;nh da bụng để ph&aacute; hủy c&oacute; chọn lọc đ&uacute;ng những tế b&agrave;o mỡ tr&uacute; ngụ dưới da, ngay cả những tế b&agrave;o ở tầng s&acirc;u 1.5cm.Tế b&agrave;o mỡ thừa bị ph&aacute; hủy sẽ dần ti&ecirc;u biến v&agrave; chuyển h&oacute;a th&agrave;nh dạng dịch lỏng v&agrave; đ&agrave;o thải qua đường mồ h&ocirc;i, nước tiểu để ra ngo&agrave;i cơ thể.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">C&ocirc;ng nghệ giảm b&eacute;o contri ultra shape đ&atilde; được FDA Hoa Kỳ chứng nhận hiệu quả sử dụng s&oacute;ng si&ecirc;u &acirc;m ph&aacute; hủy m&ocirc; mỡ kh&ocirc;ng g&acirc;y tổn thương cơ địa. Kh&ocirc;ng phẫu thuật, kh&ocirc;ng dao k&eacute;o n&ecirc;n kh&ocirc;ng đau đớn, bỏng r&aacute;t, kh&ocirc;ng cần thời gian nghỉ dưỡng. Sau thời gian trị liệu, c&aacute;c kh&aacute;ch h&agrave;ng ho&agrave;n to&agrave;n thoải m&aacute;i đi l&agrave;m, v&agrave; sinh hoạt b&igrave;nh thường.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; width: 736.719px;\" src=\"http://www.svanclinic.vn/files/Files/Kien-thuc-lam-dep/Gi%E1%BA%A3m%20m%E1%BB%A1%20th%E1%BB%ABa%2C%20x%C3%B3a%20r%E1%BA%A1n%20da%20sau%207%20ng%C3%A0y/giam-beo-hieu-qua-sau-7-ngay.png\" alt=\"\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Sau 7 ng&agrave;y trị liệu, 32% lượng mỡ thừa sẽ được loại ra khỏi cơ thể, tương đương với việc c&oacute; thể giảm từ 10cm đến 10cm v&ograve;ng eo (t&ugrave;y cơ địa mỗi người) m&agrave; kh&ocirc;ng cần phẫu thuật.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;Từ c&aacute;c kết quả khả quan trong việc điều trị cho h&agrave;ng ng&agrave;n chị em phụ nữ sau sinh,&nbsp; Contri UltraShape đang được xem l&agrave; giải ph&aacute;p tối ưu cho việc trị liệu giảm mỡ v&ugrave;ng bụng vốn kh&oacute; giảm m&agrave; lại dễ tăng c&ugrave;ng diện t&iacute;ch trị liệu rộng.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Đặc biệt, khắc phục t&igrave;nh trạng chảy xệ, ch&ugrave;ng nh&atilde;o nặng, gi&uacute;p v&ugrave;ng da bụng sau điều trị trở n&ecirc;n săn chắc, mềm mại, kh&ocirc;ng gồ ghề, m&eacute;o m&oacute;, kh&ocirc;ng bị xơ cứng. Cải thiện 80% t&igrave;nh trạng rạn da bụng ở phụ nữ sau sinh ngo&agrave;i 8 tuần v&agrave; đang cho con b&uacute;.&nbsp;</p>\r\n</div>', 'posts/April2018/RQaQDSttW8fxxmwhh6cY.jpg', 'giam-mo-thua-xoa-ran-da-sau-7-ngay', 'đâsd', 'sadas', 'PUBLISHED', 0, '2018-04-17 20:57:42', '2018-04-17 20:57:42'),
(11, 3, 11, '7 loại quả dưỡng da mùa hè', 'ádasd', 'Mùa hè là mùa mà làn da thường bị đen hơn, bóng nhờn, dễ bị sưng đỏ và dễ bị mụn hơn.', '<div class=\"news-detail-title\" style=\"box-sizing: border-box; color: #3ab572; font-size: 32.7078px; margin-bottom: 29.7344px; font-family: san;\">\r\n<div class=\"login\">\r\n<div class=\"login_inner\">\r\n<div class=\"login_inner__avatar\">&nbsp;</div>\r\n<input id=\"username-customer\" type=\"text\" placeholder=\"Give yourself a username\" /> <input id=\"email-customer\" type=\"email\" placeholder=\"What is your email?\" /> <input id=\"phone-customer\" type=\"text\" placeholder=\"phone\" /> <input value=\"Sign up\" type=\"button\" class=\"btn-customer\" /></div>\r\n<div class=\"login_inner__check\">&nbsp;</div>\r\n</div>\r\n<h2>&nbsp;</h2>\r\n&nbsp;</div>\r\n<div class=\"text-content\" style=\"box-sizing: border-box; font-size: 23.7875px; margin-top: 44.6016px; color: #828c8b; font-family: san;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: center;\"><span style=\"box-sizing: border-box; color: #3ab572;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; width: 884.063px;\" src=\"http://www.svanclinic.vn/files/Files/Kien-thuc-lam-dep/7%20lo%E1%BA%A1i%20qu%E1%BA%A3%20d%C6%B0%E1%BB%A1ng%20da%20m%C3%B9a%20h%C3%A8/dua-chuot-duong-da-mua-he.jpg\" alt=\"dung dua chuot duong da mua he\" /></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">&nbsp;</p>\r\n</div>', 'posts/April2018/xVRGidhFMYpnhjfcEiY2.jpg', '7-loai-qua-d-ong-da-mua-he', 'ád', 'ádasd', 'PUBLISHED', 0, '2018-04-17 20:59:07', '2018-04-20 07:16:34'),
(12, 3, 1, 'ấdasdas', NULL, 'ádasd', '<p>đ&acirc;sdasd</p>\r\n<div class=\"login\">\r\n<div class=\"login_inner\">\r\n<div class=\"login_inner__avatar\">&nbsp;</div>\r\n<input id=\"username-customer\" type=\"text\" placeholder=\"Give yourself a username\" /></div>\r\n<div class=\"login_inner\">&nbsp;</div>\r\n<div class=\"login_inner\">We dog</div>\r\n<div class=\"login_inner\"><input id=\"email-customer\" type=\"email\" placeholder=\"What is your email?\" /> <input id=\"phone-customer\" type=\"text\" placeholder=\"phone\" /> <input value=\"Sign up\" type=\"button\" class=\"btn-customer\" /></div>\r\n<div class=\"login_inner__check\">&nbsp;</div>\r\n</div>\r\n<h2>&nbsp;</h2>', NULL, 'adasdas', NULL, NULL, 'PUBLISHED', 0, '2018-04-18 01:10:07', '2018-04-19 01:16:19'),
(13, 4, 1, 'asdasdas14312412312312312', NULL, '4234234', '<p>asd</p>', 'posts/April2018/1iShOsS4JUhwwpBFtzBJ.jpg', 'asdasdas14312412312312312', '423423', '423', 'PUBLISHED', 0, '2018-04-20 06:40:59', '2018-04-20 06:40:59'),
(14, 4, 1, 'asdasdas14312412312312312', NULL, '4234234', '<p>asd</p>', 'posts/April2018/agb0018w9gKZB7FVdtnn.jpg', 'asdasdas14312412312312312', '423423', '423', 'PUBLISHED', 0, '2018-04-20 06:40:59', '2018-04-20 06:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-03-11 23:49:35', '2018-03-11 23:49:35'),
(2, 'user', 'Normal User', '2018-03-11 23:49:35', '2018-03-11 23:49:35'),
(3, 'sale', 'sale', '2018-04-18 00:16:43', '2018-04-18 00:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `serivcesposts`
--

CREATE TABLE `serivcesposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `header_title` text COLLATE utf8_unicode_ci,
  `header-slug` text COLLATE utf8_unicode_ci NOT NULL,
  `header_content` longtext COLLATE utf8_unicode_ci,
  `header_images` text COLLATE utf8_unicode_ci,
  `result_content` longtext COLLATE utf8_unicode_ci,
  `result_images` text COLLATE utf8_unicode_ci,
  `images_before_after` text COLLATE utf8_unicode_ci,
  `technical_images` text COLLATE utf8_unicode_ci,
  `technical_description` longtext COLLATE utf8_unicode_ci,
  `productive_images` text COLLATE utf8_unicode_ci,
  `productive_excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `why` text COLLATE utf8_unicode_ci,
  `why_description` text COLLATE utf8_unicode_ci NOT NULL,
  `why_images` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_feedback` text COLLATE utf8_unicode_ci,
  `description_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `images_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `noted` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `serivcesposts`
--

INSERT INTO `serivcesposts` (`id`, `header_title`, `header-slug`, `header_content`, `header_images`, `result_content`, `result_images`, `images_before_after`, `technical_images`, `technical_description`, `productive_images`, `productive_excerpt`, `why`, `why_description`, `why_images`, `category_id`, `name_feedback`, `description_feedback`, `images_feedback`, `noted`, `created_at`, `updated_at`) VALUES
(1, 'qưe', '', 'qưeqweqwe', 'serivcesposts/April2018/NkhmiyTaYt7dFbuBmra1.png', 'qưeqweqwe', NULL, '[\"serivcesposts\\/April2018\\/UW9HnAjf7tfu78lXVm0d.jpg\"]', 'serivcesposts/April2018/0X5qkc8DJ8SQutJiMI0n.jpg', 'serivcesposts/April2018/loukFBpYUbavLQRKggpT.jpg', 'ưeqw', '', 'eqưeq', '', '', 0, 'ưeqwe', '', '', 'qưeqwe', '2018-04-19 03:28:07', '2018-04-19 03:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `servicesspecialists`
--

CREATE TABLE `servicesspecialists` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servicesspecialists`
--

INSERT INTO `servicesspecialists` (`id`, `title`, `images`, `content`, `created_at`, `updated_at`, `link`) VALUES
(1, 'Giảm Béo Tạo Form Perfect Shape', 'servicesspecialists/April2018/3XBPzZgU394NNDesPbDr.jpg', 'Phương pháp giảm cân tự nhiên, giảm ngay 15-20 cm chỉ sau 1 liệu trình. Cam kết không giảm béo hoàn lại tiền cho quý khách hàng.', '2018-04-15 10:58:53', '2018-04-17 15:02:29', '1'),
(2, 'Giảm Béo Tạo Form Perfect Shape', 'servicesspecialists/April2018/3XBPzZgU394NNDesPbDr.jpg', 'Phương pháp giảm cân tự nhiên, giảm ngay 15-20 cm chỉ sau 1 liệu trình. Cam kết không giảm béo hoàn lại tiền cho quý khách hàng.', '2018-04-15 10:58:53', '2018-04-17 15:02:29', '1'),
(3, 'Giảm Béo Tạo Form Perfect Shape', 'servicesspecialists/April2018/3XBPzZgU394NNDesPbDr.jpg', 'Phương pháp giảm cân tự nhiên, giảm ngay 15-20 cm chỉ sau 1 liệu trình. Cam kết không giảm béo hoàn lại tiền cho quý khách hàng.', '2018-04-15 10:58:53', '2018-04-17 15:02:29', '1');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Witayl', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Witayl.', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/March2018/5N1J1LgFzvoTCGd4t9bi.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `slidehome1s`
--

CREATE TABLE `slidehome1s` (
  `images` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slidehome1s`
--

INSERT INTO `slidehome1s` (`images`, `link`, `id`, `created_at`, `updated_at`) VALUES
('slidehome1s/April2018/XVLauDCkZzbf66Cyh2Gn.png', 'http://www.svanclinic.vn/', 1, '2018-04-17 19:48:00', '2018-04-17 19:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userfeadbacks`
--

CREATE TABLE `userfeadbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userfeadbacks`
--

INSERT INTO `userfeadbacks` (`id`, `name`, `content`, `images`, `created_at`, `updated_at`) VALUES
(1, 'DIỄN VIÊN DƯƠNG CẨM LYNH', 'Vì sinh mổ và muốn nuôi con bằng sữa mẹ nên Dương Cẩm Lynh đã lựa chọn hình thức giảm béo Perfect Shape tại Svan Clinic & Spa. Và thật ấn tượng chỉ 1,5 tháng sau sinh, Lynh đã giảm đến 15kg với chỉ số cơ thể thu gọn săn chắc, tinh thần thoải mái và lượng sữa dồi dào cho bé yêu.', 'userfeadbacks/April2018/TuMLyQvdNAX5Ijfl9AHc.jpg', '2018-04-17 21:19:22', '2018-04-17 21:19:22'),
(2, 'DƯƠNG KIM ÁNH – NỮ HOÀNG DU LỊCH VN 2014', '“ Vì cơ địa khá dễ béo nên Ánh gặp nhiều khó khăn với việc ăn uống. Sau khi được nhân viên Svan tư vấn tận tình liệu trình giảm béo Hifu Lipo, giờ đây Ánh thoải mái ăn nhiều món ăn ưa thích mà không lo tích mỡ”', 'userfeadbacks/April2018/c9zGA29Q7TE55axB6Rea.jpg', '2018-04-17 21:20:00', '2018-04-17 21:20:22'),
(3, 'DƯƠNG KIM ÁNH – NỮ HOÀNG DU LỊCH VN 2014', '“ Vì cơ địa khá dễ béo nên Ánh gặp nhiều khó khăn với việc ăn uống. Sau khi được nhân viên Svan tư vấn tận tình liệu trình giảm béo Hifu Lipo, giờ đây Ánh thoải mái ăn nhiều món ăn ưa thích mà không lo tích mỡ”', 'userfeadbacks/April2018/Rr41boSBJZRrXLyxn0Mp.jpg', '2018-04-17 21:20:00', '2018-04-17 21:20:12'),
(4, 'Á HẬU THẾ GIỚI NGƯỜI VIỆT – VICTORIA THÚY VY', '“Thúy Vy rất thích làn da mộc săn chắc sau liệu trình nâng cơ Ultherapy. Khuôn mặt trẻ trung lâu dài hơn, đặc biệt Thúy Vy rất ấn tượng về không gian đẳng cấp của Svan như những Clinic tại Hoa kỳ”.', 'userfeadbacks/April2018/ixLJICc84vy5Duq9BmPm.jpg', '2018-04-17 21:22:00', '2018-04-17 21:22:50'),
(5, 'TỐ UYÊN – Á HẬU MEKONG 1998', '“Vẻ trắng sáng, mềm mại và không bắt nắng là ưu điểm Tố Uyên rất thích từ tắm trắng phun phủ Nano. Lựa chọn Svan làm bạn đồng hành là quyết định đúng đắn nhất Uyên từng làm.”', 'userfeadbacks/April2018/WC1IXchm1Bz3DcGJH6T9.jpg', '2018-04-17 21:22:41', '2018-04-17 21:22:41'),
(6, 'TỐ UYÊN – Á HẬU MEKONG 1998', '“Vẻ trắng sáng, mềm mại và không bắt nắng là ưu điểm Tố Uyên rất thích từ tắm trắng phun phủ Nano. Lựa chọn Svan làm bạn đồng hành là quyết định đúng đắn nhất Uyên từng làm.”', 'userfeadbacks/April2018/qrqzL2ZTexGl3goBuFDv.jpg', '2018-04-17 21:22:41', '2018-04-17 21:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 1, 'admin', 'your@email.com', 'users/March2018/APdWAhi9bYDVE3DydLgn.jpg', '$2y$10$08OxEbSTXn3Gfhd18fyuPOjoVGNxsp/1MVVjTmhGQbJaTx3k8Hi/i', 'w6NEWtJWNJeL9aud2YaATHNNicvzHDKZ8ARdLcl8Slzr5KstdhG5Hq8t0NO1', '2018-03-11 23:53:41', '2018-03-11 23:56:34'),
(4, 1, 'kanbi', 'kanbi1995@gmail.com', 'users/default.png', '$2y$10$.eI77O1OpqSR1SCr9215weh6KuSwUct8w.jz1J9CrSoOh.lgMZRLG', NULL, '2018-04-20 06:40:11', '2018-04-20 06:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `images`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Single Mom Phan Minh Thảo giảm 20kg tìm lại được hạnh phúc', 'videos/April2018/WLxufahVd6rGKvbP28AD.jpg', 'o9n-ilA9xOY', '2018-04-17 14:29:15', '2018-04-17 21:34:00'),
(2, 'Diễn viên Dương Cẩm Lynh chia sẻ cảm nghĩ về công nghệ Contri UltraShape', 'videos/April2018/xtuaRnIYoz134ZfM1bJw.jpg', 'Ci69veao6ZU', '2018-04-17 21:32:42', '2018-04-17 21:32:42'),
(4, 'Diễn viên Dương Cẩm Lynh chia sẻ cảm nghĩ về công nghệ Contri UltraShape', 'videos/April2018/ZxekTrEjuiPiyG62NqJg.jpg', 'uCeZQAH8RSk', '2018-04-17 21:33:36', '2018-04-17 21:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `whyhomes`
--

CREATE TABLE `whyhomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `whyhomes`
--

INSERT INTO `whyhomes` (`id`, `images`, `text`, `created_at`, `updated_at`, `users`) VALUES
(1, 'whyhomes/April2018/eRSAdVaDLGbLY5uPMpNp.png', 'Đội Ngũ Chuyên Môn Cao', '2018-04-17 20:01:42', '2018-04-17 20:01:42', 'http://www.svanclinic.vn/gioi-thieu'),
(2, 'whyhomes/April2018/FsJc4UVBCPuLoTI83jH7.png', 'Công Nghệ Hiện Đại', '2018-04-17 20:01:00', '2018-04-17 20:02:05', 'http://www.svanclinic.vn/gioi-thieu'),
(3, 'whyhomes/April2018/hMfVSEsdXbAto7aDZBaY.png', 'Cơ Sở Vật Chất', '2018-04-17 20:02:30', '2018-04-17 20:02:30', 'http://www.svanclinic.vn/gioi-thieu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serivcesposts`
--
ALTER TABLE `serivcesposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesspecialists`
--
ALTER TABLE `servicesspecialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `slidehome1s`
--
ALTER TABLE `slidehome1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `userfeadbacks`
--
ALTER TABLE `userfeadbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyhomes`
--
ALTER TABLE `whyhomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `serivcesposts`
--
ALTER TABLE `serivcesposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servicesspecialists`
--
ALTER TABLE `servicesspecialists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slidehome1s`
--
ALTER TABLE `slidehome1s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userfeadbacks`
--
ALTER TABLE `userfeadbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `whyhomes`
--
ALTER TABLE `whyhomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
