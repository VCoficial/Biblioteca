-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-10-2022 a las 15:30:08
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pa_librosTraer` ()   begin
   select * from libros;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Identificacion` int(11) NOT NULL,
  `Nombre1` varchar(150) NOT NULL,
  `Nombre2` varchar(150) DEFAULT NULL,
  `Apellido1` varchar(150) NOT NULL,
  `Apellido2` varchar(150) NOT NULL,
  `Telefono` varchar(150) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Estado` int(11) NOT NULL,
  `vecesPenalizado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `Identificacion`, `Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `Correo`, `Estado`, `vecesPenalizado`) VALUES
(1, 11000, 'Mario', 'andres', 'ocampo', 'castaneda', '3207897958', 'andres@gmail.com', 0, 10),
(3, 1006334975, 'alejandro', NULL, 'morales', 'loaiza', '3002082778', 'alejandro@gmail.com', 2, 4),
(9, 1006332541, 'maria', 'angela', 'hernandez', 'sanchez', '2001452211', 'maria@gmail.com', 1, 0),
(10, 1005474411, 'camila', 'maria', 'lozano', 'loaiza', '2005475522', 'camila@gmail.com', 1, 0),
(11, 1005242514, 'andrea', 'camila', 'escobar', 'trujillo', '32321654', 'camila@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleprestamo`
--

CREATE TABLE `detalleprestamo` (
  `idDetallePrestamo` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idPrestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleprestamo`
--

INSERT INTO `detalleprestamo` (`idDetallePrestamo`, `idLibro`, `idCliente`, `idPrestamo`) VALUES
(8, 1, 3, 24),
(11, 1, 3, 27),
(12, 1, 3, 28),
(13, 1, 3, 29),
(16, 1, 3, 34),
(17, 1, 3, 35),
(7, 2, 3, 23),
(10, 2, 3, 26),
(14, 2, 3, 30),
(9, 6, 3, 25),
(15, 6, 3, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `idEditoriales` int(11) NOT NULL,
  `NombreEditorial` varchar(150) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`idEditoriales`, `NombreEditorial`, `Estado`) VALUES
(1, 'megalibro', 0),
(2, 'aguaAzul', 0),
(3, 'colombia', 0),
(4, 'colombo', 1),
(16, 'maicol', 0),
(17, 'ellibro', 0),
(18, 'wdefff', 1),
(19, 'aaa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Editoriales_idEditoriales` int(11) NOT NULL,
  `fechaDeIngreso` date NOT NULL,
  `Autor` varchar(150) NOT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `Nombre`, `Editoriales_idEditoriales`, `fechaDeIngreso`, `Autor`, `FechaPublicacion`, `Cantidad`, `Estado`) VALUES
(1, 'Don Quijote de la Manchaaaa', 1, '2022-08-03', 'Miguel de Cervantes', '2022-08-03', 5, 0),
(2, 'pinochoo', 2, '2022-08-07', 'pepe', '2022-08-22', 10, 1),
(3, 'los siete enanitoss', 2, '2022-08-01', 'pepito', '2022-08-21', 50, 1),
(6, 'ballena', 4, '2022-08-01', 'andres', '2022-08-12', 2, 1),
(7, 'años de soledadddd', 4, '2022-09-15', 'jose hernandez', '2022-09-08', 5, 1),
(14, 'don gatoo', 2, '0000-00-00', 'juanes', '0000-00-00', 24, 1),
(15, 'don perro', 4, '0000-00-00', 'bendes', '0000-00-00', 2, 1),
(16, 'gallinassss', 17, '2022-09-15', 'jose hernandez', '0000-00-00', 5, 1),
(17, 'aaaaaa', 1, '2022-10-05', 'aaaaa', '2022-10-14', 2, 1),
(18, 'fttfu', 2, '2022-10-11', 'fghgh', '2022-10-21', 4, 1),
(19, 'peop', 4, '2022-10-11', 'aaaaaaaa', '2022-10-21', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizacion`
--

CREATE TABLE `penalizacion` (
  `idPenalizacion` int(11) NOT NULL,
  `inicioPenalizacion` date DEFAULT NULL,
  `finPenalizacion` date DEFAULT NULL,
  `idPrestamo` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `penalizacion`
--

INSERT INTO `penalizacion` (`idPenalizacion`, `inicioPenalizacion`, `finPenalizacion`, `idPrestamo`, `idUsuarios`) VALUES
(15, '2022-08-18', '2022-08-31', 1, 2),
(16, '2022-08-18', '2022-08-31', 1, 2),
(17, '2022-08-18', '2022-08-31', 1, 2),
(18, '2022-08-18', '2022-08-31', 1, 2),
(19, '2022-08-24', '2022-08-31', 1, 2),
(20, '2022-08-18', '2022-08-25', 1, 2),
(21, '2022-10-11', '2022-10-31', 29, 2),
(22, '2022-10-11', '2022-10-20', 29, 2),
(23, '2022-10-11', '2022-10-31', 29, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `idPrestamo` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaEntrega` date NOT NULL,
  `cantidadLibros` int(11) NOT NULL,
  `Prestador` int(11) NOT NULL,
  `idDetalle` int(11) NOT NULL,
  `Clientes_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`idPrestamo`, `FechaInicio`, `FechaEntrega`, `cantidadLibros`, `Prestador`, `idDetalle`, `Clientes_idCliente`) VALUES
(1, '2022-08-03', '2022-08-11', 0, 3, 0, 0),
(2, '2022-08-16', '2022-08-28', 2, 2, 0, 0),
(3, '2022-09-09', '2022-09-15', 2, 2, 0, 0),
(4, '2022-10-02', '2022-10-19', 2, 2, 0, 0),
(19, '2022-10-10', '2022-10-04', 2, 2, 0, 0),
(20, '2022-10-10', '2022-10-19', 3, 2, 0, 0),
(21, '2022-10-10', '2022-10-19', 3, 2, 0, 0),
(23, '2022-10-02', '2022-10-19', 2, 2, 7, 0),
(24, '2022-10-03', '2022-10-20', 2, 2, 8, 0),
(25, '2022-10-10', '2022-10-27', 2, 2, 9, 0),
(26, '2022-10-03', '2022-10-26', 2, 2, 10, 0),
(27, '2022-10-10', '2022-10-27', 2, 2, 11, 0),
(28, '2022-10-20', '2022-10-20', 5, 2, 12, 0),
(29, '2022-10-10', '2022-10-27', 2, 2, 13, 3),
(30, '2022-10-11', '2022-10-13', 1, 2, 14, 3),
(31, '2022-10-10', '2022-10-26', 1, 2, 15, 3),
(32, '2022-10-11', '2022-11-04', 1, 2, 32, 3),
(33, '2022-10-11', '2022-11-04', 1, 2, 33, 3),
(34, '2022-10-11', '2022-10-26', 1, 2, 16, 3),
(35, '2022-10-11', '2022-10-31', 1, 2, 17, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `Roles` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `Roles`) VALUES
(1, 'Administrador'),
(2, 'Bibliotecario'),
(3, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombre1` varchar(150) NOT NULL,
  `Nombre2` varchar(150) DEFAULT NULL,
  `Apellido1` varchar(150) NOT NULL,
  `Apellido2` varchar(150) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `Usuario` varchar(150) NOT NULL,
  `Passwordd` varchar(150) NOT NULL,
  `Roles_idRoles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `correo`, `Usuario`, `Passwordd`, `Roles_idRoles`) VALUES
(2, 'Alejandrooo', '', 'Morales', 'Loaiza', '3002082778', 'alejandro.morales9@misena.edu.co', 'alejo123', '12345', 1),
(3, 'maicol', 'nadres', 'sanchez', 'woeijfweif', '2143234', 'jowef@gmail.com', 'maicol123', '12345', 2),
(30, 'carlos', 'daniel', 'millan', 'varela', '3002982211', 'fr@gmail.carlos@gmail.com', 'carlos123', '12345', 1),
(32, 'karen', 'sofia', 'ospina', 'hernandez', '3002982211', 'fr@gmail.com', 'alejo', '1122', 1),
(33, 'ergerg', 'erheth', 'ethteh', 'thrth', 'athth', 'ergreg@gmail.com', 'ewrwgrg', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD PRIMARY KEY (`idDetallePrestamo`),
  ADD KEY `idLibro` (`idLibro`,`idCliente`,`idPrestamo`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `detalleprestamo_ibfk_3` (`idPrestamo`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`idEditoriales`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `fk_Libros_Editoriales1` (`Editoriales_idEditoriales`);

--
-- Indices de la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  ADD PRIMARY KEY (`idPenalizacion`),
  ADD KEY `idUsuarios` (`idUsuarios`),
  ADD KEY `idPrestamo` (`idPrestamo`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`idPrestamo`),
  ADD KEY `fk_Prestamos_Usuarios1` (`Prestador`),
  ADD KEY `idDetalle` (`idDetalle`),
  ADD KEY `Clientes_idCliente` (`Clientes_idCliente`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_Usuarios_Roles` (`Roles_idRoles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  MODIFY `idDetallePrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `idEditoriales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  MODIFY `idPenalizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `idPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD CONSTRAINT `detalleprestamo_ibfk_1` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`),
  ADD CONSTRAINT `detalleprestamo_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `detalleprestamo_ibfk_3` FOREIGN KEY (`idPrestamo`) REFERENCES `prestamos` (`idPrestamo`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_Libros_Editoriales1` FOREIGN KEY (`Editoriales_idEditoriales`) REFERENCES `editoriales` (`idEditoriales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  ADD CONSTRAINT `penalizacion_ibfk_2` FOREIGN KEY (`idPrestamo`) REFERENCES `prestamos` (`idPrestamo`),
  ADD CONSTRAINT `penalizacion_ibfk_3` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `fk_Prestamos_Usuarios1` FOREIGN KEY (`Prestador`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Roles` FOREIGN KEY (`Roles_idRoles`) REFERENCES `roles` (`idRoles`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
