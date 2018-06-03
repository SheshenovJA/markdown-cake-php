-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2018 г., 01:06
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `markdown`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `img_src` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `login`, `img_src`, `pass`) VALUES
(5, 'admin', '/imgs/qq', '$2y$10$s41EB4vg6db/iLJEfHnr9uaaxbvYp1u.WWLXluCBWSRsdNKA2gdpS');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_configs`
--

CREATE TABLE `admin_configs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_configs`
--

INSERT INTO `admin_configs` (`id`, `name`, `value`) VALUES
(1, 'show_notif', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin_configs`
--
ALTER TABLE `admin_configs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `admin_configs`
--
ALTER TABLE `admin_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
