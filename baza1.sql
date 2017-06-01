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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.basket: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` (`id_tovar`, `id_order`, `id_user`, `b_count`, `pay`) VALUES
	(1, 1, 1, 1, 0),
	(2, 1, 2, 2, 0),
	(3, 2, 2, 1, 0),
	(4, 1, 1, 2, 0),
	(5, 2, 1, 2, 0),
	(6, 1, 2, 1, 0),
	(7, 2, 1, 2, 0);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.category
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.category: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`, `c_name`) VALUES
	(1, 'Электрондар'),
	(2, 'Компьютерлер'),
	(3, 'Киімдер'),
	(4, 'Аяқ киімдер'),
	(5, 'Сыйлықтар'),
	(6, 'Үй жиһаздары');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_tovar` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.comment: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id_comment`, `id_tovar`, `id_user`, `text`) VALUES
	(1, 1, 1, 'качественный'),
	(2, 2, 2, 'турецский'),
	(3, 3, 1, 'российский');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.delivery
CREATE TABLE IF NOT EXISTS `delivery` (
  `id_dostavka` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_dostavka`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.delivery: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` (`id_dostavka`, `d_name`) VALUES
	(1, 'бесплатные'),
	(2, 'платные');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.favorite
CREATE TABLE IF NOT EXISTS `favorite` (
  `id_tovar` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tovar`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.favorite: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
INSERT INTO `favorite` (`id_tovar`, `id_user`) VALUES
	(1, 1),
	(2, 2),
	(3, 1),
	(4, 1),
	(5, 2),
	(6, 2),
	(7, 1);
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.foto
CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tovar` int(11) NOT NULL DEFAULT '0',
  `f_link` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.foto: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` (`id_foto`, `id_tovar`, `f_link`) VALUES
	(1, 1, 'images/dummy/pic_5.jpg'),
	(2, 2, 'images/dummy/pic_4.jpg'),
	(3, 3, 'images/dummy/pic_3.jpg'),
	(4, 4, 'images/dummy/pic_2.jpg'),
	(5, 5, 'images/dummy/pic_1.jpg');
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.order
CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `status` varchar(250) NOT NULL DEFAULT '0',
  `id_delivery` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.order: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id_order`, `id_user`, `status`, `id_delivery`) VALUES
	(1, 1, 'обработано', 1),
	(2, 2, 'не обработано', 2);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Дамп структуры для таблица db_shop.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.role: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `r_name`) VALUES
	(1, 'Администратор'),
	(2, 'Пользователь');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.tovar: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `tovar` DISABLE KEYS */;
INSERT INTO `tovar` (`id_tovar`, `t_name`, `t_price`, `t_category`, `t_quantity`, `t_sale`, `t_new`, `t_description`) VALUES
	(1, 'Шашқа арналған бояу Color Naturals', 19000, '1', 20, 0, 1, 'Шашқа арналған бояу Color Naturals  — Шаш бояуы Garnier Түс Naturals зәйтүн майы, авокадо және Karite байытылған формула бар. Ол шаштың жүрегінде еніп, қарқынды оны нәрлендіреді. Жинағын сүт Developer 60 мл кілег Марк Garnier әлі бренд оның негізін қалаушы, аты сипатқа сай, Альфред Amour Garnier арқылы 1904 жылы құрылған.'),
	(2, 'Casio Exilim Zoom', 10000, '1', 10, 0, 1, 'Камера Casio EXILIM EX-Z57, бағдарламалық қамтамасыз ету, Li-ion батареясы, айнымалы ток адаптері, USB-кабель, бау, CD-ROM.'),
	(3, 'Samsung 100', 150000, '2', 10, 20, 0, 'Дизайн P200 выдержан в привычном для офисной линейки лэптопов компании стиле, немного разбавленном вставками вокруг клавиатуры и дисплея. Хорошее и оснащение'),
	(4, 'Бокс қолғаптары PRO STYLE ELITE Everlast', 41000, '5', 15, 10, 1, 'Бокс ауыр сөмкелер мен муфта жұмыс істейтін, тамаша Everlast бренд Стиль Elite  Pro қолғабы.  Модель жоғары сапалы жасанды былғарыдан жасалған. Жайлылық және қорғау Толтырғыш-көбік. Толығырақ: анатомиялық фасонды, оңтайлы желдету, антибактериалды сіңдіру, липучкой манжеттер кең үшін алақаныңызға материал тор.'),
	(5, 'ALPHABOUNCE CHINESE ', 30000, '4', 6, 0, 0, 'Начни новый год с приятной пробежки. Эти гибкие кроссовки с технологией BOUNCE™ смягчают каждый шаг и обеспечивают повышенный комфорт. Бесшовный верх FORGEDMESH растягивается вслед за стопой, адаптируясь к твоим движениям. Финальный штрих — принт, вдохновленный Китайским Новым годом'),
	(6, 'Polo Assn', 8000, '3', 30, 0, 0, 'Конного спорта поло принимая вдохновение из оригинальной, удобной и стильных моделей для женщин, мужчин, детей всех и для всех возрастов'),
	(7, 'Modern - Casual', 120000, '6', 6, 15, 0, 'Основной акцент этой модели– в лаконичности формы и неперегруженности деталями. Помимо встроенной кровати и ящика, каждый изгиб модели Santa Fe — имеет функциональную нагрузку. Механизмы настройки глубины, плавающие подголовники и подлокотники — приятно удивят вас своей простотой в использовании. - See more at: http://dax-ru.co.il/tovar/santa-fe/#sthash.n8pqwuEK.dpuf');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы db_shop.user: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `name`, `surname`, `id_role`, `email`, `year`, `password`) VALUES
	(1, 'Айбек', 'Зинешов', 1, 'zineshov@mail.ru', '1999-04-07', '777z'),
	(2, 'Айбек', 'Жакупов', 2, 'aibek_jak@mail.ru', '1999-07-19', '12345a');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
