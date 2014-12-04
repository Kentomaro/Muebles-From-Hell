-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2013 a las 15:30:47
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja_tmp`
--

CREATE TABLE IF NOT EXISTS `caja_tmp` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cod` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `venta` varchar(255) NOT NULL,
  `cant` varchar(255) NOT NULL,
  `importe` varchar(255) NOT NULL,
  `exitencia` varchar(255) NOT NULL,
  `usu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `caja_tmp`
--

INSERT INTO `caja_tmp` (`id`, `cod`, `nom`, `venta`, `cant`, `importe`, `exitencia`, `usu`) VALUES
(8, '1', 'Pantalla de Computador', '200000', '1', '200000', '0', 'jorgejulio'),
(9, '2', 'CPU de Lujo', '80000', '3', '240000', '0', 'jorgejulio'),
(10, '3', 'Impresora HP', '120000', '2', '240000', '17', 'jorgejulio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `factura` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `importe` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id`, `factura`, `codigo`, `nombre`, `cantidad`, `valor`, `importe`, `tipo`) VALUES
(125, '1000', '2', 'CPU de Lujo', '1', '80000', '80000', 'CONTADO'),
(126, '1000', '3', 'Impresora HP', '1', '120000', '120000', 'CONTADO'),
(127, '1001', '1', 'Pantalla de Computador', '3', '200000', '600000', 'CONTADO'),
(128, '1001', '2', 'CPU de Lujo', '1', '80000', '80000', 'CONTADO'),
(129, '1002', '1', 'Pantalla de Computador', '1', '200000', '200000', 'CONTADO'),
(130, '1002', '2', 'CPU de Lujo', '3', '80000', '240000', 'CONTADO'),
(131, '1003', '1', 'Pantalla de Computador', '1', '200000', '200000', 'CONTADO'),
(132, '1003', '2', 'CPU de Lujo', '1', '80000', '80000', 'CONTADO'),
(133, '1003', '3', 'Impresora HP', '5', '120000', '600000', 'CONTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(255) NOT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `iva` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tamano` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `empresa`, `nit`, `direccion`, `ciudad`, `tel1`, `tel2`, `web`, `correo`, `iva`, `tamano`) VALUES
(1, 'Soft Unicorn', '1234566789', 'Colombia', 'Cartagena', '66 000 00', '300 000 0000', 'facebook.com/soft.unicorn', 'facebook.com/soft.unicorn', '0', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `factura` varchar(255) NOT NULL,
  `cajera` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`factura`, `cajera`, `fecha`, `estado`) VALUES
('1000', 'jorgejulio', '2013-07-07', 's'),
('1001', 'jorgejulio', '2013-07-08', 's'),
('1002', 'jorgejulio', '2013-07-08', 's'),
('1003', 'jorgejulio', '2013-07-08', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `cod` varchar(255) NOT NULL,
  `prov` varchar(255) NOT NULL,
  `cprov` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `mayor` varchar(255) NOT NULL,
  `venta` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `minimo` varchar(255) NOT NULL,
  `seccion` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `clase` varchar(255) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod`, `prov`, `cprov`, `nom`, `costo`, `mayor`, `venta`, `cantidad`, `minimo`, `seccion`, `fecha`, `estado`, `clase`) VALUES
('1', '3', 'CCCFFF', 'Pantalla de Computador', '200000', '100000', '200000', '0', '10', '3', '2013-04-25', 's', ''),
('2', '1', 'CFG1233', 'CPU de Lujo', '80000', '40000', '80000', '0', '10', '1', '2013-04-26', 's', ''),
('3', '1', 'CFG4332', 'Impresora HP', '120000', '60000', '120000', '17', '10', '1', '2013-04-26', 's', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `estado` text NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigo`, `empresa`, `nom`, `dir`, `ciudad`, `tel`, `cel`, `correo`, `obs`, `estado`) VALUES
(1, 'Soft Unicorn', 'jorge Vasquez', 'Caracoles Manzana 36 lote 10', 'Cartagena - Colombia', '6679159', '3156856245', 'jlvasquez63@gmail,com', '', 's'),
(2, 'Umbrella', 'Vasquez', 'campestre', 'Medellin', '667198', '30000000', 'umbrella@hotmail.com', 'vende medicinas', 's'),
(3, 'Soft Unicorn colombia', 'jorge Vasquez', 'caracoles', 'Cartagena - Colombia', '6679159', '3156856245', 'jlvasquez63@gmail,com', '', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `nombre`, `estado`) VALUES
(1, 'Ropa de Mujer', 's'),
(2, 'Ropa para adultos', 's'),
(3, 'Ropa de NiÃ±os', 's'),
(4, 'Ropa de Hombre', 's'),
(5, 'Ropa para NiÃ±as', 's'),
(6, 'Articulo Temporal', 's'),
(7, 'Computo', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ced` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL,
  `cupo` varchar(255) NOT NULL,
  `barrio` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `usu` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`ced`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ced`, `estado`, `nom`, `dir`, `tel`, `cel`, `cupo`, `barrio`, `ciudad`, `usu`, `con`, `tipo`) VALUES
('12345678', 's', 'Jorge Julio', 'Caracoles ', '6667776', '312 567 6543', '0', 'Caracoles', 'Cartagena', 'jorgejulio', '1234', 'a'),
('2288300098', 's', 'Maria Julio', 'Centro Ciudad', '777366', '88847764', '0', 'Centro de la Ciudad #1', 'Barranquilla', 'mariajulio', '123', 'cl'),
('76588477', 's', 'Daniela Herrera', 'Nuevo Bosque', '77849948', '99948877746', '0', 'caracoles', 'Bogota', 'dherrera', '123', 'ca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
