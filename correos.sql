-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-09-2020 a las 16:47:31
-- Versión del servidor: 5.7.31-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.14-6+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `empresa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `giro` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`empresa`, `giro`, `id`, `nombre`, `apellido`, `telefono`, `correo`, `is_active`, `created_at`) VALUES
('Personal', 'Electricidad/Construccion', 1, 'Mario', 'Cabrera', '6631010804', 'mcabrera@plomeriadelta.com', 1, '2020-09-01 17:38:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
