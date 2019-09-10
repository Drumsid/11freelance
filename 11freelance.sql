-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2019 г., 21:50
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `11freelance`
--

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `animated_css` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `img_alt` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `link_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `animated_css`, `img_link`, `img_alt`, `link`, `link_title`, `description`) VALUES
(3, 'fadeInRight', 'project_organica.jpg', 'Макет Органика', 'work-organica.php', 'Макет Органика', 'Верстка одностраничного сайта по PSD макету.'),
(4, 'zoomIn', 'project_apollo.jpg', 'Учебный макет Аполло', 'work-apollo.php', 'Учебный макет Аполло', 'Верстка лендинга хостинг компании. Мобильная адаптивность.'),
(5, 'fadeInLeft', 'project_portfolio.jpg', 'Личный сайт портфолио', 'work-portfolio.php', 'Личный сайт портфолио', 'Верстка личного сайта портфолио на котором вы сейчас находитесь.'),
(7, 'fadeInRight', 'project_organica.jpg', 'Макет Органика', 'work-organica.php', 'Макет Органика', 'Верстка одностраничного сайта по PSD макету.'),
(8, 'zoomIn', 'project_apollo.jpg', 'Учебный макет Аполло', 'work-apollo.php', 'Учебный макет Аполло', 'Верстка лендинга хостинг компании. Мобильная адаптивность.');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `title`, `img`, `link`) VALUES
(1, 'первый', 'ссылка на картинку', 'ссылка на обзор'),
(2, 'второй', 'ссылка на картинку', 'ссылка на обзор');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
