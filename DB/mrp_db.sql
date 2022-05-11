-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 23:57:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mrp_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `IdentificacionCliente` int(11) NOT NULL,
  `tipoIdentificacion` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `ID_MATERIAL` int(11) NOT NULL,
  `nombreMaterial` varchar(50) NOT NULL,
  `codigoMaterial` varchar(20) NOT NULL,
  `unidadMedidaMaterial` varchar(20) NOT NULL,
  `valorMaterial` float NOT NULL,
  `tipoMaterial` varchar(50) NOT NULL,
  `cantidadMaterialInventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `ID_ORDEN` int(11) NOT NULL,
  `numeroOrden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL,
  `FK_ID_CLIENTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenproducto`
--

CREATE TABLE `ordenproducto` (
  `ID_ORDEN_PRODUCTO` int(11) NOT NULL,
  `cantidadProductoSolicitado` int(11) NOT NULL,
  `FK_ID_ORDEN` int(11) NOT NULL,
  `FK_ID_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `codigoProducto` varchar(20) NOT NULL,
  `valorUnidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productomaterial`
--

CREATE TABLE `productomaterial` (
  `ID_PRODUCTO_MATERIAL` int(11) NOT NULL,
  `cantidadMaterialProducto` int(11) NOT NULL,
  `FK_ID_PROCUCTO` int(11) NOT NULL,
  `FK_ID_MATERIAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `rol`) VALUES
(1, 'admin'),
(2, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `FK_ID_ROL` int(2) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `username`, `password`, `FK_ID_ROL`, `nombre`, `cedula`) VALUES
(1, 'edwin', '1234', 1, 'Edwin Valencia', '1144093816'),
(2, 'colab', '9716', 2, 'Fernando Buenavida', '1144096816');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`ID_MATERIAL`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`ID_ORDEN`),
  ADD KEY `FK_ID_CLIENTE` (`FK_ID_CLIENTE`);

--
-- Indices de la tabla `ordenproducto`
--
ALTER TABLE `ordenproducto`
  ADD PRIMARY KEY (`ID_ORDEN_PRODUCTO`),
  ADD KEY `FK_ID_ORDEN` (`FK_ID_ORDEN`),
  ADD KEY `FK_ID_PRODUCTO` (`FK_ID_PRODUCTO`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- Indices de la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  ADD PRIMARY KEY (`ID_PRODUCTO_MATERIAL`),
  ADD KEY `FK_ID_PROCUCTO` (`FK_ID_PROCUCTO`),
  ADD KEY `FK_ID_MATERIAL` (`FK_ID_MATERIAL`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `rol_id` (`FK_ID_ROL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `ID_MATERIAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `ID_ORDEN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenproducto`
--
ALTER TABLE `ordenproducto`
  MODIFY `ID_ORDEN_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  MODIFY `ID_PRODUCTO_MATERIAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `cliente_FK` FOREIGN KEY (`FK_ID_CLIENTE`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`ID_ORDEN`) REFERENCES `ordenproducto` (`FK_ID_ORDEN`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `ordenproducto` (`FK_ID_PRODUCTO`);

--
-- Filtros para la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  ADD CONSTRAINT `productomaterial_ibfk_1` FOREIGN KEY (`FK_ID_PROCUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `productomaterial_ibfk_2` FOREIGN KEY (`FK_ID_MATERIAL`) REFERENCES `material` (`ID_MATERIAL`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuarioFK` FOREIGN KEY (`FK_ID_ROL`) REFERENCES `rol` (`ID_ROL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
