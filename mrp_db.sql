-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2023 a las 04:06:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
  `IdentificacionCliente` bigint(15) NOT NULL,
  `tipoIdentificacion` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estadoCliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `nombreCliente`, `IdentificacionCliente`, `tipoIdentificacion`, `telefono`, `direccion`, `correo`, `estadoCliente`) VALUES
(1, 'Jose bartolomedo', 9001856721, 'NIT', '7584269', 'Calle 34 # 5-77', 'johnjose21@gmail.com', 1),
(2, 'Variedades chucho', 9005836581, 'NIT', '3224596885', 'Carrera 94 # 6-51', 'variedadeschucho@gmail.com', 1),
(3, 'John jose bartolomedo', 90018567, 'NIT', '7584269', 'Calle 34 # 5-77', 'johnjose21@gmail.com', 1),
(4, 'Variedades naty', 900583658, 'NIT', '3224596885', 'Carrera 94 # 6-51', 'variedadeschucho@gmail.com', 1),
(5, 'Orscar Eduardo Jaramillo', 945621456, 'C.C', '3265123654', 'calle 4 # 5-65', 'ejemplos@gmail.com', 1),
(7, 'fernando', 94615687, 'C.C', '3245652361', 'calle 4 # 5-65h', 'ejemplos@gmail.com', 1),
(8, 'juan Montaño', 1144093, 'C.C', '3214563652', 'calle 4 # 5-65', 'ejemplos@gmail.com', 1),
(9, 'ana lucia', 485145268, 'C.C', '7894596', 'Calle 34 # 5-77', 'ccc', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_entrada`
--

CREATE TABLE `historial_entrada` (
  `ID_HISTORIAL_ENTRADA` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` double NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `valorUnitario` double NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_entrada`
--

INSERT INTO `historial_entrada` (`ID_HISTORIAL_ENTRADA`, `codigo`, `nombre`, `fecha`, `cantidad`, `unidad`, `valorUnitario`, `tipo`) VALUES
(10, 'MT014', 'E', '2022-07-01', 30, 'Kg', 6000, 'Materia Prima'),
(11, 'MT010', 'A', '2022-07-01', 40, 'Ml', 200, 'Materia Prima'),
(12, 'MT014', 'E', '2022-07-01', 10, 'Kg', 6000, 'Materia Prima'),
(13, 'MT013', 'D', '2022-07-01', 10, 'Lt', 3000, 'Materia Prima'),
(14, 'MT013', 'D', '2022-07-01', 5, 'Lt', 3000, 'Materia Prima'),
(15, 'MT010', 'A', '2022-07-03', 40, 'Ml', 5000, 'Materia Prima'),
(16, 'MT013', 'D', '2022-07-03', 20, 'Lt', 3000, 'Materia Prima'),
(17, 'MT014', 'E', '2022-07-03', 15, 'Kg', 6000, 'Materia Prima'),
(18, 'MT014', 'E', '2022-07-04', 50, 'Kg', 500, 'Materia Prima'),
(19, 'MT010', 'A', '2022-07-04', 50, 'Ml', 500, 'Materia Prima'),
(20, 'MT013', 'D', '2022-07-04', 50, 'Lt', 500, 'Materia Prima'),
(21, 'MT012', 'C', '2022-07-04', 50, 'Kg', 500, 'Insumo'),
(22, 'MT016', 'H', '2022-07-04', 50, 'Kg', 600, 'Materia Prima'),
(23, 'MT014', 'E', '2022-07-04', 90, 'Kg', 500, 'Materia Prima'),
(24, 'MT012', 'C', '2022-07-06', 2000, 'Kg', 500, 'Insumo'),
(25, 'MT010', 'A', '2022-07-07', 500, 'Ml', 500, 'Materia Prima'),
(26, 'MT016', 'H', '2022-07-07', 600, 'Kg', 500, 'Materia Prima'),
(27, '456', 'helecho', '2022-07-07', 10, 'Kg', 5000, 'Materia Prima'),
(28, '1090', 'mazanilla', '2022-07-07', 5, 'Kg', 8000, 'Materia Prima'),
(29, 'MT013', 'D', '2022-09-15', 500, 'Lt', 600, 'Materia Prima'),
(30, 'MT011', 'B', '2022-09-15', 100, 'Kg', 1000, 'Materia Prima'),
(31, 'MT014', 'E', '2022-09-15', 50, 'Kg', 400, 'Materia Prima'),
(32, 'MT015', 'G', '2023-04-25', 100, 'Kg', 300, 'Materia Prima'),
(33, 'MT015', 'G', '2023-04-25', 100, 'Kg', 250, 'Materia Prima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_salida`
--

CREATE TABLE `historial_salida` (
  `ID_HISTORIAL_SALIDA` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` double NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_salida`
--

INSERT INTO `historial_salida` (`ID_HISTORIAL_SALIDA`, `codigo`, `nombre`, `motivo`, `fecha`, `cantidad`, `unidad`, `tipo`) VALUES
(76, 'MT010', 'A', 'N.OD0407222', '2022-07-04', 10, 'Ml', 'Materia Prima'),
(77, 'MT013', 'D', 'N.OD0407222', '2022-07-04', 10, 'Lt', 'Materia Prima'),
(78, 'MT014', 'E', 'N.OD0407222', '2022-07-04', 10, 'Kg', 'Materia Prima'),
(79, 'MT016', 'H', 'N.OD0407222', '2022-07-04', 10, 'Kg', 'Materia Prima'),
(80, 'MT012', 'C', 'N.OD0407222', '2022-07-04', 25, 'Kg', 'Insumo'),
(81, 'MT013', 'D', 'N.OD0407222', '2022-07-04', 25, 'Lt', 'Materia Prima'),
(82, 'MT014', 'E', 'N.OD0407222', '2022-07-04', 52, 'Kg', 'Materia Prima'),
(83, 'MT010', 'A', 'N.OD0407223', '2022-07-04', 20, 'Ml', 'Materia Prima'),
(84, 'MT010', 'A', 'N.OD0407224', '2022-07-04', 50, 'Ml', 'Materia Prima'),
(85, 'MT016', 'H', 'N.OD0407225', '2022-07-04', 12, 'Kg', 'Materia Prima'),
(86, 'MT012', 'C', 'N.OD0407225', '2022-07-04', 22, 'Kg', 'Insumo'),
(87, 'MT013', 'D', 'N.OD0407225', '2022-07-04', 20, 'Lt', 'Materia Prima'),
(88, 'MT014', 'E', 'N.OD0407225', '2022-07-04', 30, 'Kg', 'Materia Prima'),
(89, 'MT015', 'G', 'N.OD0407225', '2022-07-04', 50, 'Kg', 'Insumo'),
(90, 'MT012', 'C', 'N.OD0407225', '2022-07-04', 40, 'Kg', 'Insumo'),
(91, 'MT016', 'H', 'N.OD0407225', '2022-07-04', 77, 'Kg', 'Materia Prima'),
(92, 'MT014', 'E', 'N.OD0407225', '2022-07-04', 88, 'Kg', 'Materia Prima'),
(93, 'MT010', 'A', 'N.OD0407225', '2022-07-04', 5, 'Ml', 'Materia Prima'),
(94, 'MT011', 'B', 'N.OD0407225', '2022-07-04', 10, 'Kg', 'Materia Prima'),
(95, 'MT012', 'C', 'Por descomposición', '2022-07-06', 5.5, 'Kg', 'Insumo'),
(96, 'MT012', 'C', 'Por descomposiciÃ³n', '2022-07-07', 0.5, 'Kg', 'Insumo'),
(97, 'MT012', 'C', 'Por descomposiciÃ³n', '2022-07-07', 0.5, 'Kg', 'Insumo'),
(98, 'MT012', 'C', 'Error en producciÃ³n', '2022-07-07', 0.5, 'Kg', 'Insumo'),
(99, '456', 'helecho', 'Por descomposiciÃ³n', '2022-07-07', 10, 'Kg', 'Materia Prima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_material`
--

CREATE TABLE `h_material` (
  `ID_MATERIAL` int(11) NOT NULL,
  `nombreMaterial` varchar(50) NOT NULL,
  `codigoMaterial` varchar(20) NOT NULL,
  `unidadMedidaMaterial` varchar(20) NOT NULL,
  `valorMaterial` float NOT NULL,
  `tipoMaterial` varchar(50) NOT NULL,
  `cantidadMaterialInventario` double NOT NULL,
  `HM_ID_ORDEN` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `ID_H_MATERIAL` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `h_material`
--

INSERT INTO `h_material` (`ID_MATERIAL`, `nombreMaterial`, `codigoMaterial`, `unidadMedidaMaterial`, `valorMaterial`, `tipoMaterial`, `cantidadMaterialInventario`, `HM_ID_ORDEN`, `cantidad`, `ID_H_MATERIAL`, `ID_PRODUCTO`) VALUES
(1, 'A', 'MT010', 'Ml', 5000, 'Materia Prima', 70, 29, 10, 65, 61),
(1, 'A', 'MT010', 'Ml', 5000, 'Materia Prima', 20, 29, 10, 66, 60),
(4, 'D', 'MT013', 'Lt', 3000, 'Materia Prima', 24, 29, 10, 67, 60),
(5, 'E', 'MT014', 'Kg', 6000, 'Materia Prima', 23, 29, 10, 68, 60),
(7, 'H', 'MT016', 'Kg', 5000, 'Materia Prima', 20, 29, 10, 69, 60),
(1, 'A', 'MT010', 'Ml', 500, 'Materia Prima', 50, 30, 10, 77, 60),
(4, 'D', 'MT013', 'Lt', 300, 'Materia Prima', 50, 30, 10, 78, 60),
(5, 'E', 'MT014', 'Kg', 500, 'Materia Prima', 100, 30, 10, 79, 60),
(7, 'H', 'MT016', 'Kg', 500, 'Materia Prima', 50, 30, 10, 80, 60),
(3, 'C', 'MT012', 'Kg', 600, 'Insumo', 50, 30, 25, 81, 9),
(4, 'D', 'MT013', 'Lt', 300, 'Materia Prima', 40, 30, 25, 82, 9),
(5, 'E', 'MT014', 'Kg', 500, 'Materia Prima', 90, 30, 52, 83, 9),
(1, 'A', 'MT010', 'Ml', 500, 'Materia Prima', 40, 31, 10, 84, 61),
(1, 'A', 'MT010', 'Ml', 500, 'Materia Prima', 70, 32, 10, 85, 61),
(7, 'H', 'MT016', 'Kg', 600, 'Materia Prima', 90, 33, 12, 86, 4),
(3, 'C', 'MT012', 'Kg', 500, 'Insumo', 75, 33, 22, 87, 4),
(4, 'D', 'MT013', 'Lt', 500, 'Materia Prima', 65, 33, 20, 88, 4),
(5, 'E', 'MT014', 'Kg', 500, 'Materia Prima', 128, 33, 30, 89, 4),
(6, 'G', 'MT015', 'Kg', 400, 'Insumo', 50, 33, 50, 90, 4),
(3, 'C', 'MT012', 'Kg', 500, 'Insumo', 53, 33, 40, 91, 44),
(7, 'H', 'MT016', 'Kg', 600, 'Materia Prima', 78, 33, 77, 92, 44),
(5, 'E', 'MT014', 'Kg', 500, 'Materia Prima', 98, 33, 88, 93, 44),
(1, 'A', 'MT010', 'Ml', 500, 'Materia Prima', 20, 33, 5, 94, 59),
(2, 'B', 'MT011', 'Kg', 500, 'Materia Prima', 50, 33, 10, 95, 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_producto`
--

CREATE TABLE `h_producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `codigoProducto` varchar(20) NOT NULL,
  `valorUnidad` float NOT NULL,
  `HP_ID_ORDEN` int(11) NOT NULL,
  `ID_H_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `h_producto`
--

INSERT INTO `h_producto` (`ID_PRODUCTO`, `nombreProducto`, `codigoProducto`, `valorUnidad`, `HP_ID_ORDEN`, `ID_H_PRODUCTO`) VALUES
(61, 'Prueba', 'pruebaFinal', 500, 29, 28),
(60, 'Prueba A', 'PR022', 15000, 29, 29),
(60, 'Prueba A', 'PR022', 15000, 30, 32),
(9, 'Jabon 3', 'PR018', 40000, 30, 33),
(61, 'Prueba', 'pruebaFinal', 50500, 31, 34),
(61, 'Prueba', 'pruebaFinal', 50500, 32, 35),
(4, 'Shampoo Limón 500ml', 'PR021', 30000, 33, 36),
(44, 'prueba 1', 'prueba 1', 28000, 33, 37),
(59, 'Prueba 10', 'Prueba 10', 20000, 33, 38),
(9, 'Jabon 3', 'PR018', 4000, 34, 39),
(3, 'Shampoo Limón 250ml', 'PR020', 15000, 38, 40),
(9, 'Jabon 3', 'PR022', 4000, 39, 41),
(49, 'Jabon R4', 'PR024', 35000, 39, 42);

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
  `cantidadMaterialInventario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`ID_MATERIAL`, `nombreMaterial`, `codigoMaterial`, `unidadMedidaMaterial`, `valorMaterial`, `tipoMaterial`, `cantidadMaterialInventario`) VALUES
(1, 'A', 'MT010', 'Ml', 500, 'Materia Prima', 515),
(2, 'B', 'MT011', 'Kg', 1000, 'Materia Prima', 140),
(3, 'C', 'MT012', 'Kg', 500, 'Insumo', 2006),
(4, 'D', 'MT013', 'Lt', 600, 'Materia Prima', 545),
(5, 'E', 'MT014', 'Kg', 400, 'Materia Prima', 60),
(6, 'F', 'MT015', 'Kg', 250, 'Materia Prima', 200),
(7, 'G', 'MT016', 'Kg', 500, 'Materia Prima', 601),
(15, 'H', '1090', 'Kg', 8000, 'Materia Prima', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `ID_ORDEN` int(11) NOT NULL,
  `numeroOrden` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL,
  `FK_ID_CLIENTE` int(11) NOT NULL,
  `ID_ORDENDELDIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`ID_ORDEN`, `numeroOrden`, `fecha`, `estado`, `FK_ID_CLIENTE`, `ID_ORDENDELDIA`) VALUES
(29, 'OR001', '2022-07-01', 2, 1, 16),
(30, 'OR002', '2022-07-01', 2, 2, 22),
(31, 'Prueba 77', '2022-07-04', 2, 5, 23),
(32, 'Prueba 78', '2022-07-04', 2, 2, 24),
(33, 'prueba 79', '2022-07-04', 2, 7, 25),
(34, 'OR003', '2022-07-06', 3, 8, 0),
(35, 'OR004', '2022-07-06', 0, 3, 0),
(36, 'OR005', '2022-07-07', 1, 4, 0),
(37, 'OR006', '2022-07-07', 0, 1, 0),
(38, 'TP031', '2023-07-09', 3, 1, 0),
(39, 'prueba 01', '2023-07-09', 3, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendeldia`
--

CREATE TABLE `ordendeldia` (
  `ID_ORDENDELDIA` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordendeldia`
--

INSERT INTO `ordendeldia` (`ID_ORDENDELDIA`, `codigo`, `fecha`, `estado`, `contador`) VALUES
(1, '', '0000-00-00', 0, 5),
(16, 'N.OD0307221', '2022-07-03', 2, 0),
(22, 'N.OD0407222', '2022-07-04', 2, 0),
(23, 'N.OD0407223', '2022-07-04', 2, 0),
(24, 'N.OD0407224', '2022-07-04', 2, 0),
(25, 'N.OD0407225', '2022-07-04', 1, 0);

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

--
-- Volcado de datos para la tabla `ordenproducto`
--

INSERT INTO `ordenproducto` (`ID_ORDEN_PRODUCTO`, `cantidadProductoSolicitado`, `FK_ID_ORDEN`, `FK_ID_PRODUCTO`) VALUES
(40, 5, 29, 61),
(41, 2, 29, 60),
(42, 1, 30, 60),
(43, 1, 30, 9),
(44, 2, 31, 61),
(45, 5, 32, 61),
(46, 1, 33, 4),
(47, 1, 33, 44),
(48, 1, 33, 59),
(51, 20, 34, 9),
(52, 30, 34, 4),
(53, 5, 34, 3),
(61, 10, 35, 9),
(62, 10, 35, 4),
(63, 10, 35, 61),
(64, 5, 35, 59),
(65, 15, 36, 59),
(66, 25, 36, 61),
(71, 8, 37, 3),
(72, 4, 37, 9),
(73, 10, 38, 3),
(74, 10, 38, 4),
(75, 10, 39, 9),
(76, 10, 39, 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `codigoProducto` varchar(20) NOT NULL,
  `valorUnidad` float NOT NULL,
  `estado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `nombreProducto`, `codigoProducto`, `valorUnidad`, `estado`) VALUES
(3, 'Shampoo Limón 250ml', 'PR020', 15000, 1),
(4, 'Shampoo Limón 500ml', 'PR021', 20000, 1),
(9, 'Jabon 3', 'PR022', 4000, 1),
(44, 'Crema de manos 500ml', 'PR023', 28000, 1),
(49, 'Jabon R4', 'PR024', 35000, 1),
(59, 'Crema de manos 200ml', 'PR025', 20000, 1),
(60, 'Acondicionador de coco 250ml', 'PR026', 15000, 1),
(61, 'Acondicionador de coco 500ml', 'PR027', 30000, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productomaterial`
--

CREATE TABLE `productomaterial` (
  `ID_PRODUCTO_MATERIAL` int(11) NOT NULL,
  `cantidadMaterialProducto` float NOT NULL,
  `FK_ID_PRODUCTO` int(11) NOT NULL,
  `FK_ID_MATERIAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productomaterial`
--

INSERT INTO `productomaterial` (`ID_PRODUCTO_MATERIAL`, `cantidadMaterialProducto`, `FK_ID_PRODUCTO`, `FK_ID_MATERIAL`) VALUES
(185, 40, 44, 3),
(186, 77, 44, 7),
(187, 88, 44, 5),
(206, 25, 9, 3),
(207, 25, 9, 4),
(208, 15, 9, 5),
(209, 20, 61, 1),
(210, 20, 61, 4),
(211, 20, 61, 5),
(212, 20, 61, 7),
(213, 5, 59, 1),
(214, 10, 59, 2),
(215, 50, 49, 2),
(216, 30, 49, 3),
(217, 16, 49, 5),
(218, 26, 49, 7),
(219, 10, 60, 1),
(220, 10, 60, 4),
(221, 10, 60, 5),
(222, 10, 60, 7),
(228, 5, 3, 1),
(229, 10, 3, 2),
(230, 8, 3, 3),
(231, 6, 3, 4),
(232, 12, 4, 7),
(233, 22, 4, 3),
(234, 20, 4, 4),
(235, 15, 4, 5),
(236, 20, 4, 6);

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
(2, 'empleado'),
(3, 'Inhabil');

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
  `cedula` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `username`, `password`, `FK_ID_ROL`, `nombre`, `cedula`, `telefono`) VALUES
(1, 'admin', '1234', 1, 'Edwin Valencia', '1144093816', '3217779151'),
(2, 'fernando.buenavida', 'fercho1144', 3, 'Fernando Buenavida', '1144096816', '321445625'),
(11, 'Mario', '000', 2, 'Mario', '963512245', '3215625485'),
(12, 'carmen.m', '7894', 2, 'Carmen Muños', '1144265848', '3241563524'),
(26, 'juan.va', '54545454', 3, 'juan salvador', '94415691', '3217779155'),
(36, 'jose.garcia', 'pruebas', 2, 'Jose Garcia', '942563514', '3256152364');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Indices de la tabla `historial_entrada`
--
ALTER TABLE `historial_entrada`
  ADD PRIMARY KEY (`ID_HISTORIAL_ENTRADA`);

--
-- Indices de la tabla `historial_salida`
--
ALTER TABLE `historial_salida`
  ADD PRIMARY KEY (`ID_HISTORIAL_SALIDA`);

--
-- Indices de la tabla `h_material`
--
ALTER TABLE `h_material`
  ADD PRIMARY KEY (`ID_H_MATERIAL`);

--
-- Indices de la tabla `h_producto`
--
ALTER TABLE `h_producto`
  ADD PRIMARY KEY (`ID_H_PRODUCTO`);

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
-- Indices de la tabla `ordendeldia`
--
ALTER TABLE `ordendeldia`
  ADD PRIMARY KEY (`ID_ORDENDELDIA`);

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
  ADD KEY `FK_ID_PROCUCTO` (`FK_ID_PRODUCTO`),
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
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `historial_entrada`
--
ALTER TABLE `historial_entrada`
  MODIFY `ID_HISTORIAL_ENTRADA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `historial_salida`
--
ALTER TABLE `historial_salida`
  MODIFY `ID_HISTORIAL_SALIDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `h_material`
--
ALTER TABLE `h_material`
  MODIFY `ID_H_MATERIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `h_producto`
--
ALTER TABLE `h_producto`
  MODIFY `ID_H_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `ID_MATERIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `ID_ORDEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `ordendeldia`
--
ALTER TABLE `ordendeldia`
  MODIFY `ID_ORDENDELDIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `ordenproducto`
--
ALTER TABLE `ordenproducto`
  MODIFY `ID_ORDEN_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  MODIFY `ID_PRODUCTO_MATERIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `cliente_FK` FOREIGN KEY (`FK_ID_CLIENTE`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Filtros para la tabla `ordenproducto`
--
ALTER TABLE `ordenproducto`
  ADD CONSTRAINT `ordenproducto_ibfk_1` FOREIGN KEY (`FK_ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `ordenproducto_ibfk_2` FOREIGN KEY (`FK_ID_ORDEN`) REFERENCES `orden` (`ID_ORDEN`);

--
-- Filtros para la tabla `productomaterial`
--
ALTER TABLE `productomaterial`
  ADD CONSTRAINT `productomaterial_ibfk_1` FOREIGN KEY (`FK_ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
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
