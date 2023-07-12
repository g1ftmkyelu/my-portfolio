-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: my_portfolio
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

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
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `technology` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `completion_level` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `projects_chk_1` CHECK ((`completion_level` between 1 and 100))
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'E-Health Tracker','http://localhost/my-portfolio/assets/media/images/image1.png','A web application for tracking health and fitness data.','Laravel','Health',80),(2,'Entertainment Hub','http://localhost/my-portfolio/assets/media/images/image1.png','An online platform for streaming movies, TV shows, and music.','Next.js','Entertainment',90),(3,'Religious Community App','http://localhost/my-portfolio/assets/media/images/image1.png','A mobile app for connecting and engaging with a religious community.','Express','Religion',70),(4,'Node.js E-commerce','http://localhost/my-portfolio/assets/media/images/image1.png','An e-commerce platform built with Node.js for selling various products online.','Node.js','Utilities',85),(5,'Nuxt.js Blogging Platform','http://localhost/my-portfolio/assets/media/images/image1.png','A blogging platform developed with Nuxt.js for creating and managing blogs.','Nuxt.js','Utilities',75),(6,'Ruby on Rails Social Network','http://localhost/my-portfolio/assets/media/images/image1.png','A social networking site built with Ruby on Rails for connecting people.','Ruby on Rails','Utilities',95);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `skill_id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(100) NOT NULL,
  `proficiency` tinyint NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'JavaScript',90,'Programming Language','JavaScript is a widely-used scripting language for web development.','http://localhost/my-portfolio/assets/media/images/images/js.png'),(2,'Node.js',85,'Backend Development','Node.js is a JavaScript runtime built on Chrome\'s V8 JavaScript engine, used for server-side development.','http://localhost/my-portfolio/assets/media/images/images/nodeJS.png'),(3,'Laravel',80,'Backend Development','Laravel is a PHP web application framework known for its elegant syntax and features.','http://localhost/my-portfolio/assets/media/images/images/laravel.png'),(4,'GraphQL',75,'API Development','GraphQL is a query language for APIs that allows clients to request only the data they need.','http://localhost/my-portfolio/assets/media/images/images/graphQL.png'),(5,'Git',95,'Version Control','Git is a distributed version control system used for tracking changes in code.','http://localhost/my-portfolio/assets/media/images/images/git.png'),(6,'Go (Golang)',70,'Programming Language','Go is a statically typed, compiled language designed for simplicity and efficiency.','http://localhost/my-portfolio/assets/media/images/images/Golang.jpeg'),(7,'Vue.js',85,'Frontend Development','Vue.js is a progressive JavaScript framework used for building user interfaces.','http://localhost/my-portfolio/assets/media/images/images/vueJS.png'),(8,'C# (C Sharp)',80,'Programming Language','C# is a versatile programming language developed by Microsoft.','http://localhost/my-portfolio/assets/media/images/images/csharp.jpeg'),(9,'Docker',90,'DevOps','Docker is a platform for developing, shipping, and running applications in containers.','http://localhost/my-portfolio/assets/media/images/images/docker.png'),(10,'PostgreSQL',85,'Database Management','PostgreSQL is a powerful open-source relational database management system.','http://localhost/my-portfolio/assets/media/images/images/PostgreSQL.png'),(11,'PHP',75,'Programming Language','PHP is a server-side scripting language commonly used for web development.','http://localhost/my-portfolio/assets/media/images/images/PHP.png'),(12,'Angular',80,'Frontend Development','Angular is a TypeScript-based web application framework for building dynamic single-page applications.','http://localhost/my-portfolio/assets/media/images/images/angular.png');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'gift mkyelu','mkyelugift@gmail.com','luwinga mzuzu','0995751617');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-12  6:04:29
