CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date NULL,
  `documento` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cuil` varchar(50) DEFAULT NULL,
  `ingreso` varchar(4) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `idestado` int(2) NOT NULL DEFAULT '1',
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `examenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL default 1,
  `idmateria` int(11) NOT NULL default 1,
  `iddivision` int(11) NOT NULL default 1,
  `idprofesor` int(11) NOT NULL default 1,
  `idciclo` int(11) NOT NULL default 1,
  `primero` dec(2,2) NULL,
  `segundo` dec(2,2) NULL,
  `tercero` dec(2,2) NULL,
  `promedio` dec(2,2) NULL,
  PRIMARY KEY (`id`),
UNIQUE KEY `registro` (`idalumno`,`idmateria`, `idciclo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL default 1,
  `idmateria` int(11) NOT NULL default 1,
  `iddivision` int(11) NOT NULL default 1,
  `idciclo` int(11) NOT NULL default 1,
  `d1` int(1) NOT NULL DEFAULT '0',
  `d2` int(1) NOT NULL DEFAULT '0',
  `d3` int(1) NOT NULL DEFAULT '0',
  `d4` int(1) NOT NULL DEFAULT '0',
  `d5` int(1) NOT NULL DEFAULT '0',
  `d6` int(1) NOT NULL DEFAULT '0',
  `d7` int(1) NOT NULL DEFAULT '0',
  `d8` int(1) NOT NULL DEFAULT '0',
  `d9` int(1) NOT NULL DEFAULT '0',
  `d10` int(1) NOT NULL DEFAULT '0',
  `d11` int(1) NOT NULL DEFAULT '0',
  `d12` int(1) NOT NULL DEFAULT '0',
  `d13` int(1) NOT NULL DEFAULT '0',
  `d14` int(1) NOT NULL DEFAULT '0',
  `d15` int(1) NOT NULL DEFAULT '0',
  `d16` int(1) NOT NULL DEFAULT '0',
  `d17` int(1) NOT NULL DEFAULT '0',
  `d18` int(1) NOT NULL DEFAULT '0',
  `d19` int(1) NOT NULL DEFAULT '0',
  `d20` int(1) NOT NULL DEFAULT '0',
  `d21` int(1) NOT NULL DEFAULT '0',
  `d22` int(1) NOT NULL DEFAULT '0',
  `d23` int(1) NOT NULL DEFAULT '0',
  `d24` int(1) NOT NULL DEFAULT '0',
  `d25` int(1) NOT NULL DEFAULT '0',
  `d26` int(1) NOT NULL DEFAULT '0',
  `d27` int(1) NOT NULL DEFAULT '0',
  `d28` int(1) NOT NULL DEFAULT '0',
  `d29` int(1) NOT NULL DEFAULT '0',
  `d30` int(1) NOT NULL DEFAULT '0',
  `d31` int(1) NOT NULL DEFAULT '0',
  `total` dec(2,2) NULL,
  PRIMARY KEY (`id`),
UNIQUE KEY `registro` (`idalumno`,`idmateria`, `idciclo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




CREATE TABLE `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `curso` int(11) NOT NULL DEFAULT '1',
  `orden` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `divisiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `idmateria` int(11) NOT NULL default 1,
  `idprofesor` int(11) NOT NULL default 1,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `ciclos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(4) DEFAULT NULL,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


CREATE TABLE `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date NULL,
  `documento` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `cuil` varchar(50) DEFAULT NULL,
  `ingreso` varchar(4) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `idestado` int(2) NOT NULL DEFAULT '1',
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



