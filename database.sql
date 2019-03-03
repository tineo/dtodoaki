/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table directory_platform_amenities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_amenities`;

CREATE TABLE `directory_platform_amenities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `font_icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4FAABF62989D9B62` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_amenities` WRITE;
/*!40000 ALTER TABLE `directory_platform_amenities` DISABLE KEYS */;

INSERT INTO `directory_platform_amenities` (`id`, `name`, `slug`, `font_icon`, `created`, `modified`)
VALUES
	(1,'Wi-fi','wi-fi','fa-wifi','2017-06-27 12:51:53','2017-06-28 11:53:17'),
	(2,'Credit card','credit-card','fa-credit-card','2017-06-27 12:53:22','2017-06-28 11:52:33'),
	(3,'Parking','parking','fa-car','2017-06-27 12:54:41','2017-06-28 11:52:50'),
	(4,'Conditioning','conditioning','fa-thermometer-full','2017-06-27 12:58:31','2017-06-28 11:52:24'),
	(5,'Charger','charger','fa-battery-1','2017-06-27 13:00:05','2017-06-28 11:51:24'),
	(6,'Smoking allowed','smoking-allowed','fa-fire','2017-06-27 13:03:02','2017-06-28 11:52:59'),
	(7,'Music','music','fa fa-music','2017-06-27 13:04:19','2017-06-28 11:52:42'),
	(8,'Support','support','fa-support','2017-06-27 13:05:36','2017-06-28 11:53:07');

/*!40000 ALTER TABLE `directory_platform_amenities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_categories`;

CREATE TABLE `directory_platform_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `font_icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_578A7868989D9B62` (`slug`),
  KEY `IDX_578A786812469DE2` (`category_id`),
  CONSTRAINT `FK_578A786812469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_categories` WRITE;
/*!40000 ALTER TABLE `directory_platform_categories` DISABLE KEYS */;

INSERT INTO `directory_platform_categories` (`id`, `category_id`, `name`, `slug`, `font_icon`, `created`, `modified`)
VALUES
	(1,NULL,'Automotive','automotive','fa-car','2017-06-26 17:09:09','2017-06-28 11:47:28'),
	(2,NULL,'Business','business','fa-briefcase','2017-06-26 17:09:19','2017-06-28 11:47:37'),
	(3,NULL,'Event','event','fa-bullhorn','2017-06-26 17:09:39','2017-06-29 11:05:28'),
	(4,NULL,'Education','education','fa-book','2017-06-26 17:09:49','2017-06-28 11:47:46'),
	(5,NULL,'Travel','travel','fa-plane','2017-06-26 17:10:08','2017-06-28 11:48:36'),
	(6,NULL,'Real Estate','real-estate','fa-building','2017-06-26 17:10:28','2017-06-28 11:48:27'),
	(7,NULL,'Hotel','hotel','fa-bed','2017-06-26 17:10:45','2017-06-29 11:05:50'),
	(8,NULL,'Food & Drink','food-drink','fa-cutlery','2017-06-26 17:10:57','2017-06-28 11:48:04');

/*!40000 ALTER TABLE `directory_platform_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_claims
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_claims`;

CREATE TABLE `directory_platform_claims` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD518DA8A76ED395` (`user_id`),
  KEY `IDX_CD518DA8D4619D1A` (`listing_id`),
  CONSTRAINT `FK_CD518DA8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`),
  CONSTRAINT `FK_CD518DA8D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_favorites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_favorites`;

CREATE TABLE `directory_platform_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_40B38BE0A76ED395` (`user_id`),
  KEY `IDX_40B38BE0D4619D1A` (`listing_id`),
  CONSTRAINT `FK_40B38BE0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`),
  CONSTRAINT `FK_40B38BE0D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_favorites` WRITE;
/*!40000 ALTER TABLE `directory_platform_favorites` DISABLE KEYS */;

INSERT INTO `directory_platform_favorites` (`id`, `user_id`, `listing_id`, `created`, `modified`)
VALUES
	(1,1,11,'2017-07-08 14:49:11','2017-07-08 14:49:11'),
	(2,1,7,'2017-07-08 14:53:19','2017-07-08 14:53:19'),
	(3,1,12,'2017-07-16 17:30:08','2017-07-16 17:30:08');

/*!40000 ALTER TABLE `directory_platform_favorites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_fields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_fields`;

CREATE TABLE `directory_platform_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `data_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_value` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D177D9ED4619D1A` (`listing_id`),
  CONSTRAINT `FK_D177D9ED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_fields` WRITE;
/*!40000 ALTER TABLE `directory_platform_fields` DISABLE KEYS */;

INSERT INTO `directory_platform_fields` (`id`, `listing_id`, `data_key`, `data_value`, `created`, `modified`)
VALUES
	(1,12,'Rooms','4','2017-07-15 15:04:25','2017-07-15 15:04:25'),
	(2,12,'Bathrooms','2','2017-07-15 15:04:25','2017-07-15 15:04:25'),
	(3,12,'Parking','Yes','2017-07-15 15:04:25','2017-07-15 15:04:25'),
	(4,12,'Home Area','90 sqft','2017-07-15 15:05:36','2017-07-15 15:05:36'),
	(5,12,'Lot Area','30 sqft','2017-07-15 15:05:36','2017-07-15 15:05:36'),
	(6,12,'Dimensions','20x30x40x50','2017-07-15 15:05:36','2017-07-15 15:05:36');

/*!40000 ALTER TABLE `directory_platform_fields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_images`;

CREATE TABLE `directory_platform_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_93ED207CD4619D1A` (`listing_id`),
  CONSTRAINT `FK_93ED207CD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_images` WRITE;
/*!40000 ALTER TABLE `directory_platform_images` DISABLE KEYS */;

INSERT INTO `directory_platform_images` (`id`, `listing_id`, `image_name`, `created`, `modified`)
VALUES
	(3,1,'59521c7004deb322295334.jpg','2017-06-27 10:50:41','2017-06-27 10:50:56'),
	(5,2,'595251b87fd6d816643580.jpg','2017-06-27 14:37:57','2017-06-27 14:38:16'),
	(6,3,'5953725315b2e327029252.jpg','2017-06-28 11:09:14','2017-06-28 11:09:39'),
	(7,4,'595538de80c90653199631.jpg','2017-06-29 19:28:51','2017-06-29 19:29:02'),
	(8,5,'595540958a4f7568557409.jpg','2017-06-29 20:01:28','2017-06-29 20:01:57'),
	(10,6,'595540fd28f13150259725.jpg','2017-06-29 20:03:28','2017-06-29 20:03:41'),
	(11,7,'5960c9e0ec7e4810786908.jpg','2017-07-08 14:02:13','2017-07-08 14:02:40'),
	(12,8,'5960cc3013deb837453210.jpg','2017-07-08 14:12:12','2017-07-08 14:12:32'),
	(13,9,'5960cce94c1eb179132118.jpg','2017-07-08 14:15:27','2017-07-08 14:15:37'),
	(14,10,'5960d38acf326770287272.jpg','2017-07-08 14:43:42','2017-07-08 14:43:54'),
	(15,11,'5960d3fd06e6e783240343.jpg','2017-07-08 14:45:36','2017-07-08 14:45:49'),
	(16,12,'5960d4adc6232040190690.jpg','2017-07-08 14:48:33','2017-07-08 14:48:45'),
	(17,12,'5969fbc34ca81431452454.jpg','2017-07-15 13:25:55','2017-07-15 13:25:55'),
	(18,12,'5969fbc353932669988606.jpg','2017-07-15 13:25:55','2017-07-15 13:25:55'),
	(19,12,'5969fbc378e07215045847.jpg','2017-07-15 13:25:55','2017-07-15 13:25:55'),
	(20,12,'5969fbc37b1a7077937315.jpg','2017-07-15 13:25:55','2017-07-15 13:25:55'),
	(21,12,'5969fbc37bfce847122371.jpg','2017-07-15 13:25:55','2017-07-15 13:25:55'),
	(22,11,'596b8937679ab627612020.jpg','2017-07-16 17:41:43','2017-07-16 17:41:43'),
	(23,11,'596b89377d4e8977510758.jpg','2017-07-16 17:41:43','2017-07-16 17:41:43'),
	(24,11,'596b89378327a541158184.jpg','2017-07-16 17:41:43','2017-07-16 17:41:43'),
	(25,11,'596b893783943424278397.jpg','2017-07-16 17:41:43','2017-07-16 17:41:43'),
	(26,11,'596b893783cdb803651731.jpg','2017-07-16 17:41:43','2017-07-16 17:41:43'),
	(27,9,'596b8a2217771598057046.jpg','2017-07-16 17:45:38','2017-07-16 17:45:38'),
	(28,9,'596b8a22280e1578023745.jpg','2017-07-16 17:45:38','2017-07-16 17:45:38'),
	(29,8,'596b8a32bf1d2439700297.jpg','2017-07-16 17:45:54','2017-07-16 17:45:54'),
	(30,7,'596b8a6932fed532764876.jpg','2017-07-16 17:46:49','2017-07-16 17:46:49'),
	(31,7,'596b8a693428f728670833.jpg','2017-07-16 17:46:49','2017-07-16 17:46:49'),
	(32,7,'596b8a6934a07149119692.jpg','2017-07-16 17:46:49','2017-07-16 17:46:49'),
	(33,2,'596b8b0e41681061155768.jpg','2017-07-16 17:49:34','2017-07-16 17:49:34'),
	(34,2,'596b8b0e6898f840067968.jpg','2017-07-16 17:49:34','2017-07-16 17:49:34'),
	(35,1,'596b8b29234c5504478915.jpg','2017-07-16 17:50:01','2017-07-16 17:50:01'),
	(36,1,'596b8b2929a0f384412574.jpg','2017-07-16 17:50:01','2017-07-16 17:50:01'),
	(37,1,'596b8b2929f30513213819.jpg','2017-07-16 17:50:01','2017-07-16 17:50:01');

/*!40000 ALTER TABLE `directory_platform_images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_inquires
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_inquires`;

CREATE TABLE `directory_platform_inquires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4BB1212FA76ED395` (`user_id`),
  KEY `IDX_4BB1212FD4619D1A` (`listing_id`),
  CONSTRAINT `FK_4BB1212FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`),
  CONSTRAINT `FK_4BB1212FD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_inquires` WRITE;
/*!40000 ALTER TABLE `directory_platform_inquires` DISABLE KEYS */;

INSERT INTO `directory_platform_inquires` (`id`, `user_id`, `listing_id`, `name`, `email`, `message`, `created`, `modified`)
VALUES
	(1,1,12,'sample','sample@example.com','sample message','2017-07-13 15:27:51','2017-07-13 15:27:51'),
	(2,1,12,'sample','sample@example.com','sample message','2017-07-13 15:37:04','2017-07-13 15:37:04'),
	(3,1,12,'sample','sample@example.com','sample sample message','2017-07-13 15:42:43','2017-07-13 15:42:43');

/*!40000 ALTER TABLE `directory_platform_inquires` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_listing_amenity
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_listing_amenity`;

CREATE TABLE `directory_platform_listing_amenity` (
  `listing_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL,
  PRIMARY KEY (`listing_id`,`amenity_id`),
  KEY `IDX_2FD9CB8BD4619D1A` (`listing_id`),
  KEY `IDX_2FD9CB8B9F9F1305` (`amenity_id`),
  CONSTRAINT `FK_2FD9CB8B9F9F1305` FOREIGN KEY (`amenity_id`) REFERENCES `directory_platform_amenities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD9CB8BD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_listing_amenity` WRITE;
/*!40000 ALTER TABLE `directory_platform_listing_amenity` DISABLE KEYS */;

INSERT INTO `directory_platform_listing_amenity` (`listing_id`, `amenity_id`)
VALUES
	(1,1),
	(1,2),
	(1,3),
	(1,4),
	(1,5),
	(1,6),
	(1,7),
	(1,8),
	(2,1),
	(2,2),
	(2,3),
	(2,4),
	(2,5),
	(2,6),
	(2,7),
	(2,8),
	(3,1),
	(3,2),
	(3,3),
	(3,4),
	(3,5),
	(3,6),
	(3,7),
	(3,8),
	(4,1),
	(4,2),
	(4,3),
	(4,4),
	(4,5),
	(4,6),
	(4,7),
	(4,8),
	(5,1),
	(5,2),
	(5,3),
	(5,4),
	(5,5),
	(5,6),
	(5,7),
	(5,8),
	(6,1),
	(6,2),
	(6,3),
	(7,1),
	(7,2),
	(7,3),
	(7,4),
	(7,5),
	(7,6),
	(7,7),
	(7,8),
	(8,1),
	(8,2),
	(8,3),
	(8,4),
	(8,5),
	(8,6),
	(8,7),
	(8,8),
	(9,1),
	(9,2),
	(9,3),
	(9,4),
	(9,5),
	(9,6),
	(9,7),
	(9,8),
	(10,1),
	(10,2),
	(10,3),
	(10,4),
	(10,5),
	(10,6),
	(10,7),
	(10,8),
	(11,1),
	(11,2),
	(11,3),
	(11,4),
	(11,5),
	(11,6),
	(11,7),
	(11,8),
	(12,1),
	(12,2),
	(12,3),
	(12,4),
	(12,5),
	(12,6),
	(12,7),
	(12,8);

/*!40000 ALTER TABLE `directory_platform_listing_amenity` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_listings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_listings`;

CREATE TABLE `directory_platform_listings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `price` decimal(7,2) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `featured_until` datetime DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `published_until` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opening_hours` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9154A1E8989D9B62` (`slug`),
  KEY `IDX_9154A1E8A76ED395` (`user_id`),
  KEY `IDX_9154A1E812469DE2` (`category_id`),
  KEY `IDX_9154A1E864D218E` (`location_id`),
  CONSTRAINT `FK_9154A1E812469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`),
  CONSTRAINT `FK_9154A1E864D218E` FOREIGN KEY (`location_id`) REFERENCES `directory_platform_locations` (`id`),
  CONSTRAINT `FK_9154A1E8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_listings` WRITE;
/*!40000 ALTER TABLE `directory_platform_listings` DISABLE KEYS */;

INSERT INTO `directory_platform_listings` (`id`, `user_id`, `category_id`, `location_id`, `name`, `slug`, `description`, `address`, `price`, `latitude`, `longitude`, `is_verified`, `is_featured`, `featured_until`, `is_published`, `published_until`, `created`, `modified`, `video_youtube`, `type`, `opening_hours`)
VALUES
	(1,1,8,9,'Paradise Hotel 5*','paradise-hotel','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','6 Trails End Road Miramar, \r\nFL 33025',18.00,41.921,-87.682,1,1,NULL,1,NULL,'2017-06-27 10:38:32','2017-07-16 17:50:01',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(2,1,8,1,'University Caffeteria','univesity-caffeteria','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','469 East Avenue\r\nPhoenix, AZ 85040',29.00,40.713,-74.006,1,1,NULL,1,NULL,'2017-06-27 14:26:28','2017-07-16 17:49:34',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(3,1,4,7,'Book Store','book-store','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','337 Ashmor Drive\r\nFargo, MN 58102',49.00,37.775,-122.419,0,0,NULL,1,NULL,'2017-06-28 11:08:52','2017-07-16 17:49:04',NULL,'MAP','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(4,1,4,5,'Chess Lectures','chess-lectures','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','3083 Dola Mine Road\r\nRaleigh, NC 27609',NULL,41.878,-87.63,0,0,NULL,1,NULL,'2017-06-29 19:28:41','2017-07-16 17:48:50',NULL,'MAP','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(5,1,5,10,'Boat Trip','boat-trip','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','3083 Dola Mine Road\r\nRaleigh, NC 27609',9.90,38.624856765607,-90.218630274219,0,0,NULL,1,NULL,'2017-06-29 20:01:11','2017-07-16 17:48:27',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(6,1,5,8,'Medieval Castle','medieval-castle','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','3083 Dola Mine Road\r\nRaleigh, NC 27609',NULL,38.905923271459,-77.037471514819,0,0,NULL,1,NULL,'2017-06-29 20:02:47','2017-07-16 17:47:32',NULL,'MAP','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(7,1,8,8,'Delicious Dinner','delicious-dinner','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','4062 Hilltop Street\r\nSpringfield, MA 01115',19.99,38.907,-77.037,1,0,NULL,1,NULL,'2017-07-08 14:01:38','2017-07-16 17:47:39',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(8,1,8,10,'Coffee Shop','coffee-shop','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','1899 Parkway Drive\r\nPhoenix, AZ 85018',9.99,38.627,-90.199,1,0,NULL,1,NULL,'2017-07-08 14:11:37','2017-07-16 17:46:00',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(9,1,8,7,'Burger Menu','burger-menu','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','3389 Levy Court\r\nAndover, MA 01810',4.99,37.778,-122.42,0,0,NULL,1,NULL,'2017-07-08 14:14:25','2017-07-16 17:45:38',NULL,'NONE','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(10,1,4,5,'Piano Lessons','piano-lessons','<p><b>Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</b> Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla. </p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','3083 Dola Mine Road\r\nRaleigh, NC 27609',NULL,41.864,-87.655,1,0,NULL,1,NULL,'2017-07-08 14:43:34','2017-07-16 17:45:10',NULL,'MAP','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(11,1,5,8,'Romantic Boat Trip','romantic-boat-trip','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span></p><p>Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','1624 Fleming Way\r\nChester, VA 23831',19.90,38.908,-77.027,0,0,NULL,1,NULL,'2017-07-08 14:45:28','2017-07-16 17:42:06',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed'),
	(12,1,6,9,'Place for Rent','place-for-rent','<p><b>Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</b></p><p> Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla. </p><p>Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p>','1624 Fleming Way\r\nChester, VA 23831',1200.00,34.066,-118.233,0,0,NULL,1,NULL,'2017-07-08 14:48:24','2017-07-15 15:07:23',NULL,'GALLERY','Mon - Fri: 9:00 - 17:00\r\nSat - Sun: Closed');

/*!40000 ALTER TABLE `directory_platform_listings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_locations`;

CREATE TABLE `directory_platform_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B33CA1AF989D9B62` (`slug`),
  KEY `IDX_B33CA1AF64D218E` (`location_id`),
  CONSTRAINT `FK_B33CA1AF64D218E` FOREIGN KEY (`location_id`) REFERENCES `directory_platform_locations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_locations` WRITE;
/*!40000 ALTER TABLE `directory_platform_locations` DISABLE KEYS */;

INSERT INTO `directory_platform_locations` (`id`, `location_id`, `image_name`, `name`, `slug`, `created`, `modified`)
VALUES
	(1,NULL,'595170940595b976277768.jpg','New York','new-york','2017-06-26 17:26:18','2017-06-26 22:37:40'),
	(2,1,NULL,'Brooklyn','brooklyn','2017-06-26 17:26:45','2017-06-26 17:26:45'),
	(3,1,NULL,'Manhattan','manhattan','2017-06-26 17:27:05','2017-06-26 17:27:05'),
	(4,1,NULL,'Bronx','bronx','2017-06-26 17:27:16','2017-06-26 17:27:16'),
	(5,NULL,'59520b3272ca5552002578.jpg','Chicago','chicago','2017-06-26 22:38:13','2017-06-27 09:37:22'),
	(7,NULL,'59520b40da342838285688.jpg','San Francisco','san-francisco','2017-06-27 09:36:48','2017-06-27 09:37:36'),
	(8,NULL,'59520bd6910a2949885732.jpg','Washington','washington','2017-06-27 09:40:06','2017-06-27 09:40:06'),
	(9,NULL,'59520bf734193204593594.jpg','Los Angeles','los-angeles','2017-06-27 09:40:29','2017-06-27 09:40:39'),
	(10,NULL,'59520c5d4daa8013805861.jpg','St. Louis','st-louis','2017-06-27 09:42:21','2017-06-27 09:42:21');

/*!40000 ALTER TABLE `directory_platform_locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_order_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_order_items`;

CREATE TABLE `directory_platform_order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62EDE48E8D9F6D38` (`order_id`),
  KEY `IDX_62EDE48ED4619D1A` (`listing_id`),
  CONSTRAINT `FK_62EDE48E8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `directory_platform_orders` (`id`),
  CONSTRAINT `FK_62EDE48ED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_orders`;

CREATE TABLE `directory_platform_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gateway` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reg_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vat_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_96DD63F8A76ED395` (`user_id`),
  CONSTRAINT `FK_96DD63F8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_payment_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_payment_tokens`;

CREATE TABLE `directory_platform_payment_tokens` (
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:object)',
  `after_url` longtext COLLATE utf8_unicode_ci,
  `target_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gateway_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_payments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_payments`;

CREATE TABLE `directory_platform_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6EFDE3548D9F6D38` (`order_id`),
  CONSTRAINT `FK_6EFDE3548D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `directory_platform_orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_posts`;

CREATE TABLE `directory_platform_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A6D52F7D989D9B62` (`slug`),
  KEY `IDX_A6D52F7DA76ED395` (`user_id`),
  KEY `IDX_A6D52F7D12469DE2` (`category_id`),
  CONSTRAINT `FK_A6D52F7D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`),
  CONSTRAINT `FK_A6D52F7DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_posts` WRITE;
/*!40000 ALTER TABLE `directory_platform_posts` DISABLE KEYS */;

INSERT INTO `directory_platform_posts` (`id`, `user_id`, `category_id`, `name`, `slug`, `description`, `is_published`, `created`, `modified`, `image_name`)
VALUES
	(1,1,3,'How to pick the best event?','how-pick-best-event','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p><img src=\"http://directory-platform.wearecodevision.com/bundles/front/img/tmp/post.jpg\" style=\"width: 277.5px; height: 185px;\">Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p><ul><li>Quisque maximus pharetra dolor</li><li>Donec pellentesque neque et semper tempor</li><li>Curabitur non fringilla tellus</li><li>In commodo sed eros sed euismod</li></ul><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p>',1,'2017-06-28 12:01:03','2017-07-17 10:45:54','59538f4c1267c718214190.jpg'),
	(2,1,5,'Best summer vacations','best-summer-vacations','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p><img src=\"http://directory-platform.wearecodevision.com/bundles/front/img/tmp/post.jpg\" style=\"width: 277.5px; height: 185px;\">Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p><ul><li>Quisque maximus pharetra dolor</li><li>Donec pellentesque neque et semper tempor</li><li>Curabitur non fringilla tellus</li><li>In commodo sed eros sed euismod</li></ul><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p>',1,'2017-06-28 13:21:48','2017-07-17 10:45:50','5953914c60a9e463608320.jpg'),
	(3,1,2,'Most selling classifieds','most-selling-classifieds','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p><img src=\"http://directory-platform.wearecodevision.com/bundles/front/img/tmp/post.jpg\" style=\"width: 277.5px; height: 185px;\">Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p><ul><li>Quisque maximus pharetra dolor</li><li>Donec pellentesque neque et semper tempor</li><li>Curabitur non fringilla tellus</li><li>In commodo sed eros sed euismod</li></ul><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p>',1,'2017-06-28 13:31:52','2017-07-17 10:45:46','595393a88d6e5260112237.jpg'),
	(4,1,3,'Interesting concerts in the city','interesting-concerts-in-the-city','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p><img src=\"http://directory-platform.wearecodevision.com/bundles/front/img/tmp/post.jpg\" style=\"width: 277.5px; height: 185px;\">Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p><ul><li>Quisque maximus pharetra dolor</li><li>Donec pellentesque neque et semper tempor</li><li>Curabitur non fringilla tellus</li><li>In commodo sed eros sed euismod</li></ul><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p>',1,'2017-07-13 13:21:20','2017-07-17 10:45:41','596757b025efa051182840.jpg'),
	(5,1,5,'How to take event photos?','how-to-take-event-photos','<p><span style=\"font-weight: bolder;\">Integer id blandit dolor, sit amet hendrerit diam. Curabitur vel diam fringilla justo vulputate mattis vel sed augue.</span>&nbsp;Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.</p><p><img src=\"/bundles/front/img/tmp/post.jpg\" style=\"width: 277.5px; height: 185px;\">Cras et pharetra felis, fringilla luctus arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum metus metus, dapibus vel mattis vel, pulvinar congue erat. Maecenas tortor sem, auctor sit amet laoreet vitae, efficitur et sem. Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.</p><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p><ul><li>Quisque maximus pharetra dolor</li><li>Donec pellentesque neque et semper tempor</li><li>Curabitur non fringilla tellus</li><li>In commodo sed eros sed euismod</li></ul><p>In commodo sed eros sed euismod. Donec pellentesque neque et semper tempor. Nullam sapien elit, fermentum rutrum dolor sit amet, ullamcorper blandit libero. Integer viverra ullamcorper dapibus. Curabitur malesuada fermentum suscipit. Aliquam erat volutpat.&nbsp;<span style=\"font-weight: bolder;\">Nunc pulvinar lacus nec risus finibus luctus.</span>&nbsp;Vestibulum vel lacus vel diam rutrum feugiat. Curabitur non finibus urna, in condimentum orci. Curabitur non fringilla tellus. In id imperdiet dolor, vel accumsan sem. Quisque maximus pharetra dolor, sit amet efficitur purus hendrerit ut. Proin pharetra ac diam id hendrerit.</p>',1,'2017-07-13 13:25:10','2017-07-17 10:45:23','59675896dc796153083014.jpg');

/*!40000 ALTER TABLE `directory_platform_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_profiles`;

CREATE TABLE `directory_platform_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `avatar_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_801FFD56A76ED395` (`user_id`),
  CONSTRAINT `FK_801FFD56A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_profiles` WRITE;
/*!40000 ALTER TABLE `directory_platform_profiles` DISABLE KEYS */;

INSERT INTO `directory_platform_profiles` (`id`, `user_id`, `avatar_name`, `first_name`, `last_name`, `country`, `address`, `description`, `phone`, `website`, `facebook`, `twitter`, `linkedin`, `created`, `modified`)
VALUES
	(1,1,'5952440d89486304010830.jpg','Christopher','Frazier',NULL,NULL,NULL,'+0-123-456-789','http://example.com','https://facebook.com','https://twitter.com','https://linkedin.com','2017-06-27 13:39:57','2017-06-27 13:41:02');

/*!40000 ALTER TABLE `directory_platform_profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_ratings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_ratings`;

CREATE TABLE `directory_platform_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) DEFAULT NULL,
  `type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3A1140063E2E969B` (`review_id`),
  CONSTRAINT `FK_3A1140063E2E969B` FOREIGN KEY (`review_id`) REFERENCES `directory_platform_reviews` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_ratings` WRITE;
/*!40000 ALTER TABLE `directory_platform_ratings` DISABLE KEYS */;

INSERT INTO `directory_platform_ratings` (`id`, `review_id`, `type`, `value`, `max`, `created`, `modified`)
VALUES
	(1,1,'OVERVIEW',4,5,'2017-06-30 16:50:17','2017-06-30 16:50:17'),
	(2,1,'SERVICE',5,5,'2017-06-30 16:50:17','2017-06-30 16:50:17'),
	(3,1,'PRICING',3,5,'2017-06-30 16:50:17','2017-06-30 16:50:17'),
	(4,2,'OVERVIEW',4,5,'2017-07-13 15:45:15','2017-07-13 15:45:15'),
	(5,2,'SERVICE',5,5,'2017-07-13 15:45:15','2017-07-13 15:45:15'),
	(6,2,'PRICING',3,5,'2017-07-13 15:45:15','2017-07-13 15:45:15'),
	(7,3,'OVERVIEW',1,5,'2017-07-13 15:45:33','2017-07-13 15:45:33'),
	(8,3,'SERVICE',4,5,'2017-07-13 15:45:33','2017-07-13 15:45:33'),
	(9,3,'PRICING',3,5,'2017-07-13 15:45:33','2017-07-13 15:45:33'),
	(10,4,'OVERVIEW',4,5,'2017-07-13 15:45:42','2017-07-13 15:45:42'),
	(11,4,'SERVICE',5,5,'2017-07-13 15:45:42','2017-07-13 15:45:42'),
	(12,4,'PRICING',5,5,'2017-07-13 15:45:42','2017-07-13 15:45:42'),
	(13,5,'OVERVIEW',5,5,'2017-07-13 17:25:29','2017-07-13 17:25:29'),
	(14,5,'SERVICE',5,5,'2017-07-13 17:25:29','2017-07-13 17:25:29'),
	(15,5,'PRICING',5,5,'2017-07-13 17:25:29','2017-07-13 17:25:29'),
	(16,6,'OVERVIEW',4,5,'2017-07-17 12:45:52','2017-07-17 12:45:52'),
	(17,6,'SERVICE',3,5,'2017-07-17 12:45:52','2017-07-17 12:45:52'),
	(18,6,'PRICING',5,5,'2017-07-17 12:45:52','2017-07-17 12:45:52'),
	(19,7,'OVERVIEW',5,5,'2017-07-17 12:45:57','2017-07-17 12:45:57'),
	(20,7,'SERVICE',5,5,'2017-07-17 12:45:57','2017-07-17 12:45:57'),
	(21,7,'PRICING',5,5,'2017-07-17 12:45:57','2017-07-17 12:45:57'),
	(22,8,'OVERVIEW',4,5,'2017-07-17 12:46:02','2017-07-17 12:46:02'),
	(23,8,'SERVICE',4,5,'2017-07-17 12:46:02','2017-07-17 12:46:02'),
	(24,8,'PRICING',4,5,'2017-07-17 12:46:02','2017-07-17 12:46:02'),
	(25,9,'OVERVIEW',3,5,'2017-07-17 12:46:08','2017-07-17 12:46:08'),
	(26,9,'SERVICE',4,5,'2017-07-17 12:46:08','2017-07-17 12:46:08'),
	(27,9,'PRICING',5,5,'2017-07-17 12:46:08','2017-07-17 12:46:08'),
	(28,10,'OVERVIEW',5,5,'2017-07-17 12:46:14','2017-07-17 12:46:14'),
	(29,10,'SERVICE',5,5,'2017-07-17 12:46:14','2017-07-17 12:46:14'),
	(30,10,'PRICING',5,5,'2017-07-17 12:46:14','2017-07-17 12:46:14'),
	(31,11,'OVERVIEW',5,5,'2017-07-17 12:46:19','2017-07-17 12:46:19'),
	(32,11,'SERVICE',4,5,'2017-07-17 12:46:19','2017-07-17 12:46:19'),
	(33,11,'PRICING',5,5,'2017-07-17 12:46:19','2017-07-17 12:46:19'),
	(34,12,'OVERVIEW',3,5,'2017-07-17 12:46:24','2017-07-17 12:46:24'),
	(35,12,'SERVICE',4,5,'2017-07-17 12:46:24','2017-07-17 12:46:24'),
	(36,12,'PRICING',3,5,'2017-07-17 12:46:24','2017-07-17 12:46:24'),
	(37,13,'OVERVIEW',5,5,'2017-07-17 12:46:29','2017-07-17 12:46:29'),
	(38,13,'SERVICE',5,5,'2017-07-17 12:46:29','2017-07-17 12:46:29'),
	(39,13,'PRICING',5,5,'2017-07-17 12:46:29','2017-07-17 12:46:29'),
	(40,14,'OVERVIEW',4,5,'2017-07-17 12:46:35','2017-07-17 12:46:35'),
	(41,14,'SERVICE',5,5,'2017-07-17 12:46:35','2017-07-17 12:46:35'),
	(42,14,'PRICING',4,5,'2017-07-17 12:46:35','2017-07-17 12:46:35'),
	(43,15,'OVERVIEW',4,5,'2017-07-17 12:46:40','2017-07-17 12:46:40'),
	(44,15,'SERVICE',4,5,'2017-07-17 12:46:40','2017-07-17 12:46:40'),
	(45,15,'PRICING',5,5,'2017-07-17 12:46:40','2017-07-17 12:46:40'),
	(46,16,'OVERVIEW',3,5,'2017-07-17 12:46:45','2017-07-17 12:46:45'),
	(47,16,'SERVICE',4,5,'2017-07-17 12:46:45','2017-07-17 12:46:45'),
	(48,16,'PRICING',5,5,'2017-07-17 12:46:46','2017-07-17 12:46:46'),
	(49,17,'OVERVIEW',5,5,'2017-07-17 12:46:51','2017-07-17 12:46:51'),
	(50,17,'SERVICE',4,5,'2017-07-17 12:46:51','2017-07-17 12:46:51'),
	(51,17,'PRICING',3,5,'2017-07-17 12:46:51','2017-07-17 12:46:51'),
	(52,18,'OVERVIEW',5,5,'2017-07-17 12:46:58','2017-07-17 12:46:58'),
	(53,18,'SERVICE',4,5,'2017-07-17 12:46:58','2017-07-17 12:46:58'),
	(54,18,'PRICING',5,5,'2017-07-17 12:46:58','2017-07-17 12:46:58'),
	(55,19,'OVERVIEW',4,5,'2017-07-17 12:47:59','2017-07-17 12:47:59'),
	(56,19,'SERVICE',4,5,'2017-07-17 12:47:59','2017-07-17 12:47:59'),
	(57,19,'PRICING',4,5,'2017-07-17 12:47:59','2017-07-17 12:47:59');

/*!40000 ALTER TABLE `directory_platform_ratings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_reports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_reports`;

CREATE TABLE `directory_platform_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5B8E08AA76ED395` (`user_id`),
  KEY `IDX_5B8E08AD4619D1A` (`listing_id`),
  CONSTRAINT `FK_5B8E08AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`),
  CONSTRAINT `FK_5B8E08AD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_reviews`;

CREATE TABLE `directory_platform_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `name` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9DD7ACC0A76ED395` (`user_id`),
  KEY `IDX_9DD7ACC0D4619D1A` (`listing_id`),
  CONSTRAINT `FK_9DD7ACC0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`),
  CONSTRAINT `FK_9DD7ACC0D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_reviews` WRITE;
/*!40000 ALTER TABLE `directory_platform_reviews` DISABLE KEYS */;

INSERT INTO `directory_platform_reviews` (`id`, `user_id`, `listing_id`, `name`, `description`, `is_published`, `created`, `modified`)
VALUES
	(1,1,2,NULL,'Vestibulum vulputate mi id nisl facilisis cursus. Ut nec mauris sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quis dignissim ante, sollicitudin tempor tellus. Nulla scelerisque, sapien ac tincidunt sodales, enim libero lobortis justo, at cursus dolor purus vitae orci.',1,'2017-06-30 16:50:17','2017-06-30 16:50:31'),
	(2,1,12,NULL,'Mauris scelerisque ligula vitae mauris bibendum, et rutrum odio porttitor. Phasellus interdum orci dui, at lobortis sapien molestie in. Sed nec scelerisque sem.',1,'2017-07-13 15:45:15','2017-07-13 15:49:05'),
	(3,1,12,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-13 15:45:33','2017-07-13 15:49:03'),
	(4,1,12,NULL,'Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-13 15:45:42','2017-07-13 15:49:01'),
	(5,1,12,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-13 17:25:29','2017-07-17 12:56:44'),
	(6,1,11,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:45:52','2017-07-17 12:56:45'),
	(7,1,11,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:45:57','2017-07-17 12:56:46'),
	(8,1,11,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:02','2017-07-17 12:56:46'),
	(9,1,9,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:08','2017-07-17 12:56:47'),
	(10,1,9,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:14','2017-07-17 12:56:58'),
	(11,1,9,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:19','2017-07-17 12:56:59'),
	(12,1,8,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:24','2017-07-17 12:57:00'),
	(13,1,8,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:29','2017-07-17 12:57:00'),
	(14,1,8,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:35','2017-07-17 12:57:01'),
	(15,1,8,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:40','2017-07-17 12:57:02'),
	(16,1,7,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:45','2017-07-17 12:57:03'),
	(17,1,7,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:51','2017-07-17 12:57:04'),
	(18,1,7,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:46:58','2017-07-17 12:57:04'),
	(19,1,7,NULL,'Etiam malesuada in elit et maximus. Sed ultricies turpis nec odio accumsan, quis feugiat neque convallis. Nunc vestibulum dapibus fringilla. Sed sed suscipit nulla.',1,'2017-07-17 12:47:59','2017-07-17 12:57:04');

/*!40000 ALTER TABLE `directory_platform_reviews` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table directory_platform_searches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_searches`;

CREATE TABLE `directory_platform_searches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `query` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B37407FA76ED395` (`user_id`),
  CONSTRAINT `FK_6B37407FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_subscribers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_subscribers`;

CREATE TABLE `directory_platform_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table directory_platform_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directory_platform_users`;

CREATE TABLE `directory_platform_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `is_verified` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3A0B306E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_3A0B306EA0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_3A0B306EC05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directory_platform_users` WRITE;
/*!40000 ALTER TABLE `directory_platform_users` DISABLE KEYS */;

INSERT INTO `directory_platform_users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `is_verified`, `created`, `modified`)
VALUES
	(1,'sample@example.com','sample@example.com','sample@example.com','sample@example.com',1,NULL,'$2y$13$EekME.hwoZSPrg4RJAt7puv/RZb3VdNjnfSzrq7GXpMkZmDpozWxG','2017-07-17 11:05:48',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',NULL,'2017-06-26 16:51:51','2017-07-17 11:05:48');

/*!40000 ALTER TABLE `directory_platform_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
