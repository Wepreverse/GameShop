-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2019 г., 07:07
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `timur_ch16`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gameshop_items`
--

CREATE TABLE `gameshop_items` (
  `id` int(10) NOT NULL,
  `item_name` varchar(355) NOT NULL,
  `item_cost` int(10) NOT NULL,
  `item_desc` varchar(355) NOT NULL,
  `item_img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gameshop_items`
--

INSERT INTO `gameshop_items` (`id`, `item_name`, `item_cost`, `item_desc`, `item_img`) VALUES
(1, 'CS:GO', 499, 'Cool FPS.', 'images/csgo.jpg'),
(5, 'WARFRAME', 0, 'Hilarious, when you play with friends.', 'images/warframe.jpg'),
(7, 'PUBG', 999, 'Hilarious, when you play with friends.', 'images/pubg.jpg'),
(8, 'Battlefield V', 1999, 'True Brain Cancer', 'images/bfV.jpg'),
(10, 'Titanfall 2', 499, 'Overly underrated game with cool mechas.', 'images/titanfall2.jpeg'),
(12, 'Apex Legends', 1999, 'trash', 'images/original.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `gameshop_trash`
--

CREATE TABLE `gameshop_trash` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gameshop_trash`
--

INSERT INTO `gameshop_trash` (`id`, `user_id`, `item_id`) VALUES
(6, 8, 10),
(7, 8, 8),
(8, 8, 7),
(9, 8, 5),
(10, 8, 1),
(11, 8, 5),
(12, 8, 1),
(13, 9, 10),
(14, 9, 8),
(15, 10, 7),
(16, 10, 10),
(17, 10, 8),
(18, 11, 7),
(19, 11, 10),
(20, 11, 8),
(21, 12, 7),
(22, 12, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `gameshop_user`
--

CREATE TABLE `gameshop_user` (
  `id` int(10) NOT NULL,
  `acc_mail` varchar(355) NOT NULL,
  `acc_pass` varchar(355) NOT NULL,
  `acc_name` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gameshop_user`
--

INSERT INTO `gameshop_user` (`id`, `acc_mail`, `acc_pass`, `acc_name`) VALUES
(8, 'test', 'test', 'test'),
(9, 'XD', 'XD', 'XD'),
(10, 'lol', 'lol', 'lol'),
(11, 'm', 'm', 'm'),
(12, 'k', 'k', 'k');

-- --------------------------------------------------------

--
-- Структура таблицы `instagram`
--

CREATE TABLE `instagram` (
  `acc_mail` varchar(355) NOT NULL,
  `acc_pass` varchar(355) NOT NULL,
  `acc_login` varchar(355) NOT NULL,
  `acc_name` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram`
--

INSERT INTO `instagram` (`acc_mail`, `acc_pass`, `acc_login`, `acc_name`) VALUES
('test', '123', 'test', 'test');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gameshop_items`
--
ALTER TABLE `gameshop_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gameshop_trash`
--
ALTER TABLE `gameshop_trash`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gameshop_user`
--
ALTER TABLE `gameshop_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gameshop_items`
--
ALTER TABLE `gameshop_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `gameshop_trash`
--
ALTER TABLE `gameshop_trash`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `gameshop_user`
--
ALTER TABLE `gameshop_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
