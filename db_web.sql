-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_web
CREATE DATABASE IF NOT EXISTS `db_web` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_web`;

-- Dumping structure for table db_web.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us_text` text NOT NULL,
  `about_us_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.abouts: ~1 rows (approximately)
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `about_us_text`, `about_us_image`) VALUES
	(1, '<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Suspendisse </strong>viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula.</p>\r\n\r\n<p style="text-align:justify">Proin egestas diam ac mauris molestie hendrerit.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit.</p>', '1645688438.jpg');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table db_web.about_homes
CREATE TABLE IF NOT EXISTS `about_homes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `abouthome_text` text NOT NULL,
  `abouthome_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.about_homes: ~1 rows (approximately)
/*!40000 ALTER TABLE `about_homes` DISABLE KEYS */;
INSERT INTO `about_homes` (`id`, `abouthome_text`, `abouthome_image`) VALUES
	(1, '<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Suspendisse </strong>viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet</p>', '1645688405.jpg');
/*!40000 ALTER TABLE `about_homes` ENABLE KEYS */;

-- Dumping structure for table db_web.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.admins: ~1 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `admin_password`) VALUES
	(1, 'Administrator', 'admin@admin.com', '$2y$10$gEmg11U5GlkSAMq2QdyRiuZjMwu9D805r/p7HQu0Zf13odQFiJPYK');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table db_web.carousels
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.carousels: ~2 rows (approximately)
/*!40000 ALTER TABLE `carousels` DISABLE KEYS */;
INSERT INTO `carousels` (`id`, `image`, `heading`, `description`) VALUES
	(18, '1645688554.jpg', 'Heading 2', 'Description 2'),
	(20, '1645688454.jpg', 'Heading 1', 'Description 1');
/*!40000 ALTER TABLE `carousels` ENABLE KEYS */;

-- Dumping structure for table db_web.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`) VALUES
	(1, 'Category 1'),
	(2, 'Category 2'),
	(3, 'Category 3');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table db_web.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `client_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.clients: ~4 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `client_name`, `client_logo`, `client_url`) VALUES
	(2, 'google', '1607013876.png', 'www.google.com'),
	(3, 'Intel', '1607013854.png', 'www.intel.com'),
	(5, 'Huawei', '1607013864.png', 'www.huawei.com'),
	(6, 'Fujitsu', '1607013883.png', 'www.fujitsu.com');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table db_web.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.contacts: ~11 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `subject`, `email`, `contact_message`) VALUES
	(11, 'lebron', 'aaa', 'admin@gmail.com', '111111'),
	(12, 'lebron james', '111', 'admin@gmail.com', '1111111'),
	(13, 'lebron', 'aaa', 'widodokenny@gmail.com', '1111111\r\nbbb'),
	(15, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaaa'),
	(16, 'Rino', 'Help', 'Rino@mail.com', 'I want to buy apa'),
	(17, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaaaaaa'),
	(18, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaa'),
	(19, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaaaa'),
	(20, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaa'),
	(21, 'kenn', '111', 'kenny.widodo@Yahoo.com', 'aaaaaaaa'),
	(22, 'lebron', 'aaa', 'widodokenny@gmail.com', 'aaaaaaaaa');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table db_web.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_quote` text NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.customers: ~1 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `customer_name`, `customer_quote`, `customer_image`) VALUES
	(1, 'Customer 1', '<p>Comment</p>', '1607013838.png');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table db_web.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_web.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table db_web.keyword
CREATE TABLE IF NOT EXISTS `keyword` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `text_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_web.keyword: ~1 rows (approximately)
/*!40000 ALTER TABLE `keyword` DISABLE KEYS */;
INSERT INTO `keyword` (`id`, `text_key`) VALUES
	(1, '<p>protechkomputer</p>');
/*!40000 ALTER TABLE `keyword` ENABLE KEYS */;

-- Dumping structure for table db_web.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_web.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(4, '2014_10_12_000000_create_users_table', 1),
	(5, '2014_10_12_100000_create_password_resets_table', 1),
	(6, '2019_08_19_000000_create_failed_jobs_table', 1),
	(7, '2022_02_24_084014_create_keyword_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_web.missions
CREATE TABLE IF NOT EXISTS `missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.missions: ~2 rows (approximately)
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
INSERT INTO `missions` (`id`, `mission`) VALUES
	(6, '<p>First Mission</p>'),
	(7, '<p>Second Mission</p>');
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;

-- Dumping structure for table db_web.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_web.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table db_web.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.products: ~9 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_image`, `category_id`) VALUES
	(12, 'Product 1', '<p>This is product 1</p>', '1607013964.jpeg', 1),
	(15, 'Product 2', '<p>This is product 2</p>', '1607013972.jpeg', 2),
	(16, 'Product 3', '<p>This is product 3</p>', '1607532082.jpeg', 3),
	(17, 'Product 4', '<p>This is product 4</p>', '1607532132.jpeg', 1),
	(18, 'Product 5', '<p>This is product 5</p>', '1607532147.jpeg', 2),
	(19, 'Product 6', '<p>This is product 6</p>', '1607532184.jpeg', 3),
	(20, 'Product 7', '<p>This is product 7</p>', '1607532198.jpeg', 1),
	(21, 'Product 8', '<p>This is product 8</p>', '1607532214.jpeg', 2),
	(22, 'Product 9', '<p>This is product 9</p>', '1607532227.jpeg', 3);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table db_web.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_web.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table db_web.visions
CREATE TABLE IF NOT EXISTS `visions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vision` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.visions: ~2 rows (approximately)
/*!40000 ALTER TABLE `visions` DISABLE KEYS */;
INSERT INTO `visions` (`id`, `vision`) VALUES
	(1, '<p>This is the 1st Vision</p>'),
	(2, '<p>This is the 2nd Vision</p>');
/*!40000 ALTER TABLE `visions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
