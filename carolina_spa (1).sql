-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 04:41:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carolina_spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `idTicket` int(10) NOT NULL,
  `FECHA` date NOT NULL,
  `NOMBRE_E` varchar(30) NOT NULL,
  `RFC_E` varchar(10) NOT NULL,
  `DIRECCION_E` varchar(30) NOT NULL,
  `NOMBRE_C` varchar(30) NOT NULL,
  `RFC_C` varchar(10) NOT NULL,
  `CORREO_C` varchar(30) NOT NULL,
  `CANTIDAD` int(10) NOT NULL,
  `DESCRIPCION` varchar(30) NOT NULL,
  `IMPORTE` float NOT NULL,
  `DESCUENTO` float NOT NULL,
  `IVA` float NOT NULL,
  `TOTAL` float NOT NULL,
  `PAGO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`idTicket`, `FECHA`, `NOMBRE_E`, `RFC_E`, `DIRECCION_E`, `NOMBRE_C`, `RFC_C`, `CORREO_C`, `CANTIDAD`, `DESCRIPCION`, `IMPORTE`, `DESCUENTO`, `IVA`, `TOTAL`, `PAGO`) VALUES
(1, '2021-09-26', 'Carolina Spa', 'CARP123678', 'Calle adofo lopez #8 col Roma', 'Brandon Mendoza', 'BRMG123498', 'brandon@gmail.com', 1, 'Velas Aromaticas', 30, 0, 5, 35, 'EFECTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idTicket`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idTicket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
