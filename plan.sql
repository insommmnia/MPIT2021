-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2021 г., 18:40
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
-- База данных: `mpit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `plan`
--

CREATE TABLE `plan` (
  `id` int(100) NOT NULL,
  `idwor` int(100) NOT NULL,
  `pl1` varchar(500) NOT NULL,
  `pl2` varchar(500) NOT NULL,
  `pl3` varchar(500) NOT NULL,
  `pl4` varchar(500) NOT NULL,
  `pl5` varchar(500) NOT NULL,
  `pl6` varchar(500) NOT NULL,
  `task` varchar(500) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `plan`
--

INSERT INTO `plan` (`id`, `idwor`, `pl1`, `pl2`, `pl3`, `pl4`, `pl5`, `pl6`, `task`, `comment`) VALUES
(1, 0, '', '', '', '', '', '', '', ''),
(2, 0, 'в 8 утра иду бегать', '', '', '', '', '', '', ''),
(3, 28, 'Доделать UI профиля с 10 до 13', 'Обед до 13:30', 'Свободное время', 'Свободное время', 'Свободное время', 'Свободное время', 'Свободное время', 'Свободное время'),
(5, 29, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(6, 30, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(7, 31, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(8, 32, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(9, 33, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(10, 34, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(11, 35, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(12, 36, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(13, 37, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(14, 38, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(15, 39, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет'),
(16, 40, 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет', 'ничего нет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
