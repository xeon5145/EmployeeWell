CREATE DATABASE  IF NOT EXISTS `employeewell` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `employeewell`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: employeewell
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `emp_config`
--

DROP TABLE IF EXISTS `emp_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_config`
--

LOCK TABLES `emp_config` WRITE;
/*!40000 ALTER TABLE `emp_config` DISABLE KEYS */;
INSERT INTO `emp_config` VALUES (1,'host','smtp.office365.com','smtp'),(2,'port','587','smtp'),(3,'secure','tls','smtp'),(4,'username','almightyprofile@outlook.com','smtp'),(5,'password','p5145k1188','smtp');
/*!40000 ALTER TABLE `emp_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_roles`
--

DROP TABLE IF EXISTS `emp_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) DEFAULT NULL,
  `shortname` varchar(45) DEFAULT NULL,
  `deleted` varchar(45) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_roles`
--

LOCK TABLES `emp_roles` WRITE;
/*!40000 ALTER TABLE `emp_roles` DISABLE KEYS */;
INSERT INTO `emp_roles` VALUES (1,'Manager','mng','0'),(2,'Employee','emp','0');
/*!40000 ALTER TABLE `emp_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_user_data`
--

DROP TABLE IF EXISTS `emp_user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_user_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` varchar(45) DEFAULT NULL,
  `empid` varchar(45) DEFAULT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `phone2` varchar(45) DEFAULT NULL,
  `address1` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_user_data`
--

LOCK TABLES `emp_user_data` WRITE;
/*!40000 ALTER TABLE `emp_user_data` DISABLE KEYS */;
INSERT INTO `emp_user_data` VALUES (1,'1','001','8708962700',NULL,'House no. 95, Patiala Bank Colony - 3',NULL,'India','Haryana','Kurukshetra','136118','IT','Haryana','Kurukshetra');
/*!40000 ALTER TABLE `emp_user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_user_role_assignment`
--

DROP TABLE IF EXISTS `emp_user_role_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_user_role_assignment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roleid` varchar(45) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_user_role_assignment`
--

LOCK TABLES `emp_user_role_assignment` WRITE;
/*!40000 ALTER TABLE `emp_user_role_assignment` DISABLE KEYS */;
INSERT INTO `emp_user_role_assignment` VALUES (1,'1','1');
/*!40000 ALTER TABLE `emp_user_role_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_users`
--

DROP TABLE IF EXISTS `emp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `deleted` varchar(45) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_users`
--

LOCK TABLES `emp_users` WRITE;
/*!40000 ALTER TABLE `emp_users` DISABLE KEYS */;
INSERT INTO `emp_users` VALUES (1,'abhishek','Abhishek','Kagra','abhisheksingh5145@outlook.com','1234','0');
/*!40000 ALTER TABLE `emp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-04  8:14:15
