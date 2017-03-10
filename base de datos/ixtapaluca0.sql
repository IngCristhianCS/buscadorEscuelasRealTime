-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2016 a las 01:41:47
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ixtapaluca0`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asentamiento`
--

CREATE TABLE IF NOT EXISTS `asentamiento` (
  `id_asentamiento` int(11) NOT NULL AUTO_INCREMENT,
  `nom_asentamiento` varchar(45) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(45) CHARACTER SET utf8 NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  PRIMARY KEY (`id_asentamiento`,`codigo_postal`),
  KEY `fk_asentamiento_codigos_ixtapaluca1_idx` (`codigo_postal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=163 ;

--
-- Volcado de datos para la tabla `asentamiento`
--

INSERT INTO `asentamiento` (`id_asentamiento`, `nom_asentamiento`, `tipo`, `codigo_postal`) VALUES
(1, '1° de Mayo', 'Colonia', 56569),
(2, '18 de Agosto', 'Colonia', 56576),
(3, '20 de Noviembre', 'Colonia', 56579),
(4, '6 de Junio', 'Colonia', 56566),
(5, 'Acozac', 'Fraccionamiento', 56537),
(6, 'Alfredo del Mazo', 'Colonia', 56577),
(7, 'Ampliación 6 de Junio', 'Colonia', 56566),
(8, 'Ampliación Acozac', 'Colonia', 56565),
(9, 'Ampliación Emiliano Zapata', 'Colonia', 56558),
(10, 'Ampliación Escalerillas', 'Colonia', 56567),
(11, 'Ampliación Loma Bonita', 'Colonia', 56563),
(12, 'Ampliación Morelos', 'Colonia', 56567),
(13, 'Ampliación Plutarco Elias Calles', 'Colonia', 56585),
(14, 'Ampliación San Francisco', 'Colonia', 56587),
(15, 'Ampliación Santa Cruz Tlapacoya', 'Colonia', 56577),
(16, 'Ampliación Santo Tomás', 'Colonia', 56565),
(17, 'Ampliación Tejalpa', 'Colonia', 56588),
(18, 'Ampliación Zoquiapan', 'Colonia', 56589),
(19, 'Aquiles Córdoba', 'Colonia', 56576),
(20, 'Arbolada', 'Fraccionamiento', 56570),
(21, 'Ayotla', 'Pueblo', 56560),
(22, 'Bezana Canutillo', 'Colonia', 56589),
(23, 'Buena Vista', 'Colonia', 56567),
(24, 'Camino a Mina Milagro', 'Colonia', 56589),
(25, 'Camino Mina Rosita', 'Colonia', 56589),
(26, 'Capilla I', 'Unidad habitacional', 56530),
(27, 'Capilla II', 'Unidad habitacional', 56537),
(28, 'Capilla III', 'Unidad habitacional', 56530),
(29, 'Capilla IV', 'Unidad habitacional', 56537),
(30, 'Caserío', 'Unidad habitacional', 56566),
(31, 'Cerro del Tejolote', 'Colonia', 56567),
(32, 'Chililico', 'Ejido', 56585),
(33, 'Citlalmina', 'Colonia', 56540),
(34, 'Coatepec', 'Pueblo', 56580),
(35, 'Contadero', 'Colonia', 56567),
(36, 'Cuatro Vientos', 'Fraccionamiento', 56589),
(37, 'Derramadero', 'Colonia', 56550),
(38, 'Ejido la Virgen', 'Colonia', 56588),
(39, 'El Calvario', 'Colonia', 56560),
(40, 'El Campamento', 'Ejido', 56599),
(41, 'El Capulín', 'Ejido', 56535),
(42, 'El Capulín', 'Colonia', 56568),
(43, 'El Caracol', 'Colonia', 56539),
(44, 'El Carmen', 'Colonia', 56588),
(45, 'El Corazón', 'Colonia', 56599),
(46, 'El Cuarenta', 'Ranchería', 56599),
(47, 'El Guarda', 'Ranchería', 56590),
(48, 'El Mirador', 'Colonia', 56564),
(49, 'El Mirto', 'Colonia', 56569),
(50, 'El Molino', 'Colonia', 56553),
(51, 'El Nopalito', 'Colonia', 56569),
(52, 'El Patronato del Maguey', 'Ejido', 56588),
(53, 'El Pozo del Venado', 'Ejido', 56588),
(54, 'El Rayo', 'Colonia', 56585),
(55, 'El Treinta y Nueve', 'Ejido', 56599),
(56, 'El Treinta y Siete', 'Ejido', 56599),
(57, 'Elsa Córdova Morán', 'Colonia', 56585),
(58, 'Emiliano Zapata', 'Colonia', 56550),
(59, 'Escalerillas', 'Colonia', 56567),
(60, 'Estado de México', 'Colonia', 56576),
(61, 'Fermín Álvarez', 'Colonia', 56566),
(62, 'Francisco Santillán', 'Ranchería', 56587),
(63, 'General Manuel Avila Camacho', 'Pueblo', 56599),
(64, 'Geovillas de Ayotla', 'Fraccionamiento', 56566),
(65, 'Geovillas Ixtapaluca 2000', 'Unidad habitacional', 56570),
(66, 'Geovillas Jesús María', 'Fraccionamiento', 56586),
(67, 'Geovillas San Jacinto', 'Fraccionamiento', 56530),
(68, 'Geovillas Santa Bárbara', 'Fraccionamiento', 56535),
(69, 'Guadalupana', 'Colonia', 56567),
(70, 'Hacienda las Palmas I y II', 'Conjunto habitaciona', 56535),
(71, 'Hornos de Zoquiapan', 'Colonia', 56589),
(72, 'Hornos Santa Bárbara', 'Colonia', 56577),
(73, 'Humberto Gutiérrez', 'Colonia', 56567),
(74, 'Ilhuicamina', 'Colonia', 56566),
(75, 'Independencia', 'Colonia', 56580),
(76, 'Ixtapaluca Centro', 'Colonia', 56530),
(77, 'Izcalli', 'Fraccionamiento', 56566),
(78, 'Jacarandas I y II', 'Fraccionamiento', 56530),
(79, 'Jardín Industrial', 'Fraccionamiento', 56535),
(80, 'Jesús María', 'Colonia', 56585),
(81, 'Jorge Jiménez Cantú', 'Colonia', 56589),
(82, 'José de la Mora', 'Fraccionamiento', 56556),
(83, 'Juan Antonio Soberanes', 'Colonia', 56588),
(84, 'Julio Chávez López', 'Colonia', 56588),
(85, 'La Cañada', 'Colonia', 56589),
(86, 'La Era', 'Colonia', 56530),
(87, 'La Esperanza', 'Colonia', 56585),
(88, 'La Huerta', 'Colonia', 56539),
(89, 'La Magdalena', 'Colonia', 56539),
(90, 'La Mesa', 'Colonia', 56584),
(91, 'La Pastoría', 'Ranchería', 56584),
(92, 'La Retama', 'Colonia', 56566),
(93, 'La Venta', 'Colonia', 56530),
(94, 'Las Huertas de Canutillo', 'Pueblo', 56589),
(95, 'Las Palmas Tercera Etapa', 'Conjunto habitaciona', 56535),
(96, 'Lavaderos', 'Colonia', 56566),
(97, 'Linda Vista', 'Colonia', 56565),
(98, 'Linderos de Ixtapaluca', 'Ejido', 56588),
(99, 'Llano Grande', 'Colonia', 56590),
(100, 'Loma Ancha', 'Ranchería', 56599),
(101, 'Loma Bonita', 'Colonia', 56563),
(102, 'Lomas de Ayotla', 'Colonia', 56565),
(103, 'Lomas de Coatepec', 'Colonia', 56580),
(104, 'Lomas de Ixtapaluca', 'Fraccionamiento', 56567),
(105, 'Los Cedros', 'Ejido', 56599),
(106, 'Los Héroes', 'Unidad habitacional', 56585),
(107, 'Los Hornos', 'Colonia', 56587),
(108, 'Luis Cordova Reyes', 'Colonia', 56576),
(109, 'Luis Donaldo Colosio', 'Colonia', 56566),
(110, 'Magisterial', 'Unidad habitacional', 56565),
(111, 'Margarita Moran', 'Colonia', 56589),
(112, 'Melchor Ocampo I, II, III, IV y V', 'Colonia', 56567),
(113, 'Mirador de San Francisco', 'Colonia', 56587),
(114, 'Morelos', 'Colonia', 56567),
(115, 'Nueva Antorchista', 'Colonia', 56568),
(116, 'Plutarco Elias Calles', 'Colonia', 56585),
(117, 'Pueblo Nuevo', 'Colonia', 56584),
(118, 'Puente el Mezquite', 'Ejido', 56588),
(119, 'Puente el Tablón', 'Ejido', 56588),
(120, 'Rancho el Carmen', 'Unidad habitacional', 56540),
(121, 'Rancho Guadalupe', 'Fraccionamiento', 56566),
(122, 'Rancho San José', 'Unidad habitacional', 56566),
(123, 'Rancho Verde I y II', 'Colonia', 56580),
(124, 'Real del Campo', 'Fraccionamiento', 56530),
(125, 'Residencial Ayotla', 'Fraccionamiento', 56555),
(126, 'Residencial Park', 'Fraccionamiento', 56576),
(127, 'Rey Izcoatl', 'Colonia', 56576),
(128, 'Ricardo Calva Reyes', 'Colonia', 56567),
(129, 'Rigoberta Menchú', 'Colonia', 56566),
(130, 'Rincón del Bosque', 'Colonia', 56569),
(131, 'Río Frío de Juárez', 'Pueblo', 56590),
(132, 'Rosa de Castilla', 'Colonia', 56580),
(133, 'Rosa de San Francisco', 'Unidad habitacional', 56585),
(134, 'San Antonio', 'Colonia', 56576),
(135, 'San Antonio', 'Unidad habitacional', 56576),
(136, 'San Buenaventura', 'Fraccionamiento', 56536),
(137, 'San Francisco', 'Ejido', 56587),
(138, 'San Francisco Acuautla', 'Pueblo', 56587),
(139, 'San Isidro', 'Ranchería', 56599),
(140, 'San Jerónimo Cuatro Vientos', 'Colonia', 56589),
(141, 'San José de la Palma', 'Unidad habitacional', 56536),
(142, 'San Juan', 'Colonia', 56580),
(143, 'San Juan Tlalpizahuac', 'Colonia', 56576),
(144, 'San Miguel', 'Colonia', 56569),
(145, 'Santa Bárbara', 'Colonia', 56538),
(146, 'Santa Cruz Tlalpizahuac', 'Colonia', 56577),
(147, 'Santa Cruz Tlapacoya', 'Colonia', 56577),
(148, 'Santo Tomás', 'Colonia', 56565),
(149, 'Tejalpa', 'Colonia', 56588),
(150, 'Teponaxtle', 'Colonia', 56589),
(151, 'Tetitla', 'Colonia', 56584),
(152, 'Tezontle-Zoquiapan', 'Colonia', 56537),
(153, 'Tlacaelel', 'Colonia', 56576),
(154, 'Tlalpizahuac', 'Pueblo', 56576),
(155, 'Tlapacoya', 'Pueblo', 56556),
(156, 'Tlayehuale', 'Colonia', 56586),
(157, 'Unión Antorchista', 'Colonia', 56568),
(158, 'Valle Verde', 'Colonia', 56577),
(159, 'Vergel de Guadalupe', 'Colonia', 56566),
(160, 'Wenceslao Victoria Soto', 'Colonia', 56567),
(161, 'Xalpa', 'Ejido', 56588),
(162, 'Zoquiapan', 'Colonia', 56530);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_funcion`
--

CREATE TABLE IF NOT EXISTS `cat_funcion` (
  `id_funcion` int(11) NOT NULL AUTO_INCREMENT,
  `funcion` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_funcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cat_funcion`
--

INSERT INTO `cat_funcion` (`id_funcion`, `funcion`) VALUES
(1, 'SECRETARIA'),
(2, 'SECRETARIO'),
(3, 'CONSERJE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_nivel`
--

CREATE TABLE IF NOT EXISTS `cat_nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_nivel`),
  UNIQUE KEY `nivel_UNIQUE` (`nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cat_nivel`
--

INSERT INTO `cat_nivel` (`id_nivel`, `nivel`) VALUES
(7, 'CENTRO DE MAESTROS'),
(17, 'COORDINACION'),
(13, 'COORDINACION DE EDUCACIÓN ARTÍSTICA'),
(12, 'COORDINACION DE EDUCACION FISICA'),
(22, 'DIRECCION'),
(11, 'EDUCACION ESPECIAL'),
(6, 'EDUCACION PARA ADULTOS'),
(16, 'ESCUELA DEL DEPORTE'),
(19, 'JEFATURA DE SECTOR'),
(5, 'MEDIO SUPERIOR'),
(3, 'PREESCOLAR'),
(2, 'PRIMARIA'),
(14, 'SEC. TEC.'),
(4, 'SECUNDARIA'),
(18, 'SUPERVISIÓN EDUCACIÓN ESPECIAL'),
(8, 'SUPERVISION NIVEL MEDIO SUPERIOR'),
(1, 'SUPERVISIÓN NIVEL PREESCOLAR'),
(9, 'SUPERVISION NIVEL PRIMARIA'),
(10, 'SUPERVISIÓN NIVEL SECUNDARIA'),
(20, 'SUPERVISION NIVEL TELESECUNDARIAS'),
(15, 'TELEBACHILLERATO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_turno`
--

CREATE TABLE IF NOT EXISTS `cat_turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_turno`),
  UNIQUE KEY `turno_UNIQUE` (`turno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cat_turno`
--

INSERT INTO `cat_turno` (`id_turno`, `turno`) VALUES
(3, 'COMPLETO'),
(4, 'DISCONTINUO'),
(1, 'MATUTINO'),
(2, 'VESPERTINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_zona`
--

CREATE TABLE IF NOT EXISTS `cat_zona` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(45) CHARACTER SET utf8 NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `subsistema` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_zona`,`id_nivel`),
  KEY `fk_cat_zona_cat_nivel1_idx` (`id_nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cat_zona`
--

INSERT INTO `cat_zona` (`id_zona`, `zona`, `id_nivel`, `subsistema`) VALUES
(1, 'DIRECCIÓN', 22, 'NINGUNO'),
(4, 'J109', 3, 'ESTATAL'),
(5, 'PRUEBA', 2, 'FEDERAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos_ixtapaluca`
--

CREATE TABLE IF NOT EXISTS `codigos_ixtapaluca` (
  `codigo_postal` int(11) NOT NULL,
  `municipio` varchar(45) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`codigo_postal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `codigos_ixtapaluca`
--

INSERT INTO `codigos_ixtapaluca` (`codigo_postal`, `municipio`, `estado`) VALUES
(56530, 'Ixtapaluca', 'México'),
(56535, 'Ixtapaluca', 'México'),
(56536, 'Ixtapaluca', 'México'),
(56537, 'Ixtapaluca', 'México'),
(56538, 'Ixtapaluca', 'México'),
(56539, 'Ixtapaluca', 'México'),
(56540, 'Ixtapaluca', 'México'),
(56550, 'Ixtapaluca', 'México'),
(56553, 'Ixtapaluca', 'México'),
(56555, 'Ixtapaluca', 'México'),
(56556, 'Ixtapaluca', 'México'),
(56558, 'Ixtapaluca', 'México'),
(56560, 'Ixtapaluca', 'México'),
(56563, 'Ixtapaluca', 'México'),
(56564, 'Ixtapaluca', 'México'),
(56565, 'Ixtapaluca', 'México'),
(56566, 'Ixtapaluca', 'México'),
(56567, 'Ixtapaluca', 'México'),
(56568, 'Ixtapaluca', 'México'),
(56569, 'Ixtapaluca', 'México'),
(56570, 'Ixtapaluca', 'México'),
(56576, 'Ixtapaluca', 'México'),
(56577, 'Ixtapaluca', 'México'),
(56579, 'Ixtapaluca', 'México'),
(56580, 'Ixtapaluca', 'México'),
(56584, 'Ixtapaluca', 'México'),
(56585, 'Ixtapaluca', 'México'),
(56586, 'Ixtapaluca', 'México'),
(56587, 'Ixtapaluca', 'México'),
(56588, 'Ixtapaluca', 'México'),
(56589, 'Ixtapaluca', 'México'),
(56590, 'Ixtapaluca', 'México'),
(56599, 'Ixtapaluca', 'México');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cod_ase_view`
--
CREATE TABLE IF NOT EXISTS `cod_ase_view` (
`municipio` varchar(45)
,`estado` varchar(45)
,`id_asentamiento` int(11)
,`nom_asentamiento` varchar(45)
,`tipo` varchar(45)
,`codigo_postal` int(11)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE IF NOT EXISTS `escuela` (
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  `supervision_cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `director` varchar(64) CHARACTER SET utf8 NOT NULL,
  `subdirector` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(45) CHARACTER SET utf8 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `org_social` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `hombres` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `mujeres` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `total` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `profesores` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `grupos` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `id_turno` int(11) NOT NULL,
  PRIMARY KEY (`cct`,`supervision_cct`,`id_turno`),
  KEY `fk_escuela_cat_turno1_idx` (`id_turno`),
  KEY `fk_escuela_supervision1_idx` (`supervision_cct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`cct`, `supervision_cct`, `nombre`, `director`, `subdirector`, `telefono`, `email`, `org_social`, `hombres`, `mujeres`, `total`, `profesores`, `grupos`, `id_turno`) VALUES
('DEDCFV1123', 'HOLAPRUEA1', 'PRUEBA2', 'VFDCD', 'NB,NMG', '12545342', 'dssxs@xsx.co', 'DSD', NULL, NULL, NULL, NULL, NULL, 3),
('PRUEBA2', '15FZP2072M', 'XCCC', 'VVVHOLAGHJ G', 'HOLA HOLA', '13545-1212-1212', 'sqeqe@wqqdsd.com', '', NULL, NULL, NULL, NULL, NULL, 4),
('RDTF123451', 'HOLAPRUEA1', 'SEDRFTYG', 'SEDF', 'FRGT', '34567 567', 'sx@hggc.vgy', 'DFG', NULL, NULL, NULL, NULL, NULL, 3),
('SFDFDFSDSC', '15FZP2072M', 'JCBXCBJXCVJXCV', 'JVCXVC JXV CJ', 'CJCVJXVCJXCV', '1343556', 'asad@dcsd.com', 'SDWSDSD', NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `escuela_vw`
--
CREATE TABLE IF NOT EXISTS `escuela_vw` (
`cct` varchar(10)
,`supervision_cct` varchar(10)
,`nombre` varchar(100)
,`director` varchar(64)
,`subdirector` varchar(45)
,`subsistema` varchar(45)
,`telefono` varchar(45)
,`email` varchar(45)
,`org_social` varchar(45)
,`hombres` varchar(45)
,`mujeres` varchar(45)
,`total` varchar(45)
,`profesores` varchar(45)
,`grupos` varchar(45)
,`id_zona` int(11)
,`id_turno` int(11)
,`id_nivel` int(11)
,`zona` varchar(45)
,`turno` varchar(45)
,`nivel` varchar(45)
,`latitud` varchar(45)
,`longitud` varchar(45)
,`heading` varchar(45)
,`pitch` varchar(45)
,`direccion` varchar(45)
,`id_asentamiento` int(11)
,`municipio` varchar(45)
,`estado` varchar(45)
,`nom_asentamiento` varchar(45)
,`tipo` varchar(45)
,`codigo_postal` int(11)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logueo`
--

CREATE TABLE IF NOT EXISTS `logueo` (
  `id_logueo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `tipo_usuario` varchar(45) CHARACTER SET utf8 NOT NULL,
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_logueo`,`cct`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  KEY `fk_logueo_supervision1_idx` (`cct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `logueo`
--

INSERT INTO `logueo` (`id_logueo`, `usuario`, `password`, `tipo_usuario`, `cct`) VALUES
(2, 'administrador', '21232f297a57a5a743894a0e4a801fc3', 'administrador', 'DIREDUIXTA'),
(3, 'supervisionJ109', '3792ab8781727435f6cd0318c4c5770c', 'supervision', '15FZP2072M'),
(4, 'supervisionPRUEBA', 'e19131b5cbf2a66c888a29719a0c8d61', 'supervision', 'HOLAPRUEA1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `rfc` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nombre_p` varchar(45) CHARACTER SET utf8 NOT NULL,
  `a_paterno` varchar(45) CHARACTER SET utf8 NOT NULL,
  `a_materno` varchar(45) CHARACTER SET utf8 NOT NULL,
  `id_funcion` int(11) NOT NULL,
  PRIMARY KEY (`rfc`,`id_funcion`),
  KEY `fk_personal_cat_funcion1_idx` (`id_funcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`rfc`, `nombre_p`, `a_paterno`, `a_materno`, `id_funcion`) VALUES
('HOLA12', 'CRISTHIAN', 'CASTILLO', 'SOR', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_escuela`
--

CREATE TABLE IF NOT EXISTS `personal_escuela` (
  `rfc` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sueldo` int(11) NOT NULL,
  PRIMARY KEY (`rfc`,`cct`),
  KEY `fk_personal_has_escuela_escuela1_idx` (`cct`),
  KEY `fk_personal_has_escuela_personal1_idx` (`rfc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `personal_vw`
--
CREATE TABLE IF NOT EXISTS `personal_vw` (
`rfc` varchar(20)
,`nombre` varchar(45)
,`a_paterno` varchar(45)
,`a_materno` varchar(45)
,`id_funcion` int(11)
,`funcion` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `per_esc_vw`
--
CREATE TABLE IF NOT EXISTS `per_esc_vw` (
`cct` varchar(10)
,`supervision_cct` varchar(10)
,`nombre_e` varchar(100)
,`rfc` varchar(20)
,`nombre` varchar(45)
,`a_paterno` varchar(45)
,`a_materno` varchar(45)
,`id_funcion` int(11)
,`funcion` varchar(45)
,`sueldo` int(11)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_supervision`
--

CREATE TABLE IF NOT EXISTS `per_supervision` (
  `id_per_sup` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor` varchar(45) CHARACTER SET utf8 NOT NULL,
  `auxiliar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `asesor` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `tel_supervisor` varchar(45) CHARACTER SET utf8 NOT NULL,
  `tel_auxiliar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `tel_asesor` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email_supervisor` varchar(45) CHARACTER SET utf8 NOT NULL,
  `email_auxiliar` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email_asesor` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_per_sup`,`cct`),
  KEY `fk_per_supervision_supervision1_idx` (`cct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervision`
--

CREATE TABLE IF NOT EXISTS `supervision` (
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sede` varchar(45) CHARACTER SET utf8 NOT NULL,
  `oficina` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `num_escuelas` int(11) DEFAULT NULL,
  `num_grupos` int(11) DEFAULT NULL,
  `num_alumnos` int(11) DEFAULT NULL,
  `id_zona` int(11) NOT NULL,
  PRIMARY KEY (`cct`,`id_zona`),
  KEY `fk_supervision_cat_zona1_idx` (`id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `supervision`
--

INSERT INTO `supervision` (`cct`, `sede`, `oficina`, `num_escuelas`, `num_grupos`, `num_alumnos`, `id_zona`) VALUES
('15FZP2072M', 'JARDIN DE NIÑOS TECELTICAN', '123456', 2334, 65, 576, 4),
('DIREDUIXTA', 'Dirección de Educación', NULL, NULL, NULL, NULL, 1),
('HOLAPRUEA1', 'MI CASA', '12312', 232, 564, 24343432, 5);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `supervision_vw`
--
CREATE TABLE IF NOT EXISTS `supervision_vw` (
`cct` varchar(10)
,`sede` varchar(45)
,`oficina` varchar(45)
,`num_escuelas` int(11)
,`num_grupos` int(11)
,`num_alumnos` int(11)
,`id_zona` int(11)
,`usuario` varchar(45)
,`password` varchar(64)
,`id_logueo` int(11)
,`tipo_usuario` varchar(45)
,`zona` varchar(45)
,`id_nivel` int(11)
,`subsistema` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `latitud` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT '19.3170351',
  `longitud` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT '-98.8794555',
  `heading` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT '104.93052220567898',
  `pitch` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT '-2.8160690472411276',
  `direccion` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `cct` varchar(10) CHARACTER SET utf8 NOT NULL,
  `id_asentamiento` int(11) NOT NULL,
  PRIMARY KEY (`id_ubicacion`,`cct`,`id_asentamiento`),
  KEY `fk_ubicacion_escuela1_idx` (`cct`),
  KEY `fk_ubicacion_asentamiento1_idx` (`id_asentamiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `latitud`, `longitud`, `heading`, `pitch`, `direccion`, `cct`, `id_asentamiento`) VALUES
(2, '19.30829126411938', '-98.91023205697189', '0', '-2.8160690472411276', 'calle 5 de mayo', 'SFDFDFSDSC', 76),
(3, '19.30342334002616', '-98.89708063214721', '0', '-2.8160690472411276', 'mi casa', 'DEDCFV1123', 93),
(4, '19.31702257143684', '-98.87946060074569', '104.93052220567898', '-2.8160690472411276', 'prueba 2', 'PRUEBA2', 78),
(5, '19.31702257143684', '-98.87946060074569', '104.93052220567898', '-2.8160690472411276', 'HOLA', 'RDTF123451', 41);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `zonas_vw`
--
CREATE TABLE IF NOT EXISTS `zonas_vw` (
`id_zona` int(11)
,`zona` varchar(45)
,`id_nivel` int(11)
,`subsistema` varchar(45)
,`nivel` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `cod_ase_view`
--
DROP TABLE IF EXISTS `cod_ase_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cod_ase_view` AS select `c`.`municipio` AS `municipio`,`c`.`estado` AS `estado`,`a`.`id_asentamiento` AS `id_asentamiento`,`a`.`nom_asentamiento` AS `nom_asentamiento`,`a`.`tipo` AS `tipo`,`a`.`codigo_postal` AS `codigo_postal` from (`codigos_ixtapaluca` `c` join `asentamiento` `a` on((`c`.`codigo_postal` = `a`.`codigo_postal`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `escuela_vw`
--
DROP TABLE IF EXISTS `escuela_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `escuela_vw` AS select `e`.`cct` AS `cct`,`e`.`supervision_cct` AS `supervision_cct`,`e`.`nombre` AS `nombre`,`e`.`director` AS `director`,`e`.`subdirector` AS `subdirector`,`cz`.`subsistema` AS `subsistema`,`e`.`telefono` AS `telefono`,`e`.`email` AS `email`,`e`.`org_social` AS `org_social`,`e`.`hombres` AS `hombres`,`e`.`mujeres` AS `mujeres`,`e`.`total` AS `total`,`e`.`profesores` AS `profesores`,`e`.`grupos` AS `grupos`,`cz`.`id_zona` AS `id_zona`,`e`.`id_turno` AS `id_turno`,`cz`.`id_nivel` AS `id_nivel`,`cz`.`zona` AS `zona`,`t`.`turno` AS `turno`,`n`.`nivel` AS `nivel`,`u`.`latitud` AS `latitud`,`u`.`longitud` AS `longitud`,`u`.`heading` AS `heading`,`u`.`pitch` AS `pitch`,`u`.`direccion` AS `direccion`,`u`.`id_asentamiento` AS `id_asentamiento`,`c`.`municipio` AS `municipio`,`c`.`estado` AS `estado`,`c`.`nom_asentamiento` AS `nom_asentamiento`,`c`.`tipo` AS `tipo`,`c`.`codigo_postal` AS `codigo_postal` from ((((((`escuela` `e` join `supervision` `s` on((`e`.`supervision_cct` = `s`.`cct`))) join `cat_zona` `cz` on((`s`.`id_zona` = `cz`.`id_zona`))) join `cat_nivel` `n` on((`n`.`id_nivel` = `cz`.`id_nivel`))) join `ubicacion` `u` on((`u`.`cct` = `e`.`cct`))) join `cod_ase_view` `c` on((`c`.`id_asentamiento` = `u`.`id_asentamiento`))) join `cat_turno` `t` on((`t`.`id_turno` = `e`.`id_turno`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `personal_vw`
--
DROP TABLE IF EXISTS `personal_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `personal_vw` AS select `e`.`rfc` AS `rfc`,`e`.`nombre_p` AS `nombre`,`e`.`a_paterno` AS `a_paterno`,`e`.`a_materno` AS `a_materno`,`e`.`id_funcion` AS `id_funcion`,`f`.`funcion` AS `funcion` from (`personal` `e` join `cat_funcion` `f` on((`e`.`id_funcion` = `f`.`id_funcion`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `per_esc_vw`
--
DROP TABLE IF EXISTS `per_esc_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `per_esc_vw` AS select `escuela_vw`.`cct` AS `cct`,`escuela_vw`.`supervision_cct` AS `supervision_cct`,`escuela_vw`.`nombre` AS `nombre_e`,`personal`.`rfc` AS `rfc`,`personal`.`nombre` AS `nombre`,`personal`.`a_paterno` AS `a_paterno`,`personal`.`a_materno` AS `a_materno`,`personal`.`id_funcion` AS `id_funcion`,`personal`.`funcion` AS `funcion`,`personal_escuela`.`sueldo` AS `sueldo` from ((`escuela_vw` join `personal_escuela` on((`escuela_vw`.`cct` = `personal_escuela`.`cct`))) join `personal_vw` `personal` on((`personal`.`rfc` = `personal_escuela`.`rfc`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `supervision_vw`
--
DROP TABLE IF EXISTS `supervision_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `supervision_vw` AS select `s`.`cct` AS `cct`,`s`.`sede` AS `sede`,`s`.`oficina` AS `oficina`,`s`.`num_escuelas` AS `num_escuelas`,`s`.`num_grupos` AS `num_grupos`,`s`.`num_alumnos` AS `num_alumnos`,`s`.`id_zona` AS `id_zona`,`l`.`usuario` AS `usuario`,`l`.`password` AS `password`,`l`.`id_logueo` AS `id_logueo`,`l`.`tipo_usuario` AS `tipo_usuario`,`c`.`zona` AS `zona`,`c`.`id_nivel` AS `id_nivel`,`c`.`subsistema` AS `subsistema` from ((`supervision` `s` join `logueo` `l` on((`l`.`cct` = `s`.`cct`))) join `cat_zona` `c` on((`c`.`id_zona` = `s`.`id_zona`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `zonas_vw`
--
DROP TABLE IF EXISTS `zonas_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `zonas_vw` AS select `cz`.`id_zona` AS `id_zona`,`cz`.`zona` AS `zona`,`cz`.`id_nivel` AS `id_nivel`,`cz`.`subsistema` AS `subsistema`,`n`.`nivel` AS `nivel` from (`cat_zona` `cz` join `cat_nivel` `n` on((`cz`.`id_nivel` = `n`.`id_nivel`)));

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asentamiento`
--
ALTER TABLE `asentamiento`
  ADD CONSTRAINT `fk_codigo_postal` FOREIGN KEY (`codigo_postal`) REFERENCES `codigos_ixtapaluca` (`codigo_postal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cat_zona`
--
ALTER TABLE `cat_zona`
  ADD CONSTRAINT `fk_cat_zona_cat_nivel1` FOREIGN KEY (`id_nivel`) REFERENCES `cat_nivel` (`id_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuela`
--
ALTER TABLE `escuela`
  ADD CONSTRAINT `fk_escuela_cat_turno1` FOREIGN KEY (`id_turno`) REFERENCES `cat_turno` (`id_turno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_escuela_supervision1` FOREIGN KEY (`supervision_cct`) REFERENCES `supervision` (`cct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `logueo`
--
ALTER TABLE `logueo`
  ADD CONSTRAINT `fk_supervision` FOREIGN KEY (`cct`) REFERENCES `supervision` (`cct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_cat_funcion1` FOREIGN KEY (`id_funcion`) REFERENCES `cat_funcion` (`id_funcion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal_escuela`
--
ALTER TABLE `personal_escuela`
  ADD CONSTRAINT `fk_personal_has_escuela_escuela1` FOREIGN KEY (`cct`) REFERENCES `escuela` (`cct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_personal_has_escuela_personal1` FOREIGN KEY (`rfc`) REFERENCES `personal` (`rfc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_supervision`
--
ALTER TABLE `per_supervision`
  ADD CONSTRAINT `fk_per_supervision_supervision1` FOREIGN KEY (`cct`) REFERENCES `supervision` (`cct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `supervision`
--
ALTER TABLE `supervision`
  ADD CONSTRAINT `fk_zona` FOREIGN KEY (`id_zona`) REFERENCES `cat_zona` (`id_zona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `fk_asentamiento` FOREIGN KEY (`id_asentamiento`) REFERENCES `asentamiento` (`id_asentamiento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_escuela` FOREIGN KEY (`cct`) REFERENCES `escuela` (`cct`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
