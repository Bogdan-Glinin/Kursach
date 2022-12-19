-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2022 г., 00:38
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sneakerShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `sneakerId` int NOT NULL,
  `size` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `userId`, `sneakerId`, `size`) VALUES
(7, 1, 1, 37),
(8, 1, 4, 38),
(9, 1, 1, 36);

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `sneakerId` int NOT NULL,
  `size` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sneaker`
--

CREATE TABLE `sneaker` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `size36` int NOT NULL,
  `size37` int NOT NULL,
  `size38` int NOT NULL,
  `size39` int NOT NULL,
  `size40` int NOT NULL,
  `size41` int NOT NULL,
  `size42` int NOT NULL,
  `size43` int NOT NULL,
  `size44` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sneaker`
--

INSERT INTO `sneaker` (`id`, `name`, `price`, `img1`, `img2`, `img3`, `img4`, `img5`, `size36`, `size37`, `size38`, `size39`, `size40`, `size41`, `size42`, `size43`, `size44`) VALUES
(1, 'Кроссовки Nike Blazer Low 77', 14990, '/img/catalog/nike/blazer low 77/1.jpg', '/img/catalog/nike/blazer low 77/2.jpg', '/img/catalog/nike/blazer low 77/3.jpg', '/img/catalog/nike/blazer low 77/4.jpg', '/img/catalog/nike/blazer low 77/5.jpg', 15, 15, 15, 15, 15, 15, 15, 15, 15),
(2, 'Кроссовки Nike Blazer Mid 77', 12395, '/img/catalog/nike/blazer mid 77/1.jpg', '/img/catalog/nike/blazer mid 77/2.jpg', '/img/catalog/nike/blazer mid 77/3.jpg', '/img/catalog/nike/blazer mid 77/4.jpg', '/img/catalog/nike/blazer mid 77/5.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Кроссовки adidas Forum Low', 14993, '/img/catalog/adidas/forum low/1.jpeg', '/img/catalog/adidas/forum low/2.jpeg', '/img/catalog/adidas/forum low/3.jpeg', '/img/catalog/adidas/forum low/4.jpeg', '/img/catalog/adidas/forum low/5.jpeg', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Кроссовки PUMA RS-Z Core', 12999, '/img/catalog/puma/rs-z/1.jpg', '/img/catalog/puma/rs-z/2.jpg', '/img/catalog/puma/rs-z/3.jpg', '/img/catalog/puma/rs-z/4.jpg', '/img/catalog/puma/rs-z/5.jpg', 5, 1, 1, 4, 1, 1, 5, 6, 9),
(5, 'Ботинки PUMA Suede Mid', 14499, '/img/catalog/puma/suede mid water resistant/1.jpg', '/img/catalog/puma/suede mid water resistant/2.jpg', '/img/catalog/puma/suede mid water resistant/3.jpg', '/img/catalog/puma/suede mid water resistant/4.jpg', '/img/catalog/puma/suede mid water resistant/5.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Кеды Converse Chuck Taylord', 12299, '/img/catalog/converse/chuck chuck/1.jpg', '/img/catalog/converse/chuck chuck/2.jpg', '/img/catalog/converse/chuck chuck/3.jpg', '/img/catalog/converse/chuck chuck/4.jpg', '/img/catalog/converse/chuck chuck/5.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Кроссовки Reebok Club C 85', 10999, '/img/catalog/rebok/club c 85/1.jpg', '/img/catalog/rebok/club c 85/2.jpg', '/img/catalog/rebok/club c 85/3.jpg', '/img/catalog/rebok/club c 85/4.jpg', '/img/catalog/rebok/club c 85/5.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Кеды Vans Sk8-Hi', 9699, '/img/catalog/vans/sk8/1.jpeg', '/img/catalog/vans/sk8/2.jpeg', '/img/catalog/vans/sk8/3.jpeg', '/img/catalog/vans/sk8/4.jpeg', '/img/catalog/vans/sk8/5.jpeg', 15, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(319) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(1, 'Игорь', 'twinkl31337@gmail.com', 'e4po4mack', NULL),
(2, 'Олег', 'admin', 'admin', '1'),
(5, 'Богдан', 'gdina@gmail.com', '12121212', NULL),
(6, 'Богдан', 'gdina@gmail.com', '12121212', NULL),
(7, 'Богдан', 'e4po4mack@gmail.com', '12121212', NULL),
(8, 'олег', 'sdfujisdfujisdf@gmail.com', '12121212', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sneaker`
--
ALTER TABLE `sneaker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT для таблицы `sneaker`
--
ALTER TABLE `sneaker`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
