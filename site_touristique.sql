-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `site_touristique`
--

DROP TABLE IF EXISTS `site_touristique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_touristique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_touristique`
--

LOCK TABLES `site_touristique` WRITE;
/*!40000 ALTER TABLE `site_touristique` DISABLE KEYS */;
INSERT INTO `site_touristique` VALUES (7,'Cascade de Banfora','bonfora-4c54b.jpg','Situées à environ 12 km au nord-ouest de Banfora, elles tiennent leur nom de la commune de Karfiguéla. Elles constituent l\'un des sites touristiques les plus importants au Burkina Faso. La région des Cascades tire son nom de ces chutes d\'eau.'),(8,'Les domes de fabedougou','Domes_de_Fabedougou-1024x682.jpg','Les Dômes de Fabédougou\r\nLes Dômes de Fabédougou\r\nIls sont situés à 15 kilomètres de Banfora dans le département de Bérégadougou. Le site est difficile d’accès. C’est un ensemble de falaises de grès. Ce relief a été taillé par la nature en forme de cas aux toits de chaume et sont visités toute l’année.'),(9,'\r\nPics de Sindou','picSindou.jpg','Les pics de Sindou ou aiguilles de Sindou sont une formation rocheuse de grès, aux parois abruptes et fortement érodées dans le Sud-Ouest du Burkina Faso. Ils culminent à 415 mètres d\'altitude, ce qui en fait le deuxième point le plus haut du Burkina Faso. '),(10,'Les ruines de loropeni','ruine.jpg','Les ruines de Loropéni sont situées sur le territoire de la commune de Loropéni, dans la région Sud-Ouest au Burkina Faso. Elles sont inscrites dans la liste du patrimoine mondial de l\'UNESCO en 2009. '),(11,'Mares aux crocodiles sacres de Sabou','crocodileSabou.jpg','Ces crocodiles représentent les âmes des descendants de la famille Kaboré à Sabou\r\nLes crocodiles sacrés de Sabou. Ils sont plus d’une centaine et vivent dans une mare depuis des siècles au côté nord de Sabou.\r\n'),(12,'Vielle mosquee','mosque.jpg','La mosquée, qui porte le nom du quartier Dioulasso-bâ, a été construite vers 1880 par l’iman Sidiki Sanou1. Samory Touré y aurait prié lors de son passage à Bobo-Dioulasso2,3 avant de poursuive son combat contre les colons.');
/*!40000 ALTER TABLE `site_touristique` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-29  0:30:38
