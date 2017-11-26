-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: campus
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` char(21) DEFAULT NULL,
  `adminSchool` char(21) DEFAULT NULL,
  `adminSchoolID` char(21) DEFAULT NULL,
  `adminPW` char(21) DEFAULT NULL,
  `adminPower` int(4) DEFAULT NULL,
  `adminCreateAt` date DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generaluser`
--

DROP TABLE IF EXISTS `generaluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generaluser` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` char(21) DEFAULT NULL,
  `userSchool` char(21) DEFAULT NULL,
  `userSchoolID` char(21) DEFAULT NULL,
  `userPW` char(21) DEFAULT NULL,
  `userPower` int(4) DEFAULT NULL,
  `userAvater` char(21) DEFAULT NULL,
  `userCreateAt` date DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generaluser`
--

LOCK TABLES `generaluser` WRITE;
/*!40000 ALTER TABLE `generaluser` DISABLE KEYS */;
/*!40000 ALTER TABLE `generaluser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generalusermsg`
--

DROP TABLE IF EXISTS `generalusermsg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generalusermsg` (
  `msgID` int(11) NOT NULL AUTO_INCREMENT,
  `msgUserSchool` char(21) DEFAULT NULL,
  `msgUserSchoolID` int(21) DEFAULT NULL,
  `msgContent` char(255) DEFAULT NULL,
  `msgCreateAt` date DEFAULT NULL,
  PRIMARY KEY (`msgID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generalusermsg`
--

LOCK TABLES `generalusermsg` WRITE;
/*!40000 ALTER TABLE `generalusermsg` DISABLE KEYS */;
INSERT INTO `generalusermsg` VALUES (1,NULL,NULL,NULL,'2017-11-25');
/*!40000 ALTER TABLE `generalusermsg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` char(21) DEFAULT NULL,
  `postAuthor` char(21) DEFAULT NULL,
  `postAuthorID` int(11) DEFAULT NULL,
  `postSummary` char(255) DEFAULT NULL,
  `postContent` longtext,
  `postLevel` int(4) DEFAULT NULL,
  `postCreateAt` date DEFAULT NULL,
  `postUpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (2,'校方通知','CYLeft',31154118,'近期校方信息','11月15日下午，图书馆在五楼博学厅召开了读者座谈会。图书馆、各部门负责人以及各学院30余位学生代表参加了座谈会。\r\n会上，图书馆馆长李佳军简要介绍了馆内基本情况以及图书馆在资源建设与读者服务中所做的各项工作，同时，感谢同学们对图书馆工作的关心和支持，欢迎同学们对图书馆在管理、服务工作中存在的问题提出意见和建议，共同促进图书馆的建设和发展。\r\n与会读者代表纷纷发言，在对图书馆工作给予了充分肯定的同时，提出了很多中肯的意见和建议，主要集中在阅览座位、指引路标、图书更新、流通管理、门禁管理、电子资源利用、服务咨询、公共区域管理、新书通报等方面，图书馆及各部门负责人就相关问题作了详细的解答，图书馆将采取措施，尽最大的努力满足读者的需求，也号召同学们更多的参与到图书馆管理服务中来，影响和带动身边的同学，为把图书馆建设的更好而共同努力。\r\n在座谈会结束后，图书馆召开了馆务会，对同学们的意见和建议进行整理归纳并进行各自认领，具备条件的马上改善，不具备条件的将在今后的工作中努力实现，图书馆将逐步完善各项工作，力争为广大读者提供更为优质的服务。\r\n',2,'2017-11-26',NULL),(3,'图书馆开展学习宣传贯彻十九大精神专题党课活','赵翠翠 许梦宇',31154118,'11月15日，图书馆在五楼博学厅开展学习宣传贯彻十九大精神专题党课活动，全体工作人员参加活动。','会上，馆长李佳军首先传达了党委书记刘晓春同志在学校学习宣传贯彻十九大精神会议的讲话精神和党委副书记、校长刘惠洲同志总结讲话的要求，并强调深入学习宣传贯彻党的十九大精神是当前和今后一个时期重要的政治任务。\r\n接下来由党总支书记张志军作了题为“新思想引领新时代，新时代开启新征程”的专题党课，他从“走进新时代、社会新矛盾、历史新使命、理论新思想、奋斗新征程、强军新目标、党建新要求”等7个“新”方面为大家详细解读了习近平总书记的十九大报告精神，十九大是在全面建成小康社会决胜阶段、中国特色社会主义发展关键时期召开的一次十分重要的大会，图书馆教职工要站在政治和全局高度，全面深刻认识党的十九大的重大现实意义和深远影响。\r\n最后，张志军对图书馆全体工作人员学习贯彻十九大精神提出要求，一是要结合学校学习宣传贯彻十九大精神的部署要求，在全馆掀起十九大精神学习热潮，记好学习笔记，明确工作目标，提升服务效能；二是在图书馆官方主页及微信平台掀起十九大精神的舆论宣传热潮，营造学习氛围；三是要重点落实各党支部书记、各部主任讲党课任务，带头用十九大精神武装头脑、指导实践、推动工作，努力在平凡工作中做出不平凡的业绩。\r\n',2,'2017-11-26',NULL);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `schID` int(11) NOT NULL AUTO_INCREMENT,
  `schName` char(21) DEFAULT NULL,
  `schMsg` char(255) DEFAULT NULL,
  `schAvater` char(255) DEFAULT NULL,
  `createAt` date DEFAULT NULL,
  PRIMARY KEY (`schID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-26 16:33:53
