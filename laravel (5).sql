-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '2022-03-13 06:12:32', 4, '2022-03-13 06:12:32', NULL, NULL, NULL),
(2, '<p>asdadsad</p>', '2022-05-01 08:33:27', 16, '2022-09-17 10:40:22', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE `address_book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_book`
--

INSERT INTO `address_book` (`id`, `name`, `email`, `mobile`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'virtualheightsd', 'vijay@virtualheight.com', '9904625253', '2021-08-08 11:39:57', 5, '2021-08-08 11:40:09', 5, '2021-08-08 11:40:09', 5),
(2, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:45', 5, NULL, NULL, NULL, NULL),
(3, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:56', 5, NULL, NULL, NULL, NULL),
(4, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 15:32:50', 5, NULL, NULL, NULL, NULL),
(5, 'virtualheightsd', 'vijay@virtualheight.com', '9904625253', '2021-08-08 11:39:57', 5, '2021-08-08 11:40:09', 5, '2021-08-08 11:40:09', 5),
(6, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:45', 5, NULL, NULL, NULL, NULL),
(7, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:56', 5, NULL, NULL, NULL, NULL),
(8, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 15:32:50', 5, NULL, NULL, NULL, NULL),
(9, 'virtualheightsd', 'vijay@virtualheight.com', '9904625253', '2021-08-08 11:39:57', 5, '2021-08-08 11:40:09', 5, '2021-08-08 11:40:09', 5),
(10, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:45', 5, NULL, NULL, NULL, NULL),
(11, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:56', 5, NULL, NULL, NULL, NULL),
(12, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 15:32:50', 5, NULL, NULL, NULL, NULL),
(13, 'virtualheightsd', 'vijay@virtualheight.com', '9904625253', '2021-08-08 11:39:57', 5, '2021-08-08 11:40:09', 5, '2021-08-08 11:40:09', 5),
(14, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:45', 5, NULL, NULL, NULL, NULL),
(15, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 12:25:56', 5, NULL, NULL, NULL, NULL),
(16, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 15:32:50', 5, NULL, NULL, NULL, NULL),
(17, 'The Second Treat', 'aaikhodal@gmail.com', '9879831413', '2022-04-30 09:06:58', 16, '2022-09-17 10:21:57', 16, '2022-09-17 10:21:57', NULL),
(18, 'jams', 'jams@gmail.com', '1234567890', '2022-04-30 09:08:10', 16, '2022-08-16 17:38:26', 16, '2022-08-16 17:38:26', 16),
(19, 'jams', 'jams1@gmail.com', '9904625253', '2022-04-30 09:08:10', 16, '2022-08-07 16:56:47', NULL, '2022-08-07 16:56:47', 16),
(20, 'jams', 'jams11@gmail.com', '9904625253', '2022-04-30 09:08:10', 16, '2022-08-07 16:56:43', 16, '2022-08-07 16:56:43', 16),
(21, 'jams', 'jams@gmail.com', '1234567890', '2022-08-16 18:18:13', 16, '2022-09-17 10:22:34', NULL, '2022-09-17 10:22:34', NULL),
(22, 'dadsad', 'jams@gmail.com', '9904625253', '2022-08-16 18:18:13', 16, '2022-09-17 10:22:29', NULL, '2022-09-17 10:22:29', NULL),
(23, 'jams', 'jams@gmail.com', '1234567890', '2022-08-16 18:18:20', 16, '2022-09-17 10:29:49', 16, NULL, NULL),
(24, 'dadsad', 'jams@gmail.com', '9904625253', '2022-08-16 18:18:20', 16, NULL, NULL, NULL, NULL),
(25, 'jams11111', 'jams@gmail.com', '1234567890', '2022-08-16 18:18:27', 16, '2022-09-17 10:30:00', 16, '2022-09-17 10:30:00', NULL),
(26, 'dadsad', 'jams@gmail.com', '9904625253', '2022-08-16 18:18:27', 16, NULL, NULL, NULL, NULL),
(27, 'jams', 'jams@gmail.com', '1234567890', '2022-08-16 18:18:38', 16, NULL, NULL, NULL, NULL),
(28, 'dadsad', 'jams@gmail.com', '9904625253', '2022-08-16 18:18:38', 16, NULL, NULL, NULL, NULL),
(29, 'The Second Treat', 'vijayparmar11096@gmail.com', '9879831413', '2022-08-16 18:18:55', 16, '2022-09-18 16:09:11', 16, NULL, NULL),
(30, 'The Second Treat', 'vijayparmar11096@gmail.com', '9879831413', '2022-09-17 09:54:20', 16, '2022-09-17 10:22:02', NULL, '2022-09-17 10:22:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_site_settings`
--

CREATE TABLE `admin_site_settings` (
  `id` int(11) NOT NULL,
  `fav_icon` text DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `landing_page_email` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_site_settings`
--

INSERT INTO `admin_site_settings` (`id`, `fav_icon`, `site_logo`, `title`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `landing_page_email`, `email`) VALUES
(1, '20221021103302AdminLTELogo.png', '20221021103528AdminLTELogo.png', 'Websphare', NULL, 16, '2022-10-21 10:37:19', NULL, NULL, NULL, 'Hi {{USER_NAME}},\n\nBrowse our selection of Landing page and promote your business and website.\n\nOur Landing Page is link here {{LANDING_PAGE_LINK}}\n\nThank you.', 'vijayparmar11096@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</p>', '202203120647142021052311223405.jpg', '2022-03-12 06:47:13', 1, '2022-03-12 06:47:13', NULL, NULL, NULL),
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</p>', '2022031208115520210605110833full.jpg', '2022-03-12 08:11:54', 2, '2022-03-12 08:11:54', NULL, NULL, NULL),
(3, 'Biryani Adda', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '2022031306051820220313055718202203120812302021052311220608.jpg', '2022-03-13 06:05:17', 4, '2022-03-13 06:05:17', NULL, NULL, NULL),
(4, 'Eat Salade', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '20220313060543202203130600262021060606263601.jpg', '2022-03-13 06:05:42', 4, '2022-03-13 06:05:42', NULL, NULL, NULL),
(5, 'Flourish', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '2022031306061520220313055718202203120812302021052311223405.jpg', '2022-03-13 06:06:14', 4, '2022-03-13 06:06:14', NULL, NULL, NULL),
(6, 'The Golden Time C.G Road', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are invitingApna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are invitingApna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting</p>', '2022042405334603.jpg', '2022-04-24 05:33:45', 20, '2022-04-24 05:33:45', NULL, NULL, NULL),
(7, 'Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are invitingApna Open Mic - AhPlatform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are invitingmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting</p>', '2022042405340901.jpg', '2022-04-24 05:34:08', 20, '2022-04-24 05:34:08', NULL, NULL, NULL),
(8, 'adsd', '<p>test</p>', '202209170445022021052311223405.jpg', '2022-04-30 09:14:07', 16, '2022-09-17 16:45:01', 16, NULL, NULL),
(9, 'xcbgdf', '<p>gdgdfg</p>', '20221018062234Sci-fevicon.jpg', '2022-10-18 06:22:33', 3, '2022-10-18 06:22:33', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date_released` date DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `name`, `author`, `date_released`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 10, 'The Second Treat', 'xzxzx', '2022-05-19', '<p>ZXz</p>', '20220430114145gradian_black.png', '20220430114145gradian_blue.png', '20220430114145gradian_black.png', '2022-04-30 11:41:44', 16, '2022-09-17 18:20:22', 16, '2022-09-17 18:20:22', NULL),
(2, 10, 'adsad', 'asdsad', '2022-09-17', '<p>asdsada</p>', '2022091706142720210523112215full.jpg', NULL, NULL, '2022-09-17 18:14:26', 16, '2022-09-17 18:19:45', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'ZXx', '2022-05-01 08:32:04', 16, '2022-09-17 19:03:33', NULL, '2022-09-17 19:03:33', NULL),
(2, 'ewqeqe', '2022-09-17 19:03:37', 16, '2022-09-17 19:03:37', NULL, NULL, NULL),
(3, 'asdadad', '2022-09-17 19:03:42', 16, '2022-09-17 19:03:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `slug` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `slug`) VALUES
(1, 'aaaa', '2022-02-02 16:34:19', 1, '2022-02-02 16:34:19', NULL, NULL, NULL, NULL),
(2, 'industry\'s standard dummy', '2022-02-02 16:59:54', 1, '2022-02-02 16:59:54', NULL, NULL, NULL, 'industrysstandarddummy'),
(3, 'industry\'s standard dummy', '2022-02-02 17:06:15', 1, '2022-02-02 17:06:15', NULL, NULL, NULL, 'industrysstandarddummy-1'),
(4, 'industry\'s standard dummy', '2022-02-02 17:06:31', 1, '2022-02-02 17:06:31', NULL, NULL, NULL, 'industrysstandarddummy-1'),
(5, 'industry\'s standard dummy', '2022-03-12 07:02:22', 2, '2022-03-12 07:02:22', NULL, NULL, NULL, 'industrysstandarddummy'),
(6, 'The Second Treat', '2022-03-13 05:54:38', 4, '2022-03-13 05:55:37', 4, NULL, NULL, 'industrysstandarddummy'),
(7, 'Brown & Happy', '2022-03-13 05:55:48', 4, '2022-03-13 05:55:48', NULL, NULL, NULL, 'brownhappy'),
(8, 'The Second Treat', '2022-03-13 10:49:11', 5, '2022-03-13 10:49:11', NULL, NULL, NULL, 'thesecondtreat'),
(9, 'The Second Treat', '2022-04-10 08:28:42', 13, '2022-04-10 08:28:42', NULL, NULL, NULL, 'thesecondtreat'),
(10, 'The Second Treat1', '2022-04-30 11:41:17', 16, '2022-09-18 04:43:02', 16, NULL, NULL, 'thesecondtreat'),
(11, 'sda', '2022-09-18 04:41:22', 16, '2022-09-18 04:41:22', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_1` varchar(255) DEFAULT NULL,
  `contact_2` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `address`, `contact_1`, `contact_2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, 'vijay@virtualheight.com', 'ahmedabad', '9904625253', '9904625253', '2021-12-26 11:30:19', 23, '2021-12-26 11:30:19', NULL, NULL, NULL, 'www.face', 'www.facebo', 'qwewewew', 'afafaffffa'),
(2, 'agency@gmail.com', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '8000035599', '8000035598', '2022-03-12 08:15:03', 2, '2022-03-12 08:15:34', NULL, NULL, NULL, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(3, 'bakery@gmail.com', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '8000035599', '8000035598', '2022-03-13 06:08:03', 4, '2022-03-13 06:08:03', NULL, NULL, NULL, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(4, 'aaikhodal@gmail.com', 'sadadad', '8000035599', '8000035598', '2022-04-30 11:53:45', 16, '2022-09-18 06:44:38', NULL, NULL, NULL, 'asdsadsad', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_inquiry`
--

CREATE TABLE `contact_us_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_inquiry`
--

INSERT INTO `contact_us_inquiry` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'aadsad', 'asdasdsa@gmail.com', '133213213213213213', 'asdsadsad', '2021-09-12 12:54:49', 2, '2021-09-12 12:54:49', NULL, NULL, NULL),
(2, 'virtualheight', 'vijay@virtualheight.com', '09904625253', 'sdfdsfdsfsf', '2021-09-12 13:01:36', 2, '2021-09-12 13:01:36', NULL, NULL, NULL),
(3, 'xczxcc', 'vijayparmar11096@gmail.com', '9879831413', 'sadsadsad', '2022-10-20 13:11:19', 16, '2022-10-20 13:11:19', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` mediumtext DEFAULT NULL,
  `code` mediumtext DEFAULT NULL,
  `symbol` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `code`, `symbol`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Leke', 'ALL', 'Lek', NULL, NULL, NULL),
(2, 'Dollars', 'USD', '$', NULL, NULL, NULL),
(3, 'Afghanis', 'AFN', '؋', NULL, NULL, NULL),
(4, 'Pesos', 'ARS', '$', NULL, NULL, NULL),
(5, 'Guilders', 'AWG', 'ƒ', NULL, NULL, NULL),
(6, 'Dollars', 'AUD', '$', NULL, NULL, NULL),
(7, 'New Manats', 'AZN', 'ман', NULL, NULL, NULL),
(8, 'Dollars', 'BSD', '$', NULL, NULL, NULL),
(9, 'Dollars', 'BBD', '$', NULL, NULL, NULL),
(10, 'Rubles', 'BYR', 'p.', NULL, NULL, NULL),
(11, 'Euro', 'EUR', '€', NULL, NULL, NULL),
(12, 'Dollars', 'BZD', 'BZ$', NULL, NULL, NULL),
(13, 'Dollars', 'BMD', '$', NULL, NULL, NULL),
(14, 'Bolivianos', 'BOB', '$b', NULL, NULL, NULL),
(15, 'Convertible Marka', 'BAM', 'KM', NULL, NULL, NULL),
(16, 'Pula', 'BWP', 'P', NULL, NULL, NULL),
(17, 'Leva', 'BGN', 'лв', NULL, NULL, NULL),
(18, 'Reais', 'BRL', 'R$', NULL, NULL, NULL),
(19, 'Pounds', 'GBP', '£', NULL, NULL, NULL),
(20, 'Dollars', 'BND', '$', NULL, NULL, NULL),
(21, 'Riels', 'KHR', '៛', NULL, NULL, NULL),
(22, 'Dollars', 'CAD', '$', NULL, NULL, NULL),
(23, 'Dollars', 'KYD', '$', NULL, NULL, NULL),
(24, 'Pesos', 'CLP', '$', NULL, NULL, NULL),
(25, 'Yuan Renminbi', 'CNY', '¥', NULL, NULL, NULL),
(26, 'Pesos', 'COP', '$', NULL, NULL, NULL),
(27, 'Colón', 'CRC', '₡', NULL, NULL, NULL),
(28, 'Kuna', 'HRK', 'kn', NULL, NULL, NULL),
(29, 'Pesos', 'CUP', '₱', NULL, NULL, NULL),
(30, 'Koruny', 'CZK', 'Kč', NULL, NULL, NULL),
(31, 'Kroner', 'DKK', 'kr', NULL, NULL, NULL),
(32, 'Pesos', 'DOP ', 'RD$', NULL, NULL, NULL),
(33, 'Dollars', 'XCD', '$', NULL, NULL, NULL),
(34, 'Pounds', 'EGP', '£', NULL, NULL, NULL),
(35, 'Colones', 'SVC', '$', NULL, NULL, NULL),
(36, 'Pounds', 'FKP', '£', NULL, NULL, NULL),
(37, 'Dollars', 'FJD', '$', NULL, NULL, NULL),
(38, 'Cedis', 'GHC', '¢', NULL, NULL, NULL),
(39, 'Pounds', 'GIP', '£', NULL, NULL, NULL),
(40, 'Quetzales', 'GTQ', 'Q', NULL, NULL, NULL),
(41, 'Pounds', 'GGP', '£', NULL, NULL, NULL),
(42, 'Dollars', 'GYD', '$', NULL, NULL, NULL),
(43, 'Lempiras', 'HNL', 'L', NULL, NULL, NULL),
(44, 'Dollars', 'HKD', '$', NULL, NULL, NULL),
(45, 'Forint', 'HUF', 'Ft', NULL, NULL, NULL),
(46, 'Kronur', 'ISK', 'kr', NULL, NULL, NULL),
(47, 'Rupees', 'INR', 'Rp', NULL, NULL, NULL),
(48, 'Rupiahs', 'IDR', 'Rp', NULL, NULL, NULL),
(49, 'Rials', 'IRR', '﷼', NULL, NULL, NULL),
(50, 'Pounds', 'IMP', '£', NULL, NULL, NULL),
(51, 'New Shekels', 'ILS', '₪', NULL, NULL, NULL),
(52, 'Dollars', 'JMD', 'J$', NULL, NULL, NULL),
(53, 'Yen', 'JPY', '¥', NULL, NULL, NULL),
(54, 'Pounds', 'JEP', '£', NULL, NULL, NULL),
(55, 'Tenge', 'KZT', 'лв', NULL, NULL, NULL),
(56, 'Won', 'KPW', '₩', NULL, NULL, NULL),
(57, 'Won', 'KRW', '₩', NULL, NULL, NULL),
(58, 'Soms', 'KGS', 'лв', NULL, NULL, NULL),
(59, 'Kips', 'LAK', '₭', NULL, NULL, NULL),
(60, 'Lati', 'LVL', 'Ls', NULL, NULL, NULL),
(61, 'Pounds', 'LBP', '£', NULL, NULL, NULL),
(62, 'Dollars', 'LRD', '$', NULL, NULL, NULL),
(63, 'Switzerland Francs', 'CHF', 'CHF', NULL, NULL, NULL),
(64, 'Litai', 'LTL', 'Lt', NULL, NULL, NULL),
(65, 'Denars', 'MKD', 'ден', NULL, NULL, NULL),
(66, 'Ringgits', 'MYR', 'RM', NULL, NULL, NULL),
(67, 'Rupees', 'MUR', '₨', NULL, NULL, NULL),
(68, 'Pesos', 'MXN', '$', NULL, NULL, NULL),
(69, 'Tugriks', 'MNT', '₮', NULL, NULL, NULL),
(70, 'Meticais', 'MZN', 'MT', NULL, NULL, NULL),
(71, 'Dollars', 'NAD', '$', NULL, NULL, NULL),
(72, 'Rupees', 'NPR', '₨', NULL, NULL, NULL),
(73, 'Guilders', 'ANG', 'ƒ', NULL, NULL, NULL),
(74, 'Dollars', 'NZD', '$', NULL, NULL, NULL),
(75, 'Cordobas', 'NIO', 'C$', NULL, NULL, NULL),
(76, 'Nairas', 'NGN', '₦', NULL, NULL, NULL),
(77, 'Krone', 'NOK', 'kr', NULL, NULL, NULL),
(78, 'Rials', 'OMR', '﷼', NULL, NULL, NULL),
(79, 'Rupees', 'PKR', '₨', NULL, NULL, NULL),
(80, 'Balboa', 'PAB', 'B/.', NULL, NULL, NULL),
(81, 'Guarani', 'PYG', 'Gs', NULL, NULL, NULL),
(82, 'Nuevos Soles', 'PEN', 'S/.', NULL, NULL, NULL),
(83, 'Pesos', 'PHP', 'Php', NULL, NULL, NULL),
(84, 'Zlotych', 'PLN', 'zł', NULL, NULL, NULL),
(85, 'Rials', 'QAR', '﷼', NULL, NULL, NULL),
(86, 'New Lei', 'RON', 'lei', NULL, NULL, NULL),
(87, 'Rubles', 'RUB', 'руб', NULL, NULL, NULL),
(88, 'Pounds', 'SHP', '£', NULL, NULL, NULL),
(89, 'Riyals', 'SAR', '﷼', NULL, NULL, NULL),
(90, 'Dinars', 'RSD', 'Дин.', NULL, NULL, NULL),
(91, 'Rupees', 'SCR', '₨', NULL, NULL, NULL),
(92, 'Dollars', 'SGD', '$', NULL, NULL, NULL),
(93, 'Dollars', 'SBD', '$', NULL, NULL, NULL),
(94, 'Shillings', 'SOS', 'S', NULL, NULL, NULL),
(95, 'Rand', 'ZAR', 'R', NULL, NULL, NULL),
(96, 'Rupees', 'LKR', '₨', NULL, NULL, NULL),
(97, 'Kronor', 'SEK', 'kr', NULL, NULL, NULL),
(98, 'Dollars', 'SRD', '$', NULL, NULL, NULL),
(99, 'Pounds', 'SYP', '£', NULL, NULL, NULL),
(100, 'New Dollars', 'TWD', 'NT$', NULL, NULL, NULL),
(101, 'Baht', 'THB', '฿', NULL, NULL, NULL),
(102, 'Dollars', 'TTD', 'TT$', NULL, NULL, NULL),
(103, 'Lira', 'TRY', '₺', NULL, NULL, NULL),
(104, 'Liras', 'TRL', '£', NULL, NULL, NULL),
(105, 'Dollars', 'TVD', '$', NULL, NULL, NULL),
(106, 'Hryvnia', 'UAH', '₴', NULL, NULL, NULL),
(107, 'Pesos', 'UYU', '$U', NULL, NULL, NULL),
(108, 'Sums', 'UZS', 'лв', NULL, NULL, NULL),
(109, 'Bolivares Fuertes', 'VEF', 'Bs', NULL, NULL, NULL),
(110, 'Dong', 'VND', '₫', NULL, NULL, NULL),
(111, 'Rials', 'YER', '﷼', NULL, NULL, NULL),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$', NULL, NULL, NULL),
(113, 'Rupees', 'INR', '₹', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `electric`
--

CREATE TABLE `electric` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` mediumtext DEFAULT NULL,
  `image_2` mediumtext DEFAULT NULL,
  `image_3` mediumtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emails_broadcast`
--

CREATE TABLE `emails_broadcast` (
  `id` int(11) NOT NULL,
  `to` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` longtext NOT NULL,
  `is_send` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails_broadcast`
--

INSERT INTO `emails_broadcast` (`id`, `to`, `from`, `subject`, `email`, `is_send`, `created_at`, `updated_at`, `deleted_at`, `created_by`) VALUES
(1, 'jams@gmail.com', NULL, 'selection', '<p>asdadad</p>', 0, '2022-05-01 11:24:41', NULL, NULL, 16),
(2, 'jams@gmail.com', NULL, 'selection', '<p>546546aSD</p>', 0, '2022-09-18 15:16:42', NULL, NULL, 16),
(3, 'jams@gmail.com', NULL, 'selection', '<p>546546aSD</p>', 0, '2022-09-18 15:16:56', NULL, NULL, 16),
(4, 'jams@gmail.com', NULL, 'selection', '<p>546546aSD</p>', 0, '2022-09-18 15:16:56', NULL, NULL, 16),
(5, 'jams@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(6, 'jams@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(7, 'jams@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(8, 'jams@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(9, 'jams@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(10, 'vijayparmar11096@gmail.com', NULL, 'selection', '<p>qewqe</p>', 0, '2022-09-18 15:23:30', NULL, NULL, 16),
(11, 'jams@gmail.com', NULL, 'dsadsadad', '<p>adasd</p>', 0, '2022-09-18 15:30:08', NULL, NULL, 16),
(12, 'jams@gmail.com', NULL, 'dsadsadad', '<p>adasd</p>', 0, '2022-09-22 18:08:26', NULL, NULL, 16);

-- --------------------------------------------------------

--
-- Table structure for table `email_marketing`
--

CREATE TABLE `email_marketing` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '0:not send 1:send',
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_marketing`
--

INSERT INTO `email_marketing` (`id`, `subject`, `email`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'selection', '<p>asdadad</p>', '2022-05-01 11:23:59', 16, '2022-05-01 11:24:53', 16, '2022-05-01 11:24:53', 16),
(2, 'selection', '<p>qewqe</p>', '2022-08-07 17:14:13', 16, '2022-09-18 15:28:17', NULL, '2022-09-18 15:28:17', NULL),
(3, 'selection', '<p>546546aSD</p>', '2022-09-04 08:47:55', 16, '2022-09-18 15:26:31', 16, '2022-09-18 15:26:31', NULL),
(4, 'dsadsadad', '<p>adasd</p>', '2022-09-18 15:15:20', 16, '2022-09-18 15:15:20', NULL, NULL, NULL),
(5, 'selection', '<p>dsad</p>', '2022-09-18 15:28:27', 16, '2022-09-18 15:28:31', NULL, '2022-09-18 15:28:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `subject`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Verify your email address', '<p><strong>Dear </strong>{{USERNAME}}<strong>,</strong><br />\r\n<br />\r\n<strong>Thanks for getting started with </strong>{{SITE_TITLE}}<strong>!</strong><br />\r\nWe just need to verify your email address before you can access {{SITE_TITLE}}.<br />\r\n<br />\r\nThis link will verify your email address, and then you&rsquo;ll officially be a part of the webcom community.<br />\r\n<br />\r\nSee you there!</p>', NULL, '2022-10-21 14:05:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `location` longtext DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `location`, `start_date`, `end_date`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Apna Open Mic - Ahmedabad - 50th Edition', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fresh.</p>', 'Amar Complex, Ground Floor, Chimanlal Girdharlal Rd, Near Swastik Char Rasta, Swastik Society, Navrangpura, Ahmedabad, Gujarat 380009', '2022-04-24', '2022-04-24', '2022042405192903.jpg', '2022-04-24 05:19:28', 20, '2022-04-24 05:22:11', 20, NULL, NULL),
(2, 'Apna Open Mic - Ahmedabad - 50th Edition', '<p>Apna Open Mic - Ahmedabad - 50th EditionApna Open Mic - Ahmedabad - 50th EditionApna Open Mic - Ahmedabad - 50th Edition</p>', 'Amar Complex, Ground Floor, Chimanlal Girdharlal Rd, Near Swastik Char Rasta, Swastik Society, Navrangpura, Ahmedabad, Gujarat 380009', '2022-04-24', '2022-04-24', '2022042405203601.jpg', '2022-04-24 05:20:35', 20, '2022-04-24 05:20:35', NULL, NULL, NULL),
(3, 'The Golden Time C.G Road', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...</p>', 'The Golden Time C.G Road', '2022-04-24', '2022-04-27', '2022042405236002.jpg', '2022-04-24 05:23:59', 20, '2022-04-24 05:23:59', NULL, NULL, NULL),
(4, 'Apna Open Mic - Ahmedabad - 50th Edition', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fresh.</p>', 'Amar Complex, Ground Floor, Chimanlal Girdharlal Rd, Near Swastik Char Rasta, Swastik Society, Navrangpura, Ahmedabad, Gujarat 380009', '2022-04-24', '2022-04-24', '2022042405192903.jpg', '2022-04-24 05:19:28', 20, '2022-04-24 05:22:11', 20, NULL, NULL),
(5, 'Apna Open Mic - Ahmedabad - 50th Edition', '<p>Apna Open Mic - Ahmedabad - 50th EditionApna Open Mic - Ahmedabad - 50th EditionApna Open Mic - Ahmedabad - 50th Edition</p>', 'Amar Complex, Ground Floor, Chimanlal Girdharlal Rd, Near Swastik Char Rasta, Swastik Society, Navrangpura, Ahmedabad, Gujarat 380009', '2022-04-24', '2022-04-24', '2022042405203601.jpg', '2022-04-24 05:20:35', 20, '2022-04-24 05:20:35', NULL, NULL, NULL),
(6, 'The Golden Time C.G Road', '<p>Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...Apna Open Mic - Ahmedabad - 50th Edition is the Open Mic Platform brought to you by Cafe Comedy. Apna Open Mic is a well-known regular open mic event in Gujarat &amp; Mumbai. We are inviting Fre...</p>', 'The Golden Time C.G Road', '2022-04-24', '2022-04-27', '2022042405236002.jpg', '2022-04-24 05:23:59', 20, '2022-04-24 05:23:59', NULL, NULL, NULL),
(7, 'adsaddd', '<p>adasd</p>', 'dsadaddd', '2022-09-18', '2022-09-20', '202209180400292021052311220608.jpg', '2022-09-18 16:00:28', 16, '2022-09-18 16:01:47', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'd6a87fd0-ca58-4455-8162-14e5725dc262', 'database', 'default', '{\"uuid\":\"d6a87fd0-ca58-4455-8162-14e5725dc262\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:31;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49'),
(2, '9dc41f4b-98b4-4b66-af94-ce113523ef6d', 'database', 'default', '{\"uuid\":\"9dc41f4b-98b4-4b66-af94-ce113523ef6d\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:32;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49'),
(3, '599583c0-52cc-46a7-a17a-d9ef535ab0ff', 'database', 'default', '{\"uuid\":\"599583c0-52cc-46a7-a17a-d9ef535ab0ff\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:33;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49'),
(4, '1c00f696-f70c-483a-8033-c15667476ea7', 'database', 'default', '{\"uuid\":\"1c00f696-f70c-483a-8033-c15667476ea7\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49'),
(5, '170dc51c-36ca-4b2f-b6ef-8ad5aaa2a636', 'database', 'default', '{\"uuid\":\"170dc51c-36ca-4b2f-b6ef-8ad5aaa2a636\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:37;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49'),
(6, '0aa55f31-c8a8-4844-bcf3-d3c4246fbd15', 'database', 'default', '{\"uuid\":\"0aa55f31-c8a8-4844-bcf3-d3c4246fbd15\",\"displayName\":\"App\\\\Listeners\\\\UserRegistrationNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:50:\\\"App\\\\Listeners\\\\UserRegistrationNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\UserRegistered\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:38;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\User]. in C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:527\nStack trace:\n#0 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Events\\UserRegistered->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(122): App\\Events\\UserRegistered->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Events\\UserRegistered->__unserialize(Array)\n#4 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:36:\"Illuminat...\')\n#5 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(172): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Command\\Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(1028): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp8\\htdocs\\laravel\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp8\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp8\\htdocs\\laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-10-21 09:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `front_amazing_features`
--

CREATE TABLE `front_amazing_features` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_amazing_features`
--

INSERT INTO `front_amazing_features` (`id`, `title`, `image`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'CREATIVE DESIGN', '20210804025152paint-palette.svg', 'Web design and responsive site prototyping, including eCommerce and other design elements', '2021-08-04 02:51:51', 5, '2021-08-04 03:18:16', 5, NULL, NULL),
(2, 'EASY TO USE', '20210804025425design-tool.svg', 'The Freedom to Create the Websites You Want,Design and build your own high-quality websites.', '2021-08-04 02:54:24', 5, '2021-08-04 03:18:40', 5, NULL, NULL),
(3, 'FREE UPDATES', '20210804025603asteroid.svg', 'Customize your site free, Add advanced features,Professionally Designed Website Templates daily updates.', '2021-08-04 02:56:02', 5, '2021-08-04 02:56:02', NULL, NULL, NULL),
(4, 'CLEAN CODES', '20210804025724code.svg', 'clean code Bootstrap 4 HTML website templates. All created by our Global Community of independent Web Designers and Developers', '2021-08-04 02:57:23', 5, '2021-08-04 02:57:23', NULL, NULL, NULL),
(5, 'FREE CUSTOMIZATION', '20210804030514pixel.svg', 'Time is our most valuable asset, that\'s why we want to help you save it by creating simple, customizable. we can customize your website free just send a inquiry via customization form.', '2021-08-04 03:05:13', 5, '2021-08-04 03:06:07', 5, NULL, NULL),
(6, 'BUSINESS', '20210804030760cloud-computing.svg', 'Make your own website and get built-in tools to grow your business online. Start selling online and grow your business', '2021-08-04 03:07:59', 5, '2021-08-04 03:08:06', 5, NULL, NULL),
(7, 'LANDING PAGE EDITOR', '20210804031120planet.svg', 'Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites', '2021-08-04 03:11:19', 5, '2021-08-04 03:11:19', NULL, NULL, NULL),
(8, 'EMAIL MARKETING', '20210804031405vector.svg', 'Browse our selection of Landing page and promote your business and website.', '2021-08-04 03:14:04', 5, '2021-08-04 03:14:04', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_bussiness`
--

CREATE TABLE `front_bussiness` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `send_by` int(11) DEFAULT NULL COMMENT '1:support 2:user',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `is_read` int(11) DEFAULT 0 COMMENT '0:not read 1:read',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `project_detail` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front_bussiness`
--

INSERT INTO `front_bussiness` (`id`, `user_id`, `send_by`, `created_at`, `updated_at`, `deleted_at`, `message`, `is_read`, `name`, `email`, `country`, `phone`, `about`, `project_detail`) VALUES
(1, 54, 2, '2022-11-03 22:17:10', NULL, NULL, 'Hi Aiden, How Are You? How Is The Project Coming Along? This Chat Application Theme Also Includes An Emoji And File Input Buttons. Check Out Our Plugin To Implement An Advanced File Uploadfunctionality Or Use A Basic File Input Form To Make It Work On Production..\r\nHi Aiden, How Are You? How Is The Project Coming Along? This Chat Application Theme Also Includes An Emoji And File Input Buttons. Check Out Our Plugin To Implement An Advanced File Uploadfunctionality Or Use A Basic File Input Form To Make It Work On Production..', 0, '0', '0', '0', '0', '0', '0'),
(2, 54, 2, '2022-11-23 00:00:00', NULL, NULL, 'Hi Aiden, How Are You? How Is The Project Coming Along?', 0, '0', '0', '0', '0', '0', '0'),
(3, 54, 1, '2022-11-23 22:17:10', '2022-11-26 13:28:46', NULL, 'Admin Hi Aiden, How Are You? How Is The Project Coming Along?\n\nYou’ve probably used it. It’s that very special tag in HTML that allows for the white space within the tags to actually be honored. For example, four spaces will actually be four spaces! That’s unlike how HTML normally works, where white space “collapses” (the four spaces will become one). The <pre> tag is useful indeed.', 1, '0', '0', '0', '0', '0', '0'),
(4, 54, 2, '2022-11-25 10:17:10', NULL, NULL, 'Hi Aiden, How Are You? How Is The Project Coming Along? This Chat Application Theme Also Includes An Emoji And File Input Buttons. Check Out Our Plugin To Implement An Advanced File Uploadfunctionality Or Use A Basic File Input Form To Make It Work On Production..\r\n\r\nHi Aiden, How Are You? How Is The Project Coming Along? This Chat Application Theme Also Includes An.........\r\n\r\n Emoji And File Input Buttons. Check Out Our Plugin To Implement An Advanced File Uploadfunctionality Or Use A Basic File Input Form To Make It Work On Production..', 0, '0', '0', '0', '0', '0', '0'),
(5, NULL, NULL, '2022-11-26 13:26:14', '2022-11-26 13:26:14', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, '2022-11-26 13:27:00', '2022-11-26 13:27:00', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, '2022-11-26 13:28:23', '2022-11-26 13:28:23', NULL, NULL, 0, 'Zssaddad', 'dsad@gmail.com', 'ddasdasd31', '1234567789', 'asdasdasdadasda', 'waewq'),
(8, 54, 2, '2022-11-27 08:57:28', '2022-11-27 08:57:28', NULL, 'saDSSAS', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 54, 2, '2022-11-27 08:57:30', '2022-11-27 08:57:30', NULL, 'saDSSAS', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 54, 2, '2022-11-27 08:58:53', '2022-11-27 08:58:53', NULL, 'sfdsfdsfdsf', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 54, 2, '2022-11-27 08:58:56', '2022-11-27 08:58:56', NULL, 'sfdsfdsfdsffsdfds', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 54, 2, '2022-11-27 08:59:01', '2022-11-27 08:59:01', NULL, 'sfdsfdsfdsffsdfdsssfdsfsdfsdf', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 54, 2, '2022-11-27 09:02:31', '2022-11-27 09:02:31', NULL, 'adsadsad', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 54, 2, '2022-11-27 09:02:36', '2022-11-27 09:02:36', NULL, 'dsdadsad', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '2022-11-27 12:00:24', '2022-11-27 12:00:24', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(16, NULL, NULL, '2022-11-27 12:01:03', '2022-11-27 12:01:03', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(17, NULL, NULL, '2022-11-27 12:01:20', '2022-11-27 12:01:20', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(18, NULL, NULL, '2022-11-27 12:03:09', '2022-11-27 12:03:09', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(19, NULL, NULL, '2022-11-27 12:03:24', '2022-11-27 12:03:24', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(20, NULL, NULL, '2022-11-27 12:03:44', '2022-11-27 12:03:44', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(21, NULL, NULL, '2022-11-27 12:04:58', '2022-11-27 12:04:58', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(22, NULL, NULL, '2022-11-27 12:05:06', '2022-11-27 12:05:06', NULL, NULL, 0, 'asdasd', 'asdasdsa@gmail.com', 'adsadasdasd', '1312323321', 'sadsadsadas', 'asdsadasdadasd'),
(23, NULL, NULL, '2022-11-27 12:16:28', '2022-11-27 12:16:28', NULL, NULL, 0, 'dasddsad', 'dasd@gmail.com', 'asdasd', '2121212212', 'sdasdasdd', 'asdsadad'),
(24, NULL, NULL, '2022-11-27 12:17:32', '2022-11-27 12:17:32', NULL, NULL, 0, 'dasddsad', 'dasd@gmail.com', 'asdasd', '2121212212', 'sdasdasdd', 'asdsadad'),
(25, NULL, NULL, '2022-11-27 12:19:02', '2022-11-27 12:19:02', NULL, NULL, 0, 'dasddsad', 'dasd@gmail.com', 'asdasd', '2121212212', 'sdasdasdd', 'asdsadad'),
(26, NULL, NULL, '2022-11-27 12:21:01', '2022-11-27 12:21:01', NULL, NULL, 0, 'saSA', 'SADASDA@gmail.com', 'asaSA', '1321321321', 'asdsadsa', 'asdsadasda'),
(27, NULL, NULL, '2022-11-27 12:22:07', '2022-11-27 12:22:07', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(28, NULL, NULL, '2022-11-27 12:22:35', '2022-11-27 12:22:35', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(29, NULL, NULL, '2022-11-27 12:22:54', '2022-11-27 12:22:54', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(30, NULL, NULL, '2022-11-27 12:23:07', '2022-11-27 12:23:07', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(31, NULL, NULL, '2022-11-27 12:23:14', '2022-11-27 12:23:14', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(32, NULL, NULL, '2022-11-27 12:24:12', '2022-11-27 12:24:12', NULL, NULL, 0, 'adasd', 'asdsad@gmail.com', 'dsadsadasd', '1322222222', 'asdasd', 'asdas'),
(33, NULL, NULL, '2022-11-27 12:24:49', '2022-11-27 12:24:49', NULL, NULL, 0, 'zcxczc', 'zczxc@gmail.com', 'adasd', '1233333333', 'w13123', 'ww'),
(34, NULL, NULL, '2022-11-27 12:27:59', '2022-11-27 12:27:59', NULL, NULL, 0, 'dsaad', 'adasdasd@gmail.com', 'adsad', '1221321321', 'wdsadasd', 'asdsadad'),
(35, NULL, NULL, '2022-11-27 12:29:10', '2022-11-27 12:29:10', NULL, NULL, 0, 'adasd', 'asdsa@gmail.com', 'dsada', '3123213213', 'asdasdas', 'asdasdasda'),
(36, NULL, NULL, '2022-11-27 12:30:19', '2022-11-27 12:30:19', NULL, NULL, 0, 'adasd', 'asdsa@gmail.com', 'dsada', '3123213213', 'asdasdas', 'asdasdasda'),
(37, NULL, NULL, '2022-11-27 12:30:29', '2022-11-27 12:30:29', NULL, NULL, 0, 'adasd', 'asdsa@gmail.com', 'dsada', '3123213213', 'asdasdas', 'asdasdasda'),
(38, NULL, NULL, '2022-11-27 12:31:51', '2022-11-27 12:31:51', NULL, NULL, 0, 'dasdasd', 'asdas@gmail.com', 'adsad', '1312222222', 'dsadas', 'sadas'),
(39, NULL, NULL, '2022-11-27 12:32:44', '2022-11-27 12:32:44', NULL, NULL, 0, 'asdasdsad', 'dadasd@gmail.com', 'adsada', '1321321323', 'asdsadasdsa', 'asdsadas'),
(40, NULL, NULL, '2022-11-27 12:37:20', '2022-11-27 12:37:20', NULL, NULL, 0, 'rewrw', 'werwe@gmail.com', 'adasd', '1313123232', 'adcsdsasd', 'asdsadasd'),
(41, 54, 2, '2022-11-27 12:40:52', '2022-11-27 12:40:52', NULL, 'hi', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 54, 2, '2022-11-27 12:41:15', '2022-11-27 12:41:15', NULL, 'ffsdf', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 54, 2, '2022-11-27 12:41:45', '2022-11-27 12:41:45', NULL, 'sfdsf', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 54, 2, '2022-11-27 12:43:19', '2022-11-27 12:43:19', NULL, 'sfdsfzdsfsd', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 54, 2, '2022-11-27 12:43:34', '2022-11-27 12:43:34', NULL, 'zdasfdsdada', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 54, 2, '2022-11-27 12:45:37', '2022-11-27 12:45:37', NULL, 'zxdsaddsad', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 54, 2, '2022-11-27 12:45:57', '2022-11-27 12:45:57', NULL, 'Admin Hi Aiden, How Are You? How Is The Project Coming Along?\n\nYou’ve Probably Used It. It’s That Very Special Tag In HTML That Allows For The White Space Within The Tags To Actually Be Honored. For Example, Four Spaces Will Actually Be Four Spaces! That’s Unlike How HTML Normally Works, Where White Space “Collapses” (The Four Spaces Will Become One). The \n Tag Is Useful Indeed.', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 54, 2, '2022-11-27 12:46:05', '2022-11-27 12:46:05', NULL, 'Admin Hi Aiden, How Are You? How Is The Project Coming Along?\n\nYou’ve Probably Used It. It’s That Very Special Tag In HTML That Allows For The White Space Within The Tags To Actually Be Honored. For Example, Four Spaces Will Actually Be Four Spaces! That’s Unlike How HTML Normally Works, Where White Space “Collapses” (The Four Spaces Will Become One). The \n Tag Is Useful Indeed.', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_cms`
--

CREATE TABLE `front_cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_cms`
--

INSERT INTO `front_cms` (`id`, `title`, `description`, `type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Terms Of Use', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'terms-of-use', NULL, 5, '2021-08-08 09:03:05', NULL, NULL, NULL),
(2, 'Privacy Policy', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'privacy-policy', NULL, 5, '2021-08-08 09:03:05', NULL, NULL, NULL),
(3, 'About Us', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum1</p>', 'about-us', NULL, 16, '2022-08-11 15:38:20', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_contact_us`
--

CREATE TABLE `front_contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_1` varchar(255) DEFAULT NULL,
  `contact_2` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_contact_us`
--

INSERT INTO `front_contact_us` (`id`, `email`, `address`, `contact_1`, `contact_2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`) VALUES
(1, 'vijay@virtualheight.com', 'ahmedabad', '9904625253', '9904625253', NULL, 5, '2021-08-01 04:57:57', NULL, NULL, NULL, NULL, NULL, 'qwewewew', 'wwww', 'qwewqewqewqe');

-- --------------------------------------------------------

--
-- Table structure for table `front_contact_us_inquiry`
--

CREATE TABLE `front_contact_us_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_contact_us_inquiry`
--

INSERT INTO `front_contact_us_inquiry` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'virtualheight', 'vijay@virtualheight.com', '09904625253', 'fdsfsf', 'sdfdsfdsfds', '2021-08-08 06:20:20', NULL, '2021-08-08 06:20:20', NULL, NULL, NULL),
(2, 'virtualheight', 'vijay@virtualheight.com', '09904625253', 'fdfdsf', 'sfdsfdsf', '2021-08-08 06:23:28', NULL, '2021-08-08 06:23:28', NULL, NULL, NULL),
(3, 'asdsadsadsa', 'vijay@virtualheight.com', '09904625253', 'aasdaad', 'asdsad', '2021-08-08 07:03:59', NULL, '2021-08-08 07:03:59', NULL, NULL, NULL),
(4, 'virtualheight', 'vijay@virtualheight.com', '09904625253', 'sfdfdfdsf', 'sfdsfdsfsfdsf', '2021-08-08 07:11:27', NULL, '2021-08-08 07:11:27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_pricing`
--

CREATE TABLE `front_pricing` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `plan_type` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_text` varchar(255) DEFAULT NULL,
  `emails` int(11) DEFAULT NULL,
  `page_builder` varchar(25) DEFAULT 'No',
  `no_of_page_builder` int(11) NOT NULL DEFAULT 0,
  `no_of_landing_page` int(11) DEFAULT NULL,
  `no_of_address_book` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `duration_in_days` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_pricing`
--

INSERT INTO `front_pricing` (`id`, `plan_name`, `plan_type`, `price`, `price_text`, `emails`, `page_builder`, `no_of_page_builder`, `no_of_landing_page`, `no_of_address_book`, `duration`, `duration_in_days`, `description`, `button_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Free', 'free', 0, '$0', 100, 'No', 0, 3, 1000, '1 Year', 365, '<ul>\r\n	<li><strong>Dynemic </strong>Website</li>\r\n	<li><strong>Free </strong>Customization</li>\r\n	<li><strong>30 </strong>Days Free <strong>Tial&nbsp;</strong>Bussiness Account</li>\r\n	<li><strong>100&nbsp;</strong>Free <strong>&nbsp;</strong>Emails&nbsp;</li>\r\n	<li><strong><s>Page Builder</s></strong></li>\r\n</ul>', 'Start Free', '2022-08-11 15:25:17', 16, '2022-08-11 15:25:17', NULL, NULL, NULL),
(2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, 'per year', 365, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', 'Try Pro', '2022-08-11 15:28:34', 16, '2022-08-11 15:32:01', 16, NULL, NULL),
(3, 'Business', 'paid', 300, '$300', 10000, 'Yes', 20, 50, 10000, 'per year', 365, '<ul>\r\n	<li><strong>Dynemic </strong>Website</li>\r\n	<li><strong>Free </strong>Customization</li>\r\n	<li><strong>Bussiness </strong>Account</li>\r\n	<li><strong>10000&nbsp;</strong>Emails&nbsp;</li>\r\n	<li><strong>Page Builder</strong></li>\r\n</ul>', 'Start Bussiness', '2022-08-11 15:29:41', 16, '2022-08-11 15:32:11', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_settings`
--

CREATE TABLE `front_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_settings`
--

INSERT INTO `front_settings` (`id`, `title`, `logo`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Ecomweb', '20210801103404auction-free-template-388x306.jpg', NULL, 5, '2021-08-01 10:34:03', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_slider`
--

CREATE TABLE `front_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_slider`
--

INSERT INTO `front_slider` (`id`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '20210801110448delicious-free-template-388x306.jpg.webp', '2021-08-01 11:03:56', 5, '2021-08-01 11:04:51', 5, '2021-08-01 11:04:51', 5),
(2, '202111240535437544.jpg', '2021-08-01 11:05:01', 5, '2021-11-24 17:35:42', 14, NULL, NULL),
(3, '202111220522081738-min-min.jpg', '2021-08-01 11:05:09', 5, '2021-11-22 17:22:23', 14, '2021-11-22 17:22:23', 14),
(4, '202111240535507652.jpg', '2021-11-24 17:35:49', 14, '2021-11-24 17:35:49', NULL, NULL, NULL),
(5, '202111240535576683.jpg', '2021-11-24 17:35:56', 14, '2021-11-24 17:35:56', NULL, NULL, NULL),
(6, '202111240536036892.jpg', '2021-11-24 17:36:02', 14, '2021-11-24 17:36:02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_system`
--

CREATE TABLE `front_system` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_system`
--

INSERT INTO `front_system` (`id`, `title`, `image`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'INTRODUCING WEB', '20210801040911cloud.svg', '<p>Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.</p>', '2021-08-01 16:09:10', 5, '2021-08-01 16:33:58', 5, NULL, NULL),
(2, 'USER FRIENDLY INTERFACE', '20210801041749planet.svg', '<p>Sign up for a free website builder.&nbsp;Choose what kind of website you want to create. Publish your website and go live.&nbsp;Start building your professional online presence</p>', '2021-08-01 16:17:48', 5, '2021-08-01 16:30:29', 5, NULL, NULL),
(3, 'BUILD THE WEB EVERYONE LOVE', '20210801041820asteroid.svg', '<p>The Freedom to Create the Website You Want. Make your online store. Manage, Promote and Grow Your Business Online.</p>', '2021-08-01 16:18:19', 5, '2021-08-01 16:27:19', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_top_up`
--

CREATE TABLE `front_top_up` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `no_of_emails` int(11) DEFAULT NULL,
  `no_of_emails_price` int(11) DEFAULT NULL,
  `no_of_page_builder` int(11) DEFAULT NULL,
  `no_of_page_builder_price` int(11) DEFAULT NULL,
  `no_of_landing_page` int(11) DEFAULT NULL,
  `no_of_landing_page_price` int(11) DEFAULT NULL,
  `no_of_address_book` int(11) DEFAULT NULL,
  `no_of_address_book_price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front_top_up`
--

INSERT INTO `front_top_up` (`id`, `plan_name`, `no_of_emails`, `no_of_emails_price`, `no_of_page_builder`, `no_of_page_builder_price`, `no_of_landing_page`, `no_of_landing_page_price`, `no_of_address_book`, `no_of_address_book_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Top Up', 10000, 20, 30, 10, 50, 20, 10000, 20, '2022-08-15 08:02:36', '2022-08-15 08:02:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_web_templates`
--

CREATE TABLE `front_web_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `preview` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_web_templates`
--

INSERT INTO `front_web_templates` (`id`, `title`, `slug`, `description`, `image`, `url`, `preview`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Technology', 'technology', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenc', '2021080104471010ExamplesoftheBesteCommerceWebsit.webp', 'https://nicepage.com/features', 'https://www.ecom.web-templates', '2021-08-01 16:38:06', 5, '2021-08-01 16:55:19', 5, NULL, NULL),
(2, 'Art & Design', 'art-and-design', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenc', '20210801044720Blog_TN.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:38:26', 5, '2021-08-01 16:47:19', 5, NULL, NULL),
(3, 'Food & Restaurant', 'food-and-restaurant', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenc', '20210801044727HowtoStartanOnlineStore.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:38:54', 5, '2021-08-01 16:47:26', 5, NULL, NULL),
(4, 'Architecture & Building', 'architecture-and-building', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenc', '20210801044734T02Copy.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:40:37', 5, '2021-08-01 16:47:33', 5, NULL, NULL),
(5, 'Business & Law', 'business-and-law', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenc', '20210801044742T03Copy.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:40:57', 5, '2021-08-01 16:47:41', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '20220921045830bg-pattern.png', '2022-09-21 16:58:30', 16, '2022-09-21 18:50:27', NULL, '2022-09-21 18:50:27', NULL),
(2, '20220921045934bg-pattern.png', '2022-09-21 16:59:33', 16, '2022-09-21 18:50:29', NULL, '2022-09-21 18:50:29', NULL),
(3, '20220921045952admin_avtar.png', '2022-09-21 16:59:51', 16, '2022-09-21 17:00:23', NULL, '2022-09-21 17:00:23', NULL),
(4, '20220921045956megamenu-bg.png', '2022-09-21 16:59:55', 16, '2022-09-21 17:00:14', NULL, '2022-09-21 17:00:14', NULL),
(5, '20220921050001user_avtar2.png', '2022-09-21 17:00:00', 16, '2022-09-21 17:00:06', NULL, '2022-09-21 17:00:06', NULL),
(6, '20220921065140user_avtar2.png', '2022-09-21 18:51:39', 16, '2022-09-21 18:52:20', NULL, '2022-09-21 18:52:20', NULL),
(7, '20220921065322avtar.jpg', '2022-09-21 18:53:21', 16, '2022-11-19 08:41:28', NULL, '2022-11-19 08:41:28', NULL),
(8, '20220921065325admin.png', '2022-09-21 18:53:24', 16, '2022-10-03 17:28:40', NULL, '2022-10-03 17:28:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `for` int(11) DEFAULT NULL COMMENT '1:custom 2:all	',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `for`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'The Second Treat', 2, '2022-09-24 07:48:59', 16, '2022-09-24 09:37:44', NULL, '2022-09-24 09:37:44', NULL),
(2, 'industry\'s standard dummy', 1, '2022-09-24 07:49:30', 16, '2022-09-24 07:49:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_data`
--

CREATE TABLE `group_data` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `address_book_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_data`
--

INSERT INTO `group_data` (`id`, `group_id`, `address_book_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(7, 2, 24, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL),
(8, 2, 26, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL),
(9, 2, 28, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL),
(10, 2, 23, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL),
(11, 2, 27, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL),
(12, 2, 29, '2022-09-24 07:49:30', 16, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(9, 'default', '{\"uuid\":\"40fd63cf-0e93-40f0-83a9-9525258d8856\",\"displayName\":\"App\\\\Listeners\\\\WelcomeEmailNotificationListener\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":19:{s:5:\\\"class\\\";s:46:\\\"App\\\\Listeners\\\\WelcomeEmailNotificationListener\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:23:\\\"App\\\\Events\\\\WelcomeEmail\\\":2:{s:4:\\\"user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:48;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:6:\\\"socket\\\";N;}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1666370238, 1666370238);

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE `landing_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_name` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:pending 1:sent',
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing_page`
--

INSERT INTO `landing_page` (`id`, `title`, `url_name`, `url`, `status`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'qwewqeqeq', 'qeweqweweqqweq', 'http://127.0.0.1:8000/realestate/landing-page/qeweqweweqqweq', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://127.0.0.1:8000/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2022-09-04 08:46:49', 16, '2022-09-04 08:49:01', NULL, NULL, NULL),
(2, 'sdsaa', 'dsaddsdd', 'http://127.0.0.1:8000/realestate/landing-page/dsaddsdd', 0, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://127.0.0.1:8000/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2022-09-25 06:39:40', 16, '2022-09-25 06:39:40', NULL, NULL, NULL),
(3, 'adsdsadasdsadsad', 'ddasdadd', 'http://127.0.0.1:8000/realestate/landing-page/ddasdadd', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://127.0.0.1:8000/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2022-09-25 06:40:09', 16, '2022-09-25 10:04:21', 16, '2022-09-25 10:04:21', NULL),
(4, 'asdada', 'asdsad', 'http://127.0.0.1:8000/realestate/landing-page/asdsad', 0, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n</div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://127.0.0.1:8000/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2022-09-25 10:05:18', 16, '2022-09-25 10:05:18', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing_page_emails`
--

CREATE TABLE `landing_page_emails` (
  `id` int(11) NOT NULL,
  `to` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` longtext NOT NULL,
  `is_send` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing_page_emails`
--

INSERT INTO `landing_page_emails` (`id`, `to`, `from`, `subject`, `email`, `is_send`, `created_at`, `updated_at`, `deleted_at`, `created_by`) VALUES
(1, 'jams@gmail.com', NULL, 'selection', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16),
(2, 'jams@gmail.com', NULL, 'selection', '<p>Hi&nbsp;dadsad, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16),
(3, 'jams@gmail.com', NULL, 'selection', '<p>Hi&nbsp;dadsad, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16),
(4, 'jams@gmail.com', NULL, 'selection', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16),
(5, 'jams@gmail.com', NULL, 'selection', '<p>Hi&nbsp;dadsad, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16),
(6, 'vijayparmar11096@gmail.com', NULL, 'selection', '<p>Hi&nbsp;The Second Treat, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://127.0.0.1:8000/realestate/landing-page/ddasdadd Thank you.</p>', 0, '2022-09-25 06:40:47', NULL, NULL, 16);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_11_172237_create_permission_tables', 2),
(5, '2022_09_18_151021_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `category_id`, `brand_id`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 11, 3, 'The Second Treat', '<p>asdsadd</p>', '20220925103350avtar.jpg', NULL, NULL, '2022-09-25 10:33:49', 16, '2022-09-25 10:44:06', 16, '2022-09-25 10:44:06', NULL, '200'),
(2, 10, 3, 'adsads', '<p>asaASSSASADAD</p>', '20221009100137Sci-fevicon.jpg', NULL, NULL, '2022-10-09 10:01:36', 16, '2022-10-09 10:01:36', NULL, NULL, NULL, '1321323');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 20),
(1, 'App\\Models\\User', 28),
(1, 'App\\Models\\User', 31),
(1, 'App\\Models\\User', 32),
(1, 'App\\Models\\User', 35),
(1, 'App\\Models\\User', 36),
(1, 'App\\Models\\User', 41),
(1, 'App\\Models\\User', 42),
(1, 'App\\Models\\User', 45),
(1, 'App\\Models\\User', 49),
(1, 'App\\Models\\User', 52),
(1, 'App\\Models\\User', 55),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 33),
(2, 'App\\Models\\User', 34),
(2, 'App\\Models\\User', 40),
(2, 'App\\Models\\User', 44),
(2, 'App\\Models\\User', 46),
(2, 'App\\Models\\User', 50),
(2, 'App\\Models\\User', 53),
(2, 'App\\Models\\User', 54),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 48),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 47),
(5, 'App\\Models\\User', 51),
(6, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 27),
(6, 'App\\Models\\User', 28),
(7, 'App\\Models\\User', 7),
(7, 'App\\Models\\User', 29),
(8, 'App\\Models\\User', 8),
(8, 'App\\Models\\User', 30),
(9, 'App\\Models\\User', 9),
(10, 'App\\Models\\User', 10),
(11, 'App\\Models\\User', 20),
(11, 'App\\Models\\User', 31),
(12, 'App\\Models\\User', 21),
(13, 'App\\Models\\User', 22),
(14, 'App\\Models\\User', 23),
(15, 'App\\Models\\User', 24),
(15, 'App\\Models\\User', 32),
(16, 'App\\Models\\User', 25),
(16, 'App\\Models\\User', 33),
(17, 'App\\Models\\User', 26),
(18, 'App\\Models\\User', 19),
(19, 'App\\Models\\User', 27),
(20, 'App\\Models\\User', 18),
(21, 'App\\Models\\User', 17),
(22, 'App\\Models\\User', 16),
(23, 'App\\Models\\User', 15),
(24, 'App\\Models\\User', 14),
(25, 'App\\Models\\User', 13),
(26, 'App\\Models\\User', 12),
(27, 'App\\Models\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mobile_image` text DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_description` longtext DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_brand` varchar(255) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `area` longtext DEFAULT NULL,
  `landmark` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `currency_code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0:pending 1:deliverd, 2:reject'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `product_type`, `product_id`, `product_name`, `mobile_image`, `product_image`, `price`, `product_description`, `product_category`, `product_brand`, `quantity`, `name`, `mobile`, `email`, `pincode`, `company`, `area`, `landmark`, `city`, `state`, `currency_symbol`, `currency_code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `status`) VALUES
(1, '42199858723526499', 16, 'mobile', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 09:54:41', NULL, '2022-10-09 09:54:41', NULL, 2),
(2, '42199858723526499', 16, 'mobile', 12, 'sdsd', '20221009100137Sci-fevicon.jpg', '', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 1),
(3, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 09:46:11', NULL, NULL, NULL, 1),
(4, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2),
(5, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 1),
(6, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 08:44:42', NULL, NULL, NULL, 2),
(7, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2),
(8, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 1),
(9, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 08:44:46', NULL, NULL, NULL, 2),
(10, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2),
(11, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2),
(12, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 1),
(13, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 08:44:33', NULL, NULL, NULL, 1),
(14, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2),
(15, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 1),
(16, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 08:44:27', NULL, NULL, NULL, 1),
(17, '42199858723526499', 16, 'product', 12, 'sdsd', NULL, '20221002103202avtar.jpg', 200, NULL, NULL, '', '12', 'vijay parmar', '9904625253', 'vijay@gmail.com', '380013', 'websphare', 'Ahmedbad', 'Ahmedabad', 'Ahmedabad', 'Gujrat', '$', 'USD', '2022-10-08 15:38:37', 16, '2022-10-09 07:06:02', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `name`, `email`, `mobile`, `address`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Michael', 'michael@gmail.com', '1800454646', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '202203131058572021060607080201.jpg', '2022-03-13 10:58:56', 5, '2022-03-13 10:58:56', NULL, NULL, NULL),
(2, 'William', 'william@gmail.com', '9879831413', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '2022031310595501.jpg', '2022-03-13 10:59:54', 5, '2022-03-13 10:59:54', NULL, NULL, NULL),
(3, 'David', 'david@gmail.com', '8536546465', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '2022031311001602.jpg', '2022-03-13 11:00:15', 5, '2022-03-13 11:00:15', NULL, NULL, NULL),
(4, 'Elizabeth', 'elizabeth@gmail.com', '9964654646', '1301-1307, iSquare, Shukan Cross Road, Science City Rd, Sola, Ahmedabad, Gujarat 380060', '2022031311024904.jpg', '2022-03-13 11:02:48', 5, '2022-03-13 11:02:48', NULL, NULL, NULL),
(5, 'adsad', 'aaikhodal@gmail.com', '1231232132', 'dasdasdd', '202205010833092021052311220608.jpg', '2022-05-01 08:33:08', 16, '2022-09-25 11:49:51', 16, '2022-09-25 11:49:51', NULL),
(6, 'The Second Treat', 'vijayparmar11096@gmail.com', '9879831413', NULL, '20220925115234avtar.jpg', '2022-09-25 11:52:33', 16, '2022-09-25 11:53:00', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_builder`
--

CREATE TABLE `page_builder` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url_name` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_builder`
--

INSERT INTO `page_builder` (`id`, `name`, `url_name`, `url`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'sadad', 'asdsadsa', 'http://127.0.0.1:8000/realestate/page-builder/asdsadsa', '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Page Builder</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://127.0.0.1:8000/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2022-09-17 05:57:46', 16, '2022-09-17 05:57:55', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vijayparmar11096@gmail.com', '$2y$10$L2pRZCG9H3hfN1hh8C/Io.z3b6OFLPJWgExic6Kjn42VxUCkTAx1W', '2022-11-20 09:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'about_us', 'web', NULL, NULL),
(2, 'address_book', 'web', NULL, NULL),
(3, 'blog', 'web', NULL, NULL),
(4, 'books', 'web', NULL, NULL),
(5, 'brand', 'web', NULL, NULL),
(6, 'category', 'web', NULL, NULL),
(7, 'contact_us', 'web', NULL, NULL),
(8, 'electric', 'web', NULL, NULL),
(9, 'email_marketing', 'web', NULL, NULL),
(10, 'event', 'web', NULL, NULL),
(11, 'gallery', 'web', NULL, NULL),
(12, 'group', 'web', NULL, NULL),
(13, 'landing_page', 'web', NULL, NULL),
(14, 'mobile', 'web', NULL, NULL),
(15, 'purchase_plan', 'web', NULL, NULL),
(16, 'orders', 'web', NULL, NULL),
(17, 'our_team', 'web', NULL, NULL),
(18, 'philosophy', 'web', NULL, NULL),
(19, 'photo_shoots', 'web', NULL, NULL),
(20, 'plan', 'web', NULL, NULL),
(21, 'products', 'web', NULL, NULL),
(22, 'project_type', 'web', NULL, NULL),
(23, 'projects', 'web', NULL, NULL),
(24, 'promotion', 'web', NULL, NULL),
(25, 'service', 'web', NULL, NULL),
(26, 'site_settings', 'web', NULL, NULL),
(27, 'slider', 'web', NULL, NULL),
(28, 'type', 'web', NULL, NULL),
(29, 'page_builder', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `philosophy`
--

CREATE TABLE `philosophy` (
  `id` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `philosophy`
--

INSERT INTO `philosophy` (`id`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '<p>sdaasdsaafsfeerewrrre</p>\r\n\r\n<p>rewrwerewrerwer</p>', '2022-05-01 08:33:35', 16, '2022-09-25 12:15:55', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photo_shoots`
--

CREATE TABLE `photo_shoots` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_shoots`
--

INSERT INTO `photo_shoots` (`id`, `category_id`, `name`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(2, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(3, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(4, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(5, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(6, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(7, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(8, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(9, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(10, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(11, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(12, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(13, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(14, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(15, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(16, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(17, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(18, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(19, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(20, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(21, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(22, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(23, 9, 'USER FRIENDLY INTERFACE', '2022041008290902.jpg', '2022-04-10 08:29:08', 13, '2022-04-10 08:29:08', NULL, NULL, NULL),
(24, 9, 'The Second Treat', '2022041008291701.jpg', '2022-04-10 08:29:16', 13, '2022-04-10 08:29:16', NULL, NULL, NULL),
(25, 11, 'adsa', '202205010832552021052311220608.jpg', '2022-05-01 08:32:54', 16, '2022-09-26 15:55:57', 16, '2022-09-26 15:55:57', NULL),
(26, 10, 'The Second Treat', '20220926035637avtar.jpg', '2022-09-26 15:56:36', 16, '2022-09-26 15:59:56', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'ZXX', '<p>ZXzX</p>', '202205010831122021052311220608.jpg', '20220926052514avtar.jpg', '20220926052514admin.png', '2022-05-01 08:31:11', 16, '2022-09-26 17:25:17', 16, '2022-09-26 17:25:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 1, 'industry\'s standard dummy', '<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recen&nbsp;led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recen</p>\r\n\r\n<p>led it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recenled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recen</p>', '20220202043903202112260941190e40fd1a684e3c020fe2e98673817868.jpeg', '202202020434562021052311220608.jpg', NULL, '2022-02-02 16:34:55', 1, '2022-02-02 16:39:02', 1, NULL, NULL, '200'),
(2, 7, 'Bakery, Desserts', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '202203130556562022020204334620210605110833full.jpg', '20220313055718202203120812302021052311220608.jpg', '20220313055718202203120812302021052311223405.jpg', '2022-03-13 05:56:55', 4, '2022-03-13 05:57:17', 4, NULL, NULL, '200'),
(3, 6, 'INTRODUCING WEB', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '20220313055946202203120812302021052311220608.jpg', NULL, NULL, '2022-03-13 05:59:45', 4, '2022-03-13 05:59:45', NULL, NULL, NULL, '200'),
(4, 6, 'The Second Treat', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '20220313055960202203120812302021052311223405.jpg', NULL, NULL, '2022-03-13 05:59:59', 4, '2022-03-13 05:59:59', NULL, NULL, NULL, '200'),
(5, 6, 'The Second Treat', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '202203130600262021060606263601.jpg', '2022031306264420220313055960202203120812302021052311223405.jpg', '2022031306264420220313055946202203120812302021052311220608.jpg', '2022-03-13 06:00:25', 4, '2022-03-13 06:26:43', 4, NULL, NULL, '200'),
(6, 8, 'The Second Treat', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is siply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '202203131050022021060511072005.jpg', '202203131050022021060511293501.jpg', '2022031310500220220313055946202203120812302021052311220608.jpg', '2022-03-13 10:50:01', 5, '2022-03-13 10:50:01', NULL, NULL, NULL, '200'),
(7, 8, 'The Second Treat', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scram</p>', '202203131050242021060511293501.jpg', '2022031310502420220313055718202203120812302021052311223405.jpg', '202203131050242021060607054902.jpg', '2022-03-13 10:50:23', 5, '2022-03-13 10:50:23', NULL, NULL, NULL, '200'),
(8, 8, 'The Second Treat', '<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>\r\n\r\n<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presenceSign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>', '202203131053172021060511326007.jpg', '202203131053172021060511304203.jpg', '202203131053172021060511293501.jpg', '2022-03-13 10:53:16', 5, '2022-03-13 11:04:51', 5, NULL, NULL, '200'),
(9, 8, 'The Second Treat', '<p>Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence</p>', '202203131053422022031310500220220313055946202203120812302021052311220608.jpg', '20220313105342202203131053172021060511293501.jpg', '202203131053422022031306264420220313055960202203120812302021052311223405.jpg', '2022-03-13 10:53:41', 5, '2022-03-13 10:53:41', NULL, NULL, NULL, '200'),
(10, 10, 'The Second Treat', '<p>xzxda</p>', '202205010830212021052311223405.jpg', NULL, NULL, '2022-05-01 08:30:20', 16, '2022-05-01 08:30:27', 16, '2022-05-01 08:30:27', 16, '12'),
(11, 10, 'The Second Treat', '<p>sfsdfsf</p>', '20220929050750avtar.jpg', NULL, NULL, '2022-09-29 17:07:49', 16, '2022-09-29 17:10:40', 16, '2022-09-29 17:10:40', NULL, '200'),
(12, 11, 'sdsd', '<p>css</p>', '20221002103202avtar.jpg', NULL, NULL, '2022-10-02 10:32:01', 16, '2022-10-04 16:48:50', 16, NULL, NULL, '200');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_type_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_type_id`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 'industry\'s standard dummy', '<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>\r\n\r\n<p>&nbsp;</p>', '2022020204414520210918124737p4.jpg', '2022030601250720210523112215full.jpg', '202203060125072021060511100608.jpg', '2022-02-02 16:41:44', 1, '2022-03-06 13:30:59', 1, NULL, NULL),
(2, 3, 'Medical College & Hostel Buildings - Vadnagar(Gujarat)', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</p>', '2022031207025620210508044637homeimg.jpg', '202203120702562021052311223405.jpg', '202203120702562021060511100608.jpg', '2022-03-12 07:02:55', 2, '2022-03-12 08:01:55', 2, NULL, NULL),
(3, 3, '100 Admission Medical College & Hospital - Datiya(M.P.)', '<ul>\r\n	<li>Construction of residential quarters &amp; hostel buildings for GMERS medical college at Vadnagar, Dist- Mehsana</li>\r\n</ul>', '2022031207085120210918124737p4.jpg', NULL, NULL, '2022-03-12 07:08:50', 2, '2022-03-12 08:06:15', 2, NULL, NULL),
(4, 5, 'The Second Treat', '<p>xzXZX</p>', '202205010830532021052311220608.jpg', '202205010830532021060511100608.jpg', NULL, '2022-05-01 08:30:52', 16, '2022-10-05 08:07:05', 16, '2022-10-05 08:07:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `slug` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `slug`) VALUES
(1, 'aaaaaaaaaa\'saaaaaaaaaaaaaaaa', '2022-02-02 16:34:25', 1, '2022-02-02 16:34:25', NULL, NULL, NULL, NULL),
(2, 'adsadadsadasd8\'sdsdsad', '2022-02-06 10:22:23', 1, '2022-02-06 10:22:23', NULL, NULL, NULL, 'adsadadsadasd8sdsdsad'),
(3, 'Medical College & Hospital', '2022-03-12 07:02:11', 2, '2022-03-12 08:01:01', 2, NULL, NULL, 'industrysstandarddummy'),
(4, 'The Second Treatasdasd', '2022-04-30 11:56:25', 16, '2022-10-02 10:47:49', 16, '2022-10-02 10:47:49', NULL, 'thesecondtreat'),
(5, 'The Second Treat123', '2022-05-01 08:29:47', 16, '2022-10-03 16:21:16', 16, NULL, NULL, 'thesecondtreat-1');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '<p>asaSAsa</p>', '2022-05-01 08:33:42', 16, '2022-05-01 08:33:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_plan`
--

CREATE TABLE `purchase_plan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `plan_type` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_text` varchar(255) DEFAULT NULL,
  `no_of_emails` int(11) DEFAULT NULL,
  `page_builder` varchar(25) DEFAULT NULL,
  `no_of_page_builder` int(11) DEFAULT NULL,
  `no_of_landing_page` int(11) DEFAULT NULL,
  `no_of_address_book` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `duration_in_days` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_plan`
--

INSERT INTO `purchase_plan` (`id`, `user_id`, `plan_id`, `plan_name`, `plan_type`, `price`, `price_text`, `no_of_emails`, `page_builder`, `no_of_page_builder`, `no_of_landing_page`, `no_of_address_book`, `description`, `start_date`, `expiry_date`, `duration`, `duration_in_days`, `created_by`, `created_at`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 16, 2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2022-11-20', '2023-11-20', 'per year', 365, 16, '2022-11-20 11:51:10', '2022-11-20 11:51:10', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_plan_history`
--

CREATE TABLE `purchase_plan_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `plan_type` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_text` varchar(255) DEFAULT NULL,
  `no_of_emails` int(11) DEFAULT NULL,
  `page_builder` varchar(25) DEFAULT NULL,
  `no_of_page_builder` int(11) DEFAULT NULL,
  `no_of_landing_page` int(11) DEFAULT NULL,
  `no_of_address_book` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `duration_in_days` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_plan_history`
--

INSERT INTO `purchase_plan_history` (`id`, `user_id`, `plan_id`, `plan_name`, `plan_type`, `price`, `price_text`, `no_of_emails`, `page_builder`, `no_of_page_builder`, `no_of_landing_page`, `no_of_address_book`, `description`, `start_date`, `expiry_date`, `duration`, `duration_in_days`, `created_by`, `created_at`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:03:29', '2022-08-16 17:03:29', NULL, NULL, NULL),
(2, 16, NULL, 'Top Up', NULL, 20, NULL, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:03:32', '2022-08-16 17:03:32', NULL, NULL, NULL),
(3, 16, NULL, 'Top Up', NULL, 20, NULL, NULL, NULL, NULL, NULL, 10000, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:03:36', '2022-08-16 17:03:36', NULL, NULL, NULL),
(4, 16, NULL, 'Top Up', NULL, 20, NULL, NULL, NULL, NULL, NULL, 10000, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:03', '2022-08-16 17:04:03', NULL, NULL, NULL),
(5, 16, NULL, 'Top Up', NULL, 20, NULL, NULL, NULL, NULL, NULL, 10000, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:21', '2022-08-16 17:04:21', NULL, NULL, NULL),
(6, 16, NULL, 'Top Up', NULL, 20, NULL, NULL, NULL, NULL, NULL, 10000, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:26', '2022-08-16 17:04:26', NULL, NULL, NULL),
(7, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:28', '2022-08-16 17:04:28', NULL, NULL, NULL),
(8, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:31', '2022-08-16 17:04:31', NULL, NULL, NULL),
(9, 16, NULL, 'Top Up', NULL, 20, NULL, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-08-16 17:04:34', '2022-08-16 17:04:33', NULL, NULL, NULL),
(10, 16, NULL, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2022-09-04', '2023-09-04', 'per year', 365, 16, '2022-09-04 12:15:39', '2022-09-04 12:15:39', NULL, NULL, NULL),
(11, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-10-05 13:20:33', '2022-10-05 13:20:33', NULL, NULL, NULL),
(12, 16, NULL, 'Top Up', NULL, 20, NULL, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-10-05 13:21:24', '2022-10-05 13:21:24', NULL, NULL, NULL),
(13, 16, NULL, 'Top Up', NULL, 20, NULL, 10000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-10-05 13:21:32', '2022-10-05 13:21:32', NULL, NULL, NULL),
(14, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-10-05 13:21:36', '2022-10-05 13:21:36', NULL, NULL, NULL),
(15, 16, NULL, 'Top Up', NULL, 10, NULL, NULL, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '2022-10-05 13:21:40', '2022-10-05 13:21:40', NULL, NULL, NULL),
(16, 16, 2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2022-11-09', '2023-11-09', 'per year', 365, 16, '2022-11-09 16:03:41', '2022-11-09 16:03:41', 16, NULL, NULL),
(17, 16, 2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2022-11-20', '2023-11-20', 'per year', 365, 16, '2022-11-20 11:51:10', '2022-11-20 11:51:10', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'agency', 'web', '2021-12-08 15:48:12', NULL),
(2, 'architecture-and-building', 'web', NULL, NULL),
(3, 'art-and-design', 'web', NULL, NULL),
(4, 'bakery', 'web', NULL, NULL),
(5, 'beautyparlour', 'web', NULL, NULL),
(6, 'bookstore', 'web', NULL, NULL),
(7, 'business', 'web', NULL, NULL),
(8, 'cars-and-transportation', 'web', NULL, NULL),
(9, 'cloth', 'web', NULL, NULL),
(10, 'electric', 'web', NULL, NULL),
(11, 'event', 'web', NULL, NULL),
(12, 'fashion-and-beauty', 'web', NULL, NULL),
(13, 'furniture', 'web', NULL, NULL),
(14, 'gallery', 'web', NULL, NULL),
(15, 'garage', 'web', NULL, NULL),
(16, 'industrial', 'web', NULL, NULL),
(17, 'interior', 'web', NULL, NULL),
(18, 'jewellery', 'web', NULL, NULL),
(19, 'mobile', 'web', NULL, NULL),
(20, 'music-and-entertainment', 'web', NULL, NULL),
(21, 'photography', 'web', NULL, NULL),
(22, 'realestate', 'web', NULL, NULL),
(23, 'saloon', 'web', NULL, NULL),
(24, 'shoes', 'web', NULL, NULL),
(25, 'studio', 'web', NULL, NULL),
(26, 'technology', 'web', NULL, NULL),
(27, 'watch', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 24),
(5, 25),
(5, 26),
(5, 27),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(6, 27),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),
(7, 16),
(7, 17),
(7, 18),
(7, 19),
(7, 20),
(7, 21),
(7, 22),
(7, 23),
(7, 24),
(7, 25),
(7, 26),
(7, 27),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(8, 10),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(8, 18),
(8, 19),
(8, 20),
(8, 21),
(8, 22),
(8, 23),
(8, 24),
(8, 25),
(8, 26),
(8, 27),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(9, 8),
(9, 9),
(9, 10),
(9, 11),
(9, 12),
(9, 13),
(9, 14),
(9, 15),
(9, 16),
(9, 17),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24),
(9, 25),
(9, 26),
(9, 27),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7),
(10, 8),
(10, 9),
(10, 10),
(10, 11),
(10, 12),
(10, 13),
(10, 14),
(10, 15),
(10, 16),
(10, 17),
(10, 18),
(10, 19),
(10, 20),
(10, 21),
(10, 22),
(10, 23),
(10, 24),
(10, 25),
(10, 26),
(10, 27),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(11, 6),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(11, 11),
(11, 12),
(11, 13),
(11, 14),
(11, 15),
(11, 16),
(11, 17),
(11, 18),
(11, 19),
(11, 20),
(11, 21),
(11, 22),
(11, 23),
(11, 24),
(11, 25),
(11, 26),
(11, 27),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 5),
(12, 6),
(12, 7),
(12, 8),
(12, 9),
(12, 10),
(12, 11),
(12, 12),
(12, 13),
(12, 14),
(12, 15),
(12, 16),
(12, 17),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 22),
(12, 23),
(12, 24),
(12, 25),
(12, 26),
(12, 27),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(13, 15),
(13, 16),
(13, 17),
(13, 18),
(13, 19),
(13, 20),
(13, 21),
(13, 22),
(13, 23),
(13, 24),
(13, 25),
(13, 26),
(13, 27),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(14, 5),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(14, 10),
(14, 11),
(14, 12),
(14, 13),
(14, 14),
(14, 15),
(14, 16),
(14, 17),
(14, 18),
(14, 19),
(14, 20),
(14, 21),
(14, 22),
(14, 23),
(14, 24),
(14, 25),
(14, 26),
(14, 27),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(15, 5),
(15, 6),
(15, 7),
(15, 8),
(15, 9),
(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(15, 15),
(15, 16),
(15, 17),
(15, 18),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(15, 23),
(15, 24),
(15, 25),
(15, 26),
(15, 27),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(16, 5),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(16, 10),
(16, 11),
(16, 12),
(16, 13),
(16, 14),
(16, 15),
(16, 16),
(16, 17),
(16, 18),
(16, 19),
(16, 20),
(16, 21),
(16, 22),
(16, 23),
(16, 24),
(16, 25),
(16, 26),
(16, 27),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(17, 5),
(17, 6),
(17, 7),
(17, 8),
(17, 9),
(17, 10),
(17, 11),
(17, 12),
(17, 13),
(17, 14),
(17, 15),
(17, 16),
(17, 17),
(17, 18),
(17, 19),
(17, 20),
(17, 21),
(17, 22),
(17, 23),
(17, 24),
(17, 25),
(17, 26),
(17, 27),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(18, 5),
(18, 6),
(18, 7),
(18, 8),
(18, 9),
(18, 10),
(18, 11),
(18, 12),
(18, 13),
(18, 14),
(18, 15),
(18, 16),
(18, 17),
(18, 18),
(18, 19),
(18, 20),
(18, 21),
(18, 22),
(18, 23),
(18, 24),
(18, 25),
(18, 26),
(18, 27),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(19, 5),
(19, 6),
(19, 7),
(19, 8),
(19, 9),
(19, 10),
(19, 11),
(19, 12),
(19, 13),
(19, 14),
(19, 15),
(19, 16),
(19, 17),
(19, 18),
(19, 19),
(19, 20),
(19, 21),
(19, 22),
(19, 23),
(19, 24),
(19, 25),
(19, 26),
(19, 27),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(20, 5),
(20, 6),
(20, 7),
(20, 8),
(20, 9),
(20, 10),
(20, 11),
(20, 12),
(20, 13),
(20, 14),
(20, 15),
(20, 16),
(20, 17),
(20, 18),
(20, 19),
(20, 20),
(20, 21),
(20, 22),
(20, 23),
(20, 24),
(20, 25),
(20, 26),
(20, 27),
(21, 1),
(21, 2),
(21, 3),
(21, 4),
(21, 5),
(21, 6),
(21, 7),
(21, 8),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(21, 13),
(21, 14),
(21, 15),
(21, 16),
(21, 17),
(21, 18),
(21, 19),
(21, 20),
(21, 21),
(21, 22),
(21, 23),
(21, 24),
(21, 25),
(21, 26),
(21, 27),
(22, 1),
(22, 2),
(22, 3),
(22, 4),
(22, 5),
(22, 6),
(22, 7),
(22, 8),
(22, 9),
(22, 10),
(22, 11),
(22, 12),
(22, 13),
(22, 14),
(22, 15),
(22, 16),
(22, 17),
(22, 18),
(22, 19),
(22, 20),
(22, 21),
(22, 22),
(22, 23),
(22, 24),
(22, 25),
(22, 26),
(22, 27),
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(23, 5),
(23, 6),
(23, 7),
(23, 8),
(23, 9),
(23, 10),
(23, 11),
(23, 12),
(23, 13),
(23, 14),
(23, 15),
(23, 16),
(23, 17),
(23, 18),
(23, 19),
(23, 20),
(23, 21),
(23, 22),
(23, 23),
(23, 24),
(23, 25),
(23, 26),
(23, 27),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(24, 5),
(24, 6),
(24, 7),
(24, 8),
(24, 9),
(24, 10),
(24, 11),
(24, 12),
(24, 13),
(24, 14),
(24, 15),
(24, 16),
(24, 17),
(24, 18),
(24, 19),
(24, 20),
(24, 21),
(24, 22),
(24, 23),
(24, 24),
(24, 25),
(24, 26),
(24, 27),
(25, 1),
(25, 2),
(25, 3),
(25, 4),
(25, 5),
(25, 6),
(25, 7),
(25, 8),
(25, 9),
(25, 10),
(25, 11),
(25, 12),
(25, 13),
(25, 14),
(25, 15),
(25, 16),
(25, 17),
(25, 18),
(25, 19),
(25, 20),
(25, 21),
(25, 22),
(25, 23),
(25, 24),
(25, 25),
(25, 26),
(25, 27),
(26, 1),
(26, 2),
(26, 3),
(26, 4),
(26, 5),
(26, 6),
(26, 7),
(26, 8),
(26, 9),
(26, 10),
(26, 11),
(26, 12),
(26, 13),
(26, 14),
(26, 15),
(26, 16),
(26, 17),
(26, 18),
(26, 19),
(26, 20),
(26, 21),
(26, 22),
(26, 23),
(26, 24),
(26, 25),
(26, 26),
(26, 27),
(27, 1),
(27, 2),
(27, 3),
(27, 4),
(27, 5),
(27, 6),
(27, 7),
(27, 8),
(27, 9),
(27, 10),
(27, 11),
(27, 12),
(27, 13),
(27, 14),
(27, 15),
(27, 16),
(27, 17),
(27, 18),
(27, 19),
(27, 20),
(27, 21),
(27, 22),
(27, 23),
(27, 24),
(27, 25),
(27, 26),
(27, 27),
(28, 1),
(28, 2),
(28, 3),
(28, 4),
(28, 5),
(28, 6),
(28, 7),
(28, 8),
(28, 9),
(28, 10),
(28, 11),
(28, 12),
(28, 13),
(28, 14),
(28, 15),
(28, 16),
(28, 17),
(28, 18),
(28, 19),
(28, 20),
(28, 21),
(28, 22),
(28, 23),
(28, 24),
(28, 25),
(28, 26),
(28, 27),
(29, 22);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'INTRODUCING WEB', 'Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.', '2022-03-13 05:58:28', 4, '2022-03-13 05:58:28', NULL, NULL, NULL),
(2, 'USER FRIENDLY INTERFACE', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence', '2022-03-13 05:58:36', 4, '2022-03-13 05:58:36', NULL, NULL, NULL),
(3, 'BUILD THE WEB EVERYONE LOVE', 'The Freedom to Create the Website You Want. Make your online store. Manage, Promote and Grow Your Business Online.', '2022-03-13 05:58:49', 4, '2022-03-13 05:58:49', NULL, NULL, NULL),
(4, 'INTRODUCING WEB', 'Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.', '2022-03-13 05:59:08', 4, '2022-03-13 05:59:08', NULL, NULL, NULL),
(5, 'INTRODUCING WEB', 'Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.', '2022-03-13 10:50:53', 5, '2022-03-13 10:50:53', NULL, NULL, NULL),
(6, 'BUILD THE WEB EVERYONE LOVE', 'The Freedom to Create the Website You Want. Make your online store. Manage, Promote and Grow Your Business Online.', '2022-03-13 10:51:04', 5, '2022-03-13 10:51:04', NULL, NULL, NULL),
(7, 'USER FRIENDLY INTERFACE', 'Sign up for a free website builder. Choose what kind of website you want to create. Publish your website and go live. Start building your professional online presence', '2022-03-13 10:51:18', 5, '2022-03-13 10:51:18', NULL, NULL, NULL),
(8, 'INTRODUCING WEB', 'Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.', '2022-03-13 10:51:29', 5, '2022-03-13 10:51:29', NULL, NULL, NULL),
(9, 'sdfsdfds', '<p>xdcsdsddd</p>', '2022-10-05 13:07:11', 16, '2022-10-05 13:09:19', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_name`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'agency', 'Agency', NULL, NULL, NULL),
(2, 'architecture-and-building', 'Architecture And Building', NULL, NULL, NULL),
(3, 'art-and-design', 'Art And Design', NULL, NULL, NULL),
(4, 'bakery', 'Bakery', NULL, NULL, NULL),
(5, 'beautyparlour', 'Beautyparlour', NULL, NULL, NULL),
(6, 'bookstore', 'Bookstore', NULL, NULL, NULL),
(7, 'business', 'Business', NULL, NULL, NULL),
(8, 'cars-and-transportation', 'Cars And Transportation', NULL, NULL, NULL),
(9, 'cloth', 'Cloth', NULL, NULL, NULL),
(10, 'electric', 'Electric', NULL, NULL, NULL),
(11, 'event', 'Event', NULL, NULL, NULL),
(12, 'fashion-and-beauty', 'Fashion And Beauty', NULL, NULL, NULL),
(13, 'furniture', 'Furniture', NULL, NULL, NULL),
(14, 'gallery', 'Gallery', NULL, NULL, NULL),
(15, 'garage', 'Garage', NULL, NULL, NULL),
(16, 'industrial', 'Industrial', NULL, NULL, NULL),
(17, 'interior', 'Interior', NULL, NULL, NULL),
(18, 'jewellery', 'Jewellery', NULL, NULL, NULL),
(19, 'mobile', 'Mobile', NULL, NULL, NULL),
(20, 'music-and-entertainment', 'Music And Entertainment', NULL, NULL, NULL),
(21, 'photography', 'Photography', NULL, NULL, NULL),
(22, 'realestate', 'Realestate', NULL, NULL, NULL),
(23, 'saloon', 'Saloon', NULL, NULL, NULL),
(24, 'shoes', 'Shoes', NULL, NULL, NULL),
(25, 'studio', 'Studio', NULL, NULL, NULL),
(26, 'technology', 'Technology', NULL, NULL, NULL),
(27, 'watch', 'Watch', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `fav_icon` text DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `site_logo`, `fav_icon`, `currency_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'sxxZX', '20221025043615AdminLTELogo.png', '20221025043615AdminLTELogo.png', 2, '2022-10-08 09:04:20', 16, '2022-10-25 16:36:14', 16, NULL, NULL),
(2, 'watch', '20221019060534Sci-fevicon.jpg', NULL, 17, '2022-10-19 06:05:33', 11, '2022-10-19 06:05:33', 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '20220312081408202112260943357371.jpg', '2022-03-12 08:13:21', 2, '2022-03-12 08:14:07', 2, NULL, NULL),
(2, '2022031306040620210522113549202105020658131500x600.png', '2022-03-13 06:04:05', 4, '2022-03-13 06:04:05', NULL, NULL, NULL),
(3, '20221020125307202105020658131500x600.png', '2022-10-08 08:34:50', 16, '2022-10-20 12:53:06', 16, NULL, NULL),
(4, '2022102012531820210502065821banneropt2.jpg', '2022-10-08 08:35:57', 16, '2022-10-20 12:53:17', 16, NULL, NULL),
(5, '20221020125326202112160505167652.jpg', '2022-10-08 08:36:21', 16, '2022-10-20 12:53:25', 16, NULL, NULL),
(6, '20221020125335202111220522081738-min-min.jpg', '2022-10-08 08:37:12', 16, '2022-10-20 12:53:34', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `category_id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 10, 'industry\'s standard dummy', '2022-04-30 11:56:18', 16, '2022-10-08 09:55:01', NULL, '2022-10-08 09:55:01', NULL),
(2, 11, 'The Second Treat213', '2022-05-01 08:29:35', 16, '2022-10-08 10:02:16', 16, '2022-10-08 10:02:16', NULL),
(3, 10, 'industry\'s standard dummy', '2022-10-08 09:55:05', 16, '2022-10-08 09:55:05', NULL, NULL, NULL),
(4, 10, 'INTRODUCING WEB', '2022-10-08 09:59:41', 16, '2022-10-08 09:59:41', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified` int(11) DEFAULT 0 COMMENT '0:not verified 1:verified',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'by user enter/this is user site name',
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'company site name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `email`, `email_verified_at`, `email_verified`, `password`, `remember_token`, `created_at`, `updated_at`, `site`, `title`, `site_name`) VALUES
(1, 'agency', NULL, 'vijayparmar11096@g111mail.com', NULL, 0, '$2y$10$1hUdYwo9JDHTNWy.aDVqGOs6qaBTdCHBSv4YGx.fL7N.vD9V1Bf5e', '0SGngYEeX7gtgbsgamRK4GRs1jFnYpLf8QMoJdCelg7gtaeP79tYCCxA8i3x', '2022-03-06 01:11:04', '2022-03-06 01:11:04', NULL, 'agency', 'agency'),
(2, 'architect', NULL, 'architect@gmail.com', NULL, 0, '$2y$10$uasm/FJgpVsveBTjfXeLweJ46e6SfvqiCMd0yy9lAGTjZ6/X7EwdS', NULL, '2022-03-12 01:30:36', '2022-03-12 01:30:36', NULL, 'architect', 'architecture-and-building'),
(3, 'art-and-design', NULL, 'art-and-design@gmail.com', NULL, 0, '$2y$10$zXLcDopVHZg1OZsJFq2FHeO5a0m6OVaNx8nHdPuykp4Ke0Chn8Li6', NULL, '2022-03-12 05:49:45', '2022-03-12 05:49:45', NULL, 'artanddesign', 'art-and-design'),
(4, 'bakery', NULL, 'bakery@gmail.com', NULL, 0, '$2y$10$Xc155X1sDnEWyRlqmxQZ6OjqeueNW4LXlQ/KbI7gmMFAHWrrSmaB.', NULL, '2022-03-12 05:57:48', '2022-03-12 05:57:48', NULL, 'bakery', 'bakery'),
(5, 'beautyparlour', NULL, 'beautyparlour@gmail.com', NULL, 0, '$2y$10$d1Y6NIwWc3K4SnPjCIQ.5OjfEtQzdAGEGfRZj0CkkkMSmMvZ2mJZW', NULL, '2022-03-13 05:05:16', '2022-03-13 05:05:16', NULL, 'beautyparlour', 'beautyparlour'),
(6, 'bookstore', NULL, 'bookstore@gmail.com', NULL, 0, '$2y$10$HmELKMTPPNILq4p30zzWjOdFqgQ.f1BOh4ffYbLcvDwuvZ7sxHaoq', NULL, '2022-03-26 01:25:27', '2022-03-26 01:25:27', NULL, 'bookstore', 'bookstore'),
(7, 'business', NULL, 'business@gmail.com', NULL, 0, '$2y$10$XmvMqx.1LggLSoN1yKeo...fi0SJ7CF93cD1j.vjjza7jNqwZ6eWe', NULL, '2022-03-26 07:46:13', '2022-03-26 07:46:13', NULL, 'business', 'business'),
(8, 'cars-and-transportation', NULL, 'cars-and-transportation@gmail.com', NULL, 0, '$2y$10$LRPbIP8AUuFBBYM0g8ane.O1tkaNHaBnH9wU63itmmFQLZpcMvxPW', NULL, '2022-03-26 07:57:59', '2022-03-26 07:57:59', NULL, 'carsandtransportation', 'cars-and-transportation'),
(9, 'cloth', NULL, 'cloth@gmail.com', NULL, 0, '$2y$10$Myu0u1SivZYGY9XKGSxOqOLErVTuhexcn6aQwSy4vETOR5WpQ2i96', NULL, '2022-03-26 09:07:58', '2022-03-26 09:07:58', NULL, 'cloth', 'cloth'),
(10, 'electric', NULL, 'electric@gmail.com', NULL, 0, '$2y$10$3BQkKfhHstiGR9ewUN9sK.5CHG7Qx0RyMRhaNB2vsLLu2dDR81a7O', NULL, '2022-03-26 10:19:13', '2022-03-26 10:19:13', NULL, 'electric', 'electric'),
(11, 'watch', NULL, 'watch@gmail.com', NULL, 0, '$2y$10$D6rpOMXoKhFaEP0jSAOdxejDcroJ8kF9K.X7xUdZ5kgiAZ1R/pyku', NULL, '2022-04-10 01:13:31', '2022-04-10 01:13:31', NULL, 'watch', 'watch'),
(12, 'technology', NULL, 'technology@gmail.com', NULL, 0, '$2y$10$qside1aIHxpmNMQ8hnrGOOxoWkrPVd2UEpeGxR5.l1CiUJi3eYUCa', NULL, '2022-04-10 02:39:32', '2022-04-10 02:39:32', NULL, 'technology', 'technology'),
(13, 'studio', NULL, 'studio@gmail.com', NULL, 0, '$2y$10$6YHXVaEcTz2GEhuru6TksuRVRv5iZXJfLnvjl0JCWizmTDMt3ThOW', NULL, '2022-04-10 02:55:31', '2022-04-10 02:55:31', NULL, 'studio', 'studio'),
(14, 'shoes', NULL, 'shoes@gmail.com', NULL, 0, '$2y$10$AwcUq7tmDUrAunVpBtnDMuz0/5FtAynnv7ZN6qsGDDlR4l8qFZe3.', NULL, '2022-04-10 03:26:19', '2022-04-10 03:26:19', NULL, 'shoes', 'shoes'),
(15, 'saloon', NULL, 'saloon@gmail.cim', NULL, 0, '$2y$10$Lqun6RgtU0PO0ll6gtzdGeBJx5H5bVH9Zd/Boyta9R75c2JU67VPu', NULL, '2022-04-10 04:34:48', '2022-04-10 04:34:48', NULL, 'saloon', 'saloon'),
(16, 'Realestate Pvt.Ltd', NULL, 'realestate@gmail.com', NULL, 0, '$2y$10$42OHp3nt1y/kcc86EmIOJO/vLMnnGYazRGerobZZkqToBIcxA9PYq', 'SG2o1w2riEvUq8kVOIZrIF9YCN2xX7LQDSakUhgHx1jSHQZYLJJdYEqQc0rP', '2022-04-10 04:38:08', '2022-11-20 09:01:45', NULL, 'realestate', 'realestate'),
(17, 'photography', NULL, 'photography@gmail.com', NULL, 0, '$2y$10$8//hI2VHIMH98/Q8HqUPbewOOWSejP10kDDQJxv6Y3vGshdNOxhCK', NULL, '2022-04-10 04:54:20', '2022-04-10 04:54:20', NULL, 'photography', 'photography'),
(18, 'musicandentertainment', NULL, 'musicandentertainment@gmail.com', NULL, 0, '$2y$10$1onZHl7YgDhgDib8RwtuROMnOEFSjvObmen2xeLSlzNi.AwtFOz.i', NULL, '2022-04-10 05:18:05', '2022-04-10 05:18:05', NULL, 'musicandentertainment', 'music-and-entertainment'),
(19, 'jewellery', NULL, 'jewellery@gmail.com', NULL, 0, '$2y$10$JMluUPs6eh7Sb/P/R1F.Mui3pjNdvPhpiPWWy8LDsC9FSywt.E1PS', NULL, '2022-04-10 09:45:09', '2022-04-10 09:45:09', NULL, 'jewellery', 'jewellery'),
(20, 'event', NULL, 'event@gmail.com', NULL, 0, '$2y$10$OAWNBGBh2Y.Z8eD4AYBHsOgrRi/B8kFaQBuxCInmMweQCHmMTXBCS', NULL, '2022-04-23 23:39:22', '2022-04-23 23:39:22', NULL, 'event', 'event'),
(21, 'fashionandbeauty', NULL, 'fashionandbeauty@gmail.com', NULL, 0, '$2y$10$VjW2R4V6RD9A7q.lhNIAhuHA9HvQszgM5eTQ6WyyuqD2WPA6RvyxS', NULL, '2022-04-24 00:17:25', '2022-04-24 00:17:25', NULL, 'fashionandbeauty', 'fashion-and-beauty'),
(22, 'furniture', NULL, 'furniture@gmail.com', NULL, 0, '$2y$10$k3dWI5aU2r8tCRlCfAmux.NmhTtePD8hGXWBmkscssPcy4Y3IsqIe', NULL, '2022-04-24 00:27:21', '2022-04-24 00:27:21', NULL, 'furniture', 'furniture'),
(23, 'gallery', NULL, 'gallery@gmail.com', NULL, 0, '$2y$10$Mko8Fz09tOEtnr98YOSLCOQp6cbJ3MyTxo7XIvnX4o0RMhmz/Ozwa', NULL, '2022-04-24 02:34:29', '2022-04-24 02:34:29', NULL, 'gallery', 'gallery'),
(24, 'garage', NULL, 'garage@gmail.com', NULL, 0, '$2y$10$Q6bvkIzmlXXuwJrWL63l.OOdvwL0OKscdyP7MCiaNh5ycWp5pTzHu', NULL, '2022-04-24 06:30:11', '2022-04-24 06:30:11', NULL, 'garage', 'garage'),
(25, 'industrial', NULL, 'industrial@gmail.com', NULL, 0, '$2y$10$xgO/95gXG8lHVgQ12q4A8.tBjgYfb3Lk99ndCVC9YwIO.Rc2DT.DC', NULL, '2022-04-24 06:32:13', '2022-04-24 06:32:13', NULL, 'industrial', 'industrial'),
(26, 'interior', NULL, 'interior@gmail.com', NULL, 0, '$2y$10$3AfoowVQ5jyEaZBEnCbBA.FJn2x9qBcJArh/NN96aF3Nxny7tZrOC', NULL, '2022-04-24 06:51:34', '2022-04-24 06:51:34', NULL, 'interior', 'interior'),
(27, 'mobile', NULL, 'mobile@gmail.com', NULL, 0, '$2y$10$6RMGe8vqeArztfhjrfEyk.pci/6imp5XRPdno0I1nD.X3VqxbzPDG', NULL, '2022-04-30 02:36:01', '2022-04-30 02:36:01', NULL, 'mobile', 'mobile'),
(41, 'sdasd', NULL, 'sadsad@gmail.com', NULL, 0, '$2y$10$U7AOgtFT12yfCTAtYx4sROHD3AfM9f1szxtsa0i5.vlOQuZedSxoq', NULL, '2022-10-21 09:06:05', '2022-10-21 09:06:05', NULL, 'zsadasd', 'agency'),
(43, 'aDAddad', NULL, 'vijayparmar11096@gmail.comSAS', NULL, 0, '$2y$10$6522Or4XjJMlzX6b.FS2y.95ICcExh/sJ0RP186E38kkqsX6m9JDm', NULL, '2022-10-21 10:06:09', '2022-10-21 10:06:09', NULL, 'sdsdad', 'beautyparlour'),
(54, 'adass', NULL, 'vijayparmar11096@gmail.com', NULL, 1, '$2y$10$2e5P9Cay1OQ/pKhscinhveO4rTT0CAnpYFT9xzQPpQrEda6zIMPhC', 'sFlTfdNGY7jzi4DEhV7JnkxlxIa5cglTttpNekhNpPEtKFhoS9MREk60Ls5U', '2022-10-21 12:22:05', '2022-11-20 09:12:49', NULL, 'asdasdd', 'architecture-and-building'),
(55, 'asdsadsadsad', NULL, 'asdsad@gmail.com', NULL, 0, '$2y$10$0IabqlVtVCLNNsCovMBna.GjGqZ.sX1FciHH8vNxa05k7lQg1YaA.', NULL, '2022-11-20 06:29:39', '2022-11-20 06:29:39', NULL, 'asdsdas', 'agency');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_site_settings`
--
ALTER TABLE `admin_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_inquiry`
--
ALTER TABLE `contact_us_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electric`
--
ALTER TABLE `electric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails_broadcast`
--
ALTER TABLE `emails_broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_marketing`
--
ALTER TABLE `email_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_amazing_features`
--
ALTER TABLE `front_amazing_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_bussiness`
--
ALTER TABLE `front_bussiness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms`
--
ALTER TABLE `front_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_contact_us`
--
ALTER TABLE `front_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_contact_us_inquiry`
--
ALTER TABLE `front_contact_us_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_pricing`
--
ALTER TABLE `front_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_settings`
--
ALTER TABLE `front_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_slider`
--
ALTER TABLE `front_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_system`
--
ALTER TABLE `front_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_top_up`
--
ALTER TABLE `front_top_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_web_templates`
--
ALTER TABLE `front_web_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_data`
--
ALTER TABLE `group_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `landing_page`
--
ALTER TABLE `landing_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_page_emails`
--
ALTER TABLE `landing_page_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_builder`
--
ALTER TABLE `page_builder`
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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `philosophy`
--
ALTER TABLE `philosophy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_shoots`
--
ALTER TABLE `photo_shoots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_plan`
--
ALTER TABLE `purchase_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_plan_history`
--
ALTER TABLE `purchase_plan_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `address_book`
--
ALTER TABLE `address_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admin_site_settings`
--
ALTER TABLE `admin_site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us_inquiry`
--
ALTER TABLE `contact_us_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `electric`
--
ALTER TABLE `electric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails_broadcast`
--
ALTER TABLE `emails_broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `email_marketing`
--
ALTER TABLE `email_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `front_amazing_features`
--
ALTER TABLE `front_amazing_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `front_bussiness`
--
ALTER TABLE `front_bussiness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `front_cms`
--
ALTER TABLE `front_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_contact_us`
--
ALTER TABLE `front_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_contact_us_inquiry`
--
ALTER TABLE `front_contact_us_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `front_pricing`
--
ALTER TABLE `front_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_settings`
--
ALTER TABLE `front_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_slider`
--
ALTER TABLE `front_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `front_system`
--
ALTER TABLE `front_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_top_up`
--
ALTER TABLE `front_top_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_web_templates`
--
ALTER TABLE `front_web_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_data`
--
ALTER TABLE `group_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `landing_page_emails`
--
ALTER TABLE `landing_page_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_builder`
--
ALTER TABLE `page_builder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photo_shoots`
--
ALTER TABLE `photo_shoots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_plan`
--
ALTER TABLE `purchase_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_plan_history`
--
ALTER TABLE `purchase_plan_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
