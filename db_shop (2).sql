-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных db_shop
CREATE DATABASE IF NOT EXISTS `db_shop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_shop`;


-- Дамп структуры для таблица db_shop.basket
CREATE TABLE IF NOT EXISTS `basket` (
  `id_tovar` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `b_count` int(11) NOT NULL DEFAULT '0',
  `pay` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tovar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.basket: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.category
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.category: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_tovar` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.comment: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.delivery
CREATE TABLE IF NOT EXISTS `delivery` (
  `id_dostavka` int(11) NOT NULL AUTO_INCREMENT,
  `Столбец 2` int(11) NOT NULL DEFAULT '0',
  `d_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_dostavka`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.delivery: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.favorite
CREATE TABLE IF NOT EXISTS `favorite` (
  `id_tovar` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tovar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.favorite: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.foto
CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tovar` int(11) NOT NULL DEFAULT '0',
  `f_link` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.foto: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.order
CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `status` varchar(250) NOT NULL DEFAULT '0',
  `id_delivery` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.order: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.role: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.tovar
CREATE TABLE IF NOT EXISTS `tovar` (
  `id_tovar` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL DEFAULT '0',
  `t_price` int(11) NOT NULL DEFAULT '0',
  `t_category` varchar(50) NOT NULL DEFAULT '0',
  `t_quantity` int(11) NOT NULL DEFAULT '0',
  `t_sale` int(11) NOT NULL DEFAULT '0',
  `t_new` int(1) NOT NULL DEFAULT '0',
  `t_description` text NOT NULL,
  PRIMARY KEY (`id_tovar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.tovar: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `tovar` DISABLE KEYS */;
/*!40000 ALTER TABLE `tovar` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `surname` varchar(50) NOT NULL DEFAULT '0',
  `id_role` int(11) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `year` date NOT NULL,
  `password` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.user: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
