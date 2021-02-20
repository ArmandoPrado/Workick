-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-02-2021 a las 23:36:52
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16193735_workickdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`Id`, `Descripcion`) VALUES
(1, 'Fontaneria'),
(3, 'Construccion'),
(4, 'Mecanica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cuenta`
--

CREATE TABLE `Cuenta` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Municipio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Estatus` int(11) NOT NULL,
  `FechaAlta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Cuenta`
--

INSERT INTO `Cuenta` (`Id`, `Nombre`, `Correo`, `Contrasena`, `Direccion`, `Municipio`, `Estatus`, `FechaAlta`) VALUES
(1, 'Luis Armando Prado Núñez', 'luisarmandopradonunez@gmail.com', '123*', 'Navio 7', 'Zapopan', 1, '2021-02-20 11:18:40'),
(2, 'Jose Serna', 'serna@gmail.com', '123*', 'Olimpica 23', 'Guadalajara', 2, '2021-02-20 11:18:40'),
(5, 'Julio', 'julio@gmail.com', '123*', 'Blv. Marcelino Barragan ', '2340', 2, '2021-02-20 11:21:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mensaje`
--

CREATE TABLE `Mensaje` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `IdContratista` int(11) NOT NULL,
  `IdTrabajador` int(11) NOT NULL,
  `Contenido` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `HoraEnvio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Propuesta`
--

CREATE TABLE `Propuesta` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `IdContratista` int(11) NOT NULL,
  `IdTrabajador` int(11) NOT NULL,
  `UbicacionPropuesta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Municipio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `FechaAlta` date NOT NULL,
  `Estatus` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Resena`
--

CREATE TABLE `Resena` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `IdContratista` int(11) NOT NULL,
  `IdTrabajador` int(11) NOT NULL,
  `Resena` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Estrellas` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Trabajador`
--

CREATE TABLE `Trabajador` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  `DescripcionCorta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DescripcionLarga` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `CalificacionGlobal` int(11) NOT NULL,
  `CalificacionPrecio` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Trabajos` int(11) NOT NULL,
  `TituloTrabajo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Trabajador`
--

INSERT INTO `Trabajador` (`Id`, `IdCuenta`, `DescripcionCorta`, `DescripcionLarga`, `CalificacionGlobal`, `CalificacionPrecio`, `Categoria`, `Trabajos`, `TituloTrabajo`) VALUES
(1, 2, 'Albañil con gran calidad de terminados, muy detallista', 'wswdewed wefwefwe wefwfwe efwe few fe fewwfwefweewfew wefwefweihf efufwebffubwuef wuefwgeufguw fuwegfugwuef wefgweufgu weuffgwueffg weufgwuefguw', 4, 3, 3, 2, 'Albañil'),
(2, 5, 'Especialista en hidroneumáticos ', 'uIF EFY few grrgfeiurgoeriugu idfd vudsg fves fvidsuf gviusd rgf vsegrgvyer veyr gvyr agvg rfyvg yes gvyueray  v g yauregvyage', 3, 5, 1, 0, 'Fontanero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indices de la tabla `Cuenta`
--
ALTER TABLE `Cuenta`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indices de la tabla `Mensaje`
--
ALTER TABLE `Mensaje`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indices de la tabla `Propuesta`
--
ALTER TABLE `Propuesta`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indices de la tabla `Resena`
--
ALTER TABLE `Resena`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indices de la tabla `Trabajador`
--
ALTER TABLE `Trabajador`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Cuenta`
--
ALTER TABLE `Cuenta`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Mensaje`
--
ALTER TABLE `Mensaje`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Propuesta`
--
ALTER TABLE `Propuesta`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Resena`
--
ALTER TABLE `Resena`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Trabajador`
--
ALTER TABLE `Trabajador`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
