-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 17:01:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_db_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `Id_Asistencias` int(11) NOT NULL,
  `ID_GRUPO` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `Fecha_llegada` date NOT NULL,
  `Hora_llegada` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `Id_clase` int(11) NOT NULL,
  `ID_GRADO` int(11) NOT NULL,
  `ID_PROFESOR` int(11) NOT NULL,
  `ID_MATERIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `id_directivos` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `num_documento` int(11) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `passward_directivo` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `correoPer` varchar(255) NOT NULL,
  `correoInst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id_directivos`, `nombre`, `tipo_documento`, `num_documento`, `primer_apellido`, `segundo_apellido`, `telefono`, `passward_directivo`, `genero`, `correoPer`, `correoInst`) VALUES
(1, 'Gabriel', 'CC', 3213232, 'Duarte', 'Arias', 13123, 'hachiko', 'Hombre', 'duarte@gmail.com', 'hachi2992@gmail.com'),
(2, 'Gabriel', 'CE', 232433, 'Duarte', 'Arias', 3212431, 'hachik2111', 'Femenino', 'duarte@gmail.com', 'hachi2992@gmail.com'),
(3, 'Gabriel', 'CE', 232433, 'Duarte', 'Arias', 3212431, 'hachik2111', 'Femenino', 'duarte@gmail.com', 'hachi2992@gmail.com'),
(4, 'Gabriel', 'CE', 232433, 'Duarte', 'Arias', 3212431, 'hachik2111', 'Femenino', 'duarte@gmail.com', 'hachi2992@gmail.com'),
(5, 'Gabriel', 'CE', 232433, 'Duarte', 'Arias', 3212431, 'hachik2111', 'Femenino', 'duarte@gmail.com', 'hachi2992@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id_Estudiante` int(11) NOT NULL,
  `Tipo_Doc` varchar(20) NOT NULL,
  `Num_Doc` int(11) NOT NULL,
  `Primer_Nombre` varchar(20) NOT NULL,
  `Segundo_Nombre` varchar(20) NOT NULL,
  `Primer:Apellido` varchar(20) NOT NULL,
  `Segundo_Apellido` varchar(20) NOT NULL,
  `Fecha_Nacimiento` int(11) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo_Personal` varchar(200) NOT NULL,
  `Correo_Institucional` varchar(20) NOT NULL,
  `ID_ASISTENCIAS` int(11) NOT NULL,
  `ID_SEDE` int(11) NOT NULL,
  `Jornada` varchar(10) NOT NULL,
  `Num_Aula` int(11) NOT NULL,
  `passward_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante:asistencia`
--

CREATE TABLE `estudiante:asistencia` (
  `ID_ASISTENCIA` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `Id_Grado` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `ID_SEDE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id_Grupo` int(11) NOT NULL,
  `ID_GRADO` int(11) NOT NULL,
  `ID_MATERIA` int(11) NOT NULL,
  `ID_PROFESOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huella`
--

CREATE TABLE `huella` (
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `HUELLA` tinyint(1) NOT NULL,
  `ID_GRADO` int(11) NOT NULL,
  `ID_GRUPO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ciudad` varchar(20) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `ID_DIRECTIVOS` int(11) NOT NULL,
  `ID_SEDE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `Id_Materia` int(11) NOT NULL,
  `Nombre_Materia` varchar(20) NOT NULL,
  `ID_PROFESOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Id profesores` int(11) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `num_documento` int(11) NOT NULL,
  `primer_nombre` varchar(10) NOT NULL,
  `segundo_nombre` varchar(10) NOT NULL,
  `primer_apellido` varchar(10) NOT NULL,
  `segundo_apellido` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `ID_GRADO` int(11) NOT NULL,
  `Correo_institucional` varchar(255) NOT NULL,
  `Correo_personal` varchar(255) NOT NULL,
  `passward_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_grup`
--

CREATE TABLE `prof_grup` (
  `ID_PROFESORES` int(11) NOT NULL,
  `ID_GRUPO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `Id_Sede` int(11) NOT NULL,
  `Nombre_sede` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`Id_Asistencias`),
  ADD KEY `ID_CLASE` (`ID_GRUPO`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`Id_clase`),
  ADD KEY `ID_CURSO` (`ID_GRADO`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`),
  ADD KEY `ID_MATERIA` (`ID_MATERIA`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`id_directivos`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id_Estudiante`),
  ADD KEY `ID_ASISTENCIAS` (`ID_ASISTENCIAS`),
  ADD KEY `ID_SEDE` (`ID_SEDE`);

--
-- Indices de la tabla `estudiante:asistencia`
--
ALTER TABLE `estudiante:asistencia`
  ADD KEY `ID_ASISTENCIA` (`ID_ASISTENCIA`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`Id_Grado`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_SEDE` (`ID_SEDE`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`),
  ADD KEY `ID_GRADO` (`ID_GRADO`),
  ADD KEY `ID_MATERIA` (`ID_MATERIA`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`);

--
-- Indices de la tabla `huella`
--
ALTER TABLE `huella`
  ADD PRIMARY KEY (`HUELLA`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_GRUPO` (`ID_GRUPO`),
  ADD KEY `ID_GRADO` (`ID_GRADO`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`),
  ADD KEY `ID_DIRECTIVOS` (`ID_DIRECTIVOS`),
  ADD KEY `ID_SEDE` (`ID_SEDE`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`Id_Materia`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Id profesores`);

--
-- Indices de la tabla `prof_grup`
--
ALTER TABLE `prof_grup`
  ADD KEY `Id profesores` (`ID_PROFESORES`),
  ADD KEY `ID_GRUPO` (`ID_GRUPO`),
  ADD KEY `ID_PROFESORES` (`ID_PROFESORES`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`Id_Sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id_directivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`Id_Grupo`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`Id_Estudiante`);

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`ID_GRADO`) REFERENCES `grado` (`Id_Grado`),
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materia` (`Id_Materia`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`ID_SEDE`) REFERENCES `sede` (`Id_Sede`),
  ADD CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`ID_ASISTENCIAS`) REFERENCES `estudiante:asistencia` (`ID_ASISTENCIA`);

--
-- Filtros para la tabla `estudiante:asistencia`
--
ALTER TABLE `estudiante:asistencia`
  ADD CONSTRAINT `estudiante:asistencia_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`Id_Estudiante`);

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`Id_Estudiante`),
  ADD CONSTRAINT `grado_ibfk_2` FOREIGN KEY (`ID_SEDE`) REFERENCES `sede` (`Id_Sede`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`ID_GRADO`) REFERENCES `grado` (`Id_Grado`),
  ADD CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materia` (`Id_Materia`),
  ADD CONSTRAINT `grupo_ibfk_3` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesores` (`Id profesores`);

--
-- Filtros para la tabla `huella`
--
ALTER TABLE `huella`
  ADD CONSTRAINT `huella_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`Id_Estudiante`),
  ADD CONSTRAINT `huella_ibfk_2` FOREIGN KEY (`ID_GRADO`) REFERENCES `grado` (`Id_Grado`),
  ADD CONSTRAINT `huella_ibfk_3` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`Id_Grupo`);

--
-- Filtros para la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`ID_SEDE`) REFERENCES `sede` (`Id_Sede`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesores` (`Id profesores`);

--
-- Filtros para la tabla `prof_grup`
--
ALTER TABLE `prof_grup`
  ADD CONSTRAINT `prof_grup_ibfk_1` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`Id_Grupo`),
  ADD CONSTRAINT `prof_grup_ibfk_2` FOREIGN KEY (`ID_PROFESORES`) REFERENCES `profesores` (`Id profesores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
