-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mcc_acquisition
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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
-- Table structure for table `ajax_respondents`
--

DROP TABLE IF EXISTS `ajax_respondents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ajax_respondents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sessionkey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placetogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thingtodo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '000000000',
  `complete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ajax_respondents`
--

LOCK TABLES `ajax_respondents` WRITE;
/*!40000 ALTER TABLE `ajax_respondents` DISABLE KEYS */;
INSERT INTO `ajax_respondents` VALUES (1,'5ab1e3291ad81','Ms.','test','tea','japan','rjklwarj@jwalr.com','beach','September 17, 1934','travel','123123','111111111',1),(2,'5ab1e33e2e077',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(3,'5ab1e58025a02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(4,'5ab1e5a6ebb78',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(5,'5ab30fa0cd430',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(6,'5ab310a17f508',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(7,'5ab310a8dc9ea','Ms.','victor','Taguines','korea','vdtaguines11@gmail.com','spa','November 1, 1995','watch','09104597768','111111111',1),(8,'5ab326c29f6cf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(9,'5ab326c2e76b9','Mr.','TEWsate','testsa','china','arth@kestrelddm.com','eat','November 17, 1935','date','21312321','111111111',1),(10,'5ab3373145adb','Ms.','victor','Taguines','china','vdtaguines11@gmail.com','spa','November 6, 1987','travel','102121544','111111111',1),(11,'5ab338fbbabd8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(12,'5ab35354395b9','Ms.','victor','Taguines','japan','asdfsfsdfs@gfdg.vom','gym','November 17, 1972','date','23443432','111111111',1),(13,'5ab3544d140db','Ms.','victor','Taguines','japan','asfsf@sdgdg.ghj','gym','December 19, 1951','date','345345','111111111',1),(14,'5ab354ca3b9b0','Ms.','victor','Taguines','korea',NULL,NULL,NULL,NULL,NULL,'111100000',0),(15,'5ab35bafda441',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(16,'5ab36cbc53c42',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(17,'5ab36db420453','Ms.','Victor','Taguines','korea','sadfsadfs@sdfsdfgdg.sdg','gym','November 18, 1936','date','345','111111111',1),(18,'5ab37935cf245','Ms.','victor','Taguines','china','asdfsdafsdf@sdfas.vsdk','beach','July 7, 1924','makeup','45345','111111111',1),(19,'5ab3826400459','Mr.','Victor','Taguines','japan','sdfgdg@dfgdg.sdfg','gym','May 9, 1927','travel','35435','111111111',1),(20,'5ab384098acd5','Mr.','victor','Taguines','china','werwer@dfgg.fgf','beach','August 8, 1925','date','345435','111111111',1),(21,'5ab4507142950','Mr.','Victor','Taguines','japan','asfsf@sfasdf.com','spa','June 8, 1926','travel','234234','111111111',1),(22,'5ab453332cea2','Ms.','Vasdf','Tasgsa','japan','asdfsaf@sfsfdfsdf.dfg','beach','June 10, 1927','travel','3434','111111111',1),(23,'5ab454f071cd1','Mr.','sdgdg','sdfgdsg','japan','asdfdsf@sdfgd.com','beach','June 9, 1926','travel','34535','111111111',1),(24,'5ab456481b3b4','Mr.','sdfsafs','asdfsdaf','japan','asdfsadf@fghfd.bnm','gym','December 18, 1935','date','54353454','111111111',1),(25,'5ab4595ddeb8c','Mr.','sdfgdfg','sdfgdsfg','japan','asfsf@ds.ghf','gym','September 10, 1927','travel','3453454','111111111',1),(26,'5ab45af145f7a','Ms.','asdfsdf','asdfsaf','italy','asfj@sfsdf.com','spa','August 8, 1925','watch','345345','111111111',1),(27,'5ab460a6e1e96','Mr.','dfgdsg','sdfgsdgsdg','korea','dfgsdglk@dfogldfjgl.dsfg','beach','June 9, 1927','date','345345','111111111',1),(28,'5ab46405d116b','Mr.','Victor','Taguines','japan','asdfssd@sdfaf.com','gym','October 11, 1928','date','34534543','111111111',1),(29,'5ab46472f1c62',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(30,'5ab465030ab79','Mr.','victor','Ta','japan','asdfsaf@sdfs.gsdf','eat','June 9, 1927','travel','43535','111111111',1),(31,'5ab4674736bba',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(32,'5ab46759ee2c2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(33,'5ab4676118e02','Mr.','sdfgdg','dfdsfd','italy','agdsagg@dsfgdf.gfhg','beach','October 11, 1929','date','3453','111111111',1),(34,'5ab4743b42199','Mr.','victor','Taguines','china','afsd@sdf.fgh','beach','December 13, 1930','date','3423','111111111',1),(35,'5ab47a108fcb5','Ms.','dsaf','asdfsa','china','asdf@sdfsd.fgh','beach','October 9, 1927','makeup','34234','111111111',1),(36,'5ab481727a00e','Mr.','asdfsf','asdfsdaf','china','sdfswdfs@asdfsd.fghj','eat','November 19, 1935','date','43534','111111111',1),(37,'5ab482e588266',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(38,'5ab4871ba0b0c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(39,'5ab4c3feed7e9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(40,'5ab847ea1b435',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(41,'5ab848658e7a4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(42,'5ab9954baf3ee',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(43,'5ab9a5acece8e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(44,'5ac6d24e671ad','Ms.','victoria','peninsula','italy','asdfs.adsfc@aas.cmn','gym','November 18, 1935','travel','3434','111111111',1),(45,'5ac6d8443d5ea','Ms.','asdfs','asdfs','japan','asdfsad@sdfg.dfd','gym','November 19, 1936','date',NULL,'111111110',0),(46,'5acc2786268a2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(47,'5ae20081de29e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(48,'5ae74f856d1f4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0),(49,'5ae74fd6ec455',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'000000000',0);
/*!40000 ALTER TABLE `ajax_respondents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_03_06_042359_create_respondents_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respondents`
--

DROP TABLE IF EXISTS `respondents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respondents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placetogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thingtodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respondents`
--

LOCK TABLES `respondents` WRITE;
/*!40000 ALTER TABLE `respondents` DISABLE KEYS */;
INSERT INTO `respondents` VALUES (1,'Mr','Arth','Dano','Japan','arth@kestrelddm.com','sleep','September 21, 1996','Peace','09128376','2018-03-21 23:29:24',NULL),(2,'test','test','test','test','test','test','test','test','test','2018-03-21 15:28:24',NULL);
/*!40000 ALTER TABLE `respondents` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-30 12:59:47
