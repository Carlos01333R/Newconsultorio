/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - curn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`curn` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `curn`;

/*Table structure for table `asesor` */

DROP TABLE IF EXISTS `asesor`;

CREATE TABLE `asesor` (
  `id` varchar(20) NOT NULL,
  `codigo_asesor` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `fecha_naciento` date DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `profesion` varchar(200) DEFAULT NULL,
  `estudios` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `asesor` */

insert  into `asesor`(`id`,`codigo_asesor`,`nombre`,`correo`,`contrasena`,`categoria`,`sexo`,`fecha_naciento`,`telefono`,`direccion`,`profesion`,`estudios`) values 
('1007126302','asesorcurn','carlos rodriguez','crodrigueza21@curnvirtual.edu.co','123456','asesoria','masculino','2001-04-09','35452150','olaya-fredonia','abogado','abogado, egresada de la Universidad de Cartagena. Actualmente se desempeña como Docente Asesor Consultorio Jurídico Área Familia y Casa de Justicia Country. Es especialista en Derecho de Familia, de la Universidad Externado de Colombia y la Universidad de Cartagena.'),
('1445522014','asesorcurn','andres avila','carlosrodriguezanavila0@gmail.com','cpey1nxn','gestion de proyectos','masculino','2000-06-15','3205576260','manga sector laguito','abogado','abogado, egresada de la Universidad de Cartagena. Actualmente se desempeña como Docente Asesor Consultorio Jurídico Área Familia y Casa de Justicia Country. Es especialista en Derecho de Familia, de la Universidad Externado de Colombia y la Universidad de Cartagena.'),
('54411185','asesorcurn','felipe lozano','carlosanavila0@gmail.com','carlos','asesoria','masculino','2003-07-12','5471522525','centro','abogado','abogado, egresado de la curn');

/*Table structure for table `consultas` */

DROP TABLE IF EXISTS `consultas`;

CREATE TABLE `consultas` (
  `correo` varchar(100) DEFAULT NULL,
  `radicado` varchar(50) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(1000) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `proyecto` varchar(200) DEFAULT NULL,
  `archivo_nombre` varchar(255) DEFAULT NULL,
  `archivo_ruta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`radicado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `consultas` */

insert  into `consultas`(`correo`,`radicado`,`fecha`,`asunto`,`estado`,`profesion`,`categoria`,`proyecto`,`archivo_nombre`,`archivo_ruta`) values 
('carlosrodriguezanavila0@gmail.com','281857','2024-04-15 12:11:54','el barca es el  va hacer el campeon de esta campions','RESPONDIDA','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','302973','2024-04-15 09:36:08','prueba consulta de gestion de proyectos','RESPONDIDA','docente','gestion de proyectos','Consultorio Empresarial','anteproyecto.docx','../../docs/anteproyecto.docx'),
('carlosrodriguezanavila0@gmail.com','402353','2024-04-15 00:00:00','prueba emprendimiento','SIN RESPONDER','estudiante','emprendimiento','','','../../docs/'),
('carlos013@gmail','427146','2024-04-15 20:34:52','ii3i3i3','RESPONDIDA','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','656778','2024-04-15 12:52:07','estamos en la epoca del año donde hacer mucha calor','RESPONDIDA','estudiante','asesoria','','','../../docs/'),
('vanessayelidza2015@hotmail.com','703392','2024-04-15 09:40:09','prueba desde otro correo en la categoria asesoria','RESPONDIDA','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','864707','2024-04-15 00:00:00','prueba consultoria','SIN RESPONDER','docente','Consultoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','908882','2024-04-15 20:25:48','esto es una prueba de test','RESPONDIDA','estudiante','gestion de proyectos','test de prueba','actividad tabla de frecuencia.xlsx','../../docs/actividad tabla de frecuencia.xlsx');

/*Table structure for table `respuestas` */

DROP TABLE IF EXISTS `respuestas`;

CREATE TABLE `respuestas` (
  `correo` varchar(100) DEFAULT NULL,
  `radicado` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(1000) DEFAULT NULL,
  `estado` varchar(2000) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `proyecto` varchar(200) DEFAULT NULL,
  `archivo_nombre` varchar(255) DEFAULT NULL,
  `archivo_ruta` varchar(255) DEFAULT NULL,
  KEY `radicado` (`radicado`),
  CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`radicado`) REFERENCES `consultas` (`radicado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `respuestas` */

insert  into `respuestas`(`correo`,`radicado`,`fecha`,`asunto`,`estado`,`profesion`,`categoria`,`proyecto`,`archivo_nombre`,`archivo_ruta`) values 
('carlosrodriguezanavila0@gmail.com','302973','2024-04-15 09:32:03','prueba consulta de gestion de proyectos','prueba de gestión de proyecto recibida y contestada','docente','gestion de proyectos','Consultorio Empresarial','anteproyecto.docx','../../docs/anteproyecto.docx'),
('vanessayelidza2015@hotmail.com','703392','2024-04-15 09:37:38','prueba desde otro correo en la categoria asesoria','consulta respondida con exito','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','281857','2024-04-15 12:09:54','el barca es el  va hacer el campeon de esta campions','exactamente el barce es el proximo campion','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','656778','2024-04-15 12:42:29','estamos en la epoca del año donde hacer mucha calor','prueba de url','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','908882','2024-04-15 20:23:47','esto es una prueba de test','prueba de test superada','estudiante','gestion de proyectos','test de prueba','actividad tabla de frecuencia.xlsx','../../docs/actividad tabla de frecuencia.xlsx'),
('carlos013@gmail','427146','2024-04-15 20:34:34','ii3i3i3','respuesta prueba','estudiante','asesoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','864707','2024-04-15 21:16:42','prueba consultoria','SIN RESPONDER','docente','Consultoria','','','../../docs/'),
('carlosrodriguezanavila0@gmail.com','402353','2024-04-15 21:16:55','prueba emprendimiento','SIN RESPONDER','estudiante','emprendimiento','','','../../docs/');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` varchar(12) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `fecha_naciento` date DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`correo`,`fecha_naciento`,`sexo`,`direccion`,`contrasena`,`telefono`) values 
('1007126302','carlos','carlosrodriguezanavila0@gmail.com','2001-04-09','masculino','fredonia','cpey1nxn','3205576260'),
('1111111111','yelidza batista','vanessayelidza2015@hotmail.com','2002-05-18','mujer','paraiso','loka','333333333'),
('22233322','felipe andres','carlos013@gmail','2000-05-04','hombre','palmeras','1234567','6555420'),
('23827181','vanesa torres','fmf72549@zbock.com','2000-12-31','mujer','americas','123456','3505421652'),
('4815228','yelidza batista','vanessayelidza2015@hotmail.com','2002-08-18','mujer','americas','22222','310245202'),
('6272272','carlos andres rodriguez avila','carlosanavila0@gmail.com','2001-04-09','Hombre','olaya-fredonia','123456','38328');

/* Trigger structure for table `consultas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insertar_respuesta_despues_insert_consulta` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `insertar_respuesta_despues_insert_consulta` AFTER INSERT ON `consultas` FOR EACH ROW 
BEGIN
    -- Insertar datos en la tabla respuestas
    INSERT INTO respuestas (correo, radicado, fecha, asunto, estado, profesion, categoria, proyecto, archivo_nombre, archivo_ruta)
    VALUES (NEW.correo, NEW.radicado, NOW(), NEW.asunto, new.estado, NEW.profesion, NEW.categoria, NEW.proyecto, NEW.archivo_nombre, NEW.archivo_ruta );
END */$$


DELIMITER ;

/* Trigger structure for table `respuestas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `actualizar_estado_consultas_despues_update` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `actualizar_estado_consultas_despues_update` AFTER UPDATE ON `respuestas` FOR EACH ROW 
BEGIN
    -- Verificar si el campo estado ha cambiado
    IF OLD.estado <> NEW.estado THEN
        -- Actualizar el campo estado en la tabla consultas
        UPDATE consultas
        SET estado = 'RESPONDIDA', fecha = NOW()
        WHERE radicado = NEW.radicado; -- Suponiendo que 'radicado' es el campo que relaciona las tablas
    END IF;
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
