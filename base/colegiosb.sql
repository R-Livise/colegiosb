-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2017 a las 09:25:50
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegiosb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Usuario` varchar(10) NOT NULL COMMENT 'Nombre de usuario',
  `Password` varchar(8) NOT NULL COMMENT 'Contraseña de usuario',
  `NivelAcc` varchar(10) NOT NULL COMMENT 'Nivel de acceso',
  `CodigoAd` varchar(15) NOT NULL COMMENT 'Codigo del Admimistrador'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Usuario`, `Password`, `NivelAcc`, `CodigoAd`) VALUES
('jperez', 'cole1234', 'Basico', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Codigo` int(11) UNSIGNED NOT NULL COMMENT 'Codigo del alumno',
  `Nombres` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del alumno',
  `Apellidos` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del alumno',
  `Sexo` char(1) NOT NULL COMMENT 'Sexo del alumno',
  `FechaNacimineto` date NOT NULL COMMENT 'Fecha de nacimiento del alumno',
  `AGraduacion` year(4) NOT NULL COMMENT 'Año de graduación secundaria ',
  `DNI` int(8) NOT NULL COMMENT 'DNI',
  `NCelularPadre1` int(9) NOT NULL COMMENT 'Numero del Emergencia 1',
  `NCelularPadre2` int(9) DEFAULT NULL COMMENT 'Numero  de Emergencia 2',
  `Email` varchar(100) DEFAULT NULL COMMENT 'Email de contacto'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Codigo`, `Nombres`, `Apellidos`, `Sexo`, `FechaNacimineto`, `AGraduacion`, `DNI`, `NCelularPadre1`, `NCelularPadre2`, `Email`) VALUES
(2025170001, 'Enesto', 'Torres del Prado', 'M', '0000-00-00', 2025, 78025236, 954852365, 949481351, 'rafaeldelbar2da@gmail.com'),
(2025170012, 'Sofia Angela', 'Rodrigez NuÃ±ez', 'F', '2008-10-11', 2026, 77035474, 905481611, 0, 'jesl_12@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `IDAnun` int(5) UNSIGNED ZEROFILL NOT NULL COMMENT 'ID del anuncio',
  `ImagenA` varchar(60) NOT NULL COMMENT 'Enlace a la Imagen',
  `Fecha` date NOT NULL COMMENT 'Fecha de Publicacion'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`IDAnun`, `ImagenA`, `Fecha`) VALUES
(00001, 'mm/imagen/anuncios/Anuncio-00001.jpg', '2017-11-28'),
(00002, 'mm/imagen/anuncios/Anuncio-00002.jpg', '2017-11-28'),
(00003, 'mm/imagen/anuncios/Anuncio-00003.jpg', '2017-11-28'),
(00004, 'mm/imagen/anuncios/Anuncio-00004.jpg', '2017-11-28'),
(01849, 'mm/imagen/anuncios/Anuncio-01849.jpg', '2017-11-28'),
(01850, 'mm/imagen/anuncios/Anuncio-01850.jpg', '2017-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celadarioescolar`
--

CREATE TABLE `celadarioescolar` (
  `MesN` int(2) NOT NULL COMMENT 'Mes en Numeros',
  `MesT` varchar(3) NOT NULL COMMENT 'Mes en Texto',
  `DiaN` int(2) NOT NULL COMMENT 'Dia en Numeros',
  `Celebracion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Que se celebrar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celadarioescolar`
--

INSERT INTO `celadarioescolar` (`MesN`, `MesT`, `DiaN`, `Celebracion`) VALUES
(1, 'ENE', 1, 'Feliz Año Nuevo'),
(3, 'MAR', 8, 'Día Internacional de la Mujer'),
(3, 'MAR', 14, 'Nacimiento de Albert Einstein'),
(3, 'MAR', 15, 'Día Mundial de los Derechos del Consumidor'),
(3, 'MAR', 21, 'Día Internacional del Síndrome de Down\"'),
(3, 'MAR', 22, 'Día Mundial del Agua'),
(3, 'MAR', 24, 'Día de la Lucha contra la Tuberculosis'),
(3, 'MAR', 26, 'La Hora del Planeta'),
(3, 'MAR', 28, 'Nacimiento de Mario Vargas Llosa'),
(4, 'ABR', 1, 'Día de la Educación'),
(4, 'ABR', 2, 'Día Mundial del Libro Infantil'),
(4, 'ABR', 7, 'Día Mundial de la Salud'),
(4, 'ABR', 8, 'Aniversario del Sacrificio Heroico de Pedro Vilca Apaza'),
(4, 'ABR', 12, 'Nacimiento del Inca Garcilaso de La Vega'),
(4, 'ABR', 14, 'Día de las Américas'),
(4, 'ABR', 15, 'Fallecimiento de César Vallejo'),
(4, 'ABR', 18, 'Día de la Educación Básica Alternativa'),
(4, 'ABR', 22, 'Día de la Tierra'),
(4, 'ABR', 23, 'Día del Idioma Español'),
(5, 'MAY', 1, 'Día Mundial del Trabajo'),
(5, 'MAY', 2, 'Aniversario del Combate del Dos de Mayo'),
(5, 'MAY', 3, 'Día de la Libertad de Prensa'),
(5, 'MAY', 8, 'Día Mundial de la Cruz Roja'),
(5, 'MAY', 11, 'Aniversario de la acción heroica de María Parado de Bellido'),
(5, 'MAY', 12, 'Día Internacional para la Erradicación del Trabajo Infantil'),
(5, 'MAY', 14, 'Día de la Madre'),
(5, 'MAY', 15, 'Día Internacional de la Familia'),
(5, 'MAY', 17, 'Día Mundial del Internet'),
(5, 'MAY', 18, 'Sacrificio heroico de Túpac Amaru II y Micaela Bastidas'),
(5, 'MAY', 21, 'El Combate de Iquique'),
(5, 'MAY', 22, 'Día Internacional de la Diversidad Biológica'),
(5, 'MAY', 25, 'Día de la Educación Inicial'),
(5, 'MAY', 26, 'Día de la Integración Andina'),
(5, 'MAY', 28, 'Día Internacional del Juego'),
(5, 'MAY', 30, 'Día Nacional de la Papa'),
(5, 'MAY', 31, 'Día del no Fumador'),
(6, 'JUN', 2, 'Día del Prócer Faustino Sánchez Carrión'),
(6, 'JUN', 3, 'Fallecimiento de Julio C. Tello, padre de la Arqueología Peruana'),
(6, 'JUN', 4, 'Día Internacional de los Niños Víctimas Inocentes de la Agresión'),
(6, 'JUN', 5, 'Día Mundial del Medio Ambiente'),
(6, 'JUN', 7, 'Aniversario de la Batalla de Arica y Día del Héroe Francisco Bolognesi'),
(6, 'JUN', 8, 'Día Mundial de los Océanos'),
(6, 'JUN', 12, 'Día Mundial Contra el Trabajo Infantil'),
(6, 'JUN', 15, 'Día de la Canción Andina'),
(6, 'JUN', 17, 'Día Mundial de Lucha Contra la Desertificación y la Sequía'),
(6, 'JUN', 18, 'Día del Padre'),
(6, 'JUN', 20, 'Aniversario del primer grito de Francisco de Zela'),
(6, 'JUN', 22, 'Fallecimiento de Manuel González Prada'),
(6, 'JUN', 24, 'Día de la Fiesta del Sol o Inti Raymi'),
(6, 'JUN', 26, 'Día del Campesino'),
(6, 'JUN', 26, 'Día del Registro del Estado Civil'),
(6, 'JUN', 28, 'Día Nacional del Cebiche'),
(6, 'JUN', 29, 'Día del Papa - San Pedro y San Pablo'),
(6, 'JUN', 29, 'Día del Sacrificio del Mártir José Olaya Balandra'),
(7, 'JUL', 1, 'Día del Parque Nacional Huascarán'),
(7, 'JUL', 6, 'Día del Maestro'),
(7, 'JUL', 7, 'Descubrimiento de Machu Picchu'),
(7, 'JUL', 7, 'Nace José María Eguren'),
(7, 'JUL', 9, 'Día de las Batallas de Pucará, Marcavalle y Concepción'),
(7, 'JUL', 10, 'Aniversario de la Batalla de Huamachuco'),
(7, 'JUL', 11, 'Día Mundial de la Población'),
(7, 'JUL', 12, 'Nacimiento de Pablo Neruda, poeta'),
(7, 'JUL', 15, 'Aniversario de la Muerte del Coronel Leoncio Prado'),
(7, 'JUL', 21, 'Fallecimiento del pintor Sérvulo Gutiérrez'),
(7, 'JUL', 23, 'Día del héroe capitán FAP José Abelardo Quiñones'),
(7, 'JUL', 24, 'Nacimiento del Libertador Simón Bolívar'),
(7, 'JUL', 28, 'Día de la Proclamación de la Independencia del Perú'),
(8, 'AGO', 6, 'Batalla de Junín'),
(8, 'AGO', 9, 'Día Internacional de las Poblaciones Indígenas'),
(8, 'AGO', 17, 'Muerte del General don José de San Martín'),
(8, 'AGO', 22, 'Día Mundial del Folclor'),
(8, 'AGO', 26, 'Día del Adulto Mayor'),
(8, 'AGO', 27, 'Día de la Defensa Nacional'),
(8, 'AGO', 28, 'Reincorporación de Tacna al seno de la Patria'),
(8, 'AGO', 30, 'Día de Santa Rosa de Lima'),
(8, 'AGO', 31, 'Día del Mariscal Ramón Castilla'),
(9, 'SET', 1, 'Semana de la Educación Vial'),
(9, 'SET', 7, 'Día de los Derechos Cívicos de la Mujer'),
(9, 'SET', 8, 'Día Internacional de la Alfabetización'),
(9, 'SET', 8, 'Aniversario del Desembarco de la Expedición Libertadora de San Martín en Paracas'),
(9, 'SET', 1, 'Día Mundial de la Población'),
(9, 'SET', 16, 'Día Internacional para la Protección de la Capa de Ozono.'),
(9, 'SET', 23, 'Día de la Primavera, de la Juventud'),
(9, 'SET', 22, 'Semana Nacional de los Derechos Humanos'),
(9, 'SET', 24, 'Día del poeta José Gálvez Barrenechea'),
(9, 'SET', 25, 'Aniversario de Antonio Raimondi'),
(9, 'SET', 27, 'Día Mundial del Turismo'),
(9, 'SET', 29, 'Día Mundial de los Mares'),
(10, 'OCT', 1, 'Día del Periodismo'),
(10, 'OCT', 2, 'Semana del Niño'),
(10, 'OCT', 5, 'Aniversario de la Acción Heroica de Daniel Alcides Carrión'),
(10, 'OCT', 6, 'Día del ilustre tradicionalista don Ricardo Palma'),
(10, 'OCT', 8, 'Día del Combate de Angamos'),
(10, 'OCT', 12, 'Descubrimiento de América'),
(10, 'OCT', 16, 'Día de las Naciones Unidas'),
(10, 'OCT', 17, 'Día Internacional para la Erradicación de la Pobreza'),
(10, 'OCT', 21, 'Día Nacional de Ahorro de Energía'),
(10, 'OCT', 31, 'Día de la Canción Criolla\"'),
(11, 'NOV', 1, 'Semana Nacional Forestal'),
(11, 'NOV', 4, 'Rebelión de Túpac Amaru II'),
(11, 'NOV', 10, 'Semana de la Biblioteca Escolar'),
(11, 'NOV', 20, 'Día de la Declaración Universal de los Derechos del Niño e Iniciación de la Semana del Niño'),
(11, 'NOV', 27, 'Batalla de Tarapacá'),
(12, 'DIC', 1, 'Día Mundial de la Lucha contra el SIDA'),
(12, 'DIC', 9, 'Aniversario de la Batalla de Ayacucho'),
(12, 'DIC', 10, 'Declaración Universal de los Derechos Humanos'),
(12, 'DIC', 14, 'Día del Cooperativismo Peruano'),
(12, 'DIC', 25, 'Navidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Titulo` varchar(150) NOT NULL COMMENT 'Titulo de la Noticia',
  `Fecha` date NOT NULL COMMENT 'Fecha de Publicacion',
  `Autor` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Anonimo' COMMENT 'Nombre del autor',
  `Parrafo1` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Primer Párrafo',
  `Parrafo2` text CHARACTER SET utf8 COLLATE utf8_spanish_ci COMMENT 'Segundo Parrafo',
  `Parrafo3` text CHARACTER SET utf8 COLLATE utf8_spanish_ci COMMENT 'Tercer Parrafo',
  `IDNoti` int(5) UNSIGNED ZEROFILL NOT NULL COMMENT 'Orden de publicacion',
  `Imagen` varchar(50) NOT NULL COMMENT 'Foto de naoticia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Titulo`, `Fecha`, `Autor`, `Parrafo1`, `Parrafo2`, `Parrafo3`, `IDNoti`, `Imagen`) VALUES
('DÃ­a de Arequipa', '2017-11-30', 'Sofia', 'Hoy en nuestros feugiat neque ut pharetra.\r\nSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse tristique velit in ornare porta. Etiam neque leo, consectetur non mattis eu, convallis a libero. Nunc ac fringilla libero.', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 00002, 'mm/imagen/noti/Noti-00002.jpg'),
('Compitiendo y asiendo amistades', '2017-11-30', 'Carlos', 'Hoy nos reunimos con la instituciÃ³n vecina el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia ', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 00003, 'mm/imagen/noti/Noti-00003.jpg'),
('Feliz dÃ­a de la infancia', '2017-11-30', 'Anonimo', 'Cuando eres niÃ±o todo los dÃ­a deben ser dÃ­as feices el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia el parrafo de la noticia ', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor neque, a mollis libero. Praesent iaculis odio id fermentum blandit. Maecenas vehicula in mi sit amet eleifend. Suspendisse trist ique velit in ornare porta.', 00004, 'mm/imagen/noti/noti-00004.jpg'),
('Hoy soy Picaso', '2017-11-30', 'Samuel', 'Comenzando con un pincelSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequ ', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequ', 'Suspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequSuspendisse potenti. Aliquam ac tempor arcu. In ac tempor nequ', 00005, 'mm/imagen/noti/Noti-00005.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`CodigoAd`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`IDAnun`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`IDNoti`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `IDAnun` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ID del anuncio', AUTO_INCREMENT=1851;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `IDNoti` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Orden de publicacion', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
