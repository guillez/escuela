-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: escuela
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cuil` varchar(50) DEFAULT NULL,
  `ingreso` varchar(4) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `idestado` int(2) NOT NULL DEFAULT '1',
  `serial` varchar(20) DEFAULT NULL,
  `mac` varchar(20) DEFAULT NULL,
  `tecnico` int(1) NOT NULL DEFAULT '0',
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (2,'SANTACRUZ NESTOR JAVIER','2005-04-03','20440338160','','','20440338160','','',4,'AA1174135259','',4,'1202144-lunes 28 de marzo de 2016-NO CARGA CORRECTAMENTE EL GRUB'),(3,'RODA RICARDO EZEQUIEL',NULL,'23418190809','','','23418190809','','',4,'AA0174055006','',3,'1202103-lunes 28 de marzo de 2016-NO ENCIENDE'),(4,'RIOS EMANUEL EDGARDO RUBEN',NULL,'20444496992','','','20444496992','','',4,'AA1174131683','',4,'1202094-lunes 28 de marzo de 2016 -PANTALLA QUEBRADA'),(5,'ROMERO NATALIA AYELEN',NULL,'27433411116','','','27433411116','','',4,'AA0174054925','',4,'1190647-miércoles 9 de marzo de 2016-QUEBRADA'),(7,'CARDOZO PACHECO FLORENCIA ESTEFANIA',NULL,'27434821547','','','27434821547','','',4,'AA0174085231','',3,'1171286-miércoles 16 de diciembre de 2015-EL EQUIPO QUEDA CON PANTALLA EN BLANCO (1134887)'),(8,'RODRIGUEZ DANIEL ALEXANDER',NULL,'20449224303','','','20449224303','','',4,'AA0174085449','',4,'1135019-lunes 2 de noviembre de 2015-PROBLEMAS CON GRUB'),(9,'MAGOT ERICA MAITE',NULL,'27434823973','','','27434823973','','',4,'AA0174106934','',3,'1130726-miércoles 28 de octubre de 2015-TECLAS FALTANTES'),(10,'ARAGON ERIKA CAMILA',NULL,'27428014567','','','27428014567','','',4,'AA0174059966','',3,'1122266-miércoles 21 de octubre de 2015-PROBLEMA DE PILA'),(11,'MARISTAIN LUJAN MILAGROS',NULL,'27433411078','','','27433411078','','',4,'AA0174134572','',3,'1107492-miércoles 7 de octubre de 2015-NO ENCIENDE POSIBLE GOLPE'),(12,'ESCALADA LUANA CAMILA',NULL,'27442824342','','','27442824342','','',4,'AA0174092975','',3,'1107473-miércoles 7 de octubre de 2015-NO ENCIENDE'),(13,'CARDOZO CARLA AYELEN',NULL,'27424067054','','','27424067054','','',4,'AA1174135866','',3,'1107453-miércoles 7 de octubre de 2015-PANTALLA ROTA'),(14,'GOUDARD ABRIL M',NULL,'27428014117','','','27428014117','','',4,'AA0174120290','',3,'1107383-miércoles 7 de octubre de 2015 -TECLADO NO RESPONDE'),(15,'LEDESMA ALEXANDER JAVIER',NULL,'20440339469','','','20440339469','','',4,'AA0174117298','',3,'1107318-miércoles 7 de octubre de 2015-NO ENCIENDE'),(16,'GIMENEZ MICAELA SOLEDAD',NULL,'27419071167','','','27419071167','','',4,'AA0174087626','',3,'1107306-miércoles 7 de octubre de 2015-EL DISCO PARECE ESTAR DAÑADO'),(17,'GIMENEZ AGUSTINA BELEN',NULL,'27433411132','','','27433411132','','',4,'AA0174050929','',3,'1103454-lunes 5 de octubre de 2015-EQUIPO ENCIENDE Y SE APAGA'),(18,'RIOS LUJAN VALERIA ALEJANDRA',NULL,'23439358114','','','23439358114','','',4,'AA0174096709','',3,'1008030-lunes 27 de julio de 2015-EL EQUIPO NO ENCIENDE, NO PRENDE LA LUZ DEL CARGADOR.'),(19,'SANABRIA YANINA GABRIELA',NULL,'27434820761','','','27434820761','','',4,'AA0174051764','',3,'1008002-lunes 27 de julio de 2015-PANTALLA DEMUESTRA UN GOLPE.'),(20,'HEREÑU VICTORIA CATHERINE',NULL,'27442832582','','','27442832582','','',4,'27442832582','',3,'972737-jueves 18 de junio de 2015-LA COMPUTADORA NO ENCIENDE Y NO ENCIENDE LA LUZ DEL CARGADOR.'),(22,'GARCIA MILAGROS JOSEFINA',NULL,'27413823957','','','27413823957','','',4,'AA0174054894','',1,'826540-jueves 26 de febrero de 2015 -EL EQUIPO PRENDE PERO QUEDA TILDADO EN WELCOME TO GRUB!'),(23,'BLATTER FERNANDO DAVID',NULL,'20431483239','','','20431483239','','',4,'AA4023015734','',1,'972711-jueves 18 de junio de 2015-COMPUTADORA RECIBIDA DE OTRA ESCUELA, NO ENCIENDE EL EQUIPO Y PANTALLA DAÑADA');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL DEFAULT '1',
  `idciclo` int(5) NOT NULL DEFAULT '1',
  `mes` int(2) NOT NULL DEFAULT '1',
  `d1` double DEFAULT NULL,
  `d2` double DEFAULT NULL,
  `d3` double DEFAULT NULL,
  `d4` double DEFAULT NULL,
  `d5` double DEFAULT NULL,
  `d6` double DEFAULT NULL,
  `d7` double DEFAULT NULL,
  `d8` double DEFAULT NULL,
  `d9` double DEFAULT NULL,
  `d10` double DEFAULT NULL,
  `d11` double DEFAULT NULL,
  `d12` double DEFAULT NULL,
  `d13` double DEFAULT NULL,
  `d14` double DEFAULT NULL,
  `d15` double DEFAULT NULL,
  `d16` double DEFAULT NULL,
  `d17` double DEFAULT NULL,
  `d18` double DEFAULT NULL,
  `d19` double DEFAULT NULL,
  `d20` double DEFAULT NULL,
  `d21` double DEFAULT NULL,
  `d22` double DEFAULT NULL,
  `d23` double DEFAULT NULL,
  `d24` double DEFAULT NULL,
  `d25` double DEFAULT NULL,
  `d26` double DEFAULT NULL,
  `d27` double DEFAULT NULL,
  `d28` double DEFAULT NULL,
  `d29` double DEFAULT NULL,
  `d30` double DEFAULT NULL,
  `d31` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registro` (`idalumno`,`idciclo`,`mes`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencias`
--

LOCK TABLES `asistencias` WRITE;
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` VALUES (1,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciclos`
--

DROP TABLE IF EXISTS `ciclos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciclos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(4) DEFAULT NULL,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciclos`
--

LOCK TABLES `ciclos` WRITE;
/*!40000 ALTER TABLE `ciclos` DISABLE KEYS */;
INSERT INTO `ciclos` VALUES (2,'2016',1),(3,'2015',0);
/*!40000 ALTER TABLE `ciclos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designaciones`
--

DROP TABLE IF EXISTS `designaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddivision` varchar(100) DEFAULT NULL,
  `idmateria` int(11) NOT NULL DEFAULT '1',
  `idprofesor` int(11) NOT NULL DEFAULT '1',
  `idestado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designaciones`
--

LOCK TABLES `designaciones` WRITE;
/*!40000 ALTER TABLE `designaciones` DISABLE KEYS */;
INSERT INTO `designaciones` VALUES (1,'5',20,1,1),(2,'6',9,3,1);
/*!40000 ALTER TABLE `designaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divisiones`
--

DROP TABLE IF EXISTS `divisiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `divisiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `divisiones`
--

LOCK TABLES `divisiones` WRITE;
/*!40000 ALTER TABLE `divisiones` DISABLE KEYS */;
INSERT INTO `divisiones` VALUES (5,'Primero A',1),(6,'Primero B',1),(7,'Segundo A',1),(8,'Segundo B',1),(9,'Tercero A',1);
/*!40000 ALTER TABLE `divisiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados_alumno`
--

DROP TABLE IF EXISTS `estados_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados_alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados_alumno`
--

LOCK TABLES `estados_alumno` WRITE;
/*!40000 ALTER TABLE `estados_alumno` DISABLE KEYS */;
INSERT INTO `estados_alumno` VALUES (4,'Activo'),(5,'Baja'),(6,'Pase a otra Esc'),(7,'Pase a esta Esc'),(8,'Repitente'),(9,'Aspirante');
/*!40000 ALTER TABLE `estados_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examenes`
--

DROP TABLE IF EXISTS `examenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL DEFAULT '1',
  `idmateria` int(11) NOT NULL DEFAULT '1',
  `iddivision` int(11) NOT NULL DEFAULT '1',
  `idprofesor` int(11) NOT NULL DEFAULT '1',
  `idciclo` int(11) NOT NULL DEFAULT '1',
  `primero` decimal(2,2) DEFAULT NULL,
  `segundo` decimal(2,2) DEFAULT NULL,
  `tercero` decimal(2,2) DEFAULT NULL,
  `promedio` decimal(2,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registro` (`idalumno`,`idmateria`,`idciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examenes`
--

LOCK TABLES `examenes` WRITE;
/*!40000 ALTER TABLE `examenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `examenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `curso` int(11) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (1,'MÚSICA',1,1),(2,'ARTES VISUALES',1,2),(3,'MATEMÁTICA',1,3),(4,'LENGUA Y LITERATURA',1,4),(5,'FORMACIÓN ÉTICA Y CIUDADANA',1,5),(6,'EDUCACIÓN FÍSICA',1,6),(7,'LENGUAS EXTRANJERAS',1,7),(8,'EDUCACIÓN TECNOLÓGICA',1,8),(9,'HISTORIA',1,9),(10,'GEOGRAFÍA',1,10),(11,'BIOLOGÍA',1,11),(12,'FÍSICA Y QUÍMICA',1,12),(13,'MÚSICA',2,1),(14,'ARTES VISUALES',2,2),(15,'MATEMÁTICA',2,3),(16,'LENGUA Y LITERATURA',2,4),(17,'FORMACIÓN ÉTICA Y CIUDADANA',2,5),(18,'EDUCACIÓN FÍSICA',2,6),(19,'LENGUAS EXTRANJERAS',2,7),(20,'EDUCACIÓN TECNOLÓGICA',2,8),(21,'HISTORIA',2,9),(22,'GEOGRAFÍA',2,10),(23,'BIOLOGÍA',2,11),(24,'FÍSICA Y QUÍMICA',2,12),(25,'MÚSICA',3,1),(26,'ARTES VISUALES',3,2),(27,'MATEMÁTICA',3,3),(28,'LENGUA Y LITERATURA',3,4),(29,'FORMACIÓN ÉTICA Y CIUDADANA',3,5),(30,'EDUCACIÓN FÍSICA',3,6),(31,'LENGUAS EXTRANJERAS',3,7),(32,'EDUCACIÓN TECNOLÓGICA',3,8),(33,'HISTORIA',3,9),(34,'GEOGRAFÍA',3,10),(35,'BIOLOGÍA',3,11),(36,'FÍSICA Y QUÍMICA',3,12);
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesores`
--

DROP TABLE IF EXISTS `profesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cuil` varchar(50) DEFAULT NULL,
  `ingreso` varchar(4) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `idestado` int(2) NOT NULL DEFAULT '1',
  `serial` varchar(20) DEFAULT NULL,
  `mac` varchar(20) DEFAULT NULL,
  `tecnico` int(1) NOT NULL DEFAULT '0',
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesores`
--

LOCK TABLES `profesores` WRITE;
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT INTO `profesores` VALUES (1,'ZDANOWICZ, Guillermo',NULL,'','','','','','',1,'','',1,''),(3,'BERNASCONI, Patricia',NULL,'1','','','','','',1,'','',1,'');
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trayectorias`
--

DROP TABLE IF EXISTS `trayectorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trayectorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL DEFAULT '1',
  `iddivision` int(11) NOT NULL DEFAULT '1',
  `idciclo` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `registro` (`idalumno`,`iddivision`,`idciclo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trayectorias`
--

LOCK TABLES `trayectorias` WRITE;
/*!40000 ALTER TABLE `trayectorias` DISABLE KEYS */;
INSERT INTO `trayectorias` VALUES (1,2,5,2),(2,3,6,2),(3,4,7,2);
/*!40000 ALTER TABLE `trayectorias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-30 23:17:14
