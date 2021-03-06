-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sechaap
CREATE DATABASE IF NOT EXISTS `sechaap` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sechaap`;

-- Dumping structure for table sechaap.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.admins: ~1 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
REPLACE INTO `admins` (`id`, `name`, `phone`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'alireza', '09363845076', '$2y$10$863f69/0M8w3Su.yJxXwduenOHyor1hfhCyPdQTRJWfc5rQtxLPMe', 0, NULL, '2019-11-27 07:33:21', '2019-11-27 07:33:21');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table sechaap.announcements
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `pre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcements_order_id_foreign` (`order_id`),
  CONSTRAINT `announcements_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.announcements: ~0 rows (approximately)
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;

-- Dumping structure for table sechaap.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_order_id_foreign` (`order_id`),
  CONSTRAINT `banners_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.banners: ~0 rows (approximately)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table sechaap.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table sechaap.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.images: ~5 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
REPLACE INTO `images` (`id`, `name`, `persian_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'banner1', 'بنر صفحه اول', NULL, '5de907f165b7f.jpg', '2019-12-05 18:06:19', '2019-12-05 18:06:21'),
	(2, 'banner2', 'بنر صفحه دوم', NULL, '5de905bf2df8b.jpg', '2019-12-05 18:13:11', '2019-12-05 18:13:12'),
	(3, 'banner3', 'بنر صفحه سوم', NULL, '5de92695ca32d.png', '2019-12-05 18:19:00', '2019-12-05 15:47:34'),
	(4, 'customization_banner', 'بنر سفارشی سازی', NULL, '5de92695ca32d.png', '2019-12-06 13:44:21', '2019-12-06 13:44:23'),
	(5, 'logo', 'لوگو', NULL, '5de905bf2df8b.jpg', '2019-12-06 13:46:29', '2019-12-06 13:46:31');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table sechaap.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.media: ~0 rows (approximately)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Dumping structure for table sechaap.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_read` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.messages: ~6 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
REPLACE INTO `messages` (`id`, `user_id`, `user_name`, `phone`, `title`, `body`, `answer`, `is_read`, `created_at`, `updated_at`) VALUES
	(1, 0, 'حسن', '09165847954', 'سلام خوبید', 'ودنتتنذاترال رالرال را رتارا اتر رات اترتا رار لرل غز ذرع راذ اترل ذا رلر لر ا تا رالر لارالر ر لر رتار لا الز ذتا رالز لغز', NULL, 1, '2019-12-06 15:19:27', '2019-12-06 12:04:31'),
	(2, 2, 'حسین', '091964352', 'ه هه هه', 'ئتذ اتات ذتاذ ات اتر اترتا ت ذ ذعب ذنتر غعب ل غ رل ع لر', 'وئذ اتذ تاذ اتتا رعف6 ذت ترغع بیغ', 1, '2019-12-06 15:21:23', '2019-12-06 12:11:57'),
	(3, 1, 'vahidreza', '09196649497', 'تصنیف واره', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 13:53:38', '2019-12-06 13:53:38'),
	(4, 1, 'vahidreza', '09196649497', 'تصنیف واره', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 13:54:00', '2019-12-06 13:54:00'),
	(5, 1, 'vahidreza', '09196649497', 'تصنیف gfd', 'نام فیلم : Once Upon a Time in Hollywood 2019 / روزی روزگاری در هالیوود\r\n\r\nمحصول کشور : آمریکا | انگلستان\r\n\r\nتاریخ اولین اکران : 26 جولای 2019 (آمریکا) – 4 مرداد 1398\r\n\r\nژانر : کمدی | درام | معمایی | جنایی | هیجان انگیز\r\n\r\nزبان : انگلیسی\r\n\r\nکارگردان : Quentin Tarantino\r\n\r\nنویسنده : Quentin Tarantino\r\n\r\nبازیگران : Margot Robbie, Brad Pitt, Leonardo DiCaprio\r\n\r\nخلاصه داستان فارسی : یک بازیگر تلویزیونی و بدلش در آخ', NULL, 0, '2019-12-06 14:00:41', '2019-12-06 14:00:41'),
	(6, 1, 'vahidreza', '09196649497', 'dgfds', 'dzfdzs', NULL, 0, '2019-12-06 14:01:21', '2019-12-06 14:01:22');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table sechaap.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.migrations: ~15 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '2014_10_12_000000_create_users_table', 1),
	(8, '2014_10_12_100000_create_password_resets_table', 1),
	(9, '2019_10_09_153623_create_types_table', 1),
	(10, '2019_10_09_153644_create_orders_table', 1),
	(11, '2019_10_09_154847_create_media_table', 1),
	(12, '2019_10_09_162310_create_order_details_table', 1),
	(13, '2019_10_13_152734_create_banners_table', 2),
	(14, '2019_10_13_152839_create_announcements_table', 2),
	(15, '2019_10_13_161758_create_products_table', 3),
	(16, '2019_10_19_074433_create_categories_table', 4),
	(17, '2019_10_21_145845_create_order_statuses_table', 5),
	(18, '2019_11_25_131151_create_admins_table', 6),
	(19, '2019_12_05_141807_create_image_table', 7),
	(20, '2019_12_05_141944_create_texts_table', 7),
	(21, '2019_12_06_112937_create_messages_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sechaap.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `type_id` bigint(20) unsigned NOT NULL,
  `numbers` int(50) NOT NULL DEFAULT '1',
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status_id` int(10) unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`id`, `user_id`, `user_name`, `phone`, `product_id`, `type_id`, `numbers`, `price`, `description`, `address`, `tracking_code`, `order_status_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '0', '09196649497', 1, 1, 1, '1000', 'بنابر یكی از كلمات قدیمی زبانمان گرد هم آوردن یعنی چیز. پل ]هم[ در حقیقت، به مثابه گردهم آورندهٔ امر چهارگانه‌ای كه پیش‌تر توصیف كردیم- یك چیز است. به یقین، عوام در نگاه نخست و در واقع امر به پل صرفاً به چشم پل نگاه می‌كنند. مبسوق به این امر، گاهی هم می‌تواند چیزهای بسیار متفاوت دیگری را بیان كند. یكی از این اشكال بیان این است كه می‌تواند به نمادی تبدیل شود، مثلاً نماد آن چیزهایی كه در بالا ذكر كردیم. اما پل اگر یك پل حقیقی باشد هرگز نمی‌تواند پل صرف و بعداً نماد باشد. و اصلاً پل حتی از همان نخست هم هرگز ]نمی‌تواند[ صرفاً یك نماد باشد، البته نماد به این معنا كه امری را بیان كند ]یا بر امری دلالت كند[،‌ كه اگر دقیق سخن بگوییم، به آن تعلق ندارد. وقتی پل را به معنای دقیق كلمه در نظر بگیریم، او هرگز به مثابهٔ بیان ]امری[ تجلی نمی‌كند. پل یك چیز است و فقط همین ]است[. فقط همین؟ به مثابهٔ این چیز امر چهارگانه را گردهم می‌آورد.', 'rt', 'rertert', 2, '2019-11-30 17:15:04', '2019-12-05 13:20:02'),
	(2, 0, 'fgd', '0', 1, 2, 1, '222', NULL, '875', '5654', 1, '2019-12-03 18:27:44', '2019-12-03 18:27:48'),
	(3, 0, NULL, '0', NULL, 1, 1, 'jhg', NULL, 'ty', NULL, 1, '2019-12-03 18:30:51', '2019-12-03 18:30:53');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table sechaap.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `text_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.order_details: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table sechaap.order_statuses
CREATE TABLE IF NOT EXISTS `order_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.order_statuses: ~2 rows (approximately)
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
REPLACE INTO `order_statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'در حال برسی', '2019-11-30 17:21:25', '2019-11-30 17:21:26'),
	(2, 'در حال چاپ', '2019-12-03 16:48:35', '2019-12-03 16:48:36');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;

-- Dumping structure for table sechaap.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table sechaap.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` bigint(20) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.products: ~3 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`id`, `title`, `type_id`, `description`, `price`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'بنر شماره 3', 1, 'واژه «گشتل» (Gestell) به حوزه «فلسفه تکنولوژی» تعلق دارد و برای نخستین بار توسط مارتین هایدگر، فیلسوف آلمانی قرن بیستم در مقاله­ ای با عنوان «پرسشی در باب تکنولوژی» به­ کار رفته است.\r\n\r\nپیش از هایدگر، دو متفکر دیگر به نامهای «شریف» و «پیت» دو تعریف را برای تکنولوژی ذکر کرده بودند.', '20000', '5de905bf2df8b.jpg', '2019-11-30 17:20:29', '2019-12-05 13:27:27'),
	(2, 'اعلامیه شماره 3', 2, 'شریف، تکنولوژی را «ابزار» [2] تعریف کرد یعنی چیزی که توان علّی لازم برای تحقق هدفی مشخص را دارد. او معتقد بود که تکنولوژی از کنار هم گذاشتن افزارهایی همچون سخت ­افزار (فن ­افزار)، انسان ­افزار، سازمان­ افزار و اطلاعات­ افزار به سامان می­رسد(شکل زیر). درواقع او علاوه بر ابزار سخت، به مفهوم ابزار نرم یا اجتماعی هم قائل بود. اگرچه برخی از نویسندگان برای توجه دادن بیشتر به ابعاد اجتماعی و نرم تکنولوژی، ترجیح داده­ اند به جای ابزار نرم از مفهوم «سامانه اجتماعی ـ تکنیکی»[3] استفاده کنند.', '30000', '5de907f165b7f.jpg', '2019-12-05 13:36:49', '2019-12-05 13:36:49'),
	(3, 'بنر شماره 5', 1, 'پیت، معتقد بود که ابزار به تنهایی معطوف به موفقیت نیست. ابزار باید به کار گرفته شود تا هدفی محقق شود بنابراین او تکنولوژی را «به­ کارگیری ابزار» تعریف کرد که درواقع نوعی فعالیت انسانی است.\r\n\r\nالبته هر نوع به­ کارگیری ابزار، تکنولوژی به حساب نمی­ آید بلکه بکارگیری ابزار باید آگاهانه و هدفمند باشد و از همین ­رو تصمیم­ گیری انسانی در آن نقش مهمی ایفا می­کند (شکل زیر).', '456465', '5de90886bc164.jpg', '2019-12-05 13:39:18', '2019-12-05 13:39:18');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table sechaap.texts
CREATE TABLE IF NOT EXISTS `texts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.texts: ~5 rows (approximately)
/*!40000 ALTER TABLE `texts` DISABLE KEYS */;
REPLACE INTO `texts` (`id`, `name`, `persian_name`, `description`, `text`, `created_at`, `updated_at`) VALUES
	(1, 'summary_header', 'متن راهنما', 'سیقب', ' تجربه چاپ ارزان و با کیفیت در سه چاپ', '2019-12-05 18:52:57', '2019-12-05 15:42:19'),
	(2, 'summary', 'متن معرفی', 'صثقصث', 'سه چاپ مراحل محاسبه هزینه چاپ ، ثبت سفارش و پرداخت خدمات چاپی را از طریق راه اندازی سامانه آنلاین برای کاربران فراهم نموده است. در این راستا مسیر سفارش مشتریان بسیار کوتاه و سفارش در مرحله اجرا قرار می گیرد. سفارشات سه چاپ در سریعترین زمان ممکن اجرا شده و وقفه ای در انجام امور چاپی رخ نمی دهد. سفارشات مشتریان در این چاپخانه در صف انتظار نمی مانند. پس از اجرای مراحل چاپ، بسته چاپی مشتری از طریق پیک و بدون هزینه در اختیار مشتریان محترم قرار می گیرد. فقط کافی است که یکبار سفارش خود را با سه چاپ تجربه کنید. بدون شک شما هم از مشتریان ما خواهید شد.', '2019-12-05 18:53:31', '2019-12-05 15:42:19'),
	(3, 'about_us', 'درباره ما', NULL, 'fgdf', '2019-12-06 13:48:40', '2019-12-06 13:48:41'),
	(4, 'help', 'راهنما', NULL, 'بلف', '2019-12-06 13:49:24', '2019-12-06 13:49:26'),
	(5, 'contact_info', 'اطلاعات تماس', NULL, 'تماس باما: ۴۲۰۲ ۷۷۶۲-۰۲۱ (۴خط ویژه)|info@SeChaap.com', '2019-12-06 16:32:48', '2019-12-06 16:32:50');
/*!40000 ALTER TABLE `texts` ENABLE KEYS */;

-- Dumping structure for table sechaap.types
CREATE TABLE IF NOT EXISTS `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restriction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.types: ~2 rows (approximately)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
REPLACE INTO `types` (`id`, `title`, `media_type`, `restriction`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'بنر', '1', '1', NULL, '2019-11-30 17:19:47', '2019-11-30 17:19:48'),
	(2, 'اعلامیه', '1', '1', NULL, '2019-11-30 17:52:44', '2019-11-30 17:52:47');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Dumping structure for table sechaap.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sechaap.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'vahidreza', '09196649497', NULL, '$2y$10$RaaO.MUmWGSwc94128cMUOTfmEW0apijGyJ1EAr22o3GQHpp60Rku', NULL, '2019-11-30 10:06:46', '2019-12-06 10:58:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
