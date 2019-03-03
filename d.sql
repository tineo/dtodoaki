-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: dtodoaqui
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `directory_platform_amenities`
--

DROP TABLE IF EXISTS `directory_platform_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_amenities`
--

LOCK TABLES `directory_platform_amenities` WRITE;
/*!40000 ALTER TABLE `directory_platform_amenities` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_categories`
--

DROP TABLE IF EXISTS `directory_platform_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_578A786812469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_categories`
--

LOCK TABLES `directory_platform_categories` WRITE;
/*!40000 ALTER TABLE `directory_platform_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_claims`
--

DROP TABLE IF EXISTS `directory_platform_claims`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_claims` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD518DA8A76ED395` (`user_id`),
  KEY `IDX_CD518DA8D4619D1A` (`listing_id`),
  CONSTRAINT `FK_CD518DA8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CD518DA8D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_claims`
--

LOCK TABLES `directory_platform_claims` WRITE;
/*!40000 ALTER TABLE `directory_platform_claims` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_claims` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_favorites`
--

DROP TABLE IF EXISTS `directory_platform_favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_40B38BE0A76ED395` (`user_id`),
  KEY `IDX_40B38BE0D4619D1A` (`listing_id`),
  CONSTRAINT `FK_40B38BE0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_40B38BE0D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_favorites`
--

LOCK TABLES `directory_platform_favorites` WRITE;
/*!40000 ALTER TABLE `directory_platform_favorites` DISABLE KEYS */;
INSERT INTO `directory_platform_favorites` VALUES (1,2,1,'2019-03-02 19:22:38','2019-03-02 19:22:38');
/*!40000 ALTER TABLE `directory_platform_favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_fields`
--

DROP TABLE IF EXISTS `directory_platform_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `data_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_value` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D177D9ED4619D1A` (`listing_id`),
  CONSTRAINT `FK_D177D9ED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_fields`
--

LOCK TABLES `directory_platform_fields` WRITE;
/*!40000 ALTER TABLE `directory_platform_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_images`
--

DROP TABLE IF EXISTS `directory_platform_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_93ED207CD4619D1A` (`listing_id`),
  CONSTRAINT `FK_93ED207CD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_images`
--

LOCK TABLES `directory_platform_images` WRITE;
/*!40000 ALTER TABLE `directory_platform_images` DISABLE KEYS */;
INSERT INTO `directory_platform_images` VALUES (1,1,'5c7619895553c214098491.jpg','2019-02-27 00:00:57','2019-02-27 00:00:57'),(2,3,'5c7b3c1f44882524842171.jpg','2019-03-02 21:29:51','2019-03-02 21:29:51');
/*!40000 ALTER TABLE `directory_platform_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_inquires`
--

DROP TABLE IF EXISTS `directory_platform_inquires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_4BB1212FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4BB1212FD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_inquires`
--

LOCK TABLES `directory_platform_inquires` WRITE;
/*!40000 ALTER TABLE `directory_platform_inquires` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_inquires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_listing_amenity`
--

DROP TABLE IF EXISTS `directory_platform_listing_amenity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_listing_amenity` (
  `listing_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL,
  PRIMARY KEY (`listing_id`,`amenity_id`),
  KEY `IDX_2FD9CB8BD4619D1A` (`listing_id`),
  KEY `IDX_2FD9CB8B9F9F1305` (`amenity_id`),
  CONSTRAINT `FK_2FD9CB8B9F9F1305` FOREIGN KEY (`amenity_id`) REFERENCES `directory_platform_amenities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD9CB8BD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_listing_amenity`
--

LOCK TABLES `directory_platform_listing_amenity` WRITE;
/*!40000 ALTER TABLE `directory_platform_listing_amenity` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_listing_amenity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_listings`
--

DROP TABLE IF EXISTS `directory_platform_listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_listings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `price` decimal(7,2) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8_unicode_ci,
  `opening_hours` longtext COLLATE utf8_unicode_ci,
  `is_verified` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `featured_until` datetime DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `published_until` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9154A1E8989D9B62` (`slug`),
  KEY `IDX_9154A1E8A76ED395` (`user_id`),
  KEY `IDX_9154A1E812469DE2` (`category_id`),
  KEY `IDX_9154A1E864D218E` (`location_id`),
  CONSTRAINT `FK_9154A1E812469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9154A1E864D218E` FOREIGN KEY (`location_id`) REFERENCES `directory_platform_locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9154A1E8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_listings`
--

LOCK TABLES `directory_platform_listings` WRITE;
/*!40000 ALTER TABLE `directory_platform_listings` DISABLE KEYS */;
INSERT INTO `directory_platform_listings` VALUES (1,1,NULL,NULL,'tineo','MAP','tineo',NULL,NULL,NULL,-12.0317754,-77.0786949,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-02-27 00:00:57','2019-02-27 00:00:57'),(3,2,NULL,NULL,'cevicheria','NONE','ceviche','<p>ceewf<b>efwfew</b></p>','Jiron Moyobamba 741',2321.00,-12.046,-77.017,'https://www.youtube.com/watch?v=hvn7qmNoj48','ewqewq',0,0,NULL,1,NULL,'2019-03-02 21:15:05','2019-03-02 21:29:51');
/*!40000 ALTER TABLE `directory_platform_listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_locations`
--

DROP TABLE IF EXISTS `directory_platform_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_B33CA1AF64D218E` FOREIGN KEY (`location_id`) REFERENCES `directory_platform_locations` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_locations`
--

LOCK TABLES `directory_platform_locations` WRITE;
/*!40000 ALTER TABLE `directory_platform_locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_order_items`
--

DROP TABLE IF EXISTS `directory_platform_order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_62EDE48E8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `directory_platform_orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_62EDE48ED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_order_items`
--

LOCK TABLES `directory_platform_order_items` WRITE;
/*!40000 ALTER TABLE `directory_platform_order_items` DISABLE KEYS */;
INSERT INTO `directory_platform_order_items` VALUES (1,1,1,'pay_for_publish','29.99',30,'2019-02-27 00:22:58',NULL);
/*!40000 ALTER TABLE `directory_platform_order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_orders`
--

DROP TABLE IF EXISTS `directory_platform_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_96DD63F8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_orders`
--

LOCK TABLES `directory_platform_orders` WRITE;
/*!40000 ALTER TABLE `directory_platform_orders` DISABLE KEYS */;
INSERT INTO `directory_platform_orders` VALUES (1,1,'NEW','paypal','USD','29.99','Cesar Gutierrez','51561','165','AF','Lima','Lima','Jiron Moyobamba 741','Lima 31','2019-02-27 00:22:58',NULL);
/*!40000 ALTER TABLE `directory_platform_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_payment_tokens`
--

DROP TABLE IF EXISTS `directory_platform_payment_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_payment_tokens` (
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:object)',
  `after_url` longtext COLLATE utf8_unicode_ci,
  `target_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gateway_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_payment_tokens`
--

LOCK TABLES `directory_platform_payment_tokens` WRITE;
/*!40000 ALTER TABLE `directory_platform_payment_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_payment_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_payments`
--

DROP TABLE IF EXISTS `directory_platform_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` json NOT NULL COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6EFDE3548D9F6D38` (`order_id`),
  CONSTRAINT `FK_6EFDE3548D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `directory_platform_orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_payments`
--

LOCK TABLES `directory_platform_payments` WRITE;
/*!40000 ALTER TABLE `directory_platform_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_posts`
--

DROP TABLE IF EXISTS `directory_platform_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A6D52F7D989D9B62` (`slug`),
  KEY `IDX_A6D52F7DA76ED395` (`user_id`),
  KEY `IDX_A6D52F7D12469DE2` (`category_id`),
  CONSTRAINT `FK_A6D52F7D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `directory_platform_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A6D52F7DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_posts`
--

LOCK TABLES `directory_platform_posts` WRITE;
/*!40000 ALTER TABLE `directory_platform_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_profiles`
--

DROP TABLE IF EXISTS `directory_platform_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_801FFD56A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_profiles`
--

LOCK TABLES `directory_platform_profiles` WRITE;
/*!40000 ALTER TABLE `directory_platform_profiles` DISABLE KEYS */;
INSERT INTO `directory_platform_profiles` VALUES (1,2,'5c7b0a48b5b8b335652585.jpg','Cesar','Gutierrez','AF','Jiron Moyobamba 741',NULL,'996666567','www.makinap.com','Lima 31','Lima 31','Cesar Gutierrez','2019-03-02 17:56:57','2019-03-02 17:57:12');
/*!40000 ALTER TABLE `directory_platform_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_ratings`
--

DROP TABLE IF EXISTS `directory_platform_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_3A1140063E2E969B` FOREIGN KEY (`review_id`) REFERENCES `directory_platform_reviews` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_ratings`
--

LOCK TABLES `directory_platform_ratings` WRITE;
/*!40000 ALTER TABLE `directory_platform_ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_reports`
--

DROP TABLE IF EXISTS `directory_platform_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_5B8E08AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5B8E08AD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_reports`
--

LOCK TABLES `directory_platform_reports` WRITE;
/*!40000 ALTER TABLE `directory_platform_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_reviews`
--

DROP TABLE IF EXISTS `directory_platform_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  CONSTRAINT `FK_9DD7ACC0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9DD7ACC0D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `directory_platform_listings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_reviews`
--

LOCK TABLES `directory_platform_reviews` WRITE;
/*!40000 ALTER TABLE `directory_platform_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_searches`
--

DROP TABLE IF EXISTS `directory_platform_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_searches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `query` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B37407FA76ED395` (`user_id`),
  CONSTRAINT `FK_6B37407FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `directory_platform_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_searches`
--

LOCK TABLES `directory_platform_searches` WRITE;
/*!40000 ALTER TABLE `directory_platform_searches` DISABLE KEYS */;
INSERT INTO `directory_platform_searches` VALUES (1,2,'keyword=tineo&price_enabled=1&price_from=0.00&price_to=300.00&radius_enabled=1&radius=50.00','listing','2019-03-02 21:13:53',NULL),(2,2,'display=grid','listing','2019-03-02 21:17:59',NULL),(3,2,'display=grid','listing','2019-03-02 21:18:51',NULL),(4,2,'display=grid','listing','2019-03-02 21:19:00',NULL),(5,2,'price_enabled=1&price_from=0.00&price_to=300.00&radius_enabled=1&radius=50.00','listing','2019-03-02 21:25:57',NULL),(6,2,'display=grid','listing','2019-03-02 21:46:56',NULL),(7,2,'display=grid','listing','2019-03-02 21:47:11',NULL),(8,2,'keyword=tineo&radius_enabled=1&price_enabled=1','listing','2019-03-02 21:47:34',NULL),(9,2,'keyword=tineo&radius_enabled=1&price_enabled=1','listing','2019-03-02 21:50:37',NULL),(10,2,'keyword=tineo&price_enabled=1&price_from=0.00&price_to=300.00&radius_enabled=1&radius=25.00','listing','2019-03-02 22:30:54',NULL),(11,2,'keyword=tineo&price_enabled=1&price_from=0.00&price_to=300.00&radius_enabled=1&radius=25.00','listing','2019-03-02 22:32:31',NULL);
/*!40000 ALTER TABLE `directory_platform_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_subscribers`
--

DROP TABLE IF EXISTS `directory_platform_subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directory_platform_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_subscribers`
--

LOCK TABLES `directory_platform_subscribers` WRITE;
/*!40000 ALTER TABLE `directory_platform_subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `directory_platform_subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directory_platform_users`
--

DROP TABLE IF EXISTS `directory_platform_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directory_platform_users`
--

LOCK TABLES `directory_platform_users` WRITE;
/*!40000 ALTER TABLE `directory_platform_users` DISABLE KEYS */;
INSERT INTO `directory_platform_users` VALUES (1,'tineo','tineo','cesar@tineo.mobi','cesar@tineo.mobi',1,NULL,'$2y$13$/jwB4RWje8PtSTFRg/GkLujRuOCEosNbMM2IVvUTwSe6PMaHzcko.','2019-02-26 23:43:48',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',NULL,'2019-02-26 23:43:48','2019-02-26 23:43:48'),(2,'itsudatte','itsudatte','tineo@live.jp','tineo@live.jp',1,NULL,'$2y$13$uoOgFoGl7V3BBzCKb1bzG.LvgRUxdHt1VoXuulyJnusKEFRYwQO/K','2019-03-02 19:21:29',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL,'2019-03-02 17:07:11','2019-03-02 19:21:29');
/*!40000 ALTER TABLE `directory_platform_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-02 23:45:35
