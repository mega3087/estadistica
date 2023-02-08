/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.19-MariaDB : Database - estadistica
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`estadistica` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `estadistica`;

/*Table structure for table `abandono` */

DROP TABLE IF EXISTS `abandono`;

CREATE TABLE `abandono` (
  `AIdAbandono` int(11) NOT NULL AUTO_INCREMENT,
  `AIdPlantel` int(11) NOT NULL,
  `APeriodo` varchar(12) NOT NULL,
  `APorcentaje` float NOT NULL,
  PRIMARY KEY (`AIdAbandono`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `abandono` */

insert  into `abandono`(`AIdAbandono`,`AIdPlantel`,`APeriodo`,`APorcentaje`) values (6,1,'1996-1997',55.7),(7,1,'1997-1998',37.7),(8,1,'1998-1999',34.3),(9,1,'1999-2000',32.8),(10,1,'2013-2014',15.51),(11,1,'2014-2015',16),(12,1,'2015-2016',16.03),(13,1,'2016-2017',21.77),(14,1,'2017-2018',12.11);

/*Table structure for table `aprobados` */

DROP TABLE IF EXISTS `aprobados`;

CREATE TABLE `aprobados` (
  `AIdAprobados` int(11) NOT NULL AUTO_INCREMENT,
  `AIdPlantel` int(11) NOT NULL,
  `APeriodo` varchar(12) NOT NULL,
  `AABS` float NOT NULL,
  `APorcentaje` int(11) NOT NULL,
  PRIMARY KEY (`AIdAprobados`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `aprobados` */

insert  into `aprobados`(`AIdAprobados`,`AIdPlantel`,`APeriodo`,`AABS`,`APorcentaje`) values (1,1,'1996-1997',140,54),(2,1,'1997-1998',224,84),(3,1,'1998-1999',339,100),(4,1,'1999-2000',134,39);

/*Table structure for table `certificados` */

DROP TABLE IF EXISTS `certificados`;

CREATE TABLE `certificados` (
  `CIdCertificados` int(11) NOT NULL AUTO_INCREMENT,
  `CIdPlantel` int(11) NOT NULL,
  `CEstatus` varchar(15) NOT NULL,
  `CPeriodo` varchar(15) NOT NULL,
  PRIMARY KEY (`CIdCertificados`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `certificados` */

/*Table structure for table `computo` */

DROP TABLE IF EXISTS `computo`;

CREATE TABLE `computo` (
  `COIdComputo` int(11) NOT NULL AUTO_INCREMENT,
  `COIdPlantel` int(11) NOT NULL,
  `COEducativas` int(11) NOT NULL,
  `COAdministrativas` int(11) NOT NULL,
  `CODocentes` int(11) NOT NULL,
  `COTotal` int(11) NOT NULL,
  `COInternet` int(11) NOT NULL,
  PRIMARY KEY (`COIdComputo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `computo` */

insert  into `computo`(`COIdComputo`,`COIdPlantel`,`COEducativas`,`COAdministrativas`,`CODocentes`,`COTotal`,`COInternet`) values (1,1,52,27,1,80,80);

/*Table structure for table `costoalumno` */

DROP TABLE IF EXISTS `costoalumno`;

CREATE TABLE `costoalumno` (
  `CAIdCosto` int(11) NOT NULL AUTO_INCREMENT,
  `CAIdPlantel` int(11) NOT NULL,
  `CAPeriodo` varchar(12) NOT NULL,
  `CACosto` double NOT NULL,
  PRIMARY KEY (`CAIdCosto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `costoalumno` */

insert  into `costoalumno`(`CAIdCosto`,`CAIdPlantel`,`CAPeriodo`,`CACosto`) values (1,1,'2015',11147.4421),(2,1,'2016',11863.11303),(3,1,'2017',14363.11584),(4,1,'2018',14248.91145);

/*Table structure for table `datos_generales` */

DROP TABLE IF EXISTS `datos_generales`;

CREATE TABLE `datos_generales` (
  `DGIdDatosGenerales` int(11) NOT NULL AUTO_INCREMENT,
  `DGIdPlantel` int(11) NOT NULL,
  `DGFechaCreacion` varchar(15) NOT NULL,
  `DGCCT` varchar(15) NOT NULL,
  `DGLatitud` float NOT NULL,
  `DGLongitud` float NOT NULL,
  PRIMARY KEY (`DGIdDatosGenerales`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `datos_generales` */

insert  into `datos_generales`(`DGIdDatosGenerales`,`DGIdPlantel`,`DGFechaCreacion`,`DGCCT`,`DGLatitud`,`DGLongitud`) values (1,1,'01/09/1996','15ECB0001S\r\n',19.2513,-99.7459);

/*Table structure for table `directores` */

DROP TABLE IF EXISTS `directores`;

CREATE TABLE `directores` (
  `DIIdDirector` int(11) NOT NULL AUTO_INCREMENT,
  `DIIdPlantel` int(11) NOT NULL,
  `DIFecha` varchar(10) NOT NULL,
  `DIInicio` varchar(254) NOT NULL,
  `DIFin` varchar(254) DEFAULT NULL,
  `DIEstatus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`DIIdDirector`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `directores` */

insert  into `directores`(`DIIdDirector`,`DIIdPlantel`,`DIFecha`,`DIInicio`,`DIFin`,`DIEstatus`) values (1,1,'1996-2000',' Lic. Sergio Becerril Naranjo','',0),(2,1,'2000-2003',' Ing. José Manuel Guevara Arenas','',0),(3,1,'2003-2005',' Lic. David Eugenio Alemán Jasso','',0),(4,1,'2005-2006',' Lic. Fausto José Paniagua Cárdenas',' Lic. David Eugenio Alemán Jasso',0),(5,1,'2006-2008',' Lic. David Eugenio Alemán Jasso','',0),(6,1,'2008-2009',' Lic. Antonio Sotelo Espinoza ',' Lic. Sergio Jaramillo Salgado ',0),(7,1,'2009-2010',' Lic. Sergio Jaramillo Salgado ',' Lic. Omar Chirino Ocampo ',0),(8,1,'2010-2011',' Lic. Omar Chirino Ocampo ',' Dra. Adriana García Munguía ',0),(9,1,'2011-2019',' Dra. Adriana García Munguía ','',1),(10,2,'1996-1997',' Lic. Juan José Maldonado Martínez','',0),(11,2,'1997-1999',' Lic. Sergio Ruíz Bernal','',0),(12,2,'1999-2002',' Ing. Emilio Tovar Pérez','',0),(13,2,'2002-2003',' Ing. Emilio Tovar Pérez/Arq. Hugo Molina Meléndez','',0),(14,2,'2003-2007',' Arq. Hugo Molina Meléndez','',0),(15,2,'2007-2008',' Arq. Hugo Molina Meléndez ',' Lic. Edgardo Moreno Granillo',0),(16,2,'2008-2010',' Lic. Edgardo Moreno Granillo ','',0),(17,2,'2010-2011',' Lic. Edgardo Moreno Granillo ',' M. en E. Amalia Camposortega  Cruz ',0),(18,2,'2011-2016',' M. en E. Amalia Camposortega Cruz ',' Mtro. Luis Welsh Rojas',0),(19,2,'2016-2019',' Dr. Luis Welsh Rojas','',1),(20,3,'1996-1997',' Lic. Miguel Ángel Peña Molina',' M.C.D. Sergio Torres Pacheco',0),(21,3,'1997-2001',' Ing. Bruno Jácome Opoch','',0),(22,3,'2001-2002',' Ing. Hugo Molina Meléndez','',0),(23,3,'2002-2003',' Ing. Hugo Molina Meléndez',' Lic. Ma. Teresa Cruz Patiño',0),(24,3,'2003-2004',' Lic. Ma. Teresa Cruz Patiño',' Ing. Bruno Jácome Opoch',0),(25,3,'2004-2008',' Ing. Bruno Jácome Opoch','',0),(26,3,'2008-2010',' Lic. Graciela Vázquez Valenzuela ','',0),(27,3,'2010-2011',' Lic. Graciela Vázquez Valenzuela ',' C.P. Victorino Méndez Merin ',0),(28,3,'2011-2012',' C.P. Victorino Méndez Merín ','',0),(29,3,'2012-2017',' Ing. Bruno Jácome Opoch','',0),(30,3,'2017-2019',' Biol. Lucero Silvia Juárez Escogido','',1),(31,4,'1996-1997',' Lic. Jorge Machuca Becerra',' Lic. Georgina Contreras Landgrave',0),(32,4,'1997-1998',' Lic. Georgina Contreras Landgrave','',0),(33,4,'1998-2000',' Ing. José Manuel Guevara Arenas','',0),(34,4,'2000-2002',' Q.F.B. Aida Caballero Ayala','',0),(35,4,'2002-2003',' Q.F.B. Aida Caballero Ayala',' Lic. Concepción Valera Espinoza',0),(36,4,'2003-2007',' Lic. Concepción Valera Espinoza','',0),(37,4,'2007-2008',' Lic. Concepción Valera Espinoza ',' Ing. José Benigno Calleros Díaz',0),(38,4,'2008-2009',' Ing. Bruno Jácome Opoch ',' Lic. Javier García Ponce ',0),(39,4,'2009-2012',' Lic. Javier García Ponce ','',0),(40,4,'2012-2017',' Biol. Lucero Silvia Juárez Escogido','',0),(41,4,'2017-2019',' Lic. María Aurora Sánchez Ramírez','',1),(42,5,'1996-1997',' Lic. Carlos E. Rosales Morales/',' Lic. Carlos E. Rosales Morales',0),(43,5,'1996-1997',' Lic.  Valentín J. Iturbide Posadas','',0),(44,5,'1997-1998',' Lic. Carlos E. Rosales Morales','',0),(45,5,'1998-1999',' Lic. Carlos E. Rosales Morales/',' Lic. Valentín Jesús Iturbide Posadas',0),(46,5,'1998-1999',' Lic. Valentín J. Iturbide Posadas','',0),(47,5,'1999-2000',' Lic. Carlos E. Rosales Morales','',0),(48,5,'2000-2002',' Lic. Valentín Jesús Iturbide Posadas','',0),(49,5,'2002-2003',' Lic. Valentín Jesús Iturbide Posadas',' Lic. Nora Rosa Clara Obregón Cruz',0),(50,5,'2003-2004',' Lic. Nora Rosa Clara Obregón Cruz/','',0),(51,5,'2003-2004',' Ing. S.J. Ramón Quijano Álvarez','',0),(52,5,'2004-2005',' Ing. S. J. Ramón Quijano Álvarez ','',0),(53,5,'2005-2006',' Ing. S.J. Ramón Quijano Álvarez ',' C.P. Rita Lucia Reyes Guadarrama',0),(54,5,'2006-2007',' C.P. Rita Lucia Reyes Guadarrama ',' Lic. Omar Chirino Ocampo ',0),(55,5,'2007-2009',' Lic. Omar Chirino Ocampo ','',0),(56,5,'2009-2010',' Lic. Omar Chirino Ocampo ',' Lic. Oscar Flores Domínguez ',0),(57,5,'2010-2013',' Lic. Oscar Flores Domínguez ','',0),(58,5,'2013-2019',' Lic. Juan Casiano Valente ','',1);

/*Table structure for table `eficienciaterminal` */

DROP TABLE IF EXISTS `eficienciaterminal`;

CREATE TABLE `eficienciaterminal` (
  `ETIdEficiencia` int(11) NOT NULL AUTO_INCREMENT,
  `ETIdPlantel` int(11) NOT NULL,
  `ETPeriodo` varchar(12) NOT NULL,
  `ETABS` float NOT NULL,
  `ETPorcentaje` int(11) NOT NULL,
  PRIMARY KEY (`ETIdEficiencia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `eficienciaterminal` */

insert  into `eficienciaterminal`(`ETIdEficiencia`,`ETIdPlantel`,`ETPeriodo`,`ETABS`,`ETPorcentaje`) values (1,1,'1996-1997',50,0),(2,1,'1997-1998',50,0),(3,1,'1998-1999',83,35),(4,1,'1999-2000',84,29),(5,1,'2000-2001',91,36);

/*Table structure for table `egresadosinscritos` */

DROP TABLE IF EXISTS `egresadosinscritos`;

CREATE TABLE `egresadosinscritos` (
  `EIIdEgresados` int(11) NOT NULL AUTO_INCREMENT,
  `EIIdPlantel` int(11) NOT NULL,
  `EIPeriodo` varchar(15) DEFAULT NULL,
  `EIEgresados` int(11) NOT NULL,
  `EIInscritos` int(11) NOT NULL,
  PRIMARY KEY (`EIIdEgresados`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `egresadosinscritos` */

insert  into `egresadosinscritos`(`EIIdEgresados`,`EIIdPlantel`,`EIPeriodo`,`EIEgresados`,`EIInscritos`) values (1,1,'2016-2017',204,120),(2,1,'2017-1018',284,197);

/*Table structure for table `espacios` */

DROP TABLE IF EXISTS `espacios`;

CREATE TABLE `espacios` (
  `ESIdEspacios` int(11) NOT NULL AUTO_INCREMENT,
  `ESIdPlantel` int(11) NOT NULL,
  `ESAulasFormales` int(11) NOT NULL,
  `ESAulasPre` varchar(100) NOT NULL,
  `ESLaboratorios` int(11) NOT NULL,
  `ESTalleres` int(11) NOT NULL,
  `ESBiblioteca` varchar(100) NOT NULL,
  `ESDocentes` int(11) NOT NULL,
  `ESOrientacion` int(11) NOT NULL,
  `ESAdministrativa` int(11) NOT NULL,
  `ESSanitarios` int(11) NOT NULL,
  `ESDeportivas` int(11) NOT NULL,
  PRIMARY KEY (`ESIdEspacios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `espacios` */

insert  into `espacios`(`ESIdEspacios`,`ESIdPlantel`,`ESAulasFormales`,`ESAulasPre`,`ESLaboratorios`,`ESTalleres`,`ESBiblioteca`,`ESDocentes`,`ESOrientacion`,`ESAdministrativa`,`ESSanitarios`,`ESDeportivas`) values (1,1,13,'1 (se usa como cafetería)',3,2,'1 (con CCT)\r\n',1,2,1,3,1);

/*Table structure for table `evaluaciones` */

DROP TABLE IF EXISTS `evaluaciones`;

CREATE TABLE `evaluaciones` (
  `EIdEvaluaciones` int(11) NOT NULL AUTO_INCREMENT,
  `EIdPlantel` int(11) NOT NULL,
  `ESatisfaccion` float NOT NULL,
  `EAspiraciones` int(11) NOT NULL,
  PRIMARY KEY (`EIdEvaluaciones`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `evaluaciones` */

insert  into `evaluaciones`(`EIdEvaluaciones`,`EIdPlantel`,`ESatisfaccion`,`EAspiraciones`) values (1,1,8.4,1);

/*Table structure for table `evaluacionsem` */

DROP TABLE IF EXISTS `evaluacionsem`;

CREATE TABLE `evaluacionsem` (
  `EIdEvaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `EPeriodo` varchar(12) NOT NULL,
  `ETotal` float NOT NULL,
  PRIMARY KEY (`EIdEvaluacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `evaluacionsem` */

/*Table structure for table `indicadores` */

DROP TABLE IF EXISTS `indicadores`;

CREATE TABLE `indicadores` (
  `IIdIndicadores` int(11) NOT NULL AUTO_INCREMENT,
  `IIdPlantel` int(11) NOT NULL,
  `ITurno` int(11) NOT NULL,
  `IGrupos` int(11) NOT NULL,
  `ICobertura` float NOT NULL,
  PRIMARY KEY (`IIdIndicadores`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `indicadores` */

insert  into `indicadores`(`IIdIndicadores`,`IIdPlantel`,`ITurno`,`IGrupos`,`ICobertura`) values (1,1,2,28,9.48);

/*Table structure for table `indiceatencion` */

DROP TABLE IF EXISTS `indiceatencion`;

CREATE TABLE `indiceatencion` (
  `IAId_Indice` int(11) NOT NULL AUTO_INCREMENT,
  `IAIdPlantel` int(11) NOT NULL,
  `IAPeriodo` varchar(12) NOT NULL,
  `IATotal` double NOT NULL,
  PRIMARY KEY (`IAId_Indice`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `indiceatencion` */

insert  into `indiceatencion`(`IAId_Indice`,`IAIdPlantel`,`IAPeriodo`,`IATotal`) values (1,1,'2011-2012',17.02586207),(2,1,'2012-2013',13.57435198),(3,1,'2013-2014',13.57435198),(4,1,'2014-2015',16.3863903),(5,1,'2015-2016',16.22668075),(6,1,'2016-2017',14.8107313),(7,1,'2017-2018',13.3482001),(8,1,'2018-2019',15.4335961);

/*Table structure for table `infraestructura` */

DROP TABLE IF EXISTS `infraestructura`;

CREATE TABLE `infraestructura` (
  `InfIdInfraestructura` int(11) NOT NULL,
  `InfIdPlantel` int(11) NOT NULL,
  `InfIdTerreno` int(11) NOT NULL,
  `InfInstalaciones` varchar(15) NOT NULL,
  `InfSuperficieTerreno` float NOT NULL,
  `InfIdEspacios` int(11) NOT NULL,
  `InfIdVarios` int(11) NOT NULL,
  `InfEspacios1` varchar(15) NOT NULL,
  `InfEspacios2` varchar(15) NOT NULL,
  `InfIdComputo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `infraestructura` */

insert  into `infraestructura`(`InfIdInfraestructura`,`InfIdPlantel`,`InfIdTerreno`,`InfInstalaciones`,`InfSuperficieTerreno`,`InfIdEspacios`,`InfIdVarios`,`InfEspacios1`,`InfEspacios2`,`InfIdComputo`) values (1,1,0,'Propias',20000,0,0,'SI','SI',1);

/*Table structure for table `matiniciocursos` */

DROP TABLE IF EXISTS `matiniciocursos`;

CREATE TABLE `matiniciocursos` (
  `MICId_Mat` int(11) NOT NULL AUTO_INCREMENT,
  `MICIdPlantel` int(11) NOT NULL,
  `MICPeriodo` varchar(12) NOT NULL,
  `MICTotal` float NOT NULL,
  PRIMARY KEY (`MICId_Mat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `matiniciocursos` */

insert  into `matiniciocursos`(`MICId_Mat`,`MICIdPlantel`,`MICPeriodo`,`MICTotal`) values (1,1,'1996-1997',237),(2,1,'1997-1998',398),(3,1,'1998-1999',501),(4,1,'1999-2000',491),(5,1,'2000-2001',600);

/*Table structure for table `matnuevoingreso` */

DROP TABLE IF EXISTS `matnuevoingreso`;

CREATE TABLE `matnuevoingreso` (
  `MNIIdMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `MNIIdPlantel` int(11) NOT NULL,
  `MNIPeriodo` varchar(12) NOT NULL,
  `MNITotal` int(11) NOT NULL,
  PRIMARY KEY (`MNIIdMatricula`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `matnuevoingreso` */

insert  into `matnuevoingreso`(`MNIIdMatricula`,`MNIIdPlantel`,`MNIPeriodo`,`MNITotal`) values (1,1,'1996-1997',237),(2,1,'1997-1998',293),(3,1,'1998-1999',253),(4,1,'1999-2000',245),(5,1,'2000-2001',354);

/*Table structure for table `ofertaeducativa` */

DROP TABLE IF EXISTS `ofertaeducativa`;

CREATE TABLE `ofertaeducativa` (
  `OEIdOferta` int(11) NOT NULL AUTO_INCREMENT,
  `OEIdPlantel` int(11) NOT NULL,
  `OEPeriodo` varchar(11) NOT NULL,
  `OETotal` int(11) NOT NULL,
  PRIMARY KEY (`OEIdOferta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ofertaeducativa` */

insert  into `ofertaeducativa`(`OEIdOferta`,`OEIdPlantel`,`OEPeriodo`,`OETotal`) values (1,1,'2014-2015',445),(2,1,'2015-2016',450),(3,1,'2016-2017',400),(4,1,'2017-2018',450),(5,1,'2018-2019',540),(6,1,'2019-2020',540);

/*Table structure for table `personal` */

DROP TABLE IF EXISTS `personal`;

CREATE TABLE `personal` (
  `PIdPersonal` int(11) NOT NULL AUTO_INCREMENT,
  `PIdPlantel` int(11) NOT NULL,
  `PPeriodo` varchar(12) NOT NULL,
  `PDirectivos` float NOT NULL,
  `PAdministrativos` float NOT NULL,
  `PDocentes` float NOT NULL,
  PRIMARY KEY (`PIdPersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `personal` */

insert  into `personal`(`PIdPersonal`,`PIdPlantel`,`PPeriodo`,`PDirectivos`,`PAdministrativos`,`PDocentes`) values (1,1,'2018-2019',4,28,37);

/*Table structure for table `planea` */

DROP TABLE IF EXISTS `planea`;

CREATE TABLE `planea` (
  `PIdPlanea` int(11) NOT NULL AUTO_INCREMENT,
  `PIdPlantel` int(11) NOT NULL,
  `PMateria` varchar(150) NOT NULL,
  `PPeriodo` varchar(12) NOT NULL,
  `PPorcentaje` float NOT NULL,
  PRIMARY KEY (`PIdPlanea`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `planea` */

insert  into `planea`(`PIdPlanea`,`PIdPlantel`,`PMateria`,`PPeriodo`,`PPorcentaje`) values (1,1,'COMUNICACION I','2015',41.9),(2,1,'COMUNICACION II','2015',23.3),(3,1,'MATEMATICAS I','2015',11.3),(4,1,'MATEMATICAS II','2015',2.2),(5,1,'COMUNICACION I','2016',51.4),(6,1,'COMUNICACION II','2016',91.4),(7,1,'MATEMATICAS I','2016',42.8),(8,1,'MATEMATICAS II','2016',82.8),(9,1,'COMUNICACION I','2017',44.7),(10,1,'COMUNICACION II','2017',20.1),(11,1,'MATEMATICAS I','2017',12.6),(12,1,'MATEMATICAS II','2017',2.6);

/*Table structure for table `planteles` */

DROP TABLE IF EXISTS `planteles`;

CREATE TABLE `planteles` (
  `CPLClave` int(11) NOT NULL AUTO_INCREMENT,
  `CPLNombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CPLCCT` varchar(50) DEFAULT NULL,
  `CPLCorreo_electronico` varchar(255) DEFAULT NULL,
  `CPLCoordinacion` enum('Toluca','Mexico') DEFAULT NULL,
  `CPLMunicipio` int(11) DEFAULT NULL,
  `CPLLocalidad` int(11) DEFAULT NULL,
  `CPLDireccion` varchar(255) DEFAULT NULL,
  `CPLCalle` varchar(255) DEFAULT NULL,
  `CPLYCalle` varchar(255) DEFAULT NULL,
  `CPLColonia` varchar(255) DEFAULT NULL,
  `CPLCP` varchar(20) DEFAULT NULL,
  `CPLTelefono` varchar(25) DEFAULT NULL,
  `CPLTelefono2` varchar(25) DEFAULT NULL,
  `CPLFax` varchar(25) DEFAULT NULL,
  `CPLTurnos` int(11) DEFAULT NULL,
  `CPLComponentes` varchar(100) DEFAULT NULL,
  `CPLLatitud` varchar(25) DEFAULT NULL,
  `CPLLongitud` varbinary(25) DEFAULT NULL,
  `CPLTipo` int(2) NOT NULL,
  `CPLDirector` varchar(50) DEFAULT NULL,
  `CPLUnidad` varchar(150) DEFAULT NULL,
  `CPLActivo` binary(1) NOT NULL DEFAULT '1',
  `CPLUsuario_registro` int(11) DEFAULT NULL,
  `CPLFecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `CPLUsuario_modificacion` int(11) DEFAULT NULL,
  `CPLFecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`CPLClave`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

/*Data for the table `planteles` */

insert  into `planteles`(`CPLClave`,`CPLNombre`,`CPLCCT`,`CPLCorreo_electronico`,`CPLCoordinacion`,`CPLMunicipio`,`CPLLocalidad`,`CPLDireccion`,`CPLCalle`,`CPLYCalle`,`CPLColonia`,`CPLCP`,`CPLTelefono`,`CPLTelefono2`,`CPLFax`,`CPLTurnos`,`CPLComponentes`,`CPLLatitud`,`CPLLongitud`,`CPLTipo`,`CPLDirector`,`CPLUnidad`,`CPLActivo`,`CPLUsuario_registro`,`CPLFecha_registro`,`CPLUsuario_modificacion`,`CPLFecha_modificacion`) values (1,'01 ZINACANTEPEC','15ECB0001S','01zinacantepec@cobaemex.edu.mx','Toluca',118,58,'CALLE BACHILLERES SN','CALZADA AL PACIFICO','','MORELOS','51370','722-1907097','-','722-1907097',2,'CON-INF-QUI-BAS','19.251208','-99.746277',35,'M.C. ADRIANA GARCÍA MUNGUÍA','1','1',NULL,NULL,1,'2020-01-09 17:30:16'),(2,'02 ECATEPEC','15ECB0002R','02ecatepec@cobaemex.edu.mx','Mexico',33,1,'GOBERNADOR ISIDRO FABELA SN','EDUARDO VILLADA','GOB JORGE JIMENEZ CANTU','VILLAS DE GUADALUPE XALOSTOC','55339','575-51438','574-96228','000-0000000',2,'CON-QUI-DIB--INF','19.514289','-99.068153',35,'DR. LUIS WELSH ROSAS','2','1',NULL,NULL,755,'2019-03-04 19:15:14'),(3,'03 CHIMALHUACÁN','15ECB0003Q','03chimalhuacan@cobaemex.edu.mx','Mexico',31,77,'AV VENUSTIANO CARRANZA NO 300','','','SANTA MARÍA ACUITLAPILCO','56330','585-39421','585-24861','000-0000000',2,'CON-INF-QUI-DIB','19.417074','-98.926959',35,'BIÓL. LUCERO SILVIA JUÁREZ ESCOGIDO','3','1',NULL,NULL,755,'2019-02-01 21:25:24'),(4,'04 VALLE DE CHALCO','15ECB0004P','04valledechalco@cobaemex.edu.mx','Mexico',122,1,'AVENIDA HERMENEGILDO GALEANA NO.5','','','MARIA ISABEL','56615','555-9715329','553-0910654','000-0000000',2,'CON-INF-QUI-DIB','19.297181','-98.952951',35,'LIC. MARÍA AURORA SÁNCHEZ RAMÍREZ','4','1',NULL,NULL,3,'2019-01-25 00:52:45'),(5,'05 VALLE DE BRAVO','15ECB0005O','05valledebravo@cobaemex.edu.mx','Toluca',110,136,'PREDIO URBANO EL CANUTILLO LOTE 6','CARLOS GOMEZ ALMAZAN','GARDENIAS','RINCÓN VILLA DEL VALLE','51200','726-2625140','726-2625141','000-0000000',2,'QUI-DIB-INF-CON','19.211709','-100.121904',35,'LIC. JUAN CASIANO VALENTE','5','1',NULL,NULL,3,'2019-01-25 17:34:46'),(6,'06 TOLUCA','15ECB0006N','06tolucanorte@cobaemex.edu.mx','Toluca',106,20,'CALLE DR NICOLÁS SAN JUAN','PIE NEGRO','GANADARIA','La Magdalena','50010','722-2725696','000-0000000','000-0000000',2,'QUI-CON-INF-DIB','19.318573','-99.633474',35,'MTRO. ALFREDO BERNAL SUÁREZ','6','1',NULL,NULL,3,'2019-01-25 17:35:42'),(7,'07 TOLUCA II','15ECB0007M','07tolucasur@cobaemex.edu.mx','Toluca',106,1,'CALLE EMILIANO ZAPATA','INSURGENTES','BENITO JUAREZ','Capultitlan','50260','722-2704200','000-0000000','000-0000000',2,'QUI-CON-DIB-INF','19.248723','-99.674214',35,'ING. JOSÉ MANUEL GUEVARA ARENAS','7','1',NULL,NULL,3,'2019-01-25 17:36:42'),(8,'08 ATLACOMULCO','15ECB0008L','08atlacomulco@cobaemex.edu.mx','Toluca',14,159,'CAMINO A FLOR DE MARÍA','FRACCIONAMIENTO SAN MARTIN','CIRCUITO VIAL JORGE JIMENEZ CANTU','Atlacomulco de Fabela','50450','712-1204405','000-0000000','000-0000000',2,'CON-INF-QUI-DIB','19.785779','-99.875594',35,'LIC. NIDIA FRANCISCA SALAZAR COLÍN','8','1',NULL,NULL,3,'2019-01-25 17:38:10'),(9,'09 HUIXQUILUCAN','15ECB0012Y','09huixquilucan@cobaemex.edu.mx','Mexico',37,13,'BARRIO LOS ALCANFORES SN','LOS JABONES','EL RÍO','La Magdalena Chichicaspa','52773','558-2881567','000-0000000','558-2881567',2,'QUI-CON-DIB-INF','19.408553','-99.319643',35,'MTRO. ALEJANDRO ROSAS ESCALONA','9','1',NULL,NULL,3,'2019-01-25 17:39:06'),(10,'10 ECATEPEC II','15ECB0014W','10ecatepec@cobaemex.edu.mx','Mexico',33,89,'AV.IGNACIO ZARAGOZA S/N','MIGUEL HIDALGO','BOSQUES DE ECATEPEC','VILLAS DE ECATEPEC','55050','555-8381118','000-0000000','000-0000000',2,'QUI-CON-DIB-INF','19.601497','-99.026501',35,'ING. J. GUADALUPE CASTILLO GARCÍA','10','1',NULL,NULL,3,'2019-01-25 17:43:15'),(11,'11 OTUMBA','15ECB0020G','11otumba@cobaemex.edu.mx','Mexico',65,54,'CARRETERA OTUMBA SAN MARCOS S/N','','','EL PABELLON','55900','592-9220921','592-9220900','000-0000000',1,'CON-INF','19.701815','-98.7526',35,'ING. OSCAR VIDAL GARCÍA GONZÁLEZ','11','1',NULL,NULL,3,'2019-01-25 17:44:32'),(12,'12 ALMOLOYA DE JUÁREZ','15ECB0023D','12almoloyadejuarez@cobaemex.edu.mx','Toluca',5,44,'CARRETERA TOLUCA-ZITACUARO KM 14','','','Loma de Juarez','50900','725-1364392','000-0000000','000-0000000',2,'CON-INF','19.335588','-99.788814',35,'MTRO. MIGUEL GONZÁLEZ PLATA','12','1',NULL,NULL,755,'2019-02-01 21:27:53'),(13,'13 CALIMAYA','15ECB0024C','13calimaya@cobaemex.edu.mx','Toluca',18,3,'HIDALGO SN ESQUINA VICENTE FOX','VICENTE FOX','CUARTA PRIVADA DE HIDALGO','SAN ANDRÉS OCOTLAN','52231','722-2631524','722-2631523','000-0000000',2,'CON-INF','19.199215','-99.586494',35,'MTRA. MARÍA MONSERRAT ALMAZÁN PÉREZ','13','1',NULL,NULL,3,'2019-01-25 17:46:31'),(14,'14 JOCOTITLÁN','15ECB0025B','14jocotitlan@cobaemex.edu.mx','Toluca',48,10,'CARRETERA LIBRE TOLUCA ATLACOMULCO KM 35','','','San Francisco Cheje','50728','712-1190144','000-0000000','712-1190152',2,'INF-QUI--CON','19.669334','-99.739382',35,'LIC. CARLOS VALDEZ MACARIO','14','1',NULL,NULL,3,'2019-01-25 17:47:13'),(15,'15 NICOLÁS ROMERO','15ECB0026A','15nicolasromero@cobaemex.edu.mx','Mexico',60,20,'PROLONGACIÓN MORELOS S/N','','','San Jose El Vidrio','54449','558-9940650','000-0000000','000-0000000',2,'CON-INF','18.962678','-99.69879',35,'LIC. MÓNICA DEL ROCÍO GONZÁLEZ VELÁZQUEZ','15','1',NULL,NULL,755,'2019-02-01 21:29:02'),(16,'16 COYOTEPEC','15ECB0027Z','16coyotepec@cobaemex.edu.mx','Mexico',23,1,'CARRETERA A LAS ÁNIMAS S/N','5 DE FEBRERO Y DEPORTIVO ATILANO ORTEGA','TLALPAN','BARRIO IXTAPALCALCO','54660','593-9151545','000-0000000','000-0000000',2,'CON','19.766426','-99.199467',35,'LIC. KARINA SELENE LÓPEZ CRUZ','16','1',NULL,NULL,3,'2019-01-25 18:01:11'),(17,'17 HUIXQUILUCAN II','15ECB0028Z','17huixquilucan@cobaemex.edu.mx','Mexico',37,1,'AVENIDA CAMINO VIEJO A HUIXQUILUCAN N0. 76','','','Constituyentes de 1917','52775','555-2908095','000-0000000','000-0000000',2,'CON-INF','19.416412','-99.276574',35,'MTRO. LUCIO ANTONIO HIDALGO IBAÑEZ','17','1',NULL,NULL,755,'2019-03-04 19:16:25'),(18,'18 IXTAPALUCA','15ECB0029Y','18ixtapaluca@cobaemex.edu.mx','Mexico',39,3,'COLINAS DE LA CONCORDIA ESQ. PASEO DE LAS COLINAS','PASEO DE LAS COLINAS','PASEO DE SAN BUENAVENTURA','UNIDAD HABITACIONAL SAN BUENAVENTURA','56536','552-5927675','000-0000000','000-0000000',2,'CON-INF-QUI','19.301499','-98.862738',35,'ING. BRUNO JÁCOME OPOCH','18','1',NULL,NULL,3,'2019-01-25 18:32:37'),(19,'19 TECÁMAC','15ECB0030N','19tecamac@cobaemex.edu.mx','Mexico',81,116,'CALLE MARIANO ESCOBEDO','FRANCISCO VILLA','AQUILES SERDAN','FRACCIONAMIENTO LOS HEROES TECAMAC','55765','551-3132150','000-0000000','000-0000000',2,'CON-INF-DIB','19.629257','-99.017181',35,'ING. ALEJANDRA DOLORES BECERRIL AGUIÑIGA','19','1',NULL,NULL,755,'2019-02-19 17:46:33'),(20,'20 CHAPA DE MOTA','15ECB0031M','20chapademota@cobaemex.edu.mx','Toluca',26,16,'CARRETERA CHAPA DE MOTA-JILOTEPEC KM 2','','','BARRIO MEFI','54350','588-9923039','000-0000000','000-0000000',1,'QUI-CON-INF','19.829304','-99.537563',35,'LIC. PATRICIA ANTONIO CONTRERAS','20','1',NULL,NULL,3,'2019-01-25 18:38:11'),(21,'21 VILLA GUERRERO','15ECB0032L','21villaguerrero@cobaemex.edu.mx','Toluca',113,20,'PRIV. JOSÉ ADÁN IGNACIO RUBÍ SALAZAR S/N','','','ZACANGO','51783','714-1447937','000-0000000','000-0000000',1,'CON','18.962678','-99.69879',35,'MTRO. JOSÉ DANIEL REYES URRUTIA','21','1',NULL,NULL,3,'2019-01-25 20:38:11'),(22,'22 CHICOLOAPAN','15ECB0033K','22chicoloapan@cobaemex.edu.mx','Mexico',29,1,'CALLE REAL DE LAS FUENTES, MANZANA 41, LOTE 2,','','','San Vicente Chicoloapan de Juarez Centro','56370','555-9242448','000-0000000','000-0000000',2,'CON-INF-QUI-DIB','19.411834','-98.890517',35,'LIC. AGUSTÍN ÁLVAREZ BAUTISTA','22','1',NULL,NULL,755,'2019-02-01 21:31:31'),(24,'24 CHIMALHUACÁN II','15ECB0035I','24chimalhuacan@cobaemex.edu.mx','Mexico',31,1,'PROLONGACIÓN CALLE TALLADORES S/N','EJIDO COLECTIVO','ZINACAPA','BARRIO TLATEL XOCHITENCO','56366','552-6132902','000-0000000','000-0000000',2,'CON-INF-QUI','19.444656','-98.963854',35,'LIC. LAURA ANGÉLICA VARGAS MEDINA','24','1',NULL,NULL,3,'2019-01-25 20:46:27'),(25,'25 TULTITLÁN','15ECB0036H','25tultitlan@cobaemex.edu.mx','Mexico',109,69,'CALLE TLAZALA DE FABELA S/N','METEPEC','MEXICALTZINGO','Solidaridad 3a Seccion','54948','552-5932775','000-0000000','000-0000000',2,'CON-INF','19.601871','-99.148961',35,'LIC. MARÍA DEL PILAR SÁNCHEZ GONZÁLEZ','25','1',NULL,NULL,3,'2019-01-25 20:49:40'),(26,'26 TENANCINGO','15ECB0037G','26tenancingo@cobaemex.edu.mx','Toluca',88,27,'HIDALGO PTE NO 11','PROGRESO','HIDALGO','SAN MIGUEL TECOMATLAN','52425','714-1453366','000-0000000','000-0000000',2,'INF','18.978345','-99.527225',35,'C.D. MIGUEL ANGEL HERNÁNDEZ ESTRADA','26','1',NULL,NULL,3,'2019-01-25 20:53:08'),(27,'27 ACAMBAY','15ECB0038F','27acambay@cobaemex.edu.mx','Toluca',1,37,'DOMICILIO CONOCIDO SN PUEBLO NUEVO','','','PUEBLO NUEVO','50348','712-1599853','712-1686620','000-0000000',1,'INF','19.56169','-99',35,'LIC. SANDRO LEOBARDO SÁNCHEZ RUÍZ','27','1',NULL,NULL,3,'2019-01-25 21:01:14'),(28,'28 ZINACANTEPEC II','15ECB0039E','28zinacantepec@cobaemex.edu.mx','Toluca',118,53,'CERRADA JOSE VICENTE VILLADA  2','HERMENEGILDO GALEANA','AV TENANCINGO','SAN ANTONIO ACAHUALCO','51360','722-3210290','000-0000000','000-0000000',2,'CON','18.98236','-99.530222',35,'LIC. LÁZARA PALMA ESQUIVEL','28','1',NULL,NULL,3,'2019-01-25 21:03:40'),(29,'29 SAN JOSÉ DEL RINCÓN','15ECB0040U','29sanjosedelrincon@cobaemex.edu.mx','Toluca',124,1,'','','','-','-','000-0000000','000-0000000','000-0000000',1,'INF','19.551083','-100.113028',35,'LIC. NELLY GARCÍA MORALES','29','1',NULL,NULL,755,'2019-02-01 21:34:45'),(30,'30 NEZAHUALCÓYOTL','15ECB0041T','30nezahualcoyotl@cobaemex.edu.mx','Mexico',58,80,'PROLONGACIÓN CUARTA AVENIDA','CALLE 8','AVENIDA TEPOZANES','#¿NOMBRE?','57000','000-5441512','000-0000000','000-0000000',2,'INF-CON--QUI','19.39674','-98.983873',35,'DR. JESÚS DANIEL CASTILLO FLORES','30','1',NULL,NULL,3,'2019-01-25 21:11:18'),(31,'31 CHICOLOAPAN II','15ECB0042S','31chicoloapan@cobaemex.edu.mx','Mexico',29,1,'AVENIDA MÉXICO, MANZANA 14, LOTE 1','','','BONITO','56383','01-2289388','000-0000000','000-0000000',2,'CON-QUI-INF','19.407103','-98.897013',35,'LIC. ALEJANDRA LOZANO RAMOS','31','1',NULL,NULL,3,'2019-01-25 21:12:31'),(32,'32 TOLUCA III','15ECB0043R','32tolucasancristobal@cobaemex.edu.mx','Toluca',106,1,'AV SAN JOSÉ GUADALUPE NO 113','REVOLUCIÓN','RICARDO FLORES MAGÓN','SAN CRISTÓBAL HUICHOCHITLÁN','50010','722-1797802','000-0000000','000-0000000',2,'INF-CON','19.344063','-99.619627',35,'LIC. ELIZABETH POSADAS ESQUIVEL','32','1',NULL,NULL,3,'2019-01-25 21:13:33'),(33,'33 HUEHUETOCA','15ECB0044Q','33huehuetoca@cobaemex.edu.mx','Mexico',35,276,'SANTANDER 46','SANTANDER','GALAXIA','#¿NOMBRE?','54680','000-0000000','000-0000000','000-0000000',2,'CON','19.843341','-99.261767',35,'MTRO. FELIPE JESÚS LÓPEZ HERNÁNDEZ','33','1',NULL,NULL,3,'2019-01-25 21:48:56'),(34,'34 VILLA DEL CARBÓN','15ECB0045P','34villadelcarbon@cobaemex.edu.mx','Toluca',112,1,'GUADALUPE VICTORIA SN','ARRIEROS','LOS PINOS','LOS DOMINGUEZ','54300','588-9131234','000-0000000','000-0000000',2,'CON-INF','19.727','-99.474306',35,'ING. CELIA CRUZ ARANA','34','1',NULL,NULL,3,'2019-01-25 21:50:16'),(35,'35 TECÁMAC II','15ECB0046O','35tecamac@cobaemex.edu.mx','Mexico',81,1,'JARDINES BOTANICOS','AV MEXIQUENSE','BULEVAR DE LOS JARDINES','LOS HEROES TECAMAC SECCION JARDINES','55764','497-73626','-','-',2,'CON-INF-QUI','19.635135','-99.039234',35,'MTRO. RODOLFO ALVARADO GÓMEZ','35','1',NULL,NULL,3,'2019-01-25 21:51:04'),(36,'36 VILLA GUERRERO II','15ECB0047N','36.villaguerrero@cobaemex.edu.mx','Toluca',113,22,'ANEXO A LA PARROQUIA','','','SAN JOSE','51760','714-1436011','000-0000000','000-0000000',1,'CON','19.011138','-99.664722',35,'LIC. OMAR CHIRINO OCAMPO','36','1',NULL,NULL,3,'2019-01-25 21:53:36'),(37,'37 NAUCALPAN','15ECB0048M','37naucalpan@cobaemex.edu.mx','Mexico',57,88,'DOMICILIO CONOCIDO','','','SAN FRANCISCO CHIMALPÁ','','558-9080551','-','-',2,'CON','19.441353','99.344713',35,'MTRA. ADRIANA MARIÁ MEZA VILLALBA','37','1',NULL,NULL,3,'2019-01-25 21:54:25'),(38,'38 ACAMBAY II','15ECB0049L','38acambay@cobaemex.edu.mx','Toluca',1,41,'A 200 MTS DELEGACION','A 200 MTS COMEDOR COMUNITARIO','FRENTE A DEPORTIVA','LAS ARENAS','50315','722-2890309','712-1267250','000-0000000',1,'INF','19.986442','-99.728936',35,'LIC. RICARDO DOMÍNGUEZ PEÑA','38','1',NULL,NULL,755,'2019-02-01 21:35:50'),(39,'39 ACOLMAN','15ECB0050A','39acolman@cobaemex.edu.mx','Mexico',2,16,'C SOLIDARIDAD SN','GUSTAVO DIAZ ORDAZ','ADOLFO LOPEZ MATEOS','LA CONCEPCION','55895','594-9581496','000-0000000','000-0000000',1,'CON','19.644096','-98.873608',35,'ING. MA. GUADALUPE MUÑOZ CARRILLO','39','1',NULL,NULL,3,'2019-01-26 01:01:47'),(40,'40 IXTLAHUACA','15ECB0051Z','40ixtlahuaca@cobaemex.edu.mx','Toluca',42,7,'SIN NOMBRE','SIN NOMBRE','A 100 MTS DE LA CALLE PRINCIPAL','SAN CRISTOBAL DE LOS BAÑOS','50754','712-1398550','000-0000000','000-0000000',2,'INF','19.703858','-99.879943',35,'ING. PEDRO VELÁZQUEZ CONTRERAS','40','1',NULL,NULL,755,'2019-02-01 21:36:12'),(41,'41 TEMASCALCINGO','15ECB0052Z','41temascalcingo@cobaemex.edu.mx','Toluca',85,38,'CALLEJON PRINCIPAL SANTIAGO COACHOCHITLAN','CALLEJON PRINCIPAL','FRENTE A LA SECUNDARIA JOSE MA VELASCO','#¿NOMBRE?','50434','718-1274395','718-1274395','000-0000000',1,'INF','19.867889','-100.029444',35,'ING. ROGELIO KURI GONZÁLEZ','41','1',NULL,NULL,3,'2019-01-26 01:08:40'),(42,'42 ZUMPANGO','15ECB0053Y','42zumpango@cobaemex.edu.mx','Mexico',120,41,'CAMINO A SAN BARTOLO NO 5','','','SAN BARTOLO CUAUTLALPAN','55630','591-9158871','000-0000000','000-0000000',2,'CON','19.808109','-99.011081',35,'MTRA. MARIA CONCEPCIÓN BASTIDA BAUTISTA','42','1',NULL,NULL,755,'2019-02-01 21:36:54'),(43,'43 TEXCOCO','15ECB0054X','43texcoco@cobaemex.edu.mx','Mexico',99,29,'PROLONGACION 5 DE FEBRERO SN','5 DE FEBRERO','CAMINO A LA EX HACIENDA DE TEPETITLAN','SAN MIGUEL COATLINCHAN','56250','000-0000000','000-0000000','000-0000000',2,'INF','19.43497','-98.863143',35,'MTRA. GRACIELA VÁZQUEZ VALENZUELA','43','1',NULL,NULL,755,'2019-02-01 21:37:17'),(44,'44 TLALMANALCO','15ECB0055W','44tlalmanalco@cobaemex.edu.mx','Mexico',103,40,'PROL PREDREGRAL DE SANTA CRUZ NO 1','CARRETERA TLALMANALCO SAN RAFAEL','NACIONAL PONIENTE','SAN JUAN ATZACUALOYA','56720','597-9758202','556-6750415','556-8040028',2,'CON','19.207328','-98.785704',35,'ING. JESÚS HERNÁNDEZ ROSAS','44','1',NULL,NULL,755,'2019-02-01 21:37:57'),(45,'45 CALIMAYA II','15ECB0056V','45calimaya@cobaemex.edu.mx','Toluca',18,20,'VICENTE GUERRERO NO 10','21 C','SI NOMBRE','ZARAGOZA DE GUADALUPE','52210','722-1719076','000-0000000','000-0000000',2,'CON','19.144916','-99.645583',35,'ING. JULIO GONZÁLEZ GALVÁN','45','1',NULL,NULL,3,'2019-01-26 01:16:46'),(46,'46 XONACATLÁN','15ECB0057U','46xonacatlan@cobaemex.edu.mx','Toluca',115,12,'AGUSTIN YAÑEZ','SAN PEDRO','AV GUSTAVO BAZ','BO DE SAN PEDRO SAN MIGUEL MIMIAPAN','52074','722-4289623','722-6066964','000-0000000',1,'CON','19.449981','-99.466601',35,'LIC. CARLOS GOZÁLEZ SANTILLÁN','46','1',NULL,NULL,755,'2019-02-01 21:38:59'),(47,'47 TENANGO','15ECB0058T','47tenango@cobaemex.edu.mx','Toluca',90,6,'CAMINO VIEJO A TENANCINGO','CARRETERA TENANGO TENACINGO','','PARAJE LA CHICALOTA','52350','717-1042453','-','-',1,'CON','19.058614','-99.604392',35,'LIC. ENRIQUE ENRÍQUEZ PALACIOS','47','1',NULL,NULL,755,'2019-02-01 21:39:19'),(23,'23 ECATEPEC III','15ECB0034J','23ecatepec@cobaemex.edu.mx','Mexico',33,1,'FELIPE VAQUERO ESQ OTILIO MONTAÑO SIN NUM','GENERAL EMILIANO ZAPATA','TIERRA Y LIBERTAD','LA ESPERANZA','55519','551-5400370','000-0000000','551-5400370',2,'CON-INF-QUI','19.56659','-99.086472',35,'ING. JAIME MONTES RODRÍGUEZ ','23','1',NULL,NULL,3,'2019-01-25 20:44:22'),(48,'48 JILOTZINGO','15ECB0060H','48jilotzingo@cobaemex.edu.mx','Mexico',46,1,'9 DE SEPTIEMBRE SN','FRENTE DEPORTIVO BODO','','SANTA ANA','54570','558-9969439','000-0000000','000-0000000',2,'INF','19.528674','-99.411285',35,'MTRA. LILIA RANGEL PAREDES','48','1',NULL,NULL,3,'2019-01-26 01:20:06'),(49,'49 EL ORO','15ECB0061G','49eloro@cobaemex.edu.mx','Toluca',64,95,'CAMINO AL PANTEÓN S/N','','','Tapaxco','50630','711-1251214','712-1825363','000-0000000',1,'INF','19.791499','-100.045333',35,'LIC. JOSUÉ ISRAEL BELLO GARCÍA','49','1',NULL,NULL,755,'2019-02-01 22:32:39'),(50,'50 HUEYPOXTLA','15ECB0059S','50hueypoxtla@cobaemex.edu.mx','Mexico',36,9,'CARRETERA AJOLOAPAN NOPALA S/N','FRENTE A LA UNIDAD DEPORTIVA','','SAN MIGUEL TEPETATES','55679','015-9124784','-','-',2,'INF','19.962354','-99.03754',35,'LIC. ALFREDO ORTÍZ HERNÁNDEZ','50','1',NULL,NULL,3,'2019-01-26 01:24:09'),(51,'51 MORELOS','15ECB0062F','51morelos@cobaemex.edu.mx','Toluca',56,6,'E DIAZ NAVA','','','SAN LORENZO MALACOTA','50574','712-1271513','000-0000000','000-0000000',1,'INF','19.613166','-99.78275',35,'LIC. JESÚS SANTILLANA PASTRANA','51','1',NULL,NULL,3,'2019-01-26 01:26:32'),(52,'52 AXAPUSCO','15ECB0063E','52axapusco@cobaemex.edu.mx','Mexico',16,1,'AV GREGORIO AGUILAR SUR SN','','','#¿NOMBRE?','-5594','592-9228121','000-0000000','000-0000000',1,'INF','19.71932','-98.758362',35,'ING. ADÁN MURILLO ORTEGA','52','1',NULL,NULL,3,'2019-01-26 01:27:15'),(53,'53 COATEPEC HARINAS','15ECB0064D','53coatepecharinas@cobaemex.edu.mx','Toluca',21,1,'SEGUNDA DE SANTA ANA','','','-','-','723-1450803','000-0000000','000-0000000',1,'INF','18.937805','-99.776028',35,'MTRA. MARIEL PRIMAVERA BUENDÍA TAMARIZ','53','1',NULL,NULL,755,'2019-02-01 22:34:32'),(54,'54 TEOLOYUCAN','15ECB0065C','54teoloyucan@cobaemex.edu.mx','Mexico',91,33,'AVENIDAD REFORMA SN','LOS PINOS','INDUSTRIA','AXALPA','-','593-9142740','045-6466690','000-0000000',2,'CON-QUI','19.737341','-99.175421',35,'MTRO. JOSÉ ALFONSO ANGELES GUTIÉRREZ','54','1',NULL,NULL,755,'2019-02-01 22:35:01'),(55,'55 TOLUCA IV','15ECB0066B','55toluca@cobaemex.edu.mx','Toluca',106,12,'20 DE NOVIEMBRE SIN NUMERO','','','SAN MARTIN TOLTEPEC','50285','722-2265935','000-0000000','000-0000000',2,'CON','19.347272','-99.665847',35,'C.P. MIGUEL ÁNGEL PINEDA ORTEGA','55','1',NULL,NULL,3,'2019-01-26 01:31:00'),(56,'56 IXTAPALUCA II','15ECB0067A','56ixtapaluca@cobaemex.edu.mx','Mexico',39,14,'HACIENDA LA ESCONDIDA SIN NUMERO','AV LA COTERA','AV VALPARAISO','GEOVILLAS DE SANTA BARBARA','56530','552-6385241','0','0',1,'CON','19.299772','-98.90304',35,'LIC. JOSÉ LUIS MARTÍNEZ RAMÍREZ','56','1',NULL,NULL,3,'2019-01-26 01:32:00'),(57,'57 JALTENCO','15ECB0068Z','57jaltenco@cobaemex.edu.mx','Mexico',44,33,'QUEBRADA SN','PENINSULA','ISLA','ALBORADA JALTENCO','55070','551-3337936','55-15486022','000-0000000',2,'CON','19.66111','-99.068225',35,'ING. PABLO ALEJANDRO ALVARADO RODRÍGUEZ','57','1',NULL,NULL,755,'2019-02-01 22:39:10'),(58,'58 JIQUIPILCO','15ECB0069Z','58jiquipilco@cobaemex.edu.mx','Toluca',47,10,'SIN CALLE','','','EJIDO LOMA DE MALACOTA','50800','000-0000000','000-0000000','000-0000000',1,'INF','19.657076','-99.668931',35,'MTRO. ELFEGO FLORES CLEMENT','58','1',NULL,NULL,3,'2019-01-26 01:33:52'),(59,'59 ZUMPAHUACÁN','15ECB0070O','59zumpahuacan@cobaemex.edu.mx','Toluca',119,7,'GUERRERO SN','GUERRERO','','SAN GASPAR','51980','000-000000','000-000000','000-0000000',1,'INF','18.770564','-99.547245',35,'MTRA. BEATRIZ VÁZQUEZ VELÁZQUEZ','59','1',NULL,NULL,755,'2019-02-01 22:40:11'),(60,'60 TEMOAYA','15ECB0071N','60temoaya@cobaemex.edu.mx','Toluca',87,1,'','','','-','-','719-1021007','722-4260555','000-0000000',1,'CON-INF--QUI','19.436611','-99.580833',35,'M. V. Z. JORGE EMILIO GUTIÉRREZ LEGORRETA','60','1',NULL,NULL,755,'2019-02-01 22:40:43'),(61,'61 TEOTIHUACÁN','15ECB0072M','61teotihuacan@cobaemex.edu.mx','Mexico',92,1,'ZAMUDIO','ESQUINA TLATELES','PREDIO AYAPANGO','SAN LORENZO TLALMIMILOLPAN','55837','55-3075486','55-2245825','000-0000000',1,'CON','19.667605','-98.87172',35,'ING. KARIM TRISTAN GUILLERMO OROZCO ','61','1',NULL,NULL,3,'2019-01-26 01:42:52'),(62,'62 MELCHOR OCAMPO','15ECB0073L','62melchorocampo@cobaemex.edu.mx','Mexico',53,1,'PLAZA MORELOS S/N','','','Tenopalco','54892','55-7811486','000-0000000','000-0000000',1,'CON','19.712996','-99.116873',35,'LIC. ROCIO JIMÉNEZ CUREÑO','62','1',NULL,NULL,755,'2019-02-01 22:42:30'),(63,'63 VILLA VICTORIA','15ECB0074K','63cuadrillavieja@cobaemex.edu.mx','Toluca',114,6,'SIN CALLE Y SIN NUMERO','PRINCIPAL','PRINCIPAL','CUADRILLA VIEJA','50994','722-3924747','000-0000000','000-0000000',1,'INF','19.434013','-99.994327',35,'LIC. KARINA AGUILAR ESQUIVEL','63','1',NULL,NULL,3,'2019-01-26 01:45:41'),(64,'64 AMANALCO','15ECB0075J','64amanalco@cobaemex.edu.mx','Toluca',7,11,'CARRETERA TOLUCA - AMANALCO  VALLE DE BRAVO','A UN COSTADO DEL AUDITORIO DE SAN BARTOLO','FRENTE A LA ANTENA DE TELCEL','Amanalco de Becerra','51260','726-1032099','000-0000000','726-1032099',1,'INF','19.254309','-100.0195',35,'LIC. MARYLÚ CALIXTO ADÁN','64','1',NULL,NULL,3,'2019-01-26 01:47:06'),(65,'65 MORELOS II','15ECB00761I','65morelos@cobaemex.edu.mx','Toluca',56,7,'AVENIDA PRINCIPAL','VIALIDAD IXTLAHUACA JILOTEPEC','VIALIDAD ATLACOMULCO VILLA DEL CARBON','San Marcos Tlazalpan','50582','712-1226082','000-0000000','712-1226082',1,'INF','0','0',35,'C.P. ROSA ISELA SÁNCHEZ GARCÍA','65','1',NULL,NULL,1,'2019-01-31 18:35:01'),(66,'66 TEMASCALCINGO II','15ECB0077H','66temascalcingo@cobaemex.edu.mx','Toluca',85,1,'AV. FELIPE DE JESUS CHAPARRO','ALFREDO DEL MAZO','ADOLFO LOPEZ MATEOS','CENTRO','50400','718-1260527','000-0000000','718-1260527',1,'INF-CON','19.913694','-100.008111',35,'ING. JOSÉ ANTONIO CRUZ IBARRA','66','1',NULL,NULL,3,'2019-01-26 01:50:17'),(67,'67 ACULCO','15ECB0078G','67aculco@cobaemex.edu.mx','Toluca',3,28,'CARRETERA ACULCO EL ROSAL KM 10','','','Centro Urbano','50360','712-1389325','000-0000000','-',1,'INF','20.096301','-99.803908',35,'MTRO. EFRAÍN MARTÍNEZ LÓPEZ','67','1',NULL,NULL,3,'2019-01-26 01:51:11'),(68,'68 SOYANIQUILPAN','15ECB0079F','68soyanaquilpan@cobaemex.edu.mx','Toluca',79,18,'CARRETERA A SAN JUAN DAXTHI KM 4.3','JESUS GONZALEZ ORTEGA','CARRETERA A SANTA CRUZ','SAN JOSE DEGUEDO','54296','55-19349467','773-1077101','55-19349467',1,'INF','20.074272','-99.55244',35,'MTRA. BEATRIZ CORREA MARTÍNEZ','68','1',NULL,NULL,3,'2019-01-26 01:52:15'),(69,'02 IXTAPAN DEL ORO','15EMS0002Y','02ixtapandeloro@cobaemex.edu.mx','Toluca',41,1,NULL,'','','LA PITIRERA','','726-2682124','55-21344189','000-0000000',1,'INF','19.261407','-100.2651',36,'LIC. MAYRA JANET COLIN MARIN','69','1',NULL,NULL,755,'2019-02-05 16:17:55'),(70,'03 EL SALITRE PALMARILLOS','15EMS0001Z','03elsalitrepalma@cobaemex.edu.mx','Toluca',8,1,NULL,'','','','','722-4711663','722-1516849','000-0000001',1,'INF','18.722217','-100.288642',36,'LIC. ELOY VELÁZQUEZ FRANCISCO','70','1',NULL,NULL,755,'2019-02-05 16:18:58'),(71,'04 CAÑADAS DE NANCHITITLA','15EMS0003X','04canadas@cobaemex.edu.mx','Toluca',123,1,NULL,'','','CENTRO ','','722-4667653','722-4299844','000-0000002',1,'INF','18.863618','-100.454292',36,'LIC. JOSÉ LUIS VENCES TAPIA','71','1',NULL,NULL,755,'2019-02-05 16:19:10'),(72,'05 SAN FRANCISCO OXTOTILPAN','15EMS0006U','05sanfrancisco@cobaemex.edu.mx','Toluca',86,1,NULL,'','','','','722-2941575','722-1197405','000-0000003',1,'INF','19.169345','-99.905575',36,'Q.F.B. ERNESTO  MARTÍNEZ MALVAEZ','72','1',NULL,NULL,755,'2019-02-05 16:19:19'),(73,'06 SAN SIMÓN DE LA LAGUNA','15EMS0007T','06sansimonlaguna@cobaemex.edu.mx','Toluca',32,1,NULL,'','','SAN SIMÓN DE LA LAGUNA','','722-4701759','722-3917602','000-0000004',1,'INF','19.291201','-100.080351',36,'LIC. ÁLVARO GUADARRAMA ÁVILA','73','1',NULL,NULL,755,'2019-02-05 16:19:27'),(74,'07 SAN JUAN ATZINGO','15EMS0005V','07sanjuanatzingo@cobaemex.edu.mx','Toluca',63,1,NULL,'','','','','722-1033591','000-0000000','000-0000005',1,'INF','18.985314','-99.425421',36,'LIC. LAURA ADRIANA PALOMARES NORIEGA','74','1',NULL,NULL,755,'2019-02-05 16:19:39'),(75,'10 TEXCAPILLA','15EMS0011F','10texcapilla@cobaemex.edu.mx','Toluca',97,1,NULL,'','','','','722-1245278','722-2434838','000-0000006',1,'INF','17.978733','-97.736564',36,'T.S.U. JOSÉ FRANCISO ROMERO SAMANO','75','1',NULL,NULL,755,'2019-02-05 16:19:46'),(76,'12 SAN MIGUEL TOTOLMALOYA','15EMS0012E','12sanmiguel@cobaemex.edu.mx','Toluca',80,30,'NO APLICA','','','CENTRO','51645','000-0000000','000-0000000','000-0000000',1,'INF','18.636944','-99.978611',36,'LIC. NEZAHUALCÓYOTL ROJAS CASTAÑEDA','76','1',NULL,NULL,755,'2019-02-05 16:19:56'),(77,'14 SAN ANDRÉS NICOLÁS BRAVO','15EMS0014C','14sanandres@cobaemex.edu.mx','Toluca',52,1,NULL,'','','MELCHOR OCAMPO','','722-1757463','777-1828145','000-0000008',1,'INF','18.766399','-99.466623',36,'T.S.U. JORGE SANTIAGO QUINTERO','77','1',NULL,NULL,755,'2019-02-05 16:20:05'),(78,'15 SAN SIMÓN ZOZOCOLTEPEC','15EMS0017Z','15sansimon@cobaemex.edu.mx','Toluca',8,1,NULL,'','','','','716-1618101','722-1553892','000-0000009',1,'INF','18.742954','-100.170603',36,'MTRO. JOSÉ SALVADOR BENÍTEZ JAIMES','78','1',NULL,NULL,755,'2019-02-05 16:20:14'),(79,'17 SAN AGUSTIN CITLALLI','15EMS0018Z','17sanagustin@cobaemex.edu.mx','Toluca',5,1,NULL,'','','','','722-4111286','722-4588513','000-0000010',1,'INF','19.480335','-99.802357',36,'LIC. FABIOLA VALDEZ ORTÍZ','79','1',NULL,NULL,755,'2019-02-05 16:20:22'),(80,'18 BOSENCHEVE LOMA DE JUÁREZ','15EMS0015B','18bosencheve@cobaemex.edu.mx','Toluca',111,14,'AV LAZARO CARDENAS SN','','','BO LA JOYA LOMA DE JUAREZ','51000','722-1118979','000-0000000','000-0000011',1,'INF','19.427328','-100.089684',36,'LIC. JAICIDY BUENDÍA ZARZA','80','1',NULL,NULL,755,'2019-02-05 16:20:30'),(81,'20 SAN JUAN XOCONUSCO','15EMS0022L','20xoconusco@cobaemex.edu.mx','Toluca',32,1,NULL,'','','','','722-2487598','000-0000000','000-0000012',1,'INF','19.311944','-100.398131',36,'ING. JOSÉ FERNANDO HERNÁNDEZ ZÁRATE','81','1',NULL,NULL,755,'2019-02-05 16:21:12'),(82,'22 ENTHAVI','15EMS0023K','22enthavi@cobaemex.edu.mx','Toluca',87,1,NULL,'','','','','722-4985976','551-4868606','000-0000013',1,'INF','19.498014','-99.582502',36,'LIC. JOSÉ JUAN GARCÍA  NAVA','82','1',NULL,NULL,755,'2019-02-05 16:21:33'),(83,'23 MAYALTEPEC','15EMS0024J','23mayaltepec@cobaemex.edu.mx','Toluca',105,1,NULL,'','','','','722-4119058','722-3480749','000-0000014',1,'INF','18.58227','-100.369673',36,'ING. PAULINO PAGAZA MARTÍNEZ','83','1',NULL,NULL,755,'2019-02-05 16:21:44'),(100,'DIRECCIÓN GENERAL','DIRGEN','colegio.bachilleres@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'100','1',NULL,NULL,NULL,NULL),(101,'UNIDAD JURÍDICA','DIRGEN','unidad.juridica@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','','',37,NULL,'101','1',NULL,NULL,NULL,NULL),(102,'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS','DIRAREA','dir.administracion@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'102','1',NULL,NULL,NULL,NULL),(103,'DEPARTAMENTO DE RECURSOS MATERIALES Y SERVICIOS GENERALES','DEPTO','recursos.materiales@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'102','1',NULL,NULL,NULL,NULL),(104,'DEPARTAMENTO DE RECURSOS HUMANOS','DEPTO','recursos.humanos@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'102','1',NULL,NULL,NULL,NULL),(105,'DEPARTAMENTO DE PRESUPESTO Y CONTABILIDAD ','DEPTO','depto.contabilidad@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'102','1',NULL,NULL,NULL,NULL),(106,'DEPARTAMENTO DE INFORMÁTICA','DEPTO','informatica@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'102','1',NULL,NULL,NULL,NULL),(107,'DIRECCIÓN DE PLANEACIÓN Y EVALUACIÓN INSTITUCIONAL','DIRAREA','direccion.planeacion@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'107','1',NULL,NULL,NULL,NULL),(108,'DEPARTAMENTO DE PLANEACIÓN Y PROGRAMACIÓN','DEPTO','depto.planeacion@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'107','1',NULL,NULL,NULL,NULL),(109,'DEPARTAMENTO DE ESTADÍSTICA Y EVALUACIÓN ','DEPTO','depto.estadistica@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'107','1',NULL,NULL,NULL,NULL),(110,'DEPARTAMENTO DE ORGANIZACIÓN, INNOVACIÓN Y CALIDAD','DEPTO','depto.innovacion@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'107','1',NULL,NULL,NULL,NULL),(111,'DIRECCIÓN ACADÉMICA','DIRAREA','direccion.academica@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'111','1',NULL,NULL,NULL,NULL),(112,'DEPARTAMENTO DE CONTROL ESCOLAR','DEPTO','control.escolar@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'111','1',NULL,NULL,NULL,NULL),(113,'DEPARTAMENTO DE DOCENCIA Y ORIENTACION EDUCATIVA','DEPTO','docencia.orientacion@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'111','1',NULL,NULL,NULL,NULL),(114,'DEPARTAMENTO DE DIFUSIÓN, EXTENSIÓN Y VINCULACIÓN ','DEPTO','difusion.extension@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'111','1',NULL,NULL,NULL,NULL),(115,'COORDINACIÓN DE ZONA VALLE DE MÉXICO','DIRAREA','coordinacion.mexico@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'115','1',NULL,NULL,NULL,NULL),(116,'COORDINACIÓN DE ZONA VALLE DE TOLUCA','DIRAREA','coordinacion.toluca@cobaemex.edu.mx',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 102','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50080','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'116','1',NULL,NULL,NULL,NULL),(117,'ALMACEN GENERAL','DEPTO','',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 103','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50081','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'103','1',NULL,NULL,NULL,NULL),(118,'SECRETARIA PARTICULAR','DEPTO','',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 104','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50082','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'100','1',NULL,NULL,NULL,NULL),(119,'SUBDIRECCION ACADEMICA','DEPTO','',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 105','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50083','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'111','1',NULL,NULL,NULL,NULL),(120,'CONTRALORIA INTERNA','DEPTO','',NULL,106,16,'SEGUNDA PRIVADA DE LA LIBERTAD  No. 106','MIGUEL HIDALGO','MIGUEL HIDALGO','LA MERCED','50084','722-2260450','722-2260451','722-2260452',1,'','0','0',37,NULL,'120','1',NULL,NULL,NULL,NULL);

/*Table structure for table `proginfraestructura` */

DROP TABLE IF EXISTS `proginfraestructura`;

CREATE TABLE `proginfraestructura` (
  `PIIdPrograma` int(11) NOT NULL AUTO_INCREMENT,
  `PIIdPlantel` int(11) NOT NULL,
  `PIPrograma` varchar(1000) DEFAULT NULL,
  `PIMeta` varchar(1000) DEFAULT NULL,
  `PIMonto` double(11,2) DEFAULT NULL,
  PRIMARY KEY (`PIIdPrograma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `proginfraestructura` */

insert  into `proginfraestructura`(`PIIdPrograma`,`PIIdPlantel`,`PIPrograma`,`PIMeta`,`PIMonto`) values (1,1,'PROGRAMA DE INFRAESTRUCTURA 2011\r\n','SALÓN AUDIOVISUAL\r\n',1588626.18),(2,1,'PROGRAMA DE INFRAESTRUCTURA 2015','REHABILITACIÓN DE MÓDULOS SANITARIOS',596160.00),(3,1,'FAM POTENCIADO 2016\r\n','\"REHABILITACIÓN DE MÓDULOS SANITARIOS\nIMPERMEABILIZACIÓN\"\r\n',678100.00);

/*Table structure for table `proyeccionmat` */

DROP TABLE IF EXISTS `proyeccionmat`;

CREATE TABLE `proyeccionmat` (
  `PMIdProyeccion` int(11) NOT NULL AUTO_INCREMENT,
  `PMIdPlantel` int(11) NOT NULL,
  `PMPeriodo` varchar(12) NOT NULL,
  `PMTotal` double NOT NULL,
  PRIMARY KEY (`PMIdProyeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `proyeccionmat` */

insert  into `proyeccionmat`(`PMIdProyeccion`,`PMIdPlantel`,`PMPeriodo`,`PMTotal`) values (1,1,'2019-2020',1259.94),(2,1,'2020-2021',987),(3,1,'2021-2022',985),(4,1,'2022-2023',994),(5,1,'2023-2024',989.5),(6,1,'2024-2025',991.75),(7,1,'2025-2026',990.625);

/*Table structure for table `terreno` */

DROP TABLE IF EXISTS `terreno`;

CREATE TABLE `terreno` (
  `TIdTerreno` int(11) NOT NULL AUTO_INCREMENT,
  `TIdPlantel` int(11) NOT NULL,
  `TOrganismo` varchar(1000) DEFAULT NULL,
  `TMunicipio` varchar(1000) DEFAULT NULL,
  `TNaturaleza` varchar(1000) DEFAULT NULL,
  `TAntecedentes` varchar(1000) DEFAULT NULL,
  `TSituacion` varchar(1000) DEFAULT NULL,
  `TAccion` varchar(1000) DEFAULT NULL,
  `TInstancia` varchar(1000) DEFAULT NULL,
  `TRecursos` varchar(1000) DEFAULT NULL,
  `TObservaciones` varchar(1000) DEFAULT NULL,
  `TClaveCatastral` varchar(1000) DEFAULT NULL,
  `TSuperficieConstruida` varchar(1000) DEFAULT NULL,
  `TSuperficieTerreno` varchar(1000) DEFAULT NULL,
  `TValor` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`TIdTerreno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `terreno` */

insert  into `terreno`(`TIdTerreno`,`TIdPlantel`,`TOrganismo`,`TMunicipio`,`TNaturaleza`,`TAntecedentes`,`TSituacion`,`TAccion`,`TInstancia`,`TRecursos`,`TObservaciones`,`TClaveCatastral`,`TSuperficieConstruida`,`TSuperficieTerreno`,`TValor`) values (1,1,'\"COBAEM \nPLANTEL 01 Zinacantepec\n \nCalle Bachilleres, Esq. Calzada al Pacífico, Km. 10.3. s/n.  Col. Morelos, localidad San Juan de las Huertas, Zinacantepec, Méx.\n\"','Zinacantepec\r\n','Dominio público, destinado a un servicio público\r\n','Convenio Interinstitucional celebrado entre el Organismo Público Descentralizado denominado \"Servicios Educativos Integrados al Estado de México\" y el \"Colegio de Bachilleres del Estado de México\", de fecha 22 de octubre de 1996\r\n','La propiedad del inmueble es ostentada por SEIEM\r\n',' ',' ',' ','A través  del oficio 205N10200/013/2002 de fecha 06 de junio de 2002, se solicitó a SEIEM la donación formal del terreno, dando respuesta mediante el oficio 205C1/115/2002 de fecha 17 de junio de 2002, la negativa ante dicha solicitud, derivado a lo establecido por su Ley de Creación; ratificando la continuación del uso gratuito del inmueble.\r\n','NO SE TIENE DATO\r\n','NO SE TIENE DATO\r\n','20,000 m2  aproximadamente \r\n','NO SE TIENE DATO\r\n');

/*Table structure for table `varios` */

DROP TABLE IF EXISTS `varios`;

CREATE TABLE `varios` (
  `VAIdVarios` int(11) NOT NULL AUTO_INCREMENT,
  `VAIdPlantel` int(11) NOT NULL,
  `VAAulasExistentes` int(11) NOT NULL,
  `VAAulasUso` int(11) NOT NULL,
  `VALaboratorios` int(11) NOT NULL,
  `VATalleres` int(11) NOT NULL,
  PRIMARY KEY (`VAIdVarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `varios` */

insert  into `varios`(`VAIdVarios`,`VAIdPlantel`,`VAAulasExistentes`,`VAAulasUso`,`VALaboratorios`,`VATalleres`) values (1,1,13,13,3,2);

/*Table structure for table `vecaccion` */

DROP TABLE IF EXISTS `vecaccion`;

CREATE TABLE `vecaccion` (
  `CACClave` int(11) NOT NULL AUTO_INCREMENT,
  `CACDescripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `CACModulo` int(11) NOT NULL,
  `CACDetalle` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`CACClave`),
  UNIQUE KEY `CACModulo_CACDescripcion` (`CACModulo`,`CACDescripcion`),
  CONSTRAINT `fk_TCAccion_modulo` FOREIGN KEY (`CACModulo`) REFERENCES `vecmodulo` (`CMOClave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `vecaccion` */

insert  into `vecaccion`(`CACClave`,`CACDescripcion`,`CACModulo`,`CACDetalle`) values (1,'INDEX',1,'Página principal de acceso'),(2,'INDEX',2,'Vista permisos para los roles'),(4,'INDEX',3,'Vista de los Usuarios'),(5,'SAVE',3,'Guardar usuarios'),(6,'DELETE',3,'Eliminar usuarios'),(7,'PLANTEL',3,'Consultar listado de planteles'),(25,'ACTUALIZAR ',3,'Actualizar Información del Usuario'),(104,'UPDATE',2,'Guardar los permisos'),(105,'SAVE_ACCION',2,'Guardar nueva acción para un modulo'),(106,'DELETE_ACCION',2,'Eliminar la acción del modulo'),(107,'SAVE_MODULO',2,'Guardar un nuevo modulo de permisos'),(110,'INDEX',21,'Página principal de plantel'),(111,'SAVE',21,'Guardar los cambios del plantel'),(112,'DELETE',21,'Eliminar plantel'),(113,'INFO',21,'Muestra la información y datos del Plantel'),(115,'INDEX',22,'Página principal de reportes'),(116,'INDEX',23,'Página principal de cambiar'),(117,'SAVE',23,'Cambiar de usuario'),(118,'INDEX',24,'Página principal de director'),(119,'INDEX',25,'Página principal de infraestructura'),(120,'PROGRAMA',25,'Mostrar el programa de infraestructura'),(121,'TERRENO',25,'Mostrar el terreno de Infraestructura'),(122,'ESPACIOS',25,'Muestra información de los espacios en infraestructura'),(123,'AULAS',25,'Mostrar las aulas en infraestructura'),(124,'COMPUTO',25,'Mostrar el equipo de computo de infraestructura'),(125,'INDEX',26,'Página principal de indicadores'),(126,'OFERTA',26,'Muestra los indicadores de Oferta Educativa'),(127,'MATRICULA',26,'Muestra los indicadores de matricula por periodo'),(128,'INDICE',26,'Muestra los indicadores del indice de atención '),(129,'CURSOS',26,'muestra el indicador de Matrícula de Inicio de Cursos'),(130,'EFICIENCIA',26,'Muestra los Indicadores de eficiencia Eficiencia Terminal   '),(131,'APROBACION',26,'Muestra los indicadores del aprobación'),(132,'ABANDONO',26,'Muestra los indicadores del indice de abandono escolar'),(133,'EGRESADOS',26,'Muestra los indicadores de Egresados e Inscritos en Nivel Superior'),(134,'PLANEA',26,'Muestra los indicadores del Comparativo PLANEA por turno y área de competencia (NIVELES III y IV)'),(135,'COSTO',26,'Muestra los indicadores del \r\nCosto por Alumno por ejercicio fiscal '),(136,'PROYECCIONES',26,'Muestra los indicadores de \r\nProyección de Matrícula por Periodo ');

/*Table structure for table `vecmodulo` */

DROP TABLE IF EXISTS `vecmodulo`;

CREATE TABLE `vecmodulo` (
  `CMOClave` int(11) NOT NULL AUTO_INCREMENT,
  `CMODescripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`CMOClave`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `vecmodulo` */

insert  into `vecmodulo`(`CMOClave`,`CMODescripcion`) values (1,'DASHBOARD'),(2,'PERMISOS'),(3,'USUARIOS'),(21,'PLANTEL'),(22,'REPORTES'),(23,'CAMBIAR'),(24,'DIRECTOR'),(25,'INFRAESTRUCTURA'),(26,'INDICADORES');

/*Table structure for table `vecpermiso` */

DROP TABLE IF EXISTS `vecpermiso`;

CREATE TABLE `vecpermiso` (
  `CPEAccion` int(11) NOT NULL,
  `CPERol` int(11) NOT NULL,
  PRIMARY KEY (`CPEAccion`,`CPERol`),
  KEY `FK_adqcpermiso` (`CPERol`),
  CONSTRAINT `FK_adqcpermiso` FOREIGN KEY (`CPERol`) REFERENCES `vecrol` (`CROClave`),
  CONSTRAINT `fk_TCPermiso_accion` FOREIGN KEY (`CPEAccion`) REFERENCES `vecaccion` (`CACClave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `vecpermiso` */

insert  into `vecpermiso`(`CPEAccion`,`CPERol`) values (1,1),(1,2),(1,3),(2,1),(4,1),(5,1),(6,1),(7,1),(25,1),(104,1),(105,1),(106,1),(107,1),(110,1),(111,1),(112,1),(113,1),(115,1),(116,1),(117,1),(118,1),(119,1),(120,1),(121,1),(122,1),(123,1),(124,1),(125,1),(126,1),(127,1),(128,1),(129,1),(130,1),(131,1),(132,1),(133,1),(134,1),(135,1),(136,1);

/*Table structure for table `vecrol` */

DROP TABLE IF EXISTS `vecrol`;

CREATE TABLE `vecrol` (
  `CROClave` int(11) NOT NULL AUTO_INCREMENT,
  `CRODescripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`CROClave`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `vecrol` */

insert  into `vecrol`(`CROClave`,`CRODescripcion`) values (1,'root'),(2,'Administrador'),(3,'Estadistica');

/*Table structure for table `veusuario` */

DROP TABLE IF EXISTS `veusuario`;

CREATE TABLE `veusuario` (
  `UNCI_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `UClave_servidor` varchar(20) DEFAULT NULL,
  `UNombre` varchar(100) NOT NULL,
  `UApellido_pat` varchar(100) DEFAULT NULL,
  `UApellido_mat` varchar(100) DEFAULT NULL,
  `UFoto` varchar(255) DEFAULT './fotos/avatar.png',
  `UFondo` varchar(255) DEFAULT './fotos/default.jpg',
  `UCorreo_electronico` varchar(60) NOT NULL,
  `UContrasena` varchar(128) NOT NULL,
  `UPlantel` int(5) DEFAULT NULL,
  `URol` int(10) NOT NULL DEFAULT '4',
  `UCargo` varchar(255) DEFAULT NULL,
  `UTelefono` varchar(20) DEFAULT NULL,
  `UEstado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Inactivo',
  `UCodigo_activacion` varchar(10) DEFAULT NULL,
  `UCambiar_contrasena` varchar(180) DEFAULT NULL,
  `UUltimo_acceso` datetime DEFAULT NULL,
  `UFecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `UUsuario_registro` int(10) NOT NULL,
  `UUsuario_modificacion` int(10) DEFAULT NULL,
  `UFecha_modificacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `USeguridad` binary(1) DEFAULT '0',
  PRIMARY KEY (`UNCI_usuario`),
  KEY `FK_adqusuario` (`URol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `veusuario` */

insert  into `veusuario`(`UNCI_usuario`,`UClave_servidor`,`UNombre`,`UApellido_pat`,`UApellido_mat`,`UFoto`,`UFondo`,`UCorreo_electronico`,`UContrasena`,`UPlantel`,`URol`,`UCargo`,`UTelefono`,`UEstado`,`UCodigo_activacion`,`UCambiar_contrasena`,`UUltimo_acceso`,`UFecha_registro`,`UUsuario_registro`,`UUsuario_modificacion`,`UFecha_modificacion`,`USeguridad`) values (1,'00783','JOSÉ LUIS','LINO','ROJAS','./fotos/1-UFotopzyvi6tY.png','./fotos/1-UFondoIAUEtDgl.jpg','jose.luis1212@hotmail.com','9671fee2853034f6485ec95669c1bbfab58505b58543c5ef49ae51eb05cfaa4b87d6f69e4b2fca69756fd5ccca3f1670d162640fe0da642753844bd8e71ff899',106,1,'Jefe de Materia ','0000000000','Activo',NULL,'TCkvtPwKgcjobwWU-MK~17ZYKvCFHjWghtdzhf6~~szcBaqntXaGszNV6agXOZE8dvs7KKqORpkqQqHUTo~dwQ__','2020-01-20 09:37:42','2017-02-17 11:06:36',1,1,'2020-01-20 09:37:42','1'),(2,'00794','FRANCISCO','GUTIERREZ','SEBASTIAN','./fotos/3-UFototx418GNg.jpg','./fotos/3-UFondoCGVUpkb6.jpg','ciscogtzs@gmail.com','2e6e1b4cd47e6bea270572262d41ff9e102bc1ee015145665104781d0047f3b9946b5f57a3a77700d055845c01c80258ca077f446dd2bc882af878021db7dd16',106,1,'Administrador','7228264322','Activo',NULL,'ZQLc8tL1aRpFSivNO9DrJEK2j11DzTZUnlqwdAYQstE481stVq8zeg7eh8sf18pgW6bTkL06vEy04c91g3yIcA__','2019-06-14 09:28:22','0000-00-00 00:00:00',1,1,'2020-01-09 17:20:36','1'),(3,'627','ELI','ELI','ELI','./fotos/avatar.png','./fotos/default.jpg','lizy.bp@gmail.com','dad37b9e43a47e398f823530708c3092479365e1a5999d07276a04f52cfeac83a1b1456be6341b790a7855c50027c53d0749b0789cfdcfde6f977a4236406446',106,1,'Super Jefa',NULL,'Activo',NULL,NULL,'2020-01-15 17:29:11','2020-01-14 14:46:08',1,NULL,'2020-01-15 17:29:11','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
