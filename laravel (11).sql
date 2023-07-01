-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:38 AM
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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, '<p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p>\r\n\r\n<p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p>\r\n\r\n<p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p>\r\n\r\n<p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p>\r\n\r\n<p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p>\r\n\r\n<p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p>', '2023-03-03 17:09:56', 1, '2023-03-03 17:10:04', NULL, NULL, NULL),
(2, '<p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p>\r\n\r\n<p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p>\r\n\r\n<p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p>\r\n\r\n<p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p>\r\n\r\n<p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p>\r\n\r\n<p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p>', '2023-03-06 16:52:31', 5, '2023-03-06 16:52:31', NULL, NULL, NULL);

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
(1, 'industry\'s standard dummy', 'realestate@gmail.com', '9879831413', '2023-03-26 05:53:05', 1, '2023-03-26 05:53:05', NULL, NULL, NULL);

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
(1, '20230102052449favicon.svg', '20230409094629logo.svg', 'Websphare', NULL, 16, '2023-04-09 09:46:28', NULL, NULL, NULL, 'Hi {{USER_NAME}},\n\nBrowse our selection of Landing page and promote your business and website.\n\nOur Landing Page link is here {{LANDING_PAGE_LINK}}\n\nThank you.', 'vijayparmar11096@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'Landing Page Editor', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '2023050609394020210523112215full.jpg', '2023-03-02 17:42:57', 1, '2023-05-06 09:39:39', 1, NULL, NULL),
(2, 'Email Marketing', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '202305060939472021060511236001.jpg', '2023-03-02 17:44:05', 1, '2023-05-06 09:39:46', 1, NULL, NULL),
(3, 'Creative Design', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '202305060940102021060511281604.jpg', '2023-03-02 17:45:27', 1, '2023-05-06 09:40:09', 1, NULL, NULL),
(4, 'Landing Page Editor', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitese text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '202305060940182021060607056001.jpg', '2023-03-02 17:42:57', 1, '2023-05-06 09:40:17', 1, NULL, NULL),
(5, 'Email Marketing', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '20230506094030202209170445022021052311223405.jpg', '2023-03-02 17:44:05', 1, '2023-05-06 09:40:29', 1, NULL, NULL),
(6, 'Creative Design', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websitesUse the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites</p>', '202305060940472021060511100608.jpg', '2023-03-02 17:45:27', 1, '2023-05-06 09:40:46', 1, NULL, NULL),
(7, 'boAt Wave Call Smart Watch, Smart Talk with Advanced Dedicated Bluetooth Calling Chip', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '2023052701173320210523112215full.jpg', '2023-03-05 03:30:51', 5, '2023-05-27 13:17:32', 5, NULL, NULL),
(8, 'Bluetooth Calling- Wave Call comes with a premium built-in speaker', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '202305270117422021060607056001.jpg', '2023-03-05 03:31:08', 5, '2023-05-27 13:17:41', 5, NULL, NULL),
(9, 'Bluetooth Calling- Wave Call comes with a premium built-in speaker', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '202305270117502021060607061002.jpg', '2023-03-05 03:31:32', 5, '2023-05-27 13:17:49', 5, NULL, NULL),
(10, 'Creative Design', '<p>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design an&nbsp;Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design an...Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design an...Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design an...</p>', '2023061711470720210523112215full.jpg', '2023-06-17 11:47:06', 35, '2023-06-17 11:47:06', NULL, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'The Second Treat', '2023-03-25 05:58:56', 1, '2023-03-25 05:58:56', NULL, NULL, NULL),
(2, 'industry\'s standard dummy', '2023-06-17 11:46:37', 35, '2023-06-17 11:46:37', NULL, NULL, NULL),
(3, 'ios', '2023-06-20 18:06:36', 5, '2023-06-20 18:06:36', NULL, NULL, NULL);

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
(1, 'Computers & Accessories', '2023-03-05 03:04:43', 1, '2023-03-05 03:04:43', NULL, NULL, NULL, 'ComputersAccessories'),
(2, 'Mobiles & Accessories', '2023-03-05 03:04:58', 1, '2023-03-05 03:04:58', NULL, NULL, NULL, 'MobilesAccessories'),
(3, 'Cameras & Photography', '2023-03-05 03:05:15', 1, '2023-03-05 03:05:15', NULL, NULL, NULL, 'CamerasPhotography'),
(4, 'Electronics', '2023-03-05 03:17:43', 5, '2023-03-05 03:17:43', NULL, NULL, NULL, 'Electronics'),
(5, 'boAt Wave Call Smart', '2023-03-05 03:18:05', 5, '2023-03-05 03:18:05', NULL, NULL, NULL, 'boAtWaveCallSmart'),
(6, 'Noise Pulse', '2023-03-05 03:18:13', 5, '2023-03-05 03:18:13', NULL, NULL, NULL, 'NoisePulse'),
(7, 'Fire-Boltt Phoenix Smart Watch', '2023-03-05 03:18:27', 5, '2023-03-05 03:18:27', NULL, NULL, NULL, 'FireBolttPhoenixSmartWatch'),
(8, 'asdsa $sfs&add', '2023-03-19 12:08:21', 1, '2023-03-19 12:08:21', NULL, NULL, NULL, 'asdsasfsadd'),
(9, 'The Second Treat', '2023-03-25 05:58:47', 1, '2023-03-25 05:58:47', NULL, NULL, NULL, 'thesecondtreat'),
(10, 'industry\'s standard dummy', '2023-06-17 11:46:30', 35, '2023-06-17 11:46:30', NULL, NULL, NULL, 'industrysstandarddummy');

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
(1, 'agency@gmail.com', 'Address. P.O. Box 1450. Alexandriawebsphare, VA 22313-1450', '1231231230', '1231231230', '2023-03-03 17:16:53', 1, '2023-03-03 17:16:53', NULL, NULL, NULL, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', NULL),
(2, 'watch@gmail.com', 'Address. P.O. Box 1450. Alexandriawebsphare, VA 22313-1450', '1231231230', '1231231230', '2023-03-06 16:52:00', 5, '2023-03-06 16:52:00', NULL, NULL, NULL, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_inquiry`
--

CREATE TABLE `contact_us_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` text CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'The Second Treat', 'realestate@gmail.com', '9879831413', 'sdfdssfsdf', '2023-03-19 11:36:35', 1, '2023-03-19 11:36:35', NULL, NULL, NULL);

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
-- Table structure for table `customization`
--

CREATE TABLE `customization` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`id`, `site_name`, `name`, `email`, `subject`, `message`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, NULL, 'xasdsadads', 'sadsadsadsad@gmail.com', 'adsadsdsadsa', 'asdsadsadsadsa', '2023-03-05 05:53:54', NULL, '2023-03-05 05:53:54', NULL, NULL, NULL),
(2, 'agency', 'sdsad', 'sdaasd@gmail.com', 'sadsad', 'asdas', '2023-03-05 09:38:05', NULL, '2023-03-05 09:38:05', NULL, NULL, NULL),
(3, 'agency', 'dadasd', 'dsda@gmail.com', 'asddsa', 'asdsa', '2023-03-09 17:33:01', NULL, '2023-03-09 17:33:01', NULL, NULL, NULL);

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

--
-- Dumping data for table `electric`
--

INSERT INTO `electric` (`id`, `category_id`, `type_id`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 5, 1, 'The Second Treat213', '<p>adadadaasd</p>', '20230624091642Untitled(500×500px)(8).png', NULL, NULL, '2023-06-24 09:16:41', 5, '2023-06-24 09:16:41', NULL, NULL, NULL, '100');

-- --------------------------------------------------------

--
-- Table structure for table `emails_broadcast`
--

CREATE TABLE `emails_broadcast` (
  `id` int(11) NOT NULL,
  `to` varchar(255) DEFAULT NULL,
  `from` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` longtext CHARACTER SET utf8 NOT NULL,
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
(1, 'realestate@gmail.com', NULL, 'Verify your email address', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</p>', 0, '2023-03-26 09:24:35', NULL, NULL, 1),
(2, 'realestate@gmail.com', NULL, 'Verify your email address', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</p>', 0, '2023-03-26 09:45:15', NULL, NULL, 1);

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
(1, 'Verify your email address', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</p>', '2023-03-26 09:02:28', 1, '2023-03-26 09:02:28', NULL, NULL, NULL),
(2, 'selection', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</p>', '2023-03-26 09:03:02', 1, '2023-03-26 09:03:02', NULL, NULL, NULL),
(3, 'Verify your email address', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.</p>', '2023-03-26 09:03:13', 1, '2023-03-26 09:03:13', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `location` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'In our latest blog post, we delve into the secrets', '<p>In our latest blog post, we delve into the secrets of effective time management,<br />\r\noffering practical tips to boost productivity and achieve work-life balanceIn our latest blog post, we delve into the secrets of effective time management,<br />\r\noffering practical tips to boost productivity and achieve work-life balanceIn our latest blog post, we delve into the secrets of effective time management,<br />\r\noffering practical tips to boost productivity and achieve work-life balanceIn our latest blog post, we delve into the secrets of effective time management,<br />\r\noffering practical tips to boost productivity and achieve work-life balance</p>', 'In our latest blog post, we delve into the secrets', '2023-06-20', '2023-06-29', '20230620053042Untitled(500×500px)(25).png', '2023-06-20 17:30:41', 1, '2023-06-20 17:30:41', NULL, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'CREATIVE DESIGN', '20230402075005sketch.png', 'Our platform offers responsive website prototyping that includes a wide range of features such as e-commerce integration, custom design options, and more, helping you create an engaging and functional online presence that meets your business needs.', '2021-08-04 02:51:51', 5, '2023-04-02 07:50:04', 16, NULL, NULL),
(2, 'EASY TO USE', '20230402075114easy.png', 'Our platform offers an easy-to-use interface that simplifies the process of designing and building high-quality websites, giving you the freedom to create online presences that truly reflect your brand.', '2021-08-04 02:54:24', 5, '2023-04-02 07:51:13', 16, NULL, NULL),
(3, 'FREE UPDATES', '20230402075227system-update.png', 'With our platform, you have the ability to customize your site for free, add advanced features, and receive daily updates on professionally designed templates - all to help you create a unique and dynamic online presence for your business.', '2021-08-04 02:56:02', 5, '2023-04-02 07:52:26', 16, NULL, NULL),
(4, 'CLEAN CODES', '20230402080649coding.png', 'We take pride in our global community of independent web designers and developers, who have created clean code Bootstrap HTML website templates that are not only visually stunning but also optimized for high performance and functionality.', '2021-08-04 02:57:23', 5, '2023-04-02 08:06:48', 16, NULL, NULL),
(5, 'FREE CUSTOMIZATION', '20230402075615customize.png', 'Our goal is to help you save time by providing a straightforward and flexible website development service. All you need to do is fill out our customization form to start the process.', '2021-08-04 03:05:13', 5, '2023-04-07 17:18:15', 16, NULL, NULL),
(6, 'BUSINESS', '20230402075942entrepreneur.png', 'With our platform, you can easily create your own website using our intuitive page builder tools, designed to help you grow your business online. Whether you need to optimize your site for SEO, integrate social media, or enhance your user experience, our platform has everything you need to succeed in the digital landscape.', '2021-08-04 03:07:59', 5, '2023-04-02 07:59:41', 16, NULL, NULL),
(7, 'LANDING PAGE EDITOR', '20230402080106landing-page.png', 'Our Visual Page Editor empowers you to edit text, images, grids, and other elements simply by dragging and dropping, without the need for coding. This makes it incredibly time-saving and user-friendly, enabling you to make changes to your website quickly and easily', '2021-08-04 03:11:19', 5, '2023-04-02 08:01:05', 16, NULL, NULL),
(8, 'EMAIL MARKETING', '20230402080251email.png', 'Our platform offers a selection of Landing pages that you can take advantage of to promote your business and website. These Landing pages are specifically designed to drive conversions and generate leads, helping you to grow your online presence and reach a wider audience.', '2021-08-04 03:14:04', 5, '2023-04-02 08:02:50', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_business`
--

CREATE TABLE `front_business` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `send_by` int(11) DEFAULT NULL COMMENT '1:support 2:user',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `message` longtext CHARACTER SET utf8 DEFAULT NULL,
  `is_read` int(11) DEFAULT 0 COMMENT '0:not read 1:read',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `project_detail` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front_business`
--

INSERT INTO `front_business` (`id`, `user_id`, `send_by`, `created_at`, `updated_at`, `deleted_at`, `message`, `is_read`, `name`, `email`, `country`, `phone`, `about`, `project_detail`) VALUES
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
(48, 54, 2, '2022-11-27 12:46:05', '2022-11-27 12:46:05', NULL, 'Admin Hi Aiden, How Are You? How Is The Project Coming Along?\n\nYou’ve Probably Used It. It’s That Very Special Tag In HTML That Allows For The White Space Within The Tags To Actually Be Honored. For Example, Four Spaces Will Actually Be Four Spaces! That’s Unlike How HTML Normally Works, Where White Space “Collapses” (The Four Spaces Will Become One). The \n Tag Is Useful Indeed.', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 16, 2, '2022-12-13 16:09:45', '2022-12-13 16:09:45', NULL, 'hi', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 16, 2, '2022-12-13 16:09:58', '2022-12-13 16:09:58', NULL, 'vijay parmar here...', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_cms`
--

CREATE TABLE `front_cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'Terms Of Use', '<ol>\r\n	<li>\r\n	<p>Introduction Welcome to our website builder website. By accessing this website, you agree to comply with these terms and conditions, which govern your use of our website. If you do not agree to these terms and conditions, you should not use our website.</p>\r\n	</li>\r\n	<li>\r\n	<p>Use of the Website You may use our website for your own personal and business purposes, subject to these terms and conditions. You may not use our website for any unlawful purpose, and you must comply with all applicable laws and regulations.</p>\r\n	</li>\r\n	<li>\r\n	<p>Intellectual Property Rights We own all the intellectual property rights in our website and its contents. You may not reproduce, copy, distribute, or otherwise use any of our website&#39;s contents without our prior written consent.</p>\r\n	</li>\r\n	<li>\r\n	<p>Limitation of Liability We are not liable for any damages or losses resulting from your use of our website, including any loss of business, revenue, profits, or data. We are also not liable for any errors or omissions in our website&#39;s contents.</p>\r\n	</li>\r\n	<li>\r\n	<p>Privacy Policy We collect and use your personal data in accordance with our Privacy Policy. By using our website, you agree to our Privacy Policy.</p>\r\n	</li>\r\n	<li>\r\n	<p>Modification of Terms and Conditions We reserve the right to modify these terms and conditions at any time without notice. Your continued use of our website after any such modification constitutes your acceptance of the modified terms and conditions.</p>\r\n	</li>\r\n	<li>\r\n	<p>Governing Law These terms and conditions are governed by and construed in accordance with the laws of [insert your country or state]. Any disputes arising out of these terms and conditions shall be resolved in the courts of [insert your country or state].</p>\r\n	</li>\r\n	<li>\r\n	<p>Termination We may terminate your access to our website at any time without notice if you breach these terms and conditions. Upon termination, you must immediately cease using our website.</p>\r\n	</li>\r\n	<li>\r\n	<p>Entire Agreement These terms and conditions constitute the entire agreement between you and us regarding your use of our website.</p>\r\n	</li>\r\n</ol>', 'terms-of-use', NULL, 5, '2023-04-01 06:14:56', NULL, NULL, NULL),
(2, 'Privacy Policy', '<p>Updated at 2023-03-12<br />\r\nwebsphare (&quot;we,&quot; &quot;our,&quot; or &quot;us&quot;) is committed to protecting your privacy. This Privacy Policy explains how your personal information is collected, used, and disclosed by websphare.</p>\r\n\r\n<p>This Privacy Policy applies to our website, www.websphare.com, and its associated subdomains (collectively, our &quot;Service&quot;). By accessing or using our Service, you signify that you have read, understood, and agree to our collection, storage, use, and disclosure of your personal information as described in this Privacy Policy and our Terms of Service.</p>\r\n\r\n<h3>Definitions and key terms</h3>\r\n\r\n<p>To help explain things as clearly as possible in this Privacy Policy, every time any of these terms are referenced, are strictly defined as:</p>\r\n\r\n<ul>\r\n	<li>Cookie: small amount of data generated by a website and saved by your web browser. It is used to identify your browser, provide analytics, remember information about you such as your language preference or login information.</li>\r\n	<li>Company: when this policy mentions &quot;Company,&quot; &quot;we,&quot; &quot;us,&quot; or &quot;our,&quot; it refers to websphare, ahmedabad that is responsible for your information under this Privacy Policy.</li>\r\n	<li>Country: where websphare or the owners/founders of websphare are based, in this case is India.</li>\r\n	<li>Customer: refers to the company, organization or person that signs up to use the websphare Service to manage the relationships with your consumers or service users.</li>\r\n	<li>Device: any internet connected device such as a phone, tablet, computer or any other device that can be used to visit websphare and use the services.</li>\r\n	<li>IP address: Every device connected to the Internet is assigned a number known as an Internet protocol (IP) address. These numbers are usually assigned in geographic blocks. An I address can often be used to identify the location from which a device is connecting to the Internet.</li>\r\n	<li>Personnel: refers to those individuals who are employed by websphare or are under contract to perform a service on behalf of one of the parties. Personal Data: any information that directly, indirectly, or in connection with other information - including a personal identification number - allows for the identification or identifiability of a natural person.</li>\r\n	<li>Service: refers to the service provided by websphare as described in the relative terms (if available) and on this platform.</li>\r\n	<li>Third-party service: refers to advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you.</li>\r\n	<li>Website: websphare&#39;s site, which can be accessed via this URL: www.websphare.com.</li>\r\n	<li>You: a person or entity that is registered with websphare to use the Services.</li>\r\n</ul>\r\n\r\n<h3>What Information Do We Collect?</h3>\r\n\r\n<p>We collect information from you when you visit our service, register, place an order, subscribe to our newsletter, respond to a survey or fill out a form.</p>\r\n\r\n<ul>\r\n	<li>Name / Username</li>\r\n	<li>Company Name</li>\r\n	<li>Email Addresses</li>\r\n	<li>Debit/credit card numbers</li>\r\n	<li>Password</li>\r\n</ul>\r\n\r\n<h3>How Do We Use The Information We Collect?</h3>\r\n\r\n<p>Any of the information we collect from you may be used in one of the following ways:</p>\r\n\r\n<ul>\r\n	<li>To personalize your experience (your information helps us to better respond to your individual needs)</li>\r\n	<li>To improve our service (we continually strive to improve our service offerings based on the information and feedback we receive from you</li>\r\n	<li>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)</li>\r\n	<li>To process transactions</li>\r\n	<li>To administer a contest, promotion, survey or other site feature</li>\r\n	<li>To send periodic emails</li>\r\n</ul>\r\n\r\n<h3>When do we use customer information from third parties?</h3>\r\n\r\n<p>We receive some information from the third parties when you contact us. For example, when you submit your email address to us to show interest in becoming our customer, we receive information from a third party that provides automated fraud detection services to us. We also occasionally collect information that is made publicly available on social media websites. You can control how much of your information social media websites make public by visiting these websites and changing your privacy settings.</p>\r\n\r\n<h3>Do we share the information we collect with third parties?</h3>\r\n\r\n<p>We may share the information that we collect, both personal and non-personal, with third parties such as advertisers, contest sponsors, promotional and marketing partners, and others who provide our content or whose products or services we think may interest you. We may also share it with our current and future affiliated companies and business partners, and if we are involved in a merger, asset sale or other business reorganization, we may also share or transfer your personal and non-personal information to our successors-in-interest.</p>\r\n\r\n<p>We may engage trusted third party service providers to perform functions and provide services to us, such as hosting and maintaining our servers and our service, database storage and management, e-mail management, storage marketing, credit card processing, customer service and fulfilling orders for products and services you may purchase through our service. We will likely share your personal information, and possibly some non-personal information, with these third parties to enable them to perform these services for us and for you.</p>\r\n\r\n<p>We may share portions of our log file data, including IP addresses, for analytics purposes with third parties such as web analytics partners, application developers, and ad networks. If your IP address is shared, it may be used to estimate general location and other technographics such as connection speed, whether you have visited the service in a shared location, and type of device used to visit the service. They may aggregate information about our advertising and what you see on the service and then provide auditing, research and reporting for us and our advertisers.</p>\r\n\r\n<p>We may also disclose personal and non-personal information about you to government or law enforcement officials or private parties as we, in our sole discretion, believe necessary or appropriate in order to respond to claims, legal process (including subpoenas), to protect our rights and interests or those of a third party, the safety of the public or any person, to prevent or stop any illegal, unethical, or legally actionable activity, or to otherwise comply with applicable court orders, laws, rules and regulations.</p>\r\n\r\n<h3>Where and when is information collected from customers and end users?</h3>\r\n\r\n<p>We will collect personal information that you submit to us. We may also receive personal information about you from third parties as described above.</p>\r\n\r\n<h3>How Do We Use Your Email Address?</h3>\r\n\r\n<p>By submitting your email address on our service, you agree to receive emails from us. You can cancel your participation in any of these email lists at any time by clicking on the opt-out link or other unsubscribe option that is included in the respective email. We only send emails to people who have authorized us to contact them, either directly, or through a third party. We do not send unsolicited commercial emails, because we hate spam as much as you do. By submitting your email address, you also agree to allow us to use your email address for customer audience targeting on sites like Facebook, where we display custom advertising to specific people who have opted-in to receive communications from us. Email addresses submitted only through the order processing page will be used for the sole purpose of sending you information and updates pertaining to your order. If, however, you have provided the same email to us through another method, we may use it for any of the purposes stated in this Policy. Note: If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email.</p>\r\n\r\n<h3>Could my information be transferred to other countries?</h3>\r\n\r\n<p>We are incorporated in India. Information collected via our website, through direct interactions with you, or from use of our help services may be transferred from time to time to our offices or personnel, or to third parties, located throughout the world, and may be viewed and hosted anywhere in the world, including countries that may not have laws of general applicability regulating the use and transfer of such data. To the fullest extent allowed by applicable law, by using any of the above, you voluntarily consent to the trans-border transfer and hosting of such information</p>\r\n\r\n<h3>Is the information collected through our service secure?</h3>\r\n\r\n<p>We take precautions to protect the security of your information. We have physical, electronic, and managerial procedures to help safeguard, prevent unauthorized access, maintain data security, and correctly use your information. However, neither people nor security systems are foolproof, including encryption systems. In addition, people can commit intentional crimes, make mistakes or fail to follow policies. Therefore, while we use reasonable efforts to protect your personal information, we cannot guarantee its absolute security. If applicable law imposes any non-disclaimable duty to protect your personal information, you agree that intentional misconduct will be the standards used to measure our compliance with that duty.</p>\r\n\r\n<h3>Can I update or correct my information?</h3>\r\n\r\n<p>The rights you have to request updates or corrections to the information we collect depend on your relationship with us. Personnel may update or correct their information as detailed in our internal company employment policies. Customers have the right to request the restriction of certain uses and disclosures of personally identifiable information as follows. You can contact us in order to (1) update or correct your personally identifiable information, (2) change your preferences with respect to communications and other information you receive from us, or (3) delete the personally identifiable information maintained about you on our systems (subject to the following paragraph), by cancelling your account. Such updates, corrections, changes and deletions will have no effect on other information that we maintain, or information that we have provided to third parties in accordance with this Privacy Policy prior to such update, correction, change or deletion. To protect your privacy and security, we may take reasonable steps (such as requesting a unique password) to verify your identity before granting you profile access or making corrections. You are responsible for maintaining the secrecy of your unique password and account information at all times. You should be aware that it is not technologically possible to remove each and every record of the information you have provided to us from our system. The need to back up our systems to protect information from inadvertent loss means that a copy of your information may exist in a non-erasable form that will be difficult or impossible for us to locate. Promptly after receiving your request, all personal information stored in databases we actively use, and other readily searchable media will be updated, corrected, changed or deleted, as appropriate, as soon as and to the extent reasonably and technically practicable. If you are an end user and wish to update, delete, or receive any information we have about you, you may do so by contacting the organization of which you are a customer.</p>\r\n\r\n<h3>Personnel</h3>\r\n\r\n<p>If you are one of our workers or applicants, we collect information you voluntarily provide to us. We use the information collected for Human Resources purposes in order to administer benefits to workers and screen applicants. You may contact us in order to (1) update or correct your information, (2) change your preferences with respect to communications and other information you receive from us, or (3) receive a record of the information we have relating to you. Such updates, corrections, changes and deletions will have no effect on other information that we maintain, or information that we have provided to third parties in accordance with this Privacy Policy prior to such update, correction, change or deletion.</p>\r\n\r\n<h3>Sale of Business</h3>\r\n\r\n<p>We reserve the right to transfer information to a third party in the event of a sale, merger or other transfer of all or substantially all of the assets of us or any of its Corporate Affiliates (as defined herein), or that portion of us or any of its Corporate Affiliates to which the Service relates, or in the event that we discontinue our business or file a petition or have filed against us a petition in bankruptcy, reorganization or similar proceeding, provided that the third party agrees to adhere to the terms of this Privacy Policy.</p>\r\n\r\n<h3>Affiliates</h3>\r\n\r\n<p>We may disclose information (including personal information) about you to our Corporate Affiliates. For purposes of this Privacy Policy, &quot;Corporate Affiliate means any person or entity which directly or indirectly controls, is controlled by or is under common control with us, whether by ownership or otherwise. Any information relating to you that we provide to our Corporate Affiliates will be treated by those Corporate Affiliates in accordance with the terms of this Privacy Policy.</p>\r\n\r\n<h3>How Long Do We Keep Your Information?</h3>\r\n\r\n<p>We keep your information only so long as we need it to provide service to you and fulfill the purposes described in this policy. This is also the case for anyone that we share your information with and who carries out services on our behalf. When we no longer need to use your information and there is no need for us to keep it to comply with our legal or regulatory obligations, we&#39;ll either remove it from our systems or depersonalize it so that we can&#39;t identify you</p>\r\n\r\n<h3>How Do We Protect Your Information?</h3>\r\n\r\n<p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible b those authorized with special access rights to such systems. and are required to keep the information confidential After a transaction, your private information (credit cards, social security numbers, financials, etc.) is never kept on file. We cannot, however, ensure or warrant the absolute security of any information you transmit to us or guarantee that your information on the Service may not be accessed, disclosed, altered, or destroyed by a breach of any of our physical, technical, or managerial safeguards.</p>\r\n\r\n<h3>Governing Law</h3>\r\n\r\n<p>The laws of India, excluding its conflicts of law rules, shall govern this Agreement and your use of our service. Your use of our service may also be subject to other local, state, national, or international laws</p>\r\n\r\n<h3>Your Consent</h3>\r\n\r\n<p>By using our service, registering an account, or making a purchase, you consent to this Privacy Policy.</p>\r\n\r\n<h3>Links to Other Websites</h3>\r\n\r\n<p>This Privacy Policy applies only to the Services. The Services may contain links to other websites not operated or controlled by us.We are not responsible for the content, accuracy or opinions expressed in such websites, and such websites are not investigated, monitored or checked for accuracy or completeness by us. Please remember that when you use a link to go from the Services to another website, our Privacy Policy is no longer in effect. Your browsing and interaction on any other website, including those that have a link on our platform, is subject to that website&#39;s own rules and policies. Such third parties may use their own cookies or other methods to collect information about you.</p>\r\n\r\n<h3>Cookies</h3>\r\n\r\n<p>We use &quot;Cookies&quot; to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to personalize the Content that you see on our website. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctlv or at all. We never place Personally Identifiable Information in Cookies</p>\r\n\r\n<h3>Advertising</h3>\r\n\r\n<p>Advertising keeps us and many of the websites and services you use free of charge. We work hard to make sure that ads are safe,unobtrusive, and as relevant as possible</p>\r\n\r\n<h3>Cookies for Advertising</h3>\r\n\r\n<p>Cookies help to make advertising more effective. Without cookies, it&#39;s really hard for an advertiser to reach its audience, or to know how many ads were shown and how many clicks they received.</p>\r\n\r\n<h3>Payment Details</h3>\r\n\r\n<p>In respect to any credit card or other payment processing details you have provided us, we commit that this confidential information willbe stored in the most secure manner possible</p>\r\n\r\n<h3>Kids&#39; Privacy</h3>\r\n\r\n<p>We collect information from kids under the age of 13 just to better our services. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data without your permission, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information trom our servers</p>\r\n\r\n<h3>Changes To Our Privacy Policy</h3>\r\n\r\n<p>If we decide to change our privacy policy, we will post those changes on this page, and/or update the Privacy Policy modification date below.</p>\r\n\r\n<h3>Third-Party Services</h3>\r\n\r\n<p>We may display, include or make available third-party content including data, information, applications and other products services) or provide links to third-party websites or services (&quot;Third- Party Services&quot;)</p>\r\n\r\n<p>You acknowledge and agree that we shall not be responsible for any Third-Party Services, including their accuracy, completeness, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect thereof. We do not assume and shall not have any liability or responsibility to vou or any other person or entity for any Third-Party Services</p>\r\n\r\n<p>Third-Party Services and links thereto are provided solely as a convenience to you and you access and use them entirely at your own risk and subject to such third parties terms and conditions</p>\r\n\r\n<h3>Tracking Technologies</h3>\r\n\r\n<ul>\r\n	<li>Google Maps APIs</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Google Maps API is a robust tool that can be used to create a custom map, a searchable map, check-in functions, display live data synching with location, plan routes, or create a mashup just to name a few.)</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Google Maps API may collect information from You and from Your Device for security purposes.3tp:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Google Maps API collects information that is held in accordance with its Privacy Policyl</p>\r\n\r\n<ul>\r\n	<li>Sessions</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;uses &quot;Sessions&quot; to identify the areas of our website that you have visited. A Session is a small piece of data stored on your computer or mobile device by your web browser.</p>\r\n\r\n<h3>Contact Us</h3>\r\n\r\n<p>Don&#39;t hesitate to contact us if you have any questions.</p>\r\n\r\n<p>&bull; Via this Link: www.websphare.com/contact-us</p>', 'privacy-policy', NULL, 5, '2023-03-19 04:56:30', NULL, NULL, NULL),
(3, 'About Us', '<h1>Who we are?</h1>\r\n\r\n<p><br />\r\nThis website is operated by the Websphare.Websphare is a set of related Internet sites and other applications for create dynemic websites, owned and operated by Websphare Pvt Ltd.&nbsp;Founded in 2023, Websphare offers web design and responsive site prototyping, including eCommerce and other design elements, and consultants serving them.</p>\r\n\r\n<p>With the official release of Websphare software in 2023, the company aims at helping all business to give&nbsp;online platform. Build thair Dynemic Website Free here. And&nbsp;Time is our most valuable asset, that&#39;s why we want to help you save it by creating simple, customizable. we can customize your website free just send a inquiry via customization form. Let&rsquo;s get your business set up in the digital space with a unique and intuitive website, a digital brand image for your physical business.</p>\r\n\r\n<p>We Are Here For Your Business. Connecting Every Dot From Design To Web Development Or Mobile App Development Is Our Claim To Fame. We&rsquo;re Your Digital Partner For Catering Bespoke Industry Equipped Solutions To Strictly Meet Your Business Requirements. Connect, Collaborate And Create Partner With Us To Work With On-Demand Agile Product Team. We Are Always Committed To Your Growth.</p>\r\n\r\n<p>Websphare is a free website builder that gives you the freedom to create the website you want. With our built-in tools, you can easily promote and grow your business online. We also offer a wide selection of professional templates to choose from so you can get started quickly and easily.</p>\r\n\r\n<p>Websphare is a website builder that helps you create beautiful websites that are perfect for businesses of all sizes. With our easy-to-use drag-and-drop builder, you can create a website in minutes, without any prior experience or design knowledge.Websphare is the perfect platform for businesses who want to grow their online presence and reach new customers. With our built-in tools, you can easily add features such as contact forms, online shopping carts, and social media integration to your website. You can also use our platform to create a blog, which is a great way to connect with your audience and share your latest news and updates.Websphare is free to use, and there are no hidden costs or monthly fees. We believe that everyone should have the opportunity to build a stunning website, without breaking the bank.So what are you waiting for? Start building your dream website today with Websphare!</p>\r\n\r\n<ul>\r\n	<li>Need support? Check our&nbsp;<a href=\"http://127.0.0.1:8000/customization\">support options</a></li>\r\n</ul>', 'about-us', NULL, 16, '2023-03-25 12:09:24', NULL, NULL, NULL),
(4, 'Frequently Asked Questions', '<h3>How can I create my dynemic&nbsp;website from websphare?</h3>\r\n\r\n<p><strong>Go to Sign up for a free website builder.&nbsp;Choose what kind of website you want to create. Check Email for websites admin panel and front website links.&nbsp;Publish your website and go live.</strong></p>\r\n\r\n<h3>Can I create all type of business website free?</h3>\r\n\r\n<p><strong>Yes, You can create all type of business website free with free customization.</strong></p>\r\n\r\n<h3>How can I&nbsp; access my website admin panel and front website?</h3>\r\n\r\n<p><strong>Please check Documentation,<a href=\"http://127.0.0.1:8000/page/faq\"> Click here...</a></strong></p>\r\n\r\n<h3>How can I edit the content of the blog and post templates and website content?</h3>\r\n\r\n<p><strong>login into admin panel and go sidebar menu. select menu, edit it and&nbsp;change any page content dynemic</strong></p>\r\n\r\n<h3>Can I add&nbsp;dynemic&nbsp;products from admin panel?</h3>\r\n\r\n<p><strong>Yes, You can add&nbsp;dynemic products, projects, services, content, promotions and many more...</strong></p>\r\n\r\n<h3>How does the promotion menu work?</h3>\r\n\r\n<p>You can promote your business using promotion page.</p>\r\n\r\n<h3>What is an addressbook? What is its purpose?</h3>\r\n\r\n<p>For sharing email templates and landing pages, you can store your customers&#39; contacts and emails.</p>\r\n\r\n<h3>How can landing pages be used?</h3>\r\n\r\n<p>Your website and business can be promoted using landing page. Just create an landing page and share it&#39;s link with people.</p>\r\n\r\n<h3>What are the benefits of email marketing? How do i use it?</h3>\r\n\r\n<p>Your website and business can be promoted using email marketing. Just create an email template and share it with people.</p>\r\n\r\n<h3>How do i use page builder menu?</h3>\r\n\r\n<p>You can create your dynemic pages and menu using page builder.</p>', 'faq', NULL, 16, '2023-03-27 17:07:47', NULL, NULL, NULL),
(5, 'Cookie Policy', '<h2>Websphare&nbsp;Cookie Policy</h2>\r\n\r\n<p>Please read this cookie policy carefully as it contains important information on who we are and how we use cookies on our website. This policy should be read together with our&nbsp;<a href=\"http://127.0.0.1:8000/page/privacy-policy\">privacy policy</a>&nbsp;which sets out how and why we collect, store, use and share personal information generally, as well as your rights in relation to your personal information and details of how to contact us and supervisory authorities if you have a complaint.</p>\r\n\r\n<h3>Who we are?</h3>\r\n\r\n<p>This website is operated by the Websphare.Websphare is a set of related Internet sites and other applications for create dynemic websites, owned and operated by Websphare Pvt Ltd.</p>', 'cookie-policy', NULL, 5, '2023-03-12 12:11:44', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_contact_us`
--

CREATE TABLE `front_contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text CHARACTER SET utf8 DEFAULT NULL,
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
  `message` text CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'suceess', NULL, NULL, NULL, '1', '2023-04-27 16:11:15', NULL, '2023-04-27 16:11:15', NULL, NULL, NULL),
(2, 'faild', NULL, NULL, NULL, '0', '2023-04-27 16:28:36', NULL, '2023-04-27 16:28:36', NULL, NULL, NULL),
(3, 'faild', NULL, NULL, NULL, '0', '2023-04-27 16:29:09', NULL, '2023-04-27 16:29:09', NULL, NULL, NULL),
(4, 'faild', NULL, NULL, NULL, NULL, '2023-04-27 16:52:39', NULL, '2023-04-27 16:52:39', NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, 'success', '2023-04-27 17:13:05', NULL, '2023-04-27 17:13:05', NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, '[]', '2023-04-27 17:26:02', NULL, '2023-04-27 17:26:02', NULL, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'Free', 'free', 0, '$0', 100, 'Yes', 2, 3, 1000, '1 Year', 365, '<ul>\r\n	<li><strong>Dynemic </strong>Website</li>\r\n	<li><strong>Admin Panel</strong></li>\r\n	<li><strong>Free </strong>Customization</li>\r\n	<li><strong>1 Year</strong> Free <strong>Tial&nbsp;</strong>Bussiness Account</li>\r\n	<li><strong>100&nbsp;</strong>Free <strong>&nbsp;</strong>Emails&nbsp;</li>\r\n	<li><strong>2 Page Builder</strong></li>\r\n</ul>', 'Start Free', '2022-08-11 15:25:17', 16, '2023-06-25 06:10:45', NULL, NULL, NULL),
(2, 'Pro', 'paid', 130, '$130', 5000, 'Yes', 5, 20, 5000, 'per year', 365, '<ul>\r\n	<li><strong>Dynemic </strong>Website</li>\r\n	<li><strong>Admin Panel</strong></li>\r\n	<li><strong>Free </strong>Customization</li>\r\n	<li><strong>Bussiness </strong>Account</li>\r\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\r\n	<li><strong>5 Page Builder</strong></li>\r\n</ul>', 'Upcomming...', '2022-08-11 15:28:34', 16, '2023-06-25 06:11:04', 16, NULL, NULL),
(3, 'Business', 'paid', 250, '$250', 10000, 'Yes', 10, 40, 10000, 'per year', 365, '<ul>\r\n	<li><strong>Dynemic </strong>Website</li>\r\n	<li><strong>Admin Panel</strong></li>\r\n	<li><strong>Free </strong>Customization</li>\r\n	<li><strong>Bussiness </strong>Account</li>\r\n	<li><strong>10000&nbsp;</strong>Emails&nbsp;</li>\r\n	<li><strong>10 Page Builder</strong></li>\r\n</ul>', 'Upcomming...', '2022-08-11 15:29:41', 16, '2023-06-25 06:11:09', 16, NULL, NULL);

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
  `title` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
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

INSERT INTO `front_slider` (`id`, `title`, `description`, `image`, `url`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Agency Websites', 'Make your own website and get built-in tools to grow your business online. Start selling online and grow your business. Click here...', '20230226115012cars-and-transportation2.png', 'http://127.0.0.1:8000/agency', '2023-02-24 16:17:27', NULL, '2023-02-26 12:46:31', NULL, NULL, NULL),
(2, 'Architecture And Building Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226061853architecture-and-building2.png', 'http://127.0.0.1:8000/architectureandbuilding', '2023-02-26 06:18:52', NULL, '2023-02-26 12:46:43', NULL, NULL, NULL),
(3, 'Art & Design Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226062211art-and-design1.png', 'http://127.0.0.1:8000/artanddesign', '2023-02-26 06:22:10', NULL, '2023-02-26 12:46:49', NULL, NULL, NULL),
(4, 'Bakery Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226083327bakery2.png', 'http://127.0.0.1:8000/bakery', '2023-02-26 08:33:26', NULL, '2023-02-26 12:46:54', NULL, NULL, NULL),
(5, 'Beautyparlour Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226083534beautyparlour2.png', 'http://127.0.0.1:8000/beautyparlour', '2023-02-26 08:35:33', NULL, '2023-02-26 12:47:00', NULL, NULL, NULL),
(6, 'Bookstore Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230409044255bookstore-1.png', 'http://127.0.0.1:8000/bookstore', '2023-02-26 08:36:49', NULL, '2023-04-09 16:42:54', NULL, NULL, NULL),
(7, 'Business Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226083902business1.png', 'http://127.0.0.1:8000/business', '2023-02-26 08:39:01', NULL, '2023-02-26 12:47:11', NULL, NULL, NULL),
(8, 'Cars And Transportation Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226084021cars-and-transportation1.png', 'http://127.0.0.1:8000/carandtransportation', '2023-02-26 08:40:20', NULL, '2023-02-26 12:47:21', NULL, NULL, NULL),
(9, 'Cloth Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230303052333cloth3.png', 'http://127.0.0.1:8000/cloth', '2023-02-26 08:42:13', NULL, '2023-03-03 17:23:32', NULL, NULL, NULL),
(10, 'Electric Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230303052405electric3.png', 'http://127.0.0.1:8000/electric', '2023-02-26 11:36:24', NULL, '2023-03-03 17:24:04', NULL, NULL, NULL),
(11, 'Event Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226115143event1.png', 'http://127.0.0.1:8000/event', '2023-02-26 11:49:21', NULL, '2023-02-26 12:47:38', NULL, NULL, NULL),
(12, 'Fashion And Beauty Websites', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115436Untitled(500×500px)(33)1.png', 'http://127.0.0.1:8000/fashion_and_beauty', '2023-02-26 11:54:35', NULL, '2023-02-26 12:48:54', NULL, NULL, NULL),
(13, 'Furniture', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226115642BigSaleFurniture(1400×390px)(2).png', 'http://127.0.0.1:8000/furniture', '2023-02-26 11:56:41', NULL, '2023-02-26 11:56:41', NULL, NULL, NULL),
(14, 'Gallery', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226115913gallery1.png', 'http://127.0.0.1:8000/gallery', '2023-02-26 11:59:12', NULL, '2023-02-26 11:59:12', NULL, NULL, NULL),
(15, 'Garage', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226120013garage2.png', 'http://127.0.0.1:8000/garage', '2023-02-26 12:00:12', NULL, '2023-02-26 12:00:12', NULL, NULL, NULL),
(16, 'Industrial', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226120127industrial2.png', 'http://127.0.0.1:8000/industrial', '2023-02-26 12:01:26', NULL, '2023-02-26 12:01:41', NULL, NULL, NULL),
(17, 'Interior', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226120249interior1.png', 'http://127.0.0.1:8000/interior', '2023-02-26 12:02:48', NULL, '2023-02-26 12:02:48', NULL, NULL, NULL),
(18, 'Jewellery', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226120531jewellery2.png', 'http://127.0.0.1:8000/jewellery', '2023-02-26 12:04:53', NULL, '2023-02-26 12:05:30', NULL, NULL, NULL),
(19, 'Mobile', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226120835mobile1.png', 'http://127.0.0.1:8000/mobile', '2023-02-26 12:08:34', NULL, '2023-02-26 12:08:34', NULL, NULL, NULL),
(20, 'Music And Entertainment', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226121023music-and-entertainment2.png', 'http://127.0.0.1:8000/musicandentertainment', '2023-02-26 12:10:22', NULL, '2023-02-26 12:10:22', NULL, NULL, NULL),
(21, 'Photography', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226121206photography2.png', 'http://127.0.0.1:8000/photograpy', '2023-02-26 12:12:05', NULL, '2023-02-26 12:12:05', NULL, NULL, NULL),
(22, 'Realestate', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226121519Untitled(1400×390px).png', 'http://127.0.0.1:8000/realestate', '2023-02-26 12:13:20', NULL, '2023-02-26 12:15:18', NULL, NULL, NULL),
(23, 'Saloon', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226121633saloon2.png', 'http://127.0.0.1:8000/saloon', '2023-02-26 12:16:32', NULL, '2023-02-26 12:16:32', NULL, NULL, NULL),
(24, 'Shoes', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226122022Untitled(1400×390px)(1).png', 'http://127.0.0.1:8000/shoes', '2023-02-26 12:20:21', NULL, '2023-02-26 12:20:21', NULL, NULL, NULL),
(25, 'Studio', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226122632studio2.png', 'http://127.0.0.1:8000/studio', '2023-02-26 12:25:38', NULL, '2023-02-26 12:26:31', NULL, NULL, NULL),
(26, 'Technology', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226124014garage1.png', 'http://127.0.0.1:8000/technology', '2023-02-26 12:40:13', NULL, '2023-02-26 12:40:39', NULL, NULL, NULL),
(27, 'Online Watch Websites', '<p>Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.</p>', '20230226124440Websphare(1400×390px).png', 'http://127.0.0.1:8000/watch', '2023-02-26 12:44:15', NULL, '2023-02-26 12:46:08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_system`
--

CREATE TABLE `front_system` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'INTRODUCING WEB', '20230402080956introduction.png', '<p>Create a dynamic website for your business for free and take your online presence to the next level with our platform, helping you grow your business.</p>', '2021-08-01 16:09:10', 5, '2023-04-02 08:09:55', 16, NULL, NULL),
(2, 'USER FRIENDLY INTERFACE', '20230402081407social-media.png', '<p>Our website provides a user-friendly interface, ensuring an intuitive and hassle-free experience for all users.</p>', '2021-08-01 16:17:48', 5, '2023-04-02 08:14:06', 16, NULL, NULL),
(3, 'BUILD THE WEB EVERYONE LOVE', '20230402074756ux.png', '<p>Take control of your online store and unlock its full potential with our platform, empowering you to manage, promote, and grow your business online while providing you with the freedom to create the website you want.</p>', '2021-08-01 16:18:19', 5, '2023-04-02 07:47:55', 16, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `image` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `preview` text CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'Agency', 'agency', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115052cars-and-transportation4.png', 'agency', 'http://127.0.0.1:8000/agency', '2023-02-26 06:01:29', NULL, '2023-02-26 11:50:51', NULL, NULL, NULL),
(2, 'Architecture And Building', 'architectureandbuilding', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226061759architecture-and-building4.png', 'architecture-and-building', 'http://127.0.0.1:8000/architectureandbuilding', '2023-02-26 06:17:58', NULL, '2023-02-26 06:17:58', NULL, NULL, NULL),
(3, 'Art And Design', 'artanddesign', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226062345art-and-design2.png', 'art-and-design', 'http://127.0.0.1:8000/artanddesign', '2023-02-26 06:23:44', NULL, '2023-02-26 06:23:44', NULL, NULL, NULL),
(4, 'Bakery', '', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226083242bakery4.png', 'bakery', 'http://127.0.0.1:8000/bakery', '2023-02-26 08:32:06', NULL, '2023-02-26 08:32:41', NULL, NULL, NULL),
(5, 'Beautyparlour', '-1', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226083510beautyparlour4.png', 'beautyparlour', 'http://127.0.0.1:8000/beautyparlour', '2023-02-26 08:35:09', NULL, '2023-02-26 08:35:09', NULL, NULL, NULL),
(6, 'Bookstore', '-2', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226083630bookstore3.png', 'bookstore', 'http://127.0.0.1:8000/bookstore', '2023-02-26 08:36:29', NULL, '2023-02-26 08:36:29', NULL, NULL, NULL),
(7, 'Business', '-3', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226083813business3.png', 'business', 'http://127.0.0.1:8000/business', '2023-02-26 08:37:57', NULL, '2023-02-26 08:38:12', NULL, NULL, NULL),
(8, 'Cars And Transportation', '-4', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115042cars-and-transportation3.png', 'cars-and-transportation', 'http://127.0.0.1:8000/carandtransportation', '2023-02-26 08:39:50', NULL, '2023-02-26 11:50:41', NULL, NULL, NULL),
(9, 'Cloth', '-5', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226084157cloth3.png', 'cloth', 'http://127.0.0.1:8000/cloth', '2023-02-26 08:41:56', NULL, '2023-02-26 08:41:56', NULL, NULL, NULL),
(10, 'Electric', '-6', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230303052655technology4.png', 'electric', 'http://127.0.0.1:8000/electric', '2023-02-26 08:45:58', NULL, '2023-03-03 17:26:54', NULL, NULL, NULL),
(11, 'Event', '-7', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115155event4.png', 'event', 'http://127.0.0.1:8000/event', '2023-02-26 11:48:52', NULL, '2023-02-26 11:51:54', NULL, NULL, NULL),
(12, 'Fashion And Beauty', '-8', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115747fashion-and-beauty4.png', 'fashion-and-beauty', 'http://127.0.0.1:8000/fashionandbeauty', '2023-02-26 11:53:51', NULL, '2023-02-26 11:57:46', NULL, NULL, NULL),
(13, 'Furniture', '-9', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115727furniture2.png', 'furniture', 'http://127.0.0.1:8000/furniture', '2023-02-26 11:55:51', NULL, '2023-02-26 11:57:26', NULL, NULL, NULL),
(14, 'Gallery', '-10', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115853gallery2.png', 'gallery', 'http://127.0.0.1:8000/gallery', '2023-02-26 11:58:52', NULL, '2023-02-26 11:58:52', NULL, NULL, NULL),
(15, 'Garage', '-11', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226115956garage4.png', 'garage', 'http://127.0.0.1:8000/garage', '2023-02-26 11:59:55', NULL, '2023-02-26 11:59:55', NULL, NULL, NULL),
(16, 'Industrial', '-12', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226120109industrial3.png', 'industrial', 'http://127.0.0.1:8000/industrial', '2023-02-26 12:01:08', NULL, '2023-02-26 12:01:08', NULL, NULL, NULL),
(17, 'Interior', '-13', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226120305interior4.png', 'interior', 'http://127.0.0.1:8000/interior', '2023-02-26 12:02:31', NULL, '2023-02-26 12:03:04', NULL, NULL, NULL),
(18, 'Jewellery', '-14', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226120433Untitled(500×500px)(12).png', 'jewellery', 'http://127.0.0.1:8000/jewellery', '2023-02-26 12:04:32', NULL, '2023-02-26 12:04:32', NULL, NULL, NULL),
(19, 'Mobile', '-15', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226120809mobile2.png', 'mobile', 'http://127.0.0.1:8000/mobile', '2023-02-26 12:08:08', NULL, '2023-02-26 12:08:08', NULL, NULL, NULL),
(20, 'Music And Entertainment', '-16', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226120958music-and-entertainment3.png', 'music-and-entertainment', 'http://127.0.0.1:8000/musicandentertainment', '2023-02-26 12:09:57', NULL, '2023-02-26 12:09:57', NULL, NULL, NULL),
(21, 'Photography', '-17', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226121124Untitled(500×500px)(8).png', 'photography', 'http://127.0.0.1:8000/photography', '2023-02-26 12:11:23', NULL, '2023-02-26 12:11:23', NULL, NULL, NULL),
(22, 'Realestate', '-18', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226121302realestate4.png', 'realestate', 'http://127.0.0.1:8000/realestate', '2023-02-26 12:12:48', NULL, '2023-02-26 12:13:01', NULL, NULL, NULL),
(23, 'Saloon', '-19', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226121613saloon4.png', 'saloon', 'http://127.0.0.1:8000/saloon', '2023-02-26 12:16:12', NULL, '2023-02-26 12:16:12', NULL, NULL, NULL),
(24, 'Shoes', '-20', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226121937Untitled(500×500px)(15).png', 'shoes', 'http://127.0.0.1:8000/shoes', '2023-02-26 12:17:44', NULL, '2023-02-26 12:19:36', NULL, NULL, NULL),
(25, 'Studio', '-21', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226122513Untitled(500×500px)(3).png', 'studio', 'http://127.0.0.1:8000/studio', '2023-02-26 12:23:44', NULL, '2023-02-26 12:25:12', NULL, NULL, NULL),
(26, 'Technology', '-22', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230303052802technology3.png', 'technology', 'http://127.0.0.1:8000/technology', '2023-02-26 12:39:27', NULL, '2023-03-03 17:28:01', NULL, NULL, NULL),
(27, 'Watch', '-23', 'Professional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.\r\nProfessional templates. Responsive, fully customizable with easy Drag-n-Drop Nicepage editor. Adjust colors, fonts, header and footer, layout and other design elements, as well as content and images.', '20230226124303Websphare(500×500px)(23).png', 'watch', 'http://127.0.0.1:8000/watch', '2023-02-26 12:41:25', NULL, '2023-02-26 12:43:02', NULL, NULL, NULL);

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
(1, '20230302053946Untitled(500×500px)(13).png', '2023-03-02 17:39:45', 1, '2023-03-02 17:39:45', NULL, NULL, NULL),
(2, '20230302053946Untitled(500×500px)(14).png', '2023-03-02 17:39:45', 1, '2023-03-02 17:40:39', NULL, '2023-03-02 17:40:39', NULL),
(3, '20230302053947Untitled(500×500px)(15).png', '2023-03-02 17:39:46', 1, '2023-03-02 17:39:46', NULL, NULL, NULL),
(4, '20230302053948Untitled(500×500px)(16).png', '2023-03-02 17:39:47', 1, '2023-03-02 17:39:47', NULL, NULL, NULL),
(5, '20230302053949Untitled(500×500px)(18).png', '2023-03-02 17:39:48', 1, '2023-03-02 17:39:48', NULL, NULL, NULL),
(6, '20230302053949Untitled(500×500px)(21).png', '2023-03-02 17:39:48', 1, '2023-03-02 17:39:48', NULL, NULL, NULL),
(7, '20230302054013Untitled(500×500px)(15).png', '2023-03-02 17:40:12', 1, '2023-03-02 17:40:12', NULL, NULL, NULL),
(8, '20230303045554Untitled(500×500px)(13).png', '2023-03-03 16:55:53', 1, '2023-03-03 16:55:53', NULL, NULL, NULL),
(9, '20230303045555Untitled(500×500px)(15).png', '2023-03-03 16:55:54', 1, '2023-03-03 16:55:54', NULL, NULL, NULL),
(10, '20230303045555Untitled(500×500px)(16).png', '2023-03-03 16:55:54', 1, '2023-03-03 16:55:54', NULL, NULL, NULL),
(11, '20230303045555Untitled(500×500px)(18).png', '2023-03-03 16:55:54', 1, '2023-03-03 16:55:54', NULL, NULL, NULL),
(12, '20230303045608Untitled(500×500px)(1).png', '2023-03-03 16:56:07', 1, '2023-03-03 16:56:07', NULL, NULL, NULL),
(13, '20230303045608Untitled(500×500px)(2).png', '2023-03-03 16:56:07', 1, '2023-03-03 16:56:07', NULL, NULL, NULL),
(14, '20230305032518Websphare(500×500px)(5).png', '2023-03-05 03:25:17', 5, '2023-05-27 13:18:25', NULL, '2023-05-27 13:18:25', NULL),
(15, '20230305032519Websphare(500×500px)(6).png', '2023-03-05 03:25:18', 5, '2023-05-27 13:18:27', NULL, '2023-05-27 13:18:27', NULL),
(16, '20230305032519Websphare(500×500px)(7).png', '2023-03-05 03:25:18', 5, '2023-05-27 13:18:29', NULL, '2023-05-27 13:18:29', NULL),
(17, '20230305032520Websphare(500×500px)(8).png', '2023-03-05 03:25:19', 5, '2023-05-27 13:18:31', NULL, '2023-05-27 13:18:31', NULL),
(18, '20230305032520Websphare(500×500px)(9).png', '2023-03-05 03:25:19', 5, '2023-05-27 13:18:33', NULL, '2023-05-27 13:18:33', NULL),
(19, '20230305032521Websphare(500×500px)(10).png', '2023-03-05 03:25:20', 5, '2023-05-27 13:18:36', NULL, '2023-05-27 13:18:36', NULL),
(20, '20230305032522Websphare(500×500px)(11).png', '2023-03-05 03:25:21', 5, '2023-05-27 13:18:38', NULL, '2023-05-27 13:18:38', NULL),
(21, '20230305032522Websphare(500×500px)(12).png', '2023-03-05 03:25:21', 5, '2023-05-27 13:18:40', NULL, '2023-05-27 13:18:40', NULL),
(22, '20230305032523Websphare(500×500px)(13).png', '2023-03-05 03:25:22', 5, '2023-05-27 13:18:42', NULL, '2023-05-27 13:18:42', NULL),
(23, '20230305032523Websphare(500×500px)(14).png', '2023-03-05 03:25:22', 5, '2023-05-27 13:18:44', NULL, '2023-05-27 13:18:44', NULL),
(24, '2023042706373920210619013854Makeup_PC._V275175115_.jpg', '2023-04-27 18:37:38', 5, '2023-04-27 18:55:57', NULL, '2023-04-27 18:55:57', NULL),
(25, '20230427063759architecture-and-building4.png', '2023-04-27 18:37:58', 5, '2023-04-27 18:55:29', NULL, '2023-04-27 18:55:29', NULL),
(26, '202305270119142021060511102507.jpg', '2023-05-27 13:19:13', 5, '2023-05-27 13:19:13', NULL, NULL, NULL),
(27, '202305270119142021060511100608.jpg', '2023-05-27 13:19:13', 5, '2023-05-27 13:19:13', NULL, NULL, NULL),
(28, '202305270119142021060511236001.jpg', '2023-05-27 13:19:13', 5, '2023-05-27 13:19:13', NULL, NULL, NULL),
(29, '202305270119152021060511280402.jpg', '2023-05-27 13:19:14', 5, '2023-05-27 13:19:14', NULL, NULL, NULL),
(30, '202305270119152021060511281604.jpg', '2023-05-27 13:19:14', 5, '2023-05-27 13:19:14', NULL, NULL, NULL),
(31, '202305270119152021060607056001.jpg', '2023-05-27 13:19:14', 5, '2023-05-27 13:19:14', NULL, NULL, NULL),
(32, '202305270119162021060607061002.jpg', '2023-05-27 13:19:15', 5, '2023-05-27 13:19:15', NULL, NULL, NULL),
(33, '202305270119162022031208115520210605110833full.jpg', '2023-05-27 13:19:15', 5, '2023-05-27 13:19:15', NULL, NULL, NULL),
(34, '2023052701191620220313060543202203130600262021060606263601.jpg', '2023-05-27 13:19:15', 5, '2023-05-27 13:19:15', NULL, NULL, NULL),
(35, '202305270119172022031306061520220313055718202203120812302021052311223405.jpg', '2023-05-27 13:19:16', 5, '2023-05-27 13:19:16', NULL, NULL, NULL);

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
(1, 'test', 1, '2023-03-26 05:54:47', 1, '2023-03-26 05:54:47', NULL, NULL, NULL),
(2, 'sfsdffdsfdfsdf', 1, '2023-03-26 06:00:01', 1, '2023-03-26 06:00:01', NULL, NULL, NULL),
(3, 'The Second Treat', 1, '2023-03-26 09:24:27', 1, '2023-03-26 09:24:27', NULL, NULL, NULL);

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
(1, 3, 1, '2023-03-26 09:24:27', 1, NULL, NULL, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'vvvv', 'vvvvasdsad', 'http://agency.websphare.com/landing-page/vvvvasdsad', 1, '<h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; color: rgb(51, 51, 51);\">Who we are?</h1><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\"><br>This website is operated by the Websphare.Websphare is a set of related Internet sites and other applications for create dynemic websites, owned and operated by Websphare Pvt Ltd. Founded in 2023, Websphare offers web design and responsive site prototyping, including eCommerce and other design elements, and consultants serving them.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">With the official release of Websphare software in 2023, the company aims at helping all business to give online platform. Build thair Dynemic Website Free here. And Time is our most valuable asset, that\'s why we want to help you save it by creating simple, customizable. we can customize your website free just send a inquiry via customization form. Let’s get your business set up in the digital space with a unique and intuitive website, a digital brand image for your physical business.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">We Are Here For Your Business. Connecting Every Dot From Design To Web Development Or Mobile App Development Is Our Claim To Fame. We’re Your Digital Partner For Catering Bespoke Industry Equipped Solutions To Strictly Meet Your Business Requirements. Connect, Collaborate And Create Partner With Us To Work With On-Demand Agile Product Team. We Are Always Committed To Your Growth.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">Websphare is a free website builder that gives you the freedom to create the website you want. With our built-in tools, you can easily promote and grow your business online. We also offer a wide selection of professional templates to choose from so you can get started quickly and easily.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">Websphare is a website builder that helps you create beautiful websites that are perfect for businesses of all sizes. With our easy-to-use drag-and-drop builder, you can create a website in minutes, without any prior experience or design knowledge.Websphare is the perfect platform for businesses who want to grow their online presence and reach new customers. With our built-in tools, you can easily add features such as contact forms, online shopping carts, and social media integration to your website. You can also use our platform to create a blog, which is a great way to connect with your audience and share your latest news and updates.Websphare is free to use, and there are no hidden costs or monthly fees. We believe that everyone should have the opportunity to build a stunning website, without breaking the bank.So what are you waiting for? Start building your dream website today with Websphare!</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\"><img src=\"http://www.websphare.com/uploads/summernotes/20230326110240studio2.png\" style=\"width: 100%;\"><br></p>', '2023-03-20 16:11:23', 1, '2023-05-21 08:28:45', 1, NULL, NULL),
(2, 'tesst', 'tesst', 'http://agency.websphare.com/landing-page/tesst', 0, '<p><img src=\"http://www.websphare.com/uploads/summernotes/20230508050526agency3.png\" style=\"width: 279.688px; height: 279.688px;\"><img src=\"http://www.websphare.com/uploads/summernotes/20230508050640agency3.png\" style=\"width: 278.088px; height: 278.088px; float: left;\" class=\"note-float-left\"><img src=\"http://www.websphare.com/uploads/summernotes/20230508050617agency3.png\" style=\"width: 279.688px; height: 279.688px; float: left;\" class=\"note-float-left\"><img src=\"http://www.websphare.com/uploads/summernotes/20230508050536agency3.png\" style=\"height: 279.688px; float: left;\" class=\"note-float-left\"><br></p>', '2023-05-08 05:06:58', 1, '2023-05-08 05:06:58', NULL, NULL, NULL),
(3, 'asda', 'asdsad', 'http://agency.websphare.com/landing-page/asdsad', 0, '<p><img src=\"http://www.websphare.com/uploads/summernotes/20230508061451agency3.png\" style=\"width: 286.087px; height: 286.087px;\"><img src=\"http://www.websphare.com/uploads/summernotes/20230508061504agency3.png\" style=\"width: 287.087px; height: 287.087px; float: left;\" class=\"note-float-left\"><br></p>', '2023-05-08 06:15:24', 1, '2023-05-08 06:15:24', NULL, NULL, NULL);

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 3, 1, 'The Second Treat', '<p>asda</p>', '2023050704351801.jpg', NULL, NULL, '2023-05-07 04:35:17', 1, '2023-06-20 18:04:16', NULL, '2023-06-20 18:04:16', NULL, '200'),
(2, 3, 1, 'The Second Treat', '<p>The Second Treat</p>', '20230620060401Untitled(500×500px)(7).png', NULL, NULL, '2023-06-20 18:04:00', 1, '2023-06-20 18:04:00', NULL, NULL, NULL, '20'),
(3, 7, 3, 'boAt Xtend/Xtend RTL Smartwatch', '<p>Our innovative project aims to streamline operations,<br />\r\nincrease efficiency, and drive significant cost savings for your business</p>', '20230620060702Untitled(500×500px)(10).png', NULL, NULL, '2023-06-20 18:07:01', 5, '2023-06-20 18:10:37', 5, NULL, NULL, '20');

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
(1, 'App\\Models\\User', 12),
(1, 'App\\Models\\User', 13),
(1, 'App\\Models\\User', 14),
(1, 'App\\Models\\User', 16),
(1, 'App\\Models\\User', 17),
(1, 'App\\Models\\User', 18),
(1, 'App\\Models\\User', 19),
(1, 'App\\Models\\User', 20),
(1, 'App\\Models\\User', 22),
(1, 'App\\Models\\User', 24),
(1, 'App\\Models\\User', 27),
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
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 25),
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
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 48),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 47),
(5, 'App\\Models\\User', 51),
(6, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 27),
(6, 'App\\Models\\User', 28),
(7, 'App\\Models\\User', 6),
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
(26, 'App\\Models\\User', 35),
(27, 'App\\Models\\User', 5),
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
  `mobile_image` text CHARACTER SET utf8 DEFAULT NULL,
  `electric_image` text DEFAULT NULL,
  `product_image` text CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_brand` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `area` longtext CHARACTER SET utf8 DEFAULT NULL,
  `landmark` longtext CHARACTER SET utf8 DEFAULT NULL,
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

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `product_type`, `product_id`, `product_name`, `mobile_image`, `electric_image`, `product_image`, `price`, `product_description`, `product_category`, `product_brand`, `quantity`, `name`, `mobile`, `email`, `pincode`, `company`, `area`, `landmark`, `city`, `state`, `currency_symbol`, `currency_code`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `status`) VALUES
(1, '43011186244984824', 5, 'product', 21, 'Noise Pulse Go Buzz Bluetooth Calling Smart Watch', NULL, NULL, '20230305032108Untitled(500×500px)(22)1.png', 200, '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', 'Fire-Boltt Phoenix Smart Watch', NULL, '1', 'The Second Treat', '9879831413', 'realestate@gmail.com', '380060', 'safadd', 'asdasd', 'asdas', 'ahmedabad', 'asdasda', NULL, NULL, '2023-06-24 04:51:08', NULL, '2023-06-24 05:21:14', NULL, NULL, NULL, 1),
(2, '63413144422838346', 5, 'product', 21, 'Noise Pulse Go Buzz Bluetooth Calling Smart Watch', NULL, NULL, '20230305032108Untitled(500×500px)(22)1.png', 200, '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', 'Fire-Boltt Phoenix Smart Watch', NULL, '1', 'vijay parmar', '9904625253', 'vijayparmar11096@gmail.com', '380060', 'B-302 Celistial Living, Sciencesity road,Sola , Ahmedabad ,380013', 'Kalharexotica', 'Kalharexotica', 'Ahmedabad', 'Gujrat', NULL, NULL, '2023-06-24 05:01:02', NULL, '2023-06-24 05:32:46', NULL, '2023-06-24 05:32:46', NULL, 2),
(3, '35516063724097000', 5, 'product', 15, 'boAt Wave Call Smart Watch, Smart Talk with Advanced Dedicated Bluetooth Calling Chip, 1.69 HD Display', NULL, NULL, '20230305032006Untitled(500×500px)(29)1.png', 9000, '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', 'boAt Wave Call Smart', NULL, '1', 'The Second Treat', '9879831413', 'realestate@gmail.com', '380060', 'safadd', 'asdasd', 'asdas', 'ahmedabad', 'asdasda', NULL, NULL, '2023-06-24 10:56:35', NULL, '2023-06-24 10:56:35', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` text CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'The Second Treat', 'realestate@gmail.com', '1800454646', NULL, '20230620125907Untitled(500×500px)(7).png', '2023-06-18 05:21:18', 1, '2023-06-20 12:59:06', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_builder`
--

CREATE TABLE `page_builder` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `url_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `reposition` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_builder`
--

INSERT INTO `page_builder` (`id`, `title`, `name`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `url_name`, `url`, `reposition`) VALUES
(1, 'Design', NULL, '<h1 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(51, 51, 51);\">Who we are?</h1><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><br>This website is operated by the Websphare.Websphare is a set of related Internet sites and other applications for create dynemic websites, owned and operated by Websphare Pvt Ltd.&nbsp;Founded in 2023, Websphare offers web design and responsive site prototyping, including eCommerce and other design elements, and consultants serving them.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">With the official release of Websphare software in 2023, the company aims at helping all business to give&nbsp;online platform. Build thair Dynemic Website Free here. And&nbsp;Time is our most valuable asset, that\'s why we want to help you save it by creating simple, customizable. we can customize your website free just send a inquiry via customization form. Let’s get your business set up in the digital space with a unique and intuitive website, a digital brand image for your physical business.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">We Are Here For Your Business. Connecting Every Dot From Design To Web Development Or Mobile App Development Is Our Claim To Fame. We’re Your Digital Partner For Catering Bespoke Industry Equipped Solutions To Strictly Meet Your Business Requirements. Connect, Collaborate And Create Partner With Us To Work With On-Demand Agile Product Team. We Are Always Committed To Your Growth.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Websphare is a free website builder that gives you the freedom to create the website you want. With our built-in tools, you can easily promote and grow your business online. We also offer a wide selection of professional templates to choose from so you can get started quickly and easily.</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">Websphare is a website builder that helps you create beautiful websites that are perfect for businesses of all sizes. With our easy-to-use drag-and-drop builder, you can create a website in minutes, without any prior experience or design knowledge.Websphare is the perfect platform for businesses who want to grow their online presence and reach new customers. With our built-in tools, you can easily add features such as contact forms, online shopping carts, and social media integration to your website. You can also use our platform to create a blog, which is a great way to connect with your audience and share your latest news and updates.Websphare is free to use, and there are no hidden costs or monthly fees. We believe that everyone should have the opportunity to build a stunning website, without breaking the bank.So what are you waiting for? Start building your dream website today with Websphare!</p><p style=\"margin-bottom: 20px; color: rgb(80, 80, 80); font-size: 14px; letter-spacing: 0.5px; line-height: 2; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><img src=\"http://www.websphare.com/uploads/summernotes/20230326110240studio2.png\" style=\"width: 100%;\"><br></p>', '2023-05-10 07:27:02', 1, '2023-05-21 05:30:04', NULL, NULL, NULL, 'design', 'http://agency.websphare.com/page/design', 3),
(2, 'dsa', NULL, 'asdasdsad', '2023-05-20 06:38:45', 1, '2023-05-21 05:30:04', NULL, NULL, NULL, 'dsadddsadd', 'http://agency.websphare.com/page/dsadddsadd', 1),
(3, 'Sasa', NULL, 'SSAsS', '2023-05-20 08:07:25', 1, '2023-05-21 05:30:04', NULL, NULL, NULL, 'aSAsaS', 'http://agency.websphare.com/page/aSAsaS', 2),
(4, 'a', NULL, 'a', '2023-05-20 08:10:11', 1, '2023-05-21 05:30:04', NULL, NULL, NULL, 'asss', 'http://agency.websphare.com/page/asss', 5),
(5, 'wwwwww', NULL, 'wwwwww', '2023-05-20 08:12:05', 1, '2023-05-21 05:30:04', NULL, NULL, NULL, 'sdadsad', 'http://agency.websphare.com/page/sdadsad', 4),
(6, 'sdda', NULL, '<span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: center;\">Unlock the potential of your online business with a free, dynamic website. Access a suite of built-in tools that effortlessly expand your online presence and drive growth. Experience the power of digital success today.</span>', '2023-05-20 10:25:12', 5, '2023-06-28 17:03:03', NULL, NULL, NULL, 'dasdsada', 'http://watch.websphare.com/page/dasdsada', 1);

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
('vijayparmar11096@gmail.com', '$2y$10$DmNgT9fpb12UA2UCrRUZO.Fx9wUJckPw3v7jHWUZcfwINkHAQXRYi', '2023-03-08 13:08:15');

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
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 8, 'asdsad', '20230618051350Untitled(500×500px)(1).png', '2023-05-07 04:41:58', 1, '2023-06-18 05:13:49', 1, NULL, NULL),
(2, 3, 'industry\'s standard dummy', '20230618051403Untitled(500×500px)(7).png', '2023-06-18 05:14:02', 1, '2023-06-18 05:14:02', NULL, NULL, NULL),
(3, 1, 'industry\'s standard dummy', '20230618051444Untitled(500×500px)(21).png', '2023-06-18 05:14:43', 1, '2023-06-18 05:14:43', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'The Second Treat', '<p>dsadsadsad</p>', '20230620124858Untitled(500×500px)(9).png', NULL, NULL, '2023-05-07 04:30:54', 1, '2023-06-20 12:48:57', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 3, 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', '<p>Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz. Standard diopter :-2.5 - +0.5m-1 (dpt);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</p>\r\n\r\n<p>Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</p>', '20230504053756Untitled(500×500px)(19)1.png', '20230305030801Untitled(500×500px)(9).png', NULL, '2023-03-05 03:08:00', 1, '2023-05-06 05:14:54', 1, NULL, NULL, '37490'),
(2, 1, 'Quantum QHM-7406 Full-Sized Keyboard', '<p>PLUG &amp; PLAY CONNECT: Easy to connect with your laptop or PC. The keyboard has a long wire with a USB cable that connects instantly without any lags. Absolutely stable transmission.</p>\r\n\r\n<p>BOLD AND SLEEK DESIGN: The matte-black keyboard has an ergonomic design with an extremely durable body. It&rsquo;s also lightweight and easy to carry around. It&rsquo;s designed in a way to keep your hand in a restful typing position.</p>\r\n\r\n<p>NOISELESS KEYS: The keyboard has soft-touch keys which go all the way down when pressed. Moreover, it doesn&rsquo;t create any sound while typing, enabling you to work without creating any disturbance.</p>\r\n\r\n<p>HOTKEYS FOR SPECIAL FUNCTIONS: The hotkeys help you to perform special operations like multimedia actions, shortcuts, manoeuvering, etc.</p>', '20230504053805Untitled(500×500px)(21)1.png', '20230305031030Untitled(500×500px)(13).png', NULL, '2023-03-05 03:10:29', 1, '2023-05-04 17:38:04', 1, NULL, NULL, '600'),
(3, 3, 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', '<p>Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz. Standard diopter :-2.5 - +0.5m-1 (dpt);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</p>\r\n\r\n<p>Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</p>', '20230504053815Untitled(500×500px)(28)1.png', '20230305030801Untitled(500×500px)(9).png', NULL, '2023-03-05 03:08:00', 1, '2023-05-04 17:38:14', 1, NULL, NULL, '37490'),
(4, 1, 'Quantum QHM-7406 Full-Sized Keyboard', '<p>PLUG &amp; PLAY CONNECT: Easy to connect with your laptop or PC. The keyboard has a long wire with a USB cable that connects instantly without any lags. Absolutely stable transmission.</p>\r\n\r\n<p>BOLD AND SLEEK DESIGN: The matte-black keyboard has an ergonomic design with an extremely durable body. It&rsquo;s also lightweight and easy to carry around. It&rsquo;s designed in a way to keep your hand in a restful typing position.</p>\r\n\r\n<p>NOISELESS KEYS: The keyboard has soft-touch keys which go all the way down when pressed. Moreover, it doesn&rsquo;t create any sound while typing, enabling you to work without creating any disturbance.</p>\r\n\r\n<p>HOTKEYS FOR SPECIAL FUNCTIONS: The hotkeys help you to perform special operations like multimedia actions, shortcuts, manoeuvering, etc.</p>', '20230504053825Untitled(500×500px)(29)1.png', '20230305031030Untitled(500×500px)(13).png', NULL, '2023-03-05 03:10:29', 1, '2023-05-04 17:38:24', 1, NULL, NULL, '600'),
(5, 3, 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', '<p>Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz. Standard diopter :-2.5 - +0.5m-1 (dpt);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</p>\r\n\r\n<p>Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</p>', '20230504053834Untitled(500×500px)(27)1.png', '20230305030801Untitled(500×500px)(9).png', NULL, '2023-03-05 03:08:00', 1, '2023-05-04 17:38:33', 1, NULL, NULL, '37490'),
(6, 1, 'Quantum QHM-7406 Full-Sized Keyboard', '<p>PLUG &amp; PLAY CONNECT: Easy to connect with your laptop or PC. The keyboard has a long wire with a USB cable that connects instantly without any lags. Absolutely stable transmission.</p>\r\n\r\n<p>BOLD AND SLEEK DESIGN: The matte-black keyboard has an ergonomic design with an extremely durable body. It&rsquo;s also lightweight and easy to carry around. It&rsquo;s designed in a way to keep your hand in a restful typing position.</p>\r\n\r\n<p>NOISELESS KEYS: The keyboard has soft-touch keys which go all the way down when pressed. Moreover, it doesn&rsquo;t create any sound while typing, enabling you to work without creating any disturbance.</p>\r\n\r\n<p>HOTKEYS FOR SPECIAL FUNCTIONS: The hotkeys help you to perform special operations like multimedia actions, shortcuts, manoeuvering, etc.</p>', '20230504053844Untitled(500×500px)(15)1.png', '20230305031030Untitled(500×500px)(13).png', NULL, '2023-03-05 03:10:29', 1, '2023-05-04 17:38:43', 1, NULL, NULL, '600'),
(7, 3, 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', '<p>Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz. Standard diopter :-2.5 - +0.5m-1 (dpt);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</p>\r\n\r\n<p>Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</p>', '20230504053901Untitled(500×500px)(20)1.png', '20230305030801Untitled(500×500px)(9).png', NULL, '2023-03-05 03:08:00', 1, '2023-05-04 17:39:00', 1, NULL, NULL, '37490'),
(8, 1, 'Quantum QHM-7406 Full-Sized Keyboard', '<p>PLUG &amp; PLAY CONNECT: Easy to connect with your laptop or PC. The keyboard has a long wire with a USB cable that connects instantly without any lags. Absolutely stable transmission.</p>\r\n\r\n<p>BOLD AND SLEEK DESIGN: The matte-black keyboard has an ergonomic design with an extremely durable body. It&rsquo;s also lightweight and easy to carry around. It&rsquo;s designed in a way to keep your hand in a restful typing position.</p>\r\n\r\n<p>NOISELESS KEYS: The keyboard has soft-touch keys which go all the way down when pressed. Moreover, it doesn&rsquo;t create any sound while typing, enabling you to work without creating any disturbance.</p>\r\n\r\n<p>HOTKEYS FOR SPECIAL FUNCTIONS: The hotkeys help you to perform special operations like multimedia actions, shortcuts, manoeuvering, etc.</p>', '20230504053909Untitled(500×500px)(21)1.png', '20230305031030Untitled(500×500px)(13).png', NULL, '2023-03-05 03:10:29', 1, '2023-05-04 17:39:08', 1, NULL, NULL, '600'),
(9, 3, 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', '<p>Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz. Standard diopter :-2.5 - +0.5m-1 (dpt);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light)</p>\r\n\r\n<p>Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work)</p>', '20230504053928Untitled(500×500px)(25)1.png', '20230305030801Untitled(500×500px)(9).png', NULL, '2023-03-05 03:08:00', 1, '2023-05-04 17:39:27', 1, NULL, NULL, '37490'),
(10, 1, 'Quantum QHM-7406 Full-Sized Keyboard', '<p>PLUG &amp; PLAY CONNECT: Easy to connect with your laptop or PC. The keyboard has a long wire with a USB cable that connects instantly without any lags. Absolutely stable transmission.</p>\r\n\r\n<p>BOLD AND SLEEK DESIGN: The matte-black keyboard has an ergonomic design with an extremely durable body. It&rsquo;s also lightweight and easy to carry around. It&rsquo;s designed in a way to keep your hand in a restful typing position.</p>\r\n\r\n<p>NOISELESS KEYS: The keyboard has soft-touch keys which go all the way down when pressed. Moreover, it doesn&rsquo;t create any sound while typing, enabling you to work without creating any disturbance.</p>\r\n\r\n<p>HOTKEYS FOR SPECIAL FUNCTIONS: The hotkeys help you to perform special operations like multimedia actions, shortcuts, manoeuvering, etc.</p>', '20230504053919Untitled(500×500px)(18)1.png', '20230305031030Untitled(500×500px)(13).png', NULL, '2023-03-05 03:10:29', 1, '2023-05-04 17:39:18', 1, NULL, NULL, '600'),
(11, 5, 'boAt Wave Call Smart Watch, Smart Talk with Advanced Dedicated Bluetooth Calling Chip, 1.69 HD Display', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '2023042706551620221225063234Untitled(500×500px)(2).png', '20230305032006Untitled(500×500px)(25)1.png', NULL, '2023-03-05 03:20:05', 5, '2023-04-27 18:55:15', 5, NULL, NULL, '9000'),
(12, 4, 'boAt Wave Call Smart Watch, Smart Talk with', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032044Untitled(500×500px)(19)1.png', '20230305032044Untitled(500×500px)(21)1.png', NULL, '2023-03-05 03:20:43', 5, '2023-03-05 03:20:43', NULL, NULL, NULL, '200'),
(13, 7, 'Noise Pulse Go Buzz Bluetooth Calling Smart Watch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032108Untitled(500×500px)(22)1.png', '20230305032108Untitled(500×500px)(23)1.png', NULL, '2023-03-05 03:21:07', 5, '2023-03-05 03:21:07', NULL, NULL, NULL, '200'),
(14, 6, 'boAt Xtend/Xtend RTL Smartwatch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032143Untitled(500×500px)(27)1.png', '20230305032143Untitled(500×500px)(15)1.png', NULL, '2023-03-05 03:21:42', 5, '2023-03-05 03:21:42', NULL, NULL, NULL, '200'),
(15, 5, 'boAt Wave Call Smart Watch, Smart Talk with Advanced Dedicated Bluetooth Calling Chip, 1.69 HD Display', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032006Untitled(500×500px)(29)1.png', '20230305032006Untitled(500×500px)(25)1.png', NULL, '2023-03-05 03:20:05', 5, '2023-03-05 03:20:05', NULL, NULL, NULL, '9000'),
(16, 4, 'boAt Wave Call Smart Watch, Smart Talk with', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032044Untitled(500×500px)(19)1.png', '20230305032044Untitled(500×500px)(21)1.png', NULL, '2023-03-05 03:20:43', 5, '2023-03-05 03:20:43', NULL, NULL, NULL, '200'),
(17, 7, 'Noise Pulse Go Buzz Bluetooth Calling Smart Watch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032108Untitled(500×500px)(22)1.png', '20230305032108Untitled(500×500px)(23)1.png', NULL, '2023-03-05 03:21:07', 5, '2023-03-05 03:21:07', NULL, NULL, NULL, '200'),
(18, 6, 'boAt Xtend/Xtend RTL Smartwatch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032143Untitled(500×500px)(27)1.png', '20230305032143Untitled(500×500px)(15)1.png', NULL, '2023-03-05 03:21:42', 5, '2023-03-05 03:21:42', NULL, NULL, NULL, '200'),
(19, 5, 'boAt Wave Call Smart Watch, Smart Talk with Advanced Dedicated Bluetooth Calling Chip, 1.69 HD Display', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032006Untitled(500×500px)(29)1.png', '20230305032006Untitled(500×500px)(25)1.png', NULL, '2023-03-05 03:20:05', 5, '2023-03-05 03:20:05', NULL, NULL, NULL, '9000'),
(20, 4, 'boAt Wave Call Smart Watch, Smart Talk with', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032044Untitled(500×500px)(19)1.png', '20230305032044Untitled(500×500px)(21)1.png', NULL, '2023-03-05 03:20:43', 5, '2023-03-05 03:20:43', NULL, NULL, NULL, '200'),
(21, 7, 'Noise Pulse Go Buzz Bluetooth Calling Smart Watch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032108Untitled(500×500px)(22)1.png', '20230305032108Untitled(500×500px)(23)1.png', NULL, '2023-03-05 03:21:07', 5, '2023-03-05 03:21:07', NULL, NULL, NULL, '200'),
(22, 6, 'boAt Xtend/Xtend RTL Smartwatch', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Resolution- With 550 nits of brightness get sharper color resolution that brightens your virtual world exponentially.</p>\r\n\r\n<p>Design- The ultra slim and lightweight design of the watch is ideal to keep you surfing your wave all day!</p>', '20230305032143Untitled(500×500px)(27)1.png', '20230305032143Untitled(500×500px)(15)1.png', NULL, '2023-03-05 03:21:42', 5, '2023-03-05 03:21:42', NULL, NULL, NULL, '200');

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
(1, 3, 'Web design and responsive site', '<p>Web design and responsive site prototyping, including eCommerce and other design elements&nbsp;</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Web design and responsive site prototyping, including eCommerce and other design elements&nbsp;</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060936062021060511102507.jpg', '20230506051910Untitled(500×500px)(20)1.png', NULL, '2023-03-02 17:27:45', 1, '2023-05-06 09:36:05', 1, NULL, NULL),
(2, 2, 'website builder', '<p>Web design and responsive site prototyping, including eCommerce and other design elements&nbsp;</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060936332021060511100608.jpg', NULL, NULL, '2023-03-02 17:29:32', 1, '2023-05-06 09:36:32', 1, NULL, NULL),
(3, 1, 'Build your Dynemic Free here', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060936242021060511280402.jpg', NULL, NULL, '2023-03-02 17:30:09', 1, '2023-05-06 09:36:23', 1, NULL, NULL),
(4, 3, 'The Freedom to Create the Website', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060936432021060511281604.jpg', NULL, NULL, '2023-03-02 17:31:14', 1, '2023-05-06 09:36:42', 1, NULL, NULL),
(5, 3, 'Web design and responsive site', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '2023050609381020210605110833full.jpg', NULL, NULL, '2023-03-02 17:27:45', 1, '2023-05-06 09:38:09', 1, NULL, NULL),
(6, 2, 'website builder', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060938202021060511281604.jpg', NULL, NULL, '2023-03-02 17:29:32', 1, '2023-05-06 09:38:19', 1, NULL, NULL),
(7, 1, 'Build your Dynemic Free here', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060938302022031306051820220313055718202203120812302021052311220608.jpg', NULL, NULL, '2023-03-02 17:30:09', 1, '2023-05-06 09:38:29', 1, NULL, NULL),
(8, 3, 'The Freedom to Create the Website', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060938412022031306061520220313055718202203120812302021052311223405.jpg', NULL, NULL, '2023-03-02 17:31:14', 1, '2023-05-06 09:38:40', 1, NULL, NULL),
(9, 3, 'Web design and responsive site', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060938522021060607061002.jpg', NULL, NULL, '2023-03-02 17:27:45', 1, '2023-05-06 09:38:51', 1, NULL, NULL),
(10, 2, 'website builder', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060939022021060511102507.jpg', NULL, NULL, '2023-03-02 17:29:32', 1, '2023-05-06 09:39:01', 1, NULL, NULL),
(11, 1, 'Build your Dynemic Free here', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060942022021052311220608.jpg', NULL, NULL, '2023-03-02 17:30:09', 1, '2023-05-06 09:42:01', 1, NULL, NULL),
(12, 3, 'The Freedom to Create the Website', '<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>\r\n\r\n<p>Bluetooth Calling- Wave Call comes with a premium built-in speaker and bluetooth calling via which you can stay connected to your friends, family, and colleaguesDial Pad- Its dial pad is super responsive and convenient. You can also save upto 10 contacts in this smart watch</p>\r\n\r\n<p>Screen Size- Wave Call comes with a 1.69&rdquo; HD Display that features a bold, bright, and highly responsive 2.5D curved touch interface</p>', '202305060942132021060607061002.jpg', NULL, NULL, '2023-03-02 17:31:14', 1, '2023-05-06 09:42:12', 1, NULL, NULL);

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
(1, 'Introducing Web', '2023-03-02 17:19:40', 1, '2023-03-02 17:19:40', NULL, NULL, NULL, NULL),
(2, 'UserFriendly Interface', '2023-03-02 17:20:46', 1, '2023-03-02 17:20:46', NULL, NULL, NULL, NULL),
(3, 'Build The Web Everyone Love', '2023-03-02 17:23:22', 1, '2023-03-02 17:23:22', NULL, NULL, NULL, NULL),
(4, 'Creative Desigin', '2023-03-02 17:24:47', 1, '2023-03-02 17:24:47', NULL, NULL, NULL, NULL);

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
(1, '<p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p><img src=\"http://127.0.0.1:8000/uploads/summernotes/20230303050801Untitled(500×500px)(13).png\" style=\"width: 25%;\"><img src=\"http://127.0.0.1:8000/uploads/summernotes/20230303050812Untitled(500×500px)(15).png\" style=\"width: 25%;\">&nbsp;<img src=\"http://127.0.0.1:8000/uploads/summernotes/20230303050833Untitled(500×500px)(21).png\" style=\"width: 25%;\"></p><p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p>After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p>Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p>Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p>', '2023-03-03 17:01:22', 1, '2023-03-03 17:18:57', NULL, NULL, NULL),
(2, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">After seeing an increased need for ecommerce solutions, we developed one of the only fully-featured, free and commission-free online store builders. As our global userbase grew, we expanded our editor with the ability to make multilingual websites.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Our team started in the web hosting industry. After a few years, we discovered there were too many challenges to making a website. Traditional web hosting services were complicated and expensive to manage.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, Arial, &quot;sans-serif&quot;; font-size: 14px;\">Seeing a need for simplicity, the Website.com site builder was born. We wanted to offer a website building platform that would require no coding skills or design experience, with everything needed to get published online. You can simply focus on creating an amazing website that reflects your brand.</p>', '2023-03-06 16:54:17', 5, '2023-03-06 16:54:17', NULL, NULL, NULL);

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
  `remaining_emails` int(11) DEFAULT NULL,
  `used_landing_page` int(11) DEFAULT NULL,
  `used_page_builder` int(11) DEFAULT NULL,
  `used_address_book` int(11) DEFAULT NULL,
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

INSERT INTO `purchase_plan` (`id`, `user_id`, `plan_id`, `plan_name`, `plan_type`, `price`, `price_text`, `no_of_emails`, `page_builder`, `no_of_page_builder`, `no_of_landing_page`, `no_of_address_book`, `remaining_emails`, `used_landing_page`, `used_page_builder`, `used_address_book`, `description`, `start_date`, `expiry_date`, `duration`, `duration_in_days`, `created_by`, `created_at`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 2, 'Pro', 'paid', 100, '$100', 5000, 'Yes', 30, 30, 5000, 400, 5, 9, 600, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2023-03-03', '2024-03-02', 'per year', 365, 1, '2023-03-03 16:59:29', '2023-05-08 07:19:54', NULL, NULL, NULL),
(2, 5, 2, 'Pro', 'paid', 100, '$100', 5000, 'Yes', 30, 30, 5000, 400, 5, 9, 2000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2023-03-06', '2024-03-05', 'per year', 365, 5, '2023-03-06 16:54:02', '2023-05-20 10:24:13', NULL, NULL, NULL);

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
(1, 1, 2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2023-03-03', '2024-03-02', 'per year', 365, 1, '2023-03-03 16:59:29', '2023-03-03 16:59:29', NULL, NULL, NULL),
(2, 5, 2, 'Pro', 'paid', 100, '$100', 5000, 'No', 0, 30, 5000, '<ul>\n	<li><strong>Dynemic </strong>Website</li>\n	<li><strong>Free </strong>Customization</li>\n	<li><strong>Bussiness </strong>Account</li>\n	<li><strong>5000&nbsp;</strong>Emails&nbsp;</li>\n	<li><strong><s>Page Builder</s></strong></li>\n</ul>', '2023-03-06', '2024-03-05', 'per year', 365, 5, '2023-03-06 16:54:02', '2023-03-06 16:54:02', NULL, NULL, NULL),
(3, 1, NULL, 'Top Up', NULL, 10, NULL, NULL, 'Yes', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-05-08 07:19:54', '2023-05-08 07:19:54', NULL, NULL, NULL),
(4, 5, NULL, 'Top Up', NULL, 10, NULL, NULL, 'Yes', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2023-05-20 10:24:13', '2023-05-20 10:24:13', NULL, NULL, NULL);

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
(29, 1),
(29, 22),
(29, 27);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
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
(1, 'Creative Design', '<p>Web design and responsive site prototyping, including eCommerce and other design elements</p>', '2023-03-02 17:35:32', 1, '2023-03-02 17:35:32', NULL, NULL, NULL),
(2, 'EasyTo Use', '<p>The Freedom to Create the Websites You Want,Design and build your own high-quality websites.</p>', '2023-03-02 17:36:26', 1, '2023-03-02 17:36:26', NULL, NULL, NULL),
(3, 'Free Updates', '<p>Customize your site free, Add advanced features,Professionally Designed Website Templates daily updates.</p>', '2023-03-02 17:36:55', 1, '2023-03-02 17:36:55', NULL, NULL, NULL),
(4, 'Clean Codes', '<p>clean code Bootstrap 4 HTML website templates. All created by our Global Community of independent Web Designers and Developers</p>', '2023-03-02 17:37:31', 1, '2023-03-02 17:37:31', NULL, NULL, NULL),
(5, 'Free Customization', '<p>Time is our most valuable asset, that&#39;s why we want to help you save it by creating simple, customizable. we can customize your website free just send a inquiry via customization form.</p>', '2023-03-02 17:38:20', 1, '2023-03-02 17:38:20', NULL, NULL, NULL),
(6, 'Bussiness', '<p>Make your own website and get built-in tools to grow your business online. Start selling online and grow your business</p>', '2023-03-02 17:38:56', 1, '2023-03-02 17:38:56', NULL, NULL, NULL),
(7, 'INTRODUCING WEB', '<p>Build your Dynemic Free here. Make your own website and get built-in tools to grow your business online.</p>', '2023-03-05 03:26:57', 5, '2023-03-05 03:26:57', NULL, NULL, NULL),
(8, 'USER FRIENDLY INTERFAC', '<p>Sign up for a free website builder.&nbsp;Choose what kind of website you want to create. Publish your website and go live.&nbsp;Start building your professional online presence</p>', '2023-03-05 03:27:09', 5, '2023-03-05 03:27:09', NULL, NULL, NULL),
(9, 'BUILD THE WEB EVERYONE LOVE', '<p>The Freedom to Create the Website You Want. Make your online store. Manage, Promote and Grow Your Business Online.</p>', '2023-03-05 03:27:20', 5, '2023-03-05 03:27:20', NULL, NULL, NULL),
(10, 'CREATIVE DESIGN', '<p>Web design and responsive site prototyping, including eCommerce and other design elements</p>', '2023-03-05 03:27:34', 5, '2023-03-05 03:27:34', NULL, NULL, NULL),
(11, 'EASY TO USE', '<p>The Freedom to Create the Websites You Want,Design and build your own high-quality websites.</p>', '2023-03-05 03:27:47', 5, '2023-03-05 03:27:47', NULL, NULL, NULL),
(12, 'FREE UPDATES', '<p>Customize your site free, Add advanced features,Professionally Designed Website Templates daily updates.</p>', '2023-03-05 03:28:05', 5, '2023-03-05 03:28:05', NULL, NULL, NULL);

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
  `footer_about_us` text DEFAULT NULL,
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

INSERT INTO `site_settings` (`id`, `title`, `site_logo`, `fav_icon`, `currency_id`, `footer_about_us`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'websphare', '20230430045126logo.svg', '20230430045126favicon.svg', 47, 'Our platform provides the tools and resources you need to manage, promote, and grow your business online, helping you reach a wider audience and achieve your business goals. Our platform provides the tools and resources you need to manage, promote, and grow your business online, helping you reach a wider audience and achieve your business goals.the tools and resources you need to manage, promote, and grow your business online, helping you reach a wider audience and achieve your business goals', '2023-04-30 04:51:25', 5, '2023-04-30 05:02:11', 5, NULL, NULL),
(2, 'web', '20230504052943logo.png', '20230504052949favicon.png', 20, 'web', '2023-05-04 17:24:44', 1, '2023-05-04 17:29:49', 1, NULL, NULL);

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
(1, '2023052701165920230506011220bg2.jpg', '2023-03-05 03:28:30', 5, '2023-05-27 13:16:58', 5, NULL, NULL),
(2, '20230305032838hello@reallygreatsite.com(1500×600px)(1).png', '2023-03-05 03:28:37', 5, '2023-03-05 03:29:41', NULL, '2023-03-05 03:29:41', NULL),
(3, '20230305032844hello@reallygreatsite.com(1500×600px)11.png', '2023-03-05 03:28:43', 5, '2023-03-05 03:29:39', NULL, '2023-03-05 03:29:39', NULL),
(4, '20230506092217bg1.jpg', '2023-03-06 16:57:52', 1, '2023-05-06 09:22:16', 1, NULL, NULL),
(5, '2023052701164420230506092217bg1.jpg', '2023-04-30 05:10:13', 5, '2023-05-27 13:16:43', 5, NULL, NULL),
(6, '20230506011220bg2.jpg', '2023-05-06 13:12:19', 1, '2023-05-06 13:12:19', NULL, NULL, NULL);

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
(1, 5, 'The Second Treat', '2023-06-24 09:15:24', 5, '2023-06-24 09:15:24', NULL, NULL, NULL);

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
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'company site name',
  `page_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Page'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `email`, `email_verified_at`, `email_verified`, `password`, `remember_token`, `created_at`, `updated_at`, `site`, `title`, `site_name`, `page_name`) VALUES
(1, 'agency', NULL, 'agency@gmail.com', NULL, 1, '$2y$10$O.ZFd/VX9LBu/8/k685ZIu5eUboJqrl2dHjAMVRSDYSYzxmL2Pp3.', NULL, '2023-02-26 00:13:14', '2023-05-20 00:41:48', NULL, 'agency', 'industrial', 'Technologiesaa'),
(2, 'architecture-and-building', NULL, 'architecture-and-building@gmail.com', NULL, 0, '$2y$10$j/tCznqQyH0Y3MZQtc421eQwtEHo8LsIy4OmVHjv4SkdOlftXF3Pu', NULL, '2023-02-26 00:46:15', '2023-02-26 00:46:15', NULL, 'architectureandbuilding', 'architecture-and-building', NULL),
(3, 'art-and-design', NULL, 'art-and-design@gmail.com', NULL, 0, '$2y$10$ep0IKtWfR/OcA1mpwOR23u3DcFGStSsSF1jlyZ9/og15kWIU1NEP.', NULL, '2023-02-26 00:51:37', '2023-02-26 00:51:37', NULL, 'artanddesign', 'art-and-design', NULL),
(4, 'bakery', NULL, 'bakery@gmail.com', NULL, 0, '$2y$10$GGDDSfd5QKaEr2Tw0F/XHOo/FdXcsCaz.hkCKFnS5M/KpGoKVCzfS', NULL, '2023-02-26 03:01:08', '2023-02-26 03:01:08', NULL, 'bakery', 'bakery', NULL),
(5, 'watch', NULL, 'watch@gmail.com', NULL, 1, '$2y$10$O.ZFd/VX9LBu/8/k685ZIu5eUboJqrl2dHjAMVRSDYSYzxmL2Pp3.', NULL, '2023-03-04 21:45:35', '2023-06-28 11:32:46', NULL, 'watch', 'fashion-and-beauty', 'Techonlogy1'),
(6, 'business', NULL, 'vijayp11armar11096@gmail.com', NULL, 0, '$2y$10$XqYBbnZ..SBcMKAh9k7POONrynJh8aSirYF6du9mpD/BSMvd4s4Ba', NULL, '2023-03-08 11:33:02', '2023-03-08 11:33:02', NULL, 'business', 'business', NULL),
(7, 'business1', NULL, 'vija11yparmar11096@gmail.com', NULL, 1, '$2y$10$UBpS1CIatiXCc2HtSCFQe.ZE6AmVulFktZ9WuL35iRQE37RbRcdHK', NULL, '2023-03-08 13:17:34', '2023-03-08 13:46:11', NULL, 'business1', 'business', NULL),
(8, 'bakery1', NULL, 'vijayparmar11096socet@gmail.com', NULL, 1, '$2y$10$bJAhRfAyJsebKx3qLvvGpeN3hGisnbJ.xquBhWywBAbhQozUrPS4q', NULL, '2023-03-08 13:43:46', '2023-03-08 13:49:40', NULL, 'bakery1', 'bakery', NULL),
(9, 'test', NULL, 'website@yopmail.com', NULL, 0, '$2y$10$/FVEeX8hm2rfDe1zFXNbw.qcIJjdEaj1EGCA6Kky8ZM.LxAA7aZmC', NULL, '2023-03-09 11:51:08', '2023-03-09 11:51:08', NULL, 'test', 'architecture-and-building', NULL),
(10, 'artanddesign1', NULL, 'artanddesign1@gmail.com', NULL, 0, '$2y$10$ue5a/iYNeWs6y6jocyuOhu7JTkrTUDI4Lkqo4jrUZbogneexcNIWS', NULL, '2023-03-09 11:58:00', '2023-03-09 11:58:00', NULL, 'artanddesign1', 'art-and-design', NULL),
(11, 'silveroak', NULL, 'dsddsad', NULL, 1, '$2y$10$HL73tSvrvAQVQ.zNxTHBue6bjMvhlpelDN0IZYPPjZ0F7sKe/HPIC', NULL, '2023-03-25 05:49:02', '2023-03-25 05:57:16', NULL, 'silveroak', 'architecture-and-building', NULL),
(12, 'adsdsaasd', NULL, 'vijaypasasdsadarmar11096@gmail.com', NULL, 1, '$2y$10$S/CRQ6M6pBdfmRcTQciWbeFFAqcg6pkkox.D0nzE2Ou.YH3agKN4C', NULL, '2023-03-25 05:54:59', '2023-03-25 06:06:54', NULL, 'sadfsadadsad', 'agency', NULL),
(13, 'asdasdsad', NULL, 'asdsadsadasd@gmail.com', NULL, 0, '$2y$10$DB.gxBnoWzNL2dBvHvEvIOX6WPssbQWtLccAjk5tnTwVdKUVQ/mom', NULL, '2023-04-27 10:37:49', '2023-04-27 10:37:49', NULL, 'dasdsadasd', 'agency', NULL),
(14, 'asdsad', NULL, 'sadsad@gmail.com', NULL, 0, '$2y$10$WF/q96V5gAKKu0LUKTwjB.z.CS9U5USaXS4tvVzwt6CZCklGj3Q2O', NULL, '2023-04-27 10:40:20', '2023-04-27 10:40:20', NULL, 'adssadad', 'agency', NULL),
(15, 'adssada', NULL, 'sadsaddd@gmail.com', NULL, 0, '$2y$10$JARBbgH40eXzsOCeH9yPg.5bewYvFl7Q12gKM4XUe6syCXJovxAyi', NULL, '2023-04-27 10:41:08', '2023-04-27 10:41:08', NULL, 'adsad', 'architecture-and-building', NULL),
(16, 'asdsad', NULL, 'asdsadd@gmail.com', NULL, 0, '$2y$10$vjjB6CdlqX5/k5pZhSOQ0OcKVhRGLWPT3xAiWvL6r7Idd2pKazxv2', NULL, '2023-04-27 10:52:34', '2023-04-27 10:52:34', NULL, 'asdsa', 'agency', NULL),
(17, 'asdasd', NULL, 'asdsad@gmail.com', NULL, 0, '$2y$10$EMfvdzJrE13LmhuxcHHSaef0cqHwd0zwABBfqb4ovPqBChXlW3Rqy', NULL, '2023-04-27 10:58:29', '2023-04-27 10:58:29', NULL, 'dsad', 'agency', NULL),
(18, 'sadsad', NULL, 'vijaasdsayparmar11096@gmail.com', NULL, 0, '$2y$10$NkK7.eirefCPLjVvD9KCtO9lca/yBQRKPAk697WlCs3oKfKIRc68q', NULL, '2023-04-27 10:59:03', '2023-04-27 10:59:03', NULL, 'zxcxdc', 'agency', NULL),
(19, 'asdsadsa', NULL, 'sadsadsad@gmail.com', NULL, 0, '$2y$10$aqloqobSA4HaC7xVBdXQYOwY4O1VKJRRZ7bRjz/r./neAzk3WgE1O', NULL, '2023-04-27 11:00:55', '2023-04-27 11:00:55', NULL, 'sadsad', 'agency', NULL),
(20, 'asdasd', NULL, 'ssasdadsad@gmail.com', NULL, 0, '$2y$10$iU2qtZ.60a8WXVM320Nng.AW13Ebek.atXFyUQ5yp7LDp24TjIZhu', NULL, '2023-04-27 11:02:59', '2023-04-27 11:02:59', NULL, 'asdsad', 'agency', NULL),
(21, 'asdsad', NULL, 'asdasdsasad@gmail.com', NULL, 0, '$2y$10$77TJWOS5GjDU.EYZo070keKAO1hBZJ1nBqKmXW010HSXmp3Q80LTO', NULL, '2023-04-27 11:05:53', '2023-04-27 11:05:53', NULL, 'asdsadad', 'architecture-and-building', NULL),
(22, 'dsfdsfds', NULL, 'sdfsdf@gmail.com', NULL, 0, '$2y$10$XIQGgzfROQZSVcEkqkJD4uMOKiQlD8SzWkGE6V6UP9QuMRC.mQH2K', NULL, '2023-04-27 11:09:53', '2023-04-27 11:09:53', NULL, 'fdsfdsf', 'agency', NULL),
(23, 'sadsadsa', NULL, 'sadseqwad@gmail.com', NULL, 0, '$2y$10$xB76k2kAucsC2lhubQnQsOsRACzVNOnhQjniGH2OIvxAl3LbQUZPO', NULL, '2023-04-27 11:17:54', '2023-04-27 11:17:54', NULL, 'dsadsa', 'architecture-and-building', NULL),
(24, 'sadsad', NULL, 'sadsadsadsad@gmail.com', NULL, 0, '$2y$10$SE9khqCWS4VGjQgtom6OdOkGwyHVzL3ZLfk8b8b.WtoW28Qk4My.K', NULL, '2023-04-27 11:22:34', '2023-04-27 11:22:34', NULL, 'dasd', 'agency', NULL),
(25, 'czcxc', NULL, 'zcxzczc@gmail.com', NULL, 0, '$2y$10$BgucuYjcaJhNtVXs5AY9Ae1hUvHn8.aqgsXorhzcVSGWJ6UcQh6T6', NULL, '2023-04-27 11:33:52', '2023-04-27 11:33:52', NULL, 'zxczxc', 'architecture-and-building', NULL),
(26, 'dasd', NULL, 'asdasdfsf@gmail.com', NULL, 0, '$2y$10$yPVTfSp6VyUURd1EPvYpo.HybdjqtvJCtFYWjpvR2aJP7HVEPqWRG', NULL, '2023-04-27 11:34:33', '2023-04-27 11:34:33', NULL, 'adsasd', 'art-and-design', NULL),
(27, 'dsfds', NULL, 'dsfdsfsfsdf@gmail.com', NULL, 0, '$2y$10$Yh1uHHFeZPVxGKVu8SKbhOT5YhrF2pO7nvgyajTwesDWmM.AK8JEa', NULL, '2023-04-27 11:35:47', '2023-04-27 11:35:47', NULL, 'dsfdsf', 'agency', NULL),
(28, 'zxcxzc', NULL, 'zxcxzcxzc@gmail.com', NULL, 0, '$2y$10$vCmW5iFCmnuQJYbgddHYL.ly5xQ5v7Nf5YFGXZ3I6.LPShdMVGJ7W', NULL, '2023-04-27 11:42:58', '2023-04-27 11:42:58', NULL, 'cxzczc', 'agency', NULL),
(29, 'aSAAaS', NULL, 'SAsaSAsa@GMAIL.COM', NULL, 0, '$2y$10$0mRiGBc5Idkx677K4Z5y8uB3Ypkc7uUOQ3pxoltwfMBP6fMOQ3IFu', NULL, '2023-04-27 11:55:10', '2023-04-27 11:55:10', NULL, 'saas', 'architecture-and-building', NULL),
(30, 'zXzX', NULL, 'zxzXZXZX@gmail.com', NULL, 0, '$2y$10$ewbm3Q0EdBqsIKi0SswQ7OJcxu0Dzytd7at/LVri3/yW2exZLFeUa', NULL, '2023-04-27 11:55:55', '2023-04-27 11:55:55', NULL, 'xzxxzx', 'architecture-and-building', NULL),
(31, 'sfsf', NULL, 'sdfsdd@gmail.com', NULL, 0, '$2y$10$UxDcq7ZcgPfyFmYf1LS6S.6C6x1DcklWQC7CK3Dni8B3PlcM/fY9G', NULL, '2023-04-27 12:01:20', '2023-04-27 12:01:20', NULL, 'fdsdsd', 'agency', NULL),
(33, 'sfsfsfs', 'fsdfsfd', 'dsdsadasaas@gmail.com', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, 'Page'),
(34, 'vvvv', NULL, 'vvvv@gmail.com', NULL, 0, '$2y$10$qeMWlr5Ihap0dQpL4U2f.OuPBHWyD/K5gnshPsmOUT4Iv0ho8OPJC', NULL, '2023-05-27 07:30:27', '2023-05-27 07:30:27', NULL, 'vvvv', 'architecture-and-building', 'Page'),
(35, 'technology', NULL, 'technology@gmail.com', NULL, 0, '$2y$10$Zdor6TveTuNzZ9oUN9BadOaoekojB.bUz8zLL0vY0k1mIUzYJCru6', NULL, '2023-06-17 06:12:27', '2023-06-17 06:12:27', NULL, 'technology', 'technology', 'Page');

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
-- Indexes for table `customization`
--
ALTER TABLE `customization`
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
-- Indexes for table `front_business`
--
ALTER TABLE `front_business`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_site_settings`
--
ALTER TABLE `admin_site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_inquiry`
--
ALTER TABLE `contact_us_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `electric`
--
ALTER TABLE `electric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails_broadcast`
--
ALTER TABLE `emails_broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_marketing`
--
ALTER TABLE `email_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `front_business`
--
ALTER TABLE `front_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `front_cms`
--
ALTER TABLE `front_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `front_contact_us`
--
ALTER TABLE `front_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_contact_us_inquiry`
--
ALTER TABLE `front_contact_us_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_data`
--
ALTER TABLE `group_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `landing_page_emails`
--
ALTER TABLE `landing_page_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_builder`
--
ALTER TABLE `page_builder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_shoots`
--
ALTER TABLE `photo_shoots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_plan`
--
ALTER TABLE `purchase_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_plan_history`
--
ALTER TABLE `purchase_plan_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
