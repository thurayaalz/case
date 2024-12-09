-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: mygames
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `gameName` varchar(255) NOT NULL COMMENT 'Game Name',
  `price` decimal(10,2) NOT NULL COMMENT 'Price',
  `rate` float NOT NULL COMMENT 'Rate',
  `compatibility` varchar(255) NOT NULL COMMENT 'Compatibility',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Table for storing game information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (25,'2024-11-28 21:20:43','COD: Black Ops 6',290.00,5,'All Platforms'),(26,'2024-11-28 21:20:43','Village',170.00,4.7,'All platforms'),(27,'2024-11-28 21:20:43','Resident Evil2',90.00,4.5,'Ps5, Ps4, Xbox'),(28,'2024-11-28 21:20:43','Dying Light 2',120.00,4.9,'All Platforms'),(29,'2024-11-28 21:20:43','Cyberpunk 2077',200.00,4.6,'All Platforms'),(30,'2024-11-28 21:20:43','Mortal Kombat 12',150.00,3.7,'All Platforms');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;

--
-- Table structure for table `usergames`
--

DROP TABLE IF EXISTS `usergames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergames` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `gameName` varchar(255) NOT NULL COMMENT 'Game Name',
  `price` decimal(10,2) NOT NULL COMMENT 'Price',
  `rate` float NOT NULL COMMENT 'Rate',
  `compatibility` varchar(255) NOT NULL COMMENT 'Compatibility',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Table for storing game information';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergames`
--

/*!40000 ALTER TABLE `usergames` DISABLE KEYS */;
INSERT INTO `usergames` VALUES (1,'2024-11-29 00:25:12','WarZone',0.00,4.7,'All Platform'),(2,'2024-11-29 03:53:12','Little Nightmare2',80.00,3.9,'Ps5-Ps4'),(4,'2024-11-29 04:14:32','FIFA',200.00,4.3,'All Platform'),(6,'2024-11-29 04:37:51','Call Of Duty',250.00,5,'All Platform');
/*!40000 ALTER TABLE `usergames` ENABLE KEYS */;

--
-- Dumping routines for database 'mygames'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-09 12:17:53
