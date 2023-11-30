-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: basedatos
-- Tiempo de generación: 27-11-2023 a las 12:23:22
-- Versión del servidor: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Versión de PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes_examen_202311`
--
CREATE DATABASE IF NOT EXISTS `dwes_examen_202311` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dwes_examen_202311`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `apellidos`, `imagen`) VALUES
(1, '11111111A', 'Andrés', 'Trozado', 'cliente-11.png'),
(2, '22222222B', 'Enrique', 'Cido', 'cliente-12.png'),
(3, '33333333C', 'Alberto', 'Mate', 'cliente-07.png'),
(4, '44444444D', 'Estela', 'Gartija', 'cliente-05.png'),
(5, '55555555E', 'Elsa', 'Capunta', 'cliente-01.png'),
(6, '66666666F', 'Elena', 'Nito', 'cliente-02.png'),
(7, '77777777G', 'Susana', 'Torio', 'cliente-03.png'),
(8, '88888888H', 'Paca', 'Garte', 'cliente-04.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios`
--

DROP TABLE IF EXISTS `comercios`;
CREATE TABLE `comercios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comercios`
--

INSERT INTO `comercios` (`id`, `nombre`, `imagen`) VALUES
(1, 'Pizzería', 'pizzeria.jpg'),
(2, 'Panadería', 'panaderia.jpg'),
(3, 'Burger', 'burger.jpg'),
(4, 'Cafetería', 'cafeteria.jpg'),
(5, 'Tienda de complementos', 'complementos.jpg'),
(6, 'Floristería', 'floristeria.jpg'),
(7, 'Tienda de golosinas', 'golosinas.jpg'),
(8, 'Tienda de ropa', 'ropa.jpg'),
(9, 'Supermercado', 'supermercado.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `id_cliente` int(11) NOT NULL,
  `id_comercio` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `importe` decimal(10,2) NOT NULL,
  `codigo_seguimiento` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_cliente`, `id_comercio`, `fecha`, `importe`, `codigo_seguimiento`) VALUES
(1, 4, '2023-11-02 19:19:00', 2.50, 'YI2ZNR8G'),
(1, 4, '2023-11-18 23:34:00', 1.10, 'AG6BLPGF'),
(2, 2, '2023-11-10 16:37:00', 1.20, 'KQMN34H6'),
(2, 2, '2023-11-17 07:38:00', 0.70, '0CM8OCWZ'),
(3, 1, '2023-11-09 00:00:00', 27.45, 'BJ7A6A1U'),
(4, 1, '2023-11-13 23:10:00', 80.00, 'OD76JP72'),
(4, 4, '2023-11-05 08:50:00', 4.20, 'KM5OW6EP'),
(4, 5, '2023-11-09 16:36:00', 17.00, 'WH6LZWSF'),
(4, 8, '2023-11-09 14:40:00', 45.00, 'SJFZCVME'),
(5, 7, '2023-11-25 11:37:00', 2.50, '99O2UIN4'),
(6, 1, '2023-11-07 16:32:00', 32.00, 'WQ0G7T8U'),
(6, 2, '2023-11-03 00:00:00', 3.20, 'RT20LD78'),
(6, 8, '2023-11-21 15:47:00', 59.95, '4V8QD963'),
(7, 2, '2023-11-22 12:38:00', 0.70, 'CX1M4158'),
(8, 7, '2023-11-08 22:21:00', 4.35, 'DZHVI94A');

--
-- Disparadores `ventas`
--
DROP TRIGGER IF EXISTS `generarSeguimiento`;
DELIMITER $$
CREATE TRIGGER `generarSeguimiento` BEFORE INSERT ON `ventas` FOR EACH ROW BEGIN 
	IF NEW.codigo_seguimiento IS NULL THEN
        SET NEW.codigo_seguimiento = (
			select lpad(conv(floor(rand()*pow(36,8)), 10, 36), 8, 0));
    END IF;
		
	
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_cliente`,`id_comercio`,`fecha`),
  ADD UNIQUE KEY `ventas_UN` (`codigo_seguimiento`),
  ADD KEY `ventas_comercios` (`id_comercio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `ventas_comercios` FOREIGN KEY (`id_comercio`) REFERENCES `comercios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
