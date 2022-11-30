SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `escrito_final`
--
CREATE DATABASE IF NOT EXISTS `escrito_final` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `escrito_final`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(5) NOT NULL,
  `nombre_alumno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `telefono` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edad` int(3) NOT NULL,
  `centro` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curso` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre_alumno`, `fecha`, `telefono`, `email`, `edad`, `centro`, `curso`) VALUES
(1, 'Pedrito Alcachofa', '2022-11-26 09:39:58', '', 'pedritoalcachofa@gmail.com', 27, 'Escuela Técnica Superior de Maldonado - UTU', 'Informática II'),
(2, 'Francisco Peña', '2022-11-26 10:17:18', '123456789', '', 18, 'Polo Educativo Tecnológico Arrayanes - UTU', ''),
(3, 'Wilson Reyero', '2022-11-26 10:17:18', '054623815', 'wilson123@outlook.com', 21, '', ''),
(4, 'German Quintanilla', '2022-11-30 07:07:03', '376265483', 'germanquint@gmail.com', 44, 'Polo Educativo Tecnológico Arrayanes - UTU', 'Informática III - Desarrollo y Soporte'),
(5, 'Miguel de los Santos', '2022-11-30 07:12:09', '', 'miguel777@gmail.com', 19, 'Escuela Técnica Superior de Maldonado - UTU', 'Electromecánica'),
(6, 'Florencia Giménez', '2022-11-30 07:16:47', '012394857', '', 32, 'Polo Educativo Tecnológico Arrayanes - UTU', 'Audiovisual');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;