-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2016 г., 21:32
-- Версия сервера: 5.5.45-log
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `futbol`
--

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familiya` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `stag` int(2) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id`, `familiya`, `name`, `position`, `stag`, `role`) VALUES
(0, 'Иванов', 'Семён', 'Полузащитник', 25, 2),
(15, 'Малов', 'Валерий', 'Защитник', 36, 1),
(16, 'Власов', 'Роман', 'Защитник', 33, 1),
(17, 'Антонов', 'Евгений', 'Вратарь', 33, 1),
(19, 'Сметанкин', 'Сергей', 'Полузащитник', 36, 1),
(20, 'Батуро', 'Алексей', 'Защитник', 28, 1),
(21, 'Курбатов', 'Илья', 'Полузащитник', 27, 1),
(22, 'Якубов', 'Николай', 'Полузащитник', 24, 1),
(23, 'Гусаров', 'Николай', 'Полузащитник', 24, 1),
(24, 'Кошкарёв', 'Александр', 'Защитник', 29, 1),
(25, 'Вихрев', 'Денис', 'Полузащитник', 23, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
