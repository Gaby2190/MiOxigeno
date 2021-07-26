-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2021 a las 06:23:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mioxigeno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `capacidad` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `direccion`, `correo`, `telefono`, `cantidad`, `capacidad`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Oximedon Oxigeno Medicinal ', 'Miraflores Bajo (Sur)', 'bralozano125@hotmail.com', '0983325529', '1', '10', 'OOM', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/OOM/601.jpg', 1, '0000-00-00 00:00:00', '2021-07-23 15:32:43'),
(2, 'Oxicentro', 'Colon y Ramon Pinto (Centro)', 'oxicentroloja@gmail.com', '0988894588', '4', '12', 'Oxicentro', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/Oxicentro/403.jpg', 1, '0000-00-00 00:00:00', '2021-07-23 16:34:32'),
(3, 'Oxiwest', '24 de Mayo yZoilo Rodriguez', 'cobijosred@gmail.com', '0994409808', '1', '1', 'Oxiwest', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'PROVEEDOR', 'views/img/proveedores/Oxiwest/428.jpg', 1, '0000-00-00 00:00:00', '2021-07-24 01:59:09'),
(4, 'OxigenosAnita', 'tulcan', 'agtde21@gmail.com', '0962054656', '10', '134', 'OxiAni', '$2a$07$asxx54ahjppf45sd87a5auouAGJl/J/V6TLJvmeDy8dlEUjRpUBWu', 'PROVEEDOR', '', 1, '2021-07-24 23:15:10', '2021-07-25 04:15:10'),
(5, 'diego', 'tulcan', 'diego@gmail.com', '0986006073', '234', '10', 'Daigo', '$2a$07$asxx54ahjppf45sd87a5auhFRVndU3izoyUY1b6tXVP72UBNmoruy', 'PROVEEDOR', '', 1, '0000-00-00 00:00:00', '2021-07-24 04:34:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `direccion`, `correo`, `telefono`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Admin', 'Quito', 'mallopez@hotmail.es', '0987648213', 'admin', '$2a$07$asxx54ahjppf45sd87a5aufV0tZPci244b0DsnuFaj9qLMtNSO/Ju', 'ADMINISTRADOR', 'views/img/usuarios/admin/507.jpg', 1, '2021-07-23 13:33:08', '2021-07-23 18:33:08'),
(3, 'Mario Lopez', 'Flavio Alfaro', 'mallopez@hotmail.es', '0987648213', 'mariolopez', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'USUARIO', 'views/img/usuarios/mariolopez/588.jpg', 1, '2021-07-23 13:14:29', '2021-07-23 18:14:29'),
(4, 'Miguel Lopez', 'Quito', 'joslopez@hotmail.com', '0987648213', 'joslop', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'USUARIO', 'views/img/usuarios/joslop/179.jpg', 1, '0000-00-00 00:00:00', '2021-07-24 01:58:23'),
(5, 'Ana Gabriela', 'Tulcán', 'agtde21@gmail.com', '0962064656', 'Anita21', '$2a$07$asxx54ahjppf45sd87a5auouAGJl/J/V6TLJvmeDy8dlEUjRpUBWu', 'USUARIO', '', 1, '2021-07-24 23:21:16', '2021-07-25 04:21:16'),
(6, 'Admin2', 'UTPL', 'admin2@gmail.com', '0987654321', 'Admin2', '$2a$07$asxx54ahjppf45sd87a5aumpebutjIivk5lCbTUC5V6gdAD5gBqMC', 'ADMINISTRADOR', '', 1, '2021-07-24 23:23:08', '2021-07-25 04:23:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
