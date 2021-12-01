# base de datos

## valores de prueba
INSERT INTO bdd_william_lopez.origen
(id, comuna, direccion, tipo)
VALUES(1, 'MAIPU', 'SANTIAGO', 'PARTICULAR');
INSERT INTO bdd_william_lopez.origen
(id, comuna, direccion, tipo)
VALUES(2, 'prueba', 'prueba', '1');
INSERT INTO bdd_william_lopez.origen
(id, comuna, direccion, tipo)
VALUES(3, 'prueba', 'prueba', '1');


INSERT INTO bdd_william_lopez.usuarios
(id, usuario, pass, origen, perfil)
VALUES(2, 'prueba', 'prueba', 1, 1);
INSERT INTO bdd_william_lopez.usuarios
(id, usuario, pass, origen, perfil)
VALUES(3, 'test', 'test', 1, 1);


## tablas
CREATE TABLE `log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `INICIO_SESION` timestamp NOT NULL DEFAULT current_timestamp(),
  `ACCION` varchar(50) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `FIN_SESION` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `origen` int(11) NOT NULL,
  `perfil` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_FK` (`origen`),
  CONSTRAINT `usuarios_FK` FOREIGN KEY (`origen`) REFERENCES `origen` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `datos_personales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `origen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comuna` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;