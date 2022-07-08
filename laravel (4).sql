-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 07:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
(16, 'jams', 'jams@gmail.com', '1234567890', '2021-08-08 15:32:50', 5, NULL, NULL, NULL, NULL);

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
  `landing_page_email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_site_settings`
--

INSERT INTO `admin_site_settings` (`id`, `fav_icon`, `site_logo`, `title`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `landing_page_email`) VALUES
(1, '20210502073723Seawood.png-sundial_0.png', '20210502073747extended-logo.png', 'Helios Watch Store', NULL, NULL, NULL, NULL, NULL, NULL, 'Hi {{USER_NAME}},\r\n\r\nBrowse our selection of Landing page and promote your business and website.\r\n\r\nOur Landing Page is link here {{LANDING_PAGE_LINK}}\r\n\r\nThank you.');

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
(1, 'WHEEL BALL BEARING KIT', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived n</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived n</p>', '20210918124737p4.jpg', '2021-09-18 12:47:36', 8, '2021-09-18 12:47:36', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category_fk` int(11) DEFAULT NULL,
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
(1, 'OOPO', '2021-06-19 15:54:38', 3, '2021-06-19 15:54:38', NULL, NULL, NULL),
(2, 'VIVO', '2021-06-19 15:54:47', 3, '2021-06-19 15:54:47', NULL, NULL, NULL);

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
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Steamer & Massager Equipment', '2021-06-19 13:32:03', 1, '2021-06-19 13:33:25', 1, NULL, NULL),
(2, 'Hair Trimmers & Shavers', '2021-06-19 13:32:46', 1, '2021-06-19 13:33:38', 1, NULL, NULL),
(3, 'Beauty Parlour Chair', '2021-06-19 13:33:50', 1, '2021-06-19 13:33:50', NULL, NULL, NULL),
(4, 'Beauty Salon Equipment', '2021-06-19 13:34:05', 1, '2021-06-19 13:34:05', NULL, NULL, NULL),
(5, 'Wires & Cables', '2021-06-19 13:51:00', 2, '2021-06-19 13:51:00', NULL, NULL, NULL),
(6, 'Switches & MCBS', '2021-06-19 13:51:15', 2, '2021-06-19 13:51:15', NULL, NULL, NULL),
(7, 'FANs & Water Heaters', '2021-06-19 13:51:26', 2, '2021-06-19 13:51:26', NULL, NULL, NULL),
(8, 'Lighting', '2021-06-19 13:51:44', 2, '2021-06-19 13:51:44', NULL, NULL, NULL),
(9, 'Appliances', '2021-06-19 13:52:08', 2, '2021-06-19 13:52:08', NULL, NULL, NULL),
(10, 'Home Automation', '2021-06-19 13:52:27', 2, '2021-06-19 13:52:27', NULL, NULL, NULL),
(11, 'Android', '2021-06-19 15:57:03', 3, '2021-06-19 15:57:03', NULL, NULL, NULL),
(12, 'Iphone', '2021-06-19 15:57:10', 3, '2021-06-19 15:57:10', NULL, NULL, NULL),
(13, 'Microsoft', '2021-06-19 15:57:21', 3, '2021-06-19 15:57:21', NULL, NULL, NULL),
(14, 'Ferrari Speedracer Analog', '2021-06-19 16:10:33', 4, '2021-06-19 16:10:33', NULL, NULL, NULL),
(15, 'Ferrari Speedracer Analog', '2021-07-10 04:23:12', 5, '2021-07-10 04:23:12', NULL, NULL, NULL),
(16, 'asdsad', '2021-09-27 17:02:03', 10, '2021-09-27 17:02:03', NULL, NULL, NULL);

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
(2, 'virtualheight', 'vijay@virtualheight.com', '09904625253', 'sdfdsfdsfsf', '2021-09-12 13:01:36', 2, '2021-09-12 13:01:36', NULL, NULL, NULL);

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
  `category_fk` int(11) DEFAULT NULL,
  `type_fk` int(11) DEFAULT NULL,
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

INSERT INTO `electric` (`id`, `category_fk`, `type_fk`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 6, 2, 'L & T Oris Blank Off Unit', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619015518mylblank.jpg', NULL, NULL, '2021-06-19 13:55:17', 2, '2021-06-19 13:55:17', NULL, NULL, NULL, '56200'),
(2, 6, 1, 'Legrand Mylinc Blanking Plate 1M 6755', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619015557acvppbwx01.png', NULL, NULL, '2021-06-19 13:55:56', 2, '2021-06-19 13:55:56', NULL, NULL, NULL, '3550');

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
(1, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(2, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(3, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(4, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(5, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(6, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(7, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(8, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(9, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(10, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(11, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(12, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:27', NULL, NULL, 5),
(13, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be1', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:22:46', NULL, NULL, 5),
(14, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be1', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:23:16', NULL, NULL, 5),
(15, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be1', '<p>Hello jams,</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-12 11:23:35', NULL, NULL, 5);

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
(1, 'adsadsadsadadasd', '<p>dadadadaddddasdsadsadsadadsad</p>\r\n\r\n<p>a</p>\r\n\r\n<p>dsdsd</p>\r\n\r\n<p>sdsadsddadsds</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>dsadsadadsadasdadasdasd</p>', '2021-09-12 04:12:19', 5, '2021-09-12 05:15:28', NULL, '2021-09-12 05:15:28', 5),
(2, 'It is a long established fact that a reader will be', '<p>Hello {{USER_NAME}},</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', '2021-09-12 05:16:37', 5, '2021-09-12 05:16:37', NULL, NULL, NULL),
(3, 'It is a long established fact that a reader will be1', '<p>Hello {{USER_NAME}},</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>Thank you.</p>', '2021-09-12 05:18:37', 5, '2021-09-12 05:21:29', 5, NULL, NULL),
(4, 'It is a long established fact that a reader will be', '<p>It is a long It is a loIt is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;ng established fact that a reader will be&nbsp; fact that a reader will be&nbsp;</p>', '2021-09-12 05:20:04', 5, '2021-09-12 05:20:04', NULL, NULL, NULL),
(5, 'It is a long established fact that a reader will be', '<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;It is a long established fact that a reader will be&nbsp;</p>', '2021-09-12 05:20:34', 5, '2021-09-12 05:20:34', NULL, NULL, NULL);

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
(1, 'sadsaddsad', '<p>sadsadad</p>', 'sadsadsa', '2021-10-17', '2021-10-30', '20211017055545academics-free-template-388x306.jpeg', '2021-10-17 05:55:44', 5, '2021-10-17 05:57:49', 5, '2021-10-17 05:57:49', 5);

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

-- --------------------------------------------------------

--
-- Table structure for table `front_about_us`
--

CREATE TABLE `front_about_us` (
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
-- Dumping data for table `front_about_us`
--

INSERT INTO `front_about_us` (`id`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 5, '2021-08-08 09:03:05', NULL, NULL, NULL);

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
  `price` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
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

INSERT INTO `front_pricing` (`id`, `plan_name`, `price`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'dsadsadsadsads', '100', '<p>sffsfsfsdfsfsfsdf</p>\r\n\r\n<p>sdfdsfdsfsdfsdf</p>\r\n\r\n<p>sdfsdfdsfdsfsdfdsf</p>\r\n\r\n<p>sdfsdfdfdsfsdfdfdf</p>', '2021-07-25 13:59:21', 5, '2021-07-25 16:35:17', 5, '2021-07-25 16:35:17', 5),
(2, 'PERSONAL', '$29', '<ul>\r\n	<li><strong>4 GB</strong>&nbsp;Ram</li>\r\n	<li><strong>7/24</strong>&nbsp;Tech Support</li>\r\n	<li><strong>40 GB</strong>&nbsp;SSD Cloud Storage</li>\r\n	<li>Monthly Backups</li>\r\n	<li>Palo Protection</li>\r\n</ul>', '2021-07-25 16:34:11', 5, '2021-08-08 04:13:13', 5, NULL, NULL),
(3, 'BUSINESS', '$100', '<ul>\r\n	<li><strong>4 GB</strong>&nbsp;Ram</li>\r\n	<li><strong>7/24</strong>&nbsp;Tech Support</li>\r\n	<li><strong>40 GB</strong>&nbsp;SSD Cloud Storage</li>\r\n	<li>Monthly Backups</li>\r\n	<li>Palo Protection</li>\r\n</ul>', '2021-08-08 04:13:28', 5, '2021-08-08 04:13:28', NULL, NULL, NULL),
(4, 'PROFEESIONAL', '$200', '<ul>\r\n	<li><strong>4 GB</strong>&nbsp;Ram</li>\r\n	<li><strong>7/24</strong>&nbsp;Tech Support</li>\r\n	<li><strong>40 GB</strong>&nbsp;SSD Cloud Storage</li>\r\n	<li>Monthly Backups</li>\r\n	<li>Palo Protection</li>\r\n</ul>', '2021-08-08 04:13:45', 5, '2021-08-08 04:13:45', NULL, NULL, NULL);

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
(2, '202108010402168-fst-1500._CB666815613_.jpg', '2021-08-01 11:05:01', 5, '2021-08-01 16:02:15', 5, NULL, NULL),
(3, '20210801040223a_1500x600._CB669782425_.jpg', '2021-08-01 11:05:09', 5, '2021-08-01 16:02:22', 5, NULL, NULL);

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
-- Table structure for table `front_web_templates`
--

CREATE TABLE `front_web_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
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

INSERT INTO `front_web_templates` (`id`, `title`, `description`, `image`, `url`, `preview`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Technology', '<p>TechnologyTechnologyTechnology</p>', '2021080104471010ExamplesoftheBesteCommerceWebsit.webp', 'https://nicepage.com/features', 'https://www.ecom.web-templates', '2021-08-01 16:38:06', 5, '2021-08-01 16:55:19', 5, NULL, NULL),
(2, 'Art & Design', '<p>www.ecom.web-templates</p>', '20210801044720Blog_TN.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:38:26', 5, '2021-08-01 16:47:19', 5, NULL, NULL),
(3, 'Food & Restaurant', '<p>Food &amp; RestaurantFood &amp; RestaurantFood &amp; RestaurantFood &amp; Restaurant</p>', '20210801044727HowtoStartanOnlineStore.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:38:54', 5, '2021-08-01 16:47:26', 5, NULL, NULL),
(4, 'Architecture & Building', '<p>Architecture &amp; Building</p>', '20210801044734T02Copy.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:40:37', 5, '2021-08-01 16:47:33', 5, NULL, NULL),
(5, 'Business & Law', '<p>Business &amp; LawBusiness &amp; LawBusiness &amp; Law</p>', '20210801044742T03Copy.webp', 'www.ecom.web-templates', 'www.ecom.web-templates', '2021-08-01 16:40:57', 5, '2021-08-01 16:47:41', 5, NULL, NULL);

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
(1, '20210620053657carton_1.25_8.jpg', '2021-06-20 05:36:56', 1, '2021-07-24 09:04:13', NULL, '2021-07-24 09:04:13', NULL),
(2, '20210626060119xsubscribe-img.jpg.pagespeed.ic.5Z4BGMnlxL.webp', '2021-06-26 06:01:18', 2, '2021-06-26 06:01:18', NULL, NULL, NULL),
(3, '20210626060119xvisit3.jpg.pagespeed.ic.hUJesBCcQl.webp', '2021-06-26 06:01:18', 2, '2021-06-26 06:01:18', NULL, NULL, NULL),
(4, '20210626060231xsubscribe-img.jpg.pagespeed.ic.5Z4BGMnlxL.webp', '2021-06-26 06:02:30', 8, '2021-06-26 06:02:30', NULL, NULL, NULL),
(5, '20210626060231xvisit3.jpg.pagespeed.ic.hUJesBCcQl.webp', '2021-06-26 06:02:30', 8, '2021-06-26 06:02:30', NULL, NULL, NULL),
(6, '2021072409041441j1PwNtdbS._AA210_.jpg', '2021-07-24 09:04:13', 1, '2021-07-24 09:04:13', NULL, NULL, NULL),
(7, '2021072409041941J9dluA-lS._AA210_.jpg', '2021-07-24 09:04:18', 1, '2021-07-24 09:04:18', NULL, NULL, NULL),
(8, '2021072409042441OBf52bnOL._AA210_.jpg', '2021-07-24 09:04:23', 1, '2021-07-24 09:04:23', NULL, NULL, NULL);

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
(1, 'virtualheight', 2, '2021-09-11 13:11:27', 5, '2021-09-11 13:11:27', NULL, NULL, NULL),
(2, 'virtualheight', 2, '2021-09-11 13:11:46', 5, '2021-09-11 13:11:46', NULL, NULL, NULL),
(3, 'virtualheight1', 2, '2021-09-11 13:13:07', 5, '2021-09-11 13:13:07', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_data`
--

CREATE TABLE `group_data` (
  `id` int(11) NOT NULL,
  `group_fk` int(11) DEFAULT NULL,
  `address_book_fk` int(11) DEFAULT NULL,
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

INSERT INTO `group_data` (`id`, `group_fk`, `address_book_fk`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 16, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(2, 1, 15, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(3, 1, 14, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(4, 1, 12, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(5, 1, 11, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(6, 1, 10, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(7, 1, 8, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(8, 1, 7, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(9, 1, 6, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(10, 1, 4, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(11, 1, 3, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(12, 1, 2, '2021-09-11 13:11:27', 5, NULL, NULL, NULL, NULL),
(13, 2, 16, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(14, 2, 15, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(15, 2, 14, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(16, 2, 12, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(17, 2, 11, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(18, 2, 10, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(19, 2, 8, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(20, 2, 7, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(21, 2, 6, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(22, 2, 4, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(23, 2, 3, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(24, 2, 2, '2021-09-11 13:11:46', 5, NULL, NULL, NULL, NULL),
(25, 3, 16, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(26, 3, 15, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(27, 3, 14, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(28, 3, 12, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(29, 3, 11, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(30, 3, 10, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(31, 3, 8, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(32, 3, 7, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(33, 3, 6, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(34, 3, 4, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(35, 3, 3, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL),
(36, 3, 2, '2021-09-11 13:13:07', 5, NULL, NULL, NULL, NULL);

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
(1, 'STEERING BEARING', NULL, NULL, 0, NULL, '2021-08-15 11:16:29', 5, '2021-09-05 09:52:52', 5, '2021-09-05 09:52:52', 5),
(2, 'dffdff', NULL, NULL, 0, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to KEditor</b></h1>\r\n\r\n<p class=\"lead\"><em>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section><div class=\"row\">\r\n        <div class=\"col-sm-8 ui-resizable\" data-type=\"container-content\"></div>\r\n        <div class=\"col-sm-4 ui-resizable\" data-type=\"container-content\"></div>\r\n    </div></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section><div class=\"row\">\r\n        <div class=\"col-sm-12 ui-resizable\">\r\n            <div class=\"thumbnail\" data-type=\"container-content\"><div data-type=\"component-photo\">\r\n                    <div class=\"photo-panel\">\r\n                        <img src=\"snippets/img/somewhere_bangladesh.jpg\" width=\"100%\" height=\"\" class=\"img-responsive\" style=\"display: inline-block;\">\r\n                    </div>\r\n                </div><div data-type=\"component-text\">\r\n<h3>Thumbnail label</h3>\r\n\r\n<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n\r\n<p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Button</a> <a class=\"btn btn-default\" href=\"#\" role=\"button\">Button</a></p>\r\n</div>\r\n</div>\r\n        <div class=\"ui-resizable-handle ui-resizable-resizer\" title=\"Drag to resize\" style=\"z-index: 90; display: block;\"></div><div class=\"ui-resizable-handle ui-resizable-none\" style=\"z-index: 90;\"></div></div>\r\n    </div>', '2021-09-04 05:50:45', 5, '2021-09-05 09:52:55', 5, '2021-09-05 09:52:55', 5),
(3, 'dffdff', NULL, NULL, 0, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to KEditor</b></h1>\r\n\r\n<p class=\"lead\"><em>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-04 11:41:43', 5, '2021-09-05 09:52:58', 5, '2021-09-05 09:52:58', 5),
(4, 'dffdff', NULL, NULL, 0, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-05 05:00:22', 5, '2021-09-05 09:53:00', NULL, '2021-09-05 09:53:00', 5),
(5, 'WHEEL BALL BEARING KIT231', 'vijayv', 'http://localhost/laravel/public/watch/vijayv', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-05 05:55:09', 5, '2021-09-05 06:00:20', 5, NULL, NULL),
(6, 'STEERING BEARINGssadsads', 'asdadadddsadasdddfdh', 'http://localhost/laravel/public/watch/landing-page/asdadadddsadasdddfdh', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-05 09:58:22', 5, '2021-09-05 09:59:13', NULL, '2021-09-05 09:59:13', 5),
(7, 'WHEEL BALL BEARING KIT', 'vijayqewee', 'http://localhost/laravel/public/watch/landing-page/vijayqewee', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-11 13:14:36', 5, '2021-09-11 13:53:27', NULL, NULL, NULL),
(8, 'WHEEL BALL BEARING KIT112', 'vijay', 'http://localhost/laravel/public/watch/landing-page/vijay', 1, '<section id=\"existing-id\" class=\"my-class\">\r\n                    <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-text\">\r\n<div class=\"page-header\">\r\n<h1><b class=\"text-uppercase\">Welcome to Landing Page</b></h1>\r\n\r\n<p class=\"lead\"><em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em></p>\r\n</div>\r\n</section>\r\n<section data-type=\"component-form\">\r\n                                    <div class=\"form-data\" style=\"display: none !important;\">[{\"type\":\"text\",\"label\":\"Your email\",\"placeholder\":\"Please enter your email address\",\"className\":\"form-control\",\"name\":\"text-1561978528572\",\"subtype\":\"text\"},{\"type\":\"button\",\"label\":\"Subscribe\",\"subtype\":\"button\",\"className\":\"btn btn-primary\",\"name\":\"button-1561978530984\",\"style\":\"primary\"}]</div>\r\n                                    <form class=\"form-content form-horizontal\" data-grid=\"3-9\">\r\n                                        <div class=\"fb-text form-group field-text-1561978528572\"><label for=\"text-1561978528572\" class=\"fb-text-label control-label col-sm-3\">Your email</label>\r\n                                            <div class=\"col-sm-9\"><input type=\"text\" placeholder=\"Please enter your email address\" class=\"form-control\" name=\"text-1561978528572\" id=\"text-1561978528572\"></div>\r\n                                        </div>\r\n                                        <div class=\"fb-button form-group field-button-1561978530984\">\r\n                                            <div class=\"col-sm-9 col-sm-offset-3\"><button type=\"button\" class=\"btn btn-primary\" name=\"button-1561978530984\" style=\"primary\" id=\"button-1561978530984\">Subscribe</button></div>\r\n                                        </div>\r\n                                    </form>\r\n                                </section></div>\r\n                            <div class=\"col-sm-6 ui-resizable\" data-type=\"container-content\"><section data-type=\"component-photo\">\r\n                                    <div class=\"photo-panel\">\r\n                                        <img src=\"http://localhost/laravel/public/keditor-master/examples/snippets/img/somewhere_bangladesh.jpg\" style=\"display: inline-block;\" height=\"\" width=\"100%\">\r\n                                    </div>\r\n                                </section></div>\r\n                        </div>\r\n                    </div>\r\n                </section>', '2021-09-12 03:38:09', 5, '2021-09-12 03:38:19', NULL, NULL, NULL);

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
(1, 'jams@gmail.com', NULL, 'sdfdsfsfsfds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:04:47', NULL, NULL, 5),
(2, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(3, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(4, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(5, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(6, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(7, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(8, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(9, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(10, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(11, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(12, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(13, 'jams@gmail.com', NULL, 'aasdaad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/vijayv Thank you.</p>', 0, '2021-09-11 13:13:21', NULL, NULL, 5),
(14, 'jams@gmail.com', NULL, 'fdfdsf', '<p>Hi&nbsp;jams,</p>\r\n\r\n<p>Browse our selection of Landing page and promote your business and website.</p>\r\n\r\n<p>Our Landing Page is link here http://localhost/laravel/public/watch/vijayv.</p>\r\n\r\n<p>Thank you.</p>', 0, '2021-09-11 13:50:11', NULL, NULL, 5),
(15, 'jams@gmail.com', NULL, 'adsad', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:51:07', NULL, NULL, 5),
(16, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(17, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(18, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(19, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(20, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(21, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(22, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(23, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(24, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(25, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(26, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(27, 'jams@gmail.com', NULL, 'sds', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijayqewee Thank you.</p>', 0, '2021-09-11 13:53:27', NULL, NULL, 5),
(28, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(29, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(30, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(31, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(32, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(33, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(34, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(35, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(36, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(37, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(38, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5),
(39, 'jams@gmail.com', NULL, 'It is a long established fact that a reader will be', '<p>Hi&nbsp;jams, Browse our selection of Landing page and promote your business and website. Our Landing Page is link here http://localhost/laravel/public/watch/landing-page/vijay Thank you.</p>', 0, '2021-09-12 03:38:19', NULL, NULL, 5);

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
(4, '2021_07_11_172237_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `category_fk` int(11) DEFAULT NULL,
  `brand_fk` int(11) DEFAULT NULL,
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

INSERT INTO `mobile` (`id`, `category_fk`, `brand_fk`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 11, 2, 'OPPO A31 | Best Prices', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem</p>', '2021061903584741J9dluA-lS._AA210_.jpg', NULL, NULL, '2021-06-19 15:58:46', 3, '2021-06-19 15:58:46', NULL, NULL, NULL, '563200'),
(2, 12, 1, 'OPPO A74 (5G) | Upto Rs. 2000 HDFC Discount', '<p>OPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC DiscountOPPO A74 (5G) | Upto Rs. 2000 HDFC Discount</p>', '2021061903592541OBf52bnOL._AA210_.jpg', NULL, NULL, '2021-06-19 15:59:24', 3, '2021-06-19 15:59:24', NULL, NULL, NULL, '90000');

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

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_fk` int(11) DEFAULT NULL,
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

INSERT INTO `orders` (`id`, `user_id`, `product_fk`, `quantity`, `name`, `mobile`, `email`, `pincode`, `company`, `area`, `landmark`, `city`, `state`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `status`) VALUES
(1, 3, 2, '1', 'virtualheight', '9904625253', 'vijay@virtualheight.com', '380013', 'dasdsad', 'ahmedabad', 'sadsad', 'ahmedabad', 'Gujarat', '2021-09-18 09:05:59', NULL, '2021-09-18 09:16:55', NULL, NULL, NULL, 1),
(2, 3, 2, '1', 'virtualheight', '9904625253', 'vijay@virtualheight.com', '380013', 'dasdsad', 'ahmedabad', 'ssadadsada', 'ahmedabad', 'Gujarat', '2021-09-18 09:13:31', NULL, '2021-09-18 09:16:51', NULL, NULL, NULL, 1),
(3, 3, 2, '1', 'virtualheight', '9904625253', 'vijay@virtualheight.com', '380013', 'dasdsad', 'ahmedabad', 'asdsadsad', 'ahmedabad', 'Gujarat', '2021-09-18 09:13:41', NULL, '2021-09-18 09:16:48', NULL, NULL, NULL, 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `photo_shoots`
--

CREATE TABLE `photo_shoots` (
  `id` int(11) NOT NULL,
  `category_fk` int(11) DEFAULT NULL,
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

INSERT INTO `photo_shoots` (`id`, `category_fk`, `name`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 14, 'Ferrari Speedracer Analog', '20210619041054lipstick.jpg', '2021-06-19 16:10:53', 4, '2021-06-19 16:10:53', NULL, NULL, NULL);

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
(1, 'dfsfsdff', '<p>sdfdsfs</p>', '2021062006295341733yAnlzL._AA210_.jpg', NULL, NULL, '2021-06-20 06:29:52', 1, '2021-06-20 06:30:14', 1, '2021-06-20 06:30:14', 1),
(2, 'dfsfdf', '<p>sdfdsf</p>', '2021062006304141733yAnlzL._AA210_.jpg', NULL, NULL, '2021-06-20 06:30:40', 1, '2021-06-20 06:30:40', NULL, NULL, NULL),
(3, 'Ferrari Speedracer Analog', '<p>Ferrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer Analog</p>\r\n\r\n<p>Ferrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer Analog</p>', '20210918054409p4.jpg', NULL, NULL, '2021-09-18 17:44:08', 8, '2021-09-18 17:44:08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_fk` int(11) DEFAULT NULL,
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

INSERT INTO `products` (`id`, `category_fk`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`, `price`) VALUES
(1, 4, 'LUXURY BEAUTY', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619013812Skin_PC._V275175109_.jpg', NULL, NULL, '2021-06-19 13:38:11', 1, '2021-06-19 13:38:11', NULL, NULL, NULL, '25630'),
(2, 3, 'MAKE-UP & NAILS', '<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619013854Makeup_PC._V275175115_.jpg', NULL, NULL, '2021-06-19 13:38:53', 1, '2021-06-19 13:38:53', NULL, NULL, NULL, '2500'),
(3, 2, 'SKIN CARE', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619013925Lux_PC._V275175114_.jpg', NULL, NULL, '2021-06-19 13:39:24', 1, '2021-06-19 13:39:24', NULL, NULL, NULL, '3020'),
(4, 1, 'LUXURY BEAUTY', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '20210619014001blush.jpg', NULL, NULL, '2021-06-19 13:40:00', 1, '2021-06-19 13:40:00', NULL, NULL, NULL, '2000'),
(5, 15, 'Ferrari Speedracer Analog', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and</p>\r\n\r\n<p>typesetting industry. Lorem Ipsum has</p>\r\n\r\n<p>been the industry&#39;s standard dummy text ever since the</p>\r\n\r\n<p>1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p>It was popularised in the 1960s with the release of Letraset</p>\r\n\r\n<p>sheets containing Lorem Ipsum passages, and more recently</p>\r\n\r\n<p>with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu</p>', '202107100424422021050110240781tZb1kXkwL._AC_UL1500_.jpg', NULL, NULL, '2021-07-10 04:24:41', 5, '2021-07-18 09:44:30', 5, NULL, 5, '200'),
(6, 16, 'asdsa', '<p>asdsad</p>', '202109270502172021_09_226_37PMOfficeLens.jpg', NULL, NULL, '2021-09-27 17:02:16', 10, '2021-09-27 17:02:16', NULL, NULL, NULL, 'asdsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_type_fk` int(11) DEFAULT NULL,
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

INSERT INTO `projects` (`id`, `project_type_fk`, `name`, `description`, `image_1`, `image_2`, `image_3`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 2, 'fdsf', '<p>sdfdsf</p>', '2021062011205341733yAnlzL._AA210_.jpg', NULL, NULL, '2021-06-20 11:20:52', 2, '2021-06-20 11:24:05', 2, '2021-06-20 11:24:05', 2),
(2, 3, 'Ferrari Speedracer Analog', '<p>All types of HVAC (Air conditioning), Elevators, Escalators, Electrical, Low voltage, Security System, Nurse Calling System, Computer Networking, Internal &amp; External Plumbing System, Drainage Systems, Fire Fighting &amp; Fire Alarm System, Modular Operation Theatres, Medical Gas Pipelines, Water Treatment Plants, Solar Water Heating Systems, Sewage &amp; Effluent Treatment Plants etc. work.</p>', '20210626081420house1.jpg', NULL, NULL, '2021-06-26 08:14:19', 8, '2021-06-26 08:14:19', NULL, NULL, NULL),
(3, 3, 'Ferrari Speedracer Analog', '<p>All types of HVAC (Air conditioning), Elevators, Escalators, Electrical, Low voltage, Security System, Nurse Calling System, Computer Networking, Internal &amp; External Plumbing System, Drainage Systems, Fire Fighting &amp; Fire Alarm System, Modular Operation Theatres, Medical Gas Pipelines, Water Treatment Plants, Solar Water Heating Systems, Sewage &amp; Effluent Treatment Plants etc. work.All types of HVAC (Air conditioning), Elevators, Escalators, Electrical, Low voltage, Security System, Nurse Calling System, Computer Networking, Internal &amp; External Plumbing System, Drainage Systems, Fire Fighting &amp; Fire Alarm System, Modular Operation Theatres, Medical Gas Pipelines, Water Treatment Plants, Solar Water Heating Systems, Sewage &amp; Effluent Treatment Plants etc. work.</p>', '20210626081437house2.jpg', NULL, NULL, '2021-06-26 08:14:36', 8, '2021-06-26 08:14:36', NULL, NULL, NULL);

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
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'xcvcvcxv1`1331`3', '2021-06-20 07:55:31', 1, '2021-06-20 07:56:23', 1, NULL, NULL),
(2, 'sfsdf', '2021-06-20 11:20:40', 2, '2021-06-20 11:20:40', NULL, NULL, NULL),
(3, 'Completed Projects', '2021-06-26 08:11:57', 8, '2021-06-26 08:11:57', NULL, NULL, NULL),
(4, 'Government projects', '2021-06-26 08:12:15', 8, '2021-06-26 08:12:15', NULL, NULL, NULL),
(5, 'Private', '2021-06-26 08:12:29', 8, '2021-06-26 08:12:29', NULL, NULL, NULL);

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
(1, '<p>fdsf</p>', '2021-07-18 09:29:08', 23, '2021-07-18 09:29:08', NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Ferrari Speedracer Analog', 'Ferrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer Analog', '2021-07-18 09:48:11', 5, '2021-07-18 09:48:11', NULL, NULL, NULL),
(2, 'Ferrari Speedracer Analog', 'Ferrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer AnalogFerrari Speedracer Analog', '2021-10-03 12:14:47', 11, '2021-10-03 12:14:47', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `fav_icon` text DEFAULT NULL,
  `currency_fk` int(11) DEFAULT NULL,
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

INSERT INTO `site_settings` (`id`, `title`, `site_logo`, `fav_icon`, `currency_fk`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'luxury beauty', NULL, NULL, 2, '2021-06-19 13:42:58', 1, '2021-06-19 13:42:58', 1, NULL, NULL),
(2, 'WHEEL BALL BEARING KIT', NULL, NULL, 2, '2021-06-19 13:58:45', 2, '2021-06-19 13:58:45', 2, NULL, NULL),
(3, 'ROCKER ARM', '202106190402208-fst-1500._CB666815613_.jpg', '20210619040220a_1500x600._CB669782425_.jpg', 19, '2021-06-19 16:00:27', 3, '2021-06-19 16:02:19', 3, NULL, NULL),
(4, 'Norton Internet Security', '20210912112426auction-free-template-388x306.jpg', '20210912112426auction-free-template-388x306.jpg', 2, '2021-07-11 16:56:45', 5, '2021-09-12 11:24:25', 5, NULL, NULL);

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
(1, '20210626060751a_1500x600._CB669782425_.jpg', '2021-06-26 06:07:50', 8, '2021-06-26 06:07:50', NULL, NULL, NULL),
(2, '2021071005062520210314103057banner-1082652_960_720.jpg', '2021-07-10 05:06:24', 5, '2021-07-10 05:06:24', NULL, NULL, NULL),
(3, '2021071005083920210522113549202105020658131500x600.png', '2021-07-10 05:08:38', 5, '2021-07-10 05:08:38', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `category_fk` int(11) DEFAULT NULL,
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

INSERT INTO `type` (`id`, `category_fk`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 6, 'Switches', '2021-06-19 13:53:51', 2, '2021-06-19 13:53:51', NULL, NULL, NULL),
(2, 6, 'MCBs', '2021-06-19 13:54:10', 2, '2021-06-19 13:54:10', NULL, NULL, NULL),
(3, 7, 'Heaters', '2021-06-19 13:54:28', 2, '2021-06-19 13:54:28', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `site`, `title`, `site_name`) VALUES
(1, 'vijay', 'beautyparlour@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', '7tqGwqx0oJXtpQ9LfnqXMd72ElygNlC11Ogg2RfuTBImj49l8lESVyywUMwN', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'beautyparlour', 'beautyparlour'),
(2, 'vijay', 'electric@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', '7qrRX9ZZ9AaHxwvHucTWVjpVHwh5zj3jrWEEwWoTsxqxGYQc1Nles6KaHnZP', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'electric', 'electric'),
(3, 'vijay', 'mobile@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'uGLmTLVkcI2zMKtvkaMyDfyzT8owVW4OkcWMVNxYUL01XNLzAkVoqHtp8Q8i', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'mobile', 'mobile'),
(4, 'vijay', 'studio@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'AWLhs4sFAOjVL5MBQdn3GHjPAbv6z1eZypaqhaIs8JMmm7UIgJABsqySAlDB', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'studio', 'studio'),
(5, 'vijay', 'watch@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'watch', 'watch'),
(8, 'vijay', 'realestate@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'f5RufTvfriNup32hdoARfZUNs4B3yFe2DtgiLbPCahMDGd3EkUGbc1eoUtr0', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'realestate', 'realestate'),
(9, 'vijay', 'cloth@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'cloth', 'cloth'),
(10, 'vijay', 'technology@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'technology', 'technology'),
(11, 'artanddesign', 'artanddesign@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'art-and-design', 'art-and-design'),
(12, 'business', 'business@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'business', 'business'),
(13, 'cars_and_transportation', 'cars_and_transportation@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'cars-and-transportation', 'cars-and-transportation'),
(14, 'music_and_entertainment', 'music_and_entertainment@gmail.com', NULL, '$2y$10$GowtbqC.qahoiSjbOaPm0.Rx9bctgW7knfd.mR3yxdXX3chwW93DC', 'gDcHaUPL4cbpR7brB9RG9wNsikfKYmCXfT6bCHCXKEgjsvyoqEVE47756OQR', '2021-03-13 02:18:58', '2021-04-10 11:28:01', 1, 'music-and-entertainment', 'music-and-entertainment');

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
-- Indexes for table `front_about_us`
--
ALTER TABLE `front_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_amazing_features`
--
ALTER TABLE `front_amazing_features`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_book`
--
ALTER TABLE `address_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_site_settings`
--
ALTER TABLE `admin_site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_inquiry`
--
ALTER TABLE `contact_us_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `electric`
--
ALTER TABLE `electric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emails_broadcast`
--
ALTER TABLE `emails_broadcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `email_marketing`
--
ALTER TABLE `email_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_about_us`
--
ALTER TABLE `front_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_amazing_features`
--
ALTER TABLE `front_amazing_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `front_settings`
--
ALTER TABLE `front_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_slider`
--
ALTER TABLE `front_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_system`
--
ALTER TABLE `front_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_data`
--
ALTER TABLE `group_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `landing_page_emails`
--
ALTER TABLE `landing_page_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_shoots`
--
ALTER TABLE `photo_shoots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
