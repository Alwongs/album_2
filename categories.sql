-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 13 2025 г., 14:37
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alwong9h_album`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--
-- Создание: Апр 26 2025 г., 13:00
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `albums` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 4, '2010', '2025-04-27 15:02:11', '2025-04-27 15:02:11'),
(2, 4, '2011', '2025-04-27 15:16:19', '2025-04-27 15:16:19'),
(3, 4, '2012', '2025-04-27 15:49:30', '2025-04-27 15:49:30'),
(6, 4, '>>>>', '2025-05-03 05:41:42', '2025-07-22 08:50:00'),
(7, 4, '2013', '2025-05-03 08:10:21', '2025-05-03 08:10:21'),
(8, 4, '2014', '2025-05-03 08:41:59', '2025-05-03 08:41:59'),
(9, 4, '2015', '2025-05-03 13:18:23', '2025-05-03 13:18:23'),
(10, 4, '2016', '2025-05-03 16:11:32', '2025-05-03 16:11:32'),
(11, 4, '2009', '2025-05-04 05:04:46', '2025-05-04 05:04:46'),
(12, 4, '2008', '2025-05-04 09:57:57', '2025-05-04 09:57:57'),
(13, 4, '2007', '2025-05-04 10:15:09', '2025-05-04 10:15:09'),
(14, 4, '2006', '2025-05-04 11:01:23', '2025-05-04 11:01:23'),
(15, 4, '2017', '2025-05-04 15:21:32', '2025-05-04 15:21:32'),
(16, 4, '2020', '2025-05-04 15:28:55', '2025-05-09 14:55:38'),
(17, 4, '2021', '2025-05-09 14:57:42', '2025-05-09 14:57:42'),
(18, 4, '2022', '2025-05-09 15:04:38', '2025-05-09 15:04:38'),
(19, 4, '2011 Germany', '2025-05-09 16:07:31', '2025-05-09 18:49:20'),
(20, 4, '2011 France', '2025-05-09 18:49:04', '2025-05-09 18:49:32'),
(21, 4, 'Corolla', '2025-05-10 08:14:41', '2025-05-10 08:14:41'),
(22, 4, '2015 Крым', '2025-05-10 14:06:07', '2025-05-10 14:06:07'),
(23, 4, 'link here', '2025-05-22 09:02:06', '2025-05-22 09:02:06'),
(24, 4, 'Ремонт', '2025-08-03 21:40:14', '2025-08-03 21:40:14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_user_id_unique` (`title`,`user_id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
