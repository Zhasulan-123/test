-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2020 г., 01:01
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `currencies_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `date` varchar(8) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `rate`, `date`, `created_at`, `updated_at`) VALUES
(40, 'GBP', '522.28', '26.03.20', '2020-03-25 17:55:19', NULL),
(41, 'DKK', '63.81', '26.03.20', '2020-03-25 17:55:19', NULL),
(42, 'AED', '121.10', '26.03.20', '2020-03-25 17:55:19', NULL),
(43, 'USD', '444.80', '26.03.20', '2020-03-25 17:55:19', NULL),
(44, 'EUR', '476.78', '26.03.20', '2020-03-25 17:55:19', NULL),
(45, 'CAD', '312.71', '26.03.20', '2020-03-25 17:55:20', NULL),
(46, 'CNY', '62.87', '26.03.20', '2020-03-25 17:55:20', NULL),
(47, 'KWD', '1429.77', '26.03.20', '2020-03-25 17:55:20', NULL),
(48, 'KGS', '6.12', '26.03.20', '2020-03-25 17:55:20', NULL),
(49, 'LVL', '300.96', '31.12.13', '2020-03-25 17:55:20', NULL),
(50, 'MDL', '24.85', '26.03.20', '2020-03-25 17:55:20', NULL),
(51, 'NOK', '40.91', '26.03.20', '2020-03-25 17:55:20', NULL),
(52, 'SAR', '118.35', '26.03.20', '2020-03-25 17:55:20', NULL),
(53, 'RUB', '5.72', '26.03.20', '2020-03-25 17:55:20', NULL),
(54, 'XDR', '599.50', '26.03.20', '2020-03-25 17:55:20', NULL),
(55, 'SGD', '307.78', '26.03.20', '2020-03-25 17:55:20', NULL),
(56, 'TRL', '0.10', '05.01.05', '2020-03-25 17:55:20', NULL),
(57, 'UZS', '4.67', '26.03.20', '2020-03-25 17:55:20', NULL),
(58, 'UAH', '16.01', '26.03.20', '2020-03-25 17:55:20', NULL),
(59, 'SEK', '43.36', '26.03.20', '2020-03-25 17:55:20', NULL),
(60, 'CHF', '452.40', '26.03.20', '2020-03-25 17:55:20', NULL),
(61, 'EEK', '12.48', '31.12.10', '2020-03-25 17:55:20', NULL),
(62, 'KRW', '35.86', '26.03.20', '2020-03-25 17:55:20', NULL),
(63, 'JPY', '4.03', '26.03.20', '2020-03-25 17:55:20', NULL),
(64, 'BYN', '173.86', '26.03.20', '2020-03-25 17:55:20', NULL),
(65, 'PLN', '104.92', '26.03.20', '2020-03-25 17:55:20', NULL),
(66, 'ZAR', '25.72', '26.03.20', '2020-03-25 17:55:20', NULL),
(67, 'TRY', '68.43', '26.03.20', '2020-03-25 17:55:20', NULL),
(68, 'HUF', '13.62', '26.03.20', '2020-03-25 17:55:20', NULL),
(69, 'CZK', '17.69', '26.03.20', '2020-03-25 17:55:20', NULL),
(70, 'TJS', '45.65', '26.03.20', '2020-03-25 17:55:21', NULL),
(71, 'HKD', '57.34', '26.03.20', '2020-03-25 17:55:21', NULL),
(72, 'BRL', '87.29', '26.03.20', '2020-03-25 17:55:21', NULL),
(73, 'MYR', '101.32', '26.03.20', '2020-03-25 17:55:21', NULL),
(74, 'AZN', '264.05', '26.03.20', '2020-03-25 17:55:21', NULL),
(75, 'INR', '5.93', '26.03.20', '2020-03-25 17:55:21', NULL),
(76, 'THB', '13.67', '26.03.20', '2020-03-25 17:55:21', NULL),
(77, 'AMD', '9.03', '26.03.20', '2020-03-25 17:55:21', NULL),
(78, 'GEL', '144.98', '26.03.20', '2020-03-25 17:55:21', NULL),
(79, 'IRR', '10.60', '26.03.20', '2020-03-25 17:55:21', NULL),
(80, 'MXN', '18.69', '26.03.20', '2020-03-25 17:55:21', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1584991005),
('m200323_190123_create_currencies_table', 1585091675),
('m200323_190136_create_user_table', 1585091676);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `email`, `auth_key`) VALUES
(1, 'Жасулан', 'Молдакулов', '$2y$13$r97pxn43biXtB246lpcRLuC5FcKrHUpTm6FXrRrrCiswuwJqOWrmK', '87028987788@mail.ru', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
