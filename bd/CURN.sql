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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `asesor` */

insert  into `asesor`(`id`,`codigo_asesor`,`nombre`,`correo`,`contrasena`) values 
('1007126302','asesorcurn','carlos rodriguez','crodrigueza21@curnvirtual.edu.co','123456');

/*Table structure for table `consultas` */

DROP TABLE IF EXISTS `consultas`;

CREATE TABLE `consultas` (
  `correo` varchar(100) DEFAULT NULL,
  `radicado` varchar(50) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(1000) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`radicado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `consultas` */

insert  into `consultas`(`correo`,`radicado`,`fecha`,`asunto`,`estado`) values 
('carlosrodriguezanavila0@gmail.com','121234','2024-04-07 00:00:00','ddaaaaaaaaa','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','191465','2024-04-10 19:47:38','ahora si vamos a probar eso','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','213259','2024-04-10 00:00:00','este es una prueba del trigger','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','282818','2024-04-11 11:47:59','Este trigger se activará después de cada actualización en la tabla respuestas. Utiliza NEW para referenciar la fila actualizada en respuestas. Se actualizará el campo estado en la tabla consultas a un valor específico (en este caso, \'respondida\') donde el radicado en la tabla consultas coincida con el radicado de la fila actualizada en respuestas.','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','326797','2024-04-07 00:00:00','ahora vamas a hacer una prueba para dejar todo funcional','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','341369','2024-04-07 00:00:00','tu quien crees que va a ganar la champions?','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','369418','2024-04-07 00:00:00','como se va a llamar el hijo de yelidza con migo','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','398405','2024-04-10 19:56:29','esta es una prueba para ver si funciona el correo','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','469467','2024-04-10 00:00:00','vamos a probar para ver si esto en verdad funciona','RESPONDIDA'),
('fmf72549@zbock.com','514226','2024-04-10 00:00:00','cuanto vale graduarse de la universidad?','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','539263','2024-04-07 00:00:00','vamos hacer una prueba en un dispositivo movil','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','603332','2024-04-07 00:00:00','por que sera que el disparador fallo?','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','888027','2024-04-08 00:00:00','quien va ganar la champions','RESPONDIDA'),
('carlosrodriguezanavila0@gmail.com','962908','2024-04-07 00:00:00','quien da a ganar la champions?\r\n','RESPONDIDA');

/*Table structure for table `respuestas` */

DROP TABLE IF EXISTS `respuestas`;

CREATE TABLE `respuestas` (
  `correo` varchar(100) DEFAULT NULL,
  `radicado` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(1000) DEFAULT NULL,
  `estado` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `respuestas` */

insert  into `respuestas`(`correo`,`radicado`,`fecha`,`asunto`,`estado`) values 
('carlosrodriguezanavila0@gmail.com','282818','2024-04-07 00:00:00','Este trigger se activará después de cada actualización en la tabla respuestas. Utiliza NEW para referenciar la fila actualizada en respuestas. Se actualizará el campo estado en la tabla consultas a un valor específico (en este caso, \'respondida\') donde el radicado en la tabla consultas coincida con el radicado de la fila actualizada en respuestas.','esta es la 5ta pueba del correo de manera profesional'),
('carlosrodriguezanavila0@gmail.com','121234','2024-04-07 00:00:00','ddaaaaaaaaa','Por favor trate de escribir su consulta correctame'),
('carlosrodriguezanavila0@gmail.com','341369','2024-04-07 00:00:00','tu quien crees que va a ganar la champions?','muy seguramente el favorito es el manchester city'),
('carlosrodriguezanavila0@gmail.com','603332','2024-04-07 00:00:00','por que sera que el disparador fallo?','por que estaba mal estructurado'),
('carlosrodriguezanavila0@gmail.com','326797','2024-04-07 00:00:00','ahora vamas a hacer una prueba para dejar todo funcional','pruebe el disparador para ver si funciona'),
('carlosrodriguezanavila0@gmail.com','539263','2024-04-07 00:00:00','vamos hacer una prueba en un dispositivo movil','la prueba paso, definitivamente el responsive func'),
('carlosrodriguezanavila0@gmail.com','962908','2024-04-07 00:00:00','quien da a ganar la champions?\r\n','la champion la va a  ganar el barcelona'),
('carlosrodriguezanavila0@gmail.com','369418','2024-04-07 00:00:00','como se va a llamar el hijo de yelidza con migo','se va llamar leonel messi'),
('carlosrodriguezanavila0@gmail.com','888027','2024-04-08 00:00:00','quien va ganar la champions','va a ganar el barca'),
('carlosrodriguezanavila0@gmail.com','469467','2024-04-10 00:00:00','vamos a probar para ver si esto en verdad funciona','Confirmo que actualmente esto esta funcionando cor'),
('fmf72549@zbock.com','514226','2024-04-10 00:00:00','cuanto vale graduarse de la universidad?','bueno eso depende de la carrera y nivel de estudio realizado'),
('carlosrodriguezanavila0@gmail.com','213259','2024-04-10 00:00:00','este es una prueba del trigger','La prueba no funciono'),
('carlosrodriguezanavila0@gmail.com','191465','2024-04-10 19:37:57','ahora si vamos a probar eso','prueba 3'),
('carlosrodriguezanavila0@gmail.com','398405','2024-04-10 19:53:35','esta es una prueba para ver si funciona el correo','otra pueba');

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
('23827181','vanesa torres','fmf72549@zbock.com','2000-12-31','mujer','americas','123456','3505421652'),
('6272272','carlos andres rodriguez avila','carlosanavila0@gmail.com','2001-04-09','Hombre','olaya-fredonia','123456','38328');

/* Trigger structure for table `consultas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insertar_respuesta_despues_insert_consulta` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `insertar_respuesta_despues_insert_consulta` AFTER INSERT ON `consultas` FOR EACH ROW 
BEGIN
    -- Insertar datos en la tabla respuestas
    INSERT INTO respuestas (correo, radicado, fecha, asunto, estado)
    VALUES (NEW.correo, NEW.radicado, NOW(), NEW.asunto, new.estado);
END */$$


DELIMITER ;

/* Trigger structure for table `respuestas` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `actualizar_estado_consultas_despues_update` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `actualizar_estado_consultas_despues_update` AFTER UPDATE ON `respuestas` FOR EACH ROW 
BEGIN
    -- Actualizar el campo estado en la tabla consultas
    UPDATE consultas
    SET estado = 'RESPONDIDA', fecha = NOW()
    WHERE radicado = NEW.radicado; -- Suponiendo que 'radicado' es el campo que relaciona las tablas
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
