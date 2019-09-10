-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2019 г., 21:49
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
-- База данных: `myresumephp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `job` varchar(265) NOT NULL,
  `email` varchar(265) NOT NULL,
  `phone` varchar(265) NOT NULL,
  `site` varchar(265) NOT NULL,
  `linkedin` varchar(265) NOT NULL,
  `linkedinLink` varchar(265) NOT NULL,
  `github` varchar(265) NOT NULL,
  `githubLink` varchar(265) NOT NULL,
  `vk` varchar(265) NOT NULL,
  `vkLink` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `img`, `job`, `email`, `phone`, `site`, `linkedin`, `linkedinLink`, `github`, `githubLink`, `vk`, `vkLink`) VALUES
(1, 'Денис Солодухин', 'myImg.png', 'junior PHP Developer', 'den-sidnay@yandex.ru', '+7 965 113 00 80', 'in the development', 'linkedin', 'https://www.linkedin.com/in/drumsid/', 'github', 'https://github.com/Drumsid', 'В контакте', 'https://vk.com/id39491061');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(1, 'test'),
(2, 'test'),
(3, 'test'),
(4, ' новый комент'),
(5, ' новый комент'),
(6, 'пробуем '),
(7, 'пробуем '),
(8, 'пробуем '),
(9, 'пробуем '),
(10, 'ячсам');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `course` varchar(256) NOT NULL,
  `school` varchar(256) NOT NULL,
  `timeIn` int(11) NOT NULL,
  `timeOut` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id`, `course`, `school`, `timeIn`, `timeOut`) VALUES
(1, 'HTML, CSS', 'internet school', 2015, '2016'),
(2, 'backend php', 'internet scholl', 2018, 'to present');

-- --------------------------------------------------------

--
-- Структура таблицы `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `post` varchar(256) NOT NULL,
  `timeIn` int(11) NOT NULL,
  `timeOut` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `details` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `experiences`
--

INSERT INTO `experiences` (`id`, `post`, `timeIn`, `timeOut`, `company`, `details`) VALUES
(1, 'web project development', 2017, 'to present', 'freelance', 'HTML, CSS, JavaScript, PHP creation of web projects'),
(2, 'HTML - development', 2019, 'to present', 'Aliance Trucks', 'HTML, CSS, JavaScript, PHP creation of web projects, and support for company sites on CRM Bitrix');

-- --------------------------------------------------------

--
-- Структура таблицы `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `interes` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `interests`
--

INSERT INTO `interests` (`id`, `interes`) VALUES
(1, 'Jesus Christ'),
(2, 'Worship'),
(3, 'fishing'),
(4, 'guitar'),
(5, 'drums');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `languag` varchar(256) NOT NULL,
  `levelLanguag` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `languag`, `levelLanguag`) VALUES
(1, 'russian', 'родной'),
(2, 'english', 'начальный');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectLink` varchar(256) NOT NULL,
  `projectTitle` varchar(256) NOT NULL,
  `projectDescription` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `projectLink`, `projectTitle`, `projectDescription`) VALUES
(1, 'https://github.com/Drumsid/learn-php-part-2', 'training php 2', 'Learning to create an online store on PhP. At that moment, I am not yet familiar with the object-oriented approach.'),
(2, 'https://github.com/Drumsid/learn-php-part-1', 'training php 1', 'Learning to basic PhP. At that moment, I am not yet familiar with the object-oriented approach.'),
(3, 'https://github.com/Drumsid/webcademy_inetmagazin_estore', 'inetmagazin', 'I learned how to make an online store in php. It seems to happen. Did admin area, queries to the database, sending the request by e-mail, etc.'),
(4, 'https://github.com/Drumsid/wolrus_dolgopa_test', 'wolrus_dolgopa_test', 'html framework for the next site in php for our church, now a project in the development and filling of content.'),
(5, 'https://github.com/Drumsid/maiami_flex', 'maiami_flex', 'Landing creation.'),
(6, 'https://github.com/Drumsid/EllA_wordpress', 'EllA_wordpress', 'Made a skeleton site for WordPress. This site is in the network, but in its further development, I have not participated.'),
(7, 'https://github.com/Drumsid/kinomonstr_bootstrap', 'kinomonstr_bootstrap', 'One of my first bootstrap dating. Did a test site with movies.');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `scillTitle` varchar(256) NOT NULL,
  `scillLevel` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `scillTitle`, `scillLevel`) VALUES
(1, 'HTML5 &amp; CSS', '85%'),
(2, 'Photoshop', '65%'),
(3, 'Javascript &amp; jQuery', '45%'),
(4, 'PhP', '55%'),
(5, 'Yii2', '35%');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
