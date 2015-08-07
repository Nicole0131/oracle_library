-- MySQL dump 10.13  Distrib 5.1.71, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: db_library
-- ------------------------------------------------------
-- Server version	5.1.71-log

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
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `user_ID` varchar(20) NOT NULL,
  `book_ID` char(10) NOT NULL,
  `Layout` date NOT NULL,
  `ReturnDay` date NOT NULL,
  PRIMARY KEY (`user_ID`,`book_ID`),
  KEY `book_ID` (`book_ID`),
  CONSTRAINT `record_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`),
  CONSTRAINT `record_ibfk_2` FOREIGN KEY (`book_ID`) REFERENCES `books` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES ('123456','M-39','2015-07-30','2015-08-20'),('ada','J-11','1980-03-29','1980-04-19'),('anmeng','B-14','2013-08-26','2013-09-16'),('bill_yan','Z-53','2014-01-20','2014-02-10'),('brendabai','D-59','2014-09-22','2014-10-13'),('Carol_yu','Z-46','2014-06-12','2014-07-03'),('cary','T-7','2014-09-22','2014-10-13'),('conner','D-31','2015-06-30','2015-07-21'),('darren.li@oracle.com','S-72','1980-01-11','1980-02-01'),('deepalley','S-11','1980-01-11','1980-02-01'),('dongmeng','Y-18','2014-09-22','2014-10-13'),('fanyuan','C-6','2014-08-11','2014-09-01'),('GaryWang','O-3','1980-02-29','1980-03-21'),('GraceTang','N-8','2013-08-27','2013-09-17'),('guanghui.x.shi','W-25','2014-09-22','2014-10-13'),('guihua.wu@oracle.com','Z-50','2015-07-30','2015-08-20'),('HaitaoWang','Z-38','2013-08-26','2013-09-16'),('haoysun','U-1','2014-06-13','2014-07-04'),('herui','S-19','2014-06-12','2014-07-03'),('iceiceice','S-13','1980-01-06','1980-01-27'),('jeffrey','Y-19','2015-06-30','2015-07-21'),('jieqian.wu','H-1','2014-09-03','2014-09-24'),('jinhowan','S-6','2015-07-01','2015-07-22'),('js','M-1','2013-03-28','2013-04-18'),('kiluwa','J-12','1980-02-25','1980-03-17'),('laotangs','J-16','2014-06-12','2014-07-03'),('leonguo','P-3','2014-05-18','2014-06-08'),('libraryadmin','C-23','1980-01-05','1980-01-26'),('lihongyu_cn','B-19','2014-09-22','2014-10-13'),('Linda','O-1','2014-09-22','2014-10-13'),('linghua.zhang','S-10','2014-08-15','2014-09-05'),('liulu','H-8','2014-09-22','2014-10-13'),('liuxu','T-4','2013-12-13','2014-01-03'),('lu.w.wang@oracle.com','J-7','1980-06-02','1980-06-23'),('lxsuper','Z-37','2013-05-02','2013-05-23'),('Mengtao','S-48','2014-03-27','2014-04-17'),('michaelsun','J-1','1980-01-18','1980-02-08'),('mishuang','Z-26','2015-06-30','2015-07-21'),('nan.xie','D-26','1980-02-25','1980-03-17'),('nicholas','P-4','2013-05-17','2013-06-07'),('nick','D-32','2015-07-03','2015-07-24'),('nina.xie@oracle.com','R-6','1980-06-02','1980-06-23'),('ninaw','G-11','1980-01-05','1980-01-26'),('rayx','J-5','2013-03-29','2013-04-19'),('rebeccaliu','C-2','2014-06-17','2014-07-08'),('seashore','S-2','2013-11-13','2013-12-04'),('seaton','D-2','1980-01-12','1980-02-02'),('stephen','S-5','2014-02-12','2014-03-05'),('tallercui','S-23','1980-02-27','1980-03-19'),('test','Z-15','2013-04-03','2013-04-24'),('wangyanpeng','S-26','1980-01-15','1980-02-05'),('wsclovezlq','C-15','2013-07-12','2013-08-02'),('xiaolwu_cn','Z-56','2014-01-22','2014-02-12'),('xiaoyue','D-28','2014-01-21','2014-02-11'),('Xingtai','P-5','2014-07-30','2014-08-20'),('xinnanwei','J-18','2014-09-10','2014-10-01'),('yangu','w-2','1980-01-12','1980-02-02'),('yuan.gu@oracle.com','J-10','2014-09-15','2014-10-06'),('yuqi.zhou@oracle.com','R-10','2014-06-12','2014-07-03'),('zhangbaoli','S-12','2014-03-11','2014-04-01'),('zhencli','B-17','2015-07-22','2015-08-12');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-31 15:00:23
