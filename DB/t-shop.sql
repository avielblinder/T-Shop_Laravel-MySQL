-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tai tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', 'tai-tea', 'Darjeeling-Tea.jpg', '2020-11-29 10:51:10', '2020-11-29 10:51:10'),
(2, 'Afgan tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', 'afgan-tea', 'Oregano-Teapurchased123featuredimage.jpg', '2020-11-29 10:51:21', '2020-11-29 10:51:21'),
(3, 'Arabic tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', 'arabic-tea', 'shutterstock.jpg', '2020-11-29 10:50:43', '2020-11-29 10:50:43'),
(15, 'Flavored tea', '<p><span style=\"text-align: center;\">The Bigelow family’s commitment to crafting more than 150 rich black, delicate green, full-bodied decaf and caffeine-free herb teas spans three generations. Whether you enjoy the pure flavor of tea, tea that is beautifully blended with a variety of fruits, herbs, spices – or all of the above, when it’s full flavored tea you crave, turn to Bigelow tea.</span></p>', 'flavored-tea', 'R-2020.12.23.10.59.25-flavored.jpg', '2020-12-23 10:58:30', '2020-12-23 10:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `created_at`, `updated_at`) VALUES
(1, 4, 'Contact us', '<table class=\"table table-bordered\"><tbody><tr><td><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\">If you have any questions regarding our tours or are looking for something else,</p><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\"> our team of Travel Geniuses is standing by waiting for your email.</p><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\"> Available 7 days a week, from 9am to 10pm,</p><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\"> our team speak over 10 languages and are insiders with years of experience helping others like you enjoy the perfect tours in Israel.</p><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\">The best way to reach our team is by \\email (through the form below or at info@touristisrael.com) or WhatsApp messenger (+972-54-3904959), but you can also call us on +972 (0)3-600-9555 if you prefer. </p><p style=\"margin-bottom: 34px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, arial, helvetica, sans-serif; color: rgb(62, 38, 0); font-size: 15px; line-height: 24px; background-color: rgb(253, 252, 236);\">No question is too small, and our advisers are more than happy to help!</p></td><td><p style=\"margin-bottom: 0px; color: rgb(38, 38, 38); font-size: medium; line-height: 24px; font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">For personal:&nbsp;<a href=\"tel:1-800-866-2453\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">1-800-T-</a><a href=\"https://www.t-mobile.com/apps/download-t-mobile-app\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; background-color: rgb(255, 255, 255); font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">Shop</a><br>For business:&nbsp;<a href=\"tel:1-844-428-9675\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">1-844-428-9675</a></p><p style=\"margin-bottom: 0px; color: rgb(38, 38, 38); font-size: medium; line-height: 24px; font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><br><span style=\"font-weight: 700; font-size: inherit; letter-spacing: 0px; line-height: inherit;\">General Customer Care &amp; Technical Support</span><br><br>From the&nbsp;<a href=\"https://www.t-mobile.com/apps/download-t-mobile-app\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">T-Shop app</a>, on a&nbsp;<span style=\"color: inherit; letter-spacing: inherit; line-height: inherit; white-space: nowrap;\">T-</span><a href=\"https://www.t-mobile.com/apps/download-t-mobile-app\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; background-color: rgb(255, 255, 255); font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">Shop</a>&nbsp;phone<br>From your&nbsp;<span style=\"color: inherit; letter-spacing: inherit; line-height: inherit; white-space: nowrap;\">T-</span><a href=\"https://www.t-mobile.com/apps/download-t-mobile-app\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; background-color: rgb(255, 255, 255); font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">Shop</a>&nbsp;phone: 611<br>Call:&nbsp;<a href=\"tel:1-800-937-8997\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s; white-space: nowrap;\">1-800-937-8997</a><br><br>If you are calling about a technical issue with your&nbsp;<span style=\"color: inherit; letter-spacing: inherit; line-height: inherit; white-space: nowrap;\">T-Shop</span>&nbsp;service, please call from a different phone so that we can troubleshoot with you.<br>&nbsp;</p><p style=\"margin-bottom: 0px; color: rgb(38, 38, 38); font-size: medium; line-height: 24px; font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><span style=\"font-weight: 700; font-size: inherit; letter-spacing: 0px; line-height: inherit;\">International Callers</span><br><br>Call:&nbsp;<a href=\"tel:1-505-998-3793\" aria-label=\"To make this website accessible to screen reader, Press combination of alt and 1 keys. To stop getting this message, press the combination of alt and 2 keys\" style=\"color: inherit; text-decoration-line: underline; font-size: inherit; letter-spacing: inherit; line-height: inherit; position: relative; transition: opacity 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, background-color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s, color 0.2s cubic-bezier(0.35, 0, 0.25, 1) 0s;\">1-505-998-3793</a></p></td></tr></tbody></table>', '2020-12-02 10:29:51', '2020-12-20 13:47:32'),
(3, 3, 'T-Shop services', 'consectetur adipiscing elit.\r\nDonec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem\r\nvitae, imperdiet consectetur urna. In ante sapien, mattis eu nisi ut,\r\nmalesuada fringilla massa. Ut pulvinar, quam quis interdum convallis,\r\nsem dolor ullamcorper lacus, vel tristique felis nunc in risus.\r\nDuis ex dolor, commodo vitae metus ac, egestas tincidunt turpis.\r\nMorbi leo quam, ornare molestie pellentesque interdum, euismod ut magna.\r\n', '2020-12-02 10:31:36', '2020-12-02 10:31:36'),
(4, 3, 'Our new services', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><b>readable content of a page whe</b>n looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now<span style=\"background-color: rgb(0, 255, 0);\"> use Lorem Ipsum as their default model text,</span> and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the&nbsp;</span>', '2020-12-06 10:21:42', '2020-12-06 10:38:58'),
(5, 3, 'Services', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><b>readable content</b> of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'<span style=\"background-color: rgb(255, 231, 156);\">Content here,</span> content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose <a href=\"http://www.google.com\" target=\"_blank\">(injected humour and the like).</a></span>', '2020-12-06 10:22:29', '2020-12-06 10:22:29'),
(7, 1, 'Our story', '<h1>&nbsp;<img src=\"https://organiceyourlife.com/wp-content/uploads/2013/07/Juices.jpg\" style=\"width: 1002.66px;\"></h1><h1>its all begone when our founder want to drink hot juice...</h1><p><span style=\"font-size: 0.875rem;\"><br></span><span style=\"font-size: 0.875rem; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a</span>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years,<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</span><span style=\"font-size: 0.875rem;\">more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years,</span><span style=\"font-size: 0.875rem; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English</span></p><p><span style=\"font-size: 0.875rem; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></p><h4><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><b>&nbsp;Many desktop</b></span></h4><p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years,</span><span style=\"font-size: 0.875rem; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"> sometimes by accident, sometimes on purpose (injected humour and the like)&nbsp;</span><span style=\"font-size: 0.875rem;\">more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years,</span><span style=\"font-size: 0.875rem; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 0.875rem; text-align: justify;\">.&nbsp;</span></p><p></p>', '2020-12-06 10:26:48', '2020-12-24 12:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `mtitle`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'About our', 'about-us', '2020-12-02 10:03:14', '2020-12-03 21:30:47'),
(3, 'Services', 'Our Services', 'services', '2020-12-02 10:04:40', '2020-12-02 10:04:40'),
(4, 'Contact us', 'Contact', 'contact-us', '2020-12-02 10:05:09', '2020-12-20 13:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 4, 'a:4:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:11:\"Bangala-tea\";s:5:\"price\";d:47.2;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:10:\"Safron tea\";s:5:\"price\";d:43.3;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:8:\"Sage tea\";s:5:\"price\";d:54.8;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:15:\"Treditional tea\";s:5:\"price\";d:36.1;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '181.40', '2020-12-01 16:49:27', '2020-12-01 16:49:27'),
(2, 8, 'a:6:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:11:\"Bangala-tea\";s:5:\"price\";d:47.2;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:10:\"Safron tea\";s:5:\"price\";d:43.5;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:7;a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:9:\"Honny tea\";s:5:\"price\";d:43.8;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Ketoiced tea\";s:5:\"price\";d:48.2;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:8:\"Sage tea\";s:5:\"price\";d:54.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:22:\"Treditional arabic tea\";s:5:\"price\";d:36.8;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '274.40', '2020-12-07 11:39:17', '2020-12-07 11:39:17'),
(3, 17, 'a:1:{i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:8:\"Sage tea\";s:5:\"price\";d:54.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '54.90', '2020-12-22 10:52:47', '2020-12-22 10:52:47'),
(4, 4, 'a:5:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:11:\"Bangala-tea\";s:5:\"price\";d:47.2;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:10:\"Safron tea\";s:5:\"price\";d:43.5;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:11:\"Oregano tea\";s:5:\"price\";d:53.8;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:9;a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:10:\"Bubble tea\";s:5:\"price\";d:38.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:14:\"Darjeeling tea\";s:5:\"price\";d:45.6;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '229.00', '2020-12-23 10:02:12', '2020-12-23 10:02:12'),
(5, 18, 'a:4:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:10:\"Safron tea\";s:5:\"price\";d:43.5;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:14:\"Darjeeling tea\";s:5:\"price\";d:45.6;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:9;a:6:{s:2:\"id\";s:1:\"9\";s:4:\"name\";s:10:\"Bubble tea\";s:5:\"price\";d:38.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:8:\"Sage tea\";s:5:\"price\";d:54.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '182.90', '2020-12-23 11:37:20', '2020-12-23 11:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `url`, `price`, `updated_at`, `created_at`) VALUES
(1, 1, 'Bangala-tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'.', 'bangalatea.jpg', 'bangala-tea', '47.20', '2020-11-29 11:09:51', '2020-11-29 11:09:51'),
(2, 1, 'Safron tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'.', 'R-2020.12.07.10.51.46-safrontea.jpg', 'safron-tea', '43.50', '2020-12-07 10:51:46', '2020-11-29 11:09:51'),
(3, 2, 'Ketoiced tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'.', 'R-2020.12.07.10.52.13-ketoicedtea.jpg', 'ketoiced-tea', '48.20', '2020-12-07 10:53:09', '2020-11-29 11:15:58'),
(5, 3, 'Sage tea', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', 'R-2020.12.07.10.52.32-sagetea.jpg', 'sage-tea', '54.90', '2020-12-20 12:25:52', '2020-11-29 11:21:55'),
(6, 3, 'Treditional arabic tea', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', 'R-2020.12.07.10.52.56-treditionaltea.jpg', 'treditional-arabic-tea', '36.80', '2020-12-07 10:52:56', '2020-11-29 11:21:55'),
(8, 1, 'Oregano tea', '<span style=\"\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</span>', 'R-2020.12.20.12.27.32-Oregano-Teapurchased123featuredimage.jpg', 'oregano-tea', '53.80', '2020-12-23 18:56:56', '2020-12-20 12:27:33'),
(9, 2, 'Bubble tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.<br>', 'R-2020.12.20.12.28.25-easybubbletae.jpg', 'bubble-tea', '38.90', '2020-12-23 18:57:38', '2020-12-20 12:28:25'),
(10, 2, 'Darjeeling tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.<br>', 'R-2020.12.20.12.29.33-Darjeeling-Tea.jpg', 'darjeeling-tea', '45.60', '2020-12-23 18:57:54', '2020-12-20 12:29:33'),
(11, 15, 'Lemon tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.', 'R-2020.12.23.11.01.48-flavored-tea-500x500.jpg', 'lemon-tea', '41.20', '2020-12-23 18:56:25', '2020-12-23 11:01:48'),
(12, 15, 'Cinnamon tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.', 'R-2020.12.23.11.03.06-flavoredc.jpg', 'cinnamon-tea', '49.80', '2020-12-23 18:56:10', '2020-12-23 11:03:06'),
(13, 15, 'Strawberry tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.<br>', 'R-2020.12.23.11.04.02-UTB8oNbBwCnEXKJk43Ubq6zLppXaN.jpg', 'strawberry-tea', '56.90', '2020-12-23 18:54:59', '2020-12-23 11:04:02'),
(14, 15, 'Fruit tea', 'We offered an extensive range of&nbsp;Flavored Tea&nbsp;which is deemed as desserts of the tea which can be served hot or cold. The tea we offer is extensively appreciated by our clients for its rich taste, strong natural flavor and sumptuous smell that is bound to relieve your mind in peace.owing to its great quality it is best suited for vending machines.', 'R-2020.12.23.11.04.48-1463686195359.jpeg', 'fruit-tea', '57.80', '2020-12-23 18:55:47', '2020-12-23 11:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `password`, `created_at`, `updated_at`) VALUES
(1, '-', '-', '-', '-', '2020-12-01 12:56:56', '2020-12-01 12:56:56'),
(2, '--', '--', '--', '--', '2020-12-01 12:57:04', '2020-12-01 12:57:04'),
(3, 'Admin', 'admin@gmail.com', 'default-pic.jpg', '$2y$10$6RtpNyD48o3bKay.1jxhwu4ifPLoF8Y/g7/vkY5JLgMBsjsh.Y1H.', '2020-12-01 12:58:43', '2020-12-22 09:05:46'),
(18, 'Avi Levi', 'avi@gmail.com', 'default-pic.jpg', '$2y$10$Mihj9Wo3kRyg45zOvnz3o.pHPn5ITR9NGP8MNMf/ZdVcjm9vlk4la', '2020-12-23 11:36:41', '2020-12-23 11:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `role`) VALUES
(3, 6),
(4, 7),
(5, 7),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(15, 7),
(16, 7),
(3, 7),
(3, 7),
(3, 7),
(3, 7),
(3, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(4, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(18, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
