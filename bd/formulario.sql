-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2021 a las 02:54:19
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `correo` text COLLATE latin1_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  `id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `correo`, `numero`, `mensaje`, `id`) VALUES
('asdasd', 'asdasdas@gmail.com', 651515, 'asdasdasdas\r\n                ', 0),
('asdas', 'asdas@gmail.com', 2147483647, 'asasdasdds', 7),
('sadas', 'asdas@gmail.com', 2289289, 'asdasd', 12),
('asdasd', 'asdas@gmail.com', 2289289, '\r\n                asdasd', 14),
('sdasasdasdasdasdas', 'asdasdas@gmail.com', 651515, 'asdasdasdas', 15),
('asdas', 'asdas@gmail.com', 2289289, 'asdas', 17),
('dasd', 'diego@gmail.com', 983247502, 'hola', 23),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas', 24),
('asdasd', 'asdas@gmail.com', 2289289, 'asdasd', 30),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas\r\n                ', 32),
('asdasd', 'asdas@gmail.com', 2289289, 'asdsa', 35),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas', 39),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas', 42),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas\r\n                ', 43),
('asdas', 'asdas@gmail.com', 2147483647, 'asasdasdds', 49),
('diego', 'asdas@gmail.com', 981377103, 'asdasdasd', 51),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas', 63),
('asdas', 'asdas@gmail.com', 2289289, '\r\n                ', 68),
('asdas', 'asdas@gmail.com', 2289289, 'sadas', 69),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdasd', 71),
('asdas', 'asdas@gmail.com', 9128145, 'asdasd', 75),
('asdasd', 'asdas@gmail.com', 2289289, 'asdasd', 77),
('asdsa', 'asdsa@gmail.com', 2289289, 'sadasd\r\n                ', 80),
('asdasd', 'asdas@gmail.com', 2289289, '\r\n               ', 84),
('asdas', 'asdas@gmail.com', 2289289, 'asdasdas', 85),
('asdasd', 'asdas@gmail.com', 2289289, 'asdasd', 90),
('asdas', 'asdsa@gmail.com', 2289289, 'asdasd', 96),
('asdasd', 'asdas@gmail.com', 2289289, 'asdasd', 98);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `apellido` text COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `distrito` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `documento_identidad` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `numero_documento` int(15) NOT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefeno_alternativo` int(9) NOT NULL,
  `nombre_papa` text COLLATE latin1_spanish_ci NOT NULL,
  `monto_reclamo` int(5) NOT NULL,
  `producto_servicio` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `reclamaciones`
--

INSERT INTO `reclamaciones` (`nombre`, `apellido`, `direccion`, `distrito`, `documento_identidad`, `numero_documento`, `correo`, `telefeno_alternativo`, `nombre_papa`, `monto_reclamo`, `producto_servicio`, `descripcion`, `id`) VALUES
('asdasd', 'asdas', 'asdas', 'asdas', 'C.E.', 5161515, 'asdas@gmail.com', 4141145, 'sadasd', 10, 'on', 'asdasdsa', 10),
('asdas', 'asdas', 'asdas', 'asdas', 'Menor de edad', 4141, 'asdsa@gmail.com', 7454145, 'asdasd', 10, 'on', 'sadasd', 24),
('asdas', 'asdas', 'asdas', 'asdas', 'Menor de edad', 4141, 'asdsa@gmail.com', 7454145, 'asdasd', 10, 'on', 'sadasd', 17),
('asdas', 'asdas', 'asdas', 'asdasd', 'D.N.I.', 4811, 'asdas@gmail.com', 896, 'asdasd', 12, 'servicio', 'asdasd', 59),
('sadas', 'dasdas', 'asdas', 'asdas', 'D.N.I.', 77500025, 'asdsa@gmail.com', 4141145, 'asdasd', 10, 'producto', 'asdas', 8),
('hola1', 'hola1', 'hola1', 'hola1', 'D.N.I.', 784141, 'hola1@gmail.com', 151515, 'hola1', 100, 'servicio', 'asdasdasdasdsa', 40),
('hola1', 'hola1', 'hola1', 'hola1', 'D.N.I.', 784141, 'hola1@gmail.com', 151515, 'hola1', 100, 'servicio', 'asdasdasdasdsa', 49),
('dasd', 'asdas', 'dasd', 'asdas', 'D.N.I.', 56151, 'asdas@gmail.com', 1515, 'asdsa', 100, 'servicio', 'asdasd', 20),
('ALE', 'GIRON', 'ASDASD', 'ASDASD', 'D.N.I.', 5161515, 'asdsa@gmail.com', 56151, 'ASDAS', 100, 'producto', 'ASDASDAS', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
