-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2017 a las 22:05:27
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `malmedica`
--
CREATE DATABASE IF NOT EXISTS `malmedica` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `malmedica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_receta`
--

CREATE TABLE `detalle_receta` (
  `id_farmaco` varchar(10) NOT NULL,
  `id_receta` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmaco`
--

CREATE TABLE `farmaco` (
  `id_farmaco` varchar(10) NOT NULL,
  `descripcion_farmaco` varchar(45) NOT NULL,
  `precio_farmaco` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `id_tipo_farmaco` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` varchar(10) NOT NULL,
  `descripcion_pefil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` varchar(10) NOT NULL,
  `fecha_emision` datetime NOT NULL,
  `total_receta` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `id_usuarios` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_farmaco`
--

CREATE TABLE `tipo_farmaco` (
  `id_tipo_farmaco` varchar(10) NOT NULL,
  `descripcion_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(10) NOT NULL,
  `login_usuario` varchar(20) NOT NULL,
  `pass_usuario` varchar(20) NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `apellido_usuario` varchar(15) NOT NULL,
  `correo_usuario` varchar(40) NOT NULL,
  `edad_usuario` int(11) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `id_perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_receta`
--
ALTER TABLE `detalle_receta`
  ADD PRIMARY KEY (`id_farmaco`,`id_receta`),
  ADD KEY `fk_farmacos_has_recetas_recetas1_idx` (`id_receta`),
  ADD KEY `fk_farmacos_has_recetas_farmacos1_idx` (`id_farmaco`);

--
-- Indices de la tabla `farmaco`
--
ALTER TABLE `farmaco`
  ADD PRIMARY KEY (`id_farmaco`),
  ADD KEY `fk_farmacos_Tipo_farmaco_idx` (`id_tipo_farmaco`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`,`id_usuarios`),
  ADD KEY `fk_recetas_usuarios1_idx` (`id_usuarios`);

--
-- Indices de la tabla `tipo_farmaco`
--
ALTER TABLE `tipo_farmaco`
  ADD PRIMARY KEY (`id_tipo_farmaco`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuarios_perfil1_idx` (`id_perfil`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_receta`
--
ALTER TABLE `detalle_receta`
  ADD CONSTRAINT `fk_farmacos_has_recetas_farmacos1` FOREIGN KEY (`id_farmaco`) REFERENCES `farmaco` (`id_farmaco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_farmacos_has_recetas_recetas1` FOREIGN KEY (`id_receta`) REFERENCES `receta` (`id_receta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `farmaco`
--
ALTER TABLE `farmaco`
  ADD CONSTRAINT `fk_farmacos_Tipo_farmaco` FOREIGN KEY (`id_tipo_farmaco`) REFERENCES `tipo_farmaco` (`id_tipo_farmaco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `fk_recetas_usuarios1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuarios_perfil1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
