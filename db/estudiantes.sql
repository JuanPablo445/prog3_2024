-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 04:22:25
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `students` (
  `idStudent` int(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `surname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `school` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `students` (`idStudent`, `dni`, `surname`, `name`, `birthdate`, `phone`, `address`, `email`, `password`, `school`) VALUES
(1, 44341300, 'ACUÑA ', 'CARO ANDRÉS NICOLÁS', '2002-12-05', '', '', '', '44341300', 'Epet Nro3'),
(2, 44342301, 'BAIGORRIA ', 'ARIANA AILIN ', '2003-02-03', '', '', '', '44342301', 'Epet Nro3'),
(3, 44341303, 'BENEITE BIRNE', 'KAREN ELISABET ', '2002-10-17', '', '', '', '44341303', 'Epet Nro3'),
(4, 44120304, 'BONINO ', 'ENZO  ', '2002-10-23', '', '', '', '44120304', 'Epet Nro3'),
(5, 44680305, 'BUFFAGNE ', 'TERESITA ANTONELA ', '2002-03-20', '', '', '', '44680305', 'Epet Nro3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`idEstudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `students`
  MODIFY `idStudent` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
