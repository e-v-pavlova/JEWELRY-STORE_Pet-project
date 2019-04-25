-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2019 г., 13:39
-- Версия сервера: 5.6.41
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
-- База данных: `smirnov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `new` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `category`, `sale`, `new`) VALUES
(1, 'Подарок вождя', 75990, 'Описание изделия \"Подарок вождя\"', 'zDWyN13RY2k.jpg', 'Подвески', NULL, 1),
(2, 'Искатели приключений', 164990, 'Описание изделия \"Искатели приключений\".\r\nМатериалы: янтарь, ...', '_bkJhz3Nyk8.jpg', 'Комплекты', NULL, NULL),
(3, 'Сочное лето', 34990, 'Пора укутаться потеплее и начать вспоминать сочное лето)', '2VkawNYjXnk.jpg', 'Комплекты', NULL, 1),
(4, 'Путешествие в Шамбалу', 120990, 'Тайна местонахождения загадочной страны, святой земли, высочайшей мудрости и блаженного счастья, в которую могут проникнуть лишь те, чьи мысли безупречно чисты.\r\n\r\nЕсли ты знаешь, что Шамбала находится здесь, на земле, если ты знаешь, что все может быть достигнуто здесь, на земле, тогда и вознаграждение придет здесь, на этой самой земле.\r\n\r\nИ время станет едино: прошлое, настоящее и будущее, объединенное кольцом вечности.', 'M38wyIB6oWA.jpg', 'Комплекты', 1, NULL),
(5, 'Коралл ', 91990, 'Описание перстня \"Коралл\"', 'tAqdUshxIRY.jpg', 'Кольца', NULL, NULL),
(8, 'Шлем рогатый', 120, 'Описание изделия \"Шлем рогатый\"', 'W2E0FHuc424.jpg', 'Кольца', 1, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
