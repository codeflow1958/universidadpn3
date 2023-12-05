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
INSERT INTO `asignacion` VALUES (7,10,1),(8,10,2),(9,10,3),(10,10,4),(14,24,1),(15,24,3),(16,24,4),(18,25,1),(21,26,1),(22,26,2),(23,26,3);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'matematicas'),(2,'psicologia'),(3,'ingles'),(4,'programacion'),(12,'fisioterapi');
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
  CONSTRAINT `usuarios_FK` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE,
  CONSTRAINT `usuarios_FK_1` FOREIGN KEY (`id_materias`) REFERENCES `materia` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nicky@nicky','12345','nocolas','lopez','por xela','1993-12-14',1,NULL),(10,'alumno@alumno','$2y$10$ksnr7cMOOLCAQEOc/AGZmOuP82U2ufrcCcW2B7fKdv81SFNJDm9Ca','  marcos',' seballos','  por el estadio','2018-02-18',3,NULL),(24,'marcos@alumno','$2y$10$7tRun3lWu9z280cnYbq7eOtcYiiL2aJ.ZruqMqpe9WZuhpLKTHEEC','marcos','wit','por la iglesia','2003-07-08',3,NULL),(25,'tanque@alumno','$2y$10$b1xc.g/g.NULffde0VgUDOe2.P0ICvdrkZ/sPnUELZkZE.jK4v8WS','dwait','pesarpssi','por los alemanes','1993-12-09',3,NULL),(26,'ruis@alumno','$2y$10$fyTk4J//VAppCVg.pC68v.NmoG.86pSo8KQrsoQWx47peQFkumUT.','santiago','caballero','cerca del rastro','1999-04-10',3,NULL),(30,'maestro@maestro','$2y$10$DcOR2mvF/NoBaDcTtCZWEOZqQT2lf5LZn1KKGSWjhpUCJmXd.BVZ2','rosa','  batz','  polo norte','2023-12-21',2,NULL),(33,'marina@maestra','$2y$10$2nqfYMgQgoR0x181QsHgBOn1qssgCw2rrWOcQLMo3Z3fhmqqRVGcW','marina','hid','por el arbolito','2023-12-14',2,NULL),(34,'asharet@maestra','$2y$10$htMtYi5SePt0RY01vjVAzOmjchYZO3vZMX8kdcbROpV4O9x3brylC','velazquez','lopez','por el campo','0000-00-00',2,NULL),(35,'admin@admin','$2y$10$8jsP17kg14vbvcDM09PNO.T8jOyBgGQREvHhqD2EAFreEc/j0mNKK',' NICKY',' LOPEZ',' porla calle de los bancos','2023-12-27',1,NULL),(36,'nicky@admin','$2y$10$KTQR2bA4aPhDDKUNwf.96OZu8mim/Yufojk.SlBIeTyqaqfyMqsCq','guapo','lopez','por el arbol','2023-12-22',1,NULL);
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

-- Dump completed on 2023-12-05  1:32:01
