-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2025 a las 17:39:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocina_japonesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina_estudiantes`
--

CREATE TABLE `cocina_estudiantes` (
  `id_usuario` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cocina_estudiantes`
--

INSERT INTO `cocina_estudiantes` (`id_usuario`, `carrera`, `matricula`) VALUES
(3, 'Diseño DIgital de Medios Interactivos', '208780');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina_resenas`
--

CREATE TABLE `cocina_resenas` (
  `id_resena` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `platillo` varchar(300) NOT NULL DEFAULT 'General',
  `comentario` text NOT NULL,
  `calificacion` tinyint(4) NOT NULL CHECK (`calificacion` between 1 and 5),
  `fecha_resena` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cocina_resenas`
--

INSERT INTO `cocina_resenas` (`id_resena`, `id_usuario`, `platillo`, `comentario`, `calificacion`, `fecha_resena`) VALUES
(2, 3, 'Sushi 寿司', 'Esta muy rico, recomiendo bastante.', 5, '2025-11-11 14:09:13'),
(3, 3, 'Sushi 寿司', 'Que ricooooo', 5, '2025-11-13 14:43:21'),
(4, 3, 'Sushi 寿司', 'Ya no me gusto tanto esta comida', 3, '2025-11-13 15:54:58'),
(5, 3, 'General', 'Me encanta este sitio web', 5, '2025-11-13 16:45:35'),
(6, 4, 'General', 'Excelente información', 5, '2025-11-13 16:47:46'),
(7, 3, 'General', 'Regulinchi la pagina la verdad', 3, '2025-11-13 17:05:41'),
(8, 3, 'General', 'Esta bueno esto', 5, '2025-11-14 09:34:07'),
(9, 3, 'General', 'Me guhfjdshfddijsksdhjfhdsjdsijas', 1, '2025-11-14 09:44:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina_usuarios`
--

CREATE TABLE `cocina_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `tipo_usuario` enum('Estudiante','Docente','Externo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cocina_usuarios`
--

INSERT INTO `cocina_usuarios` (`id_usuario`, `nombre_usuario`, `correo`, `contrasena`, `tipo_usuario`) VALUES
(3, 'Brayan Mata Garay', 'brayan@hotmail.com', '$2y$10$WPUSkMG1HxsdO.4wAIk6AOpQNf0GDoh3t9pMAL8YZ9/8xKVu6M1du', 'Estudiante'),
(4, 'Luis Robles Frayre', 'luisito@Gmail.com', '$2y$10$B/Hq91JBLrr.ZMbrjbozvuhpkveqrtMQO3frafbsAEIRgDjmZo8.u', 'Externo'),
(5, 'Pablo', 'Pablo@Hotmail.com', '$2y$10$K5tcCff8hnb79nHMXh/AZe.fZiynGwPG8oOPtgumB55mBZ5GbEI6G', 'Externo'),
(6, 'Pedro', 'pedro@gmail.com', '$2y$10$eEOdVo6IT10roFtoV84KPO.H.Ew8p6uRiBmXEdx5rv5.N1PRVxwm6', 'Externo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocina_estudiantes`
--
ALTER TABLE `cocina_estudiantes`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `cocina_resenas`
--
ALTER TABLE `cocina_resenas`
  ADD PRIMARY KEY (`id_resena`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `cocina_usuarios`
--
ALTER TABLE `cocina_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocina_resenas`
--
ALTER TABLE `cocina_resenas`
  MODIFY `id_resena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cocina_usuarios`
--
ALTER TABLE `cocina_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cocina_estudiantes`
--
ALTER TABLE `cocina_estudiantes`
  ADD CONSTRAINT `cocina_estudiantes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `cocina_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cocina_resenas`
--
ALTER TABLE `cocina_resenas`
  ADD CONSTRAINT `cocina_resenas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `cocina_usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
