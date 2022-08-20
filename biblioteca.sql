-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-08-2022 a las 16:05:01
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
(1, 11000, 'Mario', 'andres', 'ocampo', 'castaneda', '3207897958', 'andres@gmail.com', 1, 9),
(3, 1006334975, 'alejandro', NULL, 'morales', 'loaiza', '3002082778', 'alejandro@gmail.com', 2, 1);

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
(1, 'Bubok', 1),
(2, 'aguaAzul', 1),
(3, 'colombia', 1),
(4, 'colombo', 1);

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
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `Nombre`, `Editoriales_idEditoriales`, `fechaDeIngreso`, `Autor`, `FechaPublicacion`, `Cantidad`) VALUES
(1, 'Don Quijote de la Mancha', 1, '2022-08-03', 'Miguel de Cervantes', '2022-08-03', 5),
(2, 'pinocho', 3, '2022-08-07', 'pepe', '2022-08-22', 10),
(3, 'los siete enanitos', 2, '2022-08-01', 'pepito', '2022-08-21', 50),
(6, 'ballena', 4, '2022-08-01', 'andres', '2022-08-12', 2);

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
(21, '2022-08-18', '2022-08-25', 1, 2),
(22, '2022-08-19', '2022-08-31', 1, 2),
(23, '2022-08-18', '2022-08-31', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `idPrestamo` int(11) NOT NULL,
  `Libros_idLibro` int(11) NOT NULL,
  `Clientes_idCliente` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaEntrega` date NOT NULL,
  `cantidadLibros` int(11) NOT NULL,
  `Prestador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`idPrestamo`, `Libros_idLibro`, `Clientes_idCliente`, `FechaInicio`, `FechaEntrega`, `cantidadLibros`, `Prestador`) VALUES
(1, 1, 1, '2022-08-03', '2022-08-11', 0, 3),
(2, 2, 3, '2022-08-16', '2022-08-28', 2, 2);

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
(2, 'Alejandro', NULL, 'Morales', 'Loaiza', '3002082778', 'alejandro.morales9@misena.edu.co', 'alejo123', '12345', 1),
(3, 'maicol', 'nadres', 'sanchez', 'woeijfweif', '2143234', 'jowef@gmail.com', 'maicol123', '12345', 2),
(5, 'melisa', 'andrea', 'jimenez', ' sanchez', '3002082455', 'karen@gmail.com', 'karen123', '12345', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

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
  ADD KEY `fk_Prestamos_Libros1` (`Libros_idLibro`),
  ADD KEY `fk_Prestamos_Clientes1` (`Clientes_idCliente`),
  ADD KEY `fk_Prestamos_Usuarios1` (`Prestador`);

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `idEditoriales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  MODIFY `idPenalizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `idPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

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
  ADD CONSTRAINT `fk_Prestamos_Clientes1` FOREIGN KEY (`Clientes_idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prestamos_Libros1` FOREIGN KEY (`Libros_idLibro`) REFERENCES `libros` (`idLibro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
