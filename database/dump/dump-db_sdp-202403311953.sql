-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_sdp
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`),
  CONSTRAINT `activity_log_chk_1` CHECK (json_valid(`properties`))
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'user','You have created user','App\\Models\\User',1,NULL,NULL,'{\"attributes\":{\"name\":\"FikriDev\",\"username\":\"admin\"}}','2024-03-20 06:42:43','2024-03-20 06:42:43'),(2,'user','You have created user','App\\Models\\User',2,NULL,NULL,'{\"attributes\":{\"name\":\"Johni\",\"username\":\"johni\"}}','2024-03-20 06:42:43','2024-03-20 06:42:43'),(3,'user','You have created user','App\\Models\\User',3,NULL,NULL,'{\"attributes\":{\"name\":\"user\",\"username\":\"user\"}}','2024-03-20 06:50:34','2024-03-20 06:50:34'),(4,'penyakit','You have updated penyakit','App\\Models\\Penyakit',1,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\"},\"old\":{\"nama\":\"Influenza\"}}','2024-03-20 07:07:45','2024-03-20 07:07:45'),(5,'penyakit','You have updated penyakit','App\\Models\\Penyakit',2,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bakteri Daun Bergaris\"},\"old\":{\"nama\":\"Demam berdarah dengue(DBD)\"}}','2024-03-20 07:10:28','2024-03-20 07:10:28'),(6,'penyakit','You have updated penyakit','App\\Models\\Penyakit',3,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Blast\"},\"old\":{\"nama\":\"Hepatitis\"}}','2024-03-20 07:11:09','2024-03-20 07:11:09'),(7,'penyakit','You have updated penyakit','App\\Models\\Penyakit',4,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Pelepah\"},\"old\":{\"nama\":\"Malaria\"}}','2024-03-20 07:12:25','2024-03-20 07:12:25'),(8,'penyakit','You have updated penyakit','App\\Models\\Penyakit',5,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Busuk Batang\"},\"old\":{\"nama\":\"Campak\"}}','2024-03-20 07:13:13','2024-03-20 07:13:13'),(9,'penyakit','You have updated penyakit','App\\Models\\Penyakit',6,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Busuk Pelepah\"},\"old\":{\"nama\":\"Tifus\"}}','2024-03-20 07:13:58','2024-03-20 07:13:58'),(10,'penyakit','You have updated penyakit','App\\Models\\Penyakit',7,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak Coklat\"},\"old\":{\"nama\":\"Cacingan\"}}','2024-03-20 07:14:43','2024-03-20 07:14:43'),(11,'penyakit','You have created penyakit','App\\Models\\Penyakit',8,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak Cercospora\",\"kode\":\"P008\"}}','2024-03-20 07:15:37','2024-03-20 07:15:37'),(12,'penyakit','You have created penyakit','App\\Models\\Penyakit',9,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Jingga\",\"kode\":\"P009\"}}','2024-03-20 07:16:26','2024-03-20 07:16:26'),(13,'penyakit','You have created penyakit','App\\Models\\Penyakit',10,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tungro\",\"kode\":\"P010\"}}','2024-03-20 07:17:04','2024-03-20 07:17:04'),(14,'penyakit','You have created penyakit','App\\Models\\Penyakit',11,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Kerdil Rumput\",\"kode\":\"P011\"}}','2024-03-20 07:17:42','2024-03-20 07:17:42'),(15,'penyakit','You have created penyakit','App\\Models\\Penyakit',12,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Kerdil Hampa\",\"kode\":\"P012\"}}','2024-03-20 07:18:18','2024-03-20 07:18:18'),(16,'gejala','You have updated gejala','App\\Models\\Gejala',1,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna hijau kelabu\"},\"old\":{\"nama\":\"Demam\"}}','2024-03-20 07:19:07','2024-03-20 07:19:07'),(17,'gejala','You have updated gejala','App\\Models\\Gejala',2,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun melipat\"},\"old\":{\"nama\":\"Demam tinggi\"}}','2024-03-20 07:19:19','2024-03-20 07:19:19'),(18,'gejala','You have updated gejala','App\\Models\\Gejala',3,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Menggulung\"},\"old\":{\"nama\":\"Batuk\"}}','2024-03-20 07:19:29','2024-03-20 07:19:29'),(19,'gejala','You have updated gejala','App\\Models\\Gejala',4,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun layu\"},\"old\":{\"nama\":\"Diare\"}}','2024-03-20 07:19:38','2024-03-20 07:19:38'),(20,'gejala','You have updated gejala','App\\Models\\Gejala',5,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Mati\"},\"old\":{\"nama\":\"Mual\"}}','2024-03-20 07:19:46','2024-03-20 07:19:46'),(21,'gejala','You have updated gejala','App\\Models\\Gejala',6,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Kering\"},\"old\":{\"nama\":\"Muntah\"}}','2024-03-20 07:19:56','2024-03-20 07:19:56'),(22,'gejala','You have updated gejala','App\\Models\\Gejala',7,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak abu-abu (kekuningan) pada tepi daun\"},\"old\":{\"nama\":\"Nyeri otot\"}}','2024-03-20 07:20:14','2024-03-20 07:20:14'),(23,'gejala','You have updated gejala','App\\Models\\Gejala',8,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak abu-abu (kekuningan) pada daun\"},\"old\":{\"nama\":\"Sakit perut\"}}','2024-03-20 07:20:31','2024-03-20 07:20:31'),(24,'gejala','You have updated gejala','App\\Models\\Gejala',9,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak sempit berwarna hijau gelap\"},\"old\":{\"nama\":\"Kram otot\"}}','2024-03-20 07:20:45','2024-03-20 07:20:45'),(25,'gejala','You have updated gejala','App\\Models\\Gejala',10,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak besar berwarna kuning dan tembus cahaya diantara pembuluh daun\"},\"old\":{\"nama\":\"Pilek\"}}','2024-03-20 07:20:58','2024-03-20 07:20:58'),(26,'gejala','You have updated gejala','App\\Models\\Gejala',11,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak besar berwarna coklat\"},\"old\":{\"nama\":\"Muntah\"}}','2024-03-20 07:21:17','2024-03-20 07:21:17'),(27,'gejala','You have updated gejala','App\\Models\\Gejala',12,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna orange kekuning-kuningan\"},\"old\":{\"nama\":\"Tubuh menggigil\"}}','2024-03-20 07:21:29','2024-03-20 07:21:29'),(28,'gejala','You have updated gejala','App\\Models\\Gejala',13,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat kehitaman, berbentuk belah ketupat, dengan pusat bercak berwarna putih pada daun\"},\"old\":{\"nama\":\"Tubuh nyeri\"}}','2024-03-20 07:21:42','2024-03-20 07:21:42'),(29,'gejala','You have updated gejala','App\\Models\\Gejala',14,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat kehitaman pada leher\"},\"old\":{\"nama\":\"Penyakit kuning\"}}','2024-03-20 07:21:53','2024-03-20 07:21:53'),(30,'gejala','You have updated gejala','App\\Models\\Gejala',15,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berwarna putih pucat pada pelepah\"},\"old\":{\"nama\":\"Nyeri sendi\"}}','2024-03-20 07:22:11','2024-03-20 07:22:11'),(31,'gejala','You have updated gejala','App\\Models\\Gejala',16,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berbentuk oval atau bulat pada pelepah\"},\"old\":{\"nama\":\"Nyeri perut\"}}','2024-03-20 07:22:29','2024-03-20 07:22:29'),(32,'gejala','You have updated gejala','App\\Models\\Gejala',17,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berwarna kehitam - hitaman\"},\"old\":{\"nama\":\"Trombosit turun\"}}','2024-03-20 07:22:48','2024-03-20 07:22:48'),(33,'gejala','You have updated gejala','App\\Models\\Gejala',18,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak  berbentuk tidak teratur pada sisi luar pelepah\"},\"old\":{\"nama\":\"Muncul bintik merah\"}}','2024-03-20 07:23:07','2024-03-20 07:23:07'),(34,'gejala','You have updated gejala','App\\Models\\Gejala',19,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berbentuk bulat memanjang hingga tidak teratur dengan Panjang 0,5 \\u2013 1,5 cm pada pelepah daun\"},\"old\":{\"nama\":\"Gatal\"}}','2024-03-20 07:23:20','2024-03-20 07:23:20'),(35,'gejala','You have updated gejala','App\\Models\\Gejala',20,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Warna abu-abu ditengah bercak\"},\"old\":{\"nama\":\"Sakit di persendian\"}}','2024-03-20 07:23:31','2024-03-20 07:23:31'),(36,'gejala','You have updated gejala','App\\Models\\Gejala',21,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Warna coklat dipinggir bercak\"},\"old\":{\"nama\":\"Sakit kepala\"}}','2024-03-20 07:24:53','2024-03-20 07:24:53'),(37,'gejala','You have created gejala','App\\Models\\Gejala',22,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak besar sering bersambung dan bisa menutupi  seluruh pelepah daun\",\"kode\":\"G022\"}}','2024-03-20 07:25:17','2024-03-20 07:25:17'),(38,'gejala','You have created gejala','App\\Models\\Gejala',23,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat pada permukaan daun\",\"kode\":\"G023\"}}','2024-03-20 07:25:33','2024-03-20 07:25:33'),(39,'gejala','You have created gejala','App\\Models\\Gejala',24,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berbentuk oval atau bulat daun\",\"kode\":\"G024\"}}','2024-03-20 07:25:48','2024-03-20 07:25:48'),(40,'gejala','You have created gejala','App\\Models\\Gejala',25,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat pada helaian daun bendera\",\"kode\":\"G025\"}}','2024-03-20 07:26:07','2024-03-20 07:26:07'),(41,'gejala','You have created gejala','App\\Models\\Gejala',26,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak lurus sempit pada daun bendera\",\"kode\":\"G026\"}}','2024-03-20 07:26:22','2024-03-20 07:26:22'),(42,'gejala','You have created gejala','App\\Models\\Gejala',27,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak kecil dihelaian daun\",\"kode\":\"G027\"}}','2024-03-20 07:26:37','2024-03-20 07:26:37'),(43,'gejala','You have created gejala','App\\Models\\Gejala',28,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak lurus ke arah ujung daun dihelaian daun\",\"kode\":\"G028\"}}','2024-03-20 07:26:55','2024-03-20 07:26:55'),(44,'gejala','You have created gejala','App\\Models\\Gejala',29,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berwarna jingga \\/ orange\",\"kode\":\"G029\"}}','2024-03-20 07:27:11','2024-03-20 07:27:11'),(45,'gejala','You have created gejala','App\\Models\\Gejala',30,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Warna daun sedikit menguning\",\"kode\":\"G030\"}}','2024-03-20 07:27:24','2024-03-20 07:27:24'),(46,'gejala','You have created gejala','App\\Models\\Gejala',31,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tanaman tumbuh sedikit kerdil\",\"kode\":\"G031\"}}','2024-03-20 07:27:41','2024-03-20 07:27:41'),(47,'gejala','You have created gejala','App\\Models\\Gejala',32,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna jingga\",\"kode\":\"G032\"}}','2024-03-20 07:28:17','2024-03-20 07:28:17'),(48,'gejala','You have created gejala','App\\Models\\Gejala',33,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tanaman tumbuh sangat kerdil\",\"kode\":\"G033\"}}','2024-03-20 07:28:30','2024-03-20 07:28:30'),(49,'gejala','You have created gejala','App\\Models\\Gejala',34,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Penghambatan pertumbuhan\",\"kode\":\"G034\"}}','2024-03-20 07:28:43','2024-03-20 07:28:43'),(50,'gejala','You have created gejala','App\\Models\\Gejala',35,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Anakannya banyak\",\"kode\":\"G035\"}}','2024-03-20 07:29:04','2024-03-20 07:29:04'),(51,'gejala','You have created gejala','App\\Models\\Gejala',36,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Pendek\",\"kode\":\"G036\"}}','2024-03-20 07:29:17','2024-03-20 07:29:17'),(52,'gejala','You have created gejala','App\\Models\\Gejala',37,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tumbuh daun tegak\",\"kode\":\"G037\"}}','2024-03-20 07:29:33','2024-03-20 07:29:33'),(53,'gejala','You have created gejala','App\\Models\\Gejala',38,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna hijau pucat\",\"kode\":\"G038\"}}','2024-03-20 07:29:51','2024-03-20 07:29:51'),(54,'gejala','You have created gejala','App\\Models\\Gejala',39,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna kuning pucat\",\"kode\":\"G039\"}}','2024-03-20 07:30:16','2024-03-20 07:30:16'),(55,'gejala','You have created gejala','App\\Models\\Gejala',40,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun berwarna hijau gelap\",\"kode\":\"G040\"}}','2024-03-20 07:30:37','2024-03-20 07:30:37'),(56,'gejala','You have created gejala','App\\Models\\Gejala',41,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tepi daun tidak rata\",\"kode\":\"G041\"}}','2024-03-20 07:31:05','2024-03-20 07:31:05'),(57,'gejala','You have created gejala','App\\Models\\Gejala',42,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Melintir\",\"kode\":\"G042\"}}','2024-03-20 07:31:28','2024-03-20 07:31:28'),(58,'gejala','You have created gejala','App\\Models\\Gejala',43,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat pada pelepah\",\"kode\":\"G043\"}}','2024-03-20 07:31:50','2024-03-20 07:31:50'),(59,'gejala','You have created gejala','App\\Models\\Gejala',44,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat pada gabah\",\"kode\":\"G044\"}}','2024-03-20 07:32:07','2024-03-20 07:32:07'),(60,'gejala','You have created gejala','App\\Models\\Gejala',45,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak berbentuk oval atau bulat pada gabah\",\"kode\":\"G045\"}}','2024-03-20 07:32:32','2024-03-20 07:32:32'),(61,'gejala','You have created gejala','App\\Models\\Gejala',46,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak lurus sempit pada pelepah\",\"kode\":\"G046\"}}','2024-03-20 07:33:03','2024-03-20 07:33:03'),(62,'gejala','You have created gejala','App\\Models\\Gejala',47,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak coklat pada kulit gabah\",\"kode\":\"G047\"}}','2024-03-20 07:33:21','2024-03-20 07:33:21'),(63,'gejala','You have created gejala','App\\Models\\Gejala',48,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bercak lurus sempit pada kulit gabah\",\"kode\":\"G048\"}}','2024-03-20 07:33:48','2024-03-20 07:33:48'),(64,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Bakteri Daun Bergaris\",\"enabled\":4,\"disabled\":4,\"changed\":0}','2024-03-20 07:36:26','2024-03-20 07:36:26'),(65,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Hawar Daun Bakteri\",\"enabled\":8,\"disabled\":1,\"changed\":3}','2024-03-20 07:43:08','2024-03-20 07:43:08'),(66,'user','You have created user','App\\Models\\User',4,NULL,NULL,'{\"attributes\":{\"name\":\"Rahadyan\",\"username\":\"rahadyan\"}}','2024-03-20 14:39:58','2024-03-20 14:39:58'),(67,'user','You have created user','App\\Models\\User',5,NULL,NULL,'{\"attributes\":{\"name\":\"user2\",\"username\":\"user2\"}}','2024-03-21 08:04:08','2024-03-21 08:04:08'),(68,'penyakit','You have created penyakit','App\\Models\\Penyakit',13,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-21 08:08:42','2024-03-21 08:08:42'),(69,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"demam\",\"enabled\":3,\"disabled\":0,\"changed\":0}','2024-03-21 08:10:43','2024-03-21 08:10:43'),(70,'penyakit','You have created penyakit','App\\Models\\Penyakit',14,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-26 06:35:14','2024-03-26 06:35:14'),(71,'penyakit','You have created penyakit','App\\Models\\Penyakit',15,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-26 06:35:34','2024-03-26 06:35:34'),(72,'gejala','You have created gejala','App\\Models\\Gejala',49,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Daun Melintir\",\"kode\":\"G042\"}}','2024-03-26 06:37:21','2024-03-26 06:37:21'),(73,'gejala','You have created gejala','App\\Models\\Gejala',50,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Contoh gejala baru\",\"kode\":\"G049\"}}','2024-03-29 15:35:48','2024-03-29 15:35:48'),(74,'gejala','You have deleted gejala','App\\Models\\Gejala',50,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Contoh gejala baru\",\"kode\":\"G049\"}}','2024-03-29 15:36:00','2024-03-29 15:36:00'),(75,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',13,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-29 15:43:39','2024-03-29 15:43:39'),(76,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',14,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-29 15:43:43','2024-03-29 15:43:43'),(77,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',15,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"demam\",\"kode\":\"P001\"}}','2024-03-29 15:43:46','2024-03-29 15:43:46'),(78,'penyakit','You have created penyakit','App\\Models\\Penyakit',16,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"ciba\",\"kode\":\"P013\"}}','2024-03-29 15:43:52','2024-03-29 15:43:52'),(79,'penyakit','You have updated penyakit','App\\Models\\Penyakit',16,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 15:45:52','2024-03-29 15:45:52'),(80,'gejala','You have updated gejala','App\\Models\\Gejala',41,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tepi daun tidak rataaa\"},\"old\":{\"nama\":\"Tepi daun tidak rata\"}}','2024-03-29 15:47:36','2024-03-29 15:47:36'),(81,'gejala','You have updated gejala','App\\Models\\Gejala',41,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Tepi daun tidak rata\"},\"old\":{\"nama\":\"Tepi daun tidak rataaa\"}}','2024-03-29 15:47:42','2024-03-29 15:47:42'),(82,'penyakit','You have created penyakit','App\\Models\\Penyakit',17,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\",\"kode\":\"P014\"}}','2024-03-29 15:48:44','2024-03-29 15:48:44'),(83,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',17,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\",\"kode\":\"P014\"}}','2024-03-29 15:48:55','2024-03-29 15:48:55'),(84,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',16,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"ciba\",\"kode\":\"P013\"}}','2024-03-29 15:50:17','2024-03-29 15:50:17'),(85,'penyakit','You have updated penyakit','App\\Models\\Penyakit',1,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Bakteri Daun Bergaris\"},\"old\":{\"nama\":\"Hawar Daun Bakteri\"}}','2024-03-29 15:50:54','2024-03-29 15:50:54'),(86,'penyakit','You have updated penyakit','App\\Models\\Penyakit',1,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\"},\"old\":{\"nama\":\"Bakteri Daun Bergaris\"}}','2024-03-29 15:51:13','2024-03-29 15:51:13'),(87,'penyakit','You have created penyakit','App\\Models\\Penyakit',18,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"conoth\",\"kode\":\"P013\"}}','2024-03-29 16:01:08','2024-03-29 16:01:08'),(88,'penyakit','You have updated penyakit','App\\Models\\Penyakit',18,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"contoh update\"},\"old\":{\"nama\":\"conoth\"}}','2024-03-29 16:03:00','2024-03-29 16:03:00'),(89,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',18,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"contoh update\",\"kode\":\"P013\"}}','2024-03-29 16:03:07','2024-03-29 16:03:07'),(90,'penyakit','You have updated penyakit','App\\Models\\Penyakit',2,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 16:03:17','2024-03-29 16:03:17'),(91,'penyakit','You have updated penyakit','App\\Models\\Penyakit',3,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 16:03:26','2024-03-29 16:03:26'),(92,'penyakit','You have updated penyakit','App\\Models\\Penyakit',4,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 16:03:33','2024-03-29 16:03:33'),(93,'penyakit','You have created penyakit','App\\Models\\Penyakit',19,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"dfgdf\",\"kode\":\"P013\"}}','2024-03-29 16:12:42','2024-03-29 16:12:42'),(94,'penyakit','You have deleted penyakit','App\\Models\\Penyakit',19,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"dfgdf\",\"kode\":\"P013\"}}','2024-03-29 16:12:46','2024-03-29 16:12:46'),(95,'gejala','You have updated gejala','App\\Models\\Gejala',1,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 16:27:16','2024-03-29 16:27:16'),(96,'gejala','You have updated gejala','App\\Models\\Gejala',1,'App\\Models\\User',1,'{\"attributes\":[],\"old\":[]}','2024-03-29 16:27:23','2024-03-29 16:27:23'),(97,'gejala','You have created gejala','App\\Models\\Gejala',51,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\",\"kode\":\"G049\"}}','2024-03-29 16:52:55','2024-03-29 16:52:55'),(98,'gejala','You have deleted gejala','App\\Models\\Gejala',51,'App\\Models\\User',1,'{\"attributes\":{\"nama\":\"Hawar Daun Bakteri\",\"kode\":\"G049\"}}','2024-03-29 16:53:09','2024-03-29 16:53:09'),(99,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Blast\",\"enabled\":4,\"disabled\":0,\"changed\":0}','2024-03-30 14:55:21','2024-03-30 14:55:21'),(100,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Hawar Daun Bakteri\",\"enabled\":2,\"disabled\":0,\"changed\":0}','2024-03-30 14:58:45','2024-03-30 14:58:45'),(101,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Busuk Pelepah\",\"enabled\":0,\"disabled\":0,\"changed\":0}','2024-03-30 14:59:10','2024-03-30 14:59:10'),(102,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Blast\",\"enabled\":0,\"disabled\":0,\"changed\":0}','2024-03-30 15:18:05','2024-03-30 15:18:05'),(103,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Blast\",\"enabled\":0,\"disabled\":0,\"changed\":0}','2024-03-30 15:20:49','2024-03-30 15:20:49'),(104,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Blast\",\"enabled\":2,\"disabled\":0,\"changed\":0}','2024-03-30 15:23:58','2024-03-30 15:23:58'),(105,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Busuk Pelepah\",\"enabled\":2,\"disabled\":0,\"changed\":0}','2024-03-30 15:38:15','2024-03-30 15:38:15'),(106,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Bercak Cercospora\",\"enabled\":2,\"disabled\":0,\"changed\":0}','2024-03-30 15:38:41','2024-03-30 15:38:41'),(107,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Bercak Cercospora\",\"enabled\":3,\"disabled\":0,\"changed\":0}','2024-03-30 15:39:33','2024-03-30 15:39:33'),(108,'default','Updated basis rules',NULL,NULL,'App\\Models\\User',1,'{\"penyakit\":\"Hawar Daun Jingga\",\"enabled\":2,\"disabled\":0,\"changed\":0}','2024-03-30 15:40:41','2024-03-30 15:40:41');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gejala_penyakit`
--

DROP TABLE IF EXISTS `gejala_penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gejala_penyakit` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gejala_id` int unsigned NOT NULL,
  `penyakit_id` int unsigned NOT NULL,
  `value_cf` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gejala_penyakit`
--

LOCK TABLES `gejala_penyakit` WRITE;
/*!40000 ALTER TABLE `gejala_penyakit` DISABLE KEYS */;
INSERT INTO `gejala_penyakit` VALUES (44,1,1,1.00),(45,2,1,0.80),(46,33,3,1.00),(47,34,3,0.60),(48,33,6,0.80),(49,34,6,0.60),(50,35,8,1.00),(51,36,8,1.00),(52,33,8,0.80),(53,34,9,1.00),(54,36,9,1.00);
/*!40000 ALTER TABLE `gejala_penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gejalas`
--

DROP TABLE IF EXISTS `gejalas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gejalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gejalas`
--

LOCK TABLES `gejalas` WRITE;
/*!40000 ALTER TABLE `gejalas` DISABLE KEYS */;
INSERT INTO `gejalas` VALUES (1,'Daun berwarna hijau kelabu','daun','G001'),(2,'Daun melipat','daun','G002'),(3,'Daun Menggulung','daun','G003'),(4,'Daun layu','daun','G004'),(5,'Daun Mati','daun','G005'),(6,'Daun Kering','daun','G006'),(7,'Bercak abu-abu (kekuningan) pada tepi daun','daun','G007'),(8,'Bercak abu-abu (kekuningan) pada daun','daun','G008'),(9,'Bercak sempit berwarna hijau gelap','daun','G009'),(10,'Bercak besar berwarna kuning dan tembus cahaya diantara pembuluh daun','daun','G010'),(11,'Bercak besar berwarna coklat','daun','G011'),(12,'Daun berwarna orange kekuning-kuningan','daun','G012'),(13,'Bercak coklat kehitaman, berbentuk belah ketupat, dengan pusat bercak berwarna putih pada daun','daun','G013'),(14,'Bercak coklat kehitaman pada leher','daun','G014'),(15,'Bercak berwarna putih pucat pada pelepah','daun','G015'),(16,'Bercak berbentuk oval atau bulat pada pelepah','daun','G016'),(17,'Bercak berwarna kehitam - hitaman','daun','G017'),(18,'Bercak  berbentuk tidak teratur pada sisi luar pelepah','daun','G018'),(19,'Bercak berbentuk bulat memanjang hingga tidak teratur dengan Panjang 0,5 â€“ 1,5 cm pada pelepah daun','daun','G019'),(20,'Warna abu-abu ditengah bercak','daun','G020'),(21,'Warna coklat dipinggir bercak','daun','G021'),(22,'Bercak besar sering bersambung dan bisa menutupi  seluruh pelepah daun','daun','G022'),(23,'Bercak coklat pada permukaan daun','daun','G023'),(24,'Bercak berbentuk oval atau bulat daun','daun','G024'),(25,'Bercak coklat pada helaian daun bendera','daun','G025'),(26,'Bercak lurus sempit pada daun bendera','daun','G026'),(27,'Bercak kecil dihelaian daun','daun','G027'),(28,'Bercak lurus ke arah ujung daun dihelaian daun','daun','G028'),(29,'Bercak berwarna jingga / orange','daun','G029'),(30,'Warna daun sedikit menguning','daun','G030'),(31,'Tanaman tumbuh sedikit kerdil','daun','G031'),(32,'Daun berwarna jingga','daun','G032'),(33,'Tanaman tumbuh sangat kerdil','batang','G033'),(34,'Penghambatan pertumbuhan','batang','G034'),(35,'Anakannya banyak','batang','G035'),(36,'Daun Pendek','batang','G036'),(37,'Tumbuh daun tegak','batang','G037'),(38,'Daun berwarna hijau pucat','daun','G038'),(39,'Daun berwarna kuning pucat','daun','G039'),(40,'Daun berwarna hijau gelap','daun','G040'),(41,'Tepi daun tidak rata','batang','G041'),(42,'Daun Melintir','daun','G042'),(43,'Bercak coklat pada pelepah','batang','G043'),(44,'Bercak coklat pada gabah','batang','G044'),(45,'Bercak berbentuk oval atau bulat pada gabah','batang','G045'),(46,'Bercak lurus sempit pada pelepah','batang','G046'),(47,'Bercak coklat pada kulit gabah','batang','G047'),(48,'Bercak lurus sempit pada kulit gabah','batang','G048'),(49,'Daun Melintir','daun','G042');
/*!40000 ALTER TABLE `gejalas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_08_24_000000_create_settings_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2021_04_23_030446_create_permission_tables',1),(6,'2021_04_28_072156_create_activity_log_table',1),(7,'2022_05_25_045640_create_penyakits_table',1),(8,'2022_05_25_045757_create_gejalas_table',1),(9,'2022_05_28_075608_create_riwayats_table',1),(10,'2022_06_27_191302_create_gejala_penyakit_table',1),(11,'2024_03_29_225602_add_kategori_penyakits',2),(12,'2024_03_29_231903_add_kategori_column_gejalas',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyakits`
--

DROP TABLE IF EXISTS `penyakits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penyakits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyebab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakits`
--

LOCK TABLES `penyakits` WRITE;
/*!40000 ALTER TABLE `penyakits` DISABLE KEYS */;
INSERT INTO `penyakits` VALUES (1,'P001','Hawar Daun Bakteri','daun','Penyakit Kresek/Hawar daun (Indonesia) / Lodoh (Jawa) atau BLB (Bacterial Leaf Blight) atau HDB disebabkan oleh Bakteri Xanthomonas campestris pv. Oryzae. Kehilangan hasil mencapai 20.6 - 35.8 % pada musim hujan, sedangkan pada musim kemarau mencapai 17.5 - 28 % (Suparyono dan Sudir, 1992).'),(2,'P002','Bakteri Daun Bergaris','daun','Penyakit ini biasarya terjadi hanya pada helaian daun saja. Gejala yang timbul berupa bercak sempt berwarna hijau, gelap yang lama-kelamean mem-besar berwara kuning dan tembus cahaya di antara pembuluhÂ daun.'),(3,'P003','Blast','batang','Penyakit disebabkan cendawan Pyricularia oryzae. Patogen bisa berasal dari benih, sisa tanaman sakit maupun rumput rumputan di sekitar tanaman. Secara umum cendawan patogennya tidak bisa bertahan lama dalam tanah, dan tidak bisa bersaing secara saprofitik dengan mikrob lain. Penularan oleh angin.'),(4,'P004','Hawar Pelepah','daun','Penyakit hawar pelepah, merupakan penyakit yang sangat merusak pada tanaman padi, disebabkan oleh cendawan Rhizoctonia solani Kuhn AG1- 1A yang dapat berkembang pada daerah subtropis dan tropis.'),(5,'P005','Busuk Batang','daun','Penyakit busuk batang padi yang disebabkan oleh cendawan Pyricularia grisea merupakan salah satu masalah dalam produksi padi diseluruh dunia dengan kehilangan hasil berkisar 50%'),(6,'P006','Busuk Pelepah','batang','Penyakit busuk pelepah terjadi pada pelepah daun paling atas yang menutupi malai muda pada akhir fase bunting. Penyakit busuk pelepah disebabkan oleh patogen Rhizoctonia solani.'),(7,'P007','Bercak Coklat','batang','Helminthosporium sp. ialah pemicu penyakit bercak coklat pada padi. Cendawan ini memiliki inang yang luas serta gampang tersebar. Penyakit ini menyebabkan mengakibatkan kehilangan produksi mencapai 50- 91%. Pemakaian varietas tahan ialah pemecahan yang sesuai buat pengendalian penyakit ini.'),(8,'P008','Bercak Cercospora','batang','Penyakit Bercak coklat sempit yang disebabkan oleh jamur C. oryzae merupakan penyakit penting pada tanaman padi di Indonesia dan negara penghasil padi lainnya di Asia. Jamur C. oryzae merupakan penyebab penyakit Bercak coklat sempit yang mempunyai sebaran yang luas di daerah tropis dan sub-tropis.'),(9,'P009','Hawar Daun Jingga','batang','Hawar Daun Bakteri penyakit ini disebabkan oleh bakteri Xanthomonas campestris pv. Oryzae dan dapat menurunkan hasil sampai 30%. Penyakit ini banyak terjadi pada musim hujan atau kemarau yang basah terutama pada lahan sawah yang selalu tergenang, dan dipupuk N tinggi (â‰¥ 250 kg Urea / ha).'),(10,'P010','Tungro','daun','Tungro merupakan penyakit yang disebabkan oleh infeksi ganda dari 2 jenis virus yang berlainan. Kedua virus yang dimaksud adalah Rice Tungro Spherical Virus (RTSV) dan Rice Tungro Bacilliform Virus (RTBV).'),(11,'P011','Kerdil Rumput','daun','Penyakit kerdil rumput yang disebabkan oleh Rice grassy stunt virus (RGSV) dilaporkan pertama kali di Indonesia tahun 1971 dan disebut sebagai kerdil rumput tipe I, kemudian pada tahun 2006 ditemukan penyakit kerdil rumput tipe II.'),(12,'P012','Kerdil Hampa','daun','Kerdil hampa merupakan salah satu penyakit penting pada tanaman padi yang disebabkan oleh Rice ragged stunt virus (RRSV), dan ditularkan secara persisten oleh wereng batang cokelat (WBC).');
/*!40000 ALTER TABLE `penyakits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'dashboard','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(2,'logs-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(3,'logs-delete','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(4,'role-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(5,'role-create','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(6,'role-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(7,'role-delete','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(8,'member-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(9,'member-create','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(10,'member-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(11,'member-delete','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(12,'setting-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(13,'setting-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(14,'penyakit-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(15,'penyakit-create','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(16,'penyakit-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(17,'penyakit-delete','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(18,'gejala-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(19,'gejala-create','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(20,'gejala-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(21,'gejala-delete','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(22,'rules-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(23,'rules-edit','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(24,'diagnosa','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(25,'diagnosa-create','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(26,'riwayat-list','web','2024-03-20 06:42:42','2024-03-20 06:42:42'),(27,'riwayat-show','web','2024-03-20 06:42:42','2024-03-20 06:42:42');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayats`
--

DROP TABLE IF EXISTS `riwayats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `riwayats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_diagnosa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cf_max` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala_terpilih` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayats`
--

LOCK TABLES `riwayats` WRITE;
/*!40000 ALTER TABLE `riwayats` DISABLE KEYS */;
INSERT INTO `riwayats` VALUES (1,'Azizah','a:2:{i:1;a:4:{s:13:\"nama_penyakit\";s:9:\"Influenza\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.8\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.16000000000000003;}i:1;a:5:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.4\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:-0.08000000000000002;}}s:8:\"hasil_cf\";d:0.07407407407407408;}i:5;a:4:{s:13:\"nama_penyakit\";s:6:\"Campak\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.8\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.6400000000000001;}i:1;a:5:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.4\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.32000000000000006;}}s:8:\"hasil_cf\";d:0.24242424242424246;}}','a:2:{i:0;d:0.24242424242424246;i:1;s:13:\"Campak (P005)\";}','a:2:{i:1;a:4:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.8\";s:9:\"keyakinan\";s:12:\"Hampir pasti\";}i:3;a:4:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.4\";s:9:\"keyakinan\";s:13:\"Mungkin tidak\";}}','Diagnosa-Azizah-1710917175.pdf',1,'2024-03-20 06:46:15','2024-03-20 06:46:17'),(2,'user','a:3:{i:1;a:4:{s:13:\"nama_penyakit\";s:9:\"Influenza\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:3:{i:0;a:5:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.2;}i:1;a:5:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.2;}i:2;a:5:{s:4:\"nama\";s:10:\"Nyeri otot\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.2;}}s:8:\"hasil_cf\";d:0.488;}i:5;a:4:{s:13:\"nama_penyakit\";s:6:\"Campak\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}i:1;a:5:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}}s:8:\"hasil_cf\";d:0.96;}i:6;a:4:{s:13:\"nama_penyakit\";s:5:\"Tifus\";s:13:\"kode_penyakit\";s:4:\"P006\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.4;}i:1;a:5:{s:4:\"nama\";s:4:\"Mual\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.4;}}s:8:\"hasil_cf\";d:0.64;}}','a:2:{i:0;d:0.96;i:1;s:13:\"Campak (P005)\";}','a:4:{i:1;a:4:{s:4:\"nama\";s:5:\"Demam\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}i:3;a:4:{s:4:\"nama\";s:5:\"Batuk\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}i:5;a:4:{s:4:\"nama\";s:4:\"Mual\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}i:7;a:4:{s:4:\"nama\";s:10:\"Nyeri otot\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}}','Diagnosa-user-1710917499.pdf',3,'2024-03-20 06:51:39','2024-03-20 06:51:41'),(3,'user','a:2:{i:1;a:4:{s:13:\"nama_penyakit\";s:18:\"Hawar Daun Bakteri\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:3:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.32000000000000006;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:-0.48;}i:2;a:5:{s:4:\"nama\";s:42:\"Bercak abu-abu (kekuningan) pada tepi daun\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:3:\"0.8\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.32000000000000006;}}s:8:\"hasil_cf\";d:0.19121951219512204;}i:5;a:4:{s:13:\"nama_penyakit\";s:12:\"Busuk Batang\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.32000000000000006;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.6400000000000001;}}s:8:\"hasil_cf\";d:-0.19512195121951223;}}','a:2:{i:0;d:0.19121951219512204;i:1;s:25:\"Hawar Daun Bakteri (P001)\";}','a:4:{i:1;a:4:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:9:\"keyakinan\";s:7:\"Mungkin\";}i:3;a:4:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:9:\"keyakinan\";s:18:\"Hampir pasti tidak\";}i:7;a:4:{s:4:\"nama\";s:42:\"Bercak abu-abu (kekuningan) pada tepi daun\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:3:\"0.8\";s:9:\"keyakinan\";s:12:\"Hampir pasti\";}i:11;a:4:{s:4:\"nama\";s:28:\"Bercak besar berwarna coklat\";s:4:\"kode\";s:4:\"G011\";s:7:\"cf_user\";s:4:\"-0.8\";s:9:\"keyakinan\";s:18:\"Hampir pasti tidak\";}}','Diagnosa-user-1710926208.pdf',3,'2024-03-20 09:16:48','2024-03-20 09:16:49'),(4,'user2','a:3:{i:1;a:4:{s:13:\"nama_penyakit\";s:18:\"Hawar Daun Bakteri\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:4:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:4:\"-0.6\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.48;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:-0.48;}i:2;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:2:\"-1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.8;}i:3;a:5:{s:4:\"nama\";s:42:\"Bercak abu-abu (kekuningan) pada tepi daun\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:4:\"-0.8\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:-0.32000000000000006;}}s:8:\"hasil_cf\";d:-0.6232279534109817;}i:5;a:4:{s:13:\"nama_penyakit\";s:12:\"Busuk Batang\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:4:\"-0.6\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.48;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:-0.6400000000000001;}}s:8:\"hasil_cf\";d:-0.6829268292682927;}i:6;a:4:{s:13:\"nama_penyakit\";s:13:\"Busuk Pelepah\";s:13:\"kode_penyakit\";s:4:\"P006\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:4:\"-0.6\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:-0.24;}i:1;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:2:\"-1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:-0.4;}}s:8:\"hasil_cf\";d:-0.4571428571428572;}}','a:2:{i:0;d:-0.4571428571428572;i:1;s:20:\"Busuk Pelepah (P006)\";}','a:4:{i:1;a:4:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:4:\"-0.6\";s:9:\"keyakinan\";s:23:\"Kemungkinan besar tidak\";}i:3;a:4:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:4:\"-0.8\";s:9:\"keyakinan\";s:18:\"Hampir pasti tidak\";}i:5;a:4:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:2:\"-1\";s:9:\"keyakinan\";s:11:\"Pasti tidak\";}i:7;a:4:{s:4:\"nama\";s:42:\"Bercak abu-abu (kekuningan) pada tepi daun\";s:4:\"kode\";s:4:\"G007\";s:7:\"cf_user\";s:4:\"-0.8\";s:9:\"keyakinan\";s:18:\"Hampir pasti tidak\";}}','Diagnosa-user2-1711008366.pdf',5,'2024-03-21 08:06:06','2024-03-21 08:06:09'),(5,'user3','a:4:{i:1;a:4:{s:13:\"nama_penyakit\";s:18:\"Hawar Daun Bakteri\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:3:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.32000000000000006;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:3:\"0.6\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:0.36;}i:2;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}}s:8:\"hasil_cf\";d:0.91296;}i:5;a:4:{s:13:\"nama_penyakit\";s:12:\"Busuk Batang\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.32000000000000006;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:3:\"0.6\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.48;}}s:8:\"hasil_cf\";d:0.6464000000000001;}i:6;a:4:{s:13:\"nama_penyakit\";s:13:\"Busuk Pelepah\";s:13:\"kode_penyakit\";s:4:\"P006\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.16000000000000003;}i:1;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.4;}}s:8:\"hasil_cf\";d:0.49600000000000005;}i:13;a:4:{s:13:\"nama_penyakit\";s:5:\"demam\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:7:\"cf_role\";d:1.6;s:15:\"hasil_perkalian\";d:0.6400000000000001;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:3:\"0.6\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.12;}}s:8:\"hasil_cf\";d:0.6832000000000001;}}','a:2:{i:0;d:0.91296;i:1;s:25:\"Hawar Daun Bakteri (P001)\";}','a:3:{i:1;a:4:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:3:\"0.4\";s:9:\"keyakinan\";s:7:\"Mungkin\";}i:3;a:4:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:3:\"0.6\";s:9:\"keyakinan\";s:14:\"Sangat Mungkin\";}i:5;a:4:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}}','Diagnosa-user3-1711008697.pdf',1,'2024-03-21 08:11:37','2024-03-21 08:11:39'),(6,'uswer3','a:4:{i:1;a:4:{s:13:\"nama_penyakit\";s:18:\"Hawar Daun Bakteri\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:3:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:0.6;}i:2;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}}s:8:\"hasil_cf\";d:0.984;}i:5;a:4:{s:13:\"nama_penyakit\";s:12:\"Busuk Batang\";s:13:\"kode_penyakit\";s:4:\"P005\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}}s:8:\"hasil_cf\";d:0.96;}i:6;a:4:{s:13:\"nama_penyakit\";s:13:\"Busuk Pelepah\";s:13:\"kode_penyakit\";s:4:\"P006\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.4;}i:1;a:5:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.4;s:15:\"hasil_perkalian\";d:0.4;}}s:8:\"hasil_cf\";d:0.64;}i:13;a:4:{s:13:\"nama_penyakit\";s:5:\"demam\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1.6;s:15:\"hasil_perkalian\";d:1.6;}i:1;a:5:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.2;s:15:\"hasil_perkalian\";d:0.2;}}s:8:\"hasil_cf\";d:1.48;}}','a:2:{i:0;d:1.48;i:1;s:12:\"demam (P001)\";}','a:3:{i:1;a:4:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}i:3;a:4:{s:4:\"nama\";s:15:\"Daun Menggulung\";s:4:\"kode\";s:4:\"G003\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}i:5;a:4:{s:4:\"nama\";s:9:\"Daun Mati\";s:4:\"kode\";s:4:\"G005\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:5:\"Pasti\";}}','Diagnosa-uswer3-1711008808.pdf',1,'2024-03-21 08:13:28','2024-03-21 08:13:30'),(7,'ubnu','a:5:{i:1;a:4:{s:13:\"nama_penyakit\";s:18:\"Hawar Daun Bakteri\";s:13:\"kode_penyakit\";s:4:\"P001\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}i:1;a:5:{s:4:\"nama\";s:12:\"Daun melipat\";s:4:\"kode\";s:4:\"G002\";s:7:\"cf_user\";s:3:\"0.8\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.6400000000000001;}}s:8:\"hasil_cf\";d:1;}i:3;a:4:{s:13:\"nama_penyakit\";s:5:\"Blast\";s:13:\"kode_penyakit\";s:4:\"P003\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:28:\"Tanaman tumbuh sangat kerdil\";s:4:\"kode\";s:4:\"G033\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}i:1;a:5:{s:4:\"nama\";s:24:\"Penghambatan pertumbuhan\";s:4:\"kode\";s:4:\"G034\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:0.6;}}s:8:\"hasil_cf\";d:1;}i:6;a:4:{s:13:\"nama_penyakit\";s:13:\"Busuk Pelepah\";s:13:\"kode_penyakit\";s:4:\"P006\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:28:\"Tanaman tumbuh sangat kerdil\";s:4:\"kode\";s:4:\"G033\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}i:1;a:5:{s:4:\"nama\";s:24:\"Penghambatan pertumbuhan\";s:4:\"kode\";s:4:\"G034\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.6;s:15:\"hasil_perkalian\";d:0.6;}}s:8:\"hasil_cf\";d:0.92;}i:8;a:4:{s:13:\"nama_penyakit\";s:17:\"Bercak Cercospora\";s:13:\"kode_penyakit\";s:4:\"P008\";s:6:\"gejala\";a:3:{i:0;a:5:{s:4:\"nama\";s:28:\"Tanaman tumbuh sangat kerdil\";s:4:\"kode\";s:4:\"G033\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:0.8;s:15:\"hasil_perkalian\";d:0.8;}i:1;a:5:{s:4:\"nama\";s:16:\"Anakannya banyak\";s:4:\"kode\";s:4:\"G035\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}i:2;a:5:{s:4:\"nama\";s:11:\"Daun Pendek\";s:4:\"kode\";s:4:\"G036\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}}s:8:\"hasil_cf\";d:1;}i:9;a:4:{s:13:\"nama_penyakit\";s:17:\"Hawar Daun Jingga\";s:13:\"kode_penyakit\";s:4:\"P009\";s:6:\"gejala\";a:2:{i:0;a:5:{s:4:\"nama\";s:24:\"Penghambatan pertumbuhan\";s:4:\"kode\";s:4:\"G034\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}i:1;a:5:{s:4:\"nama\";s:11:\"Daun Pendek\";s:4:\"kode\";s:4:\"G036\";s:7:\"cf_user\";s:1:\"1\";s:7:\"cf_role\";d:1;s:15:\"hasil_perkalian\";d:1;}}s:8:\"hasil_cf\";d:1;}}','a:2:{i:0;d:1;i:1;s:25:\"Hawar Daun Bakteri (P001)\";}','a:6:{i:1;a:4:{s:4:\"nama\";s:26:\"Daun berwarna hijau kelabu\";s:4:\"kode\";s:4:\"G001\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:12:\"Sangat Yakin\";}i:2;a:4:{s:4:\"nama\";s:12:\"Daun melipat\";s:4:\"kode\";s:4:\"G002\";s:7:\"cf_user\";s:3:\"0.8\";s:9:\"keyakinan\";s:5:\"Yakin\";}i:33;a:4:{s:4:\"nama\";s:28:\"Tanaman tumbuh sangat kerdil\";s:4:\"kode\";s:4:\"G033\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:12:\"Sangat Yakin\";}i:34;a:4:{s:4:\"nama\";s:24:\"Penghambatan pertumbuhan\";s:4:\"kode\";s:4:\"G034\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:12:\"Sangat Yakin\";}i:35;a:4:{s:4:\"nama\";s:16:\"Anakannya banyak\";s:4:\"kode\";s:4:\"G035\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:12:\"Sangat Yakin\";}i:36;a:4:{s:4:\"nama\";s:11:\"Daun Pendek\";s:4:\"kode\";s:4:\"G036\";s:7:\"cf_user\";s:1:\"1\";s:9:\"keyakinan\";s:12:\"Sangat Yakin\";}}','Diagnosa-ubnu-1711814308.pdf',1,'2024-03-30 15:58:28','2024-03-30 15:58:30');
/*!40000 ALTER TABLE `riwayats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(24,2),(25,2),(26,2),(27,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2024-03-20 06:42:43','2024-03-20 06:42:43'),(2,'Pengguna','web','2024-03-20 06:42:43','2024-03-20 06:42:43');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `settings_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'FikriDev','admin','$2y$10$zHHPVRPI8lyebnrfiGketetXkjeiO3LhaKs4rUEpYTPr2.9JypXOW',NULL,NULL,'2024-03-20 06:42:43','2024-03-20 06:42:43'),(2,'Johni','johni','$2y$10$A41qcstNM/W8Opbf0.ln7eNjHnXqdTuYVzsscOkhW/j4XHmJPhmZS',NULL,NULL,'2024-03-20 06:42:43','2024-03-20 06:42:43'),(3,'user','user','$2y$10$RNaMc7J5Ojl2GT8J8fxYnORnFOhl1ItKJwsak6bE4D12BjtMao6fO',NULL,NULL,'2024-03-20 06:50:34','2024-03-20 06:50:34'),(4,'Rahadyan','rahadyan','$2y$10$TR0IZF76DHV3uW0NuhmU4uwNTzPRBVFTrxBtpyDHMQZiE2Uq0aNRK',NULL,NULL,'2024-03-20 14:39:57','2024-03-20 14:39:57'),(5,'user2','user2','$2y$10$Jm8GXWFfUcjCOiexweEequTOnWZvxNUtLuLceqY6b.EdlEf.MoAcK',NULL,NULL,'2024-03-21 08:04:08','2024-03-21 08:04:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_sdp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-31 19:53:03
