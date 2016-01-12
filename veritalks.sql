-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: pset7
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `answer` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `published` varchar(1) NOT NULL DEFAULT 'N',
  `upvotes` int(10) NOT NULL DEFAULT '0',
  `contributor` varchar(255) NOT NULL,
  `academics` tinyint(1) NOT NULL DEFAULT '0',
  `social_scene` tinyint(1) NOT NULL DEFAULT '0',
  `student_life` tinyint(1) NOT NULL DEFAULT '0',
  `real_world` tinyint(1) NOT NULL DEFAULT '0',
  `prospective_students` tinyint(1) NOT NULL DEFAULT '0',
  `financial_aid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (62,'Academics: classes, concentrations, extra-curriculars,  research opportunities, grades and advising.\r\n','','0000-00-00 00:00:00','Y',1,'',1,0,0,0,0,0),(63,'Social Scene: parties, greek life, night life, social organizations, cultural organizations, final clubs and all-things-Cambridge.\r\n','','0000-00-00 00:00:00','Y',1,'',0,1,0,0,0,0),(64,'Student Life: friendships, relationships, recreation, living spaces, dining, race/LGBT/gender concerns and safety.\r\n','','0000-00-00 00:00:00','Y',2,'',0,0,1,0,0,0),(65,'Real World: graduate education, internships, careers, interview tips, networking.','','0000-00-00 00:00:00','Y',0,'',0,0,0,1,0,0),(66,'Prospective Students: application tips, application process and unique qualities about Harvard. ','','0000-00-00 00:00:00','Y',0,'',0,0,0,0,1,0),(67,'Financial Aid: general financial aid, work-study aid, funding opportunities, grants and scholarships \r\n','','0000-00-00 00:00:00','Y',0,'',0,0,0,0,0,1),(69,'How nice is CS50 grade curve?','','2015-12-05 19:40:14','N',0,'',0,0,0,0,0,0),(70,'Qué hora es?','<b>Response from Powerhouse of the Cell:</b> <br>Feliz Navidad!','2015-12-05 19:40:34','Y',0,'',0,0,1,1,0,0),(71,'What is the meaning of life?','<b>Response from Powerhouse of the Cell:</b> <br>42','2015-12-05 19:40:46','N',0,'',0,0,0,0,0,0),(72,'Are there music practice rooms and can I just use them whenever?','<b>Response from Powerhouse of the Cell:</b> <br>Yes! If you\'re a freshman you need to go to the FDO and fill out a form. More info here: http://fdo.fas.harvard.edu/freshman-music-rooms','2015-12-05 19:41:58','Y',1,'',0,0,1,0,0,0),(73,'Is it discouraged/rude to enter in the middle of a lecture during shopping period?','','2015-12-05 19:42:30','N',0,'',0,0,0,0,0,0),(74,'If the first class requires reading from a textbook but it\'s shopping period and I haven\'t bought it, is that bad? Thanks >.<','','2015-12-05 19:43:32','N',0,'',0,0,0,0,0,0),(75,'as a freshman do i need to dress up or prepare a resume for the summer opportunities fair','','2015-12-05 19:44:06','N',0,'',0,0,0,0,0,0),(76,'Take CS50!','','2015-12-05 20:19:42','Y',10,'',0,0,0,0,0,0),(78,'How is CS50? ','','2015-12-06 04:52:48','N',0,'',0,0,0,0,0,0),(79,'Take CS50!','','2015-12-06 04:53:00','N',0,'',0,0,0,0,0,0),(82,'Should I take CS50?','<b>Response from Michael the Burrito Model:</b> <br>Yes!','2015-12-06 05:03:51','Y',0,'',1,0,0,0,0,0),(83,'Take CS50!','','2015-12-06 05:03:55','Y',1,'',0,0,0,0,0,0),(84,'Should I take CS50?','<b>Response from Michael the Burrito Model:</b> <br>Yes!','2015-12-06 05:07:29','Y',0,'',1,0,0,0,0,0),(85,'Take CS50!','','2015-12-06 05:07:33','Y',1,'',0,0,0,0,0,0),(86,'What are the best libraries to chill at?','','2015-12-06 05:59:45','N',0,'',0,0,0,0,0,0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'andi','$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS'),(2,'caesar','$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa'),(3,'eli','$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW'),(5,'jason','$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe'),(6,'john','$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy'),(7,'levatich','$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK'),(8,'rob','$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2'),(9,'skroob','$2y$10$395b7wODm.o2N7W5UZSXXuXwrC0OtFB17w4VjPnCIn/nvv9e4XUQK'),(10,'zamyla','$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e'),(17,'Michael the Burrito Model','$2y$10$iWoz94AzEWQ1KGsT4LL/c.Rq.fO6OsxWIWYPCL.8i9X4HkHSDtlGO');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-06  5:59:57
