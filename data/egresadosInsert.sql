-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: egresados
-- ------------------------------------------------------
-- Server version	5.7.16



--
-- Dumping data for table `egresados`
--

LOCK TABLES `egresados` WRITE;
/*!40000 ALTER TABLE `egresados` DISABLE KEYS */;
INSERT INTO `egresados` VALUES (1,'2312','m','342','effdsf','01312','dad','asdasd','2016-10-17','2016-10-17','2016-10-17','2016-10-17 21:27:09',NULL);
/*!40000 ALTER TABLE `egresados` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Dumping data for table `encuestas`
--

LOCK TABLES `encuestas` WRITE;
/*!40000 ALTER TABLE `encuestas` DISABLE KEYS */;
INSERT INTO `encuestas` VALUES (1,1,'INSTRUMENTO DE EVALUACION PARA EL SEGUIMIENTO DE EGRESADOS DE LA ESCUELA DE INGENIERIA DE SISTEMAS',NULL,'2016-10-29 05:07:56'),(2,1,'test 1','2016-10-17 01:52:03','2016-10-17 01:52:03');
/*!40000 ALTER TABLE `encuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'¿Cuál es su máximo grado académico?',1,1,'2016-10-17 06:34:35','2016-10-29 05:18:04',7),(2,'Estudios de posgrado en otras instituciones:',1,1,'2016-10-17 07:09:49','2016-10-29 05:18:59',8),(3,'Como egresado, ¿En qué porcentaje estima que la EAPIS cubrió sus expectativas?',1,1,'2016-10-17 07:23:35','2016-10-29 05:19:24',10),(4,'¿Recomendaría la formación que ofrece la EAPIS?',1,1,'2016-10-17 15:06:09','2016-10-29 05:20:18',11),(5,'Valore los diferentes componentes del Plan de Estudios de la EAPIS',1,1,'2016-10-17 21:16:59','2016-10-29 05:21:24',12),(6,'De la lista que se describen a continuación, ¿En qué nivel de formación considera usted que desarrollo durante su carrera las siguientes competencias?',1,1,'2016-10-29 05:23:32','2016-10-29 05:23:32',13),(7,'¿Qué nivel de impacto tuvo el servicio social de bienestar universitario (movilidad interna, comedor universitario, entre otros) para el desarrollo de sus actividades profesionales?',1,1,'2016-10-29 05:26:21','2016-10-29 05:26:21',14),(8,'¿Trabaja actualmente?',1,1,'2016-10-29 05:27:18','2016-10-29 05:27:18',15),(9,'Si su respuesta es negativa favor de pasar a la siguiente pregunta. Si cuenta con más de un empleo, considerar el más reciente y aquel que se relaciona más con sus estudios profesionales desarrollados en la EAPIS.   ¿Cuánto tiempo después de egresado?',1,1,'2016-10-29 05:30:42','2016-10-29 05:34:46',16),(10,' Si NO trabaja actualmente, ¿A qué causas lo atribuye?',1,1,'2016-10-29 05:41:19','2016-10-29 05:41:19',17),(11,'Si trabaja actualmente, ¿A qué medios recurrió para conseguir empleo?',1,1,'2016-10-29 05:41:58','2016-10-29 05:41:58',18),(12,'Tiempo de dedicación en el empleo',1,1,'2016-10-29 05:42:25','2016-10-29 05:42:25',19),(13,'El empleo que tiene, ¿En qué nivel considera que se relaciona con su carrera?',1,1,'2016-10-29 05:42:53','2016-10-29 05:44:03',20),(14,'Cual es su percepción mensual aproximado según el siguiente rango.',1,1,'2016-10-29 05:44:24','2016-10-29 05:44:24',21),(15,'¿A qué grupo de la actividad económica pertenece la empresa o institución en la cual labora?',1,1,'2016-10-29 05:44:52','2016-10-29 05:44:52',22),(16,'¿En qué sector laboral se encuentra? (seleccione solo un sector y la opción que le corresponda)',1,1,'2016-10-29 05:45:21','2016-10-29 05:45:21',23),(17,'Por parte de usted, ¿Qué nivel de satisfacción tiene con respecto a su trabajo?',1,1,'2016-10-29 05:45:40','2016-10-29 05:45:40',24),(18,'¿Ha sido alguna vez promovido de puesto?',1,1,'2016-10-29 05:46:05','2016-10-29 05:46:05',25),(19,'Si es así, ¿Cuáles fueron los factores que determinaron su promoción?',1,1,'2016-10-29 05:46:37','2016-10-29 05:46:37',26),(20,' ¿Pertenece a un Colegio Profesional?',1,1,'2016-10-29 05:46:57','2016-10-29 05:46:57',27),(21,'¿Esta certificado por un Colegio Profesional?',1,1,'2016-10-29 05:47:21','2016-10-29 05:47:21',28),(22,'¿Cuál es su apreciación en relación a las oportunidades laborales para desempeñarse profesionalmente en el Perú?',1,1,'2016-10-29 05:47:41','2016-10-29 05:47:41',29),(23,'De acuerdo a su experiencia, jerarquice las siguientes estrategias que pudieran adoptarse para que la formación académica este más acorde a la realidad del campo laboral, donde el número uno es el más importante y el número cuatro es el menos importante.',1,1,'2016-10-29 05:48:29','2016-10-29 05:48:29',31),(24,'¿Cuáles son sus recomendaciones para fortalecer la relación con sus egresados? (Seleccione las tres de su preferencia)',1,1,'2016-10-29 05:48:53','2016-10-29 05:48:53',32),(25,'¿En qué nivel considera que su formación académica responde a las exigencias y necesidades de un mercado laboral globalizado?',1,1,'2016-10-30 23:46:22','2016-10-30 23:46:22',30),(26,'Actualmente, ¿Cuál es su situación académica?',1,1,'2016-10-31 05:44:14','2016-10-31 05:44:14',6),(27,'Cuál es su modalidad de Titulación ?',1,1,'2016-10-31 05:48:15','2016-10-31 05:48:15',6.1),(28,'Cuales son las causas por la cual no se ha titulado ?',1,1,'2016-10-31 05:49:03','2016-10-31 05:49:03',6.2);
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `alternativas` WRITE;
/*!40000 ALTER TABLE `alternativas` DISABLE KEYS */;
INSERT INTO `alternativas` VALUES (1,1,'Posdoctorado (PhD) ',1,NULL,'2016-10-29 05:51:20',0),(2,1,'Doctor',1,NULL,'2016-10-29 05:52:38',0),(3,1,'Magister',1,'2016-10-17 21:00:12','2016-10-29 05:52:54',0),(4,1,'Bachiller',1,'2016-10-17 21:03:19','2016-10-29 05:53:19',0),(5,1,'later 001',2,'2016-10-17 21:28:44','2016-10-17 21:28:44',0),(6,1,'0 %',3,'2016-10-29 05:58:24','2016-10-29 06:01:15',0),(7,1,'25 %',3,'2016-10-29 05:59:58','2016-10-29 05:59:58',0),(8,1,'50 %',3,'2016-10-29 06:01:03','2016-10-29 06:01:03',0),(9,1,'75%',3,'2016-10-29 06:02:28','2016-10-29 06:02:28',0),(10,1,'100',3,'2016-10-29 06:02:38','2016-10-29 06:02:38',0),(11,1,'SI',4,'2016-10-29 06:05:07','2016-10-29 06:05:07',0),(12,1,'No',4,'2016-10-29 06:05:24','2016-10-29 06:05:24',0),(13,1,'0%',7,'2016-10-29 06:07:40','2016-10-29 06:07:40',0),(14,1,'20%',7,'2016-10-29 06:08:10','2016-10-29 06:08:10',0),(15,1,'40%',7,'2016-10-29 06:08:24','2016-10-29 06:08:24',0),(16,1,'60 %',7,'2016-10-29 06:09:02','2016-10-29 06:09:02',0),(17,1,'80%',7,'2016-10-29 06:09:25','2016-10-29 06:09:37',0),(18,1,'100 %',7,'2016-10-29 06:09:56','2016-10-29 06:09:56',0),(19,1,'Mantener constante comunicación',24,'2016-10-30 22:54:20','2016-10-30 22:54:20',0),(20,1,'Establecer vinculación a través de convenios de participación con empresas donde laboran egresados universitarios',24,'2016-10-30 22:54:46','2016-10-30 22:54:46',0),(21,1,'Fomentar estadías de catedráticos en las empresas vinculadas',24,'2016-10-30 22:55:06','2016-10-30 22:55:06',0),(22,1,'Invitarlos a cursos de actualización y capacitación',24,'2016-10-30 22:55:48','2016-10-30 22:55:48',0),(23,1,'Convocarlos a eventos para compartir experiencias y hacer sugerencias',24,'2016-10-30 22:56:41','2016-10-30 22:56:41',0),(24,1,'Fortalecer la bolsa de trabajo',24,'2016-10-30 22:56:59','2016-10-30 22:56:59',0),(25,1,'Contar con una red social oficial',24,'2016-10-30 22:57:51','2016-10-30 22:57:51',0),(26,1,'A través de la reactivación de la Fundación de Egresados',24,'2016-10-30 22:58:09','2016-10-30 22:58:09',0),(27,1,'Actualización de los contenidos',23,'2016-10-30 23:41:30','2016-10-30 23:41:30',0),(28,1,'Reducir el número de materias teóricas',23,'2016-10-30 23:41:49','2016-10-30 23:41:49',0),(29,1,'Incrementar las horas de laboratorio',23,'2016-10-30 23:42:04','2016-10-30 23:42:04',0),(30,1,'Modernizar la infraestructura de laboratorios',23,'2016-10-30 23:42:23','2016-10-30 23:42:23',0),(31,1,'Enfatizar con casos prácticos los contenidos de las materias',23,'2016-10-30 23:42:42','2016-10-30 23:42:42',0),(32,1,'Complementar y enriquecer los contenidos de los cursos con conferencias, talleres, seminarios, congresos, etc.',23,'2016-10-30 23:43:01','2016-10-30 23:43:01',0),(33,1,'0 %',25,'2016-10-30 23:47:01','2016-10-30 23:47:01',0),(34,1,'20 %',25,'2016-10-30 23:47:19','2016-10-30 23:47:19',0),(35,1,'40 %',25,'2016-10-30 23:47:34','2016-10-30 23:47:34',0),(36,1,'60 %',25,'2016-10-30 23:47:47','2016-10-30 23:47:47',0),(37,1,'80 %',25,'2016-10-30 23:48:00','2016-10-30 23:48:00',0),(38,1,'100 %',25,'2016-10-30 23:48:12','2016-10-30 23:48:12',0),(39,1,' Excelente',22,'2016-10-30 23:49:55','2016-10-30 23:49:55',0),(40,1,'Buena',22,'2016-10-30 23:50:14','2016-10-30 23:50:14',0),(41,1,'Regular',22,'2016-10-30 23:50:33','2016-10-30 23:50:33',0),(42,1,'Insatisfactoria',22,'2016-10-30 23:51:02','2016-10-30 23:51:02',0),(43,1,'Si',21,'2016-10-30 23:55:05','2016-10-30 23:55:05',0),(44,1,'No',21,'2016-10-30 23:55:18','2016-10-30 23:55:18',0),(45,1,'Si ¿Cuál?',20,'2016-10-31 00:22:39','2016-10-31 00:22:39',1),(46,1,'No',20,'2016-10-31 00:22:51','2016-10-31 00:22:51',0),(47,1,'La continua preparación académica ',19,'2016-10-31 00:34:05','2016-10-31 00:34:05',0),(48,1,'Relaciones Humanas',19,'2016-10-31 00:34:14','2016-10-31 00:34:14',0),(49,1,'Cursos y seminarios de actualización ',19,'2016-10-31 00:34:29','2016-10-31 00:34:29',0),(50,1,'Antigüedad en el puesto',19,'2016-10-31 00:34:42','2016-10-31 00:34:42',0),(51,1,'Conocimiento de la empresa ',19,'2016-10-31 00:34:59','2016-10-31 00:34:59',0),(52,1,'Otro',19,'2016-10-31 00:35:16','2016-10-31 00:35:16',1),(53,1,'Si ',18,'2016-10-31 01:26:17','2016-10-31 01:26:17',0),(54,1,'No',18,'2016-10-31 01:26:30','2016-10-31 01:26:30',0),(55,1,'0 % ',17,'2016-10-31 01:58:42','2016-10-31 01:58:42',0),(56,1,'20 %',17,'2016-10-31 01:58:53','2016-10-31 01:58:53',0),(57,1,'40 %',17,'2016-10-31 01:59:06','2016-10-31 01:59:06',0),(58,1,'60 %',17,'2016-10-31 01:59:19','2016-10-31 01:59:19',0),(59,1,'80 %',17,'2016-10-31 01:59:30','2016-10-31 01:59:30',0),(60,1,'100 %',17,'2016-10-31 01:59:41','2016-10-31 01:59:41',0),(61,1,'Sector público ',16,'2016-10-31 02:01:10','2016-10-31 02:01:10',0),(62,1,'Sector privado ',16,'2016-10-31 02:01:28','2016-10-31 02:01:28',0),(63,1,'Profesional independiente',16,'2016-10-31 02:01:44','2016-10-31 02:01:44',0),(64,1,'Organismo No Gubernamental',16,'2016-10-31 02:01:58','2016-10-31 02:01:58',0),(65,1,'Otro',16,'2016-10-31 02:02:11','2016-10-31 02:02:11',1),(66,1,'Primaria (Extractivo, agricultura, pesca, ganadería, minería)',15,'2016-10-31 02:04:29','2016-10-31 02:04:29',0),(67,1,'Secundaria (Industrial, manufactura, transformación)',15,'2016-10-31 02:04:44','2016-10-31 02:04:44',0),(68,1,'Terciaria (Servicio, comercio, educativo, gobierno, salud)',15,'2016-10-31 02:04:59','2016-10-31 02:04:59',0),(69,1,'Menos de S/.1,500',14,'2016-10-31 02:25:44','2016-10-31 02:25:44',0),(70,1,'De S/.1,500 a S/.3,000',14,'2016-10-31 02:26:01','2016-10-31 02:26:01',0),(71,1,'De S/.3,000 a S/.5,000',14,'2016-10-31 02:26:17','2016-10-31 02:26:17',0),(72,1,'De S/.5,000 a S/.10,000',14,'2016-10-31 02:26:32','2016-10-31 02:26:32',0),(73,1,'Más de S/.10,000',14,'2016-10-31 02:26:48','2016-10-31 02:26:48',0),(74,1,'0 %',13,'2016-10-31 02:28:31','2016-10-31 02:28:31',0),(75,1,'20 %',13,'2016-10-31 02:28:42','2016-10-31 02:28:42',0),(76,1,'40 %',13,'2016-10-31 02:28:53','2016-10-31 02:28:53',0),(77,1,'60 %',13,'2016-10-31 02:29:07','2016-10-31 02:29:07',0),(78,1,'80 %',13,'2016-10-31 02:29:22','2016-10-31 02:29:22',0),(79,1,'100 %',13,'2016-10-31 02:29:37','2016-10-31 02:29:37',0),(80,1,'Tiempo completo',12,'2016-10-31 02:34:04','2016-10-31 02:34:04',0),(81,1,'Medio tiempo',12,'2016-10-31 02:34:22','2016-10-31 02:34:22',0),(82,1,'Por horas',12,'2016-10-31 02:34:38','2016-10-31 02:34:38',0),(83,1,'Freelance',12,'2016-10-31 02:34:53','2016-10-31 02:34:53',0),(84,1,'Bolsa de trabajo en Internet',11,'2016-10-31 02:35:53','2016-10-31 02:35:53',0),(85,1,'Grupos de Interés y Redes Sociales',11,'2016-10-31 02:36:13','2016-10-31 02:36:13',0),(86,1,'Bolsa de trabajo de la Facultad',11,'2016-10-31 02:36:29','2016-10-31 02:36:29',0),(87,1,'Recomendación familiar o de amigos',11,'2016-10-31 02:36:45','2016-10-31 02:36:45',0),(88,1,'A través de las prácticas profesionales',11,'2016-10-31 02:37:01','2016-10-31 02:37:01',0),(89,1,'Otro',11,'2016-10-31 02:37:13','2016-10-31 02:37:13',1),(90,1,'No cumple con sus expectativas',10,'2016-10-31 02:56:27','2016-10-31 02:56:27',0),(91,1,'Aun no tengo el grado de Bachiller',10,'2016-10-31 02:56:43','2016-10-31 02:56:43',0),(92,1,'Aun no tengo el Titulo',10,'2016-10-31 02:57:01','2016-10-31 02:57:01',0),(93,1,'Estoy estudiando posgrado',10,'2016-10-31 02:57:19','2016-10-31 02:57:19',0),(94,1,'Dedico tiempo a la titulación',10,'2016-10-31 02:57:36','2016-10-31 02:57:36',0),(95,1,'Por cuestiones familiares',10,'2016-10-31 02:57:56','2016-10-31 02:57:56',0),(96,1,'Falta de experiencia laboral',10,'2016-10-31 02:58:32','2016-10-31 02:58:32',0),(97,1,'Por no dominar el idioma inglés',10,'2016-10-31 02:58:47','2016-10-31 02:58:47',0),(98,1,'Otro',10,'2016-10-31 02:59:40','2016-10-31 02:59:40',1),(99,1,'Ya contaba con empleo',9,'2016-10-31 03:02:01','2016-10-31 03:02:01',0),(100,1,'Menos de 6 meses',9,'2016-10-31 03:02:16','2016-10-31 03:02:16',0),(101,1,'De 6 a 9 meses',9,'2016-10-31 03:02:34','2016-10-31 03:02:34',0),(102,1,'De 6 a 12 meses',9,'2016-10-31 03:02:52','2016-10-31 03:02:52',0),(103,1,'Más de un año',9,'2016-10-31 03:03:05','2016-10-31 03:03:05',0),(104,1,'Otro',9,'2016-10-31 03:03:17','2016-10-31 03:03:17',1),(105,1,'Si ',8,'2016-10-31 03:04:36','2016-10-31 03:04:36',0),(106,1,'No',8,'2016-10-31 03:04:56','2016-10-31 03:04:56',0),(107,1,'Titulado',26,'2016-10-31 05:44:47','2016-10-31 05:44:47',0),(108,1,'No Titulado ',26,'2016-10-31 05:45:09','2016-10-31 05:45:24',0),(109,1,'Tesis',27,'2016-10-31 05:49:44','2016-10-31 05:49:44',0),(110,1,'Programa de Titulación Extraordinaria',27,'2016-10-31 05:49:59','2016-10-31 05:49:59',0),(111,1,'Examen de Suficiencia',27,'2016-10-31 05:50:11','2016-10-31 05:50:11',0),(112,1,'Ninguno',27,'2016-10-31 05:50:24','2016-10-31 05:50:24',0),(113,1,'Tesis se encuentra en proceso',28,'2016-10-31 05:50:54','2016-10-31 05:50:54',0),(114,1,'Falta de asesoría o preparación',28,'2016-10-31 05:51:07','2016-10-31 05:51:07',0),(115,1,'Falta de tiempo',28,'2016-10-31 05:51:25','2016-10-31 05:51:25',0),(116,1,'Por problemas financieros',28,'2016-10-31 05:51:43','2016-10-31 05:51:43',0),(117,1,'Por cuestiones familiares',28,'2016-10-31 05:51:56','2016-10-31 05:51:56',0),(118,1,'Otro',28,'2016-10-31 05:52:07','2016-10-31 05:52:07',0);
/*!40000 ALTER TABLE `alternativas` ENABLE KEYS */;
UNLOCK TABLES;