-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 02:52:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `nit` varchar(15) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `nit`, `direccion`, `telefono`) VALUES
(1, 'oscar', '1090384538', 'mz c4 torcoroma 2', '3228858439'),
(129, 'fabian', '77777', 'haaa', '6666'),
(139, 'oscar', '1111111', 'gggg', '55555'),
(140, 'oscar', '555', 'ttttt', '33333'),
(141, 'fabian', '555666', 'alfombra verde', '5667788'),
(142, 'jose', '8866', 'fffff', '8888888'),
(143, 'rodrigo', '8483', 'lara', '575766'),
(144, 'oscar fabian', '48457', 'fffff', '445555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_detalle` int(11) NOT NULL,
  `factura_id` int(11) DEFAULT NULL,
  `cantidad` varchar(5) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` varchar(25) DEFAULT NULL,
  `iva` varchar(4) DEFAULT NULL,
  `subtotal` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `factura_id`, `cantidad`, `descripcion`, `precio`, `iva`, `subtotal`) VALUES
(1, 1, '2', 'cafe', '5000', '19', '4000'),
(2, 1, '3', 'cafe', '5000', '19', '4000'),
(3, 1, '10', 'cafe', '5000', '15', '4000'),
(4, 36, '1', 'chocolate', '5000', '17', '4000'),
(5, 36, '1', 'leche', '5000', '10', '4000'),
(36, 37, '4', 'hamburguesas', '6000', '10', '0'),
(38, 101, '6', 'gatos', '50000', '19', '70000'),
(39, 102, '6', 'cafe', '5000', '0', '0'),
(40, 103, '6', 'cafe', '5000', '0', '0'),
(41, 103, '6', 'cafe', '5000', '0', '0'),
(42, 103, '6', 'cafe', '5000', '0', '0'),
(43, 104, '1', 'muebles', '50000', '5', '0'),
(44, 104, '4', 'sillas', '25000', '12', '0'),
(45, 109, '4', 'controles', '700', '9', '8'),
(46, 110, '6', 'cahja', '600', '12', '000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `empresa` varchar(25) DEFAULT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `ciudad` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `nit`, `direccion`, `telefono`, `ciudad`, `correo`) VALUES
(1, 'LENITOX', '1090384538', 'MZ C4 TORCOROMA 2', '3228858438', 'CUCUTA', 'oigonzalezp@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `facturaFecha` date DEFAULT NULL,
  `facturaSubtotal` varchar(25) DEFAULT NULL,
  `facturaIva` varchar(4) DEFAULT NULL,
  `facturaTotal` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `cliente_id`, `facturaFecha`, `facturaSubtotal`, `facturaIva`, `facturaTotal`) VALUES
(1, 1090384538, '2021-11-22', 'aaaa', '19', '1'),
(36, 77777, '2021-11-18', '600', '19', '800'),
(37, 77777, '2021-11-05', '7777', '8888', '9999'),
(101, 555666, '2021-11-25', '', '', ''),
(102, 8866, '2021-11-25', '', '', ''),
(103, 8866, '2021-11-25', '', '', ''),
(104, 1090384538, '2021-11-25', '', '', ''),
(109, 1090384538, '2021-11-25', '', '', ''),
(110, 1090384538, '2021-11-25', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
