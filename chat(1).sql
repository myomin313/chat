-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2024 at 09:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbots`
--

DROP TABLE IF EXISTS `chatbots`;
CREATE TABLE IF NOT EXISTS `chatbots` (
  `id` int NOT NULL AUTO_INCREMENT,
  `messages` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jp_response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatbots`
--

INSERT INTO `chatbots` (`id`, `messages`, `response`, `jp_response`, `my_response`, `created`, `modified`) VALUES
(1, 'Hello/Hi/Hi there', 'How can i help you?', 'どんな御用でしょうか？', 'ကျွန်တော်ဘယ်လိုကူညီရမလဲ?', '2023-12-22 06:51:33', '2023-12-22 06:51:33'),
(2, 'What are Services of Findix Myanmar', 'Findix Myanmar Serve 1.Time Card System  2.Stock Management 3.Custom System', 'Findixミャンマーサーブ 1.タイムカードシステム 2.在庫管理 3.カスタムシステム', 'စနစ် 2.Stock Management 3.Custom စနစ်', '2023-12-22 06:54:03', '2023-12-22 06:54:03'),
(3, 'About Findix Myanmar', 'Findix Myanmar was founded in 2017 in myanmar.', 'Findix ミャンマーは 2017 年にミャンマーで設立されました。', 'Findix Myanmar ကို မြန်မာနိုင်ငံတွင် 2017 ခုနှစ်တွင် စတင်တည်ထောင်ခဲ့ပါသည်။', '2023-12-22 06:55:53', '2023-12-22 06:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20231222030210, 'Users', '2023-12-21 20:46:28', '2023-12-21 20:46:28', 0),
(20231222063628, 'Chatbots', '2023-12-22 00:19:35', '2023-12-22 00:19:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(2, 'Myo Min', 'myomin313@gmail.com', '$2y$10$Wol72qTKEHdkH87BfcoOM.g4/r.Oa6e.fVGJ0vGDu8UI3YvcBy5n.', '2023-12-22 04:15:30', '2023-12-22 04:15:30'),
(3, 'myomin551000', 'myomin551000@gmail.com', '$2y$10$o4cElTIdPedu4lgrP.jwOuNKKzozPuVnKpoXYTEx6P8/o1Y8mUE56', '2023-12-22 07:02:27', '2023-12-22 07:02:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
