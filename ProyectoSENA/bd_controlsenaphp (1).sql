-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2020 a las 03:31:12
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_controlsenaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bienes`
--

CREATE TABLE `tbl_bienes` (
  `idbn` bigint(20) NOT NULL,
  `idusuario_sena` bigint(20) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `dispositivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_bienes`
--

INSERT INTO `tbl_bienes` (`idbn`, `idusuario_sena`, `marca`, `referencia`, `dispositivo`) VALUES
(7, 14, 'hp', 'dd33', 'pc'),
(8, 15, 'Acer', 'qwe34', 'laptop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` bigint(20) NOT NULL,
  `identificacion` bigint(20) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `apellido_usuario` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `identificacion`, `nombre_usuario`, `apellido_usuario`, `telefono`, `direccion`, `correo`, `pass`, `rol`) VALUES
(7, 1234, 'ee', 'ee', 33, 'cc', 'serg@gmail.com', '33', 'Administrador'),
(8, 1007, 'Carlos Andres', 'Perez', 321, 'cr5', 'srodriguez732@misena.edu.co', '12345', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuariosena`
--

CREATE TABLE `tbl_usuariosena` (
  `idusuario_sena` bigint(20) NOT NULL,
  `identificacion` bigint(20) NOT NULL,
  `nombre_sena` varchar(200) NOT NULL,
  `apellido_sena` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero_ficha` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuariosena`
--

INSERT INTO `tbl_usuariosena` (`idusuario_sena`, `identificacion`, `nombre_sena`, `apellido_sena`, `telefono`, `correo`, `numero_ficha`, `cargo`) VALUES
(14, 107, 'juan', 'Gomez', 321, 'serg@gmail.com', 1828801, 'Aprendiz'),
(15, 10067859, 'Andres', 'Gomez', 32145678, 'andres@gamil.com', 1828801, 'Aprendiz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bienes`
--
ALTER TABLE `tbl_bienes`
  ADD PRIMARY KEY (`idbn`),
  ADD KEY `id` (`idusuario_sena`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuariosena`
--
ALTER TABLE `tbl_usuariosena`
  ADD PRIMARY KEY (`idusuario_sena`) USING BTREE,
  ADD KEY `idusuario_sena` (`idusuario_sena`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bienes`
--
ALTER TABLE `tbl_bienes`
  MODIFY `idbn` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_usuariosena`
--
ALTER TABLE `tbl_usuariosena`
  MODIFY `idusuario_sena` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_bienes`
--
ALTER TABLE `tbl_bienes`
  ADD CONSTRAINT `tbl_bienes_ibfk_1` FOREIGN KEY (`idusuario_sena`) REFERENCES `tbl_usuariosena` (`idusuario_sena`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
