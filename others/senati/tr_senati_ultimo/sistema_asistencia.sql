-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2023 a las 00:07:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id_asistencia` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `hora_entrada` varchar(50) DEFAULT NULL,
  `accion` varchar(50) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id_asistencia`, `id_personal`, `hora_entrada`, `accion`, `fecha`) VALUES
(1, 7, '14:59:33', NULL, NULL),
(2, 7, '15:01:55', NULL, NULL),
(3, 7, '15:13:29', NULL, NULL),
(4, 7, '15:16:14', NULL, '23-05-2023'),
(5, 7, '16:17:48', NULL, '23-05-2023'),
(6, 3, '14:39:41', 'entrada', '2023-05-24'),
(7, 3, '14:40:02', 'salida almuerxo', '2023-05-24'),
(8, 3, '14:47:06', 'entrafa almuerzo', '2023-05-24'),
(9, 3, '15:31:33', 'salida', '2023-05-24'),
(10, 4, '16:15:26', 'entrada', '2023-05-24'),
(11, 4, '16:15:42', 'salida', '2023-05-24'),
(12, 7, '16:44:17', 'entrada', '2023-05-24'),
(13, 7, '16:44:27', 'salida almuerzo', '2023-05-24'),
(14, 7, '16:44:38', 'salida', '2023-05-24'),
(15, 8, '17:06:03', 'entrada', '2023-05-24'),
(16, 8, '17:06:35', 'salida', '2023-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `n_cel` int(11) DEFAULT NULL,
  `tipo_de_contrato` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `apellido`, `dni`, `correo`, `n_cel`, `tipo_de_contrato`) VALUES
(1, 'jhon', 'quispe', 12345678, 'hola@', 987654321, 'trabajo gratis'),
(2, 'jhon2', 'quispe2', 87654321, 'jhon@senati.pe', 987654321, 'tiempo completo'),
(3, 'jordan', 'quispe', 98765432, 'jordan@senati', 963852741, 'tiempo completo'),
(4, 'jordan2', 'quispe2', 98574632, 'jordan@senati.pe', 951874632, 'tiempo parcial'),
(5, 'jose', 'mamani', 69584732, 'jose@senti', 951784632, 'tiempo parcial'),
(6, 'jose2', 'mamani2', 78965412, 'jose@senati.pe', 951654578, 'tiempo parcial'),
(7, 'victor', 'hullpa', 87542163, 'victor@senati', 874596321, 'tiempo completo'),
(8, 'diana', 'quispe', 87596321, 'diana@senati', 968547123, 'tiempo completo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_registro` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_registro`, `id_personal`, `usuario`, `contrasena`) VALUES
(2, 1, 'hola@', '1234567'),
(4, 2, 'jhon@senati.pe', '7654321'),
(5, 3, 'jordan@senati', 'jordan123'),
(7, 4, 'jordan@senati.pe', 'jordan321'),
(9, 5, 'jose@senati', 'jose1234'),
(10, 6, 'jose@senati.pe', 'jose4321'),
(11, 7, 'victor@senati', 'victor123'),
(12, 8, 'diana@senati', 'diana123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registro`),
  ADD UNIQUE KEY `contrasena` (`contrasena`),
  ADD KEY `id_personal` (`id_personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
