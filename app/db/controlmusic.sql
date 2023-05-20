-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2019 a las 18:01:27
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlmusic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Id_curso` int(10) NOT NULL,
  `NomCurso` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`Id_curso`, `NomCurso`) VALUES
(1, 'Guitarra'),
(2, 'Tecnica vocal'),
(3, 'Piano'),
(4, 'Bateria'),
(5, 'Violin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_emple` int(10) NOT NULL,
  `NomEmple` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ApelEmple` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `EdadEmple` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TelEmple` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `CorreoEmple` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_emple`, `NomEmple`, `ApelEmple`, `EdadEmple`, `TelEmple`, `CorreoEmple`, `Id_rol`) VALUES
(1, 'Juan', 'Armero', '34', '2973625', 'juanar8@gmail.com', 1),
(3, 'Diego', 'Marin', '31', '9384634', 'marindi30@gmail.com', 2),
(4, 'Alexander', 'Salcedo', '33', '6094736', 'salcealex7@gmail.com', 2),
(5, 'Orlando', 'Perez', '28', '7486539', 'orlan2020@gmail.com', 2),
(6, 'Santiago', 'Orozco', '27', '7365498', 'raforozc0@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id_estu` int(10) NOT NULL,
  `NomEstu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ApelEstu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `EdadEstu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TelEstu` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CorreoEstu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Id_curso` int(10) NOT NULL,
  `Id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id_estu`, `NomEstu`, `ApelEstu`, `EdadEstu`, `TelEstu`, `CorreoEstu`, `Id_curso`, `Id_rol`) VALUES
(1, 'Andres', 'Gutierrez', '14', '22872161', 'andregu3@gmail.com', 2, 3),
(3, 'Marlon', 'Jimenez', '15', '6594847', 'marlojim3@gmail.com', 0, 3),
(5, 'Jason', 'Martinez', '12', '5837435', 'jasmar6@gmail.com', 1, 3),
(6, 'Carlos', 'Alonso', '15', '4947565', 'caralon89@gmail.com', 4, 3),
(7, 'Nicolas', 'Hernandez', '16', '6837465', 'nicoolbax5@gmail.com', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `Id_horari` int(10) NOT NULL,
  `Id_emple` int(10) NOT NULL,
  `Id_curso` int(10) NOT NULL,
  `HoraInicio` time NOT NULL,
  `HoraFin` time NOT NULL,
  `Jornada` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`Id_horari`, `Id_emple`, `Id_curso`, `HoraInicio`, `HoraFin`, `Jornada`) VALUES
(1, 3, 4, '09:00:00', '11:00:00', 'MaÃ±ana'),
(3, 1, 2, '07:30:00', '10:00:00', 'MaÃ±ana'),
(5, 4, 1, '04:00:00', '06:00:00', 'Tarde'),
(6, 5, 4, '01:00:00', '03:30:00', 'Tarde'),
(7, 6, 3, '02:00:00', '03:00:00', 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id_rol` int(10) NOT NULL,
  `NomRol` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id_rol`, `NomRol`) VALUES
(1, 'Administrador'),
(2, 'Instructor'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usu` int(10) NOT NULL,
  `NomUsua` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ContraUsua` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `NomUsua`, `ContraUsua`, `Id_rol`) VALUES
(1, 'Marlon Jimenez', '$2y$10$YXaHdAWL/6VocnzzAx', 3),
(2, 'Juan Armero', 'arme5', 1),
(3, 'Carlos Alonso', 'cara6', 3),
(6, 'Alexander Salcedo', '$2y$10$Dsav6DVA2oXfPsLqTM', 2),
(7, 'Orlando Perez', '$2y$10$u8KUMaOmv5LRQG2NT8', 2),
(8, 'Santiago Orozco', '$2y$10$.WZSzMsLJ/2PtXxCtF', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Id_curso`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_emple`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id_estu`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`Id_horari`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `Id_curso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_emple` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `Id_estu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `Id_horari` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
