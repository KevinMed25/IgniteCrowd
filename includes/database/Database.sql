-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: ignitecrowd
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proyectos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_proyecto` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `total_a_financiar` decimal(10,2) DEFAULT NULL,
  `num_backers` int DEFAULT NULL,
  `portada` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_descripcion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `ingresos` decimal(10,2) DEFAULT NULL,
  `usuarioid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarioid_idx` (`usuarioid`),
  CONSTRAINT `usuarioid` FOREIGN KEY (`usuarioid`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (1,'Infierno',' Aquí irá una breve descripcion general del proyecto',700.00,169,'InfernoSmall.jpg',NULL,'Libros','Mérida, Yucatán','2023-12-02',149.00,1),(2,'Electro Albúm',' Aquí irá una breve descripcion general del proyecto',800.00,400,'AlumMusica.jpeg',NULL,'Música','Mérida, Yucatán','2023-12-02',300.00,1),(3,'Tokyo Ghoul',' Aquí irá una breve descripcion general del proyecto',400.00,320,'portadaManga.jpg',NULL,'Mangas','Mérida, Yucatán','2023-12-02',365.00,1),(7,' Berserk','Es un manga creado por Kentaro Miura y posteriormente adaptado en anime, con un estilo épico fantástico y de fantasía oscura. El manga comenzó a publicarse en 1989 en la extinta revista mensual Monthly Animal House, hasta que fue reemplazada en 1992 por la revista quincenal Young Animal, donde fue publicado irregularmente hasta el 2021 tras la muerte de su autor',1000.00,0,'8b122a5dd7eba233608f35e11713d233.jpg',NULL,'categoria2','Mérida, Yucatán','2023-12-06',0.00,1);
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido_paterno` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido_materno` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crowdfunder` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Kevin','Medina Padilla',NULL,'$2y$10$fIlI6uPUS8B49XEyqwEuJOcu/cmuVAiukMAZjEpDXRo5h8yKm8TWm','kevinmedina2509Jr@gmail.com','9996131871',0),(2,' Kevin ','Medina','Padilla','$2y$10$0A/zkHI9EmnZcwppuS57muACaWNFb6WyPVhHY3UFgDA6gIwaXBv4e','correo@correo.com','9996131871',0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-06 14:23:00
