-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: universidad
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `asignacion`
--

DROP TABLE IF EXISTS `asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`),
  KEY `asignacion_FK` (`id_alumno`),
  KEY `asignacion_FK_1` (`id_materia`),
  CONSTRAINT `asignacion_FK` FOREIGN KEY (`id_alumno`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `asignacion_FK_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion`
--

LOCK TABLES `asignacion` WRITE;
/*!40000 ALTER TABLE `asignacion` DISABLE KEYS */;
INSERT INTO `asignacion` VALUES (7,10,1),(8,10,2),(9,10,3),(10,10,4),(11,10,5),(13,13,1),(14,24,1),(15,24,3),(16,24,4),(17,24,5),(18,25,1),(19,25,8),(20,25,5),(21,26,1),(22,26,2),(23,26,3),(24,26,8);
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'matematicas'),(2,'psicologia'),(3,'ingles'),(4,'programacion'),(5,'artes'),(8,'cyber seguridad'),(9,'fisica'),(10,'aleman'),(11,'contabilidad');
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'maestro'),(3,'alumno');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `id_materias` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_FK` (`rol`),
  KEY `usuarios_FK_1` (`id_materias`),
  CONSTRAINT `usuarios_FK` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`),
  CONSTRAINT `usuarios_FK_1` FOREIGN KEY (`id_materias`) REFERENCES `materia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nicky@nicky','12345','','','','1993-12-14',1,NULL),(8,'admin@admin','$2y$10$Iyqqpkw9yEn43K3O8fvEF.3fmfunfEc.y.8RYck1kSpy1/rAoC9SO','NICKY','LOPEZ','porla calle de los bancos','2023-11-14',1,NULL),(9,'maestro@maestro','$2y$10$ojSJCgCkxknwwnAWFIflFOLtJAPx.bGFana/LBx.fr3iPbpJ03KEm','jaz','ochoa','santa lucia','2023-11-28',2,1),(10,'alumno@alumno','$2y$10$ksnr7cMOOLCAQEOc/AGZmOuP82U2ufrcCcW2B7fKdv81SFNJDm9Ca','escanor','leon del orgullo','','2018-02-18',3,NULL),(12,'mandarina@mandarina','$2y$10$S8Nn3pGcBrPkbtF6c3saAuAqikhRiKu1tb7Kd7OSqe0f3KCqJ45PO','','','','2017-02-11',1,NULL),(13,'niko@niko','$2y$10$ty1MGVolgk2YYm0TZDf/3e88rkIYR5Kd2tXUSJqTkAGIpfsGSk1LC','manzana','fruta','en la canasta','2023-11-07',3,NULL),(17,'juan@maestro','$2y$10$nB6cNoxifM81yxmsOrHHn.RIF9lhBV.LotB7hHXqFuTJ2BszweJwa','juan','lopez','por el estadoi','2023-11-27',2,2),(18,'maruop@maestro','$2y$10$KrVY36T7uAPOL75YusL3LOrkYJPKVDs8ggG7npeeoVrdMaFMuI53u','mario','paz','junto al banco','2023-12-30',2,3),(19,'maria@maestro','$2y$10$TnGTWdwm/R/KB6HMGeXVZOZFwDjqaRvBf4YX.6BeHP8ZO2KWphz9K','maria','lopez','junto al super','2023-12-28',2,4),(20,'ernesto@maestro','$2y$10$htP35LuLXNNX5UWuxv2.ju1R/I15HFAkGgxepqZfT4hN0oexM1fye','ernesto','munder','por el sanatorio','2019-07-01',2,5),(21,'victor@maestro','$2y$10$F/LuzQWZO7Z2XwTrgxlLIu09KGWixFynB9qiMqXd0lRN/n2QAW1ha','victor ','lopez','junto a la compu','2017-02-08',2,8),(22,'silvia@maestro','$2y$10$wg78GGF0IaUz.oofbDD8h.hZKlaofvsmLLdP8mGh/zMZe16JdmdzC','silvia','juarez','por los bonberos','2016-01-10',2,9),(24,'marcos@alumno','$2y$10$7tRun3lWu9z280cnYbq7eOtcYiiL2aJ.ZruqMqpe9WZuhpLKTHEEC','marcos','wit','por la iglesia','2003-07-08',3,NULL),(25,'tanque@alumno','$2y$10$b1xc.g/g.NULffde0VgUDOe2.P0ICvdrkZ/sPnUELZkZE.jK4v8WS','dwait','pesarpssi','por los alemanes','1993-12-09',3,NULL),(26,'ruis@alumno','$2y$10$fyTk4J//VAppCVg.pC68v.NmoG.86pSo8KQrsoQWx47peQFkumUT.','carlos','ruiz','13-65 zona 145','1999-04-10',3,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'universidad'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-04  5:22:44
