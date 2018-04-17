-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 04:22 PM
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
(6, 3, 1, 'GIẢM CÂN & GIẢM BÉO', 'giam-can-and-giam-beo', 'categories/April2018/HuH8ZUAzuXKeAWEzvSf1.jpg', '2018-04-15 20:43:05', '2018-04-17 00:43:20', '<ul>\r\n<li style=\"box-sizing: border-box;\"><span style=\"color: #999999;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #999999; font-size: 16.3539px;\" href=\"http://www.svanclinic.vn/dich-vu/giam-can-giam-beo/giam-beo-cong-nghe-contri-ultrashape\">Giảm b&eacute;o c&ocirc;ng nghệ Contri UltraShape</a></span></li>\r\n<li style=\"box-sizing: border-box;\"><span style=\"color: #999999;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #999999; outline: 0px; font-size: 16.3539px;\" href=\"http://www.svanclinic.vn/dich-vu/giam-can-giam-beo/cong-nghe-giam-beo-hifu-lipo\">C&ocirc;ng Nghệ Giảm B&eacute;o Hifu Lipo</a></span></li>\r\n<li style=\"box-sizing: border-box;\"><span style=\"color: #999999;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #999999; font-size: 16.3539px;\" href=\"http://www.svanclinic.vn/dich-vu/giam-can-giam-beo/giam-beo-tao-form-perfect-shape\">Giảm B&eacute;o Tạo Form Perfect Shape</a></span></li>\r\n</ul>'),
(7, 6, 1, 'Giảm béo công nghệ Contri UltraShape', 'giam-beo-cong-nghe-contri-ultrashape', 'categories/April2018/ZOz2g9kOGgmCiaXSo5pI.jpg', '2018-04-16 23:40:02', '2018-04-17 04:50:54', '<ul>\r\n<li>test nhiều category child</li>\r\n</ul>'),
(8, NULL, 1, 'Giới Thiệu', 'gioi-thieu', 'categories/April2018/ZGqqtVsmxBqdZqICnLDs.png', '2018-04-16 23:58:10', '2018-04-16 23:58:10', NULL),
(10, 3, 1, 'TRỊ LIỆU CÔNG NGHỆ CAO', 'tri-lieu-cong-nghe-cao', 'categories/April2018/VezrX3vJmCMxojujns27.jpg', '2018-04-17 00:50:22', '2018-04-17 00:51:47', '<ul>\r\n<li style=\"box-sizing: border-box;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #828c8b; text-decoration-line: none; font-size: 16.3539px;\" href=\"http://www.svanclinic.vn/dich-vu/tri-lieu-cong-nghe-cao/nang-co-v-line-new-ultherapy\">N&acirc;ng cơ V-Line New Ultherapy</a></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  `source` text COLLATE utf8_unicode_ci,
  `medium` text COLLATE utf8_unicode_ci,
  `campaign` text COLLATE utf8_unicode_ci,
  `employer` text COLLATE utf8_unicode_ci,
  `status` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `created_at`, `updated_at`, `email`, `phone`, `content`, `name`, `source`, `medium`, `campaign`, `employer`, `status`) VALUES
(2, NULL, NULL, 'ádasdas', 'sdasdasd', 'null', 'ádasd', 'null', 'null', 'null', NULL, NULL),
(3, NULL, '2018-04-15 10:35:30', 'kanbi@gmail.com', '412372183612893', 'null', 'user', 'text', 'ádavasdasdA', 'null', '3', 'Đã Chăm Sóc');

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
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
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
(51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
(53, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
(54, 4, 'images', 'image', 'Images', 1, 1, 1, 1, 1, 1, NULL, 6),
(86, 24, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(87, 24, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(88, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(89, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(90, 26, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(91, 26, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(92, 26, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 3),
(93, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(94, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(95, 26, 'users', 'select_dropdown', 'Users', 0, 1, 1, 1, 1, 1, NULL, 6),
(123, 29, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(125, 29, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 14),
(126, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 0, 0, 0, NULL, 13),
(127, 29, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, NULL, 3),
(128, 29, 'phone', 'text', 'Điện Thoại', 0, 1, 1, 1, 1, 1, NULL, 4),
(129, 29, 'content', 'text_area', 'Content', 0, 1, 1, 1, 1, 1, NULL, 5),
(130, 29, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 6),
(131, 29, 'source', 'text', 'UTM_Source', 0, 1, 1, 1, 1, 1, NULL, 7),
(132, 29, 'medium', 'text', 'UTM_Medium', 0, 1, 1, 1, 1, 1, NULL, 8),
(133, 29, 'campaign', 'text', 'UTM_Campaign', 0, 1, 1, 1, 1, 1, NULL, 9),
(134, 29, 'employer', 'select_dropdown', 'Employer', 0, 1, 1, 1, 1, 1, NULL, 10),
(135, 29, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"Lựa chọn\",\"options\":{\"no\":\"Chưa chăm sóc\",\"yes\":\"Được chăm sóc\"}}', 11),
(136, 29, 'customer_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"employer\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Banners\",\"pivot\":\"0\"}', 12),
(137, 30, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(138, 30, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 2),
(139, 30, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 3),
(140, 30, 'content', 'text_area', 'Content', 0, 1, 1, 1, 1, 1, NULL, 4),
(141, 30, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 7),
(142, 30, 'updated_at', 'timestamp', 'Cập Nhập', 0, 0, 1, 0, 0, 0, NULL, 8),
(143, 30, 'link', 'select_dropdown', 'Link', 0, 1, 1, 1, 1, 1, NULL, 5),
(144, 30, 'servicesspecialist_belongsto_post_relationship', 'relationship', 'posts', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Post\",\"table\":\"posts\",\"type\":\"belongsTo\",\"column\":\"link\",\"key\":\"id\",\"label\":\"slug\",\"pivot_table\":\"Banners\",\"pivot\":\"0\"}', 6),
(145, 31, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(146, 31, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(147, 31, 'history', 'rich_text_box', 'Lịch Sử', 0, 0, 1, 0, 0, 0, NULL, 3),
(148, 31, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(149, 31, 'updated_at', 'timestamp', 'Thời Gian', 0, 0, 1, 0, 0, 0, NULL, 5),
(150, 31, 'partner_belongsto_user_relationship', 'relationship', 'users', 0, 0, 1, 0, 0, 0, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"history\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Banners\",\"pivot\":\"0\"}', 6),
(151, 32, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(152, 32, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 2),
(153, 32, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(154, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 0, 0, 0, NULL, 4),
(155, 33, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(156, 33, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(157, 33, 'content', 'text_area', 'Content', 0, 1, 1, 1, 1, 1, NULL, 3),
(158, 33, 'images', 'image', 'Images', 0, 1, 1, 1, 1, 1, NULL, 4),
(159, 33, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(160, 33, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
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
(175, 4, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, NULL, 9);

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
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '2018-03-11 23:49:32', '2018-04-15 01:51:49'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2018-03-11 23:49:32', '2018-03-11 23:49:32'),
(24, 'Banners', 'banners', 'Banner', 'Banners', 'voyager-images', 'App\\Banner', NULL, NULL, NULL, 1, 0, '2018-04-15 02:45:13', '2018-04-15 02:45:13'),
(26, 'whyhomes', 'whyhomes', 'Whyhome', 'Whyhomes', 'voyager-question', NULL, NULL, NULL, NULL, 1, 0, '2018-04-15 02:49:24', '2018-04-15 02:49:24'),
(29, 'Customers', 'customers', 'Khách Hàng', 'Khách Hàng', NULL, 'App\\Customer', NULL, NULL, NULL, 1, 0, '2018-04-15 10:30:15', '2018-04-15 10:36:56'),
(30, 'servicesspecialists', 'servicesspecialists', 'Dịch Vụ Nổi Bật', 'Dịch Vụ Nổi Bật', 'voyager-star-two', 'App\\Servicesspecialist', NULL, NULL, NULL, 1, 0, '2018-04-15 10:43:41', '2018-04-15 10:54:17'),
(31, 'Partners', 'partners', 'Đối Tác', 'Đối Tác', 'voyager-ship', 'App\\Partner', NULL, NULL, NULL, 1, 0, '2018-04-15 11:07:13', '2018-04-15 11:07:13'),
(32, 'Slidehome1s', 'slidehome1s', 'Slide Trang Chủ', 'Slide Trang Chủ', NULL, 'App\\Slidehome1', NULL, NULL, NULL, 1, 0, '2018-04-15 11:13:50', '2018-04-15 11:13:50'),
(33, 'feedbacks', 'feedbacks', 'Feedback', 'Feedback', 'voyager-smile', 'App\\Feedback', NULL, NULL, NULL, 1, 0, '2018-04-15 15:47:27', '2018-04-15 15:47:27'),
(34, 'Videos', 'videos', 'Video', 'Videos', 'voyager-video', 'App\\Video', NULL, NULL, NULL, 1, 0, '2018-04-15 15:53:18', '2018-04-15 15:53:18'),
(35, 'news', 'news', 'Tin Tức', 'Tin Tức', 'voyager-window-list', 'App\\News', NULL, NULL, NULL, 1, 0, '2018-04-16 22:14:33', '2018-04-16 22:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` int(11) DEFAULT NULL,
  `content` int(11) DEFAULT NULL,
  `images` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(25, 1, 'Tin Tức', '/admin/news', '_self', 'voyager-window-list', NULL, NULL, 25, '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL, NULL);

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
(1, 'sieunhanasdasdas', 'ádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasdádasdasdasd', '1', 'news/April2018/IUFzqX2PFhLngtWdoYlp.jpg', '2018-04-16 22:17:08', '2018-04-16 22:17:08');

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
(81, 'browse_Customers', 'Customers', '2018-04-15 10:30:15', '2018-04-15 10:30:15', NULL),
(82, 'read_Customers', 'Customers', '2018-04-15 10:30:15', '2018-04-15 10:30:15', NULL),
(83, 'edit_Customers', 'Customers', '2018-04-15 10:30:15', '2018-04-15 10:30:15', NULL),
(84, 'add_Customers', 'Customers', '2018-04-15 10:30:15', '2018-04-15 10:30:15', NULL),
(85, 'delete_Customers', 'Customers', '2018-04-15 10:30:15', '2018-04-15 10:30:15', NULL),
(86, 'browse_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(87, 'read_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(88, 'edit_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(89, 'add_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(90, 'delete_servicesspecialists', 'servicesspecialists', '2018-04-15 10:43:41', '2018-04-15 10:43:41', NULL),
(91, 'browse_Partners', 'Partners', '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL),
(92, 'read_Partners', 'Partners', '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL),
(93, 'edit_Partners', 'Partners', '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL),
(94, 'add_Partners', 'Partners', '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL),
(95, 'delete_Partners', 'Partners', '2018-04-15 11:07:13', '2018-04-15 11:07:13', NULL),
(96, 'browse_Slidehome1s', 'Slidehome1s', '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL),
(97, 'read_Slidehome1s', 'Slidehome1s', '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL),
(98, 'edit_Slidehome1s', 'Slidehome1s', '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL),
(99, 'add_Slidehome1s', 'Slidehome1s', '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL),
(100, 'delete_Slidehome1s', 'Slidehome1s', '2018-04-15 11:13:50', '2018-04-15 11:13:50', NULL),
(101, 'browse_feedbacks', 'feedbacks', '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL),
(102, 'read_feedbacks', 'feedbacks', '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL),
(103, 'edit_feedbacks', 'feedbacks', '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL),
(104, 'add_feedbacks', 'feedbacks', '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL),
(105, 'delete_feedbacks', 'feedbacks', '2018-04-15 15:47:27', '2018-04-15 15:47:27', NULL),
(106, 'browse_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(107, 'read_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(108, 'edit_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(109, 'add_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(110, 'delete_Videos', 'Videos', '2018-04-15 15:53:18', '2018-04-15 15:53:18', NULL),
(111, 'browse_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(112, 'read_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(113, 'edit_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(114, 'add_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL),
(115, 'delete_news', 'news', '2018-04-16 22:14:34', '2018-04-16 22:14:34', NULL);

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
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
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
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1);

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
(5, 7, 7, 'ádasdasd', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.', '<p>sdasdasdasd</p>', 'posts/April2018/3ld57TGpPhC4xKWFNea3.jpg', 'adasdasda-sadasdas', NULL, NULL, 'PUBLISHED', 0, '2018-04-14 00:53:46', '2018-04-17 05:29:51'),
(6, 3, 7, 'BÀI VIẾT BÉO CÔNG NGHỆ CONTRI ULTRASHAPE', 'đâsd', 'ádasdas', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #828c8b; font-family: san; font-size: 23.7875px; text-align: justify;\">R&uacute;t ngắn thời gian giảm b&eacute;o chỉ c&ograve;n 1 tuần l&agrave; bước tiến lớn nhất năm 2017 trong lĩnh vực giảm b&eacute;o của Nhật Bản, khi cho ra đời phương ph&aacute;p giảm b&eacute;o thủy ph&acirc;n Contri Ultra Shape. Phương ph&aacute;p giảm b&eacute;o mới trong thời gian cực ngắn n&agrave;y l&agrave; giải ph&aacute;p đầy hi vọng cho những phụ nữ từng thất bại khi giảm b&eacute;o hoặc muốn giảm b&eacute;o trong thời gian gấp.</p>\r\n<p><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; color: #828c8b; font-family: san; font-size: 23.7875px; width: 1555.95px;\" src=\"http://www.svanclinic.vn/Upload/ServiceObjects/4c6adfe8-ca65-4417-b6de-f8c59bf3d970/Hinh-sau-tieu-de.jpg\" alt=\"Giới Thiệu - Giảm b&eacute;o c&ocirc;ng nghệ Contri UltraShape\" /></p>', 'posts/April2018/S3sBGYcTSVDTlOvmXRMR.png', 'bai-viet-beo-cong-nghe-contri-ultrashape', 'ádasd', 'ádas', 'PUBLISHED', 0, '2018-04-16 23:44:18', '2018-04-17 04:31:19'),
(8, 3, 10, 'NÂNG CƠ V-LINE NEW ULTHERAPY', 'ádasd', 'ádasd', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #828c8b; font-family: san; font-size: 23.7875px; text-align: justify;\">New Ultherapy - Đỉnh cao c&ocirc;ng nghệ trẻ h&oacute;a da v&agrave; n&acirc;ng cơ năm 2016. C&ocirc;ng nghệ tuyệt đỉnh n&agrave;y gi&uacute;p x&oacute;a mờ nếp nhăn, l&agrave;m da săn chắc trở lại, t&aacute;i tạo gương mặt V-line kh&ocirc;ng cần phẫu thuật. Hiệu quả trẻ h&oacute;a da đạt mức độ cao nhất trong thời gian điều trị ngắn nhất, ph&ugrave; hợp với c&aacute;c kh&aacute;ch h&agrave;ng cao cấp, th&iacute;ch l&agrave;m đẹp theo xu hướng thời thượng.</p>\r\n<p><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%; height: auto; margin-bottom: 10px; color: #828c8b; font-family: san; font-size: 23.7875px; width: 1555.95px;\" src=\"http://www.svanclinic.vn/Upload/ServiceObjects/4bd23023-f97f-450e-84f1-1388352c6b0f/daidiendichvu.jpg\" alt=\"Giới thiệu\" /></p>', 'posts/April2018/rs3JytfpHfuqq49XZ13a.jpg', 'nang-c-v-line-new-ultherapy', 'sad', 'đá', 'PUBLISHED', 0, '2018-04-17 02:16:49', '2018-04-17 05:04:26');

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
(2, 'user', 'Normal User', '2018-03-11 23:49:35', '2018-03-11 23:49:35');

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
(1, 'Giảm Béo Tạo Form Perfect Shape', 'servicesspecialists/April2018/G7nqk9mpYU3VjPhkWjKI.png', 'Phương pháp giảm cân tự nhiên, giảm ngay 15-20 cm chỉ sau 1 liệu trình. Cam kết không giảm béo hoàn lại tiền cho quý khách hàng.', '2018-04-15 10:58:53', '2018-04-15 10:58:53', '1');

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
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slidehome1s`
--

INSERT INTO `slidehome1s` (`id`, `images`, `created_at`, `updated_at`) VALUES
(1, 'slidehome1s/April2018/MqtlD9xsLFxHNtCMrYg1.png', '2018-04-15 15:55:10', '2018-04-15 16:26:14');

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
(3, 1, 'admin', 'your@email.com', 'users/March2018/APdWAhi9bYDVE3DydLgn.jpg', '$2y$10$08OxEbSTXn3Gfhd18fyuPOjoVGNxsp/1MVVjTmhGQbJaTx3k8Hi/i', '6w6fNd584xVRV5aGAlPq730YrjcANtDhBRRnrpupxijlOIsKrXX2HepUkJFY', '2018-03-11 23:53:41', '2018-03-11 23:56:34');

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
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servicesspecialists`
--
ALTER TABLE `servicesspecialists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slidehome1s`
--
ALTER TABLE `slidehome1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `whyhomes`
--
ALTER TABLE `whyhomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
