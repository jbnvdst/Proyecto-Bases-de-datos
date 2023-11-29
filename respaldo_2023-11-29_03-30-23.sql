-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2023 a las 03:34:11
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `streaminservices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `origen` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id`, `nombre`, `tipo_documento`, `origen`, `sexo`) VALUES
(1, 'Jesús', 'Visa', 'Mexico', 'Masculino'),
(999, 'Zac', 'Nacional', 'Italia', 'M'),
(33, 'Johnny', 'Nacional', 'Francia', 'M'),
(4, 'Evelyn', 'Visa', 'Colombia', 'Femenino'),
(11, 'Maria', 'INE', 'México', 'Femenino'),
(12, 'Diego', 'Licencia de conducir', 'España', 'Femenino'),
(888, 'Margaret', 'Extranjera', 'Suiza', 'F');

--
-- Disparadores `actor`
--
DROP TRIGGER IF EXISTS `before_delete_trigger`;
DELIMITER $$
CREATE TRIGGER `before_delete_trigger` BEFORE DELETE ON `actor` FOR EACH ROW BEGIN
    CREATE TEMPORARY TABLE respaldo_tabla_actor AS SELECT * FROM actor;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE IF NOT EXISTS `contrato` (
  `id` int NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `Director` int DEFAULT NULL,
  `Actor` int DEFAULT NULL,
  `Productora` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Director` (`Director`),
  KEY `Actor` (`Actor`),
  KEY `Productora` (`Productora`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id`, `fecha`, `descripcion`, `Director`, `Actor`, `Productora`) VALUES
(1528, '0000-00-00', 'Carreras', 11, 999, 200),
(1629, '0000-00-00', 'Hackeo', 22, 888, 400),
(1730, '0000-00-00', 'Secuestro', 33, 33, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE IF NOT EXISTS `director` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(50) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `nombre`, `origen`, `tipo_documento`, `sexo`) VALUES
(1, 'Nolan', 'USA', 'Visa', 'Masculino'),
(2, 'Tarantino', 'USA', 'Acta de nacimiento', 'Masculino'),
(3, 'Allen', 'USA', 'Pasaporte', 'Masculino'),
(4, 'Weber', 'Australia', 'Licencia de conducir', 'Femenino'),
(5, 'Del Toro', 'México', 'Acta de nacimiento', 'Masculino'),
(11, 'Bruce', 'Francia', 'Nacional', 'M'),
(22, 'Maria', 'Suecia', 'Extranjera', 'F'),
(33, 'Tom', 'Francia', 'Nacional', 'M');

--
-- Disparadores `director`
--
DROP TRIGGER IF EXISTS `after_update_trigger`;
DELIMITER $$
CREATE TRIGGER `after_update_trigger` AFTER UPDATE ON `director` FOR EACH ROW BEGIN
    CREATE TEMPORARY TABLE respaldo_tabla_director AS SELECT * FROM director;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filmacion`
--

DROP TABLE IF EXISTS `filmacion`;
CREATE TABLE IF NOT EXISTS `filmacion` (
  `id` int NOT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  `Pelicula` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Pais` (`Pais`(250)),
  KEY `Pelicula` (`Pelicula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `filmacion`
--

INSERT INTO `filmacion` (`id`, `Pais`, `Pelicula`) VALUES
(203, 'Turquia', 682),
(204, 'Rusia', 693),
(205, 'Reino Unido', 704);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `nombre` varchar(50) NOT NULL,
  `Contrato` int DEFAULT NULL,
  PRIMARY KEY (`nombre`),
  KEY `Contrato` (`Contrato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`nombre`, `Contrato`) VALUES
('Accion', 1528),
('Suspenso', 1629),
('Terror', 1730);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `Nombre_locacion` varchar(50) NOT NULL,
  `Version` int DEFAULT NULL,
  PRIMARY KEY (`Nombre_locacion`),
  KEY `Version` (`Version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Nombre_locacion`, `Version`) VALUES
('México', 1),
('USA', 3),
('Alemania', 4),
('Uruguay', 3),
('Suecia', 6),
('Turquia', 410);

--
-- Disparadores `pais`
--
DROP TRIGGER IF EXISTS `before_insert_trigger`;
DELIMITER $$
CREATE TRIGGER `before_insert_trigger` BEFORE INSERT ON `pais` FOR EACH ROW BEGIN
    CREATE TEMPORARY TABLE respaldo_tabla_pais AS SELECT * FROM pais;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE IF NOT EXISTS `pelicula` (
  `id` int NOT NULL,
  `duracion` decimal(10,0) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `web` varchar(50) DEFAULT NULL,
  `Director` int DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `Productora` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Productora` (`Productora`),
  KEY `Genero` (`Genero`),
  KEY `Director` (`Director`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `duracion`, `titulo`, `web`, `Director`, `Genero`, `Productora`) VALUES
(682, '100', 'Carrera de la muerte', 'CarreraMuerte.com', 11, 'Accion', 200),
(693, '150', 'Saw', 'Saw.com', 33, 'Terror', 300),
(704, '125', 'Robo de identidad', 'Tuidentidad.com', 22, 'Suspenso', 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productora`
--

DROP TABLE IF EXISTS `productora`;
CREATE TABLE IF NOT EXISTS `productora` (
  `rut` int NOT NULL,
  `denominacion` varchar(50) DEFAULT NULL,
  `telefono` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productora`
--

INSERT INTO `productora` (`rut`, `denominacion`, `telefono`) VALUES
(200, 'Privada', '5555'),
(300, 'Privada', '2222'),
(400, 'Privada', '1111'),
(5000, 'Privada', '3321538842'),
(6000, 'Privada', '989465616');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabaja`
--

DROP TABLE IF EXISTS `trabaja`;
CREATE TABLE IF NOT EXISTS `trabaja` (
  `id` int NOT NULL,
  `Pelicula` int DEFAULT NULL,
  `Actor` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Pelicula` (`Pelicula`),
  KEY `Actor` (`Actor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `trabaja`
--

INSERT INTO `trabaja` (`id`, `Pelicula`, `Actor`) VALUES
(315, 682, 999),
(316, 693, 33),
(317, 704, 888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version`
--

DROP TABLE IF EXISTS `version`;
CREATE TABLE IF NOT EXISTS `version` (
  `id` int NOT NULL,
  `idioma_original` varchar(50) DEFAULT NULL,
  `Pelicula` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Pelicula` (`Pelicula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `version`
--

INSERT INTO `version` (`id`, `idioma_original`, `Pelicula`) VALUES
(410, 'Frances', 682),
(411, 'Aleman', 693),
(412, 'Español', 704);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_actor`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vista_actor`;
CREATE TABLE IF NOT EXISTS `vista_actor` (
`nombre` varchar(50)
,`sexo` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_pais`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vista_pais`;
CREATE TABLE IF NOT EXISTS `vista_pais` (
`Nombre_locacion` varchar(50)
,`Version` int
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_productora_director`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vista_productora_director`;
CREATE TABLE IF NOT EXISTS `vista_productora_director` (
`denominacion` varchar(50)
,`director` int
,`id` int
,`rut` int
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_actor`
--
DROP TABLE IF EXISTS `vista_actor`;

DROP VIEW IF EXISTS `vista_actor`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_actor`  AS SELECT `actor`.`nombre` AS `nombre`, `actor`.`sexo` AS `sexo` FROM `actor``actor`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_pais`
--
DROP TABLE IF EXISTS `vista_pais`;

DROP VIEW IF EXISTS `vista_pais`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_pais`  AS SELECT `pais`.`Nombre_locacion` AS `Nombre_locacion`, `pais`.`Version` AS `Version` FROM `pais` WHERE (`pais`.`Version` > 1)  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_productora_director`
--
DROP TABLE IF EXISTS `vista_productora_director`;

DROP VIEW IF EXISTS `vista_productora_director`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_productora_director`  AS SELECT `p`.`rut` AS `rut`, `p`.`denominacion` AS `denominacion`, `c`.`id` AS `id`, `c`.`Director` AS `director` FROM (`productora` `p` join `contrato` `c` on((`p`.`rut` = `c`.`id`)))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
