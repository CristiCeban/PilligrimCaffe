-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 04 2020 г., 17:13
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history_delivery`
--

CREATE TABLE `history_delivery` (
  `idhistory_delivery` int(11) NOT NULL,
  `nume` varchar(45) NOT NULL,
  `prenume` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `pret_total` int(11) NOT NULL,
  `delivery_list` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `produs`
--

CREATE TABLE `produs` (
  `idProdus` int(11) NOT NULL,
  `NumeProdus` varchar(45) NOT NULL,
  `Pret` int(11) NOT NULL,
  `Image` varchar(45) DEFAULT NULL,
  `ImagePath` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUtilizator` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUtilizator`, `login`, `password`, `role`) VALUES
(1, 'cristi', 'cristi', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history_delivery`
--
ALTER TABLE `history_delivery`
  ADD PRIMARY KEY (`idhistory_delivery`);

--
-- Индексы таблицы `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`idProdus`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUtilizator`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history_delivery`
--
ALTER TABLE `history_delivery`
  MODIFY `idhistory_delivery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `produs`
--
ALTER TABLE `produs`
  MODIFY `idProdus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUtilizator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
