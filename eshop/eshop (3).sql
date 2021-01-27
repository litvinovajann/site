-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 09:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `core_goods`
--

CREATE TABLE `core_goods` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` int(10) DEFAULT NULL,
  `picture` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `core_goods`
--

INSERT INTO `core_goods` (`id`, `title`, `category`, `picture`, `price`, `description`, `code`) VALUES
(1, 'Куртка синяя', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/1.jpg', 5400, 'Очень синяя куртка', 101000),
(2, 'Кожаная куртка', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/4.jpg', 6888, 'Очень кожаная куртка', 101001),
(3, 'Джинсы синие', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/12.jpg', 3200, 'Синие красивые джинсы', 101002),
(4, 'Куртка дутая', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/2.jpg', 13500, 'Дутая зимняя куртка с искусственным наполнителем', 101003),
(5, 'Ветровка летняя', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/3.png', 4300, 'Мужская летняя ветровка темно-зеленого цвета', 101004),
(6, 'Зеленый жакет', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/5.jpg', 4000, 'Зеленый жакет на молнии ', 109307),
(7, 'Стремная кожаная куртка', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/6.jpg', 9000, 'Некрасивая', 109398),
(8, 'Кеды adidas', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/7.jpg', 4999, 'Серые кожаные кеды с тремя полосками', 109308),
(9, 'Черные странные кеды', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/8.jpg', 2999, 'черные черные кеды', 109309),
(10, 'Черные кеды с полоской', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/9.jpg', 5999, 'Натуральная кожа', 109310),
(11, 'Сапоги серые', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/10.jpg', 10999, 'Серые осенние сапоги ', 109311),
(12, 'Джинсы синие', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/11.jpg', 2999, 'Темно-синие джинсы на средней посадке', 109312),
(13, 'Голубые джинсы ', 2, 'http://localhost:8080/qwerty/eshop/img/catalog/12.jpg', 2999, 'Голубые джинсы скинни на низкой посадке', 109313);

-- --------------------------------------------------------

--
-- Table structure for table `core_sections`
--

CREATE TABLE `core_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `icon` varchar(1000) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `cover_photo` varchar(1000) DEFAULT NULL,
  `background` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `core_sections`
--

INSERT INTO `core_sections` (`id`, `title`, `icon`, `description`, `cover_photo`, `background`) VALUES
(1, 'ДЖИНСОВЫЕ КУРТКИ', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', 'NEW ARRIVAL', 'http://localhost:8080/qwerty/eshop/img/1.jpg', NULL),
(3, '    ', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', NULL, 'http://localhost:8080/qwerty/eshop/img/5.jpg', NULL),
(4, '    ', 'http://localhost:8080/qwerty/eshop/img/icons/!.png', 'каждый сезон мы подготавливаем для вас исключительно лучшую модную одежду. Следите за нашими модными новинками', NULL, '#bbbbbb'),
(5, 'ДЖИНСЫ', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', 'от 3200 руб.', 'http://localhost:8080/qwerty/eshop/img/2.jpg', NULL),
(6, '\r\nАКСЕССУАРЫ', 'http://localhost:8080/qwerty/eshop/img/icons/arrow-left.png', NULL, NULL, '#606060'),
(7, '    ', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', NULL, 'http://localhost:8080/qwerty/eshop/img/3.jpg', NULL),
(8, '    ', 'http://localhost:8080/qwerty/eshop/img/icons/!.png', 'Самые низкие цены в Москве.\r\nНашли дешевле? Вернем разницу.', NULL, '#bbbbbb'),
(9, 'СПОРТИВНАЯ ОДЕЖДА', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', 'от 590 руб.', 'http://localhost:8080/qwerty/eshop/img/6.jpg', NULL),
(10, 'ЭЛЕГАНТНАЯ ОБУВЬ\r\n', 'http://localhost:8080/qwerty/eshop/img/icons/arrow-left.png', 'БОТИНКИ, КРОССОВКИ', NULL, '#606060'),
(11, 'ДЕТСКАЯ ОДЕЖДА\r\n', 'http://localhost:8080/qwerty/eshop/img/icons/ghost.png', 'NEW ARRIVAL', 'http://localhost:8080/qwerty/eshop/img/4.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_goods`
--
ALTER TABLE `core_goods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `core_sections`
--
ALTER TABLE `core_sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_goods`
--
ALTER TABLE `core_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `core_sections`
--
ALTER TABLE `core_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
