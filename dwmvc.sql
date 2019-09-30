-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2019 г., 22:34
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dwmvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `iptable`
--

CREATE TABLE `iptable` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `iptable`
--

INSERT INTO `iptable` (`id`, `ip`, `login`, `event`, `date`) VALUES
(1, '', '', '0', '127.0.0.1'),
(2, '127.0.0.1', '', '0', '17/09, 15:35:08'),
(3, '127.0.0.1', '', '0', '17/09/2019, 15:35:32'),
(4, '127.0.0.1', '', '0', '17/09/2019, 15:38:16'),
(5, '127.0.0.1', 'asf', '0', '17/09/2019, 15:41:54'),
(6, '127.0.0.1', 'admin', '0', '17/09/2019, 15:42:03'),
(7, '127.0.0.1', 'admin', '0', '17/09/2019, 15:42:35'),
(8, '127.0.0.1', 'admin', '0', '17/09/2019, 15:43:11'),
(9, '127.0.0.1', 'admin', '1', '17/09/2019, 15:43:22'),
(10, '127.0.0.1', 'admin', 'logon', '17/09/2019, 15:48:09'),
(11, '127.0.0.1', 'popa', 'reg', '17/09/2019, 15:49:44'),
(12, '127.0.0.1', 'admin', 'logon', '17/09/2019, 15:52:39'),
(13, '127.0.0.1', 'user', 'logon', '17/09/2019, 16:11:55'),
(14, '127.0.0.1', 'admin', 'logon', '17/09/2019, 16:12:04');

-- --------------------------------------------------------

--
-- Структура таблицы `log_transfer`
--

CREATE TABLE `log_transfer` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(15) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver_id` int(15) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log_transfer`
--

INSERT INTO `log_transfer` (`id`, `sender_id`, `sender`, `receiver_id`, `receiver`, `text`, `date`, `money`, `item`) VALUES
(1, 0, 'admin', 0, 'user', 'Просто так', '23/12, 12:19', 10000, 'NULL'),
(2, 0, 'admin', 0, 'user', 'Проверка!!!', '23/12, 15:06', 5000, 'NULL'),
(3, 0, 'user', 0, 'admin', 'Обраточка', '23/12, 15:08', 3000, 'NULL'),
(4, 0, 'admin', 0, 'user', '100', '24/04, 14:55:05', 100, 'NULL'),
(5, 0, 'admin', 0, 'user', '', '12/12, 14:57:58', 1, 'NULL'),
(6, 0, 'admin', 0, 'user', '', '12/12, 14:58:25', 1, 'NULL'),
(7, 0, 'admin', 0, 'admin', 'Без примечания', '12/12, 14:58:52', 1, 'NULL'),
(8, 0, 'admin', 0, 'user', 'asd', '17/09, 11:09:14', 1, 'NULL'),
(9, 0, 'admin', 0, 'user', 'asd', '17/09, 11:18:27', 1, 'NULL'),
(10, 0, 'admin', 0, 'user', 'asd', '17/09, 11:18:30', 1, 'NULL'),
(11, 0, 'admin', 0, 'user', 'asd', '17/09, 11:18:31', 1, 'NULL'),
(12, 0, 'faka', 0, 'user', 'asd', '17/09, 11:18:51', 1, 'NULL'),
(13, 0, 'admin', 0, 'user', 'asd', '17/09, 11:18:57', 1, 'NULL'),
(14, 0, 'admin', 0, 'user', 'asd', '17/09, 11:19:09', 1, 'NULL'),
(15, 0, 'admin', 0, 'user', 'asd', '17/09, 11:19:11', 1, 'NULL'),
(16, 0, 'admin', 0, 'user', 'Без примечания', '17/09, 11:19:14', 1, 'NULL'),
(17, 0, 'admin', 0, 'user', 'Без примечания', '17/09, 11:19:30', 1, 'NULL'),
(18, 0, 'admin', 0, 'user', 'Без примечания', '17/09, 11:20:18', 1, 'NULL'),
(19, 0, 'admin', 0, 'user', 'qwe', '17/09, 13:20:49', 12, 'NULL'),
(20, 0, 'admin', 0, 'admin1', 'Без примечания', '17/09, 14:03:26', 1, 'NULL'),
(21, 8, 'admin', 1, 'user', 'Без примечания', '17/09, 14:19:31', 112, 'NULL'),
(22, 8, 'admin', 1, 'User', 'Отправка от Админ', '17/09, 14:47:48', 666, 'NULL'),
(23, 1, 'user', 8, 'admin', 'Без примечания', '17/09, 16:12:00', 1, 'NULL');

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE `mail` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_mail` varchar(256) NOT NULL,
  `type` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `new` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mail`
--

INSERT INTO `mail` (`id`, `id_mail`, `type`, `sender`, `receiver`, `date`, `title`, `text`, `new`) VALUES
(30, '1513749029', 1, 'admin', 'admin', '20/12, 14:50', 'RE:', '123213', 0),
(32, '1513753046', 2, 'admin', 'user', '20/12, 15:57', 'RE:', '', 0),
(33, '1513754429', 1, 'admin', 'user', '20/12, 16:20', 'Проверка', 'валовра', 0),
(34, '1513754429', 2, 'admin', 'user', '20/12, 16:20', 'Проверка', 'валовра', 0),
(38, '1513754570', 2, 'admin', 'admin', '20/12, 16:22', '!', 'dfjkfdj', 0),
(40, '1513756018', 2, 'admin', 'admin', '20/12, 16:46', '!', 'dfsfd', 0),
(41, '1513756225', 1, 'admin', 'user', '20/12, 16:50', 'Почта', 'раз раз', 0),
(42, '1513756225', 2, 'admin', 'user', '20/12, 16:50', 'Почта', 'раз раз', 0),
(43, '1513756351', 1, 'user', 'admin', '20/12, 16:52', 'RE: Почта', 'два два', 0),
(44, '1513756351', 2, 'user', 'admin', '20/12, 16:52', 'RE: Почта', 'два два', 0),
(46, '1513756412', 2, 'admin', 'user', '20/12, 16:53', 'RE: RE: Почта', 'Три три', 0),
(47, '1529498375', 1, 'admin', 'ADMIN', '20/06, 15:39', 'RE:', 'DFSD', 0),
(48, '1529498375', 2, 'admin', 'ADMIN', '20/06, 15:39', 'RE:', 'DFSD', 0),
(49, '1530790782', 1, 'admin', 'admin', '05/07, 14:39', 'RE:', 'sadj', 0),
(50, '1530790782', 2, 'admin', 'admin', '05/07, 14:39', 'RE:', 'sadj', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `map`
--

CREATE TABLE `map` (
  `x` int(2) DEFAULT NULL,
  `y` int(2) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `bot` int(1) DEFAULT NULL,
  `area1` int(2) DEFAULT NULL,
  `pri` int(11) DEFAULT NULL,
  `area2` int(2) DEFAULT NULL,
  `area3` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `map`
--

INSERT INTO `map` (`x`, `y`, `name`, `bot`, `area1`, `pri`, `area2`, `area3`) VALUES
(1, 1, '11', 0, 0, 100000, NULL, NULL),
(1, 2, '12', 0, 0, 100000, NULL, NULL),
(1, 3, '13', 0, 0, 100000, NULL, NULL),
(1, 4, '14', 0, 0, 100000, NULL, NULL),
(1, 5, '15', 0, 0, 100000, NULL, NULL),
(1, 6, '16', 0, 0, 100000, NULL, NULL),
(1, 7, '17', 0, 0, 100000, NULL, NULL),
(2, 1, '21', 0, 0, 100000, NULL, NULL),
(2, 2, '22', 0, 0, 100000, NULL, NULL),
(2, 3, '23', 0, 0, 100000, NULL, NULL),
(2, 4, '24', 0, 0, 100000, NULL, NULL),
(2, 5, '25', 0, 0, 100000, NULL, NULL),
(2, 6, '26', 0, 0, 100000, NULL, NULL),
(2, 7, '27', 0, 0, 100000, NULL, NULL),
(3, 1, '31', 0, 0, 100000, NULL, NULL),
(3, 2, '32', 0, 0, 100000, NULL, NULL),
(3, 3, '33', 0, 0, 100000, NULL, NULL),
(3, 4, 'Gleam of Hope', 0, 0, 84000, 0, 0),
(3, 5, 'Lost Way', 0, 0, 180000, 0, 0),
(3, 6, '36', 0, 0, 100000, NULL, NULL),
(3, 7, '37', 0, 0, 100000, NULL, NULL),
(4, 1, '41', 0, 0, 100000, NULL, NULL),
(4, 2, '42', 0, 0, 100000, NULL, NULL),
(4, 3, 'Cry of Freedom', 0, 0, 84000, NULL, 0),
(4, 4, 'Oasis', 0, 0, 84000, NULL, 0),
(4, 5, 'Mirage', 0, 0, 100000, NULL, NULL),
(4, 6, '46', 0, 0, 100000, NULL, NULL),
(4, 7, '47', 0, 0, 100000, NULL, NULL),
(5, 1, '51', 0, 0, 100000, NULL, NULL),
(5, 2, '52', 0, 0, 100000, NULL, NULL),
(5, 3, 'The Graveyard Heart', 0, 0, 180000, 0, 0),
(5, 4, 'Realty', 0, 0, 100000, NULL, NULL),
(5, 5, '55', 0, 0, 100000, NULL, NULL),
(5, 6, '56', 0, 0, 100000, NULL, NULL),
(5, 7, '57', 0, 0, 100000, NULL, NULL),
(6, 1, '61', 0, 0, 100000, NULL, NULL),
(6, 2, '62', 0, 0, 100000, NULL, NULL),
(6, 3, '63', 0, 0, 100000, NULL, NULL),
(6, 4, '64', 0, 0, 100000, NULL, NULL),
(6, 5, '65', 0, 0, 100000, NULL, NULL),
(6, 6, '66', 0, 0, 100000, NULL, NULL),
(6, 7, '67', 0, 0, 100000, NULL, NULL),
(7, 1, '71', 0, 0, 100000, NULL, NULL),
(7, 2, '72', 0, 0, 100000, NULL, NULL),
(7, 3, '73', 0, 0, 100000, NULL, NULL),
(7, 4, '74', 0, 0, 100000, NULL, NULL),
(7, 5, '75', 0, 0, 100000, NULL, NULL),
(7, 6, 'The Smile of Rocks', 0, 0, 100000, NULL, NULL),
(7, 7, '77', 0, 0, 100000, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `message_id` int(11) UNSIGNED NOT NULL,
  `thread_id` int(11) NOT NULL,
  `message_text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `realty`
--

CREATE TABLE `realty` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `space` int(11) NOT NULL,
  `sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `realty`
--

INSERT INTO `realty` (`id`, `title`, `owner_id`, `owner_name`, `price`, `space`, `sector`) VALUES
(1, 'Водная станция', 8, 'admin', 100, 10, 25);

-- --------------------------------------------------------

--
-- Структура таблицы `section`
--

CREATE TABLE `section` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `section`
--

INSERT INTO `section` (`id`, `title`, `group`) VALUES
(1, 'Новости', 'DW.xyz'),
(2, 'Общий', 'DW.xyz'),
(3, 'Баги&Глюки', 'Help'),
(4, 'Вопросы', 'Help');

-- --------------------------------------------------------

--
-- Структура таблицы `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `rus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skill`
--

INSERT INTO `skill` (`id`, `title`, `rus`) VALUES
(1, 'pistol', 'Пистолеты'),
(2, 'auto', 'Автоматы'),
(3, 'rifle', 'Ружья'),
(4, 'snipe', 'Винтовки'),
(5, 'minigun', 'Пулиметы'),
(6, 'grenades', 'Гранаты');

-- --------------------------------------------------------

--
-- Структура таблицы `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(11) NOT NULL,
  `message_id` int(11) UNSIGNED NOT NULL,
  `section_id` int(11) NOT NULL,
  `thread_type` int(1) NOT NULL,
  `thread_title` varchar(50) NOT NULL,
  `thread_message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `thread`
--

INSERT INTO `thread` (`thread_id`, `message_id`, `section_id`, `thread_type`, `thread_title`, `thread_message`, `user_id`, `timestamp`) VALUES
(1, 1, 1, 1, 'Первая новость', 'Пусто', 8, '05/07/2018, 14:38'),
(2, 2, 1, 1, 'Вторая новость', 'Вот такая новость', 8, '05/07/2018, 14:38'),
(3, 1, 1, 2, '', 'Дополним', 8, '05/07/2018, 14:38');

-- --------------------------------------------------------

--
-- Структура таблицы `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `type` enum('topic','reply','','') NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `user` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `threads`
--

INSERT INTO `threads` (`id`, `mid`, `fid`, `type`, `title`, `text`, `user`, `user_id`, `date`) VALUES
(1, 0, 1, 'topic', 'Первая новость', 'Текст первой новости', '1', 0, '25/11, 05:04'),
(2, 1, 0, 'reply', '', 'Респект', '1', 0, '25/11, 05:04'),
(3, 0, 1, 'topic', 'Вторая новость', 'Текст', '1', 0, '25/11, 05:04'),
(4, 3, 0, 'reply', '', 'Отвечаю', '1', 0, '25/11, 05:04'),
(5, 0, 3, 'topic', '123', '321', 'admin', 0, '25/11, 05:04'),
(6, 0, 2, 'topic', 'Правила общего форума', 'Первое правило', '1', 0, '25/11, 05:04'),
(7, 1, 0, 'reply', '', 'ва', '1', 0, '25/11, 05:04'),
(8, 1, 0, 'reply', '', 'ваыва', '1', 0, '25/11, 05:04'),
(9, 0, 1, 'topic', 'ыва', 'ыва', '1', 0, '25/11, 05:04'),
(10, 0, 1, 'topic', 'еув', 'еу', '1', 0, '25/11, 05:04'),
(11, 10, 0, 'reply', '', 'увку', '1', 0, '25/11, 05:04'),
(12, 10, 0, 'reply', '', '345', '1', 0, '25/11, 05:04'),
(13, 0, 1, 'topic', 'ап', 'па', '1', 0, '25/11, 05:04'),
(14, 0, 1, 'topic', '123', '321', 'admin', 0, '25/11, 05:04'),
(15, 0, 4, 'topic', 'Всем привет', 'Знакомимся )\r\nыфв', '1', 0, '25/11, 05:04'),
(16, 15, 0, 'reply', '', 'уцк\r\n\r\nцук', '1', 0, '25/11, 05:04'),
(17, 15, 0, 'reply', '', 'ывач\r\n\r\n\r\nчсм', '1', 0, '25/11, 05:04'),
(18, 15, 0, 'reply', '', 'ыва\r\nыва', '1', 0, '25/11, 05:04'),
(19, 15, 0, 'reply', '', 'выа\r\nыва', '1', 0, '25/11, 05:04'),
(20, 15, 0, 'reply', '', 'авпвап\r\n\r\nпарр', '1', 0, '25/11, 05:04'),
(21, 3, 0, 'reply', '', 'RFC Destination: XYZ_TRUST\r\nConnection Type 3: ABAP Connection\r\nDescription: Trusted RFC connection for XYZ System Client 100\r\nTarget host: <target hostname>\r\nSystem Number: Instance number of XYZ\r\nGateway Host: Recommended to provide the gateway host\r\nGateway Service: sapgw<nn> where <nn> is the instance number of XYZ\r\nUnder the Logon & Security tab:\r\nEnter the Language\r\nEnter the client\r\nUser: Specify a user with Admin access (SAP_ALL / SAP_NEW) on XYZ\r\nPassword: Password for above user\r\nTrust Relationship: No\r\nSave and perform an authorization test (Ctrl + F4)', '1', 0, '25/11, 05:04'),
(22, 1, 0, 'reply', '', 'ва', '1', 0, '25/11, 05:04'),
(23, 1, 0, 'reply', '', 'Привет', '1', 0, '25/11, 05:04'),
(24, 0, 2, 'topic', 'По игре', 'че скажете?', '1', 0, '25/11, 05:04'),
(25, 24, 0, 'reply', '', 'ва', '1', 0, '25/11, 05:04'),
(26, 24, 0, 'reply', '', 'фы', '1', 0, '25/11, 05:04'),
(27, 1, 0, 'reply', '', 'факт', '1', 0, '25/11, 05:04'),
(28, 14, 0, 'reply', '', 'цук', '1', 0, '25/11, 05:04'),
(29, 14, 0, 'reply', '', 'авп', '1', 0, '25/11, 05:04'),
(30, 0, 3, 'topic', 'вап', 'вап', '1', 0, '25/11, 05:04'),
(31, 0, 1, 'topic', 'Тест', 'Времени', '1', 0, '25/11, 05:04'),
(32, 0, 3, 'topic', 'Новая', 'тема', '1', 0, '25/11, 05:34'),
(33, 32, 0, 'reply', '', 'Новая', '1', 0, '25/11, 05:34'),
(34, 32, 0, 'reply', '', 'ва', '1', 0, '25/11, 05:34'),
(35, 32, 0, 'reply', '', 'ва', '1', 0, '25/11, 05:35'),
(36, 32, 0, 'reply', '', 'ва', '1', 0, '25/11, 11:38'),
(37, 0, 3, 'topic', '444', '444', '1', 0, '25/11, 11:39'),
(38, 0, 1, 'topic', 'sdf', 'sdf', '1', 0, '25/11, 11:52'),
(39, 0, 1, 'topic', '234', '234', '1', 0, '25/11, 11:55'),
(40, 0, 1, 'topic', 'sdf', 'sdf', '1', 0, '25/11, 11:56'),
(41, 0, 5, 'topic', 'Первая тема', 'раз', '1', 0, '25/11, 15:45'),
(42, 0, 4, 'topic', 'Проверка логина', 'раз \r\nраз', 'admin', 0, '26/11, 14:25'),
(43, 42, 0, 'reply', '', 'выа', '', 0, '26/11, 14:26'),
(44, 42, 0, 'reply', '', 'ва', '', 0, '26/11, 14:32'),
(45, 42, 0, 'reply', '', 'ва', 'admin', 0, '26/11, 14:32'),
(46, 0, 1, 'topic', 'Новая тема', 'раз ращ', 'admin', 0, '26/11, 16:42'),
(48, 0, 1, 'topic', 'Д\'артаньян', 'кцу', 'admin', 0, '27/11, 08:36'),
(51, 48, 0, 'reply', '', '<script>alert(\"У вас XSS протек.\");</script>', 'admin', 0, '27/11, 08:51'),
(52, 48, 0, 'reply', '', 'alert(\"У вас XSS протек.\");', 'admin', 0, '27/11, 08:52'),
(53, 0, 1, 'topic', 'ыва', 'ыва', 'admin', 0, '27/11, 09:27'),
(54, 53, 0, 'reply', '', 'фвфыв', 'admin', 0, '27/11, 09:43'),
(55, 0, 1, 'topic', 'Hfp', 'hfdk', 'user3', 0, '30/11, 14:32'),
(56, 0, 4, 'topic', 'asd', 'asd', 'admin', 0, '09/12, 12:25'),
(57, 56, 0, 'reply', '', 'asd', 'admin', 0, '09/12, 12:25'),
(58, 56, 0, 'reply', '', 'fds', 'admin', 0, '09/12, 12:25'),
(59, 58, 0, 'reply', '', 'sdf', 'admin', 0, '02/02, 17:25'),
(60, 58, 0, 'reply', '', 'fgh', 'admin', 0, '02/02, 17:25'),
(61, 0, 1, 'topic', 'sdf', 'sdf', 'admin', 0, '03/02, 08:12'),
(62, 24, 0, 'reply', '', 'adasd\r\nasdasd\r\nasd', 'admin', 0, '03/02, 08:14'),
(63, 0, 6, 'topic', 'выа', 'ываыва', 'admin', 0, '03/02, 09:19'),
(64, 63, 0, 'reply', '', 'ва', 'admin', 0, '03/02, 09:20'),
(65, 0, 1, 'topic', '123', '123', 'admin', 0, '03/02, 09:31'),
(66, 65, 0, 'reply', '', 'лрлр', 'admin', 0, '04/02, 10:20'),
(67, 0, 1, 'topic', '123', '123', 'admin', 0, '04/02, 15:32'),
(68, 0, 1, 'topic', '321', '321', 'admin', 0, '04/02, 15:32'),
(69, 0, 1, 'topic', 'asd', 'asd', 'admin', 0, '04/02, 15:35'),
(70, 0, 1, 'topic', 'zxc', 'zxc', '', 0, '04/02, 15:37'),
(71, 0, 1, 'topic', 'dsa', 'dsa', 'admin', 0, '04/02, 15:37'),
(72, 6, 0, 'reply', '', 'Ы', 'admin', 0, '05/02, 09:12'),
(73, 56, 0, 'reply', '', 'ф', 'admin', 0, '05/02, 10:44'),
(74, 41, 0, 'reply', '', 'выа', 'admin', 0, '05/02, 10:45'),
(75, 0, 1, 'topic', 'sdf', 'gf', 'admin', 0, '08/02, 09:51'),
(76, 0, 1, 'topic', 'fghfgh', 'gffhjhgj', 'admin', 0, '08/02, 09:51'),
(77, 0, 1, 'topic', 'werw234', '234234', 'admin', 0, '08/02, 09:52'),
(78, 0, 1, 'topic', 'ываапвап', 'вап', 'admin', 0, '08/02, 11:35'),
(79, 0, 1, 'topic', 'вро', 'рппр', 'admin', 0, '08/02, 11:37'),
(80, 0, 1, 'topic', 'лролл', 'орол', 'admin', 0, '08/02, 11:38'),
(81, 0, 1, 'topic', 'олдолд', 'олдолд', 'admin', 0, '08/02, 11:38'),
(82, 0, 1, 'topic', 'ролр', 'ро', 'admin', 0, '08/02, 11:38'),
(83, 0, 1, 'topic', '677', '567567', 'admin', 0, '08/02, 11:38'),
(84, 0, 1, 'topic', 'енг', 'енг', 'admin', 0, '08/02, 11:38'),
(85, 1, 0, 'reply', '', 'dsf', 'admin', 0, '08/02, 14:21'),
(86, 1, 0, 'reply', '', 'sdf', 'admin', 0, '08/02, 14:21'),
(87, 1, 0, 'reply', '', 'wer', 'admin', 0, '08/02, 14:21'),
(88, 1, 0, 'reply', '', 'wer', 'admin', 0, '08/02, 14:21'),
(89, 1, 0, 'reply', '', 'tyr', 'admin', 0, '08/02, 14:21'),
(90, 1, 0, 'reply', '', 'ghj', 'admin', 0, '08/02, 14:21'),
(91, 1, 0, 'reply', '', 'dfg', 'admin', 0, '08/02, 14:21'),
(92, 1, 0, 'reply', '', 'sdf', 'admin', 0, '08/02, 14:28'),
(93, 1, 0, 'reply', '', 'fdfdf', 'admin', 0, '08/02, 14:28'),
(94, 0, 1, 'topic', 'sf', 'sdf', '', 0, '09/08, 04:08'),
(95, 0, 1, 'topic', 'sf', 'sdf', '', 0, '09/08, 04:08'),
(96, 0, 1, 'topic', 'asd', 'asd', '', 0, '09/08, 04:08'),
(97, 0, 1, 'topic', 'sdf', 'sdf', 'admin', 0, '09/08, 04:08'),
(98, 0, 2, 'topic', 'Новая тума', 'тум \r\nтум', 'admin', 0, '09/08, 04:08'),
(99, 97, 0, 'topic', '', 'df', 'admin', 0, '10/08, 08:56'),
(100, 97, 0, 'topic', '', 'df', 'admin', 0, '10/08, 08:56'),
(101, 97, 0, 'topic', '', 'qe', 'admin', 0, '10/08, 08:56'),
(102, 0, 3, 'topic', '123', '123', 'admin', 0, '26/10, 10:28'),
(103, 0, 0, 'topic', '', 'ad', 'admin', 0, '26/10, 16:59'),
(104, 0, 0, 'topic', '', '123', 'admin', 0, '31/10, 14:52'),
(105, 0, 0, 'topic', '', '123', 'admin', 0, '31/10, 14:52'),
(106, 0, 0, 'topic', '', 's', 'admin', 0, '31/10, 15:05'),
(107, 0, 0, 'topic', '', 's', 'admin', 0, '31/10, 15:06'),
(108, 0, 1, 'topic', '1', '1', 'admin', 0, '01/11, 12:28'),
(109, 0, 4, 'topic', 'кукцук', 'цукцук', 'admin', 0, '01/11, 14:01'),
(110, 109, 0, 'topic', '', 'ук', 'admin', 0, '01/11, 14:41'),
(111, 109, 0, 'topic', '', 'ук23', 'admin', 0, '01/11, 14:42'),
(112, 109, 0, 'topic', '', 'ук23', 'admin', 0, '01/11, 14:43'),
(113, 109, 0, 'topic', '', 'ук23', 'admin', 0, '01/11, 14:43'),
(114, 109, 0, 'topic', '', 'ук23', 'admin', 0, '01/11, 14:47'),
(115, 109, 0, 'topic', '', 'ук23', 'admin', 0, '01/11, 14:47'),
(116, 109, 0, 'topic', '', 'dfg', 'admin', 0, '01/11, 14:48'),
(117, 109, 0, 'topic', '', 'fgh', 'admin', 0, '01/11, 14:48'),
(118, 109, 0, 'topic', '', '324', 'admin', 0, '01/11, 14:48'),
(119, 0, 4, 'topic', 'ertert', 'ertert', 'admin', 0, '01/11, 14:48'),
(120, 119, 0, 'topic', '', 'fgh', 'admin', 0, '01/11, 14:48'),
(121, 119, 0, 'topic', '', '43523', 'admin', 0, '01/11, 14:48'),
(122, 108, 0, 'topic', '', 'sdf', 'user3', 0, '02/11, 10:34'),
(123, 0, 1, 'topic', 'Новая', 'тема', 'user3', 12, '02/11, 10:59'),
(124, 97, 0, 'topic', '', 'sd', 'user3', 12, '02/11, 11:05'),
(125, 123, 0, 'topic', '', 'yut', 'user3', 12, '02/11, 11:14'),
(126, 123, 0, 'topic', '', 'dsf', 'admin', 8, '02/11, 11:15'),
(127, 0, 4, 'topic', 'dfg', 'dfg', 'admin', 8, '03/11, 13:58'),
(128, 0, 4, 'topic', 'ghj', 'ghj', 'admin', 8, '03/11, 14:13'),
(129, 0, 2, 'topic', 'sdf', 'sdf', 'admin', 8, '07/11, 12:08'),
(130, 15, 0, 'topic', '', 'dfg', 'admin', 8, '24/12, 13:10'),
(131, 15, 0, 'topic', '', 'hjgjgh', 'admin', 8, '24/12, 13:10'),
(132, 81, 0, 'topic', '', 'adasd', 'admin', 8, '24/04, 14:47'),
(133, 123, 0, 'topic', '', 'ads', 'admin', 8, '24/04, 14:47'),
(134, 0, 1, 'topic', '1', '1', 'admin', 8, '26/02, 16:01'),
(135, 123, 1, 'reply', '', 'rer', 'admin', 8, '02/07/2018, 11:34'),
(136, 135, 1, 'reply', '', 'gre', 'admin', 8, '02/07/2018, 12:45'),
(137, 134, 1, 'reply', '', 'sdgfg', 'admin', 8, '05/07/2018, 11:13'),
(138, 0, 1, 'topic', 'vc', 'dsf', 'admin', 8, '05/07/2018, 13:24'),
(139, 138, 1, 'reply', '', 'df', 'admin', 8, '05/07/2018, 13:27'),
(140, 138, 1, 'reply', '', '[b]fbf[/b]', 'admin', 8, '05/07/2018, 14:38'),
(141, 138, 1, 'reply', '', '<b>dfdf</b>', 'admin', 8, '05/07/2018, 14:38'),
(142, 0, 0, 'reply', '', 'sdf', 'user', 1, '05/07/2018, 17:21');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `admin` varchar(255) NOT NULL DEFAULT 'user',
  `regdate` text NOT NULL,
  `logdate` text NOT NULL,
  `regip` varchar(255) NOT NULL,
  `logip` varchar(255) NOT NULL DEFAULT '0',
  `online` enum('В сети','Не в сети','','') DEFAULT 'Не в сети',
  `status` varchar(255) NOT NULL DEFAULT 'Гость',
  `status2` varchar(255) NOT NULL DEFAULT 'Живой',
  `money` int(20) NOT NULL DEFAULT '5000',
  `euro` int(10) DEFAULT NULL,
  `blvl` int(2) NOT NULL DEFAULT '0',
  `bexp` int(15) DEFAULT '0',
  `elvl` int(2) NOT NULL DEFAULT '0',
  `eexp` int(15) NOT NULL DEFAULT '0',
  `plvl` int(2) NOT NULL DEFAULT '0',
  `pexp` int(15) NOT NULL DEFAULT '0',
  `strength` int(3) NOT NULL DEFAULT '10',
  `accuracy` int(3) NOT NULL DEFAULT '10',
  `health` int(3) NOT NULL DEFAULT '10',
  `endurance` int(3) NOT NULL DEFAULT '10',
  `totalpoint` int(3) NOT NULL DEFAULT '0',
  `mailstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `admin`, `regdate`, `logdate`, `regip`, `logip`, `online`, `status`, `status2`, `money`, `euro`, `blvl`, `bexp`, `elvl`, `eexp`, `plvl`, `pexp`, `strength`, `accuracy`, `health`, `endurance`, `totalpoint`, `mailstatus`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '', '04.02.2016, 15:23:19', '', '127.0.0.1', 'Не в сети', 'Гость', 'Живой', 22903, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(5, '4321', '4d1ea1367acf0560c6716dd076a84d7f', 'user', '', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(6, 'qwer', 'caf1a3dfb505ffed0d024130f58c5cfa', 'user', '', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(7, 'fdgdfg', 'e369853df766fa44e1ed0ff613f563bd', 'user', '', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '08.02.2016, 14:40:46', '', '127.0.0.1', 'В сети', 'Гражданин города', 'Живой', 497098, 0, 0, 0, 0, 0, 0, 0, 10, 10, 13, 10, 0, 0),
(9, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'user', '', '0', '', '', 'Не в сети', 'Гость', 'Живой', 1, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(10, 'obmin', '21232f297a57a5a743894a0e4a801fc3', 'user', '26/11, 09:38', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(11, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user', '30.11.2015', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(12, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user', '30.11.2015, 06:06', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(13, 'vasya2', '46f94c8de14fb36680850768ff1b7f2a', 'user', '03.02.2016, 15:19', '0', '', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(15, 'vasya3', '46f94c8de14fb36680850768ff1b7f2a', 'user', '03.02.2016, 15:45', '0', '127.0.0.1', '', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(16, 'vasya4', '46f94c8de14fb36680850768ff1b7f2a', 'user', '03.02.2016, 15:45', '0', '127.0.0.1', '0', 'Не в сети', 'Гость', 'Живой', 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(17, 'gubskiyev', 'de0cd63188ef1c5d64bb2b6d0d9dcd50', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(18, 'qweasd', '36f17c3939ac3e7b2fc9396fa8e953ea', 'user', '', '', '', '0', 'В сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(19, 'admin2', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(20, 'admin3', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(21, 'qwerty', '21232f297a57a5a743894a0e4a801fc3', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(22, 'adminka', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(23, '123', '202cb962ac59075b964b07152d234b70', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(24, '1234', '202cb962ac59075b964b07152d234b70', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(25, 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0),
(26, 'popa', 'de75daa73f5916ffad0bb0a1c4a8df0b', 'user', '', '', '', '0', 'Не в сети', 'Гость', 'Живой', 5000, NULL, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `iptable`
--
ALTER TABLE `iptable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_transfer`
--
ALTER TABLE `log_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Индексы таблицы `realty`
--
ALTER TABLE `realty`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`);

--
-- Индексы таблицы `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `iptable`
--
ALTER TABLE `iptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `log_transfer`
--
ALTER TABLE `log_transfer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `realty`
--
ALTER TABLE `realty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
