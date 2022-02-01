-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: bots
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `tbl_cmdhistory`
--

DROP TABLE IF EXISTS `tbl_cmdhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cmdhistory` (
  `clm_device_imei` varchar(1000) NOT NULL,
  `clm_command` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cmdhistory`
--

LOCK TABLES `tbl_cmdhistory` WRITE;
/*!40000 ALTER TABLE `tbl_cmdhistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cmdhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_device`
--

DROP TABLE IF EXISTS `tbl_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_device` (
  `clm_id` varchar(100) NOT NULL,
  `clm_device_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clm_registered` varchar(100) NOT NULL,
  `clm_ip` varchar(50) NOT NULL,
  `clm_currentcommand` varchar(1000) CHARACTER SET latin1 NOT NULL DEFAULT 'Command & Control !',
  `clm_commandseen` tinyint(4) NOT NULL DEFAULT '0',
  `clm_device_name` varchar(100) NOT NULL,
  `clm_device_mail` varchar(300) NOT NULL,
  PRIMARY KEY (`clm_id`,`clm_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_device`
--

LOCK TABLES `tbl_device` WRITE;
/*!40000 ALTER TABLE `tbl_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_device_details`
--

DROP TABLE IF EXISTS `tbl_device_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_device_details` (
  `clm_device_imei` varchar(1000) NOT NULL,
  `clm_device_bootloader` varchar(100) NOT NULL,
  `clm_device_display` varchar(100) NOT NULL,
  `clm_device_user` varchar(1000) NOT NULL,
  `clm_device_sdk` varchar(1000) NOT NULL,
  `clm_device_device` varchar(1000) NOT NULL,
  `clm_device_version` varchar(100) NOT NULL,
  `clm_device_cpu` varchar(100) NOT NULL,
  `clm_device_sim` varchar(100) NOT NULL,
  `clm_device_carrier` varchar(100) NOT NULL,
  `clm_device_id` varchar(100) NOT NULL,
  `clm_device_cpuu` varchar(100) NOT NULL,
  `clm_device_product` varchar(100) NOT NULL,
  `clm_device_brand` varchar(100) NOT NULL,
  `clm_device_hardware` varchar(100) NOT NULL,
  `clm_device_mac` varchar(100) NOT NULL,
  `clm_device_ip` varchar(100) NOT NULL,
  `clm_device_inc` varchar(100) NOT NULL,
  `clm_device_host` varchar(100) NOT NULL,
  `clm_device_finger` varchar(100) NOT NULL,
  `clm_device_radio` varchar(100) NOT NULL,
  `clm_device_man` varchar(100) NOT NULL,
  `clm_device_board` varchar(100) NOT NULL,
  `clm_device_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_device_details`
--

LOCK TABLES `tbl_device_details` WRITE;
/*!40000 ALTER TABLE `tbl_device_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_device_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_emails`
--

DROP TABLE IF EXISTS `tbl_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_emails` (
  `clm_device_emails` varchar(1000) NOT NULL,
  `clm_device_number` varchar(100) NOT NULL,
  PRIMARY KEY (`clm_device_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_emails`
--

LOCK TABLES `tbl_emails` WRITE;
/*!40000 ALTER TABLE `tbl_emails` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_gps`
--

DROP TABLE IF EXISTS `tbl_gps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_gps` (
  `clm_device_longitude` decimal(10,7) NOT NULL,
  `clm_device_latitude` decimal(10,7) NOT NULL,
  `clm_device_number` varchar(100) NOT NULL,
  PRIMARY KEY (`clm_device_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gps`
--

LOCK TABLES `tbl_gps` WRITE;
/*!40000 ALTER TABLE `tbl_gps` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_gps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_packages`
--

DROP TABLE IF EXISTS `tbl_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_packages` (
  `clm_device_apps` mediumtext NOT NULL,
  `clm_device_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_packages`
--

LOCK TABLES `tbl_packages` WRITE;
/*!40000 ALTER TABLE `tbl_packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rcallogs`
--

DROP TABLE IF EXISTS `tbl_rcallogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rcallogs` (
  `clm_device_id` varchar(100) NOT NULL,
  `clm_number` bigint(20) NOT NULL,
  `clm_type` varchar(100) NOT NULL,
  `clm_date` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rcallogs`
--

LOCK TABLES `tbl_rcallogs` WRITE;
/*!40000 ALTER TABLE `tbl_rcallogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_rcallogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rsmslogs`
--

DROP TABLE IF EXISTS `tbl_rsmslogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rsmslogs` (
  `clm_device_id` varchar(1000) DEFAULT NULL,
  `clm_msgb` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `clm_msgd` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `clm_msgf` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rsmslogs`
--

LOCK TABLES `tbl_rsmslogs` WRITE;
/*!40000 ALTER TABLE `tbl_rsmslogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_rsmslogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `clm_id` int(11) NOT NULL AUTO_INCREMENT,
  `clm_userid` varchar(100) CHARACTER SET latin1 NOT NULL,
  `clm_password` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`clm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'admin','admin@123');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-18 17:55:01
